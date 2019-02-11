<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList;

/**
 * TransactionSearchRowBasic
 */
class TransactionSearchRowBasic extends SearchRowBasic {

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $abbrev;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $account;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $accountType;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $actualShipDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $altSalesAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $altSalesNetAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amountPaid;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amountRemaining;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $amountUnbilled;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $appliedToForeignAmount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $appliedToIsFxVariance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $appliedToLinkAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $appliedToLinkType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $appliedToTransaction;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $applyingForeignAmount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $applyingIsFxVariance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $applyingLinkAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $applyingLinkType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $applyingTransaction;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $approvalStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $authCode;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $autoCalculateLag;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $avsStreetMatch;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $avsZipMatch;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $billable;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddress3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAddressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billAttention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billCity;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $billCountry;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billCountryCode;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $billedDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $billingAmount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billingSchedule;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $billingTransaction;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billPhone;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billState;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $billVarianceStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $billZip;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $binNumber;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $binNumberQuantity;

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
    public $buildVariance;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $built;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $catchUpPeriod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccCustomerCode;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $ccExpDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccHolderName;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccNumber;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccStreet;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $ccZipCode;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $class;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $cleared;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $closed;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $closeDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $cogsAmount;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $commissionEffectiveDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $commit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $componentYield;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $confirmationNumber;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $contribution;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $contributionPrimary;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costComponentAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $costComponentCategory;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $costComponentItem;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costComponentQuantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costComponentStandardCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costEstimate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $costEstimateRate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $costEstimateType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $createdBy;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $createdFrom;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $creditAmount;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $cscMatch;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $currency;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $customForm;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $custType;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dateCreated;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysOpen;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $daysOverdue;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $debitAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $deferredRevenue;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $deferRevRec;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $department;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $depositDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $depositTransaction;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $discountAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $docUnit;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $drAccount;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $dueDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $effectiveRate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $email;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $endDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $entity;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $entityStatus;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estGrossProfit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estGrossProfitPct;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $estGrossProfitPercent;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $exchangeRate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $excludeCommission;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $excludeFromRateRequest;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $expectedCloseDate;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $expectedReceiptDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $expenseCategory;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $expenseDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $externalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $firmed;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $forecastType;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $fulfillingTransaction;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $fxAccount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxCostEstimate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxCostEstimateRate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxEstGrossProfit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxTranCostEstimate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxVsoeAllocation;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxVsoeAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $fxVsoePrice;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $gcoAvailabelToCharge;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $gcoAvailableToRefund;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $gcoAvsStreetMatch;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $gcoAvsZipMatch;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $gcoBuyerAccountAge;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoBuyerIp;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoChargeAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoChargebackAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoConfirmedChargedTotal;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoConfirmedRefundedTotal;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoCreditcardNumber;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $gcoCscMatch;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoFinancialState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoFulfillmentState;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoOrderId;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoOrderTotal;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoPromotionAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoPromotionName;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoRefundAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $gcoShippingTotal;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $gcoStateChangedDetail;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $giftCert;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $grossAmount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $includeInForecast;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $intercoStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $intercoTransaction;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $internalId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $inVsoeBundle;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isAllocation;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isBackflush;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isGcoChargeback;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isGcoChargeConfirmed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isGcoPaymentGuaranteed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isGcoRefundConfirmed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isIntercompanyAdjustment;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isMultiShipTo;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isReversal;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isRevRecTransaction;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isScrap;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isShipAddress;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isTransferPriceCosting;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $isWip;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $item;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $itemRevision;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $landedCostPerLine;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $leadSource;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $line;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $lineSequenceNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $location;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $mainLine;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $mainName;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $manufacturingRouting;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $matchBillToReceipt;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $memo;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $memoMain;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $memorized;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $merchantAccount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $message;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $multiSubsidiary;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $netAmount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $netAmountNoTax;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $nextApprover;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $nextBillDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $nonReimbursable;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $opportunity;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $options;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $orderPriority;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $originator;

