<?php

session_start();

    if(isset($_POST['change_password'])){
        include 'dbcon.php';
        $current=$_POST['curpass'];
        $new=$_POST["newpass"];
        $cnf=$_POST["cnfpass"];

        $enp_password = password_hash($new, PASSWORD_BCRYPT);
        
        if(isset($_SESSION['Admin_Login'])){
           $id=$_SESSION["id"];
        }
        
        $sql = "SELECT * FROM `admin` WHERE UserName= '$id'";
        $rs = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($rs);
        
        if($numRows  == 1){
            $row = mysqli_fetch_assoc($rs);
            if(password_verify($current,$row['Password'])){
                $result_new=mysqli_query($conn,"UPDATE admin set Password= '$enp_password' where UserName= '$id'");
            
                if($result_new){
                    echo '<script>alert("Password changed sucessfully !")</script>';
                    echo '<script>  window.location.href="change_password_admin.php" </script>';
                }else{
                    echo '<script>alert("Something went wrong! Try Again")</script>';
                    echo '<script>  window.location.href="change_password_admin.php" </script>';
                }
            }
            else{
                echo '<script>alert("Invalid current password !")</script>';
                echo '<script>  window.location.href="change_password_admin.php" </script>';
            }
        }
        else{
            echo '<script>alert("Invalid current password !")</script>';
            echo '<script>  window.location.href="change_password_admin.php" </script>';
        }
        /*$result = mysqli_query($conn, "SELECT * FROM `admin` WHERE UserName= '$id' and Password='$dep_password' ");
        $var= mysqli_num_rows($result);
        
        if (mysqli_num_rows($result)>0) {
            $result_new=mysqli_query($conn,"UPDATE admin set Password= '$enp_password' where UserName= '$id' and Password='$dep_password'");
            
            if($result_new){
                echo '<script>alert("Password changed sucessfully !")</script>';
                echo '<script>  window.location.href="change_password_admin.php" </script>';
            }
            else{
                echo '<script>alert("Invalid current password !")</script>';
            }
        } 
        else{
            echo '<script>alert("Invalid current password !")</script>';
            echo '<script>  window.location.href="change_password_admin.php" </script>';
        }*/
        
    }
    
?>