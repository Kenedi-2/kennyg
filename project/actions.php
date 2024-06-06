
<?php
   
include('connection.php');
session_start();
    if(isset($_POST["submitt"])){
        $Firstname=$_POST["Fname"];
        $Surname=$_POST["Sname"];
        $Email=$_POST["email"];
        $Password=$_POST["Password"];
        $role = $_POST["role"];
       $submit = "INSERT INTO letter_P(Fname,Sname,Password,email,role) VALUES ( '$Firstname','$Surname','$Password','$Email','$role')";
        $result=mysqli_query($join,$submit);
            header("location:login.php");
    }
   if(isset($_POST["submit"])){
      $email=$_POST["email"];
      $Password=$_POST["Password"];
     $kenny=$join->query("SELECT Password, email ,role FROM letter_p WHERE email='$email' and Password='$Password'");
        if($kenny->num_rows>0){
               $nore=$kenny->fetch_assoc();
               if($Password==$nore['Password']){
                  $_SESSION['email'] = $nore['email'];
                  $_SESSION['role'] = $nore['role'];
                  if($nore['role']=='admin'){
                       header("location:admin.php");
                 } else{
                     header("location:homepage.php");
                  }
               } else{
                  echo("invalid passowrd or username");
               }      
        }else{
         echo"User doesnt exist please register";
        }
      }
      IF(isset($_POST["apply"])){
         $target_dir = "uploads";
         $target_file = $target_dir.basename($_FILES["file"]["name"]);
         $file_type = strtolower(pathinfo($target_file ,PATHINFO_EXTENSION));
         $allowed_types = array("pdf");
         if(!in_array($file_type, $allowed_types)){
            echo"sorry required format is allowed";
         }
         else{
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
               $filename=$_FILES["file"]["name"];
               $filesize=$_FILES["file"]["size"];
               $filetype=$_FILES["file"]["type"];

               $sql="INSERT INTO files(filename,filesize,filetype) VALUES ('$filename','$filesize','$filetype')";
               if($join->query($sql)==TRUE){
                         echo"The file".basename($_FILES["file"]["name"])."hasbeen uploaded successfully.";
                }
               else{
                   echo"sorry there is an in error in uploading of the document".$join->error;
               }
               $join->close();
            }else{
               echo"sorry there is an error in uploading";
            }
         }
      } else{
         echo"no file uploaded";
      }
      IF(isset($_POST["upload"])){
         $target_dir = "user";
         $target_file = $target_dir.basename($_FILES["file"]["name"]);
         $file_type = strtolower(pathinfo($target_file ,PATHINFO_EXTENSION));
         $allowed_types = array("pdf");
         if(!in_array($file_type, $allowed_types)){
            echo"sorry required format is allowed";
         }
         else{
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
               $filename=$_FILES["file"]["name"];
               $filesize=$_FILES["file"]["size"];
               $filetype=$_FILES["file"]["type"];

               $sql="INSERT INTO admin(filename,filesize,filetype) VALUES ('$filename','$filesize','$filetype')";
               if($join->query($sql)==TRUE){
                         echo"The file".basename($_FILES["file"]["name"])."hasbeen uploaded successfully.";
                }
               else{
                   echo"sorry there is an in error in uploading of the document".$join->error;
               }
               $join->close();
            }else{
               echo"sorry there is an error in uploading";
            }
         }
      } else{
         echo"no file uploaded";
      }
?>
