<?php

namespace App\Http\Controllers;

use Http;
use App\User;
use App\Notification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\GuzzleHttp;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMessagesContact;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendMessagesContact(Request $request){
        $name = $request->input('name');
        $telefono = $request->input('telefono');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $bodyMessage = $request->input('message');
        
        $data = [
            'subject' => $subject,
            'bodyMessage' => $bodyMessage,
            'mailFrom' => $email,
            'nameFrom' => $name,
            'phoneFrom' => $telefono
        ];
        Mail::to('contacto@altcel2.com')->cc($email)->send(new SendMessagesContact($data));
        // return $bodyMessage;
    }
    
    public function notificationWH(Request $request){
        Notification::insert(['petition'=>$request]);
	// return "Hecho";
        $type = $request->type;
        $event_date = $request->event_date;
        $event_date = substr($event_date,0,19);
        $event_date = str_replace("T", "", $event_date);
        $event_date = str_replace("-", "", $event_date);
        $event_date = str_replace(":", "", $event_date);
        $transaction = $request->transaction;
        $reference_id = $transaction['id'];
        $status = $transaction['status'];
        $authorization = $transaction['authorization'];

        if($type == 'charge.succeeded'){
            $fee = $transaction['fee'];
            $fee_amount = $fee['amount'];
            $fee_tax = $fee['tax'];
            $fee_currency = $fee['currency'];
            $response = Http::post('187.217.216.244/notifications-webhook',
            [
                'fee_amount'=>$fee_amount,
                'fee_currency'=>$fee_currency,
                'fee_tax' => $fee_tax,
                'event_date_complete' => $event_date,
                'reference_id' => $reference_id,
                'status' => $status,
                'authorization' => $authorization
            ]);
            
            return response()->json(['status' => 200]);
        }
        
    }
    
    public function notificationWH2(Request $request){
        Notification::insert(['petition'=>$request]);
        // Obtener datos e ingresarlos en la DB, esto debe ir en el servidor
        $type = $request->type;
        $event_date = $request->event_date;
        $transaction = $request->transaction;
        if(isset($transaction['method'])){
            $message = 'Existe';
        }else{
            $message = 'No existe';
        }
        
        return response()->json(["message"=>$message]);
        
    }
    
    public function conektaWH(Request $request){
        
        Notification::insert(['petition'=>$request]);
        $dataFirst = $request->data;
        $object = $dataFirst['object'];
        if(!isset($object['payment_status'])){
            $type = $request->type;
            if($type == "order.created"){
                if(isset($object['channel'])){
                    if($object['channel']['checkout_request_type'] == 'PaymentLink'){
                        $reference_id = $object['id'];
                        $reference = $object['id'];
                        $description = $object['line_items']['data'][0]['name'];
                        $amount = $object['amount'];
                        $currency = $object['currency'];
                        $metadata = $object['metadata'];
                        $pay_id = $metadata['pay_id'];
                        $client_id = $metadata['client_id'];
                        $referencestype_id = $metadata['referencestype_id'];
                        $offer_id = $metadata['offer_id'];
                        $number_id = $metadata['number_id'];
                        $rate_id = $metadata['rate_id'];
                        $pack_id = $metadata['pack_id'];
                        $user_id = $metadata['user_id'];
                        $email = $object['customer_info']['email'];
                        $paymentLink = 'https://pay.conekta.com/link/'.$object['channel']['checkout_request_id'];
                        Notification::insert(['petition'=>'ORDER CREATED: '.$reference_id.' - '.$reference.' - '.$description.' - '.$amount.' - '.$currency.' - '.$pay_id.' - '.$client_id.' - '.$referencestype_id.' - '.$offer_id.' - '.$number_id.' - '.$rate_id.' - '.$user_id.' - '.$paymentLink.' - hour: '.date('Y-m-d H:i:s')]);
                        $responseOC = Http::post('187.217.216.244/order-create',
                                                [
                                                    'reference_id' => $reference_id,
                                                    'reference' => $reference,
                                                    'description' => $description,
                                                    'amount' => $amount,
                                                    'currency' => $currency,
                                                    'pay_id' => $pay_id,
                                                    'client_id' => $client_id,
                                                    'offer_id' => $offer_id,
                                                    'number_id' => $number_id,
                                                    'rate_id' => $rate_id,
                                                    'user_id' => $user_id,
                                                    'paymentLink' => $paymentLink,
                                                    'email' => $email,
                                                    'referencestype_id' => $referencestype_id,
                                                    'pack_id' => $pack_id
                                                ]);
                        return $responseOC;
                    }
                }
            }
        }else{
            sleep(10);
            $payment_status = $object['payment_status'];
            if($payment_status == 'paid'){
                $metadata = $object['metadata'];
                $referencestype_id = $metadata['referencestype_id'];
                $pay_id = null;
                $amounts = '';

                if($referencestype_id == 6){
                    $line_items = $object['line_items']['data'];
                    
                    for($i=0; $i < sizeof($line_items); $i++) { 
                        if($i == 0){
                            $amounts .= ''.$line_items[$i]['unit_price'];
                        }else if($i > 0){
                            $amounts .= ','.$line_items[$i]['unit_price'];
                        }
                    }
                    $pay_id = $metadata['pay_id'];
                }
                
                $id = $object['id'];
                $updated_at = $object['updated_at'];
                $updated_at = date('Y-m-d H:i:s', $updated_at);
                $charges = $object['charges'];
                $data = $charges['data'];
                $data = $data[0];
                $fee_amount = $data['fee'];
                $fee_amount = $fee_amount/100;
                // Notification::insert(['petition'=>'SÍ SE PUDO PAGO CARD: '.$fee_amount.' - '.$updated_at.' - '.$id.' - '.$payment_status]);
                
                $response = Http::post('187.217.216.244/notifications-webhook',
                [
                    'fee_amount'=>$fee_amount,
                    'fee_currency'=>'MXN',
                    'fee_tax' => 0.00,
                    'event_date_complete' => $updated_at,
                    'reference_id' => $id,
                    'status' => $payment_status,
                    'pay_id' => $pay_id,
                    'amounts' => $amounts
                ]);
                Notification::insert(['petition'=>'SÍ SE PUDO PAGO: '.$fee_amount.' - '.$updated_at.' - '.$id.' - '.$payment_status.' - hour: '.date('Y-m-d H:i:s')]);
                return $response;
                // return response()->json(["status" => 200]);
            }
        }
        
    }
    
    public function conektaWHProduction(Request $request){
        Notification::insert(['petition'=>$request]);
        $dataFirst = $request->data;
        $object = $dataFirst['object'];
        if(!isset($object['payment_status'])){
            $type = $request->type;
            if($type == "order.created"){
                if(isset($object['channel'])){
                    if($object['channel']['checkout_request_type'] == 'PaymentLink'){
                        $reference_id = $object['id'];
                        $reference = $object['id'];
                        $description = $object['line_items']['data'][0]['name'];
                        $amount = $object['amount'];
                        $currency = $object['currency'];
                        $metadata = $object['metadata'];
                        $pay_id = $metadata['pay_id'];
                        $client_id = $metadata['client_id'];
                        $referencestype_id = $metadata['referencestype_id'];
                        $offer_id = $metadata['offer_id'];
                        $number_id = $metadata['number_id'];
                        $rate_id = $metadata['rate_id'];
                        $pack_id = $metadata['pack_id'];
                        $user_id = $metadata['user_id'];
                        $email = $object['customer_info']['email'];
                        $paymentLink = 'https://pay.conekta.com/link/'.$object['channel']['checkout_request_id'];
                        Notification::insert(['petition'=>'ORDER CREATED PRODUCTION: '.$reference_id.' - '.$reference.' - '.$description.' - '.$amount.' - '.$currency.' - '.$pay_id.' - '.$client_id.' - '.$referencestype_id.' - '.$offer_id.' - '.$number_id.' - '.$rate_id.' - '.$user_id.' - '.$paymentLink.' - hour: '.date('Y-m-d H:i:s')]);
                        $responseOC = Http::post('187.217.216.244/order-create',
                                                [
                                                    'reference_id' => $reference_id,
                                                    'reference' => $reference,
                                                    'description' => $description,
                                                    'amount' => $amount,
                                                    'currency' => $currency,
                                                    'pay_id' => $pay_id,
                                                    'client_id' => $client_id,
                                                    'offer_id' => $offer_id,
                                                    'number_id' => $number_id,
                                                    'rate_id' => $rate_id,
                                                    'user_id' => $user_id,
                                                    'paymentLink' => $paymentLink,
                                                    'email' => $email,
                                                    'referencestype_id' => $referencestype_id,
                                                    'pack_id' => $pack_id
                                                ]);
                        return $responseOC;
                    }
                }
            }
        }else{
            sleep(10);
            $payment_status = $object['payment_status'];
            if($payment_status == 'paid'){
                $metadata = $object['metadata'];
                $referencestype_id = null;
                $pay_id = null;
                $amounts = '';

                if(isset($metadata['referencestype_id'])){
                    $referencestype_id = $metadata['referencestype_id'];
                    

                    if($referencestype_id == 6){
                        $line_items = $object['line_items']['data'];
                        
                        for($i=0; $i < sizeof($line_items); $i++) { 
                            if($i == 0){
                                $amounts .= ''.$line_items[$i]['unit_price'];
                            }else if($i > 0){
                                $amounts .= ','.$line_items[$i]['unit_price'];
                            }
                        }
                        $pay_id = $metadata['pay_id'];
                    }
                }
                
                $id = $object['id'];
                $updated_at = $object['updated_at'];
                $updated_at = date('Y-m-d H:i:s', $updated_at);
                $charges = $object['charges'];
                $data = $charges['data'];
                $data = $data[0];
                $fee_amount = $data['fee'];
                $fee_amount = $fee_amount/100;
                
                $response = Http::post('187.217.216.244/notifications-webhook',
                [
                    'fee_amount'=>$fee_amount,
                    'fee_currency'=>'MXN',
                    'fee_tax' => 0.00,
                    'event_date_complete' => $updated_at,
                    'reference_id' => $id,
                    'status' => $payment_status,
                    'pay_id' => $pay_id,
                    'amounts' => $amounts
                ]);
                Notification::insert(['petition'=>'SÍ SE PUDO PRODUCTION: '.$fee_amount.' - '.$updated_at.' - '.$id.' - '.$payment_status]);
                return $response;
                // return response()->json(["status" => 200]);
            }
        }
    }
}
