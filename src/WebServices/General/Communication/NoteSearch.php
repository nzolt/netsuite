<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\General\Communication;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\IssueSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;

/**
 * NoteSearch
 */
class NoteSearch extends SearchRecord {

    /**
     * @access public
     * @var NoteSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $authorJoin;

    /**
     * @access public
     * @var PhoneCallSearchBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $campaignJoin;

    /**
     * @access public
     * @var SupportCaseSearchBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $entityJoin;

    /**
     * @access public
     * @var CalendarEventSearchBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var IssueSearchBasic
     */
    protected $issueJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

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
     * @var PartnerSearchBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var SolutionSearchBasic
     */
    protected $solutionJoin;

    /**
     * @access public
     * @var TaskSearchBasic
     */
    protected $taskJoin;

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
     * @var VendorSearchBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "NoteSearchBasic",
    	"authorJoin" => "EmployeeSearchBasic",
    	"callJoin" => "PhoneCallSearchBasic",
    	"campaignJoin" => "CampaignSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"contactJoin" => "ContactSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"entityJoin" => "EntitySearchBasic",
    	"eventJoin" => "CalendarEventSearchBasic",
    	"issueJoin" => "IssueSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"partnerJoin" => "PartnerSearchBasic",
    	"solutionJoin" => "SolutionSearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param NoteSearchBasic $basic
     * @return NoteSearch
     */
    public function setBasic(NoteSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return NoteSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set authorJoin
     *
     * @param EmployeeSearchBasic $authorJoin
     * @return NoteSearch
     */
    public function setAuthorJoin(EmployeeSearchBasic $authorJoin) {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * Get authorJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getAuthorJoin() {
        return $this->authorJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchBasic $callJoin
     * @return NoteSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin) {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * Get callJoin
     *
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin() {
        return $this->callJoin;
    }


    /**
     * Set campaignJoin
     *
     * @param CampaignSearchBasic $campaignJoin
     * @return NoteSearch
     */
    public function setCampaignJoin(CampaignSearchBasic $campaignJoin) {
        $this->campaignJoin = $campaignJoin;
        return $this;
    }

    /**
     * Get campaignJoin
     *
     * @return CampaignSearchBasic
     */
    public function getCampaignJoin() {
        return $this->campaignJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchBasic $caseJoin
     * @return NoteSearch
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
     * Set contactJoin
     *
     * @param ContactSearchBasic $contactJoin
     * @return NoteSearch
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
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return NoteSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchBasic $employeeJoin
     * @return NoteSearch
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
     * Set entityJoin
     *
     * @param EntitySearchBasic $entityJoin
     * @return NoteSearch
     */
    public function setEntityJoin(EntitySearchBasic $entityJoin) {
        $this->entityJoin = $entityJoin;
        return $this;
    }

    /**
     * Get entityJoin
     *
     * @return EntitySearchBasic
     */
    public function getEntityJoin() {
        return $this->entityJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchBasic $eventJoin
     * @return NoteSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin) {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * Get eventJoin
     *
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin() {
        return $this->eventJoin;
    }


    /**
     * Set issueJoin
     *
     * @param IssueSearchBasic $issueJoin
     * @return NoteSearch
     */
    public function setIssueJoin(IssueSearchBasic $issueJoin) {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * Get issueJoin
     *
     * @return IssueSearchBasic
     */
    public function getIssueJoin() {
        return $this->issueJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return NoteSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchBasic $opportunityJoin
     * @return NoteSearch
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
     * @return NoteSearch
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
     * Set partnerJoin
     *
     * @param PartnerSearchBasic $partnerJoin
     * @return NoteSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin) {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * Get partnerJoin
     *
     * @return PartnerSearchBasic
     */
    public function getPartnerJoin() {
        return $this->partnerJoin;
    }


    /**
     * Set solutionJoin
     *
     * @param SolutionSearchBasic $solutionJoin
     * @return NoteSearch
     */
    public function setSolutionJoin(SolutionSearchBasic $solutionJoin) {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * Get solutionJoin
     *
     * @return SolutionSearchBasic
     */
    public function getSolutionJoin() {
        return $this->solutionJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchBasic $taskJoin
     * @return NoteSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin) {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * Get taskJoin
     *
     * @return TaskSearchBasic
     */
    public function getTaskJoin() {
        return $this->taskJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return NoteSearch
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
     * @return NoteSearch
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
     * Set vendorJoin
     *
     * @param VendorSearchBasic $vendorJoin
     * @return NoteSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }

}