<?php

namespace App\Http\Controllers;

use App\User;
use App\Opportunity;
use App\Bid;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Mail;
use SMSProvider;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function getOpport()
     {

         return view('addOpportunity');
     }

  protected function addOpport(Request $request) {
   $rules = array(
           'title' => 'required|max:200',
           'company_name' => 'required|max:200',
           'description' => 'required|max:300',
           'location' => 'required|max:100',
           'kra_pin' => 'required|max:100',
       );

       $validator = Validator::make(Input::all(), $rules);

  // check if the validator failed -----------------------
  if ($validator->fails()) {

     // get the error messages from the validator
     $messages = $validator->messages();

     // redirect our user back to the form with the errors from the validator
     return Redirect::to('/addOpport')
         ->withErrors($validator);

  } else {
     // validation successful ---------------------------

     // report has passed all tests!
     // let him enter the database

     // create the data for report
     $opportunity= new Opportunity;
     $opportunity->title     = Input::get('title');
     $opportunity->location     = Input::get('location');
     $opportunity->kra_pin     = Input::get('kra_pin');
     $opportunity->phoneno     = Input::get('description');
     $opportunity->code     = Input::get('company_name');
     $opportunity->user_id     = Auth::user()->id;

      $opportunity->save();

     // save report


     // redirect ----------------------------------------
     // redirect our user back to the form so they can do it all over again
     return Redirect::to('/');
   }

  }

}
