
<?php
    session_start();
    if(isset($_POST['news_check'])) {
        include 'dbcon.php';
        $news=$_POST["input_news"];
        $temp=exec("python app.py .$news");
       echo $temp;
        if($temp==1)
        {
            echo ' <div id="trueDIV">
            <span class="material-icons">
                sentiment_satisfied_alt
            </span>
            <span class="news_heading_true">
                Yayyy...!
            </span>
            <span class="news_content_true">
                The Headline you have searched is correct!
            </span>

            </div>';
        }
    }
    
?>
<html>
    <head>
    </style>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <!-- Typed JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>



    <!-- CSS Files -->
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/header.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/footer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/cards.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/partners.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/testimonial.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/donation.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/acc_dropdown.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/scroll_to_top.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/flip_card.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/aos.css">

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
    <section class="section2" id="section2">
        <div class="container1">
            <div class="text">
                Search Your Headline
            </div>

            <form method="POST">
            <div class="design">
                <div class="searchPanel">
                    
                    <input type="text" name="input_news" id="" placeholder="Paste Your Headline Here" />
                    <ion-icon name="newspaper-outline"></ion-icon>
                </div>
            </div>
            <button type="submit" class="checkme" name="news_check" onclick="myFunction()">Check Me</button>
            </form>
            

            <!-- Fake news Result -->
                <div id="trueDIV" style="display:none;">
                <span class="material-icons">
                    sentiment_satisfied_alt
                </span>
                <span class="news_heading_true">
                    Yayyy...!
                </span>
                <span class="news_content_true">
                    The Headline you have searched is correct!
                </span>

                </div>
                <div id="falseDIV" style="display:none;">               

                <span class="material-icons">
                    sentiment_dissatisfied
                </span>
                <span class="news_heading_false">
                    Oops...!
                </span><br>
                <span class="news_content_false">
                    The Headline you have searched is incorrect!
                </span>
            </div>
        </div>
    </section>

                        
                       <?php  /*

                       echo '
                        
                        <script>   
                        var flag=1;
                        function myFunction() {
                        var result=<?php echo ($jstemp)?>;
                        if(result=="REAL")
                        {
                        var x = document.getElementById("trueDIV");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                        } else if( result=="FAKE"){

                            var y = document.getElementById("falseDIV");
                            
                        if (y.style.display === "none") {
                            y.style.display = "block";
                        } else {
                            y.style.display = "none";
                        }
                        } else if( flag==2){

                        window.alert("Input field must not be empty...!")
                        }
                        }
                        </script>'*/
                ?>

    </body>
</html>