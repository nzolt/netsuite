<?php

namespace Nzolt\NetSuite;

class SearchDateCustomField extends SearchCustomField
{

    /**
     * @var SearchDate $predefinedSearchValue
     */
    protected $predefinedSearchValue = null;

    /**
     * @var \DateTime $searchValue
     */
    protected $searchValue = null;

    /**
     * @var \DateTime $searchValue2
     */
    protected $searchValue2 = null;

    /**
     * @var SearchDateFieldOperator $operator
     */
    protected $operator = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param SearchDateFieldOperator $operator
     */
    public function __construct($internalId, $scriptId, $operator)
    {
      parent::__construct($internalId, $scriptId);
      $this->operator = $operator;
    }

    /**
     * @return SearchDate
     */
    public function getPredefinedSearchValue()
    {
      return $this->predefinedSearchValue;
    }

    /**
     * @param SearchDate $predefinedSearchValue
     * @return \Nzolt\NetSuite\SearchDateCustomField
     */
    public function setPredefinedSearchValue($predefinedSearchValue)
    {
      $this->predefinedSearchValue = $predefinedSearchValue;
      return $this;
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
     * @return \Nzolt\NetSuite\SearchDateCustomField
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

    /**
     * @return \DateTime
     */
    public function getSearchValue2()
    {
      if ($this->searchValue2 == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->searchValue2);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $searchValue2
     * @return \Nzolt\NetSuite\SearchDateCustomField
     */
    public function setSearchValue2(\DateTime $searchValue2 = null)
    {
      if ($searchValue2 == null) {
       $this->searchValue2 = null;
      } else {
        $this->searchValue2 = $searchValue2->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SearchDateFieldOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param SearchDateFieldOperator $operator
     * @return \Nzolt\NetSuite\SearchDateCustomField
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
