@extends('layouts.layout')

@section("head")
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/registerLogin.css') }}" />
@endsection

@section('content')
    <section class="container mx-auto mt-5 wow pulse" style="margin-bottom: 100px;">
        <div class="divWhite formWidth p-4" style="border-radius: 20px;">
            <h4 class="text-center">Register a new account</h4>
            <br>
            <!-- Register form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control border-2" id="floatingName" placeholder="Your Name" required>
                    <label for="floatingName">Name*</label>
                </div>

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control border-2" id="floatingEmail" placeholder="name@example.com" required>
                    <label for="floatingEmail">Email Address*</label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control border-2" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password*</label>
                </div>

                <!-- Password Confirmation -->
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control border-2" id="floatingPasswordConfirmation" placeholder="Confirm Password" required>
                    <label for="floatingPasswordConfirmation">Confirm Password*</label>
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
                        <span>Register</span>
                    </button>
                </div>
            </form>
            <!-- End of register form -->
        </div>
    </section>
@endsection
