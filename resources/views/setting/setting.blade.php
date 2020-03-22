@extends('layouts.app')


@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">setting spp</h6>
                    <div class="header-elements">
                        <!-- <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="header-elements">
                            <div class="btn-group">
                                <button type="button" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <div class="dropdown-header">Actions</div> -->
                                    <!-- <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View reports</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit reports</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a> -->
                                    <div class="dropdown-header">Export</div>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>kelas</td>
                                    <td>jumlah</td>
                                    <td>action</td>
                                </tr>
                            </thead>
                            @foreach($pay as $pays)
                            <tbody>
                                <tr>
                                    <td>{{$pays->id}}</td>
                                    <td>{{$pays->kelas}}</td>
                                    <td>{{$pays->jumlah}}</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-cog"></i> Setting pembayaran</button></td>
                                </tr>
                            </tbody>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">setting</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">jumlah</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection