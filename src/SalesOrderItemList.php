<?php

namespace Nzolt\NetSuite;

class SalesOrderItemList
{

    /**
     * @var SalesOrderItem[] $item
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
     * @return SalesOrderItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SalesOrderItem[] $item
     * @return \Nzolt\NetSuite\SalesOrderItemList
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
     * @return \Nzolt\NetSuite\SalesOrderItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
