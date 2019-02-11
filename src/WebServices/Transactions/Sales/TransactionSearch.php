<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountingPeriodSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountingTransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BinSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ExpenseCategorySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetailSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingOperationTaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PayrollItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;

/**
 * TransactionSearch
 */
class TransactionSearch extends SearchRecord {

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $accountJoin;

    /**
     * @access public
     * @var AccountingPeriodSearchBasic
     */
    protected $accountingPeriodJoin;

    /**
     * @access public
     * @var AccountingTransactionSearchBasic
     */
    protected $accountingTransactionJoin;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $advanceToApplyAccountJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $appliedToTransactionJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $applyingTransactionJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $billingAddressJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $billingTransactionJoin;

    /**
     * @access public
     * @var BinSearchBasic
     */
    protected $binNumberJoin;

    /**
     * @access public
     * @var PhoneCallSearchBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var ClassificationSearchBasic
     */
    protected $classJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $cogsPurchaseJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $cogsSaleJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactPrimaryJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $createdFromJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerMainJoin;

    /**
     * @access public
     * @var DepartmentSearchBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $depositTransactionJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var CalendarEventSearchBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var ExpenseCategorySearchBasic
     */
    protected $expenseCategoryJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $fromLocationJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $fulfillingTransactionJoin;

    /**
     * @access public
     * @var InventoryDetailSearchBasic
     */
    protected $inventoryDetailJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var InventoryNumberSearchBasic
     */
    protected $itemNumberJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobMainJoin;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $leadSourceJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var ManufacturingOperationTaskSearchBasic
     */
    protected $manufacturingOperationTaskJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var OpportunitySearchBasic
     */
    protected $opportunityJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $paidTransactionJoin;

    /**
     * @access public
     * @var PartnerSearchBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $payingTransactionJoin;

    /**
     * @access public
     * @var PayrollItemSearchBasic
     */
    protected $payrollItemJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $purchaseOrderJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $requestorJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $revCommittingTransactionJoin;

    /**
     * @access public
     * @var ItemRevisionSearchBasic
     */
    protected $revisionJoin;

    /**
     * @access public
     * @var RevRecScheduleSearchBasic
     */
    protected $revRecScheduleJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $rgPostingTransactionJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $salesOrderJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $salesRepJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $shippingAddressJoin;

    /**
     * @access public
     * @var SubsidiarySearchBasic
     */
    protected $subsidiaryJoin;

