<?php

require_once './Clases/Usuario.php';
session_start();

//objeto en variable de session
echo $_SESSION['user']->user;