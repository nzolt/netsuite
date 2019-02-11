<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * TaxType
 */
class TaxType extends Record {

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
     * @var TaxTypeNexusesTaxList
     */
    protected $nexusesTaxList;

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
    	"nexusesTaxList" => "TaxTypeNexusesTaxList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return TaxType
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
     * @return TaxType
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
     * Set nexusesTaxList
     *
     * @param TaxTypeNexusesTaxList $nexusesTaxList
     * @return TaxType
     */
    public function setNexusesTaxList(TaxTypeNexusesTaxList $nexusesTaxList) {
        $this->nexusesTaxList = $nexusesTaxList;
        return $this;
    }

    /**
     * Get nexusesTaxList
     *
     * @return TaxTypeNexusesTaxList
     */
    public function getNexusesTaxList() {
        return $this->nexusesTaxList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return TaxType
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
     * @return TaxType
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