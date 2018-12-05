<?php

namespace Nzolt\NetSuite;

class GetAllRequest
{

    /**
     * @var GetAllRecord $record
     */
    protected $record = null;

    /**
     * @param GetAllRecord $record
     */
    public function __construct($record)
    {
      $this->record = $record;
    }

    /**
     * @return GetAllRecord
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param GetAllRecord $record
     * @return \Nzolt\NetSuite\GetAllRequest
     */
    public function setRecord($record)
    {
      $this->record = $record;
      return $this;
    }

}
