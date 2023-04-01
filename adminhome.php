<?php require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
  or die("Can not connect"); ?>
<?php  session_start();

if(
    !isset($_SESSION['role'])
    && empty($_SESSION['role'])
)
{ $_SESSION['role'] = 'user';}?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


<style>
  #button{

padding: 10px;
width: 120px;
/* color: white; */
background-color: FireBrick;
border: none;
justify-content: bottom-right;
}
</style>
  </head>

  <body>
    <div class="headerBox">
      <div>
        <img src="Heading_Image.png" width="600" height="120">
        <!-- <p>শাশ্বত সুন্দরের অনিবার্য অভ্যুত্থান কবিতা</p>
        <h2>চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ</h2> -->
      </div>
      <!-- <button id="button" type="submit">login</button> -->
      <input id="button" type="button" value="Admion Log In" onclick="login()">

      <?php

if($_SESSION['role'] == 'admin')  {
  ?>
<!-- <a class="labelText" href='content_entry.php?id=2'>Update</a> -->
<input id="button" type="button" value="Admion Log Out" onclick="logout()">
  
    <?php }?>
      <!-- <input id="button" type="button" value="Admion Log Out" onclick="logout()"> -->
    </div>

    <div class="menuBox">
        <!-- home icon -->
        <!-- <i class="fa fa-home"></i> -->

      <div class="inner-box">

        <div class="dropdown">
          <button class="dropbtn"><h3>পরিচিতি</h3</button>
          <div class="dropdown-content">
            <a href="#">সংগঠন পরিচিতি</a>
            <a href="#">গঠনতন্ত্র </a>
            <a href="upodeshta.php">উপদেষ্টা মন্ডলী </a>
            <a href="counsil.php">কাউন্সিল</a>
            <a href="prakton.php">প্রাক্তন</a>
          </div>
        </div>
      </div>


        <!-- <div class="inner-box" style="color:rgb(146, 28, 146);"><b><h3>পরিচিতি</h></b></div> -->
        <!-- <div class="inner-box" style="color:rgb(37, 37, 102); line-height: 0.85; font-size: 16px;"><h3>নিয়মিত আয়োজন</h3></div> -->
      <div class="inner-box">
        <div class="dropdown">
          <button class="dropbtn"><h3>নিয়মিত আয়োজন</h3</button>
          <div class="dropdown-content">
            <a href="#">কর্মশালা</a>
            <a href="#">কবি ও কবিতা  </a>
            <a href="#">পড়ুয়া </a>
            <a href="#">বৈঠক </a>
            <a href="#">প্রতিযোগিতা </a>
            <a href="#">অন্যান্য</a>
          </div>
        </div>
      </div>
        <!-- <div class="inner-box" style="color:rgb(61, 61, 216);"><h3>প্রকাশনা</h3></div> -->
      <div class="inner-box">
        <div class="dropdown">
          <button class="dropbtn"><h3>প্রকাশনা</h3</button>
          <div class="dropdown-content">
            <a href="#">কালান্তক </a>
            <a href="#">আবর্তন  </a>
            <a href="prekkha.html">প্রেক্ষা </a>
          </div>
        </div>
      </div>
        <!-- <div class="inner-box" style="color:rgb(212, 69, 17);line-height: 0.9; font-size: 16px;"><h3>আবৃত্তি উৎসব</h3></div> -->
      <div class="inner-box">
        <div class="dropdown">
          <button class="dropbtn"><h3>আবৃত্তি উৎসব</h3</button>
          <div class="dropdown-content">
            <a href="#">৯ম আবৃত্তি উৎসব</a>
            <a href="#">৮ম আবৃত্তি উৎসব</a>
            <a href="#">৭ম আবৃত্তি  উৎসব</a>
            <a href="#">৬ষ্ঠ আবৃত্তি উৎসব</a>
            <a href="#">৫ম আবৃত্তি উৎসব</a>
            <a href="#">৪র্থ আবৃত্তি উৎসব</a>
            <a href="#">৩য় আবৃত্তি উৎসব</a>
            <a href="#">২য় আবৃত্তি উৎসব</a>
            <a href="#">১ম আবৃত্তি উৎসব</a>
          </div>
        </div>
      </div>
      <div class="inner-box" style="color:rgb(10, 68, 10);"><h3>সম্মাননা</h3></div>
        <!-- <div class="inner-box" style="color:rgb(185, 35, 128);"><h3>গ্যালারি</h3></div> -->
      <div class="inner-box">
        <div class="dropdown">
          <button class="dropbtn"><h3>গ্যালারি</h3</button>
          <div class="dropdown-content">
            <a href="#">আলোকচিত্র </a>
            <a href="#">ভিডিও</a>
          </div>
        </div>
      </div>
      <div class="inner-box" style="color:rgb(78, 55, 29);"><h3>ব্লগ</h3></div>
       <!-- social icons -->
       <i class="fa fa-facebook"></i>
       <i class="fa fa-youtube"></i>
       <i class="fa fa-whatsapp"></i>
       <i class="fa fa-gmail"></i>
       <i class="fa fa-phone"></i>
    </div>

    <div class="middlebox">
      <div class="header">
        <h1>সর্বশেষ আপডেট</h1>
        <div class="box middlebox1">
          <p><?php
          $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=1" )
                or die("Can not execute query");
          $content = mysqli_fetch_assoc($latest_update);
          echo $content['content'];
          ?></p>

