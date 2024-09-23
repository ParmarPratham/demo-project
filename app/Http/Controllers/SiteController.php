<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __construct()
    {
        $setting = Setting::first();
        view()->share('setting',$setting);
    }
    public function index()
    {
        return view('site.index');
    }
}
