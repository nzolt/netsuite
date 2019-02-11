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
 * ItemOptionCustomField
 */
class ItemOptionCustomField extends CustomFieldType {

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
    protected $colPurchase;

    /**
     * @access public
     * @var boolean
     */
    protected $colSale;

    /**
     * @access public
     * @var boolean
     */
    protected $colOpportunity;

    /**
     * @access public
     * @var boolean
     */
    protected $colStore;

    /**
     * @access public
     * @var boolean
     */
    protected $colStoreHidden;

    /**
     * @access public
     * @var boolean
     */
    protected $colTransferOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $colAllItems;

    /**
     * @access public
     * @var ItemsList
     */
    protected $itemsList;

    /**
     * @access public
     * @var boolean
     */
    protected $colKitItem;

    /**
     * @access public
     * @var ItemOptionCustomFieldFilterList
     */
    protected $filterList;

    /**
     * @access public
     * @var string
     */
    protected $colOptionLabel;

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
    	"insertBefore" => "RecordRef",
    	"displayType" => "CustomizationDisplayType",
    	"displayWidth" => "integer",
    	"displayHeight" => "integer",
    	"help" => "string",
    	"linkText" => "string",
    	"isMandatory" => "boolean",
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
    	"colPurchase" => "boolean",
    	"colSale" => "boolean",
    	"colOpportunity" => "boolean",
    	"colStore" => "boolean",
    	"colStoreHidden" => "boolean",
    	"colTransferOrder" => "boolean",
    	"colAllItems" => "boolean",
    	"itemsList" => "ItemsList",
    	"colKitItem" => "boolean",
    	"filterList" => "ItemOptionCustomFieldFilterList",
    	"colOptionLabel" => "string",
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * Set displayType
     *
     * @param CustomizationDisplayType $displayType
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * Set maxLength
     *
     * @param integer $maxLength
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * Set colPurchase
     *
     * @param boolean $colPurchase
     * @return ItemOptionCustomField
     */
    public function setColPurchase($colPurchase) {
        $this->colPurchase = $colPurchase;
        return $this;
    }

    /**
     * Get colPurchase
     *
     * @return boolean
     */
    public function getColPurchase() {
        return $this->colPurchase;
    }


    /**
     * Set colSale
     *
     * @param boolean $colSale
     * @return ItemOptionCustomField
     */
    public function setColSale($colSale) {
        $this->colSale = $colSale;
        return $this;
    }

    /**
     * Get colSale
     *
     * @return boolean
     */
    public function getColSale() {
        return $this->colSale;
    }


    /**
     * Set colOpportunity
     *
     * @param boolean $colOpportunity
     * @return ItemOptionCustomField
     */
    public function setColOpportunity($colOpportunity) {
        $this->colOpportunity = $colOpportunity;
        return $this;
    }

    /**
     * Get colOpportunity
     *
     * @return boolean
     */
    public function getColOpportunity() {
        return $this->colOpportunity;
    }


    /**
     * Set colStore
     *
     * @param boolean $colStore
     * @return ItemOptionCustomField
     */
    public function setColStore($colStore) {
        $this->colStore = $colStore;
        return $this;
    }

    /**
     * Get colStore
     *
     * @return boolean
     */
    public function getColStore() {
        return $this->colStore;
    }


    /**
     * Set colStoreHidden
     *
     * @param boolean $colStoreHidden
     * @return ItemOptionCustomField
     */
    public function setColStoreHidden($colStoreHidden) {
        $this->colStoreHidden = $colStoreHidden;
        return $this;
    }

    /**
     * Get colStoreHidden
     *
     * @return boolean
     */
    public function getColStoreHidden() {
        return $this->colStoreHidden;
    }


    /**
     * Set colTransferOrder
     *
     * @param boolean $colTransferOrder
     * @return ItemOptionCustomField
     */
    public function setColTransferOrder($colTransferOrder) {
        $this->colTransferOrder = $colTransferOrder;
        return $this;
    }

    /**
     * Get colTransferOrder
     *
     * @return boolean
     */
    public function getColTransferOrder() {
        return $this->colTransferOrder;
    }


    /**
     * Set colAllItems
     *
     * @param boolean $colAllItems
     * @return ItemOptionCustomField
     */
    public function setColAllItems($colAllItems) {
        $this->colAllItems = $colAllItems;
        return $this;
    }

    /**
     * Get colAllItems
     *
     * @return boolean
     */
    public function getColAllItems() {
        return $this->colAllItems;
    }


    /**
     * Set itemsList
     *
     * @param ItemsList $itemsList
     * @return ItemOptionCustomField
     */
    public function setItemsList(ItemsList $itemsList) {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * Get itemsList
     *
     * @return ItemsList
     */
    public function getItemsList() {
        return $this->itemsList;
    }


    /**
     * Set colKitItem
     *
     * @param boolean $colKitItem
     * @return ItemOptionCustomField
     */
    public function setColKitItem($colKitItem) {
        $this->colKitItem = $colKitItem;
        return $this;
    }

    /**
     * Get colKitItem
     *
     * @return boolean
     */
    public function getColKitItem() {
        return $this->colKitItem;
    }


    /**
     * Set filterList
     *
     * @param ItemOptionCustomFieldFilterList $filterList
     * @return ItemOptionCustomField
     */
    public function setFilterList(ItemOptionCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return ItemOptionCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set colOptionLabel
     *
     * @param string $colOptionLabel
     * @return ItemOptionCustomField
     */
    public function setColOptionLabel($colOptionLabel) {
        $this->colOptionLabel = $colOptionLabel;
        return $this;
    }

    /**
     * Get colOptionLabel
     *
     * @return string
     */
    public function getColOptionLabel() {
        return $this->colOptionLabel;
    }


    /**
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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
     * @return ItemOptionCustomField
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