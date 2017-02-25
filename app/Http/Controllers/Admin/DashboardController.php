<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

	    public function index()
    {
    	$users = \App\User::all();
    	return view('admin.principal.index', compact('users'));
    }
}
