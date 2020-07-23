<?php


$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26');

if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "CREATE DATABASE Homework_002";

if (mysqli_query($conn, $sql)) {
    echo "Database Created";
} else {
    echo "Error: Could not create Database" . mysqli_connect_error($conn);
}

mysqli_close($conn);
