<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDisplayType;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDynamicDefault;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationAccessLevel;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationSearchLevel;

/**
 * CrmCustomField
 */
class CrmCustomField extends CustomFieldType {

    /**
     * @access public
     * @var string
     */
    protected $label;

    /**
     * @access public
     * @var RecordRef
     */
    public $owner;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $selectRecordType;

    /**
     * @access public
     * @var boolean
     */
    protected $storeValue;

    /**
     * @access public
     * @var boolean
     */
    protected $showInList;

    /**
     * @access public
     * @var boolean
     */
    protected $globalSearch;

    /**
     * @access public
     * @var boolean
     */
    protected $isParent;

    /**
     * @access public
     * @var RecordRef
     */
    public $insertBefore;

    /**
     * @access public
     * @var RecordRef
     */
    public $subtab;

    /**
     * @access public
     * @var CustomizationDisplayType
     */
    protected $displayType;

    /**
     * @access public
     * @var integer
     */
    protected $displayWidth;

    /**
     * @access public
     * @var integer
     */
    protected $displayHeight;

    /**
     * @access public
     * @var string
     */
    protected $help;

    /**
     * @access public
     * @var RecordRef
     */
    public $parentSubtab;

    /**
     * @access public
     * @var string
     */
    protected $linkText;

    /**
     * @access public
     * @var boolean
     */
    protected $isMandatory;

    /**
     * @access public
     * @var boolean
     */
    protected $checkSpelling;

    /**
     * @access public
     * @var integer
     */
    protected $maxLength;

    /**
     * @access public
     * @var float
     */
    protected $minValue;

    /**
     * @access public
     * @var float
     */
    protected $maxValue;

    /**
     * @access public
     * @var boolean
     */
    protected $defaultChecked;

    /**
     * @access public
     * @var string
     */
    protected $defaultValue;

    /**
     * @access public
     * @var boolean
     */
    protected $isFormula;

    /**
     * @access public
     * @var RecordRef
     */
    public $defaultSelection;

    /**
     * @access public
     * @var CustomizationDynamicDefault
     */
    protected $dynamicDefault;

    /**
     * @access public
     * @var RecordRef
     */
    public $searchDefault;

    /**
     * @access public
     * @var RecordRef
     */
    public $searchCompareField;

    /**
     * @access public
     * @var RecordRef
     */
    public $sourceList;

    /**
     * @access public
     * @var RecordRef
     */
    public $sourceFrom;

    /**
     * @access public
     * @var RecordRef
     */
    public $sourceFilterBy;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToTask;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToMfgProjectTask;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToProjectTask;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToPhoneCall;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToEvent;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToCase;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToCampaign;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesPerKeyword;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToSolution;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToIssue;

    /**
     * @access public
     * @var boolean
     */
    protected $availableExternally;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToSso;

    /**
     * @access public
     * @var boolean
     */
    protected $showIssueChanges;

    /**
     * @access public
     * @var CrmCustomFieldFilterList
     */
    protected $filterList;

    /**
     * @access public
     * @var CustomizationAccessLevel
     */
    protected $accessLevel;

    /**
     * @access public
     * @var CustomizationSearchLevel
     */
    protected $searchLevel;

    /**
     * @access public
     * @var CustomFieldRoleAccessList
     */
    protected $roleAccessList;

    /**
     * @access public
     * @var CustomFieldDepartmentAccessList
     */
    protected $deptAccessList;

    /**
     * @access public
     * @var CustomFieldSubAccessList
     */
    protected $subAccessList;

