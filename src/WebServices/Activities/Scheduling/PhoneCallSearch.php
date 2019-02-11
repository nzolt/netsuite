<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * PhoneCallSearch
 */
class PhoneCallSearch extends SearchRecord {

    /**
     * @access public
     * @var PhoneCallSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $companyCustomerJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $employeeJoin;

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
     * @var EntitySearchBasic
     */
    protected $participantJoin;

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
    	"basic" => "PhoneCallSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"companyCustomerJoin" => "CustomerSearchBasic",
    	"contactJoin" => "ContactSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"participantJoin" => "EntitySearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param PhoneCallSearchBasic $basic
     * @return PhoneCallSearch
     */
    public function setBasic(PhoneCallSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PhoneCallSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return PhoneCallSearch
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
     * Set companyCustomerJoin
     *
     * @param CustomerSearchBasic $companyCustomerJoin
     * @return PhoneCallSearch
     */
    public function setCompanyCustomerJoin(CustomerSearchBasic $companyCustomerJoin) {
        $this->companyCustomerJoin = $companyCustomerJoin;
        return $this;
    }

    /**
     * Get companyCustomerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCompanyCustomerJoin() {
        return $this->companyCustomerJoin;
    }


    /**
     * Set contactJoin
     *
     * @param ContactSearchBasic $contactJoin
     * @return PhoneCallSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin) {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * Get contactJoin
     *
     * @return ContactSearchBasic
     */
    public function getContactJoin() {
        return $this->contactJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchBasic $employeeJoin
     * @return PhoneCallSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin) {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * Get employeeJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin() {
        return $this->employeeJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return PhoneCallSearch
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
     * @return PhoneCallSearch
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
     * @return PhoneCallSearch
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
     * Set participantJoin
     *
     * @param EntitySearchBasic $participantJoin
     * @return PhoneCallSearch
     */
    public function setParticipantJoin(EntitySearchBasic $participantJoin) {
        $this->participantJoin = $participantJoin;
        return $this;
    }

    /**
     * Get participantJoin
     *
     * @return EntitySearchBasic
     */
    public function getParticipantJoin() {
        return $this->participantJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return PhoneCallSearch
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
     * @return PhoneCallSearch
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
     * @return PhoneCallSearch
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