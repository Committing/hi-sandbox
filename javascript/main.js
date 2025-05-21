





var cubename = 'cube';

var latest_box_data = [];

var autoload = false;

var ajax_delay = 1000;

var sphere_size = 2;

var center_focus = [127.5, 127.5, 127.5];








function loadNextFrame(autoplay = false, reset_data = false) {

    $('.frame_loader').addClass('show_loader');

    $('.next_frame').addClass('noclick');

    $.ajax({
        type: 'POST',
        url: '/loop.php',
        data: {
            reset_data: reset_data
        },
        beforeSend: function() {
            // console.log('Sending request...');
        },
        success: function(data) {



            latest_box_data = [];

            var data = JSON.parse(data);


            $('.frame_data .frame_count').html('Frame: ' + data.frame_count);
            $('.frame_data .frame_loader').show();


            latest_box_data[cubename] = data.box.main_cube;

            // clear cube before adding new data in
            clearBigCube(cubename);

            for (let i = 0; i < data.box.main_cube.length; i++) {

                const item = data.box.main_cube[i];

                try {
                    if (item.type == 'line') {
                        addBigLine(cubename, ...item.position[0], ...item.position[1]);
                    } else {
                        addBigSphere(cubename, ...item.position);
                    }
                } catch (err) {
                    console.error("Error at index:", i, err);
                }


            }


            setSphereSize(sphere_size);


            if (autoplay === true && autoload === true) {

                setTimeout(function() {
                    loadNextFrame(true);
                }, ajax_delay);

            } else {

                $('.next_frame').removeClass('noclick');

            }



            $('.frame_loader').removeClass('show_loader');


        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });

}


function autoLoadNextFrame() {
    autoload = true;
    loadNextFrame(true);
}

function stopAutoLoadNextFrame() {
    autoload = false;
}

function hard_reset() {
    autoload = false;
    loadNextFrame(false, true);
}

function setDelay(delay = 1000) {
    ajax_delay = delay;
}

setInterval(function() {
    updateBigCubeCenter(cubes);
}, 5000);

function updateBigCubeCenter(cubes) {
  let total = { x: 0, y: 0, z: 0 };
  let count = 0;

  for (let name in cubes) {
    let pos = getCubePosition(name);
    if (!pos) continue;
    total.x += pos.x;
    total.y += pos.y;
    total.z += pos.z;
    count++;
  }

  if (count === 0) return null;

  // Compute the average once
  const center = {
    x: total.x / count,
    y: total.y / count,
    z: total.z / count
  };

  // Now correctly update your global
  center_focus = [center.x + 127.5, center.y + 127.5, center.z + 127.5];

  return center;
}
function resetCamera() {
    moveCameraToAbsolutePosition(375.8890222426527, 266.3958161399071, 762.936539623091, -0.21519860729762202, 0.3647876340543965, 0.07782230458101305);
    focusCameraToPosition(center_focus[0], center_focus[1], center_focus[2]);
}




$(function() {



    animate();

    addBigCube(cubename, 0, 0, 0);


    loadNextFrame();

    resetCamera();
    focusCamera(cubename);
    togglePerspective();



    $('.focus_center').click(function() {
        focusCameraToPosition(center_focus[0], center_focus[1], center_focus[2]);
    });


    $('.button_selection button').click(function() {
        var buttons = $(this).closest('.button_selection').find('button');
        buttons.removeClass('selected');
        $(this).addClass('selected');
    });


});