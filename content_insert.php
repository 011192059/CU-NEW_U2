<?php
require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
  or die("Can not connect");

  if(
      isset($_POST['content_id']) &&
      !empty($_POST['content_id'])
    ){

        if(
            isset($_POST['new_content']) &&
            !empty($_POST['new_content'])
          ){
            $content=$_POST['new_content'];
          }
        else{
          $content='';
        }

        $content_id=$_POST['content_id'];

        mysqli_query( $connect, "UPDATE content SET content='$content' WHERE id = $content_id")
          or die("Can not execute query");

        ?>
        <script>alert("Content Updated");
        location.assign("home.php");</script>

  <?php
  }
  else{
      ?>
      <script>alert("Please enter all required data");
      location.assign("content_entry.php");</script>
      <?php
  }
?>
