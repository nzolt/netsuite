<?php

namespace Nzolt\NetSuite;

class TransactionSearchRow extends SearchRow
{

    /**
     * @var TransactionSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchRowBasic $accountJoin
     */
    protected $accountJoin = null;

    /**
     * @var AccountingPeriodSearchRowBasic $accountingPeriodJoin
     */
    protected $accountingPeriodJoin = null;

    /**
     * @var AccountingTransactionSearchRowBasic $accountingTransactionJoin
     */
    protected $accountingTransactionJoin = null;

    /**
     * @var AccountSearchRowBasic $advanceToApplyAccountJoin
     */
    protected $advanceToApplyAccountJoin = null;

    /**
     * @var TransactionSearchRowBasic $appliedToTransactionJoin
     */
    protected $appliedToTransactionJoin = null;

    /**
     * @var TransactionSearchRowBasic $applyingTransactionJoin
     */
    protected $applyingTransactionJoin = null;

    /**
     * @var AddressSearchRowBasic $billingAddressJoin
     */
    protected $billingAddressJoin = null;

    /**
     * @var TransactionSearchRowBasic $billingTransactionJoin
     */
    protected $billingTransactionJoin = null;

    /**
     * @var BinSearchRowBasic $binNumberJoin
     */
    protected $binNumberJoin = null;

    /**
     * @var PhoneCallSearchRowBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var SupportCaseSearchRowBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ClassificationSearchRowBasic $classJoin
     */
    protected $classJoin = null;

    /**
     * @var TransactionSearchRowBasic $cogsPurchaseJoin
     */
    protected $cogsPurchaseJoin = null;

    /**
     * @var TransactionSearchRowBasic $cogsSaleJoin
     */
    protected $cogsSaleJoin = null;

    /**
     * @var ContactSearchRowBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var TransactionSearchRowBasic $createdFromJoin
     */
    protected $createdFromJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerMainJoin
     */
    protected $customerMainJoin = null;

    /**
     * @var DepartmentSearchRowBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var TransactionSearchRowBasic $depositTransactionJoin
     */
    protected $depositTransactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var CalendarEventSearchRowBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var ExpenseCategorySearchRowBasic $expenseCategoryJoin
     */
    protected $expenseCategoryJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var LocationSearchRowBasic $fromLocationJoin
     */
    protected $fromLocationJoin = null;

    /**
     * @var TransactionSearchRowBasic $fulfillingTransactionJoin
     */
    protected $fulfillingTransactionJoin = null;

    /**
     * @var BillingAccountSearchRowBasic $headerBillingAccountJoin
     */
    protected $headerBillingAccountJoin = null;

    /**
     * @var InventoryDetailSearchRowBasic $inventoryDetailJoin
     */
    protected $inventoryDetailJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var InventoryNumberSearchRowBasic $itemNumberJoin
     */
    protected $itemNumberJoin = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var JobSearchRowBasic $jobMainJoin
     */
    protected $jobMainJoin = null;

    /**
     * @var CampaignSearchRowBasic $leadSourceJoin
     */
    protected $leadSourceJoin = null;

    /**
     * @var BillingAccountSearchRowBasic $lineBillingAccountJoin
     */
    protected $lineBillingAccountJoin = null;

    /**
     * @var LocationSearchRowBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin
     */
    protected $manufacturingOperationTaskJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var EntitySearchRowBasic $nextApproverJoin
     */
    protected $nextApproverJoin = null;

    /**
     * @var OpportunitySearchRowBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var TransactionSearchRowBasic $paidTransactionJoin
     */
    protected $paidTransactionJoin = null;

    /**
     * @var PartnerSearchRowBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var TransactionSearchRowBasic $payingTransactionJoin
     */
    protected $payingTransactionJoin = null;

    /**
     * @var PayrollItemSearchRowBasic $payrollItemJoin
     */
    protected $payrollItemJoin = null;

    /**
     * @var ProjectTaskSearchRowBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var TransactionSearchRowBasic $purchaseOrderJoin
     */
    protected $purchaseOrderJoin = null;

    /**
     * @var EmployeeSearchRowBasic $requestorJoin
     */
    protected $requestorJoin = null;

    /**
     * @var TransactionSearchRowBasic $revCommittingTransactionJoin
     */
    protected $revCommittingTransactionJoin = null;

    /**
     * @var ItemRevisionSearchRowBasic $revisionJoin
     */
    protected $revisionJoin = null;

    /**
     * @var RevRecScheduleSearchRowBasic $revRecScheduleJoin
     */
    protected $revRecScheduleJoin = null;

