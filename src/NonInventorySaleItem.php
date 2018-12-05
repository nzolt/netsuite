<?php

namespace Nzolt\NetSuite;

class NonInventorySaleItem extends Record
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
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var string $shippingCostUnits
     */
    protected $shippingCostUnits = null;

    /**
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var string $handlingCostUnits
     */
    protected $handlingCostUnits = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var ItemWeightUnit $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @var string $weightUnits
     */
    protected $weightUnits = null;

    /**
     * @var string $costEstimateUnits
     */
    protected $costEstimateUnits = null;

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
     * @var string $stockDescription
     */
    protected $stockDescription = null;

    /**
     * @var boolean $isHazmatItem
     */
    protected $isHazmatItem = null;

    /**
     * @var string $hazmatId
     */
    protected $hazmatId = null;

    /**
     * @var string $hazmatShippingName
     */
    protected $hazmatShippingName = null;

    /**
     * @var string $hazmatHazardClass
     */
    protected $hazmatHazardClass = null;

    /**
     * @var HazmatPackingGroup $hazmatPackingGroup
     */
    protected $hazmatPackingGroup = null;

    /**
     * @var string $hazmatItemUnits
     */
    protected $hazmatItemUnits = null;

    /**
     * @var float $hazmatItemUnitsQty
     */
    protected $hazmatItemUnitsQty = null;

    /**
     * @var boolean $producer
     */
    protected $producer = null;

    /**
     * @var string $manufacturer
     */
    protected $manufacturer = null;

    /**
     * @var string $mpn
     */
    protected $mpn = null;

    /**
     * @var boolean $multManufactureAddr
     */
    protected $multManufactureAddr = null;

    /**
     * @var string $manufacturerAddr1
     */
    protected $manufacturerAddr1 = null;

    /**
     * @var string $manufacturerCity
     */
    protected $manufacturerCity = null;

    /**
     * @var string $manufacturerState
     */
    protected $manufacturerState = null;

    /**
     * @var string $manufacturerZip
     */
    protected $manufacturerZip = null;

    /**
     * @var Country $countryOfManufacture
     */
    protected $countryOfManufacture = null;

    /**
     * @var string $manufacturerTaxId
     */
    protected $manufacturerTaxId = null;

    /**
     * @var string $scheduleBNumber
     */
    protected $scheduleBNumber = null;

    /**
     * @var int $scheduleBQuantity
     */
    protected $scheduleBQuantity = null;

    /**
     * @var ScheduleBCode $scheduleBCode
     */
    protected $scheduleBCode = null;

    /**
     * @var string $manufacturerTariff
     */
    protected $manufacturerTariff = null;

    /**
     * @var ItemPreferenceCriterion $preferenceCriterion
     */
    protected $preferenceCriterion = null;

    /**
     * @var int $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var boolean $enforceMinQtyInternally
     */
    protected $enforceMinQtyInternally = null;

    /**
     * @var string $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var RecordRef $shipPackage
     */
    protected $shipPackage = null;

    /**
     * @var boolean $shipIndividually
     */
    protected $shipIndividually = null;

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
     * @var string $minimumQuantityUnits
     */
    protected $minimumQuantityUnits = null;

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
     * @var string $storeDisplayName
     */
    protected $storeDisplayName = null;

    /**
     * @var RecordRef $storeDisplayThumbnail
     */
    protected $storeDisplayThumbnail = null;

    /**
     * @var RecordRef $storeDisplayImage
     */
    protected $storeDisplayImage = null;

    /**
     * @var string $storeDescription
     */
    protected $storeDescription = null;

    /**
     * @var string $storeDetailedDescription
     */
    protected $storeDetailedDescription = null;

    /**
     * @var RecordRef $storeItemTemplate
     */
    protected $storeItemTemplate = null;

    /**
     * @var string $pageTitle
     */
    protected $pageTitle = null;

    /**
     * @var string $metaTagHtml
     */
    protected $metaTagHtml = null;

    /**
     * @var boolean $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var SitemapPriority $sitemapPriority
     */
    protected $sitemapPriority = null;

    /**
     * @var string $searchKeywords
     */
    protected $searchKeywords = null;

    /**
     * @var boolean $isDonationItem
     */
    protected $isDonationItem = null;

    /**
     * @var boolean $showDefaultDonationAmount
     */
    protected $showDefaultDonationAmount = null;

    /**
     * @var float $maxDonationAmount
     */
    protected $maxDonationAmount = null;

    /**
     * @var boolean $dontShowPrice
     */
    protected $dontShowPrice = null;

    /**
     * @var string $noPriceMessage
     */
    protected $noPriceMessage = null;

    /**
     * @var string $outOfStockMessage
     */
    protected $outOfStockMessage = null;

    /**
     * @var boolean $onSpecial
     */
    protected $onSpecial = null;

    /**
     * @var ItemOutOfStockBehavior $outOfStockBehavior
     */
    protected $outOfStockBehavior = null;

    /**
     * @var string $relatedItemsDescription
     */
    protected $relatedItemsDescription = null;

    /**
     * @var string $specialsDescription
     */
    protected $specialsDescription = null;

    /**
     * @var string $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var string $shoppingDotComCategory
     */
    protected $shoppingDotComCategory = null;

    /**
     * @var int $shopzillaCategoryId
     */
    protected $shopzillaCategoryId = null;

    /**
     * @var string $nexTagCategory
     */
    protected $nexTagCategory = null;

    /**
     * @var ProductFeedList $productFeedList
     */
    protected $productFeedList = null;

    /**
     * @var string $urlComponent
     */
    protected $urlComponent = null;

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
     * @var RecordRef $defaultItemShipMethod
     */
    protected $defaultItemShipMethod = null;

    /**
     * @var ShippingCarrier $itemCarrier
     */
    protected $itemCarrier = null;

    /**
     * @var RecordRefList $itemShipMethodList
     */
    protected $itemShipMethodList = null;

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
     * @var SiteCategoryList $siteCategoryList
     */
    protected $siteCategoryList = null;

    /**
     * @var TranslationList $translationsList
     */
    protected $translationsList = null;

    /**
     * @var PresentationItemList $presentationItemList
     */
    protected $presentationItemList = null;

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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost()
    {
      return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCostUnits()
    {
      return $this->shippingCostUnits;
    }

    /**
     * @param string $shippingCostUnits
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShippingCostUnits($shippingCostUnits)
    {
      $this->shippingCostUnits = $shippingCostUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandlingCost()
    {
      return $this->handlingCost;
    }

    /**
     * @param float $handlingCost
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHandlingCost($handlingCost)
    {
      $this->handlingCost = $handlingCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getHandlingCostUnits()
    {
      return $this->handlingCostUnits;
    }

    /**
     * @param string $handlingCostUnits
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHandlingCostUnits($handlingCostUnits)
    {
      $this->handlingCostUnits = $handlingCostUnits;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return ItemWeightUnit
     */
    public function getWeightUnit()
    {
      return $this->weightUnit;
    }

    /**
     * @param ItemWeightUnit $weightUnit
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setWeightUnit($weightUnit)
    {
      $this->weightUnit = $weightUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnits()
    {
      return $this->weightUnits;
    }

    /**
     * @param string $weightUnits
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setWeightUnits($weightUnits)
    {
      $this->weightUnits = $weightUnits;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setCostEstimateUnits($costEstimateUnits)
    {
      $this->costEstimateUnits = $costEstimateUnits;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setIssueProduct($issueProduct)
    {
      $this->issueProduct = $issueProduct;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getStockDescription()
    {
      return $this->stockDescription;
    }

    /**
     * @param string $stockDescription
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStockDescription($stockDescription)
    {
      $this->stockDescription = $stockDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHazmatItem()
    {
      return $this->isHazmatItem;
    }

    /**
     * @param boolean $isHazmatItem
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setIsHazmatItem($isHazmatItem)
    {
      $this->isHazmatItem = $isHazmatItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatId()
    {
      return $this->hazmatId;
    }

    /**
     * @param string $hazmatId
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHazmatId($hazmatId)
    {
      $this->hazmatId = $hazmatId;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatShippingName()
    {
      return $this->hazmatShippingName;
    }

    /**
     * @param string $hazmatShippingName
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHazmatShippingName($hazmatShippingName)
    {
      $this->hazmatShippingName = $hazmatShippingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatHazardClass()
    {
      return $this->hazmatHazardClass;
    }

    /**
     * @param string $hazmatHazardClass
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHazmatHazardClass($hazmatHazardClass)
    {
      $this->hazmatHazardClass = $hazmatHazardClass;
      return $this;
    }

    /**
     * @return HazmatPackingGroup
     */
    public function getHazmatPackingGroup()
    {
      return $this->hazmatPackingGroup;
    }

    /**
     * @param HazmatPackingGroup $hazmatPackingGroup
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHazmatPackingGroup($hazmatPackingGroup)
    {
      $this->hazmatPackingGroup = $hazmatPackingGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazmatItemUnits()
    {
      return $this->hazmatItemUnits;
    }

    /**
     * @param string $hazmatItemUnits
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHazmatItemUnits($hazmatItemUnits)
    {
      $this->hazmatItemUnits = $hazmatItemUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getHazmatItemUnitsQty()
    {
      return $this->hazmatItemUnitsQty;
    }

    /**
     * @param float $hazmatItemUnitsQty
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setHazmatItemUnitsQty($hazmatItemUnitsQty)
    {
      $this->hazmatItemUnitsQty = $hazmatItemUnitsQty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProducer()
    {
      return $this->producer;
    }

    /**
     * @param boolean $producer
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setProducer($producer)
    {
      $this->producer = $producer;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
      return $this->manufacturer;
    }

    /**
     * @param string $manufacturer
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturer($manufacturer)
    {
      $this->manufacturer = $manufacturer;
      return $this;
    }

    /**
     * @return string
     */
    public function getMpn()
    {
      return $this->mpn;
    }

    /**
     * @param string $mpn
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setMpn($mpn)
    {
      $this->mpn = $mpn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultManufactureAddr()
    {
      return $this->multManufactureAddr;
    }

    /**
     * @param boolean $multManufactureAddr
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setMultManufactureAddr($multManufactureAddr)
    {
      $this->multManufactureAddr = $multManufactureAddr;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerAddr1()
    {
      return $this->manufacturerAddr1;
    }

    /**
     * @param string $manufacturerAddr1
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturerAddr1($manufacturerAddr1)
    {
      $this->manufacturerAddr1 = $manufacturerAddr1;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerCity()
    {
      return $this->manufacturerCity;
    }

    /**
     * @param string $manufacturerCity
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturerCity($manufacturerCity)
    {
      $this->manufacturerCity = $manufacturerCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerState()
    {
      return $this->manufacturerState;
    }

    /**
     * @param string $manufacturerState
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturerState($manufacturerState)
    {
      $this->manufacturerState = $manufacturerState;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerZip()
    {
      return $this->manufacturerZip;
    }

    /**
     * @param string $manufacturerZip
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturerZip($manufacturerZip)
    {
      $this->manufacturerZip = $manufacturerZip;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountryOfManufacture()
    {
      return $this->countryOfManufacture;
    }

    /**
     * @param Country $countryOfManufacture
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
      $this->countryOfManufacture = $countryOfManufacture;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerTaxId()
    {
      return $this->manufacturerTaxId;
    }

    /**
     * @param string $manufacturerTaxId
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturerTaxId($manufacturerTaxId)
    {
      $this->manufacturerTaxId = $manufacturerTaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getScheduleBNumber()
    {
      return $this->scheduleBNumber;
    }

    /**
     * @param string $scheduleBNumber
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setScheduleBNumber($scheduleBNumber)
    {
      $this->scheduleBNumber = $scheduleBNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getScheduleBQuantity()
    {
      return $this->scheduleBQuantity;
    }

    /**
     * @param int $scheduleBQuantity
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setScheduleBQuantity($scheduleBQuantity)
    {
      $this->scheduleBQuantity = $scheduleBQuantity;
      return $this;
    }

    /**
     * @return ScheduleBCode
     */
    public function getScheduleBCode()
    {
      return $this->scheduleBCode;
    }

    /**
     * @param ScheduleBCode $scheduleBCode
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setScheduleBCode($scheduleBCode)
    {
      $this->scheduleBCode = $scheduleBCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerTariff()
    {
      return $this->manufacturerTariff;
    }

    /**
     * @param string $manufacturerTariff
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setManufacturerTariff($manufacturerTariff)
    {
      $this->manufacturerTariff = $manufacturerTariff;
      return $this;
    }

    /**
     * @return ItemPreferenceCriterion
     */
    public function getPreferenceCriterion()
    {
      return $this->preferenceCriterion;
    }

    /**
     * @param ItemPreferenceCriterion $preferenceCriterion
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setPreferenceCriterion($preferenceCriterion)
    {
      $this->preferenceCriterion = $preferenceCriterion;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setMinimumQuantity($minimumQuantity)
    {
      $this->minimumQuantity = $minimumQuantity;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipPackage()
    {
      return $this->shipPackage;
    }

    /**
     * @param RecordRef $shipPackage
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShipPackage($shipPackage)
    {
      $this->shipPackage = $shipPackage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShipIndividually()
    {
      return $this->shipIndividually;
    }

    /**
     * @param boolean $shipIndividually
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShipIndividually($shipIndividually)
    {
      $this->shipIndividually = $shipIndividually;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setMinimumQuantityUnits($minimumQuantityUnits)
    {
      $this->minimumQuantityUnits = $minimumQuantityUnits;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setRevReclassFXAccount($revReclassFXAccount)
    {
      $this->revReclassFXAccount = $revReclassFXAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDisplayName()
    {
      return $this->storeDisplayName;
    }

    /**
     * @param string $storeDisplayName
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStoreDisplayName($storeDisplayName)
    {
      $this->storeDisplayName = $storeDisplayName;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail()
    {
      return $this->storeDisplayThumbnail;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStoreDisplayThumbnail($storeDisplayThumbnail)
    {
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayImage()
    {
      return $this->storeDisplayImage;
    }

    /**
     * @param RecordRef $storeDisplayImage
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStoreDisplayImage($storeDisplayImage)
    {
      $this->storeDisplayImage = $storeDisplayImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDescription()
    {
      return $this->storeDescription;
    }

    /**
     * @param string $storeDescription
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStoreDescription($storeDescription)
    {
      $this->storeDescription = $storeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoreDetailedDescription()
    {
      return $this->storeDetailedDescription;
    }

    /**
     * @param string $storeDetailedDescription
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStoreDetailedDescription($storeDetailedDescription)
    {
      $this->storeDetailedDescription = $storeDetailedDescription;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreItemTemplate()
    {
      return $this->storeItemTemplate;
    }

    /**
     * @param RecordRef $storeItemTemplate
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setStoreItemTemplate($storeItemTemplate)
    {
      $this->storeItemTemplate = $storeItemTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param string $pageTitle
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setPageTitle($pageTitle)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getMetaTagHtml()
    {
      return $this->metaTagHtml;
    }

    /**
     * @param string $metaTagHtml
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setMetaTagHtml($metaTagHtml)
    {
      $this->metaTagHtml = $metaTagHtml;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param boolean $excludeFromSitemap
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setExcludeFromSitemap($excludeFromSitemap)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return SitemapPriority
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SitemapPriority $sitemapPriority
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setSitemapPriority($sitemapPriority)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeywords()
    {
      return $this->searchKeywords;
    }

    /**
     * @param string $searchKeywords
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setSearchKeywords($searchKeywords)
    {
      $this->searchKeywords = $searchKeywords;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDonationItem()
    {
      return $this->isDonationItem;
    }

    /**
     * @param boolean $isDonationItem
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setIsDonationItem($isDonationItem)
    {
      $this->isDonationItem = $isDonationItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDefaultDonationAmount()
    {
      return $this->showDefaultDonationAmount;
    }

    /**
     * @param boolean $showDefaultDonationAmount
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShowDefaultDonationAmount($showDefaultDonationAmount)
    {
      $this->showDefaultDonationAmount = $showDefaultDonationAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxDonationAmount()
    {
      return $this->maxDonationAmount;
    }

    /**
     * @param float $maxDonationAmount
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setMaxDonationAmount($maxDonationAmount)
    {
      $this->maxDonationAmount = $maxDonationAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDontShowPrice()
    {
      return $this->dontShowPrice;
    }

    /**
     * @param boolean $dontShowPrice
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setDontShowPrice($dontShowPrice)
    {
      $this->dontShowPrice = $dontShowPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoPriceMessage()
    {
      return $this->noPriceMessage;
    }

    /**
     * @param string $noPriceMessage
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setNoPriceMessage($noPriceMessage)
    {
      $this->noPriceMessage = $noPriceMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutOfStockMessage()
    {
      return $this->outOfStockMessage;
    }

    /**
     * @param string $outOfStockMessage
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setOutOfStockMessage($outOfStockMessage)
    {
      $this->outOfStockMessage = $outOfStockMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnSpecial()
    {
      return $this->onSpecial;
    }

    /**
     * @param boolean $onSpecial
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setOnSpecial($onSpecial)
    {
      $this->onSpecial = $onSpecial;
      return $this;
    }

    /**
     * @return ItemOutOfStockBehavior
     */
    public function getOutOfStockBehavior()
    {
      return $this->outOfStockBehavior;
    }

    /**
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setOutOfStockBehavior($outOfStockBehavior)
    {
      $this->outOfStockBehavior = $outOfStockBehavior;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelatedItemsDescription()
    {
      return $this->relatedItemsDescription;
    }

    /**
     * @param string $relatedItemsDescription
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setRelatedItemsDescription($relatedItemsDescription)
    {
      $this->relatedItemsDescription = $relatedItemsDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialsDescription()
    {
      return $this->specialsDescription;
    }

    /**
     * @param string $specialsDescription
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setSpecialsDescription($specialsDescription)
    {
      $this->specialsDescription = $specialsDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedDescription()
    {
      return $this->featuredDescription;
    }

    /**
     * @param string $featuredDescription
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setFeaturedDescription($featuredDescription)
    {
      $this->featuredDescription = $featuredDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getShoppingDotComCategory()
    {
      return $this->shoppingDotComCategory;
    }

    /**
     * @param string $shoppingDotComCategory
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShoppingDotComCategory($shoppingDotComCategory)
    {
      $this->shoppingDotComCategory = $shoppingDotComCategory;
      return $this;
    }

    /**
     * @return int
     */
    public function getShopzillaCategoryId()
    {
      return $this->shopzillaCategoryId;
    }

    /**
     * @param int $shopzillaCategoryId
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setShopzillaCategoryId($shopzillaCategoryId)
    {
      $this->shopzillaCategoryId = $shopzillaCategoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNexTagCategory()
    {
      return $this->nexTagCategory;
    }

    /**
     * @param string $nexTagCategory
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setNexTagCategory($nexTagCategory)
    {
      $this->nexTagCategory = $nexTagCategory;
      return $this;
    }

    /**
     * @return ProductFeedList
     */
    public function getProductFeedList()
    {
      return $this->productFeedList;
    }

    /**
     * @param ProductFeedList $productFeedList
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setProductFeedList($productFeedList)
    {
      $this->productFeedList = $productFeedList;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param string $urlComponent
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultItemShipMethod()
    {
      return $this->defaultItemShipMethod;
    }

    /**
     * @param RecordRef $defaultItemShipMethod
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setDefaultItemShipMethod($defaultItemShipMethod)
    {
      $this->defaultItemShipMethod = $defaultItemShipMethod;
      return $this;
    }

    /**
     * @return ShippingCarrier
     */
    public function getItemCarrier()
    {
      return $this->itemCarrier;
    }

    /**
     * @param ShippingCarrier $itemCarrier
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setItemCarrier($itemCarrier)
    {
      $this->itemCarrier = $itemCarrier;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemShipMethodList()
    {
      return $this->itemShipMethodList;
    }

    /**
     * @param RecordRefList $itemShipMethodList
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setItemShipMethodList($itemShipMethodList)
    {
      $this->itemShipMethodList = $itemShipMethodList;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setSalesTaxCode($salesTaxCode)
    {
      $this->salesTaxCode = $salesTaxCode;
      return $this;
    }

    /**
     * @return SiteCategoryList
     */
    public function getSiteCategoryList()
    {
      return $this->siteCategoryList;
    }

    /**
     * @param SiteCategoryList $siteCategoryList
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setSiteCategoryList($siteCategoryList)
    {
      $this->siteCategoryList = $siteCategoryList;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setTranslationsList($translationsList)
    {
      $this->translationsList = $translationsList;
      return $this;
    }

    /**
     * @return PresentationItemList
     */
    public function getPresentationItemList()
    {
      return $this->presentationItemList;
    }

    /**
     * @param PresentationItemList $presentationItemList
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setPresentationItemList($presentationItemList)
    {
      $this->presentationItemList = $presentationItemList;
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
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
     * @return \Nzolt\NetSuite\NonInventorySaleItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
