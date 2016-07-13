<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use App\Http\Requests;

class LineupBeastController extends Controller
{

    public $api_server_url;

    public $client;

    public function __construct(){
        $this->api_server_url   =   env('API_SERVER_URL');
        $this->client           =   new Client();
    }
}
