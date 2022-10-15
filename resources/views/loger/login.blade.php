@extends('layouts.loger')

@section('isi-loger')
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <main class="form-signin">
                <div class="text-center">
                    <img src="/img/fbox-logo.png" alt="Fbox" title="Fbox" width="15%">

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" ria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h3 class="text-white-50 mt-2">Please Login</h3>
                </div>
                <form action="/login" method="POST">
                    @csrf

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-primary mt-3" type="submit">Login</button>

                    <small class="text-white-50 d-block text-center mt-4">Not registered? <a href="/register">Register
                            Now!</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
