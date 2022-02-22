<?php session_start(); ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Mostly True</title>
    <link href="css/dashboard_admin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    

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
                        <span style="font-family: 'Cabin', sans-serif;" >Mostly</span><span style="font-family: 'Courgette', cursive;">true</span>
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

            <!--cards-->
            <div class="cardBox">
                <div class="card" onclick="window.location='searchhistory_admin.php'">
                    <div>
                        <div class="numbers"><?php  
                                                include('dbcon.php');
                                                $query = "SELECT count(SearchID) as number FROM search_result";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];
                                            ?> 
                        </div>
                        <div class="cardName">Total Searches</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card" onclick="window.location='users_admin.php'">
                    <div>
                        <div class="numbers"><?php  
                                                include('dbcon.php');
                                                $query = "SELECT count(RUserID) as number FROM registered_user";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];
                                            ?>
                        </div>
                        <div class="cardName">Users</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                <div class="card" onclick="window.location='contact_admin.php'">
                    <div>
                        <div class="numbers"><?php  
                                                include('dbcon.php');
                                                $query = "SELECT count(ID) as number FROM contact";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo $row['number'];
                                            ?> 
                        </div>
                        <div class="cardName">Queries</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="card" onclick="window.location='earning_admin.php'">
                    <div>
                        <div class="numbers"><?php  
                                                include('dbcon.php');
                                                $query = "SELECT SUM(amount) as number FROM payment";
                                                $result = mysqli_query($conn, $query);  
                                                $row = mysqli_fetch_array($result);
                                                echo '&#8377;'.$row['number'];
                                            ?> 
                        </div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>

                </div>
                <br /> 
            </div>





            <!--Area Chart for daily Searches.-->


            <div style="width:100%;"> 
            <h1 align="center">Number Of Daily Searches :</h1>  
                <br /> 
            <div id="chart_div" style="width: 100%; height: 500px;"></div>
            </div> 



            <!--Pie chart for ratio  of result-->
            
            <div style="width:100%;">  
                <h1 align="center">Ratio of Result :</h1>  
                <br />  
                <div id="piechart" align="center" style="width: 125%; height: 500px;"></div>  
           </div> 


           <!--Histogram Chart for Earning.-->


           <div style="width:100%;"> 
            <h1 align="center">Earning :</h1>  
                <br /> 
                <div id="histogram_div" align="center" style="width: 100%; height: 500px;"></div>
            </div> 

        </div>

    </div>


<!-- Google Area Chart -->
<?php  
   include('dbcon.php');
$query = "SELECT Date,count(SearchID) as number FROM search_result GROUP BY Date;";  
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
                      hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
                     vAxis: {title: 'Searches', minValue: 0}
                     };  
                     var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);  
           }  
           </script>  

                <!-- Google Pie Chart -->
<?php  
   include('dbcon.php');
$query = "SELECT Result, count(*) as number FROM search_result GROUP BY Result";  
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
                      colors: ['#ff3333', '#00cc00'] 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  


     <!-- Histogram Chart -->
     <?php  
   include('dbcon.php');
$query = "SELECT Date,sum(amount) as number FROM payment GROUP BY Date;";  
$result = mysqli_query($conn, $query);  
?>  

    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Date', 'Amount'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Date"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Earnings Per Day',  
                      lcurveType: 'function',
          legend: { position: 'right' },
          hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
                     vAxis: {title: 'Amount (Rs)', minValue: 0}
                     };  
                     var chart = new google.visualization.LineChart(document.getElementById('histogram_div'));
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