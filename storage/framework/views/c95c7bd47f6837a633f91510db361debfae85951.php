<?php $__env->startSection('title', 'Pengguna'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Pengguna</h3>
	              <a href="<?php echo e(route('pengguna.new')); ?>" class="btn btn-primary pull-right">Tambah Pengguna</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nama</th>
	                  <th>Email</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	<?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<tr>
	                			<td><?php echo e($pengguna->id); ?></td>
	                			<td><?php echo e($pengguna->name); ?></td>
	                			<td><?php echo e($pengguna->email); ?></td>
	                			<td>
	                				<a href="<?php echo e(route('pengguna').'/'.$pengguna->id); ?>/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="<?php echo e(route('pengguna').'/'.$pengguna->id); ?>" style="display:inline">
	                					<?php echo method_field('DELETE'); ?>
	                					<?php echo csrf_field(); ?>
	                				<button type="submit" class="badge bg-red" onclick="return confirm('Apakan anda yakin?')" style="border: none;">hapus</button>
	                				</form>
	                			</td>
	                		</tr>
	                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </tbody>
	              </table>
	            </div>
	        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\hardware\resources\views/pengguna/index.blade.php ENDPATH**/ ?>