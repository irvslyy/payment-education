<?php

namespace App\Http\Controllers;
use App\History;
use App\Pembayran;
use App\Siswa;
use App\Petugas;
use App\User;
use DB;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->where('deleted_at','=','2020-03-03 07:48:44')->get();
        return view('trash.trash',compact('siswa'));
    }
}
