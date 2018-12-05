<?php

namespace Nzolt\NetSuite;

class PartnerSearchRow extends SearchRow
{

    /**
     * @var PartnerSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CampaignSearchRowBasic $campaignResponseJoin
     */
    protected $campaignResponseJoin = null;

    /**
     * @var ContactSearchRowBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var ContactSearchRowBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

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
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchRowBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PartnerSearchRowBasic $basic
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setCampaignResponseJoin($campaignResponseJoin)
    {
      $this->campaignResponseJoin = $campaignResponseJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
