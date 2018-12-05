<?php

namespace Nzolt\NetSuite;

class TransactionSearch extends SearchRecord
{

    /**
     * @var TransactionSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchBasic $accountJoin
     */
    protected $accountJoin = null;

    /**
     * @var AccountingPeriodSearchBasic $accountingPeriodJoin
     */
    protected $accountingPeriodJoin = null;

    /**
     * @var AccountingTransactionSearchBasic $accountingTransactionJoin
     */
    protected $accountingTransactionJoin = null;

    /**
     * @var AccountSearchBasic $advanceToApplyAccountJoin
     */
    protected $advanceToApplyAccountJoin = null;

    /**
     * @var TransactionSearchBasic $appliedToTransactionJoin
     */
    protected $appliedToTransactionJoin = null;

    /**
     * @var TransactionSearchBasic $applyingTransactionJoin
     */
    protected $applyingTransactionJoin = null;

    /**
     * @var AddressSearchBasic $billingAddressJoin
     */
    protected $billingAddressJoin = null;

    /**
     * @var TransactionSearchBasic $billingTransactionJoin
     */
    protected $billingTransactionJoin = null;

    /**
     * @var BinSearchBasic $binNumberJoin
     */
    protected $binNumberJoin = null;

    /**
     * @var PhoneCallSearchBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ClassificationSearchBasic $classJoin
     */
    protected $classJoin = null;

    /**
     * @var TransactionSearchBasic $cogsPurchaseJoin
     */
    protected $cogsPurchaseJoin = null;

    /**
     * @var TransactionSearchBasic $cogsSaleJoin
     */
    protected $cogsSaleJoin = null;

    /**
     * @var ContactSearchBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var TransactionSearchBasic $createdFromJoin
     */
    protected $createdFromJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var CustomerSearchBasic $customerMainJoin
     */
    protected $customerMainJoin = null;

    /**
     * @var DepartmentSearchBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var TransactionSearchBasic $depositTransactionJoin
     */
    protected $depositTransactionJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var CalendarEventSearchBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var ExpenseCategorySearchBasic $expenseCategoryJoin
     */
    protected $expenseCategoryJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var LocationSearchBasic $fromLocationJoin
     */
    protected $fromLocationJoin = null;

    /**
     * @var TransactionSearchBasic $fulfillingTransactionJoin
     */
    protected $fulfillingTransactionJoin = null;

    /**
     * @var BillingAccountSearchBasic $headerBillingAccountJoin
     */
    protected $headerBillingAccountJoin = null;

    /**
     * @var InventoryDetailSearchBasic $inventoryDetailJoin
     */
    protected $inventoryDetailJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var InventoryNumberSearchBasic $itemNumberJoin
     */
    protected $itemNumberJoin = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var JobSearchBasic $jobMainJoin
     */
    protected $jobMainJoin = null;

    /**
     * @var CampaignSearchBasic $leadSourceJoin
     */
    protected $leadSourceJoin = null;

    /**
     * @var BillingAccountSearchBasic $lineBillingAccountJoin
     */
    protected $lineBillingAccountJoin = null;

    /**
     * @var LocationSearchBasic $locationJoin
     */
    protected $locationJoin = null;

    /**
     * @var ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin
     */
    protected $manufacturingOperationTaskJoin = null;

    /**
     * @var MessageSearchBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var EntitySearchBasic $nextApproverJoin
     */
    protected $nextApproverJoin = null;

    /**
     * @var OpportunitySearchBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var TransactionSearchBasic $paidTransactionJoin
     */
    protected $paidTransactionJoin = null;

    /**
     * @var PartnerSearchBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var TransactionSearchBasic $payingTransactionJoin
     */
    protected $payingTransactionJoin = null;

    /**
     * @var PayrollItemSearchBasic $payrollItemJoin
     */
    protected $payrollItemJoin = null;

    /**
     * @var ProjectTaskSearchBasic $projectTaskJoin
     */
    protected $projectTaskJoin = null;

    /**
     * @var TransactionSearchBasic $purchaseOrderJoin
     */
    protected $purchaseOrderJoin = null;

    /**
     * @var EmployeeSearchBasic $requestorJoin
     */
    protected $requestorJoin = null;

    /**
     * @var TransactionSearchBasic $revCommittingTransactionJoin
     */
    protected $revCommittingTransactionJoin = null;

    /**
     * @var ItemRevisionSearchBasic $revisionJoin
     */
    protected $revisionJoin = null;

    /**
     * @var RevRecScheduleSearchBasic $revRecScheduleJoin
     */
    protected $revRecScheduleJoin = null;

    /**
     * @var TransactionSearchBasic $rgPostingTransactionJoin
     */
    protected $rgPostingTransactionJoin = null;

