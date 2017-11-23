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
        $customer = Customer::find($id);
        if($customer==null) {
            $code = 404;
            $response = ['message' => 'Customer not found'];
            header("content-type: application/json", true, $code);
            echo json_encode($response);
        }
        else {
            $result = response()->json($customer);
            return $result;
        }
    }
}
