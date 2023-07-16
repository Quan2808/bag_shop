<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/924836a647.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <div class="bg-primary">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">

                        <form action="{{ route('admin.postlogin') }}" method="post"
                            class="bg-white rounded-5 shadow-5-strong p-5">

                            @csrf

                            <div class="brand-logo text-center">
                                <img src="{{ asset('images/logo/logo.png') }}" alt="logo" style="width: 40%"
                                    class="mb-4">
                            </div>
                            <h4 class="fw-bold" style="color: #92aad0;">Welcome back</h4>
                            <p class="mb-4" style="color: #45526e;">To log in, please fill in these text fiels with
                                your
                                e-mail address and password.</p>

                            @if (session('error') || $errors->has('email') || $errors->has('password'))
                                <div class="alert alert-danger text-center" role="alert">
                                    @if (session('error'))
                                        {{ session('error') }}<br>
                                    @else
                                        @if ($errors->has('email'))
                                            {{ $errors->first('email') }}<br>
                                        @endif

                                        @if ($errors->has('password'))
                                            {{ $errors->first('password') }}<br>
                                        @endif
                                    @endif
                                </div>
                            @endif

                            <div class="form-outline mb-4">

                                <input type="text" id="admin_email" name="admin_email" class="form-control">
                                <label class="form-label" for="admin_email" style="margin-left: 0px;">Email</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="admin_password" name="admin_password" class="form-control">
                                <label class="form-label" for="admin_password"
                                    style="margin-left: 0px;">Password</label>
                                <div class="form-notch">
                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                    <div class="form-notch-middle" style="width: 64.8px;"></div>
                                    <div class="form-notch-trailing"></div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Log in</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
