
<?php
 include('connection.php');
  session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>

            </title>
            <style>
                    body{
                background-image: white;
            
                 }
                 h3{
                background-color:linear-gradient(rgba(120,130,140,0.4),rgba(120,130,140,0.4)),url("flag.jpg");
                text-align: center;
                margin:-1%;
                padding-bottom: 2%;
                padding-top:2%;
               }
               h2{
                text-align: center;
            }
            table, td, th {  
                border: 1px solid #ddd;
                 text-align: left;
                }

                table {
                 border-collapse: collapse;
                     width: 100%;
                    }
                    th, td {
                     padding: 17px;
                    }
                    .jk{
                text-align:center;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background-color: paleturquoise;
                padding-top: 1%;
                padding-bottom: 1%;
                margin: -1%;
                padding-left: 29%;
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
                padding-left: 1%;
                padding-right: 1%;
                border-radius: 10px;
            }
            
             .o{
                text-align:right;
             }
             .y{
                background-color:papayawhip;
                margin-left:22%;
                margin-right:30%;
                border-radius:10px;;
                margin-top: 3%;
                padding: 6% 2% 4% 4%;
                
             }
         
            .ech{
                padding-top: 3%;
                padding-bottom: 3%;
                background-color:paleturquoise;
                margin-left:23%;
                margin-right:30%;
                border-radius:10px;
            }
            .feedback{
                background-color:mistyrose;
                padding-top: 3%;
                padding-bottom: 4%;
                margin-left:23%;
                margin-right:30%;
                border-radius:10px;;
                padding-left:10%;
                margin-top: 3%;
            }
            .l{
                background-color:aqua;
                text-decoration: none;
                border-radius:5px;
                border: solid 1px;
                padding:0 2px 2px 2px;
                
               }
               .input{
                width:20%;
                border-radius: 2px;
               }
               .o{
                color:darkblue;
                margin-left:45%;
             }
            </style>
        </head>
        <body>
        <h3>MUNICIPLAL TOWN COUNCIL FIELD APPLICATION</h3>
        <div>
        <ul class="jk">
            <li><a class="h" href="homepage.php">Home</a>|
            <li><a href="organization.php">Organization_Structure</a>
            <li><a class="o" href="logout.php">Log-out</a></li>
        </ul>
        
        </div>
       <h2 class="ech"><?php echo"Welcome:".htmlspecialchars($_SESSION['role']) ?></h2> 
        <div class="y">
        <table>
            <caption>DOWNLOAD UPLOADED APPLICATION DOCUMENT</caption>
                <thead>
                    <tr>
                        <th>File_name</th>
                        <th>File_size</th>
                        <th>file_type</th>
                        <th>Download<th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT *FROM files";
                 $result = $join->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr>
                            <td><?php echo $row['filename']; ?></td>
                            <td><?php echo $row['filesize']; ?> bytes</td>
                            <td><?php echo $row['filetype']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="l" download>Download</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            </table>
            </div>
          <div class="feedback">
          <h4> Upload Feedback Document Below</h4>
            <form method="post" action="actions.php"  enctype="multipart/form-data">
                   <input class="input" type="file" name="file"  id="file"><br><br>
                   <input class="input" type="submit" name="upload" value="upload document">
            </form>
            </div>
        </body>
    </html>
    <?php
       $join->close();
    ?>