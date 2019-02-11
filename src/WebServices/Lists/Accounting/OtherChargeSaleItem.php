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
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * OtherChargeSaleItem
 */
class OtherChargeSaleItem extends Record {

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
    public $taxSchedule;

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
    public $saleUnit;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var string
     */
    protected $costEstimateUnits;

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
     * @var integer
     */
    protected $minimumQuantity;

    /**
     * @access public
     * @var string
     */
    protected $minimumQuantityUnits;

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
    protected $isFulfillable;

    /**
     * @access public
     * @var RecordRef
     */
    public $costCategory;

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
     * @var RecordRef
     */
    public $pricingGroup;

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
    protected $deferRevRec;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

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
     * @var PricingMatrix
     */
    protected $pricingMatrix;

    /**
     * @access public
     * @var ItemAccountingBookDetailList
     */
    protected $accountingBookDetailList;

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
     * @var TranslationList
     */
    protected $translationsList;

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
    	"salesDescription" => "string",
    	"includeChildren" => "boolean",
    	"incomeAccount" => "RecordRef",
    	"isTaxable" => "boolean",
    	"matrixType" => "ItemMatrixType",
    	"taxSchedule" => "RecordRef",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"unitsType" => "RecordRef",
    	"saleUnit" => "RecordRef",
    	"issueProduct" => "RecordRef",
    	"costEstimateUnits" => "string",
    	"billingSchedule" => "RecordRef",
    	"deferredRevenueAccount" => "RecordRef",
    	"revRecSchedule" => "RecordRef",
    	"minimumQuantity" => "integer",
    	"minimumQuantityUnits" => "string",
    	"enforceMinQtyInternally" => "boolean",
    	"softDescriptor" => "string",
    	"isFulfillable" => "boolean",
    	"costCategory" => "RecordRef",
    	"pricesIncludeTax" => "boolean",
    	"quantityPricingSchedule" => "RecordRef",
    	"useMarginalRates" => "boolean",
    	"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
    	"pricingGroup" => "RecordRef",
    	"customForm" => "RecordRef",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"parent" => "RecordRef",
    	"isOnline" => "boolean",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"vsoePrice" => "float",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"deferRevRec" => "boolean",
    	"subsidiaryList" => "RecordRefList",
    	"itemOptionsList" => "ItemOptionsList",
    	"matrixOptionList" => "MatrixOptionList",
    	"pricingMatrix" => "PricingMatrix",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"purchaseTaxCode" => "RecordRef",
    	"rate" => "float",
    	"salesTaxCode" => "RecordRef",
    	"translationsList" => "TranslationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set salesDescription
     *
     * @param string $salesDescription
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set minimumQuantity
     *
     * @param integer $minimumQuantity
     * @return OtherChargeSaleItem
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
     * Set minimumQuantityUnits
     *
     * @param string $minimumQuantityUnits
     * @return OtherChargeSaleItem
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
     * Set enforceMinQtyInternally
     *
     * @param boolean $enforceMinQtyInternally
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set isFulfillable
     *
     * @param boolean $isFulfillable
     * @return OtherChargeSaleItem
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
     * Set pricesIncludeTax
     *
     * @param boolean $pricesIncludeTax
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set itemId
     *
     * @param string $itemId
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set vsoePrice
     *
     * @param float $vsoePrice
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return OtherChargeSaleItem
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
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return OtherChargeSaleItem
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
     * Set itemOptionsList
     *
     * @param ItemOptionsList $itemOptionsList
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * Set pricingMatrix
     *
     * @param PricingMatrix $pricingMatrix
     * @return OtherChargeSaleItem
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
     * Set accountingBookDetailList
     *
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return OtherChargeSaleItem
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
     * Set rate
     *
     * @param float $rate
     * @return OtherChargeSaleItem
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
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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
     * @return OtherChargeSaleItem
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