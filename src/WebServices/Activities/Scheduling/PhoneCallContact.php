<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

/**
 * PhoneCallContact
 */
class PhoneCallContact {

    /**
     * @access public
     * @var RecordRef
     */
    public $company;

    /**
     * @access public
     * @var RecordRef
     */
    public $contact;

    /**
     * @access public
     * @var string
     */
    protected $phone;

    /**
     * @access public
     * @var string
     */
    protected $email;

    static $paramtypesmap = array(
    	"company" => "RecordRef",
    	"contact" => "RecordRef",
    	"phone" => "string",
    	"email" => "string",
    );

    /**
     * Set phone
     *
     * @param string $phone
     * @return PhoneCallContact
     */
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return PhoneCallContact
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

}