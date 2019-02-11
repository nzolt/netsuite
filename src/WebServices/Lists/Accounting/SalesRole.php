<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * SalesRole
 */
class SalesRole extends Record {

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
     * @var boolean
     */
    protected $isSalesRep;

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
    	"isSalesRep" => "boolean",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return SalesRole
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
     * @return SalesRole
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
     * Set isSalesRep
     *
     * @param boolean $isSalesRep
     * @return SalesRole
     */
    public function setIsSalesRep($isSalesRep) {
        $this->isSalesRep = $isSalesRep;
        return $this;
    }

    /**
     * Get isSalesRep
     *
     * @return boolean
     */
    public function getIsSalesRep() {
        return $this->isSalesRep;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SalesRole
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
     * @return SalesRole
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
     * @return SalesRole
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