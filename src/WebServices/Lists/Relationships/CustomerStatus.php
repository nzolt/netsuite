<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerStatusStage;

/**
 * CustomerStatus
 */
class CustomerStatus extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var CustomerStatusStage
     */
    protected $stage;

    /**
     * @access public
     * @var float
     */
    protected $probability;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var boolean
     */
    protected $includeInLeadReports;

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
    	"stage" => "CustomerStatusStage",
    	"probability" => "float",
    	"description" => "string",
    	"includeInLeadReports" => "boolean",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return CustomerStatus
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
     * Set stage
     *
     * @param CustomerStatusStage $stage
     * @return CustomerStatus
     */
    public function setStage(CustomerStatusStage $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return CustomerStatusStage
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set probability
     *
     * @param float $probability
     * @return CustomerStatus
     */
    public function setProbability($probability) {
        $this->probability = $probability;
        return $this;
    }

    /**
     * Get probability
     *
     * @return float
     */
    public function getProbability() {
        return $this->probability;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return CustomerStatus
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
     * Set includeInLeadReports
     *
     * @param boolean $includeInLeadReports
     * @return CustomerStatus
     */
    public function setIncludeInLeadReports($includeInLeadReports) {
        $this->includeInLeadReports = $includeInLeadReports;
        return $this;
    }

    /**
     * Get includeInLeadReports
     *
     * @return boolean
     */
    public function getIncludeInLeadReports() {
        return $this->includeInLeadReports;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return CustomerStatus
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
     * @return CustomerStatus
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
     * @return CustomerStatus
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