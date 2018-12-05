<?php

namespace Nzolt\NetSuite;

class PartnerSearch extends SearchRecord
{

    /**
     * @var PartnerSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CampaignSearchBasic $campaignResponseJoin
     */
    protected $campaignResponseJoin = null;

    /**
     * @var ContactSearchBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var ContactSearchBasic $contactPrimaryJoin
     */
    protected $contactPrimaryJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

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
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PartnerSearchBasic $basic
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setCampaignResponseJoin($campaignResponseJoin)
    {
      $this->campaignResponseJoin = $campaignResponseJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
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
     * @return \Nzolt\NetSuite\PartnerSearch
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
     * @return \Nzolt\NetSuite\PartnerSearch
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
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
     * @return \Nzolt\NetSuite\PartnerSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
