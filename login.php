<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM silog WHERE username = '$myusername' AND password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      if (!$result)
       { echo "ErrorException"; // add this check. die('Invalid query: ' . mysql_error());
        }
      $row = mysqli_fetch_array($result);
      print_r( $row );
      //$active = $row('active');

      //$count = mysql_num_rows($result);
      $count = $result->num_rows;


      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         echo("inside");
         header("location: welcome1.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
