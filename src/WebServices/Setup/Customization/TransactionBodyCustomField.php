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
 * TransactionBodyCustomField
 */
class TransactionBodyCustomField extends CustomFieldType {

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
    protected $bodyPurchase;

    /**
     * @access public
     * @var boolean
     */
    protected $bodySale;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyOpportunity;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyJournal;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyExpenseReport;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyStore;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyTransferOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyItemReceipt;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyItemReceiptOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyItemFulfillment;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyItemFulfillmentOrder;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyInventoryAdjustment;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyBTegata;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyAssemblyBuild;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyPrintFlag;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyPickingTicket;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyPrintPackingSlip;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyCustomerPayment;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyVendorPayment;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyDeposit;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyBom;

    /**
     * @access public
     * @var boolean
     */
    protected $bodyPrintStatement;

    /**
     * @access public
     * @var TransactionBodyCustomFieldFilterList
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
    	"availableToSso" => "boolean",
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
    	"bodyPurchase" => "boolean",
    	"bodySale" => "boolean",
    	"bodyOpportunity" => "boolean",
    	"bodyJournal" => "boolean",
    	"bodyExpenseReport" => "boolean",
    	"bodyStore" => "boolean",
    	"bodyTransferOrder" => "boolean",
    	"bodyItemReceipt" => "boolean",
    	"bodyItemReceiptOrder" => "boolean",
    	"bodyItemFulfillment" => "boolean",
    	"bodyItemFulfillmentOrder" => "boolean",
    	"bodyInventoryAdjustment" => "boolean",
    	"bodyBTegata" => "boolean",
    	"bodyAssemblyBuild" => "boolean",
    	"bodyPrintFlag" => "boolean",
    	"bodyPickingTicket" => "boolean",
    	"bodyPrintPackingSlip" => "boolean",
    	"bodyCustomerPayment" => "boolean",
    	"bodyVendorPayment" => "boolean",
    	"bodyDeposit" => "boolean",
    	"bodyBom" => "boolean",
    	"bodyPrintStatement" => "boolean",
    	"filterList" => "TransactionBodyCustomFieldFilterList",
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * Set bodyPurchase
     *
     * @param boolean $bodyPurchase
     * @return TransactionBodyCustomField
     */
    public function setBodyPurchase($bodyPurchase) {
        $this->bodyPurchase = $bodyPurchase;
        return $this;
    }

    /**
     * Get bodyPurchase
     *
     * @return boolean
     */
    public function getBodyPurchase() {
        return $this->bodyPurchase;
    }


    /**
     * Set bodySale
     *
     * @param boolean $bodySale
     * @return TransactionBodyCustomField
     */
    public function setBodySale($bodySale) {
        $this->bodySale = $bodySale;
        return $this;
    }

    /**
     * Get bodySale
     *
     * @return boolean
     */
    public function getBodySale() {
        return $this->bodySale;
    }


    /**
     * Set bodyOpportunity
     *
     * @param boolean $bodyOpportunity
     * @return TransactionBodyCustomField
     */
    public function setBodyOpportunity($bodyOpportunity) {
        $this->bodyOpportunity = $bodyOpportunity;
        return $this;
    }

    /**
     * Get bodyOpportunity
     *
     * @return boolean
     */
    public function getBodyOpportunity() {
        return $this->bodyOpportunity;
    }


    /**
     * Set bodyJournal
     *
     * @param boolean $bodyJournal
     * @return TransactionBodyCustomField
     */
    public function setBodyJournal($bodyJournal) {
        $this->bodyJournal = $bodyJournal;
        return $this;
    }

    /**
     * Get bodyJournal
     *
     * @return boolean
     */
    public function getBodyJournal() {
        return $this->bodyJournal;
    }


    /**
     * Set bodyExpenseReport
     *
     * @param boolean $bodyExpenseReport
     * @return TransactionBodyCustomField
     */
    public function setBodyExpenseReport($bodyExpenseReport) {
        $this->bodyExpenseReport = $bodyExpenseReport;
        return $this;
    }

    /**
     * Get bodyExpenseReport
     *
     * @return boolean
     */
    public function getBodyExpenseReport() {
        return $this->bodyExpenseReport;
    }


