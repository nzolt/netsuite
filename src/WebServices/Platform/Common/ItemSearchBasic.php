<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * ItemSearchBasic
 */
class ItemSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $account;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBook;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBookAmortization;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountingBookRevRecSchedule;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $allowedShippingMethod;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $alternateDemandSourceItem;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $atpLeadTime;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $atpMethod;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $autoLeadTime;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $autoPreferredStockLevel;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $autoReorderPoint;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $availableToPartners;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $averageCost;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $backwardConsumptionDays;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $binNumber;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $binOnHandAvail;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $binOnHandCount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $bomQuantity;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $buildEntireAssembly;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $buildTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $buyItNowPrice;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $caption;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $category;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $component;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $componentOf;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $componentYield;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $copyDescription;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $correlatedItem;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $correlatedItemCorrelation;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $correlatedItemCount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $correlatedItemLift;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $correlatedItemPurchaseRate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $cost;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $costAccountingStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $costCategory;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costEstimate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $costEstimateType;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $costingMethod;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $countryOfManufacture;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $created;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $createJob;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateViewed;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $daysBeforeExpiration;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $defaultReturnCost;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $defaultShippingMethod;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $demandModifier;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $demandSource;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $demandTimeFence;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $displayIneBayStore;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $displayName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $distributionCategory;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $distributionNetwork;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $dontShowPrice;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $eBayItemDescription;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $eBayItemSubtitle;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $eBayItemTitle;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $ebayRelistingOption;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $effectiveBomControl;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $effectiveDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $effectiveRevision;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $endAuctionsWhenOutOfStock;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $excludeFromSitemap;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $externalId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $externalIdString;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $featuredDescription;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $feedDescription;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $feedName;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fixedLotSize;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $forwardConsumptionDays;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $fraudRisk;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $froogleProductFeed;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxCost;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $generateAccruals;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertAuthCode;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertEmail;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $giftCertExpDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertFrom;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertMsg;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertOrigAmt;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertRecipient;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $imageUrl;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $internalId;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $internalIdNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $inventoryLocation;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $invtClassification;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $invtCountInterval;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isAvailable;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isDropShipItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isFulfillable;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isGcoCompliant;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isInactive;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isLotItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isOnline;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isPreferredVendor;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isSerialItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isSpecialOrderItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isSpecialWorkOrderItem;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $issueProduct;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isTaxable;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isVsoeBundle;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isWip;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $itemId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $itemUrl;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastInvtCountDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $lastPurchasePrice;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastQuantityAvailableChange;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $leadTime;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $listingDuration;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationAtpLeadTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationAverageCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationBuildTime;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationCost;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $locationCostAccountingStatus;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationDefaultReturnCost;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $locationDemandSource;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationDemandTimeFence;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationFixedLotSize;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $locationInventoryCostTemplate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $locationInvtClassification;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationInvtCountInterval;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $locationLastInvtCountDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationLeadTime;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $locationNextInvtCountDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationPeriodicLotSizeDays;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $locationPeriodicLotSizeType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationPreferredStockLevel;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationQuantityAvailable;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationQuantityBackOrdered;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationQuantityCommitted;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationQuantityInTransit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationQuantityOnHand;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationQuantityOnOrder;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationReorderPoint;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationRescheduleInDays;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationRescheduleOutDays;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationSafetyStockLevel;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $locationSupplyLotSizingMethod;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locationSupplyTimeFence;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $locationSupplyType;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $locationTotalValue;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locBackwardConsumptionDays;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $locForwardConsumptionDays;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufacturer;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufactureraddr1;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufacturerCity;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufacturerState;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufacturerTariff;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufacturerTaxId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $manufacturerZip;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $manufacturingChargeItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $matchBillToReceipt;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $matrix;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $matrixChild;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $metaTagHtml;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $minimumQuantity;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $mossApplies;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $mpn;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $multManufactureAddr;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $nexTagCategory;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $nexTagProductFeed;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $nextInvtCountDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $numActiveListings;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $numberAllowedDownloads;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $numCurrentlyListed;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $obsoleteDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $obsoleteRevision;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $offerSupport;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $onlineCustomerPrice;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $onSpecial;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $otherVendor;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $outOfStockBehavior;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $overallQuantityPricingType;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $overheadType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $pageTitle;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $periodicLotSizeDays;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $periodicLotSizeType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $preferenceCriterion;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $preferredBin;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $preferredLocation;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $preferredStockLevel;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $preferredStockLevelDays;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $price;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $pricesIncludeTax;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $pricingGroup;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $primaryCategory;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $purchaseOrderQuantityDiff;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $purchaseUnit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $quantityPricingSchedule;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $receiptQuantityDiff;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $reorderMultiple;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $reorderPoint;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $rescheduleInDays;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $rescheduleOutDays;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $reservePrice;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $revRecSchedule;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $roundUpAsComponent;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $safetyStockLevel;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $safetyStockLevelDays;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $salesDescription;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $saleUnit;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $sameAsPrimaryBookAmortization;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $sameAsPrimaryBookRevRec;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $scheduleBCode;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $scheduleBNumber;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $scheduleBQuantity;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $searchKeywords;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $seasonalDemand;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $sellOnEBay;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $serialNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $serialNumberLocation;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shipIndividually;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $shipPackage;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $shippingCarrier;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $shippingRate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shoppingDotComCategory;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shoppingProductFeed;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $shopzillaCategoryId;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shopzillaProductFeed;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $sitemapPriority;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $softDescriptor;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $startingPrice;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $stockDescription;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $stockUnit;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $storeDescription;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $subType;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $supplyLotSizingMethod;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $supplyReplenishmentMethod;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $supplyTimeFence;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $supplyType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $taxCode;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $taxSchedule;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $thumbnailUrl;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $totalValue;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $trackLandedCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $transferPrice;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $unitsType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $upcCode;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $urlComponent;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $useBins;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $useComponentYield;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $useMarginalRates;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $vendor;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $vendorCode;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $vendorCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $vendorCostEntered;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $vendorName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $vendorPriceCurrency;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $vsoeDeferral;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $vsoeDelivered;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $vsoePermitDiscount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $vsoePrice;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $webSite;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $weight;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $yahooProductFeed;

    /**
     * @access public
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"account" => "SearchMultiSelectField",
    	"accountingBook" => "SearchMultiSelectField",
    	"accountingBookAmortization" => "SearchMultiSelectField",
    	"accountingBookRevRecSchedule" => "SearchMultiSelectField",
    	"allowedShippingMethod" => "SearchMultiSelectField",
    	"alternateDemandSourceItem" => "SearchMultiSelectField",
    	"atpLeadTime" => "SearchDoubleField",
    	"atpMethod" => "SearchEnumMultiSelectField",
    	"autoLeadTime" => "SearchBooleanField",
    	"autoPreferredStockLevel" => "SearchBooleanField",
    	"autoReorderPoint" => "SearchBooleanField",
    	"availableToPartners" => "SearchBooleanField",
    	"averageCost" => "SearchDoubleField",
    	"backwardConsumptionDays" => "SearchLongField",
    	"binNumber" => "SearchStringField",
    	"binOnHandAvail" => "SearchDoubleField",
    	"binOnHandCount" => "SearchDoubleField",
    	"bomQuantity" => "SearchDoubleField",
    	"buildEntireAssembly" => "SearchBooleanField",
    	"buildTime" => "SearchDoubleField",
    	"buyItNowPrice" => "SearchDoubleField",
    	"caption" => "SearchStringField",
    	"category" => "SearchMultiSelectField",
    	"class" => "SearchMultiSelectField",
    	"component" => "SearchMultiSelectField",
    	"componentOf" => "SearchMultiSelectField",
    	"componentYield" => "SearchDoubleField",
    	"copyDescription" => "SearchBooleanField",
    	"correlatedItem" => "SearchMultiSelectField",
    	"correlatedItemCorrelation" => "SearchDoubleField",
    	"correlatedItemCount" => "SearchLongField",
    	"correlatedItemLift" => "SearchDoubleField",
    	"correlatedItemPurchaseRate" => "SearchDoubleField",
    	"cost" => "SearchDoubleField",
    	"costAccountingStatus" => "SearchEnumMultiSelectField",
    	"costCategory" => "SearchMultiSelectField",
    	"costEstimate" => "SearchDoubleField",
    	"costEstimateType" => "SearchEnumMultiSelectField",
    	"costingMethod" => "SearchEnumMultiSelectField",
    	"countryOfManufacture" => "SearchEnumMultiSelectField",
    	"created" => "SearchDateField",
    	"createJob" => "SearchBooleanField",
    	"dateViewed" => "SearchDateField",
    	"daysBeforeExpiration" => "SearchDoubleField",
    	"defaultReturnCost" => "SearchDoubleField",
    	"defaultShippingMethod" => "SearchMultiSelectField",
    	"deferRevRec" => "SearchBooleanField",
    	"demandModifier" => "SearchDoubleField",
    	"demandSource" => "SearchEnumMultiSelectField",
    	"demandTimeFence" => "SearchLongField",
    	"department" => "SearchMultiSelectField",
    	"displayIneBayStore" => "SearchBooleanField",
    	"displayName" => "SearchStringField",
    	"distributionCategory" => "SearchMultiSelectField",
    	"distributionNetwork" => "SearchMultiSelectField",
    	"dontShowPrice" => "SearchBooleanField",
    	"eBayItemDescription" => "SearchStringField",
    	"eBayItemSubtitle" => "SearchStringField",
    	"eBayItemTitle" => "SearchStringField",
    	"ebayRelistingOption" => "SearchEnumMultiSelectField",
    	"effectiveBomControl" => "SearchEnumMultiSelectField",
    	"effectiveDate" => "SearchDateField",
    	"effectiveRevision" => "SearchMultiSelectField",
    	"endAuctionsWhenOutOfStock" => "SearchBooleanField",
    	"excludeFromSitemap" => "SearchBooleanField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"featuredDescription" => "SearchStringField",
    	"feedDescription" => "SearchStringField",
    	"feedName" => "SearchStringField",
    	"fixedLotSize" => "SearchDoubleField",
    	"forwardConsumptionDays" => "SearchLongField",
    	"fraudRisk" => "SearchEnumMultiSelectField",
    	"froogleProductFeed" => "SearchBooleanField",
    	"fxCost" => "SearchDoubleField",
    	"generateAccruals" => "SearchBooleanField",
    	"giftCertAuthCode" => "SearchStringField",
    	"giftCertEmail" => "SearchStringField",
    	"giftCertExpDate" => "SearchDateField",
    	"giftCertFrom" => "SearchStringField",
    	"giftCertMsg" => "SearchStringField",
    	"giftCertOrigAmt" => "SearchStringField",
    	"giftCertRecipient" => "SearchStringField",
    	"imageUrl" => "SearchStringField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"inventoryLocation" => "SearchMultiSelectField",
    	"invtClassification" => "SearchEnumMultiSelectField",
    	"invtCountInterval" => "SearchLongField",
    	"isAvailable" => "SearchBooleanField",
    	"isDropShipItem" => "SearchBooleanField",
    	"isFulfillable" => "SearchBooleanField",
    	"isGcoCompliant" => "SearchBooleanField",
    	"isInactive" => "SearchBooleanField",
    	"isLotItem" => "SearchBooleanField",
    	"isOnline" => "SearchBooleanField",
    	"isPreferredVendor" => "SearchBooleanField",
    	"isSerialItem" => "SearchBooleanField",
    	"isSpecialOrderItem" => "SearchBooleanField",
    	"isSpecialWorkOrderItem" => "SearchBooleanField",
    	"issueProduct" => "SearchMultiSelectField",
    	"isTaxable" => "SearchBooleanField",
    	"isVsoeBundle" => "SearchBooleanField",
    	"isWip" => "SearchBooleanField",
    	"itemId" => "SearchStringField",
    	"itemUrl" => "SearchStringField",
    	"lastInvtCountDate" => "SearchDateField",
    	"lastModifiedDate" => "SearchDateField",
    	"lastPurchasePrice" => "SearchDoubleField",
    	"lastQuantityAvailableChange" => "SearchDateField",
    	"leadTime" => "SearchLongField",
    	"listingDuration" => "SearchEnumMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"locationAtpLeadTime" => "SearchDoubleField",
    	"locationAverageCost" => "SearchDoubleField",
    	"locationBuildTime" => "SearchDoubleField",
    	"locationCost" => "SearchDoubleField",
    	"locationCostAccountingStatus" => "SearchEnumMultiSelectField",
    	"locationDefaultReturnCost" => "SearchDoubleField",
    	"locationDemandSource" => "SearchEnumMultiSelectField",
    	"locationDemandTimeFence" => "SearchLongField",
    	"locationFixedLotSize" => "SearchDoubleField",
    	"locationInventoryCostTemplate" => "SearchMultiSelectField",
    	"locationInvtClassification" => "SearchEnumMultiSelectField",
    	"locationInvtCountInterval" => "SearchLongField",
    	"locationLastInvtCountDate" => "SearchDateField",
    	"locationLeadTime" => "SearchLongField",
    	"locationNextInvtCountDate" => "SearchDateField",
    	"locationPeriodicLotSizeDays" => "SearchLongField",
    	"locationPeriodicLotSizeType" => "SearchEnumMultiSelectField",
    	"locationPreferredStockLevel" => "SearchDoubleField",
    	"locationQuantityAvailable" => "SearchDoubleField",
    	"locationQuantityBackOrdered" => "SearchDoubleField",
    	"locationQuantityCommitted" => "SearchDoubleField",
    	"locationQuantityInTransit" => "SearchDoubleField",
    	"locationQuantityOnHand" => "SearchDoubleField",
    	"locationQuantityOnOrder" => "SearchDoubleField",
    	"locationReorderPoint" => "SearchDoubleField",
    	"locationRescheduleInDays" => "SearchLongField",
    	"locationRescheduleOutDays" => "SearchLongField",
    	"locationSafetyStockLevel" => "SearchDoubleField",
    	"locationSupplyLotSizingMethod" => "SearchEnumMultiSelectField",
    	"locationSupplyTimeFence" => "SearchLongField",
    	"locationSupplyType" => "SearchEnumMultiSelectField",
    	"locationTotalValue" => "SearchDoubleField",
    	"locBackwardConsumptionDays" => "SearchLongField",
    	"locForwardConsumptionDays" => "SearchLongField",
    	"manufacturer" => "SearchStringField",
    	"manufactureraddr1" => "SearchStringField",
    	"manufacturerCity" => "SearchStringField",
    	"manufacturerState" => "SearchStringField",
    	"manufacturerTariff" => "SearchStringField",
    	"manufacturerTaxId" => "SearchStringField",
    	"manufacturerZip" => "SearchStringField",
    	"manufacturingChargeItem" => "SearchBooleanField",
    	"matchBillToReceipt" => "SearchBooleanField",
    	"matrix" => "SearchBooleanField",
    	"matrixChild" => "SearchBooleanField",
    	"metaTagHtml" => "SearchStringField",
    	"minimumQuantity" => "SearchLongField",
    	"mossApplies" => "SearchBooleanField",
    	"mpn" => "SearchStringField",
    	"multManufactureAddr" => "SearchBooleanField",
    	"nexTagCategory" => "SearchStringField",
    	"nexTagProductFeed" => "SearchBooleanField",
    	"nextInvtCountDate" => "SearchDateField",
    	"numActiveListings" => "SearchLongField",
    	"numberAllowedDownloads" => "SearchDoubleField",
    	"numCurrentlyListed" => "SearchLongField",
    	"obsoleteDate" => "SearchDateField",
    	"obsoleteRevision" => "SearchMultiSelectField",
    	"offerSupport" => "SearchBooleanField",
    	"onlineCustomerPrice" => "SearchDoubleField",
    	"onSpecial" => "SearchBooleanField",
    	"otherVendor" => "SearchMultiSelectField",
    	"outOfStockBehavior" => "SearchMultiSelectField",
    	"overallQuantityPricingType" => "SearchEnumMultiSelectField",
    	"overheadType" => "SearchEnumMultiSelectField",
    	"pageTitle" => "SearchStringField",
    	"parent" => "SearchMultiSelectField",
    	"periodicLotSizeDays" => "SearchLongField",
    	"periodicLotSizeType" => "SearchEnumMultiSelectField",
    	"preferenceCriterion" => "SearchStringField",
    	"preferredBin" => "SearchBooleanField",
    	"preferredLocation" => "SearchMultiSelectField",
    	"preferredStockLevel" => "SearchDoubleField",
    	"preferredStockLevelDays" => "SearchLongField",
    	"price" => "SearchDoubleField",
    	"pricesIncludeTax" => "SearchBooleanField",
    	"pricingGroup" => "SearchMultiSelectField",
    	"primaryCategory" => "SearchLongField",
    	"purchaseOrderAmount" => "SearchDoubleField",
    	"purchaseOrderQuantity" => "SearchDoubleField",
    	"purchaseOrderQuantityDiff" => "SearchDoubleField",
    	"purchaseUnit" => "SearchMultiSelectField",
    	"quantityAvailable" => "SearchDoubleField",
    	"quantityBackOrdered" => "SearchDoubleField",
    	"quantityCommitted" => "SearchDoubleField",
    	"quantityOnHand" => "SearchDoubleField",
    	"quantityOnOrder" => "SearchDoubleField",
    	"quantityPricingSchedule" => "SearchMultiSelectField",
    	"receiptAmount" => "SearchDoubleField",
    	"receiptQuantity" => "SearchDoubleField",
    	"receiptQuantityDiff" => "SearchDoubleField",
    	"reorderMultiple" => "SearchLongField",
    	"reorderPoint" => "SearchDoubleField",
    	"rescheduleInDays" => "SearchLongField",
    	"rescheduleOutDays" => "SearchLongField",
    	"reservePrice" => "SearchDoubleField",
    	"revRecSchedule" => "SearchMultiSelectField",
    	"roundUpAsComponent" => "SearchBooleanField",
    	"safetyStockLevel" => "SearchDoubleField",
    	"safetyStockLevelDays" => "SearchLongField",
    	"salesDescription" => "SearchStringField",
    	"saleUnit" => "SearchMultiSelectField",
    	"sameAsPrimaryBookAmortization" => "SearchBooleanField",
    	"sameAsPrimaryBookRevRec" => "SearchBooleanField",
    	"scheduleBCode" => "SearchEnumMultiSelectField",
    	"scheduleBNumber" => "SearchStringField",
    	"scheduleBQuantity" => "SearchStringField",
    	"searchKeywords" => "SearchStringField",
    	"seasonalDemand" => "SearchBooleanField",
    	"sellOnEBay" => "SearchBooleanField",
    	"serialNumber" => "SearchStringField",
    	"serialNumberLocation" => "SearchMultiSelectField",
    	"shipIndividually" => "SearchBooleanField",
    	"shipPackage" => "SearchMultiSelectField",
    	"shippingCarrier" => "SearchEnumMultiSelectField",
    	"shippingRate" => "SearchDoubleField",
    	"shoppingDotComCategory" => "SearchStringField",
    	"shoppingProductFeed" => "SearchBooleanField",
    	"shopzillaCategoryId" => "SearchLongField",
    	"shopzillaProductFeed" => "SearchBooleanField",
    	"sitemapPriority" => "SearchEnumMultiSelectField",
    	"softDescriptor" => "SearchMultiSelectField",
    	"startingPrice" => "SearchDoubleField",
    	"stockDescription" => "SearchStringField",
    	"stockUnit" => "SearchMultiSelectField",
    	"storeDescription" => "SearchStringField",
    	"subsidiary" => "SearchMultiSelectField",
    	"subType" => "SearchEnumMultiSelectField",
    	"supplyLotSizingMethod" => "SearchEnumMultiSelectField",
    	"supplyReplenishmentMethod" => "SearchEnumMultiSelectField",
    	"supplyTimeFence" => "SearchLongField",
    	"supplyType" => "SearchEnumMultiSelectField",
    	"taxCode" => "SearchMultiSelectField",
    	"taxSchedule" => "SearchMultiSelectField",
    	"thumbnailUrl" => "SearchStringField",
    	"totalValue" => "SearchDoubleField",
    	"trackLandedCost" => "SearchBooleanField",
    	"transferPrice" => "SearchDoubleField",
    	"type" => "SearchEnumMultiSelectField",
    	"unitsType" => "SearchMultiSelectField",
    	"upcCode" => "SearchStringField",
    	"urlComponent" => "SearchStringField",
    	"useBins" => "SearchBooleanField",
    	"useComponentYield" => "SearchBooleanField",
    	"useMarginalRates" => "SearchBooleanField",
    	"vendor" => "SearchMultiSelectField",
    	"vendorCode" => "SearchStringField",
    	"vendorCost" => "SearchDoubleField",
    	"vendorCostEntered" => "SearchDoubleField",
    	"vendorName" => "SearchStringField",
    	"vendorPriceCurrency" => "SearchMultiSelectField",
    	"vsoeDeferral" => "SearchEnumMultiSelectField",
    	"vsoeDelivered" => "SearchBooleanField",
    	"vsoePermitDiscount" => "SearchEnumMultiSelectField",
    	"vsoePrice" => "SearchDoubleField",
    	"webSite" => "SearchMultiSelectField",
    	"weight" => "SearchDoubleField",
    	"yahooProductFeed" => "SearchBooleanField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set account
     *
     * @param SearchMultiSelectField $account
     * @return ItemSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return SearchMultiSelectField
     */
    public function getAccount() {
        return $this->account;
    }


    /**
     * Set accountingBook
     *
     * @param SearchMultiSelectField $accountingBook
     * @return ItemSearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook) {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * Get accountingBook
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBook() {
        return $this->accountingBook;
    }


    /**
     * Set accountingBookAmortization
     *
     * @param SearchMultiSelectField $accountingBookAmortization
     * @return ItemSearchBasic
     */
    public function setAccountingBookAmortization(SearchMultiSelectField $accountingBookAmortization) {
        $this->accountingBookAmortization = $accountingBookAmortization;
        return $this;
    }

    /**
     * Get accountingBookAmortization
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBookAmortization() {
        return $this->accountingBookAmortization;
    }


    /**
     * Set accountingBookRevRecSchedule
     *
     * @param SearchMultiSelectField $accountingBookRevRecSchedule
     * @return ItemSearchBasic
     */
    public function setAccountingBookRevRecSchedule(SearchMultiSelectField $accountingBookRevRecSchedule) {
        $this->accountingBookRevRecSchedule = $accountingBookRevRecSchedule;
        return $this;
    }

    /**
     * Get accountingBookRevRecSchedule
     *
     * @return SearchMultiSelectField
     */
    public function getAccountingBookRevRecSchedule() {
        return $this->accountingBookRevRecSchedule;
    }


    /**
     * Set allowedShippingMethod
     *
     * @param SearchMultiSelectField $allowedShippingMethod
     * @return ItemSearchBasic
     */
    public function setAllowedShippingMethod(SearchMultiSelectField $allowedShippingMethod) {
        $this->allowedShippingMethod = $allowedShippingMethod;
        return $this;
    }

    /**
     * Get allowedShippingMethod
     *
     * @return SearchMultiSelectField
     */
    public function getAllowedShippingMethod() {
        return $this->allowedShippingMethod;
    }


    /**
     * Set alternateDemandSourceItem
     *
     * @param SearchMultiSelectField $alternateDemandSourceItem
     * @return ItemSearchBasic
     */
    public function setAlternateDemandSourceItem(SearchMultiSelectField $alternateDemandSourceItem) {
        $this->alternateDemandSourceItem = $alternateDemandSourceItem;
        return $this;
    }

    /**
     * Get alternateDemandSourceItem
     *
     * @return SearchMultiSelectField
     */
    public function getAlternateDemandSourceItem() {
        return $this->alternateDemandSourceItem;
    }


    /**
     * Set atpLeadTime
     *
     * @param SearchDoubleField $atpLeadTime
     * @return ItemSearchBasic
     */
    public function setAtpLeadTime(SearchDoubleField $atpLeadTime) {
        $this->atpLeadTime = $atpLeadTime;
        return $this;
    }

    /**
     * Get atpLeadTime
     *
     * @return SearchDoubleField
     */
    public function getAtpLeadTime() {
        return $this->atpLeadTime;
    }


    /**
     * Set atpMethod
     *
     * @param SearchEnumMultiSelectField $atpMethod
     * @return ItemSearchBasic
     */
    public function setAtpMethod(SearchEnumMultiSelectField $atpMethod) {
        $this->atpMethod = $atpMethod;
        return $this;
    }

    /**
     * Get atpMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAtpMethod() {
        return $this->atpMethod;
    }


    /**
     * Set autoLeadTime
     *
     * @param SearchBooleanField $autoLeadTime
     * @return ItemSearchBasic
     */
    public function setAutoLeadTime(SearchBooleanField $autoLeadTime) {
        $this->autoLeadTime = $autoLeadTime;
        return $this;
    }

    /**
     * Get autoLeadTime
     *
     * @return SearchBooleanField
     */
    public function getAutoLeadTime() {
        return $this->autoLeadTime;
    }


    /**
     * Set autoPreferredStockLevel
     *
     * @param SearchBooleanField $autoPreferredStockLevel
     * @return ItemSearchBasic
     */
    public function setAutoPreferredStockLevel(SearchBooleanField $autoPreferredStockLevel) {
        $this->autoPreferredStockLevel = $autoPreferredStockLevel;
        return $this;
    }

    /**
     * Get autoPreferredStockLevel
     *
     * @return SearchBooleanField
     */
    public function getAutoPreferredStockLevel() {
        return $this->autoPreferredStockLevel;
    }


    /**
     * Set autoReorderPoint
     *
     * @param SearchBooleanField $autoReorderPoint
     * @return ItemSearchBasic
     */
    public function setAutoReorderPoint(SearchBooleanField $autoReorderPoint) {
        $this->autoReorderPoint = $autoReorderPoint;
        return $this;
    }

    /**
     * Get autoReorderPoint
     *
     * @return SearchBooleanField
     */
    public function getAutoReorderPoint() {
        return $this->autoReorderPoint;
    }


    /**
     * Set availableToPartners
     *
     * @param SearchBooleanField $availableToPartners
     * @return ItemSearchBasic
     */
    public function setAvailableToPartners(SearchBooleanField $availableToPartners) {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * Get availableToPartners
     *
     * @return SearchBooleanField
     */
    public function getAvailableToPartners() {
        return $this->availableToPartners;
    }


    /**
     * Set averageCost
     *
     * @param SearchDoubleField $averageCost
     * @return ItemSearchBasic
     */
    public function setAverageCost(SearchDoubleField $averageCost) {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * Get averageCost
     *
     * @return SearchDoubleField
     */
    public function getAverageCost() {
        return $this->averageCost;
    }


    /**
     * Set backwardConsumptionDays
     *
     * @param SearchLongField $backwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setBackwardConsumptionDays(SearchLongField $backwardConsumptionDays) {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * Get backwardConsumptionDays
     *
     * @return SearchLongField
     */
    public function getBackwardConsumptionDays() {
        return $this->backwardConsumptionDays;
    }


    /**
     * Set binNumber
     *
     * @param SearchStringField $binNumber
     * @return ItemSearchBasic
     */
    public function setBinNumber(SearchStringField $binNumber) {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * Get binNumber
     *
     * @return SearchStringField
     */
    public function getBinNumber() {
        return $this->binNumber;
    }


    /**
     * Set binOnHandAvail
     *
     * @param SearchDoubleField $binOnHandAvail
     * @return ItemSearchBasic
     */
    public function setBinOnHandAvail(SearchDoubleField $binOnHandAvail) {
        $this->binOnHandAvail = $binOnHandAvail;
        return $this;
    }

    /**
     * Get binOnHandAvail
     *
     * @return SearchDoubleField
     */
    public function getBinOnHandAvail() {
        return $this->binOnHandAvail;
    }


    /**
     * Set binOnHandCount
     *
     * @param SearchDoubleField $binOnHandCount
     * @return ItemSearchBasic
     */
    public function setBinOnHandCount(SearchDoubleField $binOnHandCount) {
        $this->binOnHandCount = $binOnHandCount;
        return $this;
    }

    /**
     * Get binOnHandCount
     *
     * @return SearchDoubleField
     */
    public function getBinOnHandCount() {
        return $this->binOnHandCount;
    }


    /**
     * Set bomQuantity
     *
     * @param SearchDoubleField $bomQuantity
     * @return ItemSearchBasic
     */
    public function setBomQuantity(SearchDoubleField $bomQuantity) {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * Get bomQuantity
     *
     * @return SearchDoubleField
     */
    public function getBomQuantity() {
        return $this->bomQuantity;
    }


    /**
     * Set buildEntireAssembly
     *
     * @param SearchBooleanField $buildEntireAssembly
     * @return ItemSearchBasic
     */
    public function setBuildEntireAssembly(SearchBooleanField $buildEntireAssembly) {
        $this->buildEntireAssembly = $buildEntireAssembly;
        return $this;
    }

    /**
     * Get buildEntireAssembly
     *
     * @return SearchBooleanField
     */
    public function getBuildEntireAssembly() {
        return $this->buildEntireAssembly;
    }


    /**
     * Set buildTime
     *
     * @param SearchDoubleField $buildTime
     * @return ItemSearchBasic
     */
    public function setBuildTime(SearchDoubleField $buildTime) {
        $this->buildTime = $buildTime;
        return $this;
    }

    /**
     * Get buildTime
     *
     * @return SearchDoubleField
     */
    public function getBuildTime() {
        return $this->buildTime;
    }


    /**
     * Set buyItNowPrice
     *
     * @param SearchDoubleField $buyItNowPrice
     * @return ItemSearchBasic
     */
    public function setBuyItNowPrice(SearchDoubleField $buyItNowPrice) {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }

    /**
     * Get buyItNowPrice
     *
     * @return SearchDoubleField
     */
    public function getBuyItNowPrice() {
        return $this->buyItNowPrice;
    }


    /**
     * Set caption
     *
     * @param SearchStringField $caption
     * @return ItemSearchBasic
     */
    public function setCaption(SearchStringField $caption) {
        $this->caption = $caption;
        return $this;
    }

    /**
     * Get caption
     *
     * @return SearchStringField
     */
    public function getCaption() {
        return $this->caption;
    }


    /**
     * Set category
     *
     * @param SearchMultiSelectField $category
     * @return ItemSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return SearchMultiSelectField
     */
    public function getCategory() {
        return $this->category;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return ItemSearchBasic
     */
    public function setClass(SearchMultiSelectField $class) {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return SearchMultiSelectField
     */
    public function getClass() {
        return $this->class;
    }


    /**
     * Set component
     *
     * @param SearchMultiSelectField $component
     * @return ItemSearchBasic
     */
    public function setComponent(SearchMultiSelectField $component) {
        $this->component = $component;
        return $this;
    }

    /**
     * Get component
     *
     * @return SearchMultiSelectField
     */
    public function getComponent() {
        return $this->component;
    }


    /**
     * Set componentOf
     *
     * @param SearchMultiSelectField $componentOf
     * @return ItemSearchBasic
     */
    public function setComponentOf(SearchMultiSelectField $componentOf) {
        $this->componentOf = $componentOf;
        return $this;
    }

    /**
     * Get componentOf
     *
     * @return SearchMultiSelectField
     */
    public function getComponentOf() {
        return $this->componentOf;
    }


    /**
     * Set componentYield
     *
     * @param SearchDoubleField $componentYield
     * @return ItemSearchBasic
     */
    public function setComponentYield(SearchDoubleField $componentYield) {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * Get componentYield
     *
     * @return SearchDoubleField
     */
    public function getComponentYield() {
        return $this->componentYield;
    }


    /**
     * Set copyDescription
     *
     * @param SearchBooleanField $copyDescription
     * @return ItemSearchBasic
     */
    public function setCopyDescription(SearchBooleanField $copyDescription) {
        $this->copyDescription = $copyDescription;
        return $this;
    }

    /**
     * Get copyDescription
     *
     * @return SearchBooleanField
     */
    public function getCopyDescription() {
        return $this->copyDescription;
    }


    /**
     * Set correlatedItem
     *
     * @param SearchMultiSelectField $correlatedItem
     * @return ItemSearchBasic
     */
    public function setCorrelatedItem(SearchMultiSelectField $correlatedItem) {
        $this->correlatedItem = $correlatedItem;
        return $this;
    }

    /**
     * Get correlatedItem
     *
     * @return SearchMultiSelectField
     */
    public function getCorrelatedItem() {
        return $this->correlatedItem;
    }


    /**
     * Set correlatedItemCorrelation
     *
     * @param SearchDoubleField $correlatedItemCorrelation
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemCorrelation(SearchDoubleField $correlatedItemCorrelation) {
        $this->correlatedItemCorrelation = $correlatedItemCorrelation;
        return $this;
    }

    /**
     * Get correlatedItemCorrelation
     *
     * @return SearchDoubleField
     */
    public function getCorrelatedItemCorrelation() {
        return $this->correlatedItemCorrelation;
    }


    /**
     * Set correlatedItemCount
     *
     * @param SearchLongField $correlatedItemCount
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemCount(SearchLongField $correlatedItemCount) {
        $this->correlatedItemCount = $correlatedItemCount;
        return $this;
    }

    /**
     * Get correlatedItemCount
     *
     * @return SearchLongField
     */
    public function getCorrelatedItemCount() {
        return $this->correlatedItemCount;
    }


    /**
     * Set correlatedItemLift
     *
     * @param SearchDoubleField $correlatedItemLift
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemLift(SearchDoubleField $correlatedItemLift) {
        $this->correlatedItemLift = $correlatedItemLift;
        return $this;
    }

    /**
     * Get correlatedItemLift
     *
     * @return SearchDoubleField
     */
    public function getCorrelatedItemLift() {
        return $this->correlatedItemLift;
    }


    /**
     * Set correlatedItemPurchaseRate
     *
     * @param SearchDoubleField $correlatedItemPurchaseRate
     * @return ItemSearchBasic
     */
    public function setCorrelatedItemPurchaseRate(SearchDoubleField $correlatedItemPurchaseRate) {
        $this->correlatedItemPurchaseRate = $correlatedItemPurchaseRate;
        return $this;
    }

    /**
     * Get correlatedItemPurchaseRate
     *
     * @return SearchDoubleField
     */
    public function getCorrelatedItemPurchaseRate() {
        return $this->correlatedItemPurchaseRate;
    }


    /**
     * Set cost
     *
     * @param SearchDoubleField $cost
     * @return ItemSearchBasic
     */
    public function setCost(SearchDoubleField $cost) {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Get cost
     *
     * @return SearchDoubleField
     */
    public function getCost() {
        return $this->cost;
    }


    /**
     * Set costAccountingStatus
     *
     * @param SearchEnumMultiSelectField $costAccountingStatus
     * @return ItemSearchBasic
     */
    public function setCostAccountingStatus(SearchEnumMultiSelectField $costAccountingStatus) {
        $this->costAccountingStatus = $costAccountingStatus;
        return $this;
    }

    /**
     * Get costAccountingStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCostAccountingStatus() {
        return $this->costAccountingStatus;
    }


    /**
     * Set costCategory
     *
     * @param SearchMultiSelectField $costCategory
     * @return ItemSearchBasic
     */
    public function setCostCategory(SearchMultiSelectField $costCategory) {
        $this->costCategory = $costCategory;
        return $this;
    }

    /**
     * Get costCategory
     *
     * @return SearchMultiSelectField
     */
    public function getCostCategory() {
        return $this->costCategory;
    }


    /**
     * Set costEstimate
     *
     * @param SearchDoubleField $costEstimate
     * @return ItemSearchBasic
     */
    public function setCostEstimate(SearchDoubleField $costEstimate) {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * Get costEstimate
     *
     * @return SearchDoubleField
     */
    public function getCostEstimate() {
        return $this->costEstimate;
    }


    /**
     * Set costEstimateType
     *
     * @param SearchEnumMultiSelectField $costEstimateType
     * @return ItemSearchBasic
     */
    public function setCostEstimateType(SearchEnumMultiSelectField $costEstimateType) {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * Get costEstimateType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCostEstimateType() {
        return $this->costEstimateType;
    }


    /**
     * Set costingMethod
     *
     * @param SearchEnumMultiSelectField $costingMethod
     * @return ItemSearchBasic
     */
    public function setCostingMethod(SearchEnumMultiSelectField $costingMethod) {
        $this->costingMethod = $costingMethod;
        return $this;
    }

    /**
     * Get costingMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCostingMethod() {
        return $this->costingMethod;
    }


    /**
     * Set countryOfManufacture
     *
     * @param SearchEnumMultiSelectField $countryOfManufacture
     * @return ItemSearchBasic
     */
    public function setCountryOfManufacture(SearchEnumMultiSelectField $countryOfManufacture) {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }

    /**
     * Get countryOfManufacture
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCountryOfManufacture() {
        return $this->countryOfManufacture;
    }


    /**
     * Set created
     *
     * @param SearchDateField $created
     * @return ItemSearchBasic
     */
    public function setCreated(SearchDateField $created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return SearchDateField
     */
    public function getCreated() {
        return $this->created;
    }


    /**
     * Set createJob
     *
     * @param SearchBooleanField $createJob
     * @return ItemSearchBasic
     */
    public function setCreateJob(SearchBooleanField $createJob) {
        $this->createJob = $createJob;
        return $this;
    }

    /**
     * Get createJob
     *
     * @return SearchBooleanField
     */
    public function getCreateJob() {
        return $this->createJob;
    }


    /**
     * Set dateViewed
     *
     * @param SearchDateField $dateViewed
     * @return ItemSearchBasic
     */
    public function setDateViewed(SearchDateField $dateViewed) {
        $this->dateViewed = $dateViewed;
        return $this;
    }

    /**
     * Get dateViewed
     *
     * @return SearchDateField
     */
    public function getDateViewed() {
        return $this->dateViewed;
    }


    /**
     * Set daysBeforeExpiration
     *
     * @param SearchDoubleField $daysBeforeExpiration
     * @return ItemSearchBasic
     */
    public function setDaysBeforeExpiration(SearchDoubleField $daysBeforeExpiration) {
        $this->daysBeforeExpiration = $daysBeforeExpiration;
        return $this;
    }

    /**
     * Get daysBeforeExpiration
     *
     * @return SearchDoubleField
     */
    public function getDaysBeforeExpiration() {
        return $this->daysBeforeExpiration;
    }


    /**
     * Set defaultReturnCost
     *
     * @param SearchDoubleField $defaultReturnCost
     * @return ItemSearchBasic
     */
    public function setDefaultReturnCost(SearchDoubleField $defaultReturnCost) {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * Get defaultReturnCost
     *
     * @return SearchDoubleField
     */
    public function getDefaultReturnCost() {
        return $this->defaultReturnCost;
    }


    /**
     * Set defaultShippingMethod
     *
     * @param SearchMultiSelectField $defaultShippingMethod
     * @return ItemSearchBasic
     */
    public function setDefaultShippingMethod(SearchMultiSelectField $defaultShippingMethod) {
        $this->defaultShippingMethod = $defaultShippingMethod;
        return $this;
    }

    /**
     * Get defaultShippingMethod
     *
     * @return SearchMultiSelectField
     */
    public function getDefaultShippingMethod() {
        return $this->defaultShippingMethod;
    }


    /**
     * Set deferRevRec
     *
     * @param SearchBooleanField $deferRevRec
     * @return ItemSearchBasic
     */
    public function setDeferRevRec(SearchBooleanField $deferRevRec) {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * Get deferRevRec
     *
     * @return SearchBooleanField
     */
    public function getDeferRevRec() {
        return $this->deferRevRec;
    }


    /**
     * Set demandModifier
     *
     * @param SearchDoubleField $demandModifier
     * @return ItemSearchBasic
     */
    public function setDemandModifier(SearchDoubleField $demandModifier) {
        $this->demandModifier = $demandModifier;
        return $this;
    }

    /**
     * Get demandModifier
     *
     * @return SearchDoubleField
     */
    public function getDemandModifier() {
        return $this->demandModifier;
    }


    /**
     * Set demandSource
     *
     * @param SearchEnumMultiSelectField $demandSource
     * @return ItemSearchBasic
     */
    public function setDemandSource(SearchEnumMultiSelectField $demandSource) {
        $this->demandSource = $demandSource;
        return $this;
    }

    /**
     * Get demandSource
     *
     * @return SearchEnumMultiSelectField
     */
    public function getDemandSource() {
        return $this->demandSource;
    }


    /**
     * Set demandTimeFence
     *
     * @param SearchLongField $demandTimeFence
     * @return ItemSearchBasic
     */
    public function setDemandTimeFence(SearchLongField $demandTimeFence) {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * Get demandTimeFence
     *
     * @return SearchLongField
     */
    public function getDemandTimeFence() {
        return $this->demandTimeFence;
    }


    /**
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return ItemSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department) {
        $this->department = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return SearchMultiSelectField
     */
    public function getDepartment() {
        return $this->department;
    }


    /**
     * Set displayIneBayStore
     *
     * @param SearchBooleanField $displayIneBayStore
     * @return ItemSearchBasic
     */
    public function setDisplayIneBayStore(SearchBooleanField $displayIneBayStore) {
        $this->displayIneBayStore = $displayIneBayStore;
        return $this;
    }

    /**
     * Get displayIneBayStore
     *
     * @return SearchBooleanField
     */
    public function getDisplayIneBayStore() {
        return $this->displayIneBayStore;
    }


    /**
     * Set displayName
     *
     * @param SearchStringField $displayName
     * @return ItemSearchBasic
     */
    public function setDisplayName(SearchStringField $displayName) {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Get displayName
     *
     * @return SearchStringField
     */
    public function getDisplayName() {
        return $this->displayName;
    }


    /**
     * Set distributionCategory
     *
     * @param SearchMultiSelectField $distributionCategory
     * @return ItemSearchBasic
     */
    public function setDistributionCategory(SearchMultiSelectField $distributionCategory) {
        $this->distributionCategory = $distributionCategory;
        return $this;
    }

    /**
     * Get distributionCategory
     *
     * @return SearchMultiSelectField
     */
    public function getDistributionCategory() {
        return $this->distributionCategory;
    }


    /**
     * Set distributionNetwork
     *
     * @param SearchMultiSelectField $distributionNetwork
     * @return ItemSearchBasic
     */
    public function setDistributionNetwork(SearchMultiSelectField $distributionNetwork) {
        $this->distributionNetwork = $distributionNetwork;
        return $this;
    }

    /**
     * Get distributionNetwork
     *
     * @return SearchMultiSelectField
     */
    public function getDistributionNetwork() {
        return $this->distributionNetwork;
    }


    /**
     * Set dontShowPrice
     *
     * @param SearchBooleanField $dontShowPrice
     * @return ItemSearchBasic
     */
    public function setDontShowPrice(SearchBooleanField $dontShowPrice) {
        $this->dontShowPrice = $dontShowPrice;
        return $this;
    }

    /**
     * Get dontShowPrice
     *
     * @return SearchBooleanField
     */
    public function getDontShowPrice() {
        return $this->dontShowPrice;
    }


    /**
     * Set eBayItemDescription
     *
     * @param SearchStringField $eBayItemDescription
     * @return ItemSearchBasic
     */
    public function setEBayItemDescription(SearchStringField $eBayItemDescription) {
        $this->eBayItemDescription = $eBayItemDescription;
        return $this;
    }

    /**
     * Get eBayItemDescription
     *
     * @return SearchStringField
     */
    public function getEBayItemDescription() {
        return $this->eBayItemDescription;
    }


    /**
     * Set eBayItemSubtitle
     *
     * @param SearchStringField $eBayItemSubtitle
     * @return ItemSearchBasic
     */
    public function setEBayItemSubtitle(SearchStringField $eBayItemSubtitle) {
        $this->eBayItemSubtitle = $eBayItemSubtitle;
        return $this;
    }

    /**
     * Get eBayItemSubtitle
     *
     * @return SearchStringField
     */
    public function getEBayItemSubtitle() {
        return $this->eBayItemSubtitle;
    }


    /**
     * Set eBayItemTitle
     *
     * @param SearchStringField $eBayItemTitle
     * @return ItemSearchBasic
     */
    public function setEBayItemTitle(SearchStringField $eBayItemTitle) {
        $this->eBayItemTitle = $eBayItemTitle;
        return $this;
    }

    /**
     * Get eBayItemTitle
     *
     * @return SearchStringField
     */
    public function getEBayItemTitle() {
        return $this->eBayItemTitle;
    }


    /**
     * Set ebayRelistingOption
     *
     * @param SearchEnumMultiSelectField $ebayRelistingOption
     * @return ItemSearchBasic
     */
    public function setEbayRelistingOption(SearchEnumMultiSelectField $ebayRelistingOption) {
        $this->ebayRelistingOption = $ebayRelistingOption;
        return $this;
    }

    /**
     * Get ebayRelistingOption
     *
     * @return SearchEnumMultiSelectField
     */
    public function getEbayRelistingOption() {
        return $this->ebayRelistingOption;
    }


    /**
     * Set effectiveBomControl
     *
     * @param SearchEnumMultiSelectField $effectiveBomControl
     * @return ItemSearchBasic
     */
    public function setEffectiveBomControl(SearchEnumMultiSelectField $effectiveBomControl) {
        $this->effectiveBomControl = $effectiveBomControl;
        return $this;
    }

    /**
     * Get effectiveBomControl
     *
     * @return SearchEnumMultiSelectField
     */
    public function getEffectiveBomControl() {
        return $this->effectiveBomControl;
    }


    /**
     * Set effectiveDate
     *
     * @param SearchDateField $effectiveDate
     * @return ItemSearchBasic
     */
    public function setEffectiveDate(SearchDateField $effectiveDate) {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return SearchDateField
     */
    public function getEffectiveDate() {
        return $this->effectiveDate;
    }


    /**
     * Set effectiveRevision
     *
     * @param SearchMultiSelectField $effectiveRevision
     * @return ItemSearchBasic
     */
    public function setEffectiveRevision(SearchMultiSelectField $effectiveRevision) {
        $this->effectiveRevision = $effectiveRevision;
        return $this;
    }

    /**
     * Get effectiveRevision
     *
     * @return SearchMultiSelectField
     */
    public function getEffectiveRevision() {
        return $this->effectiveRevision;
    }


    /**
     * Set endAuctionsWhenOutOfStock
     *
     * @param SearchBooleanField $endAuctionsWhenOutOfStock
     * @return ItemSearchBasic
     */
    public function setEndAuctionsWhenOutOfStock(SearchBooleanField $endAuctionsWhenOutOfStock) {
        $this->endAuctionsWhenOutOfStock = $endAuctionsWhenOutOfStock;
        return $this;
    }

    /**
     * Get endAuctionsWhenOutOfStock
     *
     * @return SearchBooleanField
     */
    public function getEndAuctionsWhenOutOfStock() {
        return $this->endAuctionsWhenOutOfStock;
    }


    /**
     * Set excludeFromSitemap
     *
     * @param SearchBooleanField $excludeFromSitemap
     * @return ItemSearchBasic
     */
    public function setExcludeFromSitemap(SearchBooleanField $excludeFromSitemap) {
        $this->excludeFromSitemap = $excludeFromSitemap;
        return $this;
    }

    /**
     * Get excludeFromSitemap
     *
     * @return SearchBooleanField
     */
    public function getExcludeFromSitemap() {
        return $this->excludeFromSitemap;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return ItemSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return SearchMultiSelectField
     */
    public function getExternalId() {
        return $this->externalId;
    }


    /**
     * Set externalIdString
     *
     * @param SearchStringField $externalIdString
     * @return ItemSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString) {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * Get externalIdString
     *
     * @return SearchStringField
     */
    public function getExternalIdString() {
        return $this->externalIdString;
    }


    /**
     * Set featuredDescription
     *
     * @param SearchStringField $featuredDescription
     * @return ItemSearchBasic
     */
    public function setFeaturedDescription(SearchStringField $featuredDescription) {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * Get featuredDescription
     *
     * @return SearchStringField
     */
    public function getFeaturedDescription() {
        return $this->featuredDescription;
    }


    /**
     * Set feedDescription
     *
     * @param SearchStringField $feedDescription
     * @return ItemSearchBasic
     */
    public function setFeedDescription(SearchStringField $feedDescription) {
        $this->feedDescription = $feedDescription;
        return $this;
    }

    /**
     * Get feedDescription
     *
     * @return SearchStringField
     */
    public function getFeedDescription() {
        return $this->feedDescription;
    }


    /**
     * Set feedName
     *
     * @param SearchStringField $feedName
     * @return ItemSearchBasic
     */
    public function setFeedName(SearchStringField $feedName) {
        $this->feedName = $feedName;
        return $this;
    }

    /**
     * Get feedName
     *
     * @return SearchStringField
     */
    public function getFeedName() {
        return $this->feedName;
    }


    /**
     * Set fixedLotSize
     *
     * @param SearchDoubleField $fixedLotSize
     * @return ItemSearchBasic
     */
    public function setFixedLotSize(SearchDoubleField $fixedLotSize) {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * Get fixedLotSize
     *
     * @return SearchDoubleField
     */
    public function getFixedLotSize() {
        return $this->fixedLotSize;
    }


    /**
     * Set forwardConsumptionDays
     *
     * @param SearchLongField $forwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setForwardConsumptionDays(SearchLongField $forwardConsumptionDays) {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * Get forwardConsumptionDays
     *
     * @return SearchLongField
     */
    public function getForwardConsumptionDays() {
        return $this->forwardConsumptionDays;
    }


    /**
     * Set fraudRisk
     *
     * @param SearchEnumMultiSelectField $fraudRisk
     * @return ItemSearchBasic
     */
    public function setFraudRisk(SearchEnumMultiSelectField $fraudRisk) {
        $this->fraudRisk = $fraudRisk;
        return $this;
    }

    /**
     * Get fraudRisk
     *
     * @return SearchEnumMultiSelectField
     */
    public function getFraudRisk() {
        return $this->fraudRisk;
    }


    /**
     * Set froogleProductFeed
     *
     * @param SearchBooleanField $froogleProductFeed
     * @return ItemSearchBasic
     */
    public function setFroogleProductFeed(SearchBooleanField $froogleProductFeed) {
        $this->froogleProductFeed = $froogleProductFeed;
        return $this;
    }

    /**
     * Get froogleProductFeed
     *
     * @return SearchBooleanField
     */
    public function getFroogleProductFeed() {
        return $this->froogleProductFeed;
    }


    /**
     * Set fxCost
     *
     * @param SearchDoubleField $fxCost
     * @return ItemSearchBasic
     */
    public function setFxCost(SearchDoubleField $fxCost) {
        $this->fxCost = $fxCost;
        return $this;
    }

    /**
     * Get fxCost
     *
     * @return SearchDoubleField
     */
    public function getFxCost() {
        return $this->fxCost;
    }


    /**
     * Set generateAccruals
     *
     * @param SearchBooleanField $generateAccruals
     * @return ItemSearchBasic
     */
    public function setGenerateAccruals(SearchBooleanField $generateAccruals) {
        $this->generateAccruals = $generateAccruals;
        return $this;
    }

    /**
     * Get generateAccruals
     *
     * @return SearchBooleanField
     */
    public function getGenerateAccruals() {
        return $this->generateAccruals;
    }


    /**
     * Set giftCertAuthCode
     *
     * @param SearchStringField $giftCertAuthCode
     * @return ItemSearchBasic
     */
    public function setGiftCertAuthCode(SearchStringField $giftCertAuthCode) {
        $this->giftCertAuthCode = $giftCertAuthCode;
        return $this;
    }

    /**
     * Get giftCertAuthCode
     *
     * @return SearchStringField
     */
    public function getGiftCertAuthCode() {
        return $this->giftCertAuthCode;
    }


    /**
     * Set giftCertEmail
     *
     * @param SearchStringField $giftCertEmail
     * @return ItemSearchBasic
     */
    public function setGiftCertEmail(SearchStringField $giftCertEmail) {
        $this->giftCertEmail = $giftCertEmail;
        return $this;
    }

    /**
     * Get giftCertEmail
     *
     * @return SearchStringField
     */
    public function getGiftCertEmail() {
        return $this->giftCertEmail;
    }


    /**
     * Set giftCertExpDate
     *
     * @param SearchDateField $giftCertExpDate
     * @return ItemSearchBasic
     */
    public function setGiftCertExpDate(SearchDateField $giftCertExpDate) {
        $this->giftCertExpDate = $giftCertExpDate;
        return $this;
    }

    /**
     * Get giftCertExpDate
     *
     * @return SearchDateField
     */
    public function getGiftCertExpDate() {
        return $this->giftCertExpDate;
    }


    /**
     * Set giftCertFrom
     *
     * @param SearchStringField $giftCertFrom
     * @return ItemSearchBasic
     */
    public function setGiftCertFrom(SearchStringField $giftCertFrom) {
        $this->giftCertFrom = $giftCertFrom;
        return $this;
    }

    /**
     * Get giftCertFrom
     *
     * @return SearchStringField
     */
    public function getGiftCertFrom() {
        return $this->giftCertFrom;
    }


    /**
     * Set giftCertMsg
     *
     * @param SearchStringField $giftCertMsg
     * @return ItemSearchBasic
     */
    public function setGiftCertMsg(SearchStringField $giftCertMsg) {
        $this->giftCertMsg = $giftCertMsg;
        return $this;
    }

    /**
     * Get giftCertMsg
     *
     * @return SearchStringField
     */
    public function getGiftCertMsg() {
        return $this->giftCertMsg;
    }


    /**
     * Set giftCertOrigAmt
     *
     * @param SearchStringField $giftCertOrigAmt
     * @return ItemSearchBasic
     */
    public function setGiftCertOrigAmt(SearchStringField $giftCertOrigAmt) {
        $this->giftCertOrigAmt = $giftCertOrigAmt;
        return $this;
    }

    /**
     * Get giftCertOrigAmt
     *
     * @return SearchStringField
     */
    public function getGiftCertOrigAmt() {
        return $this->giftCertOrigAmt;
    }


    /**
     * Set giftCertRecipient
     *
     * @param SearchStringField $giftCertRecipient
     * @return ItemSearchBasic
     */
    public function setGiftCertRecipient(SearchStringField $giftCertRecipient) {
        $this->giftCertRecipient = $giftCertRecipient;
        return $this;
    }

    /**
     * Get giftCertRecipient
     *
     * @return SearchStringField
     */
    public function getGiftCertRecipient() {
        return $this->giftCertRecipient;
    }


    /**
     * Set imageUrl
     *
     * @param SearchStringField $imageUrl
     * @return ItemSearchBasic
     */
    public function setImageUrl(SearchStringField $imageUrl) {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return SearchStringField
     */
    public function getImageUrl() {
        return $this->imageUrl;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return ItemSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return SearchMultiSelectField
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set internalIdNumber
     *
     * @param SearchLongField $internalIdNumber
     * @return ItemSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber) {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * Get internalIdNumber
     *
     * @return SearchLongField
     */
    public function getInternalIdNumber() {
        return $this->internalIdNumber;
    }


    /**
     * Set inventoryLocation
     *
     * @param SearchMultiSelectField $inventoryLocation
     * @return ItemSearchBasic
     */
    public function setInventoryLocation(SearchMultiSelectField $inventoryLocation) {
        $this->inventoryLocation = $inventoryLocation;
        return $this;
    }

    /**
     * Get inventoryLocation
     *
     * @return SearchMultiSelectField
     */
    public function getInventoryLocation() {
        return $this->inventoryLocation;
    }


    /**
     * Set invtClassification
     *
     * @param SearchEnumMultiSelectField $invtClassification
     * @return ItemSearchBasic
     */
    public function setInvtClassification(SearchEnumMultiSelectField $invtClassification) {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * Get invtClassification
     *
     * @return SearchEnumMultiSelectField
     */
    public function getInvtClassification() {
        return $this->invtClassification;
    }


    /**
     * Set invtCountInterval
     *
     * @param SearchLongField $invtCountInterval
     * @return ItemSearchBasic
     */
    public function setInvtCountInterval(SearchLongField $invtCountInterval) {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * Get invtCountInterval
     *
     * @return SearchLongField
     */
    public function getInvtCountInterval() {
        return $this->invtCountInterval;
    }


    /**
     * Set isAvailable
     *
     * @param SearchBooleanField $isAvailable
     * @return ItemSearchBasic
     */
    public function setIsAvailable(SearchBooleanField $isAvailable) {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return SearchBooleanField
     */
    public function getIsAvailable() {
        return $this->isAvailable;
    }


    /**
     * Set isDropShipItem
     *
     * @param SearchBooleanField $isDropShipItem
     * @return ItemSearchBasic
     */
    public function setIsDropShipItem(SearchBooleanField $isDropShipItem) {
        $this->isDropShipItem = $isDropShipItem;
        return $this;
    }

    /**
     * Get isDropShipItem
     *
     * @return SearchBooleanField
     */
    public function getIsDropShipItem() {
        return $this->isDropShipItem;
    }


    /**
     * Set isFulfillable
     *
     * @param SearchBooleanField $isFulfillable
     * @return ItemSearchBasic
     */
    public function setIsFulfillable(SearchBooleanField $isFulfillable) {
        $this->isFulfillable = $isFulfillable;
        return $this;
    }

    /**
     * Get isFulfillable
     *
     * @return SearchBooleanField
     */
    public function getIsFulfillable() {
        return $this->isFulfillable;
    }


    /**
     * Set isGcoCompliant
     *
     * @param SearchBooleanField $isGcoCompliant
     * @return ItemSearchBasic
     */
    public function setIsGcoCompliant(SearchBooleanField $isGcoCompliant) {
        $this->isGcoCompliant = $isGcoCompliant;
        return $this;
    }

    /**
     * Get isGcoCompliant
     *
     * @return SearchBooleanField
     */
    public function getIsGcoCompliant() {
        return $this->isGcoCompliant;
    }


    /**
     * Set isInactive
     *
     * @param SearchBooleanField $isInactive
     * @return ItemSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return SearchBooleanField
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isLotItem
     *
     * @param SearchBooleanField $isLotItem
     * @return ItemSearchBasic
     */
    public function setIsLotItem(SearchBooleanField $isLotItem) {
        $this->isLotItem = $isLotItem;
        return $this;
    }

    /**
     * Get isLotItem
     *
     * @return SearchBooleanField
     */
    public function getIsLotItem() {
        return $this->isLotItem;
    }


    /**
     * Set isOnline
     *
     * @param SearchBooleanField $isOnline
     * @return ItemSearchBasic
     */
    public function setIsOnline(SearchBooleanField $isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return SearchBooleanField
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set isPreferredVendor
     *
     * @param SearchBooleanField $isPreferredVendor
     * @return ItemSearchBasic
     */
    public function setIsPreferredVendor(SearchBooleanField $isPreferredVendor) {
        $this->isPreferredVendor = $isPreferredVendor;
        return $this;
    }

    /**
     * Get isPreferredVendor
     *
     * @return SearchBooleanField
     */
    public function getIsPreferredVendor() {
        return $this->isPreferredVendor;
    }


    /**
     * Set isSerialItem
     *
     * @param SearchBooleanField $isSerialItem
     * @return ItemSearchBasic
     */
    public function setIsSerialItem(SearchBooleanField $isSerialItem) {
        $this->isSerialItem = $isSerialItem;
        return $this;
    }

    /**
     * Get isSerialItem
     *
     * @return SearchBooleanField
     */
    public function getIsSerialItem() {
        return $this->isSerialItem;
    }


    /**
     * Set isSpecialOrderItem
     *
     * @param SearchBooleanField $isSpecialOrderItem
     * @return ItemSearchBasic
     */
    public function setIsSpecialOrderItem(SearchBooleanField $isSpecialOrderItem) {
        $this->isSpecialOrderItem = $isSpecialOrderItem;
        return $this;
    }

    /**
     * Get isSpecialOrderItem
     *
     * @return SearchBooleanField
     */
    public function getIsSpecialOrderItem() {
        return $this->isSpecialOrderItem;
    }


    /**
     * Set isSpecialWorkOrderItem
     *
     * @param SearchBooleanField $isSpecialWorkOrderItem
     * @return ItemSearchBasic
     */
    public function setIsSpecialWorkOrderItem(SearchBooleanField $isSpecialWorkOrderItem) {
        $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
        return $this;
    }

    /**
     * Get isSpecialWorkOrderItem
     *
     * @return SearchBooleanField
     */
    public function getIsSpecialWorkOrderItem() {
        return $this->isSpecialWorkOrderItem;
    }


    /**
     * Set issueProduct
     *
     * @param SearchMultiSelectField $issueProduct
     * @return ItemSearchBasic
     */
    public function setIssueProduct(SearchMultiSelectField $issueProduct) {
        $this->issueProduct = $issueProduct;
        return $this;
    }

    /**
     * Get issueProduct
     *
     * @return SearchMultiSelectField
     */
    public function getIssueProduct() {
        return $this->issueProduct;
    }


    /**
     * Set isTaxable
     *
     * @param SearchBooleanField $isTaxable
     * @return ItemSearchBasic
     */
    public function setIsTaxable(SearchBooleanField $isTaxable) {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * Get isTaxable
     *
     * @return SearchBooleanField
     */
    public function getIsTaxable() {
        return $this->isTaxable;
    }


    /**
     * Set isVsoeBundle
     *
     * @param SearchBooleanField $isVsoeBundle
     * @return ItemSearchBasic
     */
    public function setIsVsoeBundle(SearchBooleanField $isVsoeBundle) {
        $this->isVsoeBundle = $isVsoeBundle;
        return $this;
    }

    /**
     * Get isVsoeBundle
     *
     * @return SearchBooleanField
     */
    public function getIsVsoeBundle() {
        return $this->isVsoeBundle;
    }


    /**
     * Set isWip
     *
     * @param SearchBooleanField $isWip
     * @return ItemSearchBasic
     */
    public function setIsWip(SearchBooleanField $isWip) {
        $this->isWip = $isWip;
        return $this;
    }

    /**
     * Get isWip
     *
     * @return SearchBooleanField
     */
    public function getIsWip() {
        return $this->isWip;
    }


    /**
     * Set itemId
     *
     * @param SearchStringField $itemId
     * @return ItemSearchBasic
     */
    public function setItemId(SearchStringField $itemId) {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Get itemId
     *
     * @return SearchStringField
     */
    public function getItemId() {
        return $this->itemId;
    }


    /**
     * Set itemUrl
     *
     * @param SearchStringField $itemUrl
     * @return ItemSearchBasic
     */
    public function setItemUrl(SearchStringField $itemUrl) {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * Get itemUrl
     *
     * @return SearchStringField
     */
    public function getItemUrl() {
        return $this->itemUrl;
    }


    /**
     * Set lastInvtCountDate
     *
     * @param SearchDateField $lastInvtCountDate
     * @return ItemSearchBasic
     */
    public function setLastInvtCountDate(SearchDateField $lastInvtCountDate) {
        $this->lastInvtCountDate = $lastInvtCountDate;
        return $this;
    }

    /**
     * Get lastInvtCountDate
     *
     * @return SearchDateField
     */
    public function getLastInvtCountDate() {
        return $this->lastInvtCountDate;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return ItemSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return SearchDateField
     */
    public function getLastModifiedDate() {
        return $this->lastModifiedDate;
    }


    /**
     * Set lastPurchasePrice
     *
     * @param SearchDoubleField $lastPurchasePrice
     * @return ItemSearchBasic
     */
    public function setLastPurchasePrice(SearchDoubleField $lastPurchasePrice) {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * Get lastPurchasePrice
     *
     * @return SearchDoubleField
     */
    public function getLastPurchasePrice() {
        return $this->lastPurchasePrice;
    }


    /**
     * Set lastQuantityAvailableChange
     *
     * @param SearchDateField $lastQuantityAvailableChange
     * @return ItemSearchBasic
     */
    public function setLastQuantityAvailableChange(SearchDateField $lastQuantityAvailableChange) {
        $this->lastQuantityAvailableChange = $lastQuantityAvailableChange;
        return $this;
    }

    /**
     * Get lastQuantityAvailableChange
     *
     * @return SearchDateField
     */
    public function getLastQuantityAvailableChange() {
        return $this->lastQuantityAvailableChange;
    }


    /**
     * Set leadTime
     *
     * @param SearchLongField $leadTime
     * @return ItemSearchBasic
     */
    public function setLeadTime(SearchLongField $leadTime) {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * Get leadTime
     *
     * @return SearchLongField
     */
    public function getLeadTime() {
        return $this->leadTime;
    }


    /**
     * Set listingDuration
     *
     * @param SearchEnumMultiSelectField $listingDuration
     * @return ItemSearchBasic
     */
    public function setListingDuration(SearchEnumMultiSelectField $listingDuration) {
        $this->listingDuration = $listingDuration;
        return $this;
    }

    /**
     * Get listingDuration
     *
     * @return SearchEnumMultiSelectField
     */
    public function getListingDuration() {
        return $this->listingDuration;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return ItemSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location) {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return SearchMultiSelectField
     */
    public function getLocation() {
        return $this->location;
    }


    /**
     * Set locationAtpLeadTime
     *
     * @param SearchDoubleField $locationAtpLeadTime
     * @return ItemSearchBasic
     */
    public function setLocationAtpLeadTime(SearchDoubleField $locationAtpLeadTime) {
        $this->locationAtpLeadTime = $locationAtpLeadTime;
        return $this;
    }

    /**
     * Get locationAtpLeadTime
     *
     * @return SearchDoubleField
     */
    public function getLocationAtpLeadTime() {
        return $this->locationAtpLeadTime;
    }


    /**
     * Set locationAverageCost
     *
     * @param SearchDoubleField $locationAverageCost
     * @return ItemSearchBasic
     */
    public function setLocationAverageCost(SearchDoubleField $locationAverageCost) {
        $this->locationAverageCost = $locationAverageCost;
        return $this;
    }

    /**
     * Get locationAverageCost
     *
     * @return SearchDoubleField
     */
    public function getLocationAverageCost() {
        return $this->locationAverageCost;
    }


    /**
     * Set locationBuildTime
     *
     * @param SearchDoubleField $locationBuildTime
     * @return ItemSearchBasic
     */
    public function setLocationBuildTime(SearchDoubleField $locationBuildTime) {
        $this->locationBuildTime = $locationBuildTime;
        return $this;
    }

    /**
     * Get locationBuildTime
     *
     * @return SearchDoubleField
     */
    public function getLocationBuildTime() {
        return $this->locationBuildTime;
    }


    /**
     * Set locationCost
     *
     * @param SearchDoubleField $locationCost
     * @return ItemSearchBasic
     */
    public function setLocationCost(SearchDoubleField $locationCost) {
        $this->locationCost = $locationCost;
        return $this;
    }

    /**
     * Get locationCost
     *
     * @return SearchDoubleField
     */
    public function getLocationCost() {
        return $this->locationCost;
    }


    /**
     * Set locationCostAccountingStatus
     *
     * @param SearchEnumMultiSelectField $locationCostAccountingStatus
     * @return ItemSearchBasic
     */
    public function setLocationCostAccountingStatus(SearchEnumMultiSelectField $locationCostAccountingStatus) {
        $this->locationCostAccountingStatus = $locationCostAccountingStatus;
        return $this;
    }

    /**
     * Get locationCostAccountingStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLocationCostAccountingStatus() {
        return $this->locationCostAccountingStatus;
    }


    /**
     * Set locationDefaultReturnCost
     *
     * @param SearchDoubleField $locationDefaultReturnCost
     * @return ItemSearchBasic
     */
    public function setLocationDefaultReturnCost(SearchDoubleField $locationDefaultReturnCost) {
        $this->locationDefaultReturnCost = $locationDefaultReturnCost;
        return $this;
    }

    /**
     * Get locationDefaultReturnCost
     *
     * @return SearchDoubleField
     */
    public function getLocationDefaultReturnCost() {
        return $this->locationDefaultReturnCost;
    }


    /**
     * Set locationDemandSource
     *
     * @param SearchEnumMultiSelectField $locationDemandSource
     * @return ItemSearchBasic
     */
    public function setLocationDemandSource(SearchEnumMultiSelectField $locationDemandSource) {
        $this->locationDemandSource = $locationDemandSource;
        return $this;
    }

    /**
     * Get locationDemandSource
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLocationDemandSource() {
        return $this->locationDemandSource;
    }


    /**
     * Set locationDemandTimeFence
     *
     * @param SearchLongField $locationDemandTimeFence
     * @return ItemSearchBasic
     */
    public function setLocationDemandTimeFence(SearchLongField $locationDemandTimeFence) {
        $this->locationDemandTimeFence = $locationDemandTimeFence;
        return $this;
    }

    /**
     * Get locationDemandTimeFence
     *
     * @return SearchLongField
     */
    public function getLocationDemandTimeFence() {
        return $this->locationDemandTimeFence;
    }


    /**
     * Set locationFixedLotSize
     *
     * @param SearchDoubleField $locationFixedLotSize
     * @return ItemSearchBasic
     */
    public function setLocationFixedLotSize(SearchDoubleField $locationFixedLotSize) {
        $this->locationFixedLotSize = $locationFixedLotSize;
        return $this;
    }

    /**
     * Get locationFixedLotSize
     *
     * @return SearchDoubleField
     */
    public function getLocationFixedLotSize() {
        return $this->locationFixedLotSize;
    }


    /**
     * Set locationInventoryCostTemplate
     *
     * @param SearchMultiSelectField $locationInventoryCostTemplate
     * @return ItemSearchBasic
     */
    public function setLocationInventoryCostTemplate(SearchMultiSelectField $locationInventoryCostTemplate) {
        $this->locationInventoryCostTemplate = $locationInventoryCostTemplate;
        return $this;
    }

    /**
     * Get locationInventoryCostTemplate
     *
     * @return SearchMultiSelectField
     */
    public function getLocationInventoryCostTemplate() {
        return $this->locationInventoryCostTemplate;
    }


    /**
     * Set locationInvtClassification
     *
     * @param SearchEnumMultiSelectField $locationInvtClassification
     * @return ItemSearchBasic
     */
    public function setLocationInvtClassification(SearchEnumMultiSelectField $locationInvtClassification) {
        $this->locationInvtClassification = $locationInvtClassification;
        return $this;
    }

    /**
     * Get locationInvtClassification
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLocationInvtClassification() {
        return $this->locationInvtClassification;
    }


    /**
     * Set locationInvtCountInterval
     *
     * @param SearchLongField $locationInvtCountInterval
     * @return ItemSearchBasic
     */
    public function setLocationInvtCountInterval(SearchLongField $locationInvtCountInterval) {
        $this->locationInvtCountInterval = $locationInvtCountInterval;
        return $this;
    }

    /**
     * Get locationInvtCountInterval
     *
     * @return SearchLongField
     */
    public function getLocationInvtCountInterval() {
        return $this->locationInvtCountInterval;
    }


    /**
     * Set locationLastInvtCountDate
     *
     * @param SearchDateField $locationLastInvtCountDate
     * @return ItemSearchBasic
     */
    public function setLocationLastInvtCountDate(SearchDateField $locationLastInvtCountDate) {
        $this->locationLastInvtCountDate = $locationLastInvtCountDate;
        return $this;
    }

    /**
     * Get locationLastInvtCountDate
     *
     * @return SearchDateField
     */
    public function getLocationLastInvtCountDate() {
        return $this->locationLastInvtCountDate;
    }


    /**
     * Set locationLeadTime
     *
     * @param SearchLongField $locationLeadTime
     * @return ItemSearchBasic
     */
    public function setLocationLeadTime(SearchLongField $locationLeadTime) {
        $this->locationLeadTime = $locationLeadTime;
        return $this;
    }

    /**
     * Get locationLeadTime
     *
     * @return SearchLongField
     */
    public function getLocationLeadTime() {
        return $this->locationLeadTime;
    }


    /**
     * Set locationNextInvtCountDate
     *
     * @param SearchDateField $locationNextInvtCountDate
     * @return ItemSearchBasic
     */
    public function setLocationNextInvtCountDate(SearchDateField $locationNextInvtCountDate) {
        $this->locationNextInvtCountDate = $locationNextInvtCountDate;
        return $this;
    }

    /**
     * Get locationNextInvtCountDate
     *
     * @return SearchDateField
     */
    public function getLocationNextInvtCountDate() {
        return $this->locationNextInvtCountDate;
    }


    /**
     * Set locationPeriodicLotSizeDays
     *
     * @param SearchLongField $locationPeriodicLotSizeDays
     * @return ItemSearchBasic
     */
    public function setLocationPeriodicLotSizeDays(SearchLongField $locationPeriodicLotSizeDays) {
        $this->locationPeriodicLotSizeDays = $locationPeriodicLotSizeDays;
        return $this;
    }

    /**
     * Get locationPeriodicLotSizeDays
     *
     * @return SearchLongField
     */
    public function getLocationPeriodicLotSizeDays() {
        return $this->locationPeriodicLotSizeDays;
    }


    /**
     * Set locationPeriodicLotSizeType
     *
     * @param SearchEnumMultiSelectField $locationPeriodicLotSizeType
     * @return ItemSearchBasic
     */
    public function setLocationPeriodicLotSizeType(SearchEnumMultiSelectField $locationPeriodicLotSizeType) {
        $this->locationPeriodicLotSizeType = $locationPeriodicLotSizeType;
        return $this;
    }

    /**
     * Get locationPeriodicLotSizeType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLocationPeriodicLotSizeType() {
        return $this->locationPeriodicLotSizeType;
    }


    /**
     * Set locationPreferredStockLevel
     *
     * @param SearchDoubleField $locationPreferredStockLevel
     * @return ItemSearchBasic
     */
    public function setLocationPreferredStockLevel(SearchDoubleField $locationPreferredStockLevel) {
        $this->locationPreferredStockLevel = $locationPreferredStockLevel;
        return $this;
    }

    /**
     * Get locationPreferredStockLevel
     *
     * @return SearchDoubleField
     */
    public function getLocationPreferredStockLevel() {
        return $this->locationPreferredStockLevel;
    }


    /**
     * Set locationQuantityAvailable
     *
     * @param SearchDoubleField $locationQuantityAvailable
     * @return ItemSearchBasic
     */
    public function setLocationQuantityAvailable(SearchDoubleField $locationQuantityAvailable) {
        $this->locationQuantityAvailable = $locationQuantityAvailable;
        return $this;
    }

    /**
     * Get locationQuantityAvailable
     *
     * @return SearchDoubleField
     */
    public function getLocationQuantityAvailable() {
        return $this->locationQuantityAvailable;
    }


    /**
     * Set locationQuantityBackOrdered
     *
     * @param SearchDoubleField $locationQuantityBackOrdered
     * @return ItemSearchBasic
     */
    public function setLocationQuantityBackOrdered(SearchDoubleField $locationQuantityBackOrdered) {
        $this->locationQuantityBackOrdered = $locationQuantityBackOrdered;
        return $this;
    }

    /**
     * Get locationQuantityBackOrdered
     *
     * @return SearchDoubleField
     */
    public function getLocationQuantityBackOrdered() {
        return $this->locationQuantityBackOrdered;
    }


    /**
     * Set locationQuantityCommitted
     *
     * @param SearchDoubleField $locationQuantityCommitted
     * @return ItemSearchBasic
     */
    public function setLocationQuantityCommitted(SearchDoubleField $locationQuantityCommitted) {
        $this->locationQuantityCommitted = $locationQuantityCommitted;
        return $this;
    }

    /**
     * Get locationQuantityCommitted
     *
     * @return SearchDoubleField
     */
    public function getLocationQuantityCommitted() {
        return $this->locationQuantityCommitted;
    }


    /**
     * Set locationQuantityInTransit
     *
     * @param SearchDoubleField $locationQuantityInTransit
     * @return ItemSearchBasic
     */
    public function setLocationQuantityInTransit(SearchDoubleField $locationQuantityInTransit) {
        $this->locationQuantityInTransit = $locationQuantityInTransit;
        return $this;
    }

    /**
     * Get locationQuantityInTransit
     *
     * @return SearchDoubleField
     */
    public function getLocationQuantityInTransit() {
        return $this->locationQuantityInTransit;
    }


    /**
     * Set locationQuantityOnHand
     *
     * @param SearchDoubleField $locationQuantityOnHand
     * @return ItemSearchBasic
     */
    public function setLocationQuantityOnHand(SearchDoubleField $locationQuantityOnHand) {
        $this->locationQuantityOnHand = $locationQuantityOnHand;
        return $this;
    }

    /**
     * Get locationQuantityOnHand
     *
     * @return SearchDoubleField
     */
    public function getLocationQuantityOnHand() {
        return $this->locationQuantityOnHand;
    }


    /**
     * Set locationQuantityOnOrder
     *
     * @param SearchDoubleField $locationQuantityOnOrder
     * @return ItemSearchBasic
     */
    public function setLocationQuantityOnOrder(SearchDoubleField $locationQuantityOnOrder) {
        $this->locationQuantityOnOrder = $locationQuantityOnOrder;
        return $this;
    }

    /**
     * Get locationQuantityOnOrder
     *
     * @return SearchDoubleField
     */
    public function getLocationQuantityOnOrder() {
        return $this->locationQuantityOnOrder;
    }


    /**
     * Set locationReorderPoint
     *
     * @param SearchDoubleField $locationReorderPoint
     * @return ItemSearchBasic
     */
    public function setLocationReorderPoint(SearchDoubleField $locationReorderPoint) {
        $this->locationReorderPoint = $locationReorderPoint;
        return $this;
    }

    /**
     * Get locationReorderPoint
     *
     * @return SearchDoubleField
     */
    public function getLocationReorderPoint() {
        return $this->locationReorderPoint;
    }


    /**
     * Set locationRescheduleInDays
     *
     * @param SearchLongField $locationRescheduleInDays
     * @return ItemSearchBasic
     */
    public function setLocationRescheduleInDays(SearchLongField $locationRescheduleInDays) {
        $this->locationRescheduleInDays = $locationRescheduleInDays;
        return $this;
    }

    /**
     * Get locationRescheduleInDays
     *
     * @return SearchLongField
     */
    public function getLocationRescheduleInDays() {
        return $this->locationRescheduleInDays;
    }


    /**
     * Set locationRescheduleOutDays
     *
     * @param SearchLongField $locationRescheduleOutDays
     * @return ItemSearchBasic
     */
    public function setLocationRescheduleOutDays(SearchLongField $locationRescheduleOutDays) {
        $this->locationRescheduleOutDays = $locationRescheduleOutDays;
        return $this;
    }

    /**
     * Get locationRescheduleOutDays
     *
     * @return SearchLongField
     */
    public function getLocationRescheduleOutDays() {
        return $this->locationRescheduleOutDays;
    }


    /**
     * Set locationSafetyStockLevel
     *
     * @param SearchDoubleField $locationSafetyStockLevel
     * @return ItemSearchBasic
     */
    public function setLocationSafetyStockLevel(SearchDoubleField $locationSafetyStockLevel) {
        $this->locationSafetyStockLevel = $locationSafetyStockLevel;
        return $this;
    }

    /**
     * Get locationSafetyStockLevel
     *
     * @return SearchDoubleField
     */
    public function getLocationSafetyStockLevel() {
        return $this->locationSafetyStockLevel;
    }


    /**
     * Set locationSupplyLotSizingMethod
     *
     * @param SearchEnumMultiSelectField $locationSupplyLotSizingMethod
     * @return ItemSearchBasic
     */
    public function setLocationSupplyLotSizingMethod(SearchEnumMultiSelectField $locationSupplyLotSizingMethod) {
        $this->locationSupplyLotSizingMethod = $locationSupplyLotSizingMethod;
        return $this;
    }

    /**
     * Get locationSupplyLotSizingMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLocationSupplyLotSizingMethod() {
        return $this->locationSupplyLotSizingMethod;
    }


    /**
     * Set locationSupplyTimeFence
     *
     * @param SearchLongField $locationSupplyTimeFence
     * @return ItemSearchBasic
     */
    public function setLocationSupplyTimeFence(SearchLongField $locationSupplyTimeFence) {
        $this->locationSupplyTimeFence = $locationSupplyTimeFence;
        return $this;
    }

    /**
     * Get locationSupplyTimeFence
     *
     * @return SearchLongField
     */
    public function getLocationSupplyTimeFence() {
        return $this->locationSupplyTimeFence;
    }


    /**
     * Set locationSupplyType
     *
     * @param SearchEnumMultiSelectField $locationSupplyType
     * @return ItemSearchBasic
     */
    public function setLocationSupplyType(SearchEnumMultiSelectField $locationSupplyType) {
        $this->locationSupplyType = $locationSupplyType;
        return $this;
    }

    /**
     * Get locationSupplyType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getLocationSupplyType() {
        return $this->locationSupplyType;
    }


    /**
     * Set locationTotalValue
     *
     * @param SearchDoubleField $locationTotalValue
     * @return ItemSearchBasic
     */
    public function setLocationTotalValue(SearchDoubleField $locationTotalValue) {
        $this->locationTotalValue = $locationTotalValue;
        return $this;
    }

    /**
     * Get locationTotalValue
     *
     * @return SearchDoubleField
     */
    public function getLocationTotalValue() {
        return $this->locationTotalValue;
    }


    /**
     * Set locBackwardConsumptionDays
     *
     * @param SearchLongField $locBackwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setLocBackwardConsumptionDays(SearchLongField $locBackwardConsumptionDays) {
        $this->locBackwardConsumptionDays = $locBackwardConsumptionDays;
        return $this;
    }

    /**
     * Get locBackwardConsumptionDays
     *
     * @return SearchLongField
     */
    public function getLocBackwardConsumptionDays() {
        return $this->locBackwardConsumptionDays;
    }


    /**
     * Set locForwardConsumptionDays
     *
     * @param SearchLongField $locForwardConsumptionDays
     * @return ItemSearchBasic
     */
    public function setLocForwardConsumptionDays(SearchLongField $locForwardConsumptionDays) {
        $this->locForwardConsumptionDays = $locForwardConsumptionDays;
        return $this;
    }

    /**
     * Get locForwardConsumptionDays
     *
     * @return SearchLongField
     */
    public function getLocForwardConsumptionDays() {
        return $this->locForwardConsumptionDays;
    }


    /**
     * Set manufacturer
     *
     * @param SearchStringField $manufacturer
     * @return ItemSearchBasic
     */
    public function setManufacturer(SearchStringField $manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return SearchStringField
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }


    /**
     * Set manufactureraddr1
     *
     * @param SearchStringField $manufactureraddr1
     * @return ItemSearchBasic
     */
    public function setManufactureraddr1(SearchStringField $manufactureraddr1) {
        $this->manufactureraddr1 = $manufactureraddr1;
        return $this;
    }

    /**
     * Get manufactureraddr1
     *
     * @return SearchStringField
     */
    public function getManufactureraddr1() {
        return $this->manufactureraddr1;
    }


    /**
     * Set manufacturerCity
     *
     * @param SearchStringField $manufacturerCity
     * @return ItemSearchBasic
     */
    public function setManufacturerCity(SearchStringField $manufacturerCity) {
        $this->manufacturerCity = $manufacturerCity;
        return $this;
    }

    /**
     * Get manufacturerCity
     *
     * @return SearchStringField
     */
    public function getManufacturerCity() {
        return $this->manufacturerCity;
    }


    /**
     * Set manufacturerState
     *
     * @param SearchStringField $manufacturerState
     * @return ItemSearchBasic
     */
    public function setManufacturerState(SearchStringField $manufacturerState) {
        $this->manufacturerState = $manufacturerState;
        return $this;
    }

    /**
     * Get manufacturerState
     *
     * @return SearchStringField
     */
    public function getManufacturerState() {
        return $this->manufacturerState;
    }


    /**
     * Set manufacturerTariff
     *
     * @param SearchStringField $manufacturerTariff
     * @return ItemSearchBasic
     */
    public function setManufacturerTariff(SearchStringField $manufacturerTariff) {
        $this->manufacturerTariff = $manufacturerTariff;
        return $this;
    }

    /**
     * Get manufacturerTariff
     *
     * @return SearchStringField
     */
    public function getManufacturerTariff() {
        return $this->manufacturerTariff;
    }


    /**
     * Set manufacturerTaxId
     *
     * @param SearchStringField $manufacturerTaxId
     * @return ItemSearchBasic
     */
    public function setManufacturerTaxId(SearchStringField $manufacturerTaxId) {
        $this->manufacturerTaxId = $manufacturerTaxId;
        return $this;
    }

    /**
     * Get manufacturerTaxId
     *
     * @return SearchStringField
     */
    public function getManufacturerTaxId() {
        return $this->manufacturerTaxId;
    }


    /**
     * Set manufacturerZip
     *
     * @param SearchStringField $manufacturerZip
     * @return ItemSearchBasic
     */
    public function setManufacturerZip(SearchStringField $manufacturerZip) {
        $this->manufacturerZip = $manufacturerZip;
        return $this;
    }

    /**
     * Get manufacturerZip
     *
     * @return SearchStringField
     */
    public function getManufacturerZip() {
        return $this->manufacturerZip;
    }


    /**
     * Set manufacturingChargeItem
     *
     * @param SearchBooleanField $manufacturingChargeItem
     * @return ItemSearchBasic
     */
    public function setManufacturingChargeItem(SearchBooleanField $manufacturingChargeItem) {
        $this->manufacturingChargeItem = $manufacturingChargeItem;
        return $this;
    }

    /**
     * Get manufacturingChargeItem
     *
     * @return SearchBooleanField
     */
    public function getManufacturingChargeItem() {
        return $this->manufacturingChargeItem;
    }


    /**
     * Set matchBillToReceipt
     *
     * @param SearchBooleanField $matchBillToReceipt
     * @return ItemSearchBasic
     */
    public function setMatchBillToReceipt(SearchBooleanField $matchBillToReceipt) {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * Get matchBillToReceipt
     *
     * @return SearchBooleanField
     */
    public function getMatchBillToReceipt() {
        return $this->matchBillToReceipt;
    }


    /**
     * Set matrix
     *
     * @param SearchBooleanField $matrix
     * @return ItemSearchBasic
     */
    public function setMatrix(SearchBooleanField $matrix) {
        $this->matrix = $matrix;
        return $this;
    }

    /**
     * Get matrix
     *
     * @return SearchBooleanField
     */
    public function getMatrix() {
        return $this->matrix;
    }


    /**
     * Set matrixChild
     *
     * @param SearchBooleanField $matrixChild
     * @return ItemSearchBasic
     */
    public function setMatrixChild(SearchBooleanField $matrixChild) {
        $this->matrixChild = $matrixChild;
        return $this;
    }

    /**
     * Get matrixChild
     *
     * @return SearchBooleanField
     */
    public function getMatrixChild() {
        return $this->matrixChild;
    }


    /**
     * Set metaTagHtml
     *
     * @param SearchStringField $metaTagHtml
     * @return ItemSearchBasic
     */
    public function setMetaTagHtml(SearchStringField $metaTagHtml) {
        $this->metaTagHtml = $metaTagHtml;
        return $this;
    }

    /**
     * Get metaTagHtml
     *
     * @return SearchStringField
     */
    public function getMetaTagHtml() {
        return $this->metaTagHtml;
    }


    /**
     * Set minimumQuantity
     *
     * @param SearchLongField $minimumQuantity
     * @return ItemSearchBasic
     */
    public function setMinimumQuantity(SearchLongField $minimumQuantity) {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Get minimumQuantity
     *
     * @return SearchLongField
     */
    public function getMinimumQuantity() {
        return $this->minimumQuantity;
    }


    /**
     * Set mossApplies
     *
     * @param SearchBooleanField $mossApplies
     * @return ItemSearchBasic
     */
    public function setMossApplies(SearchBooleanField $mossApplies) {
        $this->mossApplies = $mossApplies;
        return $this;
    }

    /**
     * Get mossApplies
     *
     * @return SearchBooleanField
     */
    public function getMossApplies() {
        return $this->mossApplies;
    }


    /**
     * Set mpn
     *
     * @param SearchStringField $mpn
     * @return ItemSearchBasic
     */
    public function setMpn(SearchStringField $mpn) {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * Get mpn
     *
     * @return SearchStringField
     */
    public function getMpn() {
        return $this->mpn;
    }


    /**
     * Set multManufactureAddr
     *
     * @param SearchBooleanField $multManufactureAddr
     * @return ItemSearchBasic
     */
    public function setMultManufactureAddr(SearchBooleanField $multManufactureAddr) {
        $this->multManufactureAddr = $multManufactureAddr;
        return $this;
    }

    /**
     * Get multManufactureAddr
     *
     * @return SearchBooleanField
     */
    public function getMultManufactureAddr() {
        return $this->multManufactureAddr;
    }


    /**
     * Set nexTagCategory
     *
     * @param SearchStringField $nexTagCategory
     * @return ItemSearchBasic
     */
    public function setNexTagCategory(SearchStringField $nexTagCategory) {
        $this->nexTagCategory = $nexTagCategory;
        return $this;
    }

    /**
     * Get nexTagCategory
     *
     * @return SearchStringField
     */
    public function getNexTagCategory() {
        return $this->nexTagCategory;
    }


    /**
     * Set nexTagProductFeed
     *
     * @param SearchBooleanField $nexTagProductFeed
     * @return ItemSearchBasic
     */
    public function setNexTagProductFeed(SearchBooleanField $nexTagProductFeed) {
        $this->nexTagProductFeed = $nexTagProductFeed;
        return $this;
    }

    /**
     * Get nexTagProductFeed
     *
     * @return SearchBooleanField
     */
    public function getNexTagProductFeed() {
        return $this->nexTagProductFeed;
    }


    /**
     * Set nextInvtCountDate
     *
     * @param SearchDateField $nextInvtCountDate
     * @return ItemSearchBasic
     */
    public function setNextInvtCountDate(SearchDateField $nextInvtCountDate) {
        $this->nextInvtCountDate = $nextInvtCountDate;
        return $this;
    }

    /**
     * Get nextInvtCountDate
     *
     * @return SearchDateField
     */
    public function getNextInvtCountDate() {
        return $this->nextInvtCountDate;
    }


    /**
     * Set numActiveListings
     *
     * @param SearchLongField $numActiveListings
     * @return ItemSearchBasic
     */
    public function setNumActiveListings(SearchLongField $numActiveListings) {
        $this->numActiveListings = $numActiveListings;
        return $this;
    }

    /**
     * Get numActiveListings
     *
     * @return SearchLongField
     */
    public function getNumActiveListings() {
        return $this->numActiveListings;
    }


    /**
     * Set numberAllowedDownloads
     *
     * @param SearchDoubleField $numberAllowedDownloads
     * @return ItemSearchBasic
     */
    public function setNumberAllowedDownloads(SearchDoubleField $numberAllowedDownloads) {
        $this->numberAllowedDownloads = $numberAllowedDownloads;
        return $this;
    }

    /**
     * Get numberAllowedDownloads
     *
     * @return SearchDoubleField
     */
    public function getNumberAllowedDownloads() {
        return $this->numberAllowedDownloads;
    }


    /**
     * Set numCurrentlyListed
     *
     * @param SearchLongField $numCurrentlyListed
     * @return ItemSearchBasic
     */
    public function setNumCurrentlyListed(SearchLongField $numCurrentlyListed) {
        $this->numCurrentlyListed = $numCurrentlyListed;
        return $this;
    }

    /**
     * Get numCurrentlyListed
     *
     * @return SearchLongField
     */
    public function getNumCurrentlyListed() {
        return $this->numCurrentlyListed;
    }


    /**
     * Set obsoleteDate
     *
     * @param SearchDateField $obsoleteDate
     * @return ItemSearchBasic
     */
    public function setObsoleteDate(SearchDateField $obsoleteDate) {
        $this->obsoleteDate = $obsoleteDate;
        return $this;
    }

    /**
     * Get obsoleteDate
     *
     * @return SearchDateField
     */
    public function getObsoleteDate() {
        return $this->obsoleteDate;
    }


    /**
     * Set obsoleteRevision
     *
     * @param SearchMultiSelectField $obsoleteRevision
     * @return ItemSearchBasic
     */
    public function setObsoleteRevision(SearchMultiSelectField $obsoleteRevision) {
        $this->obsoleteRevision = $obsoleteRevision;
        return $this;
    }

    /**
     * Get obsoleteRevision
     *
     * @return SearchMultiSelectField
     */
    public function getObsoleteRevision() {
        return $this->obsoleteRevision;
    }


    /**
     * Set offerSupport
     *
     * @param SearchBooleanField $offerSupport
     * @return ItemSearchBasic
     */
    public function setOfferSupport(SearchBooleanField $offerSupport) {
        $this->offerSupport = $offerSupport;
        return $this;
    }

    /**
     * Get offerSupport
     *
     * @return SearchBooleanField
     */
    public function getOfferSupport() {
        return $this->offerSupport;
    }


    /**
     * Set onlineCustomerPrice
     *
     * @param SearchDoubleField $onlineCustomerPrice
     * @return ItemSearchBasic
     */
    public function setOnlineCustomerPrice(SearchDoubleField $onlineCustomerPrice) {
        $this->onlineCustomerPrice = $onlineCustomerPrice;
        return $this;
    }

    /**
     * Get onlineCustomerPrice
     *
     * @return SearchDoubleField
     */
    public function getOnlineCustomerPrice() {
        return $this->onlineCustomerPrice;
    }


    /**
     * Set onSpecial
     *
     * @param SearchBooleanField $onSpecial
     * @return ItemSearchBasic
     */
    public function setOnSpecial(SearchBooleanField $onSpecial) {
        $this->onSpecial = $onSpecial;
        return $this;
    }

    /**
     * Get onSpecial
     *
     * @return SearchBooleanField
     */
    public function getOnSpecial() {
        return $this->onSpecial;
    }


    /**
     * Set otherVendor
     *
     * @param SearchMultiSelectField $otherVendor
     * @return ItemSearchBasic
     */
    public function setOtherVendor(SearchMultiSelectField $otherVendor) {
        $this->otherVendor = $otherVendor;
        return $this;
    }

    /**
     * Get otherVendor
     *
     * @return SearchMultiSelectField
     */
    public function getOtherVendor() {
        return $this->otherVendor;
    }


    /**
     * Set outOfStockBehavior
     *
     * @param SearchMultiSelectField $outOfStockBehavior
     * @return ItemSearchBasic
     */
    public function setOutOfStockBehavior(SearchMultiSelectField $outOfStockBehavior) {
        $this->outOfStockBehavior = $outOfStockBehavior;
        return $this;
    }

    /**
     * Get outOfStockBehavior
     *
     * @return SearchMultiSelectField
     */
    public function getOutOfStockBehavior() {
        return $this->outOfStockBehavior;
    }


    /**
     * Set overallQuantityPricingType
     *
     * @param SearchEnumMultiSelectField $overallQuantityPricingType
     * @return ItemSearchBasic
     */
    public function setOverallQuantityPricingType(SearchEnumMultiSelectField $overallQuantityPricingType) {
        $this->overallQuantityPricingType = $overallQuantityPricingType;
        return $this;
    }

    /**
     * Get overallQuantityPricingType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getOverallQuantityPricingType() {
        return $this->overallQuantityPricingType;
    }


    /**
     * Set overheadType
     *
     * @param SearchEnumMultiSelectField $overheadType
     * @return ItemSearchBasic
     */
    public function setOverheadType(SearchEnumMultiSelectField $overheadType) {
        $this->overheadType = $overheadType;
        return $this;
    }

    /**
     * Get overheadType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getOverheadType() {
        return $this->overheadType;
    }


    /**
     * Set pageTitle
     *
     * @param SearchStringField $pageTitle
     * @return ItemSearchBasic
     */
    public function setPageTitle(SearchStringField $pageTitle) {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return SearchStringField
     */
    public function getPageTitle() {
        return $this->pageTitle;
    }


    /**
     * Set parent
     *
     * @param SearchMultiSelectField $parent
     * @return ItemSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchMultiSelectField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set periodicLotSizeDays
     *
     * @param SearchLongField $periodicLotSizeDays
     * @return ItemSearchBasic
     */
    public function setPeriodicLotSizeDays(SearchLongField $periodicLotSizeDays) {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * Get periodicLotSizeDays
     *
     * @return SearchLongField
     */
    public function getPeriodicLotSizeDays() {
        return $this->periodicLotSizeDays;
    }


    /**
     * Set periodicLotSizeType
     *
     * @param SearchEnumMultiSelectField $periodicLotSizeType
     * @return ItemSearchBasic
     */
    public function setPeriodicLotSizeType(SearchEnumMultiSelectField $periodicLotSizeType) {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * Get periodicLotSizeType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPeriodicLotSizeType() {
        return $this->periodicLotSizeType;
    }


    /**
     * Set preferenceCriterion
     *
     * @param SearchStringField $preferenceCriterion
     * @return ItemSearchBasic
     */
    public function setPreferenceCriterion(SearchStringField $preferenceCriterion) {
        $this->preferenceCriterion = $preferenceCriterion;
        return $this;
    }

    /**
     * Get preferenceCriterion
     *
     * @return SearchStringField
     */
    public function getPreferenceCriterion() {
        return $this->preferenceCriterion;
    }


    /**
     * Set preferredBin
     *
     * @param SearchBooleanField $preferredBin
     * @return ItemSearchBasic
     */
    public function setPreferredBin(SearchBooleanField $preferredBin) {
        $this->preferredBin = $preferredBin;
        return $this;
    }

    /**
     * Get preferredBin
     *
     * @return SearchBooleanField
     */
    public function getPreferredBin() {
        return $this->preferredBin;
    }


    /**
     * Set preferredLocation
     *
     * @param SearchMultiSelectField $preferredLocation
     * @return ItemSearchBasic
     */
    public function setPreferredLocation(SearchMultiSelectField $preferredLocation) {
        $this->preferredLocation = $preferredLocation;
        return $this;
    }

    /**
     * Get preferredLocation
     *
     * @return SearchMultiSelectField
     */
    public function getPreferredLocation() {
        return $this->preferredLocation;
    }


    /**
     * Set preferredStockLevel
     *
     * @param SearchDoubleField $preferredStockLevel
     * @return ItemSearchBasic
     */
    public function setPreferredStockLevel(SearchDoubleField $preferredStockLevel) {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * Get preferredStockLevel
     *
     * @return SearchDoubleField
     */
    public function getPreferredStockLevel() {
        return $this->preferredStockLevel;
    }


    /**
     * Set preferredStockLevelDays
     *
     * @param SearchLongField $preferredStockLevelDays
     * @return ItemSearchBasic
     */
    public function setPreferredStockLevelDays(SearchLongField $preferredStockLevelDays) {
        $this->preferredStockLevelDays = $preferredStockLevelDays;
        return $this;
    }

    /**
     * Get preferredStockLevelDays
     *
     * @return SearchLongField
     */
    public function getPreferredStockLevelDays() {
        return $this->preferredStockLevelDays;
    }


    /**
     * Set price
     *
     * @param SearchDoubleField $price
     * @return ItemSearchBasic
     */
    public function setPrice(SearchDoubleField $price) {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return SearchDoubleField
     */
    public function getPrice() {
        return $this->price;
    }


    /**
     * Set pricesIncludeTax
     *
     * @param SearchBooleanField $pricesIncludeTax
     * @return ItemSearchBasic
     */
    public function setPricesIncludeTax(SearchBooleanField $pricesIncludeTax) {
        $this->pricesIncludeTax = $pricesIncludeTax;
        return $this;
    }

    /**
     * Get pricesIncludeTax
     *
     * @return SearchBooleanField
     */
    public function getPricesIncludeTax() {
        return $this->pricesIncludeTax;
    }


    /**
     * Set pricingGroup
     *
     * @param SearchMultiSelectField $pricingGroup
     * @return ItemSearchBasic
     */
    public function setPricingGroup(SearchMultiSelectField $pricingGroup) {
        $this->pricingGroup = $pricingGroup;
        return $this;
    }

    /**
     * Get pricingGroup
     *
     * @return SearchMultiSelectField
     */
    public function getPricingGroup() {
        return $this->pricingGroup;
    }


    /**
     * Set primaryCategory
     *
     * @param SearchLongField $primaryCategory
     * @return ItemSearchBasic
     */
    public function setPrimaryCategory(SearchLongField $primaryCategory) {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }

    /**
     * Get primaryCategory
     *
     * @return SearchLongField
     */
    public function getPrimaryCategory() {
        return $this->primaryCategory;
    }


    /**
     * Set purchaseOrderAmount
     *
     * @param SearchDoubleField $purchaseOrderAmount
     * @return ItemSearchBasic
     */
    public function setPurchaseOrderAmount(SearchDoubleField $purchaseOrderAmount) {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * Get purchaseOrderAmount
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount() {
        return $this->purchaseOrderAmount;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return ItemSearchBasic
     */
    public function setPurchaseOrderQuantity(SearchDoubleField $purchaseOrderQuantity) {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * Get purchaseOrderQuantity
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity() {
        return $this->purchaseOrderQuantity;
    }


    /**
     * Set purchaseOrderQuantityDiff
     *
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return ItemSearchBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchDoubleField $purchaseOrderQuantityDiff) {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * Get purchaseOrderQuantityDiff
     *
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff() {
        return $this->purchaseOrderQuantityDiff;
    }


    /**
     * Set purchaseUnit
     *
     * @param SearchMultiSelectField $purchaseUnit
     * @return ItemSearchBasic
     */
    public function setPurchaseUnit(SearchMultiSelectField $purchaseUnit) {
        $this->purchaseUnit = $purchaseUnit;
        return $this;
    }

    /**
     * Get purchaseUnit
     *
     * @return SearchMultiSelectField
     */
    public function getPurchaseUnit() {
        return $this->purchaseUnit;
    }


    /**
     * Set quantityAvailable
     *
     * @param SearchDoubleField $quantityAvailable
     * @return ItemSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return SearchDoubleField
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param SearchDoubleField $quantityBackOrdered
     * @return ItemSearchBasic
     */
    public function setQuantityBackOrdered(SearchDoubleField $quantityBackOrdered) {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * Get quantityBackOrdered
     *
     * @return SearchDoubleField
     */
    public function getQuantityBackOrdered() {
        return $this->quantityBackOrdered;
    }


    /**
     * Set quantityCommitted
     *
     * @param SearchDoubleField $quantityCommitted
     * @return ItemSearchBasic
     */
    public function setQuantityCommitted(SearchDoubleField $quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * Get quantityCommitted
     *
     * @return SearchDoubleField
     */
    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }


    /**
     * Set quantityOnHand
     *
     * @param SearchDoubleField $quantityOnHand
     * @return ItemSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return SearchDoubleField
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set quantityOnOrder
     *
     * @param SearchDoubleField $quantityOnOrder
     * @return ItemSearchBasic
     */
    public function setQuantityOnOrder(SearchDoubleField $quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return SearchDoubleField
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set quantityPricingSchedule
     *
     * @param SearchMultiSelectField $quantityPricingSchedule
     * @return ItemSearchBasic
     */
    public function setQuantityPricingSchedule(SearchMultiSelectField $quantityPricingSchedule) {
        $this->quantityPricingSchedule = $quantityPricingSchedule;
        return $this;
    }

    /**
     * Get quantityPricingSchedule
     *
     * @return SearchMultiSelectField
     */
    public function getQuantityPricingSchedule() {
        return $this->quantityPricingSchedule;
    }


    /**
     * Set receiptAmount
     *
     * @param SearchDoubleField $receiptAmount
     * @return ItemSearchBasic
     */
    public function setReceiptAmount(SearchDoubleField $receiptAmount) {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * Get receiptAmount
     *
     * @return SearchDoubleField
     */
    public function getReceiptAmount() {
        return $this->receiptAmount;
    }


    /**
     * Set receiptQuantity
     *
     * @param SearchDoubleField $receiptQuantity
     * @return ItemSearchBasic
     */
    public function setReceiptQuantity(SearchDoubleField $receiptQuantity) {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * Get receiptQuantity
     *
     * @return SearchDoubleField
     */
    public function getReceiptQuantity() {
        return $this->receiptQuantity;
    }


    /**
     * Set receiptQuantityDiff
     *
     * @param SearchDoubleField $receiptQuantityDiff
     * @return ItemSearchBasic
     */
    public function setReceiptQuantityDiff(SearchDoubleField $receiptQuantityDiff) {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * Get receiptQuantityDiff
     *
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff() {
        return $this->receiptQuantityDiff;
    }


    /**
     * Set reorderMultiple
     *
     * @param SearchLongField $reorderMultiple
     * @return ItemSearchBasic
     */
    public function setReorderMultiple(SearchLongField $reorderMultiple) {
        $this->reorderMultiple = $reorderMultiple;
        return $this;
    }

    /**
     * Get reorderMultiple
     *
     * @return SearchLongField
     */
    public function getReorderMultiple() {
        return $this->reorderMultiple;
    }


    /**
     * Set reorderPoint
     *
     * @param SearchDoubleField $reorderPoint
     * @return ItemSearchBasic
     */
    public function setReorderPoint(SearchDoubleField $reorderPoint) {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return SearchDoubleField
     */
    public function getReorderPoint() {
        return $this->reorderPoint;
    }


    /**
     * Set rescheduleInDays
     *
     * @param SearchLongField $rescheduleInDays
     * @return ItemSearchBasic
     */
    public function setRescheduleInDays(SearchLongField $rescheduleInDays) {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * Get rescheduleInDays
     *
     * @return SearchLongField
     */
    public function getRescheduleInDays() {
        return $this->rescheduleInDays;
    }


    /**
     * Set rescheduleOutDays
     *
     * @param SearchLongField $rescheduleOutDays
     * @return ItemSearchBasic
     */
    public function setRescheduleOutDays(SearchLongField $rescheduleOutDays) {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * Get rescheduleOutDays
     *
     * @return SearchLongField
     */
    public function getRescheduleOutDays() {
        return $this->rescheduleOutDays;
    }


    /**
     * Set reservePrice
     *
     * @param SearchDoubleField $reservePrice
     * @return ItemSearchBasic
     */
    public function setReservePrice(SearchDoubleField $reservePrice) {
        $this->reservePrice = $reservePrice;
        return $this;
    }

    /**
     * Get reservePrice
     *
     * @return SearchDoubleField
     */
    public function getReservePrice() {
        return $this->reservePrice;
    }


    /**
     * Set revRecSchedule
     *
     * @param SearchMultiSelectField $revRecSchedule
     * @return ItemSearchBasic
     */
    public function setRevRecSchedule(SearchMultiSelectField $revRecSchedule) {
        $this->revRecSchedule = $revRecSchedule;
        return $this;
    }

    /**
     * Get revRecSchedule
     *
     * @return SearchMultiSelectField
     */
    public function getRevRecSchedule() {
        return $this->revRecSchedule;
    }


    /**
     * Set roundUpAsComponent
     *
     * @param SearchBooleanField $roundUpAsComponent
     * @return ItemSearchBasic
     */
    public function setRoundUpAsComponent(SearchBooleanField $roundUpAsComponent) {
        $this->roundUpAsComponent = $roundUpAsComponent;
        return $this;
    }

    /**
     * Get roundUpAsComponent
     *
     * @return SearchBooleanField
     */
    public function getRoundUpAsComponent() {
        return $this->roundUpAsComponent;
    }


    /**
     * Set safetyStockLevel
     *
     * @param SearchDoubleField $safetyStockLevel
     * @return ItemSearchBasic
     */
    public function setSafetyStockLevel(SearchDoubleField $safetyStockLevel) {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * Get safetyStockLevel
     *
     * @return SearchDoubleField
     */
    public function getSafetyStockLevel() {
        return $this->safetyStockLevel;
    }


    /**
     * Set safetyStockLevelDays
     *
     * @param SearchLongField $safetyStockLevelDays
     * @return ItemSearchBasic
     */
    public function setSafetyStockLevelDays(SearchLongField $safetyStockLevelDays) {
        $this->safetyStockLevelDays = $safetyStockLevelDays;
        return $this;
    }

    /**
     * Get safetyStockLevelDays
     *
     * @return SearchLongField
     */
    public function getSafetyStockLevelDays() {
        return $this->safetyStockLevelDays;
    }


    /**
     * Set salesDescription
     *
     * @param SearchStringField $salesDescription
     * @return ItemSearchBasic
     */
    public function setSalesDescription(SearchStringField $salesDescription) {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * Get salesDescription
     *
     * @return SearchStringField
     */
    public function getSalesDescription() {
        return $this->salesDescription;
    }


    /**
     * Set saleUnit
     *
     * @param SearchMultiSelectField $saleUnit
     * @return ItemSearchBasic
     */
    public function setSaleUnit(SearchMultiSelectField $saleUnit) {
        $this->saleUnit = $saleUnit;
        return $this;
    }

    /**
     * Get saleUnit
     *
     * @return SearchMultiSelectField
     */
    public function getSaleUnit() {
        return $this->saleUnit;
    }


    /**
     * Set sameAsPrimaryBookAmortization
     *
     * @param SearchBooleanField $sameAsPrimaryBookAmortization
     * @return ItemSearchBasic
     */
    public function setSameAsPrimaryBookAmortization(SearchBooleanField $sameAsPrimaryBookAmortization) {
        $this->sameAsPrimaryBookAmortization = $sameAsPrimaryBookAmortization;
        return $this;
    }

    /**
     * Get sameAsPrimaryBookAmortization
     *
     * @return SearchBooleanField
     */
    public function getSameAsPrimaryBookAmortization() {
        return $this->sameAsPrimaryBookAmortization;
    }


    /**
     * Set sameAsPrimaryBookRevRec
     *
     * @param SearchBooleanField $sameAsPrimaryBookRevRec
     * @return ItemSearchBasic
     */
    public function setSameAsPrimaryBookRevRec(SearchBooleanField $sameAsPrimaryBookRevRec) {
        $this->sameAsPrimaryBookRevRec = $sameAsPrimaryBookRevRec;
        return $this;
    }

    /**
     * Get sameAsPrimaryBookRevRec
     *
     * @return SearchBooleanField
     */
    public function getSameAsPrimaryBookRevRec() {
        return $this->sameAsPrimaryBookRevRec;
    }


    /**
     * Set scheduleBCode
     *
     * @param SearchEnumMultiSelectField $scheduleBCode
     * @return ItemSearchBasic
     */
    public function setScheduleBCode(SearchEnumMultiSelectField $scheduleBCode) {
        $this->scheduleBCode = $scheduleBCode;
        return $this;
    }

    /**
     * Get scheduleBCode
     *
     * @return SearchEnumMultiSelectField
     */
    public function getScheduleBCode() {
        return $this->scheduleBCode;
    }


    /**
     * Set scheduleBNumber
     *
     * @param SearchStringField $scheduleBNumber
     * @return ItemSearchBasic
     */
    public function setScheduleBNumber(SearchStringField $scheduleBNumber) {
        $this->scheduleBNumber = $scheduleBNumber;
        return $this;
    }

    /**
     * Get scheduleBNumber
     *
     * @return SearchStringField
     */
    public function getScheduleBNumber() {
        return $this->scheduleBNumber;
    }


    /**
     * Set scheduleBQuantity
     *
     * @param SearchStringField $scheduleBQuantity
     * @return ItemSearchBasic
     */
    public function setScheduleBQuantity(SearchStringField $scheduleBQuantity) {
        $this->scheduleBQuantity = $scheduleBQuantity;
        return $this;
    }

    /**
     * Get scheduleBQuantity
     *
     * @return SearchStringField
     */
    public function getScheduleBQuantity() {
        return $this->scheduleBQuantity;
    }


    /**
     * Set searchKeywords
     *
     * @param SearchStringField $searchKeywords
     * @return ItemSearchBasic
     */
    public function setSearchKeywords(SearchStringField $searchKeywords) {
        $this->searchKeywords = $searchKeywords;
        return $this;
    }

    /**
     * Get searchKeywords
     *
     * @return SearchStringField
     */
    public function getSearchKeywords() {
        return $this->searchKeywords;
    }


    /**
     * Set seasonalDemand
     *
     * @param SearchBooleanField $seasonalDemand
     * @return ItemSearchBasic
     */
    public function setSeasonalDemand(SearchBooleanField $seasonalDemand) {
        $this->seasonalDemand = $seasonalDemand;
        return $this;
    }

    /**
     * Get seasonalDemand
     *
     * @return SearchBooleanField
     */
    public function getSeasonalDemand() {
        return $this->seasonalDemand;
    }


    /**
     * Set sellOnEBay
     *
     * @param SearchBooleanField $sellOnEBay
     * @return ItemSearchBasic
     */
    public function setSellOnEBay(SearchBooleanField $sellOnEBay) {
        $this->sellOnEBay = $sellOnEBay;
        return $this;
    }

    /**
     * Get sellOnEBay
     *
     * @return SearchBooleanField
     */
    public function getSellOnEBay() {
        return $this->sellOnEBay;
    }


    /**
     * Set serialNumber
     *
     * @param SearchStringField $serialNumber
     * @return ItemSearchBasic
     */
    public function setSerialNumber(SearchStringField $serialNumber) {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return SearchStringField
     */
    public function getSerialNumber() {
        return $this->serialNumber;
    }


    /**
     * Set serialNumberLocation
     *
     * @param SearchMultiSelectField $serialNumberLocation
     * @return ItemSearchBasic
     */
    public function setSerialNumberLocation(SearchMultiSelectField $serialNumberLocation) {
        $this->serialNumberLocation = $serialNumberLocation;
        return $this;
    }

    /**
     * Get serialNumberLocation
     *
     * @return SearchMultiSelectField
     */
    public function getSerialNumberLocation() {
        return $this->serialNumberLocation;
    }


    /**
     * Set shipIndividually
     *
     * @param SearchBooleanField $shipIndividually
     * @return ItemSearchBasic
     */
    public function setShipIndividually(SearchBooleanField $shipIndividually) {
        $this->shipIndividually = $shipIndividually;
        return $this;
    }

    /**
     * Get shipIndividually
     *
     * @return SearchBooleanField
     */
    public function getShipIndividually() {
        return $this->shipIndividually;
    }


    /**
     * Set shipPackage
     *
     * @param SearchMultiSelectField $shipPackage
     * @return ItemSearchBasic
     */
    public function setShipPackage(SearchMultiSelectField $shipPackage) {
        $this->shipPackage = $shipPackage;
        return $this;
    }

    /**
     * Get shipPackage
     *
     * @return SearchMultiSelectField
     */
    public function getShipPackage() {
        return $this->shipPackage;
    }


    /**
     * Set shippingCarrier
     *
     * @param SearchEnumMultiSelectField $shippingCarrier
     * @return ItemSearchBasic
     */
    public function setShippingCarrier(SearchEnumMultiSelectField $shippingCarrier) {
        $this->shippingCarrier = $shippingCarrier;
        return $this;
    }

    /**
     * Get shippingCarrier
     *
     * @return SearchEnumMultiSelectField
     */
    public function getShippingCarrier() {
        return $this->shippingCarrier;
    }


    /**
     * Set shippingRate
     *
     * @param SearchDoubleField $shippingRate
     * @return ItemSearchBasic
     */
    public function setShippingRate(SearchDoubleField $shippingRate) {
        $this->shippingRate = $shippingRate;
        return $this;
    }

    /**
     * Get shippingRate
     *
     * @return SearchDoubleField
     */
    public function getShippingRate() {
        return $this->shippingRate;
    }


    /**
     * Set shoppingDotComCategory
     *
     * @param SearchStringField $shoppingDotComCategory
     * @return ItemSearchBasic
     */
    public function setShoppingDotComCategory(SearchStringField $shoppingDotComCategory) {
        $this->shoppingDotComCategory = $shoppingDotComCategory;
        return $this;
    }

    /**
     * Get shoppingDotComCategory
     *
     * @return SearchStringField
     */
    public function getShoppingDotComCategory() {
        return $this->shoppingDotComCategory;
    }


    /**
     * Set shoppingProductFeed
     *
     * @param SearchBooleanField $shoppingProductFeed
     * @return ItemSearchBasic
     */
    public function setShoppingProductFeed(SearchBooleanField $shoppingProductFeed) {
        $this->shoppingProductFeed = $shoppingProductFeed;
        return $this;
    }

    /**
     * Get shoppingProductFeed
     *
     * @return SearchBooleanField
     */
    public function getShoppingProductFeed() {
        return $this->shoppingProductFeed;
    }


    /**
     * Set shopzillaCategoryId
     *
     * @param SearchLongField $shopzillaCategoryId
     * @return ItemSearchBasic
     */
    public function setShopzillaCategoryId(SearchLongField $shopzillaCategoryId) {
        $this->shopzillaCategoryId = $shopzillaCategoryId;
        return $this;
    }

    /**
     * Get shopzillaCategoryId
     *
     * @return SearchLongField
     */
    public function getShopzillaCategoryId() {
        return $this->shopzillaCategoryId;
    }


    /**
     * Set shopzillaProductFeed
     *
     * @param SearchBooleanField $shopzillaProductFeed
     * @return ItemSearchBasic
     */
    public function setShopzillaProductFeed(SearchBooleanField $shopzillaProductFeed) {
        $this->shopzillaProductFeed = $shopzillaProductFeed;
        return $this;
    }

    /**
     * Get shopzillaProductFeed
     *
     * @return SearchBooleanField
     */
    public function getShopzillaProductFeed() {
        return $this->shopzillaProductFeed;
    }


    /**
     * Set sitemapPriority
     *
     * @param SearchEnumMultiSelectField $sitemapPriority
     * @return ItemSearchBasic
     */
    public function setSitemapPriority(SearchEnumMultiSelectField $sitemapPriority) {
        $this->sitemapPriority = $sitemapPriority;
        return $this;
    }

    /**
     * Get sitemapPriority
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSitemapPriority() {
        return $this->sitemapPriority;
    }


    /**
     * Set softDescriptor
     *
     * @param SearchMultiSelectField $softDescriptor
     * @return ItemSearchBasic
     */
    public function setSoftDescriptor(SearchMultiSelectField $softDescriptor) {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * Get softDescriptor
     *
     * @return SearchMultiSelectField
     */
    public function getSoftDescriptor() {
        return $this->softDescriptor;
    }


    /**
     * Set startingPrice
     *
     * @param SearchDoubleField $startingPrice
     * @return ItemSearchBasic
     */
    public function setStartingPrice(SearchDoubleField $startingPrice) {
        $this->startingPrice = $startingPrice;
        return $this;
    }

    /**
     * Get startingPrice
     *
     * @return SearchDoubleField
     */
    public function getStartingPrice() {
        return $this->startingPrice;
    }


    /**
     * Set stockDescription
     *
     * @param SearchStringField $stockDescription
     * @return ItemSearchBasic
     */
    public function setStockDescription(SearchStringField $stockDescription) {
        $this->stockDescription = $stockDescription;
        return $this;
    }

    /**
     * Get stockDescription
     *
     * @return SearchStringField
     */
    public function getStockDescription() {
        return $this->stockDescription;
    }


    /**
     * Set stockUnit
     *
     * @param SearchMultiSelectField $stockUnit
     * @return ItemSearchBasic
     */
    public function setStockUnit(SearchMultiSelectField $stockUnit) {
        $this->stockUnit = $stockUnit;
        return $this;
    }

    /**
     * Get stockUnit
     *
     * @return SearchMultiSelectField
     */
    public function getStockUnit() {
        return $this->stockUnit;
    }


    /**
     * Set storeDescription
     *
     * @param SearchStringField $storeDescription
     * @return ItemSearchBasic
     */
    public function setStoreDescription(SearchStringField $storeDescription) {
        $this->storeDescription = $storeDescription;
        return $this;
    }

    /**
     * Get storeDescription
     *
     * @return SearchStringField
     */
    public function getStoreDescription() {
        return $this->storeDescription;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return ItemSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary) {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getSubsidiary() {
        return $this->subsidiary;
    }


    /**
     * Set subType
     *
     * @param SearchEnumMultiSelectField $subType
     * @return ItemSearchBasic
     */
    public function setSubType(SearchEnumMultiSelectField $subType) {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Get subType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSubType() {
        return $this->subType;
    }


    /**
     * Set supplyLotSizingMethod
     *
     * @param SearchEnumMultiSelectField $supplyLotSizingMethod
     * @return ItemSearchBasic
     */
    public function setSupplyLotSizingMethod(SearchEnumMultiSelectField $supplyLotSizingMethod) {
        $this->supplyLotSizingMethod = $supplyLotSizingMethod;
        return $this;
    }

    /**
     * Get supplyLotSizingMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyLotSizingMethod() {
        return $this->supplyLotSizingMethod;
    }


    /**
     * Set supplyReplenishmentMethod
     *
     * @param SearchEnumMultiSelectField $supplyReplenishmentMethod
     * @return ItemSearchBasic
     */
    public function setSupplyReplenishmentMethod(SearchEnumMultiSelectField $supplyReplenishmentMethod) {
        $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
        return $this;
    }

    /**
     * Get supplyReplenishmentMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyReplenishmentMethod() {
        return $this->supplyReplenishmentMethod;
    }


    /**
     * Set supplyTimeFence
     *
     * @param SearchLongField $supplyTimeFence
     * @return ItemSearchBasic
     */
    public function setSupplyTimeFence(SearchLongField $supplyTimeFence) {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * Get supplyTimeFence
     *
     * @return SearchLongField
     */
    public function getSupplyTimeFence() {
        return $this->supplyTimeFence;
    }


    /**
     * Set supplyType
     *
     * @param SearchEnumMultiSelectField $supplyType
     * @return ItemSearchBasic
     */
    public function setSupplyType(SearchEnumMultiSelectField $supplyType) {
        $this->supplyType = $supplyType;
        return $this;
    }

    /**
     * Get supplyType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSupplyType() {
        return $this->supplyType;
    }


    /**
     * Set taxCode
     *
     * @param SearchMultiSelectField $taxCode
     * @return ItemSearchBasic
     */
    public function setTaxCode(SearchMultiSelectField $taxCode) {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Get taxCode
     *
     * @return SearchMultiSelectField
     */
    public function getTaxCode() {
        return $this->taxCode;
    }


    /**
     * Set taxSchedule
     *
     * @param SearchMultiSelectField $taxSchedule
     * @return ItemSearchBasic
     */
    public function setTaxSchedule(SearchMultiSelectField $taxSchedule) {
        $this->taxSchedule = $taxSchedule;
        return $this;
    }

    /**
     * Get taxSchedule
     *
     * @return SearchMultiSelectField
     */
    public function getTaxSchedule() {
        return $this->taxSchedule;
    }


    /**
     * Set thumbnailUrl
     *
     * @param SearchStringField $thumbnailUrl
     * @return ItemSearchBasic
     */
    public function setThumbnailUrl(SearchStringField $thumbnailUrl) {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    /**
     * Get thumbnailUrl
     *
     * @return SearchStringField
     */
    public function getThumbnailUrl() {
        return $this->thumbnailUrl;
    }


    /**
     * Set totalValue
     *
     * @param SearchDoubleField $totalValue
     * @return ItemSearchBasic
     */
    public function setTotalValue(SearchDoubleField $totalValue) {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * Get totalValue
     *
     * @return SearchDoubleField
     */
    public function getTotalValue() {
        return $this->totalValue;
    }


    /**
     * Set trackLandedCost
     *
     * @param SearchBooleanField $trackLandedCost
     * @return ItemSearchBasic
     */
    public function setTrackLandedCost(SearchBooleanField $trackLandedCost) {
        $this->trackLandedCost = $trackLandedCost;
        return $this;
    }

    /**
     * Get trackLandedCost
     *
     * @return SearchBooleanField
     */
    public function getTrackLandedCost() {
        return $this->trackLandedCost;
    }


    /**
     * Set transferPrice
     *
     * @param SearchDoubleField $transferPrice
     * @return ItemSearchBasic
     */
    public function setTransferPrice(SearchDoubleField $transferPrice) {
        $this->transferPrice = $transferPrice;
        return $this;
    }

    /**
     * Get transferPrice
     *
     * @return SearchDoubleField
     */
    public function getTransferPrice() {
        return $this->transferPrice;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return ItemSearchBasic
     */
    public function setType(SearchEnumMultiSelectField $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return SearchEnumMultiSelectField
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set unitsType
     *
     * @param SearchMultiSelectField $unitsType
     * @return ItemSearchBasic
     */
    public function setUnitsType(SearchMultiSelectField $unitsType) {
        $this->unitsType = $unitsType;
        return $this;
    }

    /**
     * Get unitsType
     *
     * @return SearchMultiSelectField
     */
    public function getUnitsType() {
        return $this->unitsType;
    }


    /**
     * Set upcCode
     *
     * @param SearchStringField $upcCode
     * @return ItemSearchBasic
     */
    public function setUpcCode(SearchStringField $upcCode) {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * Get upcCode
     *
     * @return SearchStringField
     */
    public function getUpcCode() {
        return $this->upcCode;
    }


    /**
     * Set urlComponent
     *
     * @param SearchStringField $urlComponent
     * @return ItemSearchBasic
     */
    public function setUrlComponent(SearchStringField $urlComponent) {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * Get urlComponent
     *
     * @return SearchStringField
     */
    public function getUrlComponent() {
        return $this->urlComponent;
    }


    /**
     * Set useBins
     *
     * @param SearchBooleanField $useBins
     * @return ItemSearchBasic
     */
    public function setUseBins(SearchBooleanField $useBins) {
        $this->useBins = $useBins;
        return $this;
    }

    /**
     * Get useBins
     *
     * @return SearchBooleanField
     */
    public function getUseBins() {
        return $this->useBins;
    }


    /**
     * Set useComponentYield
     *
     * @param SearchBooleanField $useComponentYield
     * @return ItemSearchBasic
     */
    public function setUseComponentYield(SearchBooleanField $useComponentYield) {
        $this->useComponentYield = $useComponentYield;
        return $this;
    }

    /**
     * Get useComponentYield
     *
     * @return SearchBooleanField
     */
    public function getUseComponentYield() {
        return $this->useComponentYield;
    }


    /**
     * Set useMarginalRates
     *
     * @param SearchBooleanField $useMarginalRates
     * @return ItemSearchBasic
     */
    public function setUseMarginalRates(SearchBooleanField $useMarginalRates) {
        $this->useMarginalRates = $useMarginalRates;
        return $this;
    }

    /**
     * Get useMarginalRates
     *
     * @return SearchBooleanField
     */
    public function getUseMarginalRates() {
        return $this->useMarginalRates;
    }


    /**
     * Set vendor
     *
     * @param SearchMultiSelectField $vendor
     * @return ItemSearchBasic
     */
    public function setVendor(SearchMultiSelectField $vendor) {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Get vendor
     *
     * @return SearchMultiSelectField
     */
    public function getVendor() {
        return $this->vendor;
    }


    /**
     * Set vendorCode
     *
     * @param SearchStringField $vendorCode
     * @return ItemSearchBasic
     */
    public function setVendorCode(SearchStringField $vendorCode) {
        $this->vendorCode = $vendorCode;
        return $this;
    }

    /**
     * Get vendorCode
     *
     * @return SearchStringField
     */
    public function getVendorCode() {
        return $this->vendorCode;
    }


    /**
     * Set vendorCost
     *
     * @param SearchDoubleField $vendorCost
     * @return ItemSearchBasic
     */
    public function setVendorCost(SearchDoubleField $vendorCost) {
        $this->vendorCost = $vendorCost;
        return $this;
    }

    /**
     * Get vendorCost
     *
     * @return SearchDoubleField
     */
    public function getVendorCost() {
        return $this->vendorCost;
    }


    /**
     * Set vendorCostEntered
     *
     * @param SearchDoubleField $vendorCostEntered
     * @return ItemSearchBasic
     */
    public function setVendorCostEntered(SearchDoubleField $vendorCostEntered) {
        $this->vendorCostEntered = $vendorCostEntered;
        return $this;
    }

    /**
     * Get vendorCostEntered
     *
     * @return SearchDoubleField
     */
    public function getVendorCostEntered() {
        return $this->vendorCostEntered;
    }


    /**
     * Set vendorName
     *
     * @param SearchStringField $vendorName
     * @return ItemSearchBasic
     */
    public function setVendorName(SearchStringField $vendorName) {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * Get vendorName
     *
     * @return SearchStringField
     */
    public function getVendorName() {
        return $this->vendorName;
    }


    /**
     * Set vendorPriceCurrency
     *
     * @param SearchMultiSelectField $vendorPriceCurrency
     * @return ItemSearchBasic
     */
    public function setVendorPriceCurrency(SearchMultiSelectField $vendorPriceCurrency) {
        $this->vendorPriceCurrency = $vendorPriceCurrency;
        return $this;
    }

    /**
     * Get vendorPriceCurrency
     *
     * @return SearchMultiSelectField
     */
    public function getVendorPriceCurrency() {
        return $this->vendorPriceCurrency;
    }


    /**
     * Set vsoeDeferral
     *
     * @param SearchEnumMultiSelectField $vsoeDeferral
     * @return ItemSearchBasic
     */
    public function setVsoeDeferral(SearchEnumMultiSelectField $vsoeDeferral) {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * Get vsoeDeferral
     *
     * @return SearchEnumMultiSelectField
     */
    public function getVsoeDeferral() {
        return $this->vsoeDeferral;
    }


    /**
     * Set vsoeDelivered
     *
     * @param SearchBooleanField $vsoeDelivered
     * @return ItemSearchBasic
     */
    public function setVsoeDelivered(SearchBooleanField $vsoeDelivered) {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * Get vsoeDelivered
     *
     * @return SearchBooleanField
     */
    public function getVsoeDelivered() {
        return $this->vsoeDelivered;
    }


    /**
     * Set vsoePermitDiscount
     *
     * @param SearchEnumMultiSelectField $vsoePermitDiscount
     * @return ItemSearchBasic
     */
    public function setVsoePermitDiscount(SearchEnumMultiSelectField $vsoePermitDiscount) {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * Get vsoePermitDiscount
     *
     * @return SearchEnumMultiSelectField
     */
    public function getVsoePermitDiscount() {
        return $this->vsoePermitDiscount;
    }


    /**
     * Set vsoePrice
     *
     * @param SearchDoubleField $vsoePrice
     * @return ItemSearchBasic
     */
    public function setVsoePrice(SearchDoubleField $vsoePrice) {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * Get vsoePrice
     *
     * @return SearchDoubleField
     */
    public function getVsoePrice() {
        return $this->vsoePrice;
    }


    /**
     * Set webSite
     *
     * @param SearchMultiSelectField $webSite
     * @return ItemSearchBasic
     */
    public function setWebSite(SearchMultiSelectField $webSite) {
        $this->webSite = $webSite;
        return $this;
    }

    /**
     * Get webSite
     *
     * @return SearchMultiSelectField
     */
    public function getWebSite() {
        return $this->webSite;
    }


    /**
     * Set weight
     *
     * @param SearchDoubleField $weight
     * @return ItemSearchBasic
     */
    public function setWeight(SearchDoubleField $weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return SearchDoubleField
     */
    public function getWeight() {
        return $this->weight;
    }


    /**
     * Set yahooProductFeed
     *
     * @param SearchBooleanField $yahooProductFeed
     * @return ItemSearchBasic
     */
    public function setYahooProductFeed(SearchBooleanField $yahooProductFeed) {
        $this->yahooProductFeed = $yahooProductFeed;
        return $this;
    }

    /**
     * Get yahooProductFeed
     *
     * @return SearchBooleanField
     */
    public function getYahooProductFeed() {
        return $this->yahooProductFeed;
    }


    /**
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return ItemSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }

}