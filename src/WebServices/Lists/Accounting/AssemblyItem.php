<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemWeightUnit;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCostingMethod;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AssemblyItemEffectiveBomControl;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCarrier;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemPreferenceCriterion;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemInvtClassification;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\HazmatPackingGroup;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverallQuantityPricingType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOutOfStockBehavior;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * AssemblyItem
 */
class AssemblyItem extends Record {

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
    protected $printItems;

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
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

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
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $cogsAccount;

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
     * @var RecordRef
     */
    public $salesTaxCode;

    /**
     * @access public
     * @var boolean
     */
    protected $useComponentYield;

    /**
     * @access public
     * @var RecordRef
     */
    public $wipVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseTaxCode;

    /**
     * @access public
     * @var RecordRef
     */
    public $scrapAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $wipAcct;

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
     * @var ItemWeightUnit
     */
    protected $weightUnit;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var ItemCostingMethod
     */
    protected $costingMethod;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var string
     */
    protected $costingMethodDisplay;

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
     * @var boolean
     */
    protected $trackLandedCost;

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
     * @var string
     */
    protected $stockDescription;

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
    protected $manufactureraddr1;

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
     * @var AssemblyItemEffectiveBomControl
     */
    protected $effectiveBomControl;

    /**
     * @access public
     * @var string
     */
    protected $defaultRevision;

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
     * @var RecordRef
     */
    public $scheduleBCode;

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
     * @var RecordRef
     */
    public $issueProduct;

    /**
     * @access public
     * @var integer
     */
    protected $minimumQuantity;

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
     * @var boolean
     */
    protected $enforceMinQtyInternally;

    /**
     * @access public
     * @var RecordRef
     */
    public $softDescriptor;

    /**
     * @access public
     * @var boolean
     */
    protected $isSpecialWorkOrderItem;

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
    public $prodQtyVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $prodPriceVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchasePriceVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $quantityPricingSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $buildEntireAssembly;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

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
    public $intercoCogsAccount;

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
     * @var RecordRef
     */
    public $unbuildVarianceAccount;

    /**
     * @access public
     * @var boolean
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var RecordRef
     */
    public $dropshipExpenseAccount;

    /**
     * @access public
     * @var RecordRef
     */
    public $preferredLocation;

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
     * @var float
     */
    protected $averageCost;

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
     * @var integer
     */
    protected $buildTime;

    /**
     * @access public
     * @var float
     */
    protected $lastPurchasePrice;

    /**
     * @access public
     * @var string
     */
    protected $purchaseDescription;

    /**
     * @access public
     * @var float
     */
    protected $safetyStockLevel;

    /**
     * @access public
     * @var integer
     */
    protected $safetyStockLevelDays;

    /**
     * @access public
     * @var boolean
     */
    protected $seasonalDemand;

    /**
     * @access public
     * @var integer
     */
    protected $reorderMultiple;

    /**
     * @access public
     * @var float
     */
    protected $cost;

    /**
     * @access public
     * @var float
     */
    protected $reorderPoint;

    /**
     * @access public
     * @var float
     */
    protected $demandModifier;

    /**
     * @access public
     * @var RecordRef
     */
    public $distributionNetwork;

    /**
     * @access public
     * @var RecordRef
     */
    public $distributionCategory;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevel;

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
    protected $quantityCommitted;

    /**
     * @access public
     * @var boolean
     */
    protected $shipIndividually;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipPackage;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var string
     */
    protected $storeDisplayName;

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
     * @var RecordRef
     */
    public $supplyLotSizingMethod;

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
     * @var RecordRef
     */
    public $storeDisplayThumbnail;

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
    protected $urlComponent;

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
    protected $shoppingDotComCategory;

    /**
     * @access public
     * @var ItemOutOfStockBehavior
     */
    protected $outOfStockBehavior;

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
     * @var ProductFeedList
     */
    protected $productFeedList;

    /**
     * @access public
     * @var string
     */
    protected $relatedItemsDescription;

    /**
     * @access public
     * @var boolean
     */
    protected $onSpecial;

    /**
     * @access public
     * @var string
     */
    protected $specialsDescription;

    /**
     * @access public
     * @var string
     */
    protected $featuredDescription;

    /**
     * @access public
     * @var ItemOptionsList
     */
    protected $itemOptionsList;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $itemNumberOptionsList;

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
     * @var ItemMemberList
     */
    protected $memberList;

    /**
     * @access public
     * @var ItemAccountingBookDetailList
     */
    protected $accountingBookDetailList;

    /**
     * @access public
     * @var InventoryItemLocationsList
     */
    protected $locationsList;

