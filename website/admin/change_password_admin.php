<?php session_start(); ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password | Mostly True</title>    
    
    <link href="css/change_password_admin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

     <!-- Fevicon -->
     <link rel="shortcut icon" href="img/website_logo.webp" type="image/x-icon" />

     <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <style>

.change_eye{
    position: absolute;
    left: 80vh;
    transform: translate(0, -50%);
    top: 50%;
    cursor: pointer;
    color: #7a797e;
}
.change_eye2{
    position: absolute;
    left: 80vh;
    transform: translate(0, -50%);
    top: 53%;
    cursor: pointer;
    color: #7a797e;
}
</style>
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
                    <div class="cardHeader">
                       <h2>Change Password</h2>
                         
                    </div>
                    <form action="change_password.php" class="change_password_form" method="post" onsubmit="return validate();">
                        <div class="change_password_div">
                        <span class="change_password">Current Password :</span><input class="change_password_input" type="text" placeholder="Current Password" name="curpass" id="curpass" required><br>
                        </div>
                       <div class="change_password_div">
                        <span class="change_password">New Password :</span><input class="change_password_input" type="password" placeholder="New Password" name="newpass" id="newpass" required><br>
                        <ion-icon class="change_eye" name="eye" id="eye" onclick="toggleChangePassword()"></ion-icon>
                        </div>
                        <div class="change_password_div">
                        <span class="change_password">Confirm Password :</span><input class="change_password_input" type="password" placeholder="Confirm Password" name="cnfpass" id="cnfpass" onkeyup="check(this)" required>
                        <ion-icon class="change_eye2" name="eye" id="eye" onclick="toggleConfirmPassword()"></ion-icon>
                        </div>
                        <div class="error-message">
                                <span id="alert" ></span>
                            </div>
                        <input class="btn_user" type="submit" value="Change Password" name="change_password">
                        
                        
                    </form>
                    
                </div>

               

            </div>
        </div>
    </div>
    <script>
        function checkdelete()
        {
            return  confirm("Are you sure you want to delete this record.");
        }
    </script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //Password check
        var password=document.getElementById('newpass');
            var flag=0;
            function check(elem){
                if(elem.value.length>0){
                    if(elem.value!=password.value){
                        document.getElementById('alert').innerText="Confirm password does not match";
                        flag=0;
                    }else{
                        document.getElementById('alert').innerText="";
                        flag=1;
                    }
                }else{
                    document.getElementById('alert').innerText="Please enter confirm password";
                    flag=0;
                }
            }

            function validate(){
                if(flag==1){
                    return true;
                }else{
                    return false;
                }
            }

        // Toggle View password

        var state2= false;
            function toggleChangePassword(){
                if(state2){
                document.getElementById("newpass").setAttribute("type","password");
                state2=false;
                }
                else{
                document.getElementById("newpass").setAttribute("type","text");
                state2=true;
                }
            }

            var state3= false;
            function toggleConfirmPassword(){
                if(state3){
                document.getElementById("cnfpass").setAttribute("type","password");
                state3=false;
                }
                else{
                document.getElementById("cnfpass").setAttribute("type","text");
                state3=true;
                }
            }

        //Menu Toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main')

        toggle.onclick = function() {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        //Profile Toggle
        let profile = document.querySelector('.user');
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