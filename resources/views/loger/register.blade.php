@extends('layouts.loger')

@section('isi-loger')
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <main class="form-signup">
                <form action="/register" method="POST">
                    @csrf
                    <div class="text-center">
                        <img src="/img/fbox-logo.png" alt="Fbox" title="Fbox" width="15%">
                        <h3 class="text-white-50 mt-2">Please Register</h3>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" required
                            class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="yourname" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="form-floating">
                        <input type="text" name="name" required
                            class="form-control tengah @error('name') is-invalid @enderror" id="name"
                            placeholder="Your Name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" required
                            class="form-control tengah @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" required
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-primary mt-3" type="submit">Register</button>

                    <small class="text-white-50 d-block text-center mt-4">Allready registered? <a href="/login">Login
                            Now!</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
