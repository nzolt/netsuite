<?php

namespace Nzolt\NetSuite;

class InboundShipmentItemsList
{

    /**
     * @var InboundShipmentItems[] $inboundShipmentItems
     */
    protected $inboundShipmentItems = null;

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
     * @return InboundShipmentItems[]
     */
    public function getInboundShipmentItems()
    {
      return $this->inboundShipmentItems;
    }

    /**
     * @param InboundShipmentItems[] $inboundShipmentItems
     * @return \Nzolt\NetSuite\InboundShipmentItemsList
     */
    public function setInboundShipmentItems(array $inboundShipmentItems = null)
    {
      $this->inboundShipmentItems = $inboundShipmentItems;
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
     * @return \Nzolt\NetSuite\InboundShipmentItemsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
