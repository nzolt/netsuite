<?php

namespace Nzolt\NetSuite;

class ManufacturingRoutingSearch extends SearchRecord
{

    /**
     * @var ManufacturingRoutingSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var LocationSearchBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin
     */
    protected $manufacturingCostTemplateJoin = null;

    /**
     * @var EntityGroupSearchBasic $manufacturingWorkCenterJoin
     */
    protected $manufacturingWorkCenterJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingRoutingSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ManufacturingRoutingSearchBasic $basic
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchBasic
     */
    public function getManufacturingCostTemplateJoin()
    {
      return $this->manufacturingCostTemplateJoin;
    }

    /**
     * @param ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setManufacturingCostTemplateJoin($manufacturingCostTemplateJoin)
    {
      $this->manufacturingCostTemplateJoin = $manufacturingCostTemplateJoin;
      return $this;
    }

    /**
     * @return EntityGroupSearchBasic
     */
    public function getManufacturingWorkCenterJoin()
    {
      return $this->manufacturingWorkCenterJoin;
    }

    /**
     * @param EntityGroupSearchBasic $manufacturingWorkCenterJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setManufacturingWorkCenterJoin($manufacturingWorkCenterJoin)
    {
      $this->manufacturingWorkCenterJoin = $manufacturingWorkCenterJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\ManufacturingRoutingSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
