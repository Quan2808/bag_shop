@extends('auth.layouts.app')
@section('title', 'Order process')

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
                <h1 class="text-white">Order process</h1>
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
                            Order process
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="container mt-5">
            <div class="mb-3 border-0">
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
                                        <h1 class="title mb-5">
                                            <b>Order process</b>
                                        </h1>
                                        <div class="body">
                                            <div>
                                                <h6 class="title">
                                                    <b>CONTACT AND CONSULTATION</b>
                                                </h6>

                                                <p>If you have a need for ordering garment production, bags or
                                                    pouches, please contact us via email or phone to receive
                                                    consultation.</p>

                                                <p>You can choose from our existing product samples on our
                                                    website, or provide your own custom design to suit your
                                                    specific needs.</p>
                                            </div>

                                            <div>
                                                <h6 class="title">
                                                    <b>QUOTATION AND FREE SAMPLE MAKING</b>
                                                </h6>

                                                <p>ou can provide us with your requirements for design, style,
                                                    size, material, patterns, company logo, quantity, etc. to
                                                    receive a quotation and proceed with sample making for free.
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="title">
                                                    <b>SAMPLE APPROVAL</b>
                                                </h6>

                                                <p>Sample products will be completed within 3-5 days, depending
                                                    on the complexity of the product.</p>

                                                <p>If the sample product meets your requirements, we will
                                                    proceed to sign a contract.</p>
                                            </div>

                                            <div>
                                                <h6 class="title">
                                                    <b>CONTRACT SIGNING</b>
                                                </h6>

                                                <p>The terms and agreements in the contract include:</p>
                                                <ul>
                                                    <li>Agreements on debt and legal obligations between both
                                                        parties.</li>
                                                    <li>Payment method, packaging, transportation, invoice.</li>
                                                    <li>Delivery time.</li>
                                                    <li>Please pay 30%-50% of the contract value in advance.
                                                    </li>
                                                </ul>
                                            </div>

                                            <div>
                                                <h6 class="title">
                                                    <b>MASS PRODUCTION</b>
                                                </h6>

                                                <p>The production time will range from 7-20 days depending on
                                                    the quantity of the order.</p>
                                            </div>

                                            <div>
                                                <h6 class="title">
                                                    <b>INSPECTION AND PACKAGING</b>
                                                </h6>

                                                <p>Products will be rigorously inspected and carefully packaged
                                                    before delivery.</p>
                                            </div>

                                            <div>
                                                <h6 class="title">
                                                    <b>PRODUCT DELIVERY</b>
                                                </h6>

                                                <p>The products will be delivered to you directly, and you can
                                                    check the quantity and quality of the products. If the
                                                    quantity is not satisfactory, you will need to pay the
                                                    remaining amount according to the contract.</p>
                                            </div>
                                        </div>
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
