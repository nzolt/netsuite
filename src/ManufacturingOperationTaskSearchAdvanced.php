<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskSearchAdvanced extends SearchRecord
{

    /**
     * @var ManufacturingOperationTaskSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var ManufacturingOperationTaskSearchRow $columns
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
     * @return ManufacturingOperationTaskSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param ManufacturingOperationTaskSearch $criteria
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ManufacturingOperationTaskSearchRow $columns
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchAdvanced
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchAdvanced
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
