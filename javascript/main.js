





var cubename = 'cube';

var latest_box_data = [];
var loop_data = [];

var autoload = false;

var ajax_delay = 300;

var sphere_size = 2;

var center_focus = [127.5, 127.5, 127.5];

var frame_limit = 50;


function frame1Settings(class_settings) {

    if (class_settings.show_wireframe == 1) {
        showWireFrame();
    } else {
        hideWireFrame();
    }


    setTimeout(function() {

        resetCamera();

    }, 100);

}



function loadNextFrame(autoplay = false, reset_data = false, onload_function = false) {

    $('.frame_loader').addClass('show_loader');

    $('.next_frame, .hide_nexting').addClass('noclick');

    var send_data = {};
    send_data['reset_data'] = reset_data;
    send_data['setup'] = getParameterByName('setup');
    send_data['loop_data'] = loop_data;

    $.ajax({
        type: 'POST',
        url: '/loop.php',
        data: send_data,
        beforeSend: function() {
            // console.log('Sending request...');
        },
        success: function(data) {



            latest_box_data = [];

            var data = JSON.parse(data);

            var class_settings = data.interactor_settings;

            loop_data = data.loop_data;


            if (class_settings.disable_looping === true) {
                $('.noprocess').hide();
            }


            // build buttons to all switch setups
            if ( $('.switch_links').is(':empty') ) {

                for (var name of class_settings['supported_vectors']) {

                    var selected = '';
                    if (name == class_settings['use_setup']) {
                        selected = 'selected';
                    }

                    $('.switch_links').append('<button class="' + selected + '" onclick="location.href=\'?setup=' + name + '\'">' + name + '</button>');

                }

            }


            // stop from playing every x frames
            if (data.frame_count % frame_limit === 0) {
                stopAutoLoadNextFrame();
            }


            $('.frame_data .frame_count').html('Frame: ' + (data.frame_count == null ? 0 : data.frame_count));
            $('.frame_data .frame_loader').show();


            latest_box_data[cubename] = data.box.main_cube;

            // clear cube before adding new data in
            clearBigCube(cubename);

            if (class_settings['duplicate_cube'] == true) {

                if (cubeExists(cubename+'_dupe')) {

                    clearBigCube(cubename+'_dupe');

                } else {

                    addBigCube(cubename+'_dupe', 255, 0, 0);

                    rotateBigCube(cubename+'_dupe', { y: (-90 * Math.PI) / 180 });

                }

            }

            for (let i = 0; i < data.box.main_cube.length; i++) {

                const item = data.box.main_cube[i];

                try {
                    if (item.type == 'line') {

                        addBigLine(cubename, ...item.position[0], ...item.position[1]);
                        if (class_settings['duplicate_cube'] == true) { addBigLine(cubename+'_dupe', ...item.position[0], ...item.position[1]); }

                    } else {

                        addBigSphere(cubename, ...item.position);
                        if (class_settings['duplicate_cube'] == true) { addBigSphere(cubename+'_dupe', ...item.position); }

                    }
                } catch (err) {
                    console.error("Error at index:", i, err);
                }


            }


            setSphereSize(sphere_size);


            if (data.frame_count == 1 && onload_function === true) {
                frame1Settings(class_settings);
            }


            if (autoplay === true && autoload === true) {

                setTimeout(function() {
                    loadNextFrame(true);
                }, ajax_delay);

            } else {

                $('.next_frame, .hide_nexting').removeClass('noclick');

            }


            $('.frame_loader').removeClass('show_loader');
            
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });

}

function getParameterByName(name) {
    const url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
    const results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function autoLoadNextFrame() {
    autoload = true;
    loadNextFrame(true);
}

function stopAutoLoadNextFrame() {
    autoload = false;
}

function hard_reset() {

    loop_data = [];

    stopAutoLoadNextFrame()
    setTimeout(function() {
        loadNextFrame(false, true);
    }, 100);
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

function resetCamera(cubename = '') {

    if (getParameterByName('setup') == 'hi') {

        updateBigCubeCenter(cubes);
        moveCameraToAbsolutePosition(253.05465012889428, 129.44022457487128, 827.219639610037, -0.002772842141502365, -0.002780177586649371, -8.470362035361671e-22);
        focusCameraToPosition(center_focus[0], center_focus[1], center_focus[2]);

    } else if (getParameterByName('setup') == 'thinking_face') {

        updateBigCubeCenter(cubes);
        moveCameraToAbsolutePosition(125.85180139041015, 128.08330154342923, 823.7511710587299, -0.0008377720524533236, -0.0023672427413462386, 0);
        focusCameraToPosition(center_focus[0], center_focus[1], center_focus[2]);

    } else {
        moveCameraToAbsolutePosition(375.8890222426527, 266.3958161399071, 762.936539623091, -0.21519860729762202, 0.3647876340543965, 0.07782230458101305);
        focusCameraToPosition(center_focus[0], center_focus[1], center_focus[2]);
        focusCamera(cubename);
    }

}




$(function() {



    animate();

    addBigCube(cubename, 0, 0, 0);


    loadNextFrame(false, true, true);
    togglePerspective();




    $('.focus_center').click(function() {
        focusCameraToPosition(center_focus[0], center_focus[1], center_focus[2]);
    });


    $('.button_selection button').click(function() {
        var buttons = $(this).closest('.button_selection').find('button');
        buttons.removeClass('selected');
        $(this).addClass('selected');
    });


    $('.mobile_menu_btn').click(function() {
        $('.ui').toggleClass('show_mobile_menu');
    });



    // force get param on glitch.com
    if ( ! getParameterByName('setup') ) {
        window.location.href = window.location.pathname + '?setup=hi';
    }


    if ( getParameterByName('delay') ) {
        ajax_delay = parseInt(getParameterByName('delay'));
        $('[onclick="setDelay(' + ajax_delay + ');"]').trigger('click');
    }

    if ( getParameterByName('limit') ) {
        frame_limit = parseInt(getParameterByName('limit'));
        $('.frame_stop_number').html(frame_limit);
    }


});