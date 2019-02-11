<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common\Types;

/**
 * PermissionCode
 */
class PermissionCode {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const _accessPaymentAuditLog = "_accessPaymentAuditLog";

    /**
     * @var string
     */
    const _accessTokenManagement = "_accessTokenManagement";

    /**
     * @var string
     */
    const _accountDetail = "_accountDetail";

    /**
     * @var string
     */
    const _accounting = "_accounting";

    /**
     * @var string
     */
    const _accountingBook = "_accountingBook";

    /**
     * @var string
     */
    const _accountingLists = "_accountingLists";

    /**
     * @var string
     */
    const _accounts = "_accounts";

    /**
     * @var string
     */
    const _accountsPayable = "_accountsPayable";

    /**
     * @var string
     */
    const _accountsPayableGraphing = "_accountsPayableGraphing";

    /**
     * @var string
     */
    const _accountsPayableRegister = "_accountsPayableRegister";

    /**
     * @var string
     */
    const _accountsReceivable = "_accountsReceivable";

    /**
     * @var string
     */
    const _accountsReceivableGraphing = "_accountsReceivableGraphing";

    /**
     * @var string
     */
    const _accountsReceivableRegister = "_accountsReceivableRegister";

    /**
     * @var string
     */
    const _accountsReceivableUnbilled = "_accountsReceivableUnbilled";

    /**
     * @var string
     */
    const _adjustInventory = "_adjustInventory";

    /**
     * @var string
     */
    const _adjustInventoryWorksheet = "_adjustInventoryWorksheet";

    /**
     * @var string
     */
    const _admindocs = "_admindocs";

    /**
     * @var string
     */
    const _adpImportData = "_adpImportData";

    /**
     * @var string
     */
    const _adpSetup = "_adpSetup";

    /**
     * @var string
     */
    const _advancedAnalytics = "_advancedAnalytics";

    /**
     * @var string
     */
    const _advancedPDFHTMLTemplates = "_advancedPDFHTMLTemplates";

    /**
     * @var string
     */
    const _allocationSchedules = "_allocationSchedules";

    /**
     * @var string
     */
    const _allowNonGLChanges = "_allowNonGLChanges";

    /**
     * @var string
     */
    const _allowPendingBookJournalEntry = "_allowPendingBookJournalEntry";

    /**
     * @var string
     */
    const _amendW4 = "_amendW4";

    /**
     * @var string
     */
    const _amortizationReports = "_amortizationReports";

    /**
     * @var string
     */
    const _amortizationSchedules = "_amortizationSchedules";

    /**
     * @var string
     */
    const _appDefinitionsAndPackages = "_appDefinitionsAndPackages";

    /**
     * @var string
     */
    const _applicationPublishers = "_applicationPublishers";

    /**
     * @var string
     */
    const _approveDirectDeposit = "_approveDirectDeposit";

    /**
     * @var string
     */
    const _approveEFT = "_approveEFT";

    /**
     * @var string
     */
    const _approveOnlineBillPayments = "_approveOnlineBillPayments";

    /**
     * @var string
     */
    const _approveVendorPayments = "_approveVendorPayments";

    /**
     * @var string
     */
    const _auditTrail = "_auditTrail";

    /**
     * @var string
     */
    const _backupYourData = "_backupYourData";

    /**
     * @var string
     */
    const _balanceSheet = "_balanceSheet";

    /**
     * @var string
     */
    const _bankAccountRegisters = "_bankAccountRegisters";

    /**
     * @var string
     */
    const _billingInformation = "_billingInformation";

    /**
     * @var string
     */
    const _billingSchedules = "_billingSchedules";

    /**
     * @var string
     */
    const _billOfDistribution = "_billOfDistribution";

    /**
     * @var string
     */
    const _billOfMaterialsInquiry = "_billOfMaterialsInquiry";

    /**
     * @var string
     */
    const _billPurchaseOrders = "_billPurchaseOrders";

    /**
     * @var string
     */
    const _bills = "_bills";

    /**
     * @var string
     */
    const _billSalesOrders = "_billSalesOrders";

    /**
     * @var string
     */
    const _bins = "_bins";

    /**
     * @var string
     */
    const _binTransfer = "_binTransfer";

    /**
     * @var string
     */
    const _binWorksheet = "_binWorksheet";

    /**
     * @var string
     */
    const _blanketPurchaseOrder = "_blanketPurchaseOrder";

    /**
     * @var string
     */
    const _blanketPurchaseOrderApproval = "_blanketPurchaseOrderApproval";

    /**
     * @var string
     */
    const _budget = "_budget";

    /**
     * @var string
     */
    const _buildAssemblies = "_buildAssemblies";

    /**
     * @var string
     */
    const _buildWorkOrders = "_buildWorkOrders";

    /**
     * @var string
     */
    const _calculateTime = "_calculateTime";

    /**
     * @var string
     */
    const _calendar = "_calendar";

    /**
     * @var string
     */
    const _campaignHistory = "_campaignHistory";

    /**
     * @var string
     */
    const _cases = "_cases";

    /**
     * @var string
     */
    const _cashFlowStatement = "_cashFlowStatement";

    /**
     * @var string
     */
    const _cashSale = "_cashSale";

    /**
     * @var string
     */
    const _cashSaleRefund = "_cashSaleRefund";

    /**
     * @var string
     */
    const _changeEmailOrPassword = "_changeEmailOrPassword";

    /**
     * @var string
     */
    const _changeRole = "_changeRole";

    /**
     * @var string
     */
    const _chargeRule = "_chargeRule";

    /**
     * @var string
     */
    const _chargeRunRules = "_chargeRunRules";

    /**
     * @var string
     */
    const _check = "_check";

    /**
     * @var string
     */
    const _checkItemAvailability = "_checkItemAvailability";

    /**
     * @var string
     */
    const _classes = "_classes";

