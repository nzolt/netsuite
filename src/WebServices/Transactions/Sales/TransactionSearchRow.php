<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountingPeriodSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountingTransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BinSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ExpenseCategorySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetailSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingOperationTaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PayrollItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;

/**
 * TransactionSearchRow
 */
class TransactionSearchRow extends SearchRow {

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    protected $accountJoin;

    /**
     * @access public
     * @var AccountingPeriodSearchRowBasic
     */
    protected $accountingPeriodJoin;

    /**
     * @access public
     * @var AccountingTransactionSearchRowBasic
     */
    protected $accountingTransactionJoin;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    protected $advanceToApplyAccountJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $appliedToTransactionJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $applyingTransactionJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $billingAddressJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $billingTransactionJoin;

    /**
     * @access public
     * @var BinSearchRowBasic
     */
    protected $binNumberJoin;

    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var ClassificationSearchRowBasic
     */
    protected $classJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $cogsPurchaseJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $cogsSaleJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $contactPrimaryJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $createdFromJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerMainJoin;

    /**
     * @access public
     * @var DepartmentSearchRowBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $depositTransactionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var CalendarEventSearchRowBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var ExpenseCategorySearchRowBasic
     */
    protected $expenseCategoryJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $fromLocationJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $fulfillingTransactionJoin;

    /**
     * @access public
     * @var InventoryDetailSearchRowBasic
     */
    protected $inventoryDetailJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var InventoryNumberSearchRowBasic
     */
    protected $itemNumberJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobMainJoin;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $leadSourceJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    protected $manufacturingOperationTaskJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var OpportunitySearchRowBasic
     */
    protected $opportunityJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $paidTransactionJoin;

    /**
     * @access public
     * @var PartnerSearchRowBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $payingTransactionJoin;

    /**
     * @access public
     * @var PayrollItemSearchRowBasic
     */
    protected $payrollItemJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $purchaseOrderJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $requestorJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $revCommittingTransactionJoin;

    /**
     * @access public
     * @var ItemRevisionSearchRowBasic
     */
    protected $revisionJoin;

    /**
     * @access public
     * @var RevRecScheduleSearchRowBasic
     */
    protected $revRecScheduleJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $rgPostingTransactionJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $salesOrderJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $salesRepJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $shippingAddressJoin;

