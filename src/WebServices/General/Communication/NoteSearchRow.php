<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\General\Communication;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\IssueSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;

/**
 * NoteSearchRow
 */
class NoteSearchRow extends SearchRow {

    /**
     * @access public
     * @var NoteSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $authorJoin;

    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $campaignJoin;

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $caseJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $employeeJoin;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $entityJoin;

    /**
     * @access public
     * @var CalendarEventSearchRowBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var IssueSearchRowBasic
     */
    protected $issueJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

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
     * @var PartnerSearchRowBasic
     */
    protected $partnerJoin;

    /**
     * @access public
     * @var SolutionSearchRowBasic
     */
    protected $solutionJoin;

    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    protected $taskJoin;

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
     * @var VendorSearchRowBasic
     */
    protected $vendorJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "NoteSearchRowBasic",
    	"authorJoin" => "EmployeeSearchRowBasic",
    	"callJoin" => "PhoneCallSearchRowBasic",
    	"campaignJoin" => "CampaignSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"contactJoin" => "ContactSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"entityJoin" => "EntitySearchRowBasic",
    	"eventJoin" => "CalendarEventSearchRowBasic",
    	"issueJoin" => "IssueSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"opportunityJoin" => "OpportunitySearchRowBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
    	"partnerJoin" => "PartnerSearchRowBasic",
    	"solutionJoin" => "SolutionSearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param NoteSearchRowBasic $basic
     * @return NoteSearchRow
     */
    public function setBasic(NoteSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return NoteSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set authorJoin
     *
     * @param EmployeeSearchRowBasic $authorJoin
     * @return NoteSearchRow
     */
    public function setAuthorJoin(EmployeeSearchRowBasic $authorJoin) {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * Get authorJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getAuthorJoin() {
        return $this->authorJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchRowBasic $callJoin
     * @return NoteSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin) {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * Get callJoin
     *
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin() {
        return $this->callJoin;
    }


    /**
     * Set campaignJoin
     *
     * @param CampaignSearchRowBasic $campaignJoin
     * @return NoteSearchRow
     */
    public function setCampaignJoin(CampaignSearchRowBasic $campaignJoin) {
        $this->campaignJoin = $campaignJoin;
        return $this;
    }

    /**
     * Get campaignJoin
     *
     * @return CampaignSearchRowBasic
     */
    public function getCampaignJoin() {
        return $this->campaignJoin;
    }


    /**
     * Set caseJoin
     *
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return NoteSearchRow
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
     * Set contactJoin
     *
     * @param ContactSearchRowBasic $contactJoin
     * @return NoteSearchRow
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
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return NoteSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin) {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * Get customerJoin
     *
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin() {
        return $this->customerJoin;
    }


    /**
     * Set employeeJoin
     *
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return NoteSearchRow
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
     * Set entityJoin
     *
     * @param EntitySearchRowBasic $entityJoin
     * @return NoteSearchRow
     */
    public function setEntityJoin(EntitySearchRowBasic $entityJoin) {
        $this->entityJoin = $entityJoin;
        return $this;
    }

    /**
     * Get entityJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getEntityJoin() {
        return $this->entityJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return NoteSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin) {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * Get eventJoin
     *
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin() {
        return $this->eventJoin;
    }


    /**
     * Set issueJoin
     *
     * @param IssueSearchRowBasic $issueJoin
     * @return NoteSearchRow
     */
    public function setIssueJoin(IssueSearchRowBasic $issueJoin) {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * Get issueJoin
     *
     * @return IssueSearchRowBasic
     */
    public function getIssueJoin() {
        return $this->issueJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return NoteSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return NoteSearchRow
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
     * @return NoteSearchRow
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
     * Set partnerJoin
     *
     * @param PartnerSearchRowBasic $partnerJoin
     * @return NoteSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin) {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * Get partnerJoin
     *
     * @return PartnerSearchRowBasic
     */
    public function getPartnerJoin() {
        return $this->partnerJoin;
    }


    /**
     * Set solutionJoin
     *
     * @param SolutionSearchRowBasic $solutionJoin
     * @return NoteSearchRow
     */
    public function setSolutionJoin(SolutionSearchRowBasic $solutionJoin) {
        $this->solutionJoin = $solutionJoin;
        return $this;
    }

    /**
     * Get solutionJoin
     *
     * @return SolutionSearchRowBasic
     */
    public function getSolutionJoin() {
        return $this->solutionJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchRowBasic $taskJoin
     * @return NoteSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin) {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * Get taskJoin
     *
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin() {
        return $this->taskJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return NoteSearchRow
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
     * @return NoteSearchRow
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
     * Set vendorJoin
     *
     * @param VendorSearchRowBasic $vendorJoin
     * @return NoteSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin) {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * Get vendorJoin
     *
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin() {
        return $this->vendorJoin;
    }

}