<?php



namespace App\Http\Controllers;

use App\Recharge;

use App\Pagaphonerecharge;

use App\Compartcargarecharge;

use App\Gestopagorecharge;

use App\Recargamaxrecharge;

use App\Axiosrecharge;

use Illuminate\Http\Request;



class RechargeController extends Controller

{

    public function pagaphoneWebhookProduction(Request $request){

        $x = Pagaphonerecharge::insert(['body'=>$request]);

        if($x){

            return response()->json(['message'=>'success','error'=>false],200);

        }else{

            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);

        }

        

    }



    public function gestopagoWebhookProduction(Request $request){

        $x = Gestopagorecharge::insert(['body'=>$request]);

        if($x){

            return response()->json(['message'=>'success','error'=>false],200);

        }else{

            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);

        }

    }



    public function compartecargaWebhookProduction(Request $request){

        $x = Compartcargarecharge::insert(['body'=>$request]);

        if($x){

            return response()->json(['message'=>'success','error'=>false],200);

        }else{

            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);

        }

    }



    public function diatelWebhook(Request $request){

        

        $x = Recharge::insert(['body'=>$request]);

        if($x){

            return response()->json(['message'=>'success','error'=>false],200);

        }else{

            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);

        }

    }



    public function recargamaxWebhookProduction(Request $request){

        

        $x = Recargamaxrecharge::insert(['body'=>$request]);

        if($x){

            return response()->json(['message'=>'success','error'=>false],200);

        }else{

            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);

        }

    }



    public function axiosWebhookProduction(Request $request){

        

        $x = Axiosrecharge::insert(['body'=>$request]);

        if($x){

            return response()->json(['message'=>'success','error'=>false],200);

        }else{

            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);

        }

    }

    public function rechargeProduction(Request $request){
        
        $x = Recharge::insert(['body'=>$request]);
        if($x){
            return response()->json(['message'=>'success','error'=>false],200);
        }else{
            return response()->json(['message'=>"The request wasn't inserted in database",'error'=>true],500);
        }
    }

}

