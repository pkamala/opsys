<?php

namespace opsys\Http\Controllers;

use Illuminate\Http\Request;

use opsys\Http\Requests;
use opsys\Http\Controllers\Controller;

class enrolmentController extends Controller
{
    public function getIndex()
    {
        return view('layout.enrolment.enrolment');
    }
    //
}
