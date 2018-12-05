<?php

namespace Nzolt\NetSuite;

class ItemBinNumberSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchDoubleField $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var SearchDoubleField $quantityOnHand
     */
    protected $quantityOnHand = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchMultiSelectField $binNumber
     * @return \Nzolt\NetSuite\ItemBinNumberSearchBasic
     */
    public function setBinNumber($binNumber)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\ItemBinNumberSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityAvailable
     * @return \Nzolt\NetSuite\ItemBinNumberSearchBasic
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return \Nzolt\NetSuite\ItemBinNumberSearchBasic
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

}
