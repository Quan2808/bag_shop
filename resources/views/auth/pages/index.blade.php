@extends('auth.layouts.app')
@section('title', 'Home')

@section('content')
    <main class="mt-5">
        <section>
            <div id="carousel-1" class="carousel slide carousel-fade mb-5" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banners/index/carousel/Carousel-1.png" class="d-block w-100" alt="Wild Landscape" />
                    </div>
                    <div class="carousel-item">
                        <img src="images/banners/index/carousel/Carousel-2.png" class="d-block w-100" alt="Camera" />
                    </div>
                    <div class="carousel-item">
                        <img src="images/banners/index/carousel/Carousel-3.png" class="d-block w-100" alt="Exotic Fruits" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carousel-1" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carousel-1" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section>
            <div class="container">
                <section class="mb-7 text-center">

                    <div class="row gx-lg-5">

                        <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">

                            <div class="card rounded-6 h-100">
                                <div class="bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6 mt-n3"
                                    data-mdb-ripple-color="light">
                                    <img src="images/banners/index/service/Service-1.png" class="img-fluid" />
                                    <a href="{{ url('/leading-quality-and-prestige-garment-company') }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">

                                    <p class="card-text">
                                        The company that sews high-end fashion bags and bags with top
                                        quality
                                        reputation
                                    </p>
                                    <a href="{{ url('/leading-quality-and-prestige-garment-company') }}"
                                        class="btn btn-warning btn-rounded">Read more</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 mb-6 mb-lg-0">

                            <div class="card rounded-6 h-100">
                                <div class="bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6 mt-n3"
                                    data-mdb-ripple-color="light">
                                    <img src="images/banners/index/service/Service-2.png" class="img-fluid" />
                                    <a href="{{ url('/manufacturing-on-demand-premium-bags-nationwide') }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">Design and manufacture backpacks and bags according to bulk
                                        requirements for businesses</p>
                                    <a href="{{ url('/manufacturing-on-demand-premium-bags-nationwide') }}"
                                        class="btn btn-warning btn-rounded">Read more</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 mb-6 mb-lg-0">

                            <div class="card rounded-6 h-100">
                                <div class="bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6 mt-n3"
                                    data-mdb-ripple-color="light">
                                    <img src="images/banners/index/service/Service-3.png" class="img-fluid" />
                                    <a href="{{ url('/agent-system') }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">Kingbag Brand Distribution Agent System</p>
                                    <a href="{{ url('/agent-system') }}" class="btn btn-warning btn-rounded">Read more</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </section>

            </div>
        </section>

        <section>
            <div id="carousel-2" class="carousel slide carousel-fade mb-3" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banners/index/carousel/Carousel-4.png" class="d-block w-100"
                            alt="Wild Landscape" />
                    </div>
                    <div class="carousel-item">
                        <img src="images/banners/index/carousel/Carousel-5.png" class="d-block w-100" alt="Camera" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-mdb-target="#carousel-2" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carousel-2" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section>
            <div class="card-group no-shadow mb-5">
                <div class="card">
                    <img src="images\banners\index\service/Banner-1.png" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Why chose us?</h5>
                        <a href="{{ url('/why-choose-us') }}" class="btn btn-warning btn-rounded">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <img src="images\banners\index\service/Banner-2.png" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Odering process</h5>
                        <a href="{{ url('/order-process') }}" class="btn btn-warning btn-rounded">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <img src="images\banners\index\service/Banner-3.png" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Frequently asked questions</h5>
                        <a href="{{ url('/faq') }}" class="btn btn-warning btn-rounded">Read more</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mb-5">
                <div class="text-center mt-1 mb-5">
                    <h2><b>Implemented Project</b></h2>
                </div>
                <div class="container">
                    <div class="row gx-1 ">
                        <div class="col-lg-4 col-md-12">
                            <img src="{{asset('images\banners\index\service/Banner-6.png')}}" class="card-img-top">
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <img src="{{asset('images\banners\index\service/Banner-4.png')}}" class="card-img-top">
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <img src="{{asset('images\banners\index\service/Banner-5.png')}}" class="card-img-top">
                        </div>

                    </div>
                    <div class="row gx-1 mt-1">

                        <div class="col-md-6">
                            <img src="images\banners\index\service/Banner-7.png" class="card-img-top">
                        </div>

                        <div class="col-md-6">
                            <img src="images\banners\index\service/Banner-9.png" class="card-img-top">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5">
                <div class="text-center mt-1 mb-5">
                    <h2><b>Project Product</b></h2>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">

                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="{{ $product->products_thumbnails }}" class="card-img-top"
                                        alt="{{ $product->products_model }}">
                                    <a href="{{ route('product.show', ['id' => $product->products_model]) }}">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>

                                <hr>
                                <div class="card-body pb">
                                    <div class="d-flex justify-content-between">
                                        <p><a class="text-danger fw-bold">Model</a></p>
                                        <p class="text-dark">{{ $product->products_model }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p><a class="text-danger fw-bold">Price</a></p>
                                        <p class="text-dark">{{ number_format($product->products_price, 0, '.', ',') }} VND
                                        </p>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                    <div class="d-flex justify-content-evenly align-items-center pb-2 mb-1">
                                        <a href="{{ route('product.show', ['id' => $product->products_model]) }}"
                                            type="button" class="btn btn-primary btn-rounded">Details</a>

                                        <form action="{{ route('cart.add', $product->products_id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-rounded">
                                                Add to cart
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
