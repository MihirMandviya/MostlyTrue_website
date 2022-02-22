<?php session_start();?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs | Mostly True</title>

    <!-- CSS -->
    <link href="css/help_user.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/faq.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/faq_reaction.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
   

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
            <section>
        <div class="">
            <div class="headline">
                <h1>FAQs</h1>
                   <h3>Frequently Asked Questions:</h3>
                   <p>Check out this section to get answers for all the frequently asked questions.</p>
            </div>
                   
                   <br/>
                   <div class="headline">
                        <h3>Registration</h3>
                   </div>
                   
                    <ul class="faq-list">
                        <li>
                            <h4 class="faq-heading"> How do I register? </h4>
                            <p class="read faq-text">
                                You can register by clicking on the "LOGIN" section located at the top right corner on the home page then 
                                by clicking on the "SIGN UP". Please provide the required information in the form that appears and click on submit.
                            </p>
                        </li>
                        <li>
                            <h4 class="faq-heading"> Do I need to register before using Mostly True? </h4>
                            <p class="read faq-text">
                                No, you do not need to register before using our website. However, you need to registered to browse your search history, payment details and search result details. 
                            </p>
                        </li>
                        <li>
                            <h4 class="faq-heading"> Can I register multiple times using the same phone number/email ID? </h4>
                            <p class="read faq-text">
                                Each email ID/login ID can only be associated with one user account only.
                            </p>
                        </li>
                    </ul>

                    <br/>
                    <div class="headline">
                        <h3>Login / Account Related</h3>
                   </div>
                   
                   <ul class="faq-list">
                    <li>
                        <h4 class="faq-heading"> What is Account Dashboard? </h4>
                        <p class="read faq-text">
                            'Account Dashboard' is the section where you can view your Personal Information, Search History and Donation History.
                        </p>
                    </li>
                    <li>
                        <h4 class="faq-heading"> I am unable to login? </h4>
                        <p class="read faq-text">
                            You may have entered incorrect login details. Please enter the correct information & try again. 
                        </p>
                    </li>
                </ul>

                <br/>
                <div class="headline">
                    <h3>Donation</h3>
               </div>
                   
                   <ul class="faq-list">
                    <li>
                        <h4 class="faq-heading"> What are the various modes of payment I can use for Donation? </h4>
                        <p class="read faq-text">
                            You can donate us using the following modes of payment:<br><br>
                            
                            <b>* Credit Card / Debit Card</b><br>
                            <b>* UPI</b><br>
                            <b>* Netbanking</b><br>
                            <b>* e-Wallets</b>
                        </p>
                    </li>
                </ul>

                <br/>
                <div class="headline">
                    <h1>Get in touch with us!</h1>
               </div>
                   
                   <ul class="faq-list">
                    <li>
                        <h4 class="faq-heading"> How do I contact you for feedback/queries/suggestions? </h4>
                        <p class="read faq-text">
                            Our customer service team will be at your service any time between 8:00 am & 8:00 pm throughout the week.
                            Please write to us at <span onclick="window.location='mailto:supprt@mostlytrue.com'">support@mostlytrue.com</span>  
                            
                        </p>
                    </li>
                </ul>
                <br/><br/>
                <div class="headline">
                    <h3>Have an issue with your account?</h3>
               </div>
                
               <p class="read1">
                    Log a complaint - <a href="../contact.php">Click Here</a>  
                    <br><br>
                    If you’d like get in touch with us, please do write to us at <span onclick="window.location='mailto:supprt@mostlytrue.com'">support@mostlytrue.com</span>  throughout the week and we will respond immediately.
                    
                </p>
                </div>
    </section>

    <!-- reaction -->


    <div class="rating">
        <input type="radio" name="star" id="star1" checked="checked">
        <label for="star1">
                <img src="img/5.webp">
                <h4>Loved It</h4>
                <br>
            </label>
        <input type="radio" name="star" id="star2">
        <label for="star2">
                <img src="img/4.webp">
                <h4>Liked It</h4>
                <br>
            </label>
        <input type="radio" name="star" id="star3">
        <label for="star3">
                <img src="img/3.webp">
                <h4>IT's OK</h4>
                <br>
            </label>
        <input type="radio" name="star" id="star4">
        <label for="star4">
                <img src="img/2.webp">
                <h4>Dislike It</h4>
                <br>
            </label>
        <input type="radio" name="star" id="star5">
        <label for="star5">
                <img src="img/1.webp">
                <h4>Hated It</h4>
                <br>
            </label>
        <h2 class="text"> Do you like our work?</h2>
       
    </div>
    
        </div>
    </div>

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script  src="js/faq.js"></script>
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