<?php

namespace Nzolt\NetSuite;

class LotNumberedAssemblyItem extends Record
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
     * @var string $vendorName
     */
    protected $vendorName = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var boolean $printItems
     */
    protected $printItems = null;

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
     * @var boolean $useComponentYield
     */
    protected $useComponentYield = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var boolean $availableToPartners
     */
    protected $availableToPartners = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRef $costCategory
     */
    protected $costCategory = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RecordRef $cogsAccount
     */
    protected $cogsAccount = null;

    /**
     * @var RecordRef $vendor
     */
    protected $vendor = null;

    /**
     * @var RecordRef $incomeAccount
     */
    protected $incomeAccount = null;

    /**
     * @var RecordRef $intercoIncomeAccount
     */
    protected $intercoIncomeAccount = null;

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
     * @var RecordRef $salesTaxCode
     */
    protected $salesTaxCode = null;

    /**
     * @var RecordRef $purchaseTaxCode
     */
    protected $purchaseTaxCode = null;

    /**
     * @var RecordRef $prodQtyVarianceAcct
     */
    protected $prodQtyVarianceAcct = null;

    /**
     * @var RecordRef $prodPriceVarianceAcct
     */
    protected $prodPriceVarianceAcct = null;

    /**
     * @var RecordRef $purchasePriceVarianceAcct
     */
    protected $purchasePriceVarianceAcct = null;

    /**
     * @var RecordRef $wipVarianceAcct
     */
    protected $wipVarianceAcct = null;

    /**
     * @var RecordRef $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var RecordRef $scrapAcct
     */
    protected $scrapAcct = null;

    /**
     * @var float $shippingCost
     */
    protected $shippingCost = null;

    /**
     * @var RecordRef $wipAcct
     */
    protected $wipAcct = null;

    /**
     * @var float $handlingCost
     */
    protected $handlingCost = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var ItemWeightUnit $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @var ItemCostingMethod $costingMethod
     */
    protected $costingMethod = null;

    /**
     * @var boolean $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var string $costingMethodDisplay
     */
    protected $costingMethodDisplay = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

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
     * @var boolean $trackLandedCost
     */
    protected $trackLandedCost = null;

    /**
     * @var string $matrixItemNameTemplate
     */
    protected $matrixItemNameTemplate = null;

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
     * @var string $manufactureraddr1
     */
    protected $manufactureraddr1 = null;

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
     * @var AssemblyItemEffectiveBomControl $effectiveBomControl
     */
    protected $effectiveBomControl = null;

    /**
     * @var string $manufacturerTaxId
     */
    protected $manufacturerTaxId = null;

    /**
     * @var string $defaultRevision
     */
    protected $defaultRevision = null;

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
     * @var boolean $isDropShipItem
     */
    protected $isDropShipItem = null;

    /**
     * @var boolean $isPhantom
     */
    protected $isPhantom = null;

    /**
     * @var RecordRefList $itemShipMethodList
     */
    protected $itemShipMethodList = null;

    /**
     * @var string $scheduleBNumber
     */
    protected $scheduleBNumber = null;

    /**
     * @var int $scheduleBQuantity
     */
    protected $scheduleBQuantity = null;

    /**
     * @var RecordRef $scheduleBCode
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
     * @var RecordRef $issueProduct
     */
    protected $issueProduct = null;

    /**
     * @var int $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var boolean $enforceMinQtyInternally
     */
    protected $enforceMinQtyInternally = null;

    /**
     * @var RecordRef $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var boolean $isSpecialWorkOrderItem
     */
    protected $isSpecialWorkOrderItem = null;

    /**
     * @var boolean $pricesIncludeTax
     */
    protected $pricesIncludeTax = null;

    /**
     * @var RecordRef $quantityPricingSchedule
     */
    protected $quantityPricingSchedule = null;

    /**
     * @var boolean $buildEntireAssembly
     */
    protected $buildEntireAssembly = null;

    /**
     * @var float $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var boolean $useMarginalRates
     */
    protected $useMarginalRates = null;

    /**
     * @var int $reorderMultiple
     */
    protected $reorderMultiple = null;

    /**
     * @var float $cost
     */
    protected $cost = null;

    /**
     * @var ItemCostEstimateType $costEstimateType
     */
    protected $costEstimateType = null;

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
     * @var RecordRef $intercoCogsAccount
     */
    protected $intercoCogsAccount = null;

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
     * @var RecordRef $unbuildVarianceAccount
     */
    protected $unbuildVarianceAccount = null;

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
     * @var RecordRef $dropshipExpenseAccount
     */
    protected $dropshipExpenseAccount = null;

    /**
     * @var RecordRef $preferredLocation
     */
    protected $preferredLocation = null;

    /**
     * @var boolean $isStorePickupAllowed
     */
    protected $isStorePickupAllowed = null;

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
     * @var float $lastPurchasePrice
     */
    protected $lastPurchasePrice = null;

    /**
     * @var string $purchaseDescription
     */
    protected $purchaseDescription = null;

    /**
     * @var int $leadTime
     */
    protected $leadTime = null;

    /**
     * @var boolean $autoLeadTime
     */
    protected $autoLeadTime = null;

    /**
     * @var int $buildTime
     */
    protected $buildTime = null;

    /**
     * @var float $safetyStockLevel
     */
    protected $safetyStockLevel = null;

    /**
     * @var int $safetyStockLevelDays
     */
    protected $safetyStockLevelDays = null;

    /**
     * @var boolean $seasonalDemand
     */
    protected $seasonalDemand = null;

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
     * @var float $demandModifier
     */
    protected $demandModifier = null;

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
     * @var boolean $shipIndividually
     */
    protected $shipIndividually = null;

    /**
     * @var RecordRef $shipPackage
     */
    protected $shipPackage = null;

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
     * @var RecordRef $supplyLotSizingMethod
     */
    protected $supplyLotSizingMethod = null;

    /**
     * @var RecordRef $demandSource
     */
    protected $demandSource = null;

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
     * @var float $quantityOnOrder
     */
    protected $quantityOnOrder = null;

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
     * @var string $urlComponent
     */
    protected $urlComponent = null;

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
     * @var string $shoppingDotComCategory
     */
    protected $shoppingDotComCategory = null;

    /**
     * @var ItemOutOfStockBehavior $outOfStockBehavior
     */
    protected $outOfStockBehavior = null;

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
     * @var string $relatedItemsDescription
     */
    protected $relatedItemsDescription = null;

    /**
     * @var boolean $onSpecial
     */
    protected $onSpecial = null;

    /**
     * @var string $specialsDescription
     */
    protected $specialsDescription = null;

    /**
     * @var string $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var ItemOptionsList $itemOptionsList
     */
    protected $itemOptionsList = null;

    /**
     * @var RecordRefList $itemNumberOptionsList
     */
    protected $itemNumberOptionsList = null;

    /**
     * @var ItemVendorList $itemVendorList
     */
    protected $itemVendorList = null;

    /**
     * @var PricingMatrix $pricingMatrix
     */
    protected $pricingMatrix = null;

    /**
     * @var LotNumberedAssemblyItemBillOfMaterialsList $billOfMaterialsList
     */
    protected $billOfMaterialsList = null;

    /**
     * @var ItemMemberList $memberList
     */
    protected $memberList = null;

    /**
     * @var ItemAccountingBookDetailList $accountingBookDetailList
     */
    protected $accountingBookDetailList = null;

    /**
     * @var LotNumberedInventoryItemLocationsList $locationsList
     */
    protected $locationsList = null;

    /**
     * @var SiteCategoryList $siteCategoryList
     */
    protected $siteCategoryList = null;

    /**
     * @var InventoryItemBinNumberList $binNumberList
     */
    protected $binNumberList = null;

    /**
     * @var LotNumberedInventoryItemNumbersList $numbersList
     */
    protected $numbersList = null;

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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrintItems()
    {
      return $this->printItems;
    }

    /**
     * @param boolean $printItems
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPrintItems($printItems)
    {
      $this->printItems = $printItems;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setOfferSupport($offerSupport)
    {
      $this->offerSupport = $offerSupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseComponentYield()
    {
      return $this->useComponentYield;
    }

    /**
     * @param boolean $useComponentYield
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setUseComponentYield($useComponentYield)
    {
      $this->useComponentYield = $useComponentYield;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setAvailableToPartners($availableToPartners)
    {
      $this->availableToPartners = $availableToPartners;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDepartment($department)
    {
      $this->department = $department;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCogsAccount($cogsAccount)
    {
      $this->cogsAccount = $cogsAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIntercoIncomeAccount($intercoIncomeAccount)
    {
      $this->intercoIncomeAccount = $intercoIncomeAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setGainLossAccount($gainLossAccount)
    {
      $this->gainLossAccount = $gainLossAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSalesTaxCode($salesTaxCode)
    {
      $this->salesTaxCode = $salesTaxCode;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPurchaseTaxCode($purchaseTaxCode)
    {
      $this->purchaseTaxCode = $purchaseTaxCode;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProdQtyVarianceAcct()
    {
      return $this->prodQtyVarianceAcct;
    }

    /**
     * @param RecordRef $prodQtyVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setProdQtyVarianceAcct($prodQtyVarianceAcct)
    {
      $this->prodQtyVarianceAcct = $prodQtyVarianceAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProdPriceVarianceAcct()
    {
      return $this->prodPriceVarianceAcct;
    }

    /**
     * @param RecordRef $prodPriceVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setProdPriceVarianceAcct($prodPriceVarianceAcct)
    {
      $this->prodPriceVarianceAcct = $prodPriceVarianceAcct;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPurchasePriceVarianceAcct($purchasePriceVarianceAcct)
    {
      $this->purchasePriceVarianceAcct = $purchasePriceVarianceAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWipVarianceAcct()
    {
      return $this->wipVarianceAcct;
    }

    /**
     * @param RecordRef $wipVarianceAcct
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setWipVarianceAcct($wipVarianceAcct)
    {
      $this->wipVarianceAcct = $wipVarianceAcct;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getScrapAcct()
    {
      return $this->scrapAcct;
    }

    /**
     * @param RecordRef $scrapAcct
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setScrapAcct($scrapAcct)
    {
      $this->scrapAcct = $scrapAcct;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setShippingCost($shippingCost)
    {
      $this->shippingCost = $shippingCost;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWipAcct()
    {
      return $this->wipAcct;
    }

    /**
     * @param RecordRef $wipAcct
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setWipAcct($wipAcct)
    {
      $this->wipAcct = $wipAcct;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setWeightUnit($weightUnit)
    {
      $this->weightUnit = $weightUnit;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCostingMethod($costingMethod)
    {
      $this->costingMethod = $costingMethod;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCostingMethodDisplay($costingMethodDisplay)
    {
      $this->costingMethodDisplay = $costingMethodDisplay;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setRate($rate)
    {
      $this->rate = $rate;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSaleUnit($saleUnit)
    {
      $this->saleUnit = $saleUnit;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setMatrixItemNameTemplate($matrixItemNameTemplate)
    {
      $this->matrixItemNameTemplate = $matrixItemNameTemplate;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setStockDescription($stockDescription)
    {
      $this->stockDescription = $stockDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setMultManufactureAddr($multManufactureAddr)
    {
      $this->multManufactureAddr = $multManufactureAddr;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufactureraddr1()
    {
      return $this->manufactureraddr1;
    }

    /**
     * @param string $manufactureraddr1
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setManufactureraddr1($manufactureraddr1)
    {
      $this->manufactureraddr1 = $manufactureraddr1;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
      $this->countryOfManufacture = $countryOfManufacture;
      return $this;
    }

    /**
     * @return AssemblyItemEffectiveBomControl
     */
    public function getEffectiveBomControl()
    {
      return $this->effectiveBomControl;
    }

    /**
     * @param AssemblyItemEffectiveBomControl $effectiveBomControl
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setEffectiveBomControl($effectiveBomControl)
    {
      $this->effectiveBomControl = $effectiveBomControl;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setManufacturerTaxId($manufacturerTaxId)
    {
      $this->manufacturerTaxId = $manufacturerTaxId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultRevision()
    {
      return $this->defaultRevision;
    }

    /**
     * @param string $defaultRevision
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDefaultRevision($defaultRevision)
    {
      $this->defaultRevision = $defaultRevision;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIsDropShipItem($isDropShipItem)
    {
      $this->isDropShipItem = $isDropShipItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPhantom()
    {
      return $this->isPhantom;
    }

    /**
     * @param boolean $isPhantom
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIsPhantom($isPhantom)
    {
      $this->isPhantom = $isPhantom;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setItemShipMethodList($itemShipMethodList)
    {
      $this->itemShipMethodList = $itemShipMethodList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setScheduleBQuantity($scheduleBQuantity)
    {
      $this->scheduleBQuantity = $scheduleBQuantity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getScheduleBCode()
    {
      return $this->scheduleBCode;
    }

    /**
     * @param RecordRef $scheduleBCode
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPreferenceCriterion($preferenceCriterion)
    {
      $this->preferenceCriterion = $preferenceCriterion;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIssueProduct($issueProduct)
    {
      $this->issueProduct = $issueProduct;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setEnforceMinQtyInternally($enforceMinQtyInternally)
    {
      $this->enforceMinQtyInternally = $enforceMinQtyInternally;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSpecialWorkOrderItem()
    {
      return $this->isSpecialWorkOrderItem;
    }

    /**
     * @param boolean $isSpecialWorkOrderItem
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIsSpecialWorkOrderItem($isSpecialWorkOrderItem)
    {
      $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setQuantityPricingSchedule($quantityPricingSchedule)
    {
      $this->quantityPricingSchedule = $quantityPricingSchedule;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBuildEntireAssembly()
    {
      return $this->buildEntireAssembly;
    }

    /**
     * @param boolean $buildEntireAssembly
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setBuildEntireAssembly($buildEntireAssembly)
    {
      $this->buildEntireAssembly = $buildEntireAssembly;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setUseMarginalRates($useMarginalRates)
    {
      $this->useMarginalRates = $useMarginalRates;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setReorderMultiple($reorderMultiple)
    {
      $this->reorderMultiple = $reorderMultiple;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setHazmatItemUnitsQty($hazmatItemUnitsQty)
    {
      $this->hazmatItemUnitsQty = $hazmatItemUnitsQty;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIntercoCogsAccount($intercoCogsAccount)
    {
      $this->intercoCogsAccount = $intercoCogsAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnbuildVarianceAccount()
    {
      return $this->unbuildVarianceAccount;
    }

    /**
     * @param RecordRef $unbuildVarianceAccount
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setUnbuildVarianceAccount($unbuildVarianceAccount)
    {
      $this->unbuildVarianceAccount = $unbuildVarianceAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDirectRevenuePosting($directRevenuePosting)
    {
      $this->directRevenuePosting = $directRevenuePosting;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDropshipExpenseAccount($dropshipExpenseAccount)
    {
      $this->dropshipExpenseAccount = $dropshipExpenseAccount;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setIsStorePickupAllowed($isStorePickupAllowed)
    {
      $this->isStorePickupAllowed = $isStorePickupAllowed;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setAverageCost($averageCost)
    {
      $this->averageCost = $averageCost;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setLastPurchasePrice($lastPurchasePrice)
    {
      $this->lastPurchasePrice = $lastPurchasePrice;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPurchaseDescription($purchaseDescription)
    {
      $this->purchaseDescription = $purchaseDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setAutoLeadTime($autoLeadTime)
    {
      $this->autoLeadTime = $autoLeadTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuildTime()
    {
      return $this->buildTime;
    }

    /**
     * @param int $buildTime
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setBuildTime($buildTime)
    {
      $this->buildTime = $buildTime;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSafetyStockLevelDays($safetyStockLevelDays)
    {
      $this->safetyStockLevelDays = $safetyStockLevelDays;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSeasonalDemand($seasonalDemand)
    {
      $this->seasonalDemand = $seasonalDemand;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPreferredStockLevel($preferredStockLevel)
    {
      $this->preferredStockLevel = $preferredStockLevel;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setInvtClassification($invtClassification)
    {
      $this->invtClassification = $invtClassification;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDemandModifier($demandModifier)
    {
      $this->demandModifier = $demandModifier;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPreferredStockLevelDays($preferredStockLevelDays)
    {
      $this->preferredStockLevelDays = $preferredStockLevelDays;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setShipIndividually($shipIndividually)
    {
      $this->shipIndividually = $shipIndividually;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setShipPackage($shipPackage)
    {
      $this->shipPackage = $shipPackage;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setFixedLotSize($fixedLotSize)
    {
      $this->fixedLotSize = $fixedLotSize;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setRescheduleOutDays($rescheduleOutDays)
    {
      $this->rescheduleOutDays = $rescheduleOutDays;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSupplyLotSizingMethod($supplyLotSizingMethod)
    {
      $this->supplyLotSizingMethod = $supplyLotSizingMethod;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setDemandSource($demandSource)
    {
      $this->demandSource = $demandSource;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSitemapPriority($sitemapPriority)
    {
      $this->sitemapPriority = $sitemapPriority;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setOutOfStockMessage($outOfStockMessage)
    {
      $this->outOfStockMessage = $outOfStockMessage;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setShoppingDotComCategory($shoppingDotComCategory)
    {
      $this->shoppingDotComCategory = $shoppingDotComCategory;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setOutOfStockBehavior($outOfStockBehavior)
    {
      $this->outOfStockBehavior = $outOfStockBehavior;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setProductFeedList($productFeedList)
    {
      $this->productFeedList = $productFeedList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setRelatedItemsDescription($relatedItemsDescription)
    {
      $this->relatedItemsDescription = $relatedItemsDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setOnSpecial($onSpecial)
    {
      $this->onSpecial = $onSpecial;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setFeaturedDescription($featuredDescription)
    {
      $this->featuredDescription = $featuredDescription;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setItemOptionsList($itemOptionsList)
    {
      $this->itemOptionsList = $itemOptionsList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setItemNumberOptionsList($itemNumberOptionsList)
    {
      $this->itemNumberOptionsList = $itemNumberOptionsList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setPricingMatrix($pricingMatrix)
    {
      $this->pricingMatrix = $pricingMatrix;
      return $this;
    }

    /**
     * @return LotNumberedAssemblyItemBillOfMaterialsList
     */
    public function getBillOfMaterialsList()
    {
      return $this->billOfMaterialsList;
    }

    /**
     * @param LotNumberedAssemblyItemBillOfMaterialsList $billOfMaterialsList
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setBillOfMaterialsList($billOfMaterialsList)
    {
      $this->billOfMaterialsList = $billOfMaterialsList;
      return $this;
    }

    /**
     * @return ItemMemberList
     */
    public function getMemberList()
    {
      return $this->memberList;
    }

    /**
     * @param ItemMemberList $memberList
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setMemberList($memberList)
    {
      $this->memberList = $memberList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setAccountingBookDetailList($accountingBookDetailList)
    {
      $this->accountingBookDetailList = $accountingBookDetailList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setLocationsList($locationsList)
    {
      $this->locationsList = $locationsList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setSiteCategoryList($siteCategoryList)
    {
      $this->siteCategoryList = $siteCategoryList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setBinNumberList($binNumberList)
    {
      $this->binNumberList = $binNumberList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setNumbersList($numbersList)
    {
      $this->numbersList = $numbersList;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