    /**
     * @var TransactionSearchRowBasic $rgPostingTransactionJoin
     */
    protected $rgPostingTransactionJoin = null;

    /**
     * @var TransactionSearchRowBasic $salesOrderJoin
     */
    protected $salesOrderJoin = null;

    /**
     * @var EmployeeSearchRowBasic $salesRepJoin
     */
    protected $salesRepJoin = null;

    /**
     * @var AddressSearchRowBasic $shippingAddressJoin
     */
    protected $shippingAddressJoin = null;

    /**
     * @var SubsidiarySearchRowBasic $subsidiaryJoin
     */
    protected $subsidiaryJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var SalesTaxItemSearchRowBasic $taxCodeJoin
     */
    protected $taxCodeJoin = null;

    /**
     * @var TaxDetailSearchRowBasic $taxDetailJoin
     */
    protected $taxDetailJoin = null;

    /**
     * @var SalesTaxItemSearchRowBasic $taxItemJoin
     */
    protected $taxItemJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var LocationSearchRowBasic $toLocationJoin
     */
    protected $toLocationJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchRowBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var VendorSearchRowBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var VendorSearchRowBasic $vendorLineJoin
     */
    protected $vendorLineJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TransactionSearchRowBasic $basic
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin()
    {
      return $this->accountJoin;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
      return $this;
    }

    /**
     * @return AccountingPeriodSearchRowBasic
     */
    public function getAccountingPeriodJoin()
    {
      return $this->accountingPeriodJoin;
    }

    /**
     * @param AccountingPeriodSearchRowBasic $accountingPeriodJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setAccountingPeriodJoin($accountingPeriodJoin)
    {
      $this->accountingPeriodJoin = $accountingPeriodJoin;
      return $this;
    }

    /**
     * @return AccountingTransactionSearchRowBasic
     */
    public function getAccountingTransactionJoin()
    {
      return $this->accountingTransactionJoin;
    }

    /**
     * @param AccountingTransactionSearchRowBasic $accountingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setAccountingTransactionJoin($accountingTransactionJoin)
    {
      $this->accountingTransactionJoin = $accountingTransactionJoin;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAdvanceToApplyAccountJoin()
    {
      return $this->advanceToApplyAccountJoin;
    }

    /**
     * @param AccountSearchRowBasic $advanceToApplyAccountJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setAdvanceToApplyAccountJoin($advanceToApplyAccountJoin)
    {
      $this->advanceToApplyAccountJoin = $advanceToApplyAccountJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getAppliedToTransactionJoin()
    {
      return $this->appliedToTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $appliedToTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setAppliedToTransactionJoin($appliedToTransactionJoin)
    {
      $this->appliedToTransactionJoin = $appliedToTransactionJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getApplyingTransactionJoin()
    {
      return $this->applyingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $applyingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setApplyingTransactionJoin($applyingTransactionJoin)
    {
      $this->applyingTransactionJoin = $applyingTransactionJoin;
      return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getBillingAddressJoin()
    {
      return $this->billingAddressJoin;
    }

    /**
     * @param AddressSearchRowBasic $billingAddressJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setBillingAddressJoin($billingAddressJoin)
    {
      $this->billingAddressJoin = $billingAddressJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getBillingTransactionJoin()
    {
      return $this->billingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $billingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setBillingTransactionJoin($billingTransactionJoin)
    {
      $this->billingTransactionJoin = $billingTransactionJoin;
      return $this;
    }

    /**
     * @return BinSearchRowBasic
     */
    public function getBinNumberJoin()
    {
      return $this->binNumberJoin;
    }

    /**
     * @param BinSearchRowBasic $binNumberJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setBinNumberJoin($binNumberJoin)
    {
      $this->binNumberJoin = $binNumberJoin;
      return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin()
    {
      return $this->callJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin()
    {
      return $this->classJoin;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setClassJoin($classJoin)
    {
      $this->classJoin = $classJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getCogsPurchaseJoin()
    {
      return $this->cogsPurchaseJoin;
    }

    /**
     * @param TransactionSearchRowBasic $cogsPurchaseJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCogsPurchaseJoin($cogsPurchaseJoin)
    {
      $this->cogsPurchaseJoin = $cogsPurchaseJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getCogsSaleJoin()
    {
      return $this->cogsSaleJoin;
    }

    /**
     * @param TransactionSearchRowBasic $cogsSaleJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCogsSaleJoin($cogsSaleJoin)
    {
      $this->cogsSaleJoin = $cogsSaleJoin;
      return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin()
    {
      return $this->contactPrimaryJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getCreatedFromJoin()
    {
      return $this->createdFromJoin;
    }

    /**
     * @param TransactionSearchRowBasic $createdFromJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCreatedFromJoin($createdFromJoin)
    {
      $this->createdFromJoin = $createdFromJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerMainJoin()
    {
      return $this->customerMainJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerMainJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCustomerMainJoin($customerMainJoin)
    {
      $this->customerMainJoin = $customerMainJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getDepositTransactionJoin()
    {
      return $this->depositTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $depositTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setDepositTransactionJoin($depositTransactionJoin)
    {
      $this->depositTransactionJoin = $depositTransactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin()
    {
      return $this->eventJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
      return $this;
    }

    /**
     * @return ExpenseCategorySearchRowBasic
     */
    public function getExpenseCategoryJoin()
    {
      return $this->expenseCategoryJoin;
    }