    /**
     * @var string
     */
    const _classSegmentMapping = "_classSegmentMapping";

    /**
     * @var string
     */
    const _closeAccount = "_closeAccount";

    /**
     * @var string
     */
    const _closeWorkOrders = "_closeWorkOrders";

    /**
     * @var string
     */
    const _colorThemes = "_colorThemes";

    /**
     * @var string
     */
    const _commissionFeatureSetup = "_commissionFeatureSetup";

    /**
     * @var string
     */
    const _commissionReports = "_commissionReports";

    /**
     * @var string
     */
    const _commitOrders = "_commitOrders";

    /**
     * @var string
     */
    const _commitPayroll = "_commitPayroll";

    /**
     * @var string
     */
    const _companies = "_companies";

    /**
     * @var string
     */
    const _companyInformation = "_companyInformation";

    /**
     * @var string
     */
    const _companyPreferences = "_companyPreferences";

    /**
     * @var string
     */
    const _competitors = "_competitors";

    /**
     * @var string
     */
    const _componentWhereUsed = "_componentWhereUsed";

    /**
     * @var string
     */
    const _contactRoles = "_contactRoles";

    /**
     * @var string
     */
    const _contacts = "_contacts";

    /**
     * @var string
     */
    const _convertClassesToDepartments = "_convertClassesToDepartments";

    /**
     * @var string
     */
    const _convertClassesToLocations = "_convertClassesToLocations";

    /**
     * @var string
     */
    const _copyBudgets = "_copyBudgets";

    /**
     * @var string
     */
    const _copyChartOfAccountsToNewCompany = "_copyChartOfAccountsToNewCompany";

    /**
     * @var string
     */
    const _copyProjectTasks = "_copyProjectTasks";

    /**
     * @var string
     */
    const _costedBillOfMaterialsInquiry = "_costedBillOfMaterialsInquiry";

    /**
     * @var string
     */
    const _costOfGoodsSoldRegisters = "_costOfGoodsSoldRegisters";

    /**
     * @var string
     */
    const _countInventory = "_countInventory";

    /**
     * @var string
     */
    const _createAllocationSchedules = "_createAllocationSchedules";

    /**
     * @var string
     */
    const _createConsolidationCompany = "_createConsolidationCompany";

    /**
     * @var string
     */
    const _createFiscalCalendar = "_createFiscalCalendar";

    /**
     * @var string
     */
    const _createInventoryCounts = "_createInventoryCounts";

    /**
     * @var string
     */
    const _creditCard = "_creditCard";

    /**
     * @var string
     */
    const _creditCardProcessing = "_creditCardProcessing";

    /**
     * @var string
     */
    const _creditCardRefund = "_creditCardRefund";

    /**
     * @var string
     */
    const _creditCardRegisters = "_creditCardRegisters";

    /**
     * @var string
     */
    const _creditMemo = "_creditMemo";

    /**
     * @var string
     */
    const _creditReturns = "_creditReturns";

    /**
     * @var string
     */
    const _crmGroups = "_crmGroups";

    /**
     * @var string
     */
    const _crmLists = "_crmLists";

    /**
     * @var string
     */
    const _currency = "_currency";

    /**
     * @var string
     */
    const _currencyAdjustmentJournal = "_currencyAdjustmentJournal";

    /**
     * @var string
     */
    const _currencyRevaluation = "_currencyRevaluation";

    /**
     * @var string
     */
    const _customAddressForm = "_customAddressForm";

    /**
     * @var string
     */
    const _customBodyFields = "_customBodyFields";

    /**
     * @var string
     */
    const _customCenterCategories = "_customCenterCategories";

    /**
     * @var string
     */
    const _customCenterLinks = "_customCenterLinks";

    /**
     * @var string
     */
    const _customCenters = "_customCenters";

    /**
     * @var string
     */
    const _customCenterTabs = "_customCenterTabs";

    /**
     * @var string
     */
    const _customColumnFields = "_customColumnFields";

    /**
     * @var string
     */
    const _customEntityFields = "_customEntityFields";

    /**
     * @var string
     */
    const _customEntryForms = "_customEntryForms";

    /**
     * @var string
     */
    const _customerCharge = "_customerCharge";

    /**
     * @var string
     */
    const _customerDeposit = "_customerDeposit";

    /**
     * @var string
     */
    const _customerPayment = "_customerPayment";

    /**
     * @var string
     */
    const _customerProfile = "_customerProfile";

    /**
     * @var string
     */
    const _customerRefund = "_customerRefund";

    /**
     * @var string
     */
    const _customers = "_customers";

    /**
     * @var string
     */
    const _customerStatus = "_customerStatus";

    /**
     * @var string
     */
    const _customEventFields = "_customEventFields";

    /**
     * @var string
     */
    const _customFields = "_customFields";

    /**
     * @var string
     */
    const _customHTMLLayouts = "_customHTMLLayouts";

    /**
     * @var string
     */
    const _customItemFields = "_customItemFields";

    /**
     * @var string
     */
    const _customItemNumberFields = "_customItemNumberFields";

    /**
     * @var string
     */
    const _customizePage = "_customizePage";

    /**
     * @var string
     */
    const _customLists = "_customLists";

    /**
     * @var string
     */
    const _customPDFLayouts = "_customPDFLayouts";

    /**
     * @var string
     */
    const _customRecordEntries = "_customRecordEntries";

    /**
     * @var string
     */
    const _customRecordTypes = "_customRecordTypes";

    /**
     * @var string
     */
    const _customSublists = "_customSublists";

    /**
     * @var string
     */
    const _customSubtabs = "_customSubtabs";

    /**
     * @var string
     */
    const _customTransactionFields = "_customTransactionFields";

    /**
     * @var string
     */
    const _customTransactionForms = "_customTransactionForms";

