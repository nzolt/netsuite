<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PricingSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SiteCategorySearchRowBasic;

/**
 * CustomerSearchRow
 */
class CustomerSearchRow extends SearchRow {

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var BillingScheduleSearchRowBasic
     */
    protected $billingScheduleJoin;

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
     * @var ContactSearchRowBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $contactPrimaryJoin;

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
     * @var FileSearchRowBasic
     */
    protected $hostedPageJoin;

    /**
     * @access public
     * @var JobSearchRowBasic
     */
    protected $jobJoin;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $leadSourceJoin;

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
     * @var OriginatingLeadSearchRowBasic
     */
    protected $originatingLeadJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $parentCustomerJoin;

    /**
     * @access public
     * @var PartnerSearchRowBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var PricingSearchRowBasic
     */
    protected $pricingJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $purchasedItemJoin;

    /**
     * @access public
     * @var ResourceAllocationSearchRowBasic
     */
    protected $resourceAllocationJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $salesRepJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $subCustomerJoin;

    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    protected $taskJoin;

    /**
     * @access public
     * @var TimeBillSearchRowBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $topLevelParentJoin;

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
     * @var SiteCategorySearchRowBasic
     */
    protected $webSiteCategoryJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $webSiteItemJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "CustomerSearchRowBasic",
    	"billingScheduleJoin" => "BillingScheduleSearchRowBasic",
    	"callJoin" => "PhoneCallSearchRowBasic",
    	"campaignResponseJoin" => "CampaignSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"contactJoin" => "ContactSearchRowBasic",
    	"contactPrimaryJoin" => "ContactSearchRowBasic",
    	"eventJoin" => "CalendarEventSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"hostedPageJoin" => "FileSearchRowBasic",
    	"jobJoin" => "JobSearchRowBasic",
    	"leadSourceJoin" => "CampaignSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"messagesFromJoin" => "MessageSearchRowBasic",
    	"messagesToJoin" => "MessageSearchRowBasic",
    	"opportunityJoin" => "OpportunitySearchRowBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
    	"parentCustomerJoin" => "CustomerSearchRowBasic",
    	"partnerJoin" => "PartnerSearchRowBasic",
    	"pricingJoin" => "PricingSearchRowBasic",
    	"purchasedItemJoin" => "ItemSearchRowBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
    	"salesRepJoin" => "EmployeeSearchRowBasic",
    	"subCustomerJoin" => "CustomerSearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"timeJoin" => "TimeBillSearchRowBasic",
    	"topLevelParentJoin" => "CustomerSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"upsellItemJoin" => "ItemSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"webSiteCategoryJoin" => "SiteCategorySearchRowBasic",
    	"webSiteItemJoin" => "ItemSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param CustomerSearchRowBasic $basic
     * @return CustomerSearchRow
     */
    public function setBasic(CustomerSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CustomerSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set billingScheduleJoin
     *
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return CustomerSearchRow
     */
    public function setBillingScheduleJoin(BillingScheduleSearchRowBasic $billingScheduleJoin) {
        $this->billingScheduleJoin = $billingScheduleJoin;
        return $this;
    }

    /**
     * Get billingScheduleJoin
     *
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin() {
        return $this->billingScheduleJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchRowBasic $callJoin
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * Set contactJoin
     *
     * @param ContactSearchRowBasic $contactJoin
     * @return CustomerSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin) {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * Get contactJoin
     *
     * @return ContactSearchRowBasic
     */
    public function getContactJoin() {
        return $this->contactJoin;
    }


    /**
     * Set contactPrimaryJoin
     *
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return CustomerSearchRow
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
     * Set eventJoin
     *
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * Set hostedPageJoin
     *
     * @param FileSearchRowBasic $hostedPageJoin
     * @return CustomerSearchRow
     */
    public function setHostedPageJoin(FileSearchRowBasic $hostedPageJoin) {
        $this->hostedPageJoin = $hostedPageJoin;
        return $this;
    }

    /**
     * Get hostedPageJoin
     *
     * @return FileSearchRowBasic
     */
    public function getHostedPageJoin() {
        return $this->hostedPageJoin;
    }


    /**
     * Set jobJoin
     *
     * @param JobSearchRowBasic $jobJoin
     * @return CustomerSearchRow
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
     * Set leadSourceJoin
     *
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return CustomerSearchRow
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
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return CustomerSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin) {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * Get originatingLeadJoin
     *
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin() {
        return $this->originatingLeadJoin;
    }


    /**
     * Set parentCustomerJoin
     *
     * @param CustomerSearchRowBasic $parentCustomerJoin
     * @return CustomerSearchRow
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
     * Set partnerJoin
     *
     * @param PartnerSearchRowBasic $partnerJoin
     * @return CustomerSearchRow
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
     * Set pricingJoin
     *
     * @param PricingSearchRowBasic $pricingJoin
     * @return CustomerSearchRow
     */
    public function setPricingJoin(PricingSearchRowBasic $pricingJoin) {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * Get pricingJoin
     *
     * @return PricingSearchRowBasic
     */
    public function getPricingJoin() {
        return $this->pricingJoin;
    }


    /**
     * Set purchasedItemJoin
     *
     * @param ItemSearchRowBasic $purchasedItemJoin
     * @return CustomerSearchRow
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
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return CustomerSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin) {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * Get resourceAllocationJoin
     *
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin() {
        return $this->resourceAllocationJoin;
    }


    /**
     * Set salesRepJoin
     *
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return CustomerSearchRow
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
     * Set subCustomerJoin
     *
     * @param CustomerSearchRowBasic $subCustomerJoin
     * @return CustomerSearchRow
     */
    public function setSubCustomerJoin(CustomerSearchRowBasic $subCustomerJoin) {
        $this->subCustomerJoin = $subCustomerJoin;
        return $this;
    }

    /**
     * Get subCustomerJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getSubCustomerJoin() {
        return $this->subCustomerJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchRowBasic $taskJoin
     * @return CustomerSearchRow
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
     * Set timeJoin
     *
     * @param TimeBillSearchRowBasic $timeJoin
     * @return CustomerSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set topLevelParentJoin
     *
     * @param CustomerSearchRowBasic $topLevelParentJoin
     * @return CustomerSearchRow
     */
    public function setTopLevelParentJoin(CustomerSearchRowBasic $topLevelParentJoin) {
        $this->topLevelParentJoin = $topLevelParentJoin;
        return $this;
    }

    /**
     * Get topLevelParentJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getTopLevelParentJoin() {
        return $this->topLevelParentJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * @return CustomerSearchRow
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
     * Set webSiteCategoryJoin
     *
     * @param SiteCategorySearchRowBasic $webSiteCategoryJoin
     * @return CustomerSearchRow
     */
    public function setWebSiteCategoryJoin(SiteCategorySearchRowBasic $webSiteCategoryJoin) {
        $this->webSiteCategoryJoin = $webSiteCategoryJoin;
        return $this;
    }

    /**
     * Get webSiteCategoryJoin
     *
     * @return SiteCategorySearchRowBasic
     */
    public function getWebSiteCategoryJoin() {
        return $this->webSiteCategoryJoin;
    }


    /**
     * Set webSiteItemJoin
     *
     * @param ItemSearchRowBasic $webSiteItemJoin
     * @return CustomerSearchRow
     */
    public function setWebSiteItemJoin(ItemSearchRowBasic $webSiteItemJoin) {
        $this->webSiteItemJoin = $webSiteItemJoin;
        return $this;
    }

    /**
     * Get webSiteItemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getWebSiteItemJoin() {
        return $this->webSiteItemJoin;
    }

}