    /**
     * @param ExpenseCategorySearchRowBasic $expenseCategoryJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setExpenseCategoryJoin($expenseCategoryJoin)
    {
      $this->expenseCategoryJoin = $expenseCategoryJoin;
      return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getFromLocationJoin()
    {
      return $this->fromLocationJoin;
    }

    /**
     * @param LocationSearchRowBasic $fromLocationJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setFromLocationJoin($fromLocationJoin)
    {
      $this->fromLocationJoin = $fromLocationJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getFulfillingTransactionJoin()
    {
      return $this->fulfillingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $fulfillingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setFulfillingTransactionJoin($fulfillingTransactionJoin)
    {
      $this->fulfillingTransactionJoin = $fulfillingTransactionJoin;
      return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getHeaderBillingAccountJoin()
    {
      return $this->headerBillingAccountJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $headerBillingAccountJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setHeaderBillingAccountJoin($headerBillingAccountJoin)
    {
      $this->headerBillingAccountJoin = $headerBillingAccountJoin;
      return $this;
    }

    /**
     * @return InventoryDetailSearchRowBasic
     */
    public function getInventoryDetailJoin()
    {
      return $this->inventoryDetailJoin;
    }

    /**
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setInventoryDetailJoin($inventoryDetailJoin)
    {
      $this->inventoryDetailJoin = $inventoryDetailJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return InventoryNumberSearchRowBasic
     */
    public function getItemNumberJoin()
    {
      return $this->itemNumberJoin;
    }

    /**
     * @param InventoryNumberSearchRowBasic $itemNumberJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setItemNumberJoin($itemNumberJoin)
    {
      $this->itemNumberJoin = $itemNumberJoin;
      return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin()
    {
      return $this->jobJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobMainJoin()
    {
      return $this->jobMainJoin;
    }

    /**
     * @param JobSearchRowBasic $jobMainJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setJobMainJoin($jobMainJoin)
    {
      $this->jobMainJoin = $jobMainJoin;
      return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getLeadSourceJoin()
    {
      return $this->leadSourceJoin;
    }

    /**
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setLeadSourceJoin($leadSourceJoin)
    {
      $this->leadSourceJoin = $leadSourceJoin;
      return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getLineBillingAccountJoin()
    {
      return $this->lineBillingAccountJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $lineBillingAccountJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setLineBillingAccountJoin($lineBillingAccountJoin)
    {
      $this->lineBillingAccountJoin = $lineBillingAccountJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getManufacturingOperationTaskJoin()
    {
      return $this->manufacturingOperationTaskJoin;
    }

    /**
     * @param ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setManufacturingOperationTaskJoin($manufacturingOperationTaskJoin)
    {
      $this->manufacturingOperationTaskJoin = $manufacturingOperationTaskJoin;
      return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin()
    {
      return $this->messagesJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getNextApproverJoin()
    {
      return $this->nextApproverJoin;
    }

    /**
     * @param EntitySearchRowBasic $nextApproverJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setNextApproverJoin($nextApproverJoin)
    {
      $this->nextApproverJoin = $nextApproverJoin;
      return $this;
    }

    /**
     * @return OpportunitySearchRowBasic
     */
    public function getOpportunityJoin()
    {
      return $this->opportunityJoin;
    }

    /**
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPaidTransactionJoin()
    {
      return $this->paidTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $paidTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setPaidTransactionJoin($paidTransactionJoin)
    {
      $this->paidTransactionJoin = $paidTransactionJoin;
      return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getPartnerJoin()
    {
      return $this->partnerJoin;
    }

    /**
     * @param PartnerSearchRowBasic $partnerJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPayingTransactionJoin()
    {
      return $this->payingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $payingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setPayingTransactionJoin($payingTransactionJoin)
    {
      $this->payingTransactionJoin = $payingTransactionJoin;
      return $this;
    }

    /**
     * @return PayrollItemSearchRowBasic
     */
    public function getPayrollItemJoin()
    {
      return $this->payrollItemJoin;
    }

