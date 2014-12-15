<?php
$link = mysql_connect('localhost', 'root', 'satana22');

$charset = mysql_client_encoding($link);
printf ("current character set is %s\n", $charset);
?>