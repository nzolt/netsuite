<?php

namespace Nzolt\NetSuite;

class TransactionSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $account
     */
    protected $account = null;

    /**
     * @var SearchEnumMultiSelectField $accountType
     */
    protected $accountType = null;

    /**
     * @var SearchDateField $actualShipDate
     */
    protected $actualShipDate = null;

    /**
     * @var SearchDoubleField $altSalesAmount
     */
    protected $altSalesAmount = null;

    /**
     * @var SearchDoubleField $altSalesNetAmount
     */
    protected $altSalesNetAmount = null;

    /**
     * @var SearchDoubleField $amount
     */
    protected $amount = null;

    /**
     * @var SearchDoubleField $amountPaid
     */
    protected $amountPaid = null;

    /**
     * @var SearchDoubleField $amountRemaining
     */
    protected $amountRemaining = null;

    /**
     * @var SearchDoubleField $amountUnbilled
     */
    protected $amountUnbilled = null;

    /**
     * @var SearchMultiSelectField $anyLineItem
     */
    protected $anyLineItem = null;

    /**
     * @var SearchDoubleField $appliedToForeignAmount
     */
    protected $appliedToForeignAmount = null;

    /**
     * @var SearchBooleanField $appliedToIsFxVariance
     */
    protected $appliedToIsFxVariance = null;

    /**
     * @var SearchDoubleField $appliedToLinkAmount
     */
    protected $appliedToLinkAmount = null;

    /**
     * @var SearchEnumMultiSelectField $appliedToLinkType
     */
    protected $appliedToLinkType = null;

    /**
     * @var SearchMultiSelectField $appliedToTransaction
     */
    protected $appliedToTransaction = null;

    /**
     * @var SearchDoubleField $applyingForeignAmount
     */
    protected $applyingForeignAmount = null;

    /**
     * @var SearchBooleanField $applyingIsFxVariance
     */
    protected $applyingIsFxVariance = null;

    /**
     * @var SearchDoubleField $applyingLinkAmount
     */
    protected $applyingLinkAmount = null;

    /**
     * @var SearchEnumMultiSelectField $applyingLinkType
     */
    protected $applyingLinkType = null;

    /**
     * @var SearchMultiSelectField $applyingTransaction
     */
    protected $applyingTransaction = null;

    /**
     * @var SearchEnumMultiSelectField $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var SearchStringField $authCode
     */
    protected $authCode = null;

    /**
     * @var SearchBooleanField $autoCalculateLag
     */
    protected $autoCalculateLag = null;

    /**
     * @var SearchEnumMultiSelectField $avsStreetMatch
     */
    protected $avsStreetMatch = null;

    /**
     * @var SearchEnumMultiSelectField $avsZipMatch
     */
    protected $avsZipMatch = null;

    /**
     * @var SearchBooleanField $billable
     */
    protected $billable = null;

    /**
     * @var SearchStringField $billAddress
     */
    protected $billAddress = null;

    /**
     * @var SearchStringField $billAddressee
     */
    protected $billAddressee = null;

    /**
     * @var SearchStringField $billAttention
     */
    protected $billAttention = null;

    /**
     * @var SearchStringField $billCity
     */
    protected $billCity = null;

    /**
     * @var SearchEnumMultiSelectField $billCountry
     */
    protected $billCountry = null;

    /**
     * @var SearchStringField $billCounty
     */
    protected $billCounty = null;

    /**
     * @var SearchDateField $billedDate
     */
    protected $billedDate = null;

    /**
     * @var SearchMultiSelectField $billingAccount
     */
    protected $billingAccount = null;

    /**
     * @var SearchMultiSelectField $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var SearchBooleanField $billingStatus
     */
    protected $billingStatus = null;

    /**
     * @var SearchMultiSelectField $billingTransaction
     */
    protected $billingTransaction = null;

    /**
     * @var SearchStringField $billPhone
     */
    protected $billPhone = null;

    /**
     * @var SearchStringField $billState
     */
    protected $billState = null;

    /**
     * @var SearchEnumMultiSelectField $billVarianceStatus
     */
    protected $billVarianceStatus = null;

    /**
     * @var SearchStringField $billZip
     */
    protected $billZip = null;

    /**
     * @var SearchStringField $binNumber
     */
    protected $binNumber = null;

    /**
     * @var SearchDoubleField $binNumberQuantity
     */
    protected $binNumberQuantity = null;

    /**
     * @var SearchDoubleField $bomQuantity
     */
    protected $bomQuantity = null;

    /**
     * @var SearchBooleanField $bookSpecificTransaction
     */
    protected $bookSpecificTransaction = null;

    /**
     * @var SearchBooleanField $buildEntireAssembly
     */
    protected $buildEntireAssembly = null;

    /**
     * @var SearchDoubleField $buildVariance
     */
    protected $buildVariance = null;

    /**
     * @var SearchDoubleField $built
     */
    protected $built = null;

    /**
     * @var SearchBooleanField $canHaveStackablePromotions
     */
    protected $canHaveStackablePromotions = null;

    /**
     * @var SearchMultiSelectField $catchUpPeriod
     */
    protected $catchUpPeriod = null;

    /**
     * @var SearchStringField $ccCustomerCode
     */
    protected $ccCustomerCode = null;

    /**
     * @var SearchDateField $ccExpireDate
     */
    protected $ccExpireDate = null;

    /**
     * @var SearchStringField $ccName
     */
    protected $ccName = null;

    /**
     * @var SearchStringField $ccNumber
     */
    protected $ccNumber = null;

    /**
     * @var SearchEnumMultiSelectField $chargeType
     */
    protected $chargeType = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchBooleanField $cleared
     */
    protected $cleared = null;

    /**
     * @var SearchBooleanField $closed
     */
    protected $closed = null;

    /**
     * @var SearchDateField $closeDate
     */
    protected $closeDate = null;

    /**
     * @var SearchBooleanField $cogs
     */
    protected $cogs = null;

    /**
     * @var SearchDateField $commissionEffectiveDate
     */
    protected $commissionEffectiveDate = null;

    /**
     * @var SearchEnumMultiSelectField $commit
     */
    protected $commit = null;

    /**
     * @var SearchDoubleField $componentYield
     */
    protected $componentYield = null;

    /**
     * @var SearchStringField $confirmationNumber
     */
    protected $confirmationNumber = null;

    /**
     * @var SearchLongField $contribution
     */
    protected $contribution = null;

    /**
     * @var SearchDoubleField $costComponentAmount
     */
    protected $costComponentAmount = null;

    /**
     * @var SearchMultiSelectField $costComponentCategory
     */
    protected $costComponentCategory = null;

    /**
     * @var SearchMultiSelectField $costComponentItem
     */
    protected $costComponentItem = null;

    /**
     * @var SearchDoubleField $costComponentQuantity
     */
    protected $costComponentQuantity = null;

    /**
     * @var SearchDoubleField $costComponentStandardCost
     */
    protected $costComponentStandardCost = null;

    /**
     * @var SearchDoubleField $costEstimate
     */
    protected $costEstimate = null;

    /**
     * @var SearchDoubleField $costEstimateRate
     */
    protected $costEstimateRate = null;

    /**
     * @var SearchEnumMultiSelectField $costEstimateType
     */
    protected $costEstimateType = null;

    /**
     * @var SearchMultiSelectField $createdBy
     */
    protected $createdBy = null;

    /**
     * @var SearchMultiSelectField $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var SearchDoubleField $creditAmount
     */
    protected $creditAmount = null;

    /**
     * @var SearchEnumMultiSelectField $cscMatch
     */
    protected $cscMatch = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $customerSubOf
     */
    protected $customerSubOf = null;

    /**
     * @var SearchMultiSelectField $customForm
     */
    protected $customForm = null;

    /**
     * @var SearchBooleanField $customGL
     */
    protected $customGL = null;

    /**
     * @var SearchMultiSelectField $custType
     */
    protected $custType = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchLongField $daysOpen
     */
    protected $daysOpen = null;

    /**
     * @var SearchLongField $daysOverdue
     */
    protected $daysOverdue = null;

    /**
     * @var SearchDoubleField $debitAmount
     */
    protected $debitAmount = null;

    /**
     * @var SearchDoubleField $deferredRevenue
     */
    protected $deferredRevenue = null;

    /**
     * @var SearchBooleanField $deferRevRec
     */
    protected $deferRevRec = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchDateField $depositDate
     */
    protected $depositDate = null;

    /**
     * @var SearchMultiSelectField $depositTransaction
     */
    protected $depositTransaction = null;

    /**
     * @var SearchMultiSelectField $drAccount
     */
    protected $drAccount = null;

    /**
     * @var SearchDateField $dueDate
     */
    protected $dueDate = null;

    /**
     * @var SearchStringField $email
     */
    protected $email = null;

    /**
     * @var SearchMultiSelectField $employee
     */
    protected $employee = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchMultiSelectField $entity
     */
    protected $entity = null;

    /**
     * @var SearchMultiSelectField $entityStatus
     */
    protected $entityStatus = null;

    /**
     * @var SearchDoubleField $estGrossProfit
     */
    protected $estGrossProfit = null;

    /**
     * @var SearchDoubleField $estGrossProfitPct
     */
    protected $estGrossProfitPct = null;

    /**
     * @var SearchDoubleField $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var SearchBooleanField $excludeCommission
     */
    protected $excludeCommission = null;

    /**
     * @var SearchBooleanField $excludeFromRateRequest
     */
    protected $excludeFromRateRequest = null;

    /**
     * @var SearchDateField $expectedCloseDate
     */
    protected $expectedCloseDate = null;

    /**
     * @var SearchDateField $expectedReceiptDate
     */
    protected $expectedReceiptDate = null;

    /**
     * @var SearchMultiSelectField $expenseCategory
     */
    protected $expenseCategory = null;

    /**
     * @var SearchDateField $expenseDate
     */
    protected $expenseDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchBooleanField $finChrg
     */
    protected $finChrg = null;

    /**
     * @var SearchBooleanField $firmed
     */
    protected $firmed = null;

    /**
     * @var SearchEnumMultiSelectField $forecastType
     */
    protected $forecastType = null;

    /**
     * @var SearchMultiSelectField $fulfillingTransaction
     */
    protected $fulfillingTransaction = null;

    /**
     * @var SearchMultiSelectField $fxAccount
     */
    protected $fxAccount = null;

    /**
     * @var SearchDoubleField $fxAmount
     */
    protected $fxAmount = null;

    /**
     * @var SearchDoubleField $fxCostEstimate
     */
    protected $fxCostEstimate = null;

    /**
     * @var SearchDoubleField $fxCostEstimateRate
     */
    protected $fxCostEstimateRate = null;

    /**
     * @var SearchDoubleField $fxEstGrossProfit
     */
    protected $fxEstGrossProfit = null;

    /**
     * @var SearchDoubleField $fxTranCostEstimate
     */
    protected $fxTranCostEstimate = null;

    /**
     * @var SearchDoubleField $fxVsoeAllocation
     */
    protected $fxVsoeAllocation = null;

    /**
     * @var SearchDoubleField $fxVsoeAmount
     */
    protected $fxVsoeAmount = null;

    /**
     * @var SearchDoubleField $fxVsoePrice
     */
    protected $fxVsoePrice = null;

    /**
     * @var SearchBooleanField $gcoAvailabelToCharge
     */
    protected $gcoAvailabelToCharge = null;

    /**
     * @var SearchBooleanField $gcoAvailableToRefund
     */
    protected $gcoAvailableToRefund = null;

    /**
     * @var SearchEnumMultiSelectField $gcoAvsStreetMatch
     */
    protected $gcoAvsStreetMatch = null;

    /**
     * @var SearchEnumMultiSelectField $gcoAvsZipMatch
     */
    protected $gcoAvsZipMatch = null;

    /**
     * @var SearchLongField $gcoBuyerAccountAge
     */
    protected $gcoBuyerAccountAge = null;

    /**
     * @var SearchStringField $gcoBuyerIp
     */
    protected $gcoBuyerIp = null;

    /**
     * @var SearchDoubleField $gcoChargeAmount
     */
    protected $gcoChargeAmount = null;

    /**
     * @var SearchDoubleField $gcoChargebackAmount
     */
    protected $gcoChargebackAmount = null;

    /**
     * @var SearchDoubleField $gcoConfirmedChargedTotal
     */
    protected $gcoConfirmedChargedTotal = null;

    /**
     * @var SearchDoubleField $gcoConfirmedRefundedTotal
     */
    protected $gcoConfirmedRefundedTotal = null;

    /**
     * @var SearchStringField $gcoCreditcardNumber
     */
    protected $gcoCreditcardNumber = null;

    /**
     * @var SearchEnumMultiSelectField $gcoCscMatch
     */
    protected $gcoCscMatch = null;

    /**
     * @var SearchStringField $gcoFinancialState
     */
    protected $gcoFinancialState = null;

    /**
     * @var SearchStringField $gcoFulfillmentState
     */
    protected $gcoFulfillmentState = null;

    /**
     * @var SearchStringField $gcoOrderId
     */
    protected $gcoOrderId = null;

    /**
     * @var SearchDoubleField $gcoOrderTotal
     */
    protected $gcoOrderTotal = null;

    /**
     * @var SearchDoubleField $gcoPromotionAmount
     */
    protected $gcoPromotionAmount = null;

    /**
     * @var SearchStringField $gcoPromotionName
     */
    protected $gcoPromotionName = null;

    /**
     * @var SearchDoubleField $gcoRefundAmount
     */
    protected $gcoRefundAmount = null;

    /**
     * @var SearchDoubleField $gcoShippingTotal
     */
    protected $gcoShippingTotal = null;

    /**
     * @var SearchStringField $gcoStateChangedDetail
     */
    protected $gcoStateChangedDetail = null;

    /**
     * @var SearchStringField $giftCertificate
     */
    protected $giftCertificate = null;

    /**
     * @var SearchDoubleField $grossAmount
     */
    protected $grossAmount = null;

    /**
     * @var SearchBooleanField $includeInForecast
     */
    protected $includeInForecast = null;

    /**
     * @var SearchMultiSelectField $incoterm
     */
    protected $incoterm = null;

    /**
     * @var SearchEnumMultiSelectField $intercoStatus
     */
    protected $intercoStatus = null;

    /**
     * @var SearchMultiSelectField $intercoTransaction
     */
    protected $intercoTransaction = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $inVsoeBundle
     */
    protected $inVsoeBundle = null;

    /**
     * @var SearchBooleanField $isAllocation
     */
    protected $isAllocation = null;

    /**
     * @var SearchBooleanField $isBackflush
     */
    protected $isBackflush = null;

    /**
     * @var SearchBooleanField $isGcoChargeback
     */
    protected $isGcoChargeback = null;

    /**
     * @var SearchBooleanField $isGcoChargeConfirmed
     */
    protected $isGcoChargeConfirmed = null;

    /**
     * @var SearchBooleanField $isGcoPaymentGuaranteed
     */
    protected $isGcoPaymentGuaranteed = null;

    /**
     * @var SearchBooleanField $isGcoRefundConfirmed
     */
    protected $isGcoRefundConfirmed = null;

    /**
     * @var SearchBooleanField $isInsideDelivery
     */
    protected $isInsideDelivery = null;

    /**
     * @var SearchBooleanField $isInsidePickup
     */
    protected $isInsidePickup = null;

    /**
     * @var SearchBooleanField $isIntercompanyAdjustment
     */
    protected $isIntercompanyAdjustment = null;

    /**
     * @var SearchBooleanField $isMultiShipTo
     */
    protected $isMultiShipTo = null;

    /**
     * @var SearchBooleanField $isPayPalMeth
     */
    protected $isPayPalMeth = null;

    /**
     * @var SearchBooleanField $isReversal
     */
    protected $isReversal = null;

    /**
     * @var SearchBooleanField $isRevRecTransaction
     */
    protected $isRevRecTransaction = null;

    /**
     * @var SearchBooleanField $isScrap
     */
    protected $isScrap = null;

    /**
     * @var SearchBooleanField $isShipAddress
     */
    protected $isShipAddress = null;

    /**
     * @var SearchBooleanField $isTransferPriceCosting
     */
    protected $isTransferPriceCosting = null;

    /**
     * @var SearchBooleanField $isVsoeAlloc
     */
    protected $isVsoeAlloc = null;

    /**
     * @var SearchBooleanField $isWip
     */
    protected $isWip = null;

    /**
     * @var SearchMultiSelectField $item
     */
    protected $item = null;

    /**
     * @var SearchEnumMultiSelectField $itemFulfillmentChoice
     */
    protected $itemFulfillmentChoice = null;

    /**
     * @var SearchMultiSelectField $itemRevision
     */
    protected $itemRevision = null;

    /**
     * @var SearchMultiSelectField $itemSubOf
     */
    protected $itemSubOf = null;

    /**
     * @var SearchBooleanField $landedCostPerLine
     */
    protected $landedCostPerLine = null;

    /**
     * @var SearchDateField $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var SearchMultiSelectField $leadSource
     */
    protected $leadSource = null;

    /**
     * @var SearchLongField $lineUniqueKey
     */
    protected $lineUniqueKey = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchBooleanField $locationAutoAssigned
     */
    protected $locationAutoAssigned = null;

    /**
     * @var SearchBooleanField $mainLine
     */
    protected $mainLine = null;

    /**
     * @var SearchMultiSelectField $mainName
     */
    protected $mainName = null;

    /**
     * @var SearchMultiSelectField $manufacturingRouting
     */
    protected $manufacturingRouting = null;

    /**
     * @var SearchBooleanField $matchBillToReceipt
     */
    protected $matchBillToReceipt = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchStringField $memoMain
     */
    protected $memoMain = null;

    /**
     * @var SearchBooleanField $memorized
     */
    protected $memorized = null;

    /**
     * @var SearchStringField $merchantAccount
     */
    protected $merchantAccount = null;

    /**
     * @var SearchStringField $message
     */
    protected $message = null;

    /**
     * @var SearchBooleanField $multiSubsidiary
     */
    protected $multiSubsidiary = null;

    /**
     * @var SearchStringField $nameText
     */
    protected $nameText = null;

    /**
     * @var SearchDoubleField $netAmount
     */
    protected $netAmount = null;

    /**
     * @var SearchMultiSelectField $nextApprover
     */
    protected $nextApprover = null;

    /**
     * @var SearchDateField $nextBillDate
     */
    protected $nextBillDate = null;

    /**
     * @var SearchBooleanField $noAutoAssignLocation
     */
    protected $noAutoAssignLocation = null;

    /**
     * @var SearchBooleanField $nonReimbursable
     */
    protected $nonReimbursable = null;

    /**
     * @var SearchLongField $number
     */
    protected $number = null;

    /**
     * @var SearchDoubleField $oneTimeTotal
     */
    protected $oneTimeTotal = null;

    /**
     * @var SearchMultiSelectField $opportunity
     */
    protected $opportunity = null;

    /**
     * @var SearchDoubleField $orderPriority
     */
    protected $orderPriority = null;

    /**
     * @var SearchTextNumberField $otherRefNum
     */
    protected $otherRefNum = null;

    /**
     * @var SearchTextNumberField $otherRefNumNonDeposit
     */
    protected $otherRefNumNonDeposit = null;

    /**
     * @var SearchMultiSelectField $overheadParentItem
     */
    protected $overheadParentItem = null;

    /**
     * @var SearchLongField $packageCount
     */
    protected $packageCount = null;

    /**
     * @var SearchMultiSelectField $paidTransaction
     */
    protected $paidTransaction = null;

    /**
     * @var SearchLongField $parent
     */
    protected $parent = null;

    /**
     * @var SearchMultiSelectField $partner
     */
    protected $partner = null;

    /**
     * @var SearchLongField $partnerContribution
     */
    protected $partnerContribution = null;

    /**
     * @var SearchMultiSelectField $partnerRole
     */
    protected $partnerRole = null;

    /**
     * @var SearchMultiSelectField $partnerTeamMember
     */
    protected $partnerTeamMember = null;

    /**
     * @var SearchMultiSelectField $payingTransaction
     */
    protected $payingTransaction = null;

    /**
     * @var SearchBooleanField $paymentApproved
     */
    protected $paymentApproved = null;

    /**
     * @var SearchDateField $paymentEventDate
     */
    protected $paymentEventDate = null;

    /**
     * @var SearchEnumMultiSelectField $paymentEventHoldReason
     */
    protected $paymentEventHoldReason = null;

    /**
     * @var SearchBooleanField $paymentEventPurchaseCardUsed
     */
    protected $paymentEventPurchaseCardUsed = null;

    /**
     * @var SearchBooleanField $paymentEventPurchaseDataSent
     */
    protected $paymentEventPurchaseDataSent = null;

    /**
     * @var SearchEnumMultiSelectField $paymentEventResult
     */
    protected $paymentEventResult = null;

    /**
     * @var SearchEnumMultiSelectField $paymentEventType
     */
    protected $paymentEventType = null;

    /**
     * @var SearchBooleanField $paymentHold
     */
    protected $paymentHold = null;

    /**
     * @var SearchMultiSelectField $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var SearchBooleanField $payPalPending
     */
    protected $payPalPending = null;

    /**
     * @var SearchStringField $payPalStatus
     */
    protected $payPalStatus = null;

    /**
     * @var SearchStringField $payPalTranId
     */
    protected $payPalTranId = null;

    /**
     * @var SearchStringField $pnRefNum
     */
    protected $pnRefNum = null;

    /**
     * @var SearchStringField $poAsText
     */
    protected $poAsText = null;

    /**
     * @var SearchBooleanField $posting
     */
    protected $posting = null;

    /**
     * @var RecordRef $postingPeriod
     */
    protected $postingPeriod = null;

    /**
     * @var PostingPeriodDate $postingPeriodRelative
     */
    protected $postingPeriodRelative = null;

    /**
     * @var SearchMultiSelectField $priceLevel
     */
    protected $priceLevel = null;

    /**
     * @var SearchBooleanField $printedPickingTicket
     */
    protected $printedPickingTicket = null;

    /**
     * @var SearchLongField $probability
     */
    protected $probability = null;

    /**
     * @var SearchDoubleField $projectedAmount
     */
    protected $projectedAmount = null;

    /**
     * @var SearchMultiSelectField $projectTask
     */
    protected $projectTask = null;

    /**
     * @var SearchMultiSelectField $promoCode
     */
    protected $promoCode = null;

    /**
     * @var SearchMultiSelectField $purchaseOrder
     */
    protected $purchaseOrder = null;

    /**
     * @var SearchDoubleField $quantity
     */
    protected $quantity = null;

    /**
     * @var SearchDoubleField $quantityBilled
     */
    protected $quantityBilled = null;

    /**
     * @var SearchDoubleField $quantityCommitted
     */
    protected $quantityCommitted = null;

    /**
     * @var SearchDoubleField $quantityPacked
     */
    protected $quantityPacked = null;

    /**
     * @var SearchDoubleField $quantityPicked
     */
    protected $quantityPicked = null;

    /**
     * @var SearchDoubleField $quantityRevCommitted
     */
    protected $quantityRevCommitted = null;

    /**
     * @var SearchDoubleField $quantityShipRecv
     */
    protected $quantityShipRecv = null;

    /**
     * @var SearchDoubleField $recognizedRevenue
     */
    protected $recognizedRevenue = null;

    /**
     * @var SearchStringField $recordType
     */
    protected $recordType = null;

    /**
     * @var SearchDoubleField $recurAnnuallyTotal
     */
    protected $recurAnnuallyTotal = null;

    /**
     * @var SearchDoubleField $recurMonthlyTotal
     */
    protected $recurMonthlyTotal = null;

    /**
     * @var SearchDoubleField $recurQuarterlyTotal
     */
    protected $recurQuarterlyTotal = null;

    /**
     * @var SearchBooleanField $recurringBill
     */
    protected $recurringBill = null;

    /**
     * @var SearchDoubleField $recurWeeklyTotal
     */
    protected $recurWeeklyTotal = null;

    /**
     * @var SearchLongField $refNumber
     */
    protected $refNumber = null;

    /**
     * @var SearchEnumMultiSelectField $revCommitStatus
     */
    protected $revCommitStatus = null;

    /**
     * @var SearchBooleanField $revCommittingStatus
     */
    protected $revCommittingStatus = null;

    /**
     * @var SearchMultiSelectField $revCommittingTransaction
     */
    protected $revCommittingTransaction = null;

    /**
     * @var SearchEnumMultiSelectField $revenueStatus
     */
    protected $revenueStatus = null;

    /**
     * @var SearchDateField $reversalDate
     */
    protected $reversalDate = null;

    /**
     * @var SearchStringField $reversalNumber
     */
    protected $reversalNumber = null;

    /**
     * @var SearchDateField $revRecEndDate
     */
    protected $revRecEndDate = null;

    /**
     * @var SearchBooleanField $revRecOnRevCommitment
     */
    protected $revRecOnRevCommitment = null;

    /**
     * @var SearchDateField $revRecStartDate
     */
    protected $revRecStartDate = null;

    /**
     * @var SearchLongField $revRecTermInMonths
     */
    protected $revRecTermInMonths = null;

    /**
     * @var SearchDateField $salesEffectiveDate
     */
    protected $salesEffectiveDate = null;

    /**
     * @var SearchMultiSelectField $salesOrder
     */
    protected $salesOrder = null;

    /**
     * @var SearchMultiSelectField $salesRep
     */
    protected $salesRep = null;

    /**
     * @var SearchMultiSelectField $salesTeamMember
     */
    protected $salesTeamMember = null;

    /**
     * @var SearchMultiSelectField $salesTeamRole
     */
    protected $salesTeamRole = null;

    /**
     * @var SearchEnumMultiSelectField $schedulingMethod
     */
    protected $schedulingMethod = null;

    /**
     * @var SearchStringField $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var SearchDoubleField $serialNumberCost
     */
    protected $serialNumberCost = null;

    /**
     * @var SearchDoubleField $serialNumberCostAdjustment
     */
    protected $serialNumberCostAdjustment = null;

    /**
     * @var SearchDoubleField $serialNumberQuantity
     */
    protected $serialNumberQuantity = null;

    /**
     * @var SearchStringField $serialNumbers
     */
    protected $serialNumbers = null;

    /**
     * @var SearchStringField $shipAddress
     */
    protected $shipAddress = null;

    /**
     * @var SearchStringField $shipAddressee
     */
    protected $shipAddressee = null;

    /**
     * @var SearchStringField $shipAttention
     */
    protected $shipAttention = null;

    /**
     * @var SearchEnumMultiSelectField $shipCarrier
     */
    protected $shipCarrier = null;

    /**
     * @var SearchStringField $shipCity
     */
    protected $shipCity = null;

    /**
     * @var SearchBooleanField $shipComplete
     */
    protected $shipComplete = null;

    /**
     * @var SearchEnumMultiSelectField $shipCountry
     */
    protected $shipCountry = null;

    /**
     * @var SearchStringField $shipCounty
     */
    protected $shipCounty = null;

    /**
     * @var SearchDateField $shipDate
     */
    protected $shipDate = null;

    /**
     * @var SearchLongField $shipGroup
     */
    protected $shipGroup = null;

    /**
     * @var SearchMultiSelectField $shipMethod
     */
    protected $shipMethod = null;

    /**
     * @var SearchStringField $shipPhone
     */
    protected $shipPhone = null;

    /**
     * @var SearchBooleanField $shipping
     */
    protected $shipping = null;

    /**
     * @var SearchBooleanField $shipRecvStatus
     */
    protected $shipRecvStatus = null;

    /**
     * @var SearchBooleanField $shipRecvStatusLine
     */
    protected $shipRecvStatusLine = null;

    /**
     * @var SearchMultiSelectField $shipState
     */
    protected $shipState = null;

    /**
     * @var SearchMultiSelectField $shipTo
     */
    protected $shipTo = null;

    /**
     * @var SearchStringField $shipZip
     */
    protected $shipZip = null;

    /**
     * @var SearchEnumMultiSelectField $source
     */
    protected $source = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchBooleanField $statistical
     */
    protected $statistical = null;

    /**
     * @var SearchEnumMultiSelectField $status
     */
    protected $status = null;

    /**
     * @var SearchMultiSelectField $subscription
     */
    protected $subscription = null;

    /**
     * @var SearchMultiSelectField $subscriptionLine
     */
    protected $subscriptionLine = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $taxItem
     */
    protected $taxItem = null;

    /**
     * @var SearchBooleanField $taxLine
     */
    protected $taxLine = null;

    /**
     * @var RecordRef $taxPeriod
     */
    protected $taxPeriod = null;

    /**
     * @var PostingPeriodDate $taxPeriodRelative
     */
    protected $taxPeriodRelative = null;

    /**
     * @var SearchDoubleField $taxRate
     */
    protected $taxRate = null;

    /**
     * @var SearchMultiSelectField $terms
     */
    protected $terms = null;

    /**
     * @var SearchEnumMultiSelectField $termsOfSale
     */
    protected $termsOfSale = null;

    /**
     * @var SearchStringField $title
     */
    protected $title = null;

    /**
     * @var SearchBooleanField $toBeEmailed
     */
    protected $toBeEmailed = null;

    /**
     * @var SearchBooleanField $toBePrinted
     */
    protected $toBePrinted = null;

    /**
     * @var SearchMultiSelectField $toSubsidiary
     */
    protected $toSubsidiary = null;

    /**
     * @var SearchDoubleField $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @var SearchStringField $trackingNumbers
     */
    protected $trackingNumbers = null;

    /**
     * @var SearchDoubleField $tranCostEstimate
     */
    protected $tranCostEstimate = null;

    /**
     * @var SearchDateField $tranDate
     */
    protected $tranDate = null;

    /**
     * @var SearchDoubleField $tranEstGrossProfit
     */
    protected $tranEstGrossProfit = null;

    /**
     * @var SearchDoubleField $tranEstGrossProfitPct
     */
    protected $tranEstGrossProfitPct = null;

    /**
     * @var SearchDoubleField $tranFxEstGrossProfit
     */
    protected $tranFxEstGrossProfit = null;

    /**
     * @var SearchStringField $tranId
     */
    protected $tranId = null;

    /**
     * @var SearchBooleanField $tranIsVsoeBundle
     */
    protected $tranIsVsoeBundle = null;

    /**
     * @var SearchBooleanField $transactionDiscount
     */
    protected $transactionDiscount = null;

    /**
     * @var SearchEnumMultiSelectField $transactionLineType
     */
    protected $transactionLineType = null;

    /**
     * @var SearchStringField $transactionNumber
     */
    protected $transactionNumber = null;

    /**
     * @var SearchMultiSelectField $transferLocation
     */
    protected $transferLocation = null;

    /**
     * @var SearchDoubleField $transferOrderQuantityCommitted
     */
    protected $transferOrderQuantityCommitted = null;

    /**
     * @var SearchDoubleField $transferOrderQuantityPacked
     */
    protected $transferOrderQuantityPacked = null;

    /**
     * @var SearchDoubleField $transferOrderQuantityPicked
     */
    protected $transferOrderQuantityPicked = null;

    /**
     * @var SearchDoubleField $transferOrderQuantityReceived
     */
    protected $transferOrderQuantityReceived = null;

    /**
     * @var SearchDoubleField $transferOrderQuantityShipped
     */
    protected $transferOrderQuantityShipped = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchMultiSelectField $unit
     */
    protected $unit = null;

    /**
     * @var SearchDoubleField $unitCostOverride
     */
    protected $unitCostOverride = null;

    /**
     * @var SearchMultiSelectField $unitsType
     */
    protected $unitsType = null;

    /**
     * @var SearchMultiSelectField $vendType
     */
    protected $vendType = null;

    /**
     * @var SearchBooleanField $visibleToCustomer
     */
    protected $visibleToCustomer = null;

    /**
     * @var SearchBooleanField $voided
     */
    protected $voided = null;

    /**
     * @var SearchDoubleField $vsoeAllocation
     */
    protected $vsoeAllocation = null;

    /**
     * @var SearchDoubleField $vsoeAmount
     */
    protected $vsoeAmount = null;

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
     * @var SearchMultiSelectField $webSite
     */
    protected $webSite = null;

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
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param SearchMultiSelectField $account
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param SearchEnumMultiSelectField $accountType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getActualShipDate()
    {
      return $this->actualShipDate;
    }

    /**
     * @param SearchDateField $actualShipDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setActualShipDate($actualShipDate)
    {
      $this->actualShipDate = $actualShipDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesAmount()
    {
      return $this->altSalesAmount;
    }

    /**
     * @param SearchDoubleField $altSalesAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAltSalesAmount($altSalesAmount)
    {
      $this->altSalesAmount = $altSalesAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAltSalesNetAmount()
    {
      return $this->altSalesNetAmount;
    }

    /**
     * @param SearchDoubleField $altSalesNetAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAltSalesNetAmount($altSalesNetAmount)
    {
      $this->altSalesNetAmount = $altSalesNetAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param SearchDoubleField $amount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountPaid()
    {
      return $this->amountPaid;
    }

    /**
     * @param SearchDoubleField $amountPaid
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAmountPaid($amountPaid)
    {
      $this->amountPaid = $amountPaid;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountRemaining()
    {
      return $this->amountRemaining;
    }

    /**
     * @param SearchDoubleField $amountRemaining
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAmountRemaining($amountRemaining)
    {
      $this->amountRemaining = $amountRemaining;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountUnbilled()
    {
      return $this->amountUnbilled;
    }

    /**
     * @param SearchDoubleField $amountUnbilled
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAmountUnbilled($amountUnbilled)
    {
      $this->amountUnbilled = $amountUnbilled;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAnyLineItem()
    {
      return $this->anyLineItem;
    }

    /**
     * @param SearchMultiSelectField $anyLineItem
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAnyLineItem($anyLineItem)
    {
      $this->anyLineItem = $anyLineItem;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAppliedToForeignAmount()
    {
      return $this->appliedToForeignAmount;
    }

    /**
     * @param SearchDoubleField $appliedToForeignAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAppliedToForeignAmount($appliedToForeignAmount)
    {
      $this->appliedToForeignAmount = $appliedToForeignAmount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAppliedToIsFxVariance()
    {
      return $this->appliedToIsFxVariance;
    }

    /**
     * @param SearchBooleanField $appliedToIsFxVariance
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAppliedToIsFxVariance($appliedToIsFxVariance)
    {
      $this->appliedToIsFxVariance = $appliedToIsFxVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAppliedToLinkAmount()
    {
      return $this->appliedToLinkAmount;
    }

    /**
     * @param SearchDoubleField $appliedToLinkAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAppliedToLinkAmount($appliedToLinkAmount)
    {
      $this->appliedToLinkAmount = $appliedToLinkAmount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAppliedToLinkType()
    {
      return $this->appliedToLinkType;
    }

    /**
     * @param SearchEnumMultiSelectField $appliedToLinkType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAppliedToLinkType($appliedToLinkType)
    {
      $this->appliedToLinkType = $appliedToLinkType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAppliedToTransaction()
    {
      return $this->appliedToTransaction;
    }

    /**
     * @param SearchMultiSelectField $appliedToTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAppliedToTransaction($appliedToTransaction)
    {
      $this->appliedToTransaction = $appliedToTransaction;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getApplyingForeignAmount()
    {
      return $this->applyingForeignAmount;
    }

    /**
     * @param SearchDoubleField $applyingForeignAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setApplyingForeignAmount($applyingForeignAmount)
    {
      $this->applyingForeignAmount = $applyingForeignAmount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApplyingIsFxVariance()
    {
      return $this->applyingIsFxVariance;
    }

    /**
     * @param SearchBooleanField $applyingIsFxVariance
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setApplyingIsFxVariance($applyingIsFxVariance)
    {
      $this->applyingIsFxVariance = $applyingIsFxVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getApplyingLinkAmount()
    {
      return $this->applyingLinkAmount;
    }

    /**
     * @param SearchDoubleField $applyingLinkAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setApplyingLinkAmount($applyingLinkAmount)
    {
      $this->applyingLinkAmount = $applyingLinkAmount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApplyingLinkType()
    {
      return $this->applyingLinkType;
    }

    /**
     * @param SearchEnumMultiSelectField $applyingLinkType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setApplyingLinkType($applyingLinkType)
    {
      $this->applyingLinkType = $applyingLinkType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getApplyingTransaction()
    {
      return $this->applyingTransaction;
    }

    /**
     * @param SearchMultiSelectField $applyingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setApplyingTransaction($applyingTransaction)
    {
      $this->applyingTransaction = $applyingTransaction;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $approvalStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAuthCode()
    {
      return $this->authCode;
    }

    /**
     * @param SearchStringField $authCode
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAuthCode($authCode)
    {
      $this->authCode = $authCode;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAutoCalculateLag()
    {
      return $this->autoCalculateLag;
    }

    /**
     * @param SearchBooleanField $autoCalculateLag
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAutoCalculateLag($autoCalculateLag)
    {
      $this->autoCalculateLag = $autoCalculateLag;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAvsStreetMatch()
    {
      return $this->avsStreetMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $avsStreetMatch
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAvsStreetMatch($avsStreetMatch)
    {
      $this->avsStreetMatch = $avsStreetMatch;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAvsZipMatch()
    {
      return $this->avsZipMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $avsZipMatch
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setAvsZipMatch($avsZipMatch)
    {
      $this->avsZipMatch = $avsZipMatch;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillable()
    {
      return $this->billable;
    }

    /**
     * @param SearchBooleanField $billable
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillable($billable)
    {
      $this->billable = $billable;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAddress()
    {
      return $this->billAddress;
    }

    /**
     * @param SearchStringField $billAddress
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillAddress($billAddress)
    {
      $this->billAddress = $billAddress;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAddressee()
    {
      return $this->billAddressee;
    }

    /**
     * @param SearchStringField $billAddressee
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillAddressee($billAddressee)
    {
      $this->billAddressee = $billAddressee;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAttention()
    {
      return $this->billAttention;
    }

    /**
     * @param SearchStringField $billAttention
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillAttention($billAttention)
    {
      $this->billAttention = $billAttention;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillCity()
    {
      return $this->billCity;
    }

    /**
     * @param SearchStringField $billCity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillCity($billCity)
    {
      $this->billCity = $billCity;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBillCountry()
    {
      return $this->billCountry;
    }

    /**
     * @param SearchEnumMultiSelectField $billCountry
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillCountry($billCountry)
    {
      $this->billCountry = $billCountry;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillCounty()
    {
      return $this->billCounty;
    }

    /**
     * @param SearchStringField $billCounty
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillCounty($billCounty)
    {
      $this->billCounty = $billCounty;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBilledDate()
    {
      return $this->billedDate;
    }

    /**
     * @param SearchDateField $billedDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBilledDate($billedDate)
    {
      $this->billedDate = $billedDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingAccount()
    {
      return $this->billingAccount;
    }

    /**
     * @param SearchMultiSelectField $billingAccount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillingAccount($billingAccount)
    {
      $this->billingAccount = $billingAccount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param SearchMultiSelectField $billingSchedule
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBillingStatus()
    {
      return $this->billingStatus;
    }

    /**
     * @param SearchBooleanField $billingStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillingStatus($billingStatus)
    {
      $this->billingStatus = $billingStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingTransaction()
    {
      return $this->billingTransaction;
    }

    /**
     * @param SearchMultiSelectField $billingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillingTransaction($billingTransaction)
    {
      $this->billingTransaction = $billingTransaction;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillPhone()
    {
      return $this->billPhone;
    }

    /**
     * @param SearchStringField $billPhone
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillPhone($billPhone)
    {
      $this->billPhone = $billPhone;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillState()
    {
      return $this->billState;
    }

    /**
     * @param SearchStringField $billState
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillState($billState)
    {
      $this->billState = $billState;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBillVarianceStatus()
    {
      return $this->billVarianceStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $billVarianceStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillVarianceStatus($billVarianceStatus)
    {
      $this->billVarianceStatus = $billVarianceStatus;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillZip()
    {
      return $this->billZip;
    }

    /**
     * @param SearchStringField $billZip
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBillZip($billZip)
    {
      $this->billZip = $billZip;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBinNumber($binNumber)
    {
      $this->binNumber = $binNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBinNumberQuantity()
    {
      return $this->binNumberQuantity;
    }

    /**
     * @param SearchDoubleField $binNumberQuantity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBinNumberQuantity($binNumberQuantity)
    {
      $this->binNumberQuantity = $binNumberQuantity;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBomQuantity($bomQuantity)
    {
      $this->bomQuantity = $bomQuantity;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getBookSpecificTransaction()
    {
      return $this->bookSpecificTransaction;
    }

    /**
     * @param SearchBooleanField $bookSpecificTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBookSpecificTransaction($bookSpecificTransaction)
    {
      $this->bookSpecificTransaction = $bookSpecificTransaction;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBuildEntireAssembly($buildEntireAssembly)
    {
      $this->buildEntireAssembly = $buildEntireAssembly;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuildVariance()
    {
      return $this->buildVariance;
    }

    /**
     * @param SearchDoubleField $buildVariance
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBuildVariance($buildVariance)
    {
      $this->buildVariance = $buildVariance;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBuilt()
    {
      return $this->built;
    }

    /**
     * @param SearchDoubleField $built
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setBuilt($built)
    {
      $this->built = $built;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCanHaveStackablePromotions()
    {
      return $this->canHaveStackablePromotions;
    }

    /**
     * @param SearchBooleanField $canHaveStackablePromotions
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCanHaveStackablePromotions($canHaveStackablePromotions)
    {
      $this->canHaveStackablePromotions = $canHaveStackablePromotions;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCatchUpPeriod()
    {
      return $this->catchUpPeriod;
    }

    /**
     * @param SearchMultiSelectField $catchUpPeriod
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCatchUpPeriod($catchUpPeriod)
    {
      $this->catchUpPeriod = $catchUpPeriod;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcCustomerCode()
    {
      return $this->ccCustomerCode;
    }

    /**
     * @param SearchStringField $ccCustomerCode
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCcCustomerCode($ccCustomerCode)
    {
      $this->ccCustomerCode = $ccCustomerCode;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCcExpireDate()
    {
      return $this->ccExpireDate;
    }

    /**
     * @param SearchDateField $ccExpireDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCcExpireDate($ccExpireDate)
    {
      $this->ccExpireDate = $ccExpireDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcName()
    {
      return $this->ccName;
    }

    /**
     * @param SearchStringField $ccName
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCcName($ccName)
    {
      $this->ccName = $ccName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCcNumber()
    {
      return $this->ccNumber;
    }

    /**
     * @param SearchStringField $ccNumber
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCcNumber($ccNumber)
    {
      $this->ccNumber = $ccNumber;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getChargeType()
    {
      return $this->chargeType;
    }

    /**
     * @param SearchEnumMultiSelectField $chargeType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setChargeType($chargeType)
    {
      $this->chargeType = $chargeType;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCleared()
    {
      return $this->cleared;
    }

    /**
     * @param SearchBooleanField $cleared
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCleared($cleared)
    {
      $this->cleared = $cleared;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param SearchBooleanField $closed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setClosed($closed)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCloseDate()
    {
      return $this->closeDate;
    }

    /**
     * @param SearchDateField $closeDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCloseDate($closeDate)
    {
      $this->closeDate = $closeDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCogs()
    {
      return $this->cogs;
    }

    /**
     * @param SearchBooleanField $cogs
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCogs($cogs)
    {
      $this->cogs = $cogs;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCommissionEffectiveDate()
    {
      return $this->commissionEffectiveDate;
    }

    /**
     * @param SearchDateField $commissionEffectiveDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCommissionEffectiveDate($commissionEffectiveDate)
    {
      $this->commissionEffectiveDate = $commissionEffectiveDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCommit()
    {
      return $this->commit;
    }

    /**
     * @param SearchEnumMultiSelectField $commit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCommit($commit)
    {
      $this->commit = $commit;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setComponentYield($componentYield)
    {
      $this->componentYield = $componentYield;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getConfirmationNumber()
    {
      return $this->confirmationNumber;
    }

    /**
     * @param SearchStringField $confirmationNumber
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setConfirmationNumber($confirmationNumber)
    {
      $this->confirmationNumber = $confirmationNumber;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getContribution()
    {
      return $this->contribution;
    }

    /**
     * @param SearchLongField $contribution
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setContribution($contribution)
    {
      $this->contribution = $contribution;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostComponentAmount()
    {
      return $this->costComponentAmount;
    }

    /**
     * @param SearchDoubleField $costComponentAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostComponentAmount($costComponentAmount)
    {
      $this->costComponentAmount = $costComponentAmount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCostComponentCategory()
    {
      return $this->costComponentCategory;
    }

    /**
     * @param SearchMultiSelectField $costComponentCategory
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostComponentCategory($costComponentCategory)
    {
      $this->costComponentCategory = $costComponentCategory;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCostComponentItem()
    {
      return $this->costComponentItem;
    }

    /**
     * @param SearchMultiSelectField $costComponentItem
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostComponentItem($costComponentItem)
    {
      $this->costComponentItem = $costComponentItem;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostComponentQuantity()
    {
      return $this->costComponentQuantity;
    }

    /**
     * @param SearchDoubleField $costComponentQuantity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostComponentQuantity($costComponentQuantity)
    {
      $this->costComponentQuantity = $costComponentQuantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostComponentStandardCost()
    {
      return $this->costComponentStandardCost;
    }

    /**
     * @param SearchDoubleField $costComponentStandardCost
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostComponentStandardCost($costComponentStandardCost)
    {
      $this->costComponentStandardCost = $costComponentStandardCost;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostEstimate($costEstimate)
    {
      $this->costEstimate = $costEstimate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCostEstimateRate()
    {
      return $this->costEstimateRate;
    }

    /**
     * @param SearchDoubleField $costEstimateRate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostEstimateRate($costEstimateRate)
    {
      $this->costEstimateRate = $costEstimateRate;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCostEstimateType($costEstimateType)
    {
      $this->costEstimateType = $costEstimateType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param SearchMultiSelectField $createdBy
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param SearchMultiSelectField $createdFrom
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getCreditAmount()
    {
      return $this->creditAmount;
    }

    /**
     * @param SearchDoubleField $creditAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCreditAmount($creditAmount)
    {
      $this->creditAmount = $creditAmount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCscMatch()
    {
      return $this->cscMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $cscMatch
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCscMatch($cscMatch)
    {
      $this->cscMatch = $cscMatch;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomerSubOf()
    {
      return $this->customerSubOf;
    }

    /**
     * @param SearchMultiSelectField $customerSubOf
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCustomerSubOf($customerSubOf)
    {
      $this->customerSubOf = $customerSubOf;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param SearchMultiSelectField $customForm
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCustomGL()
    {
      return $this->customGL;
    }

    /**
     * @param SearchBooleanField $customGL
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCustomGL($customGL)
    {
      $this->customGL = $customGL;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustType()
    {
      return $this->custType;
    }

    /**
     * @param SearchMultiSelectField $custType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCustType($custType)
    {
      $this->custType = $custType;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOpen()
    {
      return $this->daysOpen;
    }

    /**
     * @param SearchLongField $daysOpen
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDaysOpen($daysOpen)
    {
      $this->daysOpen = $daysOpen;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysOverdue()
    {
      return $this->daysOverdue;
    }

    /**
     * @param SearchLongField $daysOverdue
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDaysOverdue($daysOverdue)
    {
      $this->daysOverdue = $daysOverdue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDebitAmount()
    {
      return $this->debitAmount;
    }

    /**
     * @param SearchDoubleField $debitAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDebitAmount($debitAmount)
    {
      $this->debitAmount = $debitAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDeferredRevenue()
    {
      return $this->deferredRevenue;
    }

    /**
     * @param SearchDoubleField $deferredRevenue
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDeferredRevenue($deferredRevenue)
    {
      $this->deferredRevenue = $deferredRevenue;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDeferRevRec($deferRevRec)
    {
      $this->deferRevRec = $deferRevRec;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDepositDate()
    {
      return $this->depositDate;
    }

    /**
     * @param SearchDateField $depositDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDepositDate($depositDate)
    {
      $this->depositDate = $depositDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepositTransaction()
    {
      return $this->depositTransaction;
    }

    /**
     * @param SearchMultiSelectField $depositTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDepositTransaction($depositTransaction)
    {
      $this->depositTransaction = $depositTransaction;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDrAccount()
    {
      return $this->drAccount;
    }

    /**
     * @param SearchMultiSelectField $drAccount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDrAccount($drAccount)
    {
      $this->drAccount = $drAccount;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDueDate()
    {
      return $this->dueDate;
    }

    /**
     * @param SearchDateField $dueDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setDueDate($dueDate)
    {
      $this->dueDate = $dueDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param SearchStringField $email
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployee()
    {
      return $this->employee;
    }

    /**
     * @param SearchMultiSelectField $employee
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEmployee($employee)
    {
      $this->employee = $employee;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param SearchMultiSelectField $entity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEntityStatus()
    {
      return $this->entityStatus;
    }

    /**
     * @param SearchMultiSelectField $entityStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEntityStatus($entityStatus)
    {
      $this->entityStatus = $entityStatus;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstGrossProfit()
    {
      return $this->estGrossProfit;
    }

    /**
     * @param SearchDoubleField $estGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEstGrossProfit($estGrossProfit)
    {
      $this->estGrossProfit = $estGrossProfit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstGrossProfitPct()
    {
      return $this->estGrossProfitPct;
    }

    /**
     * @param SearchDoubleField $estGrossProfitPct
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setEstGrossProfitPct($estGrossProfitPct)
    {
      $this->estGrossProfitPct = $estGrossProfitPct;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param SearchDoubleField $exchangeRate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeCommission()
    {
      return $this->excludeCommission;
    }

    /**
     * @param SearchBooleanField $excludeCommission
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExcludeCommission($excludeCommission)
    {
      $this->excludeCommission = $excludeCommission;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getExcludeFromRateRequest()
    {
      return $this->excludeFromRateRequest;
    }

    /**
     * @param SearchBooleanField $excludeFromRateRequest
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExcludeFromRateRequest($excludeFromRateRequest)
    {
      $this->excludeFromRateRequest = $excludeFromRateRequest;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedCloseDate()
    {
      return $this->expectedCloseDate;
    }

    /**
     * @param SearchDateField $expectedCloseDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExpectedCloseDate($expectedCloseDate)
    {
      $this->expectedCloseDate = $expectedCloseDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpectedReceiptDate()
    {
      return $this->expectedReceiptDate;
    }

    /**
     * @param SearchDateField $expectedReceiptDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExpectedReceiptDate($expectedReceiptDate)
    {
      $this->expectedReceiptDate = $expectedReceiptDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseCategory()
    {
      return $this->expenseCategory;
    }

    /**
     * @param SearchMultiSelectField $expenseCategory
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExpenseCategory($expenseCategory)
    {
      $this->expenseCategory = $expenseCategory;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpenseDate()
    {
      return $this->expenseDate;
    }

    /**
     * @param SearchDateField $expenseDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExpenseDate($expenseDate)
    {
      $this->expenseDate = $expenseDate;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFinChrg()
    {
      return $this->finChrg;
    }

    /**
     * @param SearchBooleanField $finChrg
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFinChrg($finChrg)
    {
      $this->finChrg = $finChrg;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getFirmed()
    {
      return $this->firmed;
    }

    /**
     * @param SearchBooleanField $firmed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFirmed($firmed)
    {
      $this->firmed = $firmed;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getForecastType()
    {
      return $this->forecastType;
    }

    /**
     * @param SearchEnumMultiSelectField $forecastType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setForecastType($forecastType)
    {
      $this->forecastType = $forecastType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFulfillingTransaction()
    {
      return $this->fulfillingTransaction;
    }

    /**
     * @param SearchMultiSelectField $fulfillingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFulfillingTransaction($fulfillingTransaction)
    {
      $this->fulfillingTransaction = $fulfillingTransaction;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFxAccount()
    {
      return $this->fxAccount;
    }

    /**
     * @param SearchMultiSelectField $fxAccount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxAccount($fxAccount)
    {
      $this->fxAccount = $fxAccount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxAmount()
    {
      return $this->fxAmount;
    }

    /**
     * @param SearchDoubleField $fxAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxAmount($fxAmount)
    {
      $this->fxAmount = $fxAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxCostEstimate()
    {
      return $this->fxCostEstimate;
    }

    /**
     * @param SearchDoubleField $fxCostEstimate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxCostEstimate($fxCostEstimate)
    {
      $this->fxCostEstimate = $fxCostEstimate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxCostEstimateRate()
    {
      return $this->fxCostEstimateRate;
    }

    /**
     * @param SearchDoubleField $fxCostEstimateRate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxCostEstimateRate($fxCostEstimateRate)
    {
      $this->fxCostEstimateRate = $fxCostEstimateRate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxEstGrossProfit()
    {
      return $this->fxEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $fxEstGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxEstGrossProfit($fxEstGrossProfit)
    {
      $this->fxEstGrossProfit = $fxEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxTranCostEstimate()
    {
      return $this->fxTranCostEstimate;
    }

    /**
     * @param SearchDoubleField $fxTranCostEstimate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxTranCostEstimate($fxTranCostEstimate)
    {
      $this->fxTranCostEstimate = $fxTranCostEstimate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxVsoeAllocation()
    {
      return $this->fxVsoeAllocation;
    }

    /**
     * @param SearchDoubleField $fxVsoeAllocation
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxVsoeAllocation($fxVsoeAllocation)
    {
      $this->fxVsoeAllocation = $fxVsoeAllocation;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxVsoeAmount()
    {
      return $this->fxVsoeAmount;
    }

    /**
     * @param SearchDoubleField $fxVsoeAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxVsoeAmount($fxVsoeAmount)
    {
      $this->fxVsoeAmount = $fxVsoeAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getFxVsoePrice()
    {
      return $this->fxVsoePrice;
    }

    /**
     * @param SearchDoubleField $fxVsoePrice
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setFxVsoePrice($fxVsoePrice)
    {
      $this->fxVsoePrice = $fxVsoePrice;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGcoAvailabelToCharge()
    {
      return $this->gcoAvailabelToCharge;
    }

    /**
     * @param SearchBooleanField $gcoAvailabelToCharge
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoAvailabelToCharge($gcoAvailabelToCharge)
    {
      $this->gcoAvailabelToCharge = $gcoAvailabelToCharge;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGcoAvailableToRefund()
    {
      return $this->gcoAvailableToRefund;
    }

    /**
     * @param SearchBooleanField $gcoAvailableToRefund
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoAvailableToRefund($gcoAvailableToRefund)
    {
      $this->gcoAvailableToRefund = $gcoAvailableToRefund;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGcoAvsStreetMatch()
    {
      return $this->gcoAvsStreetMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $gcoAvsStreetMatch
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoAvsStreetMatch($gcoAvsStreetMatch)
    {
      $this->gcoAvsStreetMatch = $gcoAvsStreetMatch;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGcoAvsZipMatch()
    {
      return $this->gcoAvsZipMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $gcoAvsZipMatch
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoAvsZipMatch($gcoAvsZipMatch)
    {
      $this->gcoAvsZipMatch = $gcoAvsZipMatch;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getGcoBuyerAccountAge()
    {
      return $this->gcoBuyerAccountAge;
    }

    /**
     * @param SearchLongField $gcoBuyerAccountAge
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoBuyerAccountAge($gcoBuyerAccountAge)
    {
      $this->gcoBuyerAccountAge = $gcoBuyerAccountAge;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoBuyerIp()
    {
      return $this->gcoBuyerIp;
    }

    /**
     * @param SearchStringField $gcoBuyerIp
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoBuyerIp($gcoBuyerIp)
    {
      $this->gcoBuyerIp = $gcoBuyerIp;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoChargeAmount()
    {
      return $this->gcoChargeAmount;
    }

    /**
     * @param SearchDoubleField $gcoChargeAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoChargeAmount($gcoChargeAmount)
    {
      $this->gcoChargeAmount = $gcoChargeAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoChargebackAmount()
    {
      return $this->gcoChargebackAmount;
    }

    /**
     * @param SearchDoubleField $gcoChargebackAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoChargebackAmount($gcoChargebackAmount)
    {
      $this->gcoChargebackAmount = $gcoChargebackAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoConfirmedChargedTotal()
    {
      return $this->gcoConfirmedChargedTotal;
    }

    /**
     * @param SearchDoubleField $gcoConfirmedChargedTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoConfirmedChargedTotal($gcoConfirmedChargedTotal)
    {
      $this->gcoConfirmedChargedTotal = $gcoConfirmedChargedTotal;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoConfirmedRefundedTotal()
    {
      return $this->gcoConfirmedRefundedTotal;
    }

    /**
     * @param SearchDoubleField $gcoConfirmedRefundedTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoConfirmedRefundedTotal($gcoConfirmedRefundedTotal)
    {
      $this->gcoConfirmedRefundedTotal = $gcoConfirmedRefundedTotal;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoCreditcardNumber()
    {
      return $this->gcoCreditcardNumber;
    }

    /**
     * @param SearchStringField $gcoCreditcardNumber
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoCreditcardNumber($gcoCreditcardNumber)
    {
      $this->gcoCreditcardNumber = $gcoCreditcardNumber;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGcoCscMatch()
    {
      return $this->gcoCscMatch;
    }

    /**
     * @param SearchEnumMultiSelectField $gcoCscMatch
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoCscMatch($gcoCscMatch)
    {
      $this->gcoCscMatch = $gcoCscMatch;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoFinancialState()
    {
      return $this->gcoFinancialState;
    }

    /**
     * @param SearchStringField $gcoFinancialState
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoFinancialState($gcoFinancialState)
    {
      $this->gcoFinancialState = $gcoFinancialState;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoFulfillmentState()
    {
      return $this->gcoFulfillmentState;
    }

    /**
     * @param SearchStringField $gcoFulfillmentState
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoFulfillmentState($gcoFulfillmentState)
    {
      $this->gcoFulfillmentState = $gcoFulfillmentState;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoOrderId()
    {
      return $this->gcoOrderId;
    }

    /**
     * @param SearchStringField $gcoOrderId
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoOrderId($gcoOrderId)
    {
      $this->gcoOrderId = $gcoOrderId;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoOrderTotal()
    {
      return $this->gcoOrderTotal;
    }

    /**
     * @param SearchDoubleField $gcoOrderTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoOrderTotal($gcoOrderTotal)
    {
      $this->gcoOrderTotal = $gcoOrderTotal;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoPromotionAmount()
    {
      return $this->gcoPromotionAmount;
    }

    /**
     * @param SearchDoubleField $gcoPromotionAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoPromotionAmount($gcoPromotionAmount)
    {
      $this->gcoPromotionAmount = $gcoPromotionAmount;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoPromotionName()
    {
      return $this->gcoPromotionName;
    }

    /**
     * @param SearchStringField $gcoPromotionName
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoPromotionName($gcoPromotionName)
    {
      $this->gcoPromotionName = $gcoPromotionName;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoRefundAmount()
    {
      return $this->gcoRefundAmount;
    }

    /**
     * @param SearchDoubleField $gcoRefundAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoRefundAmount($gcoRefundAmount)
    {
      $this->gcoRefundAmount = $gcoRefundAmount;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGcoShippingTotal()
    {
      return $this->gcoShippingTotal;
    }

    /**
     * @param SearchDoubleField $gcoShippingTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoShippingTotal($gcoShippingTotal)
    {
      $this->gcoShippingTotal = $gcoShippingTotal;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGcoStateChangedDetail()
    {
      return $this->gcoStateChangedDetail;
    }

    /**
     * @param SearchStringField $gcoStateChangedDetail
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGcoStateChangedDetail($gcoStateChangedDetail)
    {
      $this->gcoStateChangedDetail = $gcoStateChangedDetail;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertificate()
    {
      return $this->giftCertificate;
    }

    /**
     * @param SearchStringField $giftCertificate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGiftCertificate($giftCertificate)
    {
      $this->giftCertificate = $giftCertificate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getGrossAmount()
    {
      return $this->grossAmount;
    }

    /**
     * @param SearchDoubleField $grossAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setGrossAmount($grossAmount)
    {
      $this->grossAmount = $grossAmount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeInForecast()
    {
      return $this->includeInForecast;
    }

    /**
     * @param SearchBooleanField $includeInForecast
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIncludeInForecast($includeInForecast)
    {
      $this->includeInForecast = $includeInForecast;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncoterm()
    {
      return $this->incoterm;
    }

    /**
     * @param SearchMultiSelectField $incoterm
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIncoterm($incoterm)
    {
      $this->incoterm = $incoterm;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getIntercoStatus()
    {
      return $this->intercoStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $intercoStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIntercoStatus($intercoStatus)
    {
      $this->intercoStatus = $intercoStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIntercoTransaction()
    {
      return $this->intercoTransaction;
    }

    /**
     * @param SearchMultiSelectField $intercoTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIntercoTransaction($intercoTransaction)
    {
      $this->intercoTransaction = $intercoTransaction;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInVsoeBundle()
    {
      return $this->inVsoeBundle;
    }

    /**
     * @param SearchBooleanField $inVsoeBundle
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setInVsoeBundle($inVsoeBundle)
    {
      $this->inVsoeBundle = $inVsoeBundle;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAllocation()
    {
      return $this->isAllocation;
    }

    /**
     * @param SearchBooleanField $isAllocation
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsAllocation($isAllocation)
    {
      $this->isAllocation = $isAllocation;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsBackflush()
    {
      return $this->isBackflush;
    }

    /**
     * @param SearchBooleanField $isBackflush
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsBackflush($isBackflush)
    {
      $this->isBackflush = $isBackflush;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoChargeback()
    {
      return $this->isGcoChargeback;
    }

    /**
     * @param SearchBooleanField $isGcoChargeback
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsGcoChargeback($isGcoChargeback)
    {
      $this->isGcoChargeback = $isGcoChargeback;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoChargeConfirmed()
    {
      return $this->isGcoChargeConfirmed;
    }

    /**
     * @param SearchBooleanField $isGcoChargeConfirmed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsGcoChargeConfirmed($isGcoChargeConfirmed)
    {
      $this->isGcoChargeConfirmed = $isGcoChargeConfirmed;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoPaymentGuaranteed()
    {
      return $this->isGcoPaymentGuaranteed;
    }

    /**
     * @param SearchBooleanField $isGcoPaymentGuaranteed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsGcoPaymentGuaranteed($isGcoPaymentGuaranteed)
    {
      $this->isGcoPaymentGuaranteed = $isGcoPaymentGuaranteed;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsGcoRefundConfirmed()
    {
      return $this->isGcoRefundConfirmed;
    }

    /**
     * @param SearchBooleanField $isGcoRefundConfirmed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsGcoRefundConfirmed($isGcoRefundConfirmed)
    {
      $this->isGcoRefundConfirmed = $isGcoRefundConfirmed;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInsideDelivery()
    {
      return $this->isInsideDelivery;
    }

    /**
     * @param SearchBooleanField $isInsideDelivery
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsInsideDelivery($isInsideDelivery)
    {
      $this->isInsideDelivery = $isInsideDelivery;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInsidePickup()
    {
      return $this->isInsidePickup;
    }

    /**
     * @param SearchBooleanField $isInsidePickup
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsInsidePickup($isInsidePickup)
    {
      $this->isInsidePickup = $isInsidePickup;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsIntercompanyAdjustment()
    {
      return $this->isIntercompanyAdjustment;
    }

    /**
     * @param SearchBooleanField $isIntercompanyAdjustment
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsIntercompanyAdjustment($isIntercompanyAdjustment)
    {
      $this->isIntercompanyAdjustment = $isIntercompanyAdjustment;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsMultiShipTo()
    {
      return $this->isMultiShipTo;
    }

    /**
     * @param SearchBooleanField $isMultiShipTo
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsMultiShipTo($isMultiShipTo)
    {
      $this->isMultiShipTo = $isMultiShipTo;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPayPalMeth()
    {
      return $this->isPayPalMeth;
    }

    /**
     * @param SearchBooleanField $isPayPalMeth
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsPayPalMeth($isPayPalMeth)
    {
      $this->isPayPalMeth = $isPayPalMeth;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsReversal()
    {
      return $this->isReversal;
    }

    /**
     * @param SearchBooleanField $isReversal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsReversal($isReversal)
    {
      $this->isReversal = $isReversal;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsRevRecTransaction()
    {
      return $this->isRevRecTransaction;
    }

    /**
     * @param SearchBooleanField $isRevRecTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsRevRecTransaction($isRevRecTransaction)
    {
      $this->isRevRecTransaction = $isRevRecTransaction;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsScrap()
    {
      return $this->isScrap;
    }

    /**
     * @param SearchBooleanField $isScrap
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsScrap($isScrap)
    {
      $this->isScrap = $isScrap;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsShipAddress()
    {
      return $this->isShipAddress;
    }

    /**
     * @param SearchBooleanField $isShipAddress
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsShipAddress($isShipAddress)
    {
      $this->isShipAddress = $isShipAddress;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTransferPriceCosting()
    {
      return $this->isTransferPriceCosting;
    }

    /**
     * @param SearchBooleanField $isTransferPriceCosting
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsTransferPriceCosting($isTransferPriceCosting)
    {
      $this->isTransferPriceCosting = $isTransferPriceCosting;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsVsoeAlloc()
    {
      return $this->isVsoeAlloc;
    }

    /**
     * @param SearchBooleanField $isVsoeAlloc
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsVsoeAlloc($isVsoeAlloc)
    {
      $this->isVsoeAlloc = $isVsoeAlloc;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setIsWip($isWip)
    {
      $this->isWip = $isWip;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setItem($item)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemFulfillmentChoice()
    {
      return $this->itemFulfillmentChoice;
    }

    /**
     * @param SearchEnumMultiSelectField $itemFulfillmentChoice
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setItemFulfillmentChoice($itemFulfillmentChoice)
    {
      $this->itemFulfillmentChoice = $itemFulfillmentChoice;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemRevision()
    {
      return $this->itemRevision;
    }

    /**
     * @param SearchMultiSelectField $itemRevision
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setItemRevision($itemRevision)
    {
      $this->itemRevision = $itemRevision;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemSubOf()
    {
      return $this->itemSubOf;
    }

    /**
     * @param SearchMultiSelectField $itemSubOf
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setItemSubOf($itemSubOf)
    {
      $this->itemSubOf = $itemSubOf;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLandedCostPerLine()
    {
      return $this->landedCostPerLine;
    }

    /**
     * @param SearchBooleanField $landedCostPerLine
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setLandedCostPerLine($landedCostPerLine)
    {
      $this->landedCostPerLine = $landedCostPerLine;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
      $this->lastModifiedDate = $lastModifiedDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param SearchMultiSelectField $leadSource
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLineUniqueKey()
    {
      return $this->lineUniqueKey;
    }

    /**
     * @param SearchLongField $lineUniqueKey
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setLineUniqueKey($lineUniqueKey)
    {
      $this->lineUniqueKey = $lineUniqueKey;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLocationAutoAssigned()
    {
      return $this->locationAutoAssigned;
    }

    /**
     * @param SearchBooleanField $locationAutoAssigned
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setLocationAutoAssigned($locationAutoAssigned)
    {
      $this->locationAutoAssigned = $locationAutoAssigned;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMainLine()
    {
      return $this->mainLine;
    }

    /**
     * @param SearchBooleanField $mainLine
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMainLine($mainLine)
    {
      $this->mainLine = $mainLine;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMainName()
    {
      return $this->mainName;
    }

    /**
     * @param SearchMultiSelectField $mainName
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMainName($mainName)
    {
      $this->mainName = $mainName;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getManufacturingRouting()
    {
      return $this->manufacturingRouting;
    }

    /**
     * @param SearchMultiSelectField $manufacturingRouting
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setManufacturingRouting($manufacturingRouting)
    {
      $this->manufacturingRouting = $manufacturingRouting;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMatchBillToReceipt($matchBillToReceipt)
    {
      $this->matchBillToReceipt = $matchBillToReceipt;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemoMain()
    {
      return $this->memoMain;
    }

    /**
     * @param SearchStringField $memoMain
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMemoMain($memoMain)
    {
      $this->memoMain = $memoMain;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMemorized()
    {
      return $this->memorized;
    }

    /**
     * @param SearchBooleanField $memorized
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMemorized($memorized)
    {
      $this->memorized = $memorized;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMerchantAccount()
    {
      return $this->merchantAccount;
    }

    /**
     * @param SearchStringField $merchantAccount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMerchantAccount($merchantAccount)
    {
      $this->merchantAccount = $merchantAccount;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param SearchStringField $message
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMultiSubsidiary()
    {
      return $this->multiSubsidiary;
    }

    /**
     * @param SearchBooleanField $multiSubsidiary
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setMultiSubsidiary($multiSubsidiary)
    {
      $this->multiSubsidiary = $multiSubsidiary;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNameText()
    {
      return $this->nameText;
    }

    /**
     * @param SearchStringField $nameText
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNameText($nameText)
    {
      $this->nameText = $nameText;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getNetAmount()
    {
      return $this->netAmount;
    }

    /**
     * @param SearchDoubleField $netAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNetAmount($netAmount)
    {
      $this->netAmount = $netAmount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNextApprover()
    {
      return $this->nextApprover;
    }

    /**
     * @param SearchMultiSelectField $nextApprover
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNextApprover($nextApprover)
    {
      $this->nextApprover = $nextApprover;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextBillDate()
    {
      return $this->nextBillDate;
    }

    /**
     * @param SearchDateField $nextBillDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNextBillDate($nextBillDate)
    {
      $this->nextBillDate = $nextBillDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNoAutoAssignLocation()
    {
      return $this->noAutoAssignLocation;
    }

    /**
     * @param SearchBooleanField $noAutoAssignLocation
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNoAutoAssignLocation($noAutoAssignLocation)
    {
      $this->noAutoAssignLocation = $noAutoAssignLocation;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getNonReimbursable()
    {
      return $this->nonReimbursable;
    }

    /**
     * @param SearchBooleanField $nonReimbursable
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNonReimbursable($nonReimbursable)
    {
      $this->nonReimbursable = $nonReimbursable;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchLongField $number
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOneTimeTotal()
    {
      return $this->oneTimeTotal;
    }

    /**
     * @param SearchDoubleField $oneTimeTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setOneTimeTotal($oneTimeTotal)
    {
      $this->oneTimeTotal = $oneTimeTotal;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOpportunity()
    {
      return $this->opportunity;
    }

    /**
     * @param SearchMultiSelectField $opportunity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setOpportunity($opportunity)
    {
      $this->opportunity = $opportunity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOrderPriority()
    {
      return $this->orderPriority;
    }

    /**
     * @param SearchDoubleField $orderPriority
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setOrderPriority($orderPriority)
    {
      $this->orderPriority = $orderPriority;
      return $this;
    }

    /**
     * @return SearchTextNumberField
     */
    public function getOtherRefNum()
    {
      return $this->otherRefNum;
    }

    /**
     * @param SearchTextNumberField $otherRefNum
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setOtherRefNum($otherRefNum)
    {
      $this->otherRefNum = $otherRefNum;
      return $this;
    }

    /**
     * @return SearchTextNumberField
     */
    public function getOtherRefNumNonDeposit()
    {
      return $this->otherRefNumNonDeposit;
    }

    /**
     * @param SearchTextNumberField $otherRefNumNonDeposit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setOtherRefNumNonDeposit($otherRefNumNonDeposit)
    {
      $this->otherRefNumNonDeposit = $otherRefNumNonDeposit;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOverheadParentItem()
    {
      return $this->overheadParentItem;
    }

    /**
     * @param SearchMultiSelectField $overheadParentItem
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setOverheadParentItem($overheadParentItem)
    {
      $this->overheadParentItem = $overheadParentItem;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPackageCount()
    {
      return $this->packageCount;
    }

    /**
     * @param SearchLongField $packageCount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPackageCount($packageCount)
    {
      $this->packageCount = $packageCount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPaidTransaction()
    {
      return $this->paidTransaction;
    }

    /**
     * @param SearchMultiSelectField $paidTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaidTransaction($paidTransaction)
    {
      $this->paidTransaction = $paidTransaction;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchLongField $parent
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartner()
    {
      return $this->partner;
    }

    /**
     * @param SearchMultiSelectField $partner
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPartner($partner)
    {
      $this->partner = $partner;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPartnerContribution()
    {
      return $this->partnerContribution;
    }

    /**
     * @param SearchLongField $partnerContribution
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPartnerContribution($partnerContribution)
    {
      $this->partnerContribution = $partnerContribution;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerRole()
    {
      return $this->partnerRole;
    }

    /**
     * @param SearchMultiSelectField $partnerRole
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPartnerRole($partnerRole)
    {
      $this->partnerRole = $partnerRole;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartnerTeamMember()
    {
      return $this->partnerTeamMember;
    }

    /**
     * @param SearchMultiSelectField $partnerTeamMember
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPartnerTeamMember($partnerTeamMember)
    {
      $this->partnerTeamMember = $partnerTeamMember;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPayingTransaction()
    {
      return $this->payingTransaction;
    }

    /**
     * @param SearchMultiSelectField $payingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPayingTransaction($payingTransaction)
    {
      $this->payingTransaction = $payingTransaction;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentApproved()
    {
      return $this->paymentApproved;
    }

    /**
     * @param SearchBooleanField $paymentApproved
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentApproved($paymentApproved)
    {
      $this->paymentApproved = $paymentApproved;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPaymentEventDate()
    {
      return $this->paymentEventDate;
    }

    /**
     * @param SearchDateField $paymentEventDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentEventDate($paymentEventDate)
    {
      $this->paymentEventDate = $paymentEventDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventHoldReason()
    {
      return $this->paymentEventHoldReason;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentEventHoldReason
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentEventHoldReason($paymentEventHoldReason)
    {
      $this->paymentEventHoldReason = $paymentEventHoldReason;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentEventPurchaseCardUsed()
    {
      return $this->paymentEventPurchaseCardUsed;
    }

    /**
     * @param SearchBooleanField $paymentEventPurchaseCardUsed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentEventPurchaseCardUsed($paymentEventPurchaseCardUsed)
    {
      $this->paymentEventPurchaseCardUsed = $paymentEventPurchaseCardUsed;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentEventPurchaseDataSent()
    {
      return $this->paymentEventPurchaseDataSent;
    }

    /**
     * @param SearchBooleanField $paymentEventPurchaseDataSent
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentEventPurchaseDataSent($paymentEventPurchaseDataSent)
    {
      $this->paymentEventPurchaseDataSent = $paymentEventPurchaseDataSent;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventResult()
    {
      return $this->paymentEventResult;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentEventResult
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentEventResult($paymentEventResult)
    {
      $this->paymentEventResult = $paymentEventResult;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPaymentEventType()
    {
      return $this->paymentEventType;
    }

    /**
     * @param SearchEnumMultiSelectField $paymentEventType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentEventType($paymentEventType)
    {
      $this->paymentEventType = $paymentEventType;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPaymentHold()
    {
      return $this->paymentHold;
    }

    /**
     * @param SearchBooleanField $paymentHold
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentHold($paymentHold)
    {
      $this->paymentHold = $paymentHold;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param SearchMultiSelectField $paymentMethod
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPayPalPending()
    {
      return $this->payPalPending;
    }

    /**
     * @param SearchBooleanField $payPalPending
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPayPalPending($payPalPending)
    {
      $this->payPalPending = $payPalPending;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPayPalStatus()
    {
      return $this->payPalStatus;
    }

    /**
     * @param SearchStringField $payPalStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPayPalStatus($payPalStatus)
    {
      $this->payPalStatus = $payPalStatus;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPayPalTranId()
    {
      return $this->payPalTranId;
    }

    /**
     * @param SearchStringField $payPalTranId
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPayPalTranId($payPalTranId)
    {
      $this->payPalTranId = $payPalTranId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPnRefNum()
    {
      return $this->pnRefNum;
    }

    /**
     * @param SearchStringField $pnRefNum
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPnRefNum($pnRefNum)
    {
      $this->pnRefNum = $pnRefNum;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPoAsText()
    {
      return $this->poAsText;
    }

    /**
     * @param SearchStringField $poAsText
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPoAsText($poAsText)
    {
      $this->poAsText = $poAsText;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPosting()
    {
      return $this->posting;
    }

    /**
     * @param SearchBooleanField $posting
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPosting($posting)
    {
      $this->posting = $posting;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod()
    {
      return $this->postingPeriod;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPostingPeriod($postingPeriod)
    {
      $this->postingPeriod = $postingPeriod;
      return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getPostingPeriodRelative()
    {
      return $this->postingPeriodRelative;
    }

    /**
     * @param PostingPeriodDate $postingPeriodRelative
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPostingPeriodRelative($postingPeriodRelative)
    {
      $this->postingPeriodRelative = $postingPeriodRelative;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriceLevel()
    {
      return $this->priceLevel;
    }

    /**
     * @param SearchMultiSelectField $priceLevel
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPriceLevel($priceLevel)
    {
      $this->priceLevel = $priceLevel;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPrintedPickingTicket()
    {
      return $this->printedPickingTicket;
    }

    /**
     * @param SearchBooleanField $printedPickingTicket
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPrintedPickingTicket($printedPickingTicket)
    {
      $this->printedPickingTicket = $printedPickingTicket;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getProbability()
    {
      return $this->probability;
    }

    /**
     * @param SearchLongField $probability
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setProbability($probability)
    {
      $this->probability = $probability;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getProjectedAmount()
    {
      return $this->projectedAmount;
    }

    /**
     * @param SearchDoubleField $projectedAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setProjectedAmount($projectedAmount)
    {
      $this->projectedAmount = $projectedAmount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectTask()
    {
      return $this->projectTask;
    }

    /**
     * @param SearchMultiSelectField $projectTask
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setProjectTask($projectTask)
    {
      $this->projectTask = $projectTask;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromoCode()
    {
      return $this->promoCode;
    }

    /**
     * @param SearchMultiSelectField $promoCode
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPromoCode($promoCode)
    {
      $this->promoCode = $promoCode;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrder()
    {
      return $this->purchaseOrder;
    }

    /**
     * @param SearchMultiSelectField $purchaseOrder
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setPurchaseOrder($purchaseOrder)
    {
      $this->purchaseOrder = $purchaseOrder;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityBilled()
    {
      return $this->quantityBilled;
    }

    /**
     * @param SearchDoubleField $quantityBilled
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantityBilled($quantityBilled)
    {
      $this->quantityBilled = $quantityBilled;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantityCommitted($quantityCommitted)
    {
      $this->quantityCommitted = $quantityCommitted;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityPacked()
    {
      return $this->quantityPacked;
    }

    /**
     * @param SearchDoubleField $quantityPacked
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantityPacked($quantityPacked)
    {
      $this->quantityPacked = $quantityPacked;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityPicked()
    {
      return $this->quantityPicked;
    }

    /**
     * @param SearchDoubleField $quantityPicked
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantityPicked($quantityPicked)
    {
      $this->quantityPicked = $quantityPicked;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityRevCommitted()
    {
      return $this->quantityRevCommitted;
    }

    /**
     * @param SearchDoubleField $quantityRevCommitted
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantityRevCommitted($quantityRevCommitted)
    {
      $this->quantityRevCommitted = $quantityRevCommitted;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityShipRecv()
    {
      return $this->quantityShipRecv;
    }

    /**
     * @param SearchDoubleField $quantityShipRecv
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setQuantityShipRecv($quantityShipRecv)
    {
      $this->quantityShipRecv = $quantityShipRecv;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecognizedRevenue()
    {
      return $this->recognizedRevenue;
    }

    /**
     * @param SearchDoubleField $recognizedRevenue
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecognizedRevenue($recognizedRevenue)
    {
      $this->recognizedRevenue = $recognizedRevenue;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRecordType()
    {
      return $this->recordType;
    }

    /**
     * @param SearchStringField $recordType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecordType($recordType)
    {
      $this->recordType = $recordType;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurAnnuallyTotal()
    {
      return $this->recurAnnuallyTotal;
    }

    /**
     * @param SearchDoubleField $recurAnnuallyTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecurAnnuallyTotal($recurAnnuallyTotal)
    {
      $this->recurAnnuallyTotal = $recurAnnuallyTotal;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurMonthlyTotal()
    {
      return $this->recurMonthlyTotal;
    }

    /**
     * @param SearchDoubleField $recurMonthlyTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecurMonthlyTotal($recurMonthlyTotal)
    {
      $this->recurMonthlyTotal = $recurMonthlyTotal;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurQuarterlyTotal()
    {
      return $this->recurQuarterlyTotal;
    }

    /**
     * @param SearchDoubleField $recurQuarterlyTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecurQuarterlyTotal($recurQuarterlyTotal)
    {
      $this->recurQuarterlyTotal = $recurQuarterlyTotal;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRecurringBill()
    {
      return $this->recurringBill;
    }

    /**
     * @param SearchBooleanField $recurringBill
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecurringBill($recurringBill)
    {
      $this->recurringBill = $recurringBill;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getRecurWeeklyTotal()
    {
      return $this->recurWeeklyTotal;
    }

    /**
     * @param SearchDoubleField $recurWeeklyTotal
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRecurWeeklyTotal($recurWeeklyTotal)
    {
      $this->recurWeeklyTotal = $recurWeeklyTotal;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRefNumber()
    {
      return $this->refNumber;
    }

    /**
     * @param SearchLongField $refNumber
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRefNumber($refNumber)
    {
      $this->refNumber = $refNumber;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevCommitStatus()
    {
      return $this->revCommitStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $revCommitStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevCommitStatus($revCommitStatus)
    {
      $this->revCommitStatus = $revCommitStatus;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRevCommittingStatus()
    {
      return $this->revCommittingStatus;
    }

    /**
     * @param SearchBooleanField $revCommittingStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevCommittingStatus($revCommittingStatus)
    {
      $this->revCommittingStatus = $revCommittingStatus;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevCommittingTransaction()
    {
      return $this->revCommittingTransaction;
    }

    /**
     * @param SearchMultiSelectField $revCommittingTransaction
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevCommittingTransaction($revCommittingTransaction)
    {
      $this->revCommittingTransaction = $revCommittingTransaction;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRevenueStatus()
    {
      return $this->revenueStatus;
    }

    /**
     * @param SearchEnumMultiSelectField $revenueStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevenueStatus($revenueStatus)
    {
      $this->revenueStatus = $revenueStatus;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReversalDate()
    {
      return $this->reversalDate;
    }

    /**
     * @param SearchDateField $reversalDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setReversalDate($reversalDate)
    {
      $this->reversalDate = $reversalDate;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getReversalNumber()
    {
      return $this->reversalNumber;
    }

    /**
     * @param SearchStringField $reversalNumber
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setReversalNumber($reversalNumber)
    {
      $this->reversalNumber = $reversalNumber;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecEndDate()
    {
      return $this->revRecEndDate;
    }

    /**
     * @param SearchDateField $revRecEndDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevRecEndDate($revRecEndDate)
    {
      $this->revRecEndDate = $revRecEndDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getRevRecOnRevCommitment()
    {
      return $this->revRecOnRevCommitment;
    }

    /**
     * @param SearchBooleanField $revRecOnRevCommitment
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevRecOnRevCommitment($revRecOnRevCommitment)
    {
      $this->revRecOnRevCommitment = $revRecOnRevCommitment;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRevRecStartDate()
    {
      return $this->revRecStartDate;
    }

    /**
     * @param SearchDateField $revRecStartDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevRecStartDate($revRecStartDate)
    {
      $this->revRecStartDate = $revRecStartDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRevRecTermInMonths()
    {
      return $this->revRecTermInMonths;
    }

    /**
     * @param SearchLongField $revRecTermInMonths
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setRevRecTermInMonths($revRecTermInMonths)
    {
      $this->revRecTermInMonths = $revRecTermInMonths;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getSalesEffectiveDate()
    {
      return $this->salesEffectiveDate;
    }

    /**
     * @param SearchDateField $salesEffectiveDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSalesEffectiveDate($salesEffectiveDate)
    {
      $this->salesEffectiveDate = $salesEffectiveDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesOrder()
    {
      return $this->salesOrder;
    }

    /**
     * @param SearchMultiSelectField $salesOrder
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSalesOrder($salesOrder)
    {
      $this->salesOrder = $salesOrder;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRep()
    {
      return $this->salesRep;
    }

    /**
     * @param SearchMultiSelectField $salesRep
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSalesRep($salesRep)
    {
      $this->salesRep = $salesRep;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamMember()
    {
      return $this->salesTeamMember;
    }

    /**
     * @param SearchMultiSelectField $salesTeamMember
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSalesTeamMember($salesTeamMember)
    {
      $this->salesTeamMember = $salesTeamMember;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesTeamRole()
    {
      return $this->salesTeamRole;
    }

    /**
     * @param SearchMultiSelectField $salesTeamRole
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSalesTeamRole($salesTeamRole)
    {
      $this->salesTeamRole = $salesTeamRole;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSchedulingMethod()
    {
      return $this->schedulingMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $schedulingMethod
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSchedulingMethod($schedulingMethod)
    {
      $this->schedulingMethod = $schedulingMethod;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSerialNumberCost()
    {
      return $this->serialNumberCost;
    }

    /**
     * @param SearchDoubleField $serialNumberCost
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSerialNumberCost($serialNumberCost)
    {
      $this->serialNumberCost = $serialNumberCost;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSerialNumberCostAdjustment()
    {
      return $this->serialNumberCostAdjustment;
    }

    /**
     * @param SearchDoubleField $serialNumberCostAdjustment
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSerialNumberCostAdjustment($serialNumberCostAdjustment)
    {
      $this->serialNumberCostAdjustment = $serialNumberCostAdjustment;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getSerialNumberQuantity()
    {
      return $this->serialNumberQuantity;
    }

    /**
     * @param SearchDoubleField $serialNumberQuantity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSerialNumberQuantity($serialNumberQuantity)
    {
      $this->serialNumberQuantity = $serialNumberQuantity;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSerialNumbers()
    {
      return $this->serialNumbers;
    }

    /**
     * @param SearchStringField $serialNumbers
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSerialNumbers($serialNumbers)
    {
      $this->serialNumbers = $serialNumbers;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAddress()
    {
      return $this->shipAddress;
    }

    /**
     * @param SearchStringField $shipAddress
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipAddress($shipAddress)
    {
      $this->shipAddress = $shipAddress;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAddressee()
    {
      return $this->shipAddressee;
    }

    /**
     * @param SearchStringField $shipAddressee
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipAddressee($shipAddressee)
    {
      $this->shipAddressee = $shipAddressee;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipAttention()
    {
      return $this->shipAttention;
    }

    /**
     * @param SearchStringField $shipAttention
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipAttention($shipAttention)
    {
      $this->shipAttention = $shipAttention;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getShipCarrier()
    {
      return $this->shipCarrier;
    }

    /**
     * @param SearchEnumMultiSelectField $shipCarrier
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipCarrier($shipCarrier)
    {
      $this->shipCarrier = $shipCarrier;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipCity()
    {
      return $this->shipCity;
    }

    /**
     * @param SearchStringField $shipCity
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipCity($shipCity)
    {
      $this->shipCity = $shipCity;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipComplete()
    {
      return $this->shipComplete;
    }

    /**
     * @param SearchBooleanField $shipComplete
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipComplete($shipComplete)
    {
      $this->shipComplete = $shipComplete;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getShipCountry()
    {
      return $this->shipCountry;
    }

    /**
     * @param SearchEnumMultiSelectField $shipCountry
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipCountry($shipCountry)
    {
      $this->shipCountry = $shipCountry;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipCounty()
    {
      return $this->shipCounty;
    }

    /**
     * @param SearchStringField $shipCounty
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipCounty($shipCounty)
    {
      $this->shipCounty = $shipCounty;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getShipDate()
    {
      return $this->shipDate;
    }

    /**
     * @param SearchDateField $shipDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipDate($shipDate)
    {
      $this->shipDate = $shipDate;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getShipGroup()
    {
      return $this->shipGroup;
    }

    /**
     * @param SearchLongField $shipGroup
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipGroup($shipGroup)
    {
      $this->shipGroup = $shipGroup;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipMethod()
    {
      return $this->shipMethod;
    }

    /**
     * @param SearchMultiSelectField $shipMethod
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipMethod($shipMethod)
    {
      $this->shipMethod = $shipMethod;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipPhone()
    {
      return $this->shipPhone;
    }

    /**
     * @param SearchStringField $shipPhone
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipPhone($shipPhone)
    {
      $this->shipPhone = $shipPhone;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipping()
    {
      return $this->shipping;
    }

    /**
     * @param SearchBooleanField $shipping
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipping($shipping)
    {
      $this->shipping = $shipping;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipRecvStatus()
    {
      return $this->shipRecvStatus;
    }

    /**
     * @param SearchBooleanField $shipRecvStatus
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipRecvStatus($shipRecvStatus)
    {
      $this->shipRecvStatus = $shipRecvStatus;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getShipRecvStatusLine()
    {
      return $this->shipRecvStatusLine;
    }

    /**
     * @param SearchBooleanField $shipRecvStatusLine
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipRecvStatusLine($shipRecvStatusLine)
    {
      $this->shipRecvStatusLine = $shipRecvStatusLine;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipState()
    {
      return $this->shipState;
    }

    /**
     * @param SearchMultiSelectField $shipState
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipState($shipState)
    {
      $this->shipState = $shipState;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getShipTo()
    {
      return $this->shipTo;
    }

    /**
     * @param SearchMultiSelectField $shipTo
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipTo($shipTo)
    {
      $this->shipTo = $shipTo;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getShipZip()
    {
      return $this->shipZip;
    }

    /**
     * @param SearchStringField $shipZip
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setShipZip($shipZip)
    {
      $this->shipZip = $shipZip;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param SearchEnumMultiSelectField $source
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getStatistical()
    {
      return $this->statistical;
    }

    /**
     * @param SearchBooleanField $statistical
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setStatistical($statistical)
    {
      $this->statistical = $statistical;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param SearchEnumMultiSelectField $status
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscription()
    {
      return $this->subscription;
    }

    /**
     * @param SearchMultiSelectField $subscription
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSubscription($subscription)
    {
      $this->subscription = $subscription;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubscriptionLine()
    {
      return $this->subscriptionLine;
    }

    /**
     * @param SearchMultiSelectField $subscriptionLine
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSubscriptionLine($subscriptionLine)
    {
      $this->subscriptionLine = $subscriptionLine;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxItem()
    {
      return $this->taxItem;
    }

    /**
     * @param SearchMultiSelectField $taxItem
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTaxItem($taxItem)
    {
      $this->taxItem = $taxItem;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTaxLine()
    {
      return $this->taxLine;
    }

    /**
     * @param SearchBooleanField $taxLine
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTaxLine($taxLine)
    {
      $this->taxLine = $taxLine;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxPeriod()
    {
      return $this->taxPeriod;
    }

    /**
     * @param RecordRef $taxPeriod
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTaxPeriod($taxPeriod)
    {
      $this->taxPeriod = $taxPeriod;
      return $this;
    }

    /**
     * @return PostingPeriodDate
     */
    public function getTaxPeriodRelative()
    {
      return $this->taxPeriodRelative;
    }

    /**
     * @param PostingPeriodDate $taxPeriodRelative
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTaxPeriodRelative($taxPeriodRelative)
    {
      $this->taxPeriodRelative = $taxPeriodRelative;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxRate()
    {
      return $this->taxRate;
    }

    /**
     * @param SearchDoubleField $taxRate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTaxRate($taxRate)
    {
      $this->taxRate = $taxRate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerms()
    {
      return $this->terms;
    }

    /**
     * @param SearchMultiSelectField $terms
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTerms($terms)
    {
      $this->terms = $terms;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTermsOfSale()
    {
      return $this->termsOfSale;
    }

    /**
     * @param SearchEnumMultiSelectField $termsOfSale
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTermsOfSale($termsOfSale)
    {
      $this->termsOfSale = $termsOfSale;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param SearchStringField $title
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getToBeEmailed()
    {
      return $this->toBeEmailed;
    }

    /**
     * @param SearchBooleanField $toBeEmailed
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setToBeEmailed($toBeEmailed)
    {
      $this->toBeEmailed = $toBeEmailed;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getToBePrinted()
    {
      return $this->toBePrinted;
    }

    /**
     * @param SearchBooleanField $toBePrinted
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setToBePrinted($toBePrinted)
    {
      $this->toBePrinted = $toBePrinted;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getToSubsidiary()
    {
      return $this->toSubsidiary;
    }

    /**
     * @param SearchMultiSelectField $toSubsidiary
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setToSubsidiary($toSubsidiary)
    {
      $this->toSubsidiary = $toSubsidiary;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param SearchDoubleField $totalAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTrackingNumbers()
    {
      return $this->trackingNumbers;
    }

    /**
     * @param SearchStringField $trackingNumbers
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTrackingNumbers($trackingNumbers)
    {
      $this->trackingNumbers = $trackingNumbers;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranCostEstimate()
    {
      return $this->tranCostEstimate;
    }

    /**
     * @param SearchDoubleField $tranCostEstimate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranCostEstimate($tranCostEstimate)
    {
      $this->tranCostEstimate = $tranCostEstimate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getTranDate()
    {
      return $this->tranDate;
    }

    /**
     * @param SearchDateField $tranDate
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranDate($tranDate)
    {
      $this->tranDate = $tranDate;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfit()
    {
      return $this->tranEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranEstGrossProfit($tranEstGrossProfit)
    {
      $this->tranEstGrossProfit = $tranEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranEstGrossProfitPct()
    {
      return $this->tranEstGrossProfitPct;
    }

    /**
     * @param SearchDoubleField $tranEstGrossProfitPct
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranEstGrossProfitPct($tranEstGrossProfitPct)
    {
      $this->tranEstGrossProfitPct = $tranEstGrossProfitPct;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTranFxEstGrossProfit()
    {
      return $this->tranFxEstGrossProfit;
    }

    /**
     * @param SearchDoubleField $tranFxEstGrossProfit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranFxEstGrossProfit($tranFxEstGrossProfit)
    {
      $this->tranFxEstGrossProfit = $tranFxEstGrossProfit;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranId()
    {
      return $this->tranId;
    }

    /**
     * @param SearchStringField $tranId
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranId($tranId)
    {
      $this->tranId = $tranId;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTranIsVsoeBundle()
    {
      return $this->tranIsVsoeBundle;
    }

    /**
     * @param SearchBooleanField $tranIsVsoeBundle
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTranIsVsoeBundle($tranIsVsoeBundle)
    {
      $this->tranIsVsoeBundle = $tranIsVsoeBundle;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTransactionDiscount()
    {
      return $this->transactionDiscount;
    }

    /**
     * @param SearchBooleanField $transactionDiscount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransactionDiscount($transactionDiscount)
    {
      $this->transactionDiscount = $transactionDiscount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTransactionLineType()
    {
      return $this->transactionLineType;
    }

    /**
     * @param SearchEnumMultiSelectField $transactionLineType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransactionLineType($transactionLineType)
    {
      $this->transactionLineType = $transactionLineType;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTransactionNumber()
    {
      return $this->transactionNumber;
    }

    /**
     * @param SearchStringField $transactionNumber
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransactionNumber($transactionNumber)
    {
      $this->transactionNumber = $transactionNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTransferLocation()
    {
      return $this->transferLocation;
    }

    /**
     * @param SearchMultiSelectField $transferLocation
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransferLocation($transferLocation)
    {
      $this->transferLocation = $transferLocation;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityCommitted()
    {
      return $this->transferOrderQuantityCommitted;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityCommitted
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransferOrderQuantityCommitted($transferOrderQuantityCommitted)
    {
      $this->transferOrderQuantityCommitted = $transferOrderQuantityCommitted;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityPacked()
    {
      return $this->transferOrderQuantityPacked;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityPacked
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransferOrderQuantityPacked($transferOrderQuantityPacked)
    {
      $this->transferOrderQuantityPacked = $transferOrderQuantityPacked;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityPicked()
    {
      return $this->transferOrderQuantityPicked;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityPicked
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransferOrderQuantityPicked($transferOrderQuantityPicked)
    {
      $this->transferOrderQuantityPicked = $transferOrderQuantityPicked;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityReceived()
    {
      return $this->transferOrderQuantityReceived;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityReceived
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransferOrderQuantityReceived($transferOrderQuantityReceived)
    {
      $this->transferOrderQuantityReceived = $transferOrderQuantityReceived;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTransferOrderQuantityShipped()
    {
      return $this->transferOrderQuantityShipped;
    }

    /**
     * @param SearchDoubleField $transferOrderQuantityShipped
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setTransferOrderQuantityShipped($transferOrderQuantityShipped)
    {
      $this->transferOrderQuantityShipped = $transferOrderQuantityShipped;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param SearchMultiSelectField $unit
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getUnitCostOverride()
    {
      return $this->unitCostOverride;
    }

    /**
     * @param SearchDoubleField $unitCostOverride
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setUnitCostOverride($unitCostOverride)
    {
      $this->unitCostOverride = $unitCostOverride;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendType()
    {
      return $this->vendType;
    }

    /**
     * @param SearchMultiSelectField $vendType
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setVendType($vendType)
    {
      $this->vendType = $vendType;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getVisibleToCustomer()
    {
      return $this->visibleToCustomer;
    }

    /**
     * @param SearchBooleanField $visibleToCustomer
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setVisibleToCustomer($visibleToCustomer)
    {
      $this->visibleToCustomer = $visibleToCustomer;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getVoided()
    {
      return $this->voided;
    }

    /**
     * @param SearchBooleanField $voided
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setVoided($voided)
    {
      $this->voided = $voided;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoeAllocation()
    {
      return $this->vsoeAllocation;
    }

    /**
     * @param SearchDoubleField $vsoeAllocation
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setVsoeAllocation($vsoeAllocation)
    {
      $this->vsoeAllocation = $vsoeAllocation;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getVsoeAmount()
    {
      return $this->vsoeAmount;
    }

    /**
     * @param SearchDoubleField $vsoeAmount
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setVsoeAmount($vsoeAmount)
    {
      $this->vsoeAmount = $vsoeAmount;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setVsoePrice($vsoePrice)
    {
      $this->vsoePrice = $vsoePrice;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setWebSite($webSite)
    {
      $this->webSite = $webSite;
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
     * @return \Nzolt\NetSuite\TransactionSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
