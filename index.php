<?php

$now = time();

$birthdate = strtotime('1995-05-10');

$difference = $now - $birthdate;


$age = floor($difference / 3600/24);


echo $age;