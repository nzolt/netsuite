<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchTextNumberField;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\PostingPeriodDate;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList;

/**
 * TransactionSearchBasic
 */
class TransactionSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $account;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $accountType;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $actualShipDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $altSalesAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $altSalesNetAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amountPaid;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amountRemaining;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $amountUnbilled;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $anyLineItem;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $appliedToForeignAmount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $appliedToIsFxVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $appliedToLinkAmount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $appliedToLinkType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $appliedToTransaction;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $applyingForeignAmount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $applyingIsFxVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $applyingLinkAmount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $applyingLinkType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $applyingTransaction;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $approvalStatus;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $authCode;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $autoCalculateLag;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $avsStreetMatch;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $avsZipMatch;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $billable;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billAddress;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billAddressee;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billAttention;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billCity;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $billCountry;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billCounty;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $billedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billingSchedule;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $billingStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $billingTransaction;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billPhone;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billState;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $billVarianceStatus;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $billZip;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $binNumber;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $binNumberQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $bomQuantity;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $bookSpecificTransaction;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $buildEntireAssembly;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $buildVariance;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $built;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $catchUpPeriod;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $ccCustomerCode;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $ccExpireDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $ccName;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $ccNumber;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $chargeType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $class;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $cleared;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $closed;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $closeDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $cogs;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $commissionEffectiveDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $commit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $componentYield;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $confirmationNumber;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $contribution;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costComponentAmount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $costComponentCategory;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $costComponentItem;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costComponentQuantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costComponentStandardCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costEstimate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $costEstimateRate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $costEstimateType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $createdBy;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $createdFrom;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $creditAmount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $cscMatch;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $currency;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $customerSubOf;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $customForm;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $custType;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dateCreated;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysOpen;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $daysOverdue;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $debitAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $deferredRevenue;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $department;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $depositDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $depositTransaction;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $drAccount;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $dueDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $email;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $employee;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $endDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $entity;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $entityStatus;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estGrossProfit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $estGrossProfitPct;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $exchangeRate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $excludeCommission;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $excludeFromRateRequest;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $expectedCloseDate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $expectedReceiptDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $expenseCategory;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $expenseDate;

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
     * @var SearchBooleanField
     */
    protected $finChrg;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $firmed;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $forecastType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $fulfillingTransaction;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $fxAccount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxCostEstimate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxCostEstimateRate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxEstGrossProfit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxTranCostEstimate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxVsoeAllocation;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxVsoeAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $fxVsoePrice;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $gcoAvailabelToCharge;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $gcoAvailableToRefund;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $gcoAvsStreetMatch;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $gcoAvsZipMatch;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $gcoBuyerAccountAge;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoBuyerIp;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoChargeAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoChargebackAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoConfirmedChargedTotal;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoConfirmedRefundedTotal;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoCreditcardNumber;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $gcoCscMatch;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoFinancialState;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoFulfillmentState;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoOrderId;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoOrderTotal;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoPromotionAmount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoPromotionName;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoRefundAmount;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $gcoShippingTotal;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $gcoStateChangedDetail;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $giftCertificate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $grossAmount;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $includeInForecast;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $intercoStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $intercoTransaction;

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
     * @var SearchBooleanField
     */
    protected $inVsoeBundle;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isAllocation;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isBackflush;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isGcoChargeback;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isGcoChargeConfirmed;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isGcoPaymentGuaranteed;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isGcoRefundConfirmed;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isIntercompanyAdjustment;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isMultiShipTo;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isPayPalMeth;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isReversal;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isRevRecTransaction;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isScrap;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isShipAddress;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isTransferPriceCosting;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isVsoeAlloc;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $isWip;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $item;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $itemRevision;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $itemSubOf;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $landedCostPerLine;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $leadSource;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $location;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $mainLine;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $mainName;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $manufacturingRouting;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $matchBillToReceipt;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $memo;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $memoMain;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $memorized;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $merchantAccount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $message;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $multiSubsidiary;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $nameText;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $netAmount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $nextApprover;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $nextBillDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $nonReimbursable;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $number;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $opportunity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $orderPriority;

    /**
     * @access public
     * @var SearchTextNumberField
     */
    protected $otherRefNum;

    /**
     * @access public
     * @var SearchTextNumberField
     */
    protected $otherRefNumNonDeposit;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $overheadParentItem;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $packageCount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $paidTransaction;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $parent;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partner;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $partnerContribution;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partnerRole;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $partnerTeamMember;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $payingTransaction;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $paymentApproved;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $paymentEventDate;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $paymentEventHoldReason;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $paymentEventPurchaseCardUsed;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $paymentEventPurchaseDataSent;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $paymentEventResult;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $paymentEventType;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $paymentHold;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $paymentMethod;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $payPalPending;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $payPalStatus;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $payPalTranId;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $pnRefNum;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $poAsText;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $posting;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

    /**
     * @access public
     * @var PostingPeriodDate
     */
    protected $postingPeriodRelative;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $priceLevel;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $printedPickingTicket;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $probability;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $projectedAmount;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $promoCode;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $purchaseOrder;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantity;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityBilled;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityPacked;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityPicked;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityRevCommitted;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $quantityShipRecv;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $recognizedRevenue;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $recordType;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $refNumber;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $revCommitStatus;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $revCommittingStatus;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $revCommittingTransaction;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $revenueStatus;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $reversalDate;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $reversalNumber;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $revRecEndDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $revRecOnRevCommitment;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $revRecStartDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $revRecTermInMonths;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $salesEffectiveDate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesOrder;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesRep;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesTeamMember;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $salesTeamRole;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $schedulingMethod;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $serialNumber;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $serialNumberCost;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $serialNumberCostAdjustment;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $serialNumberQuantity;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipAddress;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipAddressee;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipAttention;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipCity;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shipComplete;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $shipCountry;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipCounty;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $shipDate;

    /**
     * @access public
     * @var SearchLongField
     */
    protected $shipGroup;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $shipMethod;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipPhone;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shipping;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shipRecvStatus;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $shipRecvStatusLine;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $shipState;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $shipTo;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $shipZip;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $source;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $startDate;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $statistical;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $status;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $subsidiary;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $taxItem;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $taxLine;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxPeriod;

    /**
     * @access public
     * @var PostingPeriodDate
     */
    protected $taxPeriodRelative;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $taxRate;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $terms;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $title;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $toBeEmailed;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $toBePrinted;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $toSubsidiary;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $totalAmount;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $trackingNumbers;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranCostEstimate;

    /**
     * @access public
     * @var SearchDateField
     */
    protected $tranDate;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranEstGrossProfit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranEstGrossProfitPct;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $tranFxEstGrossProfit;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $tranId;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $tranIsVsoeBundle;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $transactionDiscount;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $transactionLineType;

    /**
     * @access public
     * @var SearchStringField
     */
    protected $transactionNumber;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $transferLocation;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $transferOrderQuantityCommitted;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $transferOrderQuantityPacked;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $transferOrderQuantityPicked;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $transferOrderQuantityReceived;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $transferOrderQuantityShipped;

    /**
     * @access public
     * @var SearchEnumMultiSelectField
     */
    protected $type;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $unit;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $unitCostOverride;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $unitsType;

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $vendType;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $visibleToCustomer;

    /**
     * @access public
     * @var SearchBooleanField
     */
    protected $voided;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $vsoeAllocation;

    /**
     * @access public
     * @var SearchDoubleField
     */
    protected $vsoeAmount;

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
     * @var SearchCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"account" => "SearchMultiSelectField",
    	"accountType" => "SearchMultiSelectField",
    	"actualShipDate" => "SearchDateField",
    	"altSalesAmount" => "SearchDoubleField",
    	"altSalesNetAmount" => "SearchDoubleField",
    	"amount" => "SearchDoubleField",
    	"amountPaid" => "SearchDoubleField",
    	"amountRemaining" => "SearchDoubleField",
    	"amountUnbilled" => "SearchDoubleField",
    	"anyLineItem" => "SearchMultiSelectField",
    	"appliedToForeignAmount" => "SearchDoubleField",
    	"appliedToIsFxVariance" => "SearchBooleanField",
    	"appliedToLinkAmount" => "SearchDoubleField",
    	"appliedToLinkType" => "SearchEnumMultiSelectField",
    	"appliedToTransaction" => "SearchMultiSelectField",
    	"applyingForeignAmount" => "SearchDoubleField",
    	"applyingIsFxVariance" => "SearchBooleanField",
    	"applyingLinkAmount" => "SearchDoubleField",
    	"applyingLinkType" => "SearchEnumMultiSelectField",
    	"applyingTransaction" => "SearchMultiSelectField",
    	"approvalStatus" => "SearchEnumMultiSelectField",
    	"authCode" => "SearchStringField",
    	"autoCalculateLag" => "SearchBooleanField",
    	"avsStreetMatch" => "SearchEnumMultiSelectField",
    	"avsZipMatch" => "SearchEnumMultiSelectField",
    	"billable" => "SearchBooleanField",
    	"billAddress" => "SearchStringField",
    	"billAddressee" => "SearchStringField",
    	"billAttention" => "SearchStringField",
    	"billCity" => "SearchStringField",
    	"billCountry" => "SearchEnumMultiSelectField",
    	"billCounty" => "SearchStringField",
    	"billedDate" => "SearchDateField",
    	"billingSchedule" => "SearchMultiSelectField",
    	"billingStatus" => "SearchBooleanField",
    	"billingTransaction" => "SearchMultiSelectField",
    	"billPhone" => "SearchStringField",
    	"billState" => "SearchStringField",
    	"billVarianceStatus" => "SearchEnumMultiSelectField",
    	"billZip" => "SearchStringField",
    	"binNumber" => "SearchStringField",
    	"binNumberQuantity" => "SearchDoubleField",
    	"bomQuantity" => "SearchDoubleField",
    	"bookSpecificTransaction" => "SearchBooleanField",
    	"buildEntireAssembly" => "SearchBooleanField",
    	"buildVariance" => "SearchDoubleField",
    	"built" => "SearchDoubleField",
    	"catchUpPeriod" => "SearchMultiSelectField",
    	"ccCustomerCode" => "SearchStringField",
    	"ccExpireDate" => "SearchDateField",
    	"ccName" => "SearchStringField",
    	"ccNumber" => "SearchStringField",
    	"chargeType" => "SearchEnumMultiSelectField",
    	"class" => "SearchMultiSelectField",
    	"cleared" => "SearchBooleanField",
    	"closed" => "SearchBooleanField",
    	"closeDate" => "SearchDateField",
    	"cogs" => "SearchBooleanField",
    	"commissionEffectiveDate" => "SearchDateField",
    	"commit" => "SearchEnumMultiSelectField",
    	"componentYield" => "SearchDoubleField",
    	"confirmationNumber" => "SearchStringField",
    	"contribution" => "SearchLongField",
    	"costComponentAmount" => "SearchDoubleField",
    	"costComponentCategory" => "SearchMultiSelectField",
    	"costComponentItem" => "SearchMultiSelectField",
    	"costComponentQuantity" => "SearchDoubleField",
    	"costComponentStandardCost" => "SearchDoubleField",
    	"costEstimate" => "SearchDoubleField",
    	"costEstimateRate" => "SearchDoubleField",
    	"costEstimateType" => "SearchEnumMultiSelectField",
    	"createdBy" => "SearchMultiSelectField",
    	"createdFrom" => "SearchMultiSelectField",
    	"creditAmount" => "SearchDoubleField",
    	"cscMatch" => "SearchEnumMultiSelectField",
    	"currency" => "SearchMultiSelectField",
    	"customerSubOf" => "SearchMultiSelectField",
    	"customForm" => "SearchMultiSelectField",
    	"custType" => "SearchMultiSelectField",
    	"dateCreated" => "SearchDateField",
    	"daysOpen" => "SearchLongField",
    	"daysOverdue" => "SearchLongField",
    	"debitAmount" => "SearchDoubleField",
    	"deferredRevenue" => "SearchDoubleField",
    	"deferRevRec" => "SearchBooleanField",
    	"department" => "SearchMultiSelectField",
    	"depositDate" => "SearchDateField",
    	"depositTransaction" => "SearchMultiSelectField",
    	"drAccount" => "SearchMultiSelectField",
    	"dueDate" => "SearchDateField",
    	"email" => "SearchStringField",
    	"employee" => "SearchMultiSelectField",
    	"endDate" => "SearchDateField",
    	"entity" => "SearchMultiSelectField",
    	"entityStatus" => "SearchMultiSelectField",
    	"estGrossProfit" => "SearchDoubleField",
    	"estGrossProfitPct" => "SearchDoubleField",
    	"exchangeRate" => "SearchDoubleField",
    	"excludeCommission" => "SearchBooleanField",
    	"excludeFromRateRequest" => "SearchBooleanField",
    	"expectedCloseDate" => "SearchDateField",
    	"expectedReceiptDate" => "SearchDateField",
    	"expenseCategory" => "SearchMultiSelectField",
    	"expenseDate" => "SearchDateField",
    	"externalId" => "SearchMultiSelectField",
    	"externalIdString" => "SearchStringField",
    	"finChrg" => "SearchBooleanField",
    	"firmed" => "SearchBooleanField",
    	"forecastType" => "SearchEnumMultiSelectField",
    	"fulfillingTransaction" => "SearchMultiSelectField",
    	"fxAccount" => "SearchMultiSelectField",
    	"fxAmount" => "SearchDoubleField",
    	"fxCostEstimate" => "SearchDoubleField",
    	"fxCostEstimateRate" => "SearchDoubleField",
    	"fxEstGrossProfit" => "SearchDoubleField",
    	"fxTranCostEstimate" => "SearchDoubleField",
    	"fxVsoeAllocation" => "SearchDoubleField",
    	"fxVsoeAmount" => "SearchDoubleField",
    	"fxVsoePrice" => "SearchDoubleField",
    	"gcoAvailabelToCharge" => "SearchBooleanField",
    	"gcoAvailableToRefund" => "SearchBooleanField",
    	"gcoAvsStreetMatch" => "SearchEnumMultiSelectField",
    	"gcoAvsZipMatch" => "SearchEnumMultiSelectField",
    	"gcoBuyerAccountAge" => "SearchLongField",
    	"gcoBuyerIp" => "SearchStringField",
    	"gcoChargeAmount" => "SearchDoubleField",
    	"gcoChargebackAmount" => "SearchDoubleField",
    	"gcoConfirmedChargedTotal" => "SearchDoubleField",
    	"gcoConfirmedRefundedTotal" => "SearchDoubleField",
    	"gcoCreditcardNumber" => "SearchStringField",
    	"gcoCscMatch" => "SearchEnumMultiSelectField",
    	"gcoFinancialState" => "SearchStringField",
    	"gcoFulfillmentState" => "SearchStringField",
    	"gcoOrderId" => "SearchStringField",
    	"gcoOrderTotal" => "SearchDoubleField",
    	"gcoPromotionAmount" => "SearchDoubleField",
    	"gcoPromotionName" => "SearchStringField",
    	"gcoRefundAmount" => "SearchDoubleField",
    	"gcoShippingTotal" => "SearchDoubleField",
    	"gcoStateChangedDetail" => "SearchStringField",
    	"giftCertificate" => "SearchStringField",
    	"grossAmount" => "SearchDoubleField",
    	"includeInForecast" => "SearchBooleanField",
    	"intercoStatus" => "SearchEnumMultiSelectField",
    	"intercoTransaction" => "SearchMultiSelectField",
    	"internalId" => "SearchMultiSelectField",
    	"internalIdNumber" => "SearchLongField",
    	"inVsoeBundle" => "SearchBooleanField",
    	"isAllocation" => "SearchBooleanField",
    	"isBackflush" => "SearchBooleanField",
    	"isGcoChargeback" => "SearchBooleanField",
    	"isGcoChargeConfirmed" => "SearchBooleanField",
    	"isGcoPaymentGuaranteed" => "SearchBooleanField",
    	"isGcoRefundConfirmed" => "SearchBooleanField",
    	"isIntercompanyAdjustment" => "SearchBooleanField",
    	"isMultiShipTo" => "SearchBooleanField",
    	"isPayPalMeth" => "SearchBooleanField",
    	"isReversal" => "SearchBooleanField",
    	"isRevRecTransaction" => "SearchBooleanField",
    	"isScrap" => "SearchBooleanField",
    	"isShipAddress" => "SearchBooleanField",
    	"isTransferPriceCosting" => "SearchBooleanField",
    	"isVsoeAlloc" => "SearchBooleanField",
    	"isWip" => "SearchBooleanField",
    	"item" => "SearchMultiSelectField",
    	"itemRevision" => "SearchMultiSelectField",
    	"itemSubOf" => "SearchMultiSelectField",
    	"landedCostPerLine" => "SearchBooleanField",
    	"lastModifiedDate" => "SearchDateField",
    	"leadSource" => "SearchMultiSelectField",
    	"location" => "SearchMultiSelectField",
    	"mainLine" => "SearchBooleanField",
    	"mainName" => "SearchMultiSelectField",
    	"manufacturingRouting" => "SearchMultiSelectField",
    	"matchBillToReceipt" => "SearchBooleanField",
    	"memo" => "SearchStringField",
    	"memoMain" => "SearchStringField",
    	"memorized" => "SearchBooleanField",
    	"merchantAccount" => "SearchStringField",
    	"message" => "SearchStringField",
    	"multiSubsidiary" => "SearchBooleanField",
    	"nameText" => "SearchStringField",
    	"netAmount" => "SearchDoubleField",
    	"nextApprover" => "SearchMultiSelectField",
    	"nextBillDate" => "SearchDateField",
    	"nonReimbursable" => "SearchBooleanField",
    	"number" => "SearchLongField",
    	"opportunity" => "SearchMultiSelectField",
    	"orderPriority" => "SearchDoubleField",
    	"otherRefNum" => "SearchTextNumberField",
    	"otherRefNumNonDeposit" => "SearchTextNumberField",
    	"overheadParentItem" => "SearchMultiSelectField",
    	"packageCount" => "SearchLongField",
    	"paidTransaction" => "SearchMultiSelectField",
    	"parent" => "SearchLongField",
    	"partner" => "SearchMultiSelectField",
    	"partnerContribution" => "SearchLongField",
    	"partnerRole" => "SearchMultiSelectField",
    	"partnerTeamMember" => "SearchMultiSelectField",
    	"payingTransaction" => "SearchMultiSelectField",
    	"paymentApproved" => "SearchBooleanField",
    	"paymentEventDate" => "SearchDateField",
    	"paymentEventHoldReason" => "SearchEnumMultiSelectField",
    	"paymentEventPurchaseCardUsed" => "SearchBooleanField",
    	"paymentEventPurchaseDataSent" => "SearchBooleanField",
    	"paymentEventResult" => "SearchEnumMultiSelectField",
    	"paymentEventType" => "SearchEnumMultiSelectField",
    	"paymentHold" => "SearchBooleanField",
    	"paymentMethod" => "SearchMultiSelectField",
    	"payPalPending" => "SearchBooleanField",
    	"payPalStatus" => "SearchStringField",
    	"payPalTranId" => "SearchStringField",
    	"pnRefNum" => "SearchStringField",
    	"poAsText" => "SearchStringField",
    	"posting" => "SearchBooleanField",
    	"postingPeriod" => "RecordRef",
    	"postingPeriodRelative" => "PostingPeriodDate",
    	"priceLevel" => "SearchMultiSelectField",
    	"printedPickingTicket" => "SearchBooleanField",
    	"probability" => "SearchLongField",
    	"projectedAmount" => "SearchDoubleField",
    	"promoCode" => "SearchMultiSelectField",
    	"purchaseOrder" => "SearchMultiSelectField",
    	"quantity" => "SearchDoubleField",
    	"quantityBilled" => "SearchDoubleField",
    	"quantityCommitted" => "SearchDoubleField",
    	"quantityPacked" => "SearchDoubleField",
    	"quantityPicked" => "SearchDoubleField",
    	"quantityRevCommitted" => "SearchDoubleField",
    	"quantityShipRecv" => "SearchDoubleField",
    	"recognizedRevenue" => "SearchDoubleField",
    	"recordType" => "SearchStringField",
    	"refNumber" => "SearchLongField",
    	"revCommitStatus" => "SearchEnumMultiSelectField",
    	"revCommittingStatus" => "SearchBooleanField",
    	"revCommittingTransaction" => "SearchMultiSelectField",
    	"revenueStatus" => "SearchEnumMultiSelectField",
    	"reversalDate" => "SearchDateField",
    	"reversalNumber" => "SearchStringField",
    	"revRecEndDate" => "SearchDateField",
    	"revRecOnRevCommitment" => "SearchBooleanField",
    	"revRecStartDate" => "SearchDateField",
    	"revRecTermInMonths" => "SearchLongField",
    	"salesEffectiveDate" => "SearchDateField",
    	"salesOrder" => "SearchMultiSelectField",
    	"salesRep" => "SearchMultiSelectField",
    	"salesTeamMember" => "SearchMultiSelectField",
    	"salesTeamRole" => "SearchMultiSelectField",
    	"schedulingMethod" => "SearchEnumMultiSelectField",
    	"serialNumber" => "SearchStringField",
    	"serialNumberCost" => "SearchDoubleField",
    	"serialNumberCostAdjustment" => "SearchDoubleField",
    	"serialNumberQuantity" => "SearchDoubleField",
    	"serialNumbers" => "SearchStringField",
    	"shipAddress" => "SearchStringField",
    	"shipAddressee" => "SearchStringField",
    	"shipAttention" => "SearchStringField",
    	"shipCity" => "SearchStringField",
    	"shipComplete" => "SearchBooleanField",
    	"shipCountry" => "SearchEnumMultiSelectField",
    	"shipCounty" => "SearchStringField",
    	"shipDate" => "SearchDateField",
    	"shipGroup" => "SearchLongField",
    	"shipMethod" => "SearchMultiSelectField",
    	"shipPhone" => "SearchStringField",
    	"shipping" => "SearchBooleanField",
    	"shipRecvStatus" => "SearchBooleanField",
    	"shipRecvStatusLine" => "SearchBooleanField",
    	"shipState" => "SearchMultiSelectField",
    	"shipTo" => "SearchMultiSelectField",
    	"shipZip" => "SearchStringField",
    	"source" => "SearchEnumMultiSelectField",
    	"startDate" => "SearchDateField",
    	"statistical" => "SearchBooleanField",
    	"status" => "SearchEnumMultiSelectField",
    	"subsidiary" => "SearchMultiSelectField",
    	"taxItem" => "SearchMultiSelectField",
    	"taxLine" => "SearchBooleanField",
    	"taxPeriod" => "RecordRef",
    	"taxPeriodRelative" => "PostingPeriodDate",
    	"taxRate" => "SearchDoubleField",
    	"terms" => "SearchMultiSelectField",
    	"title" => "SearchStringField",
    	"toBeEmailed" => "SearchBooleanField",
    	"toBePrinted" => "SearchBooleanField",
    	"toSubsidiary" => "SearchMultiSelectField",
    	"totalAmount" => "SearchDoubleField",
    	"trackingNumbers" => "SearchStringField",
    	"tranCostEstimate" => "SearchDoubleField",
    	"tranDate" => "SearchDateField",
    	"tranEstGrossProfit" => "SearchDoubleField",
    	"tranEstGrossProfitPct" => "SearchDoubleField",
    	"tranFxEstGrossProfit" => "SearchDoubleField",
    	"tranId" => "SearchStringField",
    	"tranIsVsoeBundle" => "SearchBooleanField",
    	"transactionDiscount" => "SearchBooleanField",
    	"transactionLineType" => "SearchEnumMultiSelectField",
    	"transactionNumber" => "SearchStringField",
    	"transferLocation" => "SearchMultiSelectField",
    	"transferOrderQuantityCommitted" => "SearchDoubleField",
    	"transferOrderQuantityPacked" => "SearchDoubleField",
    	"transferOrderQuantityPicked" => "SearchDoubleField",
    	"transferOrderQuantityReceived" => "SearchDoubleField",
    	"transferOrderQuantityShipped" => "SearchDoubleField",
    	"type" => "SearchEnumMultiSelectField",
    	"unit" => "SearchMultiSelectField",
    	"unitCostOverride" => "SearchDoubleField",
    	"unitsType" => "SearchMultiSelectField",
    	"vendType" => "SearchMultiSelectField",
    	"visibleToCustomer" => "SearchBooleanField",
    	"voided" => "SearchBooleanField",
    	"vsoeAllocation" => "SearchDoubleField",
    	"vsoeAmount" => "SearchDoubleField",
    	"vsoeDeferral" => "SearchEnumMultiSelectField",
    	"vsoeDelivered" => "SearchBooleanField",
    	"vsoePermitDiscount" => "SearchEnumMultiSelectField",
    	"vsoePrice" => "SearchDoubleField",
    	"webSite" => "SearchMultiSelectField",
    	"customFieldList" => "SearchCustomFieldList",
    );

    /**
     * Set account
     *
     * @param SearchMultiSelectField $account
     * @return TransactionSearchBasic
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
     * Set accountType
     *
     * @param SearchMultiSelectField $accountType
     * @return TransactionSearchBasic
     */
    public function setAccountType(SearchMultiSelectField $accountType) {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Get accountType
     *
     * @return SearchMultiSelectField
     */
    public function getAccountType() {
        return $this->accountType;
    }


    /**
     * Set actualShipDate
     *
     * @param SearchDateField $actualShipDate
     * @return TransactionSearchBasic
     */
    public function setActualShipDate(SearchDateField $actualShipDate) {
        $this->actualShipDate = $actualShipDate;
        return $this;
    }

    /**
     * Get actualShipDate
     *
     * @return SearchDateField
     */
    public function getActualShipDate() {
        return $this->actualShipDate;
    }


    /**
     * Set altSalesAmount
     *
     * @param SearchDoubleField $altSalesAmount
     * @return TransactionSearchBasic
     */
    public function setAltSalesAmount(SearchDoubleField $altSalesAmount) {
        $this->altSalesAmount = $altSalesAmount;
        return $this;
    }

    /**
     * Get altSalesAmount
     *
     * @return SearchDoubleField
     */
    public function getAltSalesAmount() {
        return $this->altSalesAmount;
    }


    /**
     * Set altSalesNetAmount
     *
     * @param SearchDoubleField $altSalesNetAmount
     * @return TransactionSearchBasic
     */
    public function setAltSalesNetAmount(SearchDoubleField $altSalesNetAmount) {
        $this->altSalesNetAmount = $altSalesNetAmount;
        return $this;
    }

    /**
     * Get altSalesNetAmount
     *
     * @return SearchDoubleField
     */
    public function getAltSalesNetAmount() {
        return $this->altSalesNetAmount;
    }


    /**
     * Set amount
     *
     * @param SearchDoubleField $amount
     * @return TransactionSearchBasic
     */
    public function setAmount(SearchDoubleField $amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return SearchDoubleField
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set amountPaid
     *
     * @param SearchDoubleField $amountPaid
     * @return TransactionSearchBasic
     */
    public function setAmountPaid(SearchDoubleField $amountPaid) {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    /**
     * Get amountPaid
     *
     * @return SearchDoubleField
     */
    public function getAmountPaid() {
        return $this->amountPaid;
    }


    /**
     * Set amountRemaining
     *
     * @param SearchDoubleField $amountRemaining
     * @return TransactionSearchBasic
     */
    public function setAmountRemaining(SearchDoubleField $amountRemaining) {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * Get amountRemaining
     *
     * @return SearchDoubleField
     */
    public function getAmountRemaining() {
        return $this->amountRemaining;
    }


    /**
     * Set amountUnbilled
     *
     * @param SearchDoubleField $amountUnbilled
     * @return TransactionSearchBasic
     */
    public function setAmountUnbilled(SearchDoubleField $amountUnbilled) {
        $this->amountUnbilled = $amountUnbilled;
        return $this;
    }

    /**
     * Get amountUnbilled
     *
     * @return SearchDoubleField
     */
    public function getAmountUnbilled() {
        return $this->amountUnbilled;
    }


    /**
     * Set anyLineItem
     *
     * @param SearchMultiSelectField $anyLineItem
     * @return TransactionSearchBasic
     */
    public function setAnyLineItem(SearchMultiSelectField $anyLineItem) {
        $this->anyLineItem = $anyLineItem;
        return $this;
    }

    /**
     * Get anyLineItem
     *
     * @return SearchMultiSelectField
     */
    public function getAnyLineItem() {
        return $this->anyLineItem;
    }


    /**
     * Set appliedToForeignAmount
     *
     * @param SearchDoubleField $appliedToForeignAmount
     * @return TransactionSearchBasic
     */
    public function setAppliedToForeignAmount(SearchDoubleField $appliedToForeignAmount) {
        $this->appliedToForeignAmount = $appliedToForeignAmount;
        return $this;
    }

    /**
     * Get appliedToForeignAmount
     *
     * @return SearchDoubleField
     */
    public function getAppliedToForeignAmount() {
        return $this->appliedToForeignAmount;
    }


    /**
     * Set appliedToIsFxVariance
     *
     * @param SearchBooleanField $appliedToIsFxVariance
     * @return TransactionSearchBasic
     */
    public function setAppliedToIsFxVariance(SearchBooleanField $appliedToIsFxVariance) {
        $this->appliedToIsFxVariance = $appliedToIsFxVariance;
        return $this;
    }

    /**
     * Get appliedToIsFxVariance
     *
     * @return SearchBooleanField
     */
    public function getAppliedToIsFxVariance() {
        return $this->appliedToIsFxVariance;
    }


    /**
     * Set appliedToLinkAmount
     *
     * @param SearchDoubleField $appliedToLinkAmount
     * @return TransactionSearchBasic
     */
    public function setAppliedToLinkAmount(SearchDoubleField $appliedToLinkAmount) {
        $this->appliedToLinkAmount = $appliedToLinkAmount;
        return $this;
    }

    /**
     * Get appliedToLinkAmount
     *
     * @return SearchDoubleField
     */
    public function getAppliedToLinkAmount() {
        return $this->appliedToLinkAmount;
    }


    /**
     * Set appliedToLinkType
     *
     * @param SearchEnumMultiSelectField $appliedToLinkType
     * @return TransactionSearchBasic
     */
    public function setAppliedToLinkType(SearchEnumMultiSelectField $appliedToLinkType) {
        $this->appliedToLinkType = $appliedToLinkType;
        return $this;
    }

    /**
     * Get appliedToLinkType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAppliedToLinkType() {
        return $this->appliedToLinkType;
    }


    /**
     * Set appliedToTransaction
     *
     * @param SearchMultiSelectField $appliedToTransaction
     * @return TransactionSearchBasic
     */
    public function setAppliedToTransaction(SearchMultiSelectField $appliedToTransaction) {
        $this->appliedToTransaction = $appliedToTransaction;
        return $this;
    }

    /**
     * Get appliedToTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getAppliedToTransaction() {
        return $this->appliedToTransaction;
    }


    /**
     * Set applyingForeignAmount
     *
     * @param SearchDoubleField $applyingForeignAmount
     * @return TransactionSearchBasic
     */
    public function setApplyingForeignAmount(SearchDoubleField $applyingForeignAmount) {
        $this->applyingForeignAmount = $applyingForeignAmount;
        return $this;
    }

    /**
     * Get applyingForeignAmount
     *
     * @return SearchDoubleField
     */
    public function getApplyingForeignAmount() {
        return $this->applyingForeignAmount;
    }


    /**
     * Set applyingIsFxVariance
     *
     * @param SearchBooleanField $applyingIsFxVariance
     * @return TransactionSearchBasic
     */
    public function setApplyingIsFxVariance(SearchBooleanField $applyingIsFxVariance) {
        $this->applyingIsFxVariance = $applyingIsFxVariance;
        return $this;
    }

    /**
     * Get applyingIsFxVariance
     *
     * @return SearchBooleanField
     */
    public function getApplyingIsFxVariance() {
        return $this->applyingIsFxVariance;
    }


    /**
     * Set applyingLinkAmount
     *
     * @param SearchDoubleField $applyingLinkAmount
     * @return TransactionSearchBasic
     */
    public function setApplyingLinkAmount(SearchDoubleField $applyingLinkAmount) {
        $this->applyingLinkAmount = $applyingLinkAmount;
        return $this;
    }

    /**
     * Get applyingLinkAmount
     *
     * @return SearchDoubleField
     */
    public function getApplyingLinkAmount() {
        return $this->applyingLinkAmount;
    }


    /**
     * Set applyingLinkType
     *
     * @param SearchEnumMultiSelectField $applyingLinkType
     * @return TransactionSearchBasic
     */
    public function setApplyingLinkType(SearchEnumMultiSelectField $applyingLinkType) {
        $this->applyingLinkType = $applyingLinkType;
        return $this;
    }

    /**
     * Get applyingLinkType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getApplyingLinkType() {
        return $this->applyingLinkType;
    }


    /**
     * Set applyingTransaction
     *
     * @param SearchMultiSelectField $applyingTransaction
     * @return TransactionSearchBasic
     */
    public function setApplyingTransaction(SearchMultiSelectField $applyingTransaction) {
        $this->applyingTransaction = $applyingTransaction;
        return $this;
    }

    /**
     * Get applyingTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getApplyingTransaction() {
        return $this->applyingTransaction;
    }


    /**
     * Set approvalStatus
     *
     * @param SearchEnumMultiSelectField $approvalStatus
     * @return TransactionSearchBasic
     */
    public function setApprovalStatus(SearchEnumMultiSelectField $approvalStatus) {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getApprovalStatus() {
        return $this->approvalStatus;
    }


    /**
     * Set authCode
     *
     * @param SearchStringField $authCode
     * @return TransactionSearchBasic
     */
    public function setAuthCode(SearchStringField $authCode) {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * Get authCode
     *
     * @return SearchStringField
     */
    public function getAuthCode() {
        return $this->authCode;
    }


    /**
     * Set autoCalculateLag
     *
     * @param SearchBooleanField $autoCalculateLag
     * @return TransactionSearchBasic
     */
    public function setAutoCalculateLag(SearchBooleanField $autoCalculateLag) {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * Get autoCalculateLag
     *
     * @return SearchBooleanField
     */
    public function getAutoCalculateLag() {
        return $this->autoCalculateLag;
    }


    /**
     * Set avsStreetMatch
     *
     * @param SearchEnumMultiSelectField $avsStreetMatch
     * @return TransactionSearchBasic
     */
    public function setAvsStreetMatch(SearchEnumMultiSelectField $avsStreetMatch) {
        $this->avsStreetMatch = $avsStreetMatch;
        return $this;
    }

    /**
     * Get avsStreetMatch
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAvsStreetMatch() {
        return $this->avsStreetMatch;
    }


    /**
     * Set avsZipMatch
     *
     * @param SearchEnumMultiSelectField $avsZipMatch
     * @return TransactionSearchBasic
     */
    public function setAvsZipMatch(SearchEnumMultiSelectField $avsZipMatch) {
        $this->avsZipMatch = $avsZipMatch;
        return $this;
    }

    /**
     * Get avsZipMatch
     *
     * @return SearchEnumMultiSelectField
     */
    public function getAvsZipMatch() {
        return $this->avsZipMatch;
    }


    /**
     * Set billable
     *
     * @param SearchBooleanField $billable
     * @return TransactionSearchBasic
     */
    public function setBillable(SearchBooleanField $billable) {
        $this->billable = $billable;
        return $this;
    }

    /**
     * Get billable
     *
     * @return SearchBooleanField
     */
    public function getBillable() {
        return $this->billable;
    }


    /**
     * Set billAddress
     *
     * @param SearchStringField $billAddress
     * @return TransactionSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress) {
        $this->billAddress = $billAddress;
        return $this;
    }

    /**
     * Get billAddress
     *
     * @return SearchStringField
     */
    public function getBillAddress() {
        return $this->billAddress;
    }


    /**
     * Set billAddressee
     *
     * @param SearchStringField $billAddressee
     * @return TransactionSearchBasic
     */
    public function setBillAddressee(SearchStringField $billAddressee) {
        $this->billAddressee = $billAddressee;
        return $this;
    }

    /**
     * Get billAddressee
     *
     * @return SearchStringField
     */
    public function getBillAddressee() {
        return $this->billAddressee;
    }


    /**
     * Set billAttention
     *
     * @param SearchStringField $billAttention
     * @return TransactionSearchBasic
     */
    public function setBillAttention(SearchStringField $billAttention) {
        $this->billAttention = $billAttention;
        return $this;
    }

    /**
     * Get billAttention
     *
     * @return SearchStringField
     */
    public function getBillAttention() {
        return $this->billAttention;
    }


    /**
     * Set billCity
     *
     * @param SearchStringField $billCity
     * @return TransactionSearchBasic
     */
    public function setBillCity(SearchStringField $billCity) {
        $this->billCity = $billCity;
        return $this;
    }

    /**
     * Get billCity
     *
     * @return SearchStringField
     */
    public function getBillCity() {
        return $this->billCity;
    }


    /**
     * Set billCountry
     *
     * @param SearchEnumMultiSelectField $billCountry
     * @return TransactionSearchBasic
     */
    public function setBillCountry(SearchEnumMultiSelectField $billCountry) {
        $this->billCountry = $billCountry;
        return $this;
    }

    /**
     * Get billCountry
     *
     * @return SearchEnumMultiSelectField
     */
    public function getBillCountry() {
        return $this->billCountry;
    }


    /**
     * Set billCounty
     *
     * @param SearchStringField $billCounty
     * @return TransactionSearchBasic
     */
    public function setBillCounty(SearchStringField $billCounty) {
        $this->billCounty = $billCounty;
        return $this;
    }

    /**
     * Get billCounty
     *
     * @return SearchStringField
     */
    public function getBillCounty() {
        return $this->billCounty;
    }


    /**
     * Set billedDate
     *
     * @param SearchDateField $billedDate
     * @return TransactionSearchBasic
     */
    public function setBilledDate(SearchDateField $billedDate) {
        $this->billedDate = $billedDate;
        return $this;
    }

    /**
     * Get billedDate
     *
     * @return SearchDateField
     */
    public function getBilledDate() {
        return $this->billedDate;
    }


    /**
     * Set billingSchedule
     *
     * @param SearchMultiSelectField $billingSchedule
     * @return TransactionSearchBasic
     */
    public function setBillingSchedule(SearchMultiSelectField $billingSchedule) {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * Get billingSchedule
     *
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule() {
        return $this->billingSchedule;
    }


    /**
     * Set billingStatus
     *
     * @param SearchBooleanField $billingStatus
     * @return TransactionSearchBasic
     */
    public function setBillingStatus(SearchBooleanField $billingStatus) {
        $this->billingStatus = $billingStatus;
        return $this;
    }

    /**
     * Get billingStatus
     *
     * @return SearchBooleanField
     */
    public function getBillingStatus() {
        return $this->billingStatus;
    }


    /**
     * Set billingTransaction
     *
     * @param SearchMultiSelectField $billingTransaction
     * @return TransactionSearchBasic
     */
    public function setBillingTransaction(SearchMultiSelectField $billingTransaction) {
        $this->billingTransaction = $billingTransaction;
        return $this;
    }

    /**
     * Get billingTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getBillingTransaction() {
        return $this->billingTransaction;
    }


    /**
     * Set billPhone
     *
     * @param SearchStringField $billPhone
     * @return TransactionSearchBasic
     */
    public function setBillPhone(SearchStringField $billPhone) {
        $this->billPhone = $billPhone;
        return $this;
    }

    /**
     * Get billPhone
     *
     * @return SearchStringField
     */
    public function getBillPhone() {
        return $this->billPhone;
    }


    /**
     * Set billState
     *
     * @param SearchStringField $billState
     * @return TransactionSearchBasic
     */
    public function setBillState(SearchStringField $billState) {
        $this->billState = $billState;
        return $this;
    }

    /**
     * Get billState
     *
     * @return SearchStringField
     */
    public function getBillState() {
        return $this->billState;
    }


    /**
     * Set billVarianceStatus
     *
     * @param SearchEnumMultiSelectField $billVarianceStatus
     * @return TransactionSearchBasic
     */
    public function setBillVarianceStatus(SearchEnumMultiSelectField $billVarianceStatus) {
        $this->billVarianceStatus = $billVarianceStatus;
        return $this;
    }

    /**
     * Get billVarianceStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getBillVarianceStatus() {
        return $this->billVarianceStatus;
    }


    /**
     * Set billZip
     *
     * @param SearchStringField $billZip
     * @return TransactionSearchBasic
     */
    public function setBillZip(SearchStringField $billZip) {
        $this->billZip = $billZip;
        return $this;
    }

    /**
     * Get billZip
     *
     * @return SearchStringField
     */
    public function getBillZip() {
        return $this->billZip;
    }


    /**
     * Set binNumber
     *
     * @param SearchStringField $binNumber
     * @return TransactionSearchBasic
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
     * Set binNumberQuantity
     *
     * @param SearchDoubleField $binNumberQuantity
     * @return TransactionSearchBasic
     */
    public function setBinNumberQuantity(SearchDoubleField $binNumberQuantity) {
        $this->binNumberQuantity = $binNumberQuantity;
        return $this;
    }

    /**
     * Get binNumberQuantity
     *
     * @return SearchDoubleField
     */
    public function getBinNumberQuantity() {
        return $this->binNumberQuantity;
    }


    /**
     * Set bomQuantity
     *
     * @param SearchDoubleField $bomQuantity
     * @return TransactionSearchBasic
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
     * Set bookSpecificTransaction
     *
     * @param SearchBooleanField $bookSpecificTransaction
     * @return TransactionSearchBasic
     */
    public function setBookSpecificTransaction(SearchBooleanField $bookSpecificTransaction) {
        $this->bookSpecificTransaction = $bookSpecificTransaction;
        return $this;
    }

    /**
     * Get bookSpecificTransaction
     *
     * @return SearchBooleanField
     */
    public function getBookSpecificTransaction() {
        return $this->bookSpecificTransaction;
    }


    /**
     * Set buildEntireAssembly
     *
     * @param SearchBooleanField $buildEntireAssembly
     * @return TransactionSearchBasic
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
     * Set buildVariance
     *
     * @param SearchDoubleField $buildVariance
     * @return TransactionSearchBasic
     */
    public function setBuildVariance(SearchDoubleField $buildVariance) {
        $this->buildVariance = $buildVariance;
        return $this;
    }

    /**
     * Get buildVariance
     *
     * @return SearchDoubleField
     */
    public function getBuildVariance() {
        return $this->buildVariance;
    }


    /**
     * Set built
     *
     * @param SearchDoubleField $built
     * @return TransactionSearchBasic
     */
    public function setBuilt(SearchDoubleField $built) {
        $this->built = $built;
        return $this;
    }

    /**
     * Get built
     *
     * @return SearchDoubleField
     */
    public function getBuilt() {
        return $this->built;
    }


    /**
     * Set catchUpPeriod
     *
     * @param SearchMultiSelectField $catchUpPeriod
     * @return TransactionSearchBasic
     */
    public function setCatchUpPeriod(SearchMultiSelectField $catchUpPeriod) {
        $this->catchUpPeriod = $catchUpPeriod;
        return $this;
    }

    /**
     * Get catchUpPeriod
     *
     * @return SearchMultiSelectField
     */
    public function getCatchUpPeriod() {
        return $this->catchUpPeriod;
    }


    /**
     * Set ccCustomerCode
     *
     * @param SearchStringField $ccCustomerCode
     * @return TransactionSearchBasic
     */
    public function setCcCustomerCode(SearchStringField $ccCustomerCode) {
        $this->ccCustomerCode = $ccCustomerCode;
        return $this;
    }

    /**
     * Get ccCustomerCode
     *
     * @return SearchStringField
     */
    public function getCcCustomerCode() {
        return $this->ccCustomerCode;
    }


    /**
     * Set ccExpireDate
     *
     * @param SearchDateField $ccExpireDate
     * @return TransactionSearchBasic
     */
    public function setCcExpireDate(SearchDateField $ccExpireDate) {
        $this->ccExpireDate = $ccExpireDate;
        return $this;
    }

    /**
     * Get ccExpireDate
     *
     * @return SearchDateField
     */
    public function getCcExpireDate() {
        return $this->ccExpireDate;
    }


    /**
     * Set ccName
     *
     * @param SearchStringField $ccName
     * @return TransactionSearchBasic
     */
    public function setCcName(SearchStringField $ccName) {
        $this->ccName = $ccName;
        return $this;
    }

    /**
     * Get ccName
     *
     * @return SearchStringField
     */
    public function getCcName() {
        return $this->ccName;
    }


    /**
     * Set ccNumber
     *
     * @param SearchStringField $ccNumber
     * @return TransactionSearchBasic
     */
    public function setCcNumber(SearchStringField $ccNumber) {
        $this->ccNumber = $ccNumber;
        return $this;
    }

    /**
     * Get ccNumber
     *
     * @return SearchStringField
     */
    public function getCcNumber() {
        return $this->ccNumber;
    }


    /**
     * Set chargeType
     *
     * @param SearchEnumMultiSelectField $chargeType
     * @return TransactionSearchBasic
     */
    public function setChargeType(SearchEnumMultiSelectField $chargeType) {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * Get chargeType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getChargeType() {
        return $this->chargeType;
    }


    /**
     * Set class
     *
     * @param SearchMultiSelectField $class
     * @return TransactionSearchBasic
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
     * Set cleared
     *
     * @param SearchBooleanField $cleared
     * @return TransactionSearchBasic
     */
    public function setCleared(SearchBooleanField $cleared) {
        $this->cleared = $cleared;
        return $this;
    }

    /**
     * Get cleared
     *
     * @return SearchBooleanField
     */
    public function getCleared() {
        return $this->cleared;
    }


    /**
     * Set closed
     *
     * @param SearchBooleanField $closed
     * @return TransactionSearchBasic
     */
    public function setClosed(SearchBooleanField $closed) {
        $this->closed = $closed;
        return $this;
    }

    /**
     * Get closed
     *
     * @return SearchBooleanField
     */
    public function getClosed() {
        return $this->closed;
    }


    /**
     * Set closeDate
     *
     * @param SearchDateField $closeDate
     * @return TransactionSearchBasic
     */
    public function setCloseDate(SearchDateField $closeDate) {
        $this->closeDate = $closeDate;
        return $this;
    }

    /**
     * Get closeDate
     *
     * @return SearchDateField
     */
    public function getCloseDate() {
        return $this->closeDate;
    }


    /**
     * Set cogs
     *
     * @param SearchBooleanField $cogs
     * @return TransactionSearchBasic
     */
    public function setCogs(SearchBooleanField $cogs) {
        $this->cogs = $cogs;
        return $this;
    }

    /**
     * Get cogs
     *
     * @return SearchBooleanField
     */
    public function getCogs() {
        return $this->cogs;
    }


    /**
     * Set commissionEffectiveDate
     *
     * @param SearchDateField $commissionEffectiveDate
     * @return TransactionSearchBasic
     */
    public function setCommissionEffectiveDate(SearchDateField $commissionEffectiveDate) {
        $this->commissionEffectiveDate = $commissionEffectiveDate;
        return $this;
    }

    /**
     * Get commissionEffectiveDate
     *
     * @return SearchDateField
     */
    public function getCommissionEffectiveDate() {
        return $this->commissionEffectiveDate;
    }


    /**
     * Set commit
     *
     * @param SearchEnumMultiSelectField $commit
     * @return TransactionSearchBasic
     */
    public function setCommit(SearchEnumMultiSelectField $commit) {
        $this->commit = $commit;
        return $this;
    }

    /**
     * Get commit
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCommit() {
        return $this->commit;
    }


    /**
     * Set componentYield
     *
     * @param SearchDoubleField $componentYield
     * @return TransactionSearchBasic
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
     * Set confirmationNumber
     *
     * @param SearchStringField $confirmationNumber
     * @return TransactionSearchBasic
     */
    public function setConfirmationNumber(SearchStringField $confirmationNumber) {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }

    /**
     * Get confirmationNumber
     *
     * @return SearchStringField
     */
    public function getConfirmationNumber() {
        return $this->confirmationNumber;
    }


    /**
     * Set contribution
     *
     * @param SearchLongField $contribution
     * @return TransactionSearchBasic
     */
    public function setContribution(SearchLongField $contribution) {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Get contribution
     *
     * @return SearchLongField
     */
    public function getContribution() {
        return $this->contribution;
    }


    /**
     * Set costComponentAmount
     *
     * @param SearchDoubleField $costComponentAmount
     * @return TransactionSearchBasic
     */
    public function setCostComponentAmount(SearchDoubleField $costComponentAmount) {
        $this->costComponentAmount = $costComponentAmount;
        return $this;
    }

    /**
     * Get costComponentAmount
     *
     * @return SearchDoubleField
     */
    public function getCostComponentAmount() {
        return $this->costComponentAmount;
    }


    /**
     * Set costComponentCategory
     *
     * @param SearchMultiSelectField $costComponentCategory
     * @return TransactionSearchBasic
     */
    public function setCostComponentCategory(SearchMultiSelectField $costComponentCategory) {
        $this->costComponentCategory = $costComponentCategory;
        return $this;
    }

    /**
     * Get costComponentCategory
     *
     * @return SearchMultiSelectField
     */
    public function getCostComponentCategory() {
        return $this->costComponentCategory;
    }


    /**
     * Set costComponentItem
     *
     * @param SearchMultiSelectField $costComponentItem
     * @return TransactionSearchBasic
     */
    public function setCostComponentItem(SearchMultiSelectField $costComponentItem) {
        $this->costComponentItem = $costComponentItem;
        return $this;
    }

    /**
     * Get costComponentItem
     *
     * @return SearchMultiSelectField
     */
    public function getCostComponentItem() {
        return $this->costComponentItem;
    }


    /**
     * Set costComponentQuantity
     *
     * @param SearchDoubleField $costComponentQuantity
     * @return TransactionSearchBasic
     */
    public function setCostComponentQuantity(SearchDoubleField $costComponentQuantity) {
        $this->costComponentQuantity = $costComponentQuantity;
        return $this;
    }

    /**
     * Get costComponentQuantity
     *
     * @return SearchDoubleField
     */
    public function getCostComponentQuantity() {
        return $this->costComponentQuantity;
    }


    /**
     * Set costComponentStandardCost
     *
     * @param SearchDoubleField $costComponentStandardCost
     * @return TransactionSearchBasic
     */
    public function setCostComponentStandardCost(SearchDoubleField $costComponentStandardCost) {
        $this->costComponentStandardCost = $costComponentStandardCost;
        return $this;
    }

    /**
     * Get costComponentStandardCost
     *
     * @return SearchDoubleField
     */
    public function getCostComponentStandardCost() {
        return $this->costComponentStandardCost;
    }


    /**
     * Set costEstimate
     *
     * @param SearchDoubleField $costEstimate
     * @return TransactionSearchBasic
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
     * Set costEstimateRate
     *
     * @param SearchDoubleField $costEstimateRate
     * @return TransactionSearchBasic
     */
    public function setCostEstimateRate(SearchDoubleField $costEstimateRate) {
        $this->costEstimateRate = $costEstimateRate;
        return $this;
    }

    /**
     * Get costEstimateRate
     *
     * @return SearchDoubleField
     */
    public function getCostEstimateRate() {
        return $this->costEstimateRate;
    }


    /**
     * Set costEstimateType
     *
     * @param SearchEnumMultiSelectField $costEstimateType
     * @return TransactionSearchBasic
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
     * Set createdBy
     *
     * @param SearchMultiSelectField $createdBy
     * @return TransactionSearchBasic
     */
    public function setCreatedBy(SearchMultiSelectField $createdBy) {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return SearchMultiSelectField
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }


    /**
     * Set createdFrom
     *
     * @param SearchMultiSelectField $createdFrom
     * @return TransactionSearchBasic
     */
    public function setCreatedFrom(SearchMultiSelectField $createdFrom) {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * Get createdFrom
     *
     * @return SearchMultiSelectField
     */
    public function getCreatedFrom() {
        return $this->createdFrom;
    }


    /**
     * Set creditAmount
     *
     * @param SearchDoubleField $creditAmount
     * @return TransactionSearchBasic
     */
    public function setCreditAmount(SearchDoubleField $creditAmount) {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * Get creditAmount
     *
     * @return SearchDoubleField
     */
    public function getCreditAmount() {
        return $this->creditAmount;
    }


    /**
     * Set cscMatch
     *
     * @param SearchEnumMultiSelectField $cscMatch
     * @return TransactionSearchBasic
     */
    public function setCscMatch(SearchEnumMultiSelectField $cscMatch) {
        $this->cscMatch = $cscMatch;
        return $this;
    }

    /**
     * Get cscMatch
     *
     * @return SearchEnumMultiSelectField
     */
    public function getCscMatch() {
        return $this->cscMatch;
    }


    /**
     * Set currency
     *
     * @param SearchMultiSelectField $currency
     * @return TransactionSearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return SearchMultiSelectField
     */
    public function getCurrency() {
        return $this->currency;
    }


    /**
     * Set customerSubOf
     *
     * @param SearchMultiSelectField $customerSubOf
     * @return TransactionSearchBasic
     */
    public function setCustomerSubOf(SearchMultiSelectField $customerSubOf) {
        $this->customerSubOf = $customerSubOf;
        return $this;
    }

    /**
     * Get customerSubOf
     *
     * @return SearchMultiSelectField
     */
    public function getCustomerSubOf() {
        return $this->customerSubOf;
    }


    /**
     * Set customForm
     *
     * @param SearchMultiSelectField $customForm
     * @return TransactionSearchBasic
     */
    public function setCustomForm(SearchMultiSelectField $customForm) {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * Get customForm
     *
     * @return SearchMultiSelectField
     */
    public function getCustomForm() {
        return $this->customForm;
    }


    /**
     * Set custType
     *
     * @param SearchMultiSelectField $custType
     * @return TransactionSearchBasic
     */
    public function setCustType(SearchMultiSelectField $custType) {
        $this->custType = $custType;
        return $this;
    }

    /**
     * Get custType
     *
     * @return SearchMultiSelectField
     */
    public function getCustType() {
        return $this->custType;
    }


    /**
     * Set dateCreated
     *
     * @param SearchDateField $dateCreated
     * @return TransactionSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated) {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return SearchDateField
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }


    /**
     * Set daysOpen
     *
     * @param SearchLongField $daysOpen
     * @return TransactionSearchBasic
     */
    public function setDaysOpen(SearchLongField $daysOpen) {
        $this->daysOpen = $daysOpen;
        return $this;
    }

    /**
     * Get daysOpen
     *
     * @return SearchLongField
     */
    public function getDaysOpen() {
        return $this->daysOpen;
    }


    /**
     * Set daysOverdue
     *
     * @param SearchLongField $daysOverdue
     * @return TransactionSearchBasic
     */
    public function setDaysOverdue(SearchLongField $daysOverdue) {
        $this->daysOverdue = $daysOverdue;
        return $this;
    }

    /**
     * Get daysOverdue
     *
     * @return SearchLongField
     */
    public function getDaysOverdue() {
        return $this->daysOverdue;
    }


    /**
     * Set debitAmount
     *
     * @param SearchDoubleField $debitAmount
     * @return TransactionSearchBasic
     */
    public function setDebitAmount(SearchDoubleField $debitAmount) {
        $this->debitAmount = $debitAmount;
        return $this;
    }

    /**
     * Get debitAmount
     *
     * @return SearchDoubleField
     */
    public function getDebitAmount() {
        return $this->debitAmount;
    }


    /**
     * Set deferredRevenue
     *
     * @param SearchDoubleField $deferredRevenue
     * @return TransactionSearchBasic
     */
    public function setDeferredRevenue(SearchDoubleField $deferredRevenue) {
        $this->deferredRevenue = $deferredRevenue;
        return $this;
    }

    /**
     * Get deferredRevenue
     *
     * @return SearchDoubleField
     */
    public function getDeferredRevenue() {
        return $this->deferredRevenue;
    }


    /**
     * Set deferRevRec
     *
     * @param SearchBooleanField $deferRevRec
     * @return TransactionSearchBasic
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
     * Set department
     *
     * @param SearchMultiSelectField $department
     * @return TransactionSearchBasic
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
     * Set depositDate
     *
     * @param SearchDateField $depositDate
     * @return TransactionSearchBasic
     */
    public function setDepositDate(SearchDateField $depositDate) {
        $this->depositDate = $depositDate;
        return $this;
    }

    /**
     * Get depositDate
     *
     * @return SearchDateField
     */
    public function getDepositDate() {
        return $this->depositDate;
    }


    /**
     * Set depositTransaction
     *
     * @param SearchMultiSelectField $depositTransaction
     * @return TransactionSearchBasic
     */
    public function setDepositTransaction(SearchMultiSelectField $depositTransaction) {
        $this->depositTransaction = $depositTransaction;
        return $this;
    }

    /**
     * Get depositTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getDepositTransaction() {
        return $this->depositTransaction;
    }


    /**
     * Set drAccount
     *
     * @param SearchMultiSelectField $drAccount
     * @return TransactionSearchBasic
     */
    public function setDrAccount(SearchMultiSelectField $drAccount) {
        $this->drAccount = $drAccount;
        return $this;
    }

    /**
     * Get drAccount
     *
     * @return SearchMultiSelectField
     */
    public function getDrAccount() {
        return $this->drAccount;
    }


    /**
     * Set dueDate
     *
     * @param SearchDateField $dueDate
     * @return TransactionSearchBasic
     */
    public function setDueDate(SearchDateField $dueDate) {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Get dueDate
     *
     * @return SearchDateField
     */
    public function getDueDate() {
        return $this->dueDate;
    }


    /**
     * Set email
     *
     * @param SearchStringField $email
     * @return TransactionSearchBasic
     */
    public function setEmail(SearchStringField $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return SearchStringField
     */
    public function getEmail() {
        return $this->email;
    }


    /**
     * Set employee
     *
     * @param SearchMultiSelectField $employee
     * @return TransactionSearchBasic
     */
    public function setEmployee(SearchMultiSelectField $employee) {
        $this->employee = $employee;
        return $this;
    }

    /**
     * Get employee
     *
     * @return SearchMultiSelectField
     */
    public function getEmployee() {
        return $this->employee;
    }


    /**
     * Set endDate
     *
     * @param SearchDateField $endDate
     * @return TransactionSearchBasic
     */
    public function setEndDate(SearchDateField $endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return SearchDateField
     */
    public function getEndDate() {
        return $this->endDate;
    }


    /**
     * Set entity
     *
     * @param SearchMultiSelectField $entity
     * @return TransactionSearchBasic
     */
    public function setEntity(SearchMultiSelectField $entity) {
        $this->entity = $entity;
        return $this;
    }

    /**
     * Get entity
     *
     * @return SearchMultiSelectField
     */
    public function getEntity() {
        return $this->entity;
    }


    /**
     * Set entityStatus
     *
     * @param SearchMultiSelectField $entityStatus
     * @return TransactionSearchBasic
     */
    public function setEntityStatus(SearchMultiSelectField $entityStatus) {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * Get entityStatus
     *
     * @return SearchMultiSelectField
     */
    public function getEntityStatus() {
        return $this->entityStatus;
    }


    /**
     * Set estGrossProfit
     *
     * @param SearchDoubleField $estGrossProfit
     * @return TransactionSearchBasic
     */
    public function setEstGrossProfit(SearchDoubleField $estGrossProfit) {
        $this->estGrossProfit = $estGrossProfit;
        return $this;
    }

    /**
     * Get estGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getEstGrossProfit() {
        return $this->estGrossProfit;
    }


    /**
     * Set estGrossProfitPct
     *
     * @param SearchDoubleField $estGrossProfitPct
     * @return TransactionSearchBasic
     */
    public function setEstGrossProfitPct(SearchDoubleField $estGrossProfitPct) {
        $this->estGrossProfitPct = $estGrossProfitPct;
        return $this;
    }

    /**
     * Get estGrossProfitPct
     *
     * @return SearchDoubleField
     */
    public function getEstGrossProfitPct() {
        return $this->estGrossProfitPct;
    }


    /**
     * Set exchangeRate
     *
     * @param SearchDoubleField $exchangeRate
     * @return TransactionSearchBasic
     */
    public function setExchangeRate(SearchDoubleField $exchangeRate) {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Get exchangeRate
     *
     * @return SearchDoubleField
     */
    public function getExchangeRate() {
        return $this->exchangeRate;
    }


    /**
     * Set excludeCommission
     *
     * @param SearchBooleanField $excludeCommission
     * @return TransactionSearchBasic
     */
    public function setExcludeCommission(SearchBooleanField $excludeCommission) {
        $this->excludeCommission = $excludeCommission;
        return $this;
    }

    /**
     * Get excludeCommission
     *
     * @return SearchBooleanField
     */
    public function getExcludeCommission() {
        return $this->excludeCommission;
    }


    /**
     * Set excludeFromRateRequest
     *
     * @param SearchBooleanField $excludeFromRateRequest
     * @return TransactionSearchBasic
     */
    public function setExcludeFromRateRequest(SearchBooleanField $excludeFromRateRequest) {
        $this->excludeFromRateRequest = $excludeFromRateRequest;
        return $this;
    }

    /**
     * Get excludeFromRateRequest
     *
     * @return SearchBooleanField
     */
    public function getExcludeFromRateRequest() {
        return $this->excludeFromRateRequest;
    }


    /**
     * Set expectedCloseDate
     *
     * @param SearchDateField $expectedCloseDate
     * @return TransactionSearchBasic
     */
    public function setExpectedCloseDate(SearchDateField $expectedCloseDate) {
        $this->expectedCloseDate = $expectedCloseDate;
        return $this;
    }

    /**
     * Get expectedCloseDate
     *
     * @return SearchDateField
     */
    public function getExpectedCloseDate() {
        return $this->expectedCloseDate;
    }


    /**
     * Set expectedReceiptDate
     *
     * @param SearchDateField $expectedReceiptDate
     * @return TransactionSearchBasic
     */
    public function setExpectedReceiptDate(SearchDateField $expectedReceiptDate) {
        $this->expectedReceiptDate = $expectedReceiptDate;
        return $this;
    }

    /**
     * Get expectedReceiptDate
     *
     * @return SearchDateField
     */
    public function getExpectedReceiptDate() {
        return $this->expectedReceiptDate;
    }


    /**
     * Set expenseCategory
     *
     * @param SearchMultiSelectField $expenseCategory
     * @return TransactionSearchBasic
     */
    public function setExpenseCategory(SearchMultiSelectField $expenseCategory) {
        $this->expenseCategory = $expenseCategory;
        return $this;
    }

    /**
     * Get expenseCategory
     *
     * @return SearchMultiSelectField
     */
    public function getExpenseCategory() {
        return $this->expenseCategory;
    }


    /**
     * Set expenseDate
     *
     * @param SearchDateField $expenseDate
     * @return TransactionSearchBasic
     */
    public function setExpenseDate(SearchDateField $expenseDate) {
        $this->expenseDate = $expenseDate;
        return $this;
    }

    /**
     * Get expenseDate
     *
     * @return SearchDateField
     */
    public function getExpenseDate() {
        return $this->expenseDate;
    }


    /**
     * Set externalId
     *
     * @param SearchMultiSelectField $externalId
     * @return TransactionSearchBasic
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
     * @return TransactionSearchBasic
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
     * Set finChrg
     *
     * @param SearchBooleanField $finChrg
     * @return TransactionSearchBasic
     */
    public function setFinChrg(SearchBooleanField $finChrg) {
        $this->finChrg = $finChrg;
        return $this;
    }

    /**
     * Get finChrg
     *
     * @return SearchBooleanField
     */
    public function getFinChrg() {
        return $this->finChrg;
    }


    /**
     * Set firmed
     *
     * @param SearchBooleanField $firmed
     * @return TransactionSearchBasic
     */
    public function setFirmed(SearchBooleanField $firmed) {
        $this->firmed = $firmed;
        return $this;
    }

    /**
     * Get firmed
     *
     * @return SearchBooleanField
     */
    public function getFirmed() {
        return $this->firmed;
    }


    /**
     * Set forecastType
     *
     * @param SearchEnumMultiSelectField $forecastType
     * @return TransactionSearchBasic
     */
    public function setForecastType(SearchEnumMultiSelectField $forecastType) {
        $this->forecastType = $forecastType;
        return $this;
    }

    /**
     * Get forecastType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getForecastType() {
        return $this->forecastType;
    }


    /**
     * Set fulfillingTransaction
     *
     * @param SearchMultiSelectField $fulfillingTransaction
     * @return TransactionSearchBasic
     */
    public function setFulfillingTransaction(SearchMultiSelectField $fulfillingTransaction) {
        $this->fulfillingTransaction = $fulfillingTransaction;
        return $this;
    }

    /**
     * Get fulfillingTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getFulfillingTransaction() {
        return $this->fulfillingTransaction;
    }


    /**
     * Set fxAccount
     *
     * @param SearchMultiSelectField $fxAccount
     * @return TransactionSearchBasic
     */
    public function setFxAccount(SearchMultiSelectField $fxAccount) {
        $this->fxAccount = $fxAccount;
        return $this;
    }

    /**
     * Get fxAccount
     *
     * @return SearchMultiSelectField
     */
    public function getFxAccount() {
        return $this->fxAccount;
    }


    /**
     * Set fxAmount
     *
     * @param SearchDoubleField $fxAmount
     * @return TransactionSearchBasic
     */
    public function setFxAmount(SearchDoubleField $fxAmount) {
        $this->fxAmount = $fxAmount;
        return $this;
    }

    /**
     * Get fxAmount
     *
     * @return SearchDoubleField
     */
    public function getFxAmount() {
        return $this->fxAmount;
    }


    /**
     * Set fxCostEstimate
     *
     * @param SearchDoubleField $fxCostEstimate
     * @return TransactionSearchBasic
     */
    public function setFxCostEstimate(SearchDoubleField $fxCostEstimate) {
        $this->fxCostEstimate = $fxCostEstimate;
        return $this;
    }

    /**
     * Get fxCostEstimate
     *
     * @return SearchDoubleField
     */
    public function getFxCostEstimate() {
        return $this->fxCostEstimate;
    }


    /**
     * Set fxCostEstimateRate
     *
     * @param SearchDoubleField $fxCostEstimateRate
     * @return TransactionSearchBasic
     */
    public function setFxCostEstimateRate(SearchDoubleField $fxCostEstimateRate) {
        $this->fxCostEstimateRate = $fxCostEstimateRate;
        return $this;
    }

    /**
     * Get fxCostEstimateRate
     *
     * @return SearchDoubleField
     */
    public function getFxCostEstimateRate() {
        return $this->fxCostEstimateRate;
    }


    /**
     * Set fxEstGrossProfit
     *
     * @param SearchDoubleField $fxEstGrossProfit
     * @return TransactionSearchBasic
     */
    public function setFxEstGrossProfit(SearchDoubleField $fxEstGrossProfit) {
        $this->fxEstGrossProfit = $fxEstGrossProfit;
        return $this;
    }

    /**
     * Get fxEstGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getFxEstGrossProfit() {
        return $this->fxEstGrossProfit;
    }


    /**
     * Set fxTranCostEstimate
     *
     * @param SearchDoubleField $fxTranCostEstimate
     * @return TransactionSearchBasic
     */
    public function setFxTranCostEstimate(SearchDoubleField $fxTranCostEstimate) {
        $this->fxTranCostEstimate = $fxTranCostEstimate;
        return $this;
    }

    /**
     * Get fxTranCostEstimate
     *
     * @return SearchDoubleField
     */
    public function getFxTranCostEstimate() {
        return $this->fxTranCostEstimate;
    }


    /**
     * Set fxVsoeAllocation
     *
     * @param SearchDoubleField $fxVsoeAllocation
     * @return TransactionSearchBasic
     */
    public function setFxVsoeAllocation(SearchDoubleField $fxVsoeAllocation) {
        $this->fxVsoeAllocation = $fxVsoeAllocation;
        return $this;
    }

    /**
     * Get fxVsoeAllocation
     *
     * @return SearchDoubleField
     */
    public function getFxVsoeAllocation() {
        return $this->fxVsoeAllocation;
    }


    /**
     * Set fxVsoeAmount
     *
     * @param SearchDoubleField $fxVsoeAmount
     * @return TransactionSearchBasic
     */
    public function setFxVsoeAmount(SearchDoubleField $fxVsoeAmount) {
        $this->fxVsoeAmount = $fxVsoeAmount;
        return $this;
    }

    /**
     * Get fxVsoeAmount
     *
     * @return SearchDoubleField
     */
    public function getFxVsoeAmount() {
        return $this->fxVsoeAmount;
    }


    /**
     * Set fxVsoePrice
     *
     * @param SearchDoubleField $fxVsoePrice
     * @return TransactionSearchBasic
     */
    public function setFxVsoePrice(SearchDoubleField $fxVsoePrice) {
        $this->fxVsoePrice = $fxVsoePrice;
        return $this;
    }

    /**
     * Get fxVsoePrice
     *
     * @return SearchDoubleField
     */
    public function getFxVsoePrice() {
        return $this->fxVsoePrice;
    }


    /**
     * Set gcoAvailabelToCharge
     *
     * @param SearchBooleanField $gcoAvailabelToCharge
     * @return TransactionSearchBasic
     */
    public function setGcoAvailabelToCharge(SearchBooleanField $gcoAvailabelToCharge) {
        $this->gcoAvailabelToCharge = $gcoAvailabelToCharge;
        return $this;
    }

    /**
     * Get gcoAvailabelToCharge
     *
     * @return SearchBooleanField
     */
    public function getGcoAvailabelToCharge() {
        return $this->gcoAvailabelToCharge;
    }


    /**
     * Set gcoAvailableToRefund
     *
     * @param SearchBooleanField $gcoAvailableToRefund
     * @return TransactionSearchBasic
     */
    public function setGcoAvailableToRefund(SearchBooleanField $gcoAvailableToRefund) {
        $this->gcoAvailableToRefund = $gcoAvailableToRefund;
        return $this;
    }

    /**
     * Get gcoAvailableToRefund
     *
     * @return SearchBooleanField
     */
    public function getGcoAvailableToRefund() {
        return $this->gcoAvailableToRefund;
    }


    /**
     * Set gcoAvsStreetMatch
     *
     * @param SearchEnumMultiSelectField $gcoAvsStreetMatch
     * @return TransactionSearchBasic
     */
    public function setGcoAvsStreetMatch(SearchEnumMultiSelectField $gcoAvsStreetMatch) {
        $this->gcoAvsStreetMatch = $gcoAvsStreetMatch;
        return $this;
    }

    /**
     * Get gcoAvsStreetMatch
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGcoAvsStreetMatch() {
        return $this->gcoAvsStreetMatch;
    }


    /**
     * Set gcoAvsZipMatch
     *
     * @param SearchEnumMultiSelectField $gcoAvsZipMatch
     * @return TransactionSearchBasic
     */
    public function setGcoAvsZipMatch(SearchEnumMultiSelectField $gcoAvsZipMatch) {
        $this->gcoAvsZipMatch = $gcoAvsZipMatch;
        return $this;
    }

    /**
     * Get gcoAvsZipMatch
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGcoAvsZipMatch() {
        return $this->gcoAvsZipMatch;
    }


    /**
     * Set gcoBuyerAccountAge
     *
     * @param SearchLongField $gcoBuyerAccountAge
     * @return TransactionSearchBasic
     */
    public function setGcoBuyerAccountAge(SearchLongField $gcoBuyerAccountAge) {
        $this->gcoBuyerAccountAge = $gcoBuyerAccountAge;
        return $this;
    }

    /**
     * Get gcoBuyerAccountAge
     *
     * @return SearchLongField
     */
    public function getGcoBuyerAccountAge() {
        return $this->gcoBuyerAccountAge;
    }


    /**
     * Set gcoBuyerIp
     *
     * @param SearchStringField $gcoBuyerIp
     * @return TransactionSearchBasic
     */
    public function setGcoBuyerIp(SearchStringField $gcoBuyerIp) {
        $this->gcoBuyerIp = $gcoBuyerIp;
        return $this;
    }

    /**
     * Get gcoBuyerIp
     *
     * @return SearchStringField
     */
    public function getGcoBuyerIp() {
        return $this->gcoBuyerIp;
    }


    /**
     * Set gcoChargeAmount
     *
     * @param SearchDoubleField $gcoChargeAmount
     * @return TransactionSearchBasic
     */
    public function setGcoChargeAmount(SearchDoubleField $gcoChargeAmount) {
        $this->gcoChargeAmount = $gcoChargeAmount;
        return $this;
    }

    /**
     * Get gcoChargeAmount
     *
     * @return SearchDoubleField
     */
    public function getGcoChargeAmount() {
        return $this->gcoChargeAmount;
    }


    /**
     * Set gcoChargebackAmount
     *
     * @param SearchDoubleField $gcoChargebackAmount
     * @return TransactionSearchBasic
     */
    public function setGcoChargebackAmount(SearchDoubleField $gcoChargebackAmount) {
        $this->gcoChargebackAmount = $gcoChargebackAmount;
        return $this;
    }

    /**
     * Get gcoChargebackAmount
     *
     * @return SearchDoubleField
     */
    public function getGcoChargebackAmount() {
        return $this->gcoChargebackAmount;
    }


    /**
     * Set gcoConfirmedChargedTotal
     *
     * @param SearchDoubleField $gcoConfirmedChargedTotal
     * @return TransactionSearchBasic
     */
    public function setGcoConfirmedChargedTotal(SearchDoubleField $gcoConfirmedChargedTotal) {
        $this->gcoConfirmedChargedTotal = $gcoConfirmedChargedTotal;
        return $this;
    }

    /**
     * Get gcoConfirmedChargedTotal
     *
     * @return SearchDoubleField
     */
    public function getGcoConfirmedChargedTotal() {
        return $this->gcoConfirmedChargedTotal;
    }


    /**
     * Set gcoConfirmedRefundedTotal
     *
     * @param SearchDoubleField $gcoConfirmedRefundedTotal
     * @return TransactionSearchBasic
     */
    public function setGcoConfirmedRefundedTotal(SearchDoubleField $gcoConfirmedRefundedTotal) {
        $this->gcoConfirmedRefundedTotal = $gcoConfirmedRefundedTotal;
        return $this;
    }

    /**
     * Get gcoConfirmedRefundedTotal
     *
     * @return SearchDoubleField
     */
    public function getGcoConfirmedRefundedTotal() {
        return $this->gcoConfirmedRefundedTotal;
    }


    /**
     * Set gcoCreditcardNumber
     *
     * @param SearchStringField $gcoCreditcardNumber
     * @return TransactionSearchBasic
     */
    public function setGcoCreditcardNumber(SearchStringField $gcoCreditcardNumber) {
        $this->gcoCreditcardNumber = $gcoCreditcardNumber;
        return $this;
    }

    /**
     * Get gcoCreditcardNumber
     *
     * @return SearchStringField
     */
    public function getGcoCreditcardNumber() {
        return $this->gcoCreditcardNumber;
    }


    /**
     * Set gcoCscMatch
     *
     * @param SearchEnumMultiSelectField $gcoCscMatch
     * @return TransactionSearchBasic
     */
    public function setGcoCscMatch(SearchEnumMultiSelectField $gcoCscMatch) {
        $this->gcoCscMatch = $gcoCscMatch;
        return $this;
    }

    /**
     * Get gcoCscMatch
     *
     * @return SearchEnumMultiSelectField
     */
    public function getGcoCscMatch() {
        return $this->gcoCscMatch;
    }


    /**
     * Set gcoFinancialState
     *
     * @param SearchStringField $gcoFinancialState
     * @return TransactionSearchBasic
     */
    public function setGcoFinancialState(SearchStringField $gcoFinancialState) {
        $this->gcoFinancialState = $gcoFinancialState;
        return $this;
    }

    /**
     * Get gcoFinancialState
     *
     * @return SearchStringField
     */
    public function getGcoFinancialState() {
        return $this->gcoFinancialState;
    }


    /**
     * Set gcoFulfillmentState
     *
     * @param SearchStringField $gcoFulfillmentState
     * @return TransactionSearchBasic
     */
    public function setGcoFulfillmentState(SearchStringField $gcoFulfillmentState) {
        $this->gcoFulfillmentState = $gcoFulfillmentState;
        return $this;
    }

    /**
     * Get gcoFulfillmentState
     *
     * @return SearchStringField
     */
    public function getGcoFulfillmentState() {
        return $this->gcoFulfillmentState;
    }


    /**
     * Set gcoOrderId
     *
     * @param SearchStringField $gcoOrderId
     * @return TransactionSearchBasic
     */
    public function setGcoOrderId(SearchStringField $gcoOrderId) {
        $this->gcoOrderId = $gcoOrderId;
        return $this;
    }

    /**
     * Get gcoOrderId
     *
     * @return SearchStringField
     */
    public function getGcoOrderId() {
        return $this->gcoOrderId;
    }


    /**
     * Set gcoOrderTotal
     *
     * @param SearchDoubleField $gcoOrderTotal
     * @return TransactionSearchBasic
     */
    public function setGcoOrderTotal(SearchDoubleField $gcoOrderTotal) {
        $this->gcoOrderTotal = $gcoOrderTotal;
        return $this;
    }

    /**
     * Get gcoOrderTotal
     *
     * @return SearchDoubleField
     */
    public function getGcoOrderTotal() {
        return $this->gcoOrderTotal;
    }


    /**
     * Set gcoPromotionAmount
     *
     * @param SearchDoubleField $gcoPromotionAmount
     * @return TransactionSearchBasic
     */
    public function setGcoPromotionAmount(SearchDoubleField $gcoPromotionAmount) {
        $this->gcoPromotionAmount = $gcoPromotionAmount;
        return $this;
    }

    /**
     * Get gcoPromotionAmount
     *
     * @return SearchDoubleField
     */
    public function getGcoPromotionAmount() {
        return $this->gcoPromotionAmount;
    }


    /**
     * Set gcoPromotionName
     *
     * @param SearchStringField $gcoPromotionName
     * @return TransactionSearchBasic
     */
    public function setGcoPromotionName(SearchStringField $gcoPromotionName) {
        $this->gcoPromotionName = $gcoPromotionName;
        return $this;
    }

    /**
     * Get gcoPromotionName
     *
     * @return SearchStringField
     */
    public function getGcoPromotionName() {
        return $this->gcoPromotionName;
    }


    /**
     * Set gcoRefundAmount
     *
     * @param SearchDoubleField $gcoRefundAmount
     * @return TransactionSearchBasic
     */
    public function setGcoRefundAmount(SearchDoubleField $gcoRefundAmount) {
        $this->gcoRefundAmount = $gcoRefundAmount;
        return $this;
    }

    /**
     * Get gcoRefundAmount
     *
     * @return SearchDoubleField
     */
    public function getGcoRefundAmount() {
        return $this->gcoRefundAmount;
    }


    /**
     * Set gcoShippingTotal
     *
     * @param SearchDoubleField $gcoShippingTotal
     * @return TransactionSearchBasic
     */
    public function setGcoShippingTotal(SearchDoubleField $gcoShippingTotal) {
        $this->gcoShippingTotal = $gcoShippingTotal;
        return $this;
    }

    /**
     * Get gcoShippingTotal
     *
     * @return SearchDoubleField
     */
    public function getGcoShippingTotal() {
        return $this->gcoShippingTotal;
    }


    /**
     * Set gcoStateChangedDetail
     *
     * @param SearchStringField $gcoStateChangedDetail
     * @return TransactionSearchBasic
     */
    public function setGcoStateChangedDetail(SearchStringField $gcoStateChangedDetail) {
        $this->gcoStateChangedDetail = $gcoStateChangedDetail;
        return $this;
    }

    /**
     * Get gcoStateChangedDetail
     *
     * @return SearchStringField
     */
    public function getGcoStateChangedDetail() {
        return $this->gcoStateChangedDetail;
    }


    /**
     * Set giftCertificate
     *
     * @param SearchStringField $giftCertificate
     * @return TransactionSearchBasic
     */
    public function setGiftCertificate(SearchStringField $giftCertificate) {
        $this->giftCertificate = $giftCertificate;
        return $this;
    }

    /**
     * Get giftCertificate
     *
     * @return SearchStringField
     */
    public function getGiftCertificate() {
        return $this->giftCertificate;
    }


    /**
     * Set grossAmount
     *
     * @param SearchDoubleField $grossAmount
     * @return TransactionSearchBasic
     */
    public function setGrossAmount(SearchDoubleField $grossAmount) {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * Get grossAmount
     *
     * @return SearchDoubleField
     */
    public function getGrossAmount() {
        return $this->grossAmount;
    }


    /**
     * Set includeInForecast
     *
     * @param SearchBooleanField $includeInForecast
     * @return TransactionSearchBasic
     */
    public function setIncludeInForecast(SearchBooleanField $includeInForecast) {
        $this->includeInForecast = $includeInForecast;
        return $this;
    }

    /**
     * Get includeInForecast
     *
     * @return SearchBooleanField
     */
    public function getIncludeInForecast() {
        return $this->includeInForecast;
    }


    /**
     * Set intercoStatus
     *
     * @param SearchEnumMultiSelectField $intercoStatus
     * @return TransactionSearchBasic
     */
    public function setIntercoStatus(SearchEnumMultiSelectField $intercoStatus) {
        $this->intercoStatus = $intercoStatus;
        return $this;
    }

    /**
     * Get intercoStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getIntercoStatus() {
        return $this->intercoStatus;
    }


    /**
     * Set intercoTransaction
     *
     * @param SearchMultiSelectField $intercoTransaction
     * @return TransactionSearchBasic
     */
    public function setIntercoTransaction(SearchMultiSelectField $intercoTransaction) {
        $this->intercoTransaction = $intercoTransaction;
        return $this;
    }

    /**
     * Get intercoTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getIntercoTransaction() {
        return $this->intercoTransaction;
    }


    /**
     * Set internalId
     *
     * @param SearchMultiSelectField $internalId
     * @return TransactionSearchBasic
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
     * @return TransactionSearchBasic
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
     * Set inVsoeBundle
     *
     * @param SearchBooleanField $inVsoeBundle
     * @return TransactionSearchBasic
     */
    public function setInVsoeBundle(SearchBooleanField $inVsoeBundle) {
        $this->inVsoeBundle = $inVsoeBundle;
        return $this;
    }

    /**
     * Get inVsoeBundle
     *
     * @return SearchBooleanField
     */
    public function getInVsoeBundle() {
        return $this->inVsoeBundle;
    }


    /**
     * Set isAllocation
     *
     * @param SearchBooleanField $isAllocation
     * @return TransactionSearchBasic
     */
    public function setIsAllocation(SearchBooleanField $isAllocation) {
        $this->isAllocation = $isAllocation;
        return $this;
    }

    /**
     * Get isAllocation
     *
     * @return SearchBooleanField
     */
    public function getIsAllocation() {
        return $this->isAllocation;
    }


    /**
     * Set isBackflush
     *
     * @param SearchBooleanField $isBackflush
     * @return TransactionSearchBasic
     */
    public function setIsBackflush(SearchBooleanField $isBackflush) {
        $this->isBackflush = $isBackflush;
        return $this;
    }

    /**
     * Get isBackflush
     *
     * @return SearchBooleanField
     */
    public function getIsBackflush() {
        return $this->isBackflush;
    }


    /**
     * Set isGcoChargeback
     *
     * @param SearchBooleanField $isGcoChargeback
     * @return TransactionSearchBasic
     */
    public function setIsGcoChargeback(SearchBooleanField $isGcoChargeback) {
        $this->isGcoChargeback = $isGcoChargeback;
        return $this;
    }

    /**
     * Get isGcoChargeback
     *
     * @return SearchBooleanField
     */
    public function getIsGcoChargeback() {
        return $this->isGcoChargeback;
    }


    /**
     * Set isGcoChargeConfirmed
     *
     * @param SearchBooleanField $isGcoChargeConfirmed
     * @return TransactionSearchBasic
     */
    public function setIsGcoChargeConfirmed(SearchBooleanField $isGcoChargeConfirmed) {
        $this->isGcoChargeConfirmed = $isGcoChargeConfirmed;
        return $this;
    }

    /**
     * Get isGcoChargeConfirmed
     *
     * @return SearchBooleanField
     */
    public function getIsGcoChargeConfirmed() {
        return $this->isGcoChargeConfirmed;
    }


    /**
     * Set isGcoPaymentGuaranteed
     *
     * @param SearchBooleanField $isGcoPaymentGuaranteed
     * @return TransactionSearchBasic
     */
    public function setIsGcoPaymentGuaranteed(SearchBooleanField $isGcoPaymentGuaranteed) {
        $this->isGcoPaymentGuaranteed = $isGcoPaymentGuaranteed;
        return $this;
    }

    /**
     * Get isGcoPaymentGuaranteed
     *
     * @return SearchBooleanField
     */
    public function getIsGcoPaymentGuaranteed() {
        return $this->isGcoPaymentGuaranteed;
    }


    /**
     * Set isGcoRefundConfirmed
     *
     * @param SearchBooleanField $isGcoRefundConfirmed
     * @return TransactionSearchBasic
     */
    public function setIsGcoRefundConfirmed(SearchBooleanField $isGcoRefundConfirmed) {
        $this->isGcoRefundConfirmed = $isGcoRefundConfirmed;
        return $this;
    }

    /**
     * Get isGcoRefundConfirmed
     *
     * @return SearchBooleanField
     */
    public function getIsGcoRefundConfirmed() {
        return $this->isGcoRefundConfirmed;
    }


    /**
     * Set isIntercompanyAdjustment
     *
     * @param SearchBooleanField $isIntercompanyAdjustment
     * @return TransactionSearchBasic
     */
    public function setIsIntercompanyAdjustment(SearchBooleanField $isIntercompanyAdjustment) {
        $this->isIntercompanyAdjustment = $isIntercompanyAdjustment;
        return $this;
    }

    /**
     * Get isIntercompanyAdjustment
     *
     * @return SearchBooleanField
     */
    public function getIsIntercompanyAdjustment() {
        return $this->isIntercompanyAdjustment;
    }


    /**
     * Set isMultiShipTo
     *
     * @param SearchBooleanField $isMultiShipTo
     * @return TransactionSearchBasic
     */
    public function setIsMultiShipTo(SearchBooleanField $isMultiShipTo) {
        $this->isMultiShipTo = $isMultiShipTo;
        return $this;
    }

    /**
     * Get isMultiShipTo
     *
     * @return SearchBooleanField
     */
    public function getIsMultiShipTo() {
        return $this->isMultiShipTo;
    }


    /**
     * Set isPayPalMeth
     *
     * @param SearchBooleanField $isPayPalMeth
     * @return TransactionSearchBasic
     */
    public function setIsPayPalMeth(SearchBooleanField $isPayPalMeth) {
        $this->isPayPalMeth = $isPayPalMeth;
        return $this;
    }

    /**
     * Get isPayPalMeth
     *
     * @return SearchBooleanField
     */
    public function getIsPayPalMeth() {
        return $this->isPayPalMeth;
    }


    /**
     * Set isReversal
     *
     * @param SearchBooleanField $isReversal
     * @return TransactionSearchBasic
     */
    public function setIsReversal(SearchBooleanField $isReversal) {
        $this->isReversal = $isReversal;
        return $this;
    }

    /**
     * Get isReversal
     *
     * @return SearchBooleanField
     */
    public function getIsReversal() {
        return $this->isReversal;
    }


    /**
     * Set isRevRecTransaction
     *
     * @param SearchBooleanField $isRevRecTransaction
     * @return TransactionSearchBasic
     */
    public function setIsRevRecTransaction(SearchBooleanField $isRevRecTransaction) {
        $this->isRevRecTransaction = $isRevRecTransaction;
        return $this;
    }

    /**
     * Get isRevRecTransaction
     *
     * @return SearchBooleanField
     */
    public function getIsRevRecTransaction() {
        return $this->isRevRecTransaction;
    }


    /**
     * Set isScrap
     *
     * @param SearchBooleanField $isScrap
     * @return TransactionSearchBasic
     */
    public function setIsScrap(SearchBooleanField $isScrap) {
        $this->isScrap = $isScrap;
        return $this;
    }

    /**
     * Get isScrap
     *
     * @return SearchBooleanField
     */
    public function getIsScrap() {
        return $this->isScrap;
    }


    /**
     * Set isShipAddress
     *
     * @param SearchBooleanField $isShipAddress
     * @return TransactionSearchBasic
     */
    public function setIsShipAddress(SearchBooleanField $isShipAddress) {
        $this->isShipAddress = $isShipAddress;
        return $this;
    }

    /**
     * Get isShipAddress
     *
     * @return SearchBooleanField
     */
    public function getIsShipAddress() {
        return $this->isShipAddress;
    }


    /**
     * Set isTransferPriceCosting
     *
     * @param SearchBooleanField $isTransferPriceCosting
     * @return TransactionSearchBasic
     */
    public function setIsTransferPriceCosting(SearchBooleanField $isTransferPriceCosting) {
        $this->isTransferPriceCosting = $isTransferPriceCosting;
        return $this;
    }

    /**
     * Get isTransferPriceCosting
     *
     * @return SearchBooleanField
     */
    public function getIsTransferPriceCosting() {
        return $this->isTransferPriceCosting;
    }


    /**
     * Set isVsoeAlloc
     *
     * @param SearchBooleanField $isVsoeAlloc
     * @return TransactionSearchBasic
     */
    public function setIsVsoeAlloc(SearchBooleanField $isVsoeAlloc) {
        $this->isVsoeAlloc = $isVsoeAlloc;
        return $this;
    }

    /**
     * Get isVsoeAlloc
     *
     * @return SearchBooleanField
     */
    public function getIsVsoeAlloc() {
        return $this->isVsoeAlloc;
    }


    /**
     * Set isWip
     *
     * @param SearchBooleanField $isWip
     * @return TransactionSearchBasic
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
     * Set item
     *
     * @param SearchMultiSelectField $item
     * @return TransactionSearchBasic
     */
    public function setItem(SearchMultiSelectField $item) {
        $this->item = $item;
        return $this;
    }

    /**
     * Get item
     *
     * @return SearchMultiSelectField
     */
    public function getItem() {
        return $this->item;
    }


    /**
     * Set itemRevision
     *
     * @param SearchMultiSelectField $itemRevision
     * @return TransactionSearchBasic
     */
    public function setItemRevision(SearchMultiSelectField $itemRevision) {
        $this->itemRevision = $itemRevision;
        return $this;
    }

    /**
     * Get itemRevision
     *
     * @return SearchMultiSelectField
     */
    public function getItemRevision() {
        return $this->itemRevision;
    }


    /**
     * Set itemSubOf
     *
     * @param SearchMultiSelectField $itemSubOf
     * @return TransactionSearchBasic
     */
    public function setItemSubOf(SearchMultiSelectField $itemSubOf) {
        $this->itemSubOf = $itemSubOf;
        return $this;
    }

    /**
     * Get itemSubOf
     *
     * @return SearchMultiSelectField
     */
    public function getItemSubOf() {
        return $this->itemSubOf;
    }


    /**
     * Set landedCostPerLine
     *
     * @param SearchBooleanField $landedCostPerLine
     * @return TransactionSearchBasic
     */
    public function setLandedCostPerLine(SearchBooleanField $landedCostPerLine) {
        $this->landedCostPerLine = $landedCostPerLine;
        return $this;
    }

    /**
     * Get landedCostPerLine
     *
     * @return SearchBooleanField
     */
    public function getLandedCostPerLine() {
        return $this->landedCostPerLine;
    }


    /**
     * Set lastModifiedDate
     *
     * @param SearchDateField $lastModifiedDate
     * @return TransactionSearchBasic
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
     * Set leadSource
     *
     * @param SearchMultiSelectField $leadSource
     * @return TransactionSearchBasic
     */
    public function setLeadSource(SearchMultiSelectField $leadSource) {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * Get leadSource
     *
     * @return SearchMultiSelectField
     */
    public function getLeadSource() {
        return $this->leadSource;
    }


    /**
     * Set location
     *
     * @param SearchMultiSelectField $location
     * @return TransactionSearchBasic
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
     * Set mainLine
     *
     * @param SearchBooleanField $mainLine
     * @return TransactionSearchBasic
     */
    public function setMainLine(SearchBooleanField $mainLine) {
        $this->mainLine = $mainLine;
        return $this;
    }

    /**
     * Get mainLine
     *
     * @return SearchBooleanField
     */
    public function getMainLine() {
        return $this->mainLine;
    }


    /**
     * Set mainName
     *
     * @param SearchMultiSelectField $mainName
     * @return TransactionSearchBasic
     */
    public function setMainName(SearchMultiSelectField $mainName) {
        $this->mainName = $mainName;
        return $this;
    }

    /**
     * Get mainName
     *
     * @return SearchMultiSelectField
     */
    public function getMainName() {
        return $this->mainName;
    }


    /**
     * Set manufacturingRouting
     *
     * @param SearchMultiSelectField $manufacturingRouting
     * @return TransactionSearchBasic
     */
    public function setManufacturingRouting(SearchMultiSelectField $manufacturingRouting) {
        $this->manufacturingRouting = $manufacturingRouting;
        return $this;
    }

    /**
     * Get manufacturingRouting
     *
     * @return SearchMultiSelectField
     */
    public function getManufacturingRouting() {
        return $this->manufacturingRouting;
    }


    /**
     * Set matchBillToReceipt
     *
     * @param SearchBooleanField $matchBillToReceipt
     * @return TransactionSearchBasic
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
     * Set memo
     *
     * @param SearchStringField $memo
     * @return TransactionSearchBasic
     */
    public function setMemo(SearchStringField $memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return SearchStringField
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set memoMain
     *
     * @param SearchStringField $memoMain
     * @return TransactionSearchBasic
     */
    public function setMemoMain(SearchStringField $memoMain) {
        $this->memoMain = $memoMain;
        return $this;
    }

    /**
     * Get memoMain
     *
     * @return SearchStringField
     */
    public function getMemoMain() {
        return $this->memoMain;
    }


    /**
     * Set memorized
     *
     * @param SearchBooleanField $memorized
     * @return TransactionSearchBasic
     */
    public function setMemorized(SearchBooleanField $memorized) {
        $this->memorized = $memorized;
        return $this;
    }

    /**
     * Get memorized
     *
     * @return SearchBooleanField
     */
    public function getMemorized() {
        return $this->memorized;
    }


    /**
     * Set merchantAccount
     *
     * @param SearchStringField $merchantAccount
     * @return TransactionSearchBasic
     */
    public function setMerchantAccount(SearchStringField $merchantAccount) {
        $this->merchantAccount = $merchantAccount;
        return $this;
    }

    /**
     * Get merchantAccount
     *
     * @return SearchStringField
     */
    public function getMerchantAccount() {
        return $this->merchantAccount;
    }


    /**
     * Set message
     *
     * @param SearchStringField $message
     * @return TransactionSearchBasic
     */
    public function setMessage(SearchStringField $message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return SearchStringField
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set multiSubsidiary
     *
     * @param SearchBooleanField $multiSubsidiary
     * @return TransactionSearchBasic
     */
    public function setMultiSubsidiary(SearchBooleanField $multiSubsidiary) {
        $this->multiSubsidiary = $multiSubsidiary;
        return $this;
    }

    /**
     * Get multiSubsidiary
     *
     * @return SearchBooleanField
     */
    public function getMultiSubsidiary() {
        return $this->multiSubsidiary;
    }


    /**
     * Set nameText
     *
     * @param SearchStringField $nameText
     * @return TransactionSearchBasic
     */
    public function setNameText(SearchStringField $nameText) {
        $this->nameText = $nameText;
        return $this;
    }

    /**
     * Get nameText
     *
     * @return SearchStringField
     */
    public function getNameText() {
        return $this->nameText;
    }


    /**
     * Set netAmount
     *
     * @param SearchDoubleField $netAmount
     * @return TransactionSearchBasic
     */
    public function setNetAmount(SearchDoubleField $netAmount) {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * Get netAmount
     *
     * @return SearchDoubleField
     */
    public function getNetAmount() {
        return $this->netAmount;
    }


    /**
     * Set nextApprover
     *
     * @param SearchMultiSelectField $nextApprover
     * @return TransactionSearchBasic
     */
    public function setNextApprover(SearchMultiSelectField $nextApprover) {
        $this->nextApprover = $nextApprover;
        return $this;
    }

    /**
     * Get nextApprover
     *
     * @return SearchMultiSelectField
     */
    public function getNextApprover() {
        return $this->nextApprover;
    }


    /**
     * Set nextBillDate
     *
     * @param SearchDateField $nextBillDate
     * @return TransactionSearchBasic
     */
    public function setNextBillDate(SearchDateField $nextBillDate) {
        $this->nextBillDate = $nextBillDate;
        return $this;
    }

    /**
     * Get nextBillDate
     *
     * @return SearchDateField
     */
    public function getNextBillDate() {
        return $this->nextBillDate;
    }


    /**
     * Set nonReimbursable
     *
     * @param SearchBooleanField $nonReimbursable
     * @return TransactionSearchBasic
     */
    public function setNonReimbursable(SearchBooleanField $nonReimbursable) {
        $this->nonReimbursable = $nonReimbursable;
        return $this;
    }

    /**
     * Get nonReimbursable
     *
     * @return SearchBooleanField
     */
    public function getNonReimbursable() {
        return $this->nonReimbursable;
    }


    /**
     * Set number
     *
     * @param SearchLongField $number
     * @return TransactionSearchBasic
     */
    public function setNumber(SearchLongField $number) {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return SearchLongField
     */
    public function getNumber() {
        return $this->number;
    }


    /**
     * Set opportunity
     *
     * @param SearchMultiSelectField $opportunity
     * @return TransactionSearchBasic
     */
    public function setOpportunity(SearchMultiSelectField $opportunity) {
        $this->opportunity = $opportunity;
        return $this;
    }

    /**
     * Get opportunity
     *
     * @return SearchMultiSelectField
     */
    public function getOpportunity() {
        return $this->opportunity;
    }


    /**
     * Set orderPriority
     *
     * @param SearchDoubleField $orderPriority
     * @return TransactionSearchBasic
     */
    public function setOrderPriority(SearchDoubleField $orderPriority) {
        $this->orderPriority = $orderPriority;
        return $this;
    }

    /**
     * Get orderPriority
     *
     * @return SearchDoubleField
     */
    public function getOrderPriority() {
        return $this->orderPriority;
    }


    /**
     * Set otherRefNum
     *
     * @param SearchTextNumberField $otherRefNum
     * @return TransactionSearchBasic
     */
    public function setOtherRefNum(SearchTextNumberField $otherRefNum) {
        $this->otherRefNum = $otherRefNum;
        return $this;
    }

    /**
     * Get otherRefNum
     *
     * @return SearchTextNumberField
     */
    public function getOtherRefNum() {
        return $this->otherRefNum;
    }


    /**
     * Set otherRefNumNonDeposit
     *
     * @param SearchTextNumberField $otherRefNumNonDeposit
     * @return TransactionSearchBasic
     */
    public function setOtherRefNumNonDeposit(SearchTextNumberField $otherRefNumNonDeposit) {
        $this->otherRefNumNonDeposit = $otherRefNumNonDeposit;
        return $this;
    }

    /**
     * Get otherRefNumNonDeposit
     *
     * @return SearchTextNumberField
     */
    public function getOtherRefNumNonDeposit() {
        return $this->otherRefNumNonDeposit;
    }


    /**
     * Set overheadParentItem
     *
     * @param SearchMultiSelectField $overheadParentItem
     * @return TransactionSearchBasic
     */
    public function setOverheadParentItem(SearchMultiSelectField $overheadParentItem) {
        $this->overheadParentItem = $overheadParentItem;
        return $this;
    }

    /**
     * Get overheadParentItem
     *
     * @return SearchMultiSelectField
     */
    public function getOverheadParentItem() {
        return $this->overheadParentItem;
    }


    /**
     * Set packageCount
     *
     * @param SearchLongField $packageCount
     * @return TransactionSearchBasic
     */
    public function setPackageCount(SearchLongField $packageCount) {
        $this->packageCount = $packageCount;
        return $this;
    }

    /**
     * Get packageCount
     *
     * @return SearchLongField
     */
    public function getPackageCount() {
        return $this->packageCount;
    }


    /**
     * Set paidTransaction
     *
     * @param SearchMultiSelectField $paidTransaction
     * @return TransactionSearchBasic
     */
    public function setPaidTransaction(SearchMultiSelectField $paidTransaction) {
        $this->paidTransaction = $paidTransaction;
        return $this;
    }

    /**
     * Get paidTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getPaidTransaction() {
        return $this->paidTransaction;
    }


    /**
     * Set parent
     *
     * @param SearchLongField $parent
     * @return TransactionSearchBasic
     */
    public function setParent(SearchLongField $parent) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return SearchLongField
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Set partner
     *
     * @param SearchMultiSelectField $partner
     * @return TransactionSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner) {
        $this->partner = $partner;
        return $this;
    }

    /**
     * Get partner
     *
     * @return SearchMultiSelectField
     */
    public function getPartner() {
        return $this->partner;
    }


    /**
     * Set partnerContribution
     *
     * @param SearchLongField $partnerContribution
     * @return TransactionSearchBasic
     */
    public function setPartnerContribution(SearchLongField $partnerContribution) {
        $this->partnerContribution = $partnerContribution;
        return $this;
    }

    /**
     * Get partnerContribution
     *
     * @return SearchLongField
     */
    public function getPartnerContribution() {
        return $this->partnerContribution;
    }


    /**
     * Set partnerRole
     *
     * @param SearchMultiSelectField $partnerRole
     * @return TransactionSearchBasic
     */
    public function setPartnerRole(SearchMultiSelectField $partnerRole) {
        $this->partnerRole = $partnerRole;
        return $this;
    }

    /**
     * Get partnerRole
     *
     * @return SearchMultiSelectField
     */
    public function getPartnerRole() {
        return $this->partnerRole;
    }


    /**
     * Set partnerTeamMember
     *
     * @param SearchMultiSelectField $partnerTeamMember
     * @return TransactionSearchBasic
     */
    public function setPartnerTeamMember(SearchMultiSelectField $partnerTeamMember) {
        $this->partnerTeamMember = $partnerTeamMember;
        return $this;
    }

    /**
     * Get partnerTeamMember
     *
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember() {
        return $this->partnerTeamMember;
    }


    /**
     * Set payingTransaction
     *
     * @param SearchMultiSelectField $payingTransaction
     * @return TransactionSearchBasic
     */
    public function setPayingTransaction(SearchMultiSelectField $payingTransaction) {
        $this->payingTransaction = $payingTransaction;
        return $this;
    }

    /**
     * Get payingTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getPayingTransaction() {
        return $this->payingTransaction;
    }


    /**
     * Set paymentApproved
     *
     * @param SearchBooleanField $paymentApproved
     * @return TransactionSearchBasic
     */
    public function setPaymentApproved(SearchBooleanField $paymentApproved) {
        $this->paymentApproved = $paymentApproved;
        return $this;
    }

    /**
     * Get paymentApproved
     *
     * @return SearchBooleanField
     */
    public function getPaymentApproved() {
        return $this->paymentApproved;
    }


    /**
     * Set paymentEventDate
     *
     * @param SearchDateField $paymentEventDate
     * @return TransactionSearchBasic
     */
    public function setPaymentEventDate(SearchDateField $paymentEventDate) {
        $this->paymentEventDate = $paymentEventDate;
        return $this;
    }

    /**
     * Get paymentEventDate
     *
     * @return SearchDateField
     */
    public function getPaymentEventDate() {
        return $this->paymentEventDate;
    }


    /**
     * Set paymentEventHoldReason
     *
     * @param SearchEnumMultiSelectField $paymentEventHoldReason
     * @return TransactionSearchBasic
     */
    public function setPaymentEventHoldReason(SearchEnumMultiSelectField $paymentEventHoldReason) {
        $this->paymentEventHoldReason = $paymentEventHoldReason;
        return $this;
    }

    /**
     * Get paymentEventHoldReason
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventHoldReason() {
        return $this->paymentEventHoldReason;
    }


    /**
     * Set paymentEventPurchaseCardUsed
     *
     * @param SearchBooleanField $paymentEventPurchaseCardUsed
     * @return TransactionSearchBasic
     */
    public function setPaymentEventPurchaseCardUsed(SearchBooleanField $paymentEventPurchaseCardUsed) {
        $this->paymentEventPurchaseCardUsed = $paymentEventPurchaseCardUsed;
        return $this;
    }

    /**
     * Get paymentEventPurchaseCardUsed
     *
     * @return SearchBooleanField
     */
    public function getPaymentEventPurchaseCardUsed() {
        return $this->paymentEventPurchaseCardUsed;
    }


    /**
     * Set paymentEventPurchaseDataSent
     *
     * @param SearchBooleanField $paymentEventPurchaseDataSent
     * @return TransactionSearchBasic
     */
    public function setPaymentEventPurchaseDataSent(SearchBooleanField $paymentEventPurchaseDataSent) {
        $this->paymentEventPurchaseDataSent = $paymentEventPurchaseDataSent;
        return $this;
    }

    /**
     * Get paymentEventPurchaseDataSent
     *
     * @return SearchBooleanField
     */
    public function getPaymentEventPurchaseDataSent() {
        return $this->paymentEventPurchaseDataSent;
    }


    /**
     * Set paymentEventResult
     *
     * @param SearchEnumMultiSelectField $paymentEventResult
     * @return TransactionSearchBasic
     */
    public function setPaymentEventResult(SearchEnumMultiSelectField $paymentEventResult) {
        $this->paymentEventResult = $paymentEventResult;
        return $this;
    }

    /**
     * Get paymentEventResult
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventResult() {
        return $this->paymentEventResult;
    }


    /**
     * Set paymentEventType
     *
     * @param SearchEnumMultiSelectField $paymentEventType
     * @return TransactionSearchBasic
     */
    public function setPaymentEventType(SearchEnumMultiSelectField $paymentEventType) {
        $this->paymentEventType = $paymentEventType;
        return $this;
    }

    /**
     * Get paymentEventType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventType() {
        return $this->paymentEventType;
    }


    /**
     * Set paymentHold
     *
     * @param SearchBooleanField $paymentHold
     * @return TransactionSearchBasic
     */
    public function setPaymentHold(SearchBooleanField $paymentHold) {
        $this->paymentHold = $paymentHold;
        return $this;
    }

    /**
     * Get paymentHold
     *
     * @return SearchBooleanField
     */
    public function getPaymentHold() {
        return $this->paymentHold;
    }


    /**
     * Set paymentMethod
     *
     * @param SearchMultiSelectField $paymentMethod
     * @return TransactionSearchBasic
     */
    public function setPaymentMethod(SearchMultiSelectField $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return SearchMultiSelectField
     */
    public function getPaymentMethod() {
        return $this->paymentMethod;
    }


    /**
     * Set payPalPending
     *
     * @param SearchBooleanField $payPalPending
     * @return TransactionSearchBasic
     */
    public function setPayPalPending(SearchBooleanField $payPalPending) {
        $this->payPalPending = $payPalPending;
        return $this;
    }

    /**
     * Get payPalPending
     *
     * @return SearchBooleanField
     */
    public function getPayPalPending() {
        return $this->payPalPending;
    }


    /**
     * Set payPalStatus
     *
     * @param SearchStringField $payPalStatus
     * @return TransactionSearchBasic
     */
    public function setPayPalStatus(SearchStringField $payPalStatus) {
        $this->payPalStatus = $payPalStatus;
        return $this;
    }

    /**
     * Get payPalStatus
     *
     * @return SearchStringField
     */
    public function getPayPalStatus() {
        return $this->payPalStatus;
    }


    /**
     * Set payPalTranId
     *
     * @param SearchStringField $payPalTranId
     * @return TransactionSearchBasic
     */
    public function setPayPalTranId(SearchStringField $payPalTranId) {
        $this->payPalTranId = $payPalTranId;
        return $this;
    }

    /**
     * Get payPalTranId
     *
     * @return SearchStringField
     */
    public function getPayPalTranId() {
        return $this->payPalTranId;
    }


    /**
     * Set pnRefNum
     *
     * @param SearchStringField $pnRefNum
     * @return TransactionSearchBasic
     */
    public function setPnRefNum(SearchStringField $pnRefNum) {
        $this->pnRefNum = $pnRefNum;
        return $this;
    }

    /**
     * Get pnRefNum
     *
     * @return SearchStringField
     */
    public function getPnRefNum() {
        return $this->pnRefNum;
    }


    /**
     * Set poAsText
     *
     * @param SearchStringField $poAsText
     * @return TransactionSearchBasic
     */
    public function setPoAsText(SearchStringField $poAsText) {
        $this->poAsText = $poAsText;
        return $this;
    }

    /**
     * Get poAsText
     *
     * @return SearchStringField
     */
    public function getPoAsText() {
        return $this->poAsText;
    }


    /**
     * Set posting
     *
     * @param SearchBooleanField $posting
     * @return TransactionSearchBasic
     */
    public function setPosting(SearchBooleanField $posting) {
        $this->posting = $posting;
        return $this;
    }

    /**
     * Get posting
     *
     * @return SearchBooleanField
     */
    public function getPosting() {
        return $this->posting;
    }


    /**
     * Set postingPeriodRelative
     *
     * @param PostingPeriodDate $postingPeriodRelative
     * @return TransactionSearchBasic
     */
    public function setPostingPeriodRelative(PostingPeriodDate $postingPeriodRelative) {
        $this->postingPeriodRelative = $postingPeriodRelative;
        return $this;
    }

    /**
     * Get postingPeriodRelative
     *
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative() {
        return $this->postingPeriodRelative;
    }


    /**
     * Set priceLevel
     *
     * @param SearchMultiSelectField $priceLevel
     * @return TransactionSearchBasic
     */
    public function setPriceLevel(SearchMultiSelectField $priceLevel) {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * Get priceLevel
     *
     * @return SearchMultiSelectField
     */
    public function getPriceLevel() {
        return $this->priceLevel;
    }


    /**
     * Set printedPickingTicket
     *
     * @param SearchBooleanField $printedPickingTicket
     * @return TransactionSearchBasic
     */
    public function setPrintedPickingTicket(SearchBooleanField $printedPickingTicket) {
        $this->printedPickingTicket = $printedPickingTicket;
        return $this;
    }

    /**
     * Get printedPickingTicket
     *
     * @return SearchBooleanField
     */
    public function getPrintedPickingTicket() {
        return $this->printedPickingTicket;
    }


    /**
     * Set probability
     *
     * @param SearchLongField $probability
     * @return TransactionSearchBasic
     */
    public function setProbability(SearchLongField $probability) {
        $this->probability = $probability;
        return $this;
    }

    /**
     * Get probability
     *
     * @return SearchLongField
     */
    public function getProbability() {
        return $this->probability;
    }


    /**
     * Set projectedAmount
     *
     * @param SearchDoubleField $projectedAmount
     * @return TransactionSearchBasic
     */
    public function setProjectedAmount(SearchDoubleField $projectedAmount) {
        $this->projectedAmount = $projectedAmount;
        return $this;
    }

    /**
     * Get projectedAmount
     *
     * @return SearchDoubleField
     */
    public function getProjectedAmount() {
        return $this->projectedAmount;
    }


    /**
     * Set promoCode
     *
     * @param SearchMultiSelectField $promoCode
     * @return TransactionSearchBasic
     */
    public function setPromoCode(SearchMultiSelectField $promoCode) {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * Get promoCode
     *
     * @return SearchMultiSelectField
     */
    public function getPromoCode() {
        return $this->promoCode;
    }


    /**
     * Set purchaseOrder
     *
     * @param SearchMultiSelectField $purchaseOrder
     * @return TransactionSearchBasic
     */
    public function setPurchaseOrder(SearchMultiSelectField $purchaseOrder) {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }

    /**
     * Get purchaseOrder
     *
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrder() {
        return $this->purchaseOrder;
    }


    /**
     * Set quantity
     *
     * @param SearchDoubleField $quantity
     * @return TransactionSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return SearchDoubleField
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set quantityBilled
     *
     * @param SearchDoubleField $quantityBilled
     * @return TransactionSearchBasic
     */
    public function setQuantityBilled(SearchDoubleField $quantityBilled) {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * Get quantityBilled
     *
     * @return SearchDoubleField
     */
    public function getQuantityBilled() {
        return $this->quantityBilled;
    }


    /**
     * Set quantityCommitted
     *
     * @param SearchDoubleField $quantityCommitted
     * @return TransactionSearchBasic
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
     * Set quantityPacked
     *
     * @param SearchDoubleField $quantityPacked
     * @return TransactionSearchBasic
     */
    public function setQuantityPacked(SearchDoubleField $quantityPacked) {
        $this->quantityPacked = $quantityPacked;
        return $this;
    }

    /**
     * Get quantityPacked
     *
     * @return SearchDoubleField
     */
    public function getQuantityPacked() {
        return $this->quantityPacked;
    }


    /**
     * Set quantityPicked
     *
     * @param SearchDoubleField $quantityPicked
     * @return TransactionSearchBasic
     */
    public function setQuantityPicked(SearchDoubleField $quantityPicked) {
        $this->quantityPicked = $quantityPicked;
        return $this;
    }

    /**
     * Get quantityPicked
     *
     * @return SearchDoubleField
     */
    public function getQuantityPicked() {
        return $this->quantityPicked;
    }


    /**
     * Set quantityRevCommitted
     *
     * @param SearchDoubleField $quantityRevCommitted
     * @return TransactionSearchBasic
     */
    public function setQuantityRevCommitted(SearchDoubleField $quantityRevCommitted) {
        $this->quantityRevCommitted = $quantityRevCommitted;
        return $this;
    }

    /**
     * Get quantityRevCommitted
     *
     * @return SearchDoubleField
     */
    public function getQuantityRevCommitted() {
        return $this->quantityRevCommitted;
    }


    /**
     * Set quantityShipRecv
     *
     * @param SearchDoubleField $quantityShipRecv
     * @return TransactionSearchBasic
     */
    public function setQuantityShipRecv(SearchDoubleField $quantityShipRecv) {
        $this->quantityShipRecv = $quantityShipRecv;
        return $this;
    }

    /**
     * Get quantityShipRecv
     *
     * @return SearchDoubleField
     */
    public function getQuantityShipRecv() {
        return $this->quantityShipRecv;
    }


    /**
     * Set recognizedRevenue
     *
     * @param SearchDoubleField $recognizedRevenue
     * @return TransactionSearchBasic
     */
    public function setRecognizedRevenue(SearchDoubleField $recognizedRevenue) {
        $this->recognizedRevenue = $recognizedRevenue;
        return $this;
    }

    /**
     * Get recognizedRevenue
     *
     * @return SearchDoubleField
     */
    public function getRecognizedRevenue() {
        return $this->recognizedRevenue;
    }


    /**
     * Set recordType
     *
     * @param SearchStringField $recordType
     * @return TransactionSearchBasic
     */
    public function setRecordType(SearchStringField $recordType) {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * Get recordType
     *
     * @return SearchStringField
     */
    public function getRecordType() {
        return $this->recordType;
    }


    /**
     * Set refNumber
     *
     * @param SearchLongField $refNumber
     * @return TransactionSearchBasic
     */
    public function setRefNumber(SearchLongField $refNumber) {
        $this->refNumber = $refNumber;
        return $this;
    }

    /**
     * Get refNumber
     *
     * @return SearchLongField
     */
    public function getRefNumber() {
        return $this->refNumber;
    }


    /**
     * Set revCommitStatus
     *
     * @param SearchEnumMultiSelectField $revCommitStatus
     * @return TransactionSearchBasic
     */
    public function setRevCommitStatus(SearchEnumMultiSelectField $revCommitStatus) {
        $this->revCommitStatus = $revCommitStatus;
        return $this;
    }

    /**
     * Get revCommitStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getRevCommitStatus() {
        return $this->revCommitStatus;
    }


    /**
     * Set revCommittingStatus
     *
     * @param SearchBooleanField $revCommittingStatus
     * @return TransactionSearchBasic
     */
    public function setRevCommittingStatus(SearchBooleanField $revCommittingStatus) {
        $this->revCommittingStatus = $revCommittingStatus;
        return $this;
    }

    /**
     * Get revCommittingStatus
     *
     * @return SearchBooleanField
     */
    public function getRevCommittingStatus() {
        return $this->revCommittingStatus;
    }


    /**
     * Set revCommittingTransaction
     *
     * @param SearchMultiSelectField $revCommittingTransaction
     * @return TransactionSearchBasic
     */
    public function setRevCommittingTransaction(SearchMultiSelectField $revCommittingTransaction) {
        $this->revCommittingTransaction = $revCommittingTransaction;
        return $this;
    }

    /**
     * Get revCommittingTransaction
     *
     * @return SearchMultiSelectField
     */
    public function getRevCommittingTransaction() {
        return $this->revCommittingTransaction;
    }


    /**
     * Set revenueStatus
     *
     * @param SearchEnumMultiSelectField $revenueStatus
     * @return TransactionSearchBasic
     */
    public function setRevenueStatus(SearchEnumMultiSelectField $revenueStatus) {
        $this->revenueStatus = $revenueStatus;
        return $this;
    }

    /**
     * Get revenueStatus
     *
     * @return SearchEnumMultiSelectField
     */
    public function getRevenueStatus() {
        return $this->revenueStatus;
    }


    /**
     * Set reversalDate
     *
     * @param SearchDateField $reversalDate
     * @return TransactionSearchBasic
     */
    public function setReversalDate(SearchDateField $reversalDate) {
        $this->reversalDate = $reversalDate;
        return $this;
    }

    /**
     * Get reversalDate
     *
     * @return SearchDateField
     */
    public function getReversalDate() {
        return $this->reversalDate;
    }


    /**
     * Set reversalNumber
     *
     * @param SearchStringField $reversalNumber
     * @return TransactionSearchBasic
     */
    public function setReversalNumber(SearchStringField $reversalNumber) {
        $this->reversalNumber = $reversalNumber;
        return $this;
    }

    /**
     * Get reversalNumber
     *
     * @return SearchStringField
     */
    public function getReversalNumber() {
        return $this->reversalNumber;
    }


    /**
     * Set revRecEndDate
     *
     * @param SearchDateField $revRecEndDate
     * @return TransactionSearchBasic
     */
    public function setRevRecEndDate(SearchDateField $revRecEndDate) {
        $this->revRecEndDate = $revRecEndDate;
        return $this;
    }

    /**
     * Get revRecEndDate
     *
     * @return SearchDateField
     */
    public function getRevRecEndDate() {
        return $this->revRecEndDate;
    }


    /**
     * Set revRecOnRevCommitment
     *
     * @param SearchBooleanField $revRecOnRevCommitment
     * @return TransactionSearchBasic
     */
    public function setRevRecOnRevCommitment(SearchBooleanField $revRecOnRevCommitment) {
        $this->revRecOnRevCommitment = $revRecOnRevCommitment;
        return $this;
    }

    /**
     * Get revRecOnRevCommitment
     *
     * @return SearchBooleanField
     */
    public function getRevRecOnRevCommitment() {
        return $this->revRecOnRevCommitment;
    }


    /**
     * Set revRecStartDate
     *
     * @param SearchDateField $revRecStartDate
     * @return TransactionSearchBasic
     */
    public function setRevRecStartDate(SearchDateField $revRecStartDate) {
        $this->revRecStartDate = $revRecStartDate;
        return $this;
    }

    /**
     * Get revRecStartDate
     *
     * @return SearchDateField
     */
    public function getRevRecStartDate() {
        return $this->revRecStartDate;
    }


    /**
     * Set revRecTermInMonths
     *
     * @param SearchLongField $revRecTermInMonths
     * @return TransactionSearchBasic
     */
    public function setRevRecTermInMonths(SearchLongField $revRecTermInMonths) {
        $this->revRecTermInMonths = $revRecTermInMonths;
        return $this;
    }

    /**
     * Get revRecTermInMonths
     *
     * @return SearchLongField
     */
    public function getRevRecTermInMonths() {
        return $this->revRecTermInMonths;
    }


    /**
     * Set salesEffectiveDate
     *
     * @param SearchDateField $salesEffectiveDate
     * @return TransactionSearchBasic
     */
    public function setSalesEffectiveDate(SearchDateField $salesEffectiveDate) {
        $this->salesEffectiveDate = $salesEffectiveDate;
        return $this;
    }

    /**
     * Get salesEffectiveDate
     *
     * @return SearchDateField
     */
    public function getSalesEffectiveDate() {
        return $this->salesEffectiveDate;
    }


    /**
     * Set salesOrder
     *
     * @param SearchMultiSelectField $salesOrder
     * @return TransactionSearchBasic
     */
    public function setSalesOrder(SearchMultiSelectField $salesOrder) {
        $this->salesOrder = $salesOrder;
        return $this;
    }

    /**
     * Get salesOrder
     *
     * @return SearchMultiSelectField
     */
    public function getSalesOrder() {
        return $this->salesOrder;
    }


    /**
     * Set salesRep
     *
     * @param SearchMultiSelectField $salesRep
     * @return TransactionSearchBasic
     */
    public function setSalesRep(SearchMultiSelectField $salesRep) {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * Get salesRep
     *
     * @return SearchMultiSelectField
     */
    public function getSalesRep() {
        return $this->salesRep;
    }


    /**
     * Set salesTeamMember
     *
     * @param SearchMultiSelectField $salesTeamMember
     * @return TransactionSearchBasic
     */
    public function setSalesTeamMember(SearchMultiSelectField $salesTeamMember) {
        $this->salesTeamMember = $salesTeamMember;
        return $this;
    }

    /**
     * Get salesTeamMember
     *
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember() {
        return $this->salesTeamMember;
    }


    /**
     * Set salesTeamRole
     *
     * @param SearchMultiSelectField $salesTeamRole
     * @return TransactionSearchBasic
     */
    public function setSalesTeamRole(SearchMultiSelectField $salesTeamRole) {
        $this->salesTeamRole = $salesTeamRole;
        return $this;
    }

    /**
     * Get salesTeamRole
     *
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole() {
        return $this->salesTeamRole;
    }


    /**
     * Set schedulingMethod
     *
     * @param SearchEnumMultiSelectField $schedulingMethod
     * @return TransactionSearchBasic
     */
    public function setSchedulingMethod(SearchEnumMultiSelectField $schedulingMethod) {
        $this->schedulingMethod = $schedulingMethod;
        return $this;
    }

    /**
     * Get schedulingMethod
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSchedulingMethod() {
        return $this->schedulingMethod;
    }


    /**
     * Set serialNumber
     *
     * @param SearchStringField $serialNumber
     * @return TransactionSearchBasic
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
     * Set serialNumberCost
     *
     * @param SearchDoubleField $serialNumberCost
     * @return TransactionSearchBasic
     */
    public function setSerialNumberCost(SearchDoubleField $serialNumberCost) {
        $this->serialNumberCost = $serialNumberCost;
        return $this;
    }

    /**
     * Get serialNumberCost
     *
     * @return SearchDoubleField
     */
    public function getSerialNumberCost() {
        return $this->serialNumberCost;
    }


    /**
     * Set serialNumberCostAdjustment
     *
     * @param SearchDoubleField $serialNumberCostAdjustment
     * @return TransactionSearchBasic
     */
    public function setSerialNumberCostAdjustment(SearchDoubleField $serialNumberCostAdjustment) {
        $this->serialNumberCostAdjustment = $serialNumberCostAdjustment;
        return $this;
    }

    /**
     * Get serialNumberCostAdjustment
     *
     * @return SearchDoubleField
     */
    public function getSerialNumberCostAdjustment() {
        return $this->serialNumberCostAdjustment;
    }


    /**
     * Set serialNumberQuantity
     *
     * @param SearchDoubleField $serialNumberQuantity
     * @return TransactionSearchBasic
     */
    public function setSerialNumberQuantity(SearchDoubleField $serialNumberQuantity) {
        $this->serialNumberQuantity = $serialNumberQuantity;
        return $this;
    }

    /**
     * Get serialNumberQuantity
     *
     * @return SearchDoubleField
     */
    public function getSerialNumberQuantity() {
        return $this->serialNumberQuantity;
    }


    /**
     * Set serialNumbers
     *
     * @param SearchStringField $serialNumbers
     * @return TransactionSearchBasic
     */
    public function setSerialNumbers(SearchStringField $serialNumbers) {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * Get serialNumbers
     *
     * @return SearchStringField
     */
    public function getSerialNumbers() {
        return $this->serialNumbers;
    }


    /**
     * Set shipAddress
     *
     * @param SearchStringField $shipAddress
     * @return TransactionSearchBasic
     */
    public function setShipAddress(SearchStringField $shipAddress) {
        $this->shipAddress = $shipAddress;
        return $this;
    }

    /**
     * Get shipAddress
     *
     * @return SearchStringField
     */
    public function getShipAddress() {
        return $this->shipAddress;
    }


    /**
     * Set shipAddressee
     *
     * @param SearchStringField $shipAddressee
     * @return TransactionSearchBasic
     */
    public function setShipAddressee(SearchStringField $shipAddressee) {
        $this->shipAddressee = $shipAddressee;
        return $this;
    }

    /**
     * Get shipAddressee
     *
     * @return SearchStringField
     */
    public function getShipAddressee() {
        return $this->shipAddressee;
    }


    /**
     * Set shipAttention
     *
     * @param SearchStringField $shipAttention
     * @return TransactionSearchBasic
     */
    public function setShipAttention(SearchStringField $shipAttention) {
        $this->shipAttention = $shipAttention;
        return $this;
    }

    /**
     * Get shipAttention
     *
     * @return SearchStringField
     */
    public function getShipAttention() {
        return $this->shipAttention;
    }


    /**
     * Set shipCity
     *
     * @param SearchStringField $shipCity
     * @return TransactionSearchBasic
     */
    public function setShipCity(SearchStringField $shipCity) {
        $this->shipCity = $shipCity;
        return $this;
    }

    /**
     * Get shipCity
     *
     * @return SearchStringField
     */
    public function getShipCity() {
        return $this->shipCity;
    }


    /**
     * Set shipComplete
     *
     * @param SearchBooleanField $shipComplete
     * @return TransactionSearchBasic
     */
    public function setShipComplete(SearchBooleanField $shipComplete) {
        $this->shipComplete = $shipComplete;
        return $this;
    }

    /**
     * Get shipComplete
     *
     * @return SearchBooleanField
     */
    public function getShipComplete() {
        return $this->shipComplete;
    }


    /**
     * Set shipCountry
     *
     * @param SearchEnumMultiSelectField $shipCountry
     * @return TransactionSearchBasic
     */
    public function setShipCountry(SearchEnumMultiSelectField $shipCountry) {
        $this->shipCountry = $shipCountry;
        return $this;
    }

    /**
     * Get shipCountry
     *
     * @return SearchEnumMultiSelectField
     */
    public function getShipCountry() {
        return $this->shipCountry;
    }


    /**
     * Set shipCounty
     *
     * @param SearchStringField $shipCounty
     * @return TransactionSearchBasic
     */
    public function setShipCounty(SearchStringField $shipCounty) {
        $this->shipCounty = $shipCounty;
        return $this;
    }

    /**
     * Get shipCounty
     *
     * @return SearchStringField
     */
    public function getShipCounty() {
        return $this->shipCounty;
    }


    /**
     * Set shipDate
     *
     * @param SearchDateField $shipDate
     * @return TransactionSearchBasic
     */
    public function setShipDate(SearchDateField $shipDate) {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * Get shipDate
     *
     * @return SearchDateField
     */
    public function getShipDate() {
        return $this->shipDate;
    }


    /**
     * Set shipGroup
     *
     * @param SearchLongField $shipGroup
     * @return TransactionSearchBasic
     */
    public function setShipGroup(SearchLongField $shipGroup) {
        $this->shipGroup = $shipGroup;
        return $this;
    }

    /**
     * Get shipGroup
     *
     * @return SearchLongField
     */
    public function getShipGroup() {
        return $this->shipGroup;
    }


    /**
     * Set shipMethod
     *
     * @param SearchMultiSelectField $shipMethod
     * @return TransactionSearchBasic
     */
    public function setShipMethod(SearchMultiSelectField $shipMethod) {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * Get shipMethod
     *
     * @return SearchMultiSelectField
     */
    public function getShipMethod() {
        return $this->shipMethod;
    }


    /**
     * Set shipPhone
     *
     * @param SearchStringField $shipPhone
     * @return TransactionSearchBasic
     */
    public function setShipPhone(SearchStringField $shipPhone) {
        $this->shipPhone = $shipPhone;
        return $this;
    }

    /**
     * Get shipPhone
     *
     * @return SearchStringField
     */
    public function getShipPhone() {
        return $this->shipPhone;
    }


    /**
     * Set shipping
     *
     * @param SearchBooleanField $shipping
     * @return TransactionSearchBasic
     */
    public function setShipping(SearchBooleanField $shipping) {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * Get shipping
     *
     * @return SearchBooleanField
     */
    public function getShipping() {
        return $this->shipping;
    }


    /**
     * Set shipRecvStatus
     *
     * @param SearchBooleanField $shipRecvStatus
     * @return TransactionSearchBasic
     */
    public function setShipRecvStatus(SearchBooleanField $shipRecvStatus) {
        $this->shipRecvStatus = $shipRecvStatus;
        return $this;
    }

    /**
     * Get shipRecvStatus
     *
     * @return SearchBooleanField
     */
    public function getShipRecvStatus() {
        return $this->shipRecvStatus;
    }


    /**
     * Set shipRecvStatusLine
     *
     * @param SearchBooleanField $shipRecvStatusLine
     * @return TransactionSearchBasic
     */
    public function setShipRecvStatusLine(SearchBooleanField $shipRecvStatusLine) {
        $this->shipRecvStatusLine = $shipRecvStatusLine;
        return $this;
    }

    /**
     * Get shipRecvStatusLine
     *
     * @return SearchBooleanField
     */
    public function getShipRecvStatusLine() {
        return $this->shipRecvStatusLine;
    }


    /**
     * Set shipState
     *
     * @param SearchMultiSelectField $shipState
     * @return TransactionSearchBasic
     */
    public function setShipState(SearchMultiSelectField $shipState) {
        $this->shipState = $shipState;
        return $this;
    }

    /**
     * Get shipState
     *
     * @return SearchMultiSelectField
     */
    public function getShipState() {
        return $this->shipState;
    }


    /**
     * Set shipTo
     *
     * @param SearchMultiSelectField $shipTo
     * @return TransactionSearchBasic
     */
    public function setShipTo(SearchMultiSelectField $shipTo) {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * Get shipTo
     *
     * @return SearchMultiSelectField
     */
    public function getShipTo() {
        return $this->shipTo;
    }


    /**
     * Set shipZip
     *
     * @param SearchStringField $shipZip
     * @return TransactionSearchBasic
     */
    public function setShipZip(SearchStringField $shipZip) {
        $this->shipZip = $shipZip;
        return $this;
    }

    /**
     * Get shipZip
     *
     * @return SearchStringField
     */
    public function getShipZip() {
        return $this->shipZip;
    }


    /**
     * Set source
     *
     * @param SearchEnumMultiSelectField $source
     * @return TransactionSearchBasic
     */
    public function setSource(SearchEnumMultiSelectField $source) {
        $this->source = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return SearchEnumMultiSelectField
     */
    public function getSource() {
        return $this->source;
    }


    /**
     * Set startDate
     *
     * @param SearchDateField $startDate
     * @return TransactionSearchBasic
     */
    public function setStartDate(SearchDateField $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return SearchDateField
     */
    public function getStartDate() {
        return $this->startDate;
    }


    /**
     * Set statistical
     *
     * @param SearchBooleanField $statistical
     * @return TransactionSearchBasic
     */
    public function setStatistical(SearchBooleanField $statistical) {
        $this->statistical = $statistical;
        return $this;
    }

    /**
     * Get statistical
     *
     * @return SearchBooleanField
     */
    public function getStatistical() {
        return $this->statistical;
    }


    /**
     * Set status
     *
     * @param SearchEnumMultiSelectField $status
     * @return TransactionSearchBasic
     */
    public function setStatus(SearchEnumMultiSelectField $status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return SearchEnumMultiSelectField
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set subsidiary
     *
     * @param SearchMultiSelectField $subsidiary
     * @return TransactionSearchBasic
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
     * Set taxItem
     *
     * @param SearchMultiSelectField $taxItem
     * @return TransactionSearchBasic
     */
    public function setTaxItem(SearchMultiSelectField $taxItem) {
        $this->taxItem = $taxItem;
        return $this;
    }

    /**
     * Get taxItem
     *
     * @return SearchMultiSelectField
     */
    public function getTaxItem() {
        return $this->taxItem;
    }


    /**
     * Set taxLine
     *
     * @param SearchBooleanField $taxLine
     * @return TransactionSearchBasic
     */
    public function setTaxLine(SearchBooleanField $taxLine) {
        $this->taxLine = $taxLine;
        return $this;
    }

    /**
     * Get taxLine
     *
     * @return SearchBooleanField
     */
    public function getTaxLine() {
        return $this->taxLine;
    }


    /**
     * Set taxPeriodRelative
     *
     * @param PostingPeriodDate $taxPeriodRelative
     * @return TransactionSearchBasic
     */
    public function setTaxPeriodRelative(PostingPeriodDate $taxPeriodRelative) {
        $this->taxPeriodRelative = $taxPeriodRelative;
        return $this;
    }

    /**
     * Get taxPeriodRelative
     *
     * @return PostingPeriodDate
     */
    public function getTaxPeriodRelative() {
        return $this->taxPeriodRelative;
    }


    /**
     * Set taxRate
     *
     * @param SearchDoubleField $taxRate
     * @return TransactionSearchBasic
     */
    public function setTaxRate(SearchDoubleField $taxRate) {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Get taxRate
     *
     * @return SearchDoubleField
     */
    public function getTaxRate() {
        return $this->taxRate;
    }


    /**
     * Set terms
     *
     * @param SearchMultiSelectField $terms
     * @return TransactionSearchBasic
     */
    public function setTerms(SearchMultiSelectField $terms) {
        $this->terms = $terms;
        return $this;
    }

    /**
     * Get terms
     *
     * @return SearchMultiSelectField
     */
    public function getTerms() {
        return $this->terms;
    }


    /**
     * Set title
     *
     * @param SearchStringField $title
     * @return TransactionSearchBasic
     */
    public function setTitle(SearchStringField $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return SearchStringField
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set toBeEmailed
     *
     * @param SearchBooleanField $toBeEmailed
     * @return TransactionSearchBasic
     */
    public function setToBeEmailed(SearchBooleanField $toBeEmailed) {
        $this->toBeEmailed = $toBeEmailed;
        return $this;
    }

    /**
     * Get toBeEmailed
     *
     * @return SearchBooleanField
     */
    public function getToBeEmailed() {
        return $this->toBeEmailed;
    }


    /**
     * Set toBePrinted
     *
     * @param SearchBooleanField $toBePrinted
     * @return TransactionSearchBasic
     */
    public function setToBePrinted(SearchBooleanField $toBePrinted) {
        $this->toBePrinted = $toBePrinted;
        return $this;
    }

    /**
     * Get toBePrinted
     *
     * @return SearchBooleanField
     */
    public function getToBePrinted() {
        return $this->toBePrinted;
    }


    /**
     * Set toSubsidiary
     *
     * @param SearchMultiSelectField $toSubsidiary
     * @return TransactionSearchBasic
     */
    public function setToSubsidiary(SearchMultiSelectField $toSubsidiary) {
        $this->toSubsidiary = $toSubsidiary;
        return $this;
    }

    /**
     * Get toSubsidiary
     *
     * @return SearchMultiSelectField
     */
    public function getToSubsidiary() {
        return $this->toSubsidiary;
    }


    /**
     * Set totalAmount
     *
     * @param SearchDoubleField $totalAmount
     * @return TransactionSearchBasic
     */
    public function setTotalAmount(SearchDoubleField $totalAmount) {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return SearchDoubleField
     */
    public function getTotalAmount() {
        return $this->totalAmount;
    }


    /**
     * Set trackingNumbers
     *
     * @param SearchStringField $trackingNumbers
     * @return TransactionSearchBasic
     */
    public function setTrackingNumbers(SearchStringField $trackingNumbers) {
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }

    /**
     * Get trackingNumbers
     *
     * @return SearchStringField
     */
    public function getTrackingNumbers() {
        return $this->trackingNumbers;
    }


    /**
     * Set tranCostEstimate
     *
     * @param SearchDoubleField $tranCostEstimate
     * @return TransactionSearchBasic
     */
    public function setTranCostEstimate(SearchDoubleField $tranCostEstimate) {
        $this->tranCostEstimate = $tranCostEstimate;
        return $this;
    }

    /**
     * Get tranCostEstimate
     *
     * @return SearchDoubleField
     */
    public function getTranCostEstimate() {
        return $this->tranCostEstimate;
    }


    /**
     * Set tranDate
     *
     * @param SearchDateField $tranDate
     * @return TransactionSearchBasic
     */
    public function setTranDate(SearchDateField $tranDate) {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return SearchDateField
     */
    public function getTranDate() {
        return $this->tranDate;
    }


    /**
     * Set tranEstGrossProfit
     *
     * @param SearchDoubleField $tranEstGrossProfit
     * @return TransactionSearchBasic
     */
    public function setTranEstGrossProfit(SearchDoubleField $tranEstGrossProfit) {
        $this->tranEstGrossProfit = $tranEstGrossProfit;
        return $this;
    }

    /**
     * Get tranEstGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfit() {
        return $this->tranEstGrossProfit;
    }


    /**
     * Set tranEstGrossProfitPct
     *
     * @param SearchDoubleField $tranEstGrossProfitPct
     * @return TransactionSearchBasic
     */
    public function setTranEstGrossProfitPct(SearchDoubleField $tranEstGrossProfitPct) {
        $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
        return $this;
    }

    /**
     * Get tranEstGrossProfitPct
     *
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfitPct() {
        return $this->tranEstGrossProfitPct;
    }


    /**
     * Set tranFxEstGrossProfit
     *
     * @param SearchDoubleField $tranFxEstGrossProfit
     * @return TransactionSearchBasic
     */
    public function setTranFxEstGrossProfit(SearchDoubleField $tranFxEstGrossProfit) {
        $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
        return $this;
    }

    /**
     * Get tranFxEstGrossProfit
     *
     * @return SearchDoubleField
     */
    public function getTranFxEstGrossProfit() {
        return $this->tranFxEstGrossProfit;
    }


    /**
     * Set tranId
     *
     * @param SearchStringField $tranId
     * @return TransactionSearchBasic
     */
    public function setTranId(SearchStringField $tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return SearchStringField
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set tranIsVsoeBundle
     *
     * @param SearchBooleanField $tranIsVsoeBundle
     * @return TransactionSearchBasic
     */
    public function setTranIsVsoeBundle(SearchBooleanField $tranIsVsoeBundle) {
        $this->tranIsVsoeBundle = $tranIsVsoeBundle;
        return $this;
    }

    /**
     * Get tranIsVsoeBundle
     *
     * @return SearchBooleanField
     */
    public function getTranIsVsoeBundle() {
        return $this->tranIsVsoeBundle;
    }


    /**
     * Set transactionDiscount
     *
     * @param SearchBooleanField $transactionDiscount
     * @return TransactionSearchBasic
     */
    public function setTransactionDiscount(SearchBooleanField $transactionDiscount) {
        $this->transactionDiscount = $transactionDiscount;
        return $this;
    }

    /**
     * Get transactionDiscount
     *
     * @return SearchBooleanField
     */
    public function getTransactionDiscount() {
        return $this->transactionDiscount;
    }


    /**
     * Set transactionLineType
     *
     * @param SearchEnumMultiSelectField $transactionLineType
     * @return TransactionSearchBasic
     */
    public function setTransactionLineType(SearchEnumMultiSelectField $transactionLineType) {
        $this->transactionLineType = $transactionLineType;
        return $this;
    }

    /**
     * Get transactionLineType
     *
     * @return SearchEnumMultiSelectField
     */
    public function getTransactionLineType() {
        return $this->transactionLineType;
    }


    /**
     * Set transactionNumber
     *
     * @param SearchStringField $transactionNumber
     * @return TransactionSearchBasic
     */
    public function setTransactionNumber(SearchStringField $transactionNumber) {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * Get transactionNumber
     *
     * @return SearchStringField
     */
    public function getTransactionNumber() {
        return $this->transactionNumber;
    }


    /**
     * Set transferLocation
     *
     * @param SearchMultiSelectField $transferLocation
     * @return TransactionSearchBasic
     */
    public function setTransferLocation(SearchMultiSelectField $transferLocation) {
        $this->transferLocation = $transferLocation;
        return $this;
    }

    /**
     * Get transferLocation
     *
     * @return SearchMultiSelectField
     */
    public function getTransferLocation() {
        return $this->transferLocation;
    }


    /**
     * Set transferOrderQuantityCommitted
     *
     * @param SearchDoubleField $transferOrderQuantityCommitted
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityCommitted(SearchDoubleField $transferOrderQuantityCommitted) {
        $this->transferOrderQuantityCommitted = $transferOrderQuantityCommitted;
        return $this;
    }

    /**
     * Get transferOrderQuantityCommitted
     *
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityCommitted() {
        return $this->transferOrderQuantityCommitted;
    }


    /**
     * Set transferOrderQuantityPacked
     *
     * @param SearchDoubleField $transferOrderQuantityPacked
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityPacked(SearchDoubleField $transferOrderQuantityPacked) {
        $this->transferOrderQuantityPacked = $transferOrderQuantityPacked;
        return $this;
    }

    /**
     * Get transferOrderQuantityPacked
     *
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityPacked() {
        return $this->transferOrderQuantityPacked;
    }


    /**
     * Set transferOrderQuantityPicked
     *
     * @param SearchDoubleField $transferOrderQuantityPicked
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityPicked(SearchDoubleField $transferOrderQuantityPicked) {
        $this->transferOrderQuantityPicked = $transferOrderQuantityPicked;
        return $this;
    }

    /**
     * Get transferOrderQuantityPicked
     *
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityPicked() {
        return $this->transferOrderQuantityPicked;
    }


    /**
     * Set transferOrderQuantityReceived
     *
     * @param SearchDoubleField $transferOrderQuantityReceived
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityReceived(SearchDoubleField $transferOrderQuantityReceived) {
        $this->transferOrderQuantityReceived = $transferOrderQuantityReceived;
        return $this;
    }

    /**
     * Get transferOrderQuantityReceived
     *
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityReceived() {
        return $this->transferOrderQuantityReceived;
    }


    /**
     * Set transferOrderQuantityShipped
     *
     * @param SearchDoubleField $transferOrderQuantityShipped
     * @return TransactionSearchBasic
     */
    public function setTransferOrderQuantityShipped(SearchDoubleField $transferOrderQuantityShipped) {
        $this->transferOrderQuantityShipped = $transferOrderQuantityShipped;
        return $this;
    }

    /**
     * Get transferOrderQuantityShipped
     *
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityShipped() {
        return $this->transferOrderQuantityShipped;
    }


    /**
     * Set type
     *
     * @param SearchEnumMultiSelectField $type
     * @return TransactionSearchBasic
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
     * Set unit
     *
     * @param SearchMultiSelectField $unit
     * @return TransactionSearchBasic
     */
    public function setUnit(SearchMultiSelectField $unit) {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Get unit
     *
     * @return SearchMultiSelectField
     */
    public function getUnit() {
        return $this->unit;
    }


    /**
     * Set unitCostOverride
     *
     * @param SearchDoubleField $unitCostOverride
     * @return TransactionSearchBasic
     */
    public function setUnitCostOverride(SearchDoubleField $unitCostOverride) {
        $this->unitCostOverride = $unitCostOverride;
        return $this;
    }

    /**
     * Get unitCostOverride
     *
     * @return SearchDoubleField
     */
    public function getUnitCostOverride() {
        return $this->unitCostOverride;
    }


    /**
     * Set unitsType
     *
     * @param SearchMultiSelectField $unitsType
     * @return TransactionSearchBasic
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
     * Set vendType
     *
     * @param SearchMultiSelectField $vendType
     * @return TransactionSearchBasic
     */
    public function setVendType(SearchMultiSelectField $vendType) {
        $this->vendType = $vendType;
        return $this;
    }

    /**
     * Get vendType
     *
     * @return SearchMultiSelectField
     */
    public function getVendType() {
        return $this->vendType;
    }


    /**
     * Set visibleToCustomer
     *
     * @param SearchBooleanField $visibleToCustomer
     * @return TransactionSearchBasic
     */
    public function setVisibleToCustomer(SearchBooleanField $visibleToCustomer) {
        $this->visibleToCustomer = $visibleToCustomer;
        return $this;
    }

    /**
     * Get visibleToCustomer
     *
     * @return SearchBooleanField
     */
    public function getVisibleToCustomer() {
        return $this->visibleToCustomer;
    }


    /**
     * Set voided
     *
     * @param SearchBooleanField $voided
     * @return TransactionSearchBasic
     */
    public function setVoided(SearchBooleanField $voided) {
        $this->voided = $voided;
        return $this;
    }

    /**
     * Get voided
     *
     * @return SearchBooleanField
     */
    public function getVoided() {
        return $this->voided;
    }


    /**
     * Set vsoeAllocation
     *
     * @param SearchDoubleField $vsoeAllocation
     * @return TransactionSearchBasic
     */
    public function setVsoeAllocation(SearchDoubleField $vsoeAllocation) {
        $this->vsoeAllocation = $vsoeAllocation;
        return $this;
    }

    /**
     * Get vsoeAllocation
     *
     * @return SearchDoubleField
     */
    public function getVsoeAllocation() {
        return $this->vsoeAllocation;
    }


    /**
     * Set vsoeAmount
     *
     * @param SearchDoubleField $vsoeAmount
     * @return TransactionSearchBasic
     */
    public function setVsoeAmount(SearchDoubleField $vsoeAmount) {
        $this->vsoeAmount = $vsoeAmount;
        return $this;
    }

    /**
     * Get vsoeAmount
     *
     * @return SearchDoubleField
     */
    public function getVsoeAmount() {
        return $this->vsoeAmount;
    }


    /**
     * Set vsoeDeferral
     *
     * @param SearchEnumMultiSelectField $vsoeDeferral
     * @return TransactionSearchBasic
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
     * @return TransactionSearchBasic
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
     * @return TransactionSearchBasic
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
     * @return TransactionSearchBasic
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
     * @return TransactionSearchBasic
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
     * Set customFieldList
     *
     * @param SearchCustomFieldList $customFieldList
     * @return TransactionSearchBasic
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