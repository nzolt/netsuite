<?php

namespace Nzolt\NetSuite;

class SearchMultiSelectCustomField extends SearchCustomField
{

    /**
     * @var ListOrRecordRef[] $searchValue
     */
    protected $searchValue = null;

    /**
     * @var SearchMultiSelectFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param SearchMultiSelectFieldOperator $operator
     */
    public function __construct($internalId, $scriptId, $operator)
    {
      parent::__construct($internalId, $scriptId);
      $this->operator = $operator;
    }

    /**
     * @return ListOrRecordRef[]
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param ListOrRecordRef[] $searchValue
     * @return \Nzolt\NetSuite\SearchMultiSelectCustomField
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
     * @return \Nzolt\NetSuite\SearchMultiSelectCustomField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
