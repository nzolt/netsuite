<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * SearchColumnCustomField
 */
class SearchColumnCustomField {

    /**
     * @access public
     * @var string
     */
    protected $customLabel;

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
    	"customLabel" => "string",
    	"internalId" => "string",
    	"scriptId" => "string",
    );

    /**
     * Set customLabel
     *
     * @param string $customLabel
     * @return SearchColumnCustomField
     */
    public function setCustomLabel($customLabel) {
        $this->customLabel = $customLabel;
        return $this;
    }

    /**
     * Get customLabel
     *
     * @return string
     */
    public function getCustomLabel() {
        return $this->customLabel;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return SearchColumnCustomField
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
     * @return SearchColumnCustomField
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