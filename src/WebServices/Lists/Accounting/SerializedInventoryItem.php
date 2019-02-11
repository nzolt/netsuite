<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemMatrixType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\HazmatPackingGroup;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCostingMethod;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemInvtClassification;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCarrier;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ScheduleBCode;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemPreferenceCriterion;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverallQuantityPricingType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemWeightUnit;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\PeriodicLotSizeType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOutOfStockBehavior;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * SerializedInventoryItem
 */
class SerializedInventoryItem extends Record {

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
     * @var ItemMatrixType
     */
    protected $matrixType;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

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
    protected $isHazmatItem;

    /**
     * @access public
     * @var string
     */
    protected $hazmatId;

    /**
     * @access public
     * @var string
     */
    protected $hazmatShippingName;

    /**
     * @access public
     * @var string
     */
    protected $hazmatHazardClass;

    /**
     * @access public
     * @var HazmatPackingGroup
     */
    protected $hazmatPackingGroup;

    /**
     * @access public
     * @var string
     */
    protected $hazmatItemUnits;

    /**
     * @access public
     * @var float
     */
    protected $hazmatItemUnitsQty;

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
     * @var ItemCostingMethod
     */
    protected $costingMethod;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var string
     */
    protected $purchaseDescription;

    /**
     * @access public
     * @var boolean
     */
    protected $copyDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var string
     */
    protected $currency;

    /**
     * @access public
     * @var RecordRef
     */
    public $cogsAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $intercoCogsAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $vendor;

    /**
     * @access public
     * @var string
     */
    protected $salesDescription;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastInvtCountDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $nextInvtCountDate;

    /**
     * @access public
     * @var integer
     */
    protected $invtCountInterval;

    /**
     * @access public
     * @var ItemInvtClassification
     */
    protected $invtClassification;

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
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $dropshipExpenseAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $assetAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $matchBillToReceipt;

    /**
     * @access public
     * @var RecordRef
     */
    public $billQtyVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $billPriceVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $billExchRateVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $gainLossAccount;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var float
     */
    protected $handlingCost;

    /**
     * @access public
     * @var float
     */
    protected $weight;

    /**
     * @access public
     * @var string
     */
    protected $costingMethodDisplay;

    /**
     * @access public
     * @var string
     */
    protected $shippingCostUnits;

    /**
     * @access public
     * @var string
     */
    protected $handlingCostUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $unitsType;

    /**
     * @access public
     * @var RecordRef
     */
    public $stockUnit;

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
    protected $minimumQuantityUnits;

    /**
     * @access public
     * @var string
     */
    protected $safetyStockLevelUnits;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $trackLandedCost;

    /**
     * @access public
     * @var boolean
     */
    protected $isDropShipItem;

    /**
     * @access public
     * @var boolean
     */
    protected $isSpecialOrderItem;

    /**
     * @access public
     * @var string
     */
    protected $stockDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $deferredRevenueAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $producer;

    /**
     * @access public
     * @var string
     */
    protected $manufacturer;

    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var string
     */
    protected $mpn;

    /**
     * @access public
     * @var boolean
     */
    protected $multManufactureAddr;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerAddr1;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerCity;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerState;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerZip;

    /**
     * @access public
     * @var Country
     */
    protected $countryOfManufacture;

    /**
     * @access public
     * @var RecordRef
     */
    public $defaultItemShipMethod;

    /**
     * @access public
     * @var ItemCarrier
     */
    protected $itemCarrier;

    /**
     * @access public
     * @var boolean
     */
    protected $roundUpAsComponent;

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
     * @var RecordRefList
     */
    protected $itemShipMethodList;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerTaxId;

    /**
     * @access public
     * @var string
     */
    protected $scheduleBNumber;

    /**
     * @access public
     * @var integer
     */
    protected $scheduleBQuantity;

    /**
     * @access public
     * @var ScheduleBCode
     */
    protected $scheduleBCode;

    /**
     * @access public
     * @var string
     */
    protected $manufacturerTariff;

    /**
     * @access public
     * @var ItemPreferenceCriterion
     */
    protected $preferenceCriterion;

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
     * @var RecordRef
     */
    public $shipPackage;

    /**
     * @access public
     * @var boolean
     */
    protected $shipIndividually;

    /**
     * @access public
     * @var RecordRef
     */
    public $softDescriptor;

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
     * @var float
     */
    protected $transferPrice;

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
    public $preferredLocation;

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
     * @var string
     */
    protected $quantityReorderUnits;

    /**
     * @access public
     * @var integer
     */
    protected $reorderMultiple;

    /**
     * @access public
     * @var float
     */
    protected $totalValue;

    /**
     * @access public
     * @var boolean
     */
    protected $useBins;

    /**
     * @access public
     * @var integer
     */
    protected $leadTime;

    /**
     * @access public
     * @var boolean
     */
    protected $autoLeadTime;

    /**
     * @access public
     * @var boolean
     */
    protected $autoReorderPoint;

    /**
     * @access public
     * @var boolean
     */
    protected $autoPreferredStockLevel;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevelDays;

    /**
     * @access public
     * @var float
     */
    protected $averageCost;

    /**
     * @access public
     * @var float
     */
    protected $safetyStockLevel;

    /**
     * @access public
     * @var float
     */
    protected $lastPurchasePrice;

    /**
     * @access public
     * @var integer
     */
    protected $safetyStockLevelDays;

    /**
     * @access public
     * @var integer
     */
    protected $backwardConsumptionDays;

    /**
     * @access public
     * @var boolean
     */
    protected $seasonalDemand;

    /**
     * @access public
     * @var float
     */
    protected $demandModifier;

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
     * @var ItemWeightUnit
     */
    protected $weightUnit;

    /**
     * @access public
     * @var string
     */
    protected $weightUnits;

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
     * @var string
     */
    protected $shoppingDotComCategory;

    /**
     * @access public
     * @var integer
     */
    protected $shopzillaCategoryId;

    /**
     * @access public
     * @var string
     */
    protected $nexTagCategory;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var string
     */
    protected $quantityOnHandUnits;

    /**
     * @access public
     * @var float
     */
    protected $onHandValueMli;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var float
     */
    protected $reorderPoint;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevel;

    /**
     * @access public
     * @var string
     */
    protected $reorderPointUnits;

    /**
     * @access public
     * @var float
     */
    protected $defaultReturnCost;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyReplenishmentMethod;

    /**
     * @access public
     * @var RecordRef
     */
    public $alternateDemandSourceItem;

    /**
     * @access public
     * @var float
     */
    protected $fixedLotSize;

    /**
     * @access public
     * @var PeriodicLotSizeType
     */
    protected $periodicLotSizeType;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyType;

