<?php

namespace Nzolt\NetSuite;

class ItemAvailabilityList
{

    /**
     * @var ItemAvailability[] $itemAvailability
     */
    protected $itemAvailability = null;

    /**
     * @param ItemAvailability[] $itemAvailability
     */
    public function __construct(array $itemAvailability)
    {
      $this->itemAvailability = $itemAvailability;
    }

    /**
     * @return ItemAvailability[]
     */
    public function getItemAvailability()
    {
      return $this->itemAvailability;
    }

    /**
     * @param ItemAvailability[] $itemAvailability
     * @return \Nzolt\NetSuite\ItemAvailabilityList
     */
    public function setItemAvailability(array $itemAvailability)
    {
      $this->itemAvailability = $itemAvailability;
      return $this;
    }

}
