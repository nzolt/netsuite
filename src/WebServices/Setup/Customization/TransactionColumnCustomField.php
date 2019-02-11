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
 * TransactionColumnCustomField
 */
class TransactionColumnCustomField extends CustomFieldType {

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
     * @var boolean
     */
    protected $availableToSso;

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
    protected $colExpense;

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
    protected $colJournal;

    /**
     * @access public
     * @var boolean
     */
    protected $colBuild;

    /**
     * @access public
     * @var boolean
     */
    protected $colExpenseReport;

    /**
     * @access public
     * @var boolean
     */
    protected $colTime;

    /**
     * @access public
     * @var boolean
     */
    protected $colTransferOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $colTimeGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $colItemReceipt;

    /**
     * @access public
     * @var boolean
     */
    protected $colItemReceiptOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $colItemFulfillment;

    /**
     * @access public
     * @var boolean
     */
    protected $colItemFulfillmentOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $colPrintFlag;

    /**
     * @access public
     * @var boolean
     */
    protected $colPickingTicket;

    /**
     * @access public
     * @var boolean
     */
    protected $colPackingSlip;

    /**
     * @access public
     * @var boolean
     */
    protected $colReturnForm;

    /**
     * @access public
     * @var boolean
     */
    protected $colStoreWithGroups;

    /**
     * @access public
     * @var boolean
     */
    protected $colGroupOnInvoices;

    /**
     * @access public
     * @var boolean
     */
    protected $colKitItem;

    /**
     * @access public
     * @var TransactionColumnCustomFieldFilterList
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
    	"insertBefore" => "RecordRef",
    	"availableToSso" => "boolean",
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
    	"sourceList" => "RecordRef",
    	"sourceFrom" => "RecordRef",
    	"sourceFilterBy" => "RecordRef",
    	"colExpense" => "boolean",
    	"colPurchase" => "boolean",
    	"colSale" => "boolean",
    	"colOpportunity" => "boolean",
    	"colStore" => "boolean",
    	"colStoreHidden" => "boolean",
    	"colJournal" => "boolean",
    	"colBuild" => "boolean",
    	"colExpenseReport" => "boolean",
    	"colTime" => "boolean",
    	"colTransferOrder" => "boolean",
    	"colTimeGroup" => "boolean",
    	"colItemReceipt" => "boolean",
    	"colItemReceiptOrder" => "boolean",
    	"colItemFulfillment" => "boolean",
    	"colItemFulfillmentOrder" => "boolean",
    	"colPrintFlag" => "boolean",
    	"colPickingTicket" => "boolean",
    	"colPackingSlip" => "boolean",
    	"colReturnForm" => "boolean",
    	"colStoreWithGroups" => "boolean",
    	"colGroupOnInvoices" => "boolean",
    	"colKitItem" => "boolean",
    	"filterList" => "TransactionColumnCustomFieldFilterList",
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * Set availableToSso
     *
     * @param boolean $availableToSso
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * Set colExpense
     *
     * @param boolean $colExpense
     * @return TransactionColumnCustomField
     */
    public function setColExpense($colExpense) {
        $this->colExpense = $colExpense;
        return $this;
    }

    /**
     * Get colExpense
     *
     * @return boolean
     */
    public function getColExpense() {
        return $this->colExpense;
    }


    /**
     * Set colPurchase
     *
     * @param boolean $colPurchase
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * Set colJournal
     *
     * @param boolean $colJournal
     * @return TransactionColumnCustomField
     */
    public function setColJournal($colJournal) {
        $this->colJournal = $colJournal;
        return $this;
    }

    /**
     * Get colJournal
     *
     * @return boolean
     */
    public function getColJournal() {
        return $this->colJournal;
    }


    /**
     * Set colBuild
     *
     * @param boolean $colBuild
     * @return TransactionColumnCustomField
     */
    public function setColBuild($colBuild) {
        $this->colBuild = $colBuild;
        return $this;
    }

    /**
     * Get colBuild
     *
     * @return boolean
     */
    public function getColBuild() {
        return $this->colBuild;
    }


    /**
     * Set colExpenseReport
     *
     * @param boolean $colExpenseReport
     * @return TransactionColumnCustomField
     */
    public function setColExpenseReport($colExpenseReport) {
        $this->colExpenseReport = $colExpenseReport;
        return $this;
    }

    /**
     * Get colExpenseReport
     *
     * @return boolean
     */
    public function getColExpenseReport() {
        return $this->colExpenseReport;
    }


    /**
     * Set colTime
     *
     * @param boolean $colTime
     * @return TransactionColumnCustomField
     */
    public function setColTime($colTime) {
        $this->colTime = $colTime;
        return $this;
    }

    /**
     * Get colTime
     *
     * @return boolean
     */
    public function getColTime() {
        return $this->colTime;
    }


    /**
     * Set colTransferOrder
     *
     * @param boolean $colTransferOrder
     * @return TransactionColumnCustomField
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
     * Set colTimeGroup
     *
     * @param boolean $colTimeGroup
     * @return TransactionColumnCustomField
     */
    public function setColTimeGroup($colTimeGroup) {
        $this->colTimeGroup = $colTimeGroup;
        return $this;
    }

