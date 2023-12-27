<?php
$servername = "localhost";
$username = "root@localhost"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "art_gallery"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, mobile, email) VALUES ('$username', '$password', '$mobile', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



