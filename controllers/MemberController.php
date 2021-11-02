<?php

require_once('vendor/autoload.php');
require_once 'model/Member.php';

use Thynkon\SimpleOrm\database\Connector;

class MemberController
{
    public function index()
    {
<<<<<<< Updated upstream
=======
        //Get the current user
        $user = Member::find(USER_ID);

        //Get all the members
>>>>>>> Stashed changes
        $members = Member::all();

        //Sort the members by name
        usort($members, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });

        //Show the page
        require_once('views/member/list.php');
    }
<<<<<<< Updated upstream
    public function team($id)
    {
        $member = Member::find($id);
        require_once('views/member_team.php');
=======

    public function team()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        //Get the current user teams
        $teams = $user->teams();

        //Sort the teams by name
        usort($teams, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });

        //Show the page
        require_once('views/member/team.php');
>>>>>>> Stashed changes
    }

    public function mods_list()
    {
<<<<<<< Updated upstream
=======
        //Get the current user
        $user = Member::find(USER_ID);

        //Get all the moderators
>>>>>>> Stashed changes
        $moderators = Member::moderators();

        //Sort the moderators by name
        usort($moderators, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });

        //Show the page
        require_once('views/moderator/list.php');
    }
}