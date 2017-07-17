<?php

namespace App\Http\Controllers;

use App\User;
use App\Opportunity;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mail;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$this->get('/', function () {
  $name = Opportunity::get();
    return view('home')->with('opportunities', $name);
});

$this->get('/signup', function () {

  return view('auth/signup');
});

$this->auth();

$this->get('/addOpport', 'IndexController@getOpport');
$this->post('/addOpport', 'IndexController@addOpport');
$this->get('/getUser', 'IndexController@disuser');
