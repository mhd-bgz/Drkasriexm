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

// save bdd
$message = "";
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $product_id = $_POST['product_id'];
