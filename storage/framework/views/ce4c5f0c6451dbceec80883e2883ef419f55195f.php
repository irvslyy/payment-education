<?php $__env->startSection('content'); ?>

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
                    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo e($siswas->id); ?></th>
                            <td><?php echo e($siswas->nama); ?></td>
                            <td><?php echo e($siswas->nik); ?></td>
                            <td><?php echo e($siswas->kelas); ?></td>
                            <td><?php echo e($siswas->jurusan); ?></td>
                            <td></td>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/Documents/UN/report/resources/views/data/siswa.blade.php ENDPATH**/ ?>