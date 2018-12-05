<?php

namespace Nzolt\NetSuite;

class CustomizationType
{

    /**
     * @var GetCustomizationType $getCustomizationType
     */
    protected $getCustomizationType = null;

    /**
     * @param GetCustomizationType $getCustomizationType
     */
    public function __construct($getCustomizationType)
    {
      $this->getCustomizationType = $getCustomizationType;
    }

    /**
     * @return GetCustomizationType
     */
    public function getGetCustomizationType()
    {
      return $this->getCustomizationType;
    }

    /**
     * @param GetCustomizationType $getCustomizationType
     * @return \Nzolt\NetSuite\CustomizationType
     */
    public function setGetCustomizationType($getCustomizationType)
    {
      $this->getCustomizationType = $getCustomizationType;
      return $this;
    }

}
