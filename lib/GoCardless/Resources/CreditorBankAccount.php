<?php

/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  *  Creditor Bank Accounts hold the bank details of a
  *  [creditor](https://developer.gocardless.com/pro/#api-endpoints-creditor).
  *  These are the bank accounts which your
  *  [payouts](https://developer.gocardless.com/pro/#api-endpoints-payouts) will
  *  be sent to.
  *  
  *  Note that creditor bank accounts must be unique, and
  *  so you will encounter a `bank_account_exists` error if you try to create a
  *  duplicate bank account. You may wish to handle this by updating the
  *  existing record instead, the ID of which will be provided as
  *  `links[creditor_bank_account]` in the error response.
  */
class CreditorBankAccount
{
  
    
    private $data;
    private $response;

    public function __construct($data, $response = null)
    {
      if ($data === null)
      {
        throw new \Exception('Data cannot be null');
      }
      $this->response = $response;
      $this->data = $data;
    }
  
    
    
    public function account_holder_name()
    {
      return $this->data->account_holder_name;
    }
  
    
    public function account_number_ending()
    {
      return $this->data->account_number_ending;
    }
  
    
    public function bank_name()
    {
      return $this->data->bank_name;
    }
  
    
    public function country_code()
    {
      return $this->data->country_code;
    }
  
    
    public function created_at()
    {
      return $this->data->created_at;
    }
  
    
    public function currency()
    {
      return $this->data->currency;
    }
  
    
    public function enabled()
    {
      return $this->data->enabled;
    }
  
    
    public function id()
    {
      return $this->data->id;
    }
  
    
    public function links()
    {
      return $this->data->links;
    }
  
    
    public function metadata()
    {
      return $this->data->metadata;
    }
  
    
    public function response() {
      return $this->response;
    }


}