    /**
     * @var string
     */
    const _customTransactionTypes = "_customTransactionTypes";

    /**
     * @var string
     */
    const _deferredExpenseRegisters = "_deferredExpenseRegisters";

    /**
     * @var string
     */
    const _deferredRevenueRegisters = "_deferredRevenueRegisters";

    /**
     * @var string
     */
    const _deleteAllData = "_deleteAllData";

    /**
     * @var string
     */
    const _deletedRecords = "_deletedRecords";

    /**
     * @var string
     */
    const _deleteEvent = "_deleteEvent";

    /**
     * @var string
     */
    const _departments = "_departments";

    /**
     * @var string
     */
    const _departmentSegmentMapping = "_departmentSegmentMapping";

    /**
     * @var string
     */
    const _deposit = "_deposit";

    /**
     * @var string
     */
    const _depositApplication = "_depositApplication";

    /**
     * @var string
     */
    const _directDepositStatus = "_directDepositStatus";

    /**
     * @var string
     */
    const _distributeInventory = "_distributeInventory";

    /**
     * @var string
     */
    const _distributionNetwork = "_distributionNetwork";

    /**
     * @var string
     */
    const _documentsAndFiles = "_documentsAndFiles";

    /**
     * @var string
     */
    const _duplicateCaseManagement = "_duplicateCaseManagement";

    /**
     * @var string
     */
    const _duplicateDetectionSetup = "_duplicateDetectionSetup";

    /**
     * @var string
     */
    const _duplicateRecordManagement = "_duplicateRecordManagement";

    /**
     * @var string
     */
    const _ebayExportImport = "_ebayExportImport";

    /**
     * @var string
     */
    const _editForecast = "_editForecast";

    /**
     * @var string
     */
    const _editManagerForecast = "_editManagerForecast";

    /**
     * @var string
     */
    const _editProfile = "_editProfile";

    /**
     * @var string
     */
    const _eftStatus = "_eftStatus";

    /**
     * @var string
     */
    const _emailReports = "_emailReports";

    /**
     * @var string
     */
    const _emailTemplate = "_emailTemplate";

    /**
     * @var string
     */
    const _employeeCommissionSchedulesPlans = "_employeeCommissionSchedulesPlans";

    /**
     * @var string
     */
    const _employeeCommissionTransaction = "_employeeCommissionTransaction";

    /**
     * @var string
     */
    const _employeeCommissionTransactionApproval = "_employeeCommissionTransactionApproval";

    /**
     * @var string
     */
    const _employeeReminders = "_employeeReminders";

    /**
     * @var string
     */
    const _employees = "_employees";

    /**
     * @var string
     */
    const _employeeSocialSecurityNumbers = "_employeeSocialSecurityNumbers";

    /**
     * @var string
     */
    const _enableFeatures = "_enableFeatures";

    /**
     * @var string
     */
    const _enterCompletions = "_enterCompletions";

    /**
     * @var string
     */
    const _enterOpeningBalances = "_enterOpeningBalances";

    /**
     * @var string
     */
    const _enterVendorCredits = "_enterVendorCredits";

    /**
     * @var string
     */
    const _enterYearToDatePayrollAdjustments = "_enterYearToDatePayrollAdjustments";

    /**
     * @var string
     */
    const _entityAccountMapping = "_entityAccountMapping";

    /**
     * @var string
     */
    const _equityRegisters = "_equityRegisters";

    /**
     * @var string
     */
    const _escalationAssignment = "_escalationAssignment";

    /**
     * @var string
     */
    const _escalationAssignmentRule = "_escalationAssignmentRule";

    /**
     * @var string
     */
    const _establishQuotas = "_establishQuotas";

    /**
     * @var string
     */
    const _estimate = "_estimate";

    /**
     * @var string
     */
    const _events = "_events";

    /**
     * @var string
     */
    const _expenseCategories = "_expenseCategories";

    /**
     * @var string
     */
    const _expenseRegisters = "_expenseRegisters";

    /**
     * @var string
     */
    const _expenseReport = "_expenseReport";

    /**
     * @var string
     */
    const _expenses = "_expenses";

    /**
     * @var string
     */
    const _exportAsIIF = "_exportAsIIF";

    /**
     * @var string
     */
    const _exportLists = "_exportLists";

    /**
     * @var string
     */
    const _faxMessages = "_faxMessages";

    /**
     * @var string
     */
    const _faxTemplate = "_faxTemplate";

    /**
     * @var string
     */
    const _features = "_features";

    /**
     * @var string
     */
    const _financeCharge = "_financeCharge";

    /**
     * @var string
     */
    const _financeChargePreferences = "_financeChargePreferences";

    /**
     * @var string
     */
    const _financialHistory = "_financialHistory";

    /**
     * @var string
     */
    const _financialStatementLayouts = "_financialStatementLayouts";

    /**
     * @var string
     */
    const _financialStatements = "_financialStatements";

    /**
     * @var string
     */
    const _financialStatementSections = "_financialStatementSections";

    /**
     * @var string
     */
    const _findMatchingOnlineBankingTransactions = "_findMatchingOnlineBankingTransactions";

    /**
     * @var string
     */
    const _findTransaction = "_findTransaction";

    /**
     * @var string
     */
    const _fiscalCalendars = "_fiscalCalendars";

    /**
     * @var string
     */
    const _fixedAssetRegisters = "_fixedAssetRegisters";

    /**
     * @var string
     */
    const _form1099FederalMiscellaneousIncome = "_form1099FederalMiscellaneousIncome";

    /**
     * @var string
     */
    const _form940EmployersAnnualFederalUnemploymentTaxReturn = "_form940EmployersAnnualFederalUnemploymentTaxReturn";

    /**
     * @var string
     */
    const _form941EmployersQuarterlyFederalTaxReturn = "_form941EmployersQuarterlyFederalTaxReturn";

