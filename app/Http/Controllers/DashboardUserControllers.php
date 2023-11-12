<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserControllers extends Controller
{
    //fungsi constructor
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat fungsi index (tampil dashboard)

    function viewMain()
    {
        return view("User/dashboardUser");
    }

    function viewDashboard()
    {
        return view("User/dashboardUser");
    }
}