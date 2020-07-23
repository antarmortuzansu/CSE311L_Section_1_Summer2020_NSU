<?php



$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Homework_002');

if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "INSERT INTO Departments(Department_id, Department_Name, Manager_id, Location_id) 
VALUES (
(10, Administration, 200, 1700),
(20, Marketing, 201, 1800),
(50, Shipping, 124, 1500),
(60, IT, 103, 1400),
(80, Sales, 149, 2500),
(90, Executive, 100, 1700),
(110, Accounting, 250, 1700),
(190, Contracting, 00 ,1700)

)";

if (mysqli_query($conn, $sql)) {
    echo "Row Inserted in Table";
} else {
    echo "Error: Could not Insert into Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);