    /**
     * @access public
     * @var TaskSearchBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $toLocationJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $vendorLineJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "TransactionSearchBasic",
    	"accountJoin" => "AccountSearchBasic",
    	"accountingPeriodJoin" => "AccountingPeriodSearchBasic",
    	"accountingTransactionJoin" => "AccountingTransactionSearchBasic",
    	"advanceToApplyAccountJoin" => "AccountSearchBasic",
    	"appliedToTransactionJoin" => "TransactionSearchBasic",
    	"applyingTransactionJoin" => "TransactionSearchBasic",
    	"billingAddressJoin" => "AddressSearchBasic",
    	"billingTransactionJoin" => "TransactionSearchBasic",
    	"binNumberJoin" => "BinSearchBasic",
    	"callJoin" => "PhoneCallSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"classJoin" => "ClassificationSearchBasic",
    	"cogsPurchaseJoin" => "TransactionSearchBasic",
    	"cogsSaleJoin" => "TransactionSearchBasic",
    	"contactPrimaryJoin" => "ContactSearchBasic",
    	"createdFromJoin" => "TransactionSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"customerMainJoin" => "CustomerSearchBasic",
    	"departmentJoin" => "DepartmentSearchBasic",
    	"depositTransactionJoin" => "TransactionSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"eventJoin" => "CalendarEventSearchBasic",
    	"expenseCategoryJoin" => "ExpenseCategorySearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"fromLocationJoin" => "LocationSearchBasic",
    	"fulfillingTransactionJoin" => "TransactionSearchBasic",
    	"inventoryDetailJoin" => "InventoryDetailSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"itemNumberJoin" => "InventoryNumberSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"jobMainJoin" => "JobSearchBasic",
    	"leadSourceJoin" => "CampaignSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"paidTransactionJoin" => "TransactionSearchBasic",
    	"partnerJoin" => "PartnerSearchBasic",
    	"payingTransactionJoin" => "TransactionSearchBasic",
    	"payrollItemJoin" => "PayrollItemSearchBasic",
    	"purchaseOrderJoin" => "TransactionSearchBasic",
    	"requestorJoin" => "EmployeeSearchBasic",
    	"revCommittingTransactionJoin" => "TransactionSearchBasic",
    	"revisionJoin" => "ItemRevisionSearchBasic",
    	"revRecScheduleJoin" => "RevRecScheduleSearchBasic",
    	"rgPostingTransactionJoin" => "TransactionSearchBasic",
    	"salesOrderJoin" => "TransactionSearchBasic",
    	"salesRepJoin" => "EmployeeSearchBasic",
    	"shippingAddressJoin" => "AddressSearchBasic",
    	"subsidiaryJoin" => "SubsidiarySearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"toLocationJoin" => "LocationSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    	"vendorLineJoin" => "VendorSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param TransactionSearchBasic $basic
     * @return TransactionSearch
     */
    public function setBasic(TransactionSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return TransactionSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set accountJoin
     *
     * @param AccountSearchBasic $accountJoin
     * @return TransactionSearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin) {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * Get accountJoin
     *
     * @return AccountSearchBasic
     */
    public function getAccountJoin() {
        return $this->accountJoin;
    }


    /**
     * Set accountingPeriodJoin
     *
     * @param AccountingPeriodSearchBasic $accountingPeriodJoin
     * @return TransactionSearch
     */
    public function setAccountingPeriodJoin(AccountingPeriodSearchBasic $accountingPeriodJoin) {
        $this->accountingPeriodJoin = $accountingPeriodJoin;
        return $this;
    }

    /**
     * Get accountingPeriodJoin
     *
     * @return AccountingPeriodSearchBasic
     */
    public function getAccountingPeriodJoin() {
        return $this->accountingPeriodJoin;
    }


    /**
     * Set accountingTransactionJoin
     *
     * @param AccountingTransactionSearchBasic $accountingTransactionJoin
     * @return TransactionSearch
     */
    public function setAccountingTransactionJoin(AccountingTransactionSearchBasic $accountingTransactionJoin) {
        $this->accountingTransactionJoin = $accountingTransactionJoin;
        return $this;
    }

    /**
     * Get accountingTransactionJoin
     *
     * @return AccountingTransactionSearchBasic
     */
    public function getAccountingTransactionJoin() {
        return $this->accountingTransactionJoin;
    }


    /**
     * Set advanceToApplyAccountJoin
     *
     * @param AccountSearchBasic $advanceToApplyAccountJoin
     * @return TransactionSearch
     */
    public function setAdvanceToApplyAccountJoin(AccountSearchBasic $advanceToApplyAccountJoin) {
        $this->advanceToApplyAccountJoin = $advanceToApplyAccountJoin;
        return $this;
    }

    /**
     * Get advanceToApplyAccountJoin
     *
     * @return AccountSearchBasic
     */
    public function getAdvanceToApplyAccountJoin() {
        return $this->advanceToApplyAccountJoin;
    }


    /**
     * Set appliedToTransactionJoin
     *
     * @param TransactionSearchBasic $appliedToTransactionJoin
     * @return TransactionSearch
     */
    public function setAppliedToTransactionJoin(TransactionSearchBasic $appliedToTransactionJoin) {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * Get appliedToTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getAppliedToTransactionJoin() {
        return $this->appliedToTransactionJoin;
    }


    /**
     * Set applyingTransactionJoin
     *
     * @param TransactionSearchBasic $applyingTransactionJoin
     * @return TransactionSearch
     */
    public function setApplyingTransactionJoin(TransactionSearchBasic $applyingTransactionJoin) {
        $this->applyingTransactionJoin = $applyingTransactionJoin;
        return $this;
    }

    /**
     * Get applyingTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getApplyingTransactionJoin() {
        return $this->applyingTransactionJoin;
    }


    /**
     * Set billingAddressJoin
     *
     * @param AddressSearchBasic $billingAddressJoin
     * @return TransactionSearch
     */
    public function setBillingAddressJoin(AddressSearchBasic $billingAddressJoin) {
        $this->billingAddressJoin = $billingAddressJoin;
        return $this;
    }

    /**
     * Get billingAddressJoin
     *
     * @return AddressSearchBasic
     */
    public function getBillingAddressJoin() {
        return $this->billingAddressJoin;
    }


    /**
     * Set billingTransactionJoin
     *
     * @param TransactionSearchBasic $billingTransactionJoin
     * @return TransactionSearch
     */
    public function setBillingTransactionJoin(TransactionSearchBasic $billingTransactionJoin) {
        $this->billingTransactionJoin = $billingTransactionJoin;
        return $this;
    }

    /**
     * Get billingTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getBillingTransactionJoin() {
        return $this->billingTransactionJoin;
    }


    /**
     * Set binNumberJoin
     *
     * @param BinSearchBasic $binNumberJoin
     * @return TransactionSearch
     */
    public function setBinNumberJoin(BinSearchBasic $binNumberJoin) {
        $this->binNumberJoin = $binNumberJoin;
        return $this;
    }

    /**
     * Get binNumberJoin
     *
     * @return BinSearchBasic
     */
    public function getBinNumberJoin() {
        return $this->binNumberJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchBasic $callJoin
     * @return TransactionSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin) {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * Get callJoin
     *
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin() {
        return $this->callJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return TransactionSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set classJoin
     *
     * @param ClassificationSearchBasic $classJoin
     * @return TransactionSearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin) {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * Get classJoin
     *
     * @return ClassificationSearchBasic
     */
    public function getClassJoin() {
        return $this->classJoin;
    }


    /**
     * Set cogsPurchaseJoin
     *
     * @param TransactionSearchBasic $cogsPurchaseJoin
     * @return TransactionSearch
     */
    public function setCogsPurchaseJoin(TransactionSearchBasic $cogsPurchaseJoin) {
        $this->cogsPurchaseJoin = $cogsPurchaseJoin;
        return $this;
    }

    /**
     * Get cogsPurchaseJoin
     *
     * @return TransactionSearchBasic
     */
    public function getCogsPurchaseJoin() {
        return $this->cogsPurchaseJoin;
    }


    /**
     * Set cogsSaleJoin
     *
     * @param TransactionSearchBasic $cogsSaleJoin
     * @return TransactionSearch
     */
    public function setCogsSaleJoin(TransactionSearchBasic $cogsSaleJoin) {
        $this->cogsSaleJoin = $cogsSaleJoin;
        return $this;
    }

    /**
     * Get cogsSaleJoin
     *
     * @return TransactionSearchBasic
     */
    public function getCogsSaleJoin() {
        return $this->cogsSaleJoin;
    }


    /**
     * Set contactPrimaryJoin
     *
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return TransactionSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin) {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * Get contactPrimaryJoin
     *
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin() {
        return $this->contactPrimaryJoin;
    }


    /**
     * Set createdFromJoin
     *
     * @param TransactionSearchBasic $createdFromJoin
     * @return TransactionSearch
     */
    public function setCreatedFromJoin(TransactionSearchBasic $createdFromJoin) {
        $this->createdFromJoin = $createdFromJoin;
        return $this;
    }

    /**
     * Get createdFromJoin
     *
     * @return TransactionSearchBasic
     */
    public function getCreatedFromJoin() {
        return $this->createdFromJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return TransactionSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set customerMainJoin
     *
     * @param CustomerSearchBasic $customerMainJoin
     * @return TransactionSearch
     */
    public function setCustomerMainJoin(CustomerSearchBasic $customerMainJoin) {
        $this->customerMainJoin = $customerMainJoin;
        return $this;
    }

    /**
     * Get customerMainJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCustomerMainJoin() {
        return $this->customerMainJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchBasic $departmentJoin
     * @return TransactionSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set depositTransactionJoin
     *
     * @param TransactionSearchBasic $depositTransactionJoin
     * @return TransactionSearch
     */
    public function setDepositTransactionJoin(TransactionSearchBasic $depositTransactionJoin) {
        $this->depositTransactionJoin = $depositTransactionJoin;
        return $this;
    }

    /**
     * Get depositTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getDepositTransactionJoin() {
        return $this->depositTransactionJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchBasic $employeeJoin
     * @return TransactionSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchBasic $eventJoin
     * @return TransactionSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin) {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * Get eventJoin
     *
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin() {
        return $this->eventJoin;
    }


    /**
     * Set expenseCategoryJoin
     *
     * @param ExpenseCategorySearchBasic $expenseCategoryJoin
     * @return TransactionSearch
     */
    public function setExpenseCategoryJoin(ExpenseCategorySearchBasic $expenseCategoryJoin) {
        $this->expenseCategoryJoin = $expenseCategoryJoin;
        return $this;
    }

    /**
     * Get expenseCategoryJoin
     *
     * @return ExpenseCategorySearchBasic
     */
    public function getExpenseCategoryJoin() {
        return $this->expenseCategoryJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return TransactionSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set fromLocationJoin
     *
     * @param LocationSearchBasic $fromLocationJoin
     * @return TransactionSearch
     */
    public function setFromLocationJoin(LocationSearchBasic $fromLocationJoin) {
        $this->fromLocationJoin = $fromLocationJoin;
        return $this;
    }

    /**
     * Get fromLocationJoin
     *
     * @return LocationSearchBasic
     */
    public function getFromLocationJoin() {
        return $this->fromLocationJoin;
    }


    /**
     * Set fulfillingTransactionJoin
     *
     * @param TransactionSearchBasic $fulfillingTransactionJoin
     * @return TransactionSearch
     */
    public function setFulfillingTransactionJoin(TransactionSearchBasic $fulfillingTransactionJoin) {
        $this->fulfillingTransactionJoin = $fulfillingTransactionJoin;
        return $this;
    }

    /**
     * Get fulfillingTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getFulfillingTransactionJoin() {
        return $this->fulfillingTransactionJoin;
    }


    /**
     * Set inventoryDetailJoin
     *
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return TransactionSearch
     */
    public function setInventoryDetailJoin(InventoryDetailSearchBasic $inventoryDetailJoin) {
        $this->inventoryDetailJoin = $inventoryDetailJoin;
        return $this;
    }

    /**
     * Get inventoryDetailJoin
     *
     * @return InventoryDetailSearchBasic
     */
    public function getInventoryDetailJoin() {
        return $this->inventoryDetailJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return TransactionSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set itemNumberJoin
     *
     * @param InventoryNumberSearchBasic $itemNumberJoin
     * @return TransactionSearch
     */
    public function setItemNumberJoin(InventoryNumberSearchBasic $itemNumberJoin) {
        $this->itemNumberJoin = $itemNumberJoin;
        return $this;
    }

    /**
     * Get itemNumberJoin
     *
     * @return InventoryNumberSearchBasic
     */
    public function getItemNumberJoin() {
        return $this->itemNumberJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return TransactionSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin) {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * Get jobJoin
     *
     * @return JobSearchBasic
     */
    public function getJobJoin() {
        return $this->jobJoin;
    }


    /**
     * Set jobMainJoin
     *
     * @param JobSearchBasic $jobMainJoin
     * @return TransactionSearch
     */
    public function setJobMainJoin(JobSearchBasic $jobMainJoin) {
        $this->jobMainJoin = $jobMainJoin;
        return $this;
    }

    /**
     * Get jobMainJoin
     *
     * @return JobSearchBasic
     */
    public function getJobMainJoin() {
        return $this->jobMainJoin;
    }


    /**
     * Set leadSourceJoin
     *
     * @param CampaignSearchBasic $leadSourceJoin
     * @return TransactionSearch
     */
    public function setLeadSourceJoin(CampaignSearchBasic $leadSourceJoin) {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * Get leadSourceJoin
     *
     * @return CampaignSearchBasic
     */
    public function getLeadSourceJoin() {
        return $this->leadSourceJoin;
    }


    /**
     * Set locationJoin
     *
     * @param LocationSearchBasic $locationJoin
     * @return TransactionSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set manufacturingOperationTaskJoin
     *
     * @param ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin
     * @return TransactionSearch
     */
    public function setManufacturingOperationTaskJoin(ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin) {
        $this->manufacturingOperationTaskJoin = $manufacturingOperationTaskJoin;
        return $this;
    }

    /**
     * Get manufacturingOperationTaskJoin
     *
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getManufacturingOperationTaskJoin() {
        return $this->manufacturingOperationTaskJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchBasic $messagesJoin
     * @return TransactionSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin) {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * Get messagesJoin
     *
     * @return MessageSearchBasic
     */
    public function getMessagesJoin() {
        return $this->messagesJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchBasic $opportunityJoin
     * @return TransactionSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin) {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * Get opportunityJoin
     *
     * @return OpportunitySearchBasic
     */
    public function getOpportunityJoin() {
        return $this->opportunityJoin;
    }


    /**
     * Set paidTransactionJoin
     *
     * @param TransactionSearchBasic $paidTransactionJoin
     * @return TransactionSearch
     */
    public function setPaidTransactionJoin(TransactionSearchBasic $paidTransactionJoin) {
        $this->paidTransactionJoin = $paidTransactionJoin;
        return $this;
    }

    /**
     * Get paidTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getPaidTransactionJoin() {
        return $this->paidTransactionJoin;
    }


    /**
     * Set partnerJoin
     *
     * @param PartnerSearchBasic $partnerJoin
     * @return TransactionSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin) {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * Get partnerJoin
     *
     * @return PartnerSearchBasic
     */
    public function getPartnerJoin() {
        return $this->partnerJoin;
    }


    /**
     * Set payingTransactionJoin
     *
     * @param TransactionSearchBasic $payingTransactionJoin
     * @return TransactionSearch
     */
    public function setPayingTransactionJoin(TransactionSearchBasic $payingTransactionJoin) {
        $this->payingTransactionJoin = $payingTransactionJoin;
        return $this;
    }

    /**
     * Get payingTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getPayingTransactionJoin() {
        return $this->payingTransactionJoin;
    }


    /**
     * Set payrollItemJoin
     *
     * @param PayrollItemSearchBasic $payrollItemJoin
     * @return TransactionSearch
     */
    public function setPayrollItemJoin(PayrollItemSearchBasic $payrollItemJoin) {
        $this->payrollItemJoin = $payrollItemJoin;
        return $this;
    }

    /**
     * Get payrollItemJoin
     *
     * @return PayrollItemSearchBasic
     */
    public function getPayrollItemJoin() {
        return $this->payrollItemJoin;
    }


    /**
     * Set purchaseOrderJoin
     *
     * @param TransactionSearchBasic $purchaseOrderJoin
     * @return TransactionSearch
     */
    public function setPurchaseOrderJoin(TransactionSearchBasic $purchaseOrderJoin) {
        $this->purchaseOrderJoin = $purchaseOrderJoin;
        return $this;
    }

    /**
     * Get purchaseOrderJoin
     *
     * @return TransactionSearchBasic
     */
    public function getPurchaseOrderJoin() {
        return $this->purchaseOrderJoin;
    }


    /**
     * Set requestorJoin
     *
     * @param EmployeeSearchBasic $requestorJoin
     * @return TransactionSearch
     */
    public function setRequestorJoin(EmployeeSearchBasic $requestorJoin) {
        $this->requestorJoin = $requestorJoin;
        return $this;
    }

    /**
     * Get requestorJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getRequestorJoin() {
        return $this->requestorJoin;
    }


    /**
     * Set revCommittingTransactionJoin
     *
     * @param TransactionSearchBasic $revCommittingTransactionJoin
     * @return TransactionSearch
     */
    public function setRevCommittingTransactionJoin(TransactionSearchBasic $revCommittingTransactionJoin) {
        $this->revCommittingTransactionJoin = $revCommittingTransactionJoin;
        return $this;
    }

    /**
     * Get revCommittingTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getRevCommittingTransactionJoin() {
        return $this->revCommittingTransactionJoin;
    }


    /**
     * Set revisionJoin
     *
     * @param ItemRevisionSearchBasic $revisionJoin
     * @return TransactionSearch
     */
    public function setRevisionJoin(ItemRevisionSearchBasic $revisionJoin) {
        $this->revisionJoin = $revisionJoin;
        return $this;
    }

    /**
     * Get revisionJoin
     *
     * @return ItemRevisionSearchBasic
     */
    public function getRevisionJoin() {
        return $this->revisionJoin;
    }


    /**
     * Set revRecScheduleJoin
     *
     * @param RevRecScheduleSearchBasic $revRecScheduleJoin
     * @return TransactionSearch
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchBasic $revRecScheduleJoin) {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * Get revRecScheduleJoin
     *
     * @return RevRecScheduleSearchBasic
     */
    public function getRevRecScheduleJoin() {
        return $this->revRecScheduleJoin;
    }


    /**
     * Set rgPostingTransactionJoin
     *
     * @param TransactionSearchBasic $rgPostingTransactionJoin
     * @return TransactionSearch
     */
    public function setRgPostingTransactionJoin(TransactionSearchBasic $rgPostingTransactionJoin) {
        $this->rgPostingTransactionJoin = $rgPostingTransactionJoin;
        return $this;
    }

    /**
     * Get rgPostingTransactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getRgPostingTransactionJoin() {
        return $this->rgPostingTransactionJoin;
    }


    /**
     * Set salesOrderJoin
     *
     * @param TransactionSearchBasic $salesOrderJoin
     * @return TransactionSearch
     */
    public function setSalesOrderJoin(TransactionSearchBasic $salesOrderJoin) {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * Get salesOrderJoin
     *
     * @return TransactionSearchBasic
     */
    public function getSalesOrderJoin() {
        return $this->salesOrderJoin;
    }


    /**
     * Set salesRepJoin
     *
     * @param EmployeeSearchBasic $salesRepJoin
     * @return TransactionSearch
     */
    public function setSalesRepJoin(EmployeeSearchBasic $salesRepJoin) {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * Get salesRepJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getSalesRepJoin() {
        return $this->salesRepJoin;
    }


    /**
     * Set shippingAddressJoin
     *
     * @param AddressSearchBasic $shippingAddressJoin
     * @return TransactionSearch
     */
    public function setShippingAddressJoin(AddressSearchBasic $shippingAddressJoin) {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * Get shippingAddressJoin
     *
     * @return AddressSearchBasic
     */
    public function getShippingAddressJoin() {
        return $this->shippingAddressJoin;
    }


    /**
     * Set subsidiaryJoin
     *
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return TransactionSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin) {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * Get subsidiaryJoin
     *
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin() {
        return $this->subsidiaryJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchBasic $taskJoin
     * @return TransactionSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin) {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * Get taskJoin
     *
     * @return TaskSearchBasic
     */
    public function getTaskJoin() {
        return $this->taskJoin;
    }


    /**
     * Set toLocationJoin
     *
     * @param LocationSearchBasic $toLocationJoin
     * @return TransactionSearch
     */
    public function setToLocationJoin(LocationSearchBasic $toLocationJoin) {
        $this->toLocationJoin = $toLocationJoin;
        return $this;
    }

    /**
     * Get toLocationJoin
     *
     * @return LocationSearchBasic
     */
    public function getToLocationJoin() {
        return $this->toLocationJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return TransactionSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchBasic $userNotesJoin
     * @return TransactionSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }


    /**
     * Set vendorJoin
     *
     * @param VendorSearchBasic $vendorJoin
     * @return TransactionSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }


    /**
     * Set vendorLineJoin
     *
     * @param VendorSearchBasic $vendorLineJoin
     * @return TransactionSearch
     */
    public function setVendorLineJoin(VendorSearchBasic $vendorLineJoin) {
        $this->vendorLineJoin = $vendorLineJoin;
        return $this;
    }

    /**
     * Get vendorLineJoin
     *
     * @return VendorSearchBasic
     */
    public function getVendorLineJoin() {
        return $this->vendorLineJoin;
    }

}