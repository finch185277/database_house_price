
<?php

session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test_project";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysql->set_charset("utf8");

?>
