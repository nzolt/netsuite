<?php

namespace Nzolt\NetSuite;

class VendorSearchRow extends SearchRow
{

    /**
     * @var VendorSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchRowBasic $accountJoin
     */
    protected $accountJoin = null;

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
     * @var AccountSearchRowBasic $expAccountJoin
     */
    protected $expAccountJoin = null;

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
     * @var MseSubsidiarySearchRowBasic $mseSubsidiaryJoin
     */
    protected $mseSubsidiaryJoin = null;

    /**
     * @var EmployeeSearchRowBasic $timeApproverJoin
     */
    protected $timeApproverJoin = null;

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
     * @return VendorSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param VendorSearchRowBasic $basic
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin()
    {
      return $this->accountJoin;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setContactPrimaryJoin($contactPrimaryJoin)
    {
      $this->contactPrimaryJoin = $contactPrimaryJoin;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getExpAccountJoin()
    {
      return $this->expAccountJoin;
    }

    /**
     * @param AccountSearchRowBasic $expAccountJoin
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setExpAccountJoin($expAccountJoin)
    {
      $this->expAccountJoin = $expAccountJoin;
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setMseSubsidiaryJoin($mseSubsidiaryJoin)
    {
      $this->mseSubsidiaryJoin = $mseSubsidiaryJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getTimeApproverJoin()
    {
      return $this->timeApproverJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $timeApproverJoin
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setTimeApproverJoin($timeApproverJoin)
    {
      $this->timeApproverJoin = $timeApproverJoin;
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
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
     * @return \Nzolt\NetSuite\VendorSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
