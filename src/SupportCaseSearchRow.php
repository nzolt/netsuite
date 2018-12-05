<?php

namespace Nzolt\NetSuite;

class SupportCaseSearchRow extends SearchRow
{

    /**
     * @var SupportCaseSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchRowBasic $companyJoin
     */
    protected $companyJoin = null;

    /**
     * @var ContactSearchRowBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var IssueSearchRowBasic $issueJoin
     */
    protected $issueJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesJoin
     */
    protected $messagesJoin = null;

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
     * @return SupportCaseSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param SupportCaseSearchRowBasic $basic
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getCompanyJoin()
    {
      return $this->companyJoin;
    }

    /**
     * @param EntitySearchRowBasic $companyJoin
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setCompanyJoin($companyJoin)
    {
      $this->companyJoin = $companyJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return IssueSearchRowBasic
     */
    public function getIssueJoin()
    {
      return $this->issueJoin;
    }

    /**
     * @param IssueSearchRowBasic $issueJoin
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setIssueJoin($issueJoin)
    {
      $this->issueJoin = $issueJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
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
     * @return \Nzolt\NetSuite\SupportCaseSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
