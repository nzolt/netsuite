<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * PhoneCallSearchRow
 */
class PhoneCallSearchRow extends SearchRow {

    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $companyCustomerJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var OpportunitySearchRowBasic
     */
    protected $opportunityJoin;

    /**
     * @access public
     * @var OriginatingLeadSearchRowBasic
     */
    protected $originatingLeadJoin;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $participantJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $transactionJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "PhoneCallSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"companyCustomerJoin" => "CustomerSearchRowBasic",
    	"contactJoin" => "ContactSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"opportunityJoin" => "OpportunitySearchRowBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
    	"participantJoin" => "EntitySearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param PhoneCallSearchRowBasic $basic
     * @return PhoneCallSearchRow
     */
    public function setBasic(PhoneCallSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PhoneCallSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return PhoneCallSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin) {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * Get caseJoin
     *
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin() {
        return $this->caseJoin;
    }


    /**
     * Set companyCustomerJoin
     *
     * @param CustomerSearchRowBasic $companyCustomerJoin
     * @return PhoneCallSearchRow
     */
    public function setCompanyCustomerJoin(CustomerSearchRowBasic $companyCustomerJoin) {
        $this->companyCustomerJoin = $companyCustomerJoin;
        return $this;
    }

    /**
     * Get companyCustomerJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getCompanyCustomerJoin() {
        return $this->companyCustomerJoin;
    }


    /**
     * Set contactJoin
     *
     * @param ContactSearchRowBasic $contactJoin
     * @return PhoneCallSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin) {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * Get contactJoin
     *
     * @return ContactSearchRowBasic
     */
    public function getContactJoin() {
        return $this->contactJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return PhoneCallSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return PhoneCallSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchRowBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return PhoneCallSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin) {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * Get opportunityJoin
     *
     * @return OpportunitySearchRowBasic
     */
    public function getOpportunityJoin() {
        return $this->opportunityJoin;
    }


    /**
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return PhoneCallSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin) {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * Get originatingLeadJoin
     *
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin() {
        return $this->originatingLeadJoin;
    }


    /**
     * Set participantJoin
     *
     * @param EntitySearchRowBasic $participantJoin
     * @return PhoneCallSearchRow
     */
    public function setParticipantJoin(EntitySearchRowBasic $participantJoin) {
        $this->participantJoin = $participantJoin;
        return $this;
    }

    /**
     * Get participantJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getParticipantJoin() {
        return $this->participantJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return PhoneCallSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin) {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * Get transactionJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin() {
        return $this->transactionJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return PhoneCallSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }


    /**
     * Set userNotesJoin
     *
     * @param NoteSearchRowBasic $userNotesJoin
     * @return PhoneCallSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }

}