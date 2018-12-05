<?php

namespace Nzolt\NetSuite;

class ChargeSearchAdvanced extends SearchRecord
{

    /**
     * @var ChargeSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ChargeSearchRow $columns
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
     * @return ChargeSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ChargeSearch $criteria
     * @return \Nzolt\NetSuite\ChargeSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ChargeSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ChargeSearchRow $columns
     * @return \Nzolt\NetSuite\ChargeSearchAdvanced
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
     * @return \Nzolt\NetSuite\ChargeSearchAdvanced
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
     * @return \Nzolt\NetSuite\ChargeSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
