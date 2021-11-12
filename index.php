<?php
set_include_path(".");

session_start();
require_once('vendor/autoload.php');
require_once('app/controllers/HomeController.php');
require_once('app/controllers/MemberController.php');
require_once('app/controllers/TeamController.php');

$HomeController = new HomeController();
$MemberController = new MemberController();

function main()
{
    $controller = "HomeController";
    $method = "index";

    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
    }

    if (isset($_GET["method"])) {
        $method = $_GET["method"];
    }

    $c = new $controller();
    $c->$method();
}

main();
