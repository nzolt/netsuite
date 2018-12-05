<?php

namespace Nzolt\NetSuite;

class GetSelectValueFilter
{

    /**
     * @var string $filterValue
     */
    protected $filterValue = null;

    /**
     * @var GetSelectValueFilterOperator $operator
     */
    protected $operator = null;

    /**
     * @param string $filterValue
     * @param GetSelectValueFilterOperator $operator
     */
    public function __construct($filterValue, $operator)
    {
      $this->filterValue = $filterValue;
      $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getFilterValue()
    {
      return $this->filterValue;
    }

    /**
     * @param string $filterValue
     * @return \Nzolt\NetSuite\GetSelectValueFilter
     */
    public function setFilterValue($filterValue)
    {
      $this->filterValue = $filterValue;
      return $this;
    }

    /**
     * @return GetSelectValueFilterOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param GetSelectValueFilterOperator $operator
     * @return \Nzolt\NetSuite\GetSelectValueFilter
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