    /**
     * @var TransactionSearchBasic $salesOrderJoin
     */
    protected $salesOrderJoin = null;

    /**
     * @var EmployeeSearchBasic $salesRepJoin
     */
    protected $salesRepJoin = null;

    /**
     * @var AddressSearchBasic $shippingAddressJoin
     */
    protected $shippingAddressJoin = null;

    /**
     * @var SubsidiarySearchBasic $subsidiaryJoin
     */
    protected $subsidiaryJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var SalesTaxItemSearchBasic $taxCodeJoin
     */
    protected $taxCodeJoin = null;

    /**
     * @var TaxDetailSearchBasic $taxDetailJoin
     */
    protected $taxDetailJoin = null;

    /**
     * @var SalesTaxItemSearchBasic $taxItemJoin
     */
    protected $taxItemJoin = null;

    /**
     * @var TimeBillSearchBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var LocationSearchBasic $toLocationJoin
     */
    protected $toLocationJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var VendorSearchBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var VendorSearchBasic $vendorLineJoin
     */
    protected $vendorLineJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param TransactionSearchBasic $basic
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAccountJoin()
    {
      return $this->accountJoin;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
      return $this;
    }

    /**
     * @return AccountingPeriodSearchBasic
     */
    public function getAccountingPeriodJoin()
    {
      return $this->accountingPeriodJoin;
    }

    /**
     * @param AccountingPeriodSearchBasic $accountingPeriodJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setAccountingPeriodJoin($accountingPeriodJoin)
    {
      $this->accountingPeriodJoin = $accountingPeriodJoin;
      return $this;
    }

    /**
     * @return AccountingTransactionSearchBasic
     */
    public function getAccountingTransactionJoin()
    {
      return $this->accountingTransactionJoin;
    }

    /**
     * @param AccountingTransactionSearchBasic $accountingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setAccountingTransactionJoin($accountingTransactionJoin)
    {
      $this->accountingTransactionJoin = $accountingTransactionJoin;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAdvanceToApplyAccountJoin()
    {
      return $this->advanceToApplyAccountJoin;
    }

    /**
     * @param AccountSearchBasic $advanceToApplyAccountJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setAdvanceToApplyAccountJoin($advanceToApplyAccountJoin)
    {
      $this->advanceToApplyAccountJoin = $advanceToApplyAccountJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getAppliedToTransactionJoin()
    {
      return $this->appliedToTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $appliedToTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setAppliedToTransactionJoin($appliedToTransactionJoin)
    {
      $this->appliedToTransactionJoin = $appliedToTransactionJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getApplyingTransactionJoin()
    {
      return $this->applyingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $applyingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setApplyingTransactionJoin($applyingTransactionJoin)
    {
      $this->applyingTransactionJoin = $applyingTransactionJoin;
      return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getBillingAddressJoin()
    {
      return $this->billingAddressJoin;
    }

    /**
     * @param AddressSearchBasic $billingAddressJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setBillingAddressJoin($billingAddressJoin)
    {
      $this->billingAddressJoin = $billingAddressJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getBillingTransactionJoin()
    {
      return $this->billingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $billingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setBillingTransactionJoin($billingTransactionJoin)
    {
      $this->billingTransactionJoin = $billingTransactionJoin;
      return $this;
    }

    /**
     * @return BinSearchBasic
     */
    public function getBinNumberJoin()
    {
      return $this->binNumberJoin;
    }

