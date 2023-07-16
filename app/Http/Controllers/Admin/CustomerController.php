<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function list()
    {
        $list = Customer::all();

        return view('admin.pages.customer.list', ['list' => $list]);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('admin.customer.list');
    }
}
