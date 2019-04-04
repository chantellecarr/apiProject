<?php

class currency{

  /* API Access Key */
  protected $accessKey;

  /* Request type */
  protected $apiRequestType;

  /* currency to convert from */
  protected $sourceCurrency;

  /* currency to convert to */
  protected $destinationCurrency;

  /* amount to convert */
  protected $sourceAmount;

 /* date [optional] Specify a date to use historical rates for this conversion. (Format: YYYY-MM-DD) */

  public function __construct($request) 
  {
	$this->setApiRequestType($request["apiAction"]);
	$this->setSourceCurrency($request["initCurrType"]);
	$this->setDestinationCurrency($request["finalCurrType"]);
	$this->setSourceAmount($request["initCurrValue"]);
	$this->setAccessKey();
  }

  /* set the request type sent to the api*/
  protected function setApiRequestType($requestType) {
	$this->apiRequestType = $requestType;
  }

  /* set the source currency */
  protected function setSourceCurrency($sourceCurrency) {
	$this->sourceCurrency = $sourceCurrency;
  }

  /* set the destination currency */
  protected function setDestinationCurrency(array $destinationCurrency) {
	$this->destinationCurrency = implode(",", $destinationCurrency);
  }

  /* set source amount */
  protected function setSourceAmount($sourceAmount) {
	$this->sourceAmount = $sourceAmount;
  }

  /* set the access key for the currency */
  protected function setAccessKey() {
    $configs = include(dirname(__FILE__).'/../resources/config.php');
    $this->accessKey = $configs->currencyApiKey;
  }

  /* get the request type sent to the api*/
  public function getApiRequestType() {
     return $this->apiRequestType;
  }

  /* get the source currency */
  public function getSourceCurrency() {
	return $this->sourceCurrency;
  }

  /* get the destination currency */
  public function getDestinationCurrency() {
	return $this->destinationCurrency;
  }

  /* set source amount */
  public function getSourceAmount($sourceAmount) {
	return $this->sourceAmount;
  }

  /* get the access key for the currency */
  public function getAccessKey() {
    return $this->accessKey;
  }

}

?>
