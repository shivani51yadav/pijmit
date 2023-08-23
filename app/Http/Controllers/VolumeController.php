<?php

namespace App\Http\Controllers;

use App\Models\VolumeModel;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function index()
    {
        $volumes = VolumeModel::where(['status' => 'active'])->get();
        return view('volumes', ['volumes' => $volumes]);
    }

    public function create()
    {
        if (request()->isMethod("post")) {
            return view('volumeform');
        } else {
            return redirect('/');
        }
    }

    public function store(Request $request)
    {

        $vol_no = $request->vol_no;
        $vol_year = $request->vol_year;
        $volumes = new VolumeModel();
        $volumes->vol_no = $vol_no;
        $volumes->vol_year = $vol_year;
        $volumes->status = 'active';
        $volumes->save();

        return redirect()->route('volumes')->with('success', 'New Volume Created Successfully');
    }

    public function show($vol_no)
    {
        $volumes = VolumeModel::find(['id' => $vol_no])->first();
        return view('show', ['volumes' => $volumes]);
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

    public function destroy($vol_id)
    {
        $volumes = VolumeModel::find($vol_id);
        $volumes->status = 'inactive';
        $volumes->save();

        return redirect()->route('volumes')->with('Success', 'Todo Deleted Successfully!');
    }
}