    /**
     * @access public
     * @var SiteCategoryList
     */
    protected $siteCategoryList;

    /**
     * @access public
     * @var InventoryItemBinNumberList
     */
    protected $binNumberList;

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
    	"vendorName" => "string",
    	"parent" => "RecordRef",
    	"printItems" => "boolean",
    	"isOnline" => "boolean",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"isInactive" => "boolean",
    	"availableToPartners" => "boolean",
    	"subsidiaryList" => "RecordRefList",
    	"department" => "RecordRef",
    	"includeChildren" => "boolean",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"description" => "string",
    	"cogsAccount" => "RecordRef",
    	"incomeAccount" => "RecordRef",
    	"intercoIncomeAccount" => "RecordRef",
    	"assetAccount" => "RecordRef",
    	"matchBillToReceipt" => "boolean",
    	"billQtyVarianceAcct" => "RecordRef",
    	"billPriceVarianceAcct" => "RecordRef",
    	"billExchRateVarianceAcct" => "RecordRef",
    	"gainLossAccount" => "RecordRef",
    	"salesTaxCode" => "RecordRef",
    	"useComponentYield" => "boolean",
    	"wipVarianceAcct" => "RecordRef",
    	"purchaseTaxCode" => "RecordRef",
    	"scrapAcct" => "RecordRef",
    	"taxSchedule" => "RecordRef",
    	"wipAcct" => "RecordRef",
    	"shippingCost" => "float",
    	"handlingCost" => "float",
    	"weight" => "float",
    	"weightUnit" => "ItemWeightUnit",
    	"isTaxable" => "boolean",
    	"costingMethod" => "ItemCostingMethod",
    	"rate" => "float",
    	"costingMethodDisplay" => "string",
    	"unitsType" => "RecordRef",
    	"stockUnit" => "RecordRef",
    	"purchaseUnit" => "RecordRef",
    	"saleUnit" => "RecordRef",
    	"trackLandedCost" => "boolean",
    	"billingSchedule" => "RecordRef",
    	"deferredRevenueAccount" => "RecordRef",
    	"revRecSchedule" => "RecordRef",
    	"stockDescription" => "string",
    	"producer" => "boolean",
    	"manufacturer" => "string",
    	"mpn" => "string",
    	"multManufactureAddr" => "boolean",
    	"manufactureraddr1" => "string",
    	"manufacturerCity" => "string",
    	"manufacturerState" => "string",
    	"manufacturerZip" => "string",
    	"countryOfManufacture" => "Country",
    	"effectiveBomControl" => "AssemblyItemEffectiveBomControl",
    	"defaultRevision" => "string",
    	"roundUpAsComponent" => "boolean",
    	"purchaseOrderQuantity" => "float",
    	"purchaseOrderAmount" => "float",
    	"purchaseOrderQuantityDiff" => "float",
    	"receiptQuantity" => "float",
    	"receiptAmount" => "float",
    	"receiptQuantityDiff" => "float",
    	"defaultItemShipMethod" => "RecordRef",
    	"itemCarrier" => "ItemCarrier",
    	"itemShipMethodList" => "RecordRefList",
    	"manufacturerTaxId" => "string",
    	"scheduleBNumber" => "string",
    	"scheduleBQuantity" => "integer",
    	"scheduleBCode" => "RecordRef",
    	"manufacturerTariff" => "string",
    	"preferenceCriterion" => "ItemPreferenceCriterion",
    	"issueProduct" => "RecordRef",
    	"minimumQuantity" => "integer",
    	"lastInvtCountDate" => "dateTime",
    	"nextInvtCountDate" => "dateTime",
    	"invtCountInterval" => "integer",
    	"invtClassification" => "ItemInvtClassification",
    	"enforceMinQtyInternally" => "boolean",
    	"softDescriptor" => "RecordRef",
    	"isSpecialWorkOrderItem" => "boolean",
    	"costCategory" => "RecordRef",
    	"pricesIncludeTax" => "boolean",
    	"prodQtyVarianceAcct" => "RecordRef",
    	"prodPriceVarianceAcct" => "RecordRef",
    	"purchasePriceVarianceAcct" => "RecordRef",
    	"quantityPricingSchedule" => "RecordRef",
    	"buildEntireAssembly" => "boolean",
    	"quantityOnHand" => "float",
    	"useMarginalRates" => "boolean",
    	"costEstimateType" => "ItemCostEstimateType",
    	"isHazmatItem" => "boolean",
    	"hazmatId" => "string",
    	"hazmatShippingName" => "string",
    	"hazmatHazardClass" => "string",
    	"hazmatPackingGroup" => "HazmatPackingGroup",
    	"hazmatItemUnits" => "string",
    	"hazmatItemUnitsQty" => "float",
    	"costEstimate" => "float",
    	"transferPrice" => "float",
    	"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
    	"pricingGroup" => "RecordRef",
    	"intercoCogsAccount" => "RecordRef",
    	"vsoePrice" => "float",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"unbuildVarianceAccount" => "RecordRef",
    	"deferRevRec" => "boolean",
    	"dropshipExpenseAccount" => "RecordRef",
    	"preferredLocation" => "RecordRef",
    	"totalValue" => "float",
    	"useBins" => "boolean",
    	"averageCost" => "float",
    	"leadTime" => "integer",
    	"autoLeadTime" => "boolean",
    	"buildTime" => "integer",
    	"lastPurchasePrice" => "float",
    	"purchaseDescription" => "string",
    	"safetyStockLevel" => "float",
    	"safetyStockLevelDays" => "integer",
    	"seasonalDemand" => "boolean",
    	"reorderMultiple" => "integer",
    	"cost" => "float",
    	"reorderPoint" => "float",
    	"demandModifier" => "float",
    	"distributionNetwork" => "RecordRef",
    	"distributionCategory" => "RecordRef",
    	"preferredStockLevel" => "float",
    	"autoReorderPoint" => "boolean",
    	"autoPreferredStockLevel" => "boolean",
    	"preferredStockLevelDays" => "float",
    	"quantityCommitted" => "float",
    	"shipIndividually" => "boolean",
    	"quantityAvailable" => "float",
    	"shipPackage" => "RecordRef",
    	"quantityBackOrdered" => "float",
    	"storeDisplayName" => "string",
    	"defaultReturnCost" => "float",
    	"supplyReplenishmentMethod" => "RecordRef",
    	"alternateDemandSourceItem" => "RecordRef",
    	"fixedLotSize" => "float",
    	"supplyType" => "RecordRef",
    	"demandTimeFence" => "integer",
    	"supplyTimeFence" => "integer",
    	"rescheduleInDays" => "integer",
    	"rescheduleOutDays" => "integer",
    	"supplyLotSizingMethod" => "RecordRef",
    	"demandSource" => "RecordRef",
    	"quantityOnOrder" => "float",
    	"storeDisplayThumbnail" => "RecordRef",
    	"storeDisplayImage" => "RecordRef",
    	"storeDescription" => "string",
    	"storeDetailedDescription" => "string",
    	"storeItemTemplate" => "RecordRef",
    	"pageTitle" => "string",
    	"urlComponent" => "string",
    	"metaTagHtml" => "string",
    	"excludeFromSitemap" => "boolean",
    	"sitemapPriority" => "SitemapPriority",
    	"searchKeywords" => "string",
    	"isDonationItem" => "boolean",
    	"showDefaultDonationAmount" => "boolean",
    	"maxDonationAmount" => "float",
    	"dontShowPrice" => "boolean",
    	"noPriceMessage" => "string",
    	"outOfStockMessage" => "string",
    	"shoppingDotComCategory" => "string",
    	"outOfStockBehavior" => "ItemOutOfStockBehavior",
    	"shopzillaCategoryId" => "integer",
    	"nexTagCategory" => "string",
    	"productFeedList" => "ProductFeedList",
    	"relatedItemsDescription" => "string",
    	"onSpecial" => "boolean",
    	"specialsDescription" => "string",
    	"featuredDescription" => "string",
    	"itemOptionsList" => "ItemOptionsList",
    	"itemNumberOptionsList" => "RecordRefList",
    	"itemVendorList" => "ItemVendorList",
    	"pricingMatrix" => "PricingMatrix",
    	"memberList" => "ItemMemberList",
    	"accountingBookDetailList" => "ItemAccountingBookDetailList",
    	"locationsList" => "InventoryItemLocationsList",
    	"siteCategoryList" => "SiteCategoryList",
    	"binNumberList" => "InventoryItemBinNumberList",
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set vendorName
     *
     * @param string $vendorName
     * @return AssemblyItem
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
     * Set printItems
     *
     * @param boolean $printItems
     * @return AssemblyItem
     */
    public function setPrintItems($printItems) {
        $this->printItems = $printItems;
        return $this;
    }

