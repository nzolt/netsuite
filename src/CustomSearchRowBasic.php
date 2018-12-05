<?php

namespace Nzolt\NetSuite;

class CustomSearchRowBasic
{

    /**
     * @var CustomizationRef $customizationRef
     */
    protected $customizationRef = null;

    /**
     * @var SearchRowBasic $searchRowBasic
     */
    protected $searchRowBasic = null;

    /**
     * @param CustomizationRef $customizationRef
     * @param SearchRowBasic $searchRowBasic
     */
    public function __construct($customizationRef, $searchRowBasic)
    {
      $this->customizationRef = $customizationRef;
      $this->searchRowBasic = $searchRowBasic;
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
     * @return \Nzolt\NetSuite\CustomSearchRowBasic
     */
    public function setCustomizationRef($customizationRef)
    {
      $this->customizationRef = $customizationRef;
      return $this;
    }

    /**
     * @return SearchRowBasic
     */
    public function getSearchRowBasic()
    {
      return $this->searchRowBasic;
    }

    /**
     * @param SearchRowBasic $searchRowBasic
     * @return \Nzolt\NetSuite\CustomSearchRowBasic
     */
    public function setSearchRowBasic($searchRowBasic)
    {
      $this->searchRowBasic = $searchRowBasic;
      return $this;
    }

}
