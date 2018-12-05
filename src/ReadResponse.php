<?php

namespace Nzolt\NetSuite;

class ReadResponse
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var Record $record
     */
    protected $record = null;

    /**
     * @param Status $status
     */
    public function __construct($status)
    {
      $this->status = $status;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\ReadResponse
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
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
     * @return \Nzolt\NetSuite\ReadResponse
     */
    public function setRecord($record)
    {
      $this->record = $record;
      return $this;
    }

}
