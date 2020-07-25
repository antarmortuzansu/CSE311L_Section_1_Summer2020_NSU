<?php



$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','cse311');

if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "INSERT INTO Jobs(Job_id, Job_Title, Min_Salary, Max_Salary) 
VALUES 
('Ad_Press', 'Admin VP', 20000, 40000),
('Ad_VP', 'Admin Assistant', 15000, 30000),
('Ad_ASST', 'Accounting Manager', 3000, 6000),
('Ac_Mgr', 'Public Accountant', 8200, 16000),
('Ac_Account', 'Sales Manager', 4200, 9000),
('SA_Man', 'Sales Manager', 10000, 20000),
('SA_REP', 'Sales representative', 6000, 12000)


";

if (mysqli_query($conn, $sql)) {
    echo "Row Inserted in Table";
} else {
    echo "Error: Could not Insert into Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);


