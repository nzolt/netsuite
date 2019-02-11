<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemInvtClassification;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemWeightUnit;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCostingMethod;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AssemblyItemEffectiveBomControl;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCarrier;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemPreferenceCriterion;
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
 * SerializedAssemblyItem
 */
class SerializedAssemblyItem extends Record {

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
    protected $useComponentYield;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var boolean
     */
    protected $availableToPartners;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

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
     * @var RecordRef
     */
    public $costCategory;

    /**
     * @access public
     * @var RecordRef
     */
    public $purchaseTaxCode;

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
    public $wipVarianceAcct;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxSchedule;

    /**
     * @access public
     * @var RecordRef
     */
    public $scrapAcct;

    /**
     * @access public
     * @var float
     */
    protected $shippingCost;

    /**
     * @access public
     * @var RecordRef
     */
    public $wipAcct;

    /**
     * @access public
     * @var string
     */
    protected $shippingCostUnits;

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
    protected $handlingCostUnits;

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
     * @var ItemCostingMethod
     */
    protected $costingMethod;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var string
     */
    protected $costingMethodDisplay;

    /**
     * @access public
     * @var float
     */
    protected $rate;

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
    protected $minimumQuantityUnits;

    /**
     * @access public
     * @var string
     */
    protected $defaultRevision;

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
    protected $buildEntireAssembly;

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
     * @var boolean
     */
    protected $useMarginalRates;

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
    protected $safetyStockLevel;

    /**
     * @access public
     * @var string
     */
    protected $safetyStockLevelUnits;

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
     * @var string
     */
    protected $reorderPointUnits;

    /**
     * @access public
     * @var float
     */
    protected $preferredStockLevel;

    /**
     * @access public
     * @var string
     */
    protected $preferredStockLevelUnits;

    /**
     * @access public
     * @var float
     */
    protected $demandModifier;

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
     * @var boolean
     */
    protected $shipIndividually;

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
     * @var float
     */
    protected $quantityOnOrder;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipPackage;

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
    protected $urlComponent;

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
    protected $outOfStockMessage;

    /**
     * @access public
     * @var string
     */
    protected $nexTagCategory;

