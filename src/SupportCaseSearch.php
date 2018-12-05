<?php

namespace Nzolt\NetSuite;

class SupportCaseSearch extends SearchRecord
{

    /**
     * @var SupportCaseSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchBasic $companyJoin
     */
    protected $companyJoin = null;

    /**
     * @var ContactSearchBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var IssueSearchBasic $issueJoin
     */
    protected $issueJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var MessageSearchBasic $messagesJoin
     */
    protected $messagesJoin = null;

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
     * @return SupportCaseSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SupportCaseSearchBasic $basic
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getCompanyJoin()
    {
      return $this->companyJoin;
    }

    /**
     * @param EntitySearchBasic $companyJoin
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setCompanyJoin($companyJoin)
    {
      $this->companyJoin = $companyJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return IssueSearchBasic
     */
    public function getIssueJoin()
    {
      return $this->issueJoin;
    }

    /**
     * @param IssueSearchBasic $issueJoin
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setIssueJoin($issueJoin)
    {
      $this->issueJoin = $issueJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
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
     * @return \Nzolt\NetSuite\SupportCaseSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
