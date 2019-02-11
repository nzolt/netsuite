<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Support\Types\SupportCaseStatusStage;

/**
 * SupportCaseStatus
 */
class SupportCaseStatus extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $insertBefore;

    /**
     * @access public
     * @var SupportCaseStatusStage
     */
    protected $stage;

    /**
     * @access public
     * @var boolean
     */
    protected $caseOnHold;

    /**
     * @access public
     * @var boolean
     */
    protected $autoCloseCase;

    /**
     * @access public
     * @var string
     */
    protected $description;

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
    	"insertBefore" => "RecordRef",
    	"stage" => "SupportCaseStatusStage",
    	"caseOnHold" => "boolean",
    	"autoCloseCase" => "boolean",
    	"description" => "string",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return SupportCaseStatus
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
     * @param SupportCaseStatusStage $stage
     * @return SupportCaseStatus
     */
    public function setStage(SupportCaseStatusStage $stage) {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Get stage
     *
     * @return SupportCaseStatusStage
     */
    public function getStage() {
        return $this->stage;
    }


    /**
     * Set caseOnHold
     *
     * @param boolean $caseOnHold
     * @return SupportCaseStatus
     */
    public function setCaseOnHold($caseOnHold) {
        $this->caseOnHold = $caseOnHold;
        return $this;
    }

    /**
     * Get caseOnHold
     *
     * @return boolean
     */
    public function getCaseOnHold() {
        return $this->caseOnHold;
    }


    /**
     * Set autoCloseCase
     *
     * @param boolean $autoCloseCase
     * @return SupportCaseStatus
     */
    public function setAutoCloseCase($autoCloseCase) {
        $this->autoCloseCase = $autoCloseCase;
        return $this;
    }

    /**
     * Get autoCloseCase
     *
     * @return boolean
     */
    public function getAutoCloseCase() {
        return $this->autoCloseCase;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return SupportCaseStatus
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SupportCaseStatus
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
     * @return SupportCaseStatus
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
     * @return SupportCaseStatus
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