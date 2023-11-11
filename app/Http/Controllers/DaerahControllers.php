<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaerahControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewDaerah()
    {
        $url = env("API_URL") . "daerah/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_daerah.view_daerah", $data);
    }
}
?>