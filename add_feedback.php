<?php
$email = $_POST['email'];
$message = $_POST['message'];
$rating = $_POST['rating'];

$servername = "localhost";
$username = "root";
$password = "5F108q~12";
$dbname = "kaito";

try{
    $conn = new mysqli($servername, $username, $password, $dbname);

    $stmt = $conn->prepare("INSERT INTO feedback (email, review, rating) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $message, $rating);
    
    if ($stmt->execute()) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $stmt->error;
    }
}
catch(PDOException $e) {}
$conn->close();
?>
