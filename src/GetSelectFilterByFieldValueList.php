<?php

namespace Nzolt\NetSuite;

class GetSelectFilterByFieldValueList
{

    /**
     * @var GetSelectFilterByFieldValue[] $filterBy
     */
    protected $filterBy = null;

    /**
     * @param GetSelectFilterByFieldValue[] $filterBy
     */
    public function __construct(array $filterBy)
    {
      $this->filterBy = $filterBy;
    }

    /**
     * @return GetSelectFilterByFieldValue[]
     */
    public function getFilterBy()
    {
      return $this->filterBy;
    }

    /**
     * @param GetSelectFilterByFieldValue[] $filterBy
     * @return \Nzolt\NetSuite\GetSelectFilterByFieldValueList
     */
    public function setFilterBy(array $filterBy)
    {
      $this->filterBy = $filterBy;
      return $this;
    }

}
