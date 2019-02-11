<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * OpportunitySearchRow
 */
class OpportunitySearchRow extends SearchRow {

    /**
     * @access public
     * @var OpportunitySearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $actualJoin;

    /**
     * @access public
     * @var PhoneCallSearchRowBasic
     */
    protected $callJoin;

    /**
     * @access public
     * @var CustomerSearchRowBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var ContactSearchRowBasic
     */
    protected $decisionMakerJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $estimateJoin;

    /**
     * @access public
     * @var CalendarEventSearchRowBasic
     */
    protected $eventJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $leadSourceJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var TransactionSearchRowBasic
     */
    protected $orderJoin;

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
     * @var EmployeeSearchRowBasic
     */
    protected $salesRepJoin;

    /**
     * @access public
     * @var TaskSearchRowBasic
     */
    protected $taskJoin;

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
    	"basic" => "OpportunitySearchRowBasic",
    	"actualJoin" => "TransactionSearchRowBasic",
    	"callJoin" => "PhoneCallSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"decisionMakerJoin" => "ContactSearchRowBasic",
    	"estimateJoin" => "TransactionSearchRowBasic",
    	"eventJoin" => "CalendarEventSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"leadSourceJoin" => "CampaignSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"orderJoin" => "TransactionSearchRowBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
    	"partnerJoin" => "PartnerSearchRowBasic",
    	"salesRepJoin" => "EmployeeSearchRowBasic",
    	"taskJoin" => "TaskSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param OpportunitySearchRowBasic $basic
     * @return OpportunitySearchRow
     */
    public function setBasic(OpportunitySearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return OpportunitySearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set actualJoin
     *
     * @param TransactionSearchRowBasic $actualJoin
     * @return OpportunitySearchRow
     */
    public function setActualJoin(TransactionSearchRowBasic $actualJoin) {
        $this->actualJoin = $actualJoin;
        return $this;
    }

    /**
     * Get actualJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getActualJoin() {
        return $this->actualJoin;
    }


    /**
     * Set callJoin
     *
     * @param PhoneCallSearchRowBasic $callJoin
     * @return OpportunitySearchRow
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
     * Set customerJoin
     *
     * @param CustomerSearchRowBasic $customerJoin
     * @return OpportunitySearchRow
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
     * Set decisionMakerJoin
     *
     * @param ContactSearchRowBasic $decisionMakerJoin
     * @return OpportunitySearchRow
     */
    public function setDecisionMakerJoin(ContactSearchRowBasic $decisionMakerJoin) {
        $this->decisionMakerJoin = $decisionMakerJoin;
        return $this;
    }

    /**
     * Get decisionMakerJoin
     *
     * @return ContactSearchRowBasic
     */
    public function getDecisionMakerJoin() {
        return $this->decisionMakerJoin;
    }


    /**
     * Set estimateJoin
     *
     * @param TransactionSearchRowBasic $estimateJoin
     * @return OpportunitySearchRow
     */
    public function setEstimateJoin(TransactionSearchRowBasic $estimateJoin) {
        $this->estimateJoin = $estimateJoin;
        return $this;
    }

    /**
     * Get estimateJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getEstimateJoin() {
        return $this->estimateJoin;
    }


    /**
     * Set eventJoin
     *
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return OpportunitySearchRow
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
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return OpportunitySearchRow
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
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return OpportunitySearchRow
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
     * Set leadSourceJoin
     *
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return OpportunitySearchRow
     */
    public function setLeadSourceJoin(CampaignSearchRowBasic $leadSourceJoin) {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * Get leadSourceJoin
     *
     * @return CampaignSearchRowBasic
     */
    public function getLeadSourceJoin() {
        return $this->leadSourceJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return OpportunitySearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin) {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * Get messagesJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin() {
        return $this->messagesJoin;
    }


    /**
     * Set orderJoin
     *
     * @param TransactionSearchRowBasic $orderJoin
     * @return OpportunitySearchRow
     */
    public function setOrderJoin(TransactionSearchRowBasic $orderJoin) {
        $this->orderJoin = $orderJoin;
        return $this;
    }

    /**
     * Get orderJoin
     *
     * @return TransactionSearchRowBasic
     */
    public function getOrderJoin() {
        return $this->orderJoin;
    }


    /**
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return OpportunitySearchRow
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
     * @return OpportunitySearchRow
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
     * Set salesRepJoin
     *
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return OpportunitySearchRow
     */
    public function setSalesRepJoin(EmployeeSearchRowBasic $salesRepJoin) {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * Get salesRepJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getSalesRepJoin() {
        return $this->salesRepJoin;
    }


    /**
     * Set taskJoin
     *
     * @param TaskSearchRowBasic $taskJoin
     * @return OpportunitySearchRow
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
     * Set userNotesJoin
     *
     * @param NoteSearchRowBasic $userNotesJoin
     * @return OpportunitySearchRow
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