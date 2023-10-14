<?php
// database connection file
$databaseHost = 'localhost:3308';//or localhost
$databaseName = 'book_store'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// if(! $conn )  
// {  
//   die('Could not connect: ' . mysqli_error());  
// }  
// echo 'Connected successfully';  
// mysqli_close($conn); 
?>