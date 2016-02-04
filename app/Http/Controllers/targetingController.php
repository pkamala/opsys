<?php

namespace opsys\Http\Controllers;

use Illuminate\Http\Request;

use opsys\Http\Requests;
use opsys\Http\Controllers\Controller;

class targetingController extends Controller
{
    //
public function getIndex()
{
    return view('layout.Targeting.targeting');

}
    public function postStoreTargeting()
    {

        return view('layout.Targeting.targeting');
            }
}
