@extends('auth.layouts.app')
@section('title', 'Privacy policy')

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
                <h1 class="text-white">Privacy policy</h1>
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
                            Privacy policy
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
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
                                    <h1 class="title mb-5"><b>Privacy Policy</b></h1>
                                    <div class="body">
                                        <p class="text text-jusify">This Privacy Policy is intended to help you
                                            understand how the website collects and uses your personal information
                                            through your use of the website, including any information that may be
                                            provided through the website when you register an account, sign up to
                                            receive communications from us, or when you purchase products or services,
                                            request additional service information from us.</p>
                                        <p class="text">We use your personal information to communicate as
                                            necessary in connection with your use of our website, to answer questions or
                                            to send documents and information you request.</p>
                                        <p class="text">Our website takes information security seriously and uses
                                            best practices to protect customer information and payments. All transaction
                                            information will be kept confidential unless required by law enforcement.
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
