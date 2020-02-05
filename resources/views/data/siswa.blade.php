@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                <div class="panel-head"><h3>Data</h3></div>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">nama</th>
                        <th scope="col">nik</th>
                        <th scope="col">kelas</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    @foreach($siswa as $siswas)
                    <tbody>
                        <tr>
                            <th scope="row">{{$siswas->id}}</th>
                            <td>{{$siswas->nama}}</td>
                            <td>{{$siswas->nik}}</td>
                            <td>{{$siswas->kelas}}</td>
                            <td>{{$siswas->jurusan}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$siswa->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection