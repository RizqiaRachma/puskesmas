
<?php $__env->startSection('container'); ?>
    

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Unduhan</h1>
           
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12 col-lg-12 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">INFO PUBLIK</h5>
                        <br>
                        <span>Dapat Di Download Dapat Dengan Mengklik Tombol Download Atau Nama File</span>
                    </div>
                    <br>
                    <div class="d-flex align-items-center mb-2">
                    <table id="example" class="table table-striped" style="width:100%">
                        <tr>
                        <td>NAMA</td>
                        <td>UNDUH</td>
                        </tr>
                        <tr>
                        <td>Nama File</td>
                        <td><button>Unduh</button></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
</div>
<!-- Contact End -->
<script>
$(document).ready(function () {
    $('#example').DataTable();
});  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\puskesmas\resources\views/user/unduhan.blade.php ENDPATH**/ ?>