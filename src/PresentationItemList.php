<?php

namespace Nzolt\NetSuite;

class PresentationItemList
{

    /**
     * @var PresentationItem[] $presentationItem
     */
    protected $presentationItem = null;

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
     * @return PresentationItem[]
     */
    public function getPresentationItem()
    {
      return $this->presentationItem;
    }

    /**
     * @param PresentationItem[] $presentationItem
     * @return \Nzolt\NetSuite\PresentationItemList
     */
    public function setPresentationItem(array $presentationItem = null)
    {
      $this->presentationItem = $presentationItem;
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
     * @return \Nzolt\NetSuite\PresentationItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
