<?php

namespace App\Http\Controllers;

use App\Models\VolumeModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutPage(){
        return view('about');
    }

    public function associateEditors(){
        return view('associateEditors');
    }

    public function callForReviewers(){
        return view('callForReviewers');
    }
    public function editorInChief(){
        return view('editorInChief');
    }
    public function editors(){
        return view('editors');
    }
    public function guidelinesForAuthor(){
        return view('guidelinesForAuthor');
    }
    public function internationalAdvisoryCommittee(){
        return view('internationalAdvisoryCommittee');
    }
    public function publicationEthics(){
        return view('publicationEthics');
    }
    public function reviewPolicy(){
        return view('reviewPolicy');
    }
    public function subscription(){
        return view('subscription');
    }
    public function currentIssue(){
        $volumes = VolumeModel::all();
        $volumeData = $volumes::with('issue')::with('issue.paper')->get();

        // return view('CurrentIssue');
        return view('currentIssue', compact('volumeData'));
    }
    public function oldIssue(){
        $volumeData = VolumeModel::all();
        return view('oldIssue', compact('volumeData'));
    }
}
