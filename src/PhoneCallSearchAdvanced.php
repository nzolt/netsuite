<?php

namespace Nzolt\NetSuite;

class PhoneCallSearchAdvanced extends SearchRecord
{

    /**
     * @var PhoneCallSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PhoneCallSearchRow $columns
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
     * @return PhoneCallSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PhoneCallSearch $criteria
     * @return \Nzolt\NetSuite\PhoneCallSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PhoneCallSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PhoneCallSearchRow $columns
     * @return \Nzolt\NetSuite\PhoneCallSearchAdvanced
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
     * @return \Nzolt\NetSuite\PhoneCallSearchAdvanced
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
     * @return \Nzolt\NetSuite\PhoneCallSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
