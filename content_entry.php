<?php
session_start();

require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
  or die("Can not connect");

  $content_id = $_GET['id'];

    ?>
    <!DOCTYPE html>

    <html>
      <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
      </head>

      <body>
        <br><br>

        <form class="formbox" action="content_insert.php" method="post" enctype="multipart/form-data" class="eFormBox">
              <input class="fieldText" type="text" id="content_id" name="content_id" size="40px" value="<?php echo $content_id ?>" readonly style="display : none">
              <label for="new_content" class="labelText">Content</label>:
              <input class="fieldText" type="text" id="new_content" name="new_content" placeholder="ex: " size="40px">
              <br><br>

          <div>
            <input type="submit" id="button" class="button" value="Update">
            <input type="button" id="button" class="button" value="Back" onclick="back();">
          </div>


        </form>
    </body>
  </html>
