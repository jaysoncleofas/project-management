<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ApiDatatablesController extends Controller
{
    public function getClients()
    {
      $clients = Client::with('company')->with('social')->select('clients.*');

      return DataTables::of($clients)
            ->make(true);
    }
}