    /**
     * @var string
     */
    const _formW2WageAndTaxStatement = "_formW2WageAndTaxStatement";

    /**
     * @var string
     */
    const _formW4EmployeesWithholdingAllowanceCertificate = "_formW4EmployeesWithholdingAllowanceCertificate";

    /**
     * @var string
     */
    const _fulfillOrders = "_fulfillOrders";

    /**
     * @var string
     */
    const _generalLedger = "_generalLedger";

    /**
     * @var string
     */
    const _generatePriceLists = "_generatePriceLists";

    /**
     * @var string
     */
    const _generateRevenueCommitment = "_generateRevenueCommitment";

    /**
     * @var string
     */
    const _generateRevenueCommitmentReversals = "_generateRevenueCommitmentReversals";

    /**
     * @var string
     */
    const _generateSingleOrderRevenueContracts = "_generateSingleOrderRevenueContracts";

    /**
     * @var string
     */
    const _generateStatements = "_generateStatements";

    /**
     * @var string
     */
    const _genericAdminPermission = "_genericAdminPermission";

    /**
     * @var string
     */
    const _genericResources = "_genericResources";

    /**
     * @var string
     */
    const _globalAccountMapping = "_globalAccountMapping";

    /**
     * @var string
     */
    const _grantingAccessToReports = "_grantingAccessToReports";

    /**
     * @var string
     */
    const _gstSummaryReport = "_gstSummaryReport";

    /**
     * @var string
     */
    const _importCSVFile = "_importCSVFile";

    /**
     * @var string
     */
    const _importOnlineBankingQIFFile = "_importOnlineBankingQIFFile";

    /**
     * @var string
     */
    const _importQuickenQIFFile = "_importQuickenQIFFile";

    /**
     * @var string
     */
    const _importStateSalesTax = "_importStateSalesTax";

    /**
     * @var string
     */
    const _income = "_income";

    /**
     * @var string
     */
    const _incomeRegisters = "_incomeRegisters";

    /**
     * @var string
     */
    const _incomeStatement = "_incomeStatement";

    /**
     * @var string
     */
    const _individualPaycheck = "_individualPaycheck";

    /**
     * @var string
     */
    const _integration = "_integration";

    /**
     * @var string
     */
    const _intercompanyAdjustments = "_intercompanyAdjustments";

    /**
     * @var string
     */
    const _internalPublisher = "_internalPublisher";

    /**
     * @var string
     */
    const _inventory = "_inventory";

    /**
     * @var string
     */
    const _inventoryCostTemplate = "_inventoryCostTemplate";

    /**
     * @var string
     */
    const _invoice = "_invoice";

    /**
     * @var string
     */
    const _invoiceApproval = "_invoiceApproval";

    /**
     * @var string
     */
    const _issueComponents = "_issueComponents";

    /**
     * @var string
     */
    const _issueReports = "_issueReports";

    /**
     * @var string
     */
    const _issues = "_issues";

    /**
     * @var string
     */
    const _issueSetup = "_issueSetup";

    /**
     * @var string
     */
    const _itemAccountMapping = "_itemAccountMapping";

    /**
     * @var string
     */
    const _itemCategoryLayouts = "_itemCategoryLayouts";

    /**
     * @var string
     */
    const _itemDemandPlan = "_itemDemandPlan";

    /**
     * @var string
     */
    const _itemFulfillment = "_itemFulfillment";

    /**
     * @var string
     */
    const _itemReceipt = "_itemReceipt";

    /**
     * @var string
     */
    const _itemRevisions = "_itemRevisions";

    /**
     * @var string
     */
    const _items = "_items";

    /**
     * @var string
     */
    const _itemSupplyPlan = "_itemSupplyPlan";

    /**
     * @var string
     */
    const _itemTemplates = "_itemTemplates";

    /**
     * @var string
     */
    const _jobs = "_jobs";

    /**
     * @var string
     */
    const _journalApproval = "_journalApproval";

    /**
     * @var string
     */
    const _knowledgeBase = "_knowledgeBase";

    /**
     * @var string
     */
    const _kpiScorecards = "_kpiScorecards";

    /**
     * @var string
     */
    const _leadConversion = "_leadConversion";

    /**
     * @var string
     */
    const _leadConversionMapping = "_leadConversionMapping";

    /**
     * @var string
     */
    const _leadSnapshotReminders = "_leadSnapshotReminders";

    /**
     * @var string
     */
    const _letterMessages = "_letterMessages";

    /**
     * @var string
     */
    const _letterTemplate = "_letterTemplate";

    /**
     * @var string
     */
    const _loadSampleData = "_loadSampleData";

    /**
     * @var string
     */
    const _locations = "_locations";

    /**
     * @var string
     */
    const _locationSegmentMapping = "_locationSegmentMapping";

    /**
     * @var string
     */
    const _lockTransactions = "_lockTransactions";

    /**
     * @var string
     */
    const _logInUsingAccessTokens = "_logInUsingAccessTokens";

    /**
     * @var string
     */
    const _longTermLiabilityRegisters = "_longTermLiabilityRegisters";

    /**
     * @var string
     */
    const _mailMerge = "_mailMerge";

    /**
     * @var string
     */
    const _makeJournalEntry = "_makeJournalEntry";

    /**
     * @var string
     */
    const _manageAccountingPeriods = "_manageAccountingPeriods";

    /**
     * @var string
     */
    const _managePayroll = "_managePayroll";

    /**
     * @var string
     */
    const _manageRoles = "_manageRoles";

    /**
     * @var string
     */
    const _manageTaxReportingPeriods = "_manageTaxReportingPeriods";

    /**
     * @var string
     */
    const _manageUsers = "_manageUsers";

    /**
     * @var string
     */
    const _manufacturingCostTemplate = "_manufacturingCostTemplate";

