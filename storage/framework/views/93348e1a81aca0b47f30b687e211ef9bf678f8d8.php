<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">შედეგი</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p><?php echo e(session('status')); ?></p>

                                    <a href="<?php echo e(route('client.test')); ?>" class="btn btn-primary">დავწეროთ თავიდან</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <p>ჯამური ქულა: <?php echo e($result->total_points); ?> ქულა</p>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\PhpstormProjects\Laravel-Test-Result-PDF\resources\views/client/results.blade.php ENDPATH**/ ?>