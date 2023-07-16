@extends('auth.layouts.app')
@section('title', 'Manufacturing on demand - Premium bags nationwide')

@section('content')
   <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner_2.png);
            }

            
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Manufacturing on demand - Premium bags nationwide</h1>
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
                                        Manufacturing on demand - Premium bags nationwide
                                    </h1>
                                    <div class="body">
                                        <div class="mb-5">
                                            <p><small>Where should the required backpacks and bags be placed to meet the
                                                    quality requirements and be trustworthy and reputable when placing large
                                                    orders? Let's find out with KINGBAG through the article below!</small>
                                            </p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                1. KINGBAG - Specializes in manufacturing on demand leading prestigious
                                                backpacks and bags.
                                            </h6>

                                            <p>Established in 2004 with more than 15 years of experience in the field of
                                                manufacturing backpacks and bags. Viet Handbag Manufacturing Joint Stock
                                                Company was honored to receive the award "Top 10 - Gold Brand, International
                                                Quality 2022".</p>

                                            <p>Above all, we are trusted and become a reliable partner of many brands, big
                                                and small. With thousands of successful orders, order - Production on demand
                                                brand backpacks and bags. Bringing effective marketing solutions at low cost
                                                and helping partner businesses build more impressive, beautiful and
                                                professional brand images in the eyes of customers.</p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                2. Businesses should order branded backpacks and bags for the following
                                                reasons:
                                            </h6>

                                            <p>Branded backpacks and bags are much better than gratitude gifts such as pens,
                                                glasses, raincoats, etc. Users can use backpacks when going on a business
                                                trip, short trip or simply to store necessary items. every day when going
                                                out. </p>

                                            <p><strong>Cost savings: </strong> Instead of using traditional media such as
                                                leaflets, newspapers, radio, etc., now branded backpacks have become a
                                                marketing method used by many businesses at a much lower cost. much. </p>

                                            <p><strong>High aesthetics: </strong>The brand backpack has a large surface
                                                area, so it is easy to print names, textures, diverse designs, beautiful
                                                designs. As a result, the printing of brand images and logos on the
                                                backpacks will leave a special impression in the hearts of customers with
                                                professional images.</p>

                                            <p><strong>Outstanding applicability : </strong>Custom-made backpacks, branded
                                                bags are used in many different occasions from partner gifts, customer
                                                gratitude, employee gifts, anniversary gifts, Conferences, seminars,
                                                promotional gifts, advertising gifts...</p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                3. Why should we cooperate with KINGBAG to order branded backpacks and bags?
                                            </h6>

                                            <p>KINGBAG <strong>follows closely in every production process</strong>,
                                                meticulous in each stage to ensure the most complete product quality to
                                                customers. </p>

                                            <p><strong>Large-scale factory
                                                    system:</strong>
                                                Backpacks are made to order according to very high requirements for the
                                                synchronization of the
                                                design. We are equipped with a system of factories, machinery lines,
                                                equipment and modern technology to meet the maximum supply demand in terms
                                                of quantity and quality for all domestic and foreign partners.
                                            </p>

                                            <p><strong>Products that meet international standards (ISO) standards: </strong>
                                                All backpacks and bags made to order are always prioritized to use raw
                                                materials that are rigorously tested before being shipped.
                                            </p>

                                            <p><strong>Professional team: </strong>
                                                The design team, a team of workers as well as technicians with high
                                                qualifications, many years of experience have helped the workshop operate
                                                all kinds of machines easily, thereby producing products best quality.
                                            </p>

                                            <p>
                                                Especially with <strong>the most competitive cost</strong>, we are FREE to
                                                design and produce SAMPLE PRODUCTS with orders of 100 products or more. With
                                                orders from reputable suppliers such as: YKK, Kodura fabric, Polyester, EVA
                                                foam... and the larger the order, the more attractive the price is and in
                                                line with the production cost.
                                            </p>

                                            <p>
                                                Competitive price, Enthusiastic consultation, <strong>Quick sample sewing,
                                                    Commitment on schedule</strong>. Free delivery in the city area. Ho Chi
                                                Minh, support nationwide delivery. The process of ordering branded backpacks
                                                on request -&gt; <b>
                                                    <a href="{{ url('/order-process') }}">Here</a></b>
                                            </p>
                                        </div>

                                        <div>
                                            <h6 class="title fw-bold text-warning">
                                                4. Partners have cooperated
                                            </h6>

                                            <p>With a mind and a vision, KINGBAG is currently a reliable long-term strategic partner of many domestic and foreign brands and brands. Some of our typical partners are: FPT Shop, Mobiphone, Vietcombank, Viettel, King Coffee, University of Science and Technology, Gia Dinh University, Sacombank, Agribank, MB, Vietinbank, ACB, ...</p>

                                            <p>Quickly grasping the requirements of customers for brand backpack products, KINGBAG is upgrading day by day to be more complete and becoming one of the leading backpack manufacturing companies in Vietnam. Please cooperate with us, you will see your brand shine in the market, we are always committed to quality, professionalism and dedicated service.</p>

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