    /**
     * @access public
     * @var SearchColumnTextNumberField[]
     */
    public $otherRefNum;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $overheadParentItem;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $packageCount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $paidAmount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $paidTransaction;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $partner;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $partnerContribution;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $partnerRole;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $partnerTeamMember;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $payingAmount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $payingTransaction;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $paymentApproved;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $paymentEventDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $paymentEventHoldReason;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $paymentEventPurchaseCardUsed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $paymentEventPurchaseDataSent;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $paymentEventResult;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $paymentEventType;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $paymentHold;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $paymentMethod;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $payPalPending;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $payPalStatus;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $payPalTranId;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $payrollBatch;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $pnRefNum;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $poRate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $posting;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $postingPeriod;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $priceLevel;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $print;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $probability;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $projectedAmount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $promoCode;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $purchaseOrder;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantity;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityBilled;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityCommitted;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityPacked;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityPicked;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityRevCommitted;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityShipRecv;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $quantityUom;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $realizedGainPostingTransaction;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $recognizedRevenue;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $recordType;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $refNumber;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $revCommitStatus;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $revCommittingTransaction;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $revenueStatus;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $reversalDate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $reversalNumber;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $revRecEndDate;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $revRecOnRevCommitment;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $revRecStartDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $rgAccount;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $rgAmount;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $salesEffectiveDate;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesOrder;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesRep;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesTeamMember;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $salesTeamRole;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $schedulingMethod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serialNumber;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $serialNumberCost;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $serialNumberCostAdjustment;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $serialNumberQuantity;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $serialNumbers;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress1;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress2;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddress3;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAddressee;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipAttention;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipCity;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $shipComplete;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $shipCountry;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipCountryCode;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $shipDate;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $shipGroup;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $shipMethod;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipPhone;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $shippingAmount;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $shipRecvStatusLine;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipState;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $shipTo;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $shipZip;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $signedAmount;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $source;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $startDate;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $status;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $taxAmount;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $taxCode;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $taxLine;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $taxPeriod;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $taxTotal;

    /**
     * @access public
     * @var SearchColumnLongField[]
     */
    public $termInMonths;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $terms;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $title;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $toBeEmailed;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $toBePrinted;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $toSubsidiary;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $total;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $totalCostEstimate;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $trackingNumbers;

    /**
     * @access public
     * @var SearchColumnDateField[]
     */
    public $tranDate;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $tranEstGrossProfit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $tranFxEstGrossProfit;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $tranId;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $tranIsVsoeBundle;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $transactionDiscount;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $transactionLineType;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $transactionNumber;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $transferLocation;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $transferOrderItemLine;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityCommitted;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityPacked;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityPicked;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityReceived;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $transferOrderQuantityShipped;

    /**
     * @access public
     * @var SearchColumnEnumSelectField[]
     */
    public $type;

    /**
     * @access public
     * @var SearchColumnStringField[]
     */
    public $unit;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $unitCostOverride;

    /**
     * @access public
     * @var SearchColumnSelectField[]
     */
    public $vendType;

    /**
     * @access public
     * @var SearchColumnBooleanField[]
     */
    public $visibleToCustomer;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $vsoeAllocation;

    /**
     * @access public
     * @var SearchColumnDoubleField[]
     */
    public $vsoeAmount;

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
     * @var SearchColumnStringField[]
     */
    public $webSite;

