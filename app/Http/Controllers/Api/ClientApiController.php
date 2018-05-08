<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Client;

use App\Http\Requests;
use App\Http\Resources\Client as ClientResource;

class ClientApiController extends Controller
{
  public function getClients()
  {
    $clients = Client::all();

    return ClientResource::collection($clients);
  }
}
