<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeSublists
 */
class CustomRecordTypeSublists {

    /**
     * @access public
     * @var RecordRef
     */
    public $recordSearch;

    /**
     * @access public
     * @var string
     */
    protected $recordDescr;

    /**
     * @access public
     * @var LanguageValueList
     */
    protected $recordDescrLanguageValueList;

    /**
     * @access public
     * @var RecordRef
     */
    public $recordTab;

    /**
     * @access public
     * @var string
     */
    protected $recordId;

    static $paramtypesmap = array(
    	"recordSearch" => "RecordRef",
    	"recordDescr" => "string",
    	"recordDescrLanguageValueList" => "LanguageValueList",
    	"recordTab" => "RecordRef",
    	"recordId" => "string",
    );

    /**
     * Set recordDescr
     *
     * @param string $recordDescr
     * @return CustomRecordTypeSublists
     */
    public function setRecordDescr($recordDescr) {
        $this->recordDescr = $recordDescr;
        return $this;
    }

    /**
     * Get recordDescr
     *
     * @return string
     */
    public function getRecordDescr() {
        return $this->recordDescr;
    }


    /**
     * Set recordDescrLanguageValueList
     *
     * @param LanguageValueList $recordDescrLanguageValueList
     * @return CustomRecordTypeSublists
     */
    public function setRecordDescrLanguageValueList(LanguageValueList $recordDescrLanguageValueList) {
        $this->recordDescrLanguageValueList = $recordDescrLanguageValueList;
        return $this;
    }

    /**
     * Get recordDescrLanguageValueList
     *
     * @return LanguageValueList
     */
    public function getRecordDescrLanguageValueList() {
        return $this->recordDescrLanguageValueList;
    }


    /**
     * Set recordId
     *
     * @param string $recordId
     * @return CustomRecordTypeSublists
     */
    public function setRecordId($recordId) {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * Get recordId
     *
     * @return string
     */
    public function getRecordId() {
        return $this->recordId;
    }

}