<?php

namespace Nzolt\NetSuite;

class InterCompanyTransferOrderItemList
{

    /**
     * @var InterCompanyTransferOrderItem[] $item
     */
    protected $item = null;

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
     * @return InterCompanyTransferOrderItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param InterCompanyTransferOrderItem[] $item
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItemList
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
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
     * @return \Nzolt\NetSuite\InterCompanyTransferOrderItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
