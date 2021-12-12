@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: -50px;">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="mb-3">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('img/logo.png')}}" alt="" srcset="" width="50%">
                </div>
                <h6 class="text-gray-800 pt-3 text-center font-weight-bold">
                    Sign in to your account
                </h6>
            </div>
            <div class="card border-0">
                <div class="card-body">


                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-login rounded-top @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                            @error('email')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    <strong>Upsss Sory!</strong><strong>{{ $message }}</strong>
                                    <svg width="20" height="20" viewBox="0 0 20 20" data-bs-dismiss="alert" aria-label="Close" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM8.70711 7.29289C8.31658 6.90237 7.68342 6.90237 7.29289 7.29289C6.90237 7.68342 6.90237 8.31658 7.29289 8.70711L8.58579 10L7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L10 11.4142L11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L11.4142 10L12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289C12.3166 6.90237 11.6834 6.90237 11.2929 7.29289L10 8.58579L8.70711 7.29289Z" fill="currentColor"/>
                                    </svg>
                                </div>
                            @enderror
                            <input type="password" name="password" id="password" class="form-login rounded-bottom @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="password">
                            @error('password')
                                <div class="alert alert-danger alert-dismissible invalid-feedback fade show" role="alert">
                                    <strong>Upsss Sory!</strong><strong>{{ $message }}</strong>
                                    <svg width="20" height="20" viewBox="0 0 20 20" data-bs-dismiss="alert" aria-label="Close" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM8.70711 7.29289C8.31658 6.90237 7.68342 6.90237 7.29289 7.29289C6.90237 7.68342 6.90237 8.31658 7.29289 8.70711L8.58579 10L7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L10 11.4142L11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L11.4142 10L12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289C12.3166 6.90237 11.6834 6.90237 11.2929 7.29289L10 8.58579L8.70711 7.29289Z" fill="currentColor"/>
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-pink-600 border-0" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="pt-3">
                            <button type="submit" class="btn btn-exotic btn-block">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
