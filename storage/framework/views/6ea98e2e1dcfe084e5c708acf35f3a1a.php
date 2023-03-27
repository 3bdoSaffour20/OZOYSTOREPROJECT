

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
  <div class="card">
     <div class="card-body">

    <form action="<?php echo e(url('/product-add')); ?>" method="Post">
<?php echo csrf_field(); ?>
<label for="">إسم المنتج</label>
<input class="form-contol mt-1 mb-3" type="text" name="name">

<label for="">وصف المنتج</label>
<input class="form-contol mt-1 mb-3" type="text" name="description">

<label for="">صورة المنتج</label>
<input class="form-contol mt-1 mb-3" type="img" name="img">

<label for="">فئة المنتج</label>
<select class="form-contol mt-1 mb-3" name="category_id" id="">
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<label for="">تاريخ الإضافة</label>
<input class="form-contol mt-1 mb-3" type="date" name="add_date">

<button type="submit" class="btn btn-primary">حفظ</button>
      </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\شخصي\OneDrive\سطح المكتب\OZOYSTOREPROJECT\resources\views/subscriber/product-add.blade.php ENDPATH**/ ?>