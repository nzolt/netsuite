<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\InitializeRefType;

/**
 * InitializeRef
 */
class InitializeRef extends BaseRef {

    /**
     * @access public
     * @var InitializeRefType
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
    	"type" => "InitializeRefType",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set type
     *
     * @param InitializeRefType $type
     * @return InitializeRef
     */
    public function setType(InitializeRefType $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return InitializeRefType
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return InitializeRef
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
     * @return InitializeRef
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