@extends('layouts.main')
@section('main-container')
    <!-- navigation -->

    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- register -->
    <div class="register">
        <div class="container">
            <h2>Register Here</h2>
            <div class="login-form-grids">
                <h5>profile information</h5>
                <form action="registered-user" method="post">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf
                    <input type="text" name="First Name" placeholder="First Name..." required=" ">
                    <span class="text-daner">
                        @error('first name')
                            {{ $message }}
                        @enderror
                    </span>

                    <input type="text" name="Last Name" placeholder="Last Name..." required=" ">
                    <span class="text-daner">
                        @error('last name')
                            {{ $message }}
                        @enderror
                    </span>

                    {{-- </form> --}}
                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to
                                Newsletter</label>
                        </div>
                    </div>
                    <h6>Login information</h6>
                    {{-- <form action="#" method="post"> --}}
                    <input type="email" name="Email" placeholder="Email Address" required=" ">
                    <span class="text-daner">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                    <input type="password" name="Password" placeholder="Password" required=" ">
                    <span class="text-daner">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                    <input type="password" name="Password Confirmation" placeholder="Password Confirmation" required=" ">
                    <span class="text-daner">
                        @error('password conf')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms
                                and conditions</label>
                        </div>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>
            <div class="register-home">
                <a href="index.html">Home</a>
            </div>
        </div>
    </div>
    <!-- //register -->
@endsection
