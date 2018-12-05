<?php

namespace Nzolt\NetSuite;

class SearchLongCustomField extends SearchCustomField
{

    /**
     * @var int $searchValue
     */
    protected $searchValue = null;

    /**
     * @var int $searchValue2
     */
    protected $searchValue2 = null;

    /**
     * @var SearchLongFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param SearchLongFieldOperator $operator
     */
    public function __construct($internalId, $scriptId, $operator)
    {
      parent::__construct($internalId, $scriptId);
      $this->operator = $operator;
    }

    /**
     * @return int
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param int $searchValue
     * @return \Nzolt\NetSuite\SearchLongCustomField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchValue2()
    {
      return $this->searchValue2;
    }

    /**
     * @param int $searchValue2
     * @return \Nzolt\NetSuite\SearchLongCustomField
     */
    public function setSearchValue2($searchValue2)
    {
      $this->searchValue2 = $searchValue2;
      return $this;
    }

    /**
     * @return SearchLongFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchLongFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchLongCustomField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
