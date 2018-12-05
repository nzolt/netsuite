<?php

namespace Nzolt\NetSuite;

class DeletedRecord
{

    /**
     * @var \DateTime $deletedDate
     */
    protected $deletedDate = null;

    /**
     * @var BaseRef $record
     */
    protected $record = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDeletedDate()
    {
      if ($this->deletedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->deletedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $deletedDate
     * @return \Nzolt\NetSuite\DeletedRecord
     */
    public function setDeletedDate(\DateTime $deletedDate = null)
    {
      if ($deletedDate == null) {
       $this->deletedDate = null;
      } else {
        $this->deletedDate = $deletedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return BaseRef
     */
    public function getRecord()
    {
      return $this->record;
    }

    /**
     * @param BaseRef $record
     * @return \Nzolt\NetSuite\DeletedRecord
     */
    public function setRecord($record)
    {
      $this->record = $record;
      return $this;
    }

}
