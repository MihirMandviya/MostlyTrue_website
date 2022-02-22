<html>

<head>
    <!--CSS Files
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/header_black.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/acc_dropdown.css">-->

    <link href="css/services.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/header_black.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/footer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/acc_dropdown.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Services | Mostly True</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="img/website_logo.webp" type="image/x-icon" />


    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
        /* Cards font */
        
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap');
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

    <!-- Services-->
    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="img/fake-news.webp">
            </div>
            <div class="content">
                <div>
                    <h3>Fake News Detection</h3>
                    <p>
                    We target fake news all around the world and we provide our
                     users with the most accurate result in the most optimized way.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="img/responsive-128.webp">
            </div>
            <div class="content">
                <div>
                    <h3>User Interface</h3>
                    <p>
                    We provide the best User interface and responsive design with our valuable content and 
                    solution. You can use our website on any device of your choice.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="img/weather.webp">
            </div>
            <div class="content">
                <div>
                    <h3>Weather</h3>
                    <p>
                    We provide a national and local weather forecast for cities, 
                    as well as weather radar, report and hurricane coverage.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="img/latest-news.webp">
            </div>
            <div class="content">
                <div>
                    <h3>Latest News</h3>
                    <p>
                    We bring all the latest news and top breaking news from India and World.
                     Read the latest news headlines, breaking news, current affairs and today's 
                     latest news coverage, photos, videos and many more.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/analytics.webp">
            </div>
            <div class="content">
                <div>
                    <h3>Analytics</h3>
                    <p>
                    We provide you with the tools you need to better understand your activity on our website. 
                    We provide our users with Graphs, Charts for better understanding.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="img/donation.webp">
            </div>
            <div class="content">
                <div>
                    <h3>Donation</h3>
                    <p>
                    Mostlytrue wishes health and safety for you and your dear ones. 
                    If you like our work you can donate to us by visiting our website.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->


    <footer style="margin-top: 90%;">
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