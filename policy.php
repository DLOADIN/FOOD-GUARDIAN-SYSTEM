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
  <link rel="stylesheet" href="./CSS/charts.css">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="jsfile.js"></script>
  <title>POLICY</title>
</head>
<body>
  <style>
    #main-contents{
      height:200vh;
    }
    .caradan-products{
      text-decoration: none;
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
          <h1>POLICY</h1>
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
  <div class="chaladan">
    <h1>Decision Dashboard</h1>
    <div class="merge">
      <div class="food-access">
        <canvas id="acquisitions"></canvas>
      </div>
      <div class="food-access">
        <canvas id="lenovo" class="lenovo"></canvas>
      </div>
      <div class="food-access">
        <canvas id="sand-worm"></canvas>
      </div>
      </div>
  </div>
  <div class="chaladan" id="chaladan">
    <h1>Actionable Recommendations</h1>
    <div class="merge">
      <div class="food-access" id="food-access">
        <h2>
        Recommendation 1
        </h2>
        <h3>
        Increasing investment in climate resilient agriculture
        </h3>
          <h4>
          Short descriptions of why each recommendation is importantShort descriptions of why each recommendation is important
        </h4>
        <h4 class="h4">Urgency Level: <span>High<span></h4>
        <h4 class="h4">Impact Level: <span>Significant<span></h4>
      </div>
      <div class="calados">
      <div class="food-access" id="food-access">
        <h2>
        Recommendation 2
        </h2>
        <h3>
        Implementing targeted nutrition programs for vulnerable populations
        </h3>
          <h4>
          Short descriptions of why each recommendation is importantShort descriptions of why each recommendation is important
        </h4>
        <h4 class="h4">Urgency Level: <span>Medium<span></h4>
        <h4 class="h4">Impact Level: <span>Moderate<span></h4>
      </div>
      </div>
      <div class="calados">
      <div class="food-access" id="food-access">
        <h2>
        Recommendation 3
        </h2>
        <h3>
        Reforming trade policies to improve market access for smallholder farmers
        </h3>
          <h4>
          Short descriptions of why each recommendation is importantShort descriptions of why each recommendation is important
        </h4>
        <h4 class="h4">Urgency Level: <span>Low<span></h4>
        <h4 class="h4">Impact Level: <span>Minor<span></h4>
      </div>
      </div>
      </div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<script src="./charts/pie.js"></script>
