<?php

namespace Nzolt\NetSuite;

class CustomRecordTypePermissions
{

    /**
     * @var RecordRef $permittedRole
     */
    protected $permittedRole = null;

    /**
     * @var CustomRecordTypePermissionsPermittedLevel $permittedLevel
     */
    protected $permittedLevel = null;

    /**
     * @var CustomRecordTypePermissionsRestriction $restriction
     */
    protected $restriction = null;

    /**
     * @var RecordRef $defaultForm
     */
    protected $defaultForm = null;

    /**
     * @var boolean $restrictForm
     */
    protected $restrictForm = null;

    /**
     * @var RecordRef $searchForm
     */
    protected $searchForm = null;

    /**
     * @var RecordRef $searchResults
     */
    protected $searchResults = null;

    /**
     * @var RecordRef $listView
     */
    protected $listView = null;

    /**
     * @var boolean $listViewRestricted
     */
    protected $listViewRestricted = null;

    /**
     * @var RecordRef $dashboardView
     */
    protected $dashboardView = null;

    /**
     * @var boolean $restrictDashboardView
     */
    protected $restrictDashboardView = null;

    /**
     * @var RecordRef $sublistView
     */
    protected $sublistView = null;

    /**
     * @var boolean $restrictSublistView
     */
    protected $restrictSublistView = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getPermittedRole()
    {
      return $this->permittedRole;
    }

    /**
     * @param RecordRef $permittedRole
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setPermittedRole($permittedRole)
    {
      $this->permittedRole = $permittedRole;
      return $this;
    }

    /**
     * @return CustomRecordTypePermissionsPermittedLevel
     */
    public function getPermittedLevel()
    {
      return $this->permittedLevel;
    }

    /**
     * @param CustomRecordTypePermissionsPermittedLevel $permittedLevel
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setPermittedLevel($permittedLevel)
    {
      $this->permittedLevel = $permittedLevel;
      return $this;
    }

    /**
     * @return CustomRecordTypePermissionsRestriction
     */
    public function getRestriction()
    {
      return $this->restriction;
    }

    /**
     * @param CustomRecordTypePermissionsRestriction $restriction
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setRestriction($restriction)
    {
      $this->restriction = $restriction;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultForm()
    {
      return $this->defaultForm;
    }

    /**
     * @param RecordRef $defaultForm
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setDefaultForm($defaultForm)
    {
      $this->defaultForm = $defaultForm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictForm()
    {
      return $this->restrictForm;
    }

    /**
     * @param boolean $restrictForm
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setRestrictForm($restrictForm)
    {
      $this->restrictForm = $restrictForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchForm()
    {
      return $this->searchForm;
    }

    /**
     * @param RecordRef $searchForm
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setSearchForm($searchForm)
    {
      $this->searchForm = $searchForm;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchResults()
    {
      return $this->searchResults;
    }

    /**
     * @param RecordRef $searchResults
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setSearchResults($searchResults)
    {
      $this->searchResults = $searchResults;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getListView()
    {
      return $this->listView;
    }

    /**
     * @param RecordRef $listView
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setListView($listView)
    {
      $this->listView = $listView;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getListViewRestricted()
    {
      return $this->listViewRestricted;
    }

    /**
     * @param boolean $listViewRestricted
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setListViewRestricted($listViewRestricted)
    {
      $this->listViewRestricted = $listViewRestricted;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDashboardView()
    {
      return $this->dashboardView;
    }

    /**
     * @param RecordRef $dashboardView
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setDashboardView($dashboardView)
    {
      $this->dashboardView = $dashboardView;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictDashboardView()
    {
      return $this->restrictDashboardView;
    }

    /**
     * @param boolean $restrictDashboardView
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setRestrictDashboardView($restrictDashboardView)
    {
      $this->restrictDashboardView = $restrictDashboardView;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSublistView()
    {
      return $this->sublistView;
    }

    /**
     * @param RecordRef $sublistView
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setSublistView($sublistView)
    {
      $this->sublistView = $sublistView;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictSublistView()
    {
      return $this->restrictSublistView;
    }

    /**
     * @param boolean $restrictSublistView
     * @return \Nzolt\NetSuite\CustomRecordTypePermissions
     */
    public function setRestrictSublistView($restrictSublistView)
    {
      $this->restrictSublistView = $restrictSublistView;
      return $this;
    }

}
