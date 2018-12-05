<?php

namespace Nzolt\NetSuite;

class SearchEnumMultiSelectCustomField extends SearchCustomField
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
     * @param string $internalId
     * @param string $scriptId
     * @param SearchEnumMultiSelectFieldOperator $operator
     */
    public function __construct($internalId, $scriptId, $operator)
    {
      parent::__construct($internalId, $scriptId);
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
     * @return \Nzolt\NetSuite\SearchEnumMultiSelectCustomField
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
     * @return \Nzolt\NetSuite\SearchEnumMultiSelectCustomField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
