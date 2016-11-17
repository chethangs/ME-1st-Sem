<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_taken = 0;
$tries = 100;
$time_start = microtime_float();
for($i=1;$i<=$tries;$i++)
{
    $db = new AQLDatabase();
    $sql = "select * from posts_really_big where id in (".implode(',',get_15_random_numbers()).")";
    $result = $db->executeSQL($sql);
    while ($row = mysql_fetch_array($result) )
    {
        //echo $row["thread_title"] . "<br><Br>";
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
        $numbers[] = mt_rand(1, 20000000);

    }
    return $numbers;
}
?>