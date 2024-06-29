<?php
  require "connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `admin` WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginadmin.php');
  } 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/newfriend.css">
  <link rel="stylesheet" href="./CSS/another-one.css">
  <link rel="shortcut icon" href="./image/th.jpeg.jpg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="jsfile.js"></script>
  <title>FORECASTS</title>
</head>
<body>
  <style>
    #main-contents{
      height:200vh;
    }
    .caradan-products{
      text-decoration: none;
    }
    .button-to-what{
      display: flex;
      justify-content: center; /* Horizontal centering */
      align-items: center;     /* Vertical centering */
      height: 10vh; 
    }
  </style>
<div class="sidebar" id="sidebar">
      <ul class="menu">
        <div class="logout">
        <li>
          <a href="dashboard.php">
            <i class="fa-solid fa-house-chimney"></i>
            <span>DASHBOARD</span>
          </a>
        </li>
        <li>
        <a href="crop-monitoring.php">
          <i class="fa-solid fa-pen"></i>
            <span>CROP MONITORING</span>
          </a>
        </li>
        <li>
          <a href="market-analysis.php">
          <i class="fa-solid fa-chart-simple"></i>
            <span>MARKET ANALYSIS</span>
          </a>
        </li>
        <li>
          <a href="email.php">
          <i class="fa-solid fa-comment"></i>
            <span>EMAIL US</span>
          </a>
        </li>
        <li>
          <a href="policy.php">
          <i class="fa-solid fa-scale-balanced"></i>
            <span>POLICY SUPPORT</span>
          </a>
        </li>
        <li>
            <a href="nutrition.php">
            <i class="fa-solid fa-bowl-food"></i>
              <span>NUTRITION SURVEILLANCE</span>
            </a>
        </li>
        <li class="dropdown-li">
            <a href="">
              <i class="fa-solid fa-cloud-sun-rain"></i>
              <span>CLIMATE MODELLING</span>
              <i class="fa-solid fa-caret-right"></i>
            </a>
            <ul class="dropdown">
              <li>
                <a href="temperature.php">
                <i class="fa-solid fa-caret-right"></i>
                  <span>TEMPERATURE & TRENDS</span>
                </a>
              </li>
              <li>
                <a href="forecasts.php">
                <i class="fa-solid fa-caret-right"></i>
                  <span>FORECASTS & ALERTS</span>
                </a>
              </li>
            </ul>
      </li>
          <li class="dropdown-li">
          <a href="">
          <i class="fa-solid fa-truck-fast"></i>
            <span>SUPPLY CHAIN & LOGISTIC</span>
          </a>
          <ul class="dropdown">
          <li>
              <a href="inventory-management.php">
              <i class="fa-solid fa-caret-right"></i>
              <span>INVENTORY MANAGEMENT</span>
                </a>
              </li>
          <li>
              <a href="distribution.php">
              <i class="fa-solid fa-caret-right"></i>
              <span>DISTRIBUTION NETWORK</span>
                </a>
              </li>
        </ul>
        <li>
          <a href="profile.php">
          <i class="fa-solid fa-user"></i>
            <span>PROFILE</span>
          </a>
        </li>
    </ul>
  </div>


    <div class="main-content content-right" id="main-contents">
      <div class="header-wrapper">
        <div class="header-title">
          <h1>FORECASTS</h1>
        </div>
        <div class="user-info">
        <div class="gango">
          <?php
            $sql=mysqli_query($con, "SELECT u_name from `admin` WHERE id='$id'");
            $row=mysqli_fetch_array($sql);
            $attorney=$row['u_name'];
            ?>
          <h2 class="my-account-header">
          <?php echo $attorney?>
            </h2>
          <p>User</p></div> 
          <button name="submit" type="submit" class="btn-3" >
            <a href="logout.php">LOGOUT</a>
          </button>
        </div>       
  </div>

  <div class="saturation">
    <h2>The first slide: Highlights the temperature ranges in Chad from 2001 - 2022</h2>
    <h2>The second slide: Highlights the amount of rainfall received Chad from 2001 - 2022</h2>
    <h2>The third slide: Highlights the potential xposure to heatwaves that are anticipated in the future between 2010 - 2070</h2>
    <h2>The fourth slide: Highlights the potential heat-related mortality that are anticipated in the future 2010 - 2070</h2>
  </div>

  <div class="the-container">
    <div class="the-wrapper">
      <div class="the-wrapper-holder">
        <div id="slider-img-1"></div>
        <div id="slider-img-2"></div>
        <div id="slider-img-3"></div>
        <div id="slider-img-4"></div>
      </div>
    </div>
    <div class="button-holder">
      <a href="#slider-img-1" class="button"></a>
      <a href="#slider-img-2" class="button"></a>
      <a href="#slider-img-3" class="button"></a>
      <a href="#slider-img-4" class="button"></a>
    </div>
  </div>
  <div class="saturation">
    <h2>Reference</h2>
    <h2><a href="https://agrica.de/category/country/chad/">AGRICA CHAD</a></h2>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<style>
  *{
    margin: 0;
    padding: 0;
  }
  .the-container{
    position:relative;
  }
  .the-container .the-wrapper{
    width:50vw;
    height:120vh;
    box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
    margin: 5rem auto;
    overflow: hidden;
  }
  .the-container .the-wrapper-holder{
    display:grid;
    grid-template-columns: repeat(4,100%);
    height:100%;
    width:100%;
    animation: slider 30s ease-in-out infinite alternate;
  }
  .the-container #slider-img-1{
    background-image: url('./image/chad_chirts_seasonal_jandec_sta.png');
    background-position:center;
  }
  .the-container #slider-img-2{
    background-image: url('./image/Presentation-of-the-map-of-Chad-with-the-three-climatic-zones.png');
    background-position:center;
  }
  .the-container #slider-img-3{
    background-image: url('./image/hrm_chad_n15_yNone_x2000_sTrue_rFalse_nolegend.png');
    background-position:center;
  }
  .the-container #slider-img-4{
    background-image: url('./image/exposure_heatwaves_population_chad_n15_yNone_x2000_sTrue_rFalse_nolegend.png');
    background-position:center;
  }
  .the-container .button-holder .button{
    background-color:#fff;
    width:15px;
    height:15px;
    border-radius: 15px;
    display:inline block;
    margin: .3rem;
  }
  .the-container .button{
    position: absolute;
    left:45%;
    bottom: 0%;
  }
  .button:hover{
    box-shadow: 0px 0px 7px 4px rgba(0, 255, 255, 0.6);
  }
  .saturation{
    text-align: center;
    gap:4;
    line-height:4vh;
    box-shadow: 0px 0px 7px 4px rgba(0, 255, 255, 0.6);
    border-radius: 10px;
    width:fit-content;
    padding:0px 2.3rem;
    margin:0 auto
  }
@keyframes slider{
  0%{transform: translateX(0%)}
  10%{transform: translateX(-100%)}
  20%{transform: translateX(-100%)}
  30%{transform: translateX(-200%)}
  40%{transform: translateX(-200%)}
  50%{transform: translateX(-200%)}
  60%{transform: translateX(-300%)}
  70%{transform: translateX(-300%)}
  80%{transform: translateX(-300%)}
  90%{transform: translateX(0%)}
  100%{transform: translateX(0%)}
}
</style>
