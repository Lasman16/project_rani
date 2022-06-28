<?php

namespace App\Controllers;

class DashboardUser extends BaseController
{
    public function index()
    {
        return view('pages/dashboardUser');
    }
}