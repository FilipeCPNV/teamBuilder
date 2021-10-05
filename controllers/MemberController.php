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
}