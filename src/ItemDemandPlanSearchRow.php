<?php

namespace Nzolt\NetSuite;

class ItemDemandPlanSearchRow extends SearchRow
{

    /**
     * @var ItemDemandPlanSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var ItemSearchRowBasic $lastAlternateSourceItemJoin
     */
    protected $lastAlternateSourceItemJoin = null;

    /**
     * @var LocationSearchRowBasic $locationJoin
     */
    protected $locationJoin = null;

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
     * @return ItemDemandPlanSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ItemDemandPlanSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRow
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getLastAlternateSourceItemJoin()
    {
      return $this->lastAlternateSourceItemJoin;
    }

    /**
     * @param ItemSearchRowBasic $lastAlternateSourceItemJoin
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRow
     */
    public function setLastAlternateSourceItemJoin($lastAlternateSourceItemJoin)
    {
      $this->lastAlternateSourceItemJoin = $lastAlternateSourceItemJoin;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRow
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRow
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
     * @return \Nzolt\NetSuite\ItemDemandPlanSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
