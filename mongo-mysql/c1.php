<?php
function micro_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$time_taken = 0;
$tries = 100;
// connect
$time_start = microtime_float();

for($i=1;$i<=$tries;$i++)
{
    $m = new Mongo();
    $db = $m->swalif;
    $cursor = $db->posts->find(array('id' => array('$in' => get_15_random_numbers())));
    foreach ($cursor as $obj)
    {
        //echo $obj["thread_title"] . "<br><Br>";
    }
}

$time_end = microtime_float();
$time_taken = $time_taken + ($time_end - $time_start);
echo $time_taken;

function get_15_random_numbers()
{
    $numbers = array();
    for($i=1;$i<=15;$i++)
    {
        $numbers[] = mt_rand(1, 20000000) ;

    }
    return $numbers;
}

?>