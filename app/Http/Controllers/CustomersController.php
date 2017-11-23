<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function showCustomers()
    {
        return response()->json(Customer::all());
    }

    public function showCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }
}
