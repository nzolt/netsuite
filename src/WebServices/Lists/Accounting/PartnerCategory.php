<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * PartnerCategory
 */
class PartnerCategory extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

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
    	"parent" => "RecordRef",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return PartnerCategory
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return PartnerCategory
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
     * @return PartnerCategory
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
     * @return PartnerCategory
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