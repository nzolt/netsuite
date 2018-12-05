<?php

namespace Nzolt\NetSuite;

class InboundShipmentSearchAdvanced extends SearchRecord
{

    /**
     * @var InboundShipmentSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var InboundShipmentSearchRow $columns
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
     * @return InboundShipmentSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param InboundShipmentSearch $criteria
     * @return \Nzolt\NetSuite\InboundShipmentSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return InboundShipmentSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param InboundShipmentSearchRow $columns
     * @return \Nzolt\NetSuite\InboundShipmentSearchAdvanced
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchAdvanced
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
     * @return \Nzolt\NetSuite\InboundShipmentSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
