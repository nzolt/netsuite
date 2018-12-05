<?php

namespace Nzolt\NetSuite;

class SearchStringField
{

    /**
     * @var string $searchValue
     */
    protected $searchValue = null;

    /**
     * @var SearchStringFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param SearchStringFieldOperator $operator
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
     * @return \Nzolt\NetSuite\SearchStringField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return SearchStringFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchStringFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchStringField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
