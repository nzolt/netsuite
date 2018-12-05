<?php

namespace Nzolt\NetSuite;

class CustomerSearchRow extends SearchRow
{

    /**
     * @var CustomerSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var BillingAccountSearchRowBasic $billingAccountJoin
     */
    protected $billingAccountJoin = null;

    /**
     * @var BillingScheduleSearchRowBasic $billingScheduleJoin
     */
    protected $billingScheduleJoin = null;

    /**
     * @var PhoneCallSearchRowBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var CampaignSearchRowBasic $campaignResponseJoin
     */
    protected $campaignResponseJoin = null;

    /**
     * @var SupportCaseSearchRowBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ContactSearchRowBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var ContactSearchRowBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var CalendarEventSearchRowBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var FileSearchRowBasic $hostedPageJoin
     */
    protected $hostedPageJoin = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var CampaignSearchRowBasic $leadSourceJoin
     */
    protected $leadSourceJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesFromJoin
     */
    protected $messagesFromJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesToJoin
     */
    protected $messagesToJoin = null;

    /**
     * @var MseSubsidiarySearchRowBasic $mseSubsidiaryJoin
     */
    protected $mseSubsidiaryJoin = null;

    /**
     * @var OpportunitySearchRowBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var OriginatingLeadSearchRowBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var CustomerSearchRowBasic $parentCustomerJoin
     */
    protected $parentCustomerJoin = null;

    /**
     * @var PartnerSearchRowBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var PricingSearchRowBasic $pricingJoin
     */
    protected $pricingJoin = null;

    /**
     * @var ItemSearchRowBasic $purchasedItemJoin
     */
    protected $purchasedItemJoin = null;

    /**
     * @var ResourceAllocationSearchRowBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var EmployeeSearchRowBasic $salesRepJoin
     */
    protected $salesRepJoin = null;

    /**
     * @var CustomerSearchRowBasic $subCustomerJoin
     */
    protected $subCustomerJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var CustomerSearchRowBasic $topLevelParentJoin
     */
    protected $topLevelParentJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var ItemSearchRowBasic $upsellItemJoin
     */
    protected $upsellItemJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchRowBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var SiteCategorySearchRowBasic $webSiteCategoryJoin
     */
    protected $webSiteCategoryJoin = null;

    /**
     * @var ItemSearchRowBasic $webSiteItemJoin
     */
    protected $webSiteItemJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomerSearchRowBasic $basic
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBillingAccountJoin()
    {
      return $this->billingAccountJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $billingAccountJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setBillingAccountJoin($billingAccountJoin)
    {
      $this->billingAccountJoin = $billingAccountJoin;
      return $this;
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin()
    {
      return $this->billingScheduleJoin;
    }

    /**
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setBillingScheduleJoin($billingScheduleJoin)
    {
      $this->billingScheduleJoin = $billingScheduleJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getCampaignResponseJoin()
    {
      return $this->campaignResponseJoin;
    }

    /**
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setCampaignResponseJoin($campaignResponseJoin)
    {
      $this->campaignResponseJoin = $campaignResponseJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactJoin()
    {
      return $this->contactJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getHostedPageJoin()
    {
      return $this->hostedPageJoin;
    }

    /**
     * @param FileSearchRowBasic $hostedPageJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setHostedPageJoin($hostedPageJoin)
    {
      $this->hostedPageJoin = $hostedPageJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setLeadSourceJoin($leadSourceJoin)
    {
      $this->leadSourceJoin = $leadSourceJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesFromJoin()
    {
      return $this->messagesFromJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesFromJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setMessagesFromJoin($messagesFromJoin)
    {
      $this->messagesFromJoin = $messagesFromJoin;
      return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesToJoin()
    {
      return $this->messagesToJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesToJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setMessagesToJoin($messagesToJoin)
    {
      $this->messagesToJoin = $messagesToJoin;
      return $this;
    }

    /**
     * @return MseSubsidiarySearchRowBasic
     */
    public function getMseSubsidiaryJoin()
    {
      return $this->mseSubsidiaryJoin;
    }

    /**
     * @param MseSubsidiarySearchRowBasic $mseSubsidiaryJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setMseSubsidiaryJoin($mseSubsidiaryJoin)
    {
      $this->mseSubsidiaryJoin = $mseSubsidiaryJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
      return $this;
    }

    /**
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin()
    {
      return $this->originatingLeadJoin;
    }

    /**
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getParentCustomerJoin()
    {
      return $this->parentCustomerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $parentCustomerJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setParentCustomerJoin($parentCustomerJoin)
    {
      $this->parentCustomerJoin = $parentCustomerJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return PricingSearchRowBasic
     */
    public function getPricingJoin()
    {
      return $this->pricingJoin;
    }

    /**
     * @param PricingSearchRowBasic $pricingJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setPricingJoin($pricingJoin)
    {
      $this->pricingJoin = $pricingJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getPurchasedItemJoin()
    {
      return $this->purchasedItemJoin;
    }

    /**
     * @param ItemSearchRowBasic $purchasedItemJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setPurchasedItemJoin($purchasedItemJoin)
    {
      $this->purchasedItemJoin = $purchasedItemJoin;
      return $this;
    }

    /**
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin()
    {
      return $this->resourceAllocationJoin;
    }

    /**
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setSalesRepJoin($salesRepJoin)
    {
      $this->salesRepJoin = $salesRepJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getSubCustomerJoin()
    {
      return $this->subCustomerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $subCustomerJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setSubCustomerJoin($subCustomerJoin)
    {
      $this->subCustomerJoin = $subCustomerJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getTopLevelParentJoin()
    {
      return $this->topLevelParentJoin;
    }

    /**
     * @param CustomerSearchRowBasic $topLevelParentJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setTopLevelParentJoin($topLevelParentJoin)
    {
      $this->topLevelParentJoin = $topLevelParentJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getUpsellItemJoin()
    {
      return $this->upsellItemJoin;
    }

    /**
     * @param ItemSearchRowBasic $upsellItemJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setUpsellItemJoin($upsellItemJoin)
    {
      $this->upsellItemJoin = $upsellItemJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return SiteCategorySearchRowBasic
     */
    public function getWebSiteCategoryJoin()
    {
      return $this->webSiteCategoryJoin;
    }

    /**
     * @param SiteCategorySearchRowBasic $webSiteCategoryJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setWebSiteCategoryJoin($webSiteCategoryJoin)
    {
      $this->webSiteCategoryJoin = $webSiteCategoryJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getWebSiteItemJoin()
    {
      return $this->webSiteItemJoin;
    }

    /**
     * @param ItemSearchRowBasic $webSiteItemJoin
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setWebSiteItemJoin($webSiteItemJoin)
    {
      $this->webSiteItemJoin = $webSiteItemJoin;
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
     * @return \Nzolt\NetSuite\CustomerSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
