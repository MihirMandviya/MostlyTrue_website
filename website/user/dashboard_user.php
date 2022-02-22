<?php session_start(); ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Mostly True</title>

   
    <link href="css/dashboard_user.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
    <!-- php code -->
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../index.php">
                        <span class=icon><img style="width:40px; height:40px;" src="img/logo.webp"></span>
                        <!--<span class="title" style="font-weight: 900; font-size: 30px;top:3px;">Mostly True</span> -->
                        
                        <span class="title" style="font-weight: 900; font-size: 30px;top:3px;">
                            <span style="font-family: 'Cabin', sans-serif;" >Mostly</span><span style="font-family: 'Courgette', cursive;">true</span>
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
           /* session_start();*/
            if(isset($_SESSION['Login'])){
                echo '<h3> Welcome '. $_SESSION["Name"] . '</h3>';
            }
    ?>
                </div>
                
                <div class="user">
                <?php echo '<img src="https://avatars.dicebear.com/api/initials/'.$_SESSION["Name"].'.svg">' ?>
                </div>
            </div>

            
            <!--cards-->
            <div class="cardBox">
                <div class="card" onclick="window.location='searchhistory_user.php'">
                    <div>
                        <div class="numbers"><?php  
                                                include('dbcon.php');
                                                $id=$_SESSION["id"];
                                                $query = "SELECT count(SearchID) as number FROM ruser_join WHERE `RUserID`=$id";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];
                                            ?> </div>
                        <div class="cardName">Searches</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php  /*
                                                include('dbcon.php');
                                                $query = "SELECT count(SearchID) as number FROM search_result WHERE `User`=2 AND `Result`='True'";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];*/
                                                include('dbcon.php');
                                                $id=$_SESSION["id"];
                                                $query = "SELECT count(search_result.SearchID) as number FROM ruser_join, search_result WHERE ruser_join.SearchID=search_result.SearchID AND ruser_join.RUserID=$id AND search_result.Result='True'";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];
                                            ?></div>
                        <div class="cardName">True</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="thumbs-up-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php  /*
                                                include('dbcon.php');
                                                $query = "SELECT count(SearchID) as number FROM search_result WHERE `User`=2 AND `Result`='False'";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];*/
                                                include('dbcon.php');
                                                $id=$_SESSION["id"];
                                                $query = "SELECT count(search_result.SearchID) as number FROM ruser_join, search_result WHERE ruser_join.SearchID=search_result.SearchID AND ruser_join.RUserID=$id AND search_result.Result='False'";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];
                                            ?></div>
                        <div class="cardName">False</div>
                    </div>
                    <div class="iconBx">
                    <ion-icon name="thumbs-down-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php  /*
                                                include('dbcon.php');
                                                $query = "SELECT SUM(amount) as number FROM payment WHERE `User`='2'";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo '&#8377;'.$row['number'];
                                                include('dbcon.php');*/
                                                $id=$_SESSION["id"];
                                                $query = "SELECT SUM(payment.amount) as number FROM payment, payuser_join WHERE payuser_join.payment_id=payment.payment_id  AND payuser_join.RUserID=$id";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                if($row['number'] == NULL){
                                                    echo '&#8377;0';
                                                }
                                                else{
                                                    echo '&#8377;'.$row['number'];
                                                }
                                                
                                            ?></div>
                        <div class="cardName">Donation</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>

                </div>
                <br /> 
            </div>


            <!--Area Chart for daily Searches.-->
    <br/><br/>
     <div style="width:100%;"> 
            <h1 align="center">Number Of Daily Searches :</h1>  
                <br /> 
            <div id="chart_div" style="width: 100%; height: 500px;"></div>
            </div>


            <!--Pie chart for ratio  of result -->
            
            <div style="width:100%;">  
                <h1 align="center">Ratio of Result :</h1>  
                <br />  
                <div id="piechart" align="center" style="width: 125%; height: 500px;"></div>  
           </div> 
        </div>
    </div>

     
<!-- Google Area Chart -->
<?php  
   include('dbcon.php');
   $id=$_SESSION["id"];
$query = "SELECT search_result.Date,count(search_result.SearchID) as number FROM ruser_join, search_result WHERE ruser_join.SearchID=search_result.SearchID AND ruser_join.RUserID=$id GROUP BY search_result.Date";  

$result = mysqli_query($conn, $query);  
?>  

    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Date', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Date"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Number of Searches Per Day',  
                      bar: {groupWidth: "40%"},
                      hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
                     vAxis: {title: 'Searches', minValue: 0}
                     };  
                     var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);  
           }  
           </script>  

<!-- Google Pie Chart -->
    <?php  
   include('dbcon.php');
//$query = "SELECT Result, count(*) as number FROM search_result WHERE `User`=2 GROUP BY Result";  
$query="SELECT search_result.Result,count(*) as number FROM ruser_join, search_result WHERE ruser_join.SearchID=search_result.SearchID AND ruser_join.RUserID=$id GROUP BY search_result.Result";
$result = mysqli_query($conn, $query);  
?>  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Result', 'Number'],  
                          <?php 
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Result"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of True And False',  
                      is3D:true,  
                      //pieHole: 0.5 
                      colors: ['#ff3333','#00cc00'] 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

           

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