<?php require_once('functions.php'); ?>
<?php
  $bg = array('https://unsplash.imgix.net/reserve/QGXfT1CkRpmvlwtPpgul_IMG_0558.jpg?q=75&fm=jpg&s=25c25f99c3faba09b92aacf40a9e9de5', 'https://unsplash.imgix.net/uploads/141223808515744db9995/3361b5e1?q=75&fm=jpg&s=04607c34357b70db74394f2fd8a6db7f', 'https://unsplash.imgix.net/reserve/z7R1rjT6RhmZdqWbM5hg_R0001139.jpg?q=75&fm=jpg&s=26fc77c65835d1d8e2bcffb8b91a1b93'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Platform Uptime Stats</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <style type="text/css">
    body{
        background: url(<?php echo $selectedBg; ?>) no-repeat center center;
        background-size: cover;
        /* Backgrounds by https://unsplash.com/ `*/
    }
    </style>
      
  </head>
  <body>
      <div class="row">
      <div class="col-centered col-lg-6 col-md-6 col-md-offset-3 transparent">
        <div class="field">
            <h1><center>Live Platform Uptime Statistics</center></h1>
        <?php 
        //var_dump($results);
        $print = getOverall($results); 

//All Time Ratio
        echo '<div id="alltime">';
        echo "<h4 class='positive'>".$print['alltime']."%</h4> 
            <span class='ratio-title'><p>all time</p></span>";
        echo '</div>';

// 24 Hour Ratio
        echo "<h4 class='positive'>".$print['day']."%</h4> 
        <span class='ratio-title'><p>last 24 hours</p></span>";

// 7 day ratio
        echo "<h4 class='positive'>".$print['week']."%</h4> 
        <span class='ratio-title'><p>last 7 days</p></span>";

// 30 day ratio
        echo "<h4 class='positive'>".$print['month']."%</h4> 
        <span class='ratio-title'><p>last 30 days</p></span>";

        ?>
        </div>
    </div>
</div>
      
      <div class="row">
        <div id="footer" class="col-centered col-lg-6 col-md-6 col-md-offset-3 transparent">
            <center>Powered by <a href="https://uptimerobot.com/" target="_blank">UptimeRobot.com</a>. Get the code at <a href="https://github.com/adammatthews/PHP-UptimeRobot-Dashboard" target="_blank">GitHub</a>. Backgrounds provided by <a href="https://unsplash.com/" target="_blank">Unsplash</a><br />
                Website development and hosting by <a href="http://adammathews.co.uk">Adam Matthews</a>
            </center>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            </body>
</html>