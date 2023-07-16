@extends('auth.layouts.app')
@section('title', 'Why choose us?')

@section('content')
   <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner_2.png);
            }

            

            h6 b {
                color: #ffc107
            }
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Why choose us?</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/faq') }}">
                                <i class="fa-solid fa-question-circle"></i> FAQ
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Why choose us?
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="container mt-5">
            <div class="mb-3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <section class="sidebar container">
                            @include('auth.pages.faq.list-page')
                        </section>
                    </div>
                    <div class="col-md-8">
                        <section class="content">
                            <div class="container">
                                <h1 class="title mb-5"><b>Why choose us?</b></h1>
                                <div class="d-flex align-items-start mb-3" style="height: 100px;">
                                    <div class="col">
                                        <h5 class="title"><i class="fa-solid fa-handshake"></i>
                                            <b>POLICY ONLY</b>
                                        </h5>
                                        <p class="text"><small class="text-body-secondary">Enthusiastic
                                                consultation -
                                                Fast sample sewing - Competitive price - Commitment on
                                                schedule.</small></p>
                                    </div>
                                    <div class="col">
                                        <h5 class="title"><i class="bi bi-patch-check-fill"></i>
                                            <b>QUALITY</b>
                                        </h5>
                                        <p class="text"><small class="text-body-secondary">All
                                                products from Kingbag are always prioritized to use raw
                                                materials from reputable suppliers such as: HKK, Kodura
                                                fabric, Polyester, EVA foam... and are rigorously tested
                                                before being shipped.</small></p>
                                    </div>
                                    <div class="col">
                                        <h5 class="title"><i class="fa-solid fa-truck"></i>
                                            <b>TRANSPORT</b>
                                        </h5>
                                        <p class="text"><small class="text-body-secondary">Nationwide
                                                delivery - Free
                                                delivery in HCMC area. Ho Chi Minh.</small></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
