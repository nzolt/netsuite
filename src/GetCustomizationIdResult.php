<?php

namespace Nzolt\NetSuite;

class GetCustomizationIdResult
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
     * @var CustomizationRefList $customizationRefList
     */
    protected $customizationRefList = null;

    /**
     * @param Status $status
     * @param CustomizationRefList $customizationRefList
     */
    public function __construct($status, $customizationRefList)
    {
      $this->status = $status;
      $this->customizationRefList = $customizationRefList;
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
     * @return \Nzolt\NetSuite\GetCustomizationIdResult
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
     * @return \Nzolt\NetSuite\GetCustomizationIdResult
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return CustomizationRefList
     */
    public function getCustomizationRefList()
    {
      return $this->customizationRefList;
    }

    /**
     * @param CustomizationRefList $customizationRefList
     * @return \Nzolt\NetSuite\GetCustomizationIdResult
     */
    public function setCustomizationRefList($customizationRefList)
    {
      $this->customizationRefList = $customizationRefList;
      return $this;
    }

}
