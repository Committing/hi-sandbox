



var cubename = 'cube';

var latest_box_data = [];






$(function() {



    animate();

    addBigCube(cubename, 0, 0, 0);




    $.ajax({
        type: 'POST',
        url: '/loop.php',
        data: {},
        beforeSend: function() {
            console.log('Sending request...');
        },
        success: function(data) {

            latest_box_data = [];

            var data = JSON.parse(data);

            latest_box_data['cube'] = data.box.main_cube;

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

            // console.log('Response:', data);
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });




});