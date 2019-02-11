<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\RecordType;

/**
 * GetSelectValueFieldDescription
 */
class GetSelectValueFieldDescription {

    /**
     * @access public
     * @var RecordType
     */
    protected $recordType;

    /**
     * @access public
     * @var RecordRef
     */
    public $customRecordType;

    /**
     * @access public
     * @var RecordRef
     */
    public $customTransactionType;

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
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var GetSelectValueFilter
     */
    protected $filter;

    /**
     * @access public
     * @var GetSelectFilterByFieldValueList
     */
    protected $filterByValueList;

    static $paramtypesmap = array(
    	"recordType" => "RecordType",
    	"customRecordType" => "RecordRef",
    	"customTransactionType" => "RecordRef",
    	"sublist" => "string",
    	"field" => "string",
    	"customForm" => "RecordRef",
    	"filter" => "GetSelectValueFilter",
    	"filterByValueList" => "GetSelectFilterByFieldValueList",
    );

    /**
     * Set recordType
     *
     * @param RecordType $recordType
     * @return GetSelectValueFieldDescription
     */
    public function setRecordType(RecordType $recordType) {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * Get recordType
     *
     * @return RecordType
     */
    public function getRecordType() {
        return $this->recordType;
    }


    /**
     * Set sublist
     *
     * @param string $sublist
     * @return GetSelectValueFieldDescription
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
     * @return GetSelectValueFieldDescription
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
     * Set filter
     *
     * @param GetSelectValueFilter $filter
     * @return GetSelectValueFieldDescription
     */
    public function setFilter(GetSelectValueFilter $filter) {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Get filter
     *
     * @return GetSelectValueFilter
     */
    public function getFilter() {
        return $this->filter;
    }


    /**
     * Set filterByValueList
     *
     * @param GetSelectFilterByFieldValueList $filterByValueList
     * @return GetSelectValueFieldDescription
     */
    public function setFilterByValueList(GetSelectFilterByFieldValueList $filterByValueList) {
        $this->filterByValueList = $filterByValueList;
        return $this;
    }

    /**
     * Get filterByValueList
     *
     * @return GetSelectFilterByFieldValueList
     */
    public function getFilterByValueList() {
        return $this->filterByValueList;
    }

}