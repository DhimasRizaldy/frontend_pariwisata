<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    //fungsi constructor
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // Buat fungsi index (tampil dashboard)

    function viewLogin()
    {
        return view("Login");
    }

    function viewRegister()
    {
        return view("Register");
    }
}