<?php

if($_SESSION['role'] == 'admin')  {
  ?>
<a class="labelText" href='content_entry.php?id=1'>Update</a>

  
    <?php }?>
        
          <!-- <a class="labelText" href='content_entry.php?id=1'>Update</a> -->
        </div>
        <div class="container1">
          <div class="box middleboxes2">
            <p><?php
            $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=2" )
                  or die("Can not execute query");
            $content = mysqli_fetch_assoc($latest_update);
            echo $content['content'];
            ?></p>
             <?php

if($_SESSION['role'] == 'admin')  {
  ?>
<a class="labelText" href='content_entry.php?id=2'>Update</a>

  
    <?php }?>



            <!-- <a class="labelText" href='content_entry.php?id=2'>Update</a> -->
          </div>
          <div class="box middleboxes2">
            <p><?php
            $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=3" )
                  or die("Can not execute query");
            $content = mysqli_fetch_assoc($latest_update);
            echo $content['content'];
            ?></p>
                      <?php

if($_SESSION['role'] == 'admin')  {
  ?>
<a class="labelText" href='content_entry.php?id=3'>Update</a>

  
    <?php }?>
          </div>
        </div>

        <div class="container1">
            <div class="box middleboxes3">
              <p>গঠনতন্ত্র</p>
            </div>
            <div class="box middleboxes3">
              <p>কালান্তক</p>
            </div>
            <div class="box middleboxes3">
                <p>আবর্তন</p>
              </div>
              <div class="box middleboxes3">
                <p>প্রেক্ষা</p>
              </div>
          </div>

          <div class="container1">
            <div class="box middlebox4">
              <h3>আমাদের কথা</h3>
              <!-- <p>'চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ’ চট্টগ্রাম বিশ্ববিদ্যালয় (চবি) ক্যাম্পাসের প্রবীণতম প্রগতিশীল সাংস্কৃতিক সংগঠন। লোগোতে থাকা কলম, মুষ্টিবদ্ধ হাত আর মুখ নির্দেশ করছে মুক্তজ্ঞান চর্চা, অন্যায়ের প্রতিবাদ ও সত্য উচ্চারণের। শাশ্বত সুন্দেরর অনিবার্য অভ্যুত্থান কবিতা” এই স্লোগানকে ধারণ করে, ২০০০ সালের ৭ সেপ্টেম্বর আবৃত্তি মঞ্চের যাত্রা শুরু হয়। নানা প্রতিকূলতার মধ্যদিয়ে এই প্রতিনিধিত্বশীল সংগঠনটি নিয়মিত তৈরি করছে একদল শুদ্ধ মানুষ। যারা মাতৃভাষা চর্চায় নিরন্তর সাধনা করে, কবিতা ভালোবাসে, আবৃত্তি করে, পড়ে এবং মুক্তজ্ঞান চর্চা করে।

আমরা আবৃত্তির মাধ্যমে শুদ্ধ সংস্কৃতির চর্চা করি। আমরা বিশ্বাস করি- যা কিছু সুন্দর, যা কিছু শাশ্বত, তার প্রকাশ কবিতার মাধ্যমে সম্ভব। কবিতা শুধু সৌন্দর্য প্রকাশেই সীমাবদ্ধ নয়, কবিতা প্রতিবাদের হাতিয়ার। সমাজের সকল কলুষতার বিরুদ্ধে কবিতা আমাদের কণ্ঠস্বরকে করে জোরালো, ভাষাকে করে সুতীক্ষ্ণ। এভাবেই পতিত মানবতায় কবিতা আবাদের লক্ষ্যে এগিয়ে চলেছে "চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চের ২২ বছরের বর্ণিল পথচলা।

</p> -->
            </div>
          </div>
      </div>
    </div>
    <div class="middlebox">
        <h3>ছবি আবৃত্তি মঞ্চ সম্মাননা পেয়েছেন যারা</h3>
    </div>

      <div class="box footerbox">
        <p>Box 4</p>
      </div>
    </div>
       <script>
                    function login(){
                        location.assign('login.php');   ///default GET method
                    }

                    function logout(){
                        location.assign('logout.php');   ///default GET method
                    }
     </script> 
  </body>
</html>
