<?php session_start();?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search History | Mostly True</title>
    <!--<link rel="stylesheet" href="css/searchhistory_user.css">-->
    <link href="css/searchhistory_user.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

        <!-- Fevicon -->
        <link rel="shortcut icon" href="img/website_logo.webp" type="image/x-icon" />

     <!-- Google Fonts -->
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class=icon><img style="width:40px; height:40px;" src="img/logo.webp"></span>
                        <span class="title" style="font-weight: 900; font-size: 30px;top:3px;">
                            <span style="font-family: 'Cabin', sans-serif;">Mostly</span><span style="font-family: 'Courgette', cursive;">true</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="dashboard_user.php">
                        <span class=icon><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title" >Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="searchhistory_user.php">
                        <span class=icon><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title" >Search History</span>
                    </a>
                </li>
                <li>
                    <a href="donation_user.php">
                        <span class=icon><ion-icon name="cash-outline"></ion-icon></span>
                        <span class="title">Donation</span>
                    </a>
                </li>
                <li>
                    <a href="change_password_user.php">
                        <span class=icon><ion-icon name="lock-open-outline"></ion-icon></span>
                        <span class="title">Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="help_user.php">
                        <span class=icon><ion-icon name="help-outline"></ion-icon></span>
                        <span class="title">FAQs</span>
                    </a>
                </li>
                <!--
                    <li>
                        <a href="#">
                            <span class=icon><ion-icon name="lock-closed-outline"></ion-icon></span>
                                <span class="title">Password</span>
                        </a>
                    </li>-->
                <li>
                    <a href="../logout.php">
                        <span class=icon><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!--Search
                <div class="search">
                    <label>
                                <input type="text" placeholder="Search here">
                                <i class="material-icons" style="position:absolute; left:1.5vh;top:-4px;">search</i>
                            </label>
                </div>-->
                <!-- userImg-->
                <div class="username">
                    <?php  
                        /*session_start();*/
                        if(isset($_SESSION['Login']))
                        {
                            echo '<h3> Welcome '. $_SESSION["Name"] . '</h3>';
                        }
                    ?>
                </div>
                <div class="user">
                <?php echo '<img src="https://avatars.dicebear.com/api/initials/'.$_SESSION["Name"].'.svg">' ?>
                </div>
            </div>

            <div class="details">
                <!-- order details list-->
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Search History</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                    <?php
                        include('dbcon.php');
                        $id=$_SESSION["id"];
                        $query=mysqli_query($conn,"SELECT search_result.SearchID,search_result.Headline,search_result.Result,search_result.Date FROM ruser_join, search_result WHERE ruser_join.SearchID=search_result.SearchID AND ruser_join.RUserID=$id ORDER BY search_result.Date DESC")or die(mysqli_error($conn));
                        $srno=1;
                        if (mysqli_num_rows($query) == 0) {
                            echo "
                                    <h1 style='text-align:center;'>No result found</h1>
                                    ";            
                         }
                        else{echo '    
                        <thead>
                            <tr>
                                <td>Serial No</td>
                                <td style="width: 60%;">Headline</td>
                                <td>Result</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>';
                        
                        while ($row=mysqli_fetch_array($query)){
                            
                        $search_id=$row['SearchID'];
                        $headline=$row['Headline'];
                        $result=$row['Result'];
                        $php_date=$row['Date'];
                        $date=date("d  M  Y",strtotime($php_date));
                        
                        ?>
                            <tr>
                                
                                <td><?php echo $srno++; ?></td>
                                <td><?php echo $headline; ?></td>
                                <td><span class="result <?php echo $result; ?>"><?php echo $result; ?></span></td>
                                <td><?php echo $date; ?></td>
                               
                            </tr>
                            
                        <?php }} ?>
                        <?php 
                        for($i=0;$i<8;$i++)
                        {
                            echo ' <tr>
                            <td> </td> 
                            <td> </td> 
                            <td> </td>
                            <td> </td>
                        </tr>';
                        }
                       
                        ?>
                    
                       
                        </tbody>

                    </table>
                </div>



            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //Menu Toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main')

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        //Profile Toggle
        let profile=document.querySelector('.user');
        profile.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        //add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
</body>

</html>