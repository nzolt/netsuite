<?php

namespace Nzolt\NetSuite;

class OtherChargeSaleItem extends Record
{

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var string $salesDescription
     */
    protected $salesDescription = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var RecordRef $incomeAccount
     */
    protected $incomeAccount = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var ItemMatrixType $matrixType
     */
    protected $matrixType = null;

    /**
     * @var RecordRef $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var RecordRef $unitsType
     */
    protected $unitsType = null;

    /**
     * @var RecordRef $saleUnit
     */
    protected $saleUnit = null;

    /**
     * @var RecordRef $issueProduct
     */
    protected $issueProduct = null;

    /**
     * @var string $costEstimateUnits
     */
    protected $costEstimateUnits = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var RecordRef $deferredRevenueAccount
     */
    protected $deferredRevenueAccount = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var int $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var string $minimumQuantityUnits
     */
    protected $minimumQuantityUnits = null;

    /**
     * @var boolean $enforceMinQtyInternally
     */
    protected $enforceMinQtyInternally = null;

    /**
     * @var string $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var boolean $isFulfillable
     */
    protected $isFulfillable = null;

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    /**
     * @var boolean $pricesIncludeTax
     */
    protected $pricesIncludeTax = null;

    /**
     * @var RecordRef $quantityPricingSchedule
     */
    protected $quantityPricingSchedule = null;

    /**
     * @var boolean $useMarginalRates
     */
    protected $useMarginalRates = null;

    /**
     * @var ItemOverallQuantityPricingType $overallQuantityPricingType
     */
    protected $overallQuantityPricingType = null;

    /**
     * @var RecordRef $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var string $upcCode
     */
    protected $upcCode = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var boolean $isGcoCompliant
     */
    protected $isGcoCompliant = null;

    /**
     * @var boolean $offerSupport
     */
    protected $offerSupport = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $matrixItemNameTemplate
     */
    protected $matrixItemNameTemplate = null;

    /**
     * @var boolean $availableToPartners
     */
    protected $availableToPartners = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var float $vsoePrice
     */
    protected $vsoePrice = null;

    /**
     * @var VsoeSopGroup $vsoeSopGroup
     */
    protected $vsoeSopGroup = null;

    /**
     * @var VsoeDeferral $vsoeDeferral
     */
    protected $vsoeDeferral = null;

    /**
     * @var VsoePermitDiscount $vsoePermitDiscount
     */
    protected $vsoePermitDiscount = null;

    /**
     * @var boolean $vsoeDelivered
     */
    protected $vsoeDelivered = null;

    /**
     * @var RecordRef $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var boolean $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var RecordRef $revenueRecognitionRule
     */
    protected $revenueRecognitionRule = null;

    /**
     * @var RecordRef $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var RecordRef $revenueAllocationGroup
     */
    protected $revenueAllocationGroup = null;

    /**
     * @var RecordRef $createRevenuePlansOn
     */
    protected $createRevenuePlansOn = null;

    /**
     * @var boolean $directRevenuePosting
     */
    protected $directRevenuePosting = null;

    /**
     * @var boolean $contingentRevenueHandling
     */
    protected $contingentRevenueHandling = null;

    /**
     * @var RecordRef $revReclassFXAccount
     */
    protected $revReclassFXAccount = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var ItemOptionsList $itemOptionsList
     */
    protected $itemOptionsList = null;

    /**
     * @var MatrixOptionList $matrixOptionList
     */
    protected $matrixOptionList = null;

    /**
     * @var PricingMatrix $pricingMatrix
     */
    protected $pricingMatrix = null;

    /**
     * @var ItemAccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var RecordRef $purchaseTaxCode
     */
    protected $purchaseTaxCode = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @var RecordRef $salesTaxCode
     */
    protected $salesTaxCode = null;

    /**
     * @var TranslationList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesDescription()
    {
      return $this->salesDescription;
    }

    /**
     * @param string $salesDescription
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setSalesDescription($salesDescription)
    {
      $this->salesDescription = $salesDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param boolean $includeChildren
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIncomeAccount()
    {
      return $this->incomeAccount;
    }

    /**
     * @param RecordRef $incomeAccount
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIncomeAccount($incomeAccount)
    {
      $this->incomeAccount = $incomeAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
      return $this->isTaxable;
    }

    /**
     * @param boolean $isTaxable
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return ItemMatrixType
     */
    public function getMatrixType()
    {
      return $this->matrixType;
    }

