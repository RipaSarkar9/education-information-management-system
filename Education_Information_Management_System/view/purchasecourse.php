<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "testsite";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "SELECT  uname,fullname FROM course_info";


$result = mysqli_query($connect, $query);
//$unique = array_unique($result);

$options = "";
$options1 = "";


while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[0]";
    $options1 = $options1."$row[1]"; 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin-left:600px }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Purchase Course</h1>
    </div>
    <div class="wrapper">
    <!-- <form action="../controller/submitaptv2.php" method="post"> -->

        <form action="" method=" ">

    <div class="form-group">
                <label for="user">Course Name and Course CODE: </label>
                <select type="text" name="yop" class="form-control">    
                   <?php echo $options;?>  
                
                </select>
    </div>

   


    <div class="form-group">
                <label for="user">Make Payment </label>
                <select type="text" name="yop1" class="form-control">    
                <option value="credit">Credit Card</option>
                <option value="bikash">Bkash</option>
                <option value="mercedes">Nagad</option>
  
                </select>
    </div>







    <div class="form-group">
                <input type="submit" class="btn btn-warning" align="center" name="submit">
            </div>
    </form>

    </div>

    <?php require "../controller/config.php"?>


    </body>
    </html>