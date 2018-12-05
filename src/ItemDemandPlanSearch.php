<?php

namespace Nzolt\NetSuite;

class ItemDemandPlanSearch extends SearchRecord
{

    /**
     * @var ItemDemandPlanSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var ItemSearchBasic $lastAlternateSourceItemJoin
     */
    protected $lastAlternateSourceItemJoin = null;

    /**
     * @var LocationSearchBasic $locationJoin
     */
    protected $locationJoin = null;

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
     * @return ItemDemandPlanSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ItemDemandPlanSearchBasic $basic
     * @return \Nzolt\NetSuite\ItemDemandPlanSearch
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getLastAlternateSourceItemJoin()
    {
      return $this->lastAlternateSourceItemJoin;
    }

    /**
     * @param ItemSearchBasic $lastAlternateSourceItemJoin
     * @return \Nzolt\NetSuite\ItemDemandPlanSearch
     */
    public function setLastAlternateSourceItemJoin($lastAlternateSourceItemJoin)
    {
      $this->lastAlternateSourceItemJoin = $lastAlternateSourceItemJoin;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearch
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearch
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
