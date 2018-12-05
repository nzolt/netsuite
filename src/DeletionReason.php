<?php

namespace Nzolt\NetSuite;

class DeletionReason
{

    /**
     * @var RecordRef $deletionReasonCode
     */
    protected $deletionReasonCode = null;

    /**
     * @var string $deletionReasonMemo
     */
    protected $deletionReasonMemo = null;

    /**
     * @param RecordRef $deletionReasonCode
     */
    public function __construct($deletionReasonCode)
    {
      $this->deletionReasonCode = $deletionReasonCode;
    }

    /**
     * @return RecordRef
     */
    public function getDeletionReasonCode()
    {
      return $this->deletionReasonCode;
    }

    /**
     * @param RecordRef $deletionReasonCode
     * @return \Nzolt\NetSuite\DeletionReason
     */
    public function setDeletionReasonCode($deletionReasonCode)
    {
      $this->deletionReasonCode = $deletionReasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeletionReasonMemo()
    {
      return $this->deletionReasonMemo;
    }

    /**
     * @param string $deletionReasonMemo
     * @return \Nzolt\NetSuite\DeletionReason
     */
    public function setDeletionReasonMemo($deletionReasonMemo)
    {
      $this->deletionReasonMemo = $deletionReasonMemo;
      return $this;
    }

}
