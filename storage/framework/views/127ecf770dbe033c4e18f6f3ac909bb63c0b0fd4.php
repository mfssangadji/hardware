<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="callout callout-info">
    <h4>SELAMAT DATANG</h4>
    Selamat Datang di Aplikasi Pembelajaran Hardware Komputer Berbasis Android
    </div>
    <style type="text/css">
        #img-wel {
            text-align: center;
        }

        .img-wel {
            width: 900px;
            border-radius:30px;
            height: 500px;
        }
    </style>
    <div id="img-wel"><img src="<?php echo e(asset('wel.jpg')); ?>" alt="" title="" name="slide" class="img-wel"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\hardware\resources\views/dashboard.blade.php ENDPATH**/ ?>