    /**
     * Set bodyStore
     *
     * @param boolean $bodyStore
     * @return TransactionBodyCustomField
     */
    public function setBodyStore($bodyStore) {
        $this->bodyStore = $bodyStore;
        return $this;
    }

    /**
     * Get bodyStore
     *
     * @return boolean
     */
    public function getBodyStore() {
        return $this->bodyStore;
    }


    /**
     * Set bodyTransferOrder
     *
     * @param boolean $bodyTransferOrder
     * @return TransactionBodyCustomField
     */
    public function setBodyTransferOrder($bodyTransferOrder) {
        $this->bodyTransferOrder = $bodyTransferOrder;
        return $this;
    }

    /**
     * Get bodyTransferOrder
     *
     * @return boolean
     */
    public function getBodyTransferOrder() {
        return $this->bodyTransferOrder;
    }


    /**
     * Set bodyItemReceipt
     *
     * @param boolean $bodyItemReceipt
     * @return TransactionBodyCustomField
     */
    public function setBodyItemReceipt($bodyItemReceipt) {
        $this->bodyItemReceipt = $bodyItemReceipt;
        return $this;
    }

    /**
     * Get bodyItemReceipt
     *
     * @return boolean
     */
    public function getBodyItemReceipt() {
        return $this->bodyItemReceipt;
    }


    /**
     * Set bodyItemReceiptOrder
     *
     * @param boolean $bodyItemReceiptOrder
     * @return TransactionBodyCustomField
     */
    public function setBodyItemReceiptOrder($bodyItemReceiptOrder) {
        $this->bodyItemReceiptOrder = $bodyItemReceiptOrder;
        return $this;
    }

    /**
     * Get bodyItemReceiptOrder
     *
     * @return boolean
     */
    public function getBodyItemReceiptOrder() {
        return $this->bodyItemReceiptOrder;
    }


    /**
     * Set bodyItemFulfillment
     *
     * @param boolean $bodyItemFulfillment
     * @return TransactionBodyCustomField
     */
    public function setBodyItemFulfillment($bodyItemFulfillment) {
        $this->bodyItemFulfillment = $bodyItemFulfillment;
        return $this;
    }

    /**
     * Get bodyItemFulfillment
     *
     * @return boolean
     */
    public function getBodyItemFulfillment() {
        return $this->bodyItemFulfillment;
    }


    /**
     * Set bodyItemFulfillmentOrder
     *
     * @param boolean $bodyItemFulfillmentOrder
     * @return TransactionBodyCustomField
     */
    public function setBodyItemFulfillmentOrder($bodyItemFulfillmentOrder) {
        $this->bodyItemFulfillmentOrder = $bodyItemFulfillmentOrder;
        return $this;
    }

    /**
     * Get bodyItemFulfillmentOrder
     *
     * @return boolean
     */
    public function getBodyItemFulfillmentOrder() {
        return $this->bodyItemFulfillmentOrder;
    }


    /**
     * Set bodyInventoryAdjustment
     *
     * @param boolean $bodyInventoryAdjustment
     * @return TransactionBodyCustomField
     */
    public function setBodyInventoryAdjustment($bodyInventoryAdjustment) {
        $this->bodyInventoryAdjustment = $bodyInventoryAdjustment;
        return $this;
    }

    /**
     * Get bodyInventoryAdjustment
     *
     * @return boolean
     */
    public function getBodyInventoryAdjustment() {
        return $this->bodyInventoryAdjustment;
    }


    /**
     * Set bodyBTegata
     *
     * @param boolean $bodyBTegata
     * @return TransactionBodyCustomField
     */
    public function setBodyBTegata($bodyBTegata) {
        $this->bodyBTegata = $bodyBTegata;
        return $this;
    }

    /**
     * Get bodyBTegata
     *
     * @return boolean
     */
    public function getBodyBTegata() {
        return $this->bodyBTegata;
    }


    /**
     * Set bodyAssemblyBuild
     *
     * @param boolean $bodyAssemblyBuild
     * @return TransactionBodyCustomField
     */
    public function setBodyAssemblyBuild($bodyAssemblyBuild) {
        $this->bodyAssemblyBuild = $bodyAssemblyBuild;
        return $this;
    }

    /**
     * Get bodyAssemblyBuild
     *
     * @return boolean
     */
    public function getBodyAssemblyBuild() {
        return $this->bodyAssemblyBuild;
    }