    /**
     * @param ItemMatrixType $matrixType
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setMatrixType($matrixType)
    {
      $this->matrixType = $matrixType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule()
    {
      return $this->taxSchedule;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType()
    {
      return $this->costEstimateType;
    }

    /**
     * @param ItemCostEstimateType $costEstimateType
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostEstimate()
    {
      return $this->costEstimate;
    }

    /**
     * @param float $costEstimate
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param RecordRef $unitsType
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleUnit()
    {
      return $this->saleUnit;
    }

    /**
     * @param RecordRef $saleUnit
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setSaleUnit($saleUnit)
    {
      $this->saleUnit = $saleUnit;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueProduct()
    {
      return $this->issueProduct;
    }

    /**
     * @param RecordRef $issueProduct
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIssueProduct($issueProduct)
    {
      $this->issueProduct = $issueProduct;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostEstimateUnits()
    {
      return $this->costEstimateUnits;
    }

    /**
     * @param string $costEstimateUnits
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCostEstimateUnits($costEstimateUnits)
    {
      $this->costEstimateUnits = $costEstimateUnits;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferredRevenueAccount()
    {
      return $this->deferredRevenueAccount;
    }

    /**
     * @param RecordRef $deferredRevenueAccount
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setDeferredRevenueAccount($deferredRevenueAccount)
    {
      $this->deferredRevenueAccount = $deferredRevenueAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumQuantity()
    {
      return $this->minimumQuantity;
    }

    /**
     * @param int $minimumQuantity
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setMinimumQuantity($minimumQuantity)
    {
      $this->minimumQuantity = $minimumQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinimumQuantityUnits()
    {
      return $this->minimumQuantityUnits;
    }

    /**
     * @param string $minimumQuantityUnits
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setMinimumQuantityUnits($minimumQuantityUnits)
    {
      $this->minimumQuantityUnits = $minimumQuantityUnits;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnforceMinQtyInternally()
    {
      return $this->enforceMinQtyInternally;
    }

    /**
     * @param boolean $enforceMinQtyInternally
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setEnforceMinQtyInternally($enforceMinQtyInternally)
    {
      $this->enforceMinQtyInternally = $enforceMinQtyInternally;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoftDescriptor()
    {
      return $this->softDescriptor;
    }

    /**
     * @param string $softDescriptor
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFulfillable()
    {
      return $this->isFulfillable;
    }

    /**
     * @param boolean $isFulfillable
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIsFulfillable($isFulfillable)
    {
      $this->isFulfillable = $isFulfillable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCostCategory()
    {
      return $this->costCategory;
    }

    /**
     * @param RecordRef $costCategory
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricesIncludeTax()
    {
      return $this->pricesIncludeTax;
    }

    /**
     * @param boolean $pricesIncludeTax
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setPricesIncludeTax($pricesIncludeTax)
    {
      $this->pricesIncludeTax = $pricesIncludeTax;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getQuantityPricingSchedule()
    {
      return $this->quantityPricingSchedule;
    }

    /**
     * @param RecordRef $quantityPricingSchedule
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setQuantityPricingSchedule($quantityPricingSchedule)
    {
      $this->quantityPricingSchedule = $quantityPricingSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseMarginalRates()
    {
      return $this->useMarginalRates;
    }

    /**
     * @param boolean $useMarginalRates
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setUseMarginalRates($useMarginalRates)
    {
      $this->useMarginalRates = $useMarginalRates;
      return $this;
    }

    /**
     * @return ItemOverallQuantityPricingType
     */
    public function getOverallQuantityPricingType()
    {
      return $this->overallQuantityPricingType;
    }

    /**
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setOverallQuantityPricingType($overallQuantityPricingType)
    {
      $this->overallQuantityPricingType = $overallQuantityPricingType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPricingGroup()
    {
      return $this->pricingGroup;
    }

    /**
     * @param RecordRef $pricingGroup
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpcCode()
    {
      return $this->upcCode;
    }

    /**
     * @param string $upcCode
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setUpcCode($upcCode)
    {
      $this->upcCode = $upcCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGcoCompliant()
    {
      return $this->isGcoCompliant;
    }

    /**
     * @param boolean $isGcoCompliant
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIsGcoCompliant($isGcoCompliant)
    {
      $this->isGcoCompliant = $isGcoCompliant;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOfferSupport()
    {
      return $this->offerSupport;
    }

    /**
     * @param boolean $offerSupport
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setOfferSupport($offerSupport)
    {
      $this->offerSupport = $offerSupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatrixItemNameTemplate()
    {
      return $this->matrixItemNameTemplate;
    }

    /**
     * @param string $matrixItemNameTemplate
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setMatrixItemNameTemplate($matrixItemNameTemplate)
    {
      $this->matrixItemNameTemplate = $matrixItemNameTemplate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailableToPartners()
    {
      return $this->availableToPartners;
    }

    /**
     * @param boolean $availableToPartners
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setAvailableToPartners($availableToPartners)
    {
      $this->availableToPartners = $availableToPartners;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return float
     */
    public function getVsoePrice()
    {
      return $this->vsoePrice;
    }

