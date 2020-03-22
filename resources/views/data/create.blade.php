@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <form action="{{route('siswa.post')}}" method="post">
        @CSRF
            <div class="card">
                <div class="card-body">
                <div class="card-header"><h3></h3></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelas">kelas</label>
                                <input type="text" class="form-control" name="kelas" placeholder="kelas">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">nik</label>
                                <input type="text" class="form-control" name="nik" placeholder="nik">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" class="form-control" name="jurusan" placeholder="jurusan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pict">pict</label>
                                <input type="file" class="form-control" name="pict" placeholder="pict">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                    <button type="submit" class="btn btn-warning">import</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection