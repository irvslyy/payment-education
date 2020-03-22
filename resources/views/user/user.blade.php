@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header bg-white header-elements-inline">
		    	<h6 class="card-title">Users management</h6>
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">masukan email</label>
                                <input type="text" class="form-control" name="" placeholder="masukan email" required>
                            </div>
                            <div class="form-group">
                                <label for="">masukan nama</label>
                                <input type="text" class="form-control" name="" placeholder="masukan nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">masukan nisn / nik</label>
                                <input type="text" class="form-control" name="" placeholder="masukan nisn/nik" required>
                            </div>
                            <div class="form-group">
                                <label for="">masukan pasword</label>
                                <input type="password" class="form-control" name="" placeholder="masukan password" required>
                            </div>
                            <div class="form-group">
                                <label for="">konfirmasi password</label>
                                <input type="password" class="form-control" name="" placeholder="konfirmasi password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">tipe</label>
                                <select class="form-control" id="exampleFormControlSelect1" required>
                                   <option>-- pilih --</option>
                                   <option value="">siswa / siswi</option>
                                   <option value="">petugas / guru</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                        <div class="col-md-6">
                            <div class="row"><div class="col-md-12"><h3 class="card-title">Roles & Permissions</h3></div></div><hr>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    History Pembayaran
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Recent Activity
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    Data Siswa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                    Data Petugas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                    Reporting Chart
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection