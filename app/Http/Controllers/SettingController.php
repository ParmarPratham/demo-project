<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index',compact('setting'));
    }
    public function update(Request $request)
    {
        Setting::updateOrCreate([
            'id'=>$request->id,
        ],[
            'email'=> $request->email,
        ]);
        return redirect()->back();
    }
}
