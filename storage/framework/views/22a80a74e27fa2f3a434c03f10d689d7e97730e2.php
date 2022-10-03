

<?php $__env->startSection('container'); ?>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Sejarah Singkat</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Sejarah Singkat</h5>
                        <h1 class="display-5 mb-0">UPTD Puskesmas Bantar</h1>
                    </div>
                
                    <p class="mb-4">Puskesmas Bantar merupakan Unit Pelaksana Teknis Dinas Kesehatan Kota Tasikmalaya yang bertanggung jawab terhadap pembangunan kesehatan pada wilayah kerja Kecamatan Bantar. </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="assets/user/img/header.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puskesmas\resources\views/user/sejarah.blade.php ENDPATH**/ ?>