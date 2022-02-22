<?php 
include('dbcon.php');
$cid=$_GET['id'];
$query=mysqli_query($conn,"DELETE from contact WHERE ID=$cid; ");
if($query){
    header('Location:contact_admin.php');
}
?>