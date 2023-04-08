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
<!-- this is x -->
    <div class="menuBox">
      <!-- home icon -->

      <!-- <a href="prakton.php"><i class="fa fa-home"></i></a> -->
        <div class="inner-box">

          <div class="dropdown">
            <button class="dropbtn"><h3>পরিচিতি</h3</button>
            <div class="dropdown-content">
              <a href="#">সংগঠন পরিচিতি</a>
              <a href="#">গঠনতন্ত্র </a>
              <a href="upodeshta2.php">উপদেষ্টা মন্ডলী </a>
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
              <a href="kalantok.php">কালান্তক </a>
              <a href="#">আবর্তন  </a>
              <a href="prekkha.php">প্রেক্ষা </a>
            </div>
          </div>
        </div>
          <!-- <div class="inner-box" style="color:rgb(212, 69, 17);line-height: 0.9; font-size: 16px;"><h3>আবৃত্তি উৎসব</h3></div> -->
        <div class="inner-box">
          <div class="dropdown">
            <button class="dropbtn" style="color:rgb(212, 69, 17);"><h3>আবৃত্তি উৎসব</h3</button>
            <div class="dropdown-content">
              <a href="#">১oম আবৃত্তি উৎসব</a>
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
        <a href="sommanona.php" style="text-decoration:none;"><div class="inner-box" style="color:rgb(10, 68, 10);"><h3>সম্মাননা</h3></div></a>
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
        <a style="font-size: 2em; padding-right: 10px; padding-left: 10px; color:blue" href="https://www.facebook.com/cu.abrrittimoncho?mibextid=ZbWKwL"><i class="fab fa-facebook fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px;" href="https://youtube.com/@AbrittiMoncho"><i class="fab fa-youtube fa-lg"  style="color: #ff0000;"></i></a>
         <a style="font-size: 2em;  padding-right: 10px; color:green" href="https://wa.me/+8801748566529"><i class="fab fa-whatsapp fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px; color:red" href="https://cuabrittimoncho@gmail.com"><i class="far fa-envelope fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px;" href="tel:+8801748566529"><i class="fas fa-phone fa-lg"></i></a>
        </div>
    </div>

    <div class="middlebox">
      <div class="header">
        <h1>সর্বশেষ আপডেট</h1>
        <div class="box middlebox1">
          <?php
          if($_SESSION['role'] == 'admin')  {
            ?>
            <a class="labelText" href='content_entry.php?id=1'>Update</a>
            <?php
          }
          ?>
          <p>
            <?php
            $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=1" )
                  or die("Can not execute query");
            $content = mysqli_fetch_assoc($latest_update);
            echo $content['content'];
            ?>
          </p>
        </div>

        <div class="container1">
          <div class="box middleboxes2">
            <?php
            if($_SESSION['role'] == 'admin')  {
              ?>
              <a class="labelText" href='content_entry.php?id=2'>Update</a>
              <?php
             }
            ?>
            <p>
              <?php
              $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=2" )
                    or die("Can not execute query");
              $content = mysqli_fetch_assoc($latest_update);
              echo $content['content'];
              ?>
            </p>
          </div>

          <div class="box middleboxes2">
            <?php
            if($_SESSION['role'] == 'admin')  {
              ?>
              <a class="labelText" href='content_entry.php?id=3'>Update</a>
              <?php
            }
            ?>
            <p>
              <?php
              $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=3" )
                    or die("Can not execute query");
              $content = mysqli_fetch_assoc($latest_update);
              echo $content['content'];
              ?>
            </p>
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
            <?php
            if($_SESSION['role'] == 'admin')  {
              ?>
              <a class="labelText" href='content_entry.php?id=4'>Update</a>
              <?php
            }
            ?>
            <p class="scrollable-text">
              <?php
              $latest_update= mysqli_query( $connect, "SELECT content FROM content WHERE id=4" )
                    or die("Can not execute query");
              $content = mysqli_fetch_assoc($latest_update);
              echo $content['content'];
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="middlebox">
      <h3>ছবি আবৃত্তি মঞ্চ সম্মাননা পেয়েছেন যারা</h3>
    </div>

    <div class="box">
     <div class="row">
        <div class="nav">
          <button class="prev disabled" disabled>Prev</button>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/romachoudhury.jpg" alt="Slide1">
        <h2>রমা চৌধুরী</h2>
        <p class="title">শিক্ষিকা , লেখিকা।</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/monirujjaman.jpg" alt="Slide2">
        <h2>ড. মনিরুজ্জামান</h2>
        <p class="title">শিক্ষকতা ও লেখক।</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/MahbubUlAlamChoudhury.jpg" alt="Slide3">
        <h2>মাহবুব উল আলম চৌধুরী</h2>
        <p class="title">কবি, সাহিত্যিক, বুদ্ধিজীবী</p>
        </div>
        </div>

        <!-- <div class="column">
        <div class="card">
          <img src="images/bean.jpg" alt="Slide4">
        <h2>Jane Doe</h2>
        <p class="title">CEO &amp; Founder</p>
        </div>
        </div> -->

        <div class="column">
        <div class="card">
          <img src="images/shamshulhq.jfif" alt="Slide5">
        <h2>সৈয়দ শামসুল হক</h2>
        <p class="title">কবি, গীতিকার, কথাসাহিত্যিক, নাট্যকার এবং অনুবাদক।</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/anupomsen.jfif" alt="Slide1">
        <h2>ড. অনুপম সেন</h2>
        <p class="title">সমজাবিজ্ঞানী।</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/mushtarishofi2.jfif" alt="Slide1">
        <h2>বেগম মুশতারী শফী</h2>
        <p class="title">সাহিত্যিক ও সংগঠক।</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/helalhafij.jpg"alt="Slide1">
        <h2>হেলাল হাফিজ</h2>
        <p class="title">কবি, সাংবাদিক</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/selinahosen.jpg" alt="Slide1">
        <h2>সেলিনা হোসেন</h2>
        <p class="title">কথাসাহিত্যিক ও ঔপন্যাসিক।</p>
        </div>
        </div>

        <div class="column">
        <div class="card">
          <img src="images/joyonto.jpeg" alt="Slide1">
        <h2>জয়ন্ত চট্টোপাধ্যায়</h2>
        <p class="title">আবৃত্তিশিল্পী ও অভিনেতা</p>
        </div>
        </div>

        <div class="column">
          <img src="images/whitepic.jpg" alt="Slide1">
        </div>

        <div class="column">
          <img src="images/whitepic.jpg" alt="Slide1">
        </div>

        <div class="column">
          <img src="images/whitepic.jpg" alt="Slide1">
        </div>
        
        <div class="nav">
          <button class="next">Next</button>
        </div>
     </div>
 </div>



    <script>

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
      const prevBtn = document.querySelector(".prev");
      const nextBtn = document.querySelector(".next");
      const columns = document.querySelectorAll(".column");
      let currentSlide = 0;

      // Hide all columns except the first 4
      for (let i = 4; i < columns.length; i++) {
        columns[i].classList.add("hidden");
      }

      function showSlide(slideIndex) {
        // Hide all columns
        columns.forEach(column => column.classList.add("hidden"));

        // Show the 4 columns for the current slide
        for (let i = slideIndex * 4; i < slideIndex * 4 + 4; i++) {
          if (i >= columns.length) {
            break;
          }
          columns[i].classList.remove("hidden");
        }

        // Disable/enable the "Prev" button if necessary
        if (slideIndex === 0) {
          prevBtn.disabled = true;
          prevBtn.classList.add("disabled");
        } else {
          prevBtn.disabled = false;
          prevBtn.classList.remove("disabled");
        }

        // Disable/enable the "Next" button if necessary
      if (slideIndex === Math.ceil(columns.length / 4) - 1) {
      nextBtn.disabled = true;
      nextBtn.classList.add("disabled");
      } else {
      nextBtn.disabled = false;
      nextBtn.classList.remove("disabled");
      }
      }

      // Show the first slide initially
      showSlide(0);

      // Handle the "Prev" button click
      prevBtn.addEventListener("click", () => {
      currentSlide--;
      showSlide(currentSlide);
      });

      // Handle the "Next" button click
      nextBtn.addEventListener("click", () => {
      currentSlide++;
      showSlide(currentSlide);
      });

      // ..........................................................................
      

           </script>
           <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"></script>




      <!-- </div>
    </div> -->
  </body>
  <footer>
    <div>
      <p>Copyright &copy; 2023 চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ</p>
    </div>
      <?php
      if($_SESSION['role'] == 'user')  {
        ?>
        <a class="labelText" href='login.php?'>Login</a>
        <?php
      }
      else {
        ?>
        <a class="labelText" href='logout.php'>Logout</a>
        <?php
      }
      ?>

  </footer>
</html>
