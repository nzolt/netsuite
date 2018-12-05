<?php

namespace Nzolt\NetSuite;

class VendorSearch extends SearchRecord
{

    /**
     * @var VendorSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchBasic $accountJoin
     */
    protected $accountJoin = null;

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
     * @var AccountSearchBasic $expAccountJoin
     */
    protected $expAccountJoin = null;

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
     * @var MseSubsidiarySearchBasic $mseSubsidiaryJoin
     */
    protected $mseSubsidiaryJoin = null;

    /**
     * @var EmployeeSearchBasic $timeApproverJoin
     */
    protected $timeApproverJoin = null;

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
     * @return VendorSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param VendorSearchBasic $basic
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAccountJoin()
    {
      return $this->accountJoin;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getExpAccountJoin()
    {
      return $this->expAccountJoin;
    }

    /**
     * @param AccountSearchBasic $expAccountJoin
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setExpAccountJoin($expAccountJoin)
    {
      $this->expAccountJoin = $expAccountJoin;
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setMseSubsidiaryJoin($mseSubsidiaryJoin)
    {
      $this->mseSubsidiaryJoin = $mseSubsidiaryJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getTimeApproverJoin()
    {
      return $this->timeApproverJoin;
    }

    /**
     * @param EmployeeSearchBasic $timeApproverJoin
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setTimeApproverJoin($timeApproverJoin)
    {
      $this->timeApproverJoin = $timeApproverJoin;
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
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
     * @return \Nzolt\NetSuite\VendorSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
