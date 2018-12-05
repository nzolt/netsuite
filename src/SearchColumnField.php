<?php

namespace Nzolt\NetSuite;

abstract class SearchColumnField
{

    /**
     * @var string $customLabel
     */
    protected $customLabel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomLabel()
    {
      return $this->customLabel;
    }

    /**
     * @param string $customLabel
     * @return \Nzolt\NetSuite\SearchColumnField
     */
    public function setCustomLabel($customLabel)
    {
      $this->customLabel = $customLabel;
      return $this;
    }

}
