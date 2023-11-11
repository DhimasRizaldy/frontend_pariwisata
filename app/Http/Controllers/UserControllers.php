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
}
?>