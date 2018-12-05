<?php

namespace Nzolt\NetSuite;

class SearchColumnLongCustomField extends SearchColumnCustomField
{

    /**
     * @var int $searchValue
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
     * @return int
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param int $searchValue
     * @return \Nzolt\NetSuite\SearchColumnLongCustomField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
