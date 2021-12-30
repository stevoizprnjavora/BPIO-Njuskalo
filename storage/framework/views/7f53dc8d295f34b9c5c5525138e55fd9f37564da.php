

<?php $__env->startSection('content'); ?>

<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Naziv</th>
    </tr>

    <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($manufacturer->id); ?></td>
            <td><?php echo e($manufacturer->naziv_proizvodaca); ?></td>
        
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\njuskalo\resources\views/manufacturers/index.blade.php ENDPATH**/ ?>