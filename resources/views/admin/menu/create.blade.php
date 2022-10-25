@extends('layouts.admin.master')

@section('title') Menu
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Menu</h3>
		@endslot
		<li class="breadcrumb-item">Setting</li>
		<li class="breadcrumb-item active">Tambah Menu</li>
	@endcomponent

    <div class="form-builder">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Tambah Menu</h5>
                </div>
                <div class="card-body form-builder">
                      <div class="col-lg-12 col-xl-12">
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                            <form method="POST" action="{{ route('menu.store') }}"  class="theme-form">
                              @csrf
                              
                              <div class="mb-3 draggable">
                                <label for="input-text-1">NAME</label>
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                              </div>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">SLUG</label>
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                              </div>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">PARENT</label>
                                <input id="type" type="text" class="form-control" name="parent" required autocomplete="type" autofocus>
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

    @push('scripts') 
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/beautifyhtml.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/form-builder-2.js') }}"></script>
	@endpush

@endsection