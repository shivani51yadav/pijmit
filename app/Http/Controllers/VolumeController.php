<?php

namespace App\Http\Controllers;

use App\Models\IssueModel;
use App\Models\VolumeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class VolumeController extends Controller
{
    public function index()
    {
        $volumes = VolumeModel::all();
        return view('adminPages.voltable', compact('volumes'));
    }

    public function update(Request $request)
    {

        $vol_no = $request->vol_no;
        $vol_year = $request->vol_year;
        $volumes = VolumeModel::find($vol_no);
        $volumes->vol_no = $vol_no;
        $volumes->vol_year =  $vol_year;
        $volumes->save();

        return redirect()->route('volumes')->with('success', 'Volume Updated Successfully');
    }

    public function destroy($vol_no)
    {
        $volumes = VolumeModel::where(['vol_no'=>$vol_no])->first();
        $volumes->status = 'inactive';
        $volumes->save();

        return redirect()->route('volumes')->with('success', 'Volume Deleted Successfully!');
    }

    public function show($vol_no)
{
    $volume = VolumeModel::where('vol_no', $vol_no)->firstOrFail();
    $issues = IssueModel::where('vol_no', $vol_no)->get();

    return view('volumesshow', compact('volume', 'issues'));
}

public function store(Request $request)
{
    $vol_no = $request->vol_no;
    $vol_year = $request->vol_year;

    $volumes = VolumeModel::where('vol_no', $vol_no)->get();

    if ($volumes->count() > 0) {
        return redirect()->route('volumes')->with('error', 'Volume No already exists.');
    } else {
        VolumeModel::create([
            'vol_no' => $vol_no,
            'vol_year' => $vol_year
        ]);
        Storage::disk('public')->makeDirectory($vol_no);
        return redirect()->route('volumes')->with('success', 'New Volume Created Successfully');
    }
}
public function edit($vol_no)
{
    $volume = VolumeModel::where('vol_no', $vol_no)->first();

    if (!$volume) {
        return redirect()->route('volumes.index')->with('error', 'Volume not found.');
    }

    return view('volumeedit', compact('volume'));
}
public function changeStatus($vol_no){

    $volume = VolumeModel::where(['vol_no' => $vol_no])->firstOrFail();
    $currentStatus = $volume->status;
    if ($currentStatus == 'active'){
        $volume->status = 'inactive';
    }else{
        $volume->status = 'active';
    }
    $volume->save();
    return redirect()->route('volumes')->with('success', 'Volume updated successfully.');
}
}

