@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')

    <main class="mt-5">
        <section class="w-100 p-4 d-flex justify-content-center pb-4">

            <div style="width: 26rem;">

                @include('auth.pages.auth.app')

                <div class="tab-content bg-white rounded-5 shadow-5-strong p-5">

                    <div class="brand-logo text-center">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="logo" style="width: 40%" class="mb-4">
                    </div>
                    <h4 class="fw-bold" style="color: #92aad0;">Welcome back</h4>
                    <p class="mb-4" style="color: #45526e;">To log in, please fill in these text fields with your
                        e-mail address and password.</p>
                    @if (session('error') || $errors->has('email') || $errors->has('password'))
                        <div class="alert alert-danger text-center" role="alert">
                            @if (session('error'))
                                {{ session('error') }}<br>
                            @else
                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}<br>
                                @endif
                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}<br>
                                @endif
                            @endif
                        </div>
                    @endif
                    @if (session('successSendEmail') || session('successResetPass'))
                        <div class="alert alert-success text-center" role="alert">
                            @if (session('successSendEmail'))
                                {{ session('successSendEmail') }}<br>
                            @else
                                @if (session('successResetPass'))
                                    {{ session('successResetPass') }}<br>
                                @endif
                            @endif
                        </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" id="email" name="email" class="form-control"
                                value="{{ old('email') }}">
                            <label class="form-label" for="email" style="margin-left: 0px;">Email</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control">
                            <label class="form-label" for="password" style="margin-left: 0px;">Password</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>
                        </div>
                    </form>


                    <hr>

                    <div class="col d-flex justify-content-center">
                        <a href="" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                            Fogot your password?
                        </a>
                    </div>

                    @include('auth.pages.auth.options.forgot-password')

                </div>

            </div>

        </section>
    </main>
@endsection
