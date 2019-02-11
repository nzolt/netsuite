<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * ContactSearch
 */
class ContactSearch extends SearchRecord {

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var PhoneCallSearchBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $campaignResponseJoin;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerPrimaryJoin;

    /**
     * @access public
     * @var CalendarEventSearchBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobPrimaryJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesFromJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesToJoin;

    /**
     * @access public
     * @var OpportunitySearchBasic
     */
    protected $opportunityJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $parentCustomerJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $parentJobJoin;

    /**
     * @access public
     * @var PartnerSearchBasic
     */
    protected $parentPartnerJoin;

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $parentVendorJoin;

    /**
     * @access public
     * @var PartnerSearchBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var PartnerSearchBasic
     */
    protected $partnerPrimaryJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $purchasedItemJoin;

    /**
     * @access public
     * @var TaskSearchBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $upsellItemJoin;

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
    protected $vendorPrimaryJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "ContactSearchBasic",
    	"callJoin" => "PhoneCallSearchBasic",
    	"campaignResponseJoin" => "CampaignSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"customerPrimaryJoin" => "CustomerSearchBasic",
    	"eventJoin" => "CalendarEventSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"jobPrimaryJoin" => "JobSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"messagesFromJoin" => "MessageSearchBasic",
    	"messagesToJoin" => "MessageSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"parentCustomerJoin" => "CustomerSearchBasic",
    	"parentJobJoin" => "JobSearchBasic",
    	"parentPartnerJoin" => "PartnerSearchBasic",
    	"parentVendorJoin" => "VendorSearchBasic",
    	"partnerJoin" => "PartnerSearchBasic",
    	"partnerPrimaryJoin" => "PartnerSearchBasic",
    	"purchasedItemJoin" => "ItemSearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"upsellItemJoin" => "ItemSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    	"vendorPrimaryJoin" => "VendorSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param ContactSearchBasic $basic
     * @return ContactSearch
     */
    public function setBasic(ContactSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ContactSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchBasic $callJoin
     * @return ContactSearch
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
     * Set campaignResponseJoin
     *
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return ContactSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin) {
        $this->campaignResponseJoin = $campaignResponseJoin;
        return $this;
    }

