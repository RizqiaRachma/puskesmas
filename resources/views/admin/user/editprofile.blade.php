@extends('layouts.admin.master')

@section('title')Profil
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Profil</h3>
		@endslot
		<li class="breadcrumb-item">User</li>
		<li class="breadcrumb-item active">Edit Profil</li>
	@endcomponent

    <div class="form-builder">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body form-builder">
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                            <form method="POST" action="{{url('users/edit-email')}}"  class="theme-form">
								@csrf
								@method('PUT')
                              <div class="mb-3 draggable">
                                <label for="input-text-1">Ubah Avatar</label>
                                <input id="avatar" type="file" class="form-control" name="avatar">              
							    </div>
                              <div class="form-group">
                                <button class="btn btn-primary " type="submit" data-original-title="btn btn-dark active" title="">EDIT</button>
                              </div> 
                              </form>
                          </div>
                          
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-sm-3">
				<div class="card">
				  <div class="card-body form-builder">
						  <div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
							  <form method="POST" action="{{url('users/edit-email')}}"  class="theme-form">
								  @csrf
								  @method('PUT')
								<div class="mb-3 draggable">
								  <label for="input-text-1">Ubah Email</label>
								  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
										  @error('email')
											  <span class="invalid-feedback" role="alert">
												  <strong>{{ $message }}</strong>
											  </span>
										  @enderror
								</div>
								
							   
								<div class="form-group">
								  <button class="btn btn-primary " type="submit" data-original-title="btn btn-dark active" title="">EDIT</button>
								</div> 
								</form>
							</div>
							
					  </div>
					</div>
				  </div>
				</div>

				<div class="col-sm-3">
					<div class="card">
					  <div class="card-body form-builder">
							  <div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
								  <form method="POST" action="{{url('users/edit-email')}}"  class="theme-form">
									  @csrf
									  @method('PUT')
									<div class="mb-3 draggable">
									  <label for="input-text-1">Ubah Password</label>
									  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
	  
											  @error('email')
												  <span class="invalid-feedback" role="alert">
													  <strong>{{ $message }}</strong>
												  </span>
											  @enderror
									</div>
									
								   
									<div class="form-group">
									  <button class="btn btn-primary " type="submit" data-original-title="btn btn-dark active" title="">EDIT</button>
									</div> 
									</form>
								</div>
								
						  </div>
						</div>
					  </div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header pb-0">
									<h5>Ubah Profil</h5>
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
        </div>
      </div>

    @push('scripts') 
	<script src="{{asset('assets/js/form-wizard/form-wizard.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/beautifyhtml.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/form-builder-2.js') }}"></script>
	@endpush

@endsection