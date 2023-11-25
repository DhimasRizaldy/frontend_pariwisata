<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewUser()
    {
        $url = env("API_URL") . "user/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_user.view_user", $data);
    }

    public function profile()
    {
        // Memeriksa apakah pengguna sudah terautentikasi
        if (auth()->check()) {
            // Mengambil token dari pengguna yang login
            $token = auth()->user()->token;

            // Menggunakan HTTP Client Laravel untuk mengonsumsi API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
            ])->get(env("API_URL") . "/auth/whoami/");

            // Memeriksa apakah request ke API berhasil
            if ($response->successful()) {
                // Mendapatkan data dari respons API
                $userData = $response->json();

                // Menampilkan data pada halaman profil
                return view('admin.vw_user.userProfile', ['userData' => $userData]);
            } else {
                // Handle jika request ke API tidak berhasil
                return response()->json(['error' => 'Gagal mendapatkan data dari API'], $response->status());
            }
        } else {
            // Handle jika pengguna tidak terautentikasi
            return redirect()->route('login'); // Ganti dengan rute login yang sesuai
        }
    }

}
?>