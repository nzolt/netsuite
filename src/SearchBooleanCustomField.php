<?php

namespace Nzolt\NetSuite;

class SearchBooleanCustomField extends SearchCustomField
{

    /**
     * @var boolean $searchValue
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
     * @return boolean
     */
    public function getSearchValue()
    {
      return $this->searchValue;
    }

    /**
     * @param boolean $searchValue
     * @return \Nzolt\NetSuite\SearchBooleanCustomField
     */
    public function setSearchValue($searchValue)
    {
      $this->searchValue = $searchValue;
      return $this;
    }

}
