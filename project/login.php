
<?php
  
?>
<!DOCTYPE html>
<html>
    <head>
        <tittle>

        </tittle>
        <style>
             body{
                background-color: rgb(127, 172, 183);
                background-image: linear-gradient(to left, rgb(108, 108, 174),rgb(149, 156, 159));
            }
              #deal{
                background-color: rgba(44, 84, 120,0.5);
                margin: 6% 24% 30% 38%;
                padding:6% 12% 10%  8%;
                border-radius: 10px;
              }
            .f{
                padding: 0.4em;
            }
            .l{
                background-color: rgb(127, 172, 183);
                color:white;
                height:4%;
                padding-top:2%;
                padding-bottom:2%;
                margin-left:10%;
                border-radius:10%;
                border-style: none;
                width:24%;
            }
            .l:hover{
                cursor:pointer;
                background-color: rgb(108, 108, 174);
            }
            .a{
              text-decoration: none;
              color:white;
            }
        </style>

    </head>

    <body>
        <div id="deal">
            <h2 style="color:aliceblue;text-align:center;width:6px;">Log_In</h2>
        <form method="post" action="actions.php">
            <div><input class="f" type="email" name="email" placeholder="Email" required><br><br><br></div>
            <div> <input class="f" type="password" name="Password" placeholder="Password" required><br><br></div>
           <div><input class="f" type="submit" name="submit" value="Login"></div>
            <p style="color:aqua">I don't have account ? <a class="a" href="index.php">Sign_Up</a></p> 
        </form>
        </div>
    </body>
</html>
