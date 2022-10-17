

<?php $__env->startSection('title'); ?>Tambah Roles
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Tambah Roles</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">User</li>
		<li class="breadcrumb-item active">Tambah Roles</li>
	<?php echo $__env->renderComponent(); ?>

    <div class="form-builder">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Tambah Roles</h5>
                </div>
                <div class="card-body form-builder">
                      <div class="col-lg-6 col-xl-6">
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                            <form method="POST" action="<?php echo e(route('role.store')); ?>"  class="theme-form">
                              <?php echo csrf_field(); ?>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">Role</label>
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                              </div>
                             
                              <div class="col-sm-12">
                                <label for="input-text-1">Permission</label>
                                <div class="form-group m-t-15 m-checkbox-inline mb-0">
                                  <div class="checkbox checkbox-dark">
                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input id="<?php echo e($u->id); ?>" type="checkbox" name="permission" value="<?php echo e($u->id); ?>">
                                    <label for="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></span></label>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                                  
                                </div>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puskesmas\resources\views/admin/role/create.blade.php ENDPATH**/ ?>