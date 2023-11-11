<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewKategori()
    {
        $url = env("API_URL") . "KategoriWisata/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_kategoriwisata.view_kategoriwisata", $data);
    }
}
?>