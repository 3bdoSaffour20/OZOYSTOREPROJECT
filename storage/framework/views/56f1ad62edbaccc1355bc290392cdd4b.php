

<?php $__env->startSection('body'); ?>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الإعلانات
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
                            <h5>الإعلانات</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <table class="table table-striped" style="background-color: #ec4917 ;">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">عنوان اللإعلان</th>
                                        <th scope="col">محتوى اللإعلان</th>
                                        <th scope="col">رقم المشترك</th>
                                        <th scope="col">رقم المنتج</th>
                                        <th scope="col">نوع الفئة</th>
                                        <th scope="col">أرشيف الإعلان</th>
                                      </tr>
                                    </thead>
                                    <?php $__currentLoopData = $advertises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advertise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tbody>
                                      <tr>
                                            <td><?php echo e($advertises->id); ?></th>
                                            <td><?php echo e($advertises->AdTitle); ?></td>
                                            <td><?php echo e($advertises->AdContent); ?></th>
                                            <td><?php echo e($advertises->subscriber_id); ?></td>
                                            <td><?php echo e($advertises->product_id); ?></td>
                                            <td><?php echo e($advertises->category_id); ?></td>
                                            <td><?php echo e($advertises->subarchive); ?></td>
                                      </tr>
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
<?php echo $__env->make('dashboard.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\شخصي\OneDrive\سطح المكتب\OZOYSTOREPROJECT\resources\views/dashboard/Advertise/advertise.blade.php ENDPATH**/ ?>