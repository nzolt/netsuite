<?php

namespace Nzolt\NetSuite;

class PaymentMethodSearchAdvanced extends SearchRecord
{

    /**
     * @var PaymentMethodSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var PaymentMethodSearchRow $columns
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
     * @return PaymentMethodSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param PaymentMethodSearch $criteria
     * @return \Nzolt\NetSuite\PaymentMethodSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return PaymentMethodSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param PaymentMethodSearchRow $columns
     * @return \Nzolt\NetSuite\PaymentMethodSearchAdvanced
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
     * @return \Nzolt\NetSuite\PaymentMethodSearchAdvanced
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
     * @return \Nzolt\NetSuite\PaymentMethodSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
