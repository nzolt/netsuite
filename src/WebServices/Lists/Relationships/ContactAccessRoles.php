<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * ContactAccessRoles
 */
class ContactAccessRoles {

    /**
     * @access public
     * @var boolean
     */
    protected $giveAccess;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    /**
     * @access public
     * @var string
     */
    protected $password;

    /**
     * @access public
     * @var string
     */
    protected $password2;

    /**
     * @access public
     * @var boolean
     */
    protected $sendEmail;

    static $paramtypesmap = array(
    	"giveAccess" => "boolean",
    	"contact" => "RecordRef",
    	"email" => "string",
    	"role" => "RecordRef",
    	"password" => "string",
    	"password2" => "string",
    	"sendEmail" => "boolean",
    );

    /**
     * Set giveAccess
     *
     * @param boolean $giveAccess
     * @return ContactAccessRoles
     */
    public function setGiveAccess($giveAccess) {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * Get giveAccess
     *
     * @return boolean
     */
    public function getGiveAccess() {
        return $this->giveAccess;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return ContactAccessRoles
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
     * @return ContactAccessRoles
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
     * Set password2
     *
     * @param string $password2
     * @return ContactAccessRoles
     */
    public function setPassword2($password2) {
        $this->password2 = $password2;
        return $this;
    }

    /**
     * Get password2
     *
     * @return string
     */
    public function getPassword2() {
        return $this->password2;
    }


    /**
     * Set sendEmail
     *
     * @param boolean $sendEmail
     * @return ContactAccessRoles
     */
    public function setSendEmail($sendEmail) {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * Get sendEmail
     *
     * @return boolean
     */
    public function getSendEmail() {
        return $this->sendEmail;
    }

}