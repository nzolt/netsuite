<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

/**
 * SupportCaseEscalateTo
 */
class SupportCaseEscalateTo {

    /**
     * @access public
     * @var RecordRef
     */
    public $escalatee;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var string
     */
    protected $phone;

    static $paramtypesmap = array(
    	"escalatee" => "RecordRef",
    	"email" => "string",
    	"phone" => "string",
    );

    /**
     * Set email
     *
     * @param string $email
     * @return SupportCaseEscalateTo
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
     * Set phone
     *
     * @param string $phone
     * @return SupportCaseEscalateTo
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

}