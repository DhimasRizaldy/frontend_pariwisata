<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewUlasan()
    {
        $url = env("API_URL") . "ulasan/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_ulasan.view_ulasan", $data);
    }
}
?>