<?php

namespace Nzolt\NetSuite;

class GetSavedSearchRequest
{

    /**
     * @var GetSavedSearchRecord $record
     */
    protected $record = null;

    /**
     * @param GetSavedSearchRecord $record
     */
    public function __construct($record)
    {
      $this->record = $record;
    }

    /**
     * @return GetSavedSearchRecord
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param GetSavedSearchRecord $record
     * @return \Nzolt\NetSuite\GetSavedSearchRequest
     */
    public function setRecord($record)
    {
      $this->record = $record;
      return $this;
    }

}
