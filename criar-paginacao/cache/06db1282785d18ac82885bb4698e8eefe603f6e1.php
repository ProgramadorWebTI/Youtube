<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Paginação com Blade e simple-pagination</h1>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>E-mail</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $pagination->getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exemplo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($exemplo->conteudo); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<?php echo $__env->make('parts.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('parts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>