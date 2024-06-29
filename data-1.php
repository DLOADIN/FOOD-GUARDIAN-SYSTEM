<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./image/th.jpeg.jpg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/14ff3ea278.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="jsfile.js"></script>
  <title>PREDICTION</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Signika:wght@300..700&family=Space+Grotesk:wght@300..700&display=swap');
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
  border:none;
  font-family: "Inter", sans-serif;
  font-optical-sizing: auto;
  font-weight: bold;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
}
  #body-body{
    background-color:green;
    justify-content:center;
  }

  .table{
    margin:5rem 0rem 0rem 0rem;
  }
  .table h1{
    align-items:Center;
    text-align:center;
    color:white;
  }
  .few{
    border-radius:15px;
    margin:0 auto;
    font-size:30px;
    padding:10px;
    width:50%;
    background-color:lightgreen;
    line-height:10vh;
  }
  .le-button{
    margin:0 auto;
    background-color:#69B936;
    color:white;
    padding:12px 20px;
    border-radius:15px;
    width:60vh;
    font-size:20px;
  }
  a{
    text-decoration:none;
    color:white;
  }
</style>
<body id="body-body">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height = $_POST['u_height'] / 100; // Convert height to meters
    $weight = $_POST['u_weight'];
    $age = $_POST['u_years'];

    $bmi = $weight / ($height * $height);

    // Determine the category based on BMI
    if ($bmi < 18.5) {
        $result = "underweight (skinny)";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $result = "healthy weight";
    } elseif ($bmi >= 25) {
        $result = "overweight (obese)";
    }
}
?>

<div class="table">
    <h1>RESULT:</h1>
    <div class="few">
      <h3>
      Based on your BMI of<?php number_format($bmi, 1) ?>, you are classified as: <?php echo $result;?>
      </h3>
      <button class="le-button"><a href="nutrition.php">BACK</a></button>
    </div>
  </div>
</body>
</html>