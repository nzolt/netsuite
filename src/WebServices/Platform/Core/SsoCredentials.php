<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SsoCredentials
 */
class SsoCredentials {

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var string
     */
    protected $password;

    /**
     * @access public
     * @var string
     */
    protected $account;

    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    /**
     * @access public
     * @var string
     */
    protected $authenticationToken;

    /**
     * @access public
     * @var string
     */
    protected $partnerId;

    static $paramtypesmap = array(
    	"email" => "string",
    	"password" => "string",
    	"account" => "string",
    	"role" => "RecordRef",
    	"authenticationToken" => "string",
    	"partnerId" => "string",
    );

    /**
     * Set email
     *
     * @param string $email
     * @return SsoCredentials
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return SsoCredentials
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }


    /**
     * Set account
     *
     * @param string $account
     * @return SsoCredentials
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set authenticationToken
     *
     * @param string $authenticationToken
     * @return SsoCredentials
     */
    public function setAuthenticationToken($authenticationToken) {
        $this->authenticationToken = $authenticationToken;
        return $this;
    }

    /**
     * Get authenticationToken
     *
     * @return string
     */
    public function getAuthenticationToken() {
        return $this->authenticationToken;
    }


    /**
     * Set partnerId
     *
     * @param string $partnerId
     * @return SsoCredentials
     */
    public function setPartnerId($partnerId) {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * Get partnerId
     *
     * @return string
     */
    public function getPartnerId() {
        return $this->partnerId;
    }

}