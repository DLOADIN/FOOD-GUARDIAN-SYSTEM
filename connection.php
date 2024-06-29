<?php
session_start();
$con=mysqli_connect('localhost','root','','food_guardian');

if(!$con){
  die(mysqli_error($con));
}
?>
