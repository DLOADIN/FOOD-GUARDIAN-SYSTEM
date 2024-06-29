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
  <title>CROP MONITORING</title>
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
          </ul>
        </li>
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
          <h1>CROP MONITORING AND CROP PREDICTION</h1>
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
        <div class="catch">
            <form action="data.php" method="post" class="form-form">
          <div class="formation-1">
            <label for="">ENTER YOUR STATE</label>
            <select name="u_state"id="u_season">
              <option value="kigali">KIGALI</option>
              <option value="southern province">SOUTHERN PROVINCE</option>
              <option value="northern province">NORTHERN PROVINCE</option>
              <option value="eastern province">EASTERN PROVINCE</option>
              <option value="western province">WESTERN PROVINCE</option>
            </select>
            <label for="">ENTER CURRENT SEASON</label>
            <select name="u_season" id="u_season">
              <option value="WINTER">WINTER</option>
              <option value="SUMMER">SUMMER</option>
              <option value="FALL">FALL</option>
              <option value="SPRING">SPRING</option>
            </select>
            <label for="">ENTER YOUR CROPS</label>
            <input type="text" name="u_crops" id="" placeholder="CROPS" required>
            <label for="">ENTER RECEIVED RAINFALL</label>
            <input type="number" name="u_rainfall" id="" placeholder="mm" required>
            <button name="submit" type="submit" class="btn-3" >PREDICT</a></button>
          </div>
            </form>
        </div>
        <!-- <style>
          .fired-up{
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            margin-bottom:10vh
          }
          #myChart:hover{
            transform: scale(1.1);
            transition:all 0.6s linear;
          }
          .a-card{
            width:38vh;
            height:14vh;
            justify-items:center;
            align-items:center;
            background-color:#F4F4F4;
            border-radius:9px;
            border: 1.5px solid black;
            opacity:90%;
            display:flex;
            justify-content: center;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
          }
          .a-card i{
            color:black;
            font-size:40px
          }
          #myChart {
            width: 70rem; /* Adjust width as needed */
            height: 50rem; /* Adjust height as needed */
            margin: 0 auto;
            border:0.5px solid black;
            border-radius:13px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
          .a-card p{
            color:black;
          }
          .a-card h1{
            font-size:50px;
            color:#69B936;
          }
          .cardan h1{
            color:black;
          }
          .cardan{
            margin: 1rem 0rem 0rem 0rem;
          }
          .vabriant{
            margin: 3rem 0rem 0rem 0rem;
          }
          h1{
            color: #69B936;
            margin: 0 auto;
          }
           p{
            color:#69B936;
            margin:1.0rem 0rem 0rem 0rem;
          }
          .variant{
            margin:0rem 0rem 0rem 3rem;
          }
        </style> -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>