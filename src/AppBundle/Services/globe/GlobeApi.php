<?php

namespace AppBundle\Services;



class GlobeApi {
	
	//THE BASE URL OF THE API
	const API_ENDPOINT = 'devapi.globelabs.com.ph';
	const AUTH_POINT = 'developer.globelabs.com.ph';
	
	const GLOBE_ACCESS_TOKEN_URL = "http://developer.globelabs.com.ph/oauth/access_token";
	
	const APPID ='7d6AIkAXAzhMoi4pgecXMKhB5dKjIzja';
	const SECRET_KEY='35c747c1b756f938e0bd530a39ba56d260ef671585b93ca9887fb6cc0edd82eb';
	
	const VERIFIED_CODE='7jF48E7qsdby8gSXrBaqf7EKyxFg7qezhoGoy6hgoGxehM45zLujR4ynSpKyXaFgr4BeFMeEdAuzEReGuA7py7hGjeR7ULzaLjhM6z9eSj9oAks6KMBrfELa8RfA7izxbLgia6EfaEM6jfEoopBsLXz7pSX7aedhd9edqU7zpdyhkKR7KujxE6MuGd4jbFK6ypaFE84XdSKd56qu6xGqAhbRoa4h5XqaphnxKXxFgEByMfqjyqnSreEEBsMaMpXF';
	const SMS_URI='https://devapi.globelabs.com.ph/smsmessaging/v1/outbound/{senderAddress}/requests?access_token={access_token}';
	/**
	 * 
	 * @param unknown $apikey
	 * @param unknown $apisecret
	 * @return \AppBundle\DependencyInjection\Auth
	 */
	public function auth($apikey, $apisecret)
	{
		return "hello world";
	}
	
	public function getLoginUrl() {
		$url = "http://developer.globelabs.com.ph/oauth/access_token";
		$payload = array('app_id'=>GlobeApi::APPID, 'app_secret'=>GlobeApi::SECRET_KEY,'code'=>$code);
		return $url;
	}
	
	public function getGlobeRequest() {
// 		$payload = array('app_id'=>GlobeApi::APPID, 'app_secret'=>GlobeApi::SECRET_KEY,'code'=>$code);
		$globeRequest = new GlobeRequest();
		$globeRequest->setAppId(GlobeApi::APPID);
		$globeRequest->setSecretKey(GlobeApi::SECRET_KEY);
// 		$globeRequest->setco
		return $globeRequest;
	}
	
	public function getAccessToken() {
		
	}
	
}