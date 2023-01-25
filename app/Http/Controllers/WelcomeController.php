<?php

namespace App\Http\Controllers;

use DB;
use Http;
use Illuminate\Http\Request;
use App\Files;
use App\Beneficios;
use App\Imagenes;
use Stripe\Stripe;
use Stripe\Charge;
use App\GuzzleHttp;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $data['principals'] = Files::all();
        // $data['principals'] = DB::table('files')->orderBy('sort','asc')->select('files.*')->get();
        $data['beneficios'] = beneficios::all();
        $data['contacts'] = Imagenes::where('Tipo', '=', 'Banner Email')->first();
        return view('welcome', $data);

        // $contac['contacts']= Imagenes::all();
        // return view('/contact', $contac);
    }

    public function contact(){
        $contac['contacts']= Imagenes::where('Tipo', '=', 'Banner Contact')->first();
        return view('contact', $contac);
    }
    public function imeis(){
        return view('imeis');
    }

    public function portalCautivo(){
        return view('portalCautivo');
    }

    public function paymentStripe(Request $request){        
         Stripe::setApiKey('sk_test_51LSOeLHo1IBUssic5KrB04Ctcopm1hMonpXVSSpA1nsra065fH7ESFzQIAyxGd15xUWmQQGo85RK9I8b2qCJhEdS00Yw3KRA31');
       // Stripe::setApiKey('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');

        $amount = $request->amount;
        $offer_id = $request->offer_id;
        $offerAltan = $request->offerAltan;
        $rate_id = $request->rate_id;
        $referencestype = $request->referencestype;
        $number_id = $request->number_id;
        $client_id = $request->client_id;
        $pay_id = $request->pay_id;
        $exists = $request->exists;
        $pack_id = $request->pack_id;
        $rate_name = $request->rate_name;
        $number = $request->number;

        return $offerAltan;
        try {
            $charge = \Stripe\Charge::create([
                'amount' => $amount*100,
                'currency' => 'mxn',
                'description' => '$'.number_format($amount,2).' - '.$rate_name.' - '.$number,
                'source' => $request->stripeToken,
            ]);

            
            if($charge->status && $charge->paid == true){
                $receipt_url = $charge->receipt_url;
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json'
                ])->post('http://187.217.216.244/purchase-by-client',[
                    'amount' => $amount,
                    'who_did_id' => $client_id,
                    'offer_id' => $offer_id,
                    'rate_id' => $rate_id,
                    'offerID' => $offerAltan,
                    'number_id' => $number_id,
                    'msisdn' => $number,
                    'order_id_gestor' => $charge->id,
                    'gestor' => 'stripe',
                    'from' => 'altcel2.com/my-conecta'
                ]);

                if(isset($response['http_code'])){
                    if($response['http_code'] == 1){
                        return redirect($receipt_url);
                    }else{
                        return back()->with('error','El pago fue capturado, pero hubo un error con la realización de la recarga, comunícate al 8002258235, 9613602339, 9616177800 para reclamar tu recarga de $'.number_format($amount,2).' proporcionando tu número <strong>'.$number.'</strong>');
                    }
                }else{
                    return back()->with('error','El pago fue capturado, pero hubo un error con la realización de la recarga, comunícate al 8002258235, 9613602339, 9616177800 para reclamar tu recarga de $'.number_format($amount,2).' proporcionando tu número <strong>'.$number.'</strong>. Puedes mandar comprobante de la transacción tomando captura en el siguiente enlace: <a href="'.$receipt_url.'" target="_blank">Comprobante aquí.</a>');
                }
                // return $response['http_code'];
                // if($response->http_code )
            }
            else{
                return back()->with('error','El pago <strong>NO</strong> fue capturado, hubo un error durante la debitación del saldo en tu tarjeta, comunícate al 8002258235, 9613602339 o 9616177800 para darte solución, proporcionando tu número <strong>'.$number.'</strong>');
            }
        } catch (\Stripe\Error\CardException $e) {
            return "Hola";
            return $e->getMessage();
        } catch(Exception $e){
            return "Hola 2";
            return $e->getMessage();
        }
        
    }

    public function paymentStripeServer(Request $request){        
        Stripe::setApiKey('sk_test_51LSOeLHo1IBUssic5KrB04Ctcopm1hMonpXVSSpA1nsra065fH7ESFzQIAyxGd15xUWmQQGo85RK9I8b2qCJhEdS00Yw3KRA31');
        // Stripe::setApiKey('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');

        $amount = $request->amount;
        $description = $request->description;
        $paymentMethod = $request->paymentMethod;
        $currency = $request->currency;


        // try {
            $intent = \Stripe\PaymentIntent::create([
                'amount' => $amount,
                'currency' => $currency,
                'payment_method_types' => [$paymentMethod],
                'description' => $description
              ]);

            return response()->json(['client_secret'=>$intent->client_secret,'id_payment'=>$intent->id]);

        // } catch (\Stripe\Error\CardException $e) {
        //     return $e->getMessage();
        // } catch(Exception $e){
        //     return $e->getMessage();
        // }
        
    }
}
