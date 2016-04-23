<?php

  require_once('lib/init.php');

/******* MANAGE BACKGROUNDS */

  // array of backgrounds filenames
  $bg = array('https://unsplash.imgix.net/reserve/QGXfT1CkRpmvlwtPpgul_IMG_0558.jpg?q=75&fm=jpg&s=25c25f99c3faba09b92aacf40a9e9de5', 'https://unsplash.imgix.net/uploads/141223808515744db9995/3361b5e1?q=75&fm=jpg&s=04607c34357b70db74394f2fd8a6db7f', 'https://unsplash.imgix.net/reserve/z7R1rjT6RhmZdqWbM5hg_R0001139.jpg?q=75&fm=jpg&s=26fc77c65835d1d8e2bcffb8b91a1b93');

  // generate random number size of the array
  $i = rand(0, count($bg)-1);
  
  // set variable equal to which random filename was chosen
  $selectedBg = "$bg[$i]";

/* MANAGE BACKGROUNDS *******/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Uptime Statistics</title>
    <link rel="stylesheet" href="gfx/style.css">

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

      <div class="transparent">
        <div class="field">
            <center>
		<img src="<?php echo $config['logo']; ?>" class="logo" />
		<br/>
		<small>UPTIME STATISTICS
            </center>
            <h1></h1>
        <?php 
        //var_dump($results);
        $print = getOverall($results); 


// 24 Hour Ratio
        echo "<h4 class='positive'>".$print['day']."%</h4> 
        <span class='ratio-title'><p>last 24 hours</p></span>";

// 7 day ratio
        echo "<h4 class='positive'>".$print['week']."%</h4> 
        <span class='ratio-title'><p>last 7 days</p></span>";

// 30 day ratio
        echo "<h4 class='positive'>".$print['month']."%</h4> 
        <span class='ratio-title'><p>last 30 days</p></span>";

//All Time Ratio
        echo "<h4 class='positive' style='margin-top:30px'>".$print['alltime']."%</h4> 
            <span class='ratio-title'><p>from the start</p></span>";

        ?>
        </div>
    </div>
      
        <div id="footer" class="transparent">
            <center>Servers are monitored by<a href="https://uptimerobot.com/" target="_blank" class="uptime-logo"><img src="gfx/uptime-logo.png" border="0" /></a><small>Code used here is on <a href="https://github.com/l3dlp/PHP-UptimeRobot-Dashboard" target="_blank">GitHub</a>.<br/>Nice backgrounds come from <a href="https://unsplash.com/" target="_blank">Unsplash</a></small>
            </center>
        </div>

            </body>
</html>
