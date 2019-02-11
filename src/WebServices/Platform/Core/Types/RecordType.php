<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core\Types;

/**
 * RecordType
 */
class RecordType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const account = "account";

    /**
     * @var string
     */
    const accountingPeriod = "accountingPeriod";

    /**
     * @var string
     */
    const appDefinition = "appDefinition";

    /**
     * @var string
     */
    const appPackage = "appPackage";

    /**
     * @var string
     */
    const assemblyBuild = "assemblyBuild";

    /**
     * @var string
     */
    const assemblyUnbuild = "assemblyUnbuild";

    /**
     * @var string
     */
    const assemblyItem = "assemblyItem";

    /**
     * @var string
     */
    const billingSchedule = "billingSchedule";

    /**
     * @var string
     */
    const bin = "bin";

    /**
     * @var string
     */
    const binTransfer = "binTransfer";

    /**
     * @var string
     */
    const binWorksheet = "binWorksheet";

    /**
     * @var string
     */
    const budget = "budget";

    /**
     * @var string
     */
    const budgetCategory = "budgetCategory";

    /**
     * @var string
     */
    const calendarEvent = "calendarEvent";

    /**
     * @var string
     */
    const campaign = "campaign";

    /**
     * @var string
     */
    const campaignAudience = "campaignAudience";

    /**
     * @var string
     */
    const campaignCategory = "campaignCategory";

    /**
     * @var string
     */
    const campaignChannel = "campaignChannel";

    /**
     * @var string
     */
    const campaignFamily = "campaignFamily";

    /**
     * @var string
     */
    const campaignOffer = "campaignOffer";

    /**
     * @var string
     */
    const campaignResponse = "campaignResponse";

    /**
     * @var string
     */
    const campaignSearchEngine = "campaignSearchEngine";

    /**
     * @var string
     */
    const campaignSubscription = "campaignSubscription";

    /**
     * @var string
     */
    const campaignVertical = "campaignVertical";

    /**
     * @var string
     */
    const cashRefund = "cashRefund";

    /**
     * @var string
     */
    const cashSale = "cashSale";

    /**
     * @var string
     */
    const check = "check";

    /**
     * @var string
     */
    const charge = "charge";

    /**
     * @var string
     */
    const classification = "classification";

    /**
     * @var string
     */
    const contact = "contact";

    /**
     * @var string
     */
    const contactCategory = "contactCategory";

    /**
     * @var string
     */
    const contactRole = "contactRole";

    /**
     * @var string
     */
    const costCategory = "costCategory";

    /**
     * @var string
     */
    const couponCode = "couponCode";

    /**
     * @var string
     */
    const creditMemo = "creditMemo";

    /**
     * @var string
     */
    const crmCustomField = "crmCustomField";

    /**
     * @var string
     */
    const currency = "currency";

    /**
     * @var string
     */
    const currencyRate = "currencyRate";

    /**
     * @var string
     */
    const customList = "customList";

    /**
     * @var string
     */
    const customRecord = "customRecord";

    /**
     * @var string
     */
    const customRecordCustomField = "customRecordCustomField";

    /**
     * @var string
     */
    const customRecordType = "customRecordType";

    /**
     * @var string
     */
    const customTransaction = "customTransaction";

    /**
     * @var string
     */
    const customTransactionType = "customTransactionType";

    /**
     * @var string
     */
    const customer = "customer";

    /**
     * @var string
     */
    const customerCategory = "customerCategory";

    /**
     * @var string
     */
    const customerDeposit = "customerDeposit";

    /**
     * @var string
     */
    const customerMessage = "customerMessage";

    /**
     * @var string
     */
    const customerPayment = "customerPayment";

    /**
     * @var string
     */
    const customerRefund = "customerRefund";

    /**
     * @var string
     */
    const customerStatus = "customerStatus";

    /**
     * @var string
     */
    const deposit = "deposit";

    /**
     * @var string
     */
    const depositApplication = "depositApplication";

    /**
     * @var string
     */
    const department = "department";

    /**
     * @var string
     */
    const descriptionItem = "descriptionItem";

    /**
     * @var string
     */
    const discountItem = "discountItem";

    /**
     * @var string
     */
    const downloadItem = "downloadItem";

    /**
     * @var string
     */
    const employee = "employee";

    /**
     * @var string
     */
    const entityCustomField = "entityCustomField";

    /**
     * @var string
     */
    const entityGroup = "entityGroup";

    /**
     * @var string
     */
    const estimate = "estimate";

    /**
     * @var string
     */
    const expenseCategory = "expenseCategory";

    /**
     * @var string
     */
    const expenseReport = "expenseReport";

    /**
     * @var string
     */
    const file = "file";

    /**
     * @var string
     */
    const folder = "folder";

    /**
     * @var string
     */
    const giftCertificate = "giftCertificate";

    /**
     * @var string
     */
    const giftCertificateItem = "giftCertificateItem";

    /**
     * @var string
     */
    const globalAccountMapping = "globalAccountMapping";

    /**
     * @var string
     */
    const interCompanyJournalEntry = "interCompanyJournalEntry";

    /**
     * @var string
     */
    const interCompanyTransferOrder = "interCompanyTransferOrder";

    /**
     * @var string
     */
    const inventoryAdjustment = "inventoryAdjustment";

    /**
     * @var string
     */
    const inventoryCostRevaluation = "inventoryCostRevaluation";

    /**
     * @var string
     */
    const inventoryItem = "inventoryItem";

    /**
     * @var string
     */
    const inventoryNumber = "inventoryNumber";

    /**
     * @var string
     */
    const inventoryTransfer = "inventoryTransfer";

    /**
     * @var string
     */
    const invoice = "invoice";

    /**
     * @var string
     */
    const itemAccountMapping = "itemAccountMapping";

    /**
     * @var string
     */
    const itemCustomField = "itemCustomField";

    /**
     * @var string
     */
    const itemDemandPlan = "itemDemandPlan";

    /**
     * @var string
     */
    const itemFulfillment = "itemFulfillment";

    /**
     * @var string
     */
    const itemGroup = "itemGroup";

    /**
     * @var string
     */
    const itemNumberCustomField = "itemNumberCustomField";

    /**
     * @var string
     */
    const itemOptionCustomField = "itemOptionCustomField";

    /**
     * @var string
     */
    const itemSupplyPlan = "itemSupplyPlan";

    /**
     * @var string
     */
    const itemRevision = "itemRevision";

    /**
     * @var string
     */
    const issue = "issue";

    /**
     * @var string
     */
    const job = "job";

    /**
     * @var string
     */
    const jobStatus = "jobStatus";

    /**
     * @var string
     */
    const jobType = "jobType";

    /**
     * @var string
     */
    const itemReceipt = "itemReceipt";

    /**
     * @var string
     */
    const journalEntry = "journalEntry";

    /**
     * @var string
     */
    const kitItem = "kitItem";

    /**
     * @var string
     */
    const leadSource = "leadSource";

    /**
     * @var string
     */
    const location = "location";

    /**
     * @var string
     */
    const lotNumberedInventoryItem = "lotNumberedInventoryItem";

    /**
     * @var string
     */
    const lotNumberedAssemblyItem = "lotNumberedAssemblyItem";

    /**
     * @var string
     */
    const markupItem = "markupItem";

    /**
     * @var string
     */
    const message = "message";

    /**
     * @var string
     */
    const manufacturingCostTemplate = "manufacturingCostTemplate";

    /**
     * @var string
     */
    const manufacturingOperationTask = "manufacturingOperationTask";

    /**
     * @var string
     */
    const manufacturingRouting = "manufacturingRouting";

    /**
     * @var string
     */
    const nexus = "nexus";

    /**
     * @var string
     */
    const nonInventoryPurchaseItem = "nonInventoryPurchaseItem";

    /**
     * @var string
     */
    const nonInventoryResaleItem = "nonInventoryResaleItem";

    /**
     * @var string
     */
    const nonInventorySaleItem = "nonInventorySaleItem";

    /**
     * @var string
     */
    const note = "note";

    /**
     * @var string
     */
    const noteType = "noteType";

    /**
     * @var string
     */
    const opportunity = "opportunity";

    /**
     * @var string
     */
    const otherChargePurchaseItem = "otherChargePurchaseItem";

    /**
     * @var string
     */
    const otherChargeResaleItem = "otherChargeResaleItem";

    /**
     * @var string
     */
    const otherChargeSaleItem = "otherChargeSaleItem";

    /**
     * @var string
     */
    const otherCustomField = "otherCustomField";

    /**
     * @var string
     */
    const otherNameCategory = "otherNameCategory";

    /**
     * @var string
     */
    const partner = "partner";

    /**
     * @var string
     */
    const partnerCategory = "partnerCategory";

    /**
     * @var string
     */
    const paycheckJournal = "paycheckJournal";

    /**
     * @var string
     */
    const paymentItem = "paymentItem";

    /**
     * @var string
     */
    const paymentMethod = "paymentMethod";

    /**
     * @var string
     */
    const payrollItem = "payrollItem";

    /**
     * @var string
     */
    const phoneCall = "phoneCall";

    /**
     * @var string
     */
    const priceLevel = "priceLevel";

    /**
     * @var string
     */
    const pricingGroup = "pricingGroup";

    /**
     * @var string
     */
    const projectTask = "projectTask";

    /**
     * @var string
     */
    const promotionCode = "promotionCode";

    /**
     * @var string
     */
    const purchaseOrder = "purchaseOrder";

    /**
     * @var string
     */
    const purchaseRequisition = "purchaseRequisition";

    /**
     * @var string
     */
    const resourceAllocation = "resourceAllocation";

    /**
     * @var string
     */
    const returnAuthorization = "returnAuthorization";

    /**
     * @var string
     */
    const revRecSchedule = "revRecSchedule";

    /**
     * @var string
     */
    const revRecTemplate = "revRecTemplate";

    /**
     * @var string
     */
    const salesOrder = "salesOrder";

    /**
     * @var string
     */
    const salesRole = "salesRole";

    /**
     * @var string
     */
    const salesTaxItem = "salesTaxItem";

    /**
     * @var string
     */
    const serializedInventoryItem = "serializedInventoryItem";

    /**
     * @var string
     */
    const serializedAssemblyItem = "serializedAssemblyItem";

    /**
     * @var string
     */
    const servicePurchaseItem = "servicePurchaseItem";

    /**
     * @var string
     */
    const serviceResaleItem = "serviceResaleItem";

    /**
     * @var string
     */
    const serviceSaleItem = "serviceSaleItem";

    /**
     * @var string
     */
    const solution = "solution";

    /**
     * @var string
     */
    const siteCategory = "siteCategory";

    /**
     * @var string
     */
    const state = "state";

    /**
     * @var string
     */
    const statisticalJournalEntry = "statisticalJournalEntry";

    /**
     * @var string
     */
    const subsidiary = "subsidiary";

    /**
     * @var string
     */
    const subtotalItem = "subtotalItem";

    /**
     * @var string
     */
    const supportCase = "supportCase";

    /**
     * @var string
     */
    const supportCaseIssue = "supportCaseIssue";

    /**
     * @var string
     */
    const supportCaseOrigin = "supportCaseOrigin";

    /**
     * @var string
     */
    const supportCasePriority = "supportCasePriority";

    /**
     * @var string
     */
    const supportCaseStatus = "supportCaseStatus";

    /**
     * @var string
     */
    const supportCaseType = "supportCaseType";

    /**
     * @var string
     */
    const task = "task";

    /**
     * @var string
     */
    const taxAcct = "taxAcct";

    /**
     * @var string
     */
    const taxGroup = "taxGroup";

    /**
     * @var string
     */
    const taxType = "taxType";

    /**
     * @var string
     */
    const term = "term";

    /**
     * @var string
     */
    const timeBill = "timeBill";

    /**
     * @var string
     */
    const timeSheet = "timeSheet";

    /**
     * @var string
     */
    const topic = "topic";

    /**
     * @var string
     */
    const transferOrder = "transferOrder";

    /**
     * @var string
     */
    const transactionBodyCustomField = "transactionBodyCustomField";

    /**
     * @var string
     */
    const transactionColumnCustomField = "transactionColumnCustomField";

    /**
     * @var string
     */
    const unitsType = "unitsType";

    /**
     * @var string
     */
    const vendor = "vendor";

    /**
     * @var string
     */
    const vendorCategory = "vendorCategory";

    /**
     * @var string
     */
    const vendorBill = "vendorBill";

    /**
     * @var string
     */
    const vendorCredit = "vendorCredit";

    /**
     * @var string
     */
    const vendorPayment = "vendorPayment";

    /**
     * @var string
     */
    const vendorReturnAuthorization = "vendorReturnAuthorization";

    /**
     * @var string
     */
    const winLossReason = "winLossReason";

    /**
     * @var string
     */
    const workOrder = "workOrder";

    /**
     * @var string
     */
    const workOrderIssue = "workOrderIssue";

    /**
     * @var string
     */
    const workOrderCompletion = "workOrderCompletion";

    /**
     * @var string
     */
    const workOrderClose = "workOrderClose";
}