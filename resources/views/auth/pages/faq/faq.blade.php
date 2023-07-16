@extends('auth.layouts.app')
@section('title',
    'Frequently
    asked questions')

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
                <h1 class="text-white">Frequently
                    asked questions</h1>
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
                                    <h1 class="title mb-5">
                                        <b>Frequently asked questions</b>
                                    </h1>
                                    <div class="body">
                                        <div class="mb-5">
                                            <p> When there is a need to order backpacks, bags, customers will often ask
                                                questions about products, design, materials, production plans,
                                                warranty... The following is a summary and answers to these questions.
                                                Frequently asked questions by our customers.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>How to contact to learn and order?</b>
                                            </h6>

                                            <p>Customers can contact us via:</p>

                                            <ul>
                                                <li>Address: Viet Handbag Manufacturing Joint Stock Company No. 16 Lot
                                                    L,
                                                    Street 9, Tan Kien, Binh Chanh, City. HCM.</li>
                                                <li>Email: info@kingbag.vn</li>
                                                <li>Phone: (+84) 911 300 808</li>
                                            </ul>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>What product lines can the company offer?</b>
                                            </h6>

                                            <p>We specialize in designing, manufacturing and processing backpacks, bags,
                                                uniform backpacks. You can check out the details <a
                                                    class="text-decoration-none"
                                                    href="{{ url('/why-choose-us') }}">here</a>.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>How to choose a design?</b>
                                            </h6>

                                            <p>You can choose an existing sample product on our website, or any sample
                                                and then customize it according to your requirements and use purposes.
                                            </p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>How to choose materials?</b>
                                            </h6>

                                            <p>You will be consulted and choose the most suitable materials for the
                                                design of the product through the catalog that we provide.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>How long does it take to make samples?</b>
                                            </h6>

                                            <p>The average sample sewing time is 5-7 days. For models with complex
                                                designs, the sample sewing time will be longer in many stages.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>How much quantity can order?</b>
                                            </h6>

                                            <p>The company only accepts orders with quantity of 100 or more.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>What will the price depend on?</b>
                                            </h6>

                                            <p>The price depends on the material, design and quantity. The larger the
                                                order, the more favorable the price. Please contact us for a quote <a
                                                    class="text-decoration-none" href="{{ url('/contact-us') }}">here</a>.
                                            </p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>How to deposit and pay?</b>
                                            </h6>

                                            <p>Please pay 30% - 50% of the order value in advance. After receiving the
                                                goods, you check and complete the remaining payment.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>Order completion time?</b>
                                            </h6>

                                            <p>Order completion time takes from 7 to 20 days depending on the design and
                                                quantity of the order.</p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>Delivery method?</b>
                                            </h6>

                                            <p>Our company delivers nationwide, free delivery in HCMC area. Ho Chi Minh.
                                                Support overseas delivery if customers need. </p>
                                        </div>

                                        <div>
                                            <h6 class="title">
                                                <b>Can a defective product be returned?</b>
                                            </h6>

                                            <p>Products will be rigorously tested, so the possibility of errors is very
                                                low. However, if there is an error, we immediately fix it, and cover the
                                                return if the product does not meet the requirements as agreed.</p>
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
