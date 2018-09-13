<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use DB;

class PaymentsController extends Controller
{
	public function suscribirse(Request $request){

		//dd($request->all());

		$user_id = \Auth::user()->id;
		$name = \Auth::user()->name;
		$email = \Auth::user()->email;

		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		\Stripe\Stripe::setApiKey("sk_test_yyNZBwajqhtMzzkQJ3cmix3F");

		// Token is created using Checkout or Elements!
		// Get the payment token ID submitted by the form:
		$token = $_POST['stripeToken'];

		//Busco si tiene un customer_id en mi base de datos:
		$customer = DB::table('users')->where('email', $email)->first();
		$customer_id = $customer->customer_id;

		if(empty($customer_id)){

			// Creo un Customer en mi cuenta de Stripe:
			$customer = \Stripe\Customer::create([
			    'source' => $token,
			    'email' => $email,
			    "description" => $name,
			]);

		 	//Guardo el $custromer->id en mi base de datos:
			DB::update('update users set customer_id = "'.$customer->id.'" where id = '.$user_id.' ');
			$customer_id = $customer->id;
		}

		//Proceso el pago en mi cuenta de Stripe:
		$charge = \Stripe\Charge::create([
		    'amount' => 999,
		    'currency' => 'usd',
		    'description' => 'Example charge',
		    'customer' => $customer_id,
		]);

		//dd($charge);

		DB::update('update users set card_brand = "'.$charge->source->brand.'", card_last_four = "'.$charge->source->last4.'" where id = '.$user_id.' ');
				
		echo $charge->id;//id del pago
		echo "<br>";
		echo $charge->status;//estatus de la operación

		dd($charge);				

	}

}
