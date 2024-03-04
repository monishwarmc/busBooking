<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "booking";
$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['fname'];
$number = $_POST['phone'];
$ddate = date('Y-m-d', strtotime($_POST['ddate']));
$sperson = $_POST['person'];
$lname = $_POST['lname'];
$eid = $_POST['email'];
$adate = date('Y-m-d', strtotime($_POST['adate']));
$sbus = $_POST['bus'];

$sql = "INSERT INTO data (fname, phone, ddate, guest, lname, email, adate, bus) 
        VALUES ('$name', '$number', '$ddate', '$sperson', '$lname', '$eid', '$adate', '$sbus')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Booking Successfully');</script>";
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
}

$conn->close();
?>
