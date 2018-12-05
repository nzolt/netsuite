<?php

namespace Nzolt\NetSuite;

class DetachBasicReference extends DetachReference
{

    /**
     * @var BaseRef $detachedRecord
     */
    protected $detachedRecord = null;

    /**
     * @param BaseRef $detachFrom
     * @param BaseRef $detachedRecord
     */
    public function __construct($detachFrom, $detachedRecord)
    {
      parent::__construct($detachFrom);
      $this->detachedRecord = $detachedRecord;
    }

    /**
     * @return BaseRef
     */
    public function getDetachedRecord()
    {
      return $this->detachedRecord;
    }

    /**
     * @param BaseRef $detachedRecord
     * @return \Nzolt\NetSuite\DetachBasicReference
     */
    public function setDetachedRecord($detachedRecord)
    {
      $this->detachedRecord = $detachedRecord;
      return $this;
    }

}