    /**
     * @var string
     */
    const _manufacturingRouting = "_manufacturingRouting";

    /**
     * @var string
     */
    const _marketingCampaignReports = "_marketingCampaignReports";

    /**
     * @var string
     */
    const _marketingCampaigns = "_marketingCampaigns";

    /**
     * @var string
     */
    const _marketingTemplate = "_marketingTemplate";

    /**
     * @var string
     */
    const _markIssueAsShowStopper = "_markIssueAsShowStopper";

    /**
     * @var string
     */
    const _markWorkOrdersBuilt = "_markWorkOrdersBuilt";

    /**
     * @var string
     */
    const _markWorkOrdersFirmed = "_markWorkOrdersFirmed";

    /**
     * @var string
     */
    const _markWorkOrdersReleased = "_markWorkOrdersReleased";

    /**
     * @var string
     */
    const _massUpdates = "_massUpdates";

    /**
     * @var string
     */
    const _mediaFolders = "_mediaFolders";

    /**
     * @var string
     */
    const _memorizedTransactions = "_memorizedTransactions";

    /**
     * @var string
     */
    const _mobileDeviceAccess = "_mobileDeviceAccess";

    /**
     * @var string
     */
    const _netWorth = "_netWorth";

    /**
     * @var string
     */
    const _nonPostingRegisters = "_nonPostingRegisters";

    /**
     * @var string
     */
    const _noPermissionNecessary = "_noPermissionNecessary";

    /**
     * @var string
     */
    const _notesTab = "_notesTab";

    /**
     * @var string
     */
    const _offlineClient = "_offlineClient";

    /**
     * @var string
     */
    const _onlineBankingStatement = "_onlineBankingStatement";

    /**
     * @var string
     */
    const _onlineCaseForm = "_onlineCaseForm";

    /**
     * @var string
     */
    const _onlineCustomerForm = "_onlineCustomerForm";

    /**
     * @var string
     */
    const _onlineCustomRecordForm = "_onlineCustomRecordForm";

    /**
     * @var string
     */
    const _openidSingleSignOn = "_openidSingleSignOn";

    /**
     * @var string
     */
    const _opportunity = "_opportunity";

    /**
     * @var string
     */
    const _otherAssetRegisters = "_otherAssetRegisters";

    /**
     * @var string
     */
    const _otherCurrentAssetRegisters = "_otherCurrentAssetRegisters";

    /**
     * @var string
     */
    const _otherCurrentLiabilityRegisters = "_otherCurrentLiabilityRegisters";

    /**
     * @var string
     */
    const _otherCustomFields = "_otherCustomFields";

    /**
     * @var string
     */
    const _otherExpenseRegisters = "_otherExpenseRegisters";

    /**
     * @var string
     */
    const _otherIncomeRegisters = "_otherIncomeRegisters";

    /**
     * @var string
     */
    const _otherLists = "_otherLists";

    /**
     * @var string
     */
    const _otherNames = "_otherNames";

    /**
     * @var string
     */
    const _outlookIntegration = "_outlookIntegration";

    /**
     * @var string
     */
    const _outlookIntegration3 = "_outlookIntegration3";

    /**
     * @var string
     */
    const _overrideEstimatedCostOnTransactions = "_overrideEstimatedCostOnTransactions";

    /**
     * @var string
     */
    const _overridePaymentHold = "_overridePaymentHold";

    /**
     * @var string
     */
    const _overridePeriodRestrictions = "_overridePeriodRestrictions";

    /**
     * @var string
     */
    const _partnerAuthorizedCommissionReports = "_partnerAuthorizedCommissionReports";

    /**
     * @var string
     */
    const _partnerCommissionReports = "_partnerCommissionReports";

    /**
     * @var string
     */
    const _partnerCommissionSchedulesPlans = "_partnerCommissionSchedulesPlans";

    /**
     * @var string
     */
    const _partnerCommissionTransaction = "_partnerCommissionTransaction";

    /**
     * @var string
     */
    const _partnerCommissionTransactionApproval = "_partnerCommissionTransactionApproval";

    /**
     * @var string
     */
    const _partnerContribution = "_partnerContribution";

    /**
     * @var string
     */
    const _partnerMonitorResults = "_partnerMonitorResults";

    /**
     * @var string
     */
    const _partners = "_partners";

    /**
     * @var string
     */
    const _payBills = "_payBills";

    /**
     * @var string
     */
    const _paycheckJournal = "_paycheckJournal";

    /**
     * @var string
     */
    const _paychecks = "_paychecks";

    /**
     * @var string
     */
    const _paymentMethods = "_paymentMethods";

    /**
     * @var string
     */
    const _payrollCheckRegister = "_payrollCheckRegister";

    /**
     * @var string
     */
    const _payrollHoursAndEarnings = "_payrollHoursAndEarnings";

    /**
     * @var string
     */
    const _payrollItems = "_payrollItems";

    /**
     * @var string
     */
    const _payrollJournalReport = "_payrollJournalReport";

    /**
     * @var string
     */
    const _payrollLiabilityPayments = "_payrollLiabilityPayments";

    /**
     * @var string
     */
    const _payrollLiabilityReport = "_payrollLiabilityReport";

    /**
     * @var string
     */
    const _payrollStateWithholding = "_payrollStateWithholding";

    /**
     * @var string
     */
    const _payrollSummaryAndDetailReports = "_payrollSummaryAndDetailReports";

    /**
     * @var string
     */
    const _paySalesTax = "_paySalesTax";

    /**
     * @var string
     */
    const _payTaxLiability = "_payTaxLiability";

    /**
     * @var string
     */
    const _pdfMessages = "_pdfMessages";

    /**
     * @var string
     */
    const _pdfTemplate = "_pdfTemplate";

    /**
     * @var string
     */
    const _performSearch = "_performSearch";

    /**
     * @var string
     */
    const _persistSearch = "_persistSearch";

