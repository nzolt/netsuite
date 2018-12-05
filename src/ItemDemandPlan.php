<?php

namespace Nzolt\NetSuite;

class ItemDemandPlan extends Record
{

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    /**
     * @var RecordRef $units
     */
    protected $units = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @var int $year
     */
    protected $year = null;

    /**
     * @var DemandPlanMonth $month
     */
    protected $month = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var DemandPlanCalendarType $demandPlanCalendarType
     */
    protected $demandPlanCalendarType = null;

    /**
     * @var DemandPlanMatrix $demandPlanMatrix
     */
    protected $demandPlanMatrix = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
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
     * @return \Nzolt\NetSuite\ItemDemandPlan
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
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param RecordRef $units
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param int $year
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
    }

    /**
     * @return DemandPlanMonth
     */
    public function getMonth()
    {
      return $this->month;
    }

    /**
     * @param DemandPlanMonth $month
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setMonth($month)
    {
      $this->month = $month;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setStartDate(\DateTime $startDate = null)
    {
      if ($startDate == null) {
       $this->startDate = null;
      } else {
        $this->startDate = $startDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setEndDate(\DateTime $endDate = null)
    {
      if ($endDate == null) {
       $this->endDate = null;
      } else {
        $this->endDate = $endDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return DemandPlanCalendarType
     */
    public function getDemandPlanCalendarType()
    {
      return $this->demandPlanCalendarType;
    }

    /**
     * @param DemandPlanCalendarType $demandPlanCalendarType
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setDemandPlanCalendarType($demandPlanCalendarType)
    {
      $this->demandPlanCalendarType = $demandPlanCalendarType;
      return $this;
    }

    /**
     * @return DemandPlanMatrix
     */
    public function getDemandPlanMatrix()
    {
      return $this->demandPlanMatrix;
    }

    /**
     * @param DemandPlanMatrix $demandPlanMatrix
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setDemandPlanMatrix($demandPlanMatrix)
    {
      $this->demandPlanMatrix = $demandPlanMatrix;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\ItemDemandPlan
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
