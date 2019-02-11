<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\InitializeAuxRefType;

/**
 * InitializeAuxRef
 */
class InitializeAuxRef extends BaseRef {

    /**
     * @access public
     * @var InitializeAuxRefType
     */
    protected $type;

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
    	"type" => "InitializeAuxRefType",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set type
     *
     * @param InitializeAuxRefType $type
     * @return InitializeAuxRef
     */
    public function setType(InitializeAuxRefType $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return InitializeAuxRefType
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return InitializeAuxRef
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
     * @return InitializeAuxRef
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