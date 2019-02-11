<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * ContactSearchRow
 */
class ContactSearchRow extends SearchRow {

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $campaignResponseJoin;

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerPrimaryJoin;

    /**
     * @access public
     * @var CalendarEventSearchRowBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobPrimaryJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesFromJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesToJoin;

    /**
     * @access public
     * @var OpportunitySearchRowBasic
     */
    protected $opportunityJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $parentCustomerJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $parentJobJoin;

    /**
     * @access public
     * @var PartnerSearchRowBasic
     */
    protected $parentPartnerJoin;

    /**
     * @access public
     * @var VendorSearchRowBasic
     */
    protected $parentVendorJoin;

    /**
     * @access public
     * @var PartnerSearchRowBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var PartnerSearchRowBasic
     */
    protected $partnerPrimaryJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $purchasedItemJoin;

    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $upsellItemJoin;

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
    protected $vendorPrimaryJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ContactSearchRowBasic",
    	"callJoin" => "PhoneCallSearchRowBasic",
    	"campaignResponseJoin" => "CampaignSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"customerPrimaryJoin" => "CustomerSearchRowBasic",
    	"eventJoin" => "CalendarEventSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"jobPrimaryJoin" => "JobSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"messagesFromJoin" => "MessageSearchRowBasic",
    	"messagesToJoin" => "MessageSearchRowBasic",
    	"opportunityJoin" => "OpportunitySearchRowBasic",
    	"parentCustomerJoin" => "CustomerSearchRowBasic",
    	"parentJobJoin" => "JobSearchRowBasic",
    	"parentPartnerJoin" => "PartnerSearchRowBasic",
    	"parentVendorJoin" => "VendorSearchRowBasic",
    	"partnerJoin" => "PartnerSearchRowBasic",
    	"partnerPrimaryJoin" => "PartnerSearchRowBasic",
    	"purchasedItemJoin" => "ItemSearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"upsellItemJoin" => "ItemSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    	"vendorPrimaryJoin" => "VendorSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param ContactSearchRowBasic $basic
     * @return ContactSearchRow
     */
    public function setBasic(ContactSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ContactSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchRowBasic $callJoin
     * @return ContactSearchRow
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
     * Set campaignResponseJoin
     *
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return ContactSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin) {
        $this->campaignResponseJoin = $campaignResponseJoin;
        return $this;
    }

