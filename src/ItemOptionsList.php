<?php

namespace Nzolt\NetSuite;

class ItemOptionsList
{

    /**
     * @var RecordRef[] $itemOptions
     */
    protected $itemOptions = null;

    /**
     * @param RecordRef[] $itemOptions
     */
    public function __construct(array $itemOptions)
    {
      $this->itemOptions = $itemOptions;
    }

    /**
     * @return RecordRef[]
     */
    public function getItemOptions()
    {
      return $this->itemOptions;
    }

    /**
     * @param RecordRef[] $itemOptions
     * @return \Nzolt\NetSuite\ItemOptionsList
     */
    public function setItemOptions(array $itemOptions)
    {
      $this->itemOptions = $itemOptions;
      return $this;
    }

}
