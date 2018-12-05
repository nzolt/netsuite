<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingSearchRow extends SearchRow
{

    /**
     * @var ManufacturingRoutingSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var LocationSearchRowBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin
     */
    protected $manufacturingCostTemplateJoin = null;

    /**
     * @var EntityGroupSearchRowBasic $manufacturingWorkCenterJoin
     */
    protected $manufacturingWorkCenterJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ManufacturingRoutingSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchRowBasic
     */
    public function getManufacturingCostTemplateJoin()
    {
      return $this->manufacturingCostTemplateJoin;
    }

    /**
     * @param ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setManufacturingCostTemplateJoin($manufacturingCostTemplateJoin)
    {
      $this->manufacturingCostTemplateJoin = $manufacturingCostTemplateJoin;
      return $this;
    }

    /**
     * @return EntityGroupSearchRowBasic
     */
    public function getManufacturingWorkCenterJoin()
    {
      return $this->manufacturingWorkCenterJoin;
    }

    /**
     * @param EntityGroupSearchRowBasic $manufacturingWorkCenterJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setManufacturingWorkCenterJoin($manufacturingWorkCenterJoin)
    {
      $this->manufacturingWorkCenterJoin = $manufacturingWorkCenterJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
