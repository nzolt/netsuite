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
 * CustomRecordCustomField
 */
class CustomRecordCustomField extends CustomFieldType {

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
    public $sourcefilterby;

    /**
     * @access public
     * @var string
     */
    protected $recType;

    /**
     * @access public
     * @var boolean
     */
    protected $roleRestrict;

    /**
     * @access public
     * @var CustomRecordCustomFieldFilterList
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
    	"sourcefilterby" => "RecordRef",
    	"recType" => "string",
    	"roleRestrict" => "boolean",
    	"filterList" => "CustomRecordCustomFieldFilterList",
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * Set recType
     *
     * @param string $recType
     * @return CustomRecordCustomField
     */
    public function setRecType($recType) {
        $this->recType = $recType;
        return $this;
    }

    /**
     * Get recType
     *
     * @return string
     */
    public function getRecType() {
        return $this->recType;
    }


    /**
     * Set roleRestrict
     *
     * @param boolean $roleRestrict
     * @return CustomRecordCustomField
     */
    public function setRoleRestrict($roleRestrict) {
        $this->roleRestrict = $roleRestrict;
        return $this;
    }

    /**
     * Get roleRestrict
     *
     * @return boolean
     */
    public function getRoleRestrict() {
        return $this->roleRestrict;
    }


    /**
     * Set filterList
     *
     * @param CustomRecordCustomFieldFilterList $filterList
     * @return CustomRecordCustomField
     */
    public function setFilterList(CustomRecordCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return CustomRecordCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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
     * @return CustomRecordCustomField
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