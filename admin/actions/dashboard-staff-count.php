<?php

$servername="127.0.0.1";
$uname="sistemas";
$pass="sistemas";
$db="gymnsb";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM staffs";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>