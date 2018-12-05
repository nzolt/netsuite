<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeParents
{

    /**
     * @var string $childDescr
     */
    protected $childDescr = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getChildDescr()
    {
      return $this->childDescr;
    }

    /**
     * @param string $childDescr
     * @return \Nzolt\NetSuite\CustomRecordTypeParents
     */
    public function setChildDescr($childDescr)
    {
      $this->childDescr = $childDescr;
      return $this;
    }

}
