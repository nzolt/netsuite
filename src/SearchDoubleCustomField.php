<?php

namespace Nzolt\NetSuite;

class SearchDoubleCustomField extends SearchCustomField
{

    /**
     * @var float $searchValue
     */
    protected $searchValue = null;

    /**
     * @var float $searchValue2
     */
    protected $searchValue2 = null;

    /**
     * @var SearchDoubleFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param SearchDoubleFieldOperator $operator
     */
    public function __construct($internalId, $scriptId, $operator)
    {
      parent::__construct($internalId, $scriptId);
      $this->operator = $operator;
    }

    /**
     * @return float
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param float $searchValue
     * @return \Nzolt\NetSuite\SearchDoubleCustomField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getSearchValue2()
    {
      return $this->searchValue2;
    }

    /**
     * @param float $searchValue2
     * @return \Nzolt\NetSuite\SearchDoubleCustomField
     */
    public function setSearchValue2($searchValue2)
    {
      $this->searchValue2 = $searchValue2;
      return $this;
    }

    /**
     * @return SearchDoubleFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchDoubleFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchDoubleCustomField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
