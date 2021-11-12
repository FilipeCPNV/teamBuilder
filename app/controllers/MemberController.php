<?php

require_once 'vendor/autoload.php';
require_once 'app/models/Member.php';

use Thynkon\SimpleOrm\database\Connector;

class MemberController
{
    public function index()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        //Get all the members
        $members = Member::all();

        //Sort the members by name
        usort($members, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });

        //Show the page
        require_once('public/views/member/list.php');
    }

    public function teams()
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
        require_once('public/views/member/team.php');
    }

    public function mods_list()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        //Get all the moderators
        $moderators = Member::moderators();

        //Sort the moderators by name
        usort($moderators, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });

        //Show the page
        require_once('public/views/moderator/list.php');
    }

    public function profil()
    {
        //Get the current user
        $user = Member::find(USER_ID);

        //Get the user profil
        $user_profil = Member::find($_GET["member_id"]);

        //Get the user status
        $status = $user_profil->status();

        //Get the user role
        $role = $user_profil->role();

        //Get the teams where the user is captain
        $teams_captain = $user_profil->iscaptain();

        //Get the teams where the user is member
        $teams_member = $user_profil->ismember();

        //Show the page
        require_once('public/views/member/profil.php');
    }
}