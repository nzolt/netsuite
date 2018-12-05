<?php

namespace Nzolt\NetSuite;

class ItemAccountMappingSearch extends SearchRecord
{

    /**
     * @var ItemAccountMappingSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var ClassificationSearchBasic $classJoin
     */
    protected $classJoin = null;

    /**
     * @var DepartmentSearchBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var AccountSearchBasic $destinationAccountJoin
     */
    protected $destinationAccountJoin = null;

    /**
     * @var LocationSearchBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var AccountSearchBasic $sourceAccountJoin
     */
    protected $sourceAccountJoin = null;

    /**
     * @var SubsidiarySearchBasic $subsidiaryJoin
     */
    protected $subsidiaryJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemAccountMappingSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ItemAccountMappingSearchBasic $basic
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ClassificationSearchBasic
     */
    public function getClassJoin()
    {
      return $this->classJoin;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setClassJoin($classJoin)
    {
      $this->classJoin = $classJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getDestinationAccountJoin()
    {
      return $this->destinationAccountJoin;
    }

    /**
     * @param AccountSearchBasic $destinationAccountJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setDestinationAccountJoin($destinationAccountJoin)
    {
      $this->destinationAccountJoin = $destinationAccountJoin;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getSourceAccountJoin()
    {
      return $this->sourceAccountJoin;
    }

    /**
     * @param AccountSearchBasic $sourceAccountJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setSourceAccountJoin($sourceAccountJoin)
    {
      $this->sourceAccountJoin = $sourceAccountJoin;
      return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin()
    {
      return $this->subsidiaryJoin;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setSubsidiaryJoin($subsidiaryJoin)
    {
      $this->subsidiaryJoin = $subsidiaryJoin;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
