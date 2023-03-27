

<?php $__env->startSection('body'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الموقع
                            </h3>
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
                            <h5>إضافة منتج</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <form action="<?php echo e(url('/product-add')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>

                                    <?php if($errors->any()): ?>
                                    <?php echo implode('', $errors->all('<div>:message</div>')); ?>

                                <?php endif; ?>

                                <div class="form-group">
                                    <label class="col-form-label">إسم المنتج</label>
                                    <input class="form-control dropify" id="validationCustom05" type="text" name="name">
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label ">وصف المنتج</label>
                                    <input class="form-control dropify" id="validationCustom05" type="text" name="description">
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label ">صورةالمنتج</label>
                                  <input class="form-control dropify" id="validationCustom05" type="file" name="img">
                              </div>

                                <div class="form-group">
                                  <label class="col-form-label ">فئة المنتج</label>
                                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>

                              <div class="form-group">
                                <label class="col-form-label ">تاريخ الإضافة</label>
                                <input class="form-control dropify" id="validationCustom05" type="date" name="add_date">
                            </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">حفظ</button>
                                </div>


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
<?php echo $__env->make('dashboard.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\شخصي\OneDrive\سطح المكتب\OZOYSTOREPROJECT\resources\views/dashboard/Products/product-add.blade.php ENDPATH**/ ?>