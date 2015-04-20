<?php

namespace AppBundle\Services\globe;


class OutboundSMSMessageRequest {
	
	/**
	 * 
	 * @var unknown
	 */
	private $address;
	
	/**
	 * message
	 * @var unknown
	 */
	private $outboundSMSTextMessage ;
	
	/**
	 * 
	 * @var unknown
	 */
	private $clientCorrelator;
	
	/**
	 * 
	 * @var unknown
	 */
	private $senderAddress;
	
	
	public function getAddress() {
		return  $this->address;
	}
	
	public function getOutboundSMSTextMessage() {
		return  $this->outboundSMSTextMessage;
	}
	
	public function getClientCorrelator() {
		return  $this->clientCorrelator;
	}
	
	public function getSenderAddress() {
		return $$this->senderAddress;	
	}
	
	public function setAddress($address) {
		
		$this->address = $address;
	}
	
	public function setOutboundSMSTextMessage($outboundSMSTextMessage) {
	
		$this->outboundSMSTextMessage = $outboundSMSTextMessage;
	}
	
	public function setClientCorrelator($cliennCorrelator) {
	
		$this->clientCorrelator = $cliennCorrelator;
	}
	
	public function setSenderAddress($senderAddress) {
	
		$this->senderAddress = $senderAddress;
	}

	
}