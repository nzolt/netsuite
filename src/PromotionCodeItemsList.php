<?php

namespace Nzolt\NetSuite;

class PromotionCodeItemsList
{

    /**
     * @var PromotionCodeItems[] $items
     */
    protected $items = null;

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
     * @return PromotionCodeItems[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param PromotionCodeItems[] $items
     * @return \Nzolt\NetSuite\PromotionCodeItemsList
     */
    public function setItems(array $items = null)
    {
      $this->items = $items;
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
     * @return \Nzolt\NetSuite\PromotionCodeItemsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
