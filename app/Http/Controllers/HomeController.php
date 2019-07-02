<?php

namespace App\Http\Controllers;

use App\User;
use App\Eskul;
use Alert;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Alert::success('Berhasil Login', 'Status');
        return view('index');
    } 
}