<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Password;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.pages.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $customer = Customer::where('customer_email', $credentials['email'])->first();

        if ($customer && Hash::check($credentials['password'], $customer->customer_password)) {

            $request->session()->put('customer_id', $customer->customer_id);

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.pages.auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email|unique:customers',
            'customer_phone' => 'required|unique:customers|digits:10',
            'customer_password' => 'required|min:6|confirmed',
        ]);

        $customer = Customer::create([
            'customer_name' => $validatedData['customer_name'],
            'customer_email' => $validatedData['customer_email'],
            'customer_phone' => $validatedData['customer_phone'],
            'customer_password' => Hash::make($validatedData['customer_password']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $request->session()->put('customer_id', $customer->customer_id);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('customer_id');

        return redirect('/');
    }

    public function profile(Request $request)
    {
        $customerId = session('customer_id');
        $customer = Customer::find($customerId);

        return view('auth.pages.auth.profile', compact('customer'));
    }

    public function storeProfile(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email|unique:customers,customer_email,' . session('customer_id'),
            'customer_phone' => 'required|digits:10|unique:customers,customer_phone,' . session('customer_id'),
            'current_password' => 'required',
            'new_password' => 'nullable|min:6|confirmed'
        ]);

        $customer = Customer::find(session('customer_id'));

        // Check if current password matches
        if (!Hash::check($validatedData['current_password'], $customer->customer_password)) {
            return back()->withErrors([
                'current_password' => 'The current password does not match our records.'
            ])->with('error', 'The current password does not match our records.');
        }

        // Update customer information
        $customer->customer_name = $validatedData['customer_name'];
        $customer->customer_email = $validatedData['customer_email'];
        $customer->customer_phone = $validatedData['customer_phone'];

        // Update password if a new one is provided
        if (!empty($validatedData['new_password'])) {
            $customer->customer_password = Hash::make($validatedData['new_password']);
        }

        $customer->updated_at = now();
        $customer->save();
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $customerId = session('customer_id');
        $customer = Customer::find($customerId);

        if (!Hash::check($validatedData['current_password'], $customer->customer_password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
        }

        $customer->customer_password = Hash::make($validatedData['new_password']);
        $customer->save();

        return redirect()->route('auth.profile')->with('successPassword', 'Password changed successfully!');
    }

    public function changeName(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
        ]);

        $customerId = session('customer_id');
        $customer = Customer::find($customerId);

        $customer->customer_name = $request['name'];

        $customer->save();

        return redirect()->route('auth.profile')->with('successName', 'Name changed successfully!');
    }

    public function changePhone(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'max:255', 'regex:/^[0-9\s]+$/'],
        ]);

        $customerId = session('customer_id');
        $customer = Customer::find($customerId);

        // Check if the phone number is already associated with another customer
        $existingCustomer = Customer::where('customer_phone', $request->input('phone'))
            ->where($customer->getKeyName(), '<>', $customer->getKey())
            ->first();

        if ($existingCustomer) {
            return redirect()->back()->withErrors(['phone' => 'This phone number is already associated with another customer.']);
        }

        $customer->customer_phone = $request->input('phone');
        $customer->save();

        return redirect()->back()->with('successPhone', 'Phone number has been updated successfully.');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.pages.auth.options.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $customer = Customer::where('customer_email', $request->email)->first();

        if (!$customer) {
            return back()->withErrors(['email' => 'The email does not exist.']);
        }

        // Generate reset password token
        $token = Str::random();

        $customer->remember_token = $token;
        $customer->save();

        // Send email with reset link
        Mail::send('auth.pages.auth.email.email', ['token' => $token], function ($message) use ($customer) {
            $message->to($customer->customer_email);
            $message->subject('Reset Your Password');
        });

        $request->session()->put('reset-user-id', $customer->customer_id);

        return back()->with('successSendEmail', 'We have emailed a reset link to you.');
    }

    public function showResetPasswordForm($token, Request $request)
    {
        $customer = Customer::where('remember_token', $request->token)->first();

        if (!$customer) {
            return redirect('/')->withErrors(['token' => 'The reset token is invalid.']);
        }

        return view('auth.pages.auth.email.reset-password', compact('token'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $customer = Customer::where('remember_token', $request->token)->first();

        if (!$customer) {
            return redirect()->route('home')->withErrors(['token' => 'The reset token is invalid.']);
        }

        $newPassword = $request->password;

        $customer->customer_password = Hash::make($request->password);
        $customer->remember_token = null;
        $customer->save();

        if (Hash::check($newPassword, $customer->customer_password)) {
            $request->session()->forget('reset-user-id');
            return redirect()->route('auth.login')->with('successResetPass', 'Your password has been reset successfully.');
        } else {
            return response()->json(['error' => 'Error updating password'], 422);
        }
    }
}
