@extends('layouts.app')


@section('content')


<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header bg-white header-elements-inline">
		    	<h6 class="card-title">Transaksi</h6>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>name</td>
                                        <td>email</td>
                                        <td>amount</td>
                                        <td>note</td>
                                        <td>status</td>
                                        <td>snap_token</td>
                                        <td>action</td>
                                    </tr>
                                </thead>
                                @foreach($transaksi as $transaksis)
                                <tbody>
                                    <tr>
                                        <td>{{$transaksis->id}}</td>
                                        <td>{{$transaksis->name}}</td>
                                        <td>{{$transaksis->email}}</td>
                                        <td>{{$transaksis->amount}}</td>
                                        <td>{{$transaksis->note}}</td>
                                        <td><span class="badge badge-success">{{$transaksis->status}}</span></td>
                                        <td>{{$transaksis->snap_token}}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection