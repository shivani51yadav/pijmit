<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('layouts.admin_layout');
    }
    public function statistics_cards(){
        return view('statistics_cards');
    }
    public function issuetable(){
        return view('adminPages.issuetable');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function volumestable(){
        return view('adminPages.voltable');
    }
    public function issuestable(){
        return view('adminPages.issuetable');
    }
    public function paperstable(){
        return view('adminPages.papertable');
    }
}
