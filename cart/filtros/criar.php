<?php

ob_start();
require('../sheep_core/config.php');

$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);

?>