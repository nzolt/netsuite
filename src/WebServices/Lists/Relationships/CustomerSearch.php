<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PricingSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SiteCategorySearchBasic;

/**
 * CustomerSearch
 */
class CustomerSearch extends SearchRecord {

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var BillingScheduleSearchBasic
     */
    protected $billingScheduleJoin;

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
     * @var ContactSearchBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactPrimaryJoin;

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
     * @var FileSearchBasic
     */
    protected $hostedPageJoin;

    /**
     * @access public
     * @var JobSearchBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $leadSourceJoin;

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
     * @var OriginatingLeadSearchBasic
     */
    protected $originatingLeadJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $parentCustomerJoin;

    /**
     * @access public
     * @var PartnerSearchBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var PricingSearchBasic
     */
    protected $pricingJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $purchasedItemJoin;

    /**
     * @access public
     * @var ResourceAllocationSearchBasic
     */
    protected $resourceAllocationJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $salesRepJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $subCustomerJoin;

    /**
     * @access public
     * @var TaskSearchBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var TimeBillSearchBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $topLevelParentJoin;

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
     * @var SiteCategorySearchBasic
     */
    protected $webSiteCategoryJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $webSiteItemJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "CustomerSearchBasic",
    	"billingScheduleJoin" => "BillingScheduleSearchBasic",
    	"callJoin" => "PhoneCallSearchBasic",
    	"campaignResponseJoin" => "CampaignSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"contactJoin" => "ContactSearchBasic",
    	"contactPrimaryJoin" => "ContactSearchBasic",
    	"eventJoin" => "CalendarEventSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"hostedPageJoin" => "FileSearchBasic",
    	"jobJoin" => "JobSearchBasic",
    	"leadSourceJoin" => "CampaignSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"messagesFromJoin" => "MessageSearchBasic",
    	"messagesToJoin" => "MessageSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"parentCustomerJoin" => "CustomerSearchBasic",
    	"partnerJoin" => "PartnerSearchBasic",
    	"pricingJoin" => "PricingSearchBasic",
    	"purchasedItemJoin" => "ItemSearchBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
    	"salesRepJoin" => "EmployeeSearchBasic",
    	"subCustomerJoin" => "CustomerSearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"timeJoin" => "TimeBillSearchBasic",
    	"topLevelParentJoin" => "CustomerSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"upsellItemJoin" => "ItemSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"webSiteCategoryJoin" => "SiteCategorySearchBasic",
    	"webSiteItemJoin" => "ItemSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param CustomerSearchBasic $basic
     * @return CustomerSearch
     */
    public function setBasic(CustomerSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CustomerSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set billingScheduleJoin
     *
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return CustomerSearch
     */
    public function setBillingScheduleJoin(BillingScheduleSearchBasic $billingScheduleJoin) {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * Get billingScheduleJoin
     *
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin() {
        return $this->billingScheduleJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchBasic $callJoin
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * Set contactJoin
     *
     * @param ContactSearchBasic $contactJoin
     * @return CustomerSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin) {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * Get contactJoin
     *
     * @return ContactSearchBasic
     */
    public function getContactJoin() {
        return $this->contactJoin;
    }


    /**
     * Set contactPrimaryJoin
     *
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return CustomerSearch
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
     * Set eventJoin
     *
     * @param CalendarEventSearchBasic $eventJoin
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * Set hostedPageJoin
     *
     * @param FileSearchBasic $hostedPageJoin
     * @return CustomerSearch
     */
    public function setHostedPageJoin(FileSearchBasic $hostedPageJoin) {
        $this->hostedPageJoin = $hostedPageJoin;
        return $this;
    }

    /**
     * Get hostedPageJoin
     *
     * @return FileSearchBasic
     */
    public function getHostedPageJoin() {
        return $this->hostedPageJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchBasic $jobJoin
     * @return CustomerSearch
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
     * Set leadSourceJoin
     *
     * @param CampaignSearchBasic $leadSourceJoin
     * @return CustomerSearch
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
     * Set messagesJoin
     *
     * @param MessageSearchBasic $messagesJoin
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return CustomerSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin) {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * Get originatingLeadJoin
     *
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin() {
        return $this->originatingLeadJoin;
    }


    /**
     * Set parentCustomerJoin
     *
     * @param CustomerSearchBasic $parentCustomerJoin
     * @return CustomerSearch
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
     * Set partnerJoin
     *
     * @param PartnerSearchBasic $partnerJoin
     * @return CustomerSearch
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
     * Set pricingJoin
     *
     * @param PricingSearchBasic $pricingJoin
     * @return CustomerSearch
     */
    public function setPricingJoin(PricingSearchBasic $pricingJoin) {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * Get pricingJoin
     *
     * @return PricingSearchBasic
     */
    public function getPricingJoin() {
        return $this->pricingJoin;
    }


    /**
     * Set purchasedItemJoin
     *
     * @param ItemSearchBasic $purchasedItemJoin
     * @return CustomerSearch
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
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return CustomerSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin) {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * Get resourceAllocationJoin
     *
     * @return ResourceAllocationSearchBasic
     */
    public function getResourceAllocationJoin() {
        return $this->resourceAllocationJoin;
    }


    /**
     * Set salesRepJoin
     *
     * @param EmployeeSearchBasic $salesRepJoin
     * @return CustomerSearch
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
     * Set subCustomerJoin
     *
     * @param CustomerSearchBasic $subCustomerJoin
     * @return CustomerSearch
     */
    public function setSubCustomerJoin(CustomerSearchBasic $subCustomerJoin) {
        $this->subCustomerJoin = $subCustomerJoin;
        return $this;
    }

    /**
     * Get subCustomerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getSubCustomerJoin() {
        return $this->subCustomerJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchBasic $taskJoin
     * @return CustomerSearch
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
     * Set timeJoin
     *
     * @param TimeBillSearchBasic $timeJoin
     * @return CustomerSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set topLevelParentJoin
     *
     * @param CustomerSearchBasic $topLevelParentJoin
     * @return CustomerSearch
     */
    public function setTopLevelParentJoin(CustomerSearchBasic $topLevelParentJoin) {
        $this->topLevelParentJoin = $topLevelParentJoin;
        return $this;
    }

    /**
     * Get topLevelParentJoin
     *
     * @return CustomerSearchBasic
     */
    public function getTopLevelParentJoin() {
        return $this->topLevelParentJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * @return CustomerSearch
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
     * Set webSiteCategoryJoin
     *
     * @param SiteCategorySearchBasic $webSiteCategoryJoin
     * @return CustomerSearch
     */
    public function setWebSiteCategoryJoin(SiteCategorySearchBasic $webSiteCategoryJoin) {
        $this->webSiteCategoryJoin = $webSiteCategoryJoin;
        return $this;
    }

    /**
     * Get webSiteCategoryJoin
     *
     * @return SiteCategorySearchBasic
     */
    public function getWebSiteCategoryJoin() {
        return $this->webSiteCategoryJoin;
    }


    /**
     * Set webSiteItemJoin
     *
     * @param ItemSearchBasic $webSiteItemJoin
     * @return CustomerSearch
     */
    public function setWebSiteItemJoin(ItemSearchBasic $webSiteItemJoin) {
        $this->webSiteItemJoin = $webSiteItemJoin;
        return $this;
    }

    /**
     * Get webSiteItemJoin
     *
     * @return ItemSearchBasic
     */
    public function getWebSiteItemJoin() {
        return $this->webSiteItemJoin;
    }

}