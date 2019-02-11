<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ChangePassword
 */
class ChangePassword {

    /**
     * @access public
     * @var string
     */
    protected $currentPassword;

    /**
     * @access public
     * @var string
     */
    protected $newPassword;

    /**
     * @access public
     * @var string
     */
    protected $newPassword2;

    /**
     * @access public
     * @var boolean
     */
    protected $justThisAccount;

    static $paramtypesmap = array(
    	"currentPassword" => "string",
    	"newPassword" => "string",
    	"newPassword2" => "string",
    	"justThisAccount" => "boolean",
    );

    /**
     * Set currentPassword
     *
     * @param string $currentPassword
     * @return ChangePassword
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
     * Set newPassword
     *
     * @param string $newPassword
     * @return ChangePassword
     */
    public function setNewPassword($newPassword) {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * Get newPassword
     *
     * @return string
     */
    public function getNewPassword() {
        return $this->newPassword;
    }


    /**
     * Set newPassword2
     *
     * @param string $newPassword2
     * @return ChangePassword
     */
    public function setNewPassword2($newPassword2) {
        $this->newPassword2 = $newPassword2;
        return $this;
    }

    /**
     * Get newPassword2
     *
     * @return string
     */
    public function getNewPassword2() {
        return $this->newPassword2;
    }


    /**
     * Set justThisAccount
     *
     * @param boolean $justThisAccount
     * @return ChangePassword
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