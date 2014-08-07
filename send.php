<?php 

include("lib/Pusher.php");

$pusher = new Pusher('0f12f4175f151876a520', '889319b2023b436cdecf', '84616');

$channel = $_REQUEST['channel'];
$event = $_REQUEST['event'];
$payload = $_REQUEST['payload'];

$pusher->trigger('my-channel', 'my-event', json_decode($payload));

echo '{ "status" : "send" }';