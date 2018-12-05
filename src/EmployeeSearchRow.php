<?php

namespace Nzolt\NetSuite;

class EmployeeSearchRow extends SearchRow
{

    /**
     * @var EmployeeSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CampaignSearchRowBasic $campaignResponseJoin
     */
    protected $campaignResponseJoin = null;

    /**
     * @var ChargeSearchRowBasic $chargeJoin
     */
    protected $chargeJoin = null;

    /**
     * @var DepartmentSearchRowBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var HcmJobSearchRowBasic $hcmJobJoin
     */
    protected $hcmJobJoin = null;

    /**
     * @var LocationSearchRowBasic $locationJoin
     */
    protected $locationJoin = null;

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
     * @var ResourceAllocationSearchRowBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var SubsidiarySearchRowBasic $subsidiaryJoin
     */
    protected $subsidiaryJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeJoin
     */
    protected $timeJoin = null;

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
     * @return EmployeeSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param EmployeeSearchRowBasic $basic
     * @return \Nzolt\NetSuite\EmployeeSearchRow
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setCampaignResponseJoin($campaignResponseJoin)
    {
      $this->campaignResponseJoin = $campaignResponseJoin;
      return $this;
    }

    /**
     * @return ChargeSearchRowBasic
     */
    public function getChargeJoin()
    {
      return $this->chargeJoin;
    }

    /**
     * @param ChargeSearchRowBasic $chargeJoin
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setChargeJoin($chargeJoin)
    {
      $this->chargeJoin = $chargeJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return HcmJobSearchRowBasic
     */
    public function getHcmJobJoin()
    {
      return $this->hcmJobJoin;
    }

    /**
     * @param HcmJobSearchRowBasic $hcmJobJoin
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setHcmJobJoin($hcmJobJoin)
    {
      $this->hcmJobJoin = $hcmJobJoin;
      return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setMessagesToJoin($messagesToJoin)
    {
      $this->messagesToJoin = $messagesToJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin()
    {
      return $this->subsidiaryJoin;
    }

    /**
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setSubsidiaryJoin($subsidiaryJoin)
    {
      $this->subsidiaryJoin = $subsidiaryJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
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
     * @return \Nzolt\NetSuite\EmployeeSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
