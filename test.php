<?php

$test_connect = mysql_connect('localhost', 'root', 'password');
if (!$test_connect) {
die('Could not connect: ' . mysql_error());
}
echo 'Successful database connection.';
mysql_close($test_connect);

