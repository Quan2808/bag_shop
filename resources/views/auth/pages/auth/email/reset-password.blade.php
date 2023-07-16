@extends('auth.layouts.app')

@section('title', 'Reset Password')

@section('content')

    <main class="mt-5">
        <section class="w-100 p-4 d-flex justify-content-center pb-4">

            <div style="width: 26rem;" class="mt-5 mb-5">

                <form method="POST" action="{{ route('auth.password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group mb-3">
                        <label for="password">New password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Confirm new password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
                </div>
        </section>
    </main>
@endsection
