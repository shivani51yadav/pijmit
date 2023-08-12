<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $issues = Issue::all();
        return response()->json($issues);
    }
    public function store(Request $request)
    {
        $issue = new Issue();
        $issue->vol_no = $request->vol_no;
        $issue->issue_no = $request->issue_no;
        $issue->year = $request->year;
        $issue->paper_title = $request->paper_title;
        $issue->authors = $request->authors;
        $issue->page_nos = $request->page_nos;
        $issue->issue_type = $request->issue_type;
        $issue->created_by = $request->created_by;
        $issue->modified_by = $request->modified_by; // nullable
        $issue->save();
        return response()->json([
            "message" => "issue record created"
        ], 201);
    }
    public function show($id)
    {
        $issue = Issue::find($id);
        if ($issue) {
            return response()->json($issue);
        } else {
            return response()->json([
                "message" => "issue not found"
            ], 404);
        }
    }
    public function update(Request $request, $id)
    {
        $issue = Issue::find($id);
        if ($issue) {
            $request->vol_no ? $issue->vol_no = $request->vol_no : $issue->vol_no;
            $request->issue_no ? $issue->issue_no = $request->issue_no : $issue->issue_no;
            $request->year ? $issue->year = $request->year : $issue->year;
            $request->paper_title ? $issue->paper_title = $request->paper_title : $issue->paper_title;
            $request->authors ? $issue->authors = $request->authors : $issue->authors;
            $request->page_nos ? $issue->page_nos = $request->page_nos : $issue->page_nos;
            $request->issue_type ? $issue->issue_type = $request->issue_type : $issue->issue_type;
            $request->created_by ? $issue->created_by = $request->created_by : $issue->created_by;
            $request->modified_by ? $issue->modified_by = $request->modified_by : $issue->modified_by;

            $issue->save();
            return response()->json([
                "message" => "issue record updated"
            ], 200);
        } else {
            return response()->json([
                "message" => "issue not found"
            ], 404);
        }
    }
    public function destroy($id)
    {
        $issue = Issue::find($id);
        if ($issue) {
            $issue->delete();
            return response()->json([
                "message" => "issue record deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "issue not found"
            ], 404);
        }
    }

    public function search($keyword)
    {
        $issues = Issue::where('paper_title', 'like', '%' . $keyword . '%')->paginate(5);
        if ($issues) {
            return response()->json($issues);
        } else {
            return response()->json([
                "message" => "issue not found"
            ], 404);
        }
    }
}
