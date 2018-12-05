<?php

namespace Nzolt\NetSuite;

class CalendarEventSearch extends SearchRecord
{

    /**
     * @var CalendarEventSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchBasic $attendeeJoin
     */
    protected $attendeeJoin = null;

    /**
     * @var ContactSearchBasic $attendeeContactJoin
     */
    protected $attendeeContactJoin = null;

    /**
     * @var CustomerSearchBasic $attendeeCustomerJoin
     */
    protected $attendeeCustomerJoin = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

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
     * @return CalendarEventSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CalendarEventSearchBasic $basic
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getAttendeeJoin()
    {
      return $this->attendeeJoin;
    }

    /**
     * @param EntitySearchBasic $attendeeJoin
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setAttendeeJoin($attendeeJoin)
    {
      $this->attendeeJoin = $attendeeJoin;
      return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getAttendeeContactJoin()
    {
      return $this->attendeeContactJoin;
    }

    /**
     * @param ContactSearchBasic $attendeeContactJoin
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setAttendeeContactJoin($attendeeContactJoin)
    {
      $this->attendeeContactJoin = $attendeeContactJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getAttendeeCustomerJoin()
    {
      return $this->attendeeCustomerJoin;
    }

    /**
     * @param CustomerSearchBasic $attendeeCustomerJoin
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setAttendeeCustomerJoin($attendeeCustomerJoin)
    {
      $this->attendeeCustomerJoin = $attendeeCustomerJoin;
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
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
     * @return \Nzolt\NetSuite\CalendarEventSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
