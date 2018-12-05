<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeSublists
{

    /**
     * @var RecordRef $recordSearch
     */
    protected $recordSearch = null;

    /**
     * @var string $recordDescr
     */
    protected $recordDescr = null;

    /**
     * @var LanguageValueList $recordDescrLanguageValueList
     */
    protected $recordDescrLanguageValueList = null;

    /**
     * @var RecordRef $recordTab
     */
    protected $recordTab = null;

    /**
     * @var string $recordId
     */
    protected $recordId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getRecordSearch()
    {
      return $this->recordSearch;
    }

    /**
     * @param RecordRef $recordSearch
     * @return \Nzolt\NetSuite\CustomRecordTypeSublists
     */
    public function setRecordSearch($recordSearch)
    {
      $this->recordSearch = $recordSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordDescr()
    {
      return $this->recordDescr;
    }

    /**
     * @param string $recordDescr
     * @return \Nzolt\NetSuite\CustomRecordTypeSublists
     */
    public function setRecordDescr($recordDescr)
    {
      $this->recordDescr = $recordDescr;
      return $this;
    }

    /**
     * @return LanguageValueList
     */
    public function getRecordDescrLanguageValueList()
    {
      return $this->recordDescrLanguageValueList;
    }

    /**
     * @param LanguageValueList $recordDescrLanguageValueList
     * @return \Nzolt\NetSuite\CustomRecordTypeSublists
     */
    public function setRecordDescrLanguageValueList($recordDescrLanguageValueList)
    {
      $this->recordDescrLanguageValueList = $recordDescrLanguageValueList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecordTab()
    {
      return $this->recordTab;
    }

    /**
     * @param RecordRef $recordTab
     * @return \Nzolt\NetSuite\CustomRecordTypeSublists
     */
    public function setRecordTab($recordTab)
    {
      $this->recordTab = $recordTab;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordId()
    {
      return $this->recordId;
    }

    /**
     * @param string $recordId
     * @return \Nzolt\NetSuite\CustomRecordTypeSublists
     */
    public function setRecordId($recordId)
    {
      $this->recordId = $recordId;
      return $this;
    }

}
