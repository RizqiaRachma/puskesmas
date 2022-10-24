@extends('layouts.admin.master')

@section('title')Tambah User
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah User</h3>
		@endslot
		<li class="breadcrumb-item">User</li>
		<li class="breadcrumb-item">User Data</li>
		<li class="breadcrumb-item active">Tambah User</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tambah Data User</h5>
						<span>Please Make sure fill all the filed before click on next button</span>
					</div>
					<div class="card-body">
						<form class="form-wizard" id="regForm" action="{{ route('permission.store') }}" method="POST">
							<div class="tab">
								<div class="form-group">
									<label for="name">Name</label>
									<input class="form-control" id="name" type="text"  required="required" />
								</div>
								<div class="form-group">
									<label for="name">Email</label>
									<input class="form-control" id="email" type="email"  required="required" />
								</div>
								
								
							</div>
							<div class="tab">
								
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" />
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Confirm Password</label>
									<input class="form-control" id="exampleInputcPassword1" type="password" placeholder="Enter again" />
								</div>
							</div>
							<div class="tab">
								<div class="form-group">
									<label for="exampleFormControlInput1">Birthday:</label>
									<input class="form-control digits" type="date" />
								</div>
								
							</div>
							<div class="tab">
								<div class="form-group">
									<label class="control-label">Address</label>
									<input class="form-control mt-1" type="text" name="address" required="required" />
								</div>
								<div class="form-group">
									<label class="control-label">Kelurahan</label>
									<input class="form-control mt-1" type="text" name="kelurahan" required="required" />
								</div>
								<div class="form-group">
									<label class="control-label">Kecamatan</label>
									<input class="form-control mt-1" type="text" name="kecamatan" required="required" />
								</div>
                <div class="form-group">
									<label class="control-label">Kota / Kab</label>
									<input class="form-control mt-1" type="text" name="kotakab" required="required" />
								</div>
							</div>
							<div>
								<div class="text-end btn-mb">
									<button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
									<button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
								</div>
							</div>
							<!-- Circles which indicates the steps of the form:-->
							<div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span></div>
							<!-- Circles which indicates the steps of the form:-->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{asset('assets/js/form-wizard/form-wizard.js')}}"></script>
	@endpush

@endsection