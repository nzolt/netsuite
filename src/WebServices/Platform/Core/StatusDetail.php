<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Faults\Types\StatusDetailCodeType;
use Nzolt\NetSuite\WebServices\Platform\Faults\Types\StatusDetailType;

/**
 * StatusDetail
 */
class StatusDetail {

    /**
     * @access public
     * @var StatusDetailCodeType
     */
    protected $code;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var StatusDetailType
     */
    protected $type;

    static $paramtypesmap = array(
    	"code" => "StatusDetailCodeType",
    	"message" => "string",
    	"type" => "StatusDetailType",
    );

    /**
     * Set code
     *
     * @param StatusDetailCodeType $code
     * @return StatusDetail
     */
    public function setCode(StatusDetailCodeType $code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return StatusDetailCodeType
     */
    public function getCode() {
        return $this->code;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return StatusDetail
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


    /**
     * Set type
     *
     * @param StatusDetailType $type
     * @return StatusDetail
     */
    public function setType(StatusDetailType $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return StatusDetailType
     */
    public function getType() {
        return $this->type;
    }

}