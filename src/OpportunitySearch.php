<?php

namespace Nzolt\NetSuite;

class OpportunitySearch extends SearchRecord
{

    /**
     * @var OpportunitySearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var TransactionSearchBasic $actualJoin
     */
    protected $actualJoin = null;

    /**
     * @var PhoneCallSearchBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ContactSearchBasic $decisionMakerJoin
     */
    protected $decisionMakerJoin = null;

    /**
     * @var TransactionSearchBasic $estimateJoin
     */
    protected $estimateJoin = null;

    /**
     * @var CalendarEventSearchBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var CampaignSearchBasic $leadSourceJoin
     */
    protected $leadSourceJoin = null;

    /**
     * @var MessageSearchBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var TransactionSearchBasic $orderJoin
     */
    protected $orderJoin = null;

    /**
     * @var OriginatingLeadSearchBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var PartnerSearchBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var EmployeeSearchBasic $salesRepJoin
     */
    protected $salesRepJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

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
     * @return OpportunitySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param OpportunitySearchBasic $basic
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getActualJoin()
    {
      return $this->actualJoin;
    }

    /**
     * @param TransactionSearchBasic $actualJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setActualJoin($actualJoin)
    {
      $this->actualJoin = $actualJoin;
      return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin()
    {
      return $this->callJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getDecisionMakerJoin()
    {
      return $this->decisionMakerJoin;
    }

    /**
     * @param ContactSearchBasic $decisionMakerJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setDecisionMakerJoin($decisionMakerJoin)
    {
      $this->decisionMakerJoin = $decisionMakerJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getEstimateJoin()
    {
      return $this->estimateJoin;
    }

    /**
     * @param TransactionSearchBasic $estimateJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setEstimateJoin($estimateJoin)
    {
      $this->estimateJoin = $estimateJoin;
      return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin()
    {
      return $this->eventJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
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
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getLeadSourceJoin()
    {
      return $this->leadSourceJoin;
    }

    /**
     * @param CampaignSearchBasic $leadSourceJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setLeadSourceJoin($leadSourceJoin)
    {
      $this->leadSourceJoin = $leadSourceJoin;
      return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesJoin()
    {
      return $this->messagesJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getOrderJoin()
    {
      return $this->orderJoin;
    }

    /**
     * @param TransactionSearchBasic $orderJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setOrderJoin($orderJoin)
    {
      $this->orderJoin = $orderJoin;
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
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
      return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getPartnerJoin()
    {
      return $this->partnerJoin;
    }

    /**
     * @param PartnerSearchBasic $partnerJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getSalesRepJoin()
    {
      return $this->salesRepJoin;
    }

    /**
     * @param EmployeeSearchBasic $salesRepJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setSalesRepJoin($salesRepJoin)
    {
      $this->salesRepJoin = $salesRepJoin;
      return $this;
    }

    /**
     * @return TaskSearchBasic
     */
    public function getTaskJoin()
    {
      return $this->taskJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\OpportunitySearch
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
     * @return \Nzolt\NetSuite\OpportunitySearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
