<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * Passport
 */
class Passport {

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

    static $paramtypesmap = array(
    	"email" => "string",
    	"password" => "string",
    	"account" => "string",
    	"role" => "RecordRef",
    );

    /**
     * Set email
     *
     * @param string $email
     * @return Passport
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
     * @return Passport
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
     * @return Passport
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

}