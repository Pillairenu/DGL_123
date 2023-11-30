<?php

// Define the project root variable

//hardcoded path
//$proj_root = '/DGL_123/milestone_3';

//Extract the value from $_SERVER superglobal
$proj_root = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));


?>