<?php

namespace Nzolt\NetSuite;

class SearchEnumMultiSelectField
{

    /**
     * @var string[] $searchValue
     */
    protected $searchValue = null;

    /**
     * @var SearchEnumMultiSelectFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param SearchEnumMultiSelectFieldOperator $operator
     */
    public function __construct($operator)
    {
      $this->operator = $operator;
    }

    /**
     * @return string[]
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param string[] $searchValue
     * @return \Nzolt\NetSuite\SearchEnumMultiSelectField
     */
    public function setSearchValue(array $searchValue = null)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchEnumMultiSelectFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchEnumMultiSelectField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
