@extends('auth.layouts.app')
@section('title', 'Return policy')

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
                <h1 class="text-white">Return policy</h1>
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
            <div class="container  mt-5">
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
                                    <h1 class="title mb-5"><b>Return policy</b></h1>
                                    <div class="body">
                                        <div class="text">
                                            <h6>
                                                <b>1. Conditions for returns</b>
                                            </h6>

                                            <p>Customers need to check the condition of the goods and can
                                                return/exchange the goods
                                                immediately at the time of delivery/receipt in the following cases:</p>

                                            <ul>
                                                <li>The goods are not of the same type or model as the order placed or
                                                    as shown on the
                                                    website at the time of ordering.</li>
                                                <li>The goods are not of the required quantity or set as in the order.
                                                </li>
                                                <li>The external condition is affected, such as torn packaging, peeling,
                                                    or breakage.</li>
                                            </ul>

                                            <p>Customers are responsible for submitting relevant documents proving the
                                                defects to complete
                                                the process of returning/exchanging goods.</p>
                                            <h6>
                                                <b>2. Regulations on notification and sending of returned
                                                    products</b>
                                            </h6>

                                            <ul>
                                                <li><b>Time for return notification</b>: within 48 hours from
                                                    the time of
                                                    receiving the product in the case of missing accessories, gifts, or
                                                    breakage.</li>
                                                <li><b>Time for sending the return product</b>: within 14 days
                                                    from the time of
                                                    receiving the product.</li>
                                                <li><b>Place for returning the product</b>: Customers can
                                                    bring the goods directly
                                                    to our office/store or send them via post.</li>
                                            </ul>

                                            <p>In case customers have any feedback/complaints about the quality of the
                                                product, please
                                                contact our customer service hotline.</p>
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
