<?php

namespace Nzolt\NetSuite;

class OpportunitySearchRow extends SearchRow
{

    /**
     * @var OpportunitySearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var TransactionSearchRowBasic $actualJoin
     */
    protected $actualJoin = null;

    /**
     * @var PhoneCallSearchRowBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ContactSearchRowBasic $decisionMakerJoin
     */
    protected $decisionMakerJoin = null;

    /**
     * @var TransactionSearchRowBasic $estimateJoin
     */
    protected $estimateJoin = null;

    /**
     * @var CalendarEventSearchRowBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var CampaignSearchRowBasic $leadSourceJoin
     */
    protected $leadSourceJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var TransactionSearchRowBasic $orderJoin
     */
    protected $orderJoin = null;

    /**
     * @var OriginatingLeadSearchRowBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var PartnerSearchRowBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var EmployeeSearchRowBasic $salesRepJoin
     */
    protected $salesRepJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

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
     * @return OpportunitySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param OpportunitySearchRowBasic $basic
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getActualJoin()
    {
      return $this->actualJoin;
    }

    /**
     * @param TransactionSearchRowBasic $actualJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setActualJoin($actualJoin)
    {
      $this->actualJoin = $actualJoin;
      return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin()
    {
      return $this->callJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getDecisionMakerJoin()
    {
      return $this->decisionMakerJoin;
    }

    /**
     * @param ContactSearchRowBasic $decisionMakerJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setDecisionMakerJoin($decisionMakerJoin)
    {
      $this->decisionMakerJoin = $decisionMakerJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getEstimateJoin()
    {
      return $this->estimateJoin;
    }

    /**
     * @param TransactionSearchRowBasic $estimateJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setEstimateJoin($estimateJoin)
    {
      $this->estimateJoin = $estimateJoin;
      return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin()
    {
      return $this->eventJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
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
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getLeadSourceJoin()
    {
      return $this->leadSourceJoin;
    }

    /**
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setLeadSourceJoin($leadSourceJoin)
    {
      $this->leadSourceJoin = $leadSourceJoin;
      return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin()
    {
      return $this->messagesJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getOrderJoin()
    {
      return $this->orderJoin;
    }

    /**
     * @param TransactionSearchRowBasic $orderJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setOrderJoin($orderJoin)
    {
      $this->orderJoin = $orderJoin;
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
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
      return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getPartnerJoin()
    {
      return $this->partnerJoin;
    }

    /**
     * @param PartnerSearchRowBasic $partnerJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getSalesRepJoin()
    {
      return $this->salesRepJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setSalesRepJoin($salesRepJoin)
    {
      $this->salesRepJoin = $salesRepJoin;
      return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\OpportunitySearchRow
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
     * @return \Nzolt\NetSuite\OpportunitySearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