    /**
     * @access public
     * @var SubsidiarySearchRowBasic
     */
    protected $subsidiaryJoin;

    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $toLocationJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    protected $vendorLineJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "TransactionSearchRowBasic",
    	"accountJoin" => "AccountSearchRowBasic",
    	"accountingPeriodJoin" => "AccountingPeriodSearchRowBasic",
    	"accountingTransactionJoin" => "AccountingTransactionSearchRowBasic",
    	"advanceToApplyAccountJoin" => "AccountSearchRowBasic",
    	"appliedToTransactionJoin" => "TransactionSearchRowBasic",
    	"applyingTransactionJoin" => "TransactionSearchRowBasic",
    	"billingAddressJoin" => "AddressSearchRowBasic",
    	"billingTransactionJoin" => "TransactionSearchRowBasic",
    	"binNumberJoin" => "BinSearchRowBasic",
    	"callJoin" => "PhoneCallSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"classJoin" => "ClassificationSearchRowBasic",
    	"cogsPurchaseJoin" => "TransactionSearchRowBasic",
    	"cogsSaleJoin" => "TransactionSearchRowBasic",
    	"contactPrimaryJoin" => "ContactSearchRowBasic",
    	"createdFromJoin" => "TransactionSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"customerMainJoin" => "CustomerSearchRowBasic",
    	"departmentJoin" => "DepartmentSearchRowBasic",
    	"depositTransactionJoin" => "TransactionSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"eventJoin" => "CalendarEventSearchRowBasic",
    	"expenseCategoryJoin" => "ExpenseCategorySearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"fromLocationJoin" => "LocationSearchRowBasic",
    	"fulfillingTransactionJoin" => "TransactionSearchRowBasic",
    	"inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"itemNumberJoin" => "InventoryNumberSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"jobMainJoin" => "JobSearchRowBasic",
    	"leadSourceJoin" => "CampaignSearchRowBasic",
    	"locationJoin" => "LocationSearchRowBasic",
    	"manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"opportunityJoin" => "OpportunitySearchRowBasic",
    	"paidTransactionJoin" => "TransactionSearchRowBasic",
    	"partnerJoin" => "PartnerSearchRowBasic",
    	"payingTransactionJoin" => "TransactionSearchRowBasic",
    	"payrollItemJoin" => "PayrollItemSearchRowBasic",
    	"purchaseOrderJoin" => "TransactionSearchRowBasic",
    	"requestorJoin" => "EmployeeSearchRowBasic",
    	"revCommittingTransactionJoin" => "TransactionSearchRowBasic",
    	"revisionJoin" => "ItemRevisionSearchRowBasic",
    	"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
    	"rgPostingTransactionJoin" => "TransactionSearchRowBasic",
    	"salesOrderJoin" => "TransactionSearchRowBasic",
    	"salesRepJoin" => "EmployeeSearchRowBasic",
    	"shippingAddressJoin" => "AddressSearchRowBasic",
    	"subsidiaryJoin" => "SubsidiarySearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"toLocationJoin" => "LocationSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    	"vendorLineJoin" => "VendorSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param TransactionSearchRowBasic $basic
     * @return TransactionSearchRow
     */
    public function setBasic(TransactionSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TransactionSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set accountJoin
     *
     * @param AccountSearchRowBasic $accountJoin
     * @return TransactionSearchRow
     */
    public function setAccountJoin(AccountSearchRowBasic $accountJoin) {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * Get accountJoin
     *
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin() {
        return $this->accountJoin;
    }


    /**
     * Set accountingPeriodJoin
     *
     * @param AccountingPeriodSearchRowBasic $accountingPeriodJoin
     * @return TransactionSearchRow
     */
    public function setAccountingPeriodJoin(AccountingPeriodSearchRowBasic $accountingPeriodJoin) {
        $this->accountingPeriodJoin = $accountingPeriodJoin;
        return $this;
    }

    /**
     * Get accountingPeriodJoin
     *
     * @return AccountingPeriodSearchRowBasic
     */
    public function getAccountingPeriodJoin() {
        return $this->accountingPeriodJoin;
    }


    /**
     * Set accountingTransactionJoin
     *
     * @param AccountingTransactionSearchRowBasic $accountingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setAccountingTransactionJoin(AccountingTransactionSearchRowBasic $accountingTransactionJoin) {
        $this->accountingTransactionJoin = $accountingTransactionJoin;
        return $this;
    }

    /**
     * Get accountingTransactionJoin
     *
     * @return AccountingTransactionSearchRowBasic
     */
    public function getAccountingTransactionJoin() {
        return $this->accountingTransactionJoin;
    }


    /**
     * Set advanceToApplyAccountJoin
     *
     * @param AccountSearchRowBasic $advanceToApplyAccountJoin
     * @return TransactionSearchRow
     */
    public function setAdvanceToApplyAccountJoin(AccountSearchRowBasic $advanceToApplyAccountJoin) {
        $this->advanceToApplyAccountJoin = $advanceToApplyAccountJoin;
        return $this;
    }

    /**
     * Get advanceToApplyAccountJoin
     *
     * @return AccountSearchRowBasic
     */
    public function getAdvanceToApplyAccountJoin() {
        return $this->advanceToApplyAccountJoin;
    }


    /**
     * Set appliedToTransactionJoin
     *
     * @param TransactionSearchRowBasic $appliedToTransactionJoin
     * @return TransactionSearchRow
     */
    public function setAppliedToTransactionJoin(TransactionSearchRowBasic $appliedToTransactionJoin) {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * Get appliedToTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getAppliedToTransactionJoin() {
        return $this->appliedToTransactionJoin;
    }


    /**
     * Set applyingTransactionJoin
     *
     * @param TransactionSearchRowBasic $applyingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setApplyingTransactionJoin(TransactionSearchRowBasic $applyingTransactionJoin) {
        $this->applyingTransactionJoin = $applyingTransactionJoin;
        return $this;
    }

    /**
     * Get applyingTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getApplyingTransactionJoin() {
        return $this->applyingTransactionJoin;
    }


    /**
     * Set billingAddressJoin
     *
     * @param AddressSearchRowBasic $billingAddressJoin
     * @return TransactionSearchRow
     */
    public function setBillingAddressJoin(AddressSearchRowBasic $billingAddressJoin) {
        $this->billingAddressJoin = $billingAddressJoin;
        return $this;
    }

    /**
     * Get billingAddressJoin
     *
     * @return AddressSearchRowBasic
     */
    public function getBillingAddressJoin() {
        return $this->billingAddressJoin;
    }


    /**
     * Set billingTransactionJoin
     *
     * @param TransactionSearchRowBasic $billingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setBillingTransactionJoin(TransactionSearchRowBasic $billingTransactionJoin) {
        $this->billingTransactionJoin = $billingTransactionJoin;
        return $this;
    }

    /**
     * Get billingTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getBillingTransactionJoin() {
        return $this->billingTransactionJoin;
    }


    /**
     * Set binNumberJoin
     *
     * @param BinSearchRowBasic $binNumberJoin
     * @return TransactionSearchRow
     */
    public function setBinNumberJoin(BinSearchRowBasic $binNumberJoin) {
        $this->binNumberJoin = $binNumberJoin;
        return $this;
    }

    /**
     * Get binNumberJoin
     *
     * @return BinSearchRowBasic
     */
    public function getBinNumberJoin() {
        return $this->binNumberJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchRowBasic $callJoin
     * @return TransactionSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin) {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * Get callJoin
     *
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin() {
        return $this->callJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return TransactionSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchRowBasic $classJoin
     * @return TransactionSearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin) {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * Get classJoin
     *
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin() {
        return $this->classJoin;
    }


    /**
     * Set cogsPurchaseJoin
     *
     * @param TransactionSearchRowBasic $cogsPurchaseJoin
     * @return TransactionSearchRow
     */
    public function setCogsPurchaseJoin(TransactionSearchRowBasic $cogsPurchaseJoin) {
        $this->cogsPurchaseJoin = $cogsPurchaseJoin;
        return $this;
    }

    /**
     * Get cogsPurchaseJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getCogsPurchaseJoin() {
        return $this->cogsPurchaseJoin;
    }


    /**
     * Set cogsSaleJoin
     *
     * @param TransactionSearchRowBasic $cogsSaleJoin
     * @return TransactionSearchRow
     */
    public function setCogsSaleJoin(TransactionSearchRowBasic $cogsSaleJoin) {
        $this->cogsSaleJoin = $cogsSaleJoin;
        return $this;
    }

    /**
     * Get cogsSaleJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getCogsSaleJoin() {
        return $this->cogsSaleJoin;
    }


    /**
     * Set contactPrimaryJoin
     *
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return TransactionSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin) {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * Get contactPrimaryJoin
     *
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin() {
        return $this->contactPrimaryJoin;
    }


    /**
     * Set createdFromJoin
     *
     * @param TransactionSearchRowBasic $createdFromJoin
     * @return TransactionSearchRow
     */
    public function setCreatedFromJoin(TransactionSearchRowBasic $createdFromJoin) {
        $this->createdFromJoin = $createdFromJoin;
        return $this;
    }

    /**
     * Get createdFromJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getCreatedFromJoin() {
        return $this->createdFromJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return TransactionSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set customerMainJoin
     *
     * @param CustomerSearchRowBasic $customerMainJoin
     * @return TransactionSearchRow
     */
    public function setCustomerMainJoin(CustomerSearchRowBasic $customerMainJoin) {
        $this->customerMainJoin = $customerMainJoin;
        return $this;
    }

    /**
     * Get customerMainJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getCustomerMainJoin() {
        return $this->customerMainJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return TransactionSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set depositTransactionJoin
     *
     * @param TransactionSearchRowBasic $depositTransactionJoin
     * @return TransactionSearchRow
     */
    public function setDepositTransactionJoin(TransactionSearchRowBasic $depositTransactionJoin) {
        $this->depositTransactionJoin = $depositTransactionJoin;
        return $this;
    }

    /**
     * Get depositTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getDepositTransactionJoin() {
        return $this->depositTransactionJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TransactionSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return TransactionSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin) {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * Get eventJoin
     *
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin() {
        return $this->eventJoin;
    }


    /**
     * Set expenseCategoryJoin
     *
     * @param ExpenseCategorySearchRowBasic $expenseCategoryJoin
     * @return TransactionSearchRow
     */
    public function setExpenseCategoryJoin(ExpenseCategorySearchRowBasic $expenseCategoryJoin) {
        $this->expenseCategoryJoin = $expenseCategoryJoin;
        return $this;
    }

    /**
     * Get expenseCategoryJoin
     *
     * @return ExpenseCategorySearchRowBasic
     */
    public function getExpenseCategoryJoin() {
        return $this->expenseCategoryJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return TransactionSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchRowBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set fromLocationJoin
     *
     * @param LocationSearchRowBasic $fromLocationJoin
     * @return TransactionSearchRow
     */
    public function setFromLocationJoin(LocationSearchRowBasic $fromLocationJoin) {
        $this->fromLocationJoin = $fromLocationJoin;
        return $this;
    }

    /**
     * Get fromLocationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getFromLocationJoin() {
        return $this->fromLocationJoin;
    }


    /**
     * Set fulfillingTransactionJoin
     *
     * @param TransactionSearchRowBasic $fulfillingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setFulfillingTransactionJoin(TransactionSearchRowBasic $fulfillingTransactionJoin) {
        $this->fulfillingTransactionJoin = $fulfillingTransactionJoin;
        return $this;
    }

    /**
     * Get fulfillingTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getFulfillingTransactionJoin() {
        return $this->fulfillingTransactionJoin;
    }


    /**
     * Set inventoryDetailJoin
     *
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return TransactionSearchRow
     */
    public function setInventoryDetailJoin(InventoryDetailSearchRowBasic $inventoryDetailJoin) {
        $this->inventoryDetailJoin = $inventoryDetailJoin;
        return $this;
    }

    /**
     * Get inventoryDetailJoin
     *
     * @return InventoryDetailSearchRowBasic
     */
    public function getInventoryDetailJoin() {
        return $this->inventoryDetailJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return TransactionSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set itemNumberJoin
     *
     * @param InventoryNumberSearchRowBasic $itemNumberJoin
     * @return TransactionSearchRow
     */
    public function setItemNumberJoin(InventoryNumberSearchRowBasic $itemNumberJoin) {
        $this->itemNumberJoin = $itemNumberJoin;
        return $this;
    }

    /**
     * Get itemNumberJoin
     *
     * @return InventoryNumberSearchRowBasic
     */
    public function getItemNumberJoin() {
        return $this->itemNumberJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return TransactionSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchRowBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set jobMainJoin
     *
     * @param JobSearchRowBasic $jobMainJoin
     * @return TransactionSearchRow
     */
    public function setJobMainJoin(JobSearchRowBasic $jobMainJoin) {
        $this->jobMainJoin = $jobMainJoin;
        return $this;
    }

    /**
     * Get jobMainJoin
     *
     * @return JobSearchRowBasic
     */
    public function getJobMainJoin() {
        return $this->jobMainJoin;
    }


    /**
     * Set leadSourceJoin
     *
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return TransactionSearchRow
     */
    public function setLeadSourceJoin(CampaignSearchRowBasic $leadSourceJoin) {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * Get leadSourceJoin
     *
     * @return CampaignSearchRowBasic
     */
    public function getLeadSourceJoin() {
        return $this->leadSourceJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchRowBasic $locationJoin
     * @return TransactionSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set manufacturingOperationTaskJoin
     *
     * @param ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin
     * @return TransactionSearchRow
     */
    public function setManufacturingOperationTaskJoin(ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin) {
        $this->manufacturingOperationTaskJoin = $manufacturingOperationTaskJoin;
        return $this;
    }

    /**
     * Get manufacturingOperationTaskJoin
     *
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getManufacturingOperationTaskJoin() {
        return $this->manufacturingOperationTaskJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return TransactionSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin) {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * Get messagesJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin() {
        return $this->messagesJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return TransactionSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin) {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * Get opportunityJoin
     *
     * @return OpportunitySearchRowBasic
     */
    public function getOpportunityJoin() {
        return $this->opportunityJoin;
    }


    /**
     * Set paidTransactionJoin
     *
     * @param TransactionSearchRowBasic $paidTransactionJoin
     * @return TransactionSearchRow
     */
    public function setPaidTransactionJoin(TransactionSearchRowBasic $paidTransactionJoin) {
        $this->paidTransactionJoin = $paidTransactionJoin;
        return $this;
    }

    /**
     * Get paidTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getPaidTransactionJoin() {
        return $this->paidTransactionJoin;
    }


    /**
     * Set partnerJoin
     *
     * @param PartnerSearchRowBasic $partnerJoin
     * @return TransactionSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin) {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * Get partnerJoin
     *
     * @return PartnerSearchRowBasic
     */
    public function getPartnerJoin() {
        return $this->partnerJoin;
    }


    /**
     * Set payingTransactionJoin
     *
     * @param TransactionSearchRowBasic $payingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setPayingTransactionJoin(TransactionSearchRowBasic $payingTransactionJoin) {
        $this->payingTransactionJoin = $payingTransactionJoin;
        return $this;
    }

    /**
     * Get payingTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getPayingTransactionJoin() {
        return $this->payingTransactionJoin;
    }


    /**
     * Set payrollItemJoin
     *
     * @param PayrollItemSearchRowBasic $payrollItemJoin
     * @return TransactionSearchRow
     */
    public function setPayrollItemJoin(PayrollItemSearchRowBasic $payrollItemJoin) {
        $this->payrollItemJoin = $payrollItemJoin;
        return $this;
    }

    /**
     * Get payrollItemJoin
     *
     * @return PayrollItemSearchRowBasic
     */
    public function getPayrollItemJoin() {
        return $this->payrollItemJoin;
    }


    /**
     * Set purchaseOrderJoin
     *
     * @param TransactionSearchRowBasic $purchaseOrderJoin
     * @return TransactionSearchRow
     */
    public function setPurchaseOrderJoin(TransactionSearchRowBasic $purchaseOrderJoin) {
        $this->purchaseOrderJoin = $purchaseOrderJoin;
        return $this;
    }

    /**
     * Get purchaseOrderJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getPurchaseOrderJoin() {
        return $this->purchaseOrderJoin;
    }


    /**
     * Set requestorJoin
     *
     * @param EmployeeSearchRowBasic $requestorJoin
     * @return TransactionSearchRow
     */
    public function setRequestorJoin(EmployeeSearchRowBasic $requestorJoin) {
        $this->requestorJoin = $requestorJoin;
        return $this;
    }

    /**
     * Get requestorJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getRequestorJoin() {
        return $this->requestorJoin;
    }


    /**
     * Set revCommittingTransactionJoin
     *
     * @param TransactionSearchRowBasic $revCommittingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setRevCommittingTransactionJoin(TransactionSearchRowBasic $revCommittingTransactionJoin) {
        $this->revCommittingTransactionJoin = $revCommittingTransactionJoin;
        return $this;
    }

    /**
     * Get revCommittingTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getRevCommittingTransactionJoin() {
        return $this->revCommittingTransactionJoin;
    }


    /**
     * Set revisionJoin
     *
     * @param ItemRevisionSearchRowBasic $revisionJoin
     * @return TransactionSearchRow
     */
    public function setRevisionJoin(ItemRevisionSearchRowBasic $revisionJoin) {
        $this->revisionJoin = $revisionJoin;
        return $this;
    }

    /**
     * Get revisionJoin
     *
     * @return ItemRevisionSearchRowBasic
     */
    public function getRevisionJoin() {
        return $this->revisionJoin;
    }


    /**
     * Set revRecScheduleJoin
     *
     * @param RevRecScheduleSearchRowBasic $revRecScheduleJoin
     * @return TransactionSearchRow
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchRowBasic $revRecScheduleJoin) {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * Get revRecScheduleJoin
     *
     * @return RevRecScheduleSearchRowBasic
     */
    public function getRevRecScheduleJoin() {
        return $this->revRecScheduleJoin;
    }


    /**
     * Set rgPostingTransactionJoin
     *
     * @param TransactionSearchRowBasic $rgPostingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setRgPostingTransactionJoin(TransactionSearchRowBasic $rgPostingTransactionJoin) {
        $this->rgPostingTransactionJoin = $rgPostingTransactionJoin;
        return $this;
    }

    /**
     * Get rgPostingTransactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getRgPostingTransactionJoin() {
        return $this->rgPostingTransactionJoin;
    }


    /**
     * Set salesOrderJoin
     *
     * @param TransactionSearchRowBasic $salesOrderJoin
     * @return TransactionSearchRow
     */
    public function setSalesOrderJoin(TransactionSearchRowBasic $salesOrderJoin) {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * Get salesOrderJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getSalesOrderJoin() {
        return $this->salesOrderJoin;
    }


    /**
     * Set salesRepJoin
     *
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return TransactionSearchRow
     */
    public function setSalesRepJoin(EmployeeSearchRowBasic $salesRepJoin) {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * Get salesRepJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getSalesRepJoin() {
        return $this->salesRepJoin;
    }


    /**
     * Set shippingAddressJoin
     *
     * @param AddressSearchRowBasic $shippingAddressJoin
     * @return TransactionSearchRow
     */
    public function setShippingAddressJoin(AddressSearchRowBasic $shippingAddressJoin) {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * Get shippingAddressJoin
     *
     * @return AddressSearchRowBasic
     */
    public function getShippingAddressJoin() {
        return $this->shippingAddressJoin;
    }


    /**
     * Set subsidiaryJoin
     *
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return TransactionSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin) {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * Get subsidiaryJoin
     *
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin() {
        return $this->subsidiaryJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchRowBasic $taskJoin
     * @return TransactionSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin) {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * Get taskJoin
     *
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin() {
        return $this->taskJoin;
    }


    /**
     * Set toLocationJoin
     *
     * @param LocationSearchRowBasic $toLocationJoin
     * @return TransactionSearchRow
     */
    public function setToLocationJoin(LocationSearchRowBasic $toLocationJoin) {
        $this->toLocationJoin = $toLocationJoin;
        return $this;
    }

    /**
     * Get toLocationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getToLocationJoin() {
        return $this->toLocationJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return TransactionSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchRowBasic $userNotesJoin
     * @return TransactionSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }


    /**
     * Set vendorJoin
     *
     * @param VendorSearchRowBasic $vendorJoin
     * @return TransactionSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }


    /**
     * Set vendorLineJoin
     *
     * @param VendorSearchRowBasic $vendorLineJoin
     * @return TransactionSearchRow
     */
    public function setVendorLineJoin(VendorSearchRowBasic $vendorLineJoin) {
        $this->vendorLineJoin = $vendorLineJoin;
        return $this;
    }

    /**
     * Get vendorLineJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getVendorLineJoin() {
        return $this->vendorLineJoin;
    }

}