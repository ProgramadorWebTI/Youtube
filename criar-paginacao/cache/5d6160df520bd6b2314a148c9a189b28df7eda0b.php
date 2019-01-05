<nav aria-label="Page navigation">
 		<ul class="pagination">
 			<?php if( $pagination->getCurrentPageNumber() > 1 ): ?>
				<li><a href="?page=<?php echo e($pagination->getPreviousPageNumber()); ?>"><<<</a></li>
 			<?php endif; ?>

			<?php $__currentLoopData = $pagination->getPages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 				<li><a href="?page=<?php echo e($page); ?>"><?php echo e($page); ?></a></li>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

 			<?php if( $pagination->getTotalNumberOfPages() > $pagination->getCurrentPageNumber() ): ?>
				<li><a href="?page=<?php echo e($pagination->getNextPageNumber()); ?>">>>></a></li>
 			<?php endif; ?>
 		</ul>
</nav>