<?php require_once('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        body{
            font-family: "Helvetica Neue", arial, sans-serif
        }
        .positive{
            color: #57A957;
            text-shadow:0px -1px 0 rgba(0, 0, 0, 0.8);
        }
    </style>

    <title>Overall Site Uptime Stats</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Live Site Uptime Statistics</h1>
    <div class="well">
        <?php 
        $print = getOverall($results); 
        echo "<h4 class='positive'>".$print['day']."%</h4> <span>(last 24 hours)</span>";
        echo "<h4 class='positive'>".$print['week']."%</h4> <span> (last 7 days)</span>";
        echo "<h4 class='positive'>".$print['month']."%</h4> <span> (last 30 days)</span>";
        ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>