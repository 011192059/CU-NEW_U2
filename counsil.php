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
        <!-- <div class="inner-box">
            <a href="home.php"><h3>হোম</h3></a>
        </div> -->
        <div class="inner-box">

          <div class="dropdown">
            <button class="dropbtn"><h3>পরিচিতি</h3></button>
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
            <button class="dropbtn"><h3>নিয়মিত আয়োজন</h3></button>
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
            <button class="dropbtn"><h3>প্রকাশনা</h3></button>
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
            <button class="dropbtn"><h3>আবৃত্তি উৎসব</h3></button>
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

         <div class="social-icons">
        <a style="font-size: 2em; padding-right: 10px; padding-left: 10px; color:blue" href="https://www.facebook.com/cu.abrrittimoncho?mibextid=ZbWKwL"><i class="fab fa-facebook fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px;" href="https://youtube.com/@AbrittiMoncho"><i class="fab fa-youtube fa-lg"  style="color: #ff0000;"></i></a>
         <a style="font-size: 2em;  padding-right: 10px; color:green" href="https://wa.me/+8801748566529"><i class="fab fa-whatsapp fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px; color:red" href="https://cuabrittimoncho@gmail.com"><i class="far fa-envelope fa-lg"></i></a>
         <a style="font-size: 2em;  padding-right: 10px;" href="tel:+8801748566529"><i class="fas fa-phone fa-lg"></i></a>
        </div>
    </div>



    <div class="box22"><h3>কাউন্সিল</h3></div>
    <div class="container">
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
            <p>প্রচার ও প্রকাশনা সম্পাদক : ভাগ্যেশ্বরী চাকমা কেবি</p>
            <p><b>উপদেষ্টা কমিটি:</b></p>
            <p>১. রাহমান নাছির উদ্দিন</p>
            <p>২. মাছুম আহমেদ</p>
            <p>৩. পাপড়ি বড়ুয়া</p>
          </div>
          <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০০৫-২০০৬  খ্রি.</b></p>
            <p>তারিখ: ২৩.০৩.২০০৫</p>
            <p>স্থান: চাকসু তৃতীয় তলা</p>
            <p>সভাপতি : মো: আবুল হাসনাত খান মামুন</p>
            <p>সহ-সভাপতি :  মো: মোস্তফা কামাল, ভাগ্যেশ্বরী চাকমা কেবি, আব্দুল্লাহ আল মারুফ মামুনুর রশিদ মাহিন </p>
            <p>সাধারণ সম্পাদক : রুচিরা সুলতানা সুইটি</p>
            <p>সহ-সাধারণ সম্পাদক : নাহিদ আশরাফ রাজীব</p>
            <p>সাংগঠনিক সম্পাদক : এস.এম. হাবিবুর রহমান হাবিব </p>
            <p>সহ-সাংগঠনিক সম্পাদক : সাইমা সুলতানা স্বর্ণা </p>
            <p>অর্থ সম্পাদক: কাজী উবায়দা মিলি</p>
            <p>সহ-অর্থ সম্পাদক: সোহেল মাসুম</p>
            <p>প্রচার ও প্রকাশনা সম্পাদক : মাহমুদুল হাসান মেজর ></p>
            <p>সহ-প্রচার ও প্রকাশনা সম্পাদ : মাহমুদা রোজ তুষী</p>
            <p>দপ্তর সম্পাদক : আবু সাইদ মুহাম্মদ আরিফ </p>
            <p>সহ-দপ্তর সম্পাদক : হুমায়রা বিনতে লতিফ রোজী </p>
            <p>কার্যকরী সদস্য: শাওন, সবুজ, শফিক, সাকের, ঝুমুর, রবিন </p>
            <p>সাধারণ সদস্য : লাকী, রিতা, শোয়েব, হাসান, সেতু, ডালিয়া আজিম, সোহেল, সোনিয়া, সাগর, সুমি, উম্মে প্রু. মুন</p>

          </div>
          <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০০৬-২০০৭ খ্রি.</b></p>
            <p>তারিখ: ৩০.০৪. ২০০৬ খ্রি. </p>
            <p>সভাপতি : ভাগ্যেশ্বরী চাকমা কেবি</p>
            <p>সহ-সভাপতি : মামুনুর রশিদ মাহিন </p>
            <p>সাধারণ সম্পাদক : নাহিদ আশরাফ রাজীব  </p>
            <p>সহ-সাধারণ সম্পাদক : সাইমা সুলতানা স্বর্ণা </p>
            <p>সাংগঠনিক সম্পাদক : আবু সাইদ মুহাম্মদ আরিফ </p>
            <p>সহ-সাংগঠনিক সম্পাদক মাহমুদুল হাসান মেজর </p>
            <p>অর্থ সম্পাদক : কাজী উবায়দা মিলি </p>
            <p>প্রচার ও প্রকাশনা সম্পাদক : মাহমুদা আফরোজ তুষী </p>
            <p><b>সহ-প্রচার ও প্রকাশনা সম্পাদক: শারমিন জাহান মনি </b></p>
            <p>দপ্তর সম্পাদক : হুমায়রা বিনতে লতিফ রোজী </p>
            <p>সহ-দপ্তর সম্পাদক: সুলতানা আনজুমান রশিদ ডালিয়া </p>
            <p>কার্যকরী সদস্য: মামুন খাঁন, রুচিরা সুইটি, শাওন, সবুজ শফিকুল ইসলাম, সাকের, ঝুমুর, রবিন, মোস্তফা</p>
            <p>সাধারণ সদস্য : লাকী, আজিম, সাগর, সোহেল, মাসুদ, হাসান, রীতা </p> 
            <p>প্রাথমিক সদস্য : খায়রুল আনাম, রিপন সরকার, জনি, মোঃ নাজিম উদ্দিন, ফখরুল ইসলাম আদিল, নুসরাত জাহান রিমি, সালমা জাহান তান্নী</p>       
            </div>
            <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০০৭-২০০৮ খ্রি.</b></p>
            <p>তারিখ: ০৮.০৮.২০০৭. খ্রি. </p>
            <p>স্থান: চাকসু তৃতীয় তলা</p>
            <p>সভাপতি : রুচিরা সুলতানা সুইটি </p>
            <p>সহ-সভাপতি : আবু সাইদ মুহাম্মদ আরিফ, হুমায়রা বিনতে লতিফ রোজী, মাহমুদা আফরোজ তুষী</p>
            <p>সাধারণ সম্পাদক: সেলিম রেজা সাগর</p>
            <p>সহ-সাধারণ সম্পাদক সোহেল মাসুদ </p>
            <p>সাংগঠনিক সম্পাদক : ফখরুল ইসলাম আদিল</p>
            <p>সহ-সাংগঠনিক সম্পাদক সোহেল ইমরান</p>
            <p>অর্থ সম্পাদক : শারমিন জাহান মন</p>
            <p>প্রচার ও প্রকাশনা সম্পাদক : অলিউল্লাহ ফকির</p>
            <p>সহ-প্রচার ও প্রকাশনা সম্পাদক : সালমা সুলতানা</p>
            <p>দপ্তর সম্পাদক : রেজা হক</p>
            <p>সহ-দপ্তর সম্পাদক : নুসরাত জাহান রিমি </p>
            <p>কার্যকরী সদস্য : মোস্তফা, মামুন খান, মাহিন, রবিন, ভাগ্যেশ্বরী চাকমা, আজিম</p> 
            <p> সাধারণ সদস্য : ডালিয়া, নাসরিন, নাজমুল, তুষী, আয়েশা প্রাথমিক সদস্য : তামান্না, পারভেজ, সাইফুল, রত্না, নাজিম, পদ্ম</p>       
            </div>
            <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০০৮-২০০৯ খ্রি.</b></p>
            <p>তারিখ: ০৬.০৫.২০০৯ খ্রি. </p>
            <p>স্থানঃ বোটানিক্যাল গার্ডেন</p>
            <p>সভাপতি সেলিম রেজা সাগর </p>
            <p>সিনিয়র সহ-সভাপতি : হুমায়রা বিনতে লতিফ রোজী</p>
            <p>সহ-সভাপতি : শারমিন জাহান মনি </p>
            <p>সাধারণ সম্পাদক : নুসরাত জাহান রিমি </p>
            <p>সহ-সাধারণ সম্পাদক : সালমা সুলতানা</p>
            <p>সাংগঠনিক সম্পাদক : কণা দাশ</p>
            <p>অর্থ সম্পাদক : হাসনা বিনতে নাহার তুলি</p>
            <p>দপ্তর সম্পাদক : আখতারুজ্জামান লাবু</p>
            <p>সহ-দপ্তর সম্পাদক : খোন্দকার সুলতান মাহমুদ সবুজ</p>
            <p>প্রচার ও প্রকাশনা সম্পাদক : আয়েশা আক্তার তান্না</p>
            <p>সহ-প্রচার ও প্রকাশনা সম্পাদক : তাজমুন নাহার </p>
            <p>কার্যকরী সদস্য
 মোস্তফা কামাল, মামুন খাঁন, আদিল শফিকুর রহমান সুমন, শাখাওয়াত আজিম খায়ের মীরা </p> 
            <p> সাধারণ সদস্য
 বীণা দাশ, দিল আফরোজ রুমা, তাহেরা আক্তার ঊর্মী</p>       
            </div>
            <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০১১-২০১২ খ্রি.</b></p>
            <p>তারিখঃ ২৬.১২.২০১১ খ্রি. </p>
            <p>স্থান: চাকসু </p>
            <p>সভাপতিঃ কণা দাশ </p>
            <p>সিনিয়র সহ-সভাপতি : আখতারুজ্জামান লাবু </p>
            <p>সহ-সভাপতি : রুবেল পাল, আবদুল গফুর সোহেল </p>
            <p>সাধারণ সম্পাদক: আহমেদ মোস্তফা </p>
            <p>সহ-সাধারণ সম্পাদক : ফারহানা আক্তার লোপা</p>
            <p>সাংগঠনিক সম্পাদক : তাজমুন নাহার খায়ের মীরা</p>
            <p>অর্থ সম্পাদক : মারিয়া বনিতও খেয়া হোসাইন </p>
            <p>প্রচার ও প্রকাশনা সম্পাদক: ফয়সাল আহমেদ শুভ</p>
            <p>সহ-প্রচার ও প্রকাশনা সম্পাদক : মাহমুদুল হাসান</p>
            <p>দপ্তর সম্পাদক : শামীম আহমেদ</p>
            <p>দপ্তর সম্পাদক : সানজিদা আক্তার জিসা </p>
            <p>কার্যকরী সদস্য: প্রিয়ন্তি সাহা, ফজলে এলাহি শশী, এনামুল, প্রমিতি </p> 
            <p> সাধারণ সদস্য রিয়াজ, শারমিন, তারেক, প্রিতু</p>       
            </div>
            <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০১৯-২০২০ খ্রি.</b></p>
            <p>তারিখ:  ০৩.০৫.২০১৯. খ্রি. </p>
            <p>স্থান: সিআরবি</p>
            <p>সভাপতি :  মাসুম বিল্লাহ আরিফ </p>
            <p>সিনিয়র সহ-সভপতি : আল ইমরান</p>
            <p>সহ-সভাপতি :সেঁজুতি বড়ুয়া, শাকিলা উম্মে নূর </p>
            <p>সাধারণ সম্পাদক বোরহান উদ্দিন রব্বানী  </p>
            <p>সহ-সাধারণ সম্পাদক : শাকিল আহমেদ</p>
            <p>সাংগঠনিক সম্পাদক : দীপ্ত বিশ্বাস </p>
            <p>সহ-সাংগঠনিক সম্পাদক : আসমাউল মাওয়া আফরিন	</p>
            <p>প্রচার ও প্রকাশনা সম্পাদক ফরহাদ হাসান </p>
            <p>সহ-প্রচার ও প্রকাশনা সম্পাদক: সোহান আল মাফি</p>
            <p>দপ্তর সম্পাদক :  প্রার্থী ঘোষ</p>
            <p>সহ-দপ্তর সম্পাদক : সুলতানা ইয়াসমিন</p>
            <p>সদস্য : নাঈমা, নূর,সোবহানী, ইমার, শান্তা, ফৌজিয়া, ফাহিমা, রিয়ান, মিতু, পূজা, এমদাদ, জোনায়েদ সিদ্দিক, প্রিয়া, সাকি, শর্মি, হাকিম, আমির, নিঝুম, দিবা, সজীব, আসমা, তাহমিদা, মাহবুব, ডালিয়া শাহীন, ফাতেমা  </p> 
           
            </div>
            <div class="inner-box1">
            <p><b>কার্যকরী পরিষদ ২০২২-২০২৩ খ্রি.</b></p>
            <p>তারিখ:  ১৫/০১/২০২২. খ্রি. </p>
            <p>সভাপতি: সোহান আল মাফি </p>
            <p>সিনিয়র সহ-সভাপতি: দীপ্ত বিশ্বাস</p>
            <p>সহ-সভাপতি: প্রার্থী ঘোষ</p>
            <p>সহ-সভাপতি: জান্নাতুল সাদিয়া পুষ্প  </p>
            <p>সাধারণ সম্পাদক: শাহীনুর আক্তার শাহীন</p>
            <p>সহ-সাধারণ সম্পাদক: সুলতানা ইয়াসমিন</p>
            <p>সাংগঠনিক সম্পাদক: উম্মে সালমা নিঝুম	</p>
            <p>সহ-সাংগঠনিক সম্পাদক: আবদুর রহমান মাহবুব</p>
            <p>অর্থ সম্পাদক: সজীব তালুকদার</p>
            <p>অনুষ্ঠান সম্পাদক: শাকিল আহমেদ</p>
            <p>প্রচার ও প্রকাশনা সম্পাদক: নাইমা সুলতানা</p>
            <p>সহ-প্রচার ও প্রকাশনা সম্পাদক: অনন্যা বড়ুয়া  </p> 
            <p>দপ্তর সম্পাদক: পিয়ামনি চাকমা  </p> 
            <p>সহ-দপ্তর সম্পাদক: রোকেয়া নাসরিন  </p> 
            <p>নির্বাহী সদস্য: 
এমদাদ, ফরহাদ, হাকীম,আমরি, মাসুদ, মরিাজ, আসমা, তাহমদিা, জুনায়দে, ফাহিমা।  </p> 
           
            </div>


    </div>

    <script>


// .............................hero image slideshow...................................
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

// .....................................................................................
      </script>

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