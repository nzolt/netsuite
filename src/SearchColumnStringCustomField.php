<?php

namespace Nzolt\NetSuite;

class SearchColumnStringCustomField extends SearchColumnCustomField
{

    /**
     * @var string $searchValue
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
     * @return string
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param string $searchValue
     * @return \Nzolt\NetSuite\SearchColumnStringCustomField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
