<?php
include('dbpayment.php');
if(isset($_POST['payment_id']))
{
    $payment_id=$_POST['payment_id'];
    $payment_status='complete';
    $adden_on=date('Y-m-d h:i:s');
    $name='Mihir';
    $amt=150;
    mysqli_query($conn,"INSERT INTO `payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES (NULL, '$name', '$amt', '$payment_status', '$payment_id', '$adden_on')");

}
?>