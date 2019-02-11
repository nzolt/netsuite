<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDisplayType;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDynamicDefault;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\ItemCustomFieldItemSubType;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationAccessLevel;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationSearchLevel;

/**
 * ItemCustomField
 */
class ItemCustomField extends CustomFieldType {

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
     * @var boolean
     */
    protected $itemMatrix;

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
    protected $appliesToInventory;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToNonInventory;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToService;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToOtherCharge;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToKit;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToItemAssembly;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToSso;

    /**
     * @access public
     * @var ItemCustomFieldItemSubType
     */
    protected $itemSubType;

    /**
     * @access public
     * @var ItemCustomFieldFilterList
     */
    protected $filterList;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToPriceList;

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
    	"itemMatrix" => "boolean",
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
    	"appliesToInventory" => "boolean",
    	"appliesToNonInventory" => "boolean",
    	"appliesToService" => "boolean",
    	"appliesToOtherCharge" => "boolean",
    	"appliesToGroup" => "boolean",
    	"appliesToKit" => "boolean",
    	"appliesToItemAssembly" => "boolean",
    	"availableToSso" => "boolean",
    	"itemSubType" => "ItemCustomFieldItemSubType",
    	"filterList" => "ItemCustomFieldFilterList",
    	"appliesToPriceList" => "boolean",
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
     * @return ItemCustomField
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
     * Set itemMatrix
     *
     * @param boolean $itemMatrix
     * @return ItemCustomField
     */
    public function setItemMatrix($itemMatrix) {
        $this->itemMatrix = $itemMatrix;
        return $this;
    }

    /**
     * Get itemMatrix
     *
     * @return boolean
     */
    public function getItemMatrix() {
        return $this->itemMatrix;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * Set appliesToInventory
     *
     * @param boolean $appliesToInventory
     * @return ItemCustomField
     */
    public function setAppliesToInventory($appliesToInventory) {
        $this->appliesToInventory = $appliesToInventory;
        return $this;
    }

    /**
     * Get appliesToInventory
     *
     * @return boolean
     */
    public function getAppliesToInventory() {
        return $this->appliesToInventory;
    }


    /**
     * Set appliesToNonInventory
     *
     * @param boolean $appliesToNonInventory
     * @return ItemCustomField
     */
    public function setAppliesToNonInventory($appliesToNonInventory) {
        $this->appliesToNonInventory = $appliesToNonInventory;
        return $this;
    }

    /**
     * Get appliesToNonInventory
     *
     * @return boolean
     */
    public function getAppliesToNonInventory() {
        return $this->appliesToNonInventory;
    }


    /**
     * Set appliesToService
     *
     * @param boolean $appliesToService
     * @return ItemCustomField
     */
    public function setAppliesToService($appliesToService) {
        $this->appliesToService = $appliesToService;
        return $this;
    }

    /**
     * Get appliesToService
     *
     * @return boolean
     */
    public function getAppliesToService() {
        return $this->appliesToService;
    }


    /**
     * Set appliesToOtherCharge
     *
     * @param boolean $appliesToOtherCharge
     * @return ItemCustomField
     */
    public function setAppliesToOtherCharge($appliesToOtherCharge) {
        $this->appliesToOtherCharge = $appliesToOtherCharge;
        return $this;
    }

    /**
     * Get appliesToOtherCharge
     *
     * @return boolean
     */
    public function getAppliesToOtherCharge() {
        return $this->appliesToOtherCharge;
    }


    /**
     * Set appliesToGroup
     *
     * @param boolean $appliesToGroup
     * @return ItemCustomField
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
     * Set appliesToKit
     *
     * @param boolean $appliesToKit
     * @return ItemCustomField
     */
    public function setAppliesToKit($appliesToKit) {
        $this->appliesToKit = $appliesToKit;
        return $this;
    }

    /**
     * Get appliesToKit
     *
     * @return boolean
     */
    public function getAppliesToKit() {
        return $this->appliesToKit;
    }


    /**
     * Set appliesToItemAssembly
     *
     * @param boolean $appliesToItemAssembly
     * @return ItemCustomField
     */
    public function setAppliesToItemAssembly($appliesToItemAssembly) {
        $this->appliesToItemAssembly = $appliesToItemAssembly;
        return $this;
    }

    /**
     * Get appliesToItemAssembly
     *
     * @return boolean
     */
    public function getAppliesToItemAssembly() {
        return $this->appliesToItemAssembly;
    }


    /**
     * Set availableToSso
     *
     * @param boolean $availableToSso
     * @return ItemCustomField
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
     * Set itemSubType
     *
     * @param ItemCustomFieldItemSubType $itemSubType
     * @return ItemCustomField
     */
    public function setItemSubType(ItemCustomFieldItemSubType $itemSubType) {
        $this->itemSubType = $itemSubType;
        return $this;
    }

    /**
     * Get itemSubType
     *
     * @return ItemCustomFieldItemSubType
     */
    public function getItemSubType() {
        return $this->itemSubType;
    }


    /**
     * Set filterList
     *
     * @param ItemCustomFieldFilterList $filterList
     * @return ItemCustomField
     */
    public function setFilterList(ItemCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return ItemCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set appliesToPriceList
     *
     * @param boolean $appliesToPriceList
     * @return ItemCustomField
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
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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
     * @return ItemCustomField
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