

<?php $__env->startSection('content'); ?>

          <div class="container mt-5">
   <div class="card">
 <div class="card-header">
 <a class="btn btn-primary" href="<?php echo e(url('/product-add')); ?>">إضافة منتج</a> 
</div>
  <div class="card-body">
<table class="table table-striped" style="background-color: #ec4917 ;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">إسم المنتج</th>
      <th>الوصف</th>
      <th>الفئة</th>
      <th>صورة المنتج</th>
       <th>تاريخ لإضافة</th>
    </tr>
  </thead>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
      <td><?php echo e($product->id); ?></th>
      <td><?php echo e($product->name); ?></td>
      <td><?php echo e($product->description); ?></td>
      <td><?php echo e($product->category->name); ?></td>
      <td>
      <img src="<?php echo e($product->img); ?>" alt="" height="120px" width="90px">
      </td>
       <td><?php echo e($product->add_date); ?></td>
      <td>
         <a class="btn btn-Success" type="button" href="<?php echo e(('url/Product-edit/'). $product->id); ?>" >تعديل</a>
         <a class="btn btn-Success" type="button" href="<?php echo e(('url/Product-edit/'). $product->id); ?>" >حذف</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
        </table>
           </div>
     </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\شخصي\OneDrive\سطح المكتب\OZOYSTOREPROJECT\resources\views/subscriber/product.blade.php ENDPATH**/ ?>