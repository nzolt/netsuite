<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CustomRecordRef
 */
class CustomRecordRef extends BaseRef {

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
    	"internalId" => "string",
    	"externalId" => "string",
    	"typeId" => "string",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CustomRecordRef
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
     * @return CustomRecordRef
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
     * @return CustomRecordRef
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