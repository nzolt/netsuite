<?php

namespace Nzolt\NetSuite;

class RecordRefList
{

    /**
     * @var RecordRef[] $recordRef
     */
    protected $recordRef = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef[]
     */
    public function getRecordRef()
    {
      return $this->recordRef;
    }

    /**
     * @param RecordRef[] $recordRef
     * @return \Nzolt\NetSuite\RecordRefList
     */
    public function setRecordRef(array $recordRef = null)
    {
      $this->recordRef = $recordRef;
      return $this;
    }

}
