@extends('auth.layouts.app')
@section('title', 'Account Profile')

@section('content')
    <main class="mt-5">

        <section class="w-100 p-4 d-flex justify-content-center pb-4" style="background: #eee">
            <div class="py-5">
                <div style="width: 26rem;" class="bg-white rounded-5 shadow-5-strong p-5 ">
                    <h5 class="card-title fw-bold text-center">Personal information</h5>

                    @if (session()->has('successPassword') || session()->has('successName') || session()->has('successPhone'))
                        <div class="alert alert-success mt-3" role="alert">
                            <ul class="list-unstyled mb-0">
                                @if (session()->has('successPassword'))
                                    <li><i class="fas fa-check-circle me-2"></i>{{ session('successPassword') }}</li>
                                @endif
                                @if (session()->has('successName'))
                                    <li><i class="fas fa-check-circle me-2"></i>{{ session('successName') }}</li>
                                @endif
                                @if (session()->has('successPhone'))
                                    <li><i class="fas fa-check-circle me-2"></i>{{ session('successPhone') }}</li>
                                @endif
                            </ul>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mt-3" role="alert">
                            @foreach ($errors->all() as $error)
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <small>{{ $error }}</small>
                            @endforeach
                        </div>
                    @endif

                    <div class="tab-content mt-3">
                        <h6 class="card-title fw-bold">Contact Info</h6>

                        <div class="row">
                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $customer->customer_email }}">
                            </div>
                        </div>

                        <div class="row">
                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $customer->customer_phone }}">
                            </div>
                        </div>

                        <div class="row">
                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Name</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $customer->customer_name }}">
                            </div>
                        </div>
                    </div>

                    <div class="tab-content mt-3">

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Edit Profile
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-mdb-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @include('auth.pages.auth.options.changepassword')
                                        @include('auth.pages.auth.options.changename')
                                        @include('auth.pages.auth.options.changephone')
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

    </main>

@endsection
