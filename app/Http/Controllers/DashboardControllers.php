<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControllers extends Controller
{
    //fungsi constructor
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat fungsi index (tampil dashboard)
    function viewDashboard()
    {
        return view("Admin/dashboardAdmin");
    }
}