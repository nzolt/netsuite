<?php

namespace Nzolt\NetSuite;

class CheckItemList
{

    /**
     * @var CheckItem[] $item
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
     * @return CheckItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CheckItem[] $item
     * @return \Nzolt\NetSuite\CheckItemList
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
     * @return \Nzolt\NetSuite\CheckItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
