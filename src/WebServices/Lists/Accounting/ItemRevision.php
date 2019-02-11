<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * ItemRevision
 */
class ItemRevision extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var dateTime
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $obsoleteDate;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var boolean
     */
    protected $inactive;

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
    	"item" => "RecordRef",
    	"name" => "string",
    	"effectiveDate" => "dateTime",
    	"obsoleteDate" => "dateTime",
    	"memo" => "string",
    	"inactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return ItemRevision
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
     * Set effectiveDate
     *
     * @param \DateTime $effectiveDate
     * @return ItemRevision
     */
    public function setEffectiveDate(\DateTime $effectiveDate) {
        $this->effectiveDate = $effectiveDate->format('c');
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return \DateTime
     */
    public function getEffectiveDate() {
        return new \DateTime($this->effectiveDate);
    }


    /**
     * Set obsoleteDate
     *
     * @param \DateTime $obsoleteDate
     * @return ItemRevision
     */
    public function setObsoleteDate(\DateTime $obsoleteDate) {
        $this->obsoleteDate = $obsoleteDate->format('c');
        return $this;
    }

    /**
     * Get obsoleteDate
     *
     * @return \DateTime
     */
    public function getObsoleteDate() {
        return new \DateTime($this->obsoleteDate);
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return ItemRevision
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set inactive
     *
     * @param boolean $inactive
     * @return ItemRevision
     */
    public function setInactive($inactive) {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * Get inactive
     *
     * @return boolean
     */
    public function getInactive() {
        return $this->inactive;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ItemRevision
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
     * @return ItemRevision
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