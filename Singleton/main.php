<?php

use Database\Database;

require 'autoloader.php';

$database1 = Database::getInstance();
$database2 = Database::getInstance();
$database3 = Database::getInstance();
$database4 = Database::getInstance();

// The Database constructor will be called only once.
/*
DATABASE CONSTRUCTOR
*/
