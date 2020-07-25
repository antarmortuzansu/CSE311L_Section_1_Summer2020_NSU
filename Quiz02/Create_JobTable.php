<?php


$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Cse311');
if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "CREATE TABLE Jobs(
Job_id varchar(10) Not Null,
Job_Title varchar(35) Not Null,
Min_Salary int(6),
Max_salary int(6)

)";

if (mysqli_query($conn, $sql)) {
    echo "Table Created";
} else {
    echo "Error: Could not create Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);
