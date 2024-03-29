@extends('layouts.auth')

@section('content')
    <header class="login-header shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo-img.png" width="140" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i
                                    class='bx bx-home-alt me-1'></i>Home</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#"><i
                                    class='bx bx-category-alt me-1'></i>Features</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#"><i
                                    class='bx bx-microphone me-1'></i>Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign Up</h3>
                                    <p>Already have an account? <a href="{{ route('account.login')}}">Sign
                                            in here</a>
                                    </p>
                                </div>


                                <div class="form-body">
                                    <form class="row g-3" action="{{ route('account.registerUser') }}" method="POST">

                                        @include('layouts.alerts_block')

                                        @csrf
                                        <div class="col-sm-6">
                                            <label for="inputFirstName" class="form-label">First Name</label>
                                            <input type="text"
                                                class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                                id="inputFirstName" name="first_name" value="{{ old('first_name') }}"
                                                placeholder="Jhon">
                                            @if ($errors->has('first_name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('first_name') }}
                                                 </div>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputLastName" class="form-label">Last Name</label>
                                            <input type="text"
                                                class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                                id="inputLastName" name="last_name" value="{{ old('last_name') }}"
                                                placeholder="Deo">
                                            @if ($errors->has('last_name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('last_name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email"
                                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                id="inputEmailAddress" name="email" value="{{ old('email') }}"
                                                placeholder="example@user.com">
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password"
                                                    class="form-control border-end-0{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    id="inputChoosePassword" name="password" placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                                        @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <label for="inputChooseConfirmPassword" class="form-label">Confirm
                                                Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password"
                                                    class="form-control border-end-0{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}"
                                                    id="inputChooseConfirmPassword" name="confirm_password"
                                                    placeholder="Confirm Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                                        @if ($errors->has('confirm_password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('confirm_password') }}
                                                </div>
                                            @endif
                                            </div>

                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class='bx bx-user'></i>Sign up</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection()
