<?php

namespace Nzolt\NetSuite;

abstract class Record
{

    /**
     * @var NullField $nullFieldList
     */
    protected $nullFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NullField
     */
    public function getNullFieldList()
    {
      return $this->nullFieldList;
    }

    /**
     * @param NullField $nullFieldList
     * @return \Nzolt\NetSuite\Record
     */
    public function setNullFieldList($nullFieldList)
    {
      $this->nullFieldList = $nullFieldList;
      return $this;
    }

}
