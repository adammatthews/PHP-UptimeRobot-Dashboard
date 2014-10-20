<?php
require_once('UptimeRobot/config.php');
use UptimeRobot\API;

try {

    //Initalizes API with config options
    $api = new API($config);
    //Define parameters for our getMethod request
    $args = [
        'showTimezone' => 1,
        'customUptimeRatio' => '7-30-45'
    ];

    //Makes request to the getMonitor Method
    $results = $api->request('/getMonitors', $args);

    //Output json_decoded contents
     // var_dump($results);

} catch (Exception $e) {
    echo $e->getMessage();
    //Output various debug information
    var_dump($api->debug);
}



    $alltime = 0;

    foreach($results as $x){
        foreach($x['monitor'] as $y){
                $alltime += $y['alltimeuptimeratio'];
        }
    }

    echo round($alltime / $results["total"],2);


?>