<?php

namespace Nzolt\NetSuite;

class RecordType
{
    const __default = 'account';
    const account = 'account';
    const accountingPeriod = 'accountingPeriod';
    const advInterCompanyJournalEntry = 'advInterCompanyJournalEntry';
    const assemblyBuild = 'assemblyBuild';
    const assemblyUnbuild = 'assemblyUnbuild';
    const assemblyItem = 'assemblyItem';
    const billingAccount = 'billingAccount';
    const billingSchedule = 'billingSchedule';
    const bin = 'bin';
    const binTransfer = 'binTransfer';
    const binWorksheet = 'binWorksheet';
    const budget = 'budget';
    const budgetCategory = 'budgetCategory';
    const calendarEvent = 'calendarEvent';
    const campaign = 'campaign';
    const campaignAudience = 'campaignAudience';
    const campaignCategory = 'campaignCategory';
    const campaignChannel = 'campaignChannel';
    const campaignFamily = 'campaignFamily';
    const campaignOffer = 'campaignOffer';
    const campaignResponse = 'campaignResponse';
    const campaignSearchEngine = 'campaignSearchEngine';
    const campaignSubscription = 'campaignSubscription';
    const campaignVertical = 'campaignVertical';
    const cashRefund = 'cashRefund';
    const cashSale = 'cashSale';
    const check = 'check';
    const charge = 'charge';
    const classification = 'classification';
    const consolidatedExchangeRate = 'consolidatedExchangeRate';
    const contact = 'contact';
    const contactCategory = 'contactCategory';
    const contactRole = 'contactRole';
    const costCategory = 'costCategory';
    const couponCode = 'couponCode';
    const creditMemo = 'creditMemo';
    const crmCustomField = 'crmCustomField';
    const currency = 'currency';
    const currencyRate = 'currencyRate';
    const customList = 'customList';
    const customRecord = 'customRecord';
    const customRecordCustomField = 'customRecordCustomField';
    const customRecordType = 'customRecordType';
    const customTransaction = 'customTransaction';
    const customTransactionType = 'customTransactionType';
    const customer = 'customer';
    const customerCategory = 'customerCategory';
    const customerDeposit = 'customerDeposit';
    const customerMessage = 'customerMessage';
    const customerPayment = 'customerPayment';
    const customerRefund = 'customerRefund';
    const customerStatus = 'customerStatus';
    const deposit = 'deposit';
    const depositApplication = 'depositApplication';
    const department = 'department';
    const descriptionItem = 'descriptionItem';
    const discountItem = 'discountItem';
    const downloadItem = 'downloadItem';
    const employee = 'employee';
    const entityCustomField = 'entityCustomField';
    const entityGroup = 'entityGroup';
    const estimate = 'estimate';
    const expenseCategory = 'expenseCategory';
    const expenseReport = 'expenseReport';
    const fairValuePrice = 'fairValuePrice';
    const file = 'file';
    const folder = 'folder';
    const giftCertificate = 'giftCertificate';
    const giftCertificateItem = 'giftCertificateItem';
    const globalAccountMapping = 'globalAccountMapping';
    const hcmJob = 'hcmJob';
    const inboundShipment = 'inboundShipment';
    const interCompanyJournalEntry = 'interCompanyJournalEntry';
    const interCompanyTransferOrder = 'interCompanyTransferOrder';
    const inventoryAdjustment = 'inventoryAdjustment';
    const inventoryCostRevaluation = 'inventoryCostRevaluation';
    const inventoryItem = 'inventoryItem';
    const inventoryNumber = 'inventoryNumber';
    const inventoryTransfer = 'inventoryTransfer';
    const invoice = 'invoice';
    const itemAccountMapping = 'itemAccountMapping';
    const itemCustomField = 'itemCustomField';
    const itemDemandPlan = 'itemDemandPlan';
    const itemFulfillment = 'itemFulfillment';
    const itemGroup = 'itemGroup';
    const itemNumberCustomField = 'itemNumberCustomField';
    const itemOptionCustomField = 'itemOptionCustomField';
    const itemSupplyPlan = 'itemSupplyPlan';
    const itemRevision = 'itemRevision';
    const issue = 'issue';
    const job = 'job';
    const jobStatus = 'jobStatus';
    const jobType = 'jobType';
    const itemReceipt = 'itemReceipt';
    const journalEntry = 'journalEntry';
    const kitItem = 'kitItem';
    const leadSource = 'leadSource';
    const location = 'location';
    const lotNumberedInventoryItem = 'lotNumberedInventoryItem';
    const lotNumberedAssemblyItem = 'lotNumberedAssemblyItem';
    const markupItem = 'markupItem';
    const message = 'message';
    const manufacturingCostTemplate = 'manufacturingCostTemplate';
    const manufacturingOperationTask = 'manufacturingOperationTask';
    const manufacturingRouting = 'manufacturingRouting';
    const nexus = 'nexus';
    const nonInventoryPurchaseItem = 'nonInventoryPurchaseItem';
    const nonInventoryResaleItem = 'nonInventoryResaleItem';
    const nonInventorySaleItem = 'nonInventorySaleItem';
    const note = 'note';
    const noteType = 'noteType';
    const opportunity = 'opportunity';
    const otherChargePurchaseItem = 'otherChargePurchaseItem';
    const otherChargeResaleItem = 'otherChargeResaleItem';
    const otherChargeSaleItem = 'otherChargeSaleItem';
    const otherCustomField = 'otherCustomField';
    const otherNameCategory = 'otherNameCategory';
    const partner = 'partner';
    const partnerCategory = 'partnerCategory';
    const paycheck = 'paycheck';
    const paycheckJournal = 'paycheckJournal';
    const paymentItem = 'paymentItem';
    const paymentMethod = 'paymentMethod';
    const payrollItem = 'payrollItem';
    const phoneCall = 'phoneCall';
    const priceLevel = 'priceLevel';
    const pricingGroup = 'pricingGroup';
    const projectTask = 'projectTask';
    const promotionCode = 'promotionCode';
    const purchaseOrder = 'purchaseOrder';
    const purchaseRequisition = 'purchaseRequisition';
    const resourceAllocation = 'resourceAllocation';
    const returnAuthorization = 'returnAuthorization';
    const revRecSchedule = 'revRecSchedule';
    const revRecTemplate = 'revRecTemplate';
    const salesOrder = 'salesOrder';
    const salesRole = 'salesRole';
    const salesTaxItem = 'salesTaxItem';
    const serializedInventoryItem = 'serializedInventoryItem';
    const serializedAssemblyItem = 'serializedAssemblyItem';
    const servicePurchaseItem = 'servicePurchaseItem';
    const serviceResaleItem = 'serviceResaleItem';
    const serviceSaleItem = 'serviceSaleItem';
    const solution = 'solution';
    const siteCategory = 'siteCategory';
    const state = 'state';
    const statisticalJournalEntry = 'statisticalJournalEntry';
    const subsidiary = 'subsidiary';
    const subtotalItem = 'subtotalItem';
    const supportCase = 'supportCase';
    const supportCaseIssue = 'supportCaseIssue';
    const supportCaseOrigin = 'supportCaseOrigin';
    const supportCasePriority = 'supportCasePriority';
    const supportCaseStatus = 'supportCaseStatus';
    const supportCaseType = 'supportCaseType';
    const task = 'task';
    const taxAcct = 'taxAcct';
    const taxGroup = 'taxGroup';
    const taxType = 'taxType';
    const term = 'term';
    const timeBill = 'timeBill';
    const timeSheet = 'timeSheet';
    const topic = 'topic';
    const transferOrder = 'transferOrder';
    const transactionBodyCustomField = 'transactionBodyCustomField';
    const transactionColumnCustomField = 'transactionColumnCustomField';
    const unitsType = 'unitsType';
    const usage = 'usage';
    const vendor = 'vendor';
    const vendorCategory = 'vendorCategory';
    const vendorBill = 'vendorBill';
    const vendorCredit = 'vendorCredit';
    const vendorPayment = 'vendorPayment';
    const vendorReturnAuthorization = 'vendorReturnAuthorization';
    const winLossReason = 'winLossReason';
    const workOrder = 'workOrder';
    const workOrderIssue = 'workOrderIssue';
    const workOrderCompletion = 'workOrderCompletion';
    const workOrderClose = 'workOrderClose';


}
