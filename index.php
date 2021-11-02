<?php
set_include_path(".");

session_start();
require_once ('vendor/autoload.php');
require_once ('controllers/HomeController.php');
require_once ('controllers/MemberController.php');

$HomeController = new HomeController();
$MemberController = new MemberController();

<<<<<<< Updated upstream
$HomeController->index();

if (isset($_POST['list_members'])) {
    $MemberController->index();
}
if (isset($_POST['list_team'])) {
    $MemberController->team(USER_ID);
}
if (isset($_POST['list_moderators'])) {
    $MemberController->mods_list();
}
=======
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
>>>>>>> Stashed changes
