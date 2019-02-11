<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeTabs
 */
class CustomRecordTypeTabs {

    /**
     * @access public
     * @var string
     */
    protected $tabTitle;

    /**
     * @access public
     * @var RecordRef
     */
    public $tabParent;

    /**
     * @access public
     * @var LanguageValueList
     */
    protected $tabTitleLanguageValueList;

    static $paramtypesmap = array(
    	"tabTitle" => "string",
    	"tabParent" => "RecordRef",
    	"tabTitleLanguageValueList" => "LanguageValueList",
    );

    /**
     * Set tabTitle
     *
     * @param string $tabTitle
     * @return CustomRecordTypeTabs
     */
    public function setTabTitle($tabTitle) {
        $this->tabTitle = $tabTitle;
        return $this;
    }

    /**
     * Get tabTitle
     *
     * @return string
     */
    public function getTabTitle() {
        return $this->tabTitle;
    }


    /**
     * Set tabTitleLanguageValueList
     *
     * @param LanguageValueList $tabTitleLanguageValueList
     * @return CustomRecordTypeTabs
     */
    public function setTabTitleLanguageValueList(LanguageValueList $tabTitleLanguageValueList) {
        $this->tabTitleLanguageValueList = $tabTitleLanguageValueList;
        return $this;
    }

    /**
     * Get tabTitleLanguageValueList
     *
     * @return LanguageValueList
     */
    public function getTabTitleLanguageValueList() {
        return $this->tabTitleLanguageValueList;
    }

}