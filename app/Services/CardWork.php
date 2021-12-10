<?php

namespace App\Services;


class CardWork
{

    # Function to initial CURL
	protected static function curlInit()
	{

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt( $ch,  CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: ApiKey '. env('API_TOKEN'), 
        ]);
		return $ch;
	}


    # Function to process CURL POST
	protected static function curlPostRequest($action, $data)
	{
        dd($data);
        # Process CURL based on action 
		$ch = self::curlInit();
		curl_setopt($ch, CURLOPT_URL,  env('API_URL') . $action);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$result = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
		curl_close($ch);
		return $result;

	}

    
    # Function to process CURL GET
	protected static function curlGetRequest($action)
	{
        
        # Process CURL based on action 
		$ch = self::curlInit();
		curl_setopt($ch, CURLOPT_URL,  env('API_URL') . $action);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;

	}


    # signUpVerification API 
	public static function signUpVerification($data) 
	{	
		dd( self::curlPostRequest('/ws/signUpVerification.action', $data));
	}


}