    /**
     * Get printItems
     *
     * @return boolean
     */
    public function getPrintItems() {
        return $this->printItems;
    }


    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return AssemblyItem
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
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return AssemblyItem
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
     * Set description
     *
     * @param string $description
     * @return AssemblyItem
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set matchBillToReceipt
     *
     * @param boolean $matchBillToReceipt
     * @return AssemblyItem
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
     * Set useComponentYield
     *
     * @param boolean $useComponentYield
     * @return AssemblyItem
     */
    public function setUseComponentYield($useComponentYield) {
        $this->useComponentYield = $useComponentYield;
        return $this;
    }

    /**
     * Get useComponentYield
     *
     * @return boolean
     */
    public function getUseComponentYield() {
        return $this->useComponentYield;
    }


    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set weightUnit
     *
     * @param ItemWeightUnit $weightUnit
     * @return AssemblyItem
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
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return AssemblyItem
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
     * Set costingMethod
     *
     * @param ItemCostingMethod $costingMethod
     * @return AssemblyItem
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
     * Set rate
     *
     * @param float $rate
     * @return AssemblyItem
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
     * Set costingMethodDisplay
     *
     * @param string $costingMethodDisplay
     * @return AssemblyItem
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
     * Set trackLandedCost
     *
     * @param boolean $trackLandedCost
     * @return AssemblyItem
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
     * Set stockDescription
     *
     * @param string $stockDescription
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set manufactureraddr1
     *
     * @param string $manufactureraddr1
     * @return AssemblyItem
     */
    public function setManufactureraddr1($manufactureraddr1) {
        $this->manufactureraddr1 = $manufactureraddr1;
        return $this;
    }

