<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemMatrixType;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ServicePurchaseItem
 */
class ServicePurchaseItem extends Record {

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var string
     */
    protected $purchaseDescription;

    /**
     * @access public
     * @var boolean
     */
    protected $manufacturingChargeItem;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var string
     */
    protected $costUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $expenseAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var ItemMatrixType
     */
    protected $matrixType;

    /**
     * @access public
     * @var RecordRef
     */
    public $unitsType;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseUnit;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var string
     */
    protected $itemId;

    /**
     * @access public
     * @var string
     */
    protected $upcCode;

    /**
     * @access public
     * @var string
     */
    protected $displayName;

    /**
     * @access public
     * @var string
     */
    protected $vendorName;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToPartners;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $deferralAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $amortizationTemplate;

    /**
     * @access public
     * @var string
     */
    protected $residual;

    /**
     * @access public
     * @var integer
     */
    protected $amortizationPeriod;

    /**
     * @access public
     * @var boolean
     */
    protected $isFulfillable;

    /**
     * @access public
     * @var boolean
     */
    protected $generateAccruals;

    /**
     * @access public
     * @var ItemAccountingBookDetailList
     */
    protected $accountingBookDetailList;

    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var float
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var float
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var float
     */
    protected $receiptQuantityDiff;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var ItemOptionsList
     */
    protected $itemOptionsList;

    /**
     * @access public
     * @var MatrixOptionList
     */
    protected $matrixOptionList;

    /**
     * @access public
     * @var ItemVendorList
     */
    protected $itemVendorList;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseTaxCode;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesTaxCode;

    /**
     * @access public
     * @var TranslationList
     */
    protected $translationsList;

    /**
     * @access public
     * @var RecordRef
     */
    public $vendor;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"purchaseDescription" => "string",
    	"manufacturingChargeItem" => "boolean",
    	"cost" => "float",
    	"costUnits" => "string",
    	"issueProduct" => "RecordRef",
    	"includeChildren" => "boolean",
    	"expenseAccount" => "RecordRef",
    	"isTaxable" => "boolean",
    	"matrixType" => "ItemMatrixType",
    	"unitsType" => "RecordRef",
    	"purchaseUnit" => "RecordRef",
    	"customForm" => "RecordRef",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"vendorName" => "string",
    	"parent" => "RecordRef",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiaryList" => "RecordRefList",
    	"taxSchedule" => "RecordRef",
    	"deferralAccount" => "RecordRef",
    	"amortizationTemplate" => "RecordRef",
    	"residual" => "string",
    	"amortizationPeriod" => "integer",
    	"isFulfillable" => "boolean",
    	"generateAccruals" => "boolean",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"costCategory" => "RecordRef",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"currency" => "string",
    	"itemOptionsList" => "ItemOptionsList",
    	"matrixOptionList" => "MatrixOptionList",
    	"itemVendorList" => "ItemVendorList",
    	"purchaseTaxCode" => "RecordRef",
    	"salesTaxCode" => "RecordRef",
    	"translationsList" => "TranslationList",
    	"vendor" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return ServicePurchaseItem
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return ServicePurchaseItem
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set purchaseDescription
     *
     * @param string $purchaseDescription
     * @return ServicePurchaseItem
     */
    public function setPurchaseDescription($purchaseDescription) {
        $this->purchaseDescription = $purchaseDescription;
        return $this;
    }

    /**
     * Get purchaseDescription
     *
     * @return string
     */
    public function getPurchaseDescription() {
        return $this->purchaseDescription;
    }


    /**
     * Set manufacturingChargeItem
     *
     * @param boolean $manufacturingChargeItem
     * @return ServicePurchaseItem
     */
    public function setManufacturingChargeItem($manufacturingChargeItem) {
        $this->manufacturingChargeItem = $manufacturingChargeItem;
        return $this;
    }

    /**
     * Get manufacturingChargeItem
     *
     * @return boolean
     */
    public function getManufacturingChargeItem() {
        return $this->manufacturingChargeItem;
    }


    /**
     * Set cost
     *
     * @param float $cost
     * @return ServicePurchaseItem
     */
    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set costUnits
     *
     * @param string $costUnits
     * @return ServicePurchaseItem
     */
    public function setCostUnits($costUnits) {
        $this->costUnits = $costUnits;
        return $this;
    }

