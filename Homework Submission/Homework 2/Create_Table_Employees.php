<?php


$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Homework_002');
if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "CREATE TABLE Employees(
Employee_id int(6) Primary Key Not Null,
First_Name varchar(20),
Last_Name varchar(25) Not Null,
Email varchar(25) Not Null,
Phone_number varchar(15),
Hire_Date date Not Null,
Job_Id varchar(10) Not Null,
Salary int(8),
Commission_pct int(2),
Manager_id int(6),
Department_id int(4) 


)";

if (mysqli_query($conn, $sql)) {
    echo "Table Created";
} else {
    echo "Error: Could not create Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);
