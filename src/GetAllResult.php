<?php

namespace Nzolt\NetSuite;

class GetAllResult
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
     * @var RecordList $recordList
     */
    protected $recordList = null;

    /**
     * @param Status $status
     * @param RecordList $recordList
     */
    public function __construct($status, $recordList)
    {
      $this->status = $status;
      $this->recordList = $recordList;
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
     * @return \Nzolt\NetSuite\GetAllResult
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
     * @return \Nzolt\NetSuite\GetAllResult
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return RecordList
     */
    public function getRecordList()
    {
      return $this->recordList;
    }

    /**
     * @param RecordList $recordList
     * @return \Nzolt\NetSuite\GetAllResult
     */
    public function setRecordList($recordList)
    {
      $this->recordList = $recordList;
      return $this;
    }

}
