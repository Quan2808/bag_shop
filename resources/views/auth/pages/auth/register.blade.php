@extends('auth.layouts.app')

@section('title', 'Register')

@section('content')

    <main class="mt-5">
        <section class="w-100 p-4 d-flex justify-content-center pb-4">

            <div style="width: 26rem;">

                @include('auth.pages.auth.app')

                <div class="tab-content">

                    <form action="{{ route('auth.register') }}" method="POST" class="bg-white rounded-5 shadow-5-strong p-5">
                        @csrf
                        <div class="brand-logo text-center">
                            <img src="{{ asset('images/logo/logo.png') }}" alt="logo" style="width: 40%" class="mb-4">
                        </div>
                        <h4 class="fw-bold" style="color: #92aad0;">Join us today!</h4>
                        <p class="mb-4" style="color: #45526e;">Create an account by filling in your information below.
                        </p>

                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-outline mb-4">
                            <input type="text" id="customer_name" name="customer_name"
                                class="form-control @error('customer_name') is-invalid @enderror"
                                value="{{ old('customer_name') }}" required>
                            <label class="form-label" for="customer_name" style="margin-left: 0px;">Name</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                            @error('customer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="customer_email" name="customer_email"
                                class="form-control @error('customer_email') is-invalid @enderror"
                                value="{{ old('customer_email') }}" required>
                            <label class="form-label" for="customer_email" style="margin-left: 0px;">Email</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                            
                        </div>

                        <div class="form-outline mb-4">
                            <input type="tel" id="customer_phone" name="customer_phone"
                                class="form-control @error('customer_phone') is-invalid @enderror"
                                value="{{ old('customer_phone') }}" required maxlength="10">
                            <label class="form-label" for="customer_phone" style="margin-left: 0px;">Phone</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                            
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="customer_password" name="customer_password"
                                class="form-control @error('customer_password') is-invalid @enderror" required>
                            <label class="form-label" for="customer_password" style="margin-left: 0px;">Password</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                            
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="customer_password_confirmation" name="customer_password_confirmation"
                                class="form-control @error('customer_password_confirmation') is-invalid @enderror" required>
                            <label class="form-label" for="customer_password_confirmation" style="margin-left: 0px;">Confirm
                                Password</label>
                            <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px;"></div>
                                <div class="form-notch-middle" style="width: 64.8px;"></div>
                                <div class="form-notch-trailing"></div>
                            </div>
                        </div>
                        

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="1" id="registerCheck"
                                name="registerCheck" required>
                            <label class="form-check-label" for="registerCheck" style="color: #45526e;">
                                I have read and agree to the <a href="{{route('term')}}" target="_blank"
                                    style="color: #92aad0;">terms and conditions</a>.
                            </label>
                            
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
