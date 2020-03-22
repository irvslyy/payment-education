<?php $__env->startSection('content'); ?>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">Last Payment</h6>
                            <div class="header-elements">
                               
                            </div>
                        </div>
                       
                        <div class="card-body">
                            
                        </div>
                    </div>                                        

                </div>   
                <div class="col-md-6">
                    
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">IP Blocked</h6>
                            <div class="header-elements">
                             
                            </div>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">ip</th>
                                        <th scope="col">log_id</th>
                                        <th scope="col">blocked</th>
                                        <th scope="col">created at</th>
                                        <th scope="col">handle</th>
                                    </tr>
                                </thead>
                              <?php $__currentLoopData = $ip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ips): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($ips->id); ?></td>
                                        <td><?php echo e($ips->ip); ?></td>
                                        <td><?php echo e($ips->log_id); ?></td>
                                        <td><?php echo e($ips->blocked); ?></td>
                                        <td><?php echo e($ips->created_at); ?></td>
                                        <td><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                </tbody>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                <?php echo e($ip->links()); ?>

                            </div>
                        </div>
                    </div>                                        

                </div>         
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-header bg-white header-elements-inline">
                                <h6 class="card-title">Login logs</h6>
                                <div class="header-elements">
                                  
                                </div>
                            </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">ip</th>
                                        <th scope="col">level</th>
                                        <th scope="col">middleware</th>
                                        <th scope="col">user_id</th>
                                        <th scope="col">url</th>
                                        <th scope="col">referrer</th>
                                        <th scope="col">request</th>
                                        <th scope="col">created at</th>
                                    </tr>
                                </thead>
                                <?php $__currentLoopData = $firewall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $firewalls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($firewalls->id); ?></td>
                                        <td><?php echo e($firewalls->ip); ?></td>
                                        <td><?php echo e($firewalls->level); ?></td>
                                        <td><?php echo e($firewalls->middleware); ?></td>
                                        <td><?php echo e($firewalls->user_id); ?></td>
                                        <td><?php echo e($firewalls->url); ?></td>
                                        <td><?php echo e($firewalls->referrer); ?></td>
                                        <td><?php echo e($firewalls->request); ?></td>
                                        <td><?php echo e($firewalls->created_at); ?></td>
                                    </tr>
                                </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                <?php echo e($firewall->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <div class="col-md-4">
                    
                </div>   

        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/Documents/UN/report/resources/views/home.blade.php ENDPATH**/ ?>