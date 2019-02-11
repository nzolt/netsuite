<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\TaxAcctType;

/**
 * TaxAcct
 */
class TaxAcct extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $nexus;

    /**
     * @access public
     * @var Country
     */
    protected $country;

    /**
     * @access public
     * @var TaxAcctType
     */
    protected $taxAcctType;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

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
    	"name" => "string",
    	"description" => "string",
    	"nexus" => "RecordRef",
    	"country" => "Country",
    	"taxAcctType" => "TaxAcctType",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return TaxAcct
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return TaxAcct
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
     * Set country
     *
     * @param Country $country
     * @return TaxAcct
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
     * Set taxAcctType
     *
     * @param TaxAcctType $taxAcctType
     * @return TaxAcct
     */
    public function setTaxAcctType(TaxAcctType $taxAcctType) {
        $this->taxAcctType = $taxAcctType;
        return $this;
    }

    /**
     * Get taxAcctType
     *
     * @return TaxAcctType
     */
    public function getTaxAcctType() {
        return $this->taxAcctType;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return TaxAcct
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return TaxAcct
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
     * @return TaxAcct
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