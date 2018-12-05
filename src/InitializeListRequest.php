<?php

namespace Nzolt\NetSuite;

class InitializeListRequest
{

    /**
     * @var InitializeRecord[] $initializeRecord
     */
    protected $initializeRecord = null;

    /**
     * @param InitializeRecord[] $initializeRecord
     */
    public function __construct(array $initializeRecord)
    {
      $this->initializeRecord = $initializeRecord;
    }

    /**
     * @return InitializeRecord[]
     */
    public function getInitializeRecord()
    {
      return $this->initializeRecord;
    }

    /**
     * @param InitializeRecord[] $initializeRecord
     * @return \Nzolt\NetSuite\InitializeListRequest
     */
    public function setInitializeRecord(array $initializeRecord)
    {
      $this->initializeRecord = $initializeRecord;
      return $this;
    }

}