    /**
     * Set bodyPrintFlag
     *
     * @param boolean $bodyPrintFlag
     * @return TransactionBodyCustomField
     */
    public function setBodyPrintFlag($bodyPrintFlag) {
        $this->bodyPrintFlag = $bodyPrintFlag;
        return $this;
    }

    /**
     * Get bodyPrintFlag
     *
     * @return boolean
     */
    public function getBodyPrintFlag() {
        return $this->bodyPrintFlag;
    }


    /**
     * Set bodyPickingTicket
     *
     * @param boolean $bodyPickingTicket
     * @return TransactionBodyCustomField
     */
    public function setBodyPickingTicket($bodyPickingTicket) {
        $this->bodyPickingTicket = $bodyPickingTicket;
        return $this;
    }

    /**
     * Get bodyPickingTicket
     *
     * @return boolean
     */
    public function getBodyPickingTicket() {
        return $this->bodyPickingTicket;
    }


    /**
     * Set bodyPrintPackingSlip
     *
     * @param boolean $bodyPrintPackingSlip
     * @return TransactionBodyCustomField
     */
    public function setBodyPrintPackingSlip($bodyPrintPackingSlip) {
        $this->bodyPrintPackingSlip = $bodyPrintPackingSlip;
        return $this;
    }

    /**
     * Get bodyPrintPackingSlip
     *
     * @return boolean
     */
    public function getBodyPrintPackingSlip() {
        return $this->bodyPrintPackingSlip;
    }


    /**
     * Set bodyCustomerPayment
     *
     * @param boolean $bodyCustomerPayment
     * @return TransactionBodyCustomField
     */
    public function setBodyCustomerPayment($bodyCustomerPayment) {
        $this->bodyCustomerPayment = $bodyCustomerPayment;
        return $this;
    }

    /**
     * Get bodyCustomerPayment
     *
     * @return boolean
     */
    public function getBodyCustomerPayment() {
        return $this->bodyCustomerPayment;
    }


    /**
     * Set bodyVendorPayment
     *
     * @param boolean $bodyVendorPayment
     * @return TransactionBodyCustomField
     */
    public function setBodyVendorPayment($bodyVendorPayment) {
        $this->bodyVendorPayment = $bodyVendorPayment;
        return $this;
    }

    /**
     * Get bodyVendorPayment
     *
     * @return boolean
     */
    public function getBodyVendorPayment() {
        return $this->bodyVendorPayment;
    }


    /**
     * Set bodyDeposit
     *
     * @param boolean $bodyDeposit
     * @return TransactionBodyCustomField
     */
    public function setBodyDeposit($bodyDeposit) {
        $this->bodyDeposit = $bodyDeposit;
        return $this;
    }

    /**
     * Get bodyDeposit
     *
     * @return boolean
     */
    public function getBodyDeposit() {
        return $this->bodyDeposit;
    }


    /**
     * Set bodyBom
     *
     * @param boolean $bodyBom
     * @return TransactionBodyCustomField
     */
    public function setBodyBom($bodyBom) {
        $this->bodyBom = $bodyBom;
        return $this;
    }

    /**
     * Get bodyBom
     *
     * @return boolean
     */
    public function getBodyBom() {
        return $this->bodyBom;
    }


    /**
     * Set bodyPrintStatement
     *
     * @param boolean $bodyPrintStatement
     * @return TransactionBodyCustomField
     */
    public function setBodyPrintStatement($bodyPrintStatement) {
        $this->bodyPrintStatement = $bodyPrintStatement;
        return $this;
    }

    /**
     * Get bodyPrintStatement
     *
     * @return boolean
     */
    public function getBodyPrintStatement() {
        return $this->bodyPrintStatement;
    }


    /**
     * Set filterList
     *
     * @param TransactionBodyCustomFieldFilterList $filterList
     * @return TransactionBodyCustomField
     */
    public function setFilterList(TransactionBodyCustomFieldFilterList $filterList) {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * Get filterList
     *
     * @return TransactionBodyCustomFieldFilterList
     */
    public function getFilterList() {
        return $this->filterList;
    }


    /**
     * Set accessLevel
     *
     * @param CustomizationAccessLevel $accessLevel
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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
     * @return TransactionBodyCustomField
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