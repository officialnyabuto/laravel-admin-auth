@extends('layouts.auth')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Password Reset</h1>
                                    </div>
                                    <form class="user" action="{{ route('password.change') }}" method="POST">

                                        @include('layouts.alerts_block')

                                        @csrf

                                        <div class="form-group">
                                            <input type="email"
                                                class="form-control form-control-user h-45px fs-13px @error('email') is-invalid @enderror"
                                                name="email" id="email" value="{{ $email }}" readonly
                                                placeholder="email" />

                                                @error('email')
                                                <div class="invalid-feedback text-bold" style="color: #f40505;">{{ $message }}
                                                </div>
                                            @enderror


                                        </div>


                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user h-45px fs-13px @error('password') is-invalid @enderror"
                                                name="password" id="password" value="{{ old('password') }}"
                                                placeholder="Password" />

                                                @error('password')
                                                <div class="invalid-feedback text-bold" style="color: #f40505;">{{ $message }}
                                                </div>
                                            @enderror


                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user h-45px fs-13px @error('confirm_password') is-invalid @enderror"
                                                name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}"
                                                placeholder="Confirm Password" />

                                                @error('confirm_password')
                                                <div class="invalid-feedback text-bold" style="color: #f40505;">{{ $message }}
                                                </div>
                                            @enderror


                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </button>
                                        <hr>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection()