    /**
     * @access public
     * @var integer
     */
    protected $demandTimeFence;

    /**
     * @access public
     * @var integer
     */
    protected $supplyTimeFence;

    /**
     * @access public
     * @var integer
     */
    protected $rescheduleInDays;

    /**
     * @access public
     * @var integer
     */
    protected $rescheduleOutDays;

    /**
     * @access public
     * @var integer
     */
    protected $periodicLotSizeDays;

    /**
     * @access public
     * @var RecordRef
     */
    public $supplyLotSizingMethod;

    /**
     * @access public
     * @var integer
     */
    protected $forwardConsumptionDays;

    /**
     * @access public
     * @var RecordRef
     */
    public $demandSource;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var string
     */
    protected $preferredStockLevelUnits;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseTaxCode;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchasePriceVarianceAcct;

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
     * @var boolean
     */
    protected $onSpecial;

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
     * @var string
     */
    protected $specialsDescription;

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
    protected $featuredDescription;

    /**
     * @access public
     * @var ProductFeedList
     */
    protected $productFeedList;

    /**
     * @access public
     * @var string
     */
    protected $urlComponent;

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
     * @var ItemAccountingBookDetailList
     */
    protected $accountingBookDetailList;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $itemNumberOptionsList;

    /**
     * @access public
     * @var SerializedInventoryItemNumbersList
     */
    protected $numbersList;

    /**
     * @access public
     * @var InventoryItemBinNumberList
     */
    protected $binNumberList;

    /**
     * @access public
     * @var SiteCategoryList
     */
    protected $siteCategoryList;

    /**
     * @access public
     * @var SerializedInventoryItemLocationsList
     */
    protected $locationsList;

    /**
     * @access public
     * @var TranslationList
     */
    protected $translationsList;

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
    	"customForm" => "RecordRef",
    	"itemId" => "string",
    	"upcCode" => "string",
    	"displayName" => "string",
    	"matrixType" => "ItemMatrixType",
    	"includeChildren" => "boolean",
    	"vendorName" => "string",
    	"parent" => "RecordRef",
    	"isOnline" => "boolean",
    	"isHazmatItem" => "boolean",
    	"hazmatId" => "string",
    	"hazmatShippingName" => "string",
    	"hazmatHazardClass" => "string",
    	"hazmatPackingGroup" => "HazmatPackingGroup",
    	"hazmatItemUnits" => "string",
    	"hazmatItemUnitsQty" => "float",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"costingMethod" => "ItemCostingMethod",
    	"subsidiaryList" => "RecordRefList",
    	"purchaseDescription" => "string",
    	"copyDescription" => "boolean",
    	"issueProduct" => "RecordRef",
    	"currency" => "string",
    	"cogsAccount" => "RecordRef",
    	"intercoCogsAccount" => "RecordRef",
    	"vendor" => "RecordRef",
    	"salesDescription" => "string",
    	"lastInvtCountDate" => "dateTime",
    	"nextInvtCountDate" => "dateTime",
    	"invtCountInterval" => "integer",
    	"invtClassification" => "ItemInvtClassification",
    	"incomeAccount" => "RecordRef",
    	"intercoIncomeAccount" => "RecordRef",
    	"isTaxable" => "boolean",
    	"taxSchedule" => "RecordRef",
    	"dropshipExpenseAccount" => "RecordRef",
    	"assetAccount" => "RecordRef",
    	"matchBillToReceipt" => "boolean",
    	"billQtyVarianceAcct" => "RecordRef",
    	"billPriceVarianceAcct" => "RecordRef",
    	"billExchRateVarianceAcct" => "RecordRef",
    	"gainLossAccount" => "RecordRef",
    	"shippingCost" => "float",
    	"handlingCost" => "float",
    	"weight" => "float",
    	"costingMethodDisplay" => "string",
    	"shippingCostUnits" => "string",
    	"handlingCostUnits" => "string",
    	"unitsType" => "RecordRef",
    	"stockUnit" => "RecordRef",
    	"purchaseUnit" => "RecordRef",
    	"saleUnit" => "RecordRef",
    	"minimumQuantityUnits" => "string",
    	"safetyStockLevelUnits" => "string",
    	"billingSchedule" => "RecordRef",
    	"trackLandedCost" => "boolean",
    	"isDropShipItem" => "boolean",
    	"isSpecialOrderItem" => "boolean",
    	"stockDescription" => "string",
    	"deferredRevenueAccount" => "RecordRef",
    	"producer" => "boolean",
    	"manufacturer" => "string",
    	"revRecSchedule" => "RecordRef",
    	"mpn" => "string",
    	"multManufactureAddr" => "boolean",
    	"manufacturerAddr1" => "string",
    	"manufacturerCity" => "string",
    	"manufacturerState" => "string",
    	"manufacturerZip" => "string",
    	"countryOfManufacture" => "Country",
    	"defaultItemShipMethod" => "RecordRef",
    	"itemCarrier" => "ItemCarrier",
    	"roundUpAsComponent" => "boolean",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"itemShipMethodList" => "RecordRefList",
    	"manufacturerTaxId" => "string",
    	"scheduleBNumber" => "string",
    	"scheduleBQuantity" => "integer",
    	"scheduleBCode" => "ScheduleBCode",
    	"manufacturerTariff" => "string",
    	"preferenceCriterion" => "ItemPreferenceCriterion",
    	"minimumQuantity" => "integer",
    	"enforceMinQtyInternally" => "boolean",
    	"shipPackage" => "RecordRef",
    	"shipIndividually" => "boolean",
    	"softDescriptor" => "RecordRef",
    	"costCategory" => "RecordRef",
    	"pricesIncludeTax" => "boolean",
    	"quantityPricingSchedule" => "RecordRef",
    	"useMarginalRates" => "boolean",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"transferPrice" => "float",
    	"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
    	"pricingGroup" => "RecordRef",
    	"preferredLocation" => "RecordRef",
    	"vsoePrice" => "float",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"cost" => "float",
    	"costUnits" => "string",
    	"quantityReorderUnits" => "string",
    	"reorderMultiple" => "integer",
    	"totalValue" => "float",
    	"useBins" => "boolean",
    	"leadTime" => "integer",
    	"autoLeadTime" => "boolean",
    	"autoReorderPoint" => "boolean",
    	"autoPreferredStockLevel" => "boolean",
    	"preferredStockLevelDays" => "float",
    	"averageCost" => "float",
    	"safetyStockLevel" => "float",
    	"lastPurchasePrice" => "float",
    	"safetyStockLevelDays" => "integer",
    	"backwardConsumptionDays" => "integer",
    	"seasonalDemand" => "boolean",
    	"demandModifier" => "float",
    	"storeDisplayName" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"weightUnit" => "ItemWeightUnit",
    	"weightUnits" => "string",
    	"storeDisplayImage" => "RecordRef",
    	"storeDescription" => "string",
    	"storeDetailedDescription" => "string",
    	"storeItemTemplate" => "RecordRef",
    	"pageTitle" => "string",
    	"metaTagHtml" => "string",
    	"excludeFromSitemap" => "boolean",
    	"sitemapPriority" => "SitemapPriority",
    	"searchKeywords" => "string",
    	"isDonationItem" => "boolean",
    	"showDefaultDonationAmount" => "boolean",
    	"maxDonationAmount" => "float",
    	"shoppingDotComCategory" => "string",
    	"shopzillaCategoryId" => "integer",
    	"nexTagCategory" => "string",
    	"quantityOnHand" => "float",
    	"quantityOnHandUnits" => "string",
    	"onHandValueMli" => "float",
    	"serialNumbers" => "string",
    	"reorderPoint" => "float",
    	"preferredStockLevel" => "float",
    	"reorderPointUnits" => "string",
    	"defaultReturnCost" => "float",
    	"supplyReplenishmentMethod" => "RecordRef",
    	"alternateDemandSourceItem" => "RecordRef",
    	"fixedLotSize" => "float",
    	"periodicLotSizeType" => "PeriodicLotSizeType",
    	"supplyType" => "RecordRef",
    	"demandTimeFence" => "integer",
    	"supplyTimeFence" => "integer",
    	"rescheduleInDays" => "integer",
    	"rescheduleOutDays" => "integer",
    	"periodicLotSizeDays" => "integer",
    	"supplyLotSizingMethod" => "RecordRef",
    	"forwardConsumptionDays" => "integer",
    	"demandSource" => "RecordRef",
    	"quantityOnOrder" => "float",
    	"preferredStockLevelUnits" => "string",
    	"quantityCommitted" => "float",
    	"quantityAvailable" => "float",
    	"quantityBackOrdered" => "float",
    	"purchaseTaxCode" => "RecordRef",
    	"purchasePriceVarianceAcct" => "RecordRef",
    	"rate" => "float",
    	"salesTaxCode" => "RecordRef",
    	"onSpecial" => "boolean",
    	"dontShowPrice" => "boolean",
    	"noPriceMessage" => "string",
    	"outOfStockMessage" => "string",
    	"specialsDescription" => "string",
    	"outOfStockBehavior" => "ItemOutOfStockBehavior",
    	"relatedItemsDescription" => "string",
    	"featuredDescription" => "string",
    	"productFeedList" => "ProductFeedList",
    	"urlComponent" => "string",
    	"itemOptionsList" => "ItemOptionsList",
    	"matrixOptionList" => "MatrixOptionList",
    	"itemVendorList" => "ItemVendorList",
    	"pricingMatrix" => "PricingMatrix",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"itemNumberOptionsList" => "RecordRefList",
    	"numbersList" => "SerializedInventoryItemNumbersList",
    	"binNumberList" => "InventoryItemBinNumberList",
    	"siteCategoryList" => "SiteCategoryList",
    	"locationsList" => "SerializedInventoryItemLocationsList",
    	"translationsList" => "TranslationList",
    	"presentationItemList" => "PresentationItemList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set itemId
     *
     * @param string $itemId
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set matrixType
     *
     * @param ItemMatrixType $matrixType
     * @return SerializedInventoryItem
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
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return SerializedInventoryItem
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
     * Set vendorName
     *
     * @param string $vendorName
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set isHazmatItem
     *
     * @param boolean $isHazmatItem
     * @return SerializedInventoryItem
     */
    public function setIsHazmatItem($isHazmatItem) {
        $this->isHazmatItem = $isHazmatItem;
        return $this;
    }

