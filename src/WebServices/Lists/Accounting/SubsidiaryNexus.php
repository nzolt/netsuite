<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * SubsidiaryNexus
 */
class SubsidiaryNexus {

    /**
     * @access public
     * @var RecordRef
     */
    public $nexusId;

    /**
     * @access public
     * @var string
     */
    protected $country;

    static $paramtypesmap = array(
    	"nexusId" => "RecordRef",
    	"country" => "string",
    );

    /**
     * Set country
     *
     * @param string $country
     * @return SubsidiaryNexus
     */
    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

}