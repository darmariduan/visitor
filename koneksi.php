<?php
$mysqli = new mysqli("localhost", "root", "mysql", "visitor");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>
