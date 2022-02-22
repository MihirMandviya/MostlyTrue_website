<html>

<head>
    <!--CSS Files-->

    <link href="css/team.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/header_black.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/footer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/acc_dropdown.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Team | Mostly True</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="./img/website_logo.webp" type="image/x-icon" />

    <!-- Google icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
    </style>


</head>

<body>

    <!-- Header -->


    <header>
        <img src="img/logo.webp" alt="website logo">

        <a href="index.php" class="logo"><span style="font-family: 'Cabin', sans-serif;">Mostly</span><span style="font-family: 'Courgette', cursive;">true</span></a>
        <ul>
            <li>
                <a href="index.php">Home</a></li>
            <li>
                <a href="weather.php">Weather</a></li>
            <li>
                <a href="latest_news.php">Latest News</a></li>
            <li>
                <a href="about.php">About</a></li>
            <li>
                <a href="contact.php">Contact</a></li>
        </ul>

        <?php  
            session_start();
            if(isset($_SESSION['Login'])){
                echo ' &ensp; &ensp;


                <!-- Account details-->

                
                <div class="action">
                    <div class="profile" onclick="menuToggle();">
                    <img src="https://avatars.dicebear.com/api/initials/'.$_SESSION["Name"].'.svg">
                    </div>
                    <div class="menu">
                        <h3>User Name</h3>
                        <ul style="display: block;">
                            <li><img src="img/profile.webp"><a href="#">Dashboard</a></li>
                            <li><img src="img/logout.webp"><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
               
                ';
            }else{
                echo "<button class='login' onclick='window.location.href=\"login.php\"'><span>LOGIN</span></button>";
                
            }    
        
        ?>
                
                
        <script>
                    function menuToggle() {
                        const toggleMenu = document.querySelector('.menu');
                        toggleMenu.classList.toggle('active')
                    }
        </script>



    </header>

    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>



    <!-- Team -->

    <div class="container">
        <div class="card">
            <div class="content">
                <div class="avatar">
                    <img src="img/TeamMember1.webp">
                </div>
                <div class="details">
                    <div>
                        <h3>Mihir Mandviya</h3>
                    </div>
                    <div>
                        <ion-icon name="call-outline"></ion-icon>
                        <span onclick="window.location='tel:9511299275'">9511299275</span>
                    </div>
                    <div>
                        <ion-icon name="globe-outline"></ion-icon>
                        <span>mnmandviya.com</span>
                    </div>
                    <div>
                        <ion-icon name="mail-outline"></ion-icon>
                        <span onclick="window.location='mailto:mihirnmandviya@gmail.com'">mihirnmandviya@gmail.com</span>
                    </div>
                </div>

            </div>

        </div>
        <div class="card">
            <div class="content">
                <div class="avatar">
                    <img src="img/TeamMember2.webp">
                </div>
                <div class="details">
                    <div>
                        <h3>Tushar Soni</h3>
                    </div>
                    <div>
                        <ion-icon name="call-outline"></ion-icon>
                        <span onclick="window.location='tel:9970793780'">9970793780</span>
                    </div>
                    <div>
                        <ion-icon name="globe-outline"></ion-icon>
                        <span>tusharsoni.com</span>
                    </div>
                    <div>
                        <ion-icon name="mail-outline"></ion-icon>
                        <span onclick="window.location='mailto:tusharsoni142001@gmail.com'">tusharsoni142001@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <!-- Footer -->


    <footer style="margin-top: 2%;">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li>
                <a href="https://www.facebook.com">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://twitter.com">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <p>Mostlytrue &copy; 2022 | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>