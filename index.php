<?php
set_include_path(".");

session_start();
require_once ('vendor/autoload.php');
require_once ('controllers/HomeController.php');
require_once ('controllers/MemberController.php');
require_once ('controllers/TeamController.php');

$HomeController = new HomeController();
$MemberController = new MemberController();
$TeamController = new TeamController();

$action = isset($_GET["action"])?$_GET["action"]:"home";
$id = isset($_GET["id"])?$_GET["id"]:"0";

switch ($action){
    case "showTeam":
        $TeamController->show($id);
        break;
    case "showMembers":
        $MemberController->index();
        break;
    case "showMyTeams":
        $MemberController->team();
        break;
    case "showModerators":
        $MemberController->mods_list();
        break;
    default:
        $HomeController->index();
        break;
}