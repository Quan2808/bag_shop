<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.png') }}">

    @include('admin.layouts.styles')

    @include('admin.layouts.scripts')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <header class=" mb-5">
            @include('admin.layouts.header')

            @include('admin.layouts.left-sidebar')
        </header>

        <main>
            <div class="content-wrapper">

                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            @yield('header')
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container">
                        <div class="row">
                            <div class="container">
                                @yield('main')
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

    </div>

</body>

</html>