    /**
     * Get isHazmatItem
     *
     * @return boolean
     */
    public function getIsHazmatItem() {
        return $this->isHazmatItem;
    }


    /**
     * Set hazmatId
     *
     * @param string $hazmatId
     * @return SerializedInventoryItem
     */
    public function setHazmatId($hazmatId) {
        $this->hazmatId = $hazmatId;
        return $this;
    }

    /**
     * Get hazmatId
     *
     * @return string
     */
    public function getHazmatId() {
        return $this->hazmatId;
    }


    /**
     * Set hazmatShippingName
     *
     * @param string $hazmatShippingName
     * @return SerializedInventoryItem
     */
    public function setHazmatShippingName($hazmatShippingName) {
        $this->hazmatShippingName = $hazmatShippingName;
        return $this;
    }

    /**
     * Get hazmatShippingName
     *
     * @return string
     */
    public function getHazmatShippingName() {
        return $this->hazmatShippingName;
    }


    /**
     * Set hazmatHazardClass
     *
     * @param string $hazmatHazardClass
     * @return SerializedInventoryItem
     */
    public function setHazmatHazardClass($hazmatHazardClass) {
        $this->hazmatHazardClass = $hazmatHazardClass;
        return $this;
    }

    /**
     * Get hazmatHazardClass
     *
     * @return string
     */
    public function getHazmatHazardClass() {
        return $this->hazmatHazardClass;
    }


    /**
     * Set hazmatPackingGroup
     *
     * @param HazmatPackingGroup $hazmatPackingGroup
     * @return SerializedInventoryItem
     */
    public function setHazmatPackingGroup(HazmatPackingGroup $hazmatPackingGroup) {
        $this->hazmatPackingGroup = $hazmatPackingGroup;
        return $this;
    }

    /**
     * Get hazmatPackingGroup
     *
     * @return HazmatPackingGroup
     */
    public function getHazmatPackingGroup() {
        return $this->hazmatPackingGroup;
    }


    /**
     * Set hazmatItemUnits
     *
     * @param string $hazmatItemUnits
     * @return SerializedInventoryItem
     */
    public function setHazmatItemUnits($hazmatItemUnits) {
        $this->hazmatItemUnits = $hazmatItemUnits;
        return $this;
    }

    /**
     * Get hazmatItemUnits
     *
     * @return string
     */
    public function getHazmatItemUnits() {
        return $this->hazmatItemUnits;
    }


    /**
     * Set hazmatItemUnitsQty
     *
     * @param float $hazmatItemUnitsQty
     * @return SerializedInventoryItem
     */
    public function setHazmatItemUnitsQty($hazmatItemUnitsQty) {
        $this->hazmatItemUnitsQty = $hazmatItemUnitsQty;
        return $this;
    }

    /**
     * Get hazmatItemUnitsQty
     *
     * @return float
     */
    public function getHazmatItemUnitsQty() {
        return $this->hazmatItemUnitsQty;
    }


