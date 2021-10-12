<?php

require_once 'vendor/autoload.php';
require_once 'model/Member.php';

use Thynkon\SimpleOrm\database\Connector;

class MemberController
{
    public function index()
    {
        $user = Member::find(USER_ID);
        $members = Member::all();
        require_once('views/member_list.php');
    }
    public function team()
    {
        $user = Member::find(USER_ID);
        $member = Member::find(USER_ID);
        $teams = $member->teams();
        require_once('views/member_team.php');
    }
    public function mods_list()
    {
        $user = Member::find(USER_ID);
        $moderators = Member::moderators();
        require_once('views/moderator_list.php');
    }
}