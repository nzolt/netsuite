<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales\Types;

/**
 * TransactionStatus
 */
class TransactionStatus {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _billCancelled = "_billCancelled";

    /**
     * @var string
     */
    const _billOpen = "_billOpen";

    /**
     * @var string
     */
    const _billPaidInFull = "_billPaidInFull";

    /**
     * @var string
     */
    const _billPaymentOnlineBillPayPendingAccountingApproval = "_billPaymentOnlineBillPayPendingAccountingApproval";

    /**
     * @var string
     */
    const _billPaymentVoided = "_billPaymentVoided";

    /**
     * @var string
     */
    const _billPendingApproval = "_billPendingApproval";

    /**
     * @var string
     */
    const _billRejected = "_billRejected";

    /**
     * @var string
     */
    const _cashSaleDeposited = "_cashSaleDeposited";

    /**
     * @var string
     */
    const _cashSaleNotDeposited = "_cashSaleNotDeposited";

    /**
     * @var string
     */
    const _cashSaleUnapprovedPayment = "_cashSaleUnapprovedPayment";

    /**
     * @var string
     */
    const _checkOnlineBillPayPendingAccountingApproval = "_checkOnlineBillPayPendingAccountingApproval";

    /**
     * @var string
     */
    const _checkVoided = "_checkVoided";

    /**
     * @var string
     */
    const _commissionOverpaid = "_commissionOverpaid";

    /**
     * @var string
     */
    const _commissionPaidInFull = "_commissionPaidInFull";

    /**
     * @var string
     */
    const _commissionPendingAccountingApproval = "_commissionPendingAccountingApproval";

    /**
     * @var string
     */
    const _commissionPendingPayment = "_commissionPendingPayment";

    /**
     * @var string
     */
    const _commissionRejectedByAccounting = "_commissionRejectedByAccounting";

    /**
     * @var string
     */
    const _creditMemoFullyApplied = "_creditMemoFullyApplied";

    /**
     * @var string
     */
    const _creditMemoOpen = "_creditMemoOpen";

    /**
     * @var string
     */
    const _customerDepositDeposited = "_customerDepositDeposited";

    /**
     * @var string
     */
    const _customerDepositFullyApplied = "_customerDepositFullyApplied";

    /**
     * @var string
     */
    const _customerDepositNotDeposited = "_customerDepositNotDeposited";

    /**
     * @var string
     */
    const _customerRefundVoided = "_customerRefundVoided";

    /**
     * @var string
     */
    const _estimateClosed = "_estimateClosed";

    /**
     * @var string
     */
    const _estimateExpired = "_estimateExpired";

    /**
     * @var string
     */
    const _estimateOpen = "_estimateOpen";

    /**
     * @var string
     */
    const _estimateProcessed = "_estimateProcessed";

    /**
     * @var string
     */
    const _estimateVoided = "_estimateVoided";

    /**
     * @var string
     */
    const _expenseReportApprovedByAccounting = "_expenseReportApprovedByAccounting";

    /**
     * @var string
     */
    const _expenseReportApprovedOverriddenByAccounting = "_expenseReportApprovedOverriddenByAccounting";

    /**
     * @var string
     */
    const _expenseReportInProgress = "_expenseReportInProgress";

    /**
     * @var string
     */
    const _expenseReportPaidInFull = "_expenseReportPaidInFull";

    /**
     * @var string
     */
    const _expenseReportPendingAccountingApproval = "_expenseReportPendingAccountingApproval";

    /**
     * @var string
     */
    const _expenseReportPendingSupervisorApproval = "_expenseReportPendingSupervisorApproval";

    /**
     * @var string
     */
    const _expenseReportRejectedByAccounting = "_expenseReportRejectedByAccounting";

    /**
     * @var string
     */
    const _expenseReportRejectedBySupervisor = "_expenseReportRejectedBySupervisor";

    /**
     * @var string
     */
    const _expenseReportRejectedOverriddenByAccounting = "_expenseReportRejectedOverriddenByAccounting";

    /**
     * @var string
     */
    const _invoiceOpen = "_invoiceOpen";

    /**
     * @var string
     */
    const _invoicePaidInFull = "_invoicePaidInFull";

    /**
     * @var string
     */
    const _invoicePendingApproval = "_invoicePendingApproval";

    /**
     * @var string
     */
    const _invoiceRejected = "_invoiceRejected";

    /**
     * @var string
     */
    const _itemFulfillmentPacked = "_itemFulfillmentPacked";

    /**
     * @var string
     */
    const _itemFulfillmentPicked = "_itemFulfillmentPicked";

