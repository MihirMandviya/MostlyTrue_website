<?php session_start(); ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search History | Mostly True</title>
    <!--<link rel="stylesheet" href="css/searchhistory_admin.css">-->

    <link href="css/searchhistory_admin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

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
                    <a href="searchhistory_admin.php">
                        <span class=icon><ion-icon name="arrow-back-outline"></ion-icon></span>
                        <span class="title">Back</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard_admin.php">
                        <span class=icon><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="users_admin.php">
                        <span class=icon><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li>
                    <a href="earning_admin.php">
                        <span class=icon><ion-icon name="cash-outline"></ion-icon></span>
                        <span class="title">Earning</span>
                    </a>
                </li>
                <li>
                    <a href="contact_admin.php">
                        <span class=icon><ion-icon name="chatbubbles-outline"></ion-icon></span>
                        <span class="title">Queries</span>
                    </a>
                </li>
                <li>
                    <a href="searchhistory_admin.php">
                        <span class=icon><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">Search History</span>
                    </a>
                </li>
                <li>
                    <a href="change_password_admin.php">
                        <span class=icon><ion-icon name="lock-open-outline"></ion-icon></span>
                        <span class="title">Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="add_admin.php">
                        <span class=icon><ion-icon name="person-add"></ion-icon></span>
                        <span class="title">Add Admin</span>
                    </a>
                </li>
                <!--<li>
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
                <div class="username" >
                <?php  
    
                    if(isset($_SESSION['Admin_Login'])){
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
                    <div class="cardHeader_user">
                        <h2>Search History</h2>
                        <a href="#" class="btn_user">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Serial No</td>
                                <td style="width: 60%;">Headline</td>
                                <td>Result</td>
                                <td>Date</td>
                                <td>User</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('dbcon.php');
                        $query=mysqli_query($conn,"SELECT search_result.Headline,search_result.Result,search_result.Date FROM search_result WHERE SearchID NOT IN (SELECT search_result.SearchID FROM search_result,ruser_join WHERE search_result.SearchID=ruser_join.SearchID) ORDER BY `date` DESC")or die(mysqli_error($conn));
                        $srno=1;
                        while ($row=mysqli_fetch_array($query)){
                        //$search_id=$row['SearchID'];
                        $headline=$row['Headline'];
                        $result=$row['Result'];
                        $date=date("d  M  Y",strtotime($row['Date']));
                        $user='Anonymus';
                        ?>
                        <tr>
                            <td><?php echo $srno++; ?></td>
                            <td><?php echo $headline; ?></td>
                            <td><span class="result <?php echo $result; ?>"><?php echo $result; ?></span></td>
                            <td><?php echo $date; ?></td>
                            <td><?php echo $user; ?></td>
                        </tr>
                    <?php } ?>
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