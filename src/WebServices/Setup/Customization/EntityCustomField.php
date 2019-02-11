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
 * EntityCustomField
 */
class EntityCustomField extends CustomFieldType {

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
     * @var boolean
     */
    protected $availableToSso;

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
    protected $appliesToCustomer;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToProject;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToVendor;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToEmployee;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToOtherName;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToContact;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToPartner;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToWebSite;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $availableExternally;

    /**
     * @access public
     * @var EntityCustomFieldFilterList
     */
    protected $filterList;

    /**
     * @access public
     * @var CustomizationAccessLevel
     */
    protected $accessLevel;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToStatement;

    /**
     * @access public
     * @var CustomizationSearchLevel
     */
    protected $searchLevel;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToPriceList;

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
    	"availableToSso" => "boolean",
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
    	"appliesToCustomer" => "boolean",
    	"appliesToProject" => "boolean",
    	"appliesToVendor" => "boolean",
    	"appliesToEmployee" => "boolean",
    	"appliesToOtherName" => "boolean",
    	"appliesToContact" => "boolean",
    	"appliesToPartner" => "boolean",
    	"appliesToWebSite" => "boolean",
    	"appliesToGroup" => "boolean",
    	"availableExternally" => "boolean",
    	"filterList" => "EntityCustomFieldFilterList",
    	"accessLevel" => "CustomizationAccessLevel",
    	"appliesToStatement" => "boolean",
    	"searchLevel" => "CustomizationSearchLevel",
    	"appliesToPriceList" => "boolean",
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * Set availableToSso
     *
     * @param boolean $availableToSso
     * @return EntityCustomField
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
     * Set displayType
     *
     * @param CustomizationDisplayType $displayType
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * Set appliesToCustomer
     *
     * @param boolean $appliesToCustomer
     * @return EntityCustomField
     */
    public function setAppliesToCustomer($appliesToCustomer) {
        $this->appliesToCustomer = $appliesToCustomer;
        return $this;
    }

    /**
     * Get appliesToCustomer
     *
     * @return boolean
     */
    public function getAppliesToCustomer() {
        return $this->appliesToCustomer;
    }


    /**
     * Set appliesToProject
     *
     * @param boolean $appliesToProject
     * @return EntityCustomField
     */
    public function setAppliesToProject($appliesToProject) {
        $this->appliesToProject = $appliesToProject;
        return $this;
    }

    /**
     * Get appliesToProject
     *
     * @return boolean
     */
    public function getAppliesToProject() {
        return $this->appliesToProject;
    }


    /**
     * Set appliesToVendor
     *
     * @param boolean $appliesToVendor
     * @return EntityCustomField
     */
    public function setAppliesToVendor($appliesToVendor) {
        $this->appliesToVendor = $appliesToVendor;
        return $this;
    }

    /**
     * Get appliesToVendor
     *
     * @return boolean
     */
    public function getAppliesToVendor() {
        return $this->appliesToVendor;
    }


    /**
     * Set appliesToEmployee
     *
     * @param boolean $appliesToEmployee
     * @return EntityCustomField
     */
    public function setAppliesToEmployee($appliesToEmployee) {
        $this->appliesToEmployee = $appliesToEmployee;
        return $this;
    }

    /**
     * Get appliesToEmployee
     *
     * @return boolean
     */
    public function getAppliesToEmployee() {
        return $this->appliesToEmployee;
    }


    /**
     * Set appliesToOtherName
     *
     * @param boolean $appliesToOtherName
     * @return EntityCustomField
     */
    public function setAppliesToOtherName($appliesToOtherName) {
        $this->appliesToOtherName = $appliesToOtherName;
        return $this;
    }

    /**
     * Get appliesToOtherName
     *
     * @return boolean
     */
    public function getAppliesToOtherName() {
        return $this->appliesToOtherName;
    }


    /**
     * Set appliesToContact
     *
     * @param boolean $appliesToContact
     * @return EntityCustomField
     */
    public function setAppliesToContact($appliesToContact) {
        $this->appliesToContact = $appliesToContact;
        return $this;
    }

    /**
     * Get appliesToContact
     *
     * @return boolean
     */
    public function getAppliesToContact() {
        return $this->appliesToContact;
    }


    /**
     * Set appliesToPartner
     *
     * @param boolean $appliesToPartner
     * @return EntityCustomField
     */
    public function setAppliesToPartner($appliesToPartner) {
        $this->appliesToPartner = $appliesToPartner;
        return $this;
    }

    /**
     * Get appliesToPartner
     *
     * @return boolean
     */
    public function getAppliesToPartner() {
        return $this->appliesToPartner;
    }


    /**
     * Set appliesToWebSite
     *
     * @param boolean $appliesToWebSite
     * @return EntityCustomField
     */
    public function setAppliesToWebSite($appliesToWebSite) {
        $this->appliesToWebSite = $appliesToWebSite;
        return $this;
    }

    /**
     * Get appliesToWebSite
     *
     * @return boolean
     */
    public function getAppliesToWebSite() {
        return $this->appliesToWebSite;
    }


    /**
     * Set appliesToGroup
     *
     * @param boolean $appliesToGroup
     * @return EntityCustomField
     */
    public function setAppliesToGroup($appliesToGroup) {
        $this->appliesToGroup = $appliesToGroup;
        return $this;
    }

    /**
     * Get appliesToGroup
     *
     * @return boolean
     */
    public function getAppliesToGroup() {
        return $this->appliesToGroup;
    }


    /**
     * Set availableExternally
     *
     * @param boolean $availableExternally
     * @return EntityCustomField
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
     * Set filterList
     *
     * @param EntityCustomFieldFilterList $filterList
     * @return EntityCustomField
     */
    public function setFilterList(EntityCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return EntityCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return EntityCustomField
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
     * Set appliesToStatement
     *
     * @param boolean $appliesToStatement
     * @return EntityCustomField
     */
    public function setAppliesToStatement($appliesToStatement) {
        $this->appliesToStatement = $appliesToStatement;
        return $this;
    }

    /**
     * Get appliesToStatement
     *
     * @return boolean
     */
    public function getAppliesToStatement() {
        return $this->appliesToStatement;
    }


    /**
     * Set searchLevel
     *
     * @param CustomizationSearchLevel $searchLevel
     * @return EntityCustomField
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
     * Set appliesToPriceList
     *
     * @param boolean $appliesToPriceList
     * @return EntityCustomField
     */
    public function setAppliesToPriceList($appliesToPriceList) {
        $this->appliesToPriceList = $appliesToPriceList;
        return $this;
    }

    /**
     * Get appliesToPriceList
     *
     * @return boolean
     */
    public function getAppliesToPriceList() {
        return $this->appliesToPriceList;
    }


    /**
     * Set roleAccessList
     *
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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
     * @return EntityCustomField
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