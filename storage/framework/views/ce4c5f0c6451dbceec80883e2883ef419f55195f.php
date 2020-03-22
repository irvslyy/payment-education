<?php $__env->startSection('content'); ?>

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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="custom-select form-control" required>
                                <option value="">-- pilih --</option>
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelasku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($kelasku->kelas); ?>"><?php echo e($kelasku->kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>   
                        </div>
                    </div>
                </div>
                
             <div class="table-responsive">
                <table class="table data-table">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">nama</th>
                        <th scope="col">nisn</th>
                        <th scope="col">kelas</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody id="kelas">
                        <tr>
                            <th scope="row"><?php echo e($siswas->id); ?></th>
                            <td><?php echo e($siswas->nama); ?></td>
                            <td><?php echo e($siswas->nik); ?></td>
                            <td><?php echo e($siswas->kelas); ?></td>
                            <td><?php echo e($siswas->jurusan); ?></td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fas fa-pen"></i></a>  
                                <button type="submit" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></button>

                                <form action="<?php echo e(route('siswa.delete',$siswas->id)); ?>" method="POST">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('DELETE'); ?>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to delete?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <?php echo e($siswa->links()); ?>

              </div>

                

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/Documents/UN/report/resources/views/data/siswa.blade.php ENDPATH**/ ?>