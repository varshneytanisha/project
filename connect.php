<?php
$fullName = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];
//database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("Insert into registration(fullName,email,password) values(?,?,?)");
    $stmt->bind_param("sss", $fullName, $email, $password);
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>