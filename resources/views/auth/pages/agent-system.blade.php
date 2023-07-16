@extends('auth.layouts.app')
@section('title', 'Agent system')

@section('content')
   <main>
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner.png);
            }

            .stories {
                background-image: url(images/banners/About/backgroud.png);
            }
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Agent system</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Agent system
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
                                    <section class="content">
                                        <div class="container">
                                            <div class="mb-5">
                                                <h1 class="fw-bold">KINGBAG. Brand Distribution System</h1>
                                            </div>
                                            <div class="mb-5">
                                                <small>Starting a business is never easy without finding a reputable
                                                    supplier and full support. KINGBAG
                                                    Backpacks recruits distributors of backpacks and bags nationwide to
                                                    accompany us on the way to get
                                                    rich.
                                                    How is business? What's the advantage? Let's find out together!</small>
                                            </div>
                                            <div class="title">
                                                <h6 class="fw-bold text-warning">
                                                    1. The company specializes in manufacturing high-class backpacks and
                                                    bags.
                                                </h6>
                                            </div>
                                            <p>KINGBAG is a brand of high-class fashion backpacks and bags for the office in
                                                Vietnam, with products
                                                such
                                                as laptop backpacks, travel bags, suitcases - briefcases, crossbody bags...
                                                KINGBAG focuses on youthful
                                                designs, elegantly suitable for office, outing, traveling, ...</p>
                                            <p>With the desire to bring to all young office fashionistas in Vietnam
                                                high-class fashion backpacks and
                                                bags, trendy designs, reasonable prices. Therefore, KINGBAG needs to recruit
                                                partners to be DISTRIBUTORS
                                                in provinces and cities nationwide.</p>
                                            <h6 class="fw-bold text-warning">2. Advantages of KINGBAG backpacks and bags
                                            </h6>
                                            <p>Backpacks, bags are essential items for anyone from schoolchildren, students,
                                                commuters or office
                                                workers, who like to travel backpacks. The reason they are popular is
                                                because they can hold many items
                                                at the same time such as books, pens, laptops, clothes ... but look very
                                                fashionable.</p>
                                            <p>In addition, this business model also has the advantage of a large number of
                                                customers, high demand for
                                                use, diverse products but not too strict requirements for services.</p>
                                            <h6 class="fw-bold text-warning">3. What will you get when you become a
                                                distributor of Kingbag
                                                backpacks?</h6>
                                            <p>Kingbag has its own design team and factory, so it produces diverse and
                                                regular designs, keeping up with
                                                the trends of the times. Good quality products, reasonable prices, high
                                                quality, delicate, easy to
                                                combine with many different fashion styles: Going to work, traveling,
                                                picnic, going to events...</p>
                                            <p>Having a strong MKT team, many years of experience and good brand development
                                                in the booming online sales
                                                trend. Support MKT, communication in the process of being a distributor.
                                                Enjoy an EXTREMELY attractive
                                                agency DISCOUNT, large revenue, high profit. Flexible product exchange
                                                policy.</p>
                                            <p>Finding a good supplier determines 70% of the initial business, With 15 years
                                                of experience in the field
                                                of backpack manufacturing, KINGBAG bags confidently accompanies you in every
                                                journey.</p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
