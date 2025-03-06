<?php
$conn = mysqli_connect("localhost","root","","test") or die("connection failed");

$sql = "SELECT * FROM students WHERE id = {$_POST['id']}";
$result = mysqli_query($conn,$sql) or die("sql query failed");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);   // to convert multidimensional array from the database    MYSQLI_ASSOC to convert multidimensional array to associative array 

echo json_encode($output); //to convert json object 
// echo "<pre>";
// print_r($output); 
// echo "</pre>";
?>