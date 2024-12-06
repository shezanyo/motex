@extends('layouts.layout')

@section("head")
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/registerLogin.css') }}" />
@endsection

@section('content')
    <section class="container mx-auto mt-5 wow pulse" style="margin-bottom: 100px;">
        <div class="divWhite formWidth p-4" style="border-radius: 20px;">
            <h4 class="text-center">Login to your account</h4>
            <br>
            <!-- Login form -->
            <form ">
                @csrf

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control border-2" id="floatingInput" placeholder="name@example.com" required autofocus>
                    <label for="floatingInput">Email Address*</label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control border-2" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password*</label>
                </div>

                <!-- Error messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Submit button -->
                <div class="d-grid gap-1">
                    <button class="btn btn-primary" type="submit">
                        <span><i class="fa-solid fa-right-to-bracket"></i> Login</span>
                    </button>
                    <br>
                    <p>New to The MOTEX? <a href="{{ route('register') }}" style="text-decoration: none;">Register here</a></p>
                </div>
            </form>
            <!-- End of login form -->
        </div>
    </section>
@endsection
