<?php

namespace Nzolt\NetSuite;

class EstimateItemList
{

    /**
     * @var EstimateItem[] $item
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
     * @return EstimateItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param EstimateItem[] $item
     * @return \Nzolt\NetSuite\EstimateItemList
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
     * @return \Nzolt\NetSuite\EstimateItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