    /**
     * Get manufactureraddr1
     *
     * @return string
     */
    public function getManufactureraddr1() {
        return $this->manufactureraddr1;
    }


    /**
     * Set manufacturerCity
     *
     * @param string $manufacturerCity
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set effectiveBomControl
     *
     * @param AssemblyItemEffectiveBomControl $effectiveBomControl
     * @return AssemblyItem
     */
    public function setEffectiveBomControl(AssemblyItemEffectiveBomControl $effectiveBomControl) {
        $this->effectiveBomControl = $effectiveBomControl;
        return $this;
    }

    /**
     * Get effectiveBomControl
     *
     * @return AssemblyItemEffectiveBomControl
     */
    public function getEffectiveBomControl() {
        return $this->effectiveBomControl;
    }


    /**
     * Set defaultRevision
     *
     * @param string $defaultRevision
     * @return AssemblyItem
     */
    public function setDefaultRevision($defaultRevision) {
        $this->defaultRevision = $defaultRevision;
        return $this;
    }

    /**
     * Get defaultRevision
     *
     * @return string
     */
    public function getDefaultRevision() {
        return $this->defaultRevision;
    }


    /**
     * Set roundUpAsComponent
     *
     * @param boolean $roundUpAsComponent
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set itemCarrier
     *
     * @param ItemCarrier $itemCarrier
     * @return AssemblyItem
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
     * Set itemShipMethodList
     *
     * @param RecordRefList $itemShipMethodList
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set manufacturerTariff
     *
     * @param string $manufacturerTariff
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set lastInvtCountDate
     *
     * @param \DateTime $lastInvtCountDate
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set enforceMinQtyInternally
     *
     * @param boolean $enforceMinQtyInternally
     * @return AssemblyItem
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
     * Set isSpecialWorkOrderItem
     *
     * @param boolean $isSpecialWorkOrderItem
     * @return AssemblyItem
     */
    public function setIsSpecialWorkOrderItem($isSpecialWorkOrderItem) {
        $this->isSpecialWorkOrderItem = $isSpecialWorkOrderItem;
        return $this;
    }

    /**
     * Get isSpecialWorkOrderItem
     *
     * @return boolean
     */
    public function getIsSpecialWorkOrderItem() {
        return $this->isSpecialWorkOrderItem;
    }


    /**
     * Set pricesIncludeTax
     *
     * @param boolean $pricesIncludeTax
     * @return AssemblyItem
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
     * Set buildEntireAssembly
     *
     * @param boolean $buildEntireAssembly
     * @return AssemblyItem
     */
    public function setBuildEntireAssembly($buildEntireAssembly) {
        $this->buildEntireAssembly = $buildEntireAssembly;
        return $this;
    }

