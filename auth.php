<?php 

include("lib/Pusher.php");

// global $user;
if (true)
{
  $pusher = new Pusher('0f12f4175f151876a520', '889319b2023b436cdecf', '84616');
  echo $pusher->socket_auth($_POST['channel_name'], $_POST['socket_id']);
}
else
{
  header('', true, 403);
  echo "Forbidden";
}
?>