    /**
     * @var string
     */
    const _itemFulfillmentShipped = "_itemFulfillmentShipped";

    /**
     * @var string
     */
    const _journalApprovedForPosting = "_journalApprovedForPosting";

    /**
     * @var string
     */
    const _journalPendingApproval = "_journalPendingApproval";

    /**
     * @var string
     */
    const _opportunityClosedLost = "_opportunityClosedLost";

    /**
     * @var string
     */
    const _opportunityClosedWon = "_opportunityClosedWon";

    /**
     * @var string
     */
    const _opportunityInProgress = "_opportunityInProgress";

    /**
     * @var string
     */
    const _opportunityIssuedEstimate = "_opportunityIssuedEstimate";

    /**
     * @var string
     */
    const _paycheckCommitted = "_paycheckCommitted";

    /**
     * @var string
     */
    const _paycheckCreated = "_paycheckCreated";

    /**
     * @var string
     */
    const _paycheckError = "_paycheckError";

    /**
     * @var string
     */
    const _paycheckPendingCommitment = "_paycheckPendingCommitment";

    /**
     * @var string
     */
    const _paycheckPendingTaxCalculation = "_paycheckPendingTaxCalculation";

    /**
     * @var string
     */
    const _paycheckPreview = "_paycheckPreview";

    /**
     * @var string
     */
    const _paycheckReversed = "_paycheckReversed";

    /**
     * @var string
     */
    const _paymentDeposited = "_paymentDeposited";

    /**
     * @var string
     */
    const _paymentNotDeposited = "_paymentNotDeposited";

    /**
     * @var string
     */
    const _paymentUnapprovedPayment = "_paymentUnapprovedPayment";

    /**
     * @var string
     */
    const _payrollLiabilityCheckVoided = "_payrollLiabilityCheckVoided";

    /**
     * @var string
     */
    const _purchaseOrderClosed = "_purchaseOrderClosed";

    /**
     * @var string
     */
    const _purchaseOrderFullyBilled = "_purchaseOrderFullyBilled";

    /**
     * @var string
     */
    const _purchaseOrderPartiallyReceived = "_purchaseOrderPartiallyReceived";

    /**
     * @var string
     */
    const _purchaseOrderPendingBill = "_purchaseOrderPendingBill";

    /**
     * @var string
     */
    const _purchaseOrderPendingBillingPartiallyReceived = "_purchaseOrderPendingBillingPartiallyReceived";

    /**
     * @var string
     */
    const _purchaseOrderPendingReceipt = "_purchaseOrderPendingReceipt";

    /**
     * @var string
     */
    const _purchaseOrderPendingSupervisorApproval = "_purchaseOrderPendingSupervisorApproval";

    /**
     * @var string
     */
    const _purchaseOrderRejectedBySupervisor = "_purchaseOrderRejectedBySupervisor";

    /**
     * @var string
     */
    const _requisitionCancelled = "_requisitionCancelled";

    /**
     * @var string
     */
    const _requisitionClosed = "_requisitionClosed";

    /**
     * @var string
     */
    const _requisitionFullyOrdered = "_requisitionFullyOrdered";

    /**
     * @var string
     */
    const _requisitionFullyReceived = "_requisitionFullyReceived";

    /**
     * @var string
     */
    const _requisitionPartiallyOrdered = "_requisitionPartiallyOrdered";

    /**
     * @var string
     */
    const _requisitionPartiallyReceived = "_requisitionPartiallyReceived";

    /**
     * @var string
     */
    const _requisitionPendingApproval = "_requisitionPendingApproval";

    /**
     * @var string
     */
    const _requisitionPendingOrder = "_requisitionPendingOrder";

    /**
     * @var string
     */
    const _requisitionRejected = "_requisitionRejected";

    /**
     * @var string
     */
    const _returnAuthorizationCancelled = "_returnAuthorizationCancelled";

    /**
     * @var string
     */
    const _returnAuthorizationClosed = "_returnAuthorizationClosed";

    /**
     * @var string
     */
    const _returnAuthorizationPartiallyReceived = "_returnAuthorizationPartiallyReceived";

    /**
     * @var string
     */
    const _returnAuthorizationPendingApproval = "_returnAuthorizationPendingApproval";

    /**
     * @var string
     */
    const _returnAuthorizationPendingReceipt = "_returnAuthorizationPendingReceipt";

    /**
     * @var string
     */
    const _returnAuthorizationPendingRefund = "_returnAuthorizationPendingRefund";

    /**
     * @var string
     */
    const _returnAuthorizationPendingRefundPartiallyReceived = "_returnAuthorizationPendingRefundPartiallyReceived";

