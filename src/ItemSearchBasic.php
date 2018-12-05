<?php

namespace Nzolt\NetSuite;

class ItemSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $accBookRevRecForecastRule
     */
    protected $accBookRevRecForecastRule = null;

    /**
     * @var SearchMultiSelectField $account
     */
    protected $account = null;

    /**
     * @var SearchMultiSelectField $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchMultiSelectField $accountingBookAmortization
     */
    protected $accountingBookAmortization = null;

    /**
     * @var SearchMultiSelectField $accountingBookCreatePlansOn
     */
    protected $accountingBookCreatePlansOn = null;

    /**
     * @var SearchMultiSelectField $accountingBookRevRecRule
     */
    protected $accountingBookRevRecRule = null;

    /**
     * @var SearchMultiSelectField $accountingBookRevRecSchedule
     */
    protected $accountingBookRevRecSchedule = null;

    /**
     * @var SearchMultiSelectField $allowedShippingMethod
     */
    protected $allowedShippingMethod = null;

    /**
     * @var SearchMultiSelectField $alternateDemandSourceItem
     */
    protected $alternateDemandSourceItem = null;

    /**
     * @var SearchDoubleField $atpLeadTime
     */
    protected $atpLeadTime = null;

    /**
     * @var SearchEnumMultiSelectField $atpMethod
     */
    protected $atpMethod = null;

    /**
     * @var SearchBooleanField $autoLeadTime
     */
    protected $autoLeadTime = null;

    /**
     * @var SearchBooleanField $autoPreferredStockLevel
     */
    protected $autoPreferredStockLevel = null;

    /**
     * @var SearchBooleanField $autoReorderPoint
     */
    protected $autoReorderPoint = null;

    /**
     * @var SearchBooleanField $availableToPartners
     */
    protected $availableToPartners = null;

    /**
     * @var SearchDoubleField $averageCost
     */
    protected $averageCost = null;

    /**
     * @var SearchLongField $backwardConsumptionDays
     */
    protected $backwardConsumptionDays = null;

    /**
     * @var SearchStringField $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchDoubleField $binOnHandAvail
     */
    protected $binOnHandAvail = null;

    /**
     * @var SearchDoubleField $binOnHandCount
     */
    protected $binOnHandCount = null;

    /**
     * @var SearchDoubleField $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var SearchBooleanField $buildEntireAssembly
     */
    protected $buildEntireAssembly = null;

    /**
     * @var SearchDoubleField $buildTime
     */
    protected $buildTime = null;

    /**
     * @var SearchDoubleField $buyItNowPrice
     */
    protected $buyItNowPrice = null;

    /**
     * @var SearchStringField $caption
     */
    protected $caption = null;

    /**
     * @var SearchMultiSelectField $category
     */
    protected $category = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectField $component
     */
    protected $component = null;

    /**
     * @var SearchMultiSelectField $componentOf
     */
    protected $componentOf = null;

    /**
     * @var SearchDoubleField $componentYield
     */
    protected $componentYield = null;

    /**
     * @var SearchBooleanField $contingentRevenueHandling
     */
    protected $contingentRevenueHandling = null;

    /**
     * @var SearchBooleanField $copyDescription
     */
    protected $copyDescription = null;

    /**
     * @var SearchMultiSelectField $correlatedItem
     */
    protected $correlatedItem = null;

    /**
     * @var SearchDoubleField $correlatedItemCorrelation
     */
    protected $correlatedItemCorrelation = null;

    /**
     * @var SearchLongField $correlatedItemCount
     */
    protected $correlatedItemCount = null;

    /**
     * @var SearchDoubleField $correlatedItemLift
     */
    protected $correlatedItemLift = null;

    /**
     * @var SearchDoubleField $correlatedItemPurchaseRate
     */
    protected $correlatedItemPurchaseRate = null;

    /**
     * @var SearchDoubleField $cost
     */
    protected $cost = null;

    /**
     * @var SearchEnumMultiSelectField $costAccountingStatus
     */
    protected $costAccountingStatus = null;

    /**
     * @var SearchMultiSelectField $costCategory
     */
    protected $costCategory = null;

    /**
     * @var SearchDoubleField $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var SearchEnumMultiSelectField $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var SearchEnumMultiSelectField $costingMethod
     */
    protected $costingMethod = null;

    /**
     * @var SearchEnumMultiSelectField $countryOfManufacture
     */
    protected $countryOfManufacture = null;

    /**
     * @var SearchDateField $created
     */
    protected $created = null;

    /**
     * @var SearchBooleanField $createJob
     */
    protected $createJob = null;

    /**
     * @var SearchMultiSelectField $createRevenuePlansOn
     */
    protected $createRevenuePlansOn = null;

    /**
     * @var SearchDateField $dateViewed
     */
    protected $dateViewed = null;

    /**
     * @var SearchDoubleField $daysBeforeExpiration
     */
    protected $daysBeforeExpiration = null;

    /**
     * @var SearchDoubleField $defaultReturnCost
     */
    protected $defaultReturnCost = null;

    /**
     * @var SearchMultiSelectField $defaultShippingMethod
     */
    protected $defaultShippingMethod = null;

    /**
     * @var SearchBooleanField $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var SearchDoubleField $demandModifier
     */
    protected $demandModifier = null;

    /**
     * @var SearchEnumMultiSelectField $demandSource
     */
    protected $demandSource = null;

    /**
     * @var SearchLongField $demandTimeFence
     */
    protected $demandTimeFence = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchBooleanField $directRevenuePosting
     */
    protected $directRevenuePosting = null;

    /**
     * @var SearchBooleanField $displayIneBayStore
     */
    protected $displayIneBayStore = null;

    /**
     * @var SearchStringField $displayName
     */
    protected $displayName = null;

    /**
     * @var SearchMultiSelectField $distributionCategory
     */
    protected $distributionCategory = null;

    /**
     * @var SearchMultiSelectField $distributionNetwork
     */
    protected $distributionNetwork = null;

    /**
     * @var SearchBooleanField $dontShowPrice
     */
    protected $dontShowPrice = null;

    /**
     * @var SearchStringField $eBayItemDescription
     */
    protected $eBayItemDescription = null;

    /**
     * @var SearchStringField $eBayItemSubtitle
     */
    protected $eBayItemSubtitle = null;

    /**
     * @var SearchStringField $eBayItemTitle
     */
    protected $eBayItemTitle = null;

    /**
     * @var SearchEnumMultiSelectField $ebayRelistingOption
     */
    protected $ebayRelistingOption = null;

    /**
     * @var SearchEnumMultiSelectField $effectiveBomControl
     */
    protected $effectiveBomControl = null;

    /**
     * @var SearchDateField $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchMultiSelectField $effectiveRevision
     */
    protected $effectiveRevision = null;

    /**
     * @var SearchBooleanField $endAuctionsWhenOutOfStock
     */
    protected $endAuctionsWhenOutOfStock = null;

    /**
     * @var SearchBooleanField $excludeFromSitemap
     */
    protected $excludeFromSitemap = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchStringField $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var SearchStringField $feedDescription
     */
    protected $feedDescription = null;

    /**
     * @var SearchStringField $feedName
     */
    protected $feedName = null;

    /**
     * @var SearchDoubleField $fixedLotSize
     */
    protected $fixedLotSize = null;

    /**
     * @var SearchLongField $forwardConsumptionDays
     */
    protected $forwardConsumptionDays = null;

    /**
     * @var SearchEnumMultiSelectField $fraudRisk
     */
    protected $fraudRisk = null;

    /**
     * @var SearchBooleanField $froogleProductFeed
     */
    protected $froogleProductFeed = null;

    /**
     * @var SearchDoubleField $fxCost
     */
    protected $fxCost = null;

    /**
     * @var SearchBooleanField $generateAccruals
     */
    protected $generateAccruals = null;

    /**
     * @var SearchStringField $giftCertAuthCode
     */
    protected $giftCertAuthCode = null;

    /**
     * @var SearchStringField $giftCertEmail
     */
    protected $giftCertEmail = null;

    /**
     * @var SearchDateField $giftCertExpDate
     */
    protected $giftCertExpDate = null;

    /**
     * @var SearchStringField $giftCertFrom
     */
    protected $giftCertFrom = null;

    /**
     * @var SearchStringField $giftCertMsg
     */
    protected $giftCertMsg = null;

    /**
     * @var SearchStringField $giftCertOrigAmt
     */
    protected $giftCertOrigAmt = null;

    /**
     * @var SearchStringField $giftCertRecipient
     */
    protected $giftCertRecipient = null;

    /**
     * @var SearchStringField $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @var SearchBooleanField $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $inventoryLocation
     */
    protected $inventoryLocation = null;

    /**
     * @var SearchEnumMultiSelectField $invtClassification
     */
    protected $invtClassification = null;

    /**
     * @var SearchLongField $invtCountInterval
     */
    protected $invtCountInterval = null;

    /**
     * @var SearchBooleanField $isAvailable
     */
    protected $isAvailable = null;

    /**
     * @var SearchBooleanField $isDropShipItem
     */
    protected $isDropShipItem = null;

    /**
     * @var SearchBooleanField $isFulfillable
     */
    protected $isFulfillable = null;

    /**
     * @var SearchBooleanField $isGcoCompliant
     */
    protected $isGcoCompliant = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchBooleanField $isLotItem
     */
    protected $isLotItem = null;

    /**
     * @var SearchBooleanField $isOnline
     */
    protected $isOnline = null;

    /**
     * @var SearchBooleanField $isPreferredVendor
     */
    protected $isPreferredVendor = null;

    /**
     * @var SearchBooleanField $isSerialItem
     */
    protected $isSerialItem = null;

    /**
     * @var SearchBooleanField $isSpecialOrderItem
     */
    protected $isSpecialOrderItem = null;

    /**
     * @var SearchBooleanField $isSpecialWorkOrderItem
     */
    protected $isSpecialWorkOrderItem = null;

    /**
     * @var SearchBooleanField $isStorePickupAllowed
     */
    protected $isStorePickupAllowed = null;

    /**
     * @var SearchMultiSelectField $issueProduct
     */
    protected $issueProduct = null;

    /**
     * @var SearchBooleanField $isTaxable
     */
    protected $isTaxable = null;

    /**
     * @var SearchBooleanField $isVsoeBundle
     */
    protected $isVsoeBundle = null;

    /**
     * @var SearchBooleanField $isWip
     */
    protected $isWip = null;

    /**
     * @var SearchStringField $itemId
     */
    protected $itemId = null;

    /**
     * @var SearchMultiSelectField $itemRevenueCategory
     */
    protected $itemRevenueCategory = null;

    /**
     * @var SearchStringField $itemUrl
     */
    protected $itemUrl = null;

    /**
     * @var SearchDateField $lastInvtCountDate
     */
    protected $lastInvtCountDate = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchDoubleField $lastPurchasePrice
     */
    protected $lastPurchasePrice = null;

    /**
     * @var SearchDateField $lastQuantityAvailableChange
     */
    protected $lastQuantityAvailableChange = null;

    /**
     * @var SearchLongField $leadTime
     */
    protected $leadTime = null;

    /**
     * @var SearchEnumMultiSelectField $listingDuration
     */
    protected $listingDuration = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchBooleanField $locationAllowStorePickup
     */
    protected $locationAllowStorePickup = null;

    /**
     * @var SearchDoubleField $locationAtpLeadTime
     */
    protected $locationAtpLeadTime = null;

    /**
     * @var SearchDoubleField $locationAverageCost
     */
    protected $locationAverageCost = null;

    /**
     * @var SearchDoubleField $locationBuildTime
     */
    protected $locationBuildTime = null;

    /**
     * @var SearchDoubleField $locationCost
     */
    protected $locationCost = null;

    /**
     * @var SearchEnumMultiSelectField $locationCostAccountingStatus
     */
    protected $locationCostAccountingStatus = null;

    /**
     * @var SearchDoubleField $locationDefaultReturnCost
     */
    protected $locationDefaultReturnCost = null;

    /**
     * @var SearchEnumMultiSelectField $locationDemandSource
     */
    protected $locationDemandSource = null;

    /**
     * @var SearchLongField $locationDemandTimeFence
     */
    protected $locationDemandTimeFence = null;

    /**
     * @var SearchDoubleField $locationFixedLotSize
     */
    protected $locationFixedLotSize = null;

    /**
     * @var SearchMultiSelectField $locationInventoryCostTemplate
     */
    protected $locationInventoryCostTemplate = null;

    /**
     * @var SearchEnumMultiSelectField $locationInvtClassification
     */
    protected $locationInvtClassification = null;

    /**
     * @var SearchLongField $locationInvtCountInterval
     */
    protected $locationInvtCountInterval = null;

    /**
     * @var SearchDateField $locationLastInvtCountDate
     */
    protected $locationLastInvtCountDate = null;

    /**
     * @var SearchLongField $locationLeadTime
     */
    protected $locationLeadTime = null;

    /**
     * @var SearchDateField $locationNextInvtCountDate
     */
    protected $locationNextInvtCountDate = null;

    /**
     * @var SearchLongField $locationPeriodicLotSizeDays
     */
    protected $locationPeriodicLotSizeDays = null;

    /**
     * @var SearchEnumMultiSelectField $locationPeriodicLotSizeType
     */
    protected $locationPeriodicLotSizeType = null;

    /**
     * @var SearchDoubleField $locationPreferredStockLevel
     */
    protected $locationPreferredStockLevel = null;

    /**
     * @var SearchDoubleField $locationQtyAvailForStorePickup
     */
    protected $locationQtyAvailForStorePickup = null;

    /**
     * @var SearchDoubleField $locationQuantityAvailable
     */
    protected $locationQuantityAvailable = null;

    /**
     * @var SearchDoubleField $locationQuantityBackOrdered
     */
    protected $locationQuantityBackOrdered = null;

    /**
     * @var SearchDoubleField $locationQuantityCommitted
     */
    protected $locationQuantityCommitted = null;

    /**
     * @var SearchDoubleField $locationQuantityInTransit
     */
    protected $locationQuantityInTransit = null;

    /**
     * @var SearchDoubleField $locationQuantityOnHand
     */
    protected $locationQuantityOnHand = null;

    /**
     * @var SearchDoubleField $locationQuantityOnOrder
     */
    protected $locationQuantityOnOrder = null;

    /**
     * @var SearchDoubleField $locationReorderPoint
     */
    protected $locationReorderPoint = null;

    /**
     * @var SearchLongField $locationRescheduleInDays
     */
    protected $locationRescheduleInDays = null;

    /**
     * @var SearchLongField $locationRescheduleOutDays
     */
    protected $locationRescheduleOutDays = null;

    /**
     * @var SearchDoubleField $locationSafetyStockLevel
     */
    protected $locationSafetyStockLevel = null;

    /**
     * @var SearchDoubleField $locationStorePickupBufferStock
     */
    protected $locationStorePickupBufferStock = null;

    /**
     * @var SearchEnumMultiSelectField $locationSupplyLotSizingMethod
     */
    protected $locationSupplyLotSizingMethod = null;

    /**
     * @var SearchLongField $locationSupplyTimeFence
     */
    protected $locationSupplyTimeFence = null;

    /**
     * @var SearchEnumMultiSelectField $locationSupplyType
     */
    protected $locationSupplyType = null;

    /**
     * @var SearchDoubleField $locationTotalValue
     */
    protected $locationTotalValue = null;

    /**
     * @var SearchLongField $locBackwardConsumptionDays
     */
    protected $locBackwardConsumptionDays = null;

    /**
     * @var SearchLongField $locForwardConsumptionDays
     */
    protected $locForwardConsumptionDays = null;

    /**
     * @var SearchStringField $manufacturer
     */
    protected $manufacturer = null;

    /**
     * @var SearchStringField $manufactureraddr1
     */
    protected $manufactureraddr1 = null;

    /**
     * @var SearchStringField $manufacturerCity
     */
    protected $manufacturerCity = null;

    /**
     * @var SearchStringField $manufacturerState
     */
    protected $manufacturerState = null;

    /**
     * @var SearchStringField $manufacturerTariff
     */
    protected $manufacturerTariff = null;

    /**
     * @var SearchStringField $manufacturerTaxId
     */
    protected $manufacturerTaxId = null;

    /**
     * @var SearchStringField $manufacturerZip
     */
    protected $manufacturerZip = null;

    /**
     * @var SearchBooleanField $manufacturingChargeItem
     */
    protected $manufacturingChargeItem = null;

    /**
     * @var SearchBooleanField $matchBillToReceipt
     */
    protected $matchBillToReceipt = null;

    /**
     * @var SearchBooleanField $matrix
     */
    protected $matrix = null;

    /**
     * @var SearchBooleanField $matrixChild
     */
    protected $matrixChild = null;

    /**
     * @var SearchStringField $metaTagHtml
     */
    protected $metaTagHtml = null;

    /**
     * @var SearchLongField $minimumQuantity
     */
    protected $minimumQuantity = null;

    /**
     * @var SearchBooleanField $mossApplies
     */
    protected $mossApplies = null;

    /**
     * @var SearchStringField $mpn
     */
    protected $mpn = null;

    /**
     * @var SearchBooleanField $multManufactureAddr
     */
    protected $multManufactureAddr = null;

    /**
     * @var SearchStringField $nexTagCategory
     */
    protected $nexTagCategory = null;

    /**
     * @var SearchBooleanField $nexTagProductFeed
     */
    protected $nexTagProductFeed = null;

    /**
     * @var SearchDateField $nextInvtCountDate
     */
    protected $nextInvtCountDate = null;

    /**
     * @var SearchLongField $numActiveListings
     */
    protected $numActiveListings = null;

    /**
     * @var SearchDoubleField $numberAllowedDownloads
     */
    protected $numberAllowedDownloads = null;

    /**
     * @var SearchLongField $numCurrentlyListed
     */
    protected $numCurrentlyListed = null;

    /**
     * @var SearchDateField $obsoleteDate
     */
    protected $obsoleteDate = null;

    /**
     * @var SearchMultiSelectField $obsoleteRevision
     */
    protected $obsoleteRevision = null;

    /**
     * @var SearchBooleanField $offerSupport
     */
    protected $offerSupport = null;

    /**
     * @var SearchDoubleField $onlineCustomerPrice
     */
    protected $onlineCustomerPrice = null;

    /**
     * @var SearchBooleanField $onSpecial
     */
    protected $onSpecial = null;

    /**
     * @var SearchMultiSelectField $otherVendor
     */
    protected $otherVendor = null;

    /**
     * @var SearchMultiSelectField $outOfStockBehavior
     */
    protected $outOfStockBehavior = null;

    /**
     * @var SearchEnumMultiSelectField $overallQuantityPricingType
     */
    protected $overallQuantityPricingType = null;

    /**
     * @var SearchEnumMultiSelectField $overheadType
     */
    protected $overheadType = null;

    /**
     * @var SearchStringField $pageTitle
     */
    protected $pageTitle = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchLongField $periodicLotSizeDays
     */
    protected $periodicLotSizeDays = null;

    /**
     * @var SearchEnumMultiSelectField $periodicLotSizeType
     */
    protected $periodicLotSizeType = null;

    /**
     * @var SearchStringField $preferenceCriterion
     */
    protected $preferenceCriterion = null;

    /**
     * @var SearchBooleanField $preferredBin
     */
    protected $preferredBin = null;

    /**
     * @var SearchMultiSelectField $preferredLocation
     */
    protected $preferredLocation = null;

    /**
     * @var SearchDoubleField $preferredStockLevel
     */
    protected $preferredStockLevel = null;

    /**
     * @var SearchLongField $preferredStockLevelDays
     */
    protected $preferredStockLevelDays = null;

    /**
     * @var SearchDoubleField $price
     */
    protected $price = null;

    /**
     * @var SearchBooleanField $pricesIncludeTax
     */
    protected $pricesIncludeTax = null;

    /**
     * @var SearchMultiSelectField $pricingGroup
     */
    protected $pricingGroup = null;

    /**
     * @var SearchLongField $primaryCategory
     */
    protected $primaryCategory = null;

    /**
     * @var SearchDoubleField $purchaseOrderAmount
     */
    protected $purchaseOrderAmount = null;

    /**
     * @var SearchDoubleField $purchaseOrderQuantity
     */
    protected $purchaseOrderQuantity = null;

    /**
     * @var SearchDoubleField $purchaseOrderQuantityDiff
     */
    protected $purchaseOrderQuantityDiff = null;

    /**
     * @var SearchMultiSelectField $purchaseUnit
     */
    protected $purchaseUnit = null;

    /**
     * @var SearchDoubleField $quantityAvailable
     */
    protected $quantityAvailable = null;

    /**
     * @var SearchDoubleField $quantityBackOrdered
     */
    protected $quantityBackOrdered = null;

    /**
     * @var SearchDoubleField $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var SearchDoubleField $quantityOnHand
     */
    protected $quantityOnHand = null;

    /**
     * @var SearchDoubleField $quantityOnOrder
     */
    protected $quantityOnOrder = null;

    /**
     * @var SearchMultiSelectField $quantityPricingSchedule
     */
    protected $quantityPricingSchedule = null;

    /**
     * @var SearchDoubleField $receiptAmount
     */
    protected $receiptAmount = null;

    /**
     * @var SearchDoubleField $receiptQuantity
     */
    protected $receiptQuantity = null;

    /**
     * @var SearchDoubleField $receiptQuantityDiff
     */
    protected $receiptQuantityDiff = null;

    /**
     * @var SearchLongField $reorderMultiple
     */
    protected $reorderMultiple = null;

    /**
     * @var SearchDoubleField $reorderPoint
     */
    protected $reorderPoint = null;

    /**
     * @var SearchLongField $rescheduleInDays
     */
    protected $rescheduleInDays = null;

    /**
     * @var SearchLongField $rescheduleOutDays
     */
    protected $rescheduleOutDays = null;

    /**
     * @var SearchDoubleField $reservePrice
     */
    protected $reservePrice = null;

    /**
     * @var SearchMultiSelectField $revenueAllocationGroup
     */
    protected $revenueAllocationGroup = null;

    /**
     * @var SearchMultiSelectField $revenueRecognitionRule
     */
    protected $revenueRecognitionRule = null;

    /**
     * @var SearchMultiSelectField $revRecForecastRule
     */
    protected $revRecForecastRule = null;

    /**
     * @var SearchMultiSelectField $revRecSchedule
     */
    protected $revRecSchedule = null;

    /**
     * @var SearchBooleanField $roundUpAsComponent
     */
    protected $roundUpAsComponent = null;

    /**
     * @var SearchDoubleField $safetyStockLevel
     */
    protected $safetyStockLevel = null;

    /**
     * @var SearchLongField $safetyStockLevelDays
     */
    protected $safetyStockLevelDays = null;

    /**
     * @var SearchStringField $salesDescription
     */
    protected $salesDescription = null;

    /**
     * @var SearchMultiSelectField $saleUnit
     */
    protected $saleUnit = null;

    /**
     * @var SearchBooleanField $sameAsPrimaryBookAmortization
     */
    protected $sameAsPrimaryBookAmortization = null;

    /**
     * @var SearchBooleanField $sameAsPrimaryBookRevRec
     */
    protected $sameAsPrimaryBookRevRec = null;

    /**
     * @var SearchEnumMultiSelectField $scheduleBCode
     */
    protected $scheduleBCode = null;

    /**
     * @var SearchStringField $scheduleBNumber
     */
    protected $scheduleBNumber = null;

    /**
     * @var SearchStringField $scheduleBQuantity
     */
    protected $scheduleBQuantity = null;

    /**
     * @var SearchStringField $searchKeywords
     */
    protected $searchKeywords = null;

    /**
     * @var SearchBooleanField $seasonalDemand
     */
    protected $seasonalDemand = null;

    /**
     * @var SearchBooleanField $sellOnEBay
     */
    protected $sellOnEBay = null;

    /**
     * @var SearchStringField $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var SearchMultiSelectField $serialNumberLocation
     */
    protected $serialNumberLocation = null;

    /**
     * @var SearchBooleanField $shipIndividually
     */
    protected $shipIndividually = null;

    /**
     * @var SearchMultiSelectField $shipPackage
     */
    protected $shipPackage = null;

    /**
     * @var SearchEnumMultiSelectField $shippingCarrier
     */
    protected $shippingCarrier = null;

    /**
     * @var SearchDoubleField $shippingRate
     */
    protected $shippingRate = null;

    /**
     * @var SearchStringField $shoppingDotComCategory
     */
    protected $shoppingDotComCategory = null;

    /**
     * @var SearchBooleanField $shoppingProductFeed
     */
    protected $shoppingProductFeed = null;

    /**
     * @var SearchLongField $shopzillaCategoryId
     */
    protected $shopzillaCategoryId = null;

    /**
     * @var SearchBooleanField $shopzillaProductFeed
     */
    protected $shopzillaProductFeed = null;

    /**
     * @var SearchEnumMultiSelectField $sitemapPriority
     */
    protected $sitemapPriority = null;

    /**
     * @var SearchMultiSelectField $softDescriptor
     */
    protected $softDescriptor = null;

    /**
     * @var SearchDoubleField $startingPrice
     */
    protected $startingPrice = null;

    /**
     * @var SearchStringField $stockDescription
     */
    protected $stockDescription = null;

    /**
     * @var SearchMultiSelectField $stockUnit
     */
    protected $stockUnit = null;

    /**
     * @var SearchStringField $storeDescription
     */
    protected $storeDescription = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchEnumMultiSelectField $subType
     */
    protected $subType = null;

    /**
     * @var SearchEnumMultiSelectField $supplyLotSizingMethod
     */
    protected $supplyLotSizingMethod = null;

    /**
     * @var SearchEnumMultiSelectField $supplyReplenishmentMethod
     */
    protected $supplyReplenishmentMethod = null;

    /**
     * @var SearchLongField $supplyTimeFence
     */
    protected $supplyTimeFence = null;

    /**
     * @var SearchEnumMultiSelectField $supplyType
     */
    protected $supplyType = null;

    /**
     * @var SearchMultiSelectField $taxCode
     */
    protected $taxCode = null;

    /**
     * @var SearchMultiSelectField $taxSchedule
     */
    protected $taxSchedule = null;

    /**
     * @var SearchStringField $thumbnailUrl
     */
    protected $thumbnailUrl = null;

    /**
     * @var SearchDoubleField $totalValue
     */
    protected $totalValue = null;

    /**
     * @var SearchBooleanField $trackLandedCost
     */
    protected $trackLandedCost = null;

    /**
     * @var SearchDoubleField $transferPrice
     */
    protected $transferPrice = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchMultiSelectField $unitsType
     */
    protected $unitsType = null;

    /**
     * @var SearchStringField $upcCode
     */
    protected $upcCode = null;

    /**
     * @var SearchStringField $urlComponent
     */
    protected $urlComponent = null;

    /**
     * @var SearchBooleanField $useBins
     */
    protected $useBins = null;

    /**
     * @var SearchBooleanField $useComponentYield
     */
    protected $useComponentYield = null;

    /**
     * @var SearchBooleanField $useMarginalRates
     */
    protected $useMarginalRates = null;

    /**
     * @var SearchMultiSelectField $vendor
     */
    protected $vendor = null;

    /**
     * @var SearchStringField $vendorCode
     */
    protected $vendorCode = null;

    /**
     * @var SearchDoubleField $vendorCost
     */
    protected $vendorCost = null;

    /**
     * @var SearchDoubleField $vendorCostEntered
     */
    protected $vendorCostEntered = null;

    /**
     * @var SearchStringField $vendorName
     */
    protected $vendorName = null;

    /**
     * @var SearchMultiSelectField $vendorPriceCurrency
     */
    protected $vendorPriceCurrency = null;

    /**
     * @var SearchEnumMultiSelectField $vsoeDeferral
     */
    protected $vsoeDeferral = null;

    /**
     * @var SearchBooleanField $vsoeDelivered
     */
    protected $vsoeDelivered = null;

    /**
     * @var SearchEnumMultiSelectField $vsoePermitDiscount
     */
    protected $vsoePermitDiscount = null;

    /**
     * @var SearchDoubleField $vsoePrice
     */
    protected $vsoePrice = null;

    /**
     * @var SearchEnumMultiSelectField $vsoeSopGroup
     */
    protected $vsoeSopGroup = null;

    /**
     * @var SearchMultiSelectField $webSite
     */
    protected $webSite = null;

    /**
     * @var SearchDoubleField $weight
     */
    protected $weight = null;

    /**
     * @var SearchBooleanField $yahooProductFeed
     */
    protected $yahooProductFeed = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccBookRevRecForecastRule()
    {
      return $this->accBookRevRecForecastRule;
    }

    /**
     * @param SearchMultiSelectField $accBookRevRecForecastRule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccBookRevRecForecastRule($accBookRevRecForecastRule)
    {
      $this->accBookRevRecForecastRule = $accBookRevRecForecastRule;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchMultiSelectField $account
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookAmortization()
    {
      return $this->accountingBookAmortization;
    }

    /**
     * @param SearchMultiSelectField $accountingBookAmortization
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccountingBookAmortization($accountingBookAmortization)
    {
      $this->accountingBookAmortization = $accountingBookAmortization;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookCreatePlansOn()
    {
      return $this->accountingBookCreatePlansOn;
    }

    /**
     * @param SearchMultiSelectField $accountingBookCreatePlansOn
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccountingBookCreatePlansOn($accountingBookCreatePlansOn)
    {
      $this->accountingBookCreatePlansOn = $accountingBookCreatePlansOn;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookRevRecRule()
    {
      return $this->accountingBookRevRecRule;
    }

    /**
     * @param SearchMultiSelectField $accountingBookRevRecRule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccountingBookRevRecRule($accountingBookRevRecRule)
    {
      $this->accountingBookRevRecRule = $accountingBookRevRecRule;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookRevRecSchedule()
    {
      return $this->accountingBookRevRecSchedule;
    }

    /**
     * @param SearchMultiSelectField $accountingBookRevRecSchedule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAccountingBookRevRecSchedule($accountingBookRevRecSchedule)
    {
      $this->accountingBookRevRecSchedule = $accountingBookRevRecSchedule;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAllowedShippingMethod()
    {
      return $this->allowedShippingMethod;
    }

    /**
     * @param SearchMultiSelectField $allowedShippingMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAllowedShippingMethod($allowedShippingMethod)
    {
      $this->allowedShippingMethod = $allowedShippingMethod;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAlternateDemandSourceItem()
    {
      return $this->alternateDemandSourceItem;
    }

    /**
     * @param SearchMultiSelectField $alternateDemandSourceItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAlternateDemandSourceItem($alternateDemandSourceItem)
    {
      $this->alternateDemandSourceItem = $alternateDemandSourceItem;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAtpLeadTime()
    {
      return $this->atpLeadTime;
    }

    /**
     * @param SearchDoubleField $atpLeadTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAtpLeadTime($atpLeadTime)
    {
      $this->atpLeadTime = $atpLeadTime;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAtpMethod()
    {
      return $this->atpMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $atpMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAtpMethod($atpMethod)
    {
      $this->atpMethod = $atpMethod;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoLeadTime()
    {
      return $this->autoLeadTime;
    }

    /**
     * @param SearchBooleanField $autoLeadTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAutoLeadTime($autoLeadTime)
    {
      $this->autoLeadTime = $autoLeadTime;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoPreferredStockLevel()
    {
      return $this->autoPreferredStockLevel;
    }

    /**
     * @param SearchBooleanField $autoPreferredStockLevel
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAutoPreferredStockLevel($autoPreferredStockLevel)
    {
      $this->autoPreferredStockLevel = $autoPreferredStockLevel;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoReorderPoint()
    {
      return $this->autoReorderPoint;
    }

    /**
     * @param SearchBooleanField $autoReorderPoint
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAutoReorderPoint($autoReorderPoint)
    {
      $this->autoReorderPoint = $autoReorderPoint;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableToPartners()
    {
      return $this->availableToPartners;
    }

    /**
     * @param SearchBooleanField $availableToPartners
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAvailableToPartners($availableToPartners)
    {
      $this->availableToPartners = $availableToPartners;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAverageCost()
    {
      return $this->averageCost;
    }

    /**
     * @param SearchDoubleField $averageCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setAverageCost($averageCost)
    {
      $this->averageCost = $averageCost;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getBackwardConsumptionDays()
    {
      return $this->backwardConsumptionDays;
    }

    /**
     * @param SearchLongField $backwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBackwardConsumptionDays($backwardConsumptionDays)
    {
      $this->backwardConsumptionDays = $backwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBinNumber()
    {
      return $this->binNumber;
    }

    /**
     * @param SearchStringField $binNumber
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBinNumber($binNumber)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBinOnHandAvail()
    {
      return $this->binOnHandAvail;
    }

    /**
     * @param SearchDoubleField $binOnHandAvail
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBinOnHandAvail($binOnHandAvail)
    {
      $this->binOnHandAvail = $binOnHandAvail;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBinOnHandCount()
    {
      return $this->binOnHandCount;
    }

    /**
     * @param SearchDoubleField $binOnHandCount
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBinOnHandCount($binOnHandCount)
    {
      $this->binOnHandCount = $binOnHandCount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBomQuantity()
    {
      return $this->bomQuantity;
    }

    /**
     * @param SearchDoubleField $bomQuantity
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBomQuantity($bomQuantity)
    {
      $this->bomQuantity = $bomQuantity;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBuildEntireAssembly()
    {
      return $this->buildEntireAssembly;
    }

    /**
     * @param SearchBooleanField $buildEntireAssembly
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBuildEntireAssembly($buildEntireAssembly)
    {
      $this->buildEntireAssembly = $buildEntireAssembly;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuildTime()
    {
      return $this->buildTime;
    }

    /**
     * @param SearchDoubleField $buildTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBuildTime($buildTime)
    {
      $this->buildTime = $buildTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuyItNowPrice()
    {
      return $this->buyItNowPrice;
    }

    /**
     * @param SearchDoubleField $buyItNowPrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setBuyItNowPrice($buyItNowPrice)
    {
      $this->buyItNowPrice = $buyItNowPrice;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCaption()
    {
      return $this->caption;
    }

    /**
     * @param SearchStringField $caption
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCaption($caption)
    {
      $this->caption = $caption;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getComponent()
    {
      return $this->component;
    }

    /**
     * @param SearchMultiSelectField $component
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setComponent($component)
    {
      $this->component = $component;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getComponentOf()
    {
      return $this->componentOf;
    }

    /**
     * @param SearchMultiSelectField $componentOf
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setComponentOf($componentOf)
    {
      $this->componentOf = $componentOf;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getComponentYield()
    {
      return $this->componentYield;
    }

    /**
     * @param SearchDoubleField $componentYield
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setComponentYield($componentYield)
    {
      $this->componentYield = $componentYield;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getContingentRevenueHandling()
    {
      return $this->contingentRevenueHandling;
    }

    /**
     * @param SearchBooleanField $contingentRevenueHandling
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setContingentRevenueHandling($contingentRevenueHandling)
    {
      $this->contingentRevenueHandling = $contingentRevenueHandling;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCopyDescription()
    {
      return $this->copyDescription;
    }

    /**
     * @param SearchBooleanField $copyDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCopyDescription($copyDescription)
    {
      $this->copyDescription = $copyDescription;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCorrelatedItem()
    {
      return $this->correlatedItem;
    }

    /**
     * @param SearchMultiSelectField $correlatedItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCorrelatedItem($correlatedItem)
    {
      $this->correlatedItem = $correlatedItem;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCorrelatedItemCorrelation()
    {
      return $this->correlatedItemCorrelation;
    }

    /**
     * @param SearchDoubleField $correlatedItemCorrelation
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCorrelatedItemCorrelation($correlatedItemCorrelation)
    {
      $this->correlatedItemCorrelation = $correlatedItemCorrelation;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getCorrelatedItemCount()
    {
      return $this->correlatedItemCount;
    }

    /**
     * @param SearchLongField $correlatedItemCount
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCorrelatedItemCount($correlatedItemCount)
    {
      $this->correlatedItemCount = $correlatedItemCount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCorrelatedItemLift()
    {
      return $this->correlatedItemLift;
    }

    /**
     * @param SearchDoubleField $correlatedItemLift
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCorrelatedItemLift($correlatedItemLift)
    {
      $this->correlatedItemLift = $correlatedItemLift;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCorrelatedItemPurchaseRate()
    {
      return $this->correlatedItemPurchaseRate;
    }

    /**
     * @param SearchDoubleField $correlatedItemPurchaseRate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCorrelatedItemPurchaseRate($correlatedItemPurchaseRate)
    {
      $this->correlatedItemPurchaseRate = $correlatedItemPurchaseRate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param SearchDoubleField $cost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCostAccountingStatus()
    {
      return $this->costAccountingStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $costAccountingStatus
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCostAccountingStatus($costAccountingStatus)
    {
      $this->costAccountingStatus = $costAccountingStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCostCategory()
    {
      return $this->costCategory;
    }

    /**
     * @param SearchMultiSelectField $costCategory
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCostCategory($costCategory)
    {
      $this->costCategory = $costCategory;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostEstimate()
    {
      return $this->costEstimate;
    }

    /**
     * @param SearchDoubleField $costEstimate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCostEstimateType()
    {
      return $this->costEstimateType;
    }

    /**
     * @param SearchEnumMultiSelectField $costEstimateType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCostingMethod()
    {
      return $this->costingMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $costingMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCostingMethod($costingMethod)
    {
      $this->costingMethod = $costingMethod;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountryOfManufacture()
    {
      return $this->countryOfManufacture;
    }

    /**
     * @param SearchEnumMultiSelectField $countryOfManufacture
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
      $this->countryOfManufacture = $countryOfManufacture;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param SearchDateField $created
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCreated($created)
    {
      $this->created = $created;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCreateJob()
    {
      return $this->createJob;
    }

    /**
     * @param SearchBooleanField $createJob
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCreateJob($createJob)
    {
      $this->createJob = $createJob;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreateRevenuePlansOn()
    {
      return $this->createRevenuePlansOn;
    }

    /**
     * @param SearchMultiSelectField $createRevenuePlansOn
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCreateRevenuePlansOn($createRevenuePlansOn)
    {
      $this->createRevenuePlansOn = $createRevenuePlansOn;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateViewed()
    {
      return $this->dateViewed;
    }

    /**
     * @param SearchDateField $dateViewed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDateViewed($dateViewed)
    {
      $this->dateViewed = $dateViewed;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDaysBeforeExpiration()
    {
      return $this->daysBeforeExpiration;
    }

    /**
     * @param SearchDoubleField $daysBeforeExpiration
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDaysBeforeExpiration($daysBeforeExpiration)
    {
      $this->daysBeforeExpiration = $daysBeforeExpiration;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDefaultReturnCost()
    {
      return $this->defaultReturnCost;
    }

    /**
     * @param SearchDoubleField $defaultReturnCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDefaultReturnCost($defaultReturnCost)
    {
      $this->defaultReturnCost = $defaultReturnCost;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDefaultShippingMethod()
    {
      return $this->defaultShippingMethod;
    }

    /**
     * @param SearchMultiSelectField $defaultShippingMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDefaultShippingMethod($defaultShippingMethod)
    {
      $this->defaultShippingMethod = $defaultShippingMethod;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDeferRevRec()
    {
      return $this->deferRevRec;
    }

    /**
     * @param SearchBooleanField $deferRevRec
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDemandModifier()
    {
      return $this->demandModifier;
    }

    /**
     * @param SearchDoubleField $demandModifier
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDemandModifier($demandModifier)
    {
      $this->demandModifier = $demandModifier;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getDemandSource()
    {
      return $this->demandSource;
    }

    /**
     * @param SearchEnumMultiSelectField $demandSource
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDemandSource($demandSource)
    {
      $this->demandSource = $demandSource;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDemandTimeFence()
    {
      return $this->demandTimeFence;
    }

    /**
     * @param SearchLongField $demandTimeFence
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDemandTimeFence($demandTimeFence)
    {
      $this->demandTimeFence = $demandTimeFence;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDirectRevenuePosting()
    {
      return $this->directRevenuePosting;
    }

    /**
     * @param SearchBooleanField $directRevenuePosting
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDirectRevenuePosting($directRevenuePosting)
    {
      $this->directRevenuePosting = $directRevenuePosting;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDisplayIneBayStore()
    {
      return $this->displayIneBayStore;
    }

    /**
     * @param SearchBooleanField $displayIneBayStore
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDisplayIneBayStore($displayIneBayStore)
    {
      $this->displayIneBayStore = $displayIneBayStore;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param SearchStringField $displayName
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDistributionCategory()
    {
      return $this->distributionCategory;
    }

    /**
     * @param SearchMultiSelectField $distributionCategory
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDistributionCategory($distributionCategory)
    {
      $this->distributionCategory = $distributionCategory;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDistributionNetwork()
    {
      return $this->distributionNetwork;
    }

    /**
     * @param SearchMultiSelectField $distributionNetwork
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDistributionNetwork($distributionNetwork)
    {
      $this->distributionNetwork = $distributionNetwork;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDontShowPrice()
    {
      return $this->dontShowPrice;
    }

    /**
     * @param SearchBooleanField $dontShowPrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setDontShowPrice($dontShowPrice)
    {
      $this->dontShowPrice = $dontShowPrice;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEBayItemDescription()
    {
      return $this->eBayItemDescription;
    }

    /**
     * @param SearchStringField $eBayItemDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEBayItemDescription($eBayItemDescription)
    {
      $this->eBayItemDescription = $eBayItemDescription;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEBayItemSubtitle()
    {
      return $this->eBayItemSubtitle;
    }

    /**
     * @param SearchStringField $eBayItemSubtitle
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEBayItemSubtitle($eBayItemSubtitle)
    {
      $this->eBayItemSubtitle = $eBayItemSubtitle;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEBayItemTitle()
    {
      return $this->eBayItemTitle;
    }

    /**
     * @param SearchStringField $eBayItemTitle
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEBayItemTitle($eBayItemTitle)
    {
      $this->eBayItemTitle = $eBayItemTitle;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEbayRelistingOption()
    {
      return $this->ebayRelistingOption;
    }

    /**
     * @param SearchEnumMultiSelectField $ebayRelistingOption
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEbayRelistingOption($ebayRelistingOption)
    {
      $this->ebayRelistingOption = $ebayRelistingOption;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEffectiveBomControl()
    {
      return $this->effectiveBomControl;
    }

    /**
     * @param SearchEnumMultiSelectField $effectiveBomControl
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEffectiveBomControl($effectiveBomControl)
    {
      $this->effectiveBomControl = $effectiveBomControl;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEffectiveRevision()
    {
      return $this->effectiveRevision;
    }

    /**
     * @param SearchMultiSelectField $effectiveRevision
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEffectiveRevision($effectiveRevision)
    {
      $this->effectiveRevision = $effectiveRevision;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEndAuctionsWhenOutOfStock()
    {
      return $this->endAuctionsWhenOutOfStock;
    }

    /**
     * @param SearchBooleanField $endAuctionsWhenOutOfStock
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setEndAuctionsWhenOutOfStock($endAuctionsWhenOutOfStock)
    {
      $this->endAuctionsWhenOutOfStock = $endAuctionsWhenOutOfStock;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeFromSitemap()
    {
      return $this->excludeFromSitemap;
    }

    /**
     * @param SearchBooleanField $excludeFromSitemap
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setExcludeFromSitemap($excludeFromSitemap)
    {
      $this->excludeFromSitemap = $excludeFromSitemap;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFeaturedDescription()
    {
      return $this->featuredDescription;
    }

    /**
     * @param SearchStringField $featuredDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFeaturedDescription($featuredDescription)
    {
      $this->featuredDescription = $featuredDescription;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFeedDescription()
    {
      return $this->feedDescription;
    }

    /**
     * @param SearchStringField $feedDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFeedDescription($feedDescription)
    {
      $this->feedDescription = $feedDescription;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFeedName()
    {
      return $this->feedName;
    }

    /**
     * @param SearchStringField $feedName
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFeedName($feedName)
    {
      $this->feedName = $feedName;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFixedLotSize()
    {
      return $this->fixedLotSize;
    }

    /**
     * @param SearchDoubleField $fixedLotSize
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFixedLotSize($fixedLotSize)
    {
      $this->fixedLotSize = $fixedLotSize;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getForwardConsumptionDays()
    {
      return $this->forwardConsumptionDays;
    }

    /**
     * @param SearchLongField $forwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setForwardConsumptionDays($forwardConsumptionDays)
    {
      $this->forwardConsumptionDays = $forwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFraudRisk()
    {
      return $this->fraudRisk;
    }

    /**
     * @param SearchEnumMultiSelectField $fraudRisk
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFraudRisk($fraudRisk)
    {
      $this->fraudRisk = $fraudRisk;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFroogleProductFeed()
    {
      return $this->froogleProductFeed;
    }

    /**
     * @param SearchBooleanField $froogleProductFeed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFroogleProductFeed($froogleProductFeed)
    {
      $this->froogleProductFeed = $froogleProductFeed;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxCost()
    {
      return $this->fxCost;
    }

    /**
     * @param SearchDoubleField $fxCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setFxCost($fxCost)
    {
      $this->fxCost = $fxCost;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGenerateAccruals()
    {
      return $this->generateAccruals;
    }

    /**
     * @param SearchBooleanField $generateAccruals
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGenerateAccruals($generateAccruals)
    {
      $this->generateAccruals = $generateAccruals;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertAuthCode()
    {
      return $this->giftCertAuthCode;
    }

    /**
     * @param SearchStringField $giftCertAuthCode
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertAuthCode($giftCertAuthCode)
    {
      $this->giftCertAuthCode = $giftCertAuthCode;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertEmail()
    {
      return $this->giftCertEmail;
    }

    /**
     * @param SearchStringField $giftCertEmail
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertEmail($giftCertEmail)
    {
      $this->giftCertEmail = $giftCertEmail;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getGiftCertExpDate()
    {
      return $this->giftCertExpDate;
    }

    /**
     * @param SearchDateField $giftCertExpDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertExpDate($giftCertExpDate)
    {
      $this->giftCertExpDate = $giftCertExpDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertFrom()
    {
      return $this->giftCertFrom;
    }

    /**
     * @param SearchStringField $giftCertFrom
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertFrom($giftCertFrom)
    {
      $this->giftCertFrom = $giftCertFrom;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertMsg()
    {
      return $this->giftCertMsg;
    }

    /**
     * @param SearchStringField $giftCertMsg
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertMsg($giftCertMsg)
    {
      $this->giftCertMsg = $giftCertMsg;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertOrigAmt()
    {
      return $this->giftCertOrigAmt;
    }

    /**
     * @param SearchStringField $giftCertOrigAmt
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertOrigAmt($giftCertOrigAmt)
    {
      $this->giftCertOrigAmt = $giftCertOrigAmt;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertRecipient()
    {
      return $this->giftCertRecipient;
    }

    /**
     * @param SearchStringField $giftCertRecipient
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setGiftCertRecipient($giftCertRecipient)
    {
      $this->giftCertRecipient = $giftCertRecipient;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param SearchStringField $imageUrl
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param SearchBooleanField $includeChildren
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInventoryLocation()
    {
      return $this->inventoryLocation;
    }

    /**
     * @param SearchMultiSelectField $inventoryLocation
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setInventoryLocation($inventoryLocation)
    {
      $this->inventoryLocation = $inventoryLocation;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getInvtClassification()
    {
      return $this->invtClassification;
    }

    /**
     * @param SearchEnumMultiSelectField $invtClassification
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setInvtClassification($invtClassification)
    {
      $this->invtClassification = $invtClassification;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInvtCountInterval()
    {
      return $this->invtCountInterval;
    }

    /**
     * @param SearchLongField $invtCountInterval
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setInvtCountInterval($invtCountInterval)
    {
      $this->invtCountInterval = $invtCountInterval;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAvailable()
    {
      return $this->isAvailable;
    }

    /**
     * @param SearchBooleanField $isAvailable
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsAvailable($isAvailable)
    {
      $this->isAvailable = $isAvailable;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDropShipItem()
    {
      return $this->isDropShipItem;
    }

    /**
     * @param SearchBooleanField $isDropShipItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsDropShipItem($isDropShipItem)
    {
      $this->isDropShipItem = $isDropShipItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsFulfillable()
    {
      return $this->isFulfillable;
    }

    /**
     * @param SearchBooleanField $isFulfillable
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsFulfillable($isFulfillable)
    {
      $this->isFulfillable = $isFulfillable;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoCompliant()
    {
      return $this->isGcoCompliant;
    }

    /**
     * @param SearchBooleanField $isGcoCompliant
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsGcoCompliant($isGcoCompliant)
    {
      $this->isGcoCompliant = $isGcoCompliant;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsLotItem()
    {
      return $this->isLotItem;
    }

    /**
     * @param SearchBooleanField $isLotItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsLotItem($isLotItem)
    {
      $this->isLotItem = $isLotItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param SearchBooleanField $isOnline
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPreferredVendor()
    {
      return $this->isPreferredVendor;
    }

    /**
     * @param SearchBooleanField $isPreferredVendor
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsPreferredVendor($isPreferredVendor)
    {
      $this->isPreferredVendor = $isPreferredVendor;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSerialItem()
    {
      return $this->isSerialItem;
    }

    /**
     * @param SearchBooleanField $isSerialItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsSerialItem($isSerialItem)
    {
      $this->isSerialItem = $isSerialItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSpecialOrderItem()
    {
      return $this->isSpecialOrderItem;
    }

    /**
     * @param SearchBooleanField $isSpecialOrderItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsSpecialOrderItem($isSpecialOrderItem)
    {
      $this->isSpecialOrderItem = $isSpecialOrderItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSpecialWorkOrderItem()
    {
      return $this->isSpecialWorkOrderItem;
    }

    /**
     * @param SearchBooleanField $isSpecialWorkOrderItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsSpecialWorkOrderItem($isSpecialWorkOrderItem)
    {
      $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsStorePickupAllowed()
    {
      return $this->isStorePickupAllowed;
    }

    /**
     * @param SearchBooleanField $isStorePickupAllowed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsStorePickupAllowed($isStorePickupAllowed)
    {
      $this->isStorePickupAllowed = $isStorePickupAllowed;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIssueProduct()
    {
      return $this->issueProduct;
    }

    /**
     * @param SearchMultiSelectField $issueProduct
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIssueProduct($issueProduct)
    {
      $this->issueProduct = $issueProduct;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTaxable()
    {
      return $this->isTaxable;
    }

    /**
     * @param SearchBooleanField $isTaxable
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsTaxable($isTaxable)
    {
      $this->isTaxable = $isTaxable;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsVsoeBundle()
    {
      return $this->isVsoeBundle;
    }

    /**
     * @param SearchBooleanField $isVsoeBundle
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsVsoeBundle($isVsoeBundle)
    {
      $this->isVsoeBundle = $isVsoeBundle;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsWip()
    {
      return $this->isWip;
    }

    /**
     * @param SearchBooleanField $isWip
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setIsWip($isWip)
    {
      $this->isWip = $isWip;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param SearchStringField $itemId
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemRevenueCategory()
    {
      return $this->itemRevenueCategory;
    }

    /**
     * @param SearchMultiSelectField $itemRevenueCategory
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setItemRevenueCategory($itemRevenueCategory)
    {
      $this->itemRevenueCategory = $itemRevenueCategory;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemUrl()
    {
      return $this->itemUrl;
    }

    /**
     * @param SearchStringField $itemUrl
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setItemUrl($itemUrl)
    {
      $this->itemUrl = $itemUrl;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastInvtCountDate()
    {
      return $this->lastInvtCountDate;
    }

    /**
     * @param SearchDateField $lastInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLastInvtCountDate($lastInvtCountDate)
    {
      $this->lastInvtCountDate = $lastInvtCountDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLastPurchasePrice()
    {
      return $this->lastPurchasePrice;
    }

    /**
     * @param SearchDoubleField $lastPurchasePrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLastPurchasePrice($lastPurchasePrice)
    {
      $this->lastPurchasePrice = $lastPurchasePrice;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastQuantityAvailableChange()
    {
      return $this->lastQuantityAvailableChange;
    }

    /**
     * @param SearchDateField $lastQuantityAvailableChange
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLastQuantityAvailableChange($lastQuantityAvailableChange)
    {
      $this->lastQuantityAvailableChange = $lastQuantityAvailableChange;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLeadTime()
    {
      return $this->leadTime;
    }

    /**
     * @param SearchLongField $leadTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLeadTime($leadTime)
    {
      $this->leadTime = $leadTime;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getListingDuration()
    {
      return $this->listingDuration;
    }

    /**
     * @param SearchEnumMultiSelectField $listingDuration
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setListingDuration($listingDuration)
    {
      $this->listingDuration = $listingDuration;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLocationAllowStorePickup()
    {
      return $this->locationAllowStorePickup;
    }

    /**
     * @param SearchBooleanField $locationAllowStorePickup
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationAllowStorePickup($locationAllowStorePickup)
    {
      $this->locationAllowStorePickup = $locationAllowStorePickup;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationAtpLeadTime()
    {
      return $this->locationAtpLeadTime;
    }

    /**
     * @param SearchDoubleField $locationAtpLeadTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationAtpLeadTime($locationAtpLeadTime)
    {
      $this->locationAtpLeadTime = $locationAtpLeadTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationAverageCost()
    {
      return $this->locationAverageCost;
    }

    /**
     * @param SearchDoubleField $locationAverageCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationAverageCost($locationAverageCost)
    {
      $this->locationAverageCost = $locationAverageCost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationBuildTime()
    {
      return $this->locationBuildTime;
    }

    /**
     * @param SearchDoubleField $locationBuildTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationBuildTime($locationBuildTime)
    {
      $this->locationBuildTime = $locationBuildTime;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationCost()
    {
      return $this->locationCost;
    }

    /**
     * @param SearchDoubleField $locationCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationCost($locationCost)
    {
      $this->locationCost = $locationCost;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationCostAccountingStatus()
    {
      return $this->locationCostAccountingStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $locationCostAccountingStatus
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationCostAccountingStatus($locationCostAccountingStatus)
    {
      $this->locationCostAccountingStatus = $locationCostAccountingStatus;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationDefaultReturnCost()
    {
      return $this->locationDefaultReturnCost;
    }

    /**
     * @param SearchDoubleField $locationDefaultReturnCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationDefaultReturnCost($locationDefaultReturnCost)
    {
      $this->locationDefaultReturnCost = $locationDefaultReturnCost;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationDemandSource()
    {
      return $this->locationDemandSource;
    }

    /**
     * @param SearchEnumMultiSelectField $locationDemandSource
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationDemandSource($locationDemandSource)
    {
      $this->locationDemandSource = $locationDemandSource;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationDemandTimeFence()
    {
      return $this->locationDemandTimeFence;
    }

    /**
     * @param SearchLongField $locationDemandTimeFence
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationDemandTimeFence($locationDemandTimeFence)
    {
      $this->locationDemandTimeFence = $locationDemandTimeFence;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationFixedLotSize()
    {
      return $this->locationFixedLotSize;
    }

    /**
     * @param SearchDoubleField $locationFixedLotSize
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationFixedLotSize($locationFixedLotSize)
    {
      $this->locationFixedLotSize = $locationFixedLotSize;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocationInventoryCostTemplate()
    {
      return $this->locationInventoryCostTemplate;
    }

    /**
     * @param SearchMultiSelectField $locationInventoryCostTemplate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationInventoryCostTemplate($locationInventoryCostTemplate)
    {
      $this->locationInventoryCostTemplate = $locationInventoryCostTemplate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationInvtClassification()
    {
      return $this->locationInvtClassification;
    }

    /**
     * @param SearchEnumMultiSelectField $locationInvtClassification
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationInvtClassification($locationInvtClassification)
    {
      $this->locationInvtClassification = $locationInvtClassification;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationInvtCountInterval()
    {
      return $this->locationInvtCountInterval;
    }

    /**
     * @param SearchLongField $locationInvtCountInterval
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationInvtCountInterval($locationInvtCountInterval)
    {
      $this->locationInvtCountInterval = $locationInvtCountInterval;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLocationLastInvtCountDate()
    {
      return $this->locationLastInvtCountDate;
    }

    /**
     * @param SearchDateField $locationLastInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationLastInvtCountDate($locationLastInvtCountDate)
    {
      $this->locationLastInvtCountDate = $locationLastInvtCountDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationLeadTime()
    {
      return $this->locationLeadTime;
    }

    /**
     * @param SearchLongField $locationLeadTime
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationLeadTime($locationLeadTime)
    {
      $this->locationLeadTime = $locationLeadTime;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLocationNextInvtCountDate()
    {
      return $this->locationNextInvtCountDate;
    }

    /**
     * @param SearchDateField $locationNextInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationNextInvtCountDate($locationNextInvtCountDate)
    {
      $this->locationNextInvtCountDate = $locationNextInvtCountDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationPeriodicLotSizeDays()
    {
      return $this->locationPeriodicLotSizeDays;
    }

    /**
     * @param SearchLongField $locationPeriodicLotSizeDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationPeriodicLotSizeDays($locationPeriodicLotSizeDays)
    {
      $this->locationPeriodicLotSizeDays = $locationPeriodicLotSizeDays;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationPeriodicLotSizeType()
    {
      return $this->locationPeriodicLotSizeType;
    }

    /**
     * @param SearchEnumMultiSelectField $locationPeriodicLotSizeType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationPeriodicLotSizeType($locationPeriodicLotSizeType)
    {
      $this->locationPeriodicLotSizeType = $locationPeriodicLotSizeType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationPreferredStockLevel()
    {
      return $this->locationPreferredStockLevel;
    }

    /**
     * @param SearchDoubleField $locationPreferredStockLevel
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationPreferredStockLevel($locationPreferredStockLevel)
    {
      $this->locationPreferredStockLevel = $locationPreferredStockLevel;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQtyAvailForStorePickup()
    {
      return $this->locationQtyAvailForStorePickup;
    }

    /**
     * @param SearchDoubleField $locationQtyAvailForStorePickup
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQtyAvailForStorePickup($locationQtyAvailForStorePickup)
    {
      $this->locationQtyAvailForStorePickup = $locationQtyAvailForStorePickup;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityAvailable()
    {
      return $this->locationQuantityAvailable;
    }

    /**
     * @param SearchDoubleField $locationQuantityAvailable
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQuantityAvailable($locationQuantityAvailable)
    {
      $this->locationQuantityAvailable = $locationQuantityAvailable;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityBackOrdered()
    {
      return $this->locationQuantityBackOrdered;
    }

    /**
     * @param SearchDoubleField $locationQuantityBackOrdered
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQuantityBackOrdered($locationQuantityBackOrdered)
    {
      $this->locationQuantityBackOrdered = $locationQuantityBackOrdered;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityCommitted()
    {
      return $this->locationQuantityCommitted;
    }

    /**
     * @param SearchDoubleField $locationQuantityCommitted
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQuantityCommitted($locationQuantityCommitted)
    {
      $this->locationQuantityCommitted = $locationQuantityCommitted;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityInTransit()
    {
      return $this->locationQuantityInTransit;
    }

    /**
     * @param SearchDoubleField $locationQuantityInTransit
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQuantityInTransit($locationQuantityInTransit)
    {
      $this->locationQuantityInTransit = $locationQuantityInTransit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityOnHand()
    {
      return $this->locationQuantityOnHand;
    }

    /**
     * @param SearchDoubleField $locationQuantityOnHand
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQuantityOnHand($locationQuantityOnHand)
    {
      $this->locationQuantityOnHand = $locationQuantityOnHand;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationQuantityOnOrder()
    {
      return $this->locationQuantityOnOrder;
    }

    /**
     * @param SearchDoubleField $locationQuantityOnOrder
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationQuantityOnOrder($locationQuantityOnOrder)
    {
      $this->locationQuantityOnOrder = $locationQuantityOnOrder;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationReorderPoint()
    {
      return $this->locationReorderPoint;
    }

    /**
     * @param SearchDoubleField $locationReorderPoint
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationReorderPoint($locationReorderPoint)
    {
      $this->locationReorderPoint = $locationReorderPoint;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationRescheduleInDays()
    {
      return $this->locationRescheduleInDays;
    }

    /**
     * @param SearchLongField $locationRescheduleInDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationRescheduleInDays($locationRescheduleInDays)
    {
      $this->locationRescheduleInDays = $locationRescheduleInDays;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationRescheduleOutDays()
    {
      return $this->locationRescheduleOutDays;
    }

    /**
     * @param SearchLongField $locationRescheduleOutDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationRescheduleOutDays($locationRescheduleOutDays)
    {
      $this->locationRescheduleOutDays = $locationRescheduleOutDays;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationSafetyStockLevel()
    {
      return $this->locationSafetyStockLevel;
    }

    /**
     * @param SearchDoubleField $locationSafetyStockLevel
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationSafetyStockLevel($locationSafetyStockLevel)
    {
      $this->locationSafetyStockLevel = $locationSafetyStockLevel;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationStorePickupBufferStock()
    {
      return $this->locationStorePickupBufferStock;
    }

    /**
     * @param SearchDoubleField $locationStorePickupBufferStock
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationStorePickupBufferStock($locationStorePickupBufferStock)
    {
      $this->locationStorePickupBufferStock = $locationStorePickupBufferStock;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationSupplyLotSizingMethod()
    {
      return $this->locationSupplyLotSizingMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $locationSupplyLotSizingMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationSupplyLotSizingMethod($locationSupplyLotSizingMethod)
    {
      $this->locationSupplyLotSizingMethod = $locationSupplyLotSizingMethod;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocationSupplyTimeFence()
    {
      return $this->locationSupplyTimeFence;
    }

    /**
     * @param SearchLongField $locationSupplyTimeFence
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationSupplyTimeFence($locationSupplyTimeFence)
    {
      $this->locationSupplyTimeFence = $locationSupplyTimeFence;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationSupplyType()
    {
      return $this->locationSupplyType;
    }

    /**
     * @param SearchEnumMultiSelectField $locationSupplyType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationSupplyType($locationSupplyType)
    {
      $this->locationSupplyType = $locationSupplyType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLocationTotalValue()
    {
      return $this->locationTotalValue;
    }

    /**
     * @param SearchDoubleField $locationTotalValue
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocationTotalValue($locationTotalValue)
    {
      $this->locationTotalValue = $locationTotalValue;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocBackwardConsumptionDays()
    {
      return $this->locBackwardConsumptionDays;
    }

    /**
     * @param SearchLongField $locBackwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocBackwardConsumptionDays($locBackwardConsumptionDays)
    {
      $this->locBackwardConsumptionDays = $locBackwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLocForwardConsumptionDays()
    {
      return $this->locForwardConsumptionDays;
    }

    /**
     * @param SearchLongField $locForwardConsumptionDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setLocForwardConsumptionDays($locForwardConsumptionDays)
    {
      $this->locForwardConsumptionDays = $locForwardConsumptionDays;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturer()
    {
      return $this->manufacturer;
    }

    /**
     * @param SearchStringField $manufacturer
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturer($manufacturer)
    {
      $this->manufacturer = $manufacturer;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufactureraddr1()
    {
      return $this->manufactureraddr1;
    }

    /**
     * @param SearchStringField $manufactureraddr1
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufactureraddr1($manufactureraddr1)
    {
      $this->manufactureraddr1 = $manufactureraddr1;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerCity()
    {
      return $this->manufacturerCity;
    }

    /**
     * @param SearchStringField $manufacturerCity
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturerCity($manufacturerCity)
    {
      $this->manufacturerCity = $manufacturerCity;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerState()
    {
      return $this->manufacturerState;
    }

    /**
     * @param SearchStringField $manufacturerState
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturerState($manufacturerState)
    {
      $this->manufacturerState = $manufacturerState;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerTariff()
    {
      return $this->manufacturerTariff;
    }

    /**
     * @param SearchStringField $manufacturerTariff
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturerTariff($manufacturerTariff)
    {
      $this->manufacturerTariff = $manufacturerTariff;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerTaxId()
    {
      return $this->manufacturerTaxId;
    }

    /**
     * @param SearchStringField $manufacturerTaxId
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturerTaxId($manufacturerTaxId)
    {
      $this->manufacturerTaxId = $manufacturerTaxId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getManufacturerZip()
    {
      return $this->manufacturerZip;
    }

    /**
     * @param SearchStringField $manufacturerZip
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturerZip($manufacturerZip)
    {
      $this->manufacturerZip = $manufacturerZip;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getManufacturingChargeItem()
    {
      return $this->manufacturingChargeItem;
    }

    /**
     * @param SearchBooleanField $manufacturingChargeItem
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setManufacturingChargeItem($manufacturingChargeItem)
    {
      $this->manufacturingChargeItem = $manufacturingChargeItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMatchBillToReceipt()
    {
      return $this->matchBillToReceipt;
    }

    /**
     * @param SearchBooleanField $matchBillToReceipt
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMatchBillToReceipt($matchBillToReceipt)
    {
      $this->matchBillToReceipt = $matchBillToReceipt;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMatrix()
    {
      return $this->matrix;
    }

    /**
     * @param SearchBooleanField $matrix
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMatrix($matrix)
    {
      $this->matrix = $matrix;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMatrixChild()
    {
      return $this->matrixChild;
    }

    /**
     * @param SearchBooleanField $matrixChild
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMatrixChild($matrixChild)
    {
      $this->matrixChild = $matrixChild;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMetaTagHtml()
    {
      return $this->metaTagHtml;
    }

    /**
     * @param SearchStringField $metaTagHtml
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMetaTagHtml($metaTagHtml)
    {
      $this->metaTagHtml = $metaTagHtml;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getMinimumQuantity()
    {
      return $this->minimumQuantity;
    }

    /**
     * @param SearchLongField $minimumQuantity
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMinimumQuantity($minimumQuantity)
    {
      $this->minimumQuantity = $minimumQuantity;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMossApplies()
    {
      return $this->mossApplies;
    }

    /**
     * @param SearchBooleanField $mossApplies
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMossApplies($mossApplies)
    {
      $this->mossApplies = $mossApplies;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMpn()
    {
      return $this->mpn;
    }

    /**
     * @param SearchStringField $mpn
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMpn($mpn)
    {
      $this->mpn = $mpn;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMultManufactureAddr()
    {
      return $this->multManufactureAddr;
    }

    /**
     * @param SearchBooleanField $multManufactureAddr
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setMultManufactureAddr($multManufactureAddr)
    {
      $this->multManufactureAddr = $multManufactureAddr;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNexTagCategory()
    {
      return $this->nexTagCategory;
    }

    /**
     * @param SearchStringField $nexTagCategory
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setNexTagCategory($nexTagCategory)
    {
      $this->nexTagCategory = $nexTagCategory;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNexTagProductFeed()
    {
      return $this->nexTagProductFeed;
    }

    /**
     * @param SearchBooleanField $nexTagProductFeed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setNexTagProductFeed($nexTagProductFeed)
    {
      $this->nexTagProductFeed = $nexTagProductFeed;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextInvtCountDate()
    {
      return $this->nextInvtCountDate;
    }

    /**
     * @param SearchDateField $nextInvtCountDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setNextInvtCountDate($nextInvtCountDate)
    {
      $this->nextInvtCountDate = $nextInvtCountDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumActiveListings()
    {
      return $this->numActiveListings;
    }

    /**
     * @param SearchLongField $numActiveListings
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setNumActiveListings($numActiveListings)
    {
      $this->numActiveListings = $numActiveListings;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNumberAllowedDownloads()
    {
      return $this->numberAllowedDownloads;
    }

    /**
     * @param SearchDoubleField $numberAllowedDownloads
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setNumberAllowedDownloads($numberAllowedDownloads)
    {
      $this->numberAllowedDownloads = $numberAllowedDownloads;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumCurrentlyListed()
    {
      return $this->numCurrentlyListed;
    }

    /**
     * @param SearchLongField $numCurrentlyListed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setNumCurrentlyListed($numCurrentlyListed)
    {
      $this->numCurrentlyListed = $numCurrentlyListed;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getObsoleteDate()
    {
      return $this->obsoleteDate;
    }

    /**
     * @param SearchDateField $obsoleteDate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setObsoleteDate($obsoleteDate)
    {
      $this->obsoleteDate = $obsoleteDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getObsoleteRevision()
    {
      return $this->obsoleteRevision;
    }

    /**
     * @param SearchMultiSelectField $obsoleteRevision
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setObsoleteRevision($obsoleteRevision)
    {
      $this->obsoleteRevision = $obsoleteRevision;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOfferSupport()
    {
      return $this->offerSupport;
    }

    /**
     * @param SearchBooleanField $offerSupport
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOfferSupport($offerSupport)
    {
      $this->offerSupport = $offerSupport;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOnlineCustomerPrice()
    {
      return $this->onlineCustomerPrice;
    }

    /**
     * @param SearchDoubleField $onlineCustomerPrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOnlineCustomerPrice($onlineCustomerPrice)
    {
      $this->onlineCustomerPrice = $onlineCustomerPrice;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOnSpecial()
    {
      return $this->onSpecial;
    }

    /**
     * @param SearchBooleanField $onSpecial
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOnSpecial($onSpecial)
    {
      $this->onSpecial = $onSpecial;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOtherVendor()
    {
      return $this->otherVendor;
    }

    /**
     * @param SearchMultiSelectField $otherVendor
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOtherVendor($otherVendor)
    {
      $this->otherVendor = $otherVendor;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOutOfStockBehavior()
    {
      return $this->outOfStockBehavior;
    }

    /**
     * @param SearchMultiSelectField $outOfStockBehavior
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOutOfStockBehavior($outOfStockBehavior)
    {
      $this->outOfStockBehavior = $outOfStockBehavior;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getOverallQuantityPricingType()
    {
      return $this->overallQuantityPricingType;
    }

    /**
     * @param SearchEnumMultiSelectField $overallQuantityPricingType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOverallQuantityPricingType($overallQuantityPricingType)
    {
      $this->overallQuantityPricingType = $overallQuantityPricingType;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getOverheadType()
    {
      return $this->overheadType;
    }

    /**
     * @param SearchEnumMultiSelectField $overheadType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setOverheadType($overheadType)
    {
      $this->overheadType = $overheadType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPageTitle()
    {
      return $this->pageTitle;
    }

    /**
     * @param SearchStringField $pageTitle
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPageTitle($pageTitle)
    {
      $this->pageTitle = $pageTitle;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPeriodicLotSizeDays()
    {
      return $this->periodicLotSizeDays;
    }

    /**
     * @param SearchLongField $periodicLotSizeDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPeriodicLotSizeDays($periodicLotSizeDays)
    {
      $this->periodicLotSizeDays = $periodicLotSizeDays;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPeriodicLotSizeType()
    {
      return $this->periodicLotSizeType;
    }

    /**
     * @param SearchEnumMultiSelectField $periodicLotSizeType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPeriodicLotSizeType($periodicLotSizeType)
    {
      $this->periodicLotSizeType = $periodicLotSizeType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPreferenceCriterion()
    {
      return $this->preferenceCriterion;
    }

    /**
     * @param SearchStringField $preferenceCriterion
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPreferenceCriterion($preferenceCriterion)
    {
      $this->preferenceCriterion = $preferenceCriterion;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPreferredBin()
    {
      return $this->preferredBin;
    }

    /**
     * @param SearchBooleanField $preferredBin
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPreferredBin($preferredBin)
    {
      $this->preferredBin = $preferredBin;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPreferredLocation()
    {
      return $this->preferredLocation;
    }

    /**
     * @param SearchMultiSelectField $preferredLocation
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPreferredLocation($preferredLocation)
    {
      $this->preferredLocation = $preferredLocation;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPreferredStockLevel()
    {
      return $this->preferredStockLevel;
    }

    /**
     * @param SearchDoubleField $preferredStockLevel
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPreferredStockLevel($preferredStockLevel)
    {
      $this->preferredStockLevel = $preferredStockLevel;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPreferredStockLevelDays()
    {
      return $this->preferredStockLevelDays;
    }

    /**
     * @param SearchLongField $preferredStockLevelDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPreferredStockLevelDays($preferredStockLevelDays)
    {
      $this->preferredStockLevelDays = $preferredStockLevelDays;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param SearchDoubleField $price
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPricesIncludeTax()
    {
      return $this->pricesIncludeTax;
    }

    /**
     * @param SearchBooleanField $pricesIncludeTax
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPricesIncludeTax($pricesIncludeTax)
    {
      $this->pricesIncludeTax = $pricesIncludeTax;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPricingGroup()
    {
      return $this->pricingGroup;
    }

    /**
     * @param SearchMultiSelectField $pricingGroup
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPricingGroup($pricingGroup)
    {
      $this->pricingGroup = $pricingGroup;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPrimaryCategory()
    {
      return $this->primaryCategory;
    }

    /**
     * @param SearchLongField $primaryCategory
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPrimaryCategory($primaryCategory)
    {
      $this->primaryCategory = $primaryCategory;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount()
    {
      return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchDoubleField $purchaseOrderAmount
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPurchaseOrderAmount($purchaseOrderAmount)
    {
      $this->purchaseOrderAmount = $purchaseOrderAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity()
    {
      return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPurchaseOrderQuantity($purchaseOrderQuantity)
    {
      $this->purchaseOrderQuantity = $purchaseOrderQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff()
    {
      return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPurchaseOrderQuantityDiff($purchaseOrderQuantityDiff)
    {
      $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseUnit()
    {
      return $this->purchaseUnit;
    }

    /**
     * @param SearchMultiSelectField $purchaseUnit
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setPurchaseUnit($purchaseUnit)
    {
      $this->purchaseUnit = $purchaseUnit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable()
    {
      return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityAvailable
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setQuantityAvailable($quantityAvailable)
    {
      $this->quantityAvailable = $quantityAvailable;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityBackOrdered()
    {
      return $this->quantityBackOrdered;
    }

    /**
     * @param SearchDoubleField $quantityBackOrdered
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setQuantityBackOrdered($quantityBackOrdered)
    {
      $this->quantityBackOrdered = $quantityBackOrdered;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityCommitted()
    {
      return $this->quantityCommitted;
    }

    /**
     * @param SearchDoubleField $quantityCommitted
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand()
    {
      return $this->quantityOnHand;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setQuantityOnHand($quantityOnHand)
    {
      $this->quantityOnHand = $quantityOnHand;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnOrder()
    {
      return $this->quantityOnOrder;
    }

    /**
     * @param SearchDoubleField $quantityOnOrder
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setQuantityOnOrder($quantityOnOrder)
    {
      $this->quantityOnOrder = $quantityOnOrder;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getQuantityPricingSchedule()
    {
      return $this->quantityPricingSchedule;
    }

    /**
     * @param SearchMultiSelectField $quantityPricingSchedule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setQuantityPricingSchedule($quantityPricingSchedule)
    {
      $this->quantityPricingSchedule = $quantityPricingSchedule;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptAmount()
    {
      return $this->receiptAmount;
    }

    /**
     * @param SearchDoubleField $receiptAmount
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setReceiptAmount($receiptAmount)
    {
      $this->receiptAmount = $receiptAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantity()
    {
      return $this->receiptQuantity;
    }

    /**
     * @param SearchDoubleField $receiptQuantity
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setReceiptQuantity($receiptQuantity)
    {
      $this->receiptQuantity = $receiptQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff()
    {
      return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchDoubleField $receiptQuantityDiff
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setReceiptQuantityDiff($receiptQuantityDiff)
    {
      $this->receiptQuantityDiff = $receiptQuantityDiff;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getReorderMultiple()
    {
      return $this->reorderMultiple;
    }

    /**
     * @param SearchLongField $reorderMultiple
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setReorderMultiple($reorderMultiple)
    {
      $this->reorderMultiple = $reorderMultiple;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReorderPoint()
    {
      return $this->reorderPoint;
    }

    /**
     * @param SearchDoubleField $reorderPoint
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setReorderPoint($reorderPoint)
    {
      $this->reorderPoint = $reorderPoint;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRescheduleInDays()
    {
      return $this->rescheduleInDays;
    }

    /**
     * @param SearchLongField $rescheduleInDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRescheduleInDays($rescheduleInDays)
    {
      $this->rescheduleInDays = $rescheduleInDays;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRescheduleOutDays()
    {
      return $this->rescheduleOutDays;
    }

    /**
     * @param SearchLongField $rescheduleOutDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRescheduleOutDays($rescheduleOutDays)
    {
      $this->rescheduleOutDays = $rescheduleOutDays;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReservePrice()
    {
      return $this->reservePrice;
    }

    /**
     * @param SearchDoubleField $reservePrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setReservePrice($reservePrice)
    {
      $this->reservePrice = $reservePrice;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevenueAllocationGroup()
    {
      return $this->revenueAllocationGroup;
    }

    /**
     * @param SearchMultiSelectField $revenueAllocationGroup
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRevenueAllocationGroup($revenueAllocationGroup)
    {
      $this->revenueAllocationGroup = $revenueAllocationGroup;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevenueRecognitionRule()
    {
      return $this->revenueRecognitionRule;
    }

    /**
     * @param SearchMultiSelectField $revenueRecognitionRule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRevenueRecognitionRule($revenueRecognitionRule)
    {
      $this->revenueRecognitionRule = $revenueRecognitionRule;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevRecForecastRule()
    {
      return $this->revRecForecastRule;
    }

    /**
     * @param SearchMultiSelectField $revRecForecastRule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRevRecForecastRule($revRecForecastRule)
    {
      $this->revRecForecastRule = $revRecForecastRule;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevRecSchedule()
    {
      return $this->revRecSchedule;
    }

    /**
     * @param SearchMultiSelectField $revRecSchedule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRevRecSchedule($revRecSchedule)
    {
      $this->revRecSchedule = $revRecSchedule;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRoundUpAsComponent()
    {
      return $this->roundUpAsComponent;
    }

    /**
     * @param SearchBooleanField $roundUpAsComponent
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setRoundUpAsComponent($roundUpAsComponent)
    {
      $this->roundUpAsComponent = $roundUpAsComponent;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSafetyStockLevel()
    {
      return $this->safetyStockLevel;
    }

    /**
     * @param SearchDoubleField $safetyStockLevel
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSafetyStockLevel($safetyStockLevel)
    {
      $this->safetyStockLevel = $safetyStockLevel;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSafetyStockLevelDays()
    {
      return $this->safetyStockLevelDays;
    }

    /**
     * @param SearchLongField $safetyStockLevelDays
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSafetyStockLevelDays($safetyStockLevelDays)
    {
      $this->safetyStockLevelDays = $safetyStockLevelDays;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSalesDescription()
    {
      return $this->salesDescription;
    }

    /**
     * @param SearchStringField $salesDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSalesDescription($salesDescription)
    {
      $this->salesDescription = $salesDescription;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSaleUnit()
    {
      return $this->saleUnit;
    }

    /**
     * @param SearchMultiSelectField $saleUnit
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSaleUnit($saleUnit)
    {
      $this->saleUnit = $saleUnit;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSameAsPrimaryBookAmortization()
    {
      return $this->sameAsPrimaryBookAmortization;
    }

    /**
     * @param SearchBooleanField $sameAsPrimaryBookAmortization
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSameAsPrimaryBookAmortization($sameAsPrimaryBookAmortization)
    {
      $this->sameAsPrimaryBookAmortization = $sameAsPrimaryBookAmortization;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSameAsPrimaryBookRevRec()
    {
      return $this->sameAsPrimaryBookRevRec;
    }

    /**
     * @param SearchBooleanField $sameAsPrimaryBookRevRec
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSameAsPrimaryBookRevRec($sameAsPrimaryBookRevRec)
    {
      $this->sameAsPrimaryBookRevRec = $sameAsPrimaryBookRevRec;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getScheduleBCode()
    {
      return $this->scheduleBCode;
    }

    /**
     * @param SearchEnumMultiSelectField $scheduleBCode
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setScheduleBCode($scheduleBCode)
    {
      $this->scheduleBCode = $scheduleBCode;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScheduleBNumber()
    {
      return $this->scheduleBNumber;
    }

    /**
     * @param SearchStringField $scheduleBNumber
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setScheduleBNumber($scheduleBNumber)
    {
      $this->scheduleBNumber = $scheduleBNumber;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScheduleBQuantity()
    {
      return $this->scheduleBQuantity;
    }

    /**
     * @param SearchStringField $scheduleBQuantity
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setScheduleBQuantity($scheduleBQuantity)
    {
      $this->scheduleBQuantity = $scheduleBQuantity;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSearchKeywords()
    {
      return $this->searchKeywords;
    }

    /**
     * @param SearchStringField $searchKeywords
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSearchKeywords($searchKeywords)
    {
      $this->searchKeywords = $searchKeywords;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSeasonalDemand()
    {
      return $this->seasonalDemand;
    }

    /**
     * @param SearchBooleanField $seasonalDemand
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSeasonalDemand($seasonalDemand)
    {
      $this->seasonalDemand = $seasonalDemand;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSellOnEBay()
    {
      return $this->sellOnEBay;
    }

    /**
     * @param SearchBooleanField $sellOnEBay
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSellOnEBay($sellOnEBay)
    {
      $this->sellOnEBay = $sellOnEBay;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param SearchStringField $serialNumber
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSerialNumberLocation()
    {
      return $this->serialNumberLocation;
    }

    /**
     * @param SearchMultiSelectField $serialNumberLocation
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSerialNumberLocation($serialNumberLocation)
    {
      $this->serialNumberLocation = $serialNumberLocation;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipIndividually()
    {
      return $this->shipIndividually;
    }

    /**
     * @param SearchBooleanField $shipIndividually
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShipIndividually($shipIndividually)
    {
      $this->shipIndividually = $shipIndividually;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipPackage()
    {
      return $this->shipPackage;
    }

    /**
     * @param SearchMultiSelectField $shipPackage
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShipPackage($shipPackage)
    {
      $this->shipPackage = $shipPackage;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getShippingCarrier()
    {
      return $this->shippingCarrier;
    }

    /**
     * @param SearchEnumMultiSelectField $shippingCarrier
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShippingCarrier($shippingCarrier)
    {
      $this->shippingCarrier = $shippingCarrier;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getShippingRate()
    {
      return $this->shippingRate;
    }

    /**
     * @param SearchDoubleField $shippingRate
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShippingRate($shippingRate)
    {
      $this->shippingRate = $shippingRate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShoppingDotComCategory()
    {
      return $this->shoppingDotComCategory;
    }

    /**
     * @param SearchStringField $shoppingDotComCategory
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShoppingDotComCategory($shoppingDotComCategory)
    {
      $this->shoppingDotComCategory = $shoppingDotComCategory;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShoppingProductFeed()
    {
      return $this->shoppingProductFeed;
    }

    /**
     * @param SearchBooleanField $shoppingProductFeed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShoppingProductFeed($shoppingProductFeed)
    {
      $this->shoppingProductFeed = $shoppingProductFeed;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getShopzillaCategoryId()
    {
      return $this->shopzillaCategoryId;
    }

    /**
     * @param SearchLongField $shopzillaCategoryId
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShopzillaCategoryId($shopzillaCategoryId)
    {
      $this->shopzillaCategoryId = $shopzillaCategoryId;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShopzillaProductFeed()
    {
      return $this->shopzillaProductFeed;
    }

    /**
     * @param SearchBooleanField $shopzillaProductFeed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setShopzillaProductFeed($shopzillaProductFeed)
    {
      $this->shopzillaProductFeed = $shopzillaProductFeed;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSitemapPriority()
    {
      return $this->sitemapPriority;
    }

    /**
     * @param SearchEnumMultiSelectField $sitemapPriority
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSitemapPriority($sitemapPriority)
    {
      $this->sitemapPriority = $sitemapPriority;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSoftDescriptor()
    {
      return $this->softDescriptor;
    }

    /**
     * @param SearchMultiSelectField $softDescriptor
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSoftDescriptor($softDescriptor)
    {
      $this->softDescriptor = $softDescriptor;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getStartingPrice()
    {
      return $this->startingPrice;
    }

    /**
     * @param SearchDoubleField $startingPrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setStartingPrice($startingPrice)
    {
      $this->startingPrice = $startingPrice;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getStockDescription()
    {
      return $this->stockDescription;
    }

    /**
     * @param SearchStringField $stockDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setStockDescription($stockDescription)
    {
      $this->stockDescription = $stockDescription;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStockUnit()
    {
      return $this->stockUnit;
    }

    /**
     * @param SearchMultiSelectField $stockUnit
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setStockUnit($stockUnit)
    {
      $this->stockUnit = $stockUnit;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getStoreDescription()
    {
      return $this->storeDescription;
    }

    /**
     * @param SearchStringField $storeDescription
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setStoreDescription($storeDescription)
    {
      $this->storeDescription = $storeDescription;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSubType()
    {
      return $this->subType;
    }

    /**
     * @param SearchEnumMultiSelectField $subType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSubType($subType)
    {
      $this->subType = $subType;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyLotSizingMethod()
    {
      return $this->supplyLotSizingMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $supplyLotSizingMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSupplyLotSizingMethod($supplyLotSizingMethod)
    {
      $this->supplyLotSizingMethod = $supplyLotSizingMethod;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyReplenishmentMethod()
    {
      return $this->supplyReplenishmentMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $supplyReplenishmentMethod
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSupplyReplenishmentMethod($supplyReplenishmentMethod)
    {
      $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSupplyTimeFence()
    {
      return $this->supplyTimeFence;
    }

    /**
     * @param SearchLongField $supplyTimeFence
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSupplyTimeFence($supplyTimeFence)
    {
      $this->supplyTimeFence = $supplyTimeFence;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyType()
    {
      return $this->supplyType;
    }

    /**
     * @param SearchEnumMultiSelectField $supplyType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setSupplyType($supplyType)
    {
      $this->supplyType = $supplyType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param SearchMultiSelectField $taxCode
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setTaxCode($taxCode)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxSchedule()
    {
      return $this->taxSchedule;
    }

    /**
     * @param SearchMultiSelectField $taxSchedule
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setTaxSchedule($taxSchedule)
    {
      $this->taxSchedule = $taxSchedule;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getThumbnailUrl()
    {
      return $this->thumbnailUrl;
    }

    /**
     * @param SearchStringField $thumbnailUrl
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
      $this->thumbnailUrl = $thumbnailUrl;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalValue()
    {
      return $this->totalValue;
    }

    /**
     * @param SearchDoubleField $totalValue
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setTotalValue($totalValue)
    {
      $this->totalValue = $totalValue;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTrackLandedCost()
    {
      return $this->trackLandedCost;
    }

    /**
     * @param SearchBooleanField $trackLandedCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setTrackLandedCost($trackLandedCost)
    {
      $this->trackLandedCost = $trackLandedCost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferPrice()
    {
      return $this->transferPrice;
    }

    /**
     * @param SearchDoubleField $transferPrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setTransferPrice($transferPrice)
    {
      $this->transferPrice = $transferPrice;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param SearchMultiSelectField $unitsType
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUpcCode()
    {
      return $this->upcCode;
    }

    /**
     * @param SearchStringField $upcCode
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setUpcCode($upcCode)
    {
      $this->upcCode = $upcCode;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param SearchStringField $urlComponent
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseBins()
    {
      return $this->useBins;
    }

    /**
     * @param SearchBooleanField $useBins
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setUseBins($useBins)
    {
      $this->useBins = $useBins;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseComponentYield()
    {
      return $this->useComponentYield;
    }

    /**
     * @param SearchBooleanField $useComponentYield
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setUseComponentYield($useComponentYield)
    {
      $this->useComponentYield = $useComponentYield;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseMarginalRates()
    {
      return $this->useMarginalRates;
    }

    /**
     * @param SearchBooleanField $useMarginalRates
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setUseMarginalRates($useMarginalRates)
    {
      $this->useMarginalRates = $useMarginalRates;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param SearchMultiSelectField $vendor
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVendorCode()
    {
      return $this->vendorCode;
    }

    /**
     * @param SearchStringField $vendorCode
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVendorCode($vendorCode)
    {
      $this->vendorCode = $vendorCode;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVendorCost()
    {
      return $this->vendorCost;
    }

    /**
     * @param SearchDoubleField $vendorCost
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVendorCost($vendorCost)
    {
      $this->vendorCost = $vendorCost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVendorCostEntered()
    {
      return $this->vendorCostEntered;
    }

    /**
     * @param SearchDoubleField $vendorCostEntered
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVendorCostEntered($vendorCostEntered)
    {
      $this->vendorCostEntered = $vendorCostEntered;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getVendorName()
    {
      return $this->vendorName;
    }

    /**
     * @param SearchStringField $vendorName
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVendorName($vendorName)
    {
      $this->vendorName = $vendorName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendorPriceCurrency()
    {
      return $this->vendorPriceCurrency;
    }

    /**
     * @param SearchMultiSelectField $vendorPriceCurrency
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVendorPriceCurrency($vendorPriceCurrency)
    {
      $this->vendorPriceCurrency = $vendorPriceCurrency;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getVsoeDeferral()
    {
      return $this->vsoeDeferral;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoeDeferral
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVsoeDeferral($vsoeDeferral)
    {
      $this->vsoeDeferral = $vsoeDeferral;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getVsoeDelivered()
    {
      return $this->vsoeDelivered;
    }

    /**
     * @param SearchBooleanField $vsoeDelivered
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVsoeDelivered($vsoeDelivered)
    {
      $this->vsoeDelivered = $vsoeDelivered;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getVsoePermitDiscount()
    {
      return $this->vsoePermitDiscount;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoePermitDiscount
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVsoePermitDiscount($vsoePermitDiscount)
    {
      $this->vsoePermitDiscount = $vsoePermitDiscount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoePrice()
    {
      return $this->vsoePrice;
    }

    /**
     * @param SearchDoubleField $vsoePrice
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVsoePrice($vsoePrice)
    {
      $this->vsoePrice = $vsoePrice;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getVsoeSopGroup()
    {
      return $this->vsoeSopGroup;
    }

    /**
     * @param SearchEnumMultiSelectField $vsoeSopGroup
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setVsoeSopGroup($vsoeSopGroup)
    {
      $this->vsoeSopGroup = $vsoeSopGroup;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWebSite()
    {
      return $this->webSite;
    }

    /**
     * @param SearchMultiSelectField $webSite
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setWebSite($webSite)
    {
      $this->webSite = $webSite;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param SearchDoubleField $weight
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getYahooProductFeed()
    {
      return $this->yahooProductFeed;
    }

    /**
     * @param SearchBooleanField $yahooProductFeed
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setYahooProductFeed($yahooProductFeed)
    {
      $this->yahooProductFeed = $yahooProductFeed;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\ItemSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
