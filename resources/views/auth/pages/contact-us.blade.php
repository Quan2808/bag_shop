@extends('auth.layouts.app')
@section('title', 'Contact us')

@section('content')
    <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('images/banners/Banner.png')}});
            }

            .stories {
                background-image: url({{asset('images/banners/About/backgroud.png')}});
            }
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Contact us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="content">
            <div class="container mt-5">
                <h1 class="title mb-5">
                    <b>Contact</b>
                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush list-group-no-border">
                            <li class="list-group-item"><strong>Our address:</strong><br> Tan Kien, Binh Chanh, City. HCM.
                            </li>
                            <li class="list-group-item"><strong>Email us:</strong> <br>info@kingbag.vn</li>
                            <li class="list-group-item">
                                <strong>Phone: <br></strong> (028) 6682 39 39
                                <br>B2B Partner: 0911 30 08 08
                                <br>Agent Partner: 0914 72 64 48
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert" data-mdb-color="success">
                                <i class="fas fa-check-circle me-3"></i>{{session('message')}}
                            </div>
                        @endif
                        <h3 class="fw-bold">Send us a question</h3>

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your name" required>
                                <label for="name">Your name</label>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="name@example.com" required>
                                        <label for="email">Your email </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Your phone number" maxlength="10" required>
                                        <label for="phone">Your phone number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Content" id="content" name="content" style="height: 100px" required></textarea>
                                <label for="content">Content</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Send us</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main> 
@endsection
