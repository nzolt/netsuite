<?php

namespace Nzolt\NetSuite;

class DeletedRecordList
{

    /**
     * @var DeletedRecord[] $deletedRecord
     */
    protected $deletedRecord = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeletedRecord[]
     */
    public function getDeletedRecord()
    {
      return $this->deletedRecord;
    }

    /**
     * @param DeletedRecord[] $deletedRecord
     * @return \Nzolt\NetSuite\DeletedRecordList
     */
    public function setDeletedRecord(array $deletedRecord = null)
    {
      $this->deletedRecord = $deletedRecord;
      return $this;
    }

}
