<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeChildren
{

    /**
     * @var string $childDescr
     */
    protected $childDescr = null;

    /**
     * @var RecordRef $childTab
     */
    protected $childTab = null;

    
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
     * @return \Nzolt\NetSuite\CustomRecordTypeChildren
     */
    public function setChildDescr($childDescr)
    {
      $this->childDescr = $childDescr;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChildTab()
    {
      return $this->childTab;
    }

    /**
     * @param RecordRef $childTab
     * @return \Nzolt\NetSuite\CustomRecordTypeChildren
     */
    public function setChildTab($childTab)
    {
      $this->childTab = $childTab;
      return $this;
    }

}