    /**
     * Get campaignResponseJoin
     *
     * @return CampaignSearchRowBasic
     */
    public function getCampaignResponseJoin() {
        return $this->campaignResponseJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return ContactSearchRow
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
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return ContactSearchRow
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
     * Set customerPrimaryJoin
     *
     * @param CustomerSearchRowBasic $customerPrimaryJoin
     * @return ContactSearchRow
     */
    public function setCustomerPrimaryJoin(CustomerSearchRowBasic $customerPrimaryJoin) {
        $this->customerPrimaryJoin = $customerPrimaryJoin;
        return $this;
    }

    /**
     * Get customerPrimaryJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getCustomerPrimaryJoin() {
        return $this->customerPrimaryJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return ContactSearchRow
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
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return ContactSearchRow
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
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return ContactSearchRow
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
     * Set jobPrimaryJoin
     *
     * @param JobSearchRowBasic $jobPrimaryJoin
     * @return ContactSearchRow
     */
    public function setJobPrimaryJoin(JobSearchRowBasic $jobPrimaryJoin) {
        $this->jobPrimaryJoin = $jobPrimaryJoin;
        return $this;
    }

    /**
     * Get jobPrimaryJoin
     *
     * @return JobSearchRowBasic
     */
    public function getJobPrimaryJoin() {
        return $this->jobPrimaryJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return ContactSearchRow
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
     * Set messagesFromJoin
     *
     * @param MessageSearchRowBasic $messagesFromJoin
     * @return ContactSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin) {
        $this->messagesFromJoin = $messagesFromJoin;
        return $this;
    }

    /**
     * Get messagesFromJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesFromJoin() {
        return $this->messagesFromJoin;
    }


    /**
     * Set messagesToJoin
     *
     * @param MessageSearchRowBasic $messagesToJoin
     * @return ContactSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin) {
        $this->messagesToJoin = $messagesToJoin;
        return $this;
    }

    /**
     * Get messagesToJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesToJoin() {
        return $this->messagesToJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return ContactSearchRow
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
     * Set parentCustomerJoin
     *
     * @param CustomerSearchRowBasic $parentCustomerJoin
     * @return ContactSearchRow
     */
    public function setParentCustomerJoin(CustomerSearchRowBasic $parentCustomerJoin) {
        $this->parentCustomerJoin = $parentCustomerJoin;
        return $this;
    }

    /**
     * Get parentCustomerJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getParentCustomerJoin() {
        return $this->parentCustomerJoin;
    }


    /**
     * Set parentJobJoin
     *
     * @param JobSearchRowBasic $parentJobJoin
     * @return ContactSearchRow
     */
    public function setParentJobJoin(JobSearchRowBasic $parentJobJoin) {
        $this->parentJobJoin = $parentJobJoin;
        return $this;
    }

    /**
     * Get parentJobJoin
     *
     * @return JobSearchRowBasic
     */
    public function getParentJobJoin() {
        return $this->parentJobJoin;
    }


    /**
     * Set parentPartnerJoin
     *
     * @param PartnerSearchRowBasic $parentPartnerJoin
     * @return ContactSearchRow
     */
    public function setParentPartnerJoin(PartnerSearchRowBasic $parentPartnerJoin) {
        $this->parentPartnerJoin = $parentPartnerJoin;
        return $this;
    }

    /**
     * Get parentPartnerJoin
     *
     * @return PartnerSearchRowBasic
     */
    public function getParentPartnerJoin() {
        return $this->parentPartnerJoin;
    }


    /**
     * Set parentVendorJoin
     *
     * @param VendorSearchRowBasic $parentVendorJoin
     * @return ContactSearchRow
     */
    public function setParentVendorJoin(VendorSearchRowBasic $parentVendorJoin) {
        $this->parentVendorJoin = $parentVendorJoin;
        return $this;
    }

    /**
     * Get parentVendorJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getParentVendorJoin() {
        return $this->parentVendorJoin;
    }


    /**
     * Set partnerJoin
     *
     * @param PartnerSearchRowBasic $partnerJoin
     * @return ContactSearchRow
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
     * Set partnerPrimaryJoin
     *
     * @param PartnerSearchRowBasic $partnerPrimaryJoin
     * @return ContactSearchRow
     */
    public function setPartnerPrimaryJoin(PartnerSearchRowBasic $partnerPrimaryJoin) {
        $this->partnerPrimaryJoin = $partnerPrimaryJoin;
        return $this;
    }

    /**
     * Get partnerPrimaryJoin
     *
     * @return PartnerSearchRowBasic
     */
    public function getPartnerPrimaryJoin() {
        return $this->partnerPrimaryJoin;
    }


    /**
     * Set purchasedItemJoin
     *
     * @param ItemSearchRowBasic $purchasedItemJoin
     * @return ContactSearchRow
     */
    public function setPurchasedItemJoin(ItemSearchRowBasic $purchasedItemJoin) {
        $this->purchasedItemJoin = $purchasedItemJoin;
        return $this;
    }

    /**
     * Get purchasedItemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getPurchasedItemJoin() {
        return $this->purchasedItemJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchRowBasic $taskJoin
     * @return ContactSearchRow
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
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return ContactSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }


    /**
     * Set upsellItemJoin
     *
     * @param ItemSearchRowBasic $upsellItemJoin
     * @return ContactSearchRow
     */
    public function setUpsellItemJoin(ItemSearchRowBasic $upsellItemJoin) {
        $this->upsellItemJoin = $upsellItemJoin;
        return $this;
    }

    /**
     * Get upsellItemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getUpsellItemJoin() {
        return $this->upsellItemJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ContactSearchRow
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
     * @return ContactSearchRow
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
     * @return ContactSearchRow
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
     * Set vendorPrimaryJoin
     *
     * @param VendorSearchRowBasic $vendorPrimaryJoin
     * @return ContactSearchRow
     */
    public function setVendorPrimaryJoin(VendorSearchRowBasic $vendorPrimaryJoin) {
        $this->vendorPrimaryJoin = $vendorPrimaryJoin;
        return $this;
    }

    /**
     * Get vendorPrimaryJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getVendorPrimaryJoin() {
        return $this->vendorPrimaryJoin;
    }

}