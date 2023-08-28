<?php

namespace App\Http\Controllers;

use App\Models\IssueModel;
use App\Models\VolumeModel;
use App\Models\PaperModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IssueController extends Controller
{
    public function index()
    {
        $issues = IssueModel::get();
        foreach ($issues as $issue) {
            $issue->volume = VolumeModel::where('vol_no', $issue->vol_no)->first();
        }
        $volumes = VolumeModel::get();
        return view('adminPages.issuetable', compact('issues', 'volumes'));
    }

    public function destroy($issue_no, $vol_no)
    {
        $issues = IssueModel::where(['issue_no' => $issue_no, 'vol_no' => $vol_no])->first();
        $issues->status = 'inactive';
        $issues->save();

        return redirect()->route('issues')->with('success', 'Issues Deleted Successfully!');
    }

    public function show($issue_no, $vol_no)
    {
        $issue = IssueModel::where(['issue_no' => $issue_no, 'vol_no' => $vol_no])->first();
        $papers = PaperModel::where(['issue_no' => $issue_no, 'vol_no' => $vol_no])->get();

        return view('issues.show', compact('issue', 'papers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'vol_no' => 'required',
            'issue_type' => 'required',
            'status' => 'required',
            'issue_no' => 'required|unique:issues,issue_no,NULL,id,vol_no,' . $request->vol_no,
        ]);

        // {
        $vol_no = $request->input('vol_no');
        $issue_no = $request->input('issue_no');
        $issue_status = $request->input('issue_status');
        $issue_type = $request->input('issue_type');
        $existingIssue = IssueModel::where('vol_no', $vol_no)
            ->where('issue_no', $issue_no)
            ->first();

        if ($existingIssue) {
            return redirect()->back()->with('error', 'Issue number already exists under the selected volume');
        }

        if($issue_type == 'current'){

            $currentIssue =IssueModel::where(['issue_type'=> 'current', 'status' => 'active' ])->first();
            $currentIssue->issue_type = 'old';
            $currentIssue->save();
        }

        $issue = new IssueModel();
        $issue->vol_no = $vol_no;
        $issue->issue_no = $issue_no;
        $issue->status = $status;
        $issue->issue_type =  $request->input('issue_type');
        $issue->save();
        Storage::disk('public')->makeDirectory($vol_no . '/' . $issue_no);

        return redirect()->route('issues')->with('success', 'Issue added successfully.');
    }

    public function getIssues($vol_no)
    {
        $issues = IssueModel::where('vol_no', $vol_no)->get(['issue_no']);
        return response()->json(['issues' => $issues]);
    }

    public function update(Request $request, $issue_no)
    {
        $request->validate([
            'vol_no' => 'required|numeric',
            'issue_type' => 'required|in:old,current',
            'new_issue_no' => 'required|numeric',
        ]);

        $issue = IssueModel::where('issue_no', $issue_no)->first();

        if (!$issue) {
            return redirect()->route('issues')->with('error', 'Issue not found');
        }

        $newVolNo = $request->input('vol_no');
        $newIssueNo = $request->input('new_issue_no');

        // Check if the new issue number already exists under the new volume
        $existingIssue = IssueModel::where('vol_no', $newVolNo)
            ->where('issue_no', $newIssueNo)
            ->first();

        if ($existingIssue && $existingIssue->issue_no !== $issue->issue_no) {
            return redirect()->back()->with('error', 'Issue number already exists under the selected volume');
        }

        // Update the issue details
        $issue->vol_no = $newVolNo;
        $issue->issue_type = $request->input('issue_type');
        $issue->issue_no = $newIssueNo;
        $issue->save();

        return redirect()->route('issues')->with('success', 'Issue updated successfully');
    }

    public function edit($issue_no, $vol_no)
    {
        $volumes = VolumeModel::all();
        $issue = IssueModel::where(['issue_no'=> $issue_no,'status'=>'active','vol_no'=>$vol_no])->first();


        if (!$issue) {
            return redirect()->route('issues')->with('error', 'Issue not found.');
        }

        return view('issues.edit', compact('issue', 'volumes'));
    }


}
