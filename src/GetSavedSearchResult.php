<?php

namespace Nzolt\NetSuite;

class GetSavedSearchResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var int $totalRecords
     */
    protected $totalRecords = null;

    /**
     * @var RecordRefList $recordRefList
     */
    protected $recordRefList = null;

    /**
     * @param Status $status
     * @param RecordRefList $recordRefList
     */
    public function __construct($status, $recordRefList)
    {
      $this->status = $status;
      $this->recordRefList = $recordRefList;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\GetSavedSearchResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->totalRecords;
    }

    /**
     * @param int $totalRecords
     * @return \Nzolt\NetSuite\GetSavedSearchResult
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRecordRefList()
    {
      return $this->recordRefList;
    }

    /**
     * @param RecordRefList $recordRefList
     * @return \Nzolt\NetSuite\GetSavedSearchResult
     */
    public function setRecordRefList($recordRefList)
    {
      $this->recordRefList = $recordRefList;
      return $this;
    }

}
