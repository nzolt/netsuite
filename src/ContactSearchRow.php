<?php

namespace Nzolt\NetSuite;

class ContactSearchRow extends SearchRow
{

    /**
     * @var ContactSearchRowBasic $basic
     */
    protected $basic = null;

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
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerPrimaryJoin
     */
    protected $customerPrimaryJoin = null;

    /**
     * @var CalendarEventSearchRowBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var JobSearchRowBasic $jobPrimaryJoin
     */
    protected $jobPrimaryJoin = null;

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
     * @var OpportunitySearchRowBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var CustomerSearchRowBasic $parentCustomerJoin
     */
    protected $parentCustomerJoin = null;

    /**
     * @var JobSearchRowBasic $parentJobJoin
     */
    protected $parentJobJoin = null;

    /**
     * @var PartnerSearchRowBasic $parentPartnerJoin
     */
    protected $parentPartnerJoin = null;

    /**
     * @var VendorSearchRowBasic $parentVendorJoin
     */
    protected $parentVendorJoin = null;

    /**
     * @var PartnerSearchRowBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var PartnerSearchRowBasic $partnerPrimaryJoin
     */
    protected $partnerPrimaryJoin = null;

    /**
     * @var ItemSearchRowBasic $purchasedItemJoin
     */
    protected $purchasedItemJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

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
     * @var VendorSearchRowBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var VendorSearchRowBasic $vendorPrimaryJoin
     */
    protected $vendorPrimaryJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ContactSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerPrimaryJoin()
    {
      return $this->customerPrimaryJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setCustomerPrimaryJoin($customerPrimaryJoin)
    {
      $this->customerPrimaryJoin = $customerPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobPrimaryJoin()
    {
      return $this->jobPrimaryJoin;
    }

    /**
     * @param JobSearchRowBasic $jobPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setJobPrimaryJoin($jobPrimaryJoin)
    {
      $this->jobPrimaryJoin = $jobPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setMessagesToJoin($messagesToJoin)
    {
      $this->messagesToJoin = $messagesToJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setParentCustomerJoin($parentCustomerJoin)
    {
      $this->parentCustomerJoin = $parentCustomerJoin;
      return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getParentJobJoin()
    {
      return $this->parentJobJoin;
    }

    /**
     * @param JobSearchRowBasic $parentJobJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setParentJobJoin($parentJobJoin)
    {
      $this->parentJobJoin = $parentJobJoin;
      return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getParentPartnerJoin()
    {
      return $this->parentPartnerJoin;
    }

    /**
     * @param PartnerSearchRowBasic $parentPartnerJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setParentPartnerJoin($parentPartnerJoin)
    {
      $this->parentPartnerJoin = $parentPartnerJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getParentVendorJoin()
    {
      return $this->parentVendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $parentVendorJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setParentVendorJoin($parentVendorJoin)
    {
      $this->parentVendorJoin = $parentVendorJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getPartnerPrimaryJoin()
    {
      return $this->partnerPrimaryJoin;
    }

    /**
     * @param PartnerSearchRowBasic $partnerPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setPartnerPrimaryJoin($partnerPrimaryJoin)
    {
      $this->partnerPrimaryJoin = $partnerPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setPurchasedItemJoin($purchasedItemJoin)
    {
      $this->purchasedItemJoin = $purchasedItemJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorPrimaryJoin()
    {
      return $this->vendorPrimaryJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorPrimaryJoin
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setVendorPrimaryJoin($vendorPrimaryJoin)
    {
      $this->vendorPrimaryJoin = $vendorPrimaryJoin;
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
     * @return \Nzolt\NetSuite\ContactSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
