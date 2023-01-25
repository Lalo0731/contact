<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Conekta\Conekta as Conekta;
use Mail;

class ConektaController extends Controller
{
    public function recurrente(Request $request)
    {
    	Conekta::setApiKey(env('CONEKTA_API_SECRET'));
    	Conekta::setApiVersion(env('CONEKTA_API_VERSION'));

    	$expires_at = (new \DateTime())->add(new \DateInterval('P5D'))->getTimeStamp();

    	//dd($expires_at);

    	try{
		    $customer = \Conekta\Customer::create(
		      array(
		          'name'  => $request->name,
		          'email' => $request->email,
		          'phone' => "+521".$request->phone,
		          'payment_sources' => array(
		                array(
		                'type' => "oxxo_recurrent",
		                )
		            )
		      )
		    );
		    /*$oxxo_payment_source = [
		    	'type' => 'oxxo_recurrent'
		      ]
		    );

		    $customer->createOfflineRecurrentReference($oxxo_payment_source);*/

		    //dd($customer->payment_sources[0]->reference);
		    /*
		    $order = \Conekta\Order::create([
			  'currency' => 'MXN',
			  'customer_info' => [
			    'customer_id'  => $customer->id,
			    'antifraud_info' => [
			      'paid_transactions' => 4
			    ]
			  ],
			  'line_items' => [
			    [
			      'name' => 'Box of Cohiba S1s',
			      'unit_price' => 1500,
			      'quantity' => 1,
			      'antifraud_info' => [
			          'trip_id'        => '12345',
			          'driver_id'      => 'driv_1231',
			          'ticket_class'   => 'economic',
			          'pickup_latlon'  => '23.4323456,-123.1234567',
			          'dropoff_latlon' => '23.4323456,-123.1234567'
			      ]
			    ]
			  ],
			  'charges' => [
			    [
			      'payment_method' => [
			        'type' => 'oxxo_cash',
			        'reference' => $customer->payment_sources[0]->reference
			      ]
			    ]
			  ]
			]);*/

			/*$validOrderWithCheckout =
			array(
			  'line_items'=> array(
			    array(
			      'name'=> 'Box of Cohiba S1s',
			      //'description'=> 'Imported From Mex.',
			      'unit_price'=> 1000,
			      'quantity'=> 1,
			      'sku'=> 'cohbs1',
			      'category'=> 'food',
			      'tags' => array('food', 'mexican food')
			    )
			  ),
			  'checkout'    => array(
			    'type' => 'Integration',
			    'allowed_payment_methods' => array("cash", "card", "bank_transfer"),
			    'monthly_installments_enabled' => false
			    //'monthly_installments_options' => array(3, 6, 9, 12)
			  ),
			  'customer_info' => array(
			    'customer_id' =>  $customer->id
			  ),
			  'currency'    => 'MXN'
			  //'metadata'    => array('test' => 'extra info')
			);
			$order = \Conekta\Order::create($validOrderWithCheckout);
			print_r($order);*/

		    //dd(json_encode($customer));
		  } catch (\Conekta\ProcessingError $error){
		    echo $error->getMessage();
		  } catch (\Conekta\ParameterValidationError $error){
		    echo $error->getMessage();
		  } catch (\Conekta\Handler $error){
		    echo $error->getMessage();
		  }

		  $data = [
		  	$customer
		  ];

		  dd($data);

		  return view('comprobante')->with('data',$data);
    }

    public function webhook()
    {


    	$order = @file_get_contents('php://input');
    	$order = json_decode($order, true);
    	//return dd($order);

        if ($order == null) {
            return response()->json("orden recibida", 200);
        }
    	$order_id = isset($order["id"]) ? $order["id"] : null;
    	$order_status = isset($order["payment_status"]) ? $order["payment_status"] : null;

        $order_type = isset($order["object"]) ? $order["object"] : null;

        if ($order_type == 'inbound_payment') {
            $response = [
                "payable"=>true,
                "min_amount"=>5000,
                "max_amount"=>1000000,
            ];

            return response()->json($response, 200);

        }

    	$data = [
    		'object' => $order
    	];

        //dd($data);
        /* Envio de Mail */
        Mail::send('emails.notificaciones', $order, function($message)
        {
        $message->to('alejandro.rueda@altcel2.com', 'Alejandro Rueda')->subject('Operación Conekta');
        });


    	return response()->json("orden recibida", 200);


    	if (!$order_id || !$order_status) {
    		return false;
    	}

    	//dd($order['id']);

    	return response()->json("orden recibida", 200);

    }

    public function cowebhook()
    {
        $order = @file_get_contents('php://input');
    	$order = json_decode($order, true);

        if ($order == null) {
            return response()->json("orden recibida", 200);
        }
    	$order_id = isset($order["id"]) ? $order["id"] : null;
    	$order_status = isset($order["payment_status"]) ? $order["payment_status"] : null;

        $order_type = isset($order["type"]) ? $order["type"] : null;

        if ($order_type == 'inbound_payment.payment_attempt') {
            $response = [
                "payable"=>true,
            ];
        }
        else {
            $response = [
                "payable"=>true,
                "min_amount"=>2000,
                "max_amount"=>1000000,
            ];
        }


        return response()->json($response, 200);
    }
}
