<?php
$link = mysqli_connect('localhost', 'root', '', 'VS_CODE_TEST')

if($link == false)
{
    die("Error= Could not connect".mysqli_connect_error());

}

$sql = " INSERT TABLE test_table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

    if(mysqli_query($link, $sqli))
    {
        echo "Created"
    }
    else {
        echo "Error: Not Created" .mysqli_error($link)
    }
    
    mysqli_close($link)
    
    ?>