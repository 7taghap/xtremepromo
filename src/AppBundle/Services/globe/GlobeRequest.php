<?php

namespace AppBundle\Services;

/** 
 * model for globe
 * @author rc185213
 *
 */
class GlobeRequest {
	
	private $appId;
	
	private $secretKey;
	
	private $code;
	
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function getSecretKey() {
		return $this->secretKey;
	}
	
	public function getCode() {
		return $this->code;
	}
	
	
	public function setAppId($appId) {
		$this->appId = $appId;
	}
	
	public function setSecretKey($secretKey) {
		$this->secretKey = $secretKey;
	}
	
	public function setCode($code){
		$this->code = $code;
	}
	
}