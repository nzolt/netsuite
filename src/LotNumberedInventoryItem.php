<?php

namespace Nzolt\NetSuite;

class LotNumberedInventoryItem extends Record
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
     * @var ItemMatrixType $matrixType
     */
    protected $matrixType = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

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
     * @var ItemCostingMethod $costingMethod
     */
    protected $costingMethod = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var string $purchaseDescription
     */
    protected $purchaseDescription = null;

    /**
     * @var boolean $copyDescription
     */
    protected $copyDescription = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var RecordRef $cogsAccount
     */
    protected $cogsAccount = null;

    /**
     * @var RecordRef $intercoCogsAccount
     */
    protected $intercoCogsAccount = null;

    /**
     * @var RecordRef $vendor
     */
    protected $vendor = null;

    /**
     * @var string $salesDescription
     */
    protected $salesDescription = null;

    /**
     * @var RecordRef $incomeAccount
     */
    protected $incomeAccount = null;

    /**
     * @var RecordRef $intercoIncomeAccount
     */
    protected $intercoIncomeAccount = null;

    /**
     * @var RecordRef $issueProduct
     */
    protected $issueProduct = null;

    /**
     * @var RecordRef $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var RecordRef $dropshipExpenseAccount
     */
    protected $dropshipExpenseAccount = null;

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
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var RecordRef $assetAccount
     */
    protected $assetAccount = null;

    /**
     * @var boolean $matchBillToReceipt
     */
    protected $matchBillToReceipt = null;

    /**
     * @var RecordRef $billQtyVarianceAcct
     */
    protected $billQtyVarianceAcct = null;

    /**
     * @var RecordRef $billPriceVarianceAcct
     */
    protected $billPriceVarianceAcct = null;

    /**
     * @var RecordRef $billExchRateVarianceAcct
     */
    protected $billExchRateVarianceAcct = null;

    /**
     * @var RecordRef $gainLossAccount
     */
    protected $gainLossAccount = null;

    /**
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var string $costingMethodDisplay
     */
    protected $costingMethodDisplay = null;

    /**
     * @var string $shippingCostUnits
     */
    protected $shippingCostUnits = null;

    /**
     * @var string $handlingCostUnits
     */
    protected $handlingCostUnits = null;

    /**
     * @var RecordRef $unitsType
     */
    protected $unitsType = null;

    /**
     * @var RecordRef $stockUnit
     */
    protected $stockUnit = null;

    /**
     * @var RecordRef $purchaseUnit
     */
    protected $purchaseUnit = null;

    /**
     * @var RecordRef $saleUnit
     */
    protected $saleUnit = null;

    /**
     * @var string $minimumQuantityUnits
     */
    protected $minimumQuantityUnits = null;

    /**
     * @var string $safetyStockLevelUnits
     */
    protected $safetyStockLevelUnits = null;

    /**
     * @var RecordRef $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var boolean $trackLandedCost
     */
    protected $trackLandedCost = null;

    /**
     * @var string $matrixItemNameTemplate
     */
    protected $matrixItemNameTemplate = null;

    /**
     * @var boolean $isDropShipItem
     */
    protected $isDropShipItem = null;

    /**
     * @var boolean $isSpecialOrderItem
     */
    protected $isSpecialOrderItem = null;

    /**
     * @var string $stockDescription
     */
    protected $stockDescription = null;

    /**
     * @var RecordRef $deferredRevenueAccount
     */
    protected $deferredRevenueAccount = null;

    /**
     * @var boolean $producer
     */
    protected $producer = null;

    /**
     * @var string $manufacturer
     */
    protected $manufacturer = null;

    /**
     * @var RecordRef $revRecSchedule
     */
    protected $revRecSchedule = null;

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
     * @var RecordRef $defaultItemShipMethod
     */
    protected $defaultItemShipMethod = null;

    /**
     * @var ShippingCarrier $itemCarrier
     */
    protected $itemCarrier = null;

    /**
     * @var boolean $roundUpAsComponent
     */
    protected $roundUpAsComponent = null;

    /**
     * @var float $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var float $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var float $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var float $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var float $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var float $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var RecordRefList $itemShipMethodList
     */
    protected $itemShipMethodList = null;

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
     * @var RecordRef $shipPackage
     */
    protected $shipPackage = null;

    /**
     * @var boolean $shipIndividually
     */
    protected $shipIndividually = null;

    /**
     * @var RecordRef $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    /**
     * @var boolean $pricesIncludeTax
     */
    protected $pricesIncludeTax = null;

    /**
     * @var RecordRef $purchasePriceVarianceAcct
     */
    protected $purchasePriceVarianceAcct = null;

    /**
     * @var RecordRef $quantityPricingSchedule
     */
    protected $quantityPricingSchedule = null;

    /**
     * @var boolean $useMarginalRates
     */
    protected $useMarginalRates = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var float $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var float $transferPrice
     */
    protected $transferPrice = null;

    /**
     * @var ItemOverallQuantityPricingType $overallQuantityPricingType
     */
    protected $overallQuantityPricingType = null;

    /**
     * @var RecordRef $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var RecordRef $preferredLocation
     */
    protected $preferredLocation = null;

    /**
     * @var boolean $isStorePickupAllowed
     */
    protected $isStorePickupAllowed = null;

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
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var string $costUnits
     */
    protected $costUnits = null;

    /**
     * @var int $reorderMultiple
     */
    protected $reorderMultiple = null;

    /**
     * @var string $quantityReorderUnits
     */
    protected $quantityReorderUnits = null;

    /**
     * @var float $totalValue
     */
    protected $totalValue = null;

    /**
     * @var boolean $useBins
     */
    protected $useBins = null;

    /**
     * @var float $averageCost
     */
    protected $averageCost = null;

    /**
     * @var int $leadTime
     */
    protected $leadTime = null;

    /**
     * @var boolean $autoLeadTime
     */
    protected $autoLeadTime = null;

    /**
     * @var float $lastPurchasePrice
     */
    protected $lastPurchasePrice = null;

    /**
     * @var boolean $autoReorderPoint
     */
    protected $autoReorderPoint = null;

    /**
     * @var boolean $autoPreferredStockLevel
     */
    protected $autoPreferredStockLevel = null;

    /**
     * @var float $preferredStockLevelDays
     */
    protected $preferredStockLevelDays = null;

    /**
     * @var float $safetyStockLevel
     */
    protected $safetyStockLevel = null;

    /**
     * @var int $safetyStockLevelDays
     */
    protected $safetyStockLevelDays = null;

    /**
     * @var int $backwardConsumptionDays
     */
    protected $backwardConsumptionDays = null;

    /**
     * @var boolean $seasonalDemand
     */
    protected $seasonalDemand = null;

    /**
     * @var float $demandModifier
     */
    protected $demandModifier = null;

    /**
     * @var string $storeDisplayName
     */
    protected $storeDisplayName = null;

    /**
     * @var RecordRef $storeDisplayThumbnail
     */
    protected $storeDisplayThumbnail = null;

    /**
     * @var ItemWeightUnit $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @var string $weightUnits
     */
    protected $weightUnits = null;

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
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var string $quantityOnHandUnits
     */
    protected $quantityOnHandUnits = null;

    /**
     * @var \DateTime $expirationDate
     */
    protected $expirationDate = null;

    /**
     * @var \DateTime $lastInvtCountDate
     */
    protected $lastInvtCountDate = null;

    /**
     * @var \DateTime $nextInvtCountDate
     */
    protected $nextInvtCountDate = null;

    /**
     * @var int $invtCountInterval
     */
    protected $invtCountInterval = null;

    /**
     * @var ItemInvtClassification $invtClassification
     */
    protected $invtClassification = null;

    /**
     * @var float $onHandValueMli
     */
    protected $onHandValueMli = null;

    /**
     * @var string $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var float $reorderPoint
     */
    protected $reorderPoint = null;

    /**
     * @var float $preferredStockLevel
     */
    protected $preferredStockLevel = null;

    /**
     * @var string $reorderPointUnits
     */
    protected $reorderPointUnits = null;

    /**
     * @var float $defaultReturnCost
     */
    protected $defaultReturnCost = null;

    /**
     * @var RecordRef $supplyReplenishmentMethod
     */
    protected $supplyReplenishmentMethod = null;

    /**
     * @var RecordRef $alternateDemandSourceItem
     */
    protected $alternateDemandSourceItem = null;

    /**
     * @var float $fixedLotSize
     */
    protected $fixedLotSize = null;

    /**
     * @var PeriodicLotSizeType $periodicLotSizeType
     */
    protected $periodicLotSizeType = null;

    /**
     * @var RecordRef $supplyType
     */
    protected $supplyType = null;

    /**
     * @var int $demandTimeFence
     */
    protected $demandTimeFence = null;

    /**
     * @var int $supplyTimeFence
     */
    protected $supplyTimeFence = null;

    /**
     * @var int $rescheduleInDays
     */
    protected $rescheduleInDays = null;

    /**
     * @var int $rescheduleOutDays
     */
    protected $rescheduleOutDays = null;

    /**
     * @var int $periodicLotSizeDays
     */
    protected $periodicLotSizeDays = null;

    /**
     * @var RecordRef $supplyLotSizingMethod
     */
    protected $supplyLotSizingMethod = null;

    /**
     * @var int $forwardConsumptionDays
     */
    protected $forwardConsumptionDays = null;

    /**
     * @var RecordRef $demandSource
     */
    protected $demandSource = null;

    /**
     * @var float $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var string $preferredStockLevelUnits
     */
    protected $preferredStockLevelUnits = null;

    /**
     * @var float $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var float $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var float $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

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
     * @var string $specialsDescription
     */
    protected $specialsDescription = null;

    /**
     * @var string $relatedItemsDescription
     */
    protected $relatedItemsDescription = null;

    /**
     * @var string $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var ProductFeedList $productFeedList
     */
    protected $productFeedList = null;

    /**
     * @var string $urlComponent
     */
    protected $urlComponent = null;

    /**
     * @var ItemOptionsList $itemOptionsList
     */
    protected $itemOptionsList = null;

    /**
     * @var MatrixOptionList $matrixOptionList
     */
    protected $matrixOptionList = null;

    /**
     * @var ItemVendorList $itemVendorList
     */
    protected $itemVendorList = null;

    /**
     * @var PricingMatrix $pricingMatrix
     */
    protected $pricingMatrix = null;

    /**
     * @var ItemAccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var RecordRefList $itemNumberOptionsList
     */
    protected $itemNumberOptionsList = null;

    /**
     * @var LotNumberedInventoryItemNumbersList $numbersList
     */
    protected $numbersList = null;

    /**
     * @var InventoryItemBinNumberList $binNumberList
     */
    protected $binNumberList = null;

    /**
     * @var SiteCategoryList $siteCategoryList
     */
    protected $siteCategoryList = null;

    /**
     * @var LotNumberedInventoryItemLocationsList $locationsList
     */
    protected $locationsList = null;

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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setMatrixType($matrixType)
    {
      $this->matrixType = $matrixType;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
      return $this->vendorName;
    }

    /**
     * @param string $vendorName
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setHazmatItemUnitsQty($hazmatItemUnitsQty)
    {
      $this->hazmatItemUnitsQty = $hazmatItemUnitsQty;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return ItemCostingMethod
     */
    public function getCostingMethod()
    {
      return $this->costingMethod;
    }

    /**
     * @param ItemCostingMethod $costingMethod
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCostingMethod($costingMethod)
    {
      $this->costingMethod = $costingMethod;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseDescription()
    {
      return $this->purchaseDescription;
    }

    /**
     * @param string $purchaseDescription
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPurchaseDescription($purchaseDescription)
    {
      $this->purchaseDescription = $purchaseDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCopyDescription()
    {
      return $this->copyDescription;
    }

    /**
     * @param boolean $copyDescription
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCopyDescription($copyDescription)
    {
      $this->copyDescription = $copyDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCogsAccount()
    {
      return $this->cogsAccount;
    }

    /**
     * @param RecordRef $cogsAccount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCogsAccount($cogsAccount)
    {
      $this->cogsAccount = $cogsAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoCogsAccount()
    {
      return $this->intercoCogsAccount;
    }

    /**
     * @param RecordRef $intercoCogsAccount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIntercoCogsAccount($intercoCogsAccount)
    {
      $this->intercoCogsAccount = $intercoCogsAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param RecordRef $vendor
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSalesDescription($salesDescription)
    {
      $this->salesDescription = $salesDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIncomeAccount($incomeAccount)
    {
      $this->incomeAccount = $incomeAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIntercoIncomeAccount()
    {
      return $this->intercoIncomeAccount;
    }

    /**
     * @param RecordRef $intercoIncomeAccount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIntercoIncomeAccount($intercoIncomeAccount)
    {
      $this->intercoIncomeAccount = $intercoIncomeAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIssueProduct($issueProduct)
    {
      $this->issueProduct = $issueProduct;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDropshipExpenseAccount()
    {
      return $this->dropshipExpenseAccount;
    }

    /**
     * @param RecordRef $dropshipExpenseAccount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDropshipExpenseAccount($dropshipExpenseAccount)
    {
      $this->dropshipExpenseAccount = $dropshipExpenseAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDirectRevenuePosting($directRevenuePosting)
    {
      $this->directRevenuePosting = $directRevenuePosting;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssetAccount()
    {
      return $this->assetAccount;
    }

    /**
     * @param RecordRef $assetAccount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAssetAccount($assetAccount)
    {
      $this->assetAccount = $assetAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMatchBillToReceipt()
    {
      return $this->matchBillToReceipt;
    }

    /**
     * @param boolean $matchBillToReceipt
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setMatchBillToReceipt($matchBillToReceipt)
    {
      $this->matchBillToReceipt = $matchBillToReceipt;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillQtyVarianceAcct()
    {
      return $this->billQtyVarianceAcct;
    }

    /**
     * @param RecordRef $billQtyVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setBillQtyVarianceAcct($billQtyVarianceAcct)
    {
      $this->billQtyVarianceAcct = $billQtyVarianceAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillPriceVarianceAcct()
    {
      return $this->billPriceVarianceAcct;
    }

    /**
     * @param RecordRef $billPriceVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setBillPriceVarianceAcct($billPriceVarianceAcct)
    {
      $this->billPriceVarianceAcct = $billPriceVarianceAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillExchRateVarianceAcct()
    {
      return $this->billExchRateVarianceAcct;
    }

    /**
     * @param RecordRef $billExchRateVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setBillExchRateVarianceAcct($billExchRateVarianceAcct)
    {
      $this->billExchRateVarianceAcct = $billExchRateVarianceAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGainLossAccount()
    {
      return $this->gainLossAccount;
    }

    /**
     * @param RecordRef $gainLossAccount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setGainLossAccount($gainLossAccount)
    {
      $this->gainLossAccount = $gainLossAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setHandlingCost($handlingCost)
    {
      $this->handlingCost = $handlingCost;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostingMethodDisplay()
    {
      return $this->costingMethodDisplay;
    }

    /**
     * @param string $costingMethodDisplay
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCostingMethodDisplay($costingMethodDisplay)
    {
      $this->costingMethodDisplay = $costingMethodDisplay;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setShippingCostUnits($shippingCostUnits)
    {
      $this->shippingCostUnits = $shippingCostUnits;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setHandlingCostUnits($handlingCostUnits)
    {
      $this->handlingCostUnits = $handlingCostUnits;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStockUnit()
    {
      return $this->stockUnit;
    }

    /**
     * @param RecordRef $stockUnit
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setStockUnit($stockUnit)
    {
      $this->stockUnit = $stockUnit;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseUnit()
    {
      return $this->purchaseUnit;
    }

    /**
     * @param RecordRef $purchaseUnit
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPurchaseUnit($purchaseUnit)
    {
      $this->purchaseUnit = $purchaseUnit;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSaleUnit($saleUnit)
    {
      $this->saleUnit = $saleUnit;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setMinimumQuantityUnits($minimumQuantityUnits)
    {
      $this->minimumQuantityUnits = $minimumQuantityUnits;
      return $this;
    }

    /**
     * @return string
     */
    public function getSafetyStockLevelUnits()
    {
      return $this->safetyStockLevelUnits;
    }

    /**
     * @param string $safetyStockLevelUnits
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSafetyStockLevelUnits($safetyStockLevelUnits)
    {
      $this->safetyStockLevelUnits = $safetyStockLevelUnits;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTrackLandedCost()
    {
      return $this->trackLandedCost;
    }

    /**
     * @param boolean $trackLandedCost
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setTrackLandedCost($trackLandedCost)
    {
      $this->trackLandedCost = $trackLandedCost;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setMatrixItemNameTemplate($matrixItemNameTemplate)
    {
      $this->matrixItemNameTemplate = $matrixItemNameTemplate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDropShipItem()
    {
      return $this->isDropShipItem;
    }

    /**
     * @param boolean $isDropShipItem
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIsDropShipItem($isDropShipItem)
    {
      $this->isDropShipItem = $isDropShipItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSpecialOrderItem()
    {
      return $this->isSpecialOrderItem;
    }

    /**
     * @param boolean $isSpecialOrderItem
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIsSpecialOrderItem($isSpecialOrderItem)
    {
      $this->isSpecialOrderItem = $isSpecialOrderItem;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setStockDescription($stockDescription)
    {
      $this->stockDescription = $stockDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDeferredRevenueAccount($deferredRevenueAccount)
    {
      $this->deferredRevenueAccount = $deferredRevenueAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setManufacturer($manufacturer)
    {
      $this->manufacturer = $manufacturer;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
      $this->countryOfManufacture = $countryOfManufacture;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setItemCarrier($itemCarrier)
    {
      $this->itemCarrier = $itemCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRoundUpAsComponent()
    {
      return $this->roundUpAsComponent;
    }

    /**
     * @param boolean $roundUpAsComponent
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setRoundUpAsComponent($roundUpAsComponent)
    {
      $this->roundUpAsComponent = $roundUpAsComponent;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param float $receiptQuantity
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setReceiptQuantity($receiptQuantity)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param float $receiptAmount
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setReceiptAmount($receiptAmount)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setItemShipMethodList($itemShipMethodList)
    {
      $this->itemShipMethodList = $itemShipMethodList;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setEnforceMinQtyInternally($enforceMinQtyInternally)
    {
      $this->enforceMinQtyInternally = $enforceMinQtyInternally;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setShipIndividually($shipIndividually)
    {
      $this->shipIndividually = $shipIndividually;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSoftDescriptor()
    {
      return $this->softDescriptor;
    }

    /**
     * @param RecordRef $softDescriptor
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPricesIncludeTax($pricesIncludeTax)
    {
      $this->pricesIncludeTax = $pricesIncludeTax;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchasePriceVarianceAcct()
    {
      return $this->purchasePriceVarianceAcct;
    }

    /**
     * @param RecordRef $purchasePriceVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPurchasePriceVarianceAcct($purchasePriceVarianceAcct)
    {
      $this->purchasePriceVarianceAcct = $purchasePriceVarianceAcct;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setUseMarginalRates($useMarginalRates)
    {
      $this->useMarginalRates = $useMarginalRates;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransferPrice()
    {
      return $this->transferPrice;
    }

    /**
     * @param float $transferPrice
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setTransferPrice($transferPrice)
    {
      $this->transferPrice = $transferPrice;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPreferredLocation()
    {
      return $this->preferredLocation;
    }

    /**
     * @param RecordRef $preferredLocation
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPreferredLocation($preferredLocation)
    {
      $this->preferredLocation = $preferredLocation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStorePickupAllowed()
    {
      return $this->isStorePickupAllowed;
    }

    /**
     * @param boolean $isStorePickupAllowed
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setIsStorePickupAllowed($isStorePickupAllowed)
    {
      $this->isStorePickupAllowed = $isStorePickupAllowed;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param float $cost
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostUnits()
    {
      return $this->costUnits;
    }

    /**
     * @param string $costUnits
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setCostUnits($costUnits)
    {
      $this->costUnits = $costUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getReorderMultiple()
    {
      return $this->reorderMultiple;
    }

    /**
     * @param int $reorderMultiple
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setReorderMultiple($reorderMultiple)
    {
      $this->reorderMultiple = $reorderMultiple;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantityReorderUnits()
    {
      return $this->quantityReorderUnits;
    }

    /**
     * @param string $quantityReorderUnits
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityReorderUnits($quantityReorderUnits)
    {
      $this->quantityReorderUnits = $quantityReorderUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalValue()
    {
      return $this->totalValue;
    }

    /**
     * @param float $totalValue
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setTotalValue($totalValue)
    {
      $this->totalValue = $totalValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseBins()
    {
      return $this->useBins;
    }

    /**
     * @param boolean $useBins
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setUseBins($useBins)
    {
      $this->useBins = $useBins;
      return $this;
    }

    /**
     * @return float
     */
    public function getAverageCost()
    {
      return $this->averageCost;
    }

    /**
     * @param float $averageCost
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAverageCost($averageCost)
    {
      $this->averageCost = $averageCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeadTime()
    {
      return $this->leadTime;
    }

    /**
     * @param int $leadTime
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setLeadTime($leadTime)
    {
      $this->leadTime = $leadTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoLeadTime()
    {
      return $this->autoLeadTime;
    }

    /**
     * @param boolean $autoLeadTime
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAutoLeadTime($autoLeadTime)
    {
      $this->autoLeadTime = $autoLeadTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getLastPurchasePrice()
    {
      return $this->lastPurchasePrice;
    }

    /**
     * @param float $lastPurchasePrice
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setLastPurchasePrice($lastPurchasePrice)
    {
      $this->lastPurchasePrice = $lastPurchasePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoReorderPoint()
    {
      return $this->autoReorderPoint;
    }

    /**
     * @param boolean $autoReorderPoint
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAutoReorderPoint($autoReorderPoint)
    {
      $this->autoReorderPoint = $autoReorderPoint;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoPreferredStockLevel()
    {
      return $this->autoPreferredStockLevel;
    }

    /**
     * @param boolean $autoPreferredStockLevel
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAutoPreferredStockLevel($autoPreferredStockLevel)
    {
      $this->autoPreferredStockLevel = $autoPreferredStockLevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevelDays()
    {
      return $this->preferredStockLevelDays;
    }

    /**
     * @param float $preferredStockLevelDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPreferredStockLevelDays($preferredStockLevelDays)
    {
      $this->preferredStockLevelDays = $preferredStockLevelDays;
      return $this;
    }

    /**
     * @return float
     */
    public function getSafetyStockLevel()
    {
      return $this->safetyStockLevel;
    }

    /**
     * @param float $safetyStockLevel
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSafetyStockLevel($safetyStockLevel)
    {
      $this->safetyStockLevel = $safetyStockLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getSafetyStockLevelDays()
    {
      return $this->safetyStockLevelDays;
    }

    /**
     * @param int $safetyStockLevelDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSafetyStockLevelDays($safetyStockLevelDays)
    {
      $this->safetyStockLevelDays = $safetyStockLevelDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getBackwardConsumptionDays()
    {
      return $this->backwardConsumptionDays;
    }

    /**
     * @param int $backwardConsumptionDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setBackwardConsumptionDays($backwardConsumptionDays)
    {
      $this->backwardConsumptionDays = $backwardConsumptionDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSeasonalDemand()
    {
      return $this->seasonalDemand;
    }

    /**
     * @param boolean $seasonalDemand
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSeasonalDemand($seasonalDemand)
    {
      $this->seasonalDemand = $seasonalDemand;
      return $this;
    }

    /**
     * @return float
     */
    public function getDemandModifier()
    {
      return $this->demandModifier;
    }

    /**
     * @param float $demandModifier
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDemandModifier($demandModifier)
    {
      $this->demandModifier = $demandModifier;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setStoreDisplayThumbnail($storeDisplayThumbnail)
    {
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setWeightUnits($weightUnits)
    {
      $this->weightUnits = $weightUnits;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setMaxDonationAmount($maxDonationAmount)
    {
      $this->maxDonationAmount = $maxDonationAmount;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setNexTagCategory($nexTagCategory)
    {
      $this->nexTagCategory = $nexTagCategory;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param float $quantityOnHand
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantityOnHandUnits()
    {
      return $this->quantityOnHandUnits;
    }

    /**
     * @param string $quantityOnHandUnits
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityOnHandUnits($quantityOnHandUnits)
    {
      $this->quantityOnHandUnits = $quantityOnHandUnits;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->expirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expirationDate
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setExpirationDate(\DateTime $expirationDate = null)
    {
      if ($expirationDate == null) {
       $this->expirationDate = null;
      } else {
        $this->expirationDate = $expirationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastInvtCountDate()
    {
      if ($this->lastInvtCountDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastInvtCountDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastInvtCountDate
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setLastInvtCountDate(\DateTime $lastInvtCountDate = null)
    {
      if ($lastInvtCountDate == null) {
       $this->lastInvtCountDate = null;
      } else {
        $this->lastInvtCountDate = $lastInvtCountDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextInvtCountDate()
    {
      if ($this->nextInvtCountDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->nextInvtCountDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $nextInvtCountDate
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setNextInvtCountDate(\DateTime $nextInvtCountDate = null)
    {
      if ($nextInvtCountDate == null) {
       $this->nextInvtCountDate = null;
      } else {
        $this->nextInvtCountDate = $nextInvtCountDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getInvtCountInterval()
    {
      return $this->invtCountInterval;
    }

    /**
     * @param int $invtCountInterval
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setInvtCountInterval($invtCountInterval)
    {
      $this->invtCountInterval = $invtCountInterval;
      return $this;
    }

    /**
     * @return ItemInvtClassification
     */
    public function getInvtClassification()
    {
      return $this->invtClassification;
    }

    /**
     * @param ItemInvtClassification $invtClassification
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setInvtClassification($invtClassification)
    {
      $this->invtClassification = $invtClassification;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHandValueMli()
    {
      return $this->onHandValueMli;
    }

    /**
     * @param float $onHandValueMli
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setOnHandValueMli($onHandValueMli)
    {
      $this->onHandValueMli = $onHandValueMli;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers()
    {
      return $this->serialNumbers;
    }

    /**
     * @param string $serialNumbers
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return float
     */
    public function getReorderPoint()
    {
      return $this->reorderPoint;
    }

    /**
     * @param float $reorderPoint
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setReorderPoint($reorderPoint)
    {
      $this->reorderPoint = $reorderPoint;
      return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevel()
    {
      return $this->preferredStockLevel;
    }

    /**
     * @param float $preferredStockLevel
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPreferredStockLevel($preferredStockLevel)
    {
      $this->preferredStockLevel = $preferredStockLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getReorderPointUnits()
    {
      return $this->reorderPointUnits;
    }

    /**
     * @param string $reorderPointUnits
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setReorderPointUnits($reorderPointUnits)
    {
      $this->reorderPointUnits = $reorderPointUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultReturnCost()
    {
      return $this->defaultReturnCost;
    }

    /**
     * @param float $defaultReturnCost
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDefaultReturnCost($defaultReturnCost)
    {
      $this->defaultReturnCost = $defaultReturnCost;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyReplenishmentMethod()
    {
      return $this->supplyReplenishmentMethod;
    }

    /**
     * @param RecordRef $supplyReplenishmentMethod
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSupplyReplenishmentMethod($supplyReplenishmentMethod)
    {
      $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAlternateDemandSourceItem()
    {
      return $this->alternateDemandSourceItem;
    }

    /**
     * @param RecordRef $alternateDemandSourceItem
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAlternateDemandSourceItem($alternateDemandSourceItem)
    {
      $this->alternateDemandSourceItem = $alternateDemandSourceItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getFixedLotSize()
    {
      return $this->fixedLotSize;
    }

    /**
     * @param float $fixedLotSize
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setFixedLotSize($fixedLotSize)
    {
      $this->fixedLotSize = $fixedLotSize;
      return $this;
    }

    /**
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType()
    {
      return $this->periodicLotSizeType;
    }

    /**
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPeriodicLotSizeType($periodicLotSizeType)
    {
      $this->periodicLotSizeType = $periodicLotSizeType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyType()
    {
      return $this->supplyType;
    }

    /**
     * @param RecordRef $supplyType
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSupplyType($supplyType)
    {
      $this->supplyType = $supplyType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDemandTimeFence()
    {
      return $this->demandTimeFence;
    }

    /**
     * @param int $demandTimeFence
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDemandTimeFence($demandTimeFence)
    {
      $this->demandTimeFence = $demandTimeFence;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplyTimeFence()
    {
      return $this->supplyTimeFence;
    }

    /**
     * @param int $supplyTimeFence
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSupplyTimeFence($supplyTimeFence)
    {
      $this->supplyTimeFence = $supplyTimeFence;
      return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleInDays()
    {
      return $this->rescheduleInDays;
    }

    /**
     * @param int $rescheduleInDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setRescheduleInDays($rescheduleInDays)
    {
      $this->rescheduleInDays = $rescheduleInDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleOutDays()
    {
      return $this->rescheduleOutDays;
    }

    /**
     * @param int $rescheduleOutDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setRescheduleOutDays($rescheduleOutDays)
    {
      $this->rescheduleOutDays = $rescheduleOutDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicLotSizeDays()
    {
      return $this->periodicLotSizeDays;
    }

    /**
     * @param int $periodicLotSizeDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPeriodicLotSizeDays($periodicLotSizeDays)
    {
      $this->periodicLotSizeDays = $periodicLotSizeDays;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyLotSizingMethod()
    {
      return $this->supplyLotSizingMethod;
    }

    /**
     * @param RecordRef $supplyLotSizingMethod
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSupplyLotSizingMethod($supplyLotSizingMethod)
    {
      $this->supplyLotSizingMethod = $supplyLotSizingMethod;
      return $this;
    }

    /**
     * @return int
     */
    public function getForwardConsumptionDays()
    {
      return $this->forwardConsumptionDays;
    }

    /**
     * @param int $forwardConsumptionDays
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setForwardConsumptionDays($forwardConsumptionDays)
    {
      $this->forwardConsumptionDays = $forwardConsumptionDays;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDemandSource()
    {
      return $this->demandSource;
    }

    /**
     * @param RecordRef $demandSource
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setDemandSource($demandSource)
    {
      $this->demandSource = $demandSource;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityOnOrder
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredStockLevelUnits()
    {
      return $this->preferredStockLevelUnits;
    }

    /**
     * @param string $preferredStockLevelUnits
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setPreferredStockLevelUnits($preferredStockLevelUnits)
    {
      $this->preferredStockLevelUnits = $preferredStockLevelUnits;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted()
    {
      return $this->quantityCommitted;
    }

    /**
     * @param float $quantityCommitted
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param float $quantityAvailable
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered()
    {
      return $this->quantityBackOrdered;
    }

    /**
     * @param float $quantityBackOrdered
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSalesTaxCode($salesTaxCode)
    {
      $this->salesTaxCode = $salesTaxCode;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setOutOfStockBehavior($outOfStockBehavior)
    {
      $this->outOfStockBehavior = $outOfStockBehavior;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSpecialsDescription($specialsDescription)
    {
      $this->specialsDescription = $specialsDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setRelatedItemsDescription($relatedItemsDescription)
    {
      $this->relatedItemsDescription = $relatedItemsDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setFeaturedDescription($featuredDescription)
    {
      $this->featuredDescription = $featuredDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setMatrixOptionList($matrixOptionList)
    {
      $this->matrixOptionList = $matrixOptionList;
      return $this;
    }

    /**
     * @return ItemVendorList
     */
    public function getItemVendorList()
    {
      return $this->itemVendorList;
    }

    /**
     * @param ItemVendorList $itemVendorList
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setItemVendorList($itemVendorList)
    {
      $this->itemVendorList = $itemVendorList;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemNumberOptionsList()
    {
      return $this->itemNumberOptionsList;
    }

    /**
     * @param RecordRefList $itemNumberOptionsList
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setItemNumberOptionsList($itemNumberOptionsList)
    {
      $this->itemNumberOptionsList = $itemNumberOptionsList;
      return $this;
    }

    /**
     * @return LotNumberedInventoryItemNumbersList
     */
    public function getNumbersList()
    {
      return $this->numbersList;
    }

    /**
     * @param LotNumberedInventoryItemNumbersList $numbersList
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setNumbersList($numbersList)
    {
      $this->numbersList = $numbersList;
      return $this;
    }

    /**
     * @return InventoryItemBinNumberList
     */
    public function getBinNumberList()
    {
      return $this->binNumberList;
    }

    /**
     * @param InventoryItemBinNumberList $binNumberList
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setBinNumberList($binNumberList)
    {
      $this->binNumberList = $binNumberList;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setSiteCategoryList($siteCategoryList)
    {
      $this->siteCategoryList = $siteCategoryList;
      return $this;
    }

    /**
     * @return LotNumberedInventoryItemLocationsList
     */
    public function getLocationsList()
    {
      return $this->locationsList;
    }

    /**
     * @param LotNumberedInventoryItemLocationsList $locationsList
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setLocationsList($locationsList)
    {
      $this->locationsList = $locationsList;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
