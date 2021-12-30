

<?php $__env->startSection('content'); ?>

<table class="table">
    <tr class="table-dark">
        <th>Id</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Naziv</th>
        <th>Email-privatni</th>
        <th>Email-sluzbeni</th>
        <th>Lozinka</th>
    </tr>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->ime); ?></td>
            <td><?php echo e($user->prezime); ?></td>
            <td><?php echo e($user->naziv_racuna); ?></td>
            <td><?php echo e($user->email_privatni); ?></td>
            <td><?php echo e($user->email_sluzbeni); ?></td>
            <td><?php echo e($user->lozinka); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\njuskalo\resources\views/users/index.blade.php ENDPATH**/ ?>