<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemMatrixType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverallQuantityPricingType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOutOfStockBehavior;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ServiceResaleItem
 */
class ServiceResaleItem extends Record {

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
    public $expenseAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoExpenseAccount;

    /**
     * @access public
     * @var string
     */
    protected $salesDescription;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $incomeAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoIncomeAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var ItemMatrixType
     */
    protected $matrixType;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var ItemCostEstimateType
     */
    protected $costEstimateType;

    /**
     * @access public
     * @var float
     */
    protected $costEstimate;

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
    public $saleUnit;

    /**
     * @access public
     * @var string
     */
    protected $costEstimateUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $deferredRevenueAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;

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
     * @var boolean
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var integer
     */
    protected $amortizationPeriod;

    /**
     * @access public
     * @var integer
     */
    protected $minimumQuantity;

    /**
     * @access public
     * @var boolean
     */
    protected $enforceMinQtyInternally;

    /**
     * @access public
     * @var string
     */
    protected $softDescriptor;

    /**
     * @access public
     * @var boolean
     */
    protected $pricesIncludeTax;

    /**
     * @access public
     * @var RecordRef
     */
    public $quantityPricingSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $useMarginalRates;

    /**
     * @access public
     * @var ItemOverallQuantityPricingType
     */
    protected $overallQuantityPricingType;

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
     * @var RecordRef
     */
    public $pricingGroup;

    /**
     * @access public
     * @var string
     */
    protected $minimumQuantityUnits;

    /**
     * @access public
     * @var float
     */
    protected $vsoePrice;

    /**
     * @access public
     * @var VsoeSopGroup
     */
    protected $vsoeSopGroup;

    /**
     * @access public
     * @var VsoeDeferral
     */
    protected $vsoeDeferral;

    /**
     * @access public
     * @var VsoePermitDiscount
     */
    protected $vsoePermitDiscount;

    /**
     * @access public
     * @var boolean
     */
    protected $vsoeDelivered;

    /**
     * @access public
     * @var boolean
     */
    protected $createJob;

    /**
     * @access public
     * @var string
     */
    protected $storeDisplayName;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayThumbnail;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeDisplayImage;

    /**
     * @access public
     * @var string
     */
    protected $storeDescription;

    /**
     * @access public
     * @var string
     */
    protected $storeDetailedDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $storeItemTemplate;

    /**
     * @access public
     * @var string
     */
    protected $pageTitle;

    /**
     * @access public
     * @var string
     */
    protected $urlComponent;

    /**
     * @access public
     * @var string
     */
    protected $metaTagHtml;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeFromSitemap;

    /**
     * @access public
     * @var SitemapPriority
     */
    protected $sitemapPriority;

    /**
     * @access public
     * @var string
     */
    protected $searchKeywords;

    /**
     * @access public
     * @var boolean
     */
    protected $isDonationItem;

    /**
     * @access public
     * @var boolean
     */
    protected $showDefaultDonationAmount;

    /**
     * @access public
     * @var float
     */
    protected $maxDonationAmount;

    /**
     * @access public
     * @var boolean
     */
    protected $dontShowPrice;

    /**
     * @access public
     * @var string
     */
    protected $noPriceMessage;

    /**
     * @access public
     * @var string
     */
    protected $outOfStockMessage;

    /**
     * @access public
     * @var boolean
     */
    protected $onSpecial;

    /**
     * @access public
     * @var ItemOutOfStockBehavior
     */
    protected $outOfStockBehavior;

    /**
     * @access public
     * @var string
     */
    protected $relatedItemsDescription;

    /**
     * @access public
     * @var string
     */
    protected $specialsDescription;

    /**
     * @access public
     * @var ServiceItemTaskTemplatesList
     */
    protected $itemTaskTemplatesList;

    /**
     * @access public
     * @var string
     */
    protected $featuredDescription;

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
    protected $isOnline;

    /**
     * @access public
     * @var boolean
     */
    protected $isGcoCompliant;

    /**
     * @access public
     * @var boolean
     */
    protected $offerSupport;

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
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var BillingRatesMatrix
     */
    protected $billingRatesMatrix;

    /**
     * @access public
     * @var ItemAccountingBookDetailList
     */
    protected $accountingBookDetailList;

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
     * @var PricingMatrix
     */
    protected $pricingMatrix;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseTaxCode;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var RecordRef
     */
    public $salesTaxCode;

