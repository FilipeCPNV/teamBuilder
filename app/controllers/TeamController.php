<?php

require_once 'vendor/autoload.php';
require_once 'app/models/Team.php';

use Thynkon\SimpleOrm\database\Connector;

class TeamController
{
    public function index()
    {
    }

    public function show()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        //Get the team
        $team = Team::find($_GET["team_id"]);

        //Show the team info
        require_once "public/views/team/info.php";
    }

    public function createForm()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        require_once "public/views/team/create.php";
    }

    public function create()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        //Create a new team
        $team = new Team();
        $team->name = $_POST["team_name"];
        $team->state_id = "2";

        //Check if the name isn't already used
        if (!$team->create()) {
            $_SESSION['flash_message'] = "I'm a flash message";
        }
    }
}