    /**
     * @var string
     */
    const _phasedProcesses = "_phasedProcesses";

    /**
     * @var string
     */
    const _phoneCalls = "_phoneCalls";

    /**
     * @var string
     */
    const _plannedStandardCost = "_plannedStandardCost";

    /**
     * @var string
     */
    const _positions = "_positions";

    /**
     * @var string
     */
    const _postingPeriodOnTransactions = "_postingPeriodOnTransactions";

    /**
     * @var string
     */
    const _postTime = "_postTime";

    /**
     * @var string
     */
    const _postVendorBillVariances = "_postVendorBillVariances";

    /**
     * @var string
     */
    const _presentationCategories = "_presentationCategories";

    /**
     * @var string
     */
    const _printChecksAndForms = "_printChecksAndForms";

    /**
     * @var string
     */
    const _printEmailFax = "_printEmailFax";

    /**
     * @var string
     */
    const _printShipmentDocuments = "_printShipmentDocuments";

    /**
     * @var string
     */
    const _processGSTRefund = "_processGSTRefund";

    /**
     * @var string
     */
    const _processPayroll = "_processPayroll";

    /**
     * @var string
     */
    const _projectProjectTemplateConversion = "_projectProjectTemplateConversion";

    /**
     * @var string
     */
    const _projectTasks = "_projectTasks";

    /**
     * @var string
     */
    const _projectTemplates = "_projectTemplates";

    /**
     * @var string
     */
    const _promotionCode = "_promotionCode";

    /**
     * @var string
     */
    const _provisioning = "_provisioning";

    /**
     * @var string
     */
    const _provisioningForQa = "_provisioningForQa";

    /**
     * @var string
     */
    const _provisionTestDrive = "_provisionTestDrive";

    /**
     * @var string
     */
    const _pstSummaryReport = "_pstSummaryReport";

    /**
     * @var string
     */
    const _publicTemplateCategories = "_publicTemplateCategories";

    /**
     * @var string
     */
    const _publishDashboards = "_publishDashboards";

    /**
     * @var string
     */
    const _publishEmployeeList = "_publishEmployeeList";

    /**
     * @var string
     */
    const _publisherApplications = "_publisherApplications";

    /**
     * @var string
     */
    const _publisherId = "_publisherId";

    /**
     * @var string
     */
    const _publishForms = "_publishForms";

    /**
     * @var string
     */
    const _publishKnowledgeBase = "_publishKnowledgeBase";

    /**
     * @var string
     */
    const _publishRSSFeeds = "_publishRSSFeeds";

    /**
     * @var string
     */
    const _publishSearch = "_publishSearch";

    /**
     * @var string
     */
    const _purchaseContract = "_purchaseContract";

    /**
     * @var string
     */
    const _purchaseContractApproval = "_purchaseContractApproval";

    /**
     * @var string
     */
    const _purchaseOrder = "_purchaseOrder";

    /**
     * @var string
     */
    const _purchaseOrderReports = "_purchaseOrderReports";

    /**
     * @var string
     */
    const _purchases = "_purchases";

    /**
     * @var string
     */
    const _quantityPricingSchedules = "_quantityPricingSchedules";

    /**
     * @var string
     */
    const _quotaReports = "_quotaReports";

    /**
     * @var string
     */
    const _receiveOrder = "_receiveOrder";

    /**
     * @var string
     */
    const _receiveReturns = "_receiveReturns";

    /**
     * @var string
     */
    const _recognizeGiftCertificateIncome = "_recognizeGiftCertificateIncome";

    /**
     * @var string
     */
    const _reconcile = "_reconcile";

    /**
     * @var string
     */
    const _reconcileReporting = "_reconcileReporting";

    /**
     * @var string
     */
    const _recordCustomField = "_recordCustomField";

    /**
     * @var string
     */
    const _refundReturns = "_refundReturns";

    /**
     * @var string
     */
    const _relatedItems = "_relatedItems";

    /**
     * @var string
     */
    const _reportCustomization = "_reportCustomization";

    /**
     * @var string
     */
    const _reportScheduling = "_reportScheduling";

    /**
     * @var string
     */
    const _requestForQuote = "_requestForQuote";

    /**
     * @var string
     */
    const _requisition = "_requisition";

    /**
     * @var string
     */
    const _requisitionApproval = "_requisitionApproval";

    /**
     * @var string
     */
    const _resource = "_resource";

    /**
     * @var string
     */
    const _resourceAllocationApproval = "_resourceAllocationApproval";

    /**
     * @var string
     */
    const _resourceAllocationReports = "_resourceAllocationReports";

    /**
     * @var string
     */
    const _resourceAllocations = "_resourceAllocations";

    /**
     * @var string
     */
    const _returnAuthApproval = "_returnAuthApproval";

    /**
     * @var string
     */
    const _returnAuthorization = "_returnAuthorization";

    /**
     * @var string
     */
    const _returnAuthorizationReports = "_returnAuthorizationReports";

    /**
     * @var string
     */
    const _revalueInventoryCost = "_revalueInventoryCost";

    /**
     * @var string
     */
    const _revenueCommitment = "_revenueCommitment";

    /**
     * @var string
     */
    const _revenueCommitmentReversal = "_revenueCommitmentReversal";

    /**
     * @var string
     */
    const _revenueContracts = "_revenueContracts";

    /**
     * @var string
     */
    const _revenueManagementVSOE = "_revenueManagementVSOE";

    /**
     * @var string
     */
    const _revenueRecognitionReports = "_revenueRecognitionReports";

    /**
     * @var string
     */
    const _revenueRecognitionSchedules = "_revenueRecognitionSchedules";

    /**
     * @var string
     */
    const _roles = "_roles";

    /**
     * @var string
     */
    const _runPayroll = "_runPayroll";

