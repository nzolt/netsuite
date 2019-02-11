<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomRecordTypePermissionsPermittedLevel;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomRecordTypePermissionsRestriction;

/**
 * CustomRecordTypePermissions
 */
class CustomRecordTypePermissions {

    /**
     * @access public
     * @var RecordRef
     */
    public $permittedRole;

    /**
     * @access public
     * @var CustomRecordTypePermissionsPermittedLevel
     */
    protected $permittedLevel;

    /**
     * @access public
     * @var CustomRecordTypePermissionsRestriction
     */
    protected $restriction;

    /**
     * @access public
     * @var RecordRef
     */
    public $defaultForm;

    /**
     * @access public
     * @var boolean
     */
    protected $restrictForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $searchForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $searchResults;

    /**
     * @access public
     * @var RecordRef
     */
    public $listView;

    /**
     * @access public
     * @var boolean
     */
    protected $listViewRestricted;

    /**
     * @access public
     * @var RecordRef
     */
    public $dashboardView;

    /**
     * @access public
     * @var boolean
     */
    protected $restrictDashboardView;

    /**
     * @access public
     * @var RecordRef
     */
    public $sublistView;

    /**
     * @access public
     * @var boolean
     */
    protected $restrictSublistView;

    static $paramtypesmap = array(
    	"permittedRole" => "RecordRef",
    	"permittedLevel" => "CustomRecordTypePermissionsPermittedLevel",
    	"restriction" => "CustomRecordTypePermissionsRestriction",
    	"defaultForm" => "RecordRef",
    	"restrictForm" => "boolean",
    	"searchForm" => "RecordRef",
    	"searchResults" => "RecordRef",
    	"listView" => "RecordRef",
    	"listViewRestricted" => "boolean",
    	"dashboardView" => "RecordRef",
    	"restrictDashboardView" => "boolean",
    	"sublistView" => "RecordRef",
    	"restrictSublistView" => "boolean",
    );

    /**
     * Set permittedLevel
     *
     * @param CustomRecordTypePermissionsPermittedLevel $permittedLevel
     * @return CustomRecordTypePermissions
     */
    public function setPermittedLevel(CustomRecordTypePermissionsPermittedLevel $permittedLevel) {
        $this->permittedLevel = $permittedLevel;
        return $this;
    }

    /**
     * Get permittedLevel
     *
     * @return CustomRecordTypePermissionsPermittedLevel
     */
    public function getPermittedLevel() {
        return $this->permittedLevel;
    }


    /**
     * Set restriction
     *
     * @param CustomRecordTypePermissionsRestriction $restriction
     * @return CustomRecordTypePermissions
     */
    public function setRestriction(CustomRecordTypePermissionsRestriction $restriction) {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Get restriction
     *
     * @return CustomRecordTypePermissionsRestriction
     */
    public function getRestriction() {
        return $this->restriction;
    }


    /**
     * Set restrictForm
     *
     * @param boolean $restrictForm
     * @return CustomRecordTypePermissions
     */
    public function setRestrictForm($restrictForm) {
        $this->restrictForm = $restrictForm;
        return $this;
    }

    /**
     * Get restrictForm
     *
     * @return boolean
     */
    public function getRestrictForm() {
        return $this->restrictForm;
    }


    /**
     * Set listViewRestricted
     *
     * @param boolean $listViewRestricted
     * @return CustomRecordTypePermissions
     */
    public function setListViewRestricted($listViewRestricted) {
        $this->listViewRestricted = $listViewRestricted;
        return $this;
    }

    /**
     * Get listViewRestricted
     *
     * @return boolean
     */
    public function getListViewRestricted() {
        return $this->listViewRestricted;
    }


    /**
     * Set restrictDashboardView
     *
     * @param boolean $restrictDashboardView
     * @return CustomRecordTypePermissions
     */
    public function setRestrictDashboardView($restrictDashboardView) {
        $this->restrictDashboardView = $restrictDashboardView;
        return $this;
    }

    /**
     * Get restrictDashboardView
     *
     * @return boolean
     */
    public function getRestrictDashboardView() {
        return $this->restrictDashboardView;
    }


    /**
     * Set restrictSublistView
     *
     * @param boolean $restrictSublistView
     * @return CustomRecordTypePermissions
     */
    public function setRestrictSublistView($restrictSublistView) {
        $this->restrictSublistView = $restrictSublistView;
        return $this;
    }

    /**
     * Get restrictSublistView
     *
     * @return boolean
     */
    public function getRestrictSublistView() {
        return $this->restrictSublistView;
    }

}