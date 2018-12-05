<?php

namespace Nzolt\NetSuite;

class GetSelectValueResult
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
     * @var int $totalPages
     */
    protected $totalPages = null;

    /**
     * @var BaseRefList $baseRefList
     */
    protected $baseRefList = null;

    /**
     * @param Status $status
     * @param BaseRefList $baseRefList
     */
    public function __construct($status, $baseRefList)
    {
      $this->status = $status;
      $this->baseRefList = $baseRefList;
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
     * @return \Nzolt\NetSuite\GetSelectValueResult
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
     * @return \Nzolt\NetSuite\GetSelectValueResult
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
      return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return \Nzolt\NetSuite\GetSelectValueResult
     */
    public function setTotalPages($totalPages)
    {
      $this->totalPages = $totalPages;
      return $this;
    }

    /**
     * @return BaseRefList
     */
    public function getBaseRefList()
    {
      return $this->baseRefList;
    }

    /**
     * @param BaseRefList $baseRefList
     * @return \Nzolt\NetSuite\GetSelectValueResult
     */
    public function setBaseRefList($baseRefList)
    {
      $this->baseRefList = $baseRefList;
      return $this;
    }

}
