<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

$date = new DateTime();

echo $date->format('d-m-Y')." <br>";
echo $date->format('d-m-Y H:i:s')." <br>";


echo date('d-m-Y');