    /**
     * @param PayrollItemSearchRowBasic $payrollItemJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setPayrollItemJoin($payrollItemJoin)
    {
      $this->payrollItemJoin = $payrollItemJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getProjectTaskJoin()
    {
      return $this->projectTaskJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPurchaseOrderJoin()
    {
      return $this->purchaseOrderJoin;
    }

    /**
     * @param TransactionSearchRowBasic $purchaseOrderJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setPurchaseOrderJoin($purchaseOrderJoin)
    {
      $this->purchaseOrderJoin = $purchaseOrderJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getRequestorJoin()
    {
      return $this->requestorJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $requestorJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setRequestorJoin($requestorJoin)
    {
      $this->requestorJoin = $requestorJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getRevCommittingTransactionJoin()
    {
      return $this->revCommittingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $revCommittingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setRevCommittingTransactionJoin($revCommittingTransactionJoin)
    {
      $this->revCommittingTransactionJoin = $revCommittingTransactionJoin;
      return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getRevisionJoin()
    {
      return $this->revisionJoin;
    }

    /**
     * @param ItemRevisionSearchRowBasic $revisionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setRevisionJoin($revisionJoin)
    {
      $this->revisionJoin = $revisionJoin;
      return $this;
    }

    /**
     * @return RevRecScheduleSearchRowBasic
     */
    public function getRevRecScheduleJoin()
    {
      return $this->revRecScheduleJoin;
    }

    /**
     * @param RevRecScheduleSearchRowBasic $revRecScheduleJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setRevRecScheduleJoin($revRecScheduleJoin)
    {
      $this->revRecScheduleJoin = $revRecScheduleJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getRgPostingTransactionJoin()
    {
      return $this->rgPostingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $rgPostingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setRgPostingTransactionJoin($rgPostingTransactionJoin)
    {
      $this->rgPostingTransactionJoin = $rgPostingTransactionJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getSalesOrderJoin()
    {
      return $this->salesOrderJoin;
    }

    /**
     * @param TransactionSearchRowBasic $salesOrderJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setSalesOrderJoin($salesOrderJoin)
    {
      $this->salesOrderJoin = $salesOrderJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getSalesRepJoin()
    {
      return $this->salesRepJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setSalesRepJoin($salesRepJoin)
    {
      $this->salesRepJoin = $salesRepJoin;
      return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getShippingAddressJoin()
    {
      return $this->shippingAddressJoin;
    }

    /**
     * @param AddressSearchRowBasic $shippingAddressJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setShippingAddressJoin($shippingAddressJoin)
    {
      $this->shippingAddressJoin = $shippingAddressJoin;
      return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin()
    {
      return $this->subsidiaryJoin;
    }

    /**
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setSubsidiaryJoin($subsidiaryJoin)
    {
      $this->subsidiaryJoin = $subsidiaryJoin;
      return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return SalesTaxItemSearchRowBasic
     */
    public function getTaxCodeJoin()
    {
      return $this->taxCodeJoin;
    }

    /**
     * @param SalesTaxItemSearchRowBasic $taxCodeJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setTaxCodeJoin($taxCodeJoin)
    {
      $this->taxCodeJoin = $taxCodeJoin;
      return $this;
    }

    /**
     * @return TaxDetailSearchRowBasic
     */
    public function getTaxDetailJoin()
    {
      return $this->taxDetailJoin;
    }

    /**
     * @param TaxDetailSearchRowBasic $taxDetailJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setTaxDetailJoin($taxDetailJoin)
    {
      $this->taxDetailJoin = $taxDetailJoin;
      return $this;
    }

    /**
     * @return SalesTaxItemSearchRowBasic
     */
    public function getTaxItemJoin()
    {
      return $this->taxItemJoin;
    }

    /**
     * @param SalesTaxItemSearchRowBasic $taxItemJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setTaxItemJoin($taxItemJoin)
    {
      $this->taxItemJoin = $taxItemJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin()
    {
      return $this->timeJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getToLocationJoin()
    {
      return $this->toLocationJoin;
    }

    /**
     * @param LocationSearchRowBasic $toLocationJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setToLocationJoin($toLocationJoin)
    {
      $this->toLocationJoin = $toLocationJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchRowBasic $userNotesJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorLineJoin()
    {
      return $this->vendorLineJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorLineJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setVendorLineJoin($vendorLineJoin)
    {
      $this->vendorLineJoin = $vendorLineJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\TransactionSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
