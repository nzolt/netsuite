<?php

namespace Nzolt\NetSuite;

class SearchColumnDateCustomField extends SearchColumnCustomField
{

    /**
     * @var \DateTime $searchValue
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
     * @return \DateTime
     */
    public function getSearchValue()
    {
      if ($this->searchValue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->searchValue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $searchValue
     * @return \Nzolt\NetSuite\SearchColumnDateCustomField
     */
    public function setSearchValue(\DateTime $searchValue = null)
    {
      if ($searchValue == null) {
       $this->searchValue = null;
      } else {
        $this->searchValue = $searchValue->format(\DateTime::ATOM);
      }
      return $this;
    }

}
