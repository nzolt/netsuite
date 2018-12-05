<?php

namespace Nzolt\NetSuite;

class SearchMultiSelectField
{

    /**
     * @var RecordRef[] $searchValue
     */
    protected $searchValue = null;

    /**
     * @var SearchMultiSelectFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param SearchMultiSelectFieldOperator $operator
     */
    public function __construct($operator)
    {
      $this->operator = $operator;
    }

    /**
     * @return RecordRef[]
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param RecordRef[] $searchValue
     * @return \Nzolt\NetSuite\SearchMultiSelectField
     */
    public function setSearchValue(array $searchValue = null)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return SearchMultiSelectFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchMultiSelectFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchMultiSelectField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
