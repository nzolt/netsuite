<?php

namespace Nzolt\NetSuite;

class SearchDoubleField
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
     * @param SearchDoubleFieldOperator $operator
     */
    public function __construct($operator)
    {
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
     * @return \Nzolt\NetSuite\SearchDoubleField
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
     * @return \Nzolt\NetSuite\SearchDoubleField
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
     * @return \Nzolt\NetSuite\SearchDoubleField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
