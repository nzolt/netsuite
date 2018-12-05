<?php

namespace Nzolt\NetSuite;

class PhoneCallSearch extends SearchRecord
{

    /**
     * @var PhoneCallSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var CustomerSearchBasic $companyCustomerJoin
     */
    protected $companyCustomerJoin = null;

    /**
     * @var ContactSearchBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var OpportunitySearchBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var OriginatingLeadSearchBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var EntitySearchBasic $participantJoin
     */
    protected $participantJoin = null;

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
     * @return PhoneCallSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param PhoneCallSearchBasic $basic
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCompanyCustomerJoin()
    {
      return $this->companyCustomerJoin;
    }

    /**
     * @param CustomerSearchBasic $companyCustomerJoin
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setCompanyCustomerJoin($companyCustomerJoin)
    {
      $this->companyCustomerJoin = $companyCustomerJoin;
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
      return $this;
    }

    /**
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin()
    {
      return $this->originatingLeadJoin;
    }

    /**
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getParticipantJoin()
    {
      return $this->participantJoin;
    }

    /**
     * @param EntitySearchBasic $participantJoin
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setParticipantJoin($participantJoin)
    {
      $this->participantJoin = $participantJoin;
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
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
     * @return \Nzolt\NetSuite\PhoneCallSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
