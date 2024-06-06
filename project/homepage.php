
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <style>
              body{
                background-image:white;
                
            }
            h3{

               color:black;
                text-align: center;
                margin:-1%;
                padding-bottom: 2%;
                padding-top:2%;
            }
            h4{
                text-align: center;
                padding-bottom: 3%;
                padding-top:2%;
            }
            .jk{
                text-align:center;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background-color: paleturquoise;
                margin: -1%;
                padding:1% 3% 1% 29%;
            }
            ul.jk li{
                list-style: none;
                display: inline;
            }
            li a{
                text-decoration: none;
                color:black;
                padding-top: 1%;
                padding-bottom: 1%;
                padding-left: 2%;
                padding-right: 1%;
                border-radius: 10px;
            }
             .ft{
               list-style-type:none;
               margin-top: 30%;
               text-align: center;
              
             }
             .ft li{
                display: inline;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
             }
             .o{
                color:darkblue;
                margin-left:45%;
             }
             .d{
                color:white;
                text-decoration: none;
                font-size:large;
             }   
             .ech{
                padding-top: 3%;
                padding-bottom: 3%;
                background-color:paleturquoise;
                margin-left:23%;
                margin-right:30%;
                border-radius:10px;
            }
            .u{
                font-size:20px;
              }
              .home{
                background-color: rgb(255, 253, 208);
                padding:2% 4% 2% 5%;
                margin:2% 25% 0 19%;
              }
            </style>               
        </style>
    </head>
     <body>
        <h3>MUNICIPLAL TOWN COUNCIL FIELD APPLICATION</h3>
        <div>
        <ul class="jk">
            <li><a class="h" href="homepage.php">Home</a>|
            <li><a href="organization.php">Organization_Structure</a>|
            <li><a href="service.php">Field_Apply</a>
            <li ><a class="o" href="logout.php">Log-out</a></li>
        </ul>
        </div>
        <h4 class="ech"><?php echo"Welcome:".htmlspecialchars($_SESSION['role']) ?></h4>
        <div class="home">
            <p style="color:blue;"><a href="#news">News</a></p>
            <img src="download (1)~1.jpg" alt="New Councilor">
            <p>He has been apointed as the head of the council</p>
            <p style="color:blue;"><a href="#events">Events</a></p>
            <p id="date"></p>
            <script>
                document.addEventListener('DOMContentLoaded',function(){
                    const d = new Date();
                   document.getElementById("date").innerHTML=d;
                });
            </script>
            <p>Town council has continue supervise its projects in various way</p>
            <p><a href="Announcement">Announcement</a></p>
            <p>Announcement of collection of taxes</p>
            <p>Concil will provide education to its people about safety</p>
            <p>Announcement to all civil cervants in town council</p>
            <p><a href="Announcement Business">Business Announcement</a></p>
            <p>In sale broilers</p>
            <p><a href="Zabuni">Tender</a></p>
            <table>
                <thead>
                    <th>Tender name</th>
                    <th>Date added</th>
                    <th>Expire Date</th>
                </thead>
                <tbody>
                    <tr>
                    <td>Alert</td>
                    <td>june 12,<br>2024</td>
                    <td>june 20,<br>2024</td>
                    </tr>
                    <tr>
                    <td>Alert</td>
                    <td>august 12,<br>2024</td>
                    <td>august 20,<br>2024</td>
                    </tr>

                </tbody>
            </table>
        </div>
     </body>
     <footer>
        <ul class="ft">
            <li>Privacy_policy</li>|
            <li>Disclaimer</li>|
            <li>SiteMap</li>
            <p>copyright &copy 2017town council.All right reserved.</p>
        </ul>
     </footer>
</html>

