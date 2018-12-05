<?php

namespace Nzolt\NetSuite;

class ItemAccountMappingSearchRow extends SearchRow
{

    /**
     * @var ItemAccountMappingSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var ClassificationSearchRowBasic $classJoin
     */
    protected $classJoin = null;

    /**
     * @var DepartmentSearchRowBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var AccountSearchRowBasic $destinationAccountJoin
     */
    protected $destinationAccountJoin = null;

    /**
     * @var LocationSearchRowBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var AccountSearchRowBasic $sourceAccountJoin
     */
    protected $sourceAccountJoin = null;

    /**
     * @var SubsidiarySearchRowBasic $subsidiaryJoin
     */
    protected $subsidiaryJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemAccountMappingSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ItemAccountMappingSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin()
    {
      return $this->classJoin;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setClassJoin($classJoin)
    {
      $this->classJoin = $classJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getDestinationAccountJoin()
    {
      return $this->destinationAccountJoin;
    }

    /**
     * @param AccountSearchRowBasic $destinationAccountJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setDestinationAccountJoin($destinationAccountJoin)
    {
      $this->destinationAccountJoin = $destinationAccountJoin;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getSourceAccountJoin()
    {
      return $this->sourceAccountJoin;
    }

    /**
     * @param AccountSearchRowBasic $sourceAccountJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setSourceAccountJoin($sourceAccountJoin)
    {
      $this->sourceAccountJoin = $sourceAccountJoin;
      return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin()
    {
      return $this->subsidiaryJoin;
    }

    /**
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setSubsidiaryJoin($subsidiaryJoin)
    {
      $this->subsidiaryJoin = $subsidiaryJoin;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