    /**
     * @var string
     */
    const _sales = "_sales";

    /**
     * @var string
     */
    const _salesByPartner = "_salesByPartner";

    /**
     * @var string
     */
    const _salesByPromotionCode = "_salesByPromotionCode";

    /**
     * @var string
     */
    const _salesCampaigns = "_salesCampaigns";

    /**
     * @var string
     */
    const _salesForceAutomation = "_salesForceAutomation";

    /**
     * @var string
     */
    const _salesForceAutomationSetup = "_salesForceAutomationSetup";

    /**
     * @var string
     */
    const _salesOrder = "_salesOrder";

    /**
     * @var string
     */
    const _salesOrderApproval = "_salesOrderApproval";

    /**
     * @var string
     */
    const _salesOrderFulfillmentReports = "_salesOrderFulfillmentReports";

    /**
     * @var string
     */
    const _salesOrderReports = "_salesOrderReports";

    /**
     * @var string
     */
    const _salesOrderTransactionReport = "_salesOrderTransactionReport";

    /**
     * @var string
     */
    const _salesRoles = "_salesRoles";

    /**
     * @var string
     */
    const _salesTerritory = "_salesTerritory";

    /**
     * @var string
     */
    const _salesTerritoryRule = "_salesTerritoryRule";

    /**
     * @var string
     */
    const _samlSingleSignOn = "_samlSingleSignOn";

    /**
     * @var string
     */
    const _scheduleMassUpdates = "_scheduleMassUpdates";

    /**
     * @var string
     */
    const _setUpAccounting = "_setUpAccounting";

    /**
     * @var string
     */
    const _setUpAchProcessing = "_setUpAchProcessing";

    /**
     * @var string
     */
    const _setUpAdpPayroll = "_setUpAdpPayroll";

    /**
     * @var string
     */
    const _setUpBillPay = "_setUpBillPay";

    /**
     * @var string
     */
    const _setUpBudgets = "_setUpBudgets";

    /**
     * @var string
     */
    const _setUpCampaignEmailAddresses = "_setUpCampaignEmailAddresses";

    /**
     * @var string
     */
    const _setupCampaigns = "_setupCampaigns";

    /**
     * @var string
     */
    const _setUpCompany = "_setUpCompany";

    /**
     * @var string
     */
    const _setUpCsvPreferences = "_setUpCsvPreferences";

    /**
     * @var string
     */
    const _setUpDomains = "_setUpDomains";

    /**
     * @var string
     */
    const _setUpEbay = "_setUpEbay";

    /**
     * @var string
     */
    const _setUpImageResizing = "_setUpImageResizing";

    /**
     * @var string
     */
    const _setUpOpenidSingleSignOn = "_setUpOpenidSingleSignOn";

    /**
     * @var string
     */
    const _setUpPartnerMonitor = "_setUpPartnerMonitor";

    /**
     * @var string
     */
    const _setUpPayroll = "_setUpPayroll";

    /**
     * @var string
     */
    const _setUpReminders = "_setUpReminders";

    /**
     * @var string
     */
    const _setUpSamlSingleSignOn = "_setUpSamlSingleSignOn";

    /**
     * @var string
     */
    const _setUpSnapshots = "_setUpSnapshots";

    /**
     * @var string
     */
    const _setUpSynchronization = "_setUpSynchronization";

    /**
     * @var string
     */
    const _setUpWebServices = "_setUpWebServices";

    /**
     * @var string
     */
    const _setUpWebSite = "_setUpWebSite";

    /**
     * @var string
     */
    const _setUpYearStatus = "_setUpYearStatus";

    /**
     * @var string
     */
    const _shippingItems = "_shippingItems";

    /**
     * @var string
     */
    const _shippingPartnerPackage = "_shippingPartnerPackage";

    /**
     * @var string
     */
    const _shippingPartnerRegistration = "_shippingPartnerRegistration";

    /**
     * @var string
     */
    const _shippingPartnerShipment = "_shippingPartnerShipment";

    /**
     * @var string
     */
    const _shortcuts = "_shortcuts";

    /**
     * @var string
     */
    const _standardCostVersion = "_standardCostVersion";

    /**
     * @var string
     */
    const _statementCharge = "_statementCharge";

    /**
     * @var string
     */
    const _statisticalAccountRegisters = "_statisticalAccountRegisters";

    /**
     * @var string
     */
    const _storeCategories = "_storeCategories";

    /**
     * @var string
     */
    const _storeContentCategories = "_storeContentCategories";

    /**
     * @var string
     */
    const _storeContentItems = "_storeContentItems";

    /**
     * @var string
     */
    const _storeLogoUpload = "_storeLogoUpload";

    /**
     * @var string
     */
    const _storeTabs = "_storeTabs";

    /**
     * @var string
     */
    const _subsidiaries = "_subsidiaries";

    /**
     * @var string
     */
    const _suiteAppInstallation = "_suiteAppInstallation";

    /**
     * @var string
     */
    const _suiteBundler = "_suiteBundler";

    /**
     * @var string
     */
    const _suiteBundlerUpgrades = "_suiteBundlerUpgrades";

    /**
     * @var string
     */
    const _suiteScript = "_suiteScript";

    /**
     * @var string
     */
    const _suiteSignon = "_suiteSignon";

    /**
     * @var string
     */
    const _support = "_support";

    /**
     * @var string
     */
    const _supportCaseIssue = "_supportCaseIssue";

    /**
     * @var string
     */
    const _supportCaseOrigin = "_supportCaseOrigin";

    /**
     * @var string
     */
    const _supportCasePriority = "_supportCasePriority";

    /**
     * @var string
     */
    const _supportCaseSnapshotReminders = "_supportCaseSnapshotReminders";

    /**
     * @var string
     */
    const _supportCaseStatus = "_supportCaseStatus";

    /**
     * @var string
     */
    const _supportCaseTerritory = "_supportCaseTerritory";

