<?php

namespace Nzolt\NetSuite;

class ItemBinNumberSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnDoubleField[] $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var SearchColumnDoubleField[] $quantityOnHand
     */
    protected $quantityOnHand = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchColumnSelectField[] $binNumber
     * @return \Nzolt\NetSuite\ItemBinNumberSearchRowBasic
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\ItemBinNumberSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityAvailable
     * @return \Nzolt\NetSuite\ItemBinNumberSearchRowBasic
     */
    public function setQuantityAvailable(array $quantityAvailable = null)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnHand
     * @return \Nzolt\NetSuite\ItemBinNumberSearchRowBasic
     */
    public function setQuantityOnHand(array $quantityOnHand = null)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

}
