<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\GuzzleHttp;
use DB;
use DateTime;

class MyConectaController extends Controller
{
    public function index(){
        return view('myConecta');
    }

    public function myConectaActions(Request $request){
        $msisdn = $request->msisdn;
        $action = $request->action;

        if($action == 'surplus'){
            $data = MyConectaController::dataSurplus($msisdn);
            return $data;
        }else if($action == 'change'){
            $data = MyConectaController::dataChange($msisdn);
            return $data;
        }else if($action == 'monthly'){
            $exists = $request->exists;
            $data = MyConectaController::dataMonthly($msisdn,$exists);
            return $data;
        }

        // return $response;
    }

    public function dataSurplus($msisdn){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://187.217.216.244/get-offers-rates-surplus-public',[
            'msisdn' => $msisdn
        ]);
        return $response;
    }

    public function dataChange($msisdn){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('http://187.217.216.244/get-offers-rates-diff-public',[
            'msisdn' => $msisdn
        ]);
        return $response;
    }

    public function dataMonthly($msisdn,$exists){
        if($exists != 5){
            $now = date('Y-m-d');
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('http://187.217.216.244/get-data-monthly-public',[
                'msisdn' => $msisdn
            ]);
            $response = $response->json();
            // return $response;
            // $response = json_encode($response);
            $information = $response['information'];
            $expire_date = $information['expire_date'];
            $payment = $information['payment'];

            $activation_id = $information['activation_id'];

            $number_id = $information['number_id'];
            $client_id = $information['client_id'];
            $name_user = $information['name_user'];
            $lastname_user = $information['lastname_user'];
            $email_user = $information['email_user'];
            $cellphone_user = $information['cellphone_user'];

            $date_limit = strtotime('+2 days', strtotime($expire_date));
            $date_limit = date('Y-m-d', $date_limit);

            $date_beforeFiveDays = strtotime('-2 days', strtotime($date_limit));
            $date_beforeFiveDays = date('Y-m-d', $date_beforeFiveDays);

            $now = new DateTime($now);
            $date_beforeFiveDays = new DateTime($date_beforeFiveDays);
            
            $timeDiff = $now->diff($date_beforeFiveDays);

            $data['information'] = array(
                'days' => $timeDiff->days,
                'datePayment' => $date_beforeFiveDays->format('Y-m-d'),
                'dateLimit' => $date_limit,
                'renovationDate' => $expire_date
            );

            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->get('http://187.217.216.244/consultUF-public/'.$msisdn);

            $data['APIData'] = json_decode($response);

            $status = $response['status'];
            $FreeUnits = $response['FreeUnits'];
            $totalAmt = $FreeUnits['unusedAmt'];
            // return $status;

            if($now >= $date_beforeFiveDays || $status == 'Suspend (B2W)' || ($now >= $date_beforeFiveDays && $status == 'Active') || $payment != false){
                $data['information']['http_code'] = 1;
                $data['information']['number_id'] = $number_id;
                $data['information']['client_id'] = $client_id;
                $data['information']['name_user'] = $name_user;
                $data['information']['lastname_user'] = $lastname_user;
                $data['information']['email_user'] = $email_user;
                $data['information']['cellphone_user'] = $cellphone_user;

                $getMonthlyPayment = Http::withHeaders([
                    'Content-Type' => 'application/json'
                ])->get('http://187.217.216.244/get-monthly-payment-public',[
                    'activation_id' => $activation_id
                ]);

                // return $getMonthlyPayment;

                $data['information']['amount'] = $getMonthlyPayment['payment'][0]['amount'];
                $data['information']['offer_id'] = $getMonthlyPayment['payment'][0]['offer_id'];
                $data['information']['offerID'] = $getMonthlyPayment['payment'][0]['offerID'];
                $data['information']['rate_id'] = $getMonthlyPayment['payment'][0]['rate_id'];
                $data['information']['status_payment'] = $getMonthlyPayment['payment'][0]['status_payment'];
                $data['information']['activation_id'] = $activation_id;
                $data['information']['pay_id'] = $getMonthlyPayment['payment'][0]['pay_id'];
                $data['information']['rate_name'] = $getMonthlyPayment['payment'][0]['rate_name'];
                $data['information']['product'] = $getMonthlyPayment['payment'][0]['product'];
                $data['information']['flag'] = $getMonthlyPayment['payment'][0]['flag_rate'];
                $data['originalData'] = $getMonthlyPayment['originalData'];
            }else if($totalAmt <= 1){

                $data['information']['http_code'] = 2;
                $data['information']['number_id'] = $number_id;
                $data['information']['client_id'] = $client_id;
                $data['information']['name_user'] = $name_user;
                $data['information']['lastname_user'] = $lastname_user;
                $data['information']['email_user'] = $email_user;
                $data['information']['cellphone_user'] = $cellphone_user;

                $dataRateSubsequent = Http::withHeaders([
                    'Content-Type' => 'application/json'
                ])->get('http://187.217.216.244/get-rate-subsequent-payment',[
                    'activation_id' => $activation_id
                ]);
                // return $dataRateSubsequent;

                if($dataRateSubsequent[0]['flag'] == 0){
                    $data['information']['amount'] = $dataRateSubsequent[0]['amount'];
                    $data['information']['offer_id'] = $dataRateSubsequent[0]['offer_id'];
                    $data['information']['rate_id'] = $dataRateSubsequent[0]['rate_id'];
                    $data['information']['rate_name'] = $dataRateSubsequent[0]['rate_name'];
                    $data['information']['status_payment'] = 'WPG';
                    $data['information']['activation_id'] = $activation_id;
                    $data['information']['pay_id'] = 0;
                    $data['information']['flag'] = 0;
                    $data['originalData'] = $dataRateSubsequent['originalData'];
                }else if($dataRateSubsequent[0]['flag'] == 1){
                    $data['information']['flag'] = 1;
                    $data['information']['http_code'] = 3;
                }
            }else{
                $data['information']['http_code'] = 0;
            }

            return $data;
        }else if($exists == 5){
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('http://187.217.216.244/get-data-monthly-oreda-public',[
                'msisdn' => $msisdn
            ]);
            $response = $response->json();
            return $response;
        }
    }

    public function myConectaReference(Request $request){
        //return $request;
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://187.217.216.244/generateReferenceAPIPublic',[
            'number_id'=>$request->get('number_id'),
            'name'=>$request->get('name'),
            'lastname'=>$request->get('lastname'),
            'email'=>$request->get('email'),
            'cel_destiny_reference'=>$request->get('cel_destiny_reference'),
            'amount'=>$request->get('amount'),
            'offer_id'=>$request->get('offer_id'),
            'concepto'=>$request->get('concepto'),
            'type'=>$request->get('type'),
            'channel'=>$request->get('channel'),
            'rate_id'=>$request->get('rate_id'),
            'user_id'=>$request->get('user_id'),
            'client_id'=>$request->get('client_id'),
            'pay_id'=>$request->get('pay_id'),
            'quantity'=>$request->get('quantity'),
            'from' => $request->get('from')
        ]);
        return $response;
    }

    public function myConectaCard(Request $request){
        // return $request;
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://187.217.216.244/send-card-payment-public',[
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'cel_destiny_reference' => $request->get('cellphone'),
            'amount' => $request->get('amount'),
            'concepto' => $request->get('concepto'),
            'channel' => $request->get('channel_id'),
            'type' => $request->get('referencestype'),
            'client_id' => $request->get('client_id'),
            'user_id' => $request->get('client_id'),
            'pay_id' => $request->get('pay_id'),
            'offer_id' => $request->get('offer_id'),
            'rate_id' => $request->get('rate_id'),
            'pack_id' => $request->get('pack_id'),
            'number_id' => $request->get('number_id')
        ]);
        return $response;
    }

    public function verifyExistsMSISDN(Request $request){
        $msisdn = $request->get('msisdn');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('http://187.217.216.244/verify-exists-msisdn/'.$msisdn);
        
        return $response->json();
    }

    public function myConectaOredaPayment(Request $request){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://187.217.216.244/multipayment-oreda',[
            'amount' => $request->post('amount'),
            'type' => $request->post('type'),
            'client_id' => $request->post('client_id'),
            'user_id' => $request->post('user_id'),
            'pay_id' => $request->post('pay_id'),
            'offer_id' => $request->post('offer_id'),
            'rate_id' => $request->post('rate_id'),
            'pack_id' => $request->post('pack_id'),
            'number_id' => $request->post('number_id'),
            'monthly_items' => $request->post('monthly_items'),
            'name' => $request->post('name'),
            'lastname' => $request->post('lastname'),
            'email' => $request->post('email'),
            'phone' => $request->post('phone'),
            'concepto' => $request->post('concepto')
        ]);
        return $response;
    }

    public function myConectaPurchaseByClient(Request $request){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post('http://187.217.216.244/purchase-by-client',[
            'amount' => $request->post('amount'),
            'who_did_id' => $request->post('who_did_id'),
            'offer_id' => $request->post('offer_id'),
            'rate_id' => $request->post('rate_id'),
            'offerID' => $request->post('offerID'),
            'number_id' => $request->post('number_id'),
            'msisdn' => $request->post('msisdn'),
            'order_id_conekta' => $request->post('order_id_conekta'),
            'from' => $request->post('from')
        ]);
        return $response;
    }

    public function successfullyOperation(){
        return view('successfullyPayment');
    }

    public function consultIMEI(Request $request){
        $imei = $request->get('imei');
        
        
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('http://187.217.216.244/consult-imei',[
            'imei' => $imei
        ]);
        return $response;
    }

    public function maps(){
        return view('maps');
    }
}