    /**
     * Get colTimeGroup
     *
     * @return boolean
     */
    public function getColTimeGroup() {
        return $this->colTimeGroup;
    }


    /**
     * Set colItemReceipt
     *
     * @param boolean $colItemReceipt
     * @return TransactionColumnCustomField
     */
    public function setColItemReceipt($colItemReceipt) {
        $this->colItemReceipt = $colItemReceipt;
        return $this;
    }

    /**
     * Get colItemReceipt
     *
     * @return boolean
     */
    public function getColItemReceipt() {
        return $this->colItemReceipt;
    }


    /**
     * Set colItemReceiptOrder
     *
     * @param boolean $colItemReceiptOrder
     * @return TransactionColumnCustomField
     */
    public function setColItemReceiptOrder($colItemReceiptOrder) {
        $this->colItemReceiptOrder = $colItemReceiptOrder;
        return $this;
    }

    /**
     * Get colItemReceiptOrder
     *
     * @return boolean
     */
    public function getColItemReceiptOrder() {
        return $this->colItemReceiptOrder;
    }


    /**
     * Set colItemFulfillment
     *
     * @param boolean $colItemFulfillment
     * @return TransactionColumnCustomField
     */
    public function setColItemFulfillment($colItemFulfillment) {
        $this->colItemFulfillment = $colItemFulfillment;
        return $this;
    }

    /**
     * Get colItemFulfillment
     *
     * @return boolean
     */
    public function getColItemFulfillment() {
        return $this->colItemFulfillment;
    }


    /**
     * Set colItemFulfillmentOrder
     *
     * @param boolean $colItemFulfillmentOrder
     * @return TransactionColumnCustomField
     */
    public function setColItemFulfillmentOrder($colItemFulfillmentOrder) {
        $this->colItemFulfillmentOrder = $colItemFulfillmentOrder;
        return $this;
    }

    /**
     * Get colItemFulfillmentOrder
     *
     * @return boolean
     */
    public function getColItemFulfillmentOrder() {
        return $this->colItemFulfillmentOrder;
    }


    /**
     * Set colPrintFlag
     *
     * @param boolean $colPrintFlag
     * @return TransactionColumnCustomField
     */
    public function setColPrintFlag($colPrintFlag) {
        $this->colPrintFlag = $colPrintFlag;
        return $this;
    }

    /**
     * Get colPrintFlag
     *
     * @return boolean
     */
    public function getColPrintFlag() {
        return $this->colPrintFlag;
    }


    /**
     * Set colPickingTicket
     *
     * @param boolean $colPickingTicket
     * @return TransactionColumnCustomField
     */
    public function setColPickingTicket($colPickingTicket) {
        $this->colPickingTicket = $colPickingTicket;
        return $this;
    }

    /**
     * Get colPickingTicket
     *
     * @return boolean
     */
    public function getColPickingTicket() {
        return $this->colPickingTicket;
    }


    /**
     * Set colPackingSlip
     *
     * @param boolean $colPackingSlip
     * @return TransactionColumnCustomField
     */
    public function setColPackingSlip($colPackingSlip) {
        $this->colPackingSlip = $colPackingSlip;
        return $this;
    }

    /**
     * Get colPackingSlip
     *
     * @return boolean
     */
    public function getColPackingSlip() {
        return $this->colPackingSlip;
    }


    /**
     * Set colReturnForm
     *
     * @param boolean $colReturnForm
     * @return TransactionColumnCustomField
     */
    public function setColReturnForm($colReturnForm) {
        $this->colReturnForm = $colReturnForm;
        return $this;
    }

    /**
     * Get colReturnForm
     *
     * @return boolean
     */
    public function getColReturnForm() {
        return $this->colReturnForm;
    }


    /**
     * Set colStoreWithGroups
     *
     * @param boolean $colStoreWithGroups
     * @return TransactionColumnCustomField
     */
    public function setColStoreWithGroups($colStoreWithGroups) {
        $this->colStoreWithGroups = $colStoreWithGroups;
        return $this;
    }

    /**
     * Get colStoreWithGroups
     *
     * @return boolean
     */
    public function getColStoreWithGroups() {
        return $this->colStoreWithGroups;
    }


    /**
     * Set colGroupOnInvoices
     *
     * @param boolean $colGroupOnInvoices
     * @return TransactionColumnCustomField
     */
    public function setColGroupOnInvoices($colGroupOnInvoices) {
        $this->colGroupOnInvoices = $colGroupOnInvoices;
        return $this;
    }

    /**
     * Get colGroupOnInvoices
     *
     * @return boolean
     */
    public function getColGroupOnInvoices() {
        return $this->colGroupOnInvoices;
    }


    /**
     * Set colKitItem
     *
     * @param boolean $colKitItem
     * @return TransactionColumnCustomField
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
     * @param TransactionColumnCustomFieldFilterList $filterList
     * @return TransactionColumnCustomField
     */
    public function setFilterList(TransactionColumnCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return TransactionColumnCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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
     * @return TransactionColumnCustomField
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