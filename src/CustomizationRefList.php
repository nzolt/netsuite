<?php

namespace Nzolt\NetSuite;

class CustomizationRefList
{

    /**
     * @var CustomizationRef[] $customizationRef
     */
    protected $customizationRef = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomizationRef[]
     */
    public function getCustomizationRef()
    {
      return $this->customizationRef;
    }

    /**
     * @param CustomizationRef[] $customizationRef
     * @return \Nzolt\NetSuite\CustomizationRefList
     */
    public function setCustomizationRef(array $customizationRef = null)
    {
      $this->customizationRef = $customizationRef;
      return $this;
    }

}
