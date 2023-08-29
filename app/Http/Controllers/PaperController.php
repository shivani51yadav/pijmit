<?php

namespace App\Http\Controllers;

use App\Models\IssueModel;
use App\Models\PaperModel;
use App\Models\VolumeModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function index()
    {

        $papers = PaperModel::all();
        $issues = IssueModel::all();
        $volumes = VolumeModel::all();

        return view('adminPages.papertable', compact('papers', 'issues', 'volumes'));
    }

    public function show($vol_no, $issue_no, $paper_no)
    {
        $paper = PaperModel::where('vol_no', $vol_no)
            ->where('issue_no', $issue_no)
            ->where('paper_no', $paper_no)
            ->first();

        if (!$paper) {
            abort(404);
        }
        $volumes = VolumeModel::all();
        $issues = IssueModel::where('vol_no', $vol_no)->get();

        return view('papers.show', compact('paper', 'volumes', 'issues'));
    }

    public function destroy($paper_no)
    {
        $papers = PaperModel::where(['paper_no' => $paper_no])->first();
        $papers->status = 'inactive';
        $papers->save();

        return redirect()->route('papers')->with('success', 'Papers Deleted Successfully!');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'vol_no' => 'required',
            'issue_no' => 'required',
            'paper_no' => 'required',
            'paper_title' => 'required',
            'pdf_file' => 'required|mimes:pdf',
        ]);

        $paper = new PaperModel();
        $paper->vol_no = $request->input('vol_no');
        $paper->issue_no = $request->input('issue_no');
        $paper->paper_no = $request->input('paper_no');
        $paper->paper_title = $request->input('paper_title');
        $paper->paper_name = str_replace(' ', '_', $request->input('paper_title'));
        $paper->authors = $request->input('authors');
        $paper->start_page_no = $request->input('start_page_no');
        $paper->end_page_no = $request->input('end_page_no');
        $paper->created_by = $request->input('created_by');
        $paper->updated_by = $request->input('updated_by');

        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $paper->vol_no . '-' . $paper->issue_no . '-' . $paper->paper_no . '-' . $paper->paper_name. '-' . (date('Y-m-d-H-i-s')) . '.' . $fileExtension;
            $file->move(public_path('storage_files/'.$paper->vol_no . '/' . $paper->issue_no),$fileName);

            $paper->file_path = 'storage_files/' . $paper->vol_no . '/' . $paper->issue_no . '/' . $fileName;
        }
        $paper->save();

        return redirect()->route('papers')
            ->with('success', 'Paper added successfully.');
    }

    public function edit($vol_no, $issue_no, $paper_no)
    {
        $paper = PaperModel::where('vol_no', $vol_no)
            ->where('issue_no', $issue_no)
            ->where('paper_no', $paper_no)
            ->firstOrFail();

        $volumes = VolumeModel::all();
        $issues = IssueModel::all();

        return view('papers.edit', compact('paper', 'volumes', 'issues'));
    }

    public function update(Request $request, $vol_no, $issue_no, $paper_no)
    {
        $paper = PaperModel::where('vol_no', $vol_no)
            ->where('issue_no', $issue_no)
            ->where('paper_no', $paper_no)
            ->firstOrFail();

        $paper->update([
            'vol_no' => $request->input('vol_no'),
            'issue_no' => $request->input('issue_no'),
            'paper_no' => $request->input('paper_no'),
            'paper_title' => $request->input('paper_title'),
            'paper_name' => str_replace(' ', '_', $request->input('paper_title')),
            'authors' => $request->input('authors'),
            'start_page_no' => $request->input('start_page_no'),
            'end_page_no' =>  $request->input('end_page_no'),
            'updated_by' => $request->input('updated_by'),
            'pdf_file' => $request->input('pdf_file'),
        ]);

        if ($request->hasFile('pdf_file')) {
            // Handle file upload logic here (as discussed in previous responses)
            $file = $request->file('pdf_file');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $paper->vol_no . '-' . $paper->issue_no . '-' . $paper->paper_no . '.' . $fileExtension;

            // Store the file in the appropriate directory
            $file->storeAs('public/' . $paper->vol_no . '/' . $paper->issue_no, $fileName);

            // Update the file path in the database
            $paper->file_path = 'storage/' . $paper->vol_no . '/' . $paper->issue_no . '/' . $fileName;
            $paper->save();
        }

        return redirect()->route('papers.show', [$vol_no, $issue_no, $paper_no])->with('success', 'Paper updated successfully.');
    }
    public function changeStatus($vol_no, $issue_no, $paper_no){
        $paper = PaperModel::where(['vol_no' => $vol_no, 'issue_no'=>$issue_no,'paper_no'=>$paper_no])->firstOrFail();
        $paper->status = ($paper->status == 'active') ? 'inactive' : 'active';
        $paper->save();

        return redirect()->route('papers')->with('success', 'Paper status updated successfully.');
    }
}
