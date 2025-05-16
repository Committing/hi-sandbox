





var cubename = 'cube';

var latest_box_data = [];

var autoload = false;

var ajax_delay = 1000;

var sphere_size = 2;


function loadNextFrame(autoplay = false, reset_data = false) {

    $('.next_frame').addClass('noclick');

    $.ajax({
        type: 'POST',
        url: '/loop.php',
        data: {
            reset_data: reset_data
        },
        beforeSend: function() {
            console.log('Sending request...');
        },
        success: function(data) {



            latest_box_data = [];

            var data = JSON.parse(data);






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







$(function() {



    animate();

    addBigCube(cubename, 0, 0, 0);


    loadNextFrame();
    focusCamera(cubename)






    // ajax call
    // $('.latest_version_check').show();


// button_selection


});