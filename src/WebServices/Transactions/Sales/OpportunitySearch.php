<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * OpportunitySearch
 */
class OpportunitySearch extends SearchRecord {

    /**
     * @access public
     * @var OpportunitySearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $actualJoin;

    /**
     * @access public
     * @var PhoneCallSearchBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $decisionMakerJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $estimateJoin;

    /**
     * @access public
     * @var CalendarEventSearchBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var ItemSearchBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $leadSourceJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var TransactionSearchBasic
     */
    protected $orderJoin;

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
     * @var EmployeeSearchBasic
     */
    protected $salesRepJoin;

    /**
     * @access public
     * @var TaskSearchBasic
     */
    protected $taskJoin;

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
    	"basic" => "OpportunitySearchBasic",
    	"actualJoin" => "TransactionSearchBasic",
    	"callJoin" => "PhoneCallSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"decisionMakerJoin" => "ContactSearchBasic",
    	"estimateJoin" => "TransactionSearchBasic",
    	"eventJoin" => "CalendarEventSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"itemJoin" => "ItemSearchBasic",
    	"leadSourceJoin" => "CampaignSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"orderJoin" => "TransactionSearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"partnerJoin" => "PartnerSearchBasic",
    	"salesRepJoin" => "EmployeeSearchBasic",
    	"taskJoin" => "TaskSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param OpportunitySearchBasic $basic
     * @return OpportunitySearch
     */
    public function setBasic(OpportunitySearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return OpportunitySearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set actualJoin
     *
     * @param TransactionSearchBasic $actualJoin
     * @return OpportunitySearch
     */
    public function setActualJoin(TransactionSearchBasic $actualJoin) {
        $this->actualJoin = $actualJoin;
        return $this;
    }

    /**
     * Get actualJoin
     *
     * @return TransactionSearchBasic
     */
    public function getActualJoin() {
        return $this->actualJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchBasic $callJoin
     * @return OpportunitySearch
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
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return OpportunitySearch
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
     * Set decisionMakerJoin
     *
     * @param ContactSearchBasic $decisionMakerJoin
     * @return OpportunitySearch
     */
    public function setDecisionMakerJoin(ContactSearchBasic $decisionMakerJoin) {
        $this->decisionMakerJoin = $decisionMakerJoin;
        return $this;
    }

    /**
     * Get decisionMakerJoin
     *
     * @return ContactSearchBasic
     */
    public function getDecisionMakerJoin() {
        return $this->decisionMakerJoin;
    }


    /**
     * Set estimateJoin
     *
     * @param TransactionSearchBasic $estimateJoin
     * @return OpportunitySearch
     */
    public function setEstimateJoin(TransactionSearchBasic $estimateJoin) {
        $this->estimateJoin = $estimateJoin;
        return $this;
    }

    /**
     * Get estimateJoin
     *
     * @return TransactionSearchBasic
     */
    public function getEstimateJoin() {
        return $this->estimateJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchBasic $eventJoin
     * @return OpportunitySearch
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
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return OpportunitySearch
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
     * Set itemJoin
     *
     * @param ItemSearchBasic $itemJoin
     * @return OpportunitySearch
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
     * Set leadSourceJoin
     *
     * @param CampaignSearchBasic $leadSourceJoin
     * @return OpportunitySearch
     */
    public function setLeadSourceJoin(CampaignSearchBasic $leadSourceJoin) {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * Get leadSourceJoin
     *
     * @return CampaignSearchBasic
     */
    public function getLeadSourceJoin() {
        return $this->leadSourceJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchBasic $messagesJoin
     * @return OpportunitySearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin) {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * Get messagesJoin
     *
     * @return MessageSearchBasic
     */
    public function getMessagesJoin() {
        return $this->messagesJoin;
    }


    /**
     * Set orderJoin
     *
     * @param TransactionSearchBasic $orderJoin
     * @return OpportunitySearch
     */
    public function setOrderJoin(TransactionSearchBasic $orderJoin) {
        $this->orderJoin = $orderJoin;
        return $this;
    }

    /**
     * Get orderJoin
     *
     * @return TransactionSearchBasic
     */
    public function getOrderJoin() {
        return $this->orderJoin;
    }


    /**
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return OpportunitySearch
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
     * @return OpportunitySearch
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
     * Set salesRepJoin
     *
     * @param EmployeeSearchBasic $salesRepJoin
     * @return OpportunitySearch
     */
    public function setSalesRepJoin(EmployeeSearchBasic $salesRepJoin) {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * Get salesRepJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getSalesRepJoin() {
        return $this->salesRepJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchBasic $taskJoin
     * @return OpportunitySearch
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
     * Set userNotesJoin
     *
     * @param NoteSearchBasic $userNotesJoin
     * @return OpportunitySearch
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