    /**
     * @access public
     * @var SearchColumnCustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"abbrev" => "SearchColumnStringField[]",
    	"account" => "SearchColumnSelectField[]",
    	"accountType" => "SearchColumnStringField[]",
    	"actualShipDate" => "SearchColumnDateField[]",
    	"altSalesAmount" => "SearchColumnDoubleField[]",
    	"altSalesNetAmount" => "SearchColumnDoubleField[]",
    	"amount" => "SearchColumnDoubleField[]",
    	"amountPaid" => "SearchColumnDoubleField[]",
    	"amountRemaining" => "SearchColumnDoubleField[]",
    	"amountUnbilled" => "SearchColumnDoubleField[]",
    	"appliedToForeignAmount" => "SearchColumnDoubleField[]",
    	"appliedToIsFxVariance" => "SearchColumnBooleanField[]",
    	"appliedToLinkAmount" => "SearchColumnDoubleField[]",
    	"appliedToLinkType" => "SearchColumnStringField[]",
    	"appliedToTransaction" => "SearchColumnSelectField[]",
    	"applyingForeignAmount" => "SearchColumnDoubleField[]",
    	"applyingIsFxVariance" => "SearchColumnBooleanField[]",
    	"applyingLinkAmount" => "SearchColumnDoubleField[]",
    	"applyingLinkType" => "SearchColumnStringField[]",
    	"applyingTransaction" => "SearchColumnSelectField[]",
    	"approvalStatus" => "SearchColumnEnumSelectField[]",
    	"authCode" => "SearchColumnStringField[]",
    	"autoCalculateLag" => "SearchColumnBooleanField[]",
    	"avsStreetMatch" => "SearchColumnEnumSelectField[]",
    	"avsZipMatch" => "SearchColumnEnumSelectField[]",
    	"billable" => "SearchColumnBooleanField[]",
    	"billAddress" => "SearchColumnStringField[]",
    	"billAddress1" => "SearchColumnStringField[]",
    	"billAddress2" => "SearchColumnStringField[]",
    	"billAddress3" => "SearchColumnStringField[]",
    	"billAddressee" => "SearchColumnStringField[]",
    	"billAttention" => "SearchColumnStringField[]",
    	"billCity" => "SearchColumnStringField[]",
    	"billCountry" => "SearchColumnEnumSelectField[]",
    	"billCountryCode" => "SearchColumnStringField[]",
    	"billedDate" => "SearchColumnDateField[]",
    	"billingAmount" => "SearchColumnDoubleField[]",
    	"billingSchedule" => "SearchColumnSelectField[]",
    	"billingTransaction" => "SearchColumnSelectField[]",
    	"billPhone" => "SearchColumnStringField[]",
    	"billState" => "SearchColumnStringField[]",
    	"billVarianceStatus" => "SearchColumnEnumSelectField[]",
    	"billZip" => "SearchColumnStringField[]",
    	"binNumber" => "SearchColumnStringField[]",
    	"binNumberQuantity" => "SearchColumnDoubleField[]",
    	"bomQuantity" => "SearchColumnDoubleField[]",
    	"buildEntireAssembly" => "SearchColumnBooleanField[]",
    	"buildVariance" => "SearchColumnDoubleField[]",
    	"built" => "SearchColumnDoubleField[]",
    	"catchUpPeriod" => "SearchColumnStringField[]",
    	"ccCustomerCode" => "SearchColumnStringField[]",
    	"ccExpDate" => "SearchColumnDateField[]",
    	"ccHolderName" => "SearchColumnStringField[]",
    	"ccNumber" => "SearchColumnStringField[]",
    	"ccStreet" => "SearchColumnStringField[]",
    	"ccZipCode" => "SearchColumnStringField[]",
    	"class" => "SearchColumnSelectField[]",
    	"cleared" => "SearchColumnBooleanField[]",
    	"closed" => "SearchColumnBooleanField[]",
    	"closeDate" => "SearchColumnDateField[]",
    	"cogsAmount" => "SearchColumnDoubleField[]",
    	"commissionEffectiveDate" => "SearchColumnDateField[]",
    	"commit" => "SearchColumnEnumSelectField[]",
    	"componentYield" => "SearchColumnDoubleField[]",
    	"confirmationNumber" => "SearchColumnStringField[]",
    	"contribution" => "SearchColumnDoubleField[]",
    	"contributionPrimary" => "SearchColumnDoubleField[]",
    	"costComponentAmount" => "SearchColumnDoubleField[]",
    	"costComponentCategory" => "SearchColumnStringField[]",
    	"costComponentItem" => "SearchColumnStringField[]",
    	"costComponentQuantity" => "SearchColumnDoubleField[]",
    	"costComponentStandardCost" => "SearchColumnDoubleField[]",
    	"costEstimate" => "SearchColumnDoubleField[]",
    	"costEstimateRate" => "SearchColumnDoubleField[]",
    	"costEstimateType" => "SearchColumnEnumSelectField[]",
    	"createdBy" => "SearchColumnSelectField[]",
    	"createdFrom" => "SearchColumnSelectField[]",
    	"creditAmount" => "SearchColumnDoubleField[]",
    	"cscMatch" => "SearchColumnEnumSelectField[]",
    	"currency" => "SearchColumnSelectField[]",
    	"customForm" => "SearchColumnSelectField[]",
    	"custType" => "SearchColumnSelectField[]",
    	"dateCreated" => "SearchColumnDateField[]",
    	"daysOpen" => "SearchColumnLongField[]",
    	"daysOverdue" => "SearchColumnLongField[]",
    	"debitAmount" => "SearchColumnDoubleField[]",
    	"deferredRevenue" => "SearchColumnDoubleField[]",
    	"deferRevRec" => "SearchColumnBooleanField[]",
    	"department" => "SearchColumnSelectField[]",
    	"depositDate" => "SearchColumnDateField[]",
    	"depositTransaction" => "SearchColumnSelectField[]",
    	"discountAmount" => "SearchColumnDoubleField[]",
    	"docUnit" => "SearchColumnStringField[]",
    	"drAccount" => "SearchColumnStringField[]",
    	"dueDate" => "SearchColumnDateField[]",
    	"effectiveRate" => "SearchColumnDoubleField[]",
    	"email" => "SearchColumnStringField[]",
    	"endDate" => "SearchColumnDateField[]",
    	"entity" => "SearchColumnSelectField[]",
    	"entityStatus" => "SearchColumnSelectField[]",
    	"estGrossProfit" => "SearchColumnDoubleField[]",
    	"estGrossProfitPct" => "SearchColumnDoubleField[]",
    	"estGrossProfitPercent" => "SearchColumnDoubleField[]",
    	"exchangeRate" => "SearchColumnDoubleField[]",
    	"excludeCommission" => "SearchColumnBooleanField[]",
    	"excludeFromRateRequest" => "SearchColumnBooleanField[]",
    	"expectedCloseDate" => "SearchColumnDateField[]",
    	"expectedReceiptDate" => "SearchColumnDateField[]",
    	"expenseCategory" => "SearchColumnSelectField[]",
    	"expenseDate" => "SearchColumnDateField[]",
    	"externalId" => "SearchColumnSelectField[]",
    	"firmed" => "SearchColumnBooleanField[]",
    	"forecastType" => "SearchColumnEnumSelectField[]",
    	"fulfillingTransaction" => "SearchColumnSelectField[]",
    	"fxAccount" => "SearchColumnStringField[]",
    	"fxAmount" => "SearchColumnDoubleField[]",
    	"fxCostEstimate" => "SearchColumnDoubleField[]",
    	"fxCostEstimateRate" => "SearchColumnDoubleField[]",
    	"fxEstGrossProfit" => "SearchColumnDoubleField[]",
    	"fxTranCostEstimate" => "SearchColumnDoubleField[]",
    	"fxVsoeAllocation" => "SearchColumnDoubleField[]",
    	"fxVsoeAmount" => "SearchColumnDoubleField[]",
    	"fxVsoePrice" => "SearchColumnDoubleField[]",
    	"gcoAvailabelToCharge" => "SearchColumnBooleanField[]",
    	"gcoAvailableToRefund" => "SearchColumnBooleanField[]",
    	"gcoAvsStreetMatch" => "SearchColumnEnumSelectField[]",
    	"gcoAvsZipMatch" => "SearchColumnEnumSelectField[]",
    	"gcoBuyerAccountAge" => "SearchColumnLongField[]",
    	"gcoBuyerIp" => "SearchColumnStringField[]",
    	"gcoChargeAmount" => "SearchColumnDoubleField[]",
    	"gcoChargebackAmount" => "SearchColumnDoubleField[]",
    	"gcoConfirmedChargedTotal" => "SearchColumnDoubleField[]",
    	"gcoConfirmedRefundedTotal" => "SearchColumnDoubleField[]",
    	"gcoCreditcardNumber" => "SearchColumnStringField[]",
    	"gcoCscMatch" => "SearchColumnEnumSelectField[]",
    	"gcoFinancialState" => "SearchColumnStringField[]",
    	"gcoFulfillmentState" => "SearchColumnStringField[]",
    	"gcoOrderId" => "SearchColumnStringField[]",
    	"gcoOrderTotal" => "SearchColumnDoubleField[]",
    	"gcoPromotionAmount" => "SearchColumnDoubleField[]",
    	"gcoPromotionName" => "SearchColumnStringField[]",
    	"gcoRefundAmount" => "SearchColumnDoubleField[]",
    	"gcoShippingTotal" => "SearchColumnDoubleField[]",
    	"gcoStateChangedDetail" => "SearchColumnStringField[]",
    	"giftCert" => "SearchColumnStringField[]",
    	"grossAmount" => "SearchColumnDoubleField[]",
    	"includeInForecast" => "SearchColumnBooleanField[]",
    	"intercoStatus" => "SearchColumnEnumSelectField[]",
    	"intercoTransaction" => "SearchColumnStringField[]",
    	"internalId" => "SearchColumnSelectField[]",
    	"inVsoeBundle" => "SearchColumnBooleanField[]",
    	"isAllocation" => "SearchColumnBooleanField[]",
    	"isBackflush" => "SearchColumnBooleanField[]",
    	"isGcoChargeback" => "SearchColumnBooleanField[]",
    	"isGcoChargeConfirmed" => "SearchColumnBooleanField[]",
    	"isGcoPaymentGuaranteed" => "SearchColumnBooleanField[]",
    	"isGcoRefundConfirmed" => "SearchColumnBooleanField[]",
    	"isIntercompanyAdjustment" => "SearchColumnBooleanField[]",
    	"isMultiShipTo" => "SearchColumnBooleanField[]",
    	"isReversal" => "SearchColumnBooleanField[]",
    	"isRevRecTransaction" => "SearchColumnBooleanField[]",
    	"isScrap" => "SearchColumnBooleanField[]",
    	"isShipAddress" => "SearchColumnBooleanField[]",
    	"isTransferPriceCosting" => "SearchColumnBooleanField[]",
    	"isWip" => "SearchColumnBooleanField[]",
    	"item" => "SearchColumnSelectField[]",
    	"itemRevision" => "SearchColumnSelectField[]",
    	"landedCostPerLine" => "SearchColumnBooleanField[]",
    	"lastModifiedDate" => "SearchColumnDateField[]",
    	"leadSource" => "SearchColumnSelectField[]",
    	"line" => "SearchColumnLongField[]",
    	"lineSequenceNumber" => "SearchColumnLongField[]",
    	"location" => "SearchColumnSelectField[]",
    	"mainLine" => "SearchColumnBooleanField[]",
    	"mainName" => "SearchColumnStringField[]",
    	"manufacturingRouting" => "SearchColumnSelectField[]",
    	"matchBillToReceipt" => "SearchColumnBooleanField[]",
    	"memo" => "SearchColumnStringField[]",
    	"memoMain" => "SearchColumnStringField[]",
    	"memorized" => "SearchColumnBooleanField[]",
    	"merchantAccount" => "SearchColumnSelectField[]",
    	"message" => "SearchColumnStringField[]",
    	"multiSubsidiary" => "SearchColumnBooleanField[]",
    	"netAmount" => "SearchColumnDoubleField[]",
    	"netAmountNoTax" => "SearchColumnDoubleField[]",
    	"nextApprover" => "SearchColumnSelectField[]",
    	"nextBillDate" => "SearchColumnDateField[]",
    	"nonReimbursable" => "SearchColumnBooleanField[]",
    	"opportunity" => "SearchColumnSelectField[]",
    	"options" => "SearchColumnStringField[]",
    	"orderPriority" => "SearchColumnDoubleField[]",
    	"originator" => "SearchColumnEnumSelectField[]",
    	"otherRefNum" => "SearchColumnTextNumberField[]",
    	"overheadParentItem" => "SearchColumnSelectField[]",
    	"packageCount" => "SearchColumnLongField[]",
    	"paidAmount" => "SearchColumnDoubleField[]",
    	"paidTransaction" => "SearchColumnSelectField[]",
    	"partner" => "SearchColumnSelectField[]",
    	"partnerContribution" => "SearchColumnDoubleField[]",
    	"partnerRole" => "SearchColumnSelectField[]",
    	"partnerTeamMember" => "SearchColumnSelectField[]",
    	"payingAmount" => "SearchColumnDoubleField[]",
    	"payingTransaction" => "SearchColumnSelectField[]",
    	"paymentApproved" => "SearchColumnBooleanField[]",
    	"paymentEventDate" => "SearchColumnDateField[]",
    	"paymentEventHoldReason" => "SearchColumnEnumSelectField[]",
    	"paymentEventPurchaseCardUsed" => "SearchColumnBooleanField[]",
    	"paymentEventPurchaseDataSent" => "SearchColumnBooleanField[]",
    	"paymentEventResult" => "SearchColumnEnumSelectField[]",
    	"paymentEventType" => "SearchColumnEnumSelectField[]",
    	"paymentHold" => "SearchColumnBooleanField[]",
    	"paymentMethod" => "SearchColumnSelectField[]",
    	"payPalPending" => "SearchColumnBooleanField[]",
    	"payPalStatus" => "SearchColumnStringField[]",
    	"payPalTranId" => "SearchColumnStringField[]",
    	"payrollBatch" => "SearchColumnStringField[]",
    	"pnRefNum" => "SearchColumnStringField[]",
    	"poRate" => "SearchColumnDoubleField[]",
    	"posting" => "SearchColumnBooleanField[]",
    	"postingPeriod" => "SearchColumnSelectField[]",
    	"priceLevel" => "SearchColumnSelectField[]",
    	"print" => "SearchColumnStringField[]",
    	"probability" => "SearchColumnDoubleField[]",
    	"projectedAmount" => "SearchColumnDoubleField[]",
    	"promoCode" => "SearchColumnSelectField[]",
    	"purchaseOrder" => "SearchColumnSelectField[]",
    	"quantity" => "SearchColumnDoubleField[]",
    	"quantityBilled" => "SearchColumnDoubleField[]",
    	"quantityCommitted" => "SearchColumnDoubleField[]",
    	"quantityPacked" => "SearchColumnDoubleField[]",
    	"quantityPicked" => "SearchColumnDoubleField[]",
    	"quantityRevCommitted" => "SearchColumnDoubleField[]",
    	"quantityShipRecv" => "SearchColumnDoubleField[]",
    	"quantityUom" => "SearchColumnDoubleField[]",
    	"rate" => "SearchColumnDoubleField[]",
    	"realizedGainPostingTransaction" => "SearchColumnStringField[]",
    	"recognizedRevenue" => "SearchColumnDoubleField[]",
    	"recordType" => "SearchColumnStringField[]",
    	"refNumber" => "SearchColumnLongField[]",
    	"revCommitStatus" => "SearchColumnEnumSelectField[]",
    	"revCommittingTransaction" => "SearchColumnSelectField[]",
    	"revenueStatus" => "SearchColumnEnumSelectField[]",
    	"reversalDate" => "SearchColumnDateField[]",
    	"reversalNumber" => "SearchColumnStringField[]",
    	"revRecEndDate" => "SearchColumnDateField[]",
    	"revRecOnRevCommitment" => "SearchColumnBooleanField[]",
    	"revRecStartDate" => "SearchColumnDateField[]",
    	"rgAccount" => "SearchColumnSelectField[]",
    	"rgAmount" => "SearchColumnDoubleField[]",
    	"salesEffectiveDate" => "SearchColumnDateField[]",
    	"salesOrder" => "SearchColumnSelectField[]",
    	"salesRep" => "SearchColumnSelectField[]",
    	"salesTeamMember" => "SearchColumnSelectField[]",
    	"salesTeamRole" => "SearchColumnSelectField[]",
    	"schedulingMethod" => "SearchColumnEnumSelectField[]",
    	"serialNumber" => "SearchColumnStringField[]",
    	"serialNumberCost" => "SearchColumnDoubleField[]",
    	"serialNumberCostAdjustment" => "SearchColumnDoubleField[]",
    	"serialNumberQuantity" => "SearchColumnDoubleField[]",
    	"serialNumbers" => "SearchColumnStringField[]",
    	"shipAddress" => "SearchColumnStringField[]",
    	"shipAddress1" => "SearchColumnStringField[]",
    	"shipAddress2" => "SearchColumnStringField[]",
    	"shipAddress3" => "SearchColumnStringField[]",
    	"shipAddressee" => "SearchColumnStringField[]",
    	"shipAttention" => "SearchColumnStringField[]",
    	"shipCity" => "SearchColumnStringField[]",
    	"shipComplete" => "SearchColumnBooleanField[]",
    	"shipCountry" => "SearchColumnEnumSelectField[]",
    	"shipCountryCode" => "SearchColumnStringField[]",
    	"shipDate" => "SearchColumnDateField[]",
    	"shipGroup" => "SearchColumnLongField[]",
    	"shipMethod" => "SearchColumnSelectField[]",
    	"shipPhone" => "SearchColumnStringField[]",
    	"shippingAmount" => "SearchColumnDoubleField[]",
    	"shipRecvStatusLine" => "SearchColumnBooleanField[]",
    	"shipState" => "SearchColumnStringField[]",
    	"shipTo" => "SearchColumnSelectField[]",
    	"shipZip" => "SearchColumnStringField[]",
    	"signedAmount" => "SearchColumnDoubleField[]",
    	"source" => "SearchColumnStringField[]",
    	"startDate" => "SearchColumnDateField[]",
    	"status" => "SearchColumnEnumSelectField[]",
    	"subsidiary" => "SearchColumnSelectField[]",
    	"taxAmount" => "SearchColumnDoubleField[]",
    	"taxCode" => "SearchColumnSelectField[]",
    	"taxLine" => "SearchColumnBooleanField[]",
    	"taxPeriod" => "SearchColumnSelectField[]",
    	"taxTotal" => "SearchColumnDoubleField[]",
    	"termInMonths" => "SearchColumnLongField[]",
    	"terms" => "SearchColumnSelectField[]",
    	"title" => "SearchColumnStringField[]",
    	"toBeEmailed" => "SearchColumnBooleanField[]",
    	"toBePrinted" => "SearchColumnBooleanField[]",
    	"toSubsidiary" => "SearchColumnSelectField[]",
    	"total" => "SearchColumnDoubleField[]",
    	"totalCostEstimate" => "SearchColumnDoubleField[]",
    	"trackingNumbers" => "SearchColumnStringField[]",
    	"tranDate" => "SearchColumnDateField[]",
    	"tranEstGrossProfit" => "SearchColumnDoubleField[]",
    	"tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
    	"tranId" => "SearchColumnStringField[]",
    	"tranIsVsoeBundle" => "SearchColumnBooleanField[]",
    	"transactionDiscount" => "SearchColumnBooleanField[]",
    	"transactionLineType" => "SearchColumnEnumSelectField[]",
    	"transactionNumber" => "SearchColumnStringField[]",
    	"transferLocation" => "SearchColumnSelectField[]",
    	"transferOrderItemLine" => "SearchColumnStringField[]",
    	"transferOrderQuantityCommitted" => "SearchColumnDoubleField[]",
    	"transferOrderQuantityPacked" => "SearchColumnDoubleField[]",
    	"transferOrderQuantityPicked" => "SearchColumnDoubleField[]",
    	"transferOrderQuantityReceived" => "SearchColumnDoubleField[]",
    	"transferOrderQuantityShipped" => "SearchColumnDoubleField[]",
    	"type" => "SearchColumnEnumSelectField[]",
    	"unit" => "SearchColumnStringField[]",
    	"unitCostOverride" => "SearchColumnDoubleField[]",
    	"vendType" => "SearchColumnSelectField[]",
    	"visibleToCustomer" => "SearchColumnBooleanField[]",
    	"vsoeAllocation" => "SearchColumnDoubleField[]",
    	"vsoeAmount" => "SearchColumnDoubleField[]",
    	"vsoeDeferral" => "SearchColumnEnumSelectField[]",
    	"vsoeDelivered" => "SearchColumnBooleanField[]",
    	"vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
    	"vsoePrice" => "SearchColumnDoubleField[]",
    	"webSite" => "SearchColumnStringField[]",
    	"customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * Set customFieldList
     *
     * @param SearchColumnCustomFieldList $customFieldList
     * @return TransactionSearchRowBasic
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