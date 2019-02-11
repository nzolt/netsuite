<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDisplayType;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDynamicDefault;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationAccessLevel;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationSearchLevel;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * ItemNumberCustomField
 */
class ItemNumberCustomField extends CustomFieldType {

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
     * @var RecordRef
     */
    public $insertBefore;

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
     * @var ItemNumberCustomFieldFilterList
     */
    protected $filterList;

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
     * @var boolean
     */
    protected $appliesToAllItems;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToSerialized;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToLots;

    /**
     * @access public
     * @var boolean
     */
    protected $appliesToGiftCerts;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $itemsList;

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
    	"insertBefore" => "RecordRef",
    	"displayType" => "CustomizationDisplayType",
    	"displayWidth" => "integer",
    	"displayHeight" => "integer",
    	"help" => "string",
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
    	"accessLevel" => "CustomizationAccessLevel",
    	"searchLevel" => "CustomizationSearchLevel",
    	"filterList" => "ItemNumberCustomFieldFilterList",
    	"roleAccessList" => "CustomFieldRoleAccessList",
    	"deptAccessList" => "CustomFieldDepartmentAccessList",
    	"appliesToAllItems" => "boolean",
    	"appliesToSerialized" => "boolean",
    	"appliesToLots" => "boolean",
    	"appliesToGiftCerts" => "boolean",
    	"itemsList" => "RecordRefList",
    	"translationsList" => "CustomFieldTranslationsList",
    	"internalId" => "string",
    );

    /**
     * Set label
     *
     * @param string $label
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * Set displayType
     *
     * @param CustomizationDisplayType $displayType
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * Set filterList
     *
     * @param ItemNumberCustomFieldFilterList $filterList
     * @return ItemNumberCustomField
     */
    public function setFilterList(ItemNumberCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return ItemNumberCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set roleAccessList
     *
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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
     * Set appliesToAllItems
     *
     * @param boolean $appliesToAllItems
     * @return ItemNumberCustomField
     */
    public function setAppliesToAllItems($appliesToAllItems) {
        $this->appliesToAllItems = $appliesToAllItems;
        return $this;
    }

    /**
     * Get appliesToAllItems
     *
     * @return boolean
     */
    public function getAppliesToAllItems() {
        return $this->appliesToAllItems;
    }


    /**
     * Set appliesToSerialized
     *
     * @param boolean $appliesToSerialized
     * @return ItemNumberCustomField
     */
    public function setAppliesToSerialized($appliesToSerialized) {
        $this->appliesToSerialized = $appliesToSerialized;
        return $this;
    }

    /**
     * Get appliesToSerialized
     *
     * @return boolean
     */
    public function getAppliesToSerialized() {
        return $this->appliesToSerialized;
    }


    /**
     * Set appliesToLots
     *
     * @param boolean $appliesToLots
     * @return ItemNumberCustomField
     */
    public function setAppliesToLots($appliesToLots) {
        $this->appliesToLots = $appliesToLots;
        return $this;
    }

    /**
     * Get appliesToLots
     *
     * @return boolean
     */
    public function getAppliesToLots() {
        return $this->appliesToLots;
    }


    /**
     * Set appliesToGiftCerts
     *
     * @param boolean $appliesToGiftCerts
     * @return ItemNumberCustomField
     */
    public function setAppliesToGiftCerts($appliesToGiftCerts) {
        $this->appliesToGiftCerts = $appliesToGiftCerts;
        return $this;
    }

    /**
     * Get appliesToGiftCerts
     *
     * @return boolean
     */
    public function getAppliesToGiftCerts() {
        return $this->appliesToGiftCerts;
    }


    /**
     * Set itemsList
     *
     * @param RecordRefList $itemsList
     * @return ItemNumberCustomField
     */
    public function setItemsList(RecordRefList $itemsList) {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * Get itemsList
     *
     * @return RecordRefList
     */
    public function getItemsList() {
        return $this->itemsList;
    }


    /**
     * Set translationsList
     *
     * @param CustomFieldTranslationsList $translationsList
     * @return ItemNumberCustomField
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
     * @return ItemNumberCustomField
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