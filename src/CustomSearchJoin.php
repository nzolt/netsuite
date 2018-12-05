<?php

namespace Nzolt\NetSuite;

class CustomSearchJoin
{

    /**
     * @var CustomizationRef $customizationRef
     */
    protected $customizationRef = null;

    /**
     * @var SearchRecordBasic $searchRecordBasic
     */
    protected $searchRecordBasic = null;

    /**
     * @param CustomizationRef $customizationRef
     * @param SearchRecordBasic $searchRecordBasic
     */
    public function __construct($customizationRef, $searchRecordBasic)
    {
      $this->customizationRef = $customizationRef;
      $this->searchRecordBasic = $searchRecordBasic;
    }

    /**
     * @return CustomizationRef
     */
    public function getCustomizationRef()
    {
      return $this->customizationRef;
    }

    /**
     * @param CustomizationRef $customizationRef
     * @return \Nzolt\NetSuite\CustomSearchJoin
     */
    public function setCustomizationRef($customizationRef)
    {
      $this->customizationRef = $customizationRef;
      return $this;
    }

    /**
     * @return SearchRecordBasic
     */
    public function getSearchRecordBasic()
    {
      return $this->searchRecordBasic;
    }

    /**
     * @param SearchRecordBasic $searchRecordBasic
     * @return \Nzolt\NetSuite\CustomSearchJoin
     */
    public function setSearchRecordBasic($searchRecordBasic)
    {
      $this->searchRecordBasic = $searchRecordBasic;
      return $this;
    }

}
