<?php

namespace Nzolt\NetSuite;

class EmployeeSearch extends SearchRecord
{

    /**
     * @var EmployeeSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CampaignSearchBasic $campaignResponseJoin
     */
    protected $campaignResponseJoin = null;

    /**
     * @var ChargeSearchBasic $chargeJoin
     */
    protected $chargeJoin = null;

    /**
     * @var DepartmentSearchBasic $departmentJoin
     */
    protected $departmentJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var HcmJobSearchBasic $hcmJobJoin
     */
    protected $hcmJobJoin = null;

    /**
     * @var LocationSearchBasic $locationJoin
     */
    protected $locationJoin = null;

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
     * @var ResourceAllocationSearchBasic $resourceAllocationJoin
     */
    protected $resourceAllocationJoin = null;

    /**
     * @var SubsidiarySearchBasic $subsidiaryJoin
     */
    protected $subsidiaryJoin = null;

    /**
     * @var TimeBillSearchBasic $timeJoin
     */
    protected $timeJoin = null;

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
     * @return EmployeeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param EmployeeSearchBasic $basic
     * @return \Nzolt\NetSuite\EmployeeSearch
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
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setCampaignResponseJoin($campaignResponseJoin)
    {
      $this->campaignResponseJoin = $campaignResponseJoin;
      return $this;
    }

    /**
     * @return ChargeSearchBasic
     */
    public function getChargeJoin()
    {
      return $this->chargeJoin;
    }

    /**
     * @param ChargeSearchBasic $chargeJoin
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setChargeJoin($chargeJoin)
    {
      $this->chargeJoin = $chargeJoin;
      return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin()
    {
      return $this->departmentJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setDepartmentJoin($departmentJoin)
    {
      $this->departmentJoin = $departmentJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return HcmJobSearchBasic
     */
    public function getHcmJobJoin()
    {
      return $this->hcmJobJoin;
    }

    /**
     * @param HcmJobSearchBasic $hcmJobJoin
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setHcmJobJoin($hcmJobJoin)
    {
      $this->hcmJobJoin = $hcmJobJoin;
      return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin()
    {
      return $this->locationJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setLocationJoin($locationJoin)
    {
      $this->locationJoin = $locationJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearch
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
     * @return \Nzolt\NetSuite\EmployeeSearch
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
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setMessagesToJoin($messagesToJoin)
    {
      $this->messagesToJoin = $messagesToJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setResourceAllocationJoin($resourceAllocationJoin)
    {
      $this->resourceAllocationJoin = $resourceAllocationJoin;
      return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin()
    {
      return $this->subsidiaryJoin;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setSubsidiaryJoin($subsidiaryJoin)
    {
      $this->subsidiaryJoin = $subsidiaryJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
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
     * @return \Nzolt\NetSuite\EmployeeSearch
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
     * @return \Nzolt\NetSuite\EmployeeSearch
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
     * @return \Nzolt\NetSuite\EmployeeSearch
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
     * @return \Nzolt\NetSuite\EmployeeSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
