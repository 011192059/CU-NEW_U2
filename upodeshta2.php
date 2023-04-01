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
    <title>My Homepage</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>

  <body>
    <div class="headerBox">
      <div class="slideshow-container">
        <img class="hero-image" src="images/head_ss_1.jpg">
        <img class="hero-image" src="images/head_ss_2.jpg">
        <img class="hero-image" src="images/head_ss_3.jpg">
      </div>
      <div>
        <img src="images/Heading_Image_Text.png" width="600" height="120">
      </div>
    </div>

    <div class="menuBox">
      <!-- home icon -->

      <!-- <a href="prakton.php"><i class="fa fa-home"></i></a> -->
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
            <button class="dropbtn" style="color:rgb(37, 37, 102);"><h3>নিয়মিত আয়োজন</h3</button>
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
            <button class="dropbtn" style="color:rgb(61, 61, 216);"><h3>প্রকাশনা</h3</button>
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
            <button class="dropbtn" style="color:rgb(212, 69, 17);"><h3>আবৃত্তি উৎসব</h3</button>
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
            <button class="dropbtn"style="color:rgb(185, 35, 128);"><h3>গ্যালারি</h3</button>
            <div class="dropdown-content">
              <a href="#">আলোকচিত্র </a>
              <a href="#">ভিডিও</a>
            </div>
          </div>
        </div>
        <div class="inner-box" style="color:rgb(78, 55, 29);"><h3>ব্লগ</h3></div>
         <!-- social icons -->

         <!-- <div class="social-icons">
          <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
          <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div> -->
        <div class="social-icons">
         <a style="font-size: 2em; padding-right: 10px; padding-left: 10px;" href="https://www.facebook.com"><i class="fab fa-facebook fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px;" href="https://www.youtube.com"><i class="fab fa-youtube fa-lg"  style="color: #ff0000;"></i></a>
         <a style="font-size: 2em;  padding-right: 10px; color:green" href="https://wa.me/1234567890"><i class="fab fa-whatsapp fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px; color:red" href="mailto:yourname@example.com"><i class="far fa-envelope fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px;" href="tel:+880"><i class="fas fa-phone fa-lg"></i></a>
        </div>
        </div>
    </div>
    
        
        <div class="boxs box22">
          <!-- <p>উপদেষ্টা মন্ডলী</p>
         -->

         <!-- <div id="box"> -->
            <img id="top-image" src="images/7.jpg" alt="Example Image 1">
            <div class="bottom-row">
              <img src="images/veg.jpg" alt="Example Image 2">
              <img src="images/tomato.jpg" alt="Example Image 3">
              <img src="images/potatoes.jpg" alt="Example Image 4">
              <img src="images/22.jpg" alt="Example Image 5">

              <img src="images/veg.jpg" alt="Example Image 2">
              <img src="images/tomato.jpg" alt="Example Image 3">
              <img src="images/potatoes.jpg" alt="Example Image 4">
              <img src="images/22.jpg" alt="Example Image 5">
              
              
            </div>

            
        </div>
          
     <!-- </div> -->

      
   
    </div>

    <script>
        document.getElementById("box").addEventListener("click", function() {
          this.style.backgroundColor = "lightblue";
        });
      </script>
  </body>
</html>
