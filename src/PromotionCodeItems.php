<?php

namespace Nzolt\NetSuite;

class PromotionCodeItems
{

    /**
     * @var RecordRef $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RecordRef $item
     * @return \Nzolt\NetSuite\PromotionCodeItems
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

}
