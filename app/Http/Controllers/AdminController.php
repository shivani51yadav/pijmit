<?php

namespace App\Http\Controllers;

use App\Models\IssueModel;
use App\Models\PaperModel;
use Illuminate\Http\Request;
use App\Models\VolumeModel;
class AdminController extends Controller
{
    public function index(){
        return view('layouts.admin_layout');
    }

    public function issuetable(){
        return view('adminPages.issuetable');
    }
    public function dashboard(){
        $totalVolumes = VolumeModel::where(['status' => 'active'])->count();
        $totalIssues = IssueModel::where(['status' => 'active'])->count();
        $totalPapers = PaperModel::where(['status' => 'active'])->count();

        return view('dashboard', compact('totalVolumes', 'totalIssues', 'totalPapers'));
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
