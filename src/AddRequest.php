<?php

namespace Nzolt\NetSuite;

class AddRequest
{

    /**
     * @var Record $record
     */
    protected $record = null;

    /**
     * @param Record $record
     */
    public function __construct($record)
    {
      $this->record = $record;
    }

    /**
     * @return Record
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param Record $record
     * @return \Nzolt\NetSuite\AddRequest
     */
    public function setRecord($record)
    {
      $this->record = $record;
      return $this;
    }

}
