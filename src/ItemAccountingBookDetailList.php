<?php

namespace Nzolt\NetSuite;

class ItemAccountingBookDetailList
{

    /**
     * @var ItemAccountingBookDetail[] $itemAccountingBookDetail
     */
    protected $itemAccountingBookDetail = null;

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
     * @return ItemAccountingBookDetail[]
     */
    public function getItemAccountingBookDetail()
    {
      return $this->itemAccountingBookDetail;
    }

    /**
     * @param ItemAccountingBookDetail[] $itemAccountingBookDetail
     * @return \Nzolt\NetSuite\ItemAccountingBookDetailList
     */
    public function setItemAccountingBookDetail(array $itemAccountingBookDetail = null)
    {
      $this->itemAccountingBookDetail = $itemAccountingBookDetail;
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
     * @return \Nzolt\NetSuite\ItemAccountingBookDetailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
