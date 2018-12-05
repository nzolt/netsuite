<?php

namespace Nzolt\NetSuite;

class GiftCertificateSearchAdvanced extends SearchRecord
{

    /**
     * @var GiftCertificateSearch $criteria
     */
    protected $criteria = null;

    /**
     * @var GiftCertificateSearchRow $columns
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
     * @return GiftCertificateSearch
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param GiftCertificateSearch $criteria
     * @return \Nzolt\NetSuite\GiftCertificateSearchAdvanced
     */
    public function setCriteria($criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return GiftCertificateSearchRow
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param GiftCertificateSearchRow $columns
     * @return \Nzolt\NetSuite\GiftCertificateSearchAdvanced
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
     * @return \Nzolt\NetSuite\GiftCertificateSearchAdvanced
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
     * @return \Nzolt\NetSuite\GiftCertificateSearchAdvanced
     */
    public function setSavedSearchScriptId($savedSearchScriptId)
    {
      $this->savedSearchScriptId = $savedSearchScriptId;
      return $this;
    }

}
