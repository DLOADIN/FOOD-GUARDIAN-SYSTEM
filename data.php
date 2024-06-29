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
$rainfall_data = array(
    'kigali' => array(
        'WINTER' => array(768,1000),
        'SUMMER' => array(298,760),
        'SPRING' => array(693,1020),
        'FALL'   => array(1200,1800),
    ),
    'southern province' => array(
        'WINTER' => array(787,1110),
        'SUMMER' => array(460,1279),
        'SPRING' => array(336,1698),
        'FALL'   => array(800,1060),
    ),
    'northern province' => array(
        'WINTER' => array(350,1110),
        'SUMMER' => array(500,1780),
        'SPRING' => array(786,1289),
        'FALL'   => array(678,1200),
    ),
    'eastern province' => array(
        'WINTER' => array(457,892),
        'SUMMER' => array(360,1200),
        'SPRING' => array(423,1600),
        'FALL'   => array(330, 1283),
    ),
    'western province' => array(
        'WINTER' => array(857,1092),
        'SUMMER' => array(390,1000),
        'SPRING' => array(203,1600),
        'FALL'   => array(200, 2083),
    )
);

function predictProduction($province, $season, $rainfall) {
  global $rainfall_data;

  if (isset($rainfall_data[$province]) && isset($rainfall_data[$province][$season])) {
      $min_rainfall = $rainfall_data[$province][$season][0];
      $max_rainfall = $rainfall_data[$province][$season][1];

      // Calculate average rainfall (using midpoint)
      $average_rainfall = ($min_rainfall + $max_rainfall) / 2;

      $estimated_production = $rainfall / $average_rainfall * 10; 
      
      return round($estimated_production, 2); 
  } else {
      return "Data not available for the selected province and season.";
  }
}
if (isset($_POST['submit'])) {
  $province = $_POST['u_state'];
  $season = $_POST['u_season']; 
  $rainfall = $_POST['u_rainfall'];
  $crops = $_POST['u_crops'];

  // Calculate predicted production
  $predicted_production = predictProduction($province, $season, $rainfall);
?>
<div class="table">
    <h1>RESULT:</h1>
    <div class="few">
      <h3>Predicted Yield: tonnes</h3>
      <h3>Total estimated production:   tonnes</h3>
      
      <h3>
      Based on <?php echo $rainfall ?> mm of rainfall in <?php echo $province?> during  <?php echo $season?>, estimated production of <?php  echo $crops?> could be approximately <?php echo $predicted_production ?>tonnes.
      </h3>
      <?php
        }
      ?>
      <button class="le-button"><a href="crop-monitoring.php">BACK</a></button>
    </div>
  </div>
</body>
</html>