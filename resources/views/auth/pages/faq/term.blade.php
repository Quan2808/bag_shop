@extends('auth.layouts.app')
@section('title',
    'Terms of
    service')

@section('content')
   <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner_2.png);
            }

            .stories {
                background-image: url(images/banners/About/backgroud.png);
            }

            

            h6 b {
                color: #ffc107
            }
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Terms of
                    service</h1>
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
                            Return Policy
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
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="title mb-5"><b>Terms of Service</b></h1>
                                            <div class="body">
                                                <h6 class="title">
                                                    <b>1. Introduction</b>
                                                </h6>

                                                <p>Welcome customers to our website.</p>

                                                <p> By visiting our website, you agree to these terms. The Website
                                                    reserves the right to change, modify, add or remove any part of
                                                    these Terms of Sale, at any time. Changes are effective immediately
                                                    upon posting on the website without prior notice. When you continue
                                                    to use the website, after changes to these Terms are posted, it
                                                    means that you accept those changes.</p>

                                                <p>Please check back often to keep up to date with our changes.</p>

                                                <h6 class="title">
                                                    <b>2. Website User Guide</b>
                                                </h6>

                                                <p>When accessing our website, customers must ensure that they are at
                                                    least 18 years old, or access under the supervision of a parent or
                                                    legal guardian. Customers ensure that they have all civil acts to
                                                    perform goods purchase and sale transactions in accordance with
                                                    current regulations of Vietnamese law.</p>

                                                <p> During the registration process, you agree to receive promotional
                                                    emails from the website. If you do not wish to continue receiving
                                                    mail, you may opt-out by clicking the link at the bottom of any
                                                    promotional email.</p>

                                                <h6 class="title">
                                                    <b>3. Safe and convenient payment</b>
                                                </h6>

                                                <p>Buyers can refer to the following payment methods and choose to apply
                                                    the appropriate method:</p>

                                                <ul class="list-unstyled w-50">
                                                    <li class="list-group-item"><strong>Option 1:</strong> Direct
                                                        payment (buyers receive goods at the seller's address)</li>
                                                    <li class="list-group-item"><strong>Option 2:</strong> Pay later
                                                        (COD - delivery and collection of money)</li>
                                                    <li class="list-group-item"><strong>Option 3:</strong> Online
                                                        payment via credit card, bank transfer</li>
                                                </ul>
                                            </div>
                                        </div>
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
