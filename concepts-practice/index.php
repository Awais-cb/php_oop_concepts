<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autoload.php';

use \Doctor\Intro as intro;
use \User as user;


$userIntro = new user\UserIntro();
$userIntro->displayName();

echo  "******************************";

$doctorIntro = new intro\DoctorIntro();
$doctorIntro->displayName();


// \Doctor\Intro\displayName();