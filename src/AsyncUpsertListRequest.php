<?php

namespace Nzolt\NetSuite;

class AsyncUpsertListRequest
{

    /**
     * @var Record[] $record
     */
    protected $record = null;

    /**
     * @param Record[] $record
     */
    public function __construct(array $record)
    {
      $this->record = $record;
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
     * @return \Nzolt\NetSuite\AsyncUpsertListRequest
     */
    public function setRecord(array $record)
    {
      $this->record = $record;
      return $this;
    }

}
