<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeTabs
{

    /**
     * @var string $tabTitle
     */
    protected $tabTitle = null;

    /**
     * @var RecordRef $tabParent
     */
    protected $tabParent = null;

    /**
     * @var LanguageValueList $tabTitleLanguageValueList
     */
    protected $tabTitleLanguageValueList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTabTitle()
    {
      return $this->tabTitle;
    }

    /**
     * @param string $tabTitle
     * @return \Nzolt\NetSuite\CustomRecordTypeTabs
     */
    public function setTabTitle($tabTitle)
    {
      $this->tabTitle = $tabTitle;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTabParent()
    {
      return $this->tabParent;
    }

    /**
     * @param RecordRef $tabParent
     * @return \Nzolt\NetSuite\CustomRecordTypeTabs
     */
    public function setTabParent($tabParent)
    {
      $this->tabParent = $tabParent;
      return $this;
    }

    /**
     * @return LanguageValueList
     */
    public function getTabTitleLanguageValueList()
    {
      return $this->tabTitleLanguageValueList;
    }

    /**
     * @param LanguageValueList $tabTitleLanguageValueList
     * @return \Nzolt\NetSuite\CustomRecordTypeTabs
     */
    public function setTabTitleLanguageValueList($tabTitleLanguageValueList)
    {
      $this->tabTitleLanguageValueList = $tabTitleLanguageValueList;
      return $this;
    }

}
