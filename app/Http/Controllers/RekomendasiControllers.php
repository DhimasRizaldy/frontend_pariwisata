<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewRekomendasi()
    {
        $url = env("API_URL") . "rekomendasi/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_rekomendasi.view_rekomendasi", $data);
    }
}
?>