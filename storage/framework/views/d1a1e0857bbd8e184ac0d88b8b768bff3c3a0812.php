

<?php $__env->startSection('title'); ?> Page
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Tambah Page</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Setting</li>
		<li class="breadcrumb-item active">Tambah Page</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="form-builder">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Tambah Page</h5>
                </div>
                <div class="card-body form-builder">
                      <div class="col-lg-6 col-xl-6">
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                            <form method="POST" action="<?php echo e(route('permission.store')); ?>"  class="theme-form">
                              <?php echo csrf_field(); ?>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">TYPE</label>
                                <input id="type" type="text" class="form-control" name="type" required autocomplete="type" autofocus>
                              </div>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">NAME</label>
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                              </div>
                              
                             
                              <div class="form-group">
                                <button class="btn btn-primary " type="submit" data-original-title="btn btn-dark active" title="">SAVE</button>
                              </div> 
                              </form>
                          </div>
                          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php $__env->startPush('scripts'); ?> 
    <script src="<?php echo e(asset('assets/js/jquery.ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form-builder/form-builder-2/beautifyhtml.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form-builder/form-builder-2/form-builder-2.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puskesmas\resources\views/admin/pages/create.blade.php ENDPATH**/ ?>