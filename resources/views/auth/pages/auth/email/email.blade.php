<!DOCTYPE html>
<html>

<head>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Hello,</p>
                <p>We received a request to reset the password for your account. If you did not make this request, you
                    can ignore this email.</p>
                <p>To reset your password, please click on the following link:</p>
                <a href="{{ route('auth.password.reset', ['token' => $token]) }}">Reset Password</a>
                <p>If you have any questions or concerns, please contact us at quanntts2208035@fpt.edu.vn.</p>
                <p>Thank you!</p>
                <img src=" {{ asset('images/logo/logo.png') }}" alt="logo" style="width: 40%" class="mb-4">
            </div>
        </div>
    </div>
</body>

</html>