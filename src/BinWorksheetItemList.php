<?php

namespace Nzolt\NetSuite;

class BinWorksheetItemList
{

    /**
     * @var BinWorksheetItem[] $item
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
     * @return BinWorksheetItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param BinWorksheetItem[] $item
     * @return \Nzolt\NetSuite\BinWorksheetItemList
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
     * @return \Nzolt\NetSuite\BinWorksheetItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
