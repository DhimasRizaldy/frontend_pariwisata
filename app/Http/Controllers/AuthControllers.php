<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Auth;

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

    // login

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Membuat HTTP Client Laravel untuk mengirim permintaan ke URL API
        $apiResponse = Http::post(env("API_URL") . "/auth/login/", $credentials);

        if ($apiResponse->successful()) {
            // Jika login berhasil di API
            $userData = $apiResponse->json();

            // Mengecek apakah data pengguna diterima dari API
            if (!empty($userData['data']['user'])) {
                // Memeriksa role pengguna
                $role = isset($userData['data']['user']['role']) ? $userData['data']['user']['role'] : null;

                // Redirect pengguna berdasarkan role
                if ($role === 'user') {
                    return view('user/dashboardUser', ['user' => $userData['data']['user']]);
                } elseif ($role === 'admin') {
                    return view('admin/dashboardAdmin', ['user' => $userData['data']['user']]);
                } else {
                    // Jika role tidak valid, tindakan yang sesuai
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid user role from API',
                    ], 401);
                }
            } else {
                // Jika data pengguna kosong, tindakan yang sesuai
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid user data from API',
                ], 401);
            }
        } else {
            // Jika login gagal di API
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }
    }

    public function logout()
    {
        auth()->logout(); // Logout pengguna

        return redirect('/'); // Ganti '/' sesuai dengan route yang diinginkan setelah logout
    }


}