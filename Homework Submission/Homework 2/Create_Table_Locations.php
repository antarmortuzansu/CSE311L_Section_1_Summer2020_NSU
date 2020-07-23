<?php


$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Homework_002');
if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "CREATE TABLE Locations(
Location_id int(10),
Street_Address varchar(30),
Postal_Code int(10),
City varchar(30),
State_Province varchar(30),
Country_ID varchar(4)

)";

if (mysqli_query($conn, $sql)) {
    echo "Table Created";
} else {
    echo "Error: Could not create Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);
