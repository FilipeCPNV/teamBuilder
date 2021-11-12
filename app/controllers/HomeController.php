<?php

require_once('.env.php');

class HomeController
{
    public function index()
    {
        $user = Member::find(USER_ID);
        $content = "";
        require_once('public/views/homepage.php');
    }

}