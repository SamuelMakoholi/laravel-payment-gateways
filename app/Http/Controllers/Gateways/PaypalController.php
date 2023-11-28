<?php

namespace App\Http\Controllers\Gateways;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaypalController extends Controller
{

    public function payment(Request $request)
    {
        return 123;
    }

    public function success()
    {
        return "success";
    }

    public function cancel()
    {
        return "cancel";
    }
}
