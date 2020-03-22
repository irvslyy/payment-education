@extends('layouts.app')


@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header bg-white header-elements-inline">
		    	<h6 class="card-title">Data siswa</h6>
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
                        <table class="table table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="">nama</th>
                                    <th scope="">nik</th>
                                    <th scope="">bagian</th>
                                    <th scope="">action</th>
                                </tr>
                            </thead>
                            @foreach($petugas as $petugasan)
                            <tbody>
                                <tr>
                                    <td>{{$petugasan->id}}</td>
                                    <td>{{$petugasan->nama}}</td>
                                    <td>{{$petugasan->nik}}</td>
                                    <td>{{$petugasan->bagian}}</td>
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