    /**
     * @access public
     * @var CustomFieldTranslationsList
     */
    protected $translationsList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"label" => "string",
    	"owner" => "RecordRef",
    	"description" => "string",
    	"selectRecordType" => "RecordRef",
    	"storeValue" => "boolean",
    	"showInList" => "boolean",
    	"globalSearch" => "boolean",
    	"isParent" => "boolean",
    	"insertBefore" => "RecordRef",
    	"subtab" => "RecordRef",
    	"displayType" => "CustomizationDisplayType",
    	"displayWidth" => "integer",
    	"displayHeight" => "integer",
    	"help" => "string",
    	"parentSubtab" => "RecordRef",
    	"linkText" => "string",
    	"isMandatory" => "boolean",
    	"checkSpelling" => "boolean",
    	"maxLength" => "integer",
    	"minValue" => "float",
    	"maxValue" => "float",
    	"defaultChecked" => "boolean",
    	"defaultValue" => "string",
    	"isFormula" => "boolean",
    	"defaultSelection" => "RecordRef",
    	"dynamicDefault" => "CustomizationDynamicDefault",
    	"searchDefault" => "RecordRef",
    	"searchCompareField" => "RecordRef",
    	"sourceList" => "RecordRef",
    	"sourceFrom" => "RecordRef",
    	"sourceFilterBy" => "RecordRef",
    	"appliesToTask" => "boolean",
    	"appliesToMfgProjectTask" => "boolean",
    	"appliesToProjectTask" => "boolean",
    	"appliesToPhoneCall" => "boolean",
    	"appliesToEvent" => "boolean",
    	"appliesToCase" => "boolean",
    	"appliesToCampaign" => "boolean",
    	"appliesPerKeyword" => "boolean",
    	"appliesToSolution" => "boolean",
    	"appliesToIssue" => "boolean",
    	"availableExternally" => "boolean",
    	"availableToSso" => "boolean",
    	"showIssueChanges" => "boolean",
    	"filterList" => "CrmCustomFieldFilterList",
    	"accessLevel" => "CustomizationAccessLevel",
    	"searchLevel" => "CustomizationSearchLevel",
    	"roleAccessList" => "CustomFieldRoleAccessList",
    	"deptAccessList" => "CustomFieldDepartmentAccessList",
    	"subAccessList" => "CustomFieldSubAccessList",
    	"translationsList" => "CustomFieldTranslationsList",
    	"internalId" => "string",
    );

    /**
     * Set label
     *
     * @param string $label
     * @return CrmCustomField
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return CrmCustomField
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set storeValue
     *
     * @param boolean $storeValue
     * @return CrmCustomField
     */
    public function setStoreValue($storeValue) {
        $this->storeValue = $storeValue;
        return $this;
    }

    /**
     * Get storeValue
     *
     * @return boolean
     */
    public function getStoreValue() {
        return $this->storeValue;
    }


    /**
     * Set showInList
     *
     * @param boolean $showInList
     * @return CrmCustomField
     */
    public function setShowInList($showInList) {
        $this->showInList = $showInList;
        return $this;
    }

    /**
     * Get showInList
     *
     * @return boolean
     */
    public function getShowInList() {
        return $this->showInList;
    }


    /**
     * Set globalSearch
     *
     * @param boolean $globalSearch
     * @return CrmCustomField
     */
    public function setGlobalSearch($globalSearch) {
        $this->globalSearch = $globalSearch;
        return $this;
    }

    /**
     * Get globalSearch
     *
     * @return boolean
     */
    public function getGlobalSearch() {
        return $this->globalSearch;
    }


    /**
     * Set isParent
     *
     * @param boolean $isParent
     * @return CrmCustomField
     */
    public function setIsParent($isParent) {
        $this->isParent = $isParent;
        return $this;
    }

    /**
     * Get isParent
     *
     * @return boolean
     */
    public function getIsParent() {
        return $this->isParent;
    }


    /**
     * Set displayType
     *
     * @param CustomizationDisplayType $displayType
     * @return CrmCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType) {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * Get displayType
     *
     * @return CustomizationDisplayType
     */
    public function getDisplayType() {
        return $this->displayType;
    }


    /**
     * Set displayWidth
     *
     * @param integer $displayWidth
     * @return CrmCustomField
     */
    public function setDisplayWidth($displayWidth) {
        $this->displayWidth = $displayWidth;
        return $this;
    }

    /**
     * Get displayWidth
     *
     * @return integer
     */
    public function getDisplayWidth() {
        return $this->displayWidth;
    }


    /**
     * Set displayHeight
     *
     * @param integer $displayHeight
     * @return CrmCustomField
     */
    public function setDisplayHeight($displayHeight) {
        $this->displayHeight = $displayHeight;
        return $this;
    }

    /**
     * Get displayHeight
     *
     * @return integer
     */
    public function getDisplayHeight() {
        return $this->displayHeight;
    }


    /**
     * Set help
     *
     * @param string $help
     * @return CrmCustomField
     */
    public function setHelp($help) {
        $this->help = $help;
        return $this;
    }

    /**
     * Get help
     *
     * @return string
     */
    public function getHelp() {
        return $this->help;
    }


    /**
     * Set linkText
     *
     * @param string $linkText
     * @return CrmCustomField
     */
    public function setLinkText($linkText) {
        $this->linkText = $linkText;
        return $this;
    }

    /**
     * Get linkText
     *
     * @return string
     */
    public function getLinkText() {
        return $this->linkText;
    }


    /**
     * Set isMandatory
     *
     * @param boolean $isMandatory
     * @return CrmCustomField
     */
    public function setIsMandatory($isMandatory) {
        $this->isMandatory = $isMandatory;
        return $this;
    }

    /**
     * Get isMandatory
     *
     * @return boolean
     */
    public function getIsMandatory() {
        return $this->isMandatory;
    }


    /**
     * Set checkSpelling
     *
     * @param boolean $checkSpelling
     * @return CrmCustomField
     */
    public function setCheckSpelling($checkSpelling) {
        $this->checkSpelling = $checkSpelling;
        return $this;
    }

    /**
     * Get checkSpelling
     *
     * @return boolean
     */
    public function getCheckSpelling() {
        return $this->checkSpelling;
    }


    /**
     * Set maxLength
     *
     * @param integer $maxLength
     * @return CrmCustomField
     */
    public function setMaxLength($maxLength) {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Get maxLength
     *
     * @return integer
     */
    public function getMaxLength() {
        return $this->maxLength;
    }


    /**
     * Set minValue
     *
     * @param float $minValue
     * @return CrmCustomField
     */
    public function setMinValue($minValue) {
        $this->minValue = $minValue;
        return $this;
    }

    /**
     * Get minValue
     *
     * @return float
     */
    public function getMinValue() {
        return $this->minValue;
    }


    /**
     * Set maxValue
     *
     * @param float $maxValue
     * @return CrmCustomField
     */
    public function setMaxValue($maxValue) {
        $this->maxValue = $maxValue;
        return $this;
    }

    /**
     * Get maxValue
     *
     * @return float
     */
    public function getMaxValue() {
        return $this->maxValue;
    }


    /**
     * Set defaultChecked
     *
     * @param boolean $defaultChecked
     * @return CrmCustomField
     */
    public function setDefaultChecked($defaultChecked) {
        $this->defaultChecked = $defaultChecked;
        return $this;
    }

    /**
     * Get defaultChecked
     *
     * @return boolean
     */
    public function getDefaultChecked() {
        return $this->defaultChecked;
    }


    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     * @return CrmCustomField
     */
    public function setDefaultValue($defaultValue) {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string
     */
    public function getDefaultValue() {
        return $this->defaultValue;
    }


    /**
     * Set isFormula
     *
     * @param boolean $isFormula
     * @return CrmCustomField
     */
    public function setIsFormula($isFormula) {
        $this->isFormula = $isFormula;
        return $this;
    }

    /**
     * Get isFormula
     *
     * @return boolean
     */
    public function getIsFormula() {
        return $this->isFormula;
    }


    /**
     * Set dynamicDefault
     *
     * @param CustomizationDynamicDefault $dynamicDefault
     * @return CrmCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault) {
        $this->dynamicDefault = $dynamicDefault;
        return $this;
    }

    /**
     * Get dynamicDefault
     *
     * @return CustomizationDynamicDefault
     */
    public function getDynamicDefault() {
        return $this->dynamicDefault;
    }


    /**
     * Set appliesToTask
     *
     * @param boolean $appliesToTask
     * @return CrmCustomField
     */
    public function setAppliesToTask($appliesToTask) {
        $this->appliesToTask = $appliesToTask;
        return $this;
    }

    /**
     * Get appliesToTask
     *
     * @return boolean
     */
    public function getAppliesToTask() {
        return $this->appliesToTask;
    }


    /**
     * Set appliesToMfgProjectTask
     *
     * @param boolean $appliesToMfgProjectTask
     * @return CrmCustomField
     */
    public function setAppliesToMfgProjectTask($appliesToMfgProjectTask) {
        $this->appliesToMfgProjectTask = $appliesToMfgProjectTask;
        return $this;
    }

    /**
     * Get appliesToMfgProjectTask
     *
     * @return boolean
     */
    public function getAppliesToMfgProjectTask() {
        return $this->appliesToMfgProjectTask;
    }


    /**
     * Set appliesToProjectTask
     *
     * @param boolean $appliesToProjectTask
     * @return CrmCustomField
     */
    public function setAppliesToProjectTask($appliesToProjectTask) {
        $this->appliesToProjectTask = $appliesToProjectTask;
        return $this;
    }

    /**
     * Get appliesToProjectTask
     *
     * @return boolean
     */
    public function getAppliesToProjectTask() {
        return $this->appliesToProjectTask;
    }


    /**
     * Set appliesToPhoneCall
     *
     * @param boolean $appliesToPhoneCall
     * @return CrmCustomField
     */
    public function setAppliesToPhoneCall($appliesToPhoneCall) {
        $this->appliesToPhoneCall = $appliesToPhoneCall;
        return $this;
    }

    /**
     * Get appliesToPhoneCall
     *
     * @return boolean
     */
    public function getAppliesToPhoneCall() {
        return $this->appliesToPhoneCall;
    }


    /**
     * Set appliesToEvent
     *
     * @param boolean $appliesToEvent
     * @return CrmCustomField
     */
    public function setAppliesToEvent($appliesToEvent) {
        $this->appliesToEvent = $appliesToEvent;
        return $this;
    }

    /**
     * Get appliesToEvent
     *
     * @return boolean
     */
    public function getAppliesToEvent() {
        return $this->appliesToEvent;
    }


    /**
     * Set appliesToCase
     *
     * @param boolean $appliesToCase
     * @return CrmCustomField
     */
    public function setAppliesToCase($appliesToCase) {
        $this->appliesToCase = $appliesToCase;
        return $this;
    }

    /**
     * Get appliesToCase
     *
     * @return boolean
     */
    public function getAppliesToCase() {
        return $this->appliesToCase;
    }


    /**
     * Set appliesToCampaign
     *
     * @param boolean $appliesToCampaign
     * @return CrmCustomField
     */
    public function setAppliesToCampaign($appliesToCampaign) {
        $this->appliesToCampaign = $appliesToCampaign;
        return $this;
    }

    /**
     * Get appliesToCampaign
     *
     * @return boolean
     */
    public function getAppliesToCampaign() {
        return $this->appliesToCampaign;
    }


    /**
     * Set appliesPerKeyword
     *
     * @param boolean $appliesPerKeyword
     * @return CrmCustomField
     */
    public function setAppliesPerKeyword($appliesPerKeyword) {
        $this->appliesPerKeyword = $appliesPerKeyword;
        return $this;
    }

    /**
     * Get appliesPerKeyword
     *
     * @return boolean
     */
    public function getAppliesPerKeyword() {
        return $this->appliesPerKeyword;
    }


    /**
     * Set appliesToSolution
     *
     * @param boolean $appliesToSolution
     * @return CrmCustomField
     */
    public function setAppliesToSolution($appliesToSolution) {
        $this->appliesToSolution = $appliesToSolution;
        return $this;
    }

    /**
     * Get appliesToSolution
     *
     * @return boolean
     */
    public function getAppliesToSolution() {
        return $this->appliesToSolution;
    }


    /**
     * Set appliesToIssue
     *
     * @param boolean $appliesToIssue
     * @return CrmCustomField
     */
    public function setAppliesToIssue($appliesToIssue) {
        $this->appliesToIssue = $appliesToIssue;
        return $this;
    }

    /**
     * Get appliesToIssue
     *
     * @return boolean
     */
    public function getAppliesToIssue() {
        return $this->appliesToIssue;
    }


    /**
     * Set availableExternally
     *
     * @param boolean $availableExternally
     * @return CrmCustomField
     */
    public function setAvailableExternally($availableExternally) {
        $this->availableExternally = $availableExternally;
        return $this;
    }

    /**
     * Get availableExternally
     *
     * @return boolean
     */
    public function getAvailableExternally() {
        return $this->availableExternally;
    }


    /**
     * Set availableToSso
     *
     * @param boolean $availableToSso
     * @return CrmCustomField
     */
    public function setAvailableToSso($availableToSso) {
        $this->availableToSso = $availableToSso;
        return $this;
    }

    /**
     * Get availableToSso
     *
     * @return boolean
     */
    public function getAvailableToSso() {
        return $this->availableToSso;
    }


    /**
     * Set showIssueChanges
     *
     * @param boolean $showIssueChanges
     * @return CrmCustomField
     */
    public function setShowIssueChanges($showIssueChanges) {
        $this->showIssueChanges = $showIssueChanges;
        return $this;
    }

    /**
     * Get showIssueChanges
     *
     * @return boolean
     */
    public function getShowIssueChanges() {
        return $this->showIssueChanges;
    }


    /**
     * Set filterList
     *
     * @param CrmCustomFieldFilterList $filterList
     * @return CrmCustomField
     */
    public function setFilterList(CrmCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return CrmCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return CrmCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel) {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel() {
        return $this->accessLevel;
    }


    /**
     * Set searchLevel
     *
     * @param CustomizationSearchLevel $searchLevel
     * @return CrmCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel) {
        $this->searchLevel = $searchLevel;
        return $this;
    }

    /**
     * Get searchLevel
     *
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel() {
        return $this->searchLevel;
    }


    /**
     * Set roleAccessList
     *
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return CrmCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList) {
        $this->roleAccessList = $roleAccessList;
        return $this;
    }

    /**
     * Get roleAccessList
     *
     * @return CustomFieldRoleAccessList
     */
    public function getRoleAccessList() {
        return $this->roleAccessList;
    }


    /**
     * Set deptAccessList
     *
     * @param CustomFieldDepartmentAccessList $deptAccessList
     * @return CrmCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList) {
        $this->deptAccessList = $deptAccessList;
        return $this;
    }

    /**
     * Get deptAccessList
     *
     * @return CustomFieldDepartmentAccessList
     */
    public function getDeptAccessList() {
        return $this->deptAccessList;
    }


    /**
     * Set subAccessList
     *
     * @param CustomFieldSubAccessList $subAccessList
     * @return CrmCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList) {
        $this->subAccessList = $subAccessList;
        return $this;
    }

    /**
     * Get subAccessList
     *
     * @return CustomFieldSubAccessList
     */
    public function getSubAccessList() {
        return $this->subAccessList;
    }


    /**
     * Set translationsList
     *
     * @param CustomFieldTranslationsList $translationsList
     * @return CrmCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return CustomFieldTranslationsList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CrmCustomField
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }

}