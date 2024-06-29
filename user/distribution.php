<?php
  require "../connection.php";
  if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $check = mysqli_query($con,"SELECT * FROM `user` WHERE id=$id ");
  $row = mysqli_fetch_array($check);
  }
  else{
  header('location:loginuser.php');
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
  <title>DISTRIBUTION NETWORK</title>
</head>
<body>
  <style>
    #main-contents{
      height:200vh;
    }
    .caradan-products{
      text-decoration: none;
    }
    .fandago{
      margin:0 auto;
      text-align:center;
      justify-content:center;
    }
    .fandago button{
      border-radius: 10px;
      margin: 1rem;
      height: 60px;
      border: none;
      background-color:#69B936;
      color: aliceblue;
      cursor: pointer;
      font-size: 1em;
      font-weight: 800;
      padding:10px 15px
    }
    /* Styling for pictures */
.picture {
  display: none; /* Initially hide the pictures */
  max-width: 100%; /* Adjust as per your requirement */
  height: auto;
  border: 2px solid #ccc; /* Example border */
  margin-bottom: 10px; /* Example margin */
}

/* Additional styling for specific pictures */
.picture:nth-child(1) {
  margin:0 auto;
  width:40rem;
  height:40rem;
  box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
  border-radius:5px;
}

.picture:nth-child(2) {
  margin:0 auto;
  border-radius:5px;
  box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
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
          <a href="market-analysis.php">
          <i class="fa-solid fa-chart-simple"></i>
            <span>MARKET ANALYSIS</span>
          </a>
        </li>
        <li>
          <a href="policy.php">
          <i class="fa-solid fa-scale-balanced"></i>
            <span>POLICY SUPPORT</span>
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
          <h1>DISTRIBUTION NETWORK</h1>
        </div>
        <div class="user-info">
        <div class="gango">
          <?php
            $sql=mysqli_query($con, "SELECT u_name from `user` WHERE id='$id'");
            $row=mysqli_fetch_array($sql);
            $attorney=$row['u_name'];
            ?>
          <h2 class="my-account-header">
          <?php echo $attorney?>
            </h2>
          <p>Manager</p></div> 
          <button name="submit" type="submit" class="btn-3" >
            <a href="logout.php">LOGOUT</a>
          </button>
        </div>       
  </div>
  <div class="fandago">
    <button type="button" class="button-1">VEHICLE TRACKING</button>
    <button type="button" class="button-2">REAL-TIME TRAFFIC UPDATES</button>
  </div>

  <div class="fandago" id="fandago">
  <img src="./image/TCD_LCA_RoadNetwork_A4P_20230413_0.png" alt="Picture 1" class="picture">
  <img src="./image/2020-08-25-iss-today-chad-tramadol-map.png" alt="Picture 2" class="picture">
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const buttons = document.querySelectorAll('.fandago button');
  const pictures = document.querySelectorAll('.fandago .picture'); 

  buttons.forEach((button, index) => {
    button.addEventListener('click', function() {
      pictures.forEach(picture => picture.style.display = 'none');
      
      // Show the corresponding picture
      pictures[index].style.display = 'block';

      // Automatically hide the picture after 30 seconds
      setTimeout(() => {
        pictures[index].style.display = 'none';
      }, 40000); // 30 seconds (30000 milliseconds)
    });
  });

  // Hide pictures when clicking anywhere else on the page
  document.addEventListener('click', function(event) {
    if (!event.target.closest('.fandago')) {
      pictures.forEach(picture => picture.style.display = 'none');
    }
  });
});
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
