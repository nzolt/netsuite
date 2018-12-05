<?php

namespace Nzolt\NetSuite;

class ItemsList
{

    /**
     * @var RecordRef[] $items
     */
    protected $items = null;

    /**
     * @param RecordRef[] $items
     */
    public function __construct(array $items)
    {
      $this->items = $items;
    }

    /**
     * @return RecordRef[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param RecordRef[] $items
     * @return \Nzolt\NetSuite\ItemsList
     */
    public function setItems(array $items)
    {
      $this->items = $items;
      return $this;
    }

}
