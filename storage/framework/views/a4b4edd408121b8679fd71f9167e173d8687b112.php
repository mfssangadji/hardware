<?php $__env->startSection('title', 'eLearning'); ?>
<?php $__env->startSection('content'); ?>
    <div style="width: 100%; background-color: #FFF">
      <div class="box-header with-border">
        <h3 class="box-title">Hardware Komputer</h3>
      </div>
      <div class="box-body">
        <div class="col-md-12">
            <?php $__currentLoopData = $e; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="<?php echo e(asset('vid.png')); ?>" alt="User Image">
                        <span class="username"><a href="#"><?php echo e($e->judul); ?></a></span>
                        <span class="description">Postingan: <?php echo e($e->created_at); ?></span>
                      </div>
                      <!-- /.user-block -->

                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- post text -->

                      <!-- Attachment -->
                        <center>
                            <?php echo $e->vlink_html; ?>

                        </center>    
                      <!-- /.attachment-block -->
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-footer -->
                  </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\hardware\resources\views/learn.blade.php ENDPATH**/ ?>