<?php

namespace Nzolt\NetSuite;

class CouponCodeSearchAdvanced extends SearchRecord
{

    /**
     * @var CouponCodeSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var CouponCodeSearchRow $columns
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
     * @return CouponCodeSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param CouponCodeSearch $criteria
     * @return \Nzolt\NetSuite\CouponCodeSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return CouponCodeSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param CouponCodeSearchRow $columns
     * @return \Nzolt\NetSuite\CouponCodeSearchAdvanced
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
     * @return \Nzolt\NetSuite\CouponCodeSearchAdvanced
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
     * @return \Nzolt\NetSuite\CouponCodeSearchAdvanced
     */
    public function setSavedSearchId($savedSearchId)
    {
      $this->savedSearchId = $savedSearchId;
      return $this;
    }

}
