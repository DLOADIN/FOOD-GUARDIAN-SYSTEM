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
  <title>INVENTORY MANAGEMENT</title>
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
          <h1>INVENTORY MANAGEMENT</h1>
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
        <table class="table-container">
    <thead>
        <tr>
            <th>#</th>
            <th>USER NAME</th>
            <th>PRODUCT NAME</th>
            <th>ORDERS</th>
            <th>TYPE</th>
            <th>DATE</th>
        </tr>
    </thead>
    <?php
            $number=0;
             $sql = "SELECT `admin`.u_name,`data`.u_productname, `data`.u_orders, `data`.u_type, `data`.u_date from `data` INNER JOIN `admin` ON `data`.u_foreignid = `admin`.`id`";
                $result = mysqli_query($con, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  $number++;
            ?>
    <tbody>
        <tr>
            <td><?php echo  $number?></td>
              <td><?php echo $row['u_name']?></td>
              <td><?php echo $row['u_productname']?></td>
              <td><?php echo $row['u_orders']?></td>
              <td><?php echo $row['u_type']?></td>
              <td><?php echo $row['u_date']?></td>
        </tr>
    </tbody>
    <?php 
    }}
    ?>
</table>
        
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
  $idetity=$_POST['u_foreignid'];
  $customer_name=$_POST['u_name'];
  $product_name=$_POST['u_productname'];
  $number_orders=$_POST['u_orders'];
  $delivery_type=$_POST['u_type'];
  $date=date('Y-m-d',strtotime($_POST['u_date']));
  $sql=mysqli_query($con,"INSERT INTO `data` VALUES('','$idetity','$customer_name','$product_name','$number_orders','$delivery_type','$date')");

if($sql){
  echo "<script>alert('Stored Successfully | Order Now being processed')</script>";
}
else{
  echo "<script>alert('failed to process order | please contact the admin via Email')</script>";
}
}
?>
