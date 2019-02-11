<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * GetSelectFilterByFieldValue
 */
class GetSelectFilterByFieldValue {

    /**
     * @access public
     * @var string
     */
    protected $sublist;

    /**
     * @access public
     * @var string
     */
    protected $field;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"sublist" => "string",
    	"field" => "string",
    	"internalId" => "string",
    );

    /**
     * Set sublist
     *
     * @param string $sublist
     * @return GetSelectFilterByFieldValue
     */
    public function setSublist($sublist) {
        $this->sublist = $sublist;
        return $this;
    }

    /**
     * Get sublist
     *
     * @return string
     */
    public function getSublist() {
        return $this->sublist;
    }


    /**
     * Set field
     *
     * @param string $field
     * @return GetSelectFilterByFieldValue
     */
    public function setField($field) {
        $this->field = $field;
        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField() {
        return $this->field;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return GetSelectFilterByFieldValue
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

}