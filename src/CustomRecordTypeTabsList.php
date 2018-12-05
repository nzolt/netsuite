<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeTabsList
{

    /**
     * @var CustomRecordTypeTabs[] $tabs
     */
    protected $tabs = null;

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
     * @return CustomRecordTypeTabs[]
     */
    public function getTabs()
    {
      return $this->tabs;
    }

    /**
     * @param CustomRecordTypeTabs[] $tabs
     * @return \Nzolt\NetSuite\CustomRecordTypeTabsList
     */
    public function setTabs(array $tabs = null)
    {
      $this->tabs = $tabs;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeTabsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