    /**
     * @param float $vsoePrice
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setVsoePrice($vsoePrice)
    {
      $this->vsoePrice = $vsoePrice;
      return $this;
    }

    /**
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup()
    {
      return $this->vsoeSopGroup;
    }

    /**
     * @param VsoeSopGroup $vsoeSopGroup
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setVsoeSopGroup($vsoeSopGroup)
    {
      $this->vsoeSopGroup = $vsoeSopGroup;
      return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral()
    {
      return $this->vsoeDeferral;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setVsoeDeferral($vsoeDeferral)
    {
      $this->vsoeDeferral = $vsoeDeferral;
      return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount()
    {
      return $this->vsoePermitDiscount;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setVsoePermitDiscount($vsoePermitDiscount)
    {
      $this->vsoePermitDiscount = $vsoePermitDiscount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVsoeDelivered()
    {
      return $this->vsoeDelivered;
    }

    /**
     * @param boolean $vsoeDelivered
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param RecordRef $itemRevenueCategory
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param boolean $deferRevRec
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule()
    {
      return $this->revenueRecognitionRule;
    }

    /**
     * @param RecordRef $revenueRecognitionRule
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setRevenueRecognitionRule($revenueRecognitionRule)
    {
      $this->revenueRecognitionRule = $revenueRecognitionRule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setRevRecForecastRule($revRecForecastRule)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueAllocationGroup()
    {
      return $this->revenueAllocationGroup;
    }

    /**
     * @param RecordRef $revenueAllocationGroup
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setRevenueAllocationGroup($revenueAllocationGroup)
    {
      $this->revenueAllocationGroup = $revenueAllocationGroup;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreateRevenuePlansOn()
    {
      return $this->createRevenuePlansOn;
    }

    /**
     * @param RecordRef $createRevenuePlansOn
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCreateRevenuePlansOn($createRevenuePlansOn)
    {
      $this->createRevenuePlansOn = $createRevenuePlansOn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectRevenuePosting()
    {
      return $this->directRevenuePosting;
    }

    /**
     * @param boolean $directRevenuePosting
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setDirectRevenuePosting($directRevenuePosting)
    {
      $this->directRevenuePosting = $directRevenuePosting;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContingentRevenueHandling()
    {
      return $this->contingentRevenueHandling;
    }

    /**
     * @param boolean $contingentRevenueHandling
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setContingentRevenueHandling($contingentRevenueHandling)
    {
      $this->contingentRevenueHandling = $contingentRevenueHandling;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevReclassFXAccount()
    {
      return $this->revReclassFXAccount;
    }

    /**
     * @param RecordRef $revReclassFXAccount
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setRevReclassFXAccount($revReclassFXAccount)
    {
      $this->revReclassFXAccount = $revReclassFXAccount;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList()
    {
      return $this->subsidiaryList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return ItemOptionsList
     */
    public function getItemOptionsList()
    {
      return $this->itemOptionsList;
    }

    /**
     * @param ItemOptionsList $itemOptionsList
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setItemOptionsList($itemOptionsList)
    {
      $this->itemOptionsList = $itemOptionsList;
      return $this;
    }

    /**
     * @return MatrixOptionList
     */
    public function getMatrixOptionList()
    {
      return $this->matrixOptionList;
    }

    /**
     * @param MatrixOptionList $matrixOptionList
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setMatrixOptionList($matrixOptionList)
    {
      $this->matrixOptionList = $matrixOptionList;
      return $this;
    }

    /**
     * @return PricingMatrix
     */
    public function getPricingMatrix()
    {
      return $this->pricingMatrix;
    }

    /**
     * @param PricingMatrix $pricingMatrix
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setPricingMatrix($pricingMatrix)
    {
      $this->pricingMatrix = $pricingMatrix;
      return $this;
    }

    /**
     * @return ItemAccountingBookDetailList
     */
    public function getAccountingBookDetailList()
    {
      return $this->accountingBookDetailList;
    }

    /**
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseTaxCode()
    {
      return $this->purchaseTaxCode;
    }

    /**
     * @param RecordRef $purchaseTaxCode
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setPurchaseTaxCode($purchaseTaxCode)
    {
      $this->purchaseTaxCode = $purchaseTaxCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param float $rate
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesTaxCode()
    {
      return $this->salesTaxCode;
    }

    /**
     * @param RecordRef $salesTaxCode
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setSalesTaxCode($salesTaxCode)
    {
      $this->salesTaxCode = $salesTaxCode;
      return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList()
    {
      return $this->translationsList;
    }

    /**
     * @param TranslationList $translationsList
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\OtherChargeSaleItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
