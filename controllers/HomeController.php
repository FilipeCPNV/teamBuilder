<?php

require_once ('.env.php');

class HomeController
{
    public function index()
    {
        $userName = Member::find(USER_ID)->name;
        require_once ('views/homepage.php');
    }

}