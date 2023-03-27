

<?php $__env->startSection('body'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الأصناف </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">لوحة التحكم</li>
                            <li class="breadcrumb-item active">إعدادات الموقع</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row product-adding">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>المنتجات</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <table class="table table-striped" style="background-color: #ff6131ea ; font-color: rgba(230, 207, 207, 0.973);">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">إسم الصنف</th>
                                      </tr>
                                    </thead>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody>
                                      <tr>
                                            <td><?php echo e($categories->id); ?></th>
                                            <td><?php echo e($categories->name); ?></td>
                                      </tr>
                                      <td>
                                        <a class="btn btn-success" href="<?php echo e(url('/category-edit/'.$product->id)); ?>">تعديل</a>
                                        <a class="btn btn-danger" href="<?php echo e(url('/category-delete/'.$product->id)); ?>">حذف</a>
                                    </td>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </tbody>
                                     </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\شخصي\OneDrive\سطح المكتب\OZOYSTOREPROJECT\resources\views/dashboard/Categories/category.blade.php ENDPATH**/ ?>