    /**
     * @access public
     * @var ItemOutOfStockBehavior
     */
    protected $outOfStockBehavior;

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
     * @var SerializedInventoryItemLocationsList
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
     * @var SerializedInventoryItemNumbersList
     */
    protected $numbersList;

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
    	"lastInvtCountDate" => "dateTime",
    	"nextInvtCountDate" => "dateTime",
    	"invtCountInterval" => "integer",
    	"invtClassification" => "ItemInvtClassification",
    	"isGcoCompliant" => "boolean",
    	"offerSupport" => "boolean",
    	"useComponentYield" => "boolean",
    	"isInactive" => "boolean",
    	"subsidiaryList" => "RecordRefList",
    	"availableToPartners" => "boolean",
    	"includeChildren" => "boolean",
    	"department" => "RecordRef",
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
    	"costCategory" => "RecordRef",
    	"purchaseTaxCode" => "RecordRef",
    	"prodQtyVarianceAcct" => "RecordRef",
    	"prodPriceVarianceAcct" => "RecordRef",
    	"purchasePriceVarianceAcct" => "RecordRef",
    	"wipVarianceAcct" => "RecordRef",
    	"taxSchedule" => "RecordRef",
    	"scrapAcct" => "RecordRef",
    	"shippingCost" => "float",
    	"wipAcct" => "RecordRef",
    	"shippingCostUnits" => "string",
    	"handlingCost" => "float",
    	"weight" => "float",
    	"handlingCostUnits" => "string",
    	"weightUnit" => "ItemWeightUnit",
    	"weightUnits" => "string",
    	"costingMethod" => "ItemCostingMethod",
    	"isTaxable" => "boolean",
    	"costingMethodDisplay" => "string",
    	"rate" => "float",
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
    	"minimumQuantityUnits" => "string",
    	"defaultRevision" => "string",
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
    	"scheduleBCode" => "RecordRef",
    	"manufacturerTariff" => "string",
    	"preferenceCriterion" => "ItemPreferenceCriterion",
    	"issueProduct" => "RecordRef",
    	"minimumQuantity" => "integer",
    	"enforceMinQtyInternally" => "boolean",
    	"softDescriptor" => "RecordRef",
    	"isSpecialWorkOrderItem" => "boolean",
    	"pricesIncludeTax" => "boolean",
    	"quantityPricingSchedule" => "RecordRef",
    	"buildEntireAssembly" => "boolean",
    	"quantityOnHand" => "float",
    	"quantityOnHandUnits" => "string",
    	"useMarginalRates" => "boolean",
    	"reorderMultiple" => "integer",
    	"cost" => "float",
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
    	"dropshipExpenseAccount" => "RecordRef",
    	"preferredLocation" => "RecordRef",
    	"totalValue" => "float",
    	"useBins" => "boolean",
    	"averageCost" => "float",
    	"lastPurchasePrice" => "float",
    	"purchaseDescription" => "string",
    	"leadTime" => "integer",
    	"autoLeadTime" => "boolean",
    	"buildTime" => "integer",
    	"safetyStockLevel" => "float",
    	"safetyStockLevelUnits" => "string",
    	"safetyStockLevelDays" => "integer",
    	"seasonalDemand" => "boolean",
    	"serialNumbers" => "string",
    	"reorderPoint" => "float",
    	"reorderPointUnits" => "string",
    	"preferredStockLevel" => "float",
    	"preferredStockLevelUnits" => "string",
    	"demandModifier" => "float",
    	"autoReorderPoint" => "boolean",
    	"autoPreferredStockLevel" => "boolean",
    	"preferredStockLevelDays" => "float",
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
    	"shipIndividually" => "boolean",
    	"quantityCommitted" => "float",
    	"quantityAvailable" => "float",
    	"quantityBackOrdered" => "float",
    	"quantityOnOrder" => "float",
    	"shipPackage" => "RecordRef",
    	"storeDisplayName" => "string",
    	"storeDisplayThumbnail" => "RecordRef",
    	"storeDisplayImage" => "RecordRef",
    	"storeDescription" => "string",
    	"storeDetailedDescription" => "string",
    	"storeItemTemplate" => "RecordRef",
    	"pageTitle" => "string",
    	"metaTagHtml" => "string",
    	"excludeFromSitemap" => "boolean",
    	"sitemapPriority" => "SitemapPriority",
    	"urlComponent" => "string",
    	"searchKeywords" => "string",
    	"isDonationItem" => "boolean",
    	"showDefaultDonationAmount" => "boolean",
    	"maxDonationAmount" => "float",
    	"dontShowPrice" => "boolean",
    	"noPriceMessage" => "string",
    	"shoppingDotComCategory" => "string",
    	"shopzillaCategoryId" => "integer",
    	"outOfStockMessage" => "string",
    	"nexTagCategory" => "string",
    	"outOfStockBehavior" => "ItemOutOfStockBehavior",
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
    	"locationsList" => "SerializedInventoryItemLocationsList",
    	"siteCategoryList" => "SiteCategoryList",
    	"binNumberList" => "InventoryItemBinNumberList",
    	"numbersList" => "SerializedInventoryItemNumbersList",
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set lastInvtCountDate
     *
     * @param \DateTime $lastInvtCountDate
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set isGcoCompliant
     *
     * @param boolean $isGcoCompliant
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set useComponentYield
     *
     * @param boolean $useComponentYield
     * @return SerializedAssemblyItem
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
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return SerializedAssemblyItem
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
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return SerializedAssemblyItem
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
     * Set availableToPartners
     *
     * @param boolean $availableToPartners
     * @return SerializedAssemblyItem
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
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set shippingCostUnits
     *
     * @param string $shippingCostUnits
     * @return SerializedAssemblyItem
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
     * Set handlingCost
     *
     * @param float $handlingCost
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set handlingCostUnits
     *
     * @param string $handlingCostUnits
     * @return SerializedAssemblyItem
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
     * Set weightUnit
     *
     * @param ItemWeightUnit $weightUnit
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set costingMethod
     *
     * @param ItemCostingMethod $costingMethod
     * @return SerializedAssemblyItem
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
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return SerializedAssemblyItem
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
     * Set costingMethodDisplay
     *
     * @param string $costingMethodDisplay
     * @return SerializedAssemblyItem
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
     * Set rate
     *
     * @param float $rate
     * @return SerializedAssemblyItem
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
     * Set trackLandedCost
     *
     * @param boolean $trackLandedCost
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set minimumQuantityUnits
     *
     * @param string $minimumQuantityUnits
     * @return SerializedAssemblyItem
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
     * Set defaultRevision
     *
     * @param string $defaultRevision
     * @return SerializedAssemblyItem
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
     * Set itemCarrier
     *
     * @param ItemCarrier $itemCarrier
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set useMarginalRates
     *
     * @param boolean $useMarginalRates
     * @return SerializedAssemblyItem
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
     * Set reorderMultiple
     *
     * @param integer $reorderMultiple
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set totalValue
     *
     * @param float $totalValue
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set lastPurchasePrice
     *
     * @param float $lastPurchasePrice
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set leadTime
     *
     * @param integer $leadTime
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set safetyStockLevel
     *
     * @param float $safetyStockLevel
     * @return SerializedAssemblyItem
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
     * Set safetyStockLevelUnits
     *
     * @param string $safetyStockLevelUnits
     * @return SerializedAssemblyItem
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
     * Set safetyStockLevelDays
     *
     * @param integer $safetyStockLevelDays
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set reorderPointUnits
     *
     * @param string $reorderPointUnits
     * @return SerializedAssemblyItem
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
     * Set preferredStockLevel
     *
     * @param float $preferredStockLevel
     * @return SerializedAssemblyItem
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
     * Set preferredStockLevelUnits
     *
     * @param string $preferredStockLevelUnits
     * @return SerializedAssemblyItem
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
     * Set demandModifier
     *
     * @param float $demandModifier
     * @return SerializedAssemblyItem
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
     * Set autoReorderPoint
     *
     * @param boolean $autoReorderPoint
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set defaultReturnCost
     *
     * @param float $defaultReturnCost
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set shipIndividually
     *
     * @param boolean $shipIndividually
     * @return SerializedAssemblyItem
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
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set quantityOnOrder
     *
     * @param float $quantityOnOrder
     * @return SerializedAssemblyItem
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
     * Set storeDisplayName
     *
     * @param string $storeDisplayName
     * @return SerializedAssemblyItem
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
     * Set storeDescription
     *
     * @param string $storeDescription
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set urlComponent
     *
     * @param string $urlComponent
     * @return SerializedAssemblyItem
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
     * Set searchKeywords
     *
     * @param string $searchKeywords
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set shoppingDotComCategory
     *
     * @param string $shoppingDotComCategory
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set outOfStockMessage
     *
     * @param string $outOfStockMessage
     * @return SerializedAssemblyItem
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
     * Set nexTagCategory
     *
     * @param string $nexTagCategory
     * @return SerializedAssemblyItem
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
     * Set outOfStockBehavior
     *
     * @param ItemOutOfStockBehavior $outOfStockBehavior
     * @return SerializedAssemblyItem
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
     * Set productFeedList
     *
     * @param ProductFeedList $productFeedList
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @param SerializedInventoryItemLocationsList $locationsList
     * @return SerializedAssemblyItem
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
     * Set siteCategoryList
     *
     * @param SiteCategoryList $siteCategoryList
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * Set numbersList
     *
     * @param SerializedInventoryItemNumbersList $numbersList
     * @return SerializedAssemblyItem
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
     * Set translationsList
     *
     * @param TranslationList $translationsList
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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
     * @return SerializedAssemblyItem
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