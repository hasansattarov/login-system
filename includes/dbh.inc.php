<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "Pharthex123456!";
$dBName = "loginsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}