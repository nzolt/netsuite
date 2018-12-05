<?php

namespace Nzolt\NetSuite;

class InitializeRequest
{

    /**
     * @var InitializeRecord $initializeRecord
     */
    protected $initializeRecord = null;

    /**
     * @param InitializeRecord $initializeRecord
     */
    public function __construct($initializeRecord)
    {
      $this->initializeRecord = $initializeRecord;
    }

    /**
     * @return InitializeRecord
     */
    public function getInitializeRecord()
    {
      return $this->initializeRecord;
    }

    /**
     * @param InitializeRecord $initializeRecord
     * @return \Nzolt\NetSuite\InitializeRequest
     */
    public function setInitializeRecord($initializeRecord)
    {
      $this->initializeRecord = $initializeRecord;
      return $this;
    }

}