    /**
     * @var string
     */
    const _supportCaseTerritoryRule = "_supportCaseTerritoryRule";

    /**
     * @var string
     */
    const _supportCaseType = "_supportCaseType";

    /**
     * @var string
     */
    const _supportSetup = "_supportSetup";

    /**
     * @var string
     */
    const _swapPricesBetweenPriceLevels = "_swapPricesBetweenPriceLevels";

    /**
     * @var string
     */
    const _systemEmailTemplate = "_systemEmailTemplate";

    /**
     * @var string
     */
    const _systemStatus = "_systemStatus";

    /**
     * @var string
     */
    const _tasks = "_tasks";

    /**
     * @var string
     */
    const _tax = "_tax";

    /**
     * @var string
     */
    const _taxItems = "_taxItems";

    /**
     * @var string
     */
    const _taxSchedules = "_taxSchedules";

    /**
     * @var string
     */
    const _teamSellingContribution = "_teamSellingContribution";

    /**
     * @var string
     */
    const _tegataAccounts = "_tegataAccounts";

    /**
     * @var string
     */
    const _tegataPayable = "_tegataPayable";

    /**
     * @var string
     */
    const _tegataReceivable = "_tegataReceivable";

    /**
     * @var string
     */
    const _telephonyIntegration = "_telephonyIntegration";

    /**
     * @var string
     */
    const _templateCategories = "_templateCategories";

    /**
     * @var string
     */
    const _terminationReasons = "_terminationReasons";

    /**
     * @var string
     */
    const _testdriveMasters = "_testdriveMasters";

    /**
     * @var string
     */
    const _timer = "_timer";

    /**
     * @var string
     */
    const _timeTracking = "_timeTracking";

    /**
     * @var string
     */
    const _trackMessages = "_trackMessages";

    /**
     * @var string
     */
    const _trackTime = "_trackTime";

    /**
     * @var string
     */
    const _transactionDetail = "_transactionDetail";

    /**
     * @var string
     */
    const _transactionNumberingAuditLog = "_transactionNumberingAuditLog";

    /**
     * @var string
     */
    const _transferFunds = "_transferFunds";

    /**
     * @var string
     */
    const _transferInventory = "_transferInventory";

    /**
     * @var string
     */
    const _transferOrder = "_transferOrder";

    /**
     * @var string
     */
    const _transferOrderApproval = "_transferOrderApproval";

    /**
     * @var string
     */
    const _translation = "_translation";

    /**
     * @var string
     */
    const _trialBalance = "_trialBalance";

    /**
     * @var string
     */
    const _twoFactorAuthentication = "_twoFactorAuthentication";

    /**
     * @var string
     */
    const _unbilledReceivableRegisters = "_unbilledReceivableRegisters";

    /**
     * @var string
     */
    const _unbuildAssemblies = "_unbuildAssemblies";

    /**
     * @var string
     */
    const _uncategorizedPresentationItems = "_uncategorizedPresentationItems";

    /**
     * @var string
     */
    const _units = "_units";

    /**
     * @var string
     */
    const _updatePrices = "_updatePrices";

    /**
     * @var string
     */
    const _upsellAssistant = "_upsellAssistant";

    /**
     * @var string
     */
    const _upsellSetup = "_upsellSetup";

    /**
     * @var string
     */
    const _upsellWizard = "_upsellWizard";

    /**
     * @var string
     */
    const _userAccessTokens = "_userAccessTokens";

    /**
     * @var string
     */
    const _userPreferences = "_userPreferences";

    /**
     * @var string
     */
    const _usersAndPasswords = "_usersAndPasswords";

    /**
     * @var string
     */
    const _vendorBillApproval = "_vendorBillApproval";

    /**
     * @var string
     */
    const _vendorPaymentStatus = "_vendorPaymentStatus";

    /**
     * @var string
     */
    const _vendorRequestForQuote = "_vendorRequestForQuote";

    /**
     * @var string
     */
    const _vendorReturnAuthApproval = "_vendorReturnAuthApproval";

    /**
     * @var string
     */
    const _vendorReturnAuthorization = "_vendorReturnAuthorization";

    /**
     * @var string
     */
    const _vendorReturns = "_vendorReturns";

    /**
     * @var string
     */
    const _vendors = "_vendors";

    /**
     * @var string
     */
    const _viewLoginAuditTrail = "_viewLoginAuditTrail";

    /**
     * @var string
     */
    const _viewOnlineBillPayStatus = "_viewOnlineBillPayStatus";

    /**
     * @var string
     */
    const _viewPaymentEvents = "_viewPaymentEvents";

    /**
     * @var string
     */
    const _viewUnencryptedCreditCards = "_viewUnencryptedCreditCards";

    /**
     * @var string
     */
    const _webServices = "_webServices";

    /**
     * @var string
     */
    const _webSiteExternalPublisher = "_webSiteExternalPublisher";

    /**
     * @var string
     */
    const _webSiteManagement = "_webSiteManagement";

    /**
     * @var string
     */
    const _webSiteReport = "_webSiteReport";

    /**
     * @var string
     */
    const _webStoreEmailTemplate = "_webStoreEmailTemplate";

    /**
     * @var string
     */
    const _webStoreReport = "_webStoreReport";

    /**
     * @var string
     */
    const _workCalendar = "_workCalendar";

    /**
     * @var string
     */
    const _workflow = "_workflow";

    /**
     * @var string
     */
    const _workOrder = "_workOrder";

    /**
     * @var string
     */
    const _workOrderClose = "_workOrderClose";

    /**
     * @var string
     */
    const _workOrderCompletion = "_workOrderCompletion";

    /**
     * @var string
     */
    const _workOrderIssue = "_workOrderIssue";

    /**
     * @var string
     */
    const _workplaces = "_workplaces";
}