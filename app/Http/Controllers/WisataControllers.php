<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewWisata()
    {
        $url = env("API_URL") . "wisata/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_wisata.view_wisata", $data);
    }
}
?>