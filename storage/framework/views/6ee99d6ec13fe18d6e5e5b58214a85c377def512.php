

<?php $__env->startSection('content'); ?>


<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Naziv</th>
        <th>Godina</th>
        <th>Sjedala</th>
        <th>Snaga</th>
        <th>Obujam</th>
        <th>Vrsta</th>
        <th>Boja</th>
        <th>Prijedeni</th>
        <th>Mjenjac</th>
        <th>Od</th>
        <th>Datum</th>
        <th>Datum</th>
    </tr>

    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($type->id); ?></td>
            <td><?php echo e($type->naziv_modela); ?></td>
            <td><?php echo e($type->godina_proizvodnje); ?></td>
            <td><?php echo e($type->broj_sjedala); ?></td>
            <td><?php echo e($type->snaga); ?></td>
            <td><?php echo e($type->obujam_motora); ?></td>
            <td><?php echo e($type->vrsta_motora); ?></td>
            <td><?php echo e($type->boja); ?></td>
            <td><?php echo e($type->prijedeni_km); ?></td>
            <td><?php echo e($type->vrsta_mjenjaca); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\njuskalo\resources\views/types/index.blade.php ENDPATH**/ ?>