    /**
     * @param BinSearchBasic $binNumberJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setBinNumberJoin($binNumberJoin)
    {
      $this->binNumberJoin = $binNumberJoin;
      return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin()
    {
      return $this->callJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ClassificationSearchBasic
     */
    public function getClassJoin()
    {
      return $this->classJoin;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setClassJoin($classJoin)
    {
      $this->classJoin = $classJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getCogsPurchaseJoin()
    {
      return $this->cogsPurchaseJoin;
    }

    /**
     * @param TransactionSearchBasic $cogsPurchaseJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCogsPurchaseJoin($cogsPurchaseJoin)
    {
      $this->cogsPurchaseJoin = $cogsPurchaseJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getCogsSaleJoin()
    {
      return $this->cogsSaleJoin;
    }

    /**
     * @param TransactionSearchBasic $cogsSaleJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCogsSaleJoin($cogsSaleJoin)
    {
      $this->cogsSaleJoin = $cogsSaleJoin;
      return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin()
    {
      return $this->contactPrimaryJoin;
    }

    /**
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getCreatedFromJoin()
    {
      return $this->createdFromJoin;
    }

    /**
     * @param TransactionSearchBasic $createdFromJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCreatedFromJoin($createdFromJoin)
    {
      $this->createdFromJoin = $createdFromJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerMainJoin()
    {
      return $this->customerMainJoin;
    }

    /**
     * @param CustomerSearchBasic $customerMainJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCustomerMainJoin($customerMainJoin)
    {
      $this->customerMainJoin = $customerMainJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getDepositTransactionJoin()
    {
      return $this->depositTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $depositTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setDepositTransactionJoin($depositTransactionJoin)
    {
      $this->depositTransactionJoin = $depositTransactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin()
    {
      return $this->eventJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
      return $this;
    }

    /**
     * @return ExpenseCategorySearchBasic
     */
    public function getExpenseCategoryJoin()
    {
      return $this->expenseCategoryJoin;
    }

    /**
     * @param ExpenseCategorySearchBasic $expenseCategoryJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setExpenseCategoryJoin($expenseCategoryJoin)
    {
      $this->expenseCategoryJoin = $expenseCategoryJoin;
      return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getFromLocationJoin()
    {
      return $this->fromLocationJoin;
    }

    /**
     * @param LocationSearchBasic $fromLocationJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setFromLocationJoin($fromLocationJoin)
    {
      $this->fromLocationJoin = $fromLocationJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getFulfillingTransactionJoin()
    {
      return $this->fulfillingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $fulfillingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setFulfillingTransactionJoin($fulfillingTransactionJoin)
    {
      $this->fulfillingTransactionJoin = $fulfillingTransactionJoin;
      return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getHeaderBillingAccountJoin()
    {
      return $this->headerBillingAccountJoin;
    }

    /**
     * @param BillingAccountSearchBasic $headerBillingAccountJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setHeaderBillingAccountJoin($headerBillingAccountJoin)
    {
      $this->headerBillingAccountJoin = $headerBillingAccountJoin;
      return $this;
    }

    /**
     * @return InventoryDetailSearchBasic
     */
    public function getInventoryDetailJoin()
    {
      return $this->inventoryDetailJoin;
    }

    /**
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setInventoryDetailJoin($inventoryDetailJoin)
    {
      $this->inventoryDetailJoin = $inventoryDetailJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return InventoryNumberSearchBasic
     */
    public function getItemNumberJoin()
    {
      return $this->itemNumberJoin;
    }

    /**
     * @param InventoryNumberSearchBasic $itemNumberJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setItemNumberJoin($itemNumberJoin)
    {
      $this->itemNumberJoin = $itemNumberJoin;
      return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin()
    {
      return $this->jobJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobMainJoin()
    {
      return $this->jobMainJoin;
    }

    /**
     * @param JobSearchBasic $jobMainJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setJobMainJoin($jobMainJoin)
    {
      $this->jobMainJoin = $jobMainJoin;
      return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getLeadSourceJoin()
    {
      return $this->leadSourceJoin;
    }

    /**
     * @param CampaignSearchBasic $leadSourceJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setLeadSourceJoin($leadSourceJoin)
    {
      $this->leadSourceJoin = $leadSourceJoin;
      return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getLineBillingAccountJoin()
    {
      return $this->lineBillingAccountJoin;
    }

    /**
     * @param BillingAccountSearchBasic $lineBillingAccountJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setLineBillingAccountJoin($lineBillingAccountJoin)
    {
      $this->lineBillingAccountJoin = $lineBillingAccountJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getManufacturingOperationTaskJoin()
    {
      return $this->manufacturingOperationTaskJoin;
    }

    /**
     * @param ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setManufacturingOperationTaskJoin($manufacturingOperationTaskJoin)
    {
      $this->manufacturingOperationTaskJoin = $manufacturingOperationTaskJoin;
      return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesJoin()
    {
      return $this->messagesJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getNextApproverJoin()
    {
      return $this->nextApproverJoin;
    }

    /**
     * @param EntitySearchBasic $nextApproverJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setNextApproverJoin($nextApproverJoin)
    {
      $this->nextApproverJoin = $nextApproverJoin;
      return $this;
    }

    /**
     * @return OpportunitySearchBasic
     */
    public function getOpportunityJoin()
    {
      return $this->opportunityJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPaidTransactionJoin()
    {
      return $this->paidTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $paidTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setPaidTransactionJoin($paidTransactionJoin)
    {
      $this->paidTransactionJoin = $paidTransactionJoin;
      return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getPartnerJoin()
    {
      return $this->partnerJoin;
    }

    /**
     * @param PartnerSearchBasic $partnerJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPayingTransactionJoin()
    {
      return $this->payingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $payingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setPayingTransactionJoin($payingTransactionJoin)
    {
      $this->payingTransactionJoin = $payingTransactionJoin;
      return $this;
    }

    /**
     * @return PayrollItemSearchBasic
     */
    public function getPayrollItemJoin()
    {
      return $this->payrollItemJoin;
    }

    /**
     * @param PayrollItemSearchBasic $payrollItemJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setPayrollItemJoin($payrollItemJoin)
    {
      $this->payrollItemJoin = $payrollItemJoin;
      return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getProjectTaskJoin()
    {
      return $this->projectTaskJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setProjectTaskJoin($projectTaskJoin)
    {
      $this->projectTaskJoin = $projectTaskJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPurchaseOrderJoin()
    {
      return $this->purchaseOrderJoin;
    }

    /**
     * @param TransactionSearchBasic $purchaseOrderJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setPurchaseOrderJoin($purchaseOrderJoin)
    {
      $this->purchaseOrderJoin = $purchaseOrderJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getRequestorJoin()
    {
      return $this->requestorJoin;
    }

    /**
     * @param EmployeeSearchBasic $requestorJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setRequestorJoin($requestorJoin)
    {
      $this->requestorJoin = $requestorJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getRevCommittingTransactionJoin()
    {
      return $this->revCommittingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $revCommittingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setRevCommittingTransactionJoin($revCommittingTransactionJoin)
    {
      $this->revCommittingTransactionJoin = $revCommittingTransactionJoin;
      return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getRevisionJoin()
    {
      return $this->revisionJoin;
    }

    /**
     * @param ItemRevisionSearchBasic $revisionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setRevisionJoin($revisionJoin)
    {
      $this->revisionJoin = $revisionJoin;
      return $this;
    }

    /**
     * @return RevRecScheduleSearchBasic
     */
    public function getRevRecScheduleJoin()
    {
      return $this->revRecScheduleJoin;
    }

    /**
     * @param RevRecScheduleSearchBasic $revRecScheduleJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setRevRecScheduleJoin($revRecScheduleJoin)
    {
      $this->revRecScheduleJoin = $revRecScheduleJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getRgPostingTransactionJoin()
    {
      return $this->rgPostingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $rgPostingTransactionJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setRgPostingTransactionJoin($rgPostingTransactionJoin)
    {
      $this->rgPostingTransactionJoin = $rgPostingTransactionJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getSalesOrderJoin()
    {
      return $this->salesOrderJoin;
    }

    /**
     * @param TransactionSearchBasic $salesOrderJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setSalesOrderJoin($salesOrderJoin)
    {
      $this->salesOrderJoin = $salesOrderJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getSalesRepJoin()
    {
      return $this->salesRepJoin;
    }

    /**
     * @param EmployeeSearchBasic $salesRepJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setSalesRepJoin($salesRepJoin)
    {
      $this->salesRepJoin = $salesRepJoin;
      return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getShippingAddressJoin()
    {
      return $this->shippingAddressJoin;
    }

    /**
     * @param AddressSearchBasic $shippingAddressJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setShippingAddressJoin($shippingAddressJoin)
    {
      $this->shippingAddressJoin = $shippingAddressJoin;
      return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin()
    {
      return $this->subsidiaryJoin;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setSubsidiaryJoin($subsidiaryJoin)
    {
      $this->subsidiaryJoin = $subsidiaryJoin;
      return $this;
    }

    /**
     * @return TaskSearchBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return SalesTaxItemSearchBasic
     */
    public function getTaxCodeJoin()
    {
      return $this->taxCodeJoin;
    }

    /**
     * @param SalesTaxItemSearchBasic $taxCodeJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setTaxCodeJoin($taxCodeJoin)
    {
      $this->taxCodeJoin = $taxCodeJoin;
      return $this;
    }

    /**
     * @return TaxDetailSearchBasic
     */
    public function getTaxDetailJoin()
    {
      return $this->taxDetailJoin;
    }

    /**
     * @param TaxDetailSearchBasic $taxDetailJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setTaxDetailJoin($taxDetailJoin)
    {
      $this->taxDetailJoin = $taxDetailJoin;
      return $this;
    }

    /**
     * @return SalesTaxItemSearchBasic
     */
    public function getTaxItemJoin()
    {
      return $this->taxItemJoin;
    }

    /**
     * @param SalesTaxItemSearchBasic $taxItemJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setTaxItemJoin($taxItemJoin)
    {
      $this->taxItemJoin = $taxItemJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin()
    {
      return $this->timeJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getToLocationJoin()
    {
      return $this->toLocationJoin;
    }

    /**
     * @param LocationSearchBasic $toLocationJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setToLocationJoin($toLocationJoin)
    {
      $this->toLocationJoin = $toLocationJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchBasic $userNotesJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorLineJoin()
    {
      return $this->vendorLineJoin;
    }

    /**
     * @param VendorSearchBasic $vendorLineJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setVendorLineJoin($vendorLineJoin)
    {
      $this->vendorLineJoin = $vendorLineJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\TransactionSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
