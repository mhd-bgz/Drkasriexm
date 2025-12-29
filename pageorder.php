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

    $sql = "INSERT INTO orders (full_name, phone, email, product_id)
            VALUES ('$full_name', '$phone', '$email', '$product_id')";

    if ($conn->query($sql) === TRUE) {
        $message = "Your orders has been submitted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="english">
    <head>
        <meta charset="UTF-8">
        <link  type="text/css" rel="stylesheet" href="mystyle.css"/>
        <title>Berry & Bloom </title>
</head>
