<?php

namespace Nzolt\NetSuite;

class SearchStringCustomField extends SearchCustomField
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
     * @param string $internalId
     * @param string $scriptId
     * @param SearchStringFieldOperator $operator
     */
    public function __construct($internalId, $scriptId, $operator)
    {
      parent::__construct($internalId, $scriptId);
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
     * @return \Nzolt\NetSuite\SearchStringCustomField
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
     * @return \Nzolt\NetSuite\SearchStringCustomField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
