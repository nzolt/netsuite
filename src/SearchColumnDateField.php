<?php

namespace Nzolt\NetSuite;

class SearchColumnDateField extends SearchColumnField
{

    /**
     * @var \DateTime $searchValue
     */
    protected $searchValue = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \Nzolt\NetSuite\SearchColumnDateField
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
