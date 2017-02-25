<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Admin;

class AdminController extends Controller
{
     public function index()
    {
    	$admins = Admin::all();
    	return view('admin.admin.index', compact('admins'));
    }
}
