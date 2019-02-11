<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CustomTransactionRef
 */
class CustomTransactionRef extends BaseRef {

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

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"externalId" => "string",
    	"typeId" => "string",
    	"scriptId" => "string",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CustomTransactionRef
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
     * @return CustomTransactionRef
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
     * @return CustomTransactionRef
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


    /**
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomTransactionRef
     */
    public function setScriptId($scriptId) {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * Get scriptId
     *
     * @return string
     */
    public function getScriptId() {
        return $this->scriptId;
    }

}