<?php



$conn = mysqli_connect('localhost' , 'Heisenberg', 'Antarmeth26','Homework_002');

if ($error = $conn->connect_error) {
    die("Not Connected, error: " . $error);
}

$sql = "INSERT INTO Employees(Employee_id, First_Name, Last_Name, Email, Phone_number, Hire_Date, Job_Id, Salary, Commission_pct, Manager_id, Department_id) 
VALUES (
(100. Steven, SKING, 515.123.4567, 17-JUN-87, AD_Pres, 24000, , ,90),
(101, Neena, Kochhar, NKOCHHAR, 515.123.4568, 21-SEP-89, AD_VP, 17000, ,100, 90),
(102, Lex, De Haan, LDEHAAN, 515.23.5469, 13-JAN-93, AD_VP, 17000, , 100, 90),
(103,Alexandar, Hunold, AHUNOLD, 50.423.4567, 03-JAN-90, IT_PROG, 9000, , 102, 60),
(104,Bruce, Ernst	, BERNST, 590.423.4568, 21-MAY-91, IT_PROG, 6000, , 10, 60),
(107, Diana, Lorentz, DLORENTZ, 590.423.5567, 07-FEB-99, IT_PROG, 4200, , 103, 60),
(124, Kevin,  Mourgo, KMOURGOS, 650.123.5234, 16-NOV-99, ST_MAN, 5800, , 100, 50) 
(141, Trenna, Rajs, TRAJS, 650.121.8009, 17-OCT-95, ST_CLERK, 3500, ,124, 50),
(142, Curtis, Davies, CDAVIES, 650.121.2994, 29-JAN-97, ST_CLERK, 3100, , 124, 50),
(143, Randall, Maths, RMATOS, 650.121.2874, 15-MAR-98, ST_CLERK, 2600, , 124, 50),
(144, Peter	, Vargas, PVARGAS, 650.121.2004, 09-JUL-98, ST_CLERK, 2500, , 124, 50),
(149, Eleni	, Zlotkey, ELLOTKEY, 011.44.1344.429018, 29-JAN-00, ISA_MAN, 10500, .2, 100, 80),
(174, Ellen	, Abel, EABEL, 011.44.1644.429267, 11-MAY-96, SA_REP, 1100, .3 , 149, 80),
(176, Jonathon, JTAYLOR, 011.44.1644.429265, 24-MAR-98 , ISA_REP, 8600 ,  .2, 149, 80), 
(178, Kimberely, Grant, KGRANT, 011.44.1644.429263, 24-MAY-99 , SA_REP, 7000, .15, 149,  ),
(200, Jennifer, Whalen, JWHALEN, 1515.123.4444, 17-SEP-87, AD_ASST, 4400, , 101, 10),
(201, Michael, Hartstein, MHARTSTE, 1515.123.5555, 17-FEB-96, MK_MAN_MK, 13000, , 100, 20),
(202, Pat, Fay, IPFAY, 1603.123.6666, 17-AUG-97, REP, 6000, ,201,20),
(205, Shelley, Higgins, SHIGGINS, 515.123.8080, 07-JUN-94, AC_MGR, 12000, , 101, 110),
(206, William, Gietz, WGIETZ, 1515.123.8181, 07-JUN-94, AC_ACCOUNT, 8300, ,205, 119)


)";

if (mysqli_query($conn, $sql)) {
    echo "Row Inserted in Table";
} else {
    echo "Error: Could not Insert into Table. " . mysqli_connect_error($conn) . " " . mysqli_error($conn);
}

mysqli_close($conn);


