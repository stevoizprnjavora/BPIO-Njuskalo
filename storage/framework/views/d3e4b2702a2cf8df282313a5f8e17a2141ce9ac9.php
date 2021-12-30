

<?php $__env->startSection('content'); ?>
<div class="spinner-grow text-primary mx-auto" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-primary mx-auto" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-primary mx-auto" role="status">
  <span class="visually-hidden">Loading...</span>
</div>

<form class="col-3 mx-auto">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\njuskalo\resources\views/dashboard.blade.php ENDPATH**/ ?>