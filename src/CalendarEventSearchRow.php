<?php

namespace Nzolt\NetSuite;

class CalendarEventSearchRow extends SearchRow
{

    /**
     * @var CalendarEventSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchRowBasic $attendeeJoin
     */
    protected $attendeeJoin = null;

    /**
     * @var ContactSearchRowBasic $attendeeContactJoin
     */
    protected $attendeeContactJoin = null;

    /**
     * @var CustomerSearchRowBasic $attendeeCustomerJoin
     */
    protected $attendeeCustomerJoin = null;

    /**
     * @var SupportCaseSearchRowBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var OpportunitySearchRowBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var OriginatingLeadSearchRowBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

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
     * @return CalendarEventSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CalendarEventSearchRowBasic $basic
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getAttendeeJoin()
    {
      return $this->attendeeJoin;
    }

    /**
     * @param EntitySearchRowBasic $attendeeJoin
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setAttendeeJoin($attendeeJoin)
    {
      $this->attendeeJoin = $attendeeJoin;
      return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getAttendeeContactJoin()
    {
      return $this->attendeeContactJoin;
    }

    /**
     * @param ContactSearchRowBasic $attendeeContactJoin
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setAttendeeContactJoin($attendeeContactJoin)
    {
      $this->attendeeContactJoin = $attendeeContactJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getAttendeeCustomerJoin()
    {
      return $this->attendeeCustomerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $attendeeCustomerJoin
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setAttendeeCustomerJoin($attendeeCustomerJoin)
    {
      $this->attendeeCustomerJoin = $attendeeCustomerJoin;
      return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
      return $this;
    }

    /**
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin()
    {
      return $this->originatingLeadJoin;
    }

    /**
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
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
     * @return \Nzolt\NetSuite\CalendarEventSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
