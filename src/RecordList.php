<?php

namespace Nzolt\NetSuite;

class RecordList
{

    /**
     * @var Record[] $record
     */
    protected $record = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Record[]
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param Record[] $record
     * @return \Nzolt\NetSuite\RecordList
     */
    public function setRecord(array $record = null)
    {
      $this->record = $record;
      return $this;
    }

}
