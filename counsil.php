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
    <title>কাউন্সিল</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


<!-- <style>
  #button{

padding: 10px;
width: 120px;
/* color: white; */
background-color: FireBrick;
border: none;
justify-content: bottom-right;
}
</style> -->
  </head>

  <body>
    <div class="headerBox">
    <!-- <div class="slideshow-container">
  <img class="hero-image" src="slide1.jpg">
  <img class="hero-image" src="slide2.jpg">
  <img class="hero-image" src="slide3.jpg">

  <div class="hero-text"> -->
    <div>
  <img src="Heading_Image.png" width="600" height="120">
</div>

      <!-- <div>
        
        <img src="Heading_Image.png" width="600" height="120"> -->
        <!-- <p>শাশ্বত সুন্দরের অনিবার্য অভ্যুত্থান কবিতা</p>
        <h2>চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ</h2> -->
      <!-- </div> -->
      <!-- <button id="button" type="submit">login</button> -->
      <!-- <input id="button" type="button" value="Admion Log In" onclick="login()"> -->

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
        
        <a href="home.php"><i class="fa fa-home"></i></a>
        

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

       <!-- <div class="social-icons">
  <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
  <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
  <a href="#" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
</div> -->
<div class="social-icons">
       <a href="https://www.facebook.com"><i class="fab fa-facebook fa-lg"></i></a>
       <a href="https://www.youtube.com"><i class="fab fa-youtube fa-lg"></i></a>
       <a href="https://wa.me/1234567890"><i class="fab fa-whatsapp fa-lg"></i></a>
       <a href="mailto:yourname@example.com"><i class="far fa-envelope fa-lg"></i></a>
       <a href="tel:+880"><i class="fas fa-phone fa-lg"></i></a>

    </div>
    </div> 

 
  

    <div class="container">
        <div class="box box22">
          <div style="color:rgb(146, 28, 146);"><h3>কাউন্সিল</h3></div>
  
          <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০০৪-২০০৫ খ্রি.</b></p>
            <p>তারিখ: ১৭-০১-২০০৪ খ্রি.</p>
            <p>সভাপতি : শ্রাবণী সেন শাওন</p>
            <p>সহ-সভাপতি : মো: সাদেকুর রহমান অপু, সাদিয়া আফরোজ ঝুমুর</p>
            <p>সাধারণ সম্পাদক : মো: আবুল হাসনাত খান মামুন </p>
            <p>সহ-সাধারণ সম্পাদক : রুচিরা সুলতানা সুইটি</p>
            <p>সাংগঠনিক সম্পাদক : মো: শফিকুর রহমান</p>
            <p>অর্থ সম্পাদক: ফয়জুন নেছা</p>
            <p>দপ্তর সম্পাদক : মোস্তফা কামাল</p>
            <p>প্রচার ও প্রকাশনা সম্পাদক : ভাগ্যেশ্বরী চাকমা কেবি></p>
            <p><b>উপদেষ্টা কমিটি:</b></p>
            <p>১. রাহমান নাছির উদ্দিন</p>
            <p>২. মাছুম আহমেদ</p>
            <p>৩. পাপড়ি বড়ুয়া</p>
            </div>
            <div class="inner-box1">
              <p><b>নাম:</b></p>
              <p><b>আবর্তন:</b></p>
              <p><b>বিভাগ:</b></p>
              <p><b>সেশন:</b></p>
            </div>
            <div class="inner-box1">
              <p><b>নাম:</b></p>
              <p><b>আবর্তন:</b></p>
              <p><b>বিভাগ:</b></p>
              <p><b>সেশন:</b></p>
            </div>
            <div class="inner-box1">
              <p><b>নাম:</b></p>
              <p><b>আবর্তন:</b></p>
              <p><b>বিভাগ:</b></p>
              <p><b>সেশন:</b></p>
            </div>
            <div class="inner-box1">
              <p><b>নাম:</b></p>
              <p><b>আবর্তন:</b></p>
              <p><b>বিভাগ:</b></p>
              <p><b>সেশন:</b></p>
            </div>
            <div class="inner-box1">
              <p><b>নাম:</b></p>
              <p><b>আবর্তন:</b></p>
              <p><b>বিভাগ:</b></p>
              <p><b>সেশন:</b></p>
            </div>
            <div class="inner-box1">
              <p><b>নাম:</b></p>
              <p><b>আবর্তন:</b></p>
              <p><b>বিভাগ:</b></p>
              <p><b>সেশন:</b></p>
              </div>
              <div class="inner-box1">
                <p><b>নাম:</b></p>
                <p><b>আবর্তন:</b></p>
                <p><b>বিভাগ:</b></p>
                <p><b>সেশন:</b></p>
              </div>
              <div class="inner-box1">
                <p><b>নাম:</b></p>
                <p><b>আবর্তন:</b></p>
                <p><b>বিভাগ:</b></p>
                <p><b>সেশন:</b></p>
              </div>
              <div class="inner-box1">
                <p><b>নাম:</b></p>
                <p><b>আবর্তন:</b></p>
                <p><b>বিভাগ:</b></p>
                <p><b>সেশন:</b></p>
              </div>
              <div class="inner-box1">
                <p><b>নাম:</b></p>
                <p><b>আবর্তন:</b></p>
                <p><b>বিভাগ:</b></p>
                <p><b>সেশন:</b></p>
              </div>
              <div class="inner-box1">
                <p><b>নাম:</b></p>
                <p><b>আবর্তন:</b></p>
                <p><b>বিভাগ:</b></p>
                <p><b>সেশন:</b></p>
              </div>

        
        </div>
      </div>



      
       <script>
// ...............................................................
var slideIndex = 0;
var slides = document.getElementsByClassName("hero-image");

function showSlides() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.opacity = "1";
  setTimeout(showSlides, 2000); /* change image every 5 seconds */
}

showSlides();
// ...............................................................
// ...................................................................


// ..........................................................................
                    function login(){
                        location.assign('login.php');   ///default GET method
                    }

                    function logout(){
                        location.assign('logout.php');   ///default GET method
                    }
     </script> 
     <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"></script>


<div class="box footer">
      <div>
      <p>Copyright &copy; 2023
         চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ</p>
      </div>
      </div>
  </body>
</html>
