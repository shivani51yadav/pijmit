<?php

namespace App\Http\Controllers;

use App\Models\IssueModel;
use App\Models\PaperModel;
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
        // $volumes = VolumeModel::all();
        // $volumeData = $volumes::with('issue')::with('issue.paper')->get();

        // return view('CurrentIssue');
        $currentIssue = IssueModel::where(['status'=>'active','issue_type'=>'current'])->first();
        $currentIssue->volume = VolumeModel::where(['vol_no' => $currentIssue->vol_no,'status'=>'active'])->first();
        $currentIssue->papers = PaperModel::where(['issue_no'=> $currentIssue->issue_no, 'vol_no'=> $currentIssue->vol_no, 'status'=>'active'])->get();
        return view('currentIssue', compact('currentIssue'));
    }
    public function oldIssue(){
        // $volumeData = VolumeModel::all();
        $IssuesData = IssueModel::where(['status'=>'active','issue_type'=>'old'])->orderBy('issue_id', 'desc')->get();
        foreach($IssuesData as $issue) {
            // dd(VolumeModel::where(['vol_no' => $issue->vol_no,'status'=>'active'])->first());
            $issue->volume = VolumeModel::where(['vol_no' => $issue->vol_no,'status'=>'active'])->first();
            $issue->papers = PaperModel::where(['issue_no'=> $issue->issue_no, 'vol_no'=> $issue->vol_no, 'status'=>'active'])->get();
        }

        return view('oldIssue', compact('IssuesData'));
    }
}
