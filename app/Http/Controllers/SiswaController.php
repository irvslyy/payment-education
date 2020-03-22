<?php

namespace App\Http\Controllers;
use App\Siswa;
use App\User;
use DataTables;
use DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      $kelas = DB::table('siswa')->select('kelas')->groupBy('kelas')->orderBy('Kelas','ASC')->get();
      $siswa = Siswa::paginate(20);
      return view('data.siswa',compact('siswa','kelas'));
    }   
    public function search(Request $request)
    {
        $cari = $request->get('search');
        $nama = DB::table('siswa')->where('nama','LIKE','%'.$cari.'%')->get();
        return view('data.siswa',compact('nama'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->nik = $request->nik;
        $siswa->pict = $request->pict;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->save();

        toastr('success!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        toastr()->success('sucessfully delete');
        return back();
    }
  
}
