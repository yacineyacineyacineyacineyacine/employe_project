<?php
ob_start();
session_start();
  // create variable for dynamic drirectory separator
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
  // create variable contaning the root of the front folder
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS ."templates" . DS . "front" );
  // create variable contaning the root of back folder
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS ."templates" . DS . "back" );
  // create varibale contaning some staff for the DB connection;
defined("DB_HOST") ? null : define("DB_HOST", "localhost" );
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "emp_db");
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
require_once("functions.php");

?>