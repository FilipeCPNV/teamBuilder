<?php

require_once 'vendor/autoload.php';
require_once 'model/Team.php';

use Thynkon\SimpleOrm\database\Connector;

class TeamController
{
    public function index()
    {

    }
    public function show($id)
    {
        $user = Member::find(USER_ID);
        $team = Team::find($id);
        require_once "views/team_info.php";
    }
}