<?php

namespace Nzolt\NetSuite;

class ItemSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $accBookRevRecForecastRule
     */
    protected $accBookRevRecForecastRule = null;

    /**
     * @var SearchColumnSelectField[] $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchColumnSelectField[] $accountingBookAmortization
     */
    protected $accountingBookAmortization = null;

    /**
     * @var SearchColumnSelectField[] $accountingBookCreatePlansOn
     */
    protected $accountingBookCreatePlansOn = null;

    /**
     * @var SearchColumnSelectField[] $accountingBookRevRecRule
     */
    protected $accountingBookRevRecRule = null;

    /**
     * @var SearchColumnSelectField[] $accountingBookRevRecSchedule
     */
    protected $accountingBookRevRecSchedule = null;

    /**
     * @var SearchColumnSelectField[] $allowedShippingMethod
     */
    protected $allowedShippingMethod = null;

    /**
     * @var SearchColumnStringField[] $alternateDemandSourceItem
     */
    protected $alternateDemandSourceItem = null;

    /**
     * @var SearchColumnSelectField[] $assetAccount
     */
    protected $assetAccount = null;

    /**
     * @var SearchColumnDoubleField[] $atpLeadTime
     */
    protected $atpLeadTime = null;

    /**
     * @var SearchColumnEnumSelectField[] $atpMethod
     */
    protected $atpMethod = null;

    /**
     * @var SearchColumnBooleanField[] $autoLeadTime
     */
    protected $autoLeadTime = null;

    /**
     * @var SearchColumnBooleanField[] $autoPreferredStockLevel
     */
    protected $autoPreferredStockLevel = null;

    /**
     * @var SearchColumnBooleanField[] $autoReorderPoint
     */
    protected $autoReorderPoint = null;

    /**
     * @var SearchColumnBooleanField[] $availableToPartners
     */
    protected $availableToPartners = null;

    /**
     * @var SearchColumnDoubleField[] $averageCost
     */
    protected $averageCost = null;

    /**
     * @var SearchColumnLongField[] $backwardConsumptionDays
     */
    protected $backwardConsumptionDays = null;

    /**
     * @var SearchColumnDoubleField[] $basePrice
     */
    protected $basePrice = null;

    /**
     * @var SearchColumnSelectField[] $billExchRateVarianceAcct
     */
    protected $billExchRateVarianceAcct = null;

    /**
     * @var SearchColumnSelectField[] $billPriceVarianceAcct
     */
    protected $billPriceVarianceAcct = null;

    /**
     * @var SearchColumnSelectField[] $billQtyVarianceAcct
     */
    protected $billQtyVarianceAcct = null;

    /**
     * @var SearchColumnStringField[] $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchColumnDoubleField[] $binOnHandAvail
     */
    protected $binOnHandAvail = null;

    /**
     * @var SearchColumnDoubleField[] $binOnHandCount
     */
    protected $binOnHandCount = null;

    /**
     * @var SearchColumnDoubleField[] $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var SearchColumnBooleanField[] $buildEntireAssembly
     */
    protected $buildEntireAssembly = null;

    /**
     * @var SearchColumnDoubleField[] $buildTime
     */
    protected $buildTime = null;

    /**
     * @var SearchColumnDoubleField[] $buyItNowPrice
     */
    protected $buyItNowPrice = null;

    /**
     * @var SearchColumnStringField[] $category
     */
    protected $category = null;

    /**
     * @var SearchColumnStringField[] $categoryPreferred
     */
    protected $categoryPreferred = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnDoubleField[] $componentYield
     */
    protected $componentYield = null;

    /**
     * @var SearchColumnBooleanField[] $contingentRevenueHandling
     */
    protected $contingentRevenueHandling = null;

    /**
     * @var SearchColumnBooleanField[] $copyDescription
     */
    protected $copyDescription = null;

    /**
     * @var SearchColumnSelectField[] $correlatedItem
     */
    protected $correlatedItem = null;

    /**
     * @var SearchColumnDoubleField[] $correlatedItemCorrelation
     */
    protected $correlatedItemCorrelation = null;

    /**
     * @var SearchColumnLongField[] $correlatedItemCount
     */
    protected $correlatedItemCount = null;

    /**
     * @var SearchColumnDoubleField[] $correlatedItemLift
     */
    protected $correlatedItemLift = null;

    /**
     * @var SearchColumnDoubleField[] $correlatedItemPurchaseRate
     */
    protected $correlatedItemPurchaseRate = null;

    /**
     * @var SearchColumnDoubleField[] $cost
     */
    protected $cost = null;

    /**
     * @var SearchColumnEnumSelectField[] $costAccountingStatus
     */
    protected $costAccountingStatus = null;

    /**
     * @var SearchColumnStringField[] $costCategory
     */
    protected $costCategory = null;

    /**
     * @var SearchColumnDoubleField[] $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var SearchColumnEnumSelectField[] $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var SearchColumnEnumSelectField[] $costingMethod
     */
    protected $costingMethod = null;

    /**
     * @var SearchColumnEnumSelectField[] $countryOfManufacture
     */
    protected $countryOfManufacture = null;

    /**
     * @var SearchColumnDateField[] $created
     */
    protected $created = null;

    /**
     * @var SearchColumnBooleanField[] $createJob
     */
    protected $createJob = null;

    /**
     * @var SearchColumnSelectField[] $createRevenuePlansOn
     */
    protected $createRevenuePlansOn = null;

    /**
     * @var SearchColumnSelectField[] $custReturnVarianceAccount
     */
    protected $custReturnVarianceAccount = null;

    /**
     * @var SearchColumnDateField[] $dateViewed
     */
    protected $dateViewed = null;

    /**
     * @var SearchColumnStringField[] $daysBeforeExpiration
     */
    protected $daysBeforeExpiration = null;

    /**
     * @var SearchColumnDoubleField[] $defaultReturnCost
     */
    protected $defaultReturnCost = null;

    /**
     * @var SearchColumnStringField[] $defaultShippingMethod
     */
    protected $defaultShippingMethod = null;

    /**
     * @var SearchColumnSelectField[] $deferredExpenseAccount
     */
    protected $deferredExpenseAccount = null;

    /**
     * @var SearchColumnSelectField[] $deferredRevenueAccount
     */
    protected $deferredRevenueAccount = null;

    /**
     * @var SearchColumnBooleanField[] $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var SearchColumnDoubleField[] $demandModifier
     */
    protected $demandModifier = null;

    /**
     * @var SearchColumnEnumSelectField[] $demandSource
     */
    protected $demandSource = null;

    /**
     * @var SearchColumnLongField[] $demandTimeFence
     */
    protected $demandTimeFence = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnSelectField[] $departmentnohierarchy
     */
    protected $departmentnohierarchy = null;

    /**
     * @var SearchColumnBooleanField[] $directRevenuePosting
     */
    protected $directRevenuePosting = null;

    /**
     * @var SearchColumnBooleanField[] $displayIneBayStore
     */
    protected $displayIneBayStore = null;

    /**
     * @var SearchColumnStringField[] $displayName
     */
    protected $displayName = null;

    /**
     * @var SearchColumnSelectField[] $distributionCategory
     */
    protected $distributionCategory = null;

    /**
     * @var SearchColumnSelectField[] $distributionNetwork
     */
    protected $distributionNetwork = null;

    /**
     * @var SearchColumnBooleanField[] $dontShowPrice
     */
    protected $dontShowPrice = null;

    /**
     * @var SearchColumnStringField[] $eBayItemDescription
     */
    protected $eBayItemDescription = null;

    /**
     * @var SearchColumnStringField[] $eBayItemSubtitle
     */
    protected $eBayItemSubtitle = null;

    /**
     * @var SearchColumnStringField[] $eBayItemTitle
     */
    protected $eBayItemTitle = null;

    /**
     * @var SearchColumnEnumSelectField[] $ebayRelistingOption
     */
    protected $ebayRelistingOption = null;

    /**
     * @var SearchColumnEnumSelectField[] $effectiveBomControl
     */
    protected $effectiveBomControl = null;

    /**
     * @var SearchColumnDateField[] $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchColumnSelectField[] $effectiveRevision
     */
    protected $effectiveRevision = null;

    /**
     * @var SearchColumnBooleanField[] $endAuctionsWhenOutOfStock
     */
    protected $endAuctionsWhenOutOfStock = null;

    /**
     * @var SearchColumnBooleanField[] $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var SearchColumnSelectField[] $expenseAccount
     */
    protected $expenseAccount = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnStringField[] $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var SearchColumnStringField[] $feedDescription
     */
    protected $feedDescription = null;

    /**
     * @var SearchColumnStringField[] $feedName
     */
    protected $feedName = null;

    /**
     * @var SearchColumnDoubleField[] $fixedLotSize
     */
    protected $fixedLotSize = null;

    /**
     * @var SearchColumnLongField[] $forwardConsumptionDays
     */
    protected $forwardConsumptionDays = null;

    /**
     * @var SearchColumnEnumSelectField[] $fraudRisk
     */
    protected $fraudRisk = null;

    /**
     * @var SearchColumnBooleanField[] $froogleProductFeed
     */
    protected $froogleProductFeed = null;

    /**
     * @var SearchColumnDoubleField[] $fxCost
     */
    protected $fxCost = null;

    /**
     * @var SearchColumnSelectField[] $gainLossAccount
     */
    protected $gainLossAccount = null;

    /**
     * @var SearchColumnBooleanField[] $generateAccruals
     */
    protected $generateAccruals = null;

    /**
     * @var SearchColumnStringField[] $giftCertAuthCode
     */
    protected $giftCertAuthCode = null;

    /**
     * @var SearchColumnStringField[] $giftCertEmail
     */
    protected $giftCertEmail = null;

    /**
     * @var SearchColumnStringField[] $giftCertExpirationDate
     */
    protected $giftCertExpirationDate = null;

    /**
     * @var SearchColumnStringField[] $giftCertFrom
     */
    protected $giftCertFrom = null;

    /**
     * @var SearchColumnStringField[] $giftCertMessage
     */
    protected $giftCertMessage = null;

    /**
     * @var SearchColumnStringField[] $giftCertOriginalAmount
     */
    protected $giftCertOriginalAmount = null;

    /**
     * @var SearchColumnStringField[] $giftCertRecipient
     */
    protected $giftCertRecipient = null;

    /**
     * @var SearchColumnLongField[] $hits
     */
    protected $hits = null;

    /**
     * @var SearchColumnStringField[] $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @var SearchColumnBooleanField[] $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var SearchColumnSelectField[] $incomeAccount
     */
    protected $incomeAccount = null;

    /**
     * @var SearchColumnSelectField[] $intercoDefRevAccount
     */
    protected $intercoDefRevAccount = null;

    /**
     * @var SearchColumnSelectField[] $intercoExpenseAccount
     */
    protected $intercoExpenseAccount = null;

    /**
     * @var SearchColumnSelectField[] $intercoIncomeAccount
     */
    protected $intercoIncomeAccount = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $inventoryLocation
     */
    protected $inventoryLocation = null;

    /**
     * @var SearchColumnEnumSelectField[] $invtClassification
     */
    protected $invtClassification = null;

    /**
     * @var SearchColumnLongField[] $invtCountInterval
     */
    protected $invtCountInterval = null;

    /**
     * @var SearchColumnBooleanField[] $isAvailable
     */
    protected $isAvailable = null;

    /**
     * @var SearchColumnBooleanField[] $isDropShipItem
     */
    protected $isDropShipItem = null;

    /**
     * @var SearchColumnBooleanField[] $isFulfillable
     */
    protected $isFulfillable = null;

    /**
     * @var SearchColumnBooleanField[] $isGcoCompliant
     */
    protected $isGcoCompliant = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isLotItem
     */
    protected $isLotItem = null;

    /**
     * @var SearchColumnBooleanField[] $isOnline
     */
    protected $isOnline = null;

    /**
     * @var SearchColumnBooleanField[] $isSerialItem
     */
    protected $isSerialItem = null;

    /**
     * @var SearchColumnBooleanField[] $isSpecialOrderItem
     */
    protected $isSpecialOrderItem = null;

    /**
     * @var SearchColumnBooleanField[] $isSpecialWorkOrderItem
     */
    protected $isSpecialWorkOrderItem = null;

    /**
     * @var SearchColumnBooleanField[] $isStorePickupAllowed
     */
    protected $isStorePickupAllowed = null;

    /**
     * @var SearchColumnSelectField[] $issueProduct
     */
    protected $issueProduct = null;

    /**
     * @var SearchColumnBooleanField[] $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var SearchColumnBooleanField[] $isVsoeBundle
     */
    protected $isVsoeBundle = null;

    /**
     * @var SearchColumnBooleanField[] $isWip
     */
    protected $isWip = null;

    /**
     * @var SearchColumnStringField[] $itemId
     */
    protected $itemId = null;

    /**
     * @var SearchColumnSelectField[] $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var SearchColumnStringField[] $itemUrl
     */
    protected $itemUrl = null;

    /**
     * @var SearchColumnDateField[] $lastInvtCountDate
     */
    protected $lastInvtCountDate = null;

    /**
     * @var SearchColumnDoubleField[] $lastPurchasePrice
     */
    protected $lastPurchasePrice = null;

    /**
     * @var SearchColumnDateField[] $lastQuantityAvailableChange
     */
    protected $lastQuantityAvailableChange = null;

    /**
     * @var SearchColumnLongField[] $leadTime
     */
    protected $leadTime = null;

    /**
     * @var SearchColumnSelectField[] $liabilityAccount
     */
    protected $liabilityAccount = null;

    /**
     * @var SearchColumnEnumSelectField[] $listingDuration
     */
    protected $listingDuration = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnBooleanField[] $locationAllowStorePickup
     */
    protected $locationAllowStorePickup = null;

    /**
     * @var SearchColumnDoubleField[] $locationAtpLeadTime
     */
    protected $locationAtpLeadTime = null;

    /**
     * @var SearchColumnDoubleField[] $locationAverageCost
     */
    protected $locationAverageCost = null;

    /**
     * @var SearchColumnStringField[] $locationBinQuantityAvailable
     */
    protected $locationBinQuantityAvailable = null;

    /**
     * @var SearchColumnDoubleField[] $locationBuildTime
     */
    protected $locationBuildTime = null;

    /**
     * @var SearchColumnDoubleField[] $locationCost
     */
    protected $locationCost = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationCostAccountingStatus
     */
    protected $locationCostAccountingStatus = null;

    /**
     * @var SearchColumnDoubleField[] $locationDefaultReturnCost
     */
    protected $locationDefaultReturnCost = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationDemandSource
     */
    protected $locationDemandSource = null;

    /**
     * @var SearchColumnLongField[] $locationDemandTimeFence
     */
    protected $locationDemandTimeFence = null;

    /**
     * @var SearchColumnDoubleField[] $locationFixedLotSize
     */
    protected $locationFixedLotSize = null;

    /**
     * @var SearchColumnStringField[] $locationInventoryCostTemplate
     */
    protected $locationInventoryCostTemplate = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationInvtClassification
     */
    protected $locationInvtClassification = null;

    /**
     * @var SearchColumnLongField[] $locationInvtCountInterval
     */
    protected $locationInvtCountInterval = null;

    /**
     * @var SearchColumnDateField[] $locationLastInvtCountDate
     */
    protected $locationLastInvtCountDate = null;

    /**
     * @var SearchColumnLongField[] $locationLeadTime
     */
    protected $locationLeadTime = null;

    /**
     * @var SearchColumnDateField[] $locationNextInvtCountDate
     */
    protected $locationNextInvtCountDate = null;

    /**
     * @var SearchColumnLongField[] $locationPeriodicLotSizeDays
     */
    protected $locationPeriodicLotSizeDays = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationPeriodicLotSizeType
     */
    protected $locationPeriodicLotSizeType = null;

    /**
     * @var SearchColumnDoubleField[] $locationPreferredStockLevel
     */
    protected $locationPreferredStockLevel = null;

    /**
     * @var SearchColumnDoubleField[] $locationQtyAvailForStorePickup
     */
    protected $locationQtyAvailForStorePickup = null;

    /**
     * @var SearchColumnDoubleField[] $locationQuantityAvailable
     */
    protected $locationQuantityAvailable = null;

    /**
     * @var SearchColumnDoubleField[] $locationQuantityBackOrdered
     */
    protected $locationQuantityBackOrdered = null;

    /**
     * @var SearchColumnDoubleField[] $locationQuantityCommitted
     */
    protected $locationQuantityCommitted = null;

    /**
     * @var SearchColumnDoubleField[] $locationQuantityInTransit
     */
    protected $locationQuantityInTransit = null;

    /**
     * @var SearchColumnDoubleField[] $locationQuantityOnHand
     */
    protected $locationQuantityOnHand = null;

    /**
     * @var SearchColumnDoubleField[] $locationQuantityOnOrder
     */
    protected $locationQuantityOnOrder = null;

    /**
     * @var SearchColumnDoubleField[] $locationReOrderPoint
     */
    protected $locationReOrderPoint = null;

    /**
     * @var SearchColumnLongField[] $locationRescheduleInDays
     */
    protected $locationRescheduleInDays = null;

    /**
     * @var SearchColumnLongField[] $locationRescheduleOutDays
     */
    protected $locationRescheduleOutDays = null;

    /**
     * @var SearchColumnDoubleField[] $locationSafetyStockLevel
     */
    protected $locationSafetyStockLevel = null;

    /**
     * @var SearchColumnDoubleField[] $locationStorePickupBufferStock
     */
    protected $locationStorePickupBufferStock = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationSupplyLotSizingMethod
     */
    protected $locationSupplyLotSizingMethod = null;

    /**
     * @var SearchColumnLongField[] $locationSupplyTimeFence
     */
    protected $locationSupplyTimeFence = null;

    /**
     * @var SearchColumnEnumSelectField[] $locationSupplyType
     */
    protected $locationSupplyType = null;

    /**
     * @var SearchColumnDoubleField[] $locationTotalValue
     */
    protected $locationTotalValue = null;

    /**
     * @var SearchColumnLongField[] $locBackwardConsumptionDays
     */
    protected $locBackwardConsumptionDays = null;

    /**
     * @var SearchColumnLongField[] $locForwardConsumptionDays
     */
    protected $locForwardConsumptionDays = null;

    /**
     * @var SearchColumnStringField[] $manufacturer
     */
    protected $manufacturer = null;

    /**
     * @var SearchColumnStringField[] $manufacturerAddr1
     */
    protected $manufacturerAddr1 = null;

    /**
     * @var SearchColumnStringField[] $manufacturerCity
     */
    protected $manufacturerCity = null;

    /**
     * @var SearchColumnStringField[] $manufacturerState
     */
    protected $manufacturerState = null;

    /**
     * @var SearchColumnStringField[] $manufacturerTariff
     */
    protected $manufacturerTariff = null;

    /**
     * @var SearchColumnStringField[] $manufacturerTaxId
     */
    protected $manufacturerTaxId = null;

    /**
     * @var SearchColumnStringField[] $manufacturerZip
     */
    protected $manufacturerZip = null;

    /**
     * @var SearchColumnBooleanField[] $manufacturingChargeItem
     */
    protected $manufacturingChargeItem = null;

    /**
     * @var SearchColumnBooleanField[] $matchBillToReceipt
     */
    protected $matchBillToReceipt = null;

    /**
     * @var SearchColumnSelectField[] $memberItem
     */
    protected $memberItem = null;

    /**
     * @var SearchColumnDoubleField[] $memberQuantity
     */
    protected $memberQuantity = null;

    /**
     * @var SearchColumnStringField[] $metaTagHtml
     */
    protected $metaTagHtml = null;

    /**
     * @var SearchColumnStringField[] $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var SearchColumnDateField[] $modified
     */
    protected $modified = null;

    /**
     * @var SearchColumnBooleanField[] $mossApplies
     */
    protected $mossApplies = null;

    /**
     * @var SearchColumnStringField[] $mpn
     */
    protected $mpn = null;

    /**
     * @var SearchColumnBooleanField[] $multManufactureAddr
     */
    protected $multManufactureAddr = null;

    /**
     * @var SearchColumnStringField[] $nextagCategory
     */
    protected $nextagCategory = null;

    /**
     * @var SearchColumnBooleanField[] $nextagProductFeed
     */
    protected $nextagProductFeed = null;

    /**
     * @var SearchColumnDateField[] $nextInvtCountDate
     */
    protected $nextInvtCountDate = null;

    /**
     * @var SearchColumnStringField[] $noPriceMessage
     */
    protected $noPriceMessage = null;

    /**
     * @var SearchColumnLongField[] $numActiveListings
     */
    protected $numActiveListings = null;

    /**
     * @var SearchColumnStringField[] $numberAllowedDownloads
     */
    protected $numberAllowedDownloads = null;

    /**
     * @var SearchColumnLongField[] $numCurrentlyListed
     */
    protected $numCurrentlyListed = null;

    /**
     * @var SearchColumnDateField[] $obsoleteDate
     */
    protected $obsoleteDate = null;

    /**
     * @var SearchColumnSelectField[] $obsoleteRevision
     */
    protected $obsoleteRevision = null;

    /**
     * @var SearchColumnBooleanField[] $offerSupport
     */
    protected $offerSupport = null;

    /**
     * @var SearchColumnDoubleField[] $onlineCustomerPrice
     */
    protected $onlineCustomerPrice = null;

    /**
     * @var SearchColumnDoubleField[] $onlinePrice
     */
    protected $onlinePrice = null;

    /**
     * @var SearchColumnBooleanField[] $onSpecial
     */
    protected $onSpecial = null;

    /**
     * @var SearchColumnDoubleField[] $otherPrices
     */
    protected $otherPrices = null;

    /**
     * @var SearchColumnSelectField[] $otherVendor
     */
    protected $otherVendor = null;

    /**
     * @var SearchColumnStringField[] $outOfStockBehavior
     */
    protected $outOfStockBehavior = null;

    /**
     * @var SearchColumnStringField[] $outOfStockMessage
     */
    protected $outOfStockMessage = null;

    /**
     * @var SearchColumnEnumSelectField[] $overallQuantityPricingType
     */
    protected $overallQuantityPricingType = null;

    /**
     * @var SearchColumnEnumSelectField[] $overheadType
     */
    protected $overheadType = null;

    /**
     * @var SearchColumnStringField[] $pageTitle
     */
    protected $pageTitle = null;

    /**
     * @var SearchColumnSelectField[] $parent
     */
    protected $parent = null;

    /**
     * @var SearchColumnLongField[] $periodicLotSizeDays
     */
    protected $periodicLotSizeDays = null;

    /**
     * @var SearchColumnEnumSelectField[] $periodicLotSizeType
     */
    protected $periodicLotSizeType = null;

    /**
     * @var SearchColumnStringField[] $preferenceCriterion
     */
    protected $preferenceCriterion = null;

    /**
     * @var SearchColumnBooleanField[] $preferredBin
     */
    protected $preferredBin = null;

    /**
     * @var SearchColumnSelectField[] $preferredLocation
     */
    protected $preferredLocation = null;

    /**
     * @var SearchColumnDoubleField[] $preferredStockLevel
     */
    protected $preferredStockLevel = null;

    /**
     * @var SearchColumnLongField[] $preferredStockLevelDays
     */
    protected $preferredStockLevelDays = null;

    /**
     * @var SearchColumnBooleanField[] $pricesIncludeTax
     */
    protected $pricesIncludeTax = null;

    /**
     * @var SearchColumnSelectField[] $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var SearchColumnStringField[] $primaryCategory
     */
    protected $primaryCategory = null;

    /**
     * @var SearchColumnSelectField[] $prodPriceVarianceAcct
     */
    protected $prodPriceVarianceAcct = null;

    /**
     * @var SearchColumnSelectField[] $prodQtyVarianceAcct
     */
    protected $prodQtyVarianceAcct = null;

    /**
     * @var SearchColumnStringField[] $purchaseDescription
     */
    protected $purchaseDescription = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var SearchColumnSelectField[] $purchasePriceVarianceAcct
     */
    protected $purchasePriceVarianceAcct = null;

    /**
     * @var SearchColumnSelectField[] $purchaseUnit
     */
    protected $purchaseUnit = null;

    /**
     * @var SearchColumnDoubleField[] $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var SearchColumnDoubleField[] $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var SearchColumnDoubleField[] $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var SearchColumnDoubleField[] $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var SearchColumnDoubleField[] $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var SearchColumnSelectField[] $quantityPricingSchedule
     */
    protected $quantityPricingSchedule = null;

    /**
     * @var SearchColumnDoubleField[] $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var SearchColumnDoubleField[] $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var SearchColumnLongField[] $reorderMultiple
     */
    protected $reorderMultiple = null;

    /**
     * @var SearchColumnDoubleField[] $reOrderPoint
     */
    protected $reOrderPoint = null;

    /**
     * @var SearchColumnLongField[] $rescheduleInDays
     */
    protected $rescheduleInDays = null;

    /**
     * @var SearchColumnLongField[] $rescheduleOutDays
     */
    protected $rescheduleOutDays = null;

    /**
     * @var SearchColumnDoubleField[] $reservePrice
     */
    protected $reservePrice = null;

    /**
     * @var SearchColumnSelectField[] $revenueAllocationGroup
     */
    protected $revenueAllocationGroup = null;

    /**
     * @var SearchColumnSelectField[] $revenueRecognitionRule
     */
    protected $revenueRecognitionRule = null;

    /**
     * @var SearchColumnSelectField[] $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var SearchColumnSelectField[] $revReclassFXAccount
     */
    protected $revReclassFXAccount = null;

    /**
     * @var SearchColumnSelectField[] $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var SearchColumnBooleanField[] $roundUpAsComponent
     */
    protected $roundUpAsComponent = null;

    /**
     * @var SearchColumnDoubleField[] $safetyStockLevel
     */
    protected $safetyStockLevel = null;

    /**
     * @var SearchColumnLongField[] $safetyStockLevelDays
     */
    protected $safetyStockLevelDays = null;

    /**
     * @var SearchColumnStringField[] $salesDescription
     */
    protected $salesDescription = null;

    /**
     * @var SearchColumnSelectField[] $salesTaxCode
     */
    protected $salesTaxCode = null;

    /**
     * @var SearchColumnSelectField[] $saleUnit
     */
    protected $saleUnit = null;

    /**
     * @var SearchColumnBooleanField[] $sameAsPrimaryBookAmortization
     */
    protected $sameAsPrimaryBookAmortization = null;

    /**
     * @var SearchColumnBooleanField[] $sameAsPrimaryBookRevRec
     */
    protected $sameAsPrimaryBookRevRec = null;

    /**
     * @var SearchColumnEnumSelectField[] $scheduleBCode
     */
    protected $scheduleBCode = null;

    /**
     * @var SearchColumnStringField[] $scheduleBNumber
     */
    protected $scheduleBNumber = null;

    /**
     * @var SearchColumnStringField[] $scheduleBQuantity
     */
    protected $scheduleBQuantity = null;

    /**
     * @var SearchColumnSelectField[] $scrapAcct
     */
    protected $scrapAcct = null;

    /**
     * @var SearchColumnStringField[] $searchKeywords
     */
    protected $searchKeywords = null;

    /**
     * @var SearchColumnBooleanField[] $seasonalDemand
     */
    protected $seasonalDemand = null;

    /**
     * @var SearchColumnBooleanField[] $sellOnEBay
     */
    protected $sellOnEBay = null;

    /**
     * @var SearchColumnStringField[] $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var SearchColumnStringField[] $serialNumberLocation
     */
    protected $serialNumberLocation = null;

    /**
     * @var SearchColumnBooleanField[] $shipIndividually
     */
    protected $shipIndividually = null;

    /**
     * @var SearchColumnSelectField[] $shipPackage
     */
    protected $shipPackage = null;

    /**
     * @var SearchColumnEnumSelectField[] $shippingCarrier
     */
    protected $shippingCarrier = null;

    /**
     * @var SearchColumnDoubleField[] $shippingRate
     */
    protected $shippingRate = null;

    /**
     * @var SearchColumnStringField[] $shoppingDotComCategory
     */
    protected $shoppingDotComCategory = null;

    /**
     * @var SearchColumnBooleanField[] $shoppingProductFeed
     */
    protected $shoppingProductFeed = null;

    /**
     * @var SearchColumnLongField[] $shopzillaCategoryId
     */
    protected $shopzillaCategoryId = null;

    /**
     * @var SearchColumnBooleanField[] $shopzillaProductFeed
     */
    protected $shopzillaProductFeed = null;

    /**
     * @var SearchColumnEnumSelectField[] $sitemapPriority
     */
    protected $sitemapPriority = null;

    /**
     * @var SearchColumnSelectField[] $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var SearchColumnDoubleField[] $startingPrice
     */
    protected $startingPrice = null;

    /**
     * @var SearchColumnStringField[] $stockDescription
     */
    protected $stockDescription = null;

    /**
     * @var SearchColumnSelectField[] $stockUnit
     */
    protected $stockUnit = null;

    /**
     * @var SearchColumnStringField[] $storeDescription
     */
    protected $storeDescription = null;

    /**
     * @var SearchColumnStringField[] $storeDetailedDescription
     */
    protected $storeDetailedDescription = null;

    /**
     * @var SearchColumnSelectField[] $storeDisplayImage
     */
    protected $storeDisplayImage = null;

    /**
     * @var SearchColumnStringField[] $storeDisplayName
     */
    protected $storeDisplayName = null;

    /**
     * @var SearchColumnSelectField[] $storeDisplayThumbnail
     */
    protected $storeDisplayThumbnail = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnEnumSelectField[] $subType
     */
    protected $subType = null;

    /**
     * @var SearchColumnEnumSelectField[] $supplyLotSizingMethod
     */
    protected $supplyLotSizingMethod = null;

    /**
     * @var SearchColumnEnumSelectField[] $supplyReplenishmentMethod
     */
    protected $supplyReplenishmentMethod = null;

    /**
     * @var SearchColumnLongField[] $supplyTimeFence
     */
    protected $supplyTimeFence = null;

    /**
     * @var SearchColumnEnumSelectField[] $supplyType
     */
    protected $supplyType = null;

    /**
     * @var SearchColumnSelectField[] $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var SearchColumnStringField[] $thumbNailUrl
     */
    protected $thumbNailUrl = null;

    /**
     * @var SearchColumnDoubleField[] $totalValue
     */
    protected $totalValue = null;

    /**
     * @var SearchColumnBooleanField[] $trackLandedCost
     */
    protected $trackLandedCost = null;

    /**
     * @var SearchColumnDoubleField[] $transferPrice
     */
    protected $transferPrice = null;

    /**
     * @var SearchColumnEnumSelectField[] $type
     */
    protected $type = null;

    /**
     * @var SearchColumnSelectField[] $unbuildVarianceAccount
     */
    protected $unbuildVarianceAccount = null;

    /**
     * @var SearchColumnSelectField[] $unitsType
     */
    protected $unitsType = null;

    /**
     * @var SearchColumnStringField[] $upcCode
     */
    protected $upcCode = null;

    /**
     * @var SearchColumnStringField[] $urlComponent
     */
    protected $urlComponent = null;

    /**
     * @var SearchColumnBooleanField[] $useBins
     */
    protected $useBins = null;

    /**
     * @var SearchColumnBooleanField[] $useComponentYield
     */
    protected $useComponentYield = null;

    /**
     * @var SearchColumnBooleanField[] $useMarginalRates
     */
    protected $useMarginalRates = null;

    /**
     * @var SearchColumnSelectField[] $vendor
     */
    protected $vendor = null;

    /**
     * @var SearchColumnStringField[] $vendorCode
     */
    protected $vendorCode = null;

    /**
     * @var SearchColumnDoubleField[] $vendorCost
     */
    protected $vendorCost = null;

    /**
     * @var SearchColumnDoubleField[] $vendorCostEntered
     */
    protected $vendorCostEntered = null;

    /**
     * @var SearchColumnStringField[] $vendorName
     */
    protected $vendorName = null;

    /**
     * @var SearchColumnStringField[] $vendorPriceCurrency
     */
    protected $vendorPriceCurrency = null;

    /**
     * @var SearchColumnSelectField[] $vendorSchedule
     */
    protected $vendorSchedule = null;

    /**
     * @var SearchColumnSelectField[] $vendReturnVarianceAccount
     */
    protected $vendReturnVarianceAccount = null;

    /**
     * @var SearchColumnEnumSelectField[] $vsoeDeferral
     */
    protected $vsoeDeferral = null;

    /**
     * @var SearchColumnBooleanField[] $vsoeDelivered
     */
    protected $vsoeDelivered = null;

    /**
     * @var SearchColumnEnumSelectField[] $vsoePermitDiscount
     */
    protected $vsoePermitDiscount = null;

    /**
     * @var SearchColumnDoubleField[] $vsoePrice
     */
    protected $vsoePrice = null;

    /**
     * @var SearchColumnEnumSelectField[] $vsoeSopGroup
     */
    protected $vsoeSopGroup = null;

    /**
     * @var SearchColumnSelectField[] $webSite
     */
    protected $webSite = null;

    /**
     * @var SearchColumnDoubleField[] $weight
     */
    protected $weight = null;

    /**
     * @var SearchColumnEnumSelectField[] $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @var SearchColumnSelectField[] $wipAcct
     */
    protected $wipAcct = null;

    /**
     * @var SearchColumnSelectField[] $wipVarianceAcct
     */
    protected $wipVarianceAcct = null;

    /**
     * @var SearchColumnBooleanField[] $yahooProductFeed
     */
    protected $yahooProductFeed = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccBookRevRecForecastRule()
    {
      return $this->accBookRevRecForecastRule;
    }

    /**
     * @param SearchColumnSelectField[] $accBookRevRecForecastRule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAccBookRevRecForecastRule(array $accBookRevRecForecastRule = null)
    {
      $this->accBookRevRecForecastRule = $accBookRevRecForecastRule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAccountingBook(array $accountingBook = null)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookAmortization()
    {
      return $this->accountingBookAmortization;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookAmortization
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAccountingBookAmortization(array $accountingBookAmortization = null)
    {
      $this->accountingBookAmortization = $accountingBookAmortization;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookCreatePlansOn()
    {
      return $this->accountingBookCreatePlansOn;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookCreatePlansOn
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAccountingBookCreatePlansOn(array $accountingBookCreatePlansOn = null)
    {
      $this->accountingBookCreatePlansOn = $accountingBookCreatePlansOn;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookRevRecRule()
    {
      return $this->accountingBookRevRecRule;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookRevRecRule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAccountingBookRevRecRule(array $accountingBookRevRecRule = null)
    {
      $this->accountingBookRevRecRule = $accountingBookRevRecRule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookRevRecSchedule()
    {
      return $this->accountingBookRevRecSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookRevRecSchedule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAccountingBookRevRecSchedule(array $accountingBookRevRecSchedule = null)
    {
      $this->accountingBookRevRecSchedule = $accountingBookRevRecSchedule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAllowedShippingMethod()
    {
      return $this->allowedShippingMethod;
    }

    /**
     * @param SearchColumnSelectField[] $allowedShippingMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAllowedShippingMethod(array $allowedShippingMethod = null)
    {
      $this->allowedShippingMethod = $allowedShippingMethod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAlternateDemandSourceItem()
    {
      return $this->alternateDemandSourceItem;
    }

    /**
     * @param SearchColumnStringField[] $alternateDemandSourceItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAlternateDemandSourceItem(array $alternateDemandSourceItem = null)
    {
      $this->alternateDemandSourceItem = $alternateDemandSourceItem;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssetAccount()
    {
      return $this->assetAccount;
    }

    /**
     * @param SearchColumnSelectField[] $assetAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAssetAccount(array $assetAccount = null)
    {
      $this->assetAccount = $assetAccount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAtpLeadTime()
    {
      return $this->atpLeadTime;
    }

    /**
     * @param SearchColumnDoubleField[] $atpLeadTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAtpLeadTime(array $atpLeadTime = null)
    {
      $this->atpLeadTime = $atpLeadTime;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAtpMethod()
    {
      return $this->atpMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $atpMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAtpMethod(array $atpMethod = null)
    {
      $this->atpMethod = $atpMethod;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoLeadTime()
    {
      return $this->autoLeadTime;
    }

    /**
     * @param SearchColumnBooleanField[] $autoLeadTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAutoLeadTime(array $autoLeadTime = null)
    {
      $this->autoLeadTime = $autoLeadTime;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoPreferredStockLevel()
    {
      return $this->autoPreferredStockLevel;
    }

    /**
     * @param SearchColumnBooleanField[] $autoPreferredStockLevel
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAutoPreferredStockLevel(array $autoPreferredStockLevel = null)
    {
      $this->autoPreferredStockLevel = $autoPreferredStockLevel;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoReorderPoint()
    {
      return $this->autoReorderPoint;
    }

    /**
     * @param SearchColumnBooleanField[] $autoReorderPoint
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAutoReorderPoint(array $autoReorderPoint = null)
    {
      $this->autoReorderPoint = $autoReorderPoint;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableToPartners()
    {
      return $this->availableToPartners;
    }

    /**
     * @param SearchColumnBooleanField[] $availableToPartners
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAvailableToPartners(array $availableToPartners = null)
    {
      $this->availableToPartners = $availableToPartners;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAverageCost()
    {
      return $this->averageCost;
    }

    /**
     * @param SearchColumnDoubleField[] $averageCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setAverageCost(array $averageCost = null)
    {
      $this->averageCost = $averageCost;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getBackwardConsumptionDays()
    {
      return $this->backwardConsumptionDays;
    }

    /**
     * @param SearchColumnLongField[] $backwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBackwardConsumptionDays(array $backwardConsumptionDays = null)
    {
      $this->backwardConsumptionDays = $backwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBasePrice()
    {
      return $this->basePrice;
    }

    /**
     * @param SearchColumnDoubleField[] $basePrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBasePrice(array $basePrice = null)
    {
      $this->basePrice = $basePrice;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillExchRateVarianceAcct()
    {
      return $this->billExchRateVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $billExchRateVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBillExchRateVarianceAcct(array $billExchRateVarianceAcct = null)
    {
      $this->billExchRateVarianceAcct = $billExchRateVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillPriceVarianceAcct()
    {
      return $this->billPriceVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $billPriceVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBillPriceVarianceAcct(array $billPriceVarianceAcct = null)
    {
      $this->billPriceVarianceAcct = $billPriceVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillQtyVarianceAcct()
    {
      return $this->billQtyVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $billQtyVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBillQtyVarianceAcct(array $billQtyVarianceAcct = null)
    {
      $this->billQtyVarianceAcct = $billQtyVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchColumnStringField[] $binNumber
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBinOnHandAvail()
    {
      return $this->binOnHandAvail;
    }

    /**
     * @param SearchColumnDoubleField[] $binOnHandAvail
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBinOnHandAvail(array $binOnHandAvail = null)
    {
      $this->binOnHandAvail = $binOnHandAvail;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBinOnHandCount()
    {
      return $this->binOnHandCount;
    }

    /**
     * @param SearchColumnDoubleField[] $binOnHandCount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBinOnHandCount(array $binOnHandCount = null)
    {
      $this->binOnHandCount = $binOnHandCount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBomQuantity()
    {
      return $this->bomQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $bomQuantity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBomQuantity(array $bomQuantity = null)
    {
      $this->bomQuantity = $bomQuantity;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getBuildEntireAssembly()
    {
      return $this->buildEntireAssembly;
    }

    /**
     * @param SearchColumnBooleanField[] $buildEntireAssembly
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBuildEntireAssembly(array $buildEntireAssembly = null)
    {
      $this->buildEntireAssembly = $buildEntireAssembly;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuildTime()
    {
      return $this->buildTime;
    }

    /**
     * @param SearchColumnDoubleField[] $buildTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBuildTime(array $buildTime = null)
    {
      $this->buildTime = $buildTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuyItNowPrice()
    {
      return $this->buyItNowPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $buyItNowPrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setBuyItNowPrice(array $buyItNowPrice = null)
    {
      $this->buyItNowPrice = $buyItNowPrice;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $category
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCategory(array $category = null)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCategoryPreferred()
    {
      return $this->categoryPreferred;
    }

    /**
     * @param SearchColumnStringField[] $categoryPreferred
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCategoryPreferred(array $categoryPreferred = null)
    {
      $this->categoryPreferred = $categoryPreferred;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getComponentYield()
    {
      return $this->componentYield;
    }

    /**
     * @param SearchColumnDoubleField[] $componentYield
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setComponentYield(array $componentYield = null)
    {
      $this->componentYield = $componentYield;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getContingentRevenueHandling()
    {
      return $this->contingentRevenueHandling;
    }

    /**
     * @param SearchColumnBooleanField[] $contingentRevenueHandling
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setContingentRevenueHandling(array $contingentRevenueHandling = null)
    {
      $this->contingentRevenueHandling = $contingentRevenueHandling;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCopyDescription()
    {
      return $this->copyDescription;
    }

    /**
     * @param SearchColumnBooleanField[] $copyDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCopyDescription(array $copyDescription = null)
    {
      $this->copyDescription = $copyDescription;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCorrelatedItem()
    {
      return $this->correlatedItem;
    }

    /**
     * @param SearchColumnSelectField[] $correlatedItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCorrelatedItem(array $correlatedItem = null)
    {
      $this->correlatedItem = $correlatedItem;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCorrelatedItemCorrelation()
    {
      return $this->correlatedItemCorrelation;
    }

    /**
     * @param SearchColumnDoubleField[] $correlatedItemCorrelation
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCorrelatedItemCorrelation(array $correlatedItemCorrelation = null)
    {
      $this->correlatedItemCorrelation = $correlatedItemCorrelation;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getCorrelatedItemCount()
    {
      return $this->correlatedItemCount;
    }

    /**
     * @param SearchColumnLongField[] $correlatedItemCount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCorrelatedItemCount(array $correlatedItemCount = null)
    {
      $this->correlatedItemCount = $correlatedItemCount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCorrelatedItemLift()
    {
      return $this->correlatedItemLift;
    }

    /**
     * @param SearchColumnDoubleField[] $correlatedItemLift
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCorrelatedItemLift(array $correlatedItemLift = null)
    {
      $this->correlatedItemLift = $correlatedItemLift;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCorrelatedItemPurchaseRate()
    {
      return $this->correlatedItemPurchaseRate;
    }

    /**
     * @param SearchColumnDoubleField[] $correlatedItemPurchaseRate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCorrelatedItemPurchaseRate(array $correlatedItemPurchaseRate = null)
    {
      $this->correlatedItemPurchaseRate = $correlatedItemPurchaseRate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchColumnDoubleField[] $cost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCost(array $cost = null)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCostAccountingStatus()
    {
      return $this->costAccountingStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costAccountingStatus
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCostAccountingStatus(array $costAccountingStatus = null)
    {
      $this->costAccountingStatus = $costAccountingStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCostCategory()
    {
      return $this->costCategory;
    }

    /**
     * @param SearchColumnStringField[] $costCategory
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCostCategory(array $costCategory = null)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostEstimate()
    {
      return $this->costEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $costEstimate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCostEstimate(array $costEstimate = null)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCostEstimateType()
    {
      return $this->costEstimateType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costEstimateType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCostEstimateType(array $costEstimateType = null)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCostingMethod()
    {
      return $this->costingMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $costingMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCostingMethod(array $costingMethod = null)
    {
      $this->costingMethod = $costingMethod;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountryOfManufacture()
    {
      return $this->countryOfManufacture;
    }

    /**
     * @param SearchColumnEnumSelectField[] $countryOfManufacture
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCountryOfManufacture(array $countryOfManufacture = null)
    {
      $this->countryOfManufacture = $countryOfManufacture;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param SearchColumnDateField[] $created
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCreated(array $created = null)
    {
      $this->created = $created;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCreateJob()
    {
      return $this->createJob;
    }

    /**
     * @param SearchColumnBooleanField[] $createJob
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCreateJob(array $createJob = null)
    {
      $this->createJob = $createJob;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCreateRevenuePlansOn()
    {
      return $this->createRevenuePlansOn;
    }

    /**
     * @param SearchColumnSelectField[] $createRevenuePlansOn
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCreateRevenuePlansOn(array $createRevenuePlansOn = null)
    {
      $this->createRevenuePlansOn = $createRevenuePlansOn;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustReturnVarianceAccount()
    {
      return $this->custReturnVarianceAccount;
    }

    /**
     * @param SearchColumnSelectField[] $custReturnVarianceAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCustReturnVarianceAccount(array $custReturnVarianceAccount = null)
    {
      $this->custReturnVarianceAccount = $custReturnVarianceAccount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateViewed()
    {
      return $this->dateViewed;
    }

    /**
     * @param SearchColumnDateField[] $dateViewed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDateViewed(array $dateViewed = null)
    {
      $this->dateViewed = $dateViewed;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDaysBeforeExpiration()
    {
      return $this->daysBeforeExpiration;
    }

    /**
     * @param SearchColumnStringField[] $daysBeforeExpiration
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDaysBeforeExpiration(array $daysBeforeExpiration = null)
    {
      $this->daysBeforeExpiration = $daysBeforeExpiration;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDefaultReturnCost()
    {
      return $this->defaultReturnCost;
    }

    /**
     * @param SearchColumnDoubleField[] $defaultReturnCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDefaultReturnCost(array $defaultReturnCost = null)
    {
      $this->defaultReturnCost = $defaultReturnCost;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDefaultShippingMethod()
    {
      return $this->defaultShippingMethod;
    }

    /**
     * @param SearchColumnStringField[] $defaultShippingMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDefaultShippingMethod(array $defaultShippingMethod = null)
    {
      $this->defaultShippingMethod = $defaultShippingMethod;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDeferredExpenseAccount()
    {
      return $this->deferredExpenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $deferredExpenseAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDeferredExpenseAccount(array $deferredExpenseAccount = null)
    {
      $this->deferredExpenseAccount = $deferredExpenseAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDeferredRevenueAccount()
    {
      return $this->deferredRevenueAccount;
    }

    /**
     * @param SearchColumnSelectField[] $deferredRevenueAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDeferredRevenueAccount(array $deferredRevenueAccount = null)
    {
      $this->deferredRevenueAccount = $deferredRevenueAccount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param SearchColumnBooleanField[] $deferRevRec
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDeferRevRec(array $deferRevRec = null)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDemandModifier()
    {
      return $this->demandModifier;
    }

    /**
     * @param SearchColumnDoubleField[] $demandModifier
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDemandModifier(array $demandModifier = null)
    {
      $this->demandModifier = $demandModifier;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getDemandSource()
    {
      return $this->demandSource;
    }

    /**
     * @param SearchColumnEnumSelectField[] $demandSource
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDemandSource(array $demandSource = null)
    {
      $this->demandSource = $demandSource;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDemandTimeFence()
    {
      return $this->demandTimeFence;
    }

    /**
     * @param SearchColumnLongField[] $demandTimeFence
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDemandTimeFence(array $demandTimeFence = null)
    {
      $this->demandTimeFence = $demandTimeFence;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartmentnohierarchy()
    {
      return $this->departmentnohierarchy;
    }

    /**
     * @param SearchColumnSelectField[] $departmentnohierarchy
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDepartmentnohierarchy(array $departmentnohierarchy = null)
    {
      $this->departmentnohierarchy = $departmentnohierarchy;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDirectRevenuePosting()
    {
      return $this->directRevenuePosting;
    }

    /**
     * @param SearchColumnBooleanField[] $directRevenuePosting
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDirectRevenuePosting(array $directRevenuePosting = null)
    {
      $this->directRevenuePosting = $directRevenuePosting;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDisplayIneBayStore()
    {
      return $this->displayIneBayStore;
    }

    /**
     * @param SearchColumnBooleanField[] $displayIneBayStore
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDisplayIneBayStore(array $displayIneBayStore = null)
    {
      $this->displayIneBayStore = $displayIneBayStore;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param SearchColumnStringField[] $displayName
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDisplayName(array $displayName = null)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDistributionCategory()
    {
      return $this->distributionCategory;
    }

    /**
     * @param SearchColumnSelectField[] $distributionCategory
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDistributionCategory(array $distributionCategory = null)
    {
      $this->distributionCategory = $distributionCategory;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDistributionNetwork()
    {
      return $this->distributionNetwork;
    }

    /**
     * @param SearchColumnSelectField[] $distributionNetwork
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDistributionNetwork(array $distributionNetwork = null)
    {
      $this->distributionNetwork = $distributionNetwork;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDontShowPrice()
    {
      return $this->dontShowPrice;
    }

    /**
     * @param SearchColumnBooleanField[] $dontShowPrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setDontShowPrice(array $dontShowPrice = null)
    {
      $this->dontShowPrice = $dontShowPrice;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEBayItemDescription()
    {
      return $this->eBayItemDescription;
    }

    /**
     * @param SearchColumnStringField[] $eBayItemDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEBayItemDescription(array $eBayItemDescription = null)
    {
      $this->eBayItemDescription = $eBayItemDescription;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEBayItemSubtitle()
    {
      return $this->eBayItemSubtitle;
    }

    /**
     * @param SearchColumnStringField[] $eBayItemSubtitle
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEBayItemSubtitle(array $eBayItemSubtitle = null)
    {
      $this->eBayItemSubtitle = $eBayItemSubtitle;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEBayItemTitle()
    {
      return $this->eBayItemTitle;
    }

    /**
     * @param SearchColumnStringField[] $eBayItemTitle
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEBayItemTitle(array $eBayItemTitle = null)
    {
      $this->eBayItemTitle = $eBayItemTitle;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEbayRelistingOption()
    {
      return $this->ebayRelistingOption;
    }

    /**
     * @param SearchColumnEnumSelectField[] $ebayRelistingOption
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEbayRelistingOption(array $ebayRelistingOption = null)
    {
      $this->ebayRelistingOption = $ebayRelistingOption;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEffectiveBomControl()
    {
      return $this->effectiveBomControl;
    }

    /**
     * @param SearchColumnEnumSelectField[] $effectiveBomControl
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEffectiveBomControl(array $effectiveBomControl = null)
    {
      $this->effectiveBomControl = $effectiveBomControl;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEffectiveDate(array $effectiveDate = null)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEffectiveRevision()
    {
      return $this->effectiveRevision;
    }

    /**
     * @param SearchColumnSelectField[] $effectiveRevision
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEffectiveRevision(array $effectiveRevision = null)
    {
      $this->effectiveRevision = $effectiveRevision;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEndAuctionsWhenOutOfStock()
    {
      return $this->endAuctionsWhenOutOfStock;
    }

    /**
     * @param SearchColumnBooleanField[] $endAuctionsWhenOutOfStock
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setEndAuctionsWhenOutOfStock(array $endAuctionsWhenOutOfStock = null)
    {
      $this->endAuctionsWhenOutOfStock = $endAuctionsWhenOutOfStock;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeFromSitemap
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setExcludeFromSitemap(array $excludeFromSitemap = null)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $expenseAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setExpenseAccount(array $expenseAccount = null)
    {
      $this->expenseAccount = $expenseAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFeaturedDescription()
    {
      return $this->featuredDescription;
    }

    /**
     * @param SearchColumnStringField[] $featuredDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFeaturedDescription(array $featuredDescription = null)
    {
      $this->featuredDescription = $featuredDescription;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFeedDescription()
    {
      return $this->feedDescription;
    }

    /**
     * @param SearchColumnStringField[] $feedDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFeedDescription(array $feedDescription = null)
    {
      $this->feedDescription = $feedDescription;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFeedName()
    {
      return $this->feedName;
    }

    /**
     * @param SearchColumnStringField[] $feedName
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFeedName(array $feedName = null)
    {
      $this->feedName = $feedName;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFixedLotSize()
    {
      return $this->fixedLotSize;
    }

    /**
     * @param SearchColumnDoubleField[] $fixedLotSize
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFixedLotSize(array $fixedLotSize = null)
    {
      $this->fixedLotSize = $fixedLotSize;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getForwardConsumptionDays()
    {
      return $this->forwardConsumptionDays;
    }

    /**
     * @param SearchColumnLongField[] $forwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setForwardConsumptionDays(array $forwardConsumptionDays = null)
    {
      $this->forwardConsumptionDays = $forwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFraudRisk()
    {
      return $this->fraudRisk;
    }

    /**
     * @param SearchColumnEnumSelectField[] $fraudRisk
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFraudRisk(array $fraudRisk = null)
    {
      $this->fraudRisk = $fraudRisk;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getFroogleProductFeed()
    {
      return $this->froogleProductFeed;
    }

    /**
     * @param SearchColumnBooleanField[] $froogleProductFeed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFroogleProductFeed(array $froogleProductFeed = null)
    {
      $this->froogleProductFeed = $froogleProductFeed;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxCost()
    {
      return $this->fxCost;
    }

    /**
     * @param SearchColumnDoubleField[] $fxCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setFxCost(array $fxCost = null)
    {
      $this->fxCost = $fxCost;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getGainLossAccount()
    {
      return $this->gainLossAccount;
    }

    /**
     * @param SearchColumnSelectField[] $gainLossAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGainLossAccount(array $gainLossAccount = null)
    {
      $this->gainLossAccount = $gainLossAccount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGenerateAccruals()
    {
      return $this->generateAccruals;
    }

    /**
     * @param SearchColumnBooleanField[] $generateAccruals
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGenerateAccruals(array $generateAccruals = null)
    {
      $this->generateAccruals = $generateAccruals;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertAuthCode()
    {
      return $this->giftCertAuthCode;
    }

    /**
     * @param SearchColumnStringField[] $giftCertAuthCode
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertAuthCode(array $giftCertAuthCode = null)
    {
      $this->giftCertAuthCode = $giftCertAuthCode;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertEmail()
    {
      return $this->giftCertEmail;
    }

    /**
     * @param SearchColumnStringField[] $giftCertEmail
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertEmail(array $giftCertEmail = null)
    {
      $this->giftCertEmail = $giftCertEmail;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertExpirationDate()
    {
      return $this->giftCertExpirationDate;
    }

    /**
     * @param SearchColumnStringField[] $giftCertExpirationDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertExpirationDate(array $giftCertExpirationDate = null)
    {
      $this->giftCertExpirationDate = $giftCertExpirationDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertFrom()
    {
      return $this->giftCertFrom;
    }

    /**
     * @param SearchColumnStringField[] $giftCertFrom
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertFrom(array $giftCertFrom = null)
    {
      $this->giftCertFrom = $giftCertFrom;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertMessage()
    {
      return $this->giftCertMessage;
    }

    /**
     * @param SearchColumnStringField[] $giftCertMessage
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertMessage(array $giftCertMessage = null)
    {
      $this->giftCertMessage = $giftCertMessage;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertOriginalAmount()
    {
      return $this->giftCertOriginalAmount;
    }

    /**
     * @param SearchColumnStringField[] $giftCertOriginalAmount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertOriginalAmount(array $giftCertOriginalAmount = null)
    {
      $this->giftCertOriginalAmount = $giftCertOriginalAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertRecipient()
    {
      return $this->giftCertRecipient;
    }

    /**
     * @param SearchColumnStringField[] $giftCertRecipient
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setGiftCertRecipient(array $giftCertRecipient = null)
    {
      $this->giftCertRecipient = $giftCertRecipient;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getHits()
    {
      return $this->hits;
    }

    /**
     * @param SearchColumnLongField[] $hits
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setHits(array $hits = null)
    {
      $this->hits = $hits;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param SearchColumnStringField[] $imageUrl
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setImageUrl(array $imageUrl = null)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param SearchColumnBooleanField[] $includeChildren
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIncludeChildren(array $includeChildren = null)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncomeAccount()
    {
      return $this->incomeAccount;
    }

    /**
     * @param SearchColumnSelectField[] $incomeAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIncomeAccount(array $incomeAccount = null)
    {
      $this->incomeAccount = $incomeAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIntercoDefRevAccount()
    {
      return $this->intercoDefRevAccount;
    }

    /**
     * @param SearchColumnSelectField[] $intercoDefRevAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIntercoDefRevAccount(array $intercoDefRevAccount = null)
    {
      $this->intercoDefRevAccount = $intercoDefRevAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIntercoExpenseAccount()
    {
      return $this->intercoExpenseAccount;
    }

    /**
     * @param SearchColumnSelectField[] $intercoExpenseAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIntercoExpenseAccount(array $intercoExpenseAccount = null)
    {
      $this->intercoExpenseAccount = $intercoExpenseAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIntercoIncomeAccount()
    {
      return $this->intercoIncomeAccount;
    }

    /**
     * @param SearchColumnSelectField[] $intercoIncomeAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIntercoIncomeAccount(array $intercoIncomeAccount = null)
    {
      $this->intercoIncomeAccount = $intercoIncomeAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventoryLocation()
    {
      return $this->inventoryLocation;
    }

    /**
     * @param SearchColumnSelectField[] $inventoryLocation
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setInventoryLocation(array $inventoryLocation = null)
    {
      $this->inventoryLocation = $inventoryLocation;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getInvtClassification()
    {
      return $this->invtClassification;
    }

    /**
     * @param SearchColumnEnumSelectField[] $invtClassification
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setInvtClassification(array $invtClassification = null)
    {
      $this->invtClassification = $invtClassification;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getInvtCountInterval()
    {
      return $this->invtCountInterval;
    }

    /**
     * @param SearchColumnLongField[] $invtCountInterval
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setInvtCountInterval(array $invtCountInterval = null)
    {
      $this->invtCountInterval = $invtCountInterval;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAvailable()
    {
      return $this->isAvailable;
    }

    /**
     * @param SearchColumnBooleanField[] $isAvailable
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsAvailable(array $isAvailable = null)
    {
      $this->isAvailable = $isAvailable;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDropShipItem()
    {
      return $this->isDropShipItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isDropShipItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsDropShipItem(array $isDropShipItem = null)
    {
      $this->isDropShipItem = $isDropShipItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsFulfillable()
    {
      return $this->isFulfillable;
    }

    /**
     * @param SearchColumnBooleanField[] $isFulfillable
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsFulfillable(array $isFulfillable = null)
    {
      $this->isFulfillable = $isFulfillable;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoCompliant()
    {
      return $this->isGcoCompliant;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoCompliant
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsGcoCompliant(array $isGcoCompliant = null)
    {
      $this->isGcoCompliant = $isGcoCompliant;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsLotItem()
    {
      return $this->isLotItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isLotItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsLotItem(array $isLotItem = null)
    {
      $this->isLotItem = $isLotItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param SearchColumnBooleanField[] $isOnline
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsOnline(array $isOnline = null)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSerialItem()
    {
      return $this->isSerialItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isSerialItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsSerialItem(array $isSerialItem = null)
    {
      $this->isSerialItem = $isSerialItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSpecialOrderItem()
    {
      return $this->isSpecialOrderItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isSpecialOrderItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsSpecialOrderItem(array $isSpecialOrderItem = null)
    {
      $this->isSpecialOrderItem = $isSpecialOrderItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSpecialWorkOrderItem()
    {
      return $this->isSpecialWorkOrderItem;
    }

    /**
     * @param SearchColumnBooleanField[] $isSpecialWorkOrderItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsSpecialWorkOrderItem(array $isSpecialWorkOrderItem = null)
    {
      $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsStorePickupAllowed()
    {
      return $this->isStorePickupAllowed;
    }

    /**
     * @param SearchColumnBooleanField[] $isStorePickupAllowed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsStorePickupAllowed(array $isStorePickupAllowed = null)
    {
      $this->isStorePickupAllowed = $isStorePickupAllowed;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIssueProduct()
    {
      return $this->issueProduct;
    }

    /**
     * @param SearchColumnSelectField[] $issueProduct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIssueProduct(array $issueProduct = null)
    {
      $this->issueProduct = $issueProduct;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTaxable()
    {
      return $this->isTaxable;
    }

    /**
     * @param SearchColumnBooleanField[] $isTaxable
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsTaxable(array $isTaxable = null)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsVsoeBundle()
    {
      return $this->isVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $isVsoeBundle
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsVsoeBundle(array $isVsoeBundle = null)
    {
      $this->isVsoeBundle = $isVsoeBundle;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsWip()
    {
      return $this->isWip;
    }

    /**
     * @param SearchColumnBooleanField[] $isWip
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setIsWip(array $isWip = null)
    {
      $this->isWip = $isWip;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param SearchColumnStringField[] $itemId
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setItemId(array $itemId = null)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param SearchColumnSelectField[] $itemRevenueCategory
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setItemRevenueCategory(array $itemRevenueCategory = null)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemUrl()
    {
      return $this->itemUrl;
    }

    /**
     * @param SearchColumnStringField[] $itemUrl
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setItemUrl(array $itemUrl = null)
    {
      $this->itemUrl = $itemUrl;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastInvtCountDate()
    {
      return $this->lastInvtCountDate;
    }

    /**
     * @param SearchColumnDateField[] $lastInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLastInvtCountDate(array $lastInvtCountDate = null)
    {
      $this->lastInvtCountDate = $lastInvtCountDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLastPurchasePrice()
    {
      return $this->lastPurchasePrice;
    }

    /**
     * @param SearchColumnDoubleField[] $lastPurchasePrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLastPurchasePrice(array $lastPurchasePrice = null)
    {
      $this->lastPurchasePrice = $lastPurchasePrice;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastQuantityAvailableChange()
    {
      return $this->lastQuantityAvailableChange;
    }

    /**
     * @param SearchColumnDateField[] $lastQuantityAvailableChange
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLastQuantityAvailableChange(array $lastQuantityAvailableChange = null)
    {
      $this->lastQuantityAvailableChange = $lastQuantityAvailableChange;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLeadTime()
    {
      return $this->leadTime;
    }

    /**
     * @param SearchColumnLongField[] $leadTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLeadTime(array $leadTime = null)
    {
      $this->leadTime = $leadTime;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLiabilityAccount()
    {
      return $this->liabilityAccount;
    }

    /**
     * @param SearchColumnSelectField[] $liabilityAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLiabilityAccount(array $liabilityAccount = null)
    {
      $this->liabilityAccount = $liabilityAccount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getListingDuration()
    {
      return $this->listingDuration;
    }

    /**
     * @param SearchColumnEnumSelectField[] $listingDuration
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setListingDuration(array $listingDuration = null)
    {
      $this->listingDuration = $listingDuration;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLocationAllowStorePickup()
    {
      return $this->locationAllowStorePickup;
    }

    /**
     * @param SearchColumnBooleanField[] $locationAllowStorePickup
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationAllowStorePickup(array $locationAllowStorePickup = null)
    {
      $this->locationAllowStorePickup = $locationAllowStorePickup;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationAtpLeadTime()
    {
      return $this->locationAtpLeadTime;
    }

    /**
     * @param SearchColumnDoubleField[] $locationAtpLeadTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationAtpLeadTime(array $locationAtpLeadTime = null)
    {
      $this->locationAtpLeadTime = $locationAtpLeadTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationAverageCost()
    {
      return $this->locationAverageCost;
    }

    /**
     * @param SearchColumnDoubleField[] $locationAverageCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationAverageCost(array $locationAverageCost = null)
    {
      $this->locationAverageCost = $locationAverageCost;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocationBinQuantityAvailable()
    {
      return $this->locationBinQuantityAvailable;
    }

    /**
     * @param SearchColumnStringField[] $locationBinQuantityAvailable
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationBinQuantityAvailable(array $locationBinQuantityAvailable = null)
    {
      $this->locationBinQuantityAvailable = $locationBinQuantityAvailable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationBuildTime()
    {
      return $this->locationBuildTime;
    }

    /**
     * @param SearchColumnDoubleField[] $locationBuildTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationBuildTime(array $locationBuildTime = null)
    {
      $this->locationBuildTime = $locationBuildTime;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationCost()
    {
      return $this->locationCost;
    }

    /**
     * @param SearchColumnDoubleField[] $locationCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationCost(array $locationCost = null)
    {
      $this->locationCost = $locationCost;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationCostAccountingStatus()
    {
      return $this->locationCostAccountingStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationCostAccountingStatus
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationCostAccountingStatus(array $locationCostAccountingStatus = null)
    {
      $this->locationCostAccountingStatus = $locationCostAccountingStatus;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationDefaultReturnCost()
    {
      return $this->locationDefaultReturnCost;
    }

    /**
     * @param SearchColumnDoubleField[] $locationDefaultReturnCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationDefaultReturnCost(array $locationDefaultReturnCost = null)
    {
      $this->locationDefaultReturnCost = $locationDefaultReturnCost;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationDemandSource()
    {
      return $this->locationDemandSource;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationDemandSource
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationDemandSource(array $locationDemandSource = null)
    {
      $this->locationDemandSource = $locationDemandSource;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationDemandTimeFence()
    {
      return $this->locationDemandTimeFence;
    }

    /**
     * @param SearchColumnLongField[] $locationDemandTimeFence
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationDemandTimeFence(array $locationDemandTimeFence = null)
    {
      $this->locationDemandTimeFence = $locationDemandTimeFence;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationFixedLotSize()
    {
      return $this->locationFixedLotSize;
    }

    /**
     * @param SearchColumnDoubleField[] $locationFixedLotSize
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationFixedLotSize(array $locationFixedLotSize = null)
    {
      $this->locationFixedLotSize = $locationFixedLotSize;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocationInventoryCostTemplate()
    {
      return $this->locationInventoryCostTemplate;
    }

    /**
     * @param SearchColumnStringField[] $locationInventoryCostTemplate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationInventoryCostTemplate(array $locationInventoryCostTemplate = null)
    {
      $this->locationInventoryCostTemplate = $locationInventoryCostTemplate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationInvtClassification()
    {
      return $this->locationInvtClassification;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationInvtClassification
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationInvtClassification(array $locationInvtClassification = null)
    {
      $this->locationInvtClassification = $locationInvtClassification;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationInvtCountInterval()
    {
      return $this->locationInvtCountInterval;
    }

    /**
     * @param SearchColumnLongField[] $locationInvtCountInterval
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationInvtCountInterval(array $locationInvtCountInterval = null)
    {
      $this->locationInvtCountInterval = $locationInvtCountInterval;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLocationLastInvtCountDate()
    {
      return $this->locationLastInvtCountDate;
    }

    /**
     * @param SearchColumnDateField[] $locationLastInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationLastInvtCountDate(array $locationLastInvtCountDate = null)
    {
      $this->locationLastInvtCountDate = $locationLastInvtCountDate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationLeadTime()
    {
      return $this->locationLeadTime;
    }

    /**
     * @param SearchColumnLongField[] $locationLeadTime
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationLeadTime(array $locationLeadTime = null)
    {
      $this->locationLeadTime = $locationLeadTime;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLocationNextInvtCountDate()
    {
      return $this->locationNextInvtCountDate;
    }

    /**
     * @param SearchColumnDateField[] $locationNextInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationNextInvtCountDate(array $locationNextInvtCountDate = null)
    {
      $this->locationNextInvtCountDate = $locationNextInvtCountDate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationPeriodicLotSizeDays()
    {
      return $this->locationPeriodicLotSizeDays;
    }

    /**
     * @param SearchColumnLongField[] $locationPeriodicLotSizeDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationPeriodicLotSizeDays(array $locationPeriodicLotSizeDays = null)
    {
      $this->locationPeriodicLotSizeDays = $locationPeriodicLotSizeDays;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationPeriodicLotSizeType()
    {
      return $this->locationPeriodicLotSizeType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationPeriodicLotSizeType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationPeriodicLotSizeType(array $locationPeriodicLotSizeType = null)
    {
      $this->locationPeriodicLotSizeType = $locationPeriodicLotSizeType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationPreferredStockLevel()
    {
      return $this->locationPreferredStockLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $locationPreferredStockLevel
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationPreferredStockLevel(array $locationPreferredStockLevel = null)
    {
      $this->locationPreferredStockLevel = $locationPreferredStockLevel;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQtyAvailForStorePickup()
    {
      return $this->locationQtyAvailForStorePickup;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQtyAvailForStorePickup
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQtyAvailForStorePickup(array $locationQtyAvailForStorePickup = null)
    {
      $this->locationQtyAvailForStorePickup = $locationQtyAvailForStorePickup;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityAvailable()
    {
      return $this->locationQuantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityAvailable
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQuantityAvailable(array $locationQuantityAvailable = null)
    {
      $this->locationQuantityAvailable = $locationQuantityAvailable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityBackOrdered()
    {
      return $this->locationQuantityBackOrdered;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityBackOrdered
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQuantityBackOrdered(array $locationQuantityBackOrdered = null)
    {
      $this->locationQuantityBackOrdered = $locationQuantityBackOrdered;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityCommitted()
    {
      return $this->locationQuantityCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityCommitted
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQuantityCommitted(array $locationQuantityCommitted = null)
    {
      $this->locationQuantityCommitted = $locationQuantityCommitted;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityInTransit()
    {
      return $this->locationQuantityInTransit;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityInTransit
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQuantityInTransit(array $locationQuantityInTransit = null)
    {
      $this->locationQuantityInTransit = $locationQuantityInTransit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityOnHand()
    {
      return $this->locationQuantityOnHand;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityOnHand
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQuantityOnHand(array $locationQuantityOnHand = null)
    {
      $this->locationQuantityOnHand = $locationQuantityOnHand;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationQuantityOnOrder()
    {
      return $this->locationQuantityOnOrder;
    }

    /**
     * @param SearchColumnDoubleField[] $locationQuantityOnOrder
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationQuantityOnOrder(array $locationQuantityOnOrder = null)
    {
      $this->locationQuantityOnOrder = $locationQuantityOnOrder;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationReOrderPoint()
    {
      return $this->locationReOrderPoint;
    }

    /**
     * @param SearchColumnDoubleField[] $locationReOrderPoint
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationReOrderPoint(array $locationReOrderPoint = null)
    {
      $this->locationReOrderPoint = $locationReOrderPoint;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationRescheduleInDays()
    {
      return $this->locationRescheduleInDays;
    }

    /**
     * @param SearchColumnLongField[] $locationRescheduleInDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationRescheduleInDays(array $locationRescheduleInDays = null)
    {
      $this->locationRescheduleInDays = $locationRescheduleInDays;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationRescheduleOutDays()
    {
      return $this->locationRescheduleOutDays;
    }

    /**
     * @param SearchColumnLongField[] $locationRescheduleOutDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationRescheduleOutDays(array $locationRescheduleOutDays = null)
    {
      $this->locationRescheduleOutDays = $locationRescheduleOutDays;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationSafetyStockLevel()
    {
      return $this->locationSafetyStockLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $locationSafetyStockLevel
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationSafetyStockLevel(array $locationSafetyStockLevel = null)
    {
      $this->locationSafetyStockLevel = $locationSafetyStockLevel;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationStorePickupBufferStock()
    {
      return $this->locationStorePickupBufferStock;
    }

    /**
     * @param SearchColumnDoubleField[] $locationStorePickupBufferStock
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationStorePickupBufferStock(array $locationStorePickupBufferStock = null)
    {
      $this->locationStorePickupBufferStock = $locationStorePickupBufferStock;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationSupplyLotSizingMethod()
    {
      return $this->locationSupplyLotSizingMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationSupplyLotSizingMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationSupplyLotSizingMethod(array $locationSupplyLotSizingMethod = null)
    {
      $this->locationSupplyLotSizingMethod = $locationSupplyLotSizingMethod;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocationSupplyTimeFence()
    {
      return $this->locationSupplyTimeFence;
    }

    /**
     * @param SearchColumnLongField[] $locationSupplyTimeFence
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationSupplyTimeFence(array $locationSupplyTimeFence = null)
    {
      $this->locationSupplyTimeFence = $locationSupplyTimeFence;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationSupplyType()
    {
      return $this->locationSupplyType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationSupplyType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationSupplyType(array $locationSupplyType = null)
    {
      $this->locationSupplyType = $locationSupplyType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLocationTotalValue()
    {
      return $this->locationTotalValue;
    }

    /**
     * @param SearchColumnDoubleField[] $locationTotalValue
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocationTotalValue(array $locationTotalValue = null)
    {
      $this->locationTotalValue = $locationTotalValue;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocBackwardConsumptionDays()
    {
      return $this->locBackwardConsumptionDays;
    }

    /**
     * @param SearchColumnLongField[] $locBackwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocBackwardConsumptionDays(array $locBackwardConsumptionDays = null)
    {
      $this->locBackwardConsumptionDays = $locBackwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLocForwardConsumptionDays()
    {
      return $this->locForwardConsumptionDays;
    }

    /**
     * @param SearchColumnLongField[] $locForwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setLocForwardConsumptionDays(array $locForwardConsumptionDays = null)
    {
      $this->locForwardConsumptionDays = $locForwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturer()
    {
      return $this->manufacturer;
    }

    /**
     * @param SearchColumnStringField[] $manufacturer
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturer(array $manufacturer = null)
    {
      $this->manufacturer = $manufacturer;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerAddr1()
    {
      return $this->manufacturerAddr1;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerAddr1
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturerAddr1(array $manufacturerAddr1 = null)
    {
      $this->manufacturerAddr1 = $manufacturerAddr1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerCity()
    {
      return $this->manufacturerCity;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerCity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturerCity(array $manufacturerCity = null)
    {
      $this->manufacturerCity = $manufacturerCity;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerState()
    {
      return $this->manufacturerState;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerState
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturerState(array $manufacturerState = null)
    {
      $this->manufacturerState = $manufacturerState;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerTariff()
    {
      return $this->manufacturerTariff;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerTariff
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturerTariff(array $manufacturerTariff = null)
    {
      $this->manufacturerTariff = $manufacturerTariff;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerTaxId()
    {
      return $this->manufacturerTaxId;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerTaxId
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturerTaxId(array $manufacturerTaxId = null)
    {
      $this->manufacturerTaxId = $manufacturerTaxId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getManufacturerZip()
    {
      return $this->manufacturerZip;
    }

    /**
     * @param SearchColumnStringField[] $manufacturerZip
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturerZip(array $manufacturerZip = null)
    {
      $this->manufacturerZip = $manufacturerZip;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getManufacturingChargeItem()
    {
      return $this->manufacturingChargeItem;
    }

    /**
     * @param SearchColumnBooleanField[] $manufacturingChargeItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setManufacturingChargeItem(array $manufacturingChargeItem = null)
    {
      $this->manufacturingChargeItem = $manufacturingChargeItem;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMatchBillToReceipt()
    {
      return $this->matchBillToReceipt;
    }

    /**
     * @param SearchColumnBooleanField[] $matchBillToReceipt
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMatchBillToReceipt(array $matchBillToReceipt = null)
    {
      $this->matchBillToReceipt = $matchBillToReceipt;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMemberItem()
    {
      return $this->memberItem;
    }

    /**
     * @param SearchColumnSelectField[] $memberItem
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMemberItem(array $memberItem = null)
    {
      $this->memberItem = $memberItem;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getMemberQuantity()
    {
      return $this->memberQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $memberQuantity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMemberQuantity(array $memberQuantity = null)
    {
      $this->memberQuantity = $memberQuantity;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMetaTagHtml()
    {
      return $this->metaTagHtml;
    }

    /**
     * @param SearchColumnStringField[] $metaTagHtml
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMetaTagHtml(array $metaTagHtml = null)
    {
      $this->metaTagHtml = $metaTagHtml;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMinimumQuantity()
    {
      return $this->minimumQuantity;
    }

    /**
     * @param SearchColumnStringField[] $minimumQuantity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMinimumQuantity(array $minimumQuantity = null)
    {
      $this->minimumQuantity = $minimumQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getModified()
    {
      return $this->modified;
    }

    /**
     * @param SearchColumnDateField[] $modified
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setModified(array $modified = null)
    {
      $this->modified = $modified;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMossApplies()
    {
      return $this->mossApplies;
    }

    /**
     * @param SearchColumnBooleanField[] $mossApplies
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMossApplies(array $mossApplies = null)
    {
      $this->mossApplies = $mossApplies;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMpn()
    {
      return $this->mpn;
    }

    /**
     * @param SearchColumnStringField[] $mpn
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMpn(array $mpn = null)
    {
      $this->mpn = $mpn;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMultManufactureAddr()
    {
      return $this->multManufactureAddr;
    }

    /**
     * @param SearchColumnBooleanField[] $multManufactureAddr
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setMultManufactureAddr(array $multManufactureAddr = null)
    {
      $this->multManufactureAddr = $multManufactureAddr;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNextagCategory()
    {
      return $this->nextagCategory;
    }

    /**
     * @param SearchColumnStringField[] $nextagCategory
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNextagCategory(array $nextagCategory = null)
    {
      $this->nextagCategory = $nextagCategory;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNextagProductFeed()
    {
      return $this->nextagProductFeed;
    }

    /**
     * @param SearchColumnBooleanField[] $nextagProductFeed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNextagProductFeed(array $nextagProductFeed = null)
    {
      $this->nextagProductFeed = $nextagProductFeed;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextInvtCountDate()
    {
      return $this->nextInvtCountDate;
    }

    /**
     * @param SearchColumnDateField[] $nextInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNextInvtCountDate(array $nextInvtCountDate = null)
    {
      $this->nextInvtCountDate = $nextInvtCountDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNoPriceMessage()
    {
      return $this->noPriceMessage;
    }

    /**
     * @param SearchColumnStringField[] $noPriceMessage
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNoPriceMessage(array $noPriceMessage = null)
    {
      $this->noPriceMessage = $noPriceMessage;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getNumActiveListings()
    {
      return $this->numActiveListings;
    }

    /**
     * @param SearchColumnLongField[] $numActiveListings
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNumActiveListings(array $numActiveListings = null)
    {
      $this->numActiveListings = $numActiveListings;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNumberAllowedDownloads()
    {
      return $this->numberAllowedDownloads;
    }

    /**
     * @param SearchColumnStringField[] $numberAllowedDownloads
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNumberAllowedDownloads(array $numberAllowedDownloads = null)
    {
      $this->numberAllowedDownloads = $numberAllowedDownloads;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getNumCurrentlyListed()
    {
      return $this->numCurrentlyListed;
    }

    /**
     * @param SearchColumnLongField[] $numCurrentlyListed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setNumCurrentlyListed(array $numCurrentlyListed = null)
    {
      $this->numCurrentlyListed = $numCurrentlyListed;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getObsoleteDate()
    {
      return $this->obsoleteDate;
    }

    /**
     * @param SearchColumnDateField[] $obsoleteDate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setObsoleteDate(array $obsoleteDate = null)
    {
      $this->obsoleteDate = $obsoleteDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getObsoleteRevision()
    {
      return $this->obsoleteRevision;
    }

    /**
     * @param SearchColumnSelectField[] $obsoleteRevision
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setObsoleteRevision(array $obsoleteRevision = null)
    {
      $this->obsoleteRevision = $obsoleteRevision;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOfferSupport()
    {
      return $this->offerSupport;
    }

    /**
     * @param SearchColumnBooleanField[] $offerSupport
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOfferSupport(array $offerSupport = null)
    {
      $this->offerSupport = $offerSupport;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOnlineCustomerPrice()
    {
      return $this->onlineCustomerPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $onlineCustomerPrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOnlineCustomerPrice(array $onlineCustomerPrice = null)
    {
      $this->onlineCustomerPrice = $onlineCustomerPrice;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOnlinePrice()
    {
      return $this->onlinePrice;
    }

    /**
     * @param SearchColumnDoubleField[] $onlinePrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOnlinePrice(array $onlinePrice = null)
    {
      $this->onlinePrice = $onlinePrice;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOnSpecial()
    {
      return $this->onSpecial;
    }

    /**
     * @param SearchColumnBooleanField[] $onSpecial
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOnSpecial(array $onSpecial = null)
    {
      $this->onSpecial = $onSpecial;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOtherPrices()
    {
      return $this->otherPrices;
    }

    /**
     * @param SearchColumnDoubleField[] $otherPrices
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOtherPrices(array $otherPrices = null)
    {
      $this->otherPrices = $otherPrices;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOtherVendor()
    {
      return $this->otherVendor;
    }

    /**
     * @param SearchColumnSelectField[] $otherVendor
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOtherVendor(array $otherVendor = null)
    {
      $this->otherVendor = $otherVendor;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOutOfStockBehavior()
    {
      return $this->outOfStockBehavior;
    }

    /**
     * @param SearchColumnStringField[] $outOfStockBehavior
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOutOfStockBehavior(array $outOfStockBehavior = null)
    {
      $this->outOfStockBehavior = $outOfStockBehavior;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOutOfStockMessage()
    {
      return $this->outOfStockMessage;
    }

    /**
     * @param SearchColumnStringField[] $outOfStockMessage
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOutOfStockMessage(array $outOfStockMessage = null)
    {
      $this->outOfStockMessage = $outOfStockMessage;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getOverallQuantityPricingType()
    {
      return $this->overallQuantityPricingType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $overallQuantityPricingType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOverallQuantityPricingType(array $overallQuantityPricingType = null)
    {
      $this->overallQuantityPricingType = $overallQuantityPricingType;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getOverheadType()
    {
      return $this->overheadType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $overheadType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setOverheadType(array $overheadType = null)
    {
      $this->overheadType = $overheadType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param SearchColumnStringField[] $pageTitle
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPageTitle(array $pageTitle = null)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setParent(array $parent = null)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPeriodicLotSizeDays()
    {
      return $this->periodicLotSizeDays;
    }

    /**
     * @param SearchColumnLongField[] $periodicLotSizeDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPeriodicLotSizeDays(array $periodicLotSizeDays = null)
    {
      $this->periodicLotSizeDays = $periodicLotSizeDays;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPeriodicLotSizeType()
    {
      return $this->periodicLotSizeType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $periodicLotSizeType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPeriodicLotSizeType(array $periodicLotSizeType = null)
    {
      $this->periodicLotSizeType = $periodicLotSizeType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPreferenceCriterion()
    {
      return $this->preferenceCriterion;
    }

    /**
     * @param SearchColumnStringField[] $preferenceCriterion
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPreferenceCriterion(array $preferenceCriterion = null)
    {
      $this->preferenceCriterion = $preferenceCriterion;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPreferredBin()
    {
      return $this->preferredBin;
    }

    /**
     * @param SearchColumnBooleanField[] $preferredBin
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPreferredBin(array $preferredBin = null)
    {
      $this->preferredBin = $preferredBin;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPreferredLocation()
    {
      return $this->preferredLocation;
    }

    /**
     * @param SearchColumnSelectField[] $preferredLocation
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPreferredLocation(array $preferredLocation = null)
    {
      $this->preferredLocation = $preferredLocation;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPreferredStockLevel()
    {
      return $this->preferredStockLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $preferredStockLevel
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPreferredStockLevel(array $preferredStockLevel = null)
    {
      $this->preferredStockLevel = $preferredStockLevel;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPreferredStockLevelDays()
    {
      return $this->preferredStockLevelDays;
    }

    /**
     * @param SearchColumnLongField[] $preferredStockLevelDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPreferredStockLevelDays(array $preferredStockLevelDays = null)
    {
      $this->preferredStockLevelDays = $preferredStockLevelDays;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPricesIncludeTax()
    {
      return $this->pricesIncludeTax;
    }

    /**
     * @param SearchColumnBooleanField[] $pricesIncludeTax
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPricesIncludeTax(array $pricesIncludeTax = null)
    {
      $this->pricesIncludeTax = $pricesIncludeTax;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPricingGroup()
    {
      return $this->pricingGroup;
    }

    /**
     * @param SearchColumnSelectField[] $pricingGroup
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPricingGroup(array $pricingGroup = null)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrimaryCategory()
    {
      return $this->primaryCategory;
    }

    /**
     * @param SearchColumnStringField[] $primaryCategory
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPrimaryCategory(array $primaryCategory = null)
    {
      $this->primaryCategory = $primaryCategory;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProdPriceVarianceAcct()
    {
      return $this->prodPriceVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $prodPriceVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setProdPriceVarianceAcct(array $prodPriceVarianceAcct = null)
    {
      $this->prodPriceVarianceAcct = $prodPriceVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProdQtyVarianceAcct()
    {
      return $this->prodQtyVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $prodQtyVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setProdQtyVarianceAcct(array $prodQtyVarianceAcct = null)
    {
      $this->prodQtyVarianceAcct = $prodQtyVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPurchaseDescription()
    {
      return $this->purchaseDescription;
    }

    /**
     * @param SearchColumnStringField[] $purchaseDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPurchaseDescription(array $purchaseDescription = null)
    {
      $this->purchaseDescription = $purchaseDescription;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderAmount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPurchaseOrderAmount(array $purchaseOrderAmount = null)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPurchaseOrderQuantity(array $purchaseOrderQuantity = null)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPurchaseOrderQuantityDiff(array $purchaseOrderQuantityDiff = null)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchasePriceVarianceAcct()
    {
      return $this->purchasePriceVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $purchasePriceVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPurchasePriceVarianceAcct(array $purchasePriceVarianceAcct = null)
    {
      $this->purchasePriceVarianceAcct = $purchasePriceVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseUnit()
    {
      return $this->purchaseUnit;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseUnit
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setPurchaseUnit(array $purchaseUnit = null)
    {
      $this->purchaseUnit = $purchaseUnit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityAvailable
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setQuantityAvailable(array $quantityAvailable = null)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityBackOrdered()
    {
      return $this->quantityBackOrdered;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityBackOrdered
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setQuantityBackOrdered(array $quantityBackOrdered = null)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityCommitted()
    {
      return $this->quantityCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityCommitted
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setQuantityCommitted(array $quantityCommitted = null)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnHand
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setQuantityOnHand(array $quantityOnHand = null)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityOnOrder
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setQuantityOnOrder(array $quantityOnOrder = null)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getQuantityPricingSchedule()
    {
      return $this->quantityPricingSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $quantityPricingSchedule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setQuantityPricingSchedule(array $quantityPricingSchedule = null)
    {
      $this->quantityPricingSchedule = $quantityPricingSchedule;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptAmount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setReceiptAmount(array $receiptAmount = null)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setReceiptQuantity(array $receiptQuantity = null)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantityDiff
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setReceiptQuantityDiff(array $receiptQuantityDiff = null)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getReorderMultiple()
    {
      return $this->reorderMultiple;
    }

    /**
     * @param SearchColumnLongField[] $reorderMultiple
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setReorderMultiple(array $reorderMultiple = null)
    {
      $this->reorderMultiple = $reorderMultiple;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReOrderPoint()
    {
      return $this->reOrderPoint;
    }

    /**
     * @param SearchColumnDoubleField[] $reOrderPoint
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setReOrderPoint(array $reOrderPoint = null)
    {
      $this->reOrderPoint = $reOrderPoint;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRescheduleInDays()
    {
      return $this->rescheduleInDays;
    }

    /**
     * @param SearchColumnLongField[] $rescheduleInDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRescheduleInDays(array $rescheduleInDays = null)
    {
      $this->rescheduleInDays = $rescheduleInDays;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRescheduleOutDays()
    {
      return $this->rescheduleOutDays;
    }

    /**
     * @param SearchColumnLongField[] $rescheduleOutDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRescheduleOutDays(array $rescheduleOutDays = null)
    {
      $this->rescheduleOutDays = $rescheduleOutDays;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReservePrice()
    {
      return $this->reservePrice;
    }

    /**
     * @param SearchColumnDoubleField[] $reservePrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setReservePrice(array $reservePrice = null)
    {
      $this->reservePrice = $reservePrice;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevenueAllocationGroup()
    {
      return $this->revenueAllocationGroup;
    }

    /**
     * @param SearchColumnSelectField[] $revenueAllocationGroup
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRevenueAllocationGroup(array $revenueAllocationGroup = null)
    {
      $this->revenueAllocationGroup = $revenueAllocationGroup;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevenueRecognitionRule()
    {
      return $this->revenueRecognitionRule;
    }

    /**
     * @param SearchColumnSelectField[] $revenueRecognitionRule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRevenueRecognitionRule(array $revenueRecognitionRule = null)
    {
      $this->revenueRecognitionRule = $revenueRecognitionRule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param SearchColumnSelectField[] $revRecForecastRule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRevRecForecastRule(array $revRecForecastRule = null)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevReclassFXAccount()
    {
      return $this->revReclassFXAccount;
    }

    /**
     * @param SearchColumnSelectField[] $revReclassFXAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRevReclassFXAccount(array $revReclassFXAccount = null)
    {
      $this->revReclassFXAccount = $revReclassFXAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $revRecSchedule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRevRecSchedule(array $revRecSchedule = null)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRoundUpAsComponent()
    {
      return $this->roundUpAsComponent;
    }

    /**
     * @param SearchColumnBooleanField[] $roundUpAsComponent
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setRoundUpAsComponent(array $roundUpAsComponent = null)
    {
      $this->roundUpAsComponent = $roundUpAsComponent;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSafetyStockLevel()
    {
      return $this->safetyStockLevel;
    }

    /**
     * @param SearchColumnDoubleField[] $safetyStockLevel
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSafetyStockLevel(array $safetyStockLevel = null)
    {
      $this->safetyStockLevel = $safetyStockLevel;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSafetyStockLevelDays()
    {
      return $this->safetyStockLevelDays;
    }

    /**
     * @param SearchColumnLongField[] $safetyStockLevelDays
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSafetyStockLevelDays(array $safetyStockLevelDays = null)
    {
      $this->safetyStockLevelDays = $safetyStockLevelDays;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalesDescription()
    {
      return $this->salesDescription;
    }

    /**
     * @param SearchColumnStringField[] $salesDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSalesDescription(array $salesDescription = null)
    {
      $this->salesDescription = $salesDescription;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTaxCode()
    {
      return $this->salesTaxCode;
    }

    /**
     * @param SearchColumnSelectField[] $salesTaxCode
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSalesTaxCode(array $salesTaxCode = null)
    {
      $this->salesTaxCode = $salesTaxCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSaleUnit()
    {
      return $this->saleUnit;
    }

    /**
     * @param SearchColumnSelectField[] $saleUnit
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSaleUnit(array $saleUnit = null)
    {
      $this->saleUnit = $saleUnit;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSameAsPrimaryBookAmortization()
    {
      return $this->sameAsPrimaryBookAmortization;
    }

    /**
     * @param SearchColumnBooleanField[] $sameAsPrimaryBookAmortization
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSameAsPrimaryBookAmortization(array $sameAsPrimaryBookAmortization = null)
    {
      $this->sameAsPrimaryBookAmortization = $sameAsPrimaryBookAmortization;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSameAsPrimaryBookRevRec()
    {
      return $this->sameAsPrimaryBookRevRec;
    }

    /**
     * @param SearchColumnBooleanField[] $sameAsPrimaryBookRevRec
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSameAsPrimaryBookRevRec(array $sameAsPrimaryBookRevRec = null)
    {
      $this->sameAsPrimaryBookRevRec = $sameAsPrimaryBookRevRec;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getScheduleBCode()
    {
      return $this->scheduleBCode;
    }

    /**
     * @param SearchColumnEnumSelectField[] $scheduleBCode
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setScheduleBCode(array $scheduleBCode = null)
    {
      $this->scheduleBCode = $scheduleBCode;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScheduleBNumber()
    {
      return $this->scheduleBNumber;
    }

    /**
     * @param SearchColumnStringField[] $scheduleBNumber
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setScheduleBNumber(array $scheduleBNumber = null)
    {
      $this->scheduleBNumber = $scheduleBNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getScheduleBQuantity()
    {
      return $this->scheduleBQuantity;
    }

    /**
     * @param SearchColumnStringField[] $scheduleBQuantity
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setScheduleBQuantity(array $scheduleBQuantity = null)
    {
      $this->scheduleBQuantity = $scheduleBQuantity;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getScrapAcct()
    {
      return $this->scrapAcct;
    }

    /**
     * @param SearchColumnSelectField[] $scrapAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setScrapAcct(array $scrapAcct = null)
    {
      $this->scrapAcct = $scrapAcct;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSearchKeywords()
    {
      return $this->searchKeywords;
    }

    /**
     * @param SearchColumnStringField[] $searchKeywords
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSearchKeywords(array $searchKeywords = null)
    {
      $this->searchKeywords = $searchKeywords;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSeasonalDemand()
    {
      return $this->seasonalDemand;
    }

    /**
     * @param SearchColumnBooleanField[] $seasonalDemand
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSeasonalDemand(array $seasonalDemand = null)
    {
      $this->seasonalDemand = $seasonalDemand;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSellOnEBay()
    {
      return $this->sellOnEBay;
    }

    /**
     * @param SearchColumnBooleanField[] $sellOnEBay
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSellOnEBay(array $sellOnEBay = null)
    {
      $this->sellOnEBay = $sellOnEBay;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param SearchColumnStringField[] $serialNumber
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSerialNumber(array $serialNumber = null)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumberLocation()
    {
      return $this->serialNumberLocation;
    }

    /**
     * @param SearchColumnStringField[] $serialNumberLocation
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSerialNumberLocation(array $serialNumberLocation = null)
    {
      $this->serialNumberLocation = $serialNumberLocation;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipIndividually()
    {
      return $this->shipIndividually;
    }

    /**
     * @param SearchColumnBooleanField[] $shipIndividually
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShipIndividually(array $shipIndividually = null)
    {
      $this->shipIndividually = $shipIndividually;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipPackage()
    {
      return $this->shipPackage;
    }

    /**
     * @param SearchColumnSelectField[] $shipPackage
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShipPackage(array $shipPackage = null)
    {
      $this->shipPackage = $shipPackage;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShippingCarrier()
    {
      return $this->shippingCarrier;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shippingCarrier
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShippingCarrier(array $shippingCarrier = null)
    {
      $this->shippingCarrier = $shippingCarrier;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getShippingRate()
    {
      return $this->shippingRate;
    }

    /**
     * @param SearchColumnDoubleField[] $shippingRate
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShippingRate(array $shippingRate = null)
    {
      $this->shippingRate = $shippingRate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShoppingDotComCategory()
    {
      return $this->shoppingDotComCategory;
    }

    /**
     * @param SearchColumnStringField[] $shoppingDotComCategory
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShoppingDotComCategory(array $shoppingDotComCategory = null)
    {
      $this->shoppingDotComCategory = $shoppingDotComCategory;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShoppingProductFeed()
    {
      return $this->shoppingProductFeed;
    }

    /**
     * @param SearchColumnBooleanField[] $shoppingProductFeed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShoppingProductFeed(array $shoppingProductFeed = null)
    {
      $this->shoppingProductFeed = $shoppingProductFeed;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getShopzillaCategoryId()
    {
      return $this->shopzillaCategoryId;
    }

    /**
     * @param SearchColumnLongField[] $shopzillaCategoryId
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShopzillaCategoryId(array $shopzillaCategoryId = null)
    {
      $this->shopzillaCategoryId = $shopzillaCategoryId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShopzillaProductFeed()
    {
      return $this->shopzillaProductFeed;
    }

    /**
     * @param SearchColumnBooleanField[] $shopzillaProductFeed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setShopzillaProductFeed(array $shopzillaProductFeed = null)
    {
      $this->shopzillaProductFeed = $shopzillaProductFeed;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SearchColumnEnumSelectField[] $sitemapPriority
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSitemapPriority(array $sitemapPriority = null)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSoftDescriptor()
    {
      return $this->softDescriptor;
    }

    /**
     * @param SearchColumnSelectField[] $softDescriptor
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSoftDescriptor(array $softDescriptor = null)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getStartingPrice()
    {
      return $this->startingPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $startingPrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStartingPrice(array $startingPrice = null)
    {
      $this->startingPrice = $startingPrice;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStockDescription()
    {
      return $this->stockDescription;
    }

    /**
     * @param SearchColumnStringField[] $stockDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStockDescription(array $stockDescription = null)
    {
      $this->stockDescription = $stockDescription;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStockUnit()
    {
      return $this->stockUnit;
    }

    /**
     * @param SearchColumnSelectField[] $stockUnit
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStockUnit(array $stockUnit = null)
    {
      $this->stockUnit = $stockUnit;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStoreDescription()
    {
      return $this->storeDescription;
    }

    /**
     * @param SearchColumnStringField[] $storeDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStoreDescription(array $storeDescription = null)
    {
      $this->storeDescription = $storeDescription;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStoreDetailedDescription()
    {
      return $this->storeDetailedDescription;
    }

    /**
     * @param SearchColumnStringField[] $storeDetailedDescription
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStoreDetailedDescription(array $storeDetailedDescription = null)
    {
      $this->storeDetailedDescription = $storeDetailedDescription;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStoreDisplayImage()
    {
      return $this->storeDisplayImage;
    }

    /**
     * @param SearchColumnSelectField[] $storeDisplayImage
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStoreDisplayImage(array $storeDisplayImage = null)
    {
      $this->storeDisplayImage = $storeDisplayImage;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStoreDisplayName()
    {
      return $this->storeDisplayName;
    }

    /**
     * @param SearchColumnStringField[] $storeDisplayName
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStoreDisplayName(array $storeDisplayName = null)
    {
      $this->storeDisplayName = $storeDisplayName;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStoreDisplayThumbnail()
    {
      return $this->storeDisplayThumbnail;
    }

    /**
     * @param SearchColumnSelectField[] $storeDisplayThumbnail
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setStoreDisplayThumbnail(array $storeDisplayThumbnail = null)
    {
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSubType()
    {
      return $this->subType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $subType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSubType(array $subType = null)
    {
      $this->subType = $subType;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSupplyLotSizingMethod()
    {
      return $this->supplyLotSizingMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $supplyLotSizingMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSupplyLotSizingMethod(array $supplyLotSizingMethod = null)
    {
      $this->supplyLotSizingMethod = $supplyLotSizingMethod;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSupplyReplenishmentMethod()
    {
      return $this->supplyReplenishmentMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $supplyReplenishmentMethod
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSupplyReplenishmentMethod(array $supplyReplenishmentMethod = null)
    {
      $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSupplyTimeFence()
    {
      return $this->supplyTimeFence;
    }

    /**
     * @param SearchColumnLongField[] $supplyTimeFence
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSupplyTimeFence(array $supplyTimeFence = null)
    {
      $this->supplyTimeFence = $supplyTimeFence;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSupplyType()
    {
      return $this->supplyType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $supplyType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setSupplyType(array $supplyType = null)
    {
      $this->supplyType = $supplyType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxSchedule()
    {
      return $this->taxSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $taxSchedule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setTaxSchedule(array $taxSchedule = null)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getThumbNailUrl()
    {
      return $this->thumbNailUrl;
    }

    /**
     * @param SearchColumnStringField[] $thumbNailUrl
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setThumbNailUrl(array $thumbNailUrl = null)
    {
      $this->thumbNailUrl = $thumbNailUrl;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotalValue()
    {
      return $this->totalValue;
    }

    /**
     * @param SearchColumnDoubleField[] $totalValue
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setTotalValue(array $totalValue = null)
    {
      $this->totalValue = $totalValue;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTrackLandedCost()
    {
      return $this->trackLandedCost;
    }

    /**
     * @param SearchColumnBooleanField[] $trackLandedCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setTrackLandedCost(array $trackLandedCost = null)
    {
      $this->trackLandedCost = $trackLandedCost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferPrice()
    {
      return $this->transferPrice;
    }

    /**
     * @param SearchColumnDoubleField[] $transferPrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setTransferPrice(array $transferPrice = null)
    {
      $this->transferPrice = $transferPrice;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnbuildVarianceAccount()
    {
      return $this->unbuildVarianceAccount;
    }

    /**
     * @param SearchColumnSelectField[] $unbuildVarianceAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUnbuildVarianceAccount(array $unbuildVarianceAccount = null)
    {
      $this->unbuildVarianceAccount = $unbuildVarianceAccount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param SearchColumnSelectField[] $unitsType
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUnitsType(array $unitsType = null)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUpcCode()
    {
      return $this->upcCode;
    }

    /**
     * @param SearchColumnStringField[] $upcCode
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUpcCode(array $upcCode = null)
    {
      $this->upcCode = $upcCode;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param SearchColumnStringField[] $urlComponent
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUrlComponent(array $urlComponent = null)
    {
      $this->urlComponent = $urlComponent;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseBins()
    {
      return $this->useBins;
    }

    /**
     * @param SearchColumnBooleanField[] $useBins
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUseBins(array $useBins = null)
    {
      $this->useBins = $useBins;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseComponentYield()
    {
      return $this->useComponentYield;
    }

    /**
     * @param SearchColumnBooleanField[] $useComponentYield
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUseComponentYield(array $useComponentYield = null)
    {
      $this->useComponentYield = $useComponentYield;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseMarginalRates()
    {
      return $this->useMarginalRates;
    }

    /**
     * @param SearchColumnBooleanField[] $useMarginalRates
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setUseMarginalRates(array $useMarginalRates = null)
    {
      $this->useMarginalRates = $useMarginalRates;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param SearchColumnSelectField[] $vendor
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendor(array $vendor = null)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendorCode()
    {
      return $this->vendorCode;
    }

    /**
     * @param SearchColumnStringField[] $vendorCode
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendorCode(array $vendorCode = null)
    {
      $this->vendorCode = $vendorCode;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVendorCost()
    {
      return $this->vendorCost;
    }

    /**
     * @param SearchColumnDoubleField[] $vendorCost
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendorCost(array $vendorCost = null)
    {
      $this->vendorCost = $vendorCost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVendorCostEntered()
    {
      return $this->vendorCostEntered;
    }

    /**
     * @param SearchColumnDoubleField[] $vendorCostEntered
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendorCostEntered(array $vendorCostEntered = null)
    {
      $this->vendorCostEntered = $vendorCostEntered;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendorName()
    {
      return $this->vendorName;
    }

    /**
     * @param SearchColumnStringField[] $vendorName
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendorName(array $vendorName = null)
    {
      $this->vendorName = $vendorName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendorPriceCurrency()
    {
      return $this->vendorPriceCurrency;
    }

    /**
     * @param SearchColumnStringField[] $vendorPriceCurrency
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendorPriceCurrency(array $vendorPriceCurrency = null)
    {
      $this->vendorPriceCurrency = $vendorPriceCurrency;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendorSchedule()
    {
      return $this->vendorSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $vendorSchedule
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendorSchedule(array $vendorSchedule = null)
    {
      $this->vendorSchedule = $vendorSchedule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendReturnVarianceAccount()
    {
      return $this->vendReturnVarianceAccount;
    }

    /**
     * @param SearchColumnSelectField[] $vendReturnVarianceAccount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVendReturnVarianceAccount(array $vendReturnVarianceAccount = null)
    {
      $this->vendReturnVarianceAccount = $vendReturnVarianceAccount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getVsoeDeferral()
    {
      return $this->vsoeDeferral;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoeDeferral
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVsoeDeferral(array $vsoeDeferral = null)
    {
      $this->vsoeDeferral = $vsoeDeferral;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getVsoeDelivered()
    {
      return $this->vsoeDelivered;
    }

    /**
     * @param SearchColumnBooleanField[] $vsoeDelivered
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVsoeDelivered(array $vsoeDelivered = null)
    {
      $this->vsoeDelivered = $vsoeDelivered;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getVsoePermitDiscount()
    {
      return $this->vsoePermitDiscount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoePermitDiscount
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVsoePermitDiscount(array $vsoePermitDiscount = null)
    {
      $this->vsoePermitDiscount = $vsoePermitDiscount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoePrice()
    {
      return $this->vsoePrice;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoePrice
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVsoePrice(array $vsoePrice = null)
    {
      $this->vsoePrice = $vsoePrice;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getVsoeSopGroup()
    {
      return $this->vsoeSopGroup;
    }

    /**
     * @param SearchColumnEnumSelectField[] $vsoeSopGroup
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setVsoeSopGroup(array $vsoeSopGroup = null)
    {
      $this->vsoeSopGroup = $vsoeSopGroup;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWebSite()
    {
      return $this->webSite;
    }

    /**
     * @param SearchColumnSelectField[] $webSite
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setWebSite(array $webSite = null)
    {
      $this->webSite = $webSite;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param SearchColumnDoubleField[] $weight
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setWeight(array $weight = null)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getWeightUnit()
    {
      return $this->weightUnit;
    }

    /**
     * @param SearchColumnEnumSelectField[] $weightUnit
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setWeightUnit(array $weightUnit = null)
    {
      $this->weightUnit = $weightUnit;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWipAcct()
    {
      return $this->wipAcct;
    }

    /**
     * @param SearchColumnSelectField[] $wipAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setWipAcct(array $wipAcct = null)
    {
      $this->wipAcct = $wipAcct;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWipVarianceAcct()
    {
      return $this->wipVarianceAcct;
    }

    /**
     * @param SearchColumnSelectField[] $wipVarianceAcct
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setWipVarianceAcct(array $wipVarianceAcct = null)
    {
      $this->wipVarianceAcct = $wipVarianceAcct;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getYahooProductFeed()
    {
      return $this->yahooProductFeed;
    }

    /**
     * @param SearchColumnBooleanField[] $yahooProductFeed
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setYahooProductFeed(array $yahooProductFeed = null)
    {
      $this->yahooProductFeed = $yahooProductFeed;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ItemSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
