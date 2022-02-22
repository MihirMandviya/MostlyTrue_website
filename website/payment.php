<?php
session_start();
include('dbcon.php');
if(isset($_POST['payment_id']))
{
    if(isset($_SESSION['Login'])){
        $id=$_SESSION["id"];
        $payment_id=$_POST['payment_id'];
        $amt=150;
        $adden_on=date('Y-m-d h:i:s');
        mysqli_query($conn,"INSERT INTO `payment` (`payment_id`, `amount`, `date`) VALUES ('$payment_id', '$amt', '$adden_on')");

        mysqli_query($conn,"INSERT INTO `payuser_join` (`RUserID`, `payment_id`) VALUES ('$id','$payment_id')");
    }
    else
    {
        $payment_id=$_POST['payment_id'];
        $amt=150;
        $adden_on=date('Y-m-d h:i:s');
        mysqli_query($conn,"INSERT INTO `payment` (`payment_id`, `amount`, `date`) VALUES ('$payment_id', '$amt', '$adden_on')");
    }
    

}
?>