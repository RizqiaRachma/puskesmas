@extends('layouts.admin.master')

@section('title') Page
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Edit Page</h3>
		@endslot
		<li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item">Page</li>
		<li class="breadcrumb-item active">Edit Page</li>
	@endcomponent

    <div class="form-builder">
        <div class="container-fluid">
          <div class="select2-drpdwn">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Tambah Page</h5>
                </div>
                <div class="card-body form-builder">
                      <div class="col-lg-12 col-xl-12">
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                            <form method="POST" action="{{ route('page.update', $data->id) }}"  class="theme-form">
                              @csrf
                              @method('PUT')
                              <div class="mb-3 draggable">
                                <label for="input-text-1">TYPE</label>
                                <select class="form-control form-control-primary btn-square" name="type">
                                  <option value="Page" @if($data->type === 'Page')  selected @endif>Page</option>
                                  <option value="Berita" @if($data->type === 'Berita') selected @endif>Berita</option>
                                  <option value="Galeri" @if($data->type === 'Galeri') selected @endif>Galeri</option>
                                  <option value="Unduhan" @if($data->type === 'Unduhan') selected @endif>Unduhan</option>
                              </select>
                              </div>
                              </div>
                              
                              <div class="mb-3 draggable">
                                <label for="input-text-1">NAME</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}"  required autocomplete="name" autofocus>
                              </div>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">SLUG</label>
                                <input id="name" type="text" class="form-control" name="slug" value="{{ $data->slug }}" required autocomplete="name" autofocus>
                              </div>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">COUNT</label>
                                <input id="name" type="text" class="form-control" name="count" value="{{ $data->count }}" required autocomplete="name" autofocus>
                              </div>
	                          
                              <div class="row">
                                <div class="col-sm-12">
                                  <label for="input-text-1">BODY</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea id="editor1" name="body" value="{{ $data->body }}" cols="30" rows="10">
                                                {{ $data->body }}
                                            </textarea>
                                        </div>
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

    @push('scripts') 
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/beautifyhtml.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/form-builder-2.js') }}"></script>
    
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
	@endpush

@endsection