    /**
     * Get costUnits
     *
     * @return string
     */
    public function getCostUnits() {
        return $this->costUnits;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return ServicePurchaseItem
     */
    public function setIncludeChildren($includeChildren) {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * Get includeChildren
     *
     * @return boolean
     */
    public function getIncludeChildren() {
        return $this->includeChildren;
    }


    /**
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return ServicePurchaseItem
     */
    public function setIsTaxable($isTaxable) {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * Get isTaxable
     *
     * @return boolean
     */
    public function getIsTaxable() {
        return $this->isTaxable;
    }


    /**
     * Set matrixType
     *
     * @param ItemMatrixType $matrixType
     * @return ServicePurchaseItem
     */
    public function setMatrixType(ItemMatrixType $matrixType) {
        $this->matrixType = $matrixType;
        return $this;
    }

    /**
     * Get matrixType
     *
     * @return ItemMatrixType
     */
    public function getMatrixType() {
        return $this->matrixType;
    }


    /**
     * Set itemId
     *
     * @param string $itemId
     * @return ServicePurchaseItem
     */
    public function setItemId($itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId() {
        return $this->itemId;
    }


    /**
     * Set upcCode
     *
     * @param string $upcCode
     * @return ServicePurchaseItem
     */
    public function setUpcCode($upcCode) {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * Get upcCode
     *
     * @return string
     */
    public function getUpcCode() {
        return $this->upcCode;
    }


    /**
     * Set displayName
     *
     * @param string $displayName
     * @return ServicePurchaseItem
     */
    public function setDisplayName($displayName) {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName() {
        return $this->displayName;
    }


    /**
     * Set vendorName
     *
     * @param string $vendorName
     * @return ServicePurchaseItem
     */
    public function setVendorName($vendorName) {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * Get vendorName
     *
     * @return string
     */
    public function getVendorName() {
        return $this->vendorName;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ServicePurchaseItem
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set availableToPartners
     *
     * @param boolean $availableToPartners
     * @return ServicePurchaseItem
     */
    public function setAvailableToPartners($availableToPartners) {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * Get availableToPartners
     *
     * @return boolean
     */
    public function getAvailableToPartners() {
        return $this->availableToPartners;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return ServicePurchaseItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList) {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * Get subsidiaryList
     *
     * @return RecordRefList
     */
    public function getSubsidiaryList() {
        return $this->subsidiaryList;
    }


    /**
     * Set residual
     *
     * @param string $residual
     * @return ServicePurchaseItem
     */
    public function setResidual($residual) {
        $this->residual = $residual;
        return $this;
    }

    /**
     * Get residual
     *
     * @return string
     */
    public function getResidual() {
        return $this->residual;
    }


    /**
     * Set amortizationPeriod
     *
     * @param integer $amortizationPeriod
     * @return ServicePurchaseItem
     */
    public function setAmortizationPeriod($amortizationPeriod) {
        $this->amortizationPeriod = $amortizationPeriod;
        return $this;
    }

    /**
     * Get amortizationPeriod
     *
     * @return integer
     */
    public function getAmortizationPeriod() {
        return $this->amortizationPeriod;
    }


    /**
     * Set isFulfillable
     *
     * @param boolean $isFulfillable
     * @return ServicePurchaseItem
     */
    public function setIsFulfillable($isFulfillable) {
        $this->isFulfillable = $isFulfillable;
        return $this;
    }

    /**
     * Get isFulfillable
     *
     * @return boolean
     */
    public function getIsFulfillable() {
        return $this->isFulfillable;
    }


    /**
     * Set generateAccruals
     *
     * @param boolean $generateAccruals
     * @return ServicePurchaseItem
     */
    public function setGenerateAccruals($generateAccruals) {
        $this->generateAccruals = $generateAccruals;
        return $this;
    }

    /**
     * Get generateAccruals
     *
     * @return boolean
     */
    public function getGenerateAccruals() {
        return $this->generateAccruals;
    }


    /**
     * Set accountingBookDetailList
     *
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return ServicePurchaseItem
     */
    public function setAccountingBookDetailList(ItemAccountingBookDetailList $accountingBookDetailList) {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * Get accountingBookDetailList
     *
     * @return ItemAccountingBookDetailList
     */
    public function getAccountingBookDetailList() {
        return $this->accountingBookDetailList;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param float $purchaseOrderQuantity
     * @return ServicePurchaseItem
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return float
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param float $purchaseOrderAmount
     * @return ServicePurchaseItem
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return float
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param float $purchaseOrderQuantityDiff
     * @return ServicePurchaseItem
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return float
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set receiptQuantity
     *
     * @param float $receiptQuantity
     * @return ServicePurchaseItem
     */
    public function setReceiptQuantity($receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return float
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptAmount
     *
     * @param float $receiptAmount
     * @return ServicePurchaseItem
     */
    public function setReceiptAmount($receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return float
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param float $receiptQuantityDiff
     * @return ServicePurchaseItem
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return float
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return ServicePurchaseItem
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set itemOptionsList
     *
     * @param ItemOptionsList $itemOptionsList
     * @return ServicePurchaseItem
     */
    public function setItemOptionsList(ItemOptionsList $itemOptionsList) {
        $this->itemOptionsList = $itemOptionsList;
        return $this;
    }

    /**
     * Get itemOptionsList
     *
     * @return ItemOptionsList
     */
    public function getItemOptionsList() {
        return $this->itemOptionsList;
    }


    /**
     * Set matrixOptionList
     *
     * @param MatrixOptionList $matrixOptionList
     * @return ServicePurchaseItem
     */
    public function setMatrixOptionList(MatrixOptionList $matrixOptionList) {
        $this->matrixOptionList = $matrixOptionList;
        return $this;
    }

    /**
     * Get matrixOptionList
     *
     * @return MatrixOptionList
     */
    public function getMatrixOptionList() {
        return $this->matrixOptionList;
    }


    /**
     * Set itemVendorList
     *
     * @param ItemVendorList $itemVendorList
     * @return ServicePurchaseItem
     */
    public function setItemVendorList(ItemVendorList $itemVendorList) {
        $this->itemVendorList = $itemVendorList;
        return $this;
    }

    /**
     * Get itemVendorList
     *
     * @return ItemVendorList
     */
    public function getItemVendorList() {
        return $this->itemVendorList;
    }


    /**
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return ServicePurchaseItem
     */
    public function setTranslationsList(TranslationList $translationsList) {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * Get translationsList
     *
     * @return TranslationList
     */
    public function getTranslationsList() {
        return $this->translationsList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ServicePurchaseItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return ServicePurchaseItem
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


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ServicePurchaseItem
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}