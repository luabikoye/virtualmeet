<?php
$roomName = "MeetingRoom_" . uniqid();
$jitsiServer = "https://meet.jit.si"; // Change this to your server if self-hosted
?>

<iframe allow="camera; microphone; fullscreen; display-capture"
    src="<?php echo $jitsiServer; ?>/<?php echo $roomName; ?>" style="width: 100%; height: 600px; border: 0;"></iframe>