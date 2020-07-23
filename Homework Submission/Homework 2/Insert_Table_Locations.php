<?php



$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Homework_002');

if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "INSERT INTO Locations(Location_id , Street_Address , Postal_Code , City , State_Province , Country_ID) 
VALUES 
(1400, '2014 Jabberwocky Rd', 26192, 'Southlake', 'Texas', 'US'),
(1500, '2011 Interiors Blvd',  99236, 'South San Francisco', 'California', 'US'),
(1700, '2004 Charade Rd', 98199, 'Seattle', 'Washington', 'US'),
(1800, '460 Bloor St. W' , 'ON M5S 1X8', 'Toronto', 'Ontario', 'CA'),
(2500, 'Magdalane Centre- The Oxford Sc. Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'UK')";

if (mysqli_query($conn, $sql)) {
    echo "Row Inserted in Table";
} else {
    echo "Error: Could not Insert into Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);


