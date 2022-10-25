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
		<li class="breadcrumb-item">Tambah User</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header pb-0">
				<h5>Tambah User</h5>
			  </div>
			  <div class="card-body">
				<form class="f1" method="POST" action="{{ route('user.store') }}">
					@csrf
				  <div class="f1-steps">
					<div class="f1-progress">
					  <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
					</div>
					<div class="f1-step active">
					  <div class="f1-step-icon"><i class="fa fa-user"></i></div>
					  <p>Profil</p>
					</div>
					<div class="f1-step">
					  <div class="f1-step-icon"><i class="fa fa-key"></i></div>
					  <p>Akun</p>
					</div>
					<div class="f1-step">
					  <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
					  <p>Birth Date</p>
					</div>
				  </div>
				  <fieldset>
					<div class="form-group">
					  <label for="f1-first-name">Nama</label>
					  <input class="form-control" id="f1-first-name" type="text" name="name"  required="">
					</div>
					<div class="form-group">
					  <label for="f1-last-name">Email</label>
					  <input class="f1-last-name form-control" id="f1-last-name" type="email" name="email"  required="">
					</div>
					<div class="form-group">
						<label for="f1-last-name">Tentang Saya</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="aboutme"  required="">
					  </div>
					  <div class="form-group">
						<label for="f1-last-name">Kontak Darurat</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="emergency"  required="">
					  </div>
					<div class="form-group">
						<label for="f1-last-name">Alamat</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="address"  required="">
					  </div>
					  <div class="form-group">
						<label for="f1-last-name">Kelurahan</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="kelurahan"  required="">
					  </div>
					  <div class="form-group">
						<label for="f1-last-name">Kecamatan</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="kecamatan"  required="">
					  </div>
					  <div class="form-group">
						<label for="f1-last-name">Kota / Kabupaten</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="kotakab"  required="">
					  </div>
					 
					<div class="f1-buttons">
					  <button class="btn btn-primary btn-next" type="button">Next</button>
					</div>
				  </fieldset>
				  <fieldset>
					
					<div class="form-group">
						
						<div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
							<label for="role">Roles : </label>
							<div class="radio radio-primary">
							@foreach ($roles as $u)
							<input id="{{ $u->id }}" type="radio" name="roles[]" value="{{ $u->id }}">
							<label for="{{ $u->id }}">{{ $u->name }}</span></label>
							 @endforeach
						  </div>
					<div class="form-group">
							<label for="f1-password">Avatar</label>
							<input class="f1-password form-control"  type="file" name="avatar" required="">
						  </div>
					<div class="form-group">
					  <label class="sr-only" for="f1-password">Password</label>
					  <input class="f1-password form-control" id="f1-password" type="password" name="f1-password" placeholder="Password..." required="">
					</div>
					<div class="form-group">
					  <label class="sr-only" for="f1-repeat-password">Repeat password</label>
					  <input class="f1-repeat-password form-control" id="f1-repeat-password" type="password" name="f1-repeat-password" placeholder="Repeat password..." required="">
					</div>
					<div class="f1-buttons">
					  <button class="btn btn-primary btn-previous" type="button">Previous</button>
					  <button class="btn btn-primary btn-next" type="button">Next</button>
					</div>
				  </fieldset>
				  <fieldset>
					<div class="form-group">
						<label for="f1-last-name">Tempat Lahir</label>
						<input class="f1-last-name form-control" id="f1-last-name" type="text" name="place"  required="">
					  </div>
					 
					<div class="form-group">
						<label class="sr-only">Tanggal Lahir</label>
						<input class="form-control" id="dd" type="date" placeholder="dd" required="">
					  </div>
					<div class="f1-buttons">
					  <button class="btn btn-primary btn-previous" type="button">Previous</button>
					  <button class="btn btn-primary btn-submit" type="submit">Submit</button>
					</div>
				  </fieldset>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	
	@push('scripts')
	<script src="{{asset('assets/js/form-wizard/form-wizard-three.js')}}"></script>
    <script src="{{asset('assets/js/form-wizard/jquery.backstretch.min.js')}}"></script>
	@endpush

@endsection