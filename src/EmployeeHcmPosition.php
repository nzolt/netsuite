<?php

namespace Nzolt\NetSuite;

class EmployeeHcmPosition
{

    /**
     * @var RecordRef $position
     */
    protected $position = null;

    /**
     * @var boolean $primaryPosition
     */
    protected $primaryPosition = null;

    /**
     * @var string $positionId
     */
    protected $positionId = null;

    /**
     * @var float $positionAllocation
     */
    protected $positionAllocation = null;

    /**
     * @var float $fullTimeEquivalent
     */
    protected $fullTimeEquivalent = null;

    /**
     * @var RecordRef $employmentCategory
     */
    protected $employmentCategory = null;

    /**
     * @var RecordRef $reportsTo
     */
    protected $reportsTo = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPosition()
    {
      return $this->position;
    }

    /**
     * @param RecordRef $position
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setPosition($position)
    {
      $this->position = $position;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimaryPosition()
    {
      return $this->primaryPosition;
    }

    /**
     * @param boolean $primaryPosition
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setPrimaryPosition($primaryPosition)
    {
      $this->primaryPosition = $primaryPosition;
      return $this;
    }

    /**
     * @return string
     */
    public function getPositionId()
    {
      return $this->positionId;
    }

    /**
     * @param string $positionId
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setPositionId($positionId)
    {
      $this->positionId = $positionId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPositionAllocation()
    {
      return $this->positionAllocation;
    }

    /**
     * @param float $positionAllocation
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setPositionAllocation($positionAllocation)
    {
      $this->positionAllocation = $positionAllocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getFullTimeEquivalent()
    {
      return $this->fullTimeEquivalent;
    }

    /**
     * @param float $fullTimeEquivalent
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setFullTimeEquivalent($fullTimeEquivalent)
    {
      $this->fullTimeEquivalent = $fullTimeEquivalent;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmploymentCategory()
    {
      return $this->employmentCategory;
    }

    /**
     * @param RecordRef $employmentCategory
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setEmploymentCategory($employmentCategory)
    {
      $this->employmentCategory = $employmentCategory;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReportsTo()
    {
      return $this->reportsTo;
    }

    /**
     * @param RecordRef $reportsTo
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setReportsTo($reportsTo)
    {
      $this->reportsTo = $reportsTo;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\EmployeeHcmPosition
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
