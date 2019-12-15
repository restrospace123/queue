<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customers;
use App\Jobs\SendEmailJob;
use App\Jobs\UploadImageSingle;

class Customer extends Controller
{
    public function index(){
    	$data = array();
    	return view('Customer/create')->with($data);
    }

    public function store(Request $request){

        // File Upload
        $request->file('photo')->store('images','public');

        // Insert Customer Details Eloquent
        $customers               = new Customers;
        $customers->name         = $request->input('name');
        $customers->email        = $request->input('email');
        $customers->mobile       = $request->input('mobile');
        $customers->email        = $request->input('email');
        $customers->photo        = $_FILES['photo']['name'];
        $customers->description  = $request->input('address');
        $customers->status       = '1';
        $customers->save();
        $customer_id             = $customers->id;
        // Send Email Welcome Customer QUEUE 1
        $podcast['email']        = $customers->email;
        SendEmailJob::dispatch($podcast)->delay(now()->addSeconds(5));
        /*$podcast['customer_id']  = $customer_id;
        UploadImageSingle::dispatch($podcast)->delay(now()->addSeconds(10));*/

        // Response
        echo "Success!! Activation Email Sent!!";
    }
}
