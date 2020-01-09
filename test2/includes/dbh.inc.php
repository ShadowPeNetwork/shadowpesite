<?php

$servername = "remotemysql.com,3306";
$dBUsername = "Rj3FUTH3mU";
$dBPassword = "GCnU1xWnfR";
$dBName = "Rj3FUTH3mU";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}