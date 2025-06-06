<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Jald Construction Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('admin.layout.styles')

    @include('admin.layout.scripts')

</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="text-center">
                                <img src="{{ asset('uploads/jald_logo.png') }}" class="img-fluid login-logo w-50" alt="">
                            </div>
                            <div class="card-header card-header-auth">
                                <h4 class="text-center text-warning">Admin Login</h4>
                            </div>
                            <div class="card-body card-body-auth">
                                @if(session()->get('error'))
                                    <div class="alert alert-danger">{{ session()->get('error') }}</div>
                                @endif
                                @if(session()->get('success'))
                                <div class="alert alert-success">{{ session()->get('success') }}</div>
                                @endif
                                <form method="" action="">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid   @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" autofocus>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid   @enderror" name="password"  placeholder="Password">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning btn-lg btn-block" onclick="dashboardRedirect()">
                                            Login
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            {{-- <a href="{{ route('admin_home') }}">
                                                Go to home
                                            </a> --}}
                                            <a href="{{ route('admin_home') }}">
                                                Forget Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

</body>
</html>