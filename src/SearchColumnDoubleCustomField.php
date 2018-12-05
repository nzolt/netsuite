<?php

namespace Nzolt\NetSuite;

class SearchColumnDoubleCustomField extends SearchColumnCustomField
{

    /**
     * @var float $searchValue
     */
    protected $searchValue = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     */
    public function __construct($internalId, $scriptId)
    {
      parent::__construct($internalId, $scriptId);
    }

    /**
     * @return float
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param float $searchValue
     * @return \Nzolt\NetSuite\SearchColumnDoubleCustomField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
