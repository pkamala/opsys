<?php namespace opsys\Http\Controllers;

class WelcomeController extends Controller {

public function index()
{
$items = array(
'items' => [
'Pack luggage',
 'Go to airport',
 'Arrive in San Juan'
 ]
);
dd($items);
 return view('welcome');
 }
}