    /**
     * Get buildEntireAssembly
     *
     * @return boolean
     */
    public function getBuildEntireAssembly() {
        return $this->buildEntireAssembly;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return AssemblyItem
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
     * Set useMarginalRates
     *
     * @param boolean $useMarginalRates
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set isHazmatItem
     *
     * @param boolean $isHazmatItem
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set costEstimate
     *
     * @param float $costEstimate
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set totalValue
     *
     * @param float $totalValue
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set averageCost
     *
     * @param float $averageCost
     * @return AssemblyItem
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
     * Set leadTime
     *
     * @param integer $leadTime
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set buildTime
     *
     * @param integer $buildTime
     * @return AssemblyItem
     */
    public function setBuildTime($buildTime) {
        $this->buildTime = $buildTime;
        return $this;
    }

    /**
     * Get buildTime
     *
     * @return integer
     */
    public function getBuildTime() {
        return $this->buildTime;
    }


    /**
     * Set lastPurchasePrice
     *
     * @param float $lastPurchasePrice
     * @return AssemblyItem
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
     * Set purchaseDescription
     *
     * @param string $purchaseDescription
     * @return AssemblyItem
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
     * Set safetyStockLevel
     *
     * @param float $safetyStockLevel
     * @return AssemblyItem
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
     * Set safetyStockLevelDays
     *
     * @param integer $safetyStockLevelDays
     * @return AssemblyItem
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
     * Set seasonalDemand
     *
     * @param boolean $seasonalDemand
     * @return AssemblyItem
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
     * Set reorderMultiple
     *
     * @param integer $reorderMultiple
     * @return AssemblyItem
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
     * Set cost
     *
     * @param float $cost
     * @return AssemblyItem
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
     * Set reorderPoint
     *
     * @param float $reorderPoint
     * @return AssemblyItem
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
     * Set demandModifier
     *
     * @param float $demandModifier
     * @return AssemblyItem
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
     * Set preferredStockLevel
     *
     * @param float $preferredStockLevel
     * @return AssemblyItem
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
     * Set autoReorderPoint
     *
     * @param boolean $autoReorderPoint
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return AssemblyItem
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
     * Set shipIndividually
     *
     * @param boolean $shipIndividually
     * @return AssemblyItem
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
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return AssemblyItem
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
     * Set defaultReturnCost
     *
     * @param float $defaultReturnCost
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set demandTimeFence
     *
     * @param integer $demandTimeFence
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return AssemblyItem
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
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return AssemblyItem
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
     * Set metaTagHtml
     *
     * @param string $metaTagHtml
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set dontShowPrice
     *
     * @param boolean $dontShowPrice
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set shoppingDotComCategory
     *
     * @param string $shoppingDotComCategory
     * @return AssemblyItem
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
     * Set outOfStockBehavior
     *
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return AssemblyItem
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
     * Set shopzillaCategoryId
     *
     * @param integer $shopzillaCategoryId
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set productFeedList
     *
     * @param ProductFeedList $productFeedList
     * @return AssemblyItem
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
     * Set relatedItemsDescription
     *
     * @param string $relatedItemsDescription
     * @return AssemblyItem
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
     * Set onSpecial
     *
     * @param boolean $onSpecial
     * @return AssemblyItem
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
     * Set specialsDescription
     *
     * @param string $specialsDescription
     * @return AssemblyItem
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
     * Set featuredDescription
     *
     * @param string $featuredDescription
     * @return AssemblyItem
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
     * Set itemOptionsList
     *
     * @param ItemOptionsList $itemOptionsList
     * @return AssemblyItem
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
     * Set itemNumberOptionsList
     *
     * @param RecordRefList $itemNumberOptionsList
     * @return AssemblyItem
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
     * Set itemVendorList
     *
     * @param ItemVendorList $itemVendorList
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * Set memberList
     *
     * @param ItemMemberList $memberList
     * @return AssemblyItem
     */
    public function setMemberList(ItemMemberList $memberList) {
        $this->memberList = $memberList;
        return $this;
    }

    /**
     * Get memberList
     *
     * @return ItemMemberList
     */
    public function getMemberList() {
        return $this->memberList;
    }


    /**
     * Set accountingBookDetailList
     *
     * @param ItemAccountingBookDetailList $accountingBookDetailList
     * @return AssemblyItem
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
     * Set locationsList
     *
     * @param InventoryItemLocationsList $locationsList
     * @return AssemblyItem
     */
    public function setLocationsList(InventoryItemLocationsList $locationsList) {
        $this->locationsList = $locationsList;
        return $this;
    }

    /**
     * Get locationsList
     *
     * @return InventoryItemLocationsList
     */
    public function getLocationsList() {
        return $this->locationsList;
    }


    /**
     * Set siteCategoryList
     *
     * @param SiteCategoryList $siteCategoryList
     * @return AssemblyItem
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
     * Set binNumberList
     *
     * @param InventoryItemBinNumberList $binNumberList
     * @return AssemblyItem
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
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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
     * @return AssemblyItem
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