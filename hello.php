<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "java2017";

$name = $_POST['name'];
$mail = $_POST['mail'];
$branch = $_POST['branch'];
$subject = $_POST['subject'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO formdata (name, mail, branch, subject) VALUES ($name, $mail, $branch, $subject)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>