<?php

# Use same logic with any language.
# For displaying in an rgb cube 2d or 3d.
# Only lines and dots

session_start(); # for looping data around
require_once('functions.php');
require_once('classes/interactor.class.php');
require_once('classes/colors.class.php');
require_once('classes/box_positions.class.php');
require_once('classes/box.class.php');
require_once('classes/vectors.class.php');


# initiate class
$i = new interactor();

$i->use_setup = isset($_POST['setup']) && ! empty($_POST['setup']) ? $_POST['setup'] : 'starting_line';

$i->loadSetup();

# If _reset_ was clicked, load first frame
$i->checkResetData();

# Load past loop's output for reiteration
$i->loadPreviousProcess();

# run the main interaction
$i->runProcesses();

# save output for next loop
$i->saveProcesses();

# output
$i->outputRepresentations();
exit;


