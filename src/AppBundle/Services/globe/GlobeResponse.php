<?php
namespace AppBundle\Services;

class GlobeResponse {
	
	private $accessToken;
	
	private $subscriberNumber;
	
	private $smsMessage;
	
// 	private $recipient;
	
	
	public function getAccessToken() {
		return $this->accessToken;
	}
	
	public function getSubscriberNumber() {
		return $this->subscriberNumber;
	}
	
	public function getSmsMessage() {
		return $this->smsMessage;
	}
	
	
	public function setAccessToken($accessToken) {
		$this->accessToken = $accessToken;
	}
	
	
	public function setSubscriberNumber($subscriberNumber) {
		$this->subscriberNumber = $subscriberNumber;
	}
	
	public function setSmsMessage($smsMessage) {
		$this->smsMessage = $smsMessage;
	}
	
// 	public function set
}

