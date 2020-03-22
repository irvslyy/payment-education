<?php

namespace App\Http\Controllers;
use App\Pembayaran;
use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
     $history = Pembayaran::all();
     return view('history.history',compact('history'));  
    }
}
