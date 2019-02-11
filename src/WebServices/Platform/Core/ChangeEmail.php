<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ChangeEmail
 */
class ChangeEmail {

    /**
     * @access public
     * @var string
     */
    protected $currentPassword;

    /**
     * @access public
     * @var string
     */
    protected $newEmail;

    /**
     * @access public
     * @var string
     */
    protected $newEmail2;

    /**
     * @access public
     * @var boolean
     */
    protected $justThisAccount;

    static $paramtypesmap = array(
    	"currentPassword" => "string",
    	"newEmail" => "string",
    	"newEmail2" => "string",
    	"justThisAccount" => "boolean",
    );

    /**
     * Set currentPassword
     *
     * @param string $currentPassword
     * @return ChangeEmail
     */
    public function setCurrentPassword($currentPassword) {
        $this->currentPassword = $currentPassword;
        return $this;
    }

    /**
     * Get currentPassword
     *
     * @return string
     */
    public function getCurrentPassword() {
        return $this->currentPassword;
    }


    /**
     * Set newEmail
     *
     * @param string $newEmail
     * @return ChangeEmail
     */
    public function setNewEmail($newEmail) {
        $this->newEmail = $newEmail;
        return $this;
    }

    /**
     * Get newEmail
     *
     * @return string
     */
    public function getNewEmail() {
        return $this->newEmail;
    }


    /**
     * Set newEmail2
     *
     * @param string $newEmail2
     * @return ChangeEmail
     */
    public function setNewEmail2($newEmail2) {
        $this->newEmail2 = $newEmail2;
        return $this;
    }

    /**
     * Get newEmail2
     *
     * @return string
     */
    public function getNewEmail2() {
        return $this->newEmail2;
    }


    /**
     * Set justThisAccount
     *
     * @param boolean $justThisAccount
     * @return ChangeEmail
     */
    public function setJustThisAccount($justThisAccount) {
        $this->justThisAccount = $justThisAccount;
        return $this;
    }

    /**
     * Get justThisAccount
     *
     * @return boolean
     */
    public function getJustThisAccount() {
        return $this->justThisAccount;
    }

}