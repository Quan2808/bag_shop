@extends('auth.layouts.app')
@section('title',
    'Leading quality and prestige quality and prestige garment company')

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
                <h1 class="text-white">Leading quality and prestige quality and prestige garment company</h1>
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
                                    <h1 class="title mb-5 fw-bold">
                                        Leading quality and prestige quality and prestige garment company
                                    </h1>
                                    <div class="body">
                                        <div class="mb-5">
                                            <p><small>Currently in the city. Ho Chi Minh City has more than 100 companies
                                                    making backpacks and bags to meet the increasingly diverse and
                                                    increasing demand for online business activities in backpacks and bags
                                                    in the coming years. So why is KINGBAG always the top trusted supplier
                                                    in the country, answer all through the following article:</small></p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                1. Prestigious, experienced bag sewing company.
                                            </h6>

                                            <p>Viet Handbag Manufacturing Joint Stock Company started production in 2004 by
                                                fashion lovers backpacks and bags. Over the years, KINGBAG has grown
                                                stronger and stronger, becoming the leading backpack and bag sewing company
                                                in Ho Chi Minh City. HCM.</p>

                                            <p>KINGBAG is strong from sewing and processing to building brands for
                                                distributors, developing agents nationwide. The company wishes to grow
                                                strong and bring its products to all over Vietnam and friends around the
                                                world. Become a companion for customers on trips, put on high-class elegance
                                                with products: laptop backpacks, travel bags, suitcases - briefcases,
                                                crossbody bags, ...</p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                2. High quality products to satisfy all customers.
                                            </h6>

                                            <p>KINGBAG with a large-scale factory system and a new generation of advanced
                                                production lines produces products of international standard quality (ISO).
                                            </p>

                                            <p>We put consumers' health first, so we prioritize using raw materials from
                                                reputable suppliers such as: YKK, Kodura fabric, Polyester, EVA foam... </p>

                                            <p>In addition, KINGBAG backpacks and bags have a beautiful and modern design to
                                                catch up with the market trend thanks to a dynamic design team, constantly
                                                creating innovative and convenient products.</p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                3. "Customers" are big businesses and brands.
                                            </h6>

                                            <p>On the journey of more than 15 years of start-up and development, Kingbag is
                                                known as a professional bag sewing company . We have conquered many large
                                                enterprises and corporations such as: FPT Shop, Mobiphone, Vietcombank,
                                                Viettel, King Coffee, University of Science and Technology, Gia Dinh
                                                University, Sacombank, Agribank, MB, Vietin Bank, ACB, ... and always gain
                                                trust and confidence. </p>

                                            <p>Besides, it is highly trusted by distributors as well as convenient for
                                                agents to pick up goods with attractive discounts and dedicated support .
                                                The goal of the company is to bring customers the latest, most beautiful,
                                                most stylish and best fashion products. </p>

                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                4. Honored to be awarded “Top 10 - International Quality Gold Brand in 2022”
                                            </h6>

                                            <p>The award is a memorable milestone marking the brand's solid position, and also a lasting quality standard in the hearts of consumers.</p>

                                            <p>Very honored and proud when Kingbag is ranked in the ranks of enterprises worthy of the title "Top 10 international quality gold brands in 2022" . Strongly honoring “strong will” and “steadfast efforts” to protect, preserve and develop the brand until today.</p>

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
