<?php

namespace Nzolt\NetSuite;

class GetCustomizationIdRequest
{

    /**
     * @var CustomizationType $customizationType
     */
    protected $customizationType = null;

    /**
     * @var boolean $includeInactives
     */
    protected $includeInactives = null;

    /**
     * @param CustomizationType $customizationType
     * @param boolean $includeInactives
     */
    public function __construct($customizationType, $includeInactives)
    {
      $this->customizationType = $customizationType;
      $this->includeInactives = $includeInactives;
    }

    /**
     * @return CustomizationType
     */
    public function getCustomizationType()
    {
      return $this->customizationType;
    }

    /**
     * @param CustomizationType $customizationType
     * @return \Nzolt\NetSuite\GetCustomizationIdRequest
     */
    public function setCustomizationType($customizationType)
    {
      $this->customizationType = $customizationType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeInactives()
    {
      return $this->includeInactives;
    }

    /**
     * @param boolean $includeInactives
     * @return \Nzolt\NetSuite\GetCustomizationIdRequest
     */
    public function setIncludeInactives($includeInactives)
    {
      $this->includeInactives = $includeInactives;
      return $this;
    }

}
