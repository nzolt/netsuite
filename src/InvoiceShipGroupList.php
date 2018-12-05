<?php

namespace Nzolt\NetSuite;

class InvoiceShipGroupList
{

    /**
     * @var TransactionShipGroup[] $shipGroup
     */
    protected $shipGroup = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return TransactionShipGroup[]
     */
    public function getShipGroup()
    {
      return $this->shipGroup;
    }

    /**
     * @param TransactionShipGroup[] $shipGroup
     * @return \Nzolt\NetSuite\InvoiceShipGroupList
     */
    public function setShipGroup(array $shipGroup = null)
    {
      $this->shipGroup = $shipGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\InvoiceShipGroupList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
