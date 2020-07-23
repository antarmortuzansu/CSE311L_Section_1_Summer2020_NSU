<?php


$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Homework_002');
if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "CREATE TABLE Departments(
Department_id int(10),
Department_Name varchar(30),
Manager_id int(10) Primary key,
Location_id int(10)

)";

if (mysqli_query($conn, $sql)) {
    echo "Table Created";
} else {
    echo "Error: Could not create Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);
