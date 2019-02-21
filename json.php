<?php
$callback = $_GET["callback"];

function udate($format, $utimestamp = null) {
if (is_null($utimestamp))
$utimestamp = microtime(true);

$timestamp = floor($utimestamp);
$milliseconds = round(($utimestamp - $timestamp) * 1000000);

return date(preg_replace('`(?<!\\\\)u`', $milliseconds, $format), $timestamp);
}

 $t =  udate('H:i:s:u');

 echo $callback . "({
 \"time\":\"$t\"

 })";
 ?>
 
