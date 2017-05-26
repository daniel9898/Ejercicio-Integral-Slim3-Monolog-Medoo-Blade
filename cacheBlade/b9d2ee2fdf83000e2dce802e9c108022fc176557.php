<!-- se trae toda la estructura del app.blade y en yield inyecta la seccion -->
<!-- el @ permite sobreentender que el if van con las etiquetas <?php ?> -->

<?php $__env->startSection('content'); ?>
<h1>Slim</h1>
<?php if(isset($name)): ?>
        <h2>Hello <?php echo e(htmlspecialchars($name)); ?>!</h2>
<?php else: ?>
	<p>Try <a href="http://www.slimframework.com">SlimFramework</a></p>
	<?php echo ($path); ?> 
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>