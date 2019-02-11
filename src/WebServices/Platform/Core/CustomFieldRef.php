<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CustomFieldRef
 */
class CustomFieldRef {

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

    static $paramtypesmap = array(
    	"internalId" => "string",
    	"scriptId" => "string",
    );

    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CustomFieldRef
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
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomFieldRef
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