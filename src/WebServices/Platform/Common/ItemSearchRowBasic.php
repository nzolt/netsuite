<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * ItemSearchRowBasic
 */
class ItemSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $accountingBook;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $accountingBookAmortization;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $accountingBookRevRecSchedule;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $allowedShippingMethod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $alternateDemandSourceItem;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $assetAccount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $atpLeadTime;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $atpMethod;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $autoLeadTime;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $autoPreferredStockLevel;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $autoReorderPoint;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $availableToPartners;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $averageCost;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $backwardConsumptionDays;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $basePrice;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billExchRateVarianceAcct;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billPriceVarianceAcct;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billQtyVarianceAcct;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $binNumber;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $binOnHandAvail;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $binOnHandCount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $bomQuantity;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $buildEntireAssembly;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $buildTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $buyItNowPrice;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $category;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $categoryPreferred;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $componentYield;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $copyDescription;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $correlatedItem;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $correlatedItemCorrelation;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $correlatedItemCount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $correlatedItemLift;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $correlatedItemPurchaseRate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $cost;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $costAccountingStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $costCategory;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costEstimate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $costEstimateType;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $costingMethod;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $countryOfManufacture;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $created;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $createJob;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $custReturnVarianceAccount;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateViewed;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $daysBeforeExpiration;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $defaultReturnCost;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $defaultShippingMethod;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $deferredExpenseAccount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $deferredRevenueAccount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $deferRevRec;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $demandModifier;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $demandSource;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $demandTimeFence;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $departmentnohierarchy;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $displayIneBayStore;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $displayName;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $distributionCategory;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $distributionNetwork;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $dontShowPrice;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $eBayItemDescription;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $eBayItemSubtitle;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $eBayItemTitle;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $ebayRelistingOption;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $effectiveBomControl;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $effectiveDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $effectiveRevision;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $endAuctionsWhenOutOfStock;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $excludeFromSitemap;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $expenseAccount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $featuredDescription;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $feedDescription;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $feedName;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fixedLotSize;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $forwardConsumptionDays;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $fraudRisk;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $froogleProductFeed;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxCost;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $gainLossAccount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $generateAccruals;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertAuthCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertEmail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertExpirationDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertFrom;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertMessage;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertOriginalAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCertRecipient;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $hits;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $imageUrl;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $incomeAccount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $intercoExpenseAccount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $intercoIncomeAccount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $inventoryLocation;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $invtClassification;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $invtCountInterval;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isAvailable;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isDropShipItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isFulfillable;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isGcoCompliant;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isLotItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isOnline;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isSerialItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isSpecialOrderItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isSpecialWorkOrderItem;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $issueProduct;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isTaxable;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isVsoeBundle;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isWip;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $itemId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $itemUrl;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastInvtCountDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $lastPurchasePrice;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastQuantityAvailableChange;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $leadTime;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $liabilityAccount;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $listingDuration;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationAtpLeadTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationAverageCost;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $locationBinQuantityAvailable;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationBuildTime;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationCost;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $locationCostAccountingStatus;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationDefaultReturnCost;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $locationDemandSource;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationDemandTimeFence;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationFixedLotSize;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $locationInventoryCostTemplate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $locationInvtClassification;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationInvtCountInterval;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $locationLastInvtCountDate;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationLeadTime;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $locationNextInvtCountDate;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationPeriodicLotSizeDays;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $locationPeriodicLotSizeType;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationPreferredStockLevel;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityAvailable;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityBackOrdered;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityCommitted;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityInTransit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityOnHand;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationQuantityOnOrder;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationReOrderPoint;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationRescheduleInDays;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationRescheduleOutDays;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationSafetyStockLevel;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $locationSupplyLotSizingMethod;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locationSupplyTimeFence;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $locationSupplyType;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $locationTotalValue;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locBackwardConsumptionDays;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $locForwardConsumptionDays;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturer;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturerAddr1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturerCity;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturerState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturerTariff;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturerTaxId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $manufacturerZip;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $manufacturingChargeItem;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $matchBillToReceipt;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $memberItem;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $memberQuantity;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $metaTagHtml;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $minimumQuantity;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $modified;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $mossApplies;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $mpn;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $multManufactureAddr;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $nextagCategory;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $nextagProductFeed;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $nextInvtCountDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $noPriceMessage;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $numActiveListings;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $numberAllowedDownloads;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $numCurrentlyListed;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $obsoleteDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $obsoleteRevision;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $offerSupport;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $onlineCustomerPrice;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $onlinePrice;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $onSpecial;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $otherPrices;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $otherVendor;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $outOfStockBehavior;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $outOfStockMessage;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $overallQuantityPricingType;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $overheadType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pageTitle;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $parent;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $periodicLotSizeDays;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $periodicLotSizeType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $preferenceCriterion;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $preferredBin;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $preferredLocation;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $preferredStockLevel;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $preferredStockLevelDays;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $pricesIncludeTax;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $pricingGroup;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $primaryCategory;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $prodPriceVarianceAcct;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $prodQtyVarianceAcct;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $purchaseDescription;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $purchasePriceVarianceAcct;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $purchaseUnit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityAvailable;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityBackOrdered;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityCommitted;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityOnHand;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityOnOrder;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $quantityPricingSchedule;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $receiptAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $reorderMultiple;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $reOrderPoint;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $rescheduleInDays;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $rescheduleOutDays;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $reservePrice;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $roundUpAsComponent;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $safetyStockLevel;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $safetyStockLevelDays;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $salesDescription;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesTaxCode;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $saleUnit;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $sameAsPrimaryBookAmortization;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $sameAsPrimaryBookRevRec;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $scheduleBCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $scheduleBNumber;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $scheduleBQuantity;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $scrapAcct;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $searchKeywords;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $seasonalDemand;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $sellOnEBay;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serialNumber;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serialNumberLocation;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $shipIndividually;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $shipPackage;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $shippingCarrier;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $shippingRate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shoppingDotComCategory;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $shoppingProductFeed;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $shopzillaCategoryId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $shopzillaProductFeed;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $sitemapPriority;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $softDescriptor;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $startingPrice;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $stockDescription;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $stockUnit;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $storeDescription;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $storeDetailedDescription;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $storeDisplayImage;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $storeDisplayName;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $storeDisplayThumbnail;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $subType;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $supplyLotSizingMethod;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $supplyReplenishmentMethod;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $supplyTimeFence;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $supplyType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $taxSchedule;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $thumbNailUrl;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $totalValue;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $trackLandedCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $transferPrice;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $unbuildVarianceAccount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $unitsType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $upcCode;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $urlComponent;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $useBins;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $useComponentYield;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $useMarginalRates;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $vendor;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $vendorCode;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $vendorCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $vendorCostEntered;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $vendorName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $vendorPriceCurrency;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $vendorSchedule;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $vendReturnVarianceAccount;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoeDeferral;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $vsoeDelivered;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $vsoePermitDiscount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $vsoePrice;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $webSite;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $weight;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $weightUnit;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $wipAcct;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $wipVarianceAcct;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $yahooProductFeed;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"accountingBook" => "SearchColumnSelectField[]",
    	"accountingBookAmortization" => "SearchColumnSelectField[]",
    	"accountingBookRevRecSchedule" => "SearchColumnSelectField[]",
    	"allowedShippingMethod" => "SearchColumnSelectField[]",
    	"alternateDemandSourceItem" => "SearchColumnStringField[]",
    	"assetAccount" => "SearchColumnSelectField[]",
    	"atpLeadTime" => "SearchColumnDoubleField[]",
    	"atpMethod" => "SearchColumnEnumSelectField[]",
    	"autoLeadTime" => "SearchColumnBooleanField[]",
    	"autoPreferredStockLevel" => "SearchColumnBooleanField[]",
    	"autoReorderPoint" => "SearchColumnBooleanField[]",
    	"availableToPartners" => "SearchColumnBooleanField[]",
    	"averageCost" => "SearchColumnDoubleField[]",
    	"backwardConsumptionDays" => "SearchColumnLongField[]",
    	"basePrice" => "SearchColumnDoubleField[]",
    	"billExchRateVarianceAcct" => "SearchColumnSelectField[]",
    	"billPriceVarianceAcct" => "SearchColumnSelectField[]",
    	"billQtyVarianceAcct" => "SearchColumnSelectField[]",
    	"binNumber" => "SearchColumnStringField[]",
    	"binOnHandAvail" => "SearchColumnDoubleField[]",
    	"binOnHandCount" => "SearchColumnDoubleField[]",
    	"bomQuantity" => "SearchColumnDoubleField[]",
    	"buildEntireAssembly" => "SearchColumnBooleanField[]",
    	"buildTime" => "SearchColumnDoubleField[]",
    	"buyItNowPrice" => "SearchColumnDoubleField[]",
    	"category" => "SearchColumnStringField[]",
    	"categoryPreferred" => "SearchColumnStringField[]",
    	"class" => "SearchColumnSelectField[]",
    	"componentYield" => "SearchColumnDoubleField[]",
    	"copyDescription" => "SearchColumnBooleanField[]",
    	"correlatedItem" => "SearchColumnSelectField[]",
    	"correlatedItemCorrelation" => "SearchColumnDoubleField[]",
    	"correlatedItemCount" => "SearchColumnLongField[]",
    	"correlatedItemLift" => "SearchColumnDoubleField[]",
    	"correlatedItemPurchaseRate" => "SearchColumnDoubleField[]",
    	"cost" => "SearchColumnDoubleField[]",
    	"costAccountingStatus" => "SearchColumnEnumSelectField[]",
    	"costCategory" => "SearchColumnStringField[]",
    	"costEstimate" => "SearchColumnDoubleField[]",
    	"costEstimateType" => "SearchColumnEnumSelectField[]",
    	"costingMethod" => "SearchColumnEnumSelectField[]",
    	"countryOfManufacture" => "SearchColumnEnumSelectField[]",
    	"created" => "SearchColumnDateField[]",
    	"createJob" => "SearchColumnBooleanField[]",
    	"custReturnVarianceAccount" => "SearchColumnSelectField[]",
    	"dateViewed" => "SearchColumnDateField[]",
    	"daysBeforeExpiration" => "SearchColumnStringField[]",
    	"defaultReturnCost" => "SearchColumnDoubleField[]",
    	"defaultShippingMethod" => "SearchColumnStringField[]",
    	"deferredExpenseAccount" => "SearchColumnSelectField[]",
    	"deferredRevenueAccount" => "SearchColumnSelectField[]",
    	"deferRevRec" => "SearchColumnBooleanField[]",
    	"demandModifier" => "SearchColumnDoubleField[]",
    	"demandSource" => "SearchColumnEnumSelectField[]",
    	"demandTimeFence" => "SearchColumnLongField[]",
    	"department" => "SearchColumnSelectField[]",
    	"departmentnohierarchy" => "SearchColumnSelectField[]",
    	"displayIneBayStore" => "SearchColumnBooleanField[]",
    	"displayName" => "SearchColumnStringField[]",
    	"distributionCategory" => "SearchColumnSelectField[]",
    	"distributionNetwork" => "SearchColumnSelectField[]",
    	"dontShowPrice" => "SearchColumnBooleanField[]",
    	"eBayItemDescription" => "SearchColumnStringField[]",
    	"eBayItemSubtitle" => "SearchColumnStringField[]",
    	"eBayItemTitle" => "SearchColumnStringField[]",
    	"ebayRelistingOption" => "SearchColumnEnumSelectField[]",
    	"effectiveBomControl" => "SearchColumnEnumSelectField[]",
    	"effectiveDate" => "SearchColumnDateField[]",
    	"effectiveRevision" => "SearchColumnSelectField[]",
    	"endAuctionsWhenOutOfStock" => "SearchColumnBooleanField[]",
    	"excludeFromSitemap" => "SearchColumnBooleanField[]",
    	"expenseAccount" => "SearchColumnSelectField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"featuredDescription" => "SearchColumnStringField[]",
    	"feedDescription" => "SearchColumnStringField[]",
    	"feedName" => "SearchColumnStringField[]",
    	"fixedLotSize" => "SearchColumnDoubleField[]",
    	"forwardConsumptionDays" => "SearchColumnLongField[]",
    	"fraudRisk" => "SearchColumnEnumSelectField[]",
    	"froogleProductFeed" => "SearchColumnBooleanField[]",
    	"fxCost" => "SearchColumnDoubleField[]",
    	"gainLossAccount" => "SearchColumnSelectField[]",
    	"generateAccruals" => "SearchColumnBooleanField[]",
    	"giftCertAuthCode" => "SearchColumnStringField[]",
    	"giftCertEmail" => "SearchColumnStringField[]",
    	"giftCertExpirationDate" => "SearchColumnStringField[]",
    	"giftCertFrom" => "SearchColumnStringField[]",
    	"giftCertMessage" => "SearchColumnStringField[]",
    	"giftCertOriginalAmount" => "SearchColumnStringField[]",
    	"giftCertRecipient" => "SearchColumnStringField[]",
    	"hits" => "SearchColumnLongField[]",
    	"imageUrl" => "SearchColumnStringField[]",
    	"incomeAccount" => "SearchColumnSelectField[]",
    	"intercoExpenseAccount" => "SearchColumnSelectField[]",
    	"intercoIncomeAccount" => "SearchColumnSelectField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"inventoryLocation" => "SearchColumnSelectField[]",
    	"invtClassification" => "SearchColumnEnumSelectField[]",
    	"invtCountInterval" => "SearchColumnLongField[]",
    	"isAvailable" => "SearchColumnBooleanField[]",
    	"isDropShipItem" => "SearchColumnBooleanField[]",
    	"isFulfillable" => "SearchColumnBooleanField[]",
    	"isGcoCompliant" => "SearchColumnBooleanField[]",
    	"isInactive" => "SearchColumnBooleanField[]",
    	"isLotItem" => "SearchColumnBooleanField[]",
    	"isOnline" => "SearchColumnBooleanField[]",
    	"isSerialItem" => "SearchColumnBooleanField[]",
    	"isSpecialOrderItem" => "SearchColumnBooleanField[]",
    	"isSpecialWorkOrderItem" => "SearchColumnBooleanField[]",
    	"issueProduct" => "SearchColumnSelectField[]",
    	"isTaxable" => "SearchColumnBooleanField[]",
    	"isVsoeBundle" => "SearchColumnBooleanField[]",
    	"isWip" => "SearchColumnBooleanField[]",
    	"itemId" => "SearchColumnStringField[]",
    	"itemUrl" => "SearchColumnStringField[]",
    	"lastInvtCountDate" => "SearchColumnDateField[]",
    	"lastPurchasePrice" => "SearchColumnDoubleField[]",
    	"lastQuantityAvailableChange" => "SearchColumnDateField[]",
    	"leadTime" => "SearchColumnLongField[]",
    	"liabilityAccount" => "SearchColumnSelectField[]",
    	"listingDuration" => "SearchColumnEnumSelectField[]",
    	"location" => "SearchColumnSelectField[]",
    	"locationAtpLeadTime" => "SearchColumnDoubleField[]",
    	"locationAverageCost" => "SearchColumnDoubleField[]",
    	"locationBinQuantityAvailable" => "SearchColumnStringField[]",
    	"locationBuildTime" => "SearchColumnDoubleField[]",
    	"locationCost" => "SearchColumnDoubleField[]",
    	"locationCostAccountingStatus" => "SearchColumnEnumSelectField[]",
    	"locationDefaultReturnCost" => "SearchColumnDoubleField[]",
    	"locationDemandSource" => "SearchColumnEnumSelectField[]",
    	"locationDemandTimeFence" => "SearchColumnLongField[]",
    	"locationFixedLotSize" => "SearchColumnDoubleField[]",
    	"locationInventoryCostTemplate" => "SearchColumnStringField[]",
    	"locationInvtClassification" => "SearchColumnEnumSelectField[]",
    	"locationInvtCountInterval" => "SearchColumnLongField[]",
    	"locationLastInvtCountDate" => "SearchColumnDateField[]",
    	"locationLeadTime" => "SearchColumnLongField[]",
    	"locationNextInvtCountDate" => "SearchColumnDateField[]",
    	"locationPeriodicLotSizeDays" => "SearchColumnLongField[]",
    	"locationPeriodicLotSizeType" => "SearchColumnEnumSelectField[]",
    	"locationPreferredStockLevel" => "SearchColumnDoubleField[]",
    	"locationQuantityAvailable" => "SearchColumnDoubleField[]",
    	"locationQuantityBackOrdered" => "SearchColumnDoubleField[]",
    	"locationQuantityCommitted" => "SearchColumnDoubleField[]",
    	"locationQuantityInTransit" => "SearchColumnDoubleField[]",
    	"locationQuantityOnHand" => "SearchColumnDoubleField[]",
    	"locationQuantityOnOrder" => "SearchColumnDoubleField[]",
    	"locationReOrderPoint" => "SearchColumnDoubleField[]",
    	"locationRescheduleInDays" => "SearchColumnLongField[]",
    	"locationRescheduleOutDays" => "SearchColumnLongField[]",
    	"locationSafetyStockLevel" => "SearchColumnDoubleField[]",
    	"locationSupplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
    	"locationSupplyTimeFence" => "SearchColumnLongField[]",
    	"locationSupplyType" => "SearchColumnEnumSelectField[]",
    	"locationTotalValue" => "SearchColumnDoubleField[]",
    	"locBackwardConsumptionDays" => "SearchColumnLongField[]",
    	"locForwardConsumptionDays" => "SearchColumnLongField[]",
    	"manufacturer" => "SearchColumnStringField[]",
    	"manufacturerAddr1" => "SearchColumnStringField[]",
    	"manufacturerCity" => "SearchColumnStringField[]",
    	"manufacturerState" => "SearchColumnStringField[]",
    	"manufacturerTariff" => "SearchColumnStringField[]",
    	"manufacturerTaxId" => "SearchColumnStringField[]",
    	"manufacturerZip" => "SearchColumnStringField[]",
    	"manufacturingChargeItem" => "SearchColumnBooleanField[]",
    	"matchBillToReceipt" => "SearchColumnBooleanField[]",
    	"memberItem" => "SearchColumnSelectField[]",
    	"memberQuantity" => "SearchColumnDoubleField[]",
    	"metaTagHtml" => "SearchColumnStringField[]",
    	"minimumQuantity" => "SearchColumnStringField[]",
    	"modified" => "SearchColumnDateField[]",
    	"mossApplies" => "SearchColumnBooleanField[]",
    	"mpn" => "SearchColumnStringField[]",
    	"multManufactureAddr" => "SearchColumnBooleanField[]",
    	"nextagCategory" => "SearchColumnStringField[]",
    	"nextagProductFeed" => "SearchColumnBooleanField[]",
    	"nextInvtCountDate" => "SearchColumnDateField[]",
    	"noPriceMessage" => "SearchColumnStringField[]",
    	"numActiveListings" => "SearchColumnLongField[]",
    	"numberAllowedDownloads" => "SearchColumnStringField[]",
    	"numCurrentlyListed" => "SearchColumnLongField[]",
    	"obsoleteDate" => "SearchColumnDateField[]",
    	"obsoleteRevision" => "SearchColumnSelectField[]",
    	"offerSupport" => "SearchColumnBooleanField[]",
    	"onlineCustomerPrice" => "SearchColumnDoubleField[]",
    	"onlinePrice" => "SearchColumnDoubleField[]",
    	"onSpecial" => "SearchColumnBooleanField[]",
    	"otherPrices" => "SearchColumnDoubleField[]",
    	"otherVendor" => "SearchColumnSelectField[]",
    	"outOfStockBehavior" => "SearchColumnStringField[]",
    	"outOfStockMessage" => "SearchColumnStringField[]",
    	"overallQuantityPricingType" => "SearchColumnEnumSelectField[]",
    	"overheadType" => "SearchColumnEnumSelectField[]",
    	"pageTitle" => "SearchColumnStringField[]",
    	"parent" => "SearchColumnSelectField[]",
    	"periodicLotSizeDays" => "SearchColumnLongField[]",
    	"periodicLotSizeType" => "SearchColumnEnumSelectField[]",
    	"preferenceCriterion" => "SearchColumnStringField[]",
    	"preferredBin" => "SearchColumnBooleanField[]",
    	"preferredLocation" => "SearchColumnSelectField[]",
    	"preferredStockLevel" => "SearchColumnDoubleField[]",
    	"preferredStockLevelDays" => "SearchColumnLongField[]",
    	"pricesIncludeTax" => "SearchColumnBooleanField[]",
    	"pricingGroup" => "SearchColumnSelectField[]",
    	"primaryCategory" => "SearchColumnStringField[]",
    	"prodPriceVarianceAcct" => "SearchColumnSelectField[]",
    	"prodQtyVarianceAcct" => "SearchColumnSelectField[]",
    	"purchaseDescription" => "SearchColumnStringField[]",
    	"purchaseOrderAmount" => "SearchColumnDoubleField[]",
    	"purchaseOrderQuantity" => "SearchColumnDoubleField[]",
    	"purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
    	"purchasePriceVarianceAcct" => "SearchColumnSelectField[]",
    	"purchaseUnit" => "SearchColumnSelectField[]",
    	"quantityAvailable" => "SearchColumnDoubleField[]",
    	"quantityBackOrdered" => "SearchColumnDoubleField[]",
    	"quantityCommitted" => "SearchColumnDoubleField[]",
    	"quantityOnHand" => "SearchColumnDoubleField[]",
    	"quantityOnOrder" => "SearchColumnDoubleField[]",
    	"quantityPricingSchedule" => "SearchColumnSelectField[]",
    	"receiptAmount" => "SearchColumnDoubleField[]",
    	"receiptQuantity" => "SearchColumnDoubleField[]",
    	"receiptQuantityDiff" => "SearchColumnDoubleField[]",
    	"reorderMultiple" => "SearchColumnLongField[]",
    	"reOrderPoint" => "SearchColumnDoubleField[]",
    	"rescheduleInDays" => "SearchColumnLongField[]",
    	"rescheduleOutDays" => "SearchColumnLongField[]",
    	"reservePrice" => "SearchColumnDoubleField[]",
    	"revRecSchedule" => "SearchColumnSelectField[]",
    	"roundUpAsComponent" => "SearchColumnBooleanField[]",
    	"safetyStockLevel" => "SearchColumnDoubleField[]",
    	"safetyStockLevelDays" => "SearchColumnLongField[]",
    	"salesDescription" => "SearchColumnStringField[]",
    	"salesTaxCode" => "SearchColumnSelectField[]",
    	"saleUnit" => "SearchColumnSelectField[]",
    	"sameAsPrimaryBookAmortization" => "SearchColumnBooleanField[]",
    	"sameAsPrimaryBookRevRec" => "SearchColumnBooleanField[]",
    	"scheduleBCode" => "SearchColumnEnumSelectField[]",
    	"scheduleBNumber" => "SearchColumnStringField[]",
    	"scheduleBQuantity" => "SearchColumnStringField[]",
    	"scrapAcct" => "SearchColumnSelectField[]",
    	"searchKeywords" => "SearchColumnStringField[]",
    	"seasonalDemand" => "SearchColumnBooleanField[]",
    	"sellOnEBay" => "SearchColumnBooleanField[]",
    	"serialNumber" => "SearchColumnStringField[]",
    	"serialNumberLocation" => "SearchColumnStringField[]",
    	"shipIndividually" => "SearchColumnBooleanField[]",
    	"shipPackage" => "SearchColumnSelectField[]",
    	"shippingCarrier" => "SearchColumnEnumSelectField[]",
    	"shippingRate" => "SearchColumnDoubleField[]",
    	"shoppingDotComCategory" => "SearchColumnStringField[]",
    	"shoppingProductFeed" => "SearchColumnBooleanField[]",
    	"shopzillaCategoryId" => "SearchColumnLongField[]",
    	"shopzillaProductFeed" => "SearchColumnBooleanField[]",
    	"sitemapPriority" => "SearchColumnEnumSelectField[]",
    	"softDescriptor" => "SearchColumnSelectField[]",
    	"startingPrice" => "SearchColumnDoubleField[]",
    	"stockDescription" => "SearchColumnStringField[]",
    	"stockUnit" => "SearchColumnSelectField[]",
    	"storeDescription" => "SearchColumnStringField[]",
    	"storeDetailedDescription" => "SearchColumnStringField[]",
    	"storeDisplayImage" => "SearchColumnSelectField[]",
    	"storeDisplayName" => "SearchColumnStringField[]",
    	"storeDisplayThumbnail" => "SearchColumnSelectField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"subType" => "SearchColumnEnumSelectField[]",
    	"supplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
    	"supplyReplenishmentMethod" => "SearchColumnEnumSelectField[]",
    	"supplyTimeFence" => "SearchColumnLongField[]",
    	"supplyType" => "SearchColumnEnumSelectField[]",
    	"taxSchedule" => "SearchColumnSelectField[]",
    	"thumbNailUrl" => "SearchColumnStringField[]",
    	"totalValue" => "SearchColumnDoubleField[]",
    	"trackLandedCost" => "SearchColumnBooleanField[]",
    	"transferPrice" => "SearchColumnDoubleField[]",
    	"type" => "SearchColumnEnumSelectField[]",
    	"unbuildVarianceAccount" => "SearchColumnSelectField[]",
    	"unitsType" => "SearchColumnSelectField[]",
    	"upcCode" => "SearchColumnStringField[]",
    	"urlComponent" => "SearchColumnStringField[]",
    	"useBins" => "SearchColumnBooleanField[]",
    	"useComponentYield" => "SearchColumnBooleanField[]",
    	"useMarginalRates" => "SearchColumnBooleanField[]",
    	"vendor" => "SearchColumnSelectField[]",
    	"vendorCode" => "SearchColumnStringField[]",
    	"vendorCost" => "SearchColumnDoubleField[]",
    	"vendorCostEntered" => "SearchColumnDoubleField[]",
    	"vendorName" => "SearchColumnStringField[]",
    	"vendorPriceCurrency" => "SearchColumnStringField[]",
    	"vendorSchedule" => "SearchColumnSelectField[]",
    	"vendReturnVarianceAccount" => "SearchColumnSelectField[]",
    	"vsoeDeferral" => "SearchColumnEnumSelectField[]",
    	"vsoeDelivered" => "SearchColumnBooleanField[]",
    	"vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
    	"vsoePrice" => "SearchColumnDoubleField[]",
    	"webSite" => "SearchColumnSelectField[]",
    	"weight" => "SearchColumnDoubleField[]",
    	"weightUnit" => "SearchColumnEnumSelectField[]",
    	"wipAcct" => "SearchColumnSelectField[]",
    	"wipVarianceAcct" => "SearchColumnSelectField[]",
    	"yahooProductFeed" => "SearchColumnBooleanField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ItemSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}