<?php
set_include_path(".");

session_start();
require_once ('vendor/autoload.php');
require_once ('controllers/HomeController.php');
require_once ('controllers/MemberController.php');

$HomeController = new HomeController();
$MemberController = new MemberController();

$HomeController->index();
$MemberController->index();
