<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

/**
 * Solutions
 */
class Solutions {

    /**
     * @access public
     * @var RecordRef
     */
    public $solution;

    /**
     * @access public
     * @var string
     */
    protected $message;

    static $paramtypesmap = array(
    	"solution" => "RecordRef",
    	"message" => "string",
    );

    /**
     * Set message
     *
     * @param string $message
     * @return Solutions
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

}