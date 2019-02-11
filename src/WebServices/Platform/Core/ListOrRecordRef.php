<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * ListOrRecordRef
 */
class ListOrRecordRef {

    /**
     * @access public
     * @var string
     */
    protected $name;

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

    /**
     * @access public
     * @var string
     */
    protected $typeId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"internalId" => "string",
    	"externalId" => "string",
    	"typeId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return ListOrRecordRef
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
     * Set internalId
     *
     * @param string $internalId
     * @return ListOrRecordRef
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
     * @return ListOrRecordRef
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


    /**
     * Set typeId
     *
     * @param string $typeId
     * @return ListOrRecordRef
     */
    public function setTypeId($typeId) {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * Get typeId
     *
     * @return string
     */
    public function getTypeId() {
        return $this->typeId;
    }

}