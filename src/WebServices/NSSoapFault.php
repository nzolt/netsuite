<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Faults\Types\FaultCodeType;

/**
 * NSSoapFault
 */
class NSSoapFault {

    /**
     * @access public
     * @var FaultCodeType
     */
    protected $code;

    /**
     * @access public
     * @var string
     */
    protected $message;

    static $paramtypesmap = array(
    	"code" => "FaultCodeType",
    	"message" => "string",
    );

    /**
     * Set code
     *
     * @param FaultCodeType $code
     * @return NSSoapFault
     */
    public function setCode(FaultCodeType $code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return FaultCodeType
     */
    public function getCode() {
        return $this->code;
    }


    /**
     * Set message
     *
     * @param string $message
     * @return NSSoapFault
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