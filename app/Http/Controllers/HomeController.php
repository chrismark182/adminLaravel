<?php

namespace App\Http\Controllers;

use App\Notas;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		$this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$count_users= User::count();
		$count_roles= Role::count();
		$count_notas= Notas::count();
		
        return view('home',compact('count_users','count_roles','count_notas'));
    }
}
