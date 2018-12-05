<?php

namespace Nzolt\NetSuite;

class SerializedInventoryItemNumbers
{

    /**
     * @var RecordRef $serialNumber
     */
    protected $serialNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param RecordRef $serialNumber
     * @return \Nzolt\NetSuite\SerializedInventoryItemNumbers
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

}
