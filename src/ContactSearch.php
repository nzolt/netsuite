<?php

namespace Nzolt\NetSuite;

class ContactSearch extends SearchRecord
{

    /**
     * @var ContactSearchBasic $basic
     */
    protected $basic = null;

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
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var CustomerSearchBasic $customerPrimaryJoin
     */
    protected $customerPrimaryJoin = null;

    /**
     * @var CalendarEventSearchBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var JobSearchBasic $jobPrimaryJoin
     */
    protected $jobPrimaryJoin = null;

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
     * @var OpportunitySearchBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var CustomerSearchBasic $parentCustomerJoin
     */
    protected $parentCustomerJoin = null;

    /**
     * @var JobSearchBasic $parentJobJoin
     */
    protected $parentJobJoin = null;

    /**
     * @var PartnerSearchBasic $parentPartnerJoin
     */
    protected $parentPartnerJoin = null;

    /**
     * @var VendorSearchBasic $parentVendorJoin
     */
    protected $parentVendorJoin = null;

    /**
     * @var PartnerSearchBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var PartnerSearchBasic $partnerPrimaryJoin
     */
    protected $partnerPrimaryJoin = null;

    /**
     * @var ItemSearchBasic $purchasedItemJoin
     */
    protected $purchasedItemJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

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
     * @var VendorSearchBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var VendorSearchBasic $vendorPrimaryJoin
     */
    protected $vendorPrimaryJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ContactSearchBasic $basic
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerPrimaryJoin()
    {
      return $this->customerPrimaryJoin;
    }

    /**
     * @param CustomerSearchBasic $customerPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setCustomerPrimaryJoin($customerPrimaryJoin)
    {
      $this->customerPrimaryJoin = $customerPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobPrimaryJoin()
    {
      return $this->jobPrimaryJoin;
    }

    /**
     * @param JobSearchBasic $jobPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setJobPrimaryJoin($jobPrimaryJoin)
    {
      $this->jobPrimaryJoin = $jobPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setMessagesToJoin($messagesToJoin)
    {
      $this->messagesToJoin = $messagesToJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setParentCustomerJoin($parentCustomerJoin)
    {
      $this->parentCustomerJoin = $parentCustomerJoin;
      return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getParentJobJoin()
    {
      return $this->parentJobJoin;
    }

    /**
     * @param JobSearchBasic $parentJobJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setParentJobJoin($parentJobJoin)
    {
      $this->parentJobJoin = $parentJobJoin;
      return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getParentPartnerJoin()
    {
      return $this->parentPartnerJoin;
    }

    /**
     * @param PartnerSearchBasic $parentPartnerJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setParentPartnerJoin($parentPartnerJoin)
    {
      $this->parentPartnerJoin = $parentPartnerJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getParentVendorJoin()
    {
      return $this->parentVendorJoin;
    }

    /**
     * @param VendorSearchBasic $parentVendorJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setParentVendorJoin($parentVendorJoin)
    {
      $this->parentVendorJoin = $parentVendorJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getPartnerPrimaryJoin()
    {
      return $this->partnerPrimaryJoin;
    }

    /**
     * @param PartnerSearchBasic $partnerPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setPartnerPrimaryJoin($partnerPrimaryJoin)
    {
      $this->partnerPrimaryJoin = $partnerPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setPurchasedItemJoin($purchasedItemJoin)
    {
      $this->purchasedItemJoin = $purchasedItemJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorPrimaryJoin()
    {
      return $this->vendorPrimaryJoin;
    }

    /**
     * @param VendorSearchBasic $vendorPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setVendorPrimaryJoin($vendorPrimaryJoin)
    {
      $this->vendorPrimaryJoin = $vendorPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
