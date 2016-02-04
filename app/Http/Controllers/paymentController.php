<?php

namespace opsys\Http\Controllers;

use Illuminate\Http\Request;

use opsys\Http\Requests;
use opsys\Http\Controllers\Controller;

class paymentController extends Controller
{
    public function getIndex()
    {
        return view('layout.payment.payment');
    }
    //
}
