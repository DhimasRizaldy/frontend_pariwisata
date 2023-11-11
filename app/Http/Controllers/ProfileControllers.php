<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileControllers extends Controller
{
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    // fungsi view user
    function viewProfile()
    {
        $url = env("API_URL") . "profile/";

        $request = $this->client->get($url);

        $response = $request->getBody();

        $data["result"] = json_decode($response);

        return view("admin.vw_profile.view_profile", $data);
    }
}
?>