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

<body class="order">
       <?php include 'header.html';?>
  <div class="cont">
    <div class="order-box">
        <h2 class="h2-class">Place Your Order</h2>
        <form action="pageorder.php" method="POST">
            <label>Full Name:</label>
            <input type="text" name="full_name" required>

            <label>Phone:</label>
            <input type="text" name="phone" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Product ID:</label>
            <input type="text" name="product_id" required>

            <input type="submit" name="submit" value="Submit Order">
        </form>
