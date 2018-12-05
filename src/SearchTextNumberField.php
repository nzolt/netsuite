<?php

namespace Nzolt\NetSuite;

class SearchTextNumberField
{

    /**
     * @var string $searchValue
     */
    protected $searchValue = null;

    /**
     * @var string $searchValue2
     */
    protected $searchValue2 = null;

    /**
     * @var SearchTextNumberFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param SearchTextNumberFieldOperator $operator
     */
    public function __construct($operator)
    {
      $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param string $searchValue
     * @return \Nzolt\NetSuite\SearchTextNumberField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchValue2()
    {
      return $this->searchValue2;
    }

    /**
     * @param string $searchValue2
     * @return \Nzolt\NetSuite\SearchTextNumberField
     */
    public function setSearchValue2($searchValue2)
    {
      $this->searchValue2 = $searchValue2;
      return $this;
    }

    /**
     * @return SearchTextNumberFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchTextNumberFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchTextNumberField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