    /**
     * Set isGcoCompliant
     *
     * @param boolean $isGcoCompliant
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set costingMethod
     *
     * @param ItemCostingMethod $costingMethod
     * @return SerializedInventoryItem
     */
    public function setCostingMethod(ItemCostingMethod $costingMethod) {
        $this->costingMethod = $costingMethod;
        return $this;
    }

    /**
     * Get costingMethod
     *
     * @return ItemCostingMethod
     */
    public function getCostingMethod() {
        return $this->costingMethod;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return SerializedInventoryItem
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
     * Set purchaseDescription
     *
     * @param string $purchaseDescription
     * @return SerializedInventoryItem
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
     * Set copyDescription
     *
     * @param boolean $copyDescription
     * @return SerializedInventoryItem
     */
    public function setCopyDescription($copyDescription) {
        $this->copyDescription = $copyDescription;
        return $this;
    }

    /**
     * Get copyDescription
     *
     * @return boolean
     */
    public function getCopyDescription() {
        return $this->copyDescription;
    }


    /**
     * Set currency
     *
     * @param string $currency
     * @return SerializedInventoryItem
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
     * Set salesDescription
     *
     * @param string $salesDescription
     * @return SerializedInventoryItem
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
     * Set lastInvtCountDate
     *
     * @param \DateTime $lastInvtCountDate
     * @return SerializedInventoryItem
     */
    public function setLastInvtCountDate(\DateTime $lastInvtCountDate) {
        $this->lastInvtCountDate = $lastInvtCountDate->format('c');
        return $this;
    }

    /**
     * Get lastInvtCountDate
     *
     * @return \DateTime
     */
    public function getLastInvtCountDate() {
        return new \DateTime($this->lastInvtCountDate);
    }


    /**
     * Set nextInvtCountDate
     *
     * @param \DateTime $nextInvtCountDate
     * @return SerializedInventoryItem
     */
    public function setNextInvtCountDate(\DateTime $nextInvtCountDate) {
        $this->nextInvtCountDate = $nextInvtCountDate->format('c');
        return $this;
    }

    /**
     * Get nextInvtCountDate
     *
     * @return \DateTime
     */
    public function getNextInvtCountDate() {
        return new \DateTime($this->nextInvtCountDate);
    }


    /**
     * Set invtCountInterval
     *
     * @param integer $invtCountInterval
     * @return SerializedInventoryItem
     */
    public function setInvtCountInterval($invtCountInterval) {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * Get invtCountInterval
     *
     * @return integer
     */
    public function getInvtCountInterval() {
        return $this->invtCountInterval;
    }


    /**
     * Set invtClassification
     *
     * @param ItemInvtClassification $invtClassification
     * @return SerializedInventoryItem
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification) {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * Get invtClassification
     *
     * @return ItemInvtClassification
     */
    public function getInvtClassification() {
        return $this->invtClassification;
    }


    /**
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return SerializedInventoryItem
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
     * Set matchBillToReceipt
     *
     * @param boolean $matchBillToReceipt
     * @return SerializedInventoryItem
     */
    public function setMatchBillToReceipt($matchBillToReceipt) {
        $this->matchBillToReceipt = $matchBillToReceipt;
        return $this;
    }

    /**
     * Get matchBillToReceipt
     *
     * @return boolean
     */
    public function getMatchBillToReceipt() {
        return $this->matchBillToReceipt;
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return SerializedInventoryItem
     */
    public function setShippingCost($shippingCost) {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost() {
        return $this->shippingCost;
    }


    /**
     * Set handlingCost
     *
     * @param float $handlingCost
     * @return SerializedInventoryItem
     */
    public function setHandlingCost($handlingCost) {
        $this->handlingCost = $handlingCost;
        return $this;
    }

    /**
     * Get handlingCost
     *
     * @return float
     */
    public function getHandlingCost() {
        return $this->handlingCost;
    }


    /**
     * Set weight
     *
     * @param float $weight
     * @return SerializedInventoryItem
     */
    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight() {
        return $this->weight;
    }


    /**
     * Set costingMethodDisplay
     *
     * @param string $costingMethodDisplay
     * @return SerializedInventoryItem
     */
    public function setCostingMethodDisplay($costingMethodDisplay) {
        $this->costingMethodDisplay = $costingMethodDisplay;
        return $this;
    }

    /**
     * Get costingMethodDisplay
     *
     * @return string
     */
    public function getCostingMethodDisplay() {
        return $this->costingMethodDisplay;
    }


    /**
     * Set shippingCostUnits
     *
     * @param string $shippingCostUnits
     * @return SerializedInventoryItem
     */
    public function setShippingCostUnits($shippingCostUnits) {
        $this->shippingCostUnits = $shippingCostUnits;
        return $this;
    }

    /**
     * Get shippingCostUnits
     *
     * @return string
     */
    public function getShippingCostUnits() {
        return $this->shippingCostUnits;
    }


    /**
     * Set handlingCostUnits
     *
     * @param string $handlingCostUnits
     * @return SerializedInventoryItem
     */
    public function setHandlingCostUnits($handlingCostUnits) {
        $this->handlingCostUnits = $handlingCostUnits;
        return $this;
    }

    /**
     * Get handlingCostUnits
     *
     * @return string
     */
    public function getHandlingCostUnits() {
        return $this->handlingCostUnits;
    }


    /**
     * Set minimumQuantityUnits
     *
     * @param string $minimumQuantityUnits
     * @return SerializedInventoryItem
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
     * Set safetyStockLevelUnits
     *
     * @param string $safetyStockLevelUnits
     * @return SerializedInventoryItem
     */
    public function setSafetyStockLevelUnits($safetyStockLevelUnits) {
        $this->safetyStockLevelUnits = $safetyStockLevelUnits;
        return $this;
    }

    /**
     * Get safetyStockLevelUnits
     *
     * @return string
     */
    public function getSafetyStockLevelUnits() {
        return $this->safetyStockLevelUnits;
    }


    /**
     * Set trackLandedCost
     *
     * @param boolean $trackLandedCost
     * @return SerializedInventoryItem
     */
    public function setTrackLandedCost($trackLandedCost) {
        $this->trackLandedCost = $trackLandedCost;
        return $this;
    }

    /**
     * Get trackLandedCost
     *
     * @return boolean
     */
    public function getTrackLandedCost() {
        return $this->trackLandedCost;
    }


    /**
     * Set isDropShipItem
     *
     * @param boolean $isDropShipItem
     * @return SerializedInventoryItem
     */
    public function setIsDropShipItem($isDropShipItem) {
        $this->isDropShipItem = $isDropShipItem;
        return $this;
    }

    /**
     * Get isDropShipItem
     *
     * @return boolean
     */
    public function getIsDropShipItem() {
        return $this->isDropShipItem;
    }


    /**
     * Set isSpecialOrderItem
     *
     * @param boolean $isSpecialOrderItem
     * @return SerializedInventoryItem
     */
    public function setIsSpecialOrderItem($isSpecialOrderItem) {
        $this->isSpecialOrderItem = $isSpecialOrderItem;
        return $this;
    }

    /**
     * Get isSpecialOrderItem
     *
     * @return boolean
     */
    public function getIsSpecialOrderItem() {
        return $this->isSpecialOrderItem;
    }


    /**
     * Set stockDescription
     *
     * @param string $stockDescription
     * @return SerializedInventoryItem
     */
    public function setStockDescription($stockDescription) {
        $this->stockDescription = $stockDescription;
        return $this;
    }

    /**
     * Get stockDescription
     *
     * @return string
     */
    public function getStockDescription() {
        return $this->stockDescription;
    }


    /**
     * Set producer
     *
     * @param boolean $producer
     * @return SerializedInventoryItem
     */
    public function setProducer($producer) {
        $this->producer = $producer;
        return $this;
    }

    /**
     * Get producer
     *
     * @return boolean
     */
    public function getProducer() {
        return $this->producer;
    }


    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return SerializedInventoryItem
     */
    public function setManufacturer($manufacturer) {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer() {
        return $this->manufacturer;
    }


    /**
     * Set mpn
     *
     * @param string $mpn
     * @return SerializedInventoryItem
     */
    public function setMpn($mpn) {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * Get mpn
     *
     * @return string
     */
    public function getMpn() {
        return $this->mpn;
    }


    /**
     * Set multManufactureAddr
     *
     * @param boolean $multManufactureAddr
     * @return SerializedInventoryItem
     */
    public function setMultManufactureAddr($multManufactureAddr) {
        $this->multManufactureAddr = $multManufactureAddr;
        return $this;
    }

    /**
     * Get multManufactureAddr
     *
     * @return boolean
     */
    public function getMultManufactureAddr() {
        return $this->multManufactureAddr;
    }


    /**
     * Set manufacturerAddr1
     *
     * @param string $manufacturerAddr1
     * @return SerializedInventoryItem
     */
    public function setManufacturerAddr1($manufacturerAddr1) {
        $this->manufacturerAddr1 = $manufacturerAddr1;
        return $this;
    }

    /**
     * Get manufacturerAddr1
     *
     * @return string
     */
    public function getManufacturerAddr1() {
        return $this->manufacturerAddr1;
    }


    /**
     * Set manufacturerCity
     *
     * @param string $manufacturerCity
     * @return SerializedInventoryItem
     */
    public function setManufacturerCity($manufacturerCity) {
        $this->manufacturerCity = $manufacturerCity;
        return $this;
    }

    /**
     * Get manufacturerCity
     *
     * @return string
     */
    public function getManufacturerCity() {
        return $this->manufacturerCity;
    }


    /**
     * Set manufacturerState
     *
     * @param string $manufacturerState
     * @return SerializedInventoryItem
     */
    public function setManufacturerState($manufacturerState) {
        $this->manufacturerState = $manufacturerState;
        return $this;
    }

    /**
     * Get manufacturerState
     *
     * @return string
     */
    public function getManufacturerState() {
        return $this->manufacturerState;
    }


    /**
     * Set manufacturerZip
     *
     * @param string $manufacturerZip
     * @return SerializedInventoryItem
     */
    public function setManufacturerZip($manufacturerZip) {
        $this->manufacturerZip = $manufacturerZip;
        return $this;
    }

    /**
     * Get manufacturerZip
     *
     * @return string
     */
    public function getManufacturerZip() {
        return $this->manufacturerZip;
    }


    /**
     * Set countryOfManufacture
     *
     * @param Country $countryOfManufacture
     * @return SerializedInventoryItem
     */
    public function setCountryOfManufacture(Country $countryOfManufacture) {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }

    /**
     * Get countryOfManufacture
     *
     * @return Country
     */
    public function getCountryOfManufacture() {
        return $this->countryOfManufacture;
    }


    /**
     * Set itemCarrier
     *
     * @param ItemCarrier $itemCarrier
     * @return SerializedInventoryItem
     */
    public function setItemCarrier(ItemCarrier $itemCarrier) {
        $this->itemCarrier = $itemCarrier;
        return $this;
    }

    /**
     * Get itemCarrier
     *
     * @return ItemCarrier
     */
    public function getItemCarrier() {
        return $this->itemCarrier;
    }


    /**
     * Set roundUpAsComponent
     *
     * @param boolean $roundUpAsComponent
     * @return SerializedInventoryItem
     */
    public function setRoundUpAsComponent($roundUpAsComponent) {
        $this->roundUpAsComponent = $roundUpAsComponent;
        return $this;
    }

    /**
     * Get roundUpAsComponent
     *
     * @return boolean
     */
    public function getRoundUpAsComponent() {
        return $this->roundUpAsComponent;
    }


    /**
     * Set purchaseOrderQuantity
     *
     * @param float $purchaseOrderQuantity
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set itemShipMethodList
     *
     * @param RecordRefList $itemShipMethodList
     * @return SerializedInventoryItem
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList) {
        $this->itemShipMethodList = $itemShipMethodList;
        return $this;
    }

    /**
     * Get itemShipMethodList
     *
     * @return RecordRefList
     */
    public function getItemShipMethodList() {
        return $this->itemShipMethodList;
    }


    /**
     * Set manufacturerTaxId
     *
     * @param string $manufacturerTaxId
     * @return SerializedInventoryItem
     */
    public function setManufacturerTaxId($manufacturerTaxId) {
        $this->manufacturerTaxId = $manufacturerTaxId;
        return $this;
    }

    /**
     * Get manufacturerTaxId
     *
     * @return string
     */
    public function getManufacturerTaxId() {
        return $this->manufacturerTaxId;
    }


    /**
     * Set scheduleBNumber
     *
     * @param string $scheduleBNumber
     * @return SerializedInventoryItem
     */
    public function setScheduleBNumber($scheduleBNumber) {
        $this->scheduleBNumber = $scheduleBNumber;
        return $this;
    }

    /**
     * Get scheduleBNumber
     *
     * @return string
     */
    public function getScheduleBNumber() {
        return $this->scheduleBNumber;
    }


    /**
     * Set scheduleBQuantity
     *
     * @param integer $scheduleBQuantity
     * @return SerializedInventoryItem
     */
    public function setScheduleBQuantity($scheduleBQuantity) {
        $this->scheduleBQuantity = $scheduleBQuantity;
        return $this;
    }

    /**
     * Get scheduleBQuantity
     *
     * @return integer
     */
    public function getScheduleBQuantity() {
        return $this->scheduleBQuantity;
    }


    /**
     * Set scheduleBCode
     *
     * @param ScheduleBCode $scheduleBCode
     * @return SerializedInventoryItem
     */
    public function setScheduleBCode(ScheduleBCode $scheduleBCode) {
        $this->scheduleBCode = $scheduleBCode;
        return $this;
    }

    /**
     * Get scheduleBCode
     *
     * @return ScheduleBCode
     */
    public function getScheduleBCode() {
        return $this->scheduleBCode;
    }


    /**
     * Set manufacturerTariff
     *
     * @param string $manufacturerTariff
     * @return SerializedInventoryItem
     */
    public function setManufacturerTariff($manufacturerTariff) {
        $this->manufacturerTariff = $manufacturerTariff;
        return $this;
    }

    /**
     * Get manufacturerTariff
     *
     * @return string
     */
    public function getManufacturerTariff() {
        return $this->manufacturerTariff;
    }


    /**
     * Set preferenceCriterion
     *
     * @param ItemPreferenceCriterion $preferenceCriterion
     * @return SerializedInventoryItem
     */
    public function setPreferenceCriterion(ItemPreferenceCriterion $preferenceCriterion) {
        $this->preferenceCriterion = $preferenceCriterion;
        return $this;
    }

    /**
     * Get preferenceCriterion
     *
     * @return ItemPreferenceCriterion
     */
    public function getPreferenceCriterion() {
        return $this->preferenceCriterion;
    }


    /**
     * Set minimumQuantity
     *
     * @param integer $minimumQuantity
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set shipIndividually
     *
     * @param boolean $shipIndividually
     * @return SerializedInventoryItem
     */
    public function setShipIndividually($shipIndividually) {
        $this->shipIndividually = $shipIndividually;
        return $this;
    }

    /**
     * Get shipIndividually
     *
     * @return boolean
     */
    public function getShipIndividually() {
        return $this->shipIndividually;
    }


    /**
     * Set pricesIncludeTax
     *
     * @param boolean $pricesIncludeTax
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set transferPrice
     *
     * @param float $transferPrice
     * @return SerializedInventoryItem
     */
    public function setTransferPrice($transferPrice) {
        $this->transferPrice = $transferPrice;
        return $this;
    }

    /**
     * Get transferPrice
     *
     * @return float
     */
    public function getTransferPrice() {
        return $this->transferPrice;
    }


    /**
     * Set overallQuantityPricingType
     *
     * @param ItemOverallQuantityPricingType $overallQuantityPricingType
     * @return SerializedInventoryItem
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
     * Set vsoePrice
     *
     * @param float $vsoePrice
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set cost
     *
     * @param float $cost
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set quantityReorderUnits
     *
     * @param string $quantityReorderUnits
     * @return SerializedInventoryItem
     */
    public function setQuantityReorderUnits($quantityReorderUnits) {
        $this->quantityReorderUnits = $quantityReorderUnits;
        return $this;
    }

    /**
     * Get quantityReorderUnits
     *
     * @return string
     */
    public function getQuantityReorderUnits() {
        return $this->quantityReorderUnits;
    }


    /**
     * Set reorderMultiple
     *
     * @param integer $reorderMultiple
     * @return SerializedInventoryItem
     */
    public function setReorderMultiple($reorderMultiple) {
        $this->reorderMultiple = $reorderMultiple;
        return $this;
    }

    /**
     * Get reorderMultiple
     *
     * @return integer
     */
    public function getReorderMultiple() {
        return $this->reorderMultiple;
    }


    /**
     * Set totalValue
     *
     * @param float $totalValue
     * @return SerializedInventoryItem
     */
    public function setTotalValue($totalValue) {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * Get totalValue
     *
     * @return float
     */
    public function getTotalValue() {
        return $this->totalValue;
    }


    /**
     * Set useBins
     *
     * @param boolean $useBins
     * @return SerializedInventoryItem
     */
    public function setUseBins($useBins) {
        $this->useBins = $useBins;
        return $this;
    }

    /**
     * Get useBins
     *
     * @return boolean
     */
    public function getUseBins() {
        return $this->useBins;
    }


    /**
     * Set leadTime
     *
     * @param integer $leadTime
     * @return SerializedInventoryItem
     */
    public function setLeadTime($leadTime) {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * Get leadTime
     *
     * @return integer
     */
    public function getLeadTime() {
        return $this->leadTime;
    }


    /**
     * Set autoLeadTime
     *
     * @param boolean $autoLeadTime
     * @return SerializedInventoryItem
     */
    public function setAutoLeadTime($autoLeadTime) {
        $this->autoLeadTime = $autoLeadTime;
        return $this;
    }

    /**
     * Get autoLeadTime
     *
     * @return boolean
     */
    public function getAutoLeadTime() {
        return $this->autoLeadTime;
    }


    /**
     * Set autoReorderPoint
     *
     * @param boolean $autoReorderPoint
     * @return SerializedInventoryItem
     */
    public function setAutoReorderPoint($autoReorderPoint) {
        $this->autoReorderPoint = $autoReorderPoint;
        return $this;
    }

    /**
     * Get autoReorderPoint
     *
     * @return boolean
     */
    public function getAutoReorderPoint() {
        return $this->autoReorderPoint;
    }


    /**
     * Set autoPreferredStockLevel
     *
     * @param boolean $autoPreferredStockLevel
     * @return SerializedInventoryItem
     */
    public function setAutoPreferredStockLevel($autoPreferredStockLevel) {
        $this->autoPreferredStockLevel = $autoPreferredStockLevel;
        return $this;
    }

    /**
     * Get autoPreferredStockLevel
     *
     * @return boolean
     */
    public function getAutoPreferredStockLevel() {
        return $this->autoPreferredStockLevel;
    }


    /**
     * Set preferredStockLevelDays
     *
     * @param float $preferredStockLevelDays
     * @return SerializedInventoryItem
     */
    public function setPreferredStockLevelDays($preferredStockLevelDays) {
        $this->preferredStockLevelDays = $preferredStockLevelDays;
        return $this;
    }

    /**
     * Get preferredStockLevelDays
     *
     * @return float
     */
    public function getPreferredStockLevelDays() {
        return $this->preferredStockLevelDays;
    }


    /**
     * Set averageCost
     *
     * @param float $averageCost
     * @return SerializedInventoryItem
     */
    public function setAverageCost($averageCost) {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * Get averageCost
     *
     * @return float
     */
    public function getAverageCost() {
        return $this->averageCost;
    }


    /**
     * Set safetyStockLevel
     *
     * @param float $safetyStockLevel
     * @return SerializedInventoryItem
     */
    public function setSafetyStockLevel($safetyStockLevel) {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * Get safetyStockLevel
     *
     * @return float
     */
    public function getSafetyStockLevel() {
        return $this->safetyStockLevel;
    }


    /**
     * Set lastPurchasePrice
     *
     * @param float $lastPurchasePrice
     * @return SerializedInventoryItem
     */
    public function setLastPurchasePrice($lastPurchasePrice) {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * Get lastPurchasePrice
     *
     * @return float
     */
    public function getLastPurchasePrice() {
        return $this->lastPurchasePrice;
    }


    /**
     * Set safetyStockLevelDays
     *
     * @param integer $safetyStockLevelDays
     * @return SerializedInventoryItem
     */
    public function setSafetyStockLevelDays($safetyStockLevelDays) {
        $this->safetyStockLevelDays = $safetyStockLevelDays;
        return $this;
    }

    /**
     * Get safetyStockLevelDays
     *
     * @return integer
     */
    public function getSafetyStockLevelDays() {
        return $this->safetyStockLevelDays;
    }


    /**
     * Set backwardConsumptionDays
     *
     * @param integer $backwardConsumptionDays
     * @return SerializedInventoryItem
     */
    public function setBackwardConsumptionDays($backwardConsumptionDays) {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * Get backwardConsumptionDays
     *
     * @return integer
     */
    public function getBackwardConsumptionDays() {
        return $this->backwardConsumptionDays;
    }


    /**
     * Set seasonalDemand
     *
     * @param boolean $seasonalDemand
     * @return SerializedInventoryItem
     */
    public function setSeasonalDemand($seasonalDemand) {
        $this->seasonalDemand = $seasonalDemand;
        return $this;
    }

    /**
     * Get seasonalDemand
     *
     * @return boolean
     */
    public function getSeasonalDemand() {
        return $this->seasonalDemand;
    }


    /**
     * Set demandModifier
     *
     * @param float $demandModifier
     * @return SerializedInventoryItem
     */
    public function setDemandModifier($demandModifier) {
        $this->demandModifier = $demandModifier;
        return $this;
    }

    /**
     * Get demandModifier
     *
     * @return float
     */
    public function getDemandModifier() {
        return $this->demandModifier;
    }


    /**
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return SerializedInventoryItem
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
     * Set weightUnit
     *
     * @param ItemWeightUnit $weightUnit
     * @return SerializedInventoryItem
     */
    public function setWeightUnit(ItemWeightUnit $weightUnit) {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Get weightUnit
     *
     * @return ItemWeightUnit
     */
    public function getWeightUnit() {
        return $this->weightUnit;
    }


    /**
     * Set weightUnits
     *
     * @param string $weightUnits
     * @return SerializedInventoryItem
     */
    public function setWeightUnits($weightUnits) {
        $this->weightUnits = $weightUnits;
        return $this;
    }

    /**
     * Get weightUnits
     *
     * @return string
     */
    public function getWeightUnits() {
        return $this->weightUnits;
    }


    /**
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set metaTagHtml
     *
     * @param string $metaTagHtml
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set shoppingDotComCategory
     *
     * @param string $shoppingDotComCategory
     * @return SerializedInventoryItem
     */
    public function setShoppingDotComCategory($shoppingDotComCategory) {
        $this->shoppingDotComCategory = $shoppingDotComCategory;
        return $this;
    }

    /**
     * Get shoppingDotComCategory
     *
     * @return string
     */
    public function getShoppingDotComCategory() {
        return $this->shoppingDotComCategory;
    }


    /**
     * Set shopzillaCategoryId
     *
     * @param integer $shopzillaCategoryId
     * @return SerializedInventoryItem
     */
    public function setShopzillaCategoryId($shopzillaCategoryId) {
        $this->shopzillaCategoryId = $shopzillaCategoryId;
        return $this;
    }

    /**
     * Get shopzillaCategoryId
     *
     * @return integer
     */
    public function getShopzillaCategoryId() {
        return $this->shopzillaCategoryId;
    }


    /**
     * Set nexTagCategory
     *
     * @param string $nexTagCategory
     * @return SerializedInventoryItem
     */
    public function setNexTagCategory($nexTagCategory) {
        $this->nexTagCategory = $nexTagCategory;
        return $this;
    }

    /**
     * Get nexTagCategory
     *
     * @return string
     */
    public function getNexTagCategory() {
        return $this->nexTagCategory;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return SerializedInventoryItem
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set quantityOnHandUnits
     *
     * @param string $quantityOnHandUnits
     * @return SerializedInventoryItem
     */
    public function setQuantityOnHandUnits($quantityOnHandUnits) {
        $this->quantityOnHandUnits = $quantityOnHandUnits;
        return $this;
    }

    /**
     * Get quantityOnHandUnits
     *
     * @return string
     */
    public function getQuantityOnHandUnits() {
        return $this->quantityOnHandUnits;
    }


    /**
     * Set onHandValueMli
     *
     * @param float $onHandValueMli
     * @return SerializedInventoryItem
     */
    public function setOnHandValueMli($onHandValueMli) {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * Get onHandValueMli
     *
     * @return float
     */
    public function getOnHandValueMli() {
        return $this->onHandValueMli;
    }


    /**
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return SerializedInventoryItem
     */
    public function setSerialNumbers($serialNumbers) {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * Get serialNumbers
     *
     * @return string
     */
    public function getSerialNumbers() {
        return $this->serialNumbers;
    }


    /**
     * Set reorderPoint
     *
     * @param float $reorderPoint
     * @return SerializedInventoryItem
     */
    public function setReorderPoint($reorderPoint) {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return float
     */
    public function getReorderPoint() {
        return $this->reorderPoint;
    }


    /**
     * Set preferredStockLevel
     *
     * @param float $preferredStockLevel
     * @return SerializedInventoryItem
     */
    public function setPreferredStockLevel($preferredStockLevel) {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * Get preferredStockLevel
     *
     * @return float
     */
    public function getPreferredStockLevel() {
        return $this->preferredStockLevel;
    }


    /**
     * Set reorderPointUnits
     *
     * @param string $reorderPointUnits
     * @return SerializedInventoryItem
     */
    public function setReorderPointUnits($reorderPointUnits) {
        $this->reorderPointUnits = $reorderPointUnits;
        return $this;
    }

    /**
     * Get reorderPointUnits
     *
     * @return string
     */
    public function getReorderPointUnits() {
        return $this->reorderPointUnits;
    }


    /**
     * Set defaultReturnCost
     *
     * @param float $defaultReturnCost
     * @return SerializedInventoryItem
     */
    public function setDefaultReturnCost($defaultReturnCost) {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * Get defaultReturnCost
     *
     * @return float
     */
    public function getDefaultReturnCost() {
        return $this->defaultReturnCost;
    }


    /**
     * Set fixedLotSize
     *
     * @param float $fixedLotSize
     * @return SerializedInventoryItem
     */
    public function setFixedLotSize($fixedLotSize) {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * Get fixedLotSize
     *
     * @return float
     */
    public function getFixedLotSize() {
        return $this->fixedLotSize;
    }


    /**
     * Set periodicLotSizeType
     *
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return SerializedInventoryItem
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType) {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * Get periodicLotSizeType
     *
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType() {
        return $this->periodicLotSizeType;
    }


    /**
     * Set demandTimeFence
     *
     * @param integer $demandTimeFence
     * @return SerializedInventoryItem
     */
    public function setDemandTimeFence($demandTimeFence) {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * Get demandTimeFence
     *
     * @return integer
     */
    public function getDemandTimeFence() {
        return $this->demandTimeFence;
    }


    /**
     * Set supplyTimeFence
     *
     * @param integer $supplyTimeFence
     * @return SerializedInventoryItem
     */
    public function setSupplyTimeFence($supplyTimeFence) {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * Get supplyTimeFence
     *
     * @return integer
     */
    public function getSupplyTimeFence() {
        return $this->supplyTimeFence;
    }


    /**
     * Set rescheduleInDays
     *
     * @param integer $rescheduleInDays
     * @return SerializedInventoryItem
     */
    public function setRescheduleInDays($rescheduleInDays) {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * Get rescheduleInDays
     *
     * @return integer
     */
    public function getRescheduleInDays() {
        return $this->rescheduleInDays;
    }


    /**
     * Set rescheduleOutDays
     *
     * @param integer $rescheduleOutDays
     * @return SerializedInventoryItem
     */
    public function setRescheduleOutDays($rescheduleOutDays) {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * Get rescheduleOutDays
     *
     * @return integer
     */
    public function getRescheduleOutDays() {
        return $this->rescheduleOutDays;
    }


    /**
     * Set periodicLotSizeDays
     *
     * @param integer $periodicLotSizeDays
     * @return SerializedInventoryItem
     */
    public function setPeriodicLotSizeDays($periodicLotSizeDays) {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * Get periodicLotSizeDays
     *
     * @return integer
     */
    public function getPeriodicLotSizeDays() {
        return $this->periodicLotSizeDays;
    }


    /**
     * Set forwardConsumptionDays
     *
     * @param integer $forwardConsumptionDays
     * @return SerializedInventoryItem
     */
    public function setForwardConsumptionDays($forwardConsumptionDays) {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * Get forwardConsumptionDays
     *
     * @return integer
     */
    public function getForwardConsumptionDays() {
        return $this->forwardConsumptionDays;
    }


    /**
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return SerializedInventoryItem
     */
    public function setQuantityOnOrder($quantityOnOrder) {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * Get quantityOnOrder
     *
     * @return float
     */
    public function getQuantityOnOrder() {
        return $this->quantityOnOrder;
    }


    /**
     * Set preferredStockLevelUnits
     *
     * @param string $preferredStockLevelUnits
     * @return SerializedInventoryItem
     */
    public function setPreferredStockLevelUnits($preferredStockLevelUnits) {
        $this->preferredStockLevelUnits = $preferredStockLevelUnits;
        return $this;
    }

    /**
     * Get preferredStockLevelUnits
     *
     * @return string
     */
    public function getPreferredStockLevelUnits() {
        return $this->preferredStockLevelUnits;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return SerializedInventoryItem
     */
    public function setQuantityCommitted($quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * Get quantityCommitted
     *
     * @return float
     */
    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return SerializedInventoryItem
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return SerializedInventoryItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered) {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * Get quantityBackOrdered
     *
     * @return float
     */
    public function getQuantityBackOrdered() {
        return $this->quantityBackOrdered;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return SerializedInventoryItem
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
     * Set onSpecial
     *
     * @param boolean $onSpecial
     * @return SerializedInventoryItem
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
     * Set dontShowPrice
     *
     * @param boolean $dontShowPrice
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set specialsDescription
     *
     * @param string $specialsDescription
     * @return SerializedInventoryItem
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
     * Set outOfStockBehavior
     *
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return SerializedInventoryItem
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
     * Set productFeedList
     *
     * @param ProductFeedList $productFeedList
     * @return SerializedInventoryItem
     */
    public function setProductFeedList(ProductFeedList $productFeedList) {
        $this->productFeedList = $productFeedList;
        return $this;
    }

    /**
     * Get productFeedList
     *
     * @return ProductFeedList
     */
    public function getProductFeedList() {
        return $this->productFeedList;
    }


    /**
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return SerializedInventoryItem
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
     * Set itemOptionsList
     *
     * @param ItemOptionsList $itemOptionsList
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * Set itemNumberOptionsList
     *
     * @param RecordRefList $itemNumberOptionsList
     * @return SerializedInventoryItem
     */
    public function setItemNumberOptionsList(RecordRefList $itemNumberOptionsList) {
        $this->itemNumberOptionsList = $itemNumberOptionsList;
        return $this;
    }

    /**
     * Get itemNumberOptionsList
     *
     * @return RecordRefList
     */
    public function getItemNumberOptionsList() {
        return $this->itemNumberOptionsList;
    }


    /**
     * Set numbersList
     *
     * @param SerializedInventoryItemNumbersList $numbersList
     * @return SerializedInventoryItem
     */
    public function setNumbersList(SerializedInventoryItemNumbersList $numbersList) {
        $this->numbersList = $numbersList;
        return $this;
    }

    /**
     * Get numbersList
     *
     * @return SerializedInventoryItemNumbersList
     */
    public function getNumbersList() {
        return $this->numbersList;
    }


    /**
     * Set binNumberList
     *
     * @param InventoryItemBinNumberList $binNumberList
     * @return SerializedInventoryItem
     */
    public function setBinNumberList(InventoryItemBinNumberList $binNumberList) {
        $this->binNumberList = $binNumberList;
        return $this;
    }

    /**
     * Get binNumberList
     *
     * @return InventoryItemBinNumberList
     */
    public function getBinNumberList() {
        return $this->binNumberList;
    }


    /**
     * Set siteCategoryList
     *
     * @param SiteCategoryList $siteCategoryList
     * @return SerializedInventoryItem
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
     * Set locationsList
     *
     * @param SerializedInventoryItemLocationsList $locationsList
     * @return SerializedInventoryItem
     */
    public function setLocationsList(SerializedInventoryItemLocationsList $locationsList) {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * Get locationsList
     *
     * @return SerializedInventoryItemLocationsList
     */
    public function getLocationsList() {
        return $this->locationsList;
    }


    /**
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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
     * @return SerializedInventoryItem
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