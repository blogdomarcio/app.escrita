<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Admin;
use Alert;

class AdminController extends Controller
{
     public function index()
    {
    	$admins = Admin::all();
    	 Alert::message('Robots are working!');
    	return view('admin.admin.index', compact('admins'));
    }
}
