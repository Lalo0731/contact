<?php 
    $type = $_POST['type'];
    if ($type == 'access') {
        $header = array(
            'Content-Type: application/json'
        );
    
        $url = 'http://200.106.172.56/createJWT';
        $datos = 'email=carlos.ruiz@altcel2.com&password=roots28';
        // $url = 'https://altanredes-prod.apigee.net/cm/v1/subscribers/7295213967/profile';
        $cliente = curl_init();
        curl_setopt($cliente, CURLOPT_URL, $url);
        curl_setopt($cliente, CURLINFO_HEADER_OUT, true);
        curl_setopt($cliente, CURLOPT_POST, true);
        curl_setopt($cliente, CURLOPT_POSTFIELDS, $datos);
        // curl_setopt($cliente, CURLOPT_HTTPHEADER, $datos);
        // curl_setopt($cliente, CURLOPT_HEADER, true);
        curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
    
        $tmp = curl_exec($cliente);
        $tmp = explode("\n\r\n", $tmp);
        curl_close($cliente);
        echo $tmp[0]; //trae todos los datos
        
    }else if($type == 'getData'){

        $header = array(
            'Content-Type: application/json'
        );
        $msisdn = $_POST['msisdn'];
        $token = $_POST['token'];
    
        $url = 'http://200.106.172.56/get-offers-rates-surplus';
        $datos = 'token='.$token.'&msisdn='.$msisdn;

        $cliente = curl_init();
        curl_setopt($cliente, CURLOPT_URL, $url);
        curl_setopT($cliente, CURLINFO_HEADER_OUT, true);
        curl_setopt($cliente, CURLOPT_POST, true);
        curl_setopt($cliente, CURLOPT_POSTFIELDS, $datos);
        // curl_setopt($cliente, CURLOPT_HTTPHEADER, $header);
        // curl_setopt($cliente, CURLOPT_HEADER, true);
        curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
    
        $tmp = curl_exec($cliente);
        $tmp = explode("\n\r\n", $tmp);
        curl_close($cliente);
        echo $tmp[0]; //trae todos los datos
    }else if($type == 5){
        $number = $_POST['number_id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $cel = $_POST['cel_destiny_reference'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $offer_id = $_POST['offer_id'];
        $concepto = $_POST['concepto'];
        $rate_id = $_POST['rate_id'];
        $user_id = $_POST['user_id'];
        $client_id = $_POST['client_id'];
        $channel = $_POST['channel'];
        $pay_id = $_POST['pay_id'];
        $quantity = $_POST['quantity'];
        $token = $_POST['token'];

        $datos =
            'number_id='.$number.'&'.
            'name='.$name.'&'.
            'lastname='.$lastname.'&'.
            'cel_destiny_reference='.$cel.'&'.
            'email='.$email.'&'.
            'amount='.$amount.'&'.
            'offer_id='.$offer_id.'&'.
            'concepto='.$concepto.'&'.
            'rate_id='.$rate_id.'&'.
            'user_id='.$user_id.'&'.
            'client_id='.$client_id.'&'.
            'channel='.$channel.'&'.
            'pay_id='.$pay_id.'&'.
            'quantity='.$quantity.'&'.
            'token='.$token.'&'.
            'type='.$type.'&from=portal_cautivo';
        // echo $datos;
        $url = 'http://200.106.172.56/generateReferenceAPI';

        $data = curl_init();
        curl_setopt($data, CURLOPT_URL, $url);
        curl_setopT($data, CURLINFO_HEADER_OUT, true);
        curl_setopt($data, CURLOPT_POST, true);
        curl_setopt($data, CURLOPT_POSTFIELDS, $datos);

        curl_setopt($data, CURLOPT_RETURNTRANSFER, true);

        $tmp = curl_Exec($data);
        $tmp = explode("\n\r\n", $tmp);
        curl_close($data);
        echo $tmp[0];
    }

?>

