@extends('auth.layouts.app')
@section('title', 'Introduce')

@section('content')
   <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner.png);
            }

            .stories {
                background-image: url(images/banners/About/backgroud.png);
            }

            
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top mb-5">
            <div class="container">
                <h1 class="text-white">Introduce</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Introduce
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="about-us">

            <div class="mb-10">

                <div class="container">

                    <div class="row g-0 align-items-center">

                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div class="card rounded-7 me-lg-n5">
                                <div class="card-body p-lg-5 shadow-5">
                                    <h2 class="fw-bold">
                                        <span class="text-warning">Introduce</span>
                                    </h2>

                                    <p class="text-muted justify-content-center">
                                        Viet Handbags Production Joint Stock Company was born in 2017 with the
                                        predecessor of the establishment of sewing backpacks and bags Viet Handbags was
                                        established in 2004. Over 15 years of experience in the field of manufacturing
                                        backpacks
                                        and bags, we have trained design team who always have new creative and unique ideas
                                        with
                                        a team of highly skilled tailors, modern machinery to best meet the requirements of
                                        customers. With constant learning, cautious but drastic, we chose the high-end
                                        segment
                                        as the target market and launched the backpack brand "KingBag".
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <img src="images/banners/About/item-1.png" class="w-100 rounded-7 shadow-4 rotate-lg-6"
                                alt="" />
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section class="stories">
            <div class="container">
                <h1 class="p-5 text-body-emphasis fw-bold">CORE VALUES</h1>

                <div class="p-5 text-center">
                    <h4 class="text-body-emphasis text-warning fw-bold">OPERATION MOTTO</h4>
                    <p class="col-lg-8 mx-auto fs-5 text-muted">
                        “KingBag - Affirming value”, we with a team of young modern and
                        enthusiastic staff, always bring to customers quality products, professionalism and
                        satisfaction.
                    </p>
                </div>

                <section>

                    <div class="row gx-lg-5 mb-5 flex-lg-row-reverse align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="images/banners/About/item-3.png" class="w-100 shadow-4-strong rounded-4 mb-4"
                                alt="" data-builder-edit="image" data-builder-name="image1"
                                aria-controls="#picker-editor" draggable="false">
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="fw-bold" data>
                                Levels</h3>
                            <p class="text-muted" data>
                                Confirm your class when using the KingBag backpack.</p>
                        </div>
                    </div>

                    <div class="row gx-lg-5 mb-5 align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="images/banners/About/item-5.png" class="w-100 shadow-4-strong rounded-4 mb-4"
                                alt="" data-builder-edit="image" data-builder-name="image2"
                                aria-controls="#picker-editor" draggable="false">
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="fw-bold" data>
                                Commitment</h3>
                            <p class="text-muted" data>
                                Quality products, reasonable prices, professional service.</p>
                        </div>
                    </div>

                    <div class="row gx-lg-5 flex-lg-row-reverse align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="images/banners/About/item-4.png" class="w-100 shadow-4-strong rounded-4 mb-4"
                                alt="" data-builder-edit="image" data-builder-name="image3"
                                aria-controls="#picker-editor" draggable="false">
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="fw-bold" data>
                                Conscientious</h3>
                            <p class="text-muted" data>
                                Dedicated service, meeting all customer requirements.</p>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
