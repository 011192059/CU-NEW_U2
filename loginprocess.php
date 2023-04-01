<?php
require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
  or die("Can not connect");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(
        isset($_POST['username'])
        && isset($_POST['mypass'])
        && !empty($_POST['username'])
        && !empty($_POST['mypass'])
    ){

        $username=$_POST['username'];
        $password=$_POST['mypass'];


        $success= mysqli_query( $connect, "SELECT * FROM login WHERE username = '$username' and password ='$password'" )
          or die("Can not execute query");


        if($success->num_rows == 1){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'admin';
            ?>
            <script>window.location.assign("home.php");</script>
            <?php
        }
        else {
        ?>
            <script>alert("Wrong username or password.");</script>
            <script>window.location.assign("login.php");</script>
        <?php
        }

      }
      else
      {
          ?>
          <script>alert("Fill up all the information.");</script>
          <script>location.assign("login.php");</script>
          <?php
      }

}
else
{
  ?>
  <script>location.assign("login.php");</script>
  <?php
}
?>
