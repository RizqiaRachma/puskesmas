@extends('user.layouts.main')
@section('container')
   
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Berita</h1>
                
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">BERITA</h5>
                        <h1 class="display-6 mb-4">UPTD Puskesmas Bantar</h1>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="assets/user/img/karyawan.jpg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary m-3" href="/berita_detail">Show more</a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Imunisasi PCV</h4>
                            <p class="text-primary mb-0">Ayoo cegah anak, cucu, buyut kita dari penyakit Pneumonia dengan memberikan imunisasi dasar lengkap dan imunisasi PCV di fasilitas kesehatan terdekat 🥰</p>
                        </div>
                    </div>
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> 


@endsection