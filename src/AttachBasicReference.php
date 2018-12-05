<?php

namespace Nzolt\NetSuite;

class AttachBasicReference extends AttachReference
{

    /**
     * @var BaseRef $attachedRecord
     */
    protected $attachedRecord = null;

    /**
     * @param BaseRef $attachTo
     * @param BaseRef $attachedRecord
     */
    public function __construct($attachTo, $attachedRecord)
    {
      parent::__construct($attachTo);
      $this->attachedRecord = $attachedRecord;
    }

    /**
     * @return BaseRef
     */
    public function getAttachedRecord()
    {
      return $this->attachedRecord;
    }

    /**
     * @param BaseRef $attachedRecord
     * @return \Nzolt\NetSuite\AttachBasicReference
     */
    public function setAttachedRecord($attachedRecord)
    {
      $this->attachedRecord = $attachedRecord;
      return $this;
    }

}
