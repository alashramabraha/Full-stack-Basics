<?php
$link = mysqli_connect("127.0.0.1:3307", "root", "", "schools");

// Check connection
if (!$link) {
    die("Connection failed! " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>
