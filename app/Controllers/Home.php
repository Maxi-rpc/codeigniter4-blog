<?php

namespace App\Controllers;

class Home extends BaseController
{ 
    public function index()
    {
        $pages = '\front\pages\dashboard';
        return view($pages);
    }
}
