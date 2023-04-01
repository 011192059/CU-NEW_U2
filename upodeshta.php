<!DOCTYPE html>
<html>
  <head>
    <title>My Homepage</title>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: bottom;
        height: 100vh;
      }

      .box {
        background-color: white;
        border: 2px solid black;
        text-align: center;
        margin-bottom: 10px;
      }
      
      .box1 {
            padding-top: 30px;
            text-align: left;
            height: 170px;
          }

      .box2 {
        width: 1330px;
        height: 100px;
        display: flex;
        justify-content: left;
        flex-wrap: wrap;
      }
/* ............................... */
      .box22 {
        width: 1150px;
        height: 480px;
        display: flex;
        justify-content: left;
        flex-wrap: wrap;

        
        border: 2px solid black;
        flex-direction: column;
        align-items: center;
  /* width: 500px;
  height: 500px;
  background-color: lightgray;
  border: 1px solid black;
  display: flex;
  flex-direction: column;
  align-items: center; */
}

#bottom-row {
  display: flex;
  justify-content: center;
  width: 100%;
  height: 50%;
}

#top-image {
  max-width: 100%;
  max-height: 50%;
}

#box22 img {
  max-width: 20%;
  max-height: 100%;
}

      
/* ........................... */

      .header {
    display: flex;
    align-items: left;
  }

  .container1 {
        display: flex;
        flex-direction: column;

      }
      .box3 {
        width: 450px;
        height: 250px;
        margin-left: 10px;
      }

      .box7 {
        width: 200px;
        height: 118.5px;
        margin-left: 10px;
      }

      .box8 {
        width: 200px;
        height: 118.5px;
        margin-left: 10px;
      }

      .box9 {
        width: 100px;
        height: 52px;
        margin-left: 10px;
      }

      .box10 {
        width: 100px;
        height: 52px;
        margin-left: 10px;
      }
      .box11 {
        width: 100px;
        height: 52px;
        margin-left: 10px;
      }

      .box12 {
        width: 100px;
        height: 52px;
        margin-left: 10px;
      }

      .box13 {
        width: 300px;
        height: 250px;
        margin-left: 10px;
      }
      .box4 {
        width: 1330px;
        height: 400px;
      }

      .inner-box {
        width: 110px;
        height: 50px;
        background-color: white;
        border: 2px solid black;
        margin: 5px;
        text-align: center;
        flex-direction: row;

      }


/* -------------------hover dropdown--------------- */
.dropbtn {
  background-color: white;
  color: rgb(146, 28, 146);
  width: 110px;
  height: 50px;
  /* padding: 12px; */
  /* font-size: 16px; */
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fc96f7;
  /* min-width: 160px; */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rgb(146, 28, 146)}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: white;
}
    </style>
  </head>
  <body>
    <div class="box box1" style="background-color: black;">
      <div>
        <img src="Logo-1.jpg" width="600" height="60">
        <!-- <p>শাশ্বত সুন্দরের অনিবার্য অভ্যুত্থান কবিতা</p>
        <h2>চট্টগ্রাম বিশ্ববিদ্যালয় আবৃত্তি মঞ্চ</h2> -->
      </div>
    </div>
    <div class="container">
    
    
      <div class="box box2">
        <p>Box 2</p>
        <div class="inner-box">

          <div class="dropdown">
            <button class="dropbtn"><h3>পরিচিতি</h3</button>
            <div class="dropdown-content">
              <a href="#">সংগঠন পরিচিতি</a>
              <a href="#">গঠনতন্ত্র </a>
              <a href="#">উপদেষ্টা মন্ডলী </a>
              <a href="#">কাউন্সিল</a>
              <a href="#">প্রাক্তন</a>
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
              <a href="#">প্রেক্ষা </a>
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
        <!-- <div class="inner-box">
          <div class="dropdown">
            <button class="dropbtn"><h3>গ্যালারি</h3</button>
            <div class="dropdown-content">
              <a href="#">আলোকচিত্র </a>
              <a href="#">ভিডিও</a>
            </div>
          </div>
        </div> -->
        <div class="inner-box" style="color:rgb(78, 55, 29);"><h3>ব্লগ</h3></div>
      </div>
      <!-- <div class="header">
      <div class="box box3">
        <p>সর্বশেষ আপডেট</p>
      </div> -->
    

      
     <!-- <div class="container"> -->
    
    
        
        <div class="box box22">
          <!-- <p>উপদেষ্টা মন্ডলী</p>
         -->

         <!-- <div id="box"> -->
            <img id="top-image" src="7.jpg" alt="Example Image 1">
            <div id="bottom-row">
              <img src="veg.jpg" alt="Example Image 2">
              <img src="tomato.jpg" alt="Example Image 3">
              <img src="potatoes.jpg" alt="Example Image 4">
              <img src="22.jpg" alt="Example Image 5">
              <img src="veg.jpg" alt="Example Image 2">
              <img src="tomato.jpg" alt="Example Image 3">
              <img src="potatoes.jpg" alt="Example Image 4">
              <img src="22.jpg" alt="Example Image 5">
              
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
