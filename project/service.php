
<?php
   session_start();
   include"connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
             body{
                background-image: white;
            }
           
            h3{
                background-color:white;
                text-align: center;
                margin:-1%;
                padding-bottom: 2%;
                padding-top:2%;
               
            }
            h2{
                text-align: center;
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
                padding-left: 1%;
                padding-right: 1%;
                border-radius: 10px;
            }
             .y{
                background-color:mistyrose;
                width:50%;
                padding: 1.5rem;
                margin:7.9rem;
                overflow-X: auto;
                border-radius: 15px;
                }
                .z{
                background-color:papayawhip;
                width:50%;
                padding: 1.5rem;
                margin:7.9rem;
                border-radius: 15px;
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
            
             table, th, td {
                      border:2px solid black ;
                      border-radius:5px;
                      border-collapse: collapse;
                        margin-left:9%;
                        margin-top: 4%;
                        width:6%;
                 }
               th,td{
                padding:5px;
               }
               .l{
                background-color:mediumturquoise;
                text-decoration: none;
                border-radius:5px;
                border: solid 2px;
                padding:0 2px 2px 0;
                
               }
               .input{
                width:20%;
                border-radius: 2px;
               }
        </style>
    </head>
    <body>
    <h3>MUNICIPLAL TOWN COUNCIL FIELD APPLICATION</h3>
    <div>
        <ul class="jk">
            <li><a class="h" href="homepage.php">Home</a>|
            <li><a href="organization.php">Organization_Structure</a>|
            <li><a href="service.php">Field_Apply</a>
            <li> <a class="o" href="logout.php">Log-out</a></li>
        </ul>
        </div>
       <div class="z">
        <caption><h4>PLEASE UPLOAD YOUR FIELD APPLICATION <br>
                            FORM BELOW
          </h4></caption>
            <form method="post" action="actions.php"  enctype="multipart/form-data">
                   <input  class="input" type="file" name="file"  id="file"><br><br>
                   <input class="input" type="submit" name="apply" value="upload">
            </form>
        </div>
        <div class="y">
        <caption><h4>PLEASE DOWNLOAD YOUR FEEDBACK BELOW</h4></caption>
        <table class="head"> 
                <thead>
                    <tr>
                        <th>File_name</th>
                        <th>File_size</th>
                        <th>file_type</th>
                        <th>Download<th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT *FROM admin";
                 $result = $join->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "user/" . $row['filename'];
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
    </body>
</html>