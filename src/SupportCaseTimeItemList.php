<?php

namespace Nzolt\NetSuite;

class SupportCaseTimeItemList
{

    /**
     * @var TimeItem[] $timeItem
     */
    protected $timeItem = null;

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
     * @return TimeItem[]
     */
    public function getTimeItem()
    {
      return $this->timeItem;
    }

    /**
     * @param TimeItem[] $timeItem
     * @return \Nzolt\NetSuite\SupportCaseTimeItemList
     */
    public function setTimeItem(array $timeItem = null)
    {
      $this->timeItem = $timeItem;
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
     * @return \Nzolt\NetSuite\SupportCaseTimeItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
