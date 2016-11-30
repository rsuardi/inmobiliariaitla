<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Listing;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['listings'] = Listing::all();
        return view('announcements', $data);
    }

    public function admin()
    {
        $data = [];
        $data['listings'] = Listing::where('user_id', Auth::id())
                            ->get();
        return view('admin.admin', $data);
    }

    public function login() {
        $this->middleware('auth');
        return view('auth.login');
    }
}