    /**
     * Get campaignResponseJoin
     *
     * @return CampaignSearchBasic
     */
    public function getCampaignResponseJoin() {
        return $this->campaignResponseJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return ContactSearch
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
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return ContactSearch
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
     * Set customerPrimaryJoin
     *
     * @param CustomerSearchBasic $customerPrimaryJoin
     * @return ContactSearch
     */
    public function setCustomerPrimaryJoin(CustomerSearchBasic $customerPrimaryJoin) {
        $this->customerPrimaryJoin = $customerPrimaryJoin;
        return $this;
    }

    /**
     * Get customerPrimaryJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCustomerPrimaryJoin() {
        return $this->customerPrimaryJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchBasic $eventJoin
     * @return ContactSearch
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
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return ContactSearch
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
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return ContactSearch
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
     * Set jobPrimaryJoin
     *
     * @param JobSearchBasic $jobPrimaryJoin
     * @return ContactSearch
     */
    public function setJobPrimaryJoin(JobSearchBasic $jobPrimaryJoin) {
        $this->jobPrimaryJoin = $jobPrimaryJoin;
        return $this;
    }

    /**
     * Get jobPrimaryJoin
     *
     * @return JobSearchBasic
     */
    public function getJobPrimaryJoin() {
        return $this->jobPrimaryJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchBasic $messagesJoin
     * @return ContactSearch
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
     * Set messagesFromJoin
     *
     * @param MessageSearchBasic $messagesFromJoin
     * @return ContactSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin) {
        $this->messagesFromJoin = $messagesFromJoin;
        return $this;
    }

    /**
     * Get messagesFromJoin
     *
     * @return MessageSearchBasic
     */
    public function getMessagesFromJoin() {
        return $this->messagesFromJoin;
    }


    /**
     * Set messagesToJoin
     *
     * @param MessageSearchBasic $messagesToJoin
     * @return ContactSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin) {
        $this->messagesToJoin = $messagesToJoin;
        return $this;
    }

    /**
     * Get messagesToJoin
     *
     * @return MessageSearchBasic
     */
    public function getMessagesToJoin() {
        return $this->messagesToJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchBasic $opportunityJoin
     * @return ContactSearch
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
     * Set parentCustomerJoin
     *
     * @param CustomerSearchBasic $parentCustomerJoin
     * @return ContactSearch
     */
    public function setParentCustomerJoin(CustomerSearchBasic $parentCustomerJoin) {
        $this->parentCustomerJoin = $parentCustomerJoin;
        return $this;
    }

    /**
     * Get parentCustomerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getParentCustomerJoin() {
        return $this->parentCustomerJoin;
    }


    /**
     * Set parentJobJoin
     *
     * @param JobSearchBasic $parentJobJoin
     * @return ContactSearch
     */
    public function setParentJobJoin(JobSearchBasic $parentJobJoin) {
        $this->parentJobJoin = $parentJobJoin;
        return $this;
    }

    /**
     * Get parentJobJoin
     *
     * @return JobSearchBasic
     */
    public function getParentJobJoin() {
        return $this->parentJobJoin;
    }


    /**
     * Set parentPartnerJoin
     *
     * @param PartnerSearchBasic $parentPartnerJoin
     * @return ContactSearch
     */
    public function setParentPartnerJoin(PartnerSearchBasic $parentPartnerJoin) {
        $this->parentPartnerJoin = $parentPartnerJoin;
        return $this;
    }

    /**
     * Get parentPartnerJoin
     *
     * @return PartnerSearchBasic
     */
    public function getParentPartnerJoin() {
        return $this->parentPartnerJoin;
    }


    /**
     * Set parentVendorJoin
     *
     * @param VendorSearchBasic $parentVendorJoin
     * @return ContactSearch
     */
    public function setParentVendorJoin(VendorSearchBasic $parentVendorJoin) {
        $this->parentVendorJoin = $parentVendorJoin;
        return $this;
    }

    /**
     * Get parentVendorJoin
     *
     * @return VendorSearchBasic
     */
    public function getParentVendorJoin() {
        return $this->parentVendorJoin;
    }


    /**
     * Set partnerJoin
     *
     * @param PartnerSearchBasic $partnerJoin
     * @return ContactSearch
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
     * Set partnerPrimaryJoin
     *
     * @param PartnerSearchBasic $partnerPrimaryJoin
     * @return ContactSearch
     */
    public function setPartnerPrimaryJoin(PartnerSearchBasic $partnerPrimaryJoin) {
        $this->partnerPrimaryJoin = $partnerPrimaryJoin;
        return $this;
    }

    /**
     * Get partnerPrimaryJoin
     *
     * @return PartnerSearchBasic
     */
    public function getPartnerPrimaryJoin() {
        return $this->partnerPrimaryJoin;
    }


    /**
     * Set purchasedItemJoin
     *
     * @param ItemSearchBasic $purchasedItemJoin
     * @return ContactSearch
     */
    public function setPurchasedItemJoin(ItemSearchBasic $purchasedItemJoin) {
        $this->purchasedItemJoin = $purchasedItemJoin;
        return $this;
    }

    /**
     * Get purchasedItemJoin
     *
     * @return ItemSearchBasic
     */
    public function getPurchasedItemJoin() {
        return $this->purchasedItemJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchBasic $taskJoin
     * @return ContactSearch
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
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return ContactSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }


    /**
     * Set upsellItemJoin
     *
     * @param ItemSearchBasic $upsellItemJoin
     * @return ContactSearch
     */
    public function setUpsellItemJoin(ItemSearchBasic $upsellItemJoin) {
        $this->upsellItemJoin = $upsellItemJoin;
        return $this;
    }

    /**
     * Get upsellItemJoin
     *
     * @return ItemSearchBasic
     */
    public function getUpsellItemJoin() {
        return $this->upsellItemJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return ContactSearch
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
     * @return ContactSearch
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
     * @return ContactSearch
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
     * Set vendorPrimaryJoin
     *
     * @param VendorSearchBasic $vendorPrimaryJoin
     * @return ContactSearch
     */
    public function setVendorPrimaryJoin(VendorSearchBasic $vendorPrimaryJoin) {
        $this->vendorPrimaryJoin = $vendorPrimaryJoin;
        return $this;
    }

    /**
     * Get vendorPrimaryJoin
     *
     * @return VendorSearchBasic
     */
    public function getVendorPrimaryJoin() {
        return $this->vendorPrimaryJoin;
    }

}