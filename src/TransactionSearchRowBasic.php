<?php

namespace Nzolt\NetSuite;

class TransactionSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $abbrev
     */
    protected $abbrev = null;

    /**
     * @var SearchColumnSelectField[] $account
     */
    protected $account = null;

    /**
     * @var SearchColumnEnumSelectField[] $accountType
     */
    protected $accountType = null;

    /**
     * @var SearchColumnDateField[] $actualShipDate
     */
    protected $actualShipDate = null;

    /**
     * @var SearchColumnDoubleField[] $altSalesAmount
     */
    protected $altSalesAmount = null;

    /**
     * @var SearchColumnDoubleField[] $altSalesNetAmount
     */
    protected $altSalesNetAmount = null;

    /**
     * @var SearchColumnDoubleField[] $amount
     */
    protected $amount = null;

    /**
     * @var SearchColumnDoubleField[] $amountPaid
     */
    protected $amountPaid = null;

    /**
     * @var SearchColumnDoubleField[] $amountRemaining
     */
    protected $amountRemaining = null;

    /**
     * @var SearchColumnDoubleField[] $amountUnbilled
     */
    protected $amountUnbilled = null;

    /**
     * @var SearchColumnDoubleField[] $appliedToForeignAmount
     */
    protected $appliedToForeignAmount = null;

    /**
     * @var SearchColumnBooleanField[] $appliedToIsFxVariance
     */
    protected $appliedToIsFxVariance = null;

    /**
     * @var SearchColumnDoubleField[] $appliedToLinkAmount
     */
    protected $appliedToLinkAmount = null;

    /**
     * @var SearchColumnStringField[] $appliedToLinkType
     */
    protected $appliedToLinkType = null;

    /**
     * @var SearchColumnSelectField[] $appliedToTransaction
     */
    protected $appliedToTransaction = null;

    /**
     * @var SearchColumnDoubleField[] $applyingForeignAmount
     */
    protected $applyingForeignAmount = null;

    /**
     * @var SearchColumnBooleanField[] $applyingIsFxVariance
     */
    protected $applyingIsFxVariance = null;

    /**
     * @var SearchColumnDoubleField[] $applyingLinkAmount
     */
    protected $applyingLinkAmount = null;

    /**
     * @var SearchColumnStringField[] $applyingLinkType
     */
    protected $applyingLinkType = null;

    /**
     * @var SearchColumnSelectField[] $applyingTransaction
     */
    protected $applyingTransaction = null;

    /**
     * @var SearchColumnEnumSelectField[] $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchColumnStringField[] $authCode
     */
    protected $authCode = null;

    /**
     * @var SearchColumnBooleanField[] $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var SearchColumnEnumSelectField[] $avsStreetMatch
     */
    protected $avsStreetMatch = null;

    /**
     * @var SearchColumnEnumSelectField[] $avsZipMatch
     */
    protected $avsZipMatch = null;

    /**
     * @var SearchColumnBooleanField[] $billable
     */
    protected $billable = null;

    /**
     * @var SearchColumnStringField[] $billAddress
     */
    protected $billAddress = null;

    /**
     * @var SearchColumnStringField[] $billAddress1
     */
    protected $billAddress1 = null;

    /**
     * @var SearchColumnStringField[] $billAddress2
     */
    protected $billAddress2 = null;

    /**
     * @var SearchColumnStringField[] $billAddress3
     */
    protected $billAddress3 = null;

    /**
     * @var SearchColumnStringField[] $billAddressee
     */
    protected $billAddressee = null;

    /**
     * @var SearchColumnStringField[] $billAttention
     */
    protected $billAttention = null;

    /**
     * @var SearchColumnStringField[] $billCity
     */
    protected $billCity = null;

    /**
     * @var SearchColumnEnumSelectField[] $billCountry
     */
    protected $billCountry = null;

    /**
     * @var SearchColumnStringField[] $billCountryCode
     */
    protected $billCountryCode = null;

    /**
     * @var SearchColumnDateField[] $billedDate
     */
    protected $billedDate = null;

    /**
     * @var SearchColumnSelectField[] $billingAccount
     */
    protected $billingAccount = null;

    /**
     * @var SearchColumnDoubleField[] $billingAmount
     */
    protected $billingAmount = null;

    /**
     * @var SearchColumnSelectField[] $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var SearchColumnSelectField[] $billingTransaction
     */
    protected $billingTransaction = null;

    /**
     * @var SearchColumnStringField[] $billPhone
     */
    protected $billPhone = null;

    /**
     * @var SearchColumnStringField[] $billState
     */
    protected $billState = null;

    /**
     * @var SearchColumnEnumSelectField[] $billVarianceStatus
     */
    protected $billVarianceStatus = null;

    /**
     * @var SearchColumnStringField[] $billZip
     */
    protected $billZip = null;

    /**
     * @var SearchColumnStringField[] $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchColumnDoubleField[] $binNumberQuantity
     */
    protected $binNumberQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var SearchColumnBooleanField[] $buildEntireAssembly
     */
    protected $buildEntireAssembly = null;

    /**
     * @var SearchColumnDoubleField[] $buildVariance
     */
    protected $buildVariance = null;

    /**
     * @var SearchColumnDoubleField[] $built
     */
    protected $built = null;

    /**
     * @var SearchColumnBooleanField[] $canHaveStackablePromotions
     */
    protected $canHaveStackablePromotions = null;

    /**
     * @var SearchColumnStringField[] $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var SearchColumnStringField[] $ccCustomerCode
     */
    protected $ccCustomerCode = null;

    /**
     * @var SearchColumnDateField[] $ccExpDate
     */
    protected $ccExpDate = null;

    /**
     * @var SearchColumnStringField[] $ccHolderName
     */
    protected $ccHolderName = null;

    /**
     * @var SearchColumnStringField[] $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var SearchColumnStringField[] $ccStreet
     */
    protected $ccStreet = null;

    /**
     * @var SearchColumnStringField[] $ccZipCode
     */
    protected $ccZipCode = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnBooleanField[] $cleared
     */
    protected $cleared = null;

    /**
     * @var SearchColumnBooleanField[] $closed
     */
    protected $closed = null;

    /**
     * @var SearchColumnDateField[] $closeDate
     */
    protected $closeDate = null;

    /**
     * @var SearchColumnDoubleField[] $cogsAmount
     */
    protected $cogsAmount = null;

    /**
     * @var SearchColumnDateField[] $commissionEffectiveDate
     */
    protected $commissionEffectiveDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $commit
     */
    protected $commit = null;

    /**
     * @var SearchColumnDoubleField[] $componentYield
     */
    protected $componentYield = null;

    /**
     * @var SearchColumnStringField[] $confirmationNumber
     */
    protected $confirmationNumber = null;

    /**
     * @var SearchColumnDoubleField[] $contribution
     */
    protected $contribution = null;

    /**
     * @var SearchColumnDoubleField[] $contributionPrimary
     */
    protected $contributionPrimary = null;

    /**
     * @var SearchColumnDoubleField[] $costComponentAmount
     */
    protected $costComponentAmount = null;

    /**
     * @var SearchColumnStringField[] $costComponentCategory
     */
    protected $costComponentCategory = null;

    /**
     * @var SearchColumnStringField[] $costComponentItem
     */
    protected $costComponentItem = null;

    /**
     * @var SearchColumnDoubleField[] $costComponentQuantity
     */
    protected $costComponentQuantity = null;

    /**
     * @var SearchColumnDoubleField[] $costComponentStandardCost
     */
    protected $costComponentStandardCost = null;

    /**
     * @var SearchColumnDoubleField[] $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var SearchColumnDoubleField[] $costEstimateRate
     */
    protected $costEstimateRate = null;

    /**
     * @var SearchColumnEnumSelectField[] $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var SearchColumnSelectField[] $createdBy
     */
    protected $createdBy = null;

    /**
     * @var SearchColumnSelectField[] $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var SearchColumnDoubleField[] $creditAmount
     */
    protected $creditAmount = null;

    /**
     * @var SearchColumnEnumSelectField[] $cscMatch
     */
    protected $cscMatch = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnSelectField[] $customForm
     */
    protected $customForm = null;

    /**
     * @var SearchColumnBooleanField[] $customGL
     */
    protected $customGL = null;

    /**
     * @var SearchColumnSelectField[] $custType
     */
    protected $custType = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnLongField[] $daysOpen
     */
    protected $daysOpen = null;

    /**
     * @var SearchColumnLongField[] $daysOverdue
     */
    protected $daysOverdue = null;

    /**
     * @var SearchColumnDoubleField[] $debitAmount
     */
    protected $debitAmount = null;

    /**
     * @var SearchColumnDoubleField[] $deferredRevenue
     */
    protected $deferredRevenue = null;

    /**
     * @var SearchColumnBooleanField[] $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnDateField[] $depositDate
     */
    protected $depositDate = null;

    /**
     * @var SearchColumnSelectField[] $depositTransaction
     */
    protected $depositTransaction = null;

    /**
     * @var SearchColumnDoubleField[] $discountAmount
     */
    protected $discountAmount = null;

    /**
     * @var SearchColumnStringField[] $docUnit
     */
    protected $docUnit = null;

    /**
     * @var SearchColumnStringField[] $drAccount
     */
    protected $drAccount = null;

    /**
     * @var SearchColumnDateField[] $dueDate
     */
    protected $dueDate = null;

    /**
     * @var SearchColumnDoubleField[] $effectiveRate
     */
    protected $effectiveRate = null;

    /**
     * @var SearchColumnStringField[] $email
     */
    protected $email = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $entity
     */
    protected $entity = null;

    /**
     * @var SearchColumnSelectField[] $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var SearchColumnDoubleField[] $estGrossProfit
     */
    protected $estGrossProfit = null;

    /**
     * @var SearchColumnDoubleField[] $estGrossProfitPct
     */
    protected $estGrossProfitPct = null;

    /**
     * @var SearchColumnDoubleField[] $estGrossProfitPercent
     */
    protected $estGrossProfitPercent = null;

    /**
     * @var SearchColumnDoubleField[] $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var SearchColumnBooleanField[] $excludeCommission
     */
    protected $excludeCommission = null;

    /**
     * @var SearchColumnBooleanField[] $excludeFromRateRequest
     */
    protected $excludeFromRateRequest = null;

    /**
     * @var SearchColumnDateField[] $expectedCloseDate
     */
    protected $expectedCloseDate = null;

    /**
     * @var SearchColumnDateField[] $expectedReceiptDate
     */
    protected $expectedReceiptDate = null;

    /**
     * @var SearchColumnSelectField[] $expenseCategory
     */
    protected $expenseCategory = null;

    /**
     * @var SearchColumnDateField[] $expenseDate
     */
    protected $expenseDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnBooleanField[] $firmed
     */
    protected $firmed = null;

    /**
     * @var SearchColumnEnumSelectField[] $forecastType
     */
    protected $forecastType = null;

    /**
     * @var SearchColumnSelectField[] $fulfillingTransaction
     */
    protected $fulfillingTransaction = null;

    /**
     * @var SearchColumnStringField[] $fxAccount
     */
    protected $fxAccount = null;

    /**
     * @var SearchColumnDoubleField[] $fxAmount
     */
    protected $fxAmount = null;

    /**
     * @var SearchColumnDoubleField[] $fxCostEstimate
     */
    protected $fxCostEstimate = null;

    /**
     * @var SearchColumnDoubleField[] $fxCostEstimateRate
     */
    protected $fxCostEstimateRate = null;

    /**
     * @var SearchColumnDoubleField[] $fxEstGrossProfit
     */
    protected $fxEstGrossProfit = null;

    /**
     * @var SearchColumnDoubleField[] $fxTranCostEstimate
     */
    protected $fxTranCostEstimate = null;

    /**
     * @var SearchColumnDoubleField[] $fxVsoeAllocation
     */
    protected $fxVsoeAllocation = null;

    /**
     * @var SearchColumnDoubleField[] $fxVsoeAmount
     */
    protected $fxVsoeAmount = null;

    /**
     * @var SearchColumnDoubleField[] $fxVsoePrice
     */
    protected $fxVsoePrice = null;

    /**
     * @var SearchColumnBooleanField[] $gcoAvailabelToCharge
     */
    protected $gcoAvailabelToCharge = null;

    /**
     * @var SearchColumnBooleanField[] $gcoAvailableToRefund
     */
    protected $gcoAvailableToRefund = null;

    /**
     * @var SearchColumnEnumSelectField[] $gcoAvsStreetMatch
     */
    protected $gcoAvsStreetMatch = null;

    /**
     * @var SearchColumnEnumSelectField[] $gcoAvsZipMatch
     */
    protected $gcoAvsZipMatch = null;

    /**
     * @var SearchColumnLongField[] $gcoBuyerAccountAge
     */
    protected $gcoBuyerAccountAge = null;

    /**
     * @var SearchColumnStringField[] $gcoBuyerIp
     */
    protected $gcoBuyerIp = null;

    /**
     * @var SearchColumnDoubleField[] $gcoChargeAmount
     */
    protected $gcoChargeAmount = null;

    /**
     * @var SearchColumnDoubleField[] $gcoChargebackAmount
     */
    protected $gcoChargebackAmount = null;

    /**
     * @var SearchColumnDoubleField[] $gcoConfirmedChargedTotal
     */
    protected $gcoConfirmedChargedTotal = null;

    /**
     * @var SearchColumnDoubleField[] $gcoConfirmedRefundedTotal
     */
    protected $gcoConfirmedRefundedTotal = null;

    /**
     * @var SearchColumnStringField[] $gcoCreditcardNumber
     */
    protected $gcoCreditcardNumber = null;

    /**
     * @var SearchColumnEnumSelectField[] $gcoCscMatch
     */
    protected $gcoCscMatch = null;

    /**
     * @var SearchColumnStringField[] $gcoFinancialState
     */
    protected $gcoFinancialState = null;

    /**
     * @var SearchColumnStringField[] $gcoFulfillmentState
     */
    protected $gcoFulfillmentState = null;

    /**
     * @var SearchColumnStringField[] $gcoOrderId
     */
    protected $gcoOrderId = null;

    /**
     * @var SearchColumnDoubleField[] $gcoOrderTotal
     */
    protected $gcoOrderTotal = null;

    /**
     * @var SearchColumnDoubleField[] $gcoPromotionAmount
     */
    protected $gcoPromotionAmount = null;

    /**
     * @var SearchColumnStringField[] $gcoPromotionName
     */
    protected $gcoPromotionName = null;

    /**
     * @var SearchColumnDoubleField[] $gcoRefundAmount
     */
    protected $gcoRefundAmount = null;

    /**
     * @var SearchColumnDoubleField[] $gcoShippingTotal
     */
    protected $gcoShippingTotal = null;

    /**
     * @var SearchColumnStringField[] $gcoStateChangedDetail
     */
    protected $gcoStateChangedDetail = null;

    /**
     * @var SearchColumnStringField[] $giftCert
     */
    protected $giftCert = null;

    /**
     * @var SearchColumnDoubleField[] $grossAmount
     */
    protected $grossAmount = null;

    /**
     * @var SearchColumnBooleanField[] $includeInForecast
     */
    protected $includeInForecast = null;

    /**
     * @var SearchColumnSelectField[] $incoterm
     */
    protected $incoterm = null;

    /**
     * @var SearchColumnEnumSelectField[] $intercoStatus
     */
    protected $intercoStatus = null;

    /**
     * @var SearchColumnStringField[] $intercoTransaction
     */
    protected $intercoTransaction = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $inVsoeBundle
     */
    protected $inVsoeBundle = null;

    /**
     * @var SearchColumnBooleanField[] $isAllocation
     */
    protected $isAllocation = null;

    /**
     * @var SearchColumnBooleanField[] $isBackflush
     */
    protected $isBackflush = null;

    /**
     * @var SearchColumnBooleanField[] $isGcoChargeback
     */
    protected $isGcoChargeback = null;

    /**
     * @var SearchColumnBooleanField[] $isGcoChargeConfirmed
     */
    protected $isGcoChargeConfirmed = null;

    /**
     * @var SearchColumnBooleanField[] $isGcoPaymentGuaranteed
     */
    protected $isGcoPaymentGuaranteed = null;

    /**
     * @var SearchColumnBooleanField[] $isGcoRefundConfirmed
     */
    protected $isGcoRefundConfirmed = null;

    /**
     * @var SearchColumnBooleanField[] $isInsideDelivery
     */
    protected $isInsideDelivery = null;

    /**
     * @var SearchColumnBooleanField[] $isInsidePickup
     */
    protected $isInsidePickup = null;

    /**
     * @var SearchColumnBooleanField[] $isIntercompanyAdjustment
     */
    protected $isIntercompanyAdjustment = null;

    /**
     * @var SearchColumnBooleanField[] $isMultiShipTo
     */
    protected $isMultiShipTo = null;

    /**
     * @var SearchColumnBooleanField[] $isReversal
     */
    protected $isReversal = null;

    /**
     * @var SearchColumnBooleanField[] $isRevRecTransaction
     */
    protected $isRevRecTransaction = null;

    /**
     * @var SearchColumnBooleanField[] $isScrap
     */
    protected $isScrap = null;

    /**
     * @var SearchColumnBooleanField[] $isShipAddress
     */
    protected $isShipAddress = null;

    /**
     * @var SearchColumnBooleanField[] $isTransferPriceCosting
     */
    protected $isTransferPriceCosting = null;

    /**
     * @var SearchColumnBooleanField[] $isWip
     */
    protected $isWip = null;

    /**
     * @var SearchColumnSelectField[] $item
     */
    protected $item = null;

    /**
     * @var SearchColumnEnumSelectField[] $itemFulfillmentChoice
     */
    protected $itemFulfillmentChoice = null;

    /**
     * @var SearchColumnSelectField[] $itemRevision
     */
    protected $itemRevision = null;

    /**
     * @var SearchColumnBooleanField[] $landedCostPerLine
     */
    protected $landedCostPerLine = null;

    /**
     * @var SearchColumnDateField[] $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchColumnSelectField[] $leadSource
     */
    protected $leadSource = null;

    /**
     * @var SearchColumnLongField[] $line
     */
    protected $line = null;

    /**
     * @var SearchColumnLongField[] $lineSequenceNumber
     */
    protected $lineSequenceNumber = null;

    /**
     * @var SearchColumnLongField[] $lineUniqueKey
     */
    protected $lineUniqueKey = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnBooleanField[] $locationAutoAssigned
     */
    protected $locationAutoAssigned = null;

    /**
     * @var SearchColumnBooleanField[] $mainLine
     */
    protected $mainLine = null;

    /**
     * @var SearchColumnStringField[] $mainName
     */
    protected $mainName = null;

    /**
     * @var SearchColumnSelectField[] $manufacturingRouting
     */
    protected $manufacturingRouting = null;

    /**
     * @var SearchColumnBooleanField[] $matchBillToReceipt
     */
    protected $matchBillToReceipt = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnStringField[] $memoMain
     */
    protected $memoMain = null;

    /**
     * @var SearchColumnBooleanField[] $memorized
     */
    protected $memorized = null;

    /**
     * @var SearchColumnSelectField[] $merchantAccount
     */
    protected $merchantAccount = null;

    /**
     * @var SearchColumnStringField[] $message
     */
    protected $message = null;

    /**
     * @var SearchColumnBooleanField[] $multiSubsidiary
     */
    protected $multiSubsidiary = null;

    /**
     * @var SearchColumnDoubleField[] $netAmount
     */
    protected $netAmount = null;

    /**
     * @var SearchColumnDoubleField[] $netAmountNoTax
     */
    protected $netAmountNoTax = null;

    /**
     * @var SearchColumnSelectField[] $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var SearchColumnDateField[] $nextBillDate
     */
    protected $nextBillDate = null;

    /**
     * @var SearchColumnBooleanField[] $noAutoAssignLocation
     */
    protected $noAutoAssignLocation = null;

    /**
     * @var SearchColumnBooleanField[] $nonReimbursable
     */
    protected $nonReimbursable = null;

    /**
     * @var SearchColumnDoubleField[] $oneTimeTotal
     */
    protected $oneTimeTotal = null;

    /**
     * @var SearchColumnSelectField[] $opportunity
     */
    protected $opportunity = null;

    /**
     * @var SearchColumnStringField[] $options
     */
    protected $options = null;

    /**
     * @var SearchColumnDoubleField[] $orderPriority
     */
    protected $orderPriority = null;

    /**
     * @var SearchColumnEnumSelectField[] $originator
     */
    protected $originator = null;

    /**
     * @var SearchColumnTextNumberField[] $otherRefNum
     */
    protected $otherRefNum = null;

    /**
     * @var SearchColumnSelectField[] $overheadParentItem
     */
    protected $overheadParentItem = null;

    /**
     * @var SearchColumnLongField[] $packageCount
     */
    protected $packageCount = null;

    /**
     * @var SearchColumnDoubleField[] $paidAmount
     */
    protected $paidAmount = null;

    /**
     * @var SearchColumnSelectField[] $paidTransaction
     */
    protected $paidTransaction = null;

    /**
     * @var SearchColumnSelectField[] $partner
     */
    protected $partner = null;

    /**
     * @var SearchColumnDoubleField[] $partnerContribution
     */
    protected $partnerContribution = null;

    /**
     * @var SearchColumnSelectField[] $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var SearchColumnSelectField[] $partnerTeamMember
     */
    protected $partnerTeamMember = null;

    /**
     * @var SearchColumnDoubleField[] $payingAmount
     */
    protected $payingAmount = null;

    /**
     * @var SearchColumnSelectField[] $payingTransaction
     */
    protected $payingTransaction = null;

    /**
     * @var SearchColumnBooleanField[] $paymentApproved
     */
    protected $paymentApproved = null;

    /**
     * @var SearchColumnDateField[] $paymentEventDate
     */
    protected $paymentEventDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $paymentEventHoldReason
     */
    protected $paymentEventHoldReason = null;

    /**
     * @var SearchColumnBooleanField[] $paymentEventPurchaseCardUsed
     */
    protected $paymentEventPurchaseCardUsed = null;

    /**
     * @var SearchColumnBooleanField[] $paymentEventPurchaseDataSent
     */
    protected $paymentEventPurchaseDataSent = null;

    /**
     * @var SearchColumnEnumSelectField[] $paymentEventResult
     */
    protected $paymentEventResult = null;

    /**
     * @var SearchColumnEnumSelectField[] $paymentEventType
     */
    protected $paymentEventType = null;

    /**
     * @var SearchColumnBooleanField[] $paymentHold
     */
    protected $paymentHold = null;

    /**
     * @var SearchColumnSelectField[] $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var SearchColumnBooleanField[] $payPalPending
     */
    protected $payPalPending = null;

    /**
     * @var SearchColumnStringField[] $payPalStatus
     */
    protected $payPalStatus = null;

    /**
     * @var SearchColumnStringField[] $payPalTranId
     */
    protected $payPalTranId = null;

    /**
     * @var SearchColumnStringField[] $payrollBatch
     */
    protected $payrollBatch = null;

    /**
     * @var SearchColumnStringField[] $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var SearchColumnDoubleField[] $poRate
     */
    protected $poRate = null;

    /**
     * @var SearchColumnBooleanField[] $posting
     */
    protected $posting = null;

    /**
     * @var SearchColumnSelectField[] $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var SearchColumnSelectField[] $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var SearchColumnStringField[] $print
     */
    protected $print = null;

    /**
     * @var SearchColumnDoubleField[] $probability
     */
    protected $probability = null;

    /**
     * @var SearchColumnDoubleField[] $projectedAmount
     */
    protected $projectedAmount = null;

    /**
     * @var SearchColumnSelectField[] $projectTask
     */
    protected $projectTask = null;

    /**
     * @var SearchColumnSelectField[] $promoCode
     */
    protected $promoCode = null;

    /**
     * @var SearchColumnSelectField[] $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var SearchColumnDoubleField[] $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchColumnDoubleField[] $quantityBilled
     */
    protected $quantityBilled = null;

    /**
     * @var SearchColumnDoubleField[] $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var SearchColumnDoubleField[] $quantityPacked
     */
    protected $quantityPacked = null;

    /**
     * @var SearchColumnDoubleField[] $quantityPicked
     */
    protected $quantityPicked = null;

    /**
     * @var SearchColumnDoubleField[] $quantityRevCommitted
     */
    protected $quantityRevCommitted = null;

    /**
     * @var SearchColumnDoubleField[] $quantityShipRecv
     */
    protected $quantityShipRecv = null;

    /**
     * @var SearchColumnDoubleField[] $quantityUom
     */
    protected $quantityUom = null;

    /**
     * @var SearchColumnDoubleField[] $rate
     */
    protected $rate = null;

    /**
     * @var SearchColumnStringField[] $realizedGainPostingTransaction
     */
    protected $realizedGainPostingTransaction = null;

    /**
     * @var SearchColumnDoubleField[] $recognizedRevenue
     */
    protected $recognizedRevenue = null;

    /**
     * @var SearchColumnStringField[] $recordType
     */
    protected $recordType = null;

    /**
     * @var SearchColumnDoubleField[] $recurAnnuallyTotal
     */
    protected $recurAnnuallyTotal = null;

    /**
     * @var SearchColumnDoubleField[] $recurMonthlyTotal
     */
    protected $recurMonthlyTotal = null;

    /**
     * @var SearchColumnDoubleField[] $recurQuarterlyTotal
     */
    protected $recurQuarterlyTotal = null;

    /**
     * @var SearchColumnBooleanField[] $recurringBill
     */
    protected $recurringBill = null;

    /**
     * @var SearchColumnDoubleField[] $recurWeeklyTotal
     */
    protected $recurWeeklyTotal = null;

    /**
     * @var SearchColumnLongField[] $refNumber
     */
    protected $refNumber = null;

    /**
     * @var SearchColumnEnumSelectField[] $revCommitStatus
     */
    protected $revCommitStatus = null;

    /**
     * @var SearchColumnSelectField[] $revCommittingTransaction
     */
    protected $revCommittingTransaction = null;

    /**
     * @var SearchColumnEnumSelectField[] $revenueStatus
     */
    protected $revenueStatus = null;

    /**
     * @var SearchColumnDateField[] $reversalDate
     */
    protected $reversalDate = null;

    /**
     * @var SearchColumnStringField[] $reversalNumber
     */
    protected $reversalNumber = null;

    /**
     * @var SearchColumnDateField[] $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var SearchColumnBooleanField[] $revRecOnRevCommitment
     */
    protected $revRecOnRevCommitment = null;

    /**
     * @var SearchColumnDateField[] $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var SearchColumnSelectField[] $rgAccount
     */
    protected $rgAccount = null;

    /**
     * @var SearchColumnDoubleField[] $rgAmount
     */
    protected $rgAmount = null;

    /**
     * @var SearchColumnDateField[] $salesEffectiveDate
     */
    protected $salesEffectiveDate = null;

    /**
     * @var SearchColumnSelectField[] $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var SearchColumnSelectField[] $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchColumnSelectField[] $salesTeamMember
     */
    protected $salesTeamMember = null;

    /**
     * @var SearchColumnSelectField[] $salesTeamRole
     */
    protected $salesTeamRole = null;

    /**
     * @var SearchColumnEnumSelectField[] $schedulingMethod
     */
    protected $schedulingMethod = null;

    /**
     * @var SearchColumnStringField[] $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var SearchColumnDoubleField[] $serialNumberCost
     */
    protected $serialNumberCost = null;

    /**
     * @var SearchColumnDoubleField[] $serialNumberCostAdjustment
     */
    protected $serialNumberCostAdjustment = null;

    /**
     * @var SearchColumnDoubleField[] $serialNumberQuantity
     */
    protected $serialNumberQuantity = null;

    /**
     * @var SearchColumnStringField[] $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var SearchColumnStringField[] $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var SearchColumnStringField[] $shipAddress1
     */
    protected $shipAddress1 = null;

    /**
     * @var SearchColumnStringField[] $shipAddress2
     */
    protected $shipAddress2 = null;

    /**
     * @var SearchColumnStringField[] $shipAddress3
     */
    protected $shipAddress3 = null;

    /**
     * @var SearchColumnStringField[] $shipAddressee
     */
    protected $shipAddressee = null;

    /**
     * @var SearchColumnStringField[] $shipAttention
     */
    protected $shipAttention = null;

    /**
     * @var SearchColumnEnumSelectField[] $shipCarrier
     */
    protected $shipCarrier = null;

    /**
     * @var SearchColumnStringField[] $shipCity
     */
    protected $shipCity = null;

    /**
     * @var SearchColumnBooleanField[] $shipComplete
     */
    protected $shipComplete = null;

    /**
     * @var SearchColumnEnumSelectField[] $shipCountry
     */
    protected $shipCountry = null;

    /**
     * @var SearchColumnStringField[] $shipCountryCode
     */
    protected $shipCountryCode = null;

    /**
     * @var SearchColumnDateField[] $shipDate
     */
    protected $shipDate = null;

    /**
     * @var SearchColumnLongField[] $shipGroup
     */
    protected $shipGroup = null;

    /**
     * @var SearchColumnSelectField[] $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var SearchColumnStringField[] $shipPhone
     */
    protected $shipPhone = null;

    /**
     * @var SearchColumnDoubleField[] $shippingAmount
     */
    protected $shippingAmount = null;

    /**
     * @var SearchColumnBooleanField[] $shipRecvStatusLine
     */
    protected $shipRecvStatusLine = null;

    /**
     * @var SearchColumnStringField[] $shipState
     */
    protected $shipState = null;

    /**
     * @var SearchColumnSelectField[] $shipTo
     */
    protected $shipTo = null;

    /**
     * @var SearchColumnStringField[] $shipZip
     */
    protected $shipZip = null;

    /**
     * @var SearchColumnDoubleField[] $signedAmount
     */
    protected $signedAmount = null;

    /**
     * @var SearchColumnStringField[] $source
     */
    protected $source = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnEnumSelectField[] $status
     */
    protected $status = null;

    /**
     * @var SearchColumnSelectField[] $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchColumnSelectField[] $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnDoubleField[] $taxAmount
     */
    protected $taxAmount = null;

    /**
     * @var SearchColumnSelectField[] $taxCode
     */
    protected $taxCode = null;

    /**
     * @var SearchColumnBooleanField[] $taxLine
     */
    protected $taxLine = null;

    /**
     * @var SearchColumnSelectField[] $taxPeriod
     */
    protected $taxPeriod = null;

    /**
     * @var SearchColumnDoubleField[] $taxTotal
     */
    protected $taxTotal = null;

    /**
     * @var SearchColumnLongField[] $termInMonths
     */
    protected $termInMonths = null;

    /**
     * @var SearchColumnSelectField[] $terms
     */
    protected $terms = null;

    /**
     * @var SearchColumnStringField[] $termsOfSale
     */
    protected $termsOfSale = null;

    /**
     * @var SearchColumnStringField[] $title
     */
    protected $title = null;

    /**
     * @var SearchColumnBooleanField[] $toBeEmailed
     */
    protected $toBeEmailed = null;

    /**
     * @var SearchColumnBooleanField[] $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var SearchColumnSelectField[] $toSubsidiary
     */
    protected $toSubsidiary = null;

    /**
     * @var SearchColumnDoubleField[] $total
     */
    protected $total = null;

    /**
     * @var SearchColumnDoubleField[] $totalCostEstimate
     */
    protected $totalCostEstimate = null;

    /**
     * @var SearchColumnStringField[] $trackingNumbers
     */
    protected $trackingNumbers = null;

    /**
     * @var SearchColumnDateField[] $tranDate
     */
    protected $tranDate = null;

    /**
     * @var SearchColumnDoubleField[] $tranEstGrossProfit
     */
    protected $tranEstGrossProfit = null;

    /**
     * @var SearchColumnDoubleField[] $tranFxEstGrossProfit
     */
    protected $tranFxEstGrossProfit = null;

    /**
     * @var SearchColumnStringField[] $tranId
     */
    protected $tranId = null;

    /**
     * @var SearchColumnBooleanField[] $tranIsVsoeBundle
     */
    protected $tranIsVsoeBundle = null;

    /**
     * @var SearchColumnBooleanField[] $transactionDiscount
     */
    protected $transactionDiscount = null;

    /**
     * @var SearchColumnEnumSelectField[] $transactionLineType
     */
    protected $transactionLineType = null;

    /**
     * @var SearchColumnStringField[] $transactionNumber
     */
    protected $transactionNumber = null;

    /**
     * @var SearchColumnSelectField[] $transferLocation
     */
    protected $transferLocation = null;

    /**
     * @var SearchColumnStringField[] $transferOrderItemLine
     */
    protected $transferOrderItemLine = null;

    /**
     * @var SearchColumnDoubleField[] $transferOrderQuantityCommitted
     */
    protected $transferOrderQuantityCommitted = null;

    /**
     * @var SearchColumnDoubleField[] $transferOrderQuantityPacked
     */
    protected $transferOrderQuantityPacked = null;

    /**
     * @var SearchColumnDoubleField[] $transferOrderQuantityPicked
     */
    protected $transferOrderQuantityPicked = null;

    /**
     * @var SearchColumnDoubleField[] $transferOrderQuantityReceived
     */
    protected $transferOrderQuantityReceived = null;

    /**
     * @var SearchColumnDoubleField[] $transferOrderQuantityShipped
     */
    protected $transferOrderQuantityShipped = null;

    /**
     * @var SearchColumnEnumSelectField[] $type
     */
    protected $type = null;

    /**
     * @var SearchColumnStringField[] $unit
     */
    protected $unit = null;

    /**
     * @var SearchColumnDoubleField[] $unitCostOverride
     */
    protected $unitCostOverride = null;

    /**
     * @var SearchColumnSelectField[] $vendType
     */
    protected $vendType = null;

    /**
     * @var SearchColumnBooleanField[] $visibleToCustomer
     */
    protected $visibleToCustomer = null;

    /**
     * @var SearchColumnDoubleField[] $vsoeAllocation
     */
    protected $vsoeAllocation = null;

    /**
     * @var SearchColumnDoubleField[] $vsoeAmount
     */
    protected $vsoeAmount = null;

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
     * @var SearchColumnStringField[] $webSite
     */
    protected $webSite = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAbbrev()
    {
      return $this->abbrev;
    }

    /**
     * @param SearchColumnStringField[] $abbrev
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAbbrev(array $abbrev = null)
    {
      $this->abbrev = $abbrev;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchColumnSelectField[] $account
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAccount(array $account = null)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $accountType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAccountType(array $accountType = null)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getActualShipDate()
    {
      return $this->actualShipDate;
    }

    /**
     * @param SearchColumnDateField[] $actualShipDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setActualShipDate(array $actualShipDate = null)
    {
      $this->actualShipDate = $actualShipDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesAmount()
    {
      return $this->altSalesAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAltSalesAmount(array $altSalesAmount = null)
    {
      $this->altSalesAmount = $altSalesAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAltSalesNetAmount()
    {
      return $this->altSalesNetAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $altSalesNetAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAltSalesNetAmount(array $altSalesNetAmount = null)
    {
      $this->altSalesNetAmount = $altSalesNetAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchColumnDoubleField[] $amount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAmount(array $amount = null)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountPaid()
    {
      return $this->amountPaid;
    }

    /**
     * @param SearchColumnDoubleField[] $amountPaid
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAmountPaid(array $amountPaid = null)
    {
      $this->amountPaid = $amountPaid;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountRemaining()
    {
      return $this->amountRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $amountRemaining
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAmountRemaining(array $amountRemaining = null)
    {
      $this->amountRemaining = $amountRemaining;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountUnbilled()
    {
      return $this->amountUnbilled;
    }

    /**
     * @param SearchColumnDoubleField[] $amountUnbilled
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAmountUnbilled(array $amountUnbilled = null)
    {
      $this->amountUnbilled = $amountUnbilled;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAppliedToForeignAmount()
    {
      return $this->appliedToForeignAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $appliedToForeignAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAppliedToForeignAmount(array $appliedToForeignAmount = null)
    {
      $this->appliedToForeignAmount = $appliedToForeignAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAppliedToIsFxVariance()
    {
      return $this->appliedToIsFxVariance;
    }

    /**
     * @param SearchColumnBooleanField[] $appliedToIsFxVariance
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAppliedToIsFxVariance(array $appliedToIsFxVariance = null)
    {
      $this->appliedToIsFxVariance = $appliedToIsFxVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAppliedToLinkAmount()
    {
      return $this->appliedToLinkAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $appliedToLinkAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAppliedToLinkAmount(array $appliedToLinkAmount = null)
    {
      $this->appliedToLinkAmount = $appliedToLinkAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAppliedToLinkType()
    {
      return $this->appliedToLinkType;
    }

    /**
     * @param SearchColumnStringField[] $appliedToLinkType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAppliedToLinkType(array $appliedToLinkType = null)
    {
      $this->appliedToLinkType = $appliedToLinkType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAppliedToTransaction()
    {
      return $this->appliedToTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $appliedToTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAppliedToTransaction(array $appliedToTransaction = null)
    {
      $this->appliedToTransaction = $appliedToTransaction;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getApplyingForeignAmount()
    {
      return $this->applyingForeignAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $applyingForeignAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setApplyingForeignAmount(array $applyingForeignAmount = null)
    {
      $this->applyingForeignAmount = $applyingForeignAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getApplyingIsFxVariance()
    {
      return $this->applyingIsFxVariance;
    }

    /**
     * @param SearchColumnBooleanField[] $applyingIsFxVariance
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setApplyingIsFxVariance(array $applyingIsFxVariance = null)
    {
      $this->applyingIsFxVariance = $applyingIsFxVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getApplyingLinkAmount()
    {
      return $this->applyingLinkAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $applyingLinkAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setApplyingLinkAmount(array $applyingLinkAmount = null)
    {
      $this->applyingLinkAmount = $applyingLinkAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getApplyingLinkType()
    {
      return $this->applyingLinkType;
    }

    /**
     * @param SearchColumnStringField[] $applyingLinkType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setApplyingLinkType(array $applyingLinkType = null)
    {
      $this->applyingLinkType = $applyingLinkType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getApplyingTransaction()
    {
      return $this->applyingTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $applyingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setApplyingTransaction(array $applyingTransaction = null)
    {
      $this->applyingTransaction = $applyingTransaction;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $approvalStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setApprovalStatus(array $approvalStatus = null)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param SearchColumnStringField[] $authCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAuthCode(array $authCode = null)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoCalculateLag()
    {
      return $this->autoCalculateLag;
    }

    /**
     * @param SearchColumnBooleanField[] $autoCalculateLag
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAutoCalculateLag(array $autoCalculateLag = null)
    {
      $this->autoCalculateLag = $autoCalculateLag;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAvsStreetMatch()
    {
      return $this->avsStreetMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $avsStreetMatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAvsStreetMatch(array $avsStreetMatch = null)
    {
      $this->avsStreetMatch = $avsStreetMatch;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAvsZipMatch()
    {
      return $this->avsZipMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $avsZipMatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setAvsZipMatch(array $avsZipMatch = null)
    {
      $this->avsZipMatch = $avsZipMatch;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getBillable()
    {
      return $this->billable;
    }

    /**
     * @param SearchColumnBooleanField[] $billable
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillable(array $billable = null)
    {
      $this->billable = $billable;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress()
    {
      return $this->billAddress;
    }

    /**
     * @param SearchColumnStringField[] $billAddress
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillAddress(array $billAddress = null)
    {
      $this->billAddress = $billAddress;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress1()
    {
      return $this->billAddress1;
    }

    /**
     * @param SearchColumnStringField[] $billAddress1
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillAddress1(array $billAddress1 = null)
    {
      $this->billAddress1 = $billAddress1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress2()
    {
      return $this->billAddress2;
    }

    /**
     * @param SearchColumnStringField[] $billAddress2
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillAddress2(array $billAddress2 = null)
    {
      $this->billAddress2 = $billAddress2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress3()
    {
      return $this->billAddress3;
    }

    /**
     * @param SearchColumnStringField[] $billAddress3
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillAddress3(array $billAddress3 = null)
    {
      $this->billAddress3 = $billAddress3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddressee()
    {
      return $this->billAddressee;
    }

    /**
     * @param SearchColumnStringField[] $billAddressee
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillAddressee(array $billAddressee = null)
    {
      $this->billAddressee = $billAddressee;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAttention()
    {
      return $this->billAttention;
    }

    /**
     * @param SearchColumnStringField[] $billAttention
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillAttention(array $billAttention = null)
    {
      $this->billAttention = $billAttention;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCity()
    {
      return $this->billCity;
    }

    /**
     * @param SearchColumnStringField[] $billCity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillCity(array $billCity = null)
    {
      $this->billCity = $billCity;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBillCountry()
    {
      return $this->billCountry;
    }

    /**
     * @param SearchColumnEnumSelectField[] $billCountry
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillCountry(array $billCountry = null)
    {
      $this->billCountry = $billCountry;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCountryCode()
    {
      return $this->billCountryCode;
    }

    /**
     * @param SearchColumnStringField[] $billCountryCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillCountryCode(array $billCountryCode = null)
    {
      $this->billCountryCode = $billCountryCode;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getBilledDate()
    {
      return $this->billedDate;
    }

    /**
     * @param SearchColumnDateField[] $billedDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBilledDate(array $billedDate = null)
    {
      $this->billedDate = $billedDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingAccount()
    {
      return $this->billingAccount;
    }

    /**
     * @param SearchColumnSelectField[] $billingAccount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillingAccount(array $billingAccount = null)
    {
      $this->billingAccount = $billingAccount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBillingAmount()
    {
      return $this->billingAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $billingAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillingAmount(array $billingAmount = null)
    {
      $this->billingAmount = $billingAmount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $billingSchedule
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillingSchedule(array $billingSchedule = null)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingTransaction()
    {
      return $this->billingTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $billingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillingTransaction(array $billingTransaction = null)
    {
      $this->billingTransaction = $billingTransaction;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillPhone()
    {
      return $this->billPhone;
    }

    /**
     * @param SearchColumnStringField[] $billPhone
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillPhone(array $billPhone = null)
    {
      $this->billPhone = $billPhone;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillState()
    {
      return $this->billState;
    }

    /**
     * @param SearchColumnStringField[] $billState
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillState(array $billState = null)
    {
      $this->billState = $billState;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBillVarianceStatus()
    {
      return $this->billVarianceStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $billVarianceStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillVarianceStatus(array $billVarianceStatus = null)
    {
      $this->billVarianceStatus = $billVarianceStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillZip()
    {
      return $this->billZip;
    }

    /**
     * @param SearchColumnStringField[] $billZip
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBillZip(array $billZip = null)
    {
      $this->billZip = $billZip;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBinNumber(array $binNumber = null)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBinNumberQuantity()
    {
      return $this->binNumberQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $binNumberQuantity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBinNumberQuantity(array $binNumberQuantity = null)
    {
      $this->binNumberQuantity = $binNumberQuantity;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBuildEntireAssembly(array $buildEntireAssembly = null)
    {
      $this->buildEntireAssembly = $buildEntireAssembly;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuildVariance()
    {
      return $this->buildVariance;
    }

    /**
     * @param SearchColumnDoubleField[] $buildVariance
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBuildVariance(array $buildVariance = null)
    {
      $this->buildVariance = $buildVariance;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBuilt()
    {
      return $this->built;
    }

    /**
     * @param SearchColumnDoubleField[] $built
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setBuilt(array $built = null)
    {
      $this->built = $built;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCanHaveStackablePromotions()
    {
      return $this->canHaveStackablePromotions;
    }

    /**
     * @param SearchColumnBooleanField[] $canHaveStackablePromotions
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCanHaveStackablePromotions(array $canHaveStackablePromotions = null)
    {
      $this->canHaveStackablePromotions = $canHaveStackablePromotions;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCatchUpPeriod()
    {
      return $this->catchUpPeriod;
    }

    /**
     * @param SearchColumnStringField[] $catchUpPeriod
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCatchUpPeriod(array $catchUpPeriod = null)
    {
      $this->catchUpPeriod = $catchUpPeriod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcCustomerCode()
    {
      return $this->ccCustomerCode;
    }

    /**
     * @param SearchColumnStringField[] $ccCustomerCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCcCustomerCode(array $ccCustomerCode = null)
    {
      $this->ccCustomerCode = $ccCustomerCode;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCcExpDate()
    {
      return $this->ccExpDate;
    }

    /**
     * @param SearchColumnDateField[] $ccExpDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCcExpDate(array $ccExpDate = null)
    {
      $this->ccExpDate = $ccExpDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcHolderName()
    {
      return $this->ccHolderName;
    }

    /**
     * @param SearchColumnStringField[] $ccHolderName
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCcHolderName(array $ccHolderName = null)
    {
      $this->ccHolderName = $ccHolderName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param SearchColumnStringField[] $ccNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCcNumber(array $ccNumber = null)
    {
      $this->ccNumber = $ccNumber;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcStreet()
    {
      return $this->ccStreet;
    }

    /**
     * @param SearchColumnStringField[] $ccStreet
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCcStreet(array $ccStreet = null)
    {
      $this->ccStreet = $ccStreet;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCcZipCode()
    {
      return $this->ccZipCode;
    }

    /**
     * @param SearchColumnStringField[] $ccZipCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCcZipCode(array $ccZipCode = null)
    {
      $this->ccZipCode = $ccZipCode;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCleared()
    {
      return $this->cleared;
    }

    /**
     * @param SearchColumnBooleanField[] $cleared
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCleared(array $cleared = null)
    {
      $this->cleared = $cleared;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param SearchColumnBooleanField[] $closed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setClosed(array $closed = null)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCloseDate()
    {
      return $this->closeDate;
    }

    /**
     * @param SearchColumnDateField[] $closeDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCloseDate(array $closeDate = null)
    {
      $this->closeDate = $closeDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCogsAmount()
    {
      return $this->cogsAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $cogsAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCogsAmount(array $cogsAmount = null)
    {
      $this->cogsAmount = $cogsAmount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCommissionEffectiveDate()
    {
      return $this->commissionEffectiveDate;
    }

    /**
     * @param SearchColumnDateField[] $commissionEffectiveDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCommissionEffectiveDate(array $commissionEffectiveDate = null)
    {
      $this->commissionEffectiveDate = $commissionEffectiveDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCommit()
    {
      return $this->commit;
    }

    /**
     * @param SearchColumnEnumSelectField[] $commit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCommit(array $commit = null)
    {
      $this->commit = $commit;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setComponentYield(array $componentYield = null)
    {
      $this->componentYield = $componentYield;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getConfirmationNumber()
    {
      return $this->confirmationNumber;
    }

    /**
     * @param SearchColumnStringField[] $confirmationNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setConfirmationNumber(array $confirmationNumber = null)
    {
      $this->confirmationNumber = $confirmationNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param SearchColumnDoubleField[] $contribution
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setContribution(array $contribution = null)
    {
      $this->contribution = $contribution;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getContributionPrimary()
    {
      return $this->contributionPrimary;
    }

    /**
     * @param SearchColumnDoubleField[] $contributionPrimary
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setContributionPrimary(array $contributionPrimary = null)
    {
      $this->contributionPrimary = $contributionPrimary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostComponentAmount()
    {
      return $this->costComponentAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $costComponentAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostComponentAmount(array $costComponentAmount = null)
    {
      $this->costComponentAmount = $costComponentAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCostComponentCategory()
    {
      return $this->costComponentCategory;
    }

    /**
     * @param SearchColumnStringField[] $costComponentCategory
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostComponentCategory(array $costComponentCategory = null)
    {
      $this->costComponentCategory = $costComponentCategory;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCostComponentItem()
    {
      return $this->costComponentItem;
    }

    /**
     * @param SearchColumnStringField[] $costComponentItem
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostComponentItem(array $costComponentItem = null)
    {
      $this->costComponentItem = $costComponentItem;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostComponentQuantity()
    {
      return $this->costComponentQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $costComponentQuantity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostComponentQuantity(array $costComponentQuantity = null)
    {
      $this->costComponentQuantity = $costComponentQuantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostComponentStandardCost()
    {
      return $this->costComponentStandardCost;
    }

    /**
     * @param SearchColumnDoubleField[] $costComponentStandardCost
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostComponentStandardCost(array $costComponentStandardCost = null)
    {
      $this->costComponentStandardCost = $costComponentStandardCost;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostEstimate(array $costEstimate = null)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCostEstimateRate()
    {
      return $this->costEstimateRate;
    }

    /**
     * @param SearchColumnDoubleField[] $costEstimateRate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostEstimateRate(array $costEstimateRate = null)
    {
      $this->costEstimateRate = $costEstimateRate;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCostEstimateType(array $costEstimateType = null)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param SearchColumnSelectField[] $createdBy
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCreatedBy(array $createdBy = null)
    {
      $this->createdBy = $createdBy;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param SearchColumnSelectField[] $createdFrom
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCreatedFrom(array $createdFrom = null)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditAmount()
    {
      return $this->creditAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $creditAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCreditAmount(array $creditAmount = null)
    {
      $this->creditAmount = $creditAmount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCscMatch()
    {
      return $this->cscMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $cscMatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCscMatch(array $cscMatch = null)
    {
      $this->cscMatch = $cscMatch;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param SearchColumnSelectField[] $customForm
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCustomForm(array $customForm = null)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCustomGL()
    {
      return $this->customGL;
    }

    /**
     * @param SearchColumnBooleanField[] $customGL
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCustomGL(array $customGL = null)
    {
      $this->customGL = $customGL;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustType()
    {
      return $this->custType;
    }

    /**
     * @param SearchColumnSelectField[] $custType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCustType(array $custType = null)
    {
      $this->custType = $custType;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOpen()
    {
      return $this->daysOpen;
    }

    /**
     * @param SearchColumnLongField[] $daysOpen
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDaysOpen(array $daysOpen = null)
    {
      $this->daysOpen = $daysOpen;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysOverdue()
    {
      return $this->daysOverdue;
    }

    /**
     * @param SearchColumnLongField[] $daysOverdue
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDaysOverdue(array $daysOverdue = null)
    {
      $this->daysOverdue = $daysOverdue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDebitAmount()
    {
      return $this->debitAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $debitAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDebitAmount(array $debitAmount = null)
    {
      $this->debitAmount = $debitAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDeferredRevenue()
    {
      return $this->deferredRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $deferredRevenue
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDeferredRevenue(array $deferredRevenue = null)
    {
      $this->deferredRevenue = $deferredRevenue;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDeferRevRec(array $deferRevRec = null)
    {
      $this->deferRevRec = $deferRevRec;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDepositDate()
    {
      return $this->depositDate;
    }

    /**
     * @param SearchColumnDateField[] $depositDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDepositDate(array $depositDate = null)
    {
      $this->depositDate = $depositDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepositTransaction()
    {
      return $this->depositTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $depositTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDepositTransaction(array $depositTransaction = null)
    {
      $this->depositTransaction = $depositTransaction;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountAmount()
    {
      return $this->discountAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $discountAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDiscountAmount(array $discountAmount = null)
    {
      $this->discountAmount = $discountAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDocUnit()
    {
      return $this->docUnit;
    }

    /**
     * @param SearchColumnStringField[] $docUnit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDocUnit(array $docUnit = null)
    {
      $this->docUnit = $docUnit;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDrAccount()
    {
      return $this->drAccount;
    }

    /**
     * @param SearchColumnStringField[] $drAccount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDrAccount(array $drAccount = null)
    {
      $this->drAccount = $drAccount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDueDate()
    {
      return $this->dueDate;
    }

    /**
     * @param SearchColumnDateField[] $dueDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setDueDate(array $dueDate = null)
    {
      $this->dueDate = $dueDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEffectiveRate()
    {
      return $this->effectiveRate;
    }

    /**
     * @param SearchColumnDoubleField[] $effectiveRate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEffectiveRate(array $effectiveRate = null)
    {
      $this->effectiveRate = $effectiveRate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEmail(array $email = null)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEntity(array $entity = null)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEntityStatus(array $entityStatus = null)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstGrossProfit()
    {
      return $this->estGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $estGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEstGrossProfit(array $estGrossProfit = null)
    {
      $this->estGrossProfit = $estGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstGrossProfitPct()
    {
      return $this->estGrossProfitPct;
    }

    /**
     * @param SearchColumnDoubleField[] $estGrossProfitPct
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEstGrossProfitPct(array $estGrossProfitPct = null)
    {
      $this->estGrossProfitPct = $estGrossProfitPct;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstGrossProfitPercent()
    {
      return $this->estGrossProfitPercent;
    }

    /**
     * @param SearchColumnDoubleField[] $estGrossProfitPercent
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setEstGrossProfitPercent(array $estGrossProfitPercent = null)
    {
      $this->estGrossProfitPercent = $estGrossProfitPercent;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param SearchColumnDoubleField[] $exchangeRate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExchangeRate(array $exchangeRate = null)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeCommission()
    {
      return $this->excludeCommission;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeCommission
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExcludeCommission(array $excludeCommission = null)
    {
      $this->excludeCommission = $excludeCommission;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getExcludeFromRateRequest()
    {
      return $this->excludeFromRateRequest;
    }

    /**
     * @param SearchColumnBooleanField[] $excludeFromRateRequest
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExcludeFromRateRequest(array $excludeFromRateRequest = null)
    {
      $this->excludeFromRateRequest = $excludeFromRateRequest;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedCloseDate()
    {
      return $this->expectedCloseDate;
    }

    /**
     * @param SearchColumnDateField[] $expectedCloseDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExpectedCloseDate(array $expectedCloseDate = null)
    {
      $this->expectedCloseDate = $expectedCloseDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpectedReceiptDate()
    {
      return $this->expectedReceiptDate;
    }

    /**
     * @param SearchColumnDateField[] $expectedReceiptDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExpectedReceiptDate(array $expectedReceiptDate = null)
    {
      $this->expectedReceiptDate = $expectedReceiptDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExpenseCategory()
    {
      return $this->expenseCategory;
    }

    /**
     * @param SearchColumnSelectField[] $expenseCategory
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExpenseCategory(array $expenseCategory = null)
    {
      $this->expenseCategory = $expenseCategory;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpenseDate()
    {
      return $this->expenseDate;
    }

    /**
     * @param SearchColumnDateField[] $expenseDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExpenseDate(array $expenseDate = null)
    {
      $this->expenseDate = $expenseDate;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getFirmed()
    {
      return $this->firmed;
    }

    /**
     * @param SearchColumnBooleanField[] $firmed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFirmed(array $firmed = null)
    {
      $this->firmed = $firmed;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getForecastType()
    {
      return $this->forecastType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $forecastType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setForecastType(array $forecastType = null)
    {
      $this->forecastType = $forecastType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFulfillingTransaction()
    {
      return $this->fulfillingTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $fulfillingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFulfillingTransaction(array $fulfillingTransaction = null)
    {
      $this->fulfillingTransaction = $fulfillingTransaction;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFxAccount()
    {
      return $this->fxAccount;
    }

    /**
     * @param SearchColumnStringField[] $fxAccount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxAccount(array $fxAccount = null)
    {
      $this->fxAccount = $fxAccount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxAmount()
    {
      return $this->fxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxAmount(array $fxAmount = null)
    {
      $this->fxAmount = $fxAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxCostEstimate()
    {
      return $this->fxCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxCostEstimate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxCostEstimate(array $fxCostEstimate = null)
    {
      $this->fxCostEstimate = $fxCostEstimate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxCostEstimateRate()
    {
      return $this->fxCostEstimateRate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxCostEstimateRate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxCostEstimateRate(array $fxCostEstimateRate = null)
    {
      $this->fxCostEstimateRate = $fxCostEstimateRate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxEstGrossProfit()
    {
      return $this->fxEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $fxEstGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxEstGrossProfit(array $fxEstGrossProfit = null)
    {
      $this->fxEstGrossProfit = $fxEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxTranCostEstimate()
    {
      return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $fxTranCostEstimate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxTranCostEstimate(array $fxTranCostEstimate = null)
    {
      $this->fxTranCostEstimate = $fxTranCostEstimate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxVsoeAllocation()
    {
      return $this->fxVsoeAllocation;
    }

    /**
     * @param SearchColumnDoubleField[] $fxVsoeAllocation
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxVsoeAllocation(array $fxVsoeAllocation = null)
    {
      $this->fxVsoeAllocation = $fxVsoeAllocation;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxVsoeAmount()
    {
      return $this->fxVsoeAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $fxVsoeAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxVsoeAmount(array $fxVsoeAmount = null)
    {
      $this->fxVsoeAmount = $fxVsoeAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getFxVsoePrice()
    {
      return $this->fxVsoePrice;
    }

    /**
     * @param SearchColumnDoubleField[] $fxVsoePrice
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setFxVsoePrice(array $fxVsoePrice = null)
    {
      $this->fxVsoePrice = $fxVsoePrice;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGcoAvailabelToCharge()
    {
      return $this->gcoAvailabelToCharge;
    }

    /**
     * @param SearchColumnBooleanField[] $gcoAvailabelToCharge
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoAvailabelToCharge(array $gcoAvailabelToCharge = null)
    {
      $this->gcoAvailabelToCharge = $gcoAvailabelToCharge;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGcoAvailableToRefund()
    {
      return $this->gcoAvailableToRefund;
    }

    /**
     * @param SearchColumnBooleanField[] $gcoAvailableToRefund
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoAvailableToRefund(array $gcoAvailableToRefund = null)
    {
      $this->gcoAvailableToRefund = $gcoAvailableToRefund;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGcoAvsStreetMatch()
    {
      return $this->gcoAvsStreetMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gcoAvsStreetMatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoAvsStreetMatch(array $gcoAvsStreetMatch = null)
    {
      $this->gcoAvsStreetMatch = $gcoAvsStreetMatch;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGcoAvsZipMatch()
    {
      return $this->gcoAvsZipMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gcoAvsZipMatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoAvsZipMatch(array $gcoAvsZipMatch = null)
    {
      $this->gcoAvsZipMatch = $gcoAvsZipMatch;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getGcoBuyerAccountAge()
    {
      return $this->gcoBuyerAccountAge;
    }

    /**
     * @param SearchColumnLongField[] $gcoBuyerAccountAge
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoBuyerAccountAge(array $gcoBuyerAccountAge = null)
    {
      $this->gcoBuyerAccountAge = $gcoBuyerAccountAge;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoBuyerIp()
    {
      return $this->gcoBuyerIp;
    }

    /**
     * @param SearchColumnStringField[] $gcoBuyerIp
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoBuyerIp(array $gcoBuyerIp = null)
    {
      $this->gcoBuyerIp = $gcoBuyerIp;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoChargeAmount()
    {
      return $this->gcoChargeAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoChargeAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoChargeAmount(array $gcoChargeAmount = null)
    {
      $this->gcoChargeAmount = $gcoChargeAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoChargebackAmount()
    {
      return $this->gcoChargebackAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoChargebackAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoChargebackAmount(array $gcoChargebackAmount = null)
    {
      $this->gcoChargebackAmount = $gcoChargebackAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoConfirmedChargedTotal()
    {
      return $this->gcoConfirmedChargedTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoConfirmedChargedTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoConfirmedChargedTotal(array $gcoConfirmedChargedTotal = null)
    {
      $this->gcoConfirmedChargedTotal = $gcoConfirmedChargedTotal;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoConfirmedRefundedTotal()
    {
      return $this->gcoConfirmedRefundedTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoConfirmedRefundedTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoConfirmedRefundedTotal(array $gcoConfirmedRefundedTotal = null)
    {
      $this->gcoConfirmedRefundedTotal = $gcoConfirmedRefundedTotal;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoCreditcardNumber()
    {
      return $this->gcoCreditcardNumber;
    }

    /**
     * @param SearchColumnStringField[] $gcoCreditcardNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoCreditcardNumber(array $gcoCreditcardNumber = null)
    {
      $this->gcoCreditcardNumber = $gcoCreditcardNumber;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGcoCscMatch()
    {
      return $this->gcoCscMatch;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gcoCscMatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoCscMatch(array $gcoCscMatch = null)
    {
      $this->gcoCscMatch = $gcoCscMatch;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoFinancialState()
    {
      return $this->gcoFinancialState;
    }

    /**
     * @param SearchColumnStringField[] $gcoFinancialState
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoFinancialState(array $gcoFinancialState = null)
    {
      $this->gcoFinancialState = $gcoFinancialState;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoFulfillmentState()
    {
      return $this->gcoFulfillmentState;
    }

    /**
     * @param SearchColumnStringField[] $gcoFulfillmentState
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoFulfillmentState(array $gcoFulfillmentState = null)
    {
      $this->gcoFulfillmentState = $gcoFulfillmentState;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoOrderId()
    {
      return $this->gcoOrderId;
    }

    /**
     * @param SearchColumnStringField[] $gcoOrderId
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoOrderId(array $gcoOrderId = null)
    {
      $this->gcoOrderId = $gcoOrderId;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoOrderTotal()
    {
      return $this->gcoOrderTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoOrderTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoOrderTotal(array $gcoOrderTotal = null)
    {
      $this->gcoOrderTotal = $gcoOrderTotal;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoPromotionAmount()
    {
      return $this->gcoPromotionAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoPromotionAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoPromotionAmount(array $gcoPromotionAmount = null)
    {
      $this->gcoPromotionAmount = $gcoPromotionAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoPromotionName()
    {
      return $this->gcoPromotionName;
    }

    /**
     * @param SearchColumnStringField[] $gcoPromotionName
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoPromotionName(array $gcoPromotionName = null)
    {
      $this->gcoPromotionName = $gcoPromotionName;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoRefundAmount()
    {
      return $this->gcoRefundAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoRefundAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoRefundAmount(array $gcoRefundAmount = null)
    {
      $this->gcoRefundAmount = $gcoRefundAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGcoShippingTotal()
    {
      return $this->gcoShippingTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $gcoShippingTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoShippingTotal(array $gcoShippingTotal = null)
    {
      $this->gcoShippingTotal = $gcoShippingTotal;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGcoStateChangedDetail()
    {
      return $this->gcoStateChangedDetail;
    }

    /**
     * @param SearchColumnStringField[] $gcoStateChangedDetail
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGcoStateChangedDetail(array $gcoStateChangedDetail = null)
    {
      $this->gcoStateChangedDetail = $gcoStateChangedDetail;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCert()
    {
      return $this->giftCert;
    }

    /**
     * @param SearchColumnStringField[] $giftCert
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGiftCert(array $giftCert = null)
    {
      $this->giftCert = $giftCert;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getGrossAmount()
    {
      return $this->grossAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $grossAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setGrossAmount(array $grossAmount = null)
    {
      $this->grossAmount = $grossAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeInForecast()
    {
      return $this->includeInForecast;
    }

    /**
     * @param SearchColumnBooleanField[] $includeInForecast
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIncludeInForecast(array $includeInForecast = null)
    {
      $this->includeInForecast = $includeInForecast;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param SearchColumnSelectField[] $incoterm
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIncoterm(array $incoterm = null)
    {
      $this->incoterm = $incoterm;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getIntercoStatus()
    {
      return $this->intercoStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $intercoStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIntercoStatus(array $intercoStatus = null)
    {
      $this->intercoStatus = $intercoStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIntercoTransaction()
    {
      return $this->intercoTransaction;
    }

    /**
     * @param SearchColumnStringField[] $intercoTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIntercoTransaction(array $intercoTransaction = null)
    {
      $this->intercoTransaction = $intercoTransaction;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInVsoeBundle()
    {
      return $this->inVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $inVsoeBundle
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setInVsoeBundle(array $inVsoeBundle = null)
    {
      $this->inVsoeBundle = $inVsoeBundle;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAllocation()
    {
      return $this->isAllocation;
    }

    /**
     * @param SearchColumnBooleanField[] $isAllocation
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsAllocation(array $isAllocation = null)
    {
      $this->isAllocation = $isAllocation;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsBackflush()
    {
      return $this->isBackflush;
    }

    /**
     * @param SearchColumnBooleanField[] $isBackflush
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsBackflush(array $isBackflush = null)
    {
      $this->isBackflush = $isBackflush;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoChargeback()
    {
      return $this->isGcoChargeback;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoChargeback
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsGcoChargeback(array $isGcoChargeback = null)
    {
      $this->isGcoChargeback = $isGcoChargeback;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoChargeConfirmed()
    {
      return $this->isGcoChargeConfirmed;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoChargeConfirmed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsGcoChargeConfirmed(array $isGcoChargeConfirmed = null)
    {
      $this->isGcoChargeConfirmed = $isGcoChargeConfirmed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoPaymentGuaranteed()
    {
      return $this->isGcoPaymentGuaranteed;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoPaymentGuaranteed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsGcoPaymentGuaranteed(array $isGcoPaymentGuaranteed = null)
    {
      $this->isGcoPaymentGuaranteed = $isGcoPaymentGuaranteed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsGcoRefundConfirmed()
    {
      return $this->isGcoRefundConfirmed;
    }

    /**
     * @param SearchColumnBooleanField[] $isGcoRefundConfirmed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsGcoRefundConfirmed(array $isGcoRefundConfirmed = null)
    {
      $this->isGcoRefundConfirmed = $isGcoRefundConfirmed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInsideDelivery()
    {
      return $this->isInsideDelivery;
    }

    /**
     * @param SearchColumnBooleanField[] $isInsideDelivery
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsInsideDelivery(array $isInsideDelivery = null)
    {
      $this->isInsideDelivery = $isInsideDelivery;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInsidePickup()
    {
      return $this->isInsidePickup;
    }

    /**
     * @param SearchColumnBooleanField[] $isInsidePickup
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsInsidePickup(array $isInsidePickup = null)
    {
      $this->isInsidePickup = $isInsidePickup;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsIntercompanyAdjustment()
    {
      return $this->isIntercompanyAdjustment;
    }

    /**
     * @param SearchColumnBooleanField[] $isIntercompanyAdjustment
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsIntercompanyAdjustment(array $isIntercompanyAdjustment = null)
    {
      $this->isIntercompanyAdjustment = $isIntercompanyAdjustment;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsMultiShipTo()
    {
      return $this->isMultiShipTo;
    }

    /**
     * @param SearchColumnBooleanField[] $isMultiShipTo
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsMultiShipTo(array $isMultiShipTo = null)
    {
      $this->isMultiShipTo = $isMultiShipTo;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsReversal()
    {
      return $this->isReversal;
    }

    /**
     * @param SearchColumnBooleanField[] $isReversal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsReversal(array $isReversal = null)
    {
      $this->isReversal = $isReversal;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsRevRecTransaction()
    {
      return $this->isRevRecTransaction;
    }

    /**
     * @param SearchColumnBooleanField[] $isRevRecTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsRevRecTransaction(array $isRevRecTransaction = null)
    {
      $this->isRevRecTransaction = $isRevRecTransaction;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsScrap()
    {
      return $this->isScrap;
    }

    /**
     * @param SearchColumnBooleanField[] $isScrap
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsScrap(array $isScrap = null)
    {
      $this->isScrap = $isScrap;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsShipAddress()
    {
      return $this->isShipAddress;
    }

    /**
     * @param SearchColumnBooleanField[] $isShipAddress
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsShipAddress(array $isShipAddress = null)
    {
      $this->isShipAddress = $isShipAddress;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTransferPriceCosting()
    {
      return $this->isTransferPriceCosting;
    }

    /**
     * @param SearchColumnBooleanField[] $isTransferPriceCosting
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsTransferPriceCosting(array $isTransferPriceCosting = null)
    {
      $this->isTransferPriceCosting = $isTransferPriceCosting;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setIsWip(array $isWip = null)
    {
      $this->isWip = $isWip;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getItemFulfillmentChoice()
    {
      return $this->itemFulfillmentChoice;
    }

    /**
     * @param SearchColumnEnumSelectField[] $itemFulfillmentChoice
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setItemFulfillmentChoice(array $itemFulfillmentChoice = null)
    {
      $this->itemFulfillmentChoice = $itemFulfillmentChoice;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemRevision()
    {
      return $this->itemRevision;
    }

    /**
     * @param SearchColumnSelectField[] $itemRevision
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setItemRevision(array $itemRevision = null)
    {
      $this->itemRevision = $itemRevision;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLandedCostPerLine()
    {
      return $this->landedCostPerLine;
    }

    /**
     * @param SearchColumnBooleanField[] $landedCostPerLine
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLandedCostPerLine(array $landedCostPerLine = null)
    {
      $this->landedCostPerLine = $landedCostPerLine;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate()
    {
      return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLastModifiedDate(array $lastModifiedDate = null)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param SearchColumnSelectField[] $leadSource
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLeadSource(array $leadSource = null)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param SearchColumnLongField[] $line
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLine(array $line = null)
    {
      $this->line = $line;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineSequenceNumber()
    {
      return $this->lineSequenceNumber;
    }

    /**
     * @param SearchColumnLongField[] $lineSequenceNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLineSequenceNumber(array $lineSequenceNumber = null)
    {
      $this->lineSequenceNumber = $lineSequenceNumber;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineUniqueKey()
    {
      return $this->lineUniqueKey;
    }

    /**
     * @param SearchColumnLongField[] $lineUniqueKey
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLineUniqueKey(array $lineUniqueKey = null)
    {
      $this->lineUniqueKey = $lineUniqueKey;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLocationAutoAssigned()
    {
      return $this->locationAutoAssigned;
    }

    /**
     * @param SearchColumnBooleanField[] $locationAutoAssigned
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setLocationAutoAssigned(array $locationAutoAssigned = null)
    {
      $this->locationAutoAssigned = $locationAutoAssigned;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMainLine()
    {
      return $this->mainLine;
    }

    /**
     * @param SearchColumnBooleanField[] $mainLine
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMainLine(array $mainLine = null)
    {
      $this->mainLine = $mainLine;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMainName()
    {
      return $this->mainName;
    }

    /**
     * @param SearchColumnStringField[] $mainName
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMainName(array $mainName = null)
    {
      $this->mainName = $mainName;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingRouting()
    {
      return $this->manufacturingRouting;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingRouting
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setManufacturingRouting(array $manufacturingRouting = null)
    {
      $this->manufacturingRouting = $manufacturingRouting;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMatchBillToReceipt(array $matchBillToReceipt = null)
    {
      $this->matchBillToReceipt = $matchBillToReceipt;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemoMain()
    {
      return $this->memoMain;
    }

    /**
     * @param SearchColumnStringField[] $memoMain
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMemoMain(array $memoMain = null)
    {
      $this->memoMain = $memoMain;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMemorized()
    {
      return $this->memorized;
    }

    /**
     * @param SearchColumnBooleanField[] $memorized
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMemorized(array $memorized = null)
    {
      $this->memorized = $memorized;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMerchantAccount()
    {
      return $this->merchantAccount;
    }

    /**
     * @param SearchColumnSelectField[] $merchantAccount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMerchantAccount(array $merchantAccount = null)
    {
      $this->merchantAccount = $merchantAccount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMessage(array $message = null)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMultiSubsidiary()
    {
      return $this->multiSubsidiary;
    }

    /**
     * @param SearchColumnBooleanField[] $multiSubsidiary
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setMultiSubsidiary(array $multiSubsidiary = null)
    {
      $this->multiSubsidiary = $multiSubsidiary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNetAmount()
    {
      return $this->netAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $netAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setNetAmount(array $netAmount = null)
    {
      $this->netAmount = $netAmount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getNetAmountNoTax()
    {
      return $this->netAmountNoTax;
    }

    /**
     * @param SearchColumnDoubleField[] $netAmountNoTax
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setNetAmountNoTax(array $netAmountNoTax = null)
    {
      $this->netAmountNoTax = $netAmountNoTax;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param SearchColumnSelectField[] $nextApprover
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setNextApprover(array $nextApprover = null)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextBillDate()
    {
      return $this->nextBillDate;
    }

    /**
     * @param SearchColumnDateField[] $nextBillDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setNextBillDate(array $nextBillDate = null)
    {
      $this->nextBillDate = $nextBillDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNoAutoAssignLocation()
    {
      return $this->noAutoAssignLocation;
    }

    /**
     * @param SearchColumnBooleanField[] $noAutoAssignLocation
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setNoAutoAssignLocation(array $noAutoAssignLocation = null)
    {
      $this->noAutoAssignLocation = $noAutoAssignLocation;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getNonReimbursable()
    {
      return $this->nonReimbursable;
    }

    /**
     * @param SearchColumnBooleanField[] $nonReimbursable
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setNonReimbursable(array $nonReimbursable = null)
    {
      $this->nonReimbursable = $nonReimbursable;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOneTimeTotal()
    {
      return $this->oneTimeTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $oneTimeTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOneTimeTotal(array $oneTimeTotal = null)
    {
      $this->oneTimeTotal = $oneTimeTotal;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOpportunity()
    {
      return $this->opportunity;
    }

    /**
     * @param SearchColumnSelectField[] $opportunity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOpportunity(array $opportunity = null)
    {
      $this->opportunity = $opportunity;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param SearchColumnStringField[] $options
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOptions(array $options = null)
    {
      $this->options = $options;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOrderPriority()
    {
      return $this->orderPriority;
    }

    /**
     * @param SearchColumnDoubleField[] $orderPriority
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOrderPriority(array $orderPriority = null)
    {
      $this->orderPriority = $orderPriority;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getOriginator()
    {
      return $this->originator;
    }

    /**
     * @param SearchColumnEnumSelectField[] $originator
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOriginator(array $originator = null)
    {
      $this->originator = $originator;
      return $this;
    }

    /**
     * @return SearchColumnTextNumberField[]
     */
    public function getOtherRefNum()
    {
      return $this->otherRefNum;
    }

    /**
     * @param SearchColumnTextNumberField[] $otherRefNum
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOtherRefNum(array $otherRefNum = null)
    {
      $this->otherRefNum = $otherRefNum;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOverheadParentItem()
    {
      return $this->overheadParentItem;
    }

    /**
     * @param SearchColumnSelectField[] $overheadParentItem
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setOverheadParentItem(array $overheadParentItem = null)
    {
      $this->overheadParentItem = $overheadParentItem;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getPackageCount()
    {
      return $this->packageCount;
    }

    /**
     * @param SearchColumnLongField[] $packageCount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPackageCount(array $packageCount = null)
    {
      $this->packageCount = $packageCount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPaidAmount()
    {
      return $this->paidAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $paidAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaidAmount(array $paidAmount = null)
    {
      $this->paidAmount = $paidAmount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaidTransaction()
    {
      return $this->paidTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $paidTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaidTransaction(array $paidTransaction = null)
    {
      $this->paidTransaction = $paidTransaction;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param SearchColumnSelectField[] $partner
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPartner(array $partner = null)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPartnerContribution()
    {
      return $this->partnerContribution;
    }

    /**
     * @param SearchColumnDoubleField[] $partnerContribution
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPartnerContribution(array $partnerContribution = null)
    {
      $this->partnerContribution = $partnerContribution;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param SearchColumnSelectField[] $partnerRole
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPartnerRole(array $partnerRole = null)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPartnerTeamMember()
    {
      return $this->partnerTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $partnerTeamMember
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPartnerTeamMember(array $partnerTeamMember = null)
    {
      $this->partnerTeamMember = $partnerTeamMember;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPayingAmount()
    {
      return $this->payingAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $payingAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPayingAmount(array $payingAmount = null)
    {
      $this->payingAmount = $payingAmount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayingTransaction()
    {
      return $this->payingTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $payingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPayingTransaction(array $payingTransaction = null)
    {
      $this->payingTransaction = $payingTransaction;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentApproved()
    {
      return $this->paymentApproved;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentApproved
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentApproved(array $paymentApproved = null)
    {
      $this->paymentApproved = $paymentApproved;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPaymentEventDate()
    {
      return $this->paymentEventDate;
    }

    /**
     * @param SearchColumnDateField[] $paymentEventDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentEventDate(array $paymentEventDate = null)
    {
      $this->paymentEventDate = $paymentEventDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentEventHoldReason()
    {
      return $this->paymentEventHoldReason;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentEventHoldReason
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentEventHoldReason(array $paymentEventHoldReason = null)
    {
      $this->paymentEventHoldReason = $paymentEventHoldReason;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentEventPurchaseCardUsed()
    {
      return $this->paymentEventPurchaseCardUsed;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentEventPurchaseCardUsed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentEventPurchaseCardUsed(array $paymentEventPurchaseCardUsed = null)
    {
      $this->paymentEventPurchaseCardUsed = $paymentEventPurchaseCardUsed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentEventPurchaseDataSent()
    {
      return $this->paymentEventPurchaseDataSent;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentEventPurchaseDataSent
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentEventPurchaseDataSent(array $paymentEventPurchaseDataSent = null)
    {
      $this->paymentEventPurchaseDataSent = $paymentEventPurchaseDataSent;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentEventResult()
    {
      return $this->paymentEventResult;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentEventResult
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentEventResult(array $paymentEventResult = null)
    {
      $this->paymentEventResult = $paymentEventResult;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPaymentEventType()
    {
      return $this->paymentEventType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $paymentEventType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentEventType(array $paymentEventType = null)
    {
      $this->paymentEventType = $paymentEventType;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPaymentHold()
    {
      return $this->paymentHold;
    }

    /**
     * @param SearchColumnBooleanField[] $paymentHold
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentHold(array $paymentHold = null)
    {
      $this->paymentHold = $paymentHold;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param SearchColumnSelectField[] $paymentMethod
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPaymentMethod(array $paymentMethod = null)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPayPalPending()
    {
      return $this->payPalPending;
    }

    /**
     * @param SearchColumnBooleanField[] $payPalPending
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPayPalPending(array $payPalPending = null)
    {
      $this->payPalPending = $payPalPending;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPayPalStatus()
    {
      return $this->payPalStatus;
    }

    /**
     * @param SearchColumnStringField[] $payPalStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPayPalStatus(array $payPalStatus = null)
    {
      $this->payPalStatus = $payPalStatus;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPayPalTranId()
    {
      return $this->payPalTranId;
    }

    /**
     * @param SearchColumnStringField[] $payPalTranId
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPayPalTranId(array $payPalTranId = null)
    {
      $this->payPalTranId = $payPalTranId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPayrollBatch()
    {
      return $this->payrollBatch;
    }

    /**
     * @param SearchColumnStringField[] $payrollBatch
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPayrollBatch(array $payrollBatch = null)
    {
      $this->payrollBatch = $payrollBatch;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPnRefNum()
    {
      return $this->pnRefNum;
    }

    /**
     * @param SearchColumnStringField[] $pnRefNum
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPnRefNum(array $pnRefNum = null)
    {
      $this->pnRefNum = $pnRefNum;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPoRate()
    {
      return $this->poRate;
    }

    /**
     * @param SearchColumnDoubleField[] $poRate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPoRate(array $poRate = null)
    {
      $this->poRate = $poRate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPosting()
    {
      return $this->posting;
    }

    /**
     * @param SearchColumnBooleanField[] $posting
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPosting(array $posting = null)
    {
      $this->posting = $posting;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param SearchColumnSelectField[] $postingPeriod
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPostingPeriod(array $postingPeriod = null)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param SearchColumnSelectField[] $priceLevel
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPriceLevel(array $priceLevel = null)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrint()
    {
      return $this->print;
    }

    /**
     * @param SearchColumnStringField[] $print
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPrint(array $print = null)
    {
      $this->print = $print;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProbability()
    {
      return $this->probability;
    }

    /**
     * @param SearchColumnDoubleField[] $probability
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setProbability(array $probability = null)
    {
      $this->probability = $probability;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getProjectedAmount()
    {
      return $this->projectedAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $projectedAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setProjectedAmount(array $projectedAmount = null)
    {
      $this->projectedAmount = $projectedAmount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProjectTask()
    {
      return $this->projectTask;
    }

    /**
     * @param SearchColumnSelectField[] $projectTask
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setProjectTask(array $projectTask = null)
    {
      $this->projectTask = $projectTask;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param SearchColumnSelectField[] $promoCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPromoCode(array $promoCode = null)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseOrder
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setPurchaseOrder(array $purchaseOrder = null)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantity(array $quantity = null)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityBilled()
    {
      return $this->quantityBilled;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityBilled
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityBilled(array $quantityBilled = null)
    {
      $this->quantityBilled = $quantityBilled;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityCommitted(array $quantityCommitted = null)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityPacked()
    {
      return $this->quantityPacked;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityPacked
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityPacked(array $quantityPacked = null)
    {
      $this->quantityPacked = $quantityPacked;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityPicked()
    {
      return $this->quantityPicked;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityPicked
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityPicked(array $quantityPicked = null)
    {
      $this->quantityPicked = $quantityPicked;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityRevCommitted()
    {
      return $this->quantityRevCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityRevCommitted
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityRevCommitted(array $quantityRevCommitted = null)
    {
      $this->quantityRevCommitted = $quantityRevCommitted;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityShipRecv()
    {
      return $this->quantityShipRecv;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityShipRecv
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityShipRecv(array $quantityShipRecv = null)
    {
      $this->quantityShipRecv = $quantityShipRecv;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityUom()
    {
      return $this->quantityUom;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityUom
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setQuantityUom(array $quantityUom = null)
    {
      $this->quantityUom = $quantityUom;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRate()
    {
      return $this->rate;
    }

    /**
     * @param SearchColumnDoubleField[] $rate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRate(array $rate = null)
    {
      $this->rate = $rate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRealizedGainPostingTransaction()
    {
      return $this->realizedGainPostingTransaction;
    }

    /**
     * @param SearchColumnStringField[] $realizedGainPostingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRealizedGainPostingTransaction(array $realizedGainPostingTransaction = null)
    {
      $this->realizedGainPostingTransaction = $realizedGainPostingTransaction;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecognizedRevenue()
    {
      return $this->recognizedRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $recognizedRevenue
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecognizedRevenue(array $recognizedRevenue = null)
    {
      $this->recognizedRevenue = $recognizedRevenue;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecordType()
    {
      return $this->recordType;
    }

    /**
     * @param SearchColumnStringField[] $recordType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecordType(array $recordType = null)
    {
      $this->recordType = $recordType;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurAnnuallyTotal()
    {
      return $this->recurAnnuallyTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $recurAnnuallyTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecurAnnuallyTotal(array $recurAnnuallyTotal = null)
    {
      $this->recurAnnuallyTotal = $recurAnnuallyTotal;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurMonthlyTotal()
    {
      return $this->recurMonthlyTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $recurMonthlyTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecurMonthlyTotal(array $recurMonthlyTotal = null)
    {
      $this->recurMonthlyTotal = $recurMonthlyTotal;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurQuarterlyTotal()
    {
      return $this->recurQuarterlyTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $recurQuarterlyTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecurQuarterlyTotal(array $recurQuarterlyTotal = null)
    {
      $this->recurQuarterlyTotal = $recurQuarterlyTotal;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRecurringBill()
    {
      return $this->recurringBill;
    }

    /**
     * @param SearchColumnBooleanField[] $recurringBill
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecurringBill(array $recurringBill = null)
    {
      $this->recurringBill = $recurringBill;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRecurWeeklyTotal()
    {
      return $this->recurWeeklyTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $recurWeeklyTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRecurWeeklyTotal(array $recurWeeklyTotal = null)
    {
      $this->recurWeeklyTotal = $recurWeeklyTotal;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRefNumber()
    {
      return $this->refNumber;
    }

    /**
     * @param SearchColumnLongField[] $refNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRefNumber(array $refNumber = null)
    {
      $this->refNumber = $refNumber;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevCommitStatus()
    {
      return $this->revCommitStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revCommitStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRevCommitStatus(array $revCommitStatus = null)
    {
      $this->revCommitStatus = $revCommitStatus;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevCommittingTransaction()
    {
      return $this->revCommittingTransaction;
    }

    /**
     * @param SearchColumnSelectField[] $revCommittingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRevCommittingTransaction(array $revCommittingTransaction = null)
    {
      $this->revCommittingTransaction = $revCommittingTransaction;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRevenueStatus()
    {
      return $this->revenueStatus;
    }

    /**
     * @param SearchColumnEnumSelectField[] $revenueStatus
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRevenueStatus(array $revenueStatus = null)
    {
      $this->revenueStatus = $revenueStatus;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getReversalDate()
    {
      return $this->reversalDate;
    }

    /**
     * @param SearchColumnDateField[] $reversalDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setReversalDate(array $reversalDate = null)
    {
      $this->reversalDate = $reversalDate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getReversalNumber()
    {
      return $this->reversalNumber;
    }

    /**
     * @param SearchColumnStringField[] $reversalNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setReversalNumber(array $reversalNumber = null)
    {
      $this->reversalNumber = $reversalNumber;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecEndDate()
    {
      return $this->revRecEndDate;
    }

    /**
     * @param SearchColumnDateField[] $revRecEndDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRevRecEndDate(array $revRecEndDate = null)
    {
      $this->revRecEndDate = $revRecEndDate;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getRevRecOnRevCommitment()
    {
      return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchColumnBooleanField[] $revRecOnRevCommitment
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRevRecOnRevCommitment(array $revRecOnRevCommitment = null)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRevRecStartDate()
    {
      return $this->revRecStartDate;
    }

    /**
     * @param SearchColumnDateField[] $revRecStartDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRevRecStartDate(array $revRecStartDate = null)
    {
      $this->revRecStartDate = $revRecStartDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRgAccount()
    {
      return $this->rgAccount;
    }

    /**
     * @param SearchColumnSelectField[] $rgAccount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRgAccount(array $rgAccount = null)
    {
      $this->rgAccount = $rgAccount;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRgAmount()
    {
      return $this->rgAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $rgAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setRgAmount(array $rgAmount = null)
    {
      $this->rgAmount = $rgAmount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSalesEffectiveDate()
    {
      return $this->salesEffectiveDate;
    }

    /**
     * @param SearchColumnDateField[] $salesEffectiveDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSalesEffectiveDate(array $salesEffectiveDate = null)
    {
      $this->salesEffectiveDate = $salesEffectiveDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param SearchColumnSelectField[] $salesOrder
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSalesOrder(array $salesOrder = null)
    {
      $this->salesOrder = $salesOrder;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchColumnSelectField[] $salesRep
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSalesRep(array $salesRep = null)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamMember()
    {
      return $this->salesTeamMember;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamMember
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSalesTeamMember(array $salesTeamMember = null)
    {
      $this->salesTeamMember = $salesTeamMember;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesTeamRole()
    {
      return $this->salesTeamRole;
    }

    /**
     * @param SearchColumnSelectField[] $salesTeamRole
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSalesTeamRole(array $salesTeamRole = null)
    {
      $this->salesTeamRole = $salesTeamRole;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSchedulingMethod()
    {
      return $this->schedulingMethod;
    }

    /**
     * @param SearchColumnEnumSelectField[] $schedulingMethod
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSchedulingMethod(array $schedulingMethod = null)
    {
      $this->schedulingMethod = $schedulingMethod;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSerialNumber(array $serialNumber = null)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSerialNumberCost()
    {
      return $this->serialNumberCost;
    }

    /**
     * @param SearchColumnDoubleField[] $serialNumberCost
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSerialNumberCost(array $serialNumberCost = null)
    {
      $this->serialNumberCost = $serialNumberCost;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSerialNumberCostAdjustment()
    {
      return $this->serialNumberCostAdjustment;
    }

    /**
     * @param SearchColumnDoubleField[] $serialNumberCostAdjustment
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSerialNumberCostAdjustment(array $serialNumberCostAdjustment = null)
    {
      $this->serialNumberCostAdjustment = $serialNumberCostAdjustment;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSerialNumberQuantity()
    {
      return $this->serialNumberQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $serialNumberQuantity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSerialNumberQuantity(array $serialNumberQuantity = null)
    {
      $this->serialNumberQuantity = $serialNumberQuantity;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSerialNumbers()
    {
      return $this->serialNumbers;
    }

    /**
     * @param SearchColumnStringField[] $serialNumbers
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSerialNumbers(array $serialNumbers = null)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipAddress(array $shipAddress = null)
    {
      $this->shipAddress = $shipAddress;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress1()
    {
      return $this->shipAddress1;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress1
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipAddress1(array $shipAddress1 = null)
    {
      $this->shipAddress1 = $shipAddress1;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress2()
    {
      return $this->shipAddress2;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress2
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipAddress2(array $shipAddress2 = null)
    {
      $this->shipAddress2 = $shipAddress2;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddress3()
    {
      return $this->shipAddress3;
    }

    /**
     * @param SearchColumnStringField[] $shipAddress3
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipAddress3(array $shipAddress3 = null)
    {
      $this->shipAddress3 = $shipAddress3;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddressee()
    {
      return $this->shipAddressee;
    }

    /**
     * @param SearchColumnStringField[] $shipAddressee
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipAddressee(array $shipAddressee = null)
    {
      $this->shipAddressee = $shipAddressee;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAttention()
    {
      return $this->shipAttention;
    }

    /**
     * @param SearchColumnStringField[] $shipAttention
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipAttention(array $shipAttention = null)
    {
      $this->shipAttention = $shipAttention;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShipCarrier()
    {
      return $this->shipCarrier;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shipCarrier
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipCarrier(array $shipCarrier = null)
    {
      $this->shipCarrier = $shipCarrier;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCity()
    {
      return $this->shipCity;
    }

    /**
     * @param SearchColumnStringField[] $shipCity
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipCity(array $shipCity = null)
    {
      $this->shipCity = $shipCity;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param SearchColumnBooleanField[] $shipComplete
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipComplete(array $shipComplete = null)
    {
      $this->shipComplete = $shipComplete;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShipCountry()
    {
      return $this->shipCountry;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shipCountry
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipCountry(array $shipCountry = null)
    {
      $this->shipCountry = $shipCountry;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCountryCode()
    {
      return $this->shipCountryCode;
    }

    /**
     * @param SearchColumnStringField[] $shipCountryCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipCountryCode(array $shipCountryCode = null)
    {
      $this->shipCountryCode = $shipCountryCode;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getShipDate()
    {
      return $this->shipDate;
    }

    /**
     * @param SearchColumnDateField[] $shipDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipDate(array $shipDate = null)
    {
      $this->shipDate = $shipDate;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getShipGroup()
    {
      return $this->shipGroup;
    }

    /**
     * @param SearchColumnLongField[] $shipGroup
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipGroup(array $shipGroup = null)
    {
      $this->shipGroup = $shipGroup;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param SearchColumnSelectField[] $shipMethod
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipMethod(array $shipMethod = null)
    {
      $this->shipMethod = $shipMethod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipPhone()
    {
      return $this->shipPhone;
    }

    /**
     * @param SearchColumnStringField[] $shipPhone
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipPhone(array $shipPhone = null)
    {
      $this->shipPhone = $shipPhone;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getShippingAmount()
    {
      return $this->shippingAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $shippingAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShippingAmount(array $shippingAmount = null)
    {
      $this->shippingAmount = $shippingAmount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getShipRecvStatusLine()
    {
      return $this->shipRecvStatusLine;
    }

    /**
     * @param SearchColumnBooleanField[] $shipRecvStatusLine
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipRecvStatusLine(array $shipRecvStatusLine = null)
    {
      $this->shipRecvStatusLine = $shipRecvStatusLine;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipState()
    {
      return $this->shipState;
    }

    /**
     * @param SearchColumnStringField[] $shipState
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipState(array $shipState = null)
    {
      $this->shipState = $shipState;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getShipTo()
    {
      return $this->shipTo;
    }

    /**
     * @param SearchColumnSelectField[] $shipTo
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipTo(array $shipTo = null)
    {
      $this->shipTo = $shipTo;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipZip()
    {
      return $this->shipZip;
    }

    /**
     * @param SearchColumnStringField[] $shipZip
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setShipZip(array $shipZip = null)
    {
      $this->shipZip = $shipZip;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSignedAmount()
    {
      return $this->signedAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $signedAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSignedAmount(array $signedAmount = null)
    {
      $this->signedAmount = $signedAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param SearchColumnStringField[] $source
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSource(array $source = null)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchColumnEnumSelectField[] $status
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setStatus(array $status = null)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSubscription(array $subscription = null)
    {
      $this->subscription = $subscription;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscriptionLine()
    {
      return $this->subscriptionLine;
    }

    /**
     * @param SearchColumnSelectField[] $subscriptionLine
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSubscriptionLine(array $subscriptionLine = null)
    {
      $this->subscriptionLine = $subscriptionLine;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxAmount()
    {
      return $this->taxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $taxAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTaxAmount(array $taxAmount = null)
    {
      $this->taxAmount = $taxAmount;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxCode()
    {
      return $this->taxCode;
    }

    /**
     * @param SearchColumnSelectField[] $taxCode
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTaxCode(array $taxCode = null)
    {
      $this->taxCode = $taxCode;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxLine()
    {
      return $this->taxLine;
    }

    /**
     * @param SearchColumnBooleanField[] $taxLine
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTaxLine(array $taxLine = null)
    {
      $this->taxLine = $taxLine;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxPeriod()
    {
      return $this->taxPeriod;
    }

    /**
     * @param SearchColumnSelectField[] $taxPeriod
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTaxPeriod(array $taxPeriod = null)
    {
      $this->taxPeriod = $taxPeriod;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxTotal()
    {
      return $this->taxTotal;
    }

    /**
     * @param SearchColumnDoubleField[] $taxTotal
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTaxTotal(array $taxTotal = null)
    {
      $this->taxTotal = $taxTotal;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getTermInMonths()
    {
      return $this->termInMonths;
    }

    /**
     * @param SearchColumnLongField[] $termInMonths
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTermInMonths(array $termInMonths = null)
    {
      $this->termInMonths = $termInMonths;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param SearchColumnSelectField[] $terms
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTerms(array $terms = null)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTermsOfSale()
    {
      return $this->termsOfSale;
    }

    /**
     * @param SearchColumnStringField[] $termsOfSale
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTermsOfSale(array $termsOfSale = null)
    {
      $this->termsOfSale = $termsOfSale;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTitle(array $title = null)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getToBeEmailed()
    {
      return $this->toBeEmailed;
    }

    /**
     * @param SearchColumnBooleanField[] $toBeEmailed
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setToBeEmailed(array $toBeEmailed = null)
    {
      $this->toBeEmailed = $toBeEmailed;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getToBePrinted()
    {
      return $this->toBePrinted;
    }

    /**
     * @param SearchColumnBooleanField[] $toBePrinted
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setToBePrinted(array $toBePrinted = null)
    {
      $this->toBePrinted = $toBePrinted;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $toSubsidiary
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setToSubsidiary(array $toSubsidiary = null)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param SearchColumnDoubleField[] $total
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTotal(array $total = null)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTotalCostEstimate()
    {
      return $this->totalCostEstimate;
    }

    /**
     * @param SearchColumnDoubleField[] $totalCostEstimate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTotalCostEstimate(array $totalCostEstimate = null)
    {
      $this->totalCostEstimate = $totalCostEstimate;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTrackingNumbers()
    {
      return $this->trackingNumbers;
    }

    /**
     * @param SearchColumnStringField[] $trackingNumbers
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTrackingNumbers(array $trackingNumbers = null)
    {
      $this->trackingNumbers = $trackingNumbers;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getTranDate()
    {
      return $this->tranDate;
    }

    /**
     * @param SearchColumnDateField[] $tranDate
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTranDate(array $tranDate = null)
    {
      $this->tranDate = $tranDate;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranEstGrossProfit()
    {
      return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $tranEstGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTranEstGrossProfit(array $tranEstGrossProfit = null)
    {
      $this->tranEstGrossProfit = $tranEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTranFxEstGrossProfit()
    {
      return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $tranFxEstGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTranFxEstGrossProfit(array $tranFxEstGrossProfit = null)
    {
      $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param SearchColumnStringField[] $tranId
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTranId(array $tranId = null)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTranIsVsoeBundle()
    {
      return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchColumnBooleanField[] $tranIsVsoeBundle
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTranIsVsoeBundle(array $tranIsVsoeBundle = null)
    {
      $this->tranIsVsoeBundle = $tranIsVsoeBundle;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTransactionDiscount()
    {
      return $this->transactionDiscount;
    }

    /**
     * @param SearchColumnBooleanField[] $transactionDiscount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransactionDiscount(array $transactionDiscount = null)
    {
      $this->transactionDiscount = $transactionDiscount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTransactionLineType()
    {
      return $this->transactionLineType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $transactionLineType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransactionLineType(array $transactionLineType = null)
    {
      $this->transactionLineType = $transactionLineType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTransactionNumber()
    {
      return $this->transactionNumber;
    }

    /**
     * @param SearchColumnStringField[] $transactionNumber
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransactionNumber(array $transactionNumber = null)
    {
      $this->transactionNumber = $transactionNumber;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTransferLocation()
    {
      return $this->transferLocation;
    }

    /**
     * @param SearchColumnSelectField[] $transferLocation
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferLocation(array $transferLocation = null)
    {
      $this->transferLocation = $transferLocation;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTransferOrderItemLine()
    {
      return $this->transferOrderItemLine;
    }

    /**
     * @param SearchColumnStringField[] $transferOrderItemLine
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferOrderItemLine(array $transferOrderItemLine = null)
    {
      $this->transferOrderItemLine = $transferOrderItemLine;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityCommitted()
    {
      return $this->transferOrderQuantityCommitted;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityCommitted
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityCommitted(array $transferOrderQuantityCommitted = null)
    {
      $this->transferOrderQuantityCommitted = $transferOrderQuantityCommitted;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityPacked()
    {
      return $this->transferOrderQuantityPacked;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityPacked
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityPacked(array $transferOrderQuantityPacked = null)
    {
      $this->transferOrderQuantityPacked = $transferOrderQuantityPacked;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityPicked()
    {
      return $this->transferOrderQuantityPicked;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityPicked
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityPicked(array $transferOrderQuantityPicked = null)
    {
      $this->transferOrderQuantityPicked = $transferOrderQuantityPicked;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityReceived()
    {
      return $this->transferOrderQuantityReceived;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityReceived
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityReceived(array $transferOrderQuantityReceived = null)
    {
      $this->transferOrderQuantityReceived = $transferOrderQuantityReceived;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTransferOrderQuantityShipped()
    {
      return $this->transferOrderQuantityShipped;
    }

    /**
     * @param SearchColumnDoubleField[] $transferOrderQuantityShipped
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setTransferOrderQuantityShipped(array $transferOrderQuantityShipped = null)
    {
      $this->transferOrderQuantityShipped = $transferOrderQuantityShipped;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param SearchColumnStringField[] $unit
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setUnit(array $unit = null)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnitCostOverride()
    {
      return $this->unitCostOverride;
    }

    /**
     * @param SearchColumnDoubleField[] $unitCostOverride
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setUnitCostOverride(array $unitCostOverride = null)
    {
      $this->unitCostOverride = $unitCostOverride;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVendType()
    {
      return $this->vendType;
    }

    /**
     * @param SearchColumnSelectField[] $vendType
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setVendType(array $vendType = null)
    {
      $this->vendType = $vendType;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getVisibleToCustomer()
    {
      return $this->visibleToCustomer;
    }

    /**
     * @param SearchColumnBooleanField[] $visibleToCustomer
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setVisibleToCustomer(array $visibleToCustomer = null)
    {
      $this->visibleToCustomer = $visibleToCustomer;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoeAllocation()
    {
      return $this->vsoeAllocation;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoeAllocation
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setVsoeAllocation(array $vsoeAllocation = null)
    {
      $this->vsoeAllocation = $vsoeAllocation;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getVsoeAmount()
    {
      return $this->vsoeAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $vsoeAmount
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setVsoeAmount(array $vsoeAmount = null)
    {
      $this->vsoeAmount = $vsoeAmount;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setVsoePrice(array $vsoePrice = null)
    {
      $this->vsoePrice = $vsoePrice;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getWebSite()
    {
      return $this->webSite;
    }

    /**
     * @param SearchColumnStringField[] $webSite
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setWebSite(array $webSite = null)
    {
      $this->webSite = $webSite;
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
     * @return \Nzolt\NetSuite\TransactionSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
