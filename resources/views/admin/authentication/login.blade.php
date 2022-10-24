@extends('admin.authentication.master')

@section('title')login

@endsection

@push('css')
@endpush

@section('content')
    <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                        <form action={{ route('login') }} method="POST" class="theme-form login-form">
                            @csrf
                        <h4>Login</h4>
                        <h6>Welcome back! Log in to your account.</h6>
                        @if(session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                        <div class="form-group">
                            <label>Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-email"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="show-hide"><span class="show"> </span></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div> 
    </div>
</section>

	
    @push('scripts')
    @endpush

@endsection