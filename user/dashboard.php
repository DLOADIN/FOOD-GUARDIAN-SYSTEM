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
  <link rel="stylesheet" href="./CSS/charts.css">
  <link rel="shortcut icon" href="./image/th.jpeg.jpg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="jsfile.js"></script>
  <title>DASHBOARD</title>
</head>
<body>
  <style>
    #main-contents{
      height:200vh;
    }
    .caradan-products{
      text-decoration: none;
    }
    .table-container {
        width: 100%;
        margin: 20px auto;
        border-collapse: collapse;
    }
    .table-container th, .table-container td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    .table-container th {
        background-color: #f2f2f2;
        color: #333;
    }
    .table-container td img {
        width: 50px;
        height: auto;
        border-radius: 50%;
    }
    .price-up {
        color: green;
    }
    .price-down {
        color: red;
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
          <h1>DASHBOARD</h1>
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
  <div class="chaladan">
    <h1>Real-time Data Feed</h1>
    <div class="merge">
      <div class="food-access">
        <canvas id="tom-clancy"></canvas>
      </div>
      <h1>Decision Dashboard</h1>
      <div class="food-access">
        <canvas id="sand-worm"></canvas>
      </div>
    </div>
  </div>
  <h2>Market Analysis And Trends</h2>
<table class="table-container">
    <thead>
        <tr>
            <th>Type Food</th>
            <th>Community Concerns</th>
            <th>Price Fluctuations</th>
            <th>Price Trends</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <img src="./image/pexels-pixabay-265216.jpg" alt="Wheats"> Wheats
            </td>
            <td>Testing Started</td>
            <td class="price-up">8% <span>&#8593;</span></td>
            <td>20$</td>
        </tr>
        <tr>
            <td>
                <img src="./image/pexels-livier-garcia-645743-1459339.jpg" alt="Staple Crops"> Staple Crops
            </td>
            <td>Researchers started testing</td>
            <td class="price-down">18% <span>&#8595;</span></td>
            <td>20$</td>
        </tr>
        <tr>
            <td>
                <img src="./image/pexels-janetrangdoan-1128678.jpg" alt="Vegetables and Fruits"> Vegetables and Fruits
            </td>
            <td>Researchers started testing</td>
            <td class="price-up">38% <span>&#8593;</span></td>
            <td>20$</td>
        </tr>
    </tbody>
</table>
  <div class="far-off">
      <div class="one-time">
        <canvas id="children">
        </canvas>
        <h2>93%</h2>
        <div id="emerging-info">
            <p>Type Food</p>
            <p>Wheats: 20$</p>
            <p>Staple Crops: 20$</p>
            <p>Fruits: 20$</p>
        </div>
    </div>
    <div class="one-time">
        <canvas id="stongone"></canvas>
        <h2>43%</h2>
        <div id="fluctuation-info">
            <p>Type Food</p>
            <p>Wheats: 18% <span style="color:red;">&#8595;</span></p>
            <p>Staple Crops: 18% <span style="color:red;">&#8595;</span></p>
            <p>Fruits: 18% <span style="color:green;">&#8593;</span></p>
        </div>
    </div>
      </div>
  </div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="./charts/linechart.js"></script>
<script src="./charts/app.js"></script>
<script>
  const labels3 = ['JANUARY', 'FEBRUARY', 'MARCH', 'MAY', 'JUNE'];
    const data3 = {
      labels: labels3,
      datasets: [{
        label: 'Yield Production as expected',
        data: [11, 16, 7, 3, 14],
        backgroundColor: ['rgb(255, 99, 132)', 'rgb(75, 192, 192)', 'rgb(255, 205, 86)', 'rgb(201, 203, 207)', 'rgb(54, 162, 235)'],
        borderWidth: 1
      }]
    };
    const canvas3 = document.getElementById('sand-worm');
    const ctx3 = canvas3.getContext('2d');
    new Chart(ctx3, {
      type: 'radar',
      data: data3,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  
</script>
</body>
</html>
