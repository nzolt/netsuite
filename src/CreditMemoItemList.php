<?php

namespace Nzolt\NetSuite;

class CreditMemoItemList
{

    /**
     * @var CreditMemoItem[] $item
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
     * @return CreditMemoItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CreditMemoItem[] $item
     * @return \Nzolt\NetSuite\CreditMemoItemList
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
     * @return \Nzolt\NetSuite\CreditMemoItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
