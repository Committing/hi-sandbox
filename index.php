<?php

// Official version check
$v = (int) file_get_contents('https://devil.ai/glitch_version.txt');
if ($v > 1) {
    $nv = 'Updated version at: <a target="_blank" href="https://devil.ai/latest_glitch">https://devil.ai/latest_glitch</a>';
}

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>HI Sandbox Area</title>
    <link rel="stylesheet" href="/css/styles.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
    <body>

        <div class="latest_version_check"></div>

        <canvas id="cube"></canvas>

        <div class="frame_data">
            <div class="frame_loader"><img src="/images/loader_circle.svg" alt="" /></div>
            <div class="frame_count">0</div>
            <div class="new_version"><?=(isset($nv) ? $nv : '');?></div>
        </div>

        <div class="ui">

            <div class="button_selection">
                <br /><span class="tiny_title">Line opacity</span><br />
                <button onclick="setLineOpacity(0);">0</button>
                <button onclick="setLineOpacity(0.1);">0.1</button>
                <button onclick="setLineOpacity(0.15);">0.15</button>
                <button onclick="setLineOpacity(0.2);">0.2</button>
                <button onclick="setLineOpacity(0.3);">0.3</button>
                <button class="selected" onclick="setLineOpacity(0.5);">0.5</button>
                <button onclick="setLineOpacity(1);">1</button>
            </div>

            <div class="button_selection sphere_size_section">
                <br /><span class="tiny_title">Sphere size</span><br />
                <button onclick="setSphereSize(0);">0</button>
                <button class="selected" onclick="setSphereSize(1);">1</button>
                <button onclick="setSphereSize(1.5);">1.5</button>
                <button onclick="setSphereSize(2);">2</button>
                <button onclick="setSphereSize(3);">3</button>
                <button onclick="setSphereSize(5);">5</button>
                <button onclick="setSphereSize(10);">10</button>
            </div>

            <div class="button_selection">
                <br /><span class="tiny_title">Delay between frames (play)</span><br />
                <button onclick="setDelay(0);">0s</button>
                <button onclick="setDelay(300);">0.3s</button>
                <button onclick="setDelay(500);">0.5s</button>
                <button class="selected" onclick="setDelay(1000);">1s</button>
                <button onclick="setDelay(2000);">2s</button>
                <button onclick="setDelay(3000);">3s</button>
                <button onclick="setDelay(10000);">10s</button>
            </div>

            <hr />

            <button onclick="focusCamera(cubename);">focus_cube</button>

            <hr />

            <button class="toggle_edges" onclick="toggleWireFrame();">toggle_edges</button>
            <button class="toggle_edges toggle_edge_opacity" onclick="toggleWireframeOpacity();">toggle_edge_opacity</button>
            
            <button onclick="toggleClamp();">clamp_to_255_max</button>
            <button class="gradient_lines" onclick="toggleGradientLines();">toggle_gradient_lines</button>


            <button onclick="startRotating();">start_rotating</button>
            <button onclick="stopRotating();">stop_rotating</button>

            <button onclick="rotateCameraCounterClockwise();">roll_camera_left</button>
            <button onclick="rotateCameraClockwise();">roll_camera_right</button>

            <button onclick="togglePerspective();">switch_perspective</button>
            <button onclick="detatchCamera();">detatch_focus</button>
            <button class="focus_center">focus_center</button>
            <button onclick="resetCamera();">reset_camera</button>
            <hr />

            <button style="background-color: #44ff43;color: black;" class="next_frame" onclick="loadNextFrame();">Next</button>
            <button onclick="autoLoadNextFrame();">play</button>
            <button onclick="stopAutoLoadNextFrame();">stop</button>
            <button style="background-color: red;color: white;" onclick="hard_reset();">_reset_</button>

        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="/javascript/box.js?v=<?=time();?>"></script>
        <script src="/javascript/main.js?v=<?=time();?>"></script>
    </body>
</html>