    /**
     * @access public
     * @var SiteCategoryList
     */
    protected $siteCategoryList;

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
     * @var PresentationItemList
     */
    protected $presentationItemList;

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
    	"expenseAccount" => "RecordRef",
    	"intercoExpenseAccount" => "RecordRef",
    	"salesDescription" => "string",
    	"includeChildren" => "boolean",
    	"incomeAccount" => "RecordRef",
    	"intercoIncomeAccount" => "RecordRef",
    	"taxSchedule" => "RecordRef",
    	"matrixType" => "ItemMatrixType",
    	"isTaxable" => "boolean",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"unitsType" => "RecordRef",
    	"purchaseUnit" => "RecordRef",
    	"saleUnit" => "RecordRef",
    	"costEstimateUnits" => "string",
    	"issueProduct" => "RecordRef",
    	"billingSchedule" => "RecordRef",
    	"deferredRevenueAccount" => "RecordRef",
    	"revRecSchedule" => "RecordRef",
    	"deferralAccount" => "RecordRef",
    	"amortizationTemplate" => "RecordRef",
    	"residual" => "string",
    	"deferRevRec" => "boolean",
    	"amortizationPeriod" => "integer",
    	"minimumQuantity" => "integer",
    	"enforceMinQtyInternally" => "boolean",
    	"softDescriptor" => "string",
    	"pricesIncludeTax" => "boolean",
    	"quantityPricingSchedule" => "RecordRef",
    	"useMarginalRates" => "boolean",
    	"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
    	"isFulfillable" => "boolean",
    	"generateAccruals" => "boolean",
    	"costCategory" => "RecordRef",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"pricingGroup" => "RecordRef",
    	"minimumQuantityUnits" => "string",
    	"vsoePrice" => "float",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"createJob" => "boolean",
    	"storeDisplayName" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"storeDisplayImage" => "RecordRef",
    	"storeDescription" => "string",
    	"storeDetailedDescription" => "string",
    	"storeItemTemplate" => "RecordRef",
    	"pageTitle" => "string",
    	"urlComponent" => "string",
    	"metaTagHtml" => "string",
    	"excludeFromSitemap" => "boolean",
    	"sitemapPriority" => "SitemapPriority",
    	"searchKeywords" => "string",
    	"isDonationItem" => "boolean",
    	"showDefaultDonationAmount" => "boolean",
    	"maxDonationAmount" => "float",
    	"dontShowPrice" => "boolean",
    	"noPriceMessage" => "string",
    	"outOfStockMessage" => "string",
    	"onSpecial" => "boolean",
    	"outOfStockBehavior" => "ItemOutOfStockBehavior",
    	"relatedItemsDescription" => "string",
    	"specialsDescription" => "string",
    	"itemTaskTemplatesList" => "ServiceItemTaskTemplatesList",
    	"featuredDescription" => "string",
    	"customForm" => "RecordRef",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"vendorName" => "string",
    	"parent" => "RecordRef",
    	"isOnline" => "boolean",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"subsidiaryList" => "RecordRefList",
    	"currency" => "string",
    	"billingRatesMatrix" => "BillingRatesMatrix",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"itemOptionsList" => "ItemOptionsList",
    	"matrixOptionList" => "MatrixOptionList",
    	"itemVendorList" => "ItemVendorList",
    	"pricingMatrix" => "PricingMatrix",
    	"purchaseTaxCode" => "RecordRef",
    	"rate" => "float",
    	"salesTaxCode" => "RecordRef",
    	"siteCategoryList" => "SiteCategoryList",
    	"translationsList" => "TranslationList",
    	"vendor" => "RecordRef",
    	"presentationItemList" => "PresentationItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * Set salesDescription
     *
     * @param string $salesDescription
     * @return ServiceResaleItem
     */
    public function setSalesDescription($salesDescription) {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * Get salesDescription
     *
     * @return string
     */
    public function getSalesDescription() {
        return $this->salesDescription;
    }


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return ServiceResaleItem
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
     * Set matrixType
     *
     * @param ItemMatrixType $matrixType
     * @return ServiceResaleItem
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
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return ServiceResaleItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return ServiceResaleItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType) {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * Get costEstimateType
     *
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType() {
        return $this->costEstimateType;
    }


    /**
     * Set costEstimate
     *
     * @param float $costEstimate
     * @return ServiceResaleItem
     */
    public function setCostEstimate($costEstimate) {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * Get costEstimate
     *
     * @return float
     */
    public function getCostEstimate() {
        return $this->costEstimate;
    }


    /**
     * Set costEstimateUnits
     *
     * @param string $costEstimateUnits
     * @return ServiceResaleItem
     */
    public function setCostEstimateUnits($costEstimateUnits) {
        $this->costEstimateUnits = $costEstimateUnits;
        return $this;
    }

    /**
     * Get costEstimateUnits
     *
     * @return string
     */
    public function getCostEstimateUnits() {
        return $this->costEstimateUnits;
    }


    /**
     * Set residual
     *
     * @param string $residual
     * @return ServiceResaleItem
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
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return ServiceResaleItem
     */
    public function setDeferRevRec($deferRevRec) {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * Get deferRevRec
     *
     * @return boolean
     */
    public function getDeferRevRec() {
        return $this->deferRevRec;
    }


    /**
     * Set amortizationPeriod
     *
     * @param integer $amortizationPeriod
     * @return ServiceResaleItem
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
     * Set minimumQuantity
     *
     * @param integer $minimumQuantity
     * @return ServiceResaleItem
     */
    public function setMinimumQuantity($minimumQuantity) {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Get minimumQuantity
     *
     * @return integer
     */
    public function getMinimumQuantity() {
        return $this->minimumQuantity;
    }


    /**
     * Set enforceMinQtyInternally
     *
     * @param boolean $enforceMinQtyInternally
     * @return ServiceResaleItem
     */
    public function setEnforceMinQtyInternally($enforceMinQtyInternally) {
        $this->enforceMinQtyInternally = $enforceMinQtyInternally;
        return $this;
    }

    /**
     * Get enforceMinQtyInternally
     *
     * @return boolean
     */
    public function getEnforceMinQtyInternally() {
        return $this->enforceMinQtyInternally;
    }


    /**
     * Set softDescriptor
     *
     * @param string $softDescriptor
     * @return ServiceResaleItem
     */
    public function setSoftDescriptor($softDescriptor) {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * Get softDescriptor
     *
     * @return string
     */
    public function getSoftDescriptor() {
        return $this->softDescriptor;
    }


    /**
     * Set pricesIncludeTax
     *
     * @param boolean $pricesIncludeTax
     * @return ServiceResaleItem
     */
    public function setPricesIncludeTax($pricesIncludeTax) {
        $this->pricesIncludeTax = $pricesIncludeTax;
        return $this;
    }

    /**
     * Get pricesIncludeTax
     *
     * @return boolean
     */
    public function getPricesIncludeTax() {
        return $this->pricesIncludeTax;
    }


    /**
     * Set useMarginalRates
     *
     * @param boolean $useMarginalRates
     * @return ServiceResaleItem
     */
    public function setUseMarginalRates($useMarginalRates) {
        $this->useMarginalRates = $useMarginalRates;
        return $this;
    }

    /**
     * Get useMarginalRates
     *
     * @return boolean
     */
    public function getUseMarginalRates() {
        return $this->useMarginalRates;
    }


    /**
     * Set overallQuantityPricingType
     *
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return ServiceResaleItem
     */
    public function setOverallQuantityPricingType(ItemOverallQuantityPricingType $overallQuantityPricingType) {
        $this->overallQuantityPricingType = $overallQuantityPricingType;
        return $this;
    }

    /**
     * Get overallQuantityPricingType
     *
     * @return ItemOverallQuantityPricingType
     */
    public function getOverallQuantityPricingType() {
        return $this->overallQuantityPricingType;
    }


    /**
     * Set isFulfillable
     *
     * @param boolean $isFulfillable
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * Set purchaseOrderQuantity
     *
     * @param float $purchaseOrderQuantity
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * Set minimumQuantityUnits
     *
     * @param string $minimumQuantityUnits
     * @return ServiceResaleItem
     */
    public function setMinimumQuantityUnits($minimumQuantityUnits) {
        $this->minimumQuantityUnits = $minimumQuantityUnits;
        return $this;
    }

    /**
     * Get minimumQuantityUnits
     *
     * @return string
     */
    public function getMinimumQuantityUnits() {
        return $this->minimumQuantityUnits;
    }


    /**
     * Set vsoePrice
     *
     * @param float $vsoePrice
     * @return ServiceResaleItem
     */
    public function setVsoePrice($vsoePrice) {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * Get vsoePrice
     *
     * @return float
     */
    public function getVsoePrice() {
        return $this->vsoePrice;
    }


    /**
     * Set vsoeSopGroup
     *
     * @param VsoeSopGroup $vsoeSopGroup
     * @return ServiceResaleItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup) {
        $this->vsoeSopGroup = $vsoeSopGroup;
        return $this;
    }

    /**
     * Get vsoeSopGroup
     *
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup() {
        return $this->vsoeSopGroup;
    }


    /**
     * Set vsoeDeferral
     *
     * @param VsoeDeferral $vsoeDeferral
     * @return ServiceResaleItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral) {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * Get vsoeDeferral
     *
     * @return VsoeDeferral
     */
    public function getVsoeDeferral() {
        return $this->vsoeDeferral;
    }


    /**
     * Set vsoePermitDiscount
     *
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return ServiceResaleItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount) {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * Get vsoePermitDiscount
     *
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount() {
        return $this->vsoePermitDiscount;
    }


    /**
     * Set vsoeDelivered
     *
     * @param boolean $vsoeDelivered
     * @return ServiceResaleItem
     */
    public function setVsoeDelivered($vsoeDelivered) {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * Get vsoeDelivered
     *
     * @return boolean
     */
    public function getVsoeDelivered() {
        return $this->vsoeDelivered;
    }


    /**
     * Set createJob
     *
     * @param boolean $createJob
     * @return ServiceResaleItem
     */
    public function setCreateJob($createJob) {
        $this->createJob = $createJob;
        return $this;
    }

    /**
     * Get createJob
     *
     * @return boolean
     */
    public function getCreateJob() {
        return $this->createJob;
    }


    /**
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return ServiceResaleItem
     */
    public function setStoreDisplayName($storeDisplayName) {
        $this->storeDisplayName = $storeDisplayName;
        return $this;
    }

    /**
     * Get storeDisplayName
     *
     * @return string
     */
    public function getStoreDisplayName() {
        return $this->storeDisplayName;
    }


    /**
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return ServiceResaleItem
     */
    public function setStoreDescription($storeDescription) {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * Get storeDescription
     *
     * @return string
     */
    public function getStoreDescription() {
        return $this->storeDescription;
    }


    /**
     * Set storeDetailedDescription
     *
     * @param string $storeDetailedDescription
     * @return ServiceResaleItem
     */
    public function setStoreDetailedDescription($storeDetailedDescription) {
        $this->storeDetailedDescription = $storeDetailedDescription;
        return $this;
    }

    /**
     * Get storeDetailedDescription
     *
     * @return string
     */
    public function getStoreDetailedDescription() {
        return $this->storeDetailedDescription;
    }


    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     * @return ServiceResaleItem
     */
    public function setPageTitle($pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->pageTitle;
    }


    /**
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return ServiceResaleItem
     */
    public function setUrlComponent($urlComponent) {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * Get urlComponent
     *
     * @return string
     */
    public function getUrlComponent() {
        return $this->urlComponent;
    }


    /**
     * Set metaTagHtml
     *
     * @param string $metaTagHtml
     * @return ServiceResaleItem
     */
    public function setMetaTagHtml($metaTagHtml) {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * Get metaTagHtml
     *
     * @return string
     */
    public function getMetaTagHtml() {
        return $this->metaTagHtml;
    }


    /**
     * Set excludeFromSitemap
     *
     * @param boolean $excludeFromSitemap
     * @return ServiceResaleItem
     */
    public function setExcludeFromSitemap($excludeFromSitemap) {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * Get excludeFromSitemap
     *
     * @return boolean
     */
    public function getExcludeFromSitemap() {
        return $this->excludeFromSitemap;
    }


    /**
     * Set sitemapPriority
     *
     * @param SitemapPriority $sitemapPriority
     * @return ServiceResaleItem
     */
    public function setSitemapPriority(SitemapPriority $sitemapPriority) {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * Get sitemapPriority
     *
     * @return SitemapPriority
     */
    public function getSitemapPriority() {
        return $this->sitemapPriority;
    }


    /**
     * Set searchKeywords
     *
     * @param string $searchKeywords
     * @return ServiceResaleItem
     */
    public function setSearchKeywords($searchKeywords) {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * Get searchKeywords
     *
     * @return string
     */
    public function getSearchKeywords() {
        return $this->searchKeywords;
    }


    /**
     * Set isDonationItem
     *
     * @param boolean $isDonationItem
     * @return ServiceResaleItem
     */
    public function setIsDonationItem($isDonationItem) {
        $this->isDonationItem = $isDonationItem;
        return $this;
    }

    /**
     * Get isDonationItem
     *
     * @return boolean
     */
    public function getIsDonationItem() {
        return $this->isDonationItem;
    }


    /**
     * Set showDefaultDonationAmount
     *
     * @param boolean $showDefaultDonationAmount
     * @return ServiceResaleItem
     */
    public function setShowDefaultDonationAmount($showDefaultDonationAmount) {
        $this->showDefaultDonationAmount = $showDefaultDonationAmount;
        return $this;
    }

    /**
     * Get showDefaultDonationAmount
     *
     * @return boolean
     */
    public function getShowDefaultDonationAmount() {
        return $this->showDefaultDonationAmount;
    }


    /**
     * Set maxDonationAmount
     *
     * @param float $maxDonationAmount
     * @return ServiceResaleItem
     */
    public function setMaxDonationAmount($maxDonationAmount) {
        $this->maxDonationAmount = $maxDonationAmount;
        return $this;
    }

    /**
     * Get maxDonationAmount
     *
     * @return float
     */
    public function getMaxDonationAmount() {
        return $this->maxDonationAmount;
    }


    /**
     * Set dontShowPrice
     *
     * @param boolean $dontShowPrice
     * @return ServiceResaleItem
     */
    public function setDontShowPrice($dontShowPrice) {
        $this->dontShowPrice = $dontShowPrice;
        return $this;
    }

    /**
     * Get dontShowPrice
     *
     * @return boolean
     */
    public function getDontShowPrice() {
        return $this->dontShowPrice;
    }


    /**
     * Set noPriceMessage
     *
     * @param string $noPriceMessage
     * @return ServiceResaleItem
     */
    public function setNoPriceMessage($noPriceMessage) {
        $this->noPriceMessage = $noPriceMessage;
        return $this;
    }

    /**
     * Get noPriceMessage
     *
     * @return string
     */
    public function getNoPriceMessage() {
        return $this->noPriceMessage;
    }


    /**
     * Set outOfStockMessage
     *
     * @param string $outOfStockMessage
     * @return ServiceResaleItem
     */
    public function setOutOfStockMessage($outOfStockMessage) {
        $this->outOfStockMessage = $outOfStockMessage;
        return $this;
    }

    /**
     * Get outOfStockMessage
     *
     * @return string
     */
    public function getOutOfStockMessage() {
        return $this->outOfStockMessage;
    }


    /**
     * Set onSpecial
     *
     * @param boolean $onSpecial
     * @return ServiceResaleItem
     */
    public function setOnSpecial($onSpecial) {
        $this->onSpecial = $onSpecial;
        return $this;
    }

    /**
     * Get onSpecial
     *
     * @return boolean
     */
    public function getOnSpecial() {
        return $this->onSpecial;
    }


    /**
     * Set outOfStockBehavior
     *
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return ServiceResaleItem
     */
    public function setOutOfStockBehavior(ItemOutOfStockBehavior $outOfStockBehavior) {
        $this->outOfStockBehavior = $outOfStockBehavior;
        return $this;
    }

    /**
     * Get outOfStockBehavior
     *
     * @return ItemOutOfStockBehavior
     */
    public function getOutOfStockBehavior() {
        return $this->outOfStockBehavior;
    }


    /**
     * Set relatedItemsDescription
     *
     * @param string $relatedItemsDescription
     * @return ServiceResaleItem
     */
    public function setRelatedItemsDescription($relatedItemsDescription) {
        $this->relatedItemsDescription = $relatedItemsDescription;
        return $this;
    }

    /**
     * Get relatedItemsDescription
     *
     * @return string
     */
    public function getRelatedItemsDescription() {
        return $this->relatedItemsDescription;
    }


    /**
     * Set specialsDescription
     *
     * @param string $specialsDescription
     * @return ServiceResaleItem
     */
    public function setSpecialsDescription($specialsDescription) {
        $this->specialsDescription = $specialsDescription;
        return $this;
    }

    /**
     * Get specialsDescription
     *
     * @return string
     */
    public function getSpecialsDescription() {
        return $this->specialsDescription;
    }


    /**
     * Set itemTaskTemplatesList
     *
     * @param ServiceItemTaskTemplatesList $itemTaskTemplatesList
     * @return ServiceResaleItem
     */
    public function setItemTaskTemplatesList(ServiceItemTaskTemplatesList $itemTaskTemplatesList) {
        $this->itemTaskTemplatesList = $itemTaskTemplatesList;
        return $this;
    }

    /**
     * Get itemTaskTemplatesList
     *
     * @return ServiceItemTaskTemplatesList
     */
    public function getItemTaskTemplatesList() {
        return $this->itemTaskTemplatesList;
    }


    /**
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return ServiceResaleItem
     */
    public function setFeaturedDescription($featuredDescription) {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * Get featuredDescription
     *
     * @return string
     */
    public function getFeaturedDescription() {
        return $this->featuredDescription;
    }


    /**
     * Set itemId
     *
     * @param string $itemId
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return ServiceResaleItem
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set isGcoCompliant
     *
     * @param boolean $isGcoCompliant
     * @return ServiceResaleItem
     */
    public function setIsGcoCompliant($isGcoCompliant) {
        $this->isGcoCompliant = $isGcoCompliant;
        return $this;
    }

    /**
     * Get isGcoCompliant
     *
     * @return boolean
     */
    public function getIsGcoCompliant() {
        return $this->isGcoCompliant;
    }


    /**
     * Set offerSupport
     *
     * @param boolean $offerSupport
     * @return ServiceResaleItem
     */
    public function setOfferSupport($offerSupport) {
        $this->offerSupport = $offerSupport;
        return $this;
    }

    /**
     * Get offerSupport
     *
     * @return boolean
     */
    public function getOfferSupport() {
        return $this->offerSupport;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * Set currency
     *
     * @param string $currency
     * @return ServiceResaleItem
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
     * Set billingRatesMatrix
     *
     * @param BillingRatesMatrix $billingRatesMatrix
     * @return ServiceResaleItem
     */
    public function setBillingRatesMatrix(BillingRatesMatrix $billingRatesMatrix) {
        $this->billingRatesMatrix = $billingRatesMatrix;
        return $this;
    }

    /**
     * Get billingRatesMatrix
     *
     * @return BillingRatesMatrix
     */
    public function getBillingRatesMatrix() {
        return $this->billingRatesMatrix;
    }


    /**
     * Set accountingBookDetailList
     *
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return ServiceResaleItem
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
     * Set itemOptionsList
     *
     * @param ItemOptionsList $itemOptionsList
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * Set pricingMatrix
     *
     * @param PricingMatrix $pricingMatrix
     * @return ServiceResaleItem
     */
    public function setPricingMatrix(PricingMatrix $pricingMatrix) {
        $this->pricingMatrix = $pricingMatrix;
        return $this;
    }

    /**
     * Get pricingMatrix
     *
     * @return PricingMatrix
     */
    public function getPricingMatrix() {
        return $this->pricingMatrix;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return ServiceResaleItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set siteCategoryList
     *
     * @param SiteCategoryList $siteCategoryList
     * @return ServiceResaleItem
     */
    public function setSiteCategoryList(SiteCategoryList $siteCategoryList) {
        $this->siteCategoryList = $siteCategoryList;
        return $this;
    }

    /**
     * Get siteCategoryList
     *
     * @return SiteCategoryList
     */
    public function getSiteCategoryList() {
        return $this->siteCategoryList;
    }


    /**
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return ServiceResaleItem
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
     * Set presentationItemList
     *
     * @param PresentationItemList $presentationItemList
     * @return ServiceResaleItem
     */
    public function setPresentationItemList(PresentationItemList $presentationItemList) {
        $this->presentationItemList = $presentationItemList;
        return $this;
    }

    /**
     * Get presentationItemList
     *
     * @return PresentationItemList
     */
    public function getPresentationItemList() {
        return $this->presentationItemList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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
     * @return ServiceResaleItem
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