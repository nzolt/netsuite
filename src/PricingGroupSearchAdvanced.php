<?php

namespace Nzolt\NetSuite;

class PricingGroupSearchAdvanced extends SearchRecord
{

    /**
     * @var PricingGroupSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PricingGroupSearchRow $columns
     */
    protected $columns = null;

    /**
     * @var string $savedSearchId
     */
    protected $savedSearchId = null;

    /**
     * @var string $savedSearchScriptId
     */
    protected $savedSearchScriptId = null;

    /**
     * @param string $savedSearchId
     * @param string $savedSearchScriptId
     */
    public function __construct($savedSearchId, $savedSearchScriptId)
    {
      $this->savedSearchId = $savedSearchId;
      $this->savedSearchScriptId = $savedSearchScriptId;
    }

    /**
     * @return PricingGroupSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PricingGroupSearch $criteria
     * @return \Nzolt\NetSuite\PricingGroupSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PricingGroupSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PricingGroupSearchRow $columns
     * @return \Nzolt\NetSuite\PricingGroupSearchAdvanced
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
      return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId()
    {
      return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchId
     * @return \Nzolt\NetSuite\PricingGroupSearchAdvanced
     */
    public function setSavedSearchId($savedSearchId)
    {
      $this->savedSearchId = $savedSearchId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId()
    {
      return $this->savedSearchScriptId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return \Nzolt\NetSuite\PricingGroupSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
