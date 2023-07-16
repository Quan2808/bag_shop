@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('header')
<div class="p-3">
    <h1 class="">Dashboard</h1>
    <nav class="d-flex">
        <h6 class="">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Home</li>
            </ol>
        </h6>
    </nav>
</div>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $customerCount }}</h3>
                    <p>Customer</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <a href="{{ route('admin.customer.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $orderCount }}</h3>
                    <p>Order</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-shopping-cart"></i>
                </div>
                <a href="{{ route('admin.order.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $contactCount }}</h3>
                    <p>Feedback</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <a href="{{ route('admin.feedback.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <td>Laptop Bag</td>
                    </h3>
                </div>

                <div class="card-body">
                    <div id="product_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="product" class="table table-bordered table-hover dataTable dtr-inline"
                                    aria-describedby="product_info">

                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($productsCount as $product)
                                            @if ($product->category->categories_name == 'Laptop Bag')
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $product->products_model }}</td>
                                                    <td>{{ number_format($product->products_price, 0, '.', ',') }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <td>Crossbody Bag</td>
                    </h3>
                </div>

                <div class="card-body">
                    <div id="product_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="product" class="table table-bordered table-hover dataTable dtr-inline"
                                    aria-describedby="product_info">

                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($productsCount as $product)
                                            @if ($product->category->categories_name == 'Crossbody Bag')
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $product->products_model }}</td>
                                                    <td>{{ number_format($product->products_price, 0, '.', ',') }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
