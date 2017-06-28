<?php
$link = mysqli_connect('52.66.184.118', 'root', 'partsimple17#');
if (!$link) {
    die('Could not connect: ' . mysql_error());
} else {
	die("DONE");
}