    /**
     * @var string
     */
    const _returnAuthorizationRefunded = "_returnAuthorizationRefunded";

    /**
     * @var string
     */
    const _salesOrderBilled = "_salesOrderBilled";

    /**
     * @var string
     */
    const _salesOrderCancelled = "_salesOrderCancelled";

    /**
     * @var string
     */
    const _salesOrderClosed = "_salesOrderClosed";

    /**
     * @var string
     */
    const _salesOrderPartiallyFulfilled = "_salesOrderPartiallyFulfilled";

    /**
     * @var string
     */
    const _salesOrderPendingApproval = "_salesOrderPendingApproval";

    /**
     * @var string
     */
    const _salesOrderPendingBilling = "_salesOrderPendingBilling";

    /**
     * @var string
     */
    const _salesOrderPendingBillingPartiallyFulfilled = "_salesOrderPendingBillingPartiallyFulfilled";

    /**
     * @var string
     */
    const _salesOrderPendingFulfillment = "_salesOrderPendingFulfillment";

    /**
     * @var string
     */
    const _salesTaxPaymentOnlineBillPayPendingAccountingApproval = "_salesTaxPaymentOnlineBillPayPendingAccountingApproval";

    /**
     * @var string
     */
    const _salesTaxPaymentVoided = "_salesTaxPaymentVoided";

    /**
     * @var string
     */
    const _statementChargeOpen = "_statementChargeOpen";

    /**
     * @var string
     */
    const _statementChargePaidInFull = "_statementChargePaidInFull";

    /**
     * @var string
     */
    const _taxLiabilityChequeVoided = "_taxLiabilityChequeVoided";

    /**
     * @var string
     */
    const _tegataPayableEndorsed = "_tegataPayableEndorsed";

    /**
     * @var string
     */
    const _tegataPayableIssued = "_tegataPayableIssued";

    /**
     * @var string
     */
    const _tegataPayablePaid = "_tegataPayablePaid";

    /**
     * @var string
     */
    const _tegataReceivablesCollected = "_tegataReceivablesCollected";

    /**
     * @var string
     */
    const _tegataReceivablesDiscounted = "_tegataReceivablesDiscounted";

    /**
     * @var string
     */
    const _tegataReceivablesEndorsed = "_tegataReceivablesEndorsed";

    /**
     * @var string
     */
    const _tegataReceivablesHolding = "_tegataReceivablesHolding";

    /**
     * @var string
     */
    const _transferOrderClosed = "_transferOrderClosed";

    /**
     * @var string
     */
    const _transferOrderPartiallyFulfilled = "_transferOrderPartiallyFulfilled";

    /**
     * @var string
     */
    const _transferOrderPendingApproval = "_transferOrderPendingApproval";

    /**
     * @var string
     */
    const _transferOrderPendingFulfillment = "_transferOrderPendingFulfillment";

    /**
     * @var string
     */
    const _transferOrderPendingReceipt = "_transferOrderPendingReceipt";

    /**
     * @var string
     */
    const _transferOrderPendingReceiptPartiallyFulfilled = "_transferOrderPendingReceiptPartiallyFulfilled";

    /**
     * @var string
     */
    const _transferOrderReceived = "_transferOrderReceived";

    /**
     * @var string
     */
    const _transferOrderRejected = "_transferOrderRejected";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationCancelled = "_vendorReturnAuthorizationCancelled";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationClosed = "_vendorReturnAuthorizationClosed";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationCredited = "_vendorReturnAuthorizationCredited";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationPartiallyReturned = "_vendorReturnAuthorizationPartiallyReturned";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationPendingApproval = "_vendorReturnAuthorizationPendingApproval";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationPendingCredit = "_vendorReturnAuthorizationPendingCredit";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationPendingCreditPartiallyReturned = "_vendorReturnAuthorizationPendingCreditPartiallyReturned";

    /**
     * @var string
     */
    const _vendorReturnAuthorizationPendingReturn = "_vendorReturnAuthorizationPendingReturn";

    /**
     * @var string
     */
    const _workOrderBuilt = "_workOrderBuilt";

    /**
     * @var string
     */
    const _workOrderCancelled = "_workOrderCancelled";

    /**
     * @var string
     */
    const _workOrderClosed = "_workOrderClosed";

    /**
     * @var string
     */
    const _workOrderPartiallyBuilt = "_workOrderPartiallyBuilt";

    /**
     * @var string
     */
    const _workOrderPendingBuild = "_workOrderPendingBuild";

    /**
     * @var string
     */
    const _workOrderPlanned = "_workOrderPlanned";
}