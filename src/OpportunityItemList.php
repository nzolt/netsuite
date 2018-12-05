<?php

namespace Nzolt\NetSuite;

class OpportunityItemList
{

    /**
     * @var OpportunityItem[] $item
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
     * @return OpportunityItem[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param OpportunityItem[] $item
     * @return \Nzolt\NetSuite\OpportunityItemList
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
     * @return \Nzolt\NetSuite\OpportunityItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
