<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * CalendarEventSearch
 */
class CalendarEventSearch extends SearchRecord {

    /**
     * @access public
     * @var CalendarEventSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $attendeeJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $attendeeContactJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $attendeeCustomerJoin;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var OpportunitySearchBasic
     */
    protected $opportunityJoin;

    /**
     * @access public
     * @var OriginatingLeadSearchBasic
     */
    protected $originatingLeadJoin;

    /**
     * @access public
     * @var TimeBillSearchBasic
     */
    protected $timeJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "CalendarEventSearchBasic",
    	"attendeeJoin" => "EntitySearchBasic",
    	"attendeeContactJoin" => "ContactSearchBasic",
    	"attendeeCustomerJoin" => "CustomerSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"timeJoin" => "TimeBillSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param CalendarEventSearchBasic $basic
     * @return CalendarEventSearch
     */
    public function setBasic(CalendarEventSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CalendarEventSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set attendeeJoin
     *
     * @param EntitySearchBasic $attendeeJoin
     * @return CalendarEventSearch
     */
    public function setAttendeeJoin(EntitySearchBasic $attendeeJoin) {
        $this->attendeeJoin = $attendeeJoin;
        return $this;
    }

    /**
     * Get attendeeJoin
     *
     * @return EntitySearchBasic
     */
    public function getAttendeeJoin() {
        return $this->attendeeJoin;
    }


    /**
     * Set attendeeContactJoin
     *
     * @param ContactSearchBasic $attendeeContactJoin
     * @return CalendarEventSearch
     */
    public function setAttendeeContactJoin(ContactSearchBasic $attendeeContactJoin) {
        $this->attendeeContactJoin = $attendeeContactJoin;
        return $this;
    }

    /**
     * Get attendeeContactJoin
     *
     * @return ContactSearchBasic
     */
    public function getAttendeeContactJoin() {
        return $this->attendeeContactJoin;
    }


    /**
     * Set attendeeCustomerJoin
     *
     * @param CustomerSearchBasic $attendeeCustomerJoin
     * @return CalendarEventSearch
     */
    public function setAttendeeCustomerJoin(CustomerSearchBasic $attendeeCustomerJoin) {
        $this->attendeeCustomerJoin = $attendeeCustomerJoin;
        return $this;
    }

    /**
     * Get attendeeCustomerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getAttendeeCustomerJoin() {
        return $this->attendeeCustomerJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return CalendarEventSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return CalendarEventSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchBasic $opportunityJoin
     * @return CalendarEventSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin) {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * Get opportunityJoin
     *
     * @return OpportunitySearchBasic
     */
    public function getOpportunityJoin() {
        return $this->opportunityJoin;
    }


    /**
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return CalendarEventSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin) {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * Get originatingLeadJoin
     *
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin() {
        return $this->originatingLeadJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchBasic $timeJoin
     * @return CalendarEventSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return CalendarEventSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return CalendarEventSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchBasic $userNotesJoin
     * @return CalendarEventSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }

}