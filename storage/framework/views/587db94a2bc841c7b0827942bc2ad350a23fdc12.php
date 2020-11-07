<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Kategori</h3>
	              <a href="<?php echo e(route('kategori.new')); ?>" class="btn btn-primary pull-right">Tambah Kategori</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Kategori</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<tr>
	                			<td><?php echo e($loop->iteration); ?></td>
	                			<td><?php echo e($kategori->nama_kategori); ?></td>
	                			<td>
	                				<a href="<?php echo e(route('kategori').'/'.$kategori->id); ?>/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="<?php echo e(route('kategori').'/'.$kategori->id); ?>" style="display:inline">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\scripty\hardware\resources\views/kategori/index.blade.php ENDPATH**/ ?>