<?php

$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="userAccounts";

if (!$con = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname))
{
    die("failed to connect!");
}