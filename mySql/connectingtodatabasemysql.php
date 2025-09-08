<?php

@$link = mysqli_connect("localhost", "root", "", "schools");

if (mysqli_connect_error()) {
    die("Connection failed! " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}

?>