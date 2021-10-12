<?php

require_once('vendor/autoload.php');
require_once 'model/Member.php';

use Thynkon\SimpleOrm\database\Connector;

class MemberController
{
    public function index()
    {
        $members = Member::all();
        require_once('views/member_list.php');
    }
    public function team($id)
    {
        $member = Member::find($id);
        require_once('views/member_team.php');
    }
    public function mods_list()
    {
        $moderators = Member::moderators();
        require_once('views/moderator_list.php');
    }
}