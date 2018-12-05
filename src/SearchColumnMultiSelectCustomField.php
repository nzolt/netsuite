<?php

namespace Nzolt\NetSuite;

class SearchColumnMultiSelectCustomField extends SearchColumnCustomField
{

    /**
     * @var ListOrRecordRef[] $searchValue
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
     * @return ListOrRecordRef[]
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param ListOrRecordRef[] $searchValue
     * @return \Nzolt\NetSuite\SearchColumnMultiSelectCustomField
     */
    public function setSearchValue(array $searchValue = null)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
