<?php

namespace Nzolt\NetSuite;

class PartnerCategorySearchAdvanced extends SearchRecord
{

    /**
     * @var PartnerCategorySearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PartnerCategorySearchRow $columns
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
     * @return PartnerCategorySearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PartnerCategorySearch $criteria
     * @return \Nzolt\NetSuite\PartnerCategorySearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PartnerCategorySearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PartnerCategorySearchRow $columns
     * @return \Nzolt\NetSuite\PartnerCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\PartnerCategorySearchAdvanced
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
     * @return \Nzolt\NetSuite\PartnerCategorySearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
