<?php

namespace Nzolt\NetSuite;

class PromotionCodeSearchAdvanced extends SearchRecord
{

    /**
     * @var PromotionCodeSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PromotionCodeSearchRow $columns
     */
    protected $columns = null;

    /**
     * @var string $savedSearchScriptId
     */
    protected $savedSearchScriptId = null;

    /**
     * @var string $savedSearchId
     */
    protected $savedSearchId = null;

    /**
     * @param string $savedSearchScriptId
     * @param string $savedSearchId
     */
    public function __construct($savedSearchScriptId, $savedSearchId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      $this->savedSearchId = $savedSearchId;
    }

    /**
     * @return PromotionCodeSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PromotionCodeSearch $criteria
     * @return \Nzolt\NetSuite\PromotionCodeSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PromotionCodeSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PromotionCodeSearchRow $columns
     * @return \Nzolt\NetSuite\PromotionCodeSearchAdvanced
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
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
     * @return \Nzolt\NetSuite\PromotionCodeSearchAdvanced
     */
    public function setSavedSearchId($savedSearchId)
    {
      $this->savedSearchId = $savedSearchId;
      return $this;
    }

}
