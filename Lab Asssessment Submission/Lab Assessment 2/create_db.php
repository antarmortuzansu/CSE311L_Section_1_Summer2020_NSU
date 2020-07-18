<?php
$link = mysqli_connect('localhost', 'root', ''); 
if ($link==false)
{
    die("Error".mysqli_connect_error());

}
$sql= "CREATE DATABSE VS_CODE_TEST"

if(mysqli_query($link, $sqli))
{
    echo "Created"
}
else {
    echo "Error: Not Created" .mysqli_error($link)
}

mysqli_close($link)

?>