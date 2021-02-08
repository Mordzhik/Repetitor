<?php
$connection = mysqli_connect('localhost', 'marzh', '12345');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'project');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}