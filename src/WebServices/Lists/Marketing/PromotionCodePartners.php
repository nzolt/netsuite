<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

/**
 * PromotionCodePartners
 */
class PromotionCodePartners {

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var string
     */
    protected $code;

    static $paramtypesmap = array(
    	"partner" => "RecordRef",
    	"code" => "string",
    );

    /**
     * Set code
     *
     * @param string $code
     * @return PromotionCodePartners
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

}