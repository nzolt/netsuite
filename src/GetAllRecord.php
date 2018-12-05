<?php

namespace Nzolt\NetSuite;

class GetAllRecord
{

    /**
     * @var GetAllRecordType $recordType
     */
    protected $recordType = null;

    /**
     * @param GetAllRecordType $recordType
     */
    public function __construct($recordType)
    {
      $this->recordType = $recordType;
    }

    /**
     * @return GetAllRecordType
     */
    public function getRecordType()
    {
      return $this->recordType;
    }

    /**
     * @param GetAllRecordType $recordType
     * @return \Nzolt\NetSuite\GetAllRecord
     */
    public function setRecordType($recordType)
    {
      $this->recordType = $recordType;
      return $this;
    }

}
