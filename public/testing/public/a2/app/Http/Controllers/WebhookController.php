<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
    	$respuesta = $request;
		if(isset($respuesta['payload'])){
			$eventType = $respuesta['payload']['content']['eventType'];

			switch ($eventType) {
				case 'SUSPEND_MOVILITY':
					$return = 'Suspensión de Movilidad';
				break;
				case 'RESUME_MOVILITY':
					$return = 'Reactivación de Movilidad';
				break;
				case 'Band28':
					$barringBool = $respuesta['payload']['content']['event']['detail']['tagname'];
					if($barringBool == 'Barring_B28'){
						$return = 'Ha habido Barring_28';
					}else if($barringBool == 'Unbarring_B28'){
						$return = 'Ha habido Unbarring_B28';
					}
				break;
				case 'EVENT_UNITS':
					$return = 'Ha habido Consumo';
				break;
				case 'NETWORK_FAILURES':
					$return = 'Han habido fallas en la red';
				break;
				case 'SUSPEND_IMEI':
					$return = $respuesta['payload']['content']['event']['detail']['TagName'];
				break;
				case 'RESUME_IMEI':
					$return = $respuesta['payload']['content']['event']['detail']['TagName'];
				break;
				case 'ACTIVATION':
					$return = 'Ha habido activación';
				break;
			}
		}else{
			$return = "Se requiere una activación...";
		}
    	
	
    	return response()->json($return);
    }
}
