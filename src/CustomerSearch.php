<?php

namespace Nzolt\NetSuite;

class CustomerSearch extends SearchRecord
{

    /**
     * @var CustomerSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var BillingAccountSearchBasic $billingAccountJoin
     */
    protected $billingAccountJoin = null;

    /**
     * @var BillingScheduleSearchBasic $billingScheduleJoin
     */
    protected $billingScheduleJoin = null;

    /**
     * @var PhoneCallSearchBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var CampaignSearchBasic $campaignResponseJoin
     */
    protected $campaignResponseJoin = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ContactSearchBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var ContactSearchBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var CalendarEventSearchBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var FileSearchBasic $hostedPageJoin
     */
    protected $hostedPageJoin = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var CampaignSearchBasic $leadSourceJoin
     */
    protected $leadSourceJoin = null;

    /**
     * @var MessageSearchBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var MessageSearchBasic $messagesFromJoin
     */
    protected $messagesFromJoin = null;

    /**
     * @var MessageSearchBasic $messagesToJoin
     */
    protected $messagesToJoin = null;

    /**
     * @var MseSubsidiarySearchBasic $mseSubsidiaryJoin
     */
    protected $mseSubsidiaryJoin = null;

    /**
     * @var OpportunitySearchBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var OriginatingLeadSearchBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var CustomerSearchBasic $parentCustomerJoin
     */
    protected $parentCustomerJoin = null;

    /**
     * @var PartnerSearchBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var PricingSearchBasic $pricingJoin
     */
    protected $pricingJoin = null;

    /**
     * @var ItemSearchBasic $purchasedItemJoin
     */
    protected $purchasedItemJoin = null;

    /**
     * @var ResourceAllocationSearchBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var EmployeeSearchBasic $salesRepJoin
     */
    protected $salesRepJoin = null;

    /**
     * @var CustomerSearchBasic $subCustomerJoin
     */
    protected $subCustomerJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TimeBillSearchBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var CustomerSearchBasic $topLevelParentJoin
     */
    protected $topLevelParentJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var ItemSearchBasic $upsellItemJoin
     */
    protected $upsellItemJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var SiteCategorySearchBasic $webSiteCategoryJoin
     */
    protected $webSiteCategoryJoin = null;

    /**
     * @var ItemSearchBasic $webSiteItemJoin
     */
    protected $webSiteItemJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomerSearchBasic $basic
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBillingAccountJoin()
    {
      return $this->billingAccountJoin;
    }

    /**
     * @param BillingAccountSearchBasic $billingAccountJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setBillingAccountJoin($billingAccountJoin)
    {
      $this->billingAccountJoin = $billingAccountJoin;
      return $this;
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin()
    {
      return $this->billingScheduleJoin;
    }

    /**
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setBillingScheduleJoin($billingScheduleJoin)
    {
      $this->billingScheduleJoin = $billingScheduleJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getCampaignResponseJoin()
    {
      return $this->campaignResponseJoin;
    }

    /**
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setCampaignResponseJoin($campaignResponseJoin)
    {
      $this->campaignResponseJoin = $campaignResponseJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactJoin()
    {
      return $this->contactJoin;
    }

    /**
     * @param ContactSearchBasic $contactJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getHostedPageJoin()
    {
      return $this->hostedPageJoin;
    }

    /**
     * @param FileSearchBasic $hostedPageJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setHostedPageJoin($hostedPageJoin)
    {
      $this->hostedPageJoin = $hostedPageJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setLeadSourceJoin($leadSourceJoin)
    {
      $this->leadSourceJoin = $leadSourceJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesFromJoin()
    {
      return $this->messagesFromJoin;
    }

    /**
     * @param MessageSearchBasic $messagesFromJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setMessagesFromJoin($messagesFromJoin)
    {
      $this->messagesFromJoin = $messagesFromJoin;
      return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesToJoin()
    {
      return $this->messagesToJoin;
    }

    /**
     * @param MessageSearchBasic $messagesToJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setMessagesToJoin($messagesToJoin)
    {
      $this->messagesToJoin = $messagesToJoin;
      return $this;
    }

    /**
     * @return MseSubsidiarySearchBasic
     */
    public function getMseSubsidiaryJoin()
    {
      return $this->mseSubsidiaryJoin;
    }

    /**
     * @param MseSubsidiarySearchBasic $mseSubsidiaryJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setMseSubsidiaryJoin($mseSubsidiaryJoin)
    {
      $this->mseSubsidiaryJoin = $mseSubsidiaryJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
      return $this;
    }

    /**
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin()
    {
      return $this->originatingLeadJoin;
    }

    /**
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getParentCustomerJoin()
    {
      return $this->parentCustomerJoin;
    }

    /**
     * @param CustomerSearchBasic $parentCustomerJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setParentCustomerJoin($parentCustomerJoin)
    {
      $this->parentCustomerJoin = $parentCustomerJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return PricingSearchBasic
     */
    public function getPricingJoin()
    {
      return $this->pricingJoin;
    }

    /**
     * @param PricingSearchBasic $pricingJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setPricingJoin($pricingJoin)
    {
      $this->pricingJoin = $pricingJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getPurchasedItemJoin()
    {
      return $this->purchasedItemJoin;
    }

    /**
     * @param ItemSearchBasic $purchasedItemJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setPurchasedItemJoin($purchasedItemJoin)
    {
      $this->purchasedItemJoin = $purchasedItemJoin;
      return $this;
    }

    /**
     * @return ResourceAllocationSearchBasic
     */
    public function getResourceAllocationJoin()
    {
      return $this->resourceAllocationJoin;
    }

    /**
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setSalesRepJoin($salesRepJoin)
    {
      $this->salesRepJoin = $salesRepJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getSubCustomerJoin()
    {
      return $this->subCustomerJoin;
    }

    /**
     * @param CustomerSearchBasic $subCustomerJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setSubCustomerJoin($subCustomerJoin)
    {
      $this->subCustomerJoin = $subCustomerJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getTopLevelParentJoin()
    {
      return $this->topLevelParentJoin;
    }

    /**
     * @param CustomerSearchBasic $topLevelParentJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setTopLevelParentJoin($topLevelParentJoin)
    {
      $this->topLevelParentJoin = $topLevelParentJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getUpsellItemJoin()
    {
      return $this->upsellItemJoin;
    }

    /**
     * @param ItemSearchBasic $upsellItemJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setUpsellItemJoin($upsellItemJoin)
    {
      $this->upsellItemJoin = $upsellItemJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return SiteCategorySearchBasic
     */
    public function getWebSiteCategoryJoin()
    {
      return $this->webSiteCategoryJoin;
    }

    /**
     * @param SiteCategorySearchBasic $webSiteCategoryJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setWebSiteCategoryJoin($webSiteCategoryJoin)
    {
      $this->webSiteCategoryJoin = $webSiteCategoryJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getWebSiteItemJoin()
    {
      return $this->webSiteItemJoin;
    }

    /**
     * @param ItemSearchBasic $webSiteItemJoin
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setWebSiteItemJoin($webSiteItemJoin)
    {
      $this->webSiteItemJoin = $webSiteItemJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
