<?php

namespace App\Http\Controllers;
use App\Settingpembayaran;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $pay = Settingpembayaran::all();
        return view('setting.setting',compact('pay'));
    }
}
