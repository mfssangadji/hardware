<?php $__env->startSection('title', 'eLearning'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data eLearning</h3>
	              <a href="<?php echo e(url('elearning/'.$id.'/create')); ?>" class="btn btn-primary pull-right">Tambah eLearning</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Kategori</th>
	                  <th>Judul</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	<?php $__currentLoopData = $elearning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elearning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<tr>
	                			<td><?php echo e($loop->iteration); ?></td>
	                			<td><?php echo e($elearning->kategori->nama_kategori); ?></td>
	                			<td><?php echo e($elearning->judul); ?></td>
	                			<td>
	                				<a href="<?php echo e(url('elearning/'.$id.'/'.$elearning->id.'/edit')); ?>" class="badge bg-default">edit</a>
	                				<form method="post" action="<?php echo e(url('elearning/'.$id.'/'.$elearning->id)); ?>" style="display:inline">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\hardware\resources\views/elearning/index.blade.php ENDPATH**/ ?>