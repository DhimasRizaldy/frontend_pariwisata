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
        return view("user/dashboardUser");
    }

    function viewDashboard()
    {
        return view("user/dashboardUser");
    }

    function viewTentangKami()
    {
        return view("user/vw_tentangkami/tentangKami");
    }
}