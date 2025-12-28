<?php
// bdd contact
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn-> connect_error ) {
    die("error" . $conn-> connect_error );
}
