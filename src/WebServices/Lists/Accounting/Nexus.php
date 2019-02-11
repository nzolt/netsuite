<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;

/**
 * Nexus
 */
class Nexus extends Record {

    /**
     * @access public
     * @var Country
     */
    protected $country;

    /**
     * @access public
     * @var RecordRef
     */
    public $state;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxAgency;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxAgencyPst;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxCode;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"country" => "Country",
    	"state" => "RecordRef",
    	"taxAgency" => "RecordRef",
    	"taxAgencyPst" => "RecordRef",
    	"taxCode" => "RecordRef",
    	"description" => "string",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set country
     *
     * @param Country $country
     * @return Nexus
     */
    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Nexus
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Nexus
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return Nexus
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}