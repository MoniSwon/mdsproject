<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;

class DashboardController extends Controller
{
    public function connexion()
    {
        return view('infos');
    }

    public function dashboardHome(AdminRequest $request)
    {
        //Check the request and validate it. If ok, return the dashboard. Else, return the page connexion with error no explicit
        return 'Le nom est ' . $request->input('identifiant');
        
    }
}
