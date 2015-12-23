<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Services;

use \GoCardlessPro\Core\Paginator;
use \GoCardlessPro\Core\Util;
use \GoCardlessPro\Core\ListResponse;
use \GoCardlessPro\Resources\CreditorBankAccount;


/**
 * Service that provides access to the CreditorBankAccount
 * endpoints of the API
 */
class CreditorBankAccountsService extends BaseService
{

    protected $envelope_key   = 'creditor_bank_accounts';
    protected $resource_class = '\GoCardlessPro\Resources\CreditorBankAccount';


    /**
    * Create a creditor bank account
    *
    * Example URL: /creditor_bank_accounts
    *
    * @param  string[mixed] $params An associative array for any params
    * @return CreditorBankAccount
    **/
    public function create($params = array())
    {
        $path = "/creditor_bank_accounts";
        if(isset($params['params'])) { 
            $params['body'] = json_encode(array($this->envelope_key => (object)$params['params']));
        
            unset($params['params']);
        }

        $response = $this->api_client->post($path, $params);

        return $this->getResourceForResponse($response);
    }

    /**
    * List creditor bank accounts
    *
    * Example URL: /creditor_bank_accounts
    *
    * @param  string[mixed] $params An associative array for any params
    * @return ListResponse
    **/
    protected function _doList($params = array())
    {
        $path = "/creditor_bank_accounts";
        if(isset($params['params'])) { $params['query'] = $params['params'];
            unset($params['params']);
        }

        $response = $this->api_client->get($path, $params);

        return $this->getResourceForResponse($response);
    }

    /**
    * Get a single creditor bank account
    *
    * Example URL: /creditor_bank_accounts/:identity
    *
    * @param  string        $identity Unique identifier, beginning with "BA".
    * @param  string[mixed] $params   An associative array for any params
    * @return CreditorBankAccount
    **/
    public function get($identity, $params = array())
    {
        $path = Util::subUrl(
            '/creditor_bank_accounts/:identity',
            array(
                
                'identity' => $identity
            )
        );
        if(isset($params['params'])) { $params['query'] = $params['params'];
            unset($params['params']);
        }

        $response = $this->api_client->get($path, $params);

        return $this->getResourceForResponse($response);
    }

    /**
    * Disable a creditor bank account
    *
    * Example URL: /creditor_bank_accounts/:identity/actions/disable
    *
    * @param  string        $identity Unique identifier, beginning with "BA".
    * @param  string[mixed] $params   An associative array for any params
    * @return CreditorBankAccount
    **/
    public function disable($identity, $params = array())
    {
        $path = Util::subUrl(
            '/creditor_bank_accounts/:identity/actions/disable',
            array(
                
                'identity' => $identity
            )
        );
        if(isset($params['params'])) { 
            $params['body'] = json_encode(array("data" => (object)$params['params']));
        
            unset($params['params']);
        }

        $response = $this->api_client->post($path, $params);

        return $this->getResourceForResponse($response);
    }

    /**
    * List creditor bank accounts
    *
    * Example URL: /creditor_bank_accounts
    *
    * @param  string[mixed] $params
    * @return Paginator
    **/
    public function all($params = array())
    {
        return new Paginator($this, $params);
    }

}