<?php
/*
// ****************************************************
// ThEP Admin Panel 1.0.1 beta
//
|
|
|
*/
// ****************************************************

session_start();

// Config
require_once 'config.php';
$conf = new config();

// Database Connection
$conf->db_connect();

// Set timzone : Bkk +7---------------
$conf->db_set_time_zone();

// Controllers
require_once $conf->inc_file('controllers');

// Functions
require_once 'functions.php';
?>