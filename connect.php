<?php 
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];
$quantity = $_POST['quantity'];
$orderName = $_POST['orderName'];

    // Database connection
    $conn = new mysqli('localhost','root', '', 'test');
    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
        }
    
    // Insert data into database
    $stmt=$conn ->prepare("insert into registration( firstName, email, phoneNumber, address, quantity, orderName) VALUES(?,?,?,?,?,?)");
    $stmt -> bind_param("sssssi",$firstName,$email,$phoneNumber,$address,$quantity,$orderName );
    $stmt ->execute();
    echo "Order Successful!....";
    $stmt ->close();
    $conn->close();
?>