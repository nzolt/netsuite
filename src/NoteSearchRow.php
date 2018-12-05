<?php

namespace Nzolt\NetSuite;

class NoteSearchRow extends SearchRow
{

    /**
     * @var NoteSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchRowBasic $authorJoin
     */
    protected $authorJoin = null;

    /**
     * @var PhoneCallSearchRowBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var CampaignSearchRowBasic $campaignJoin
     */
    protected $campaignJoin = null;

    /**
     * @var SupportCaseSearchRowBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ContactSearchRowBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var EmployeeSearchRowBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var EntitySearchRowBasic $entityJoin
     */
    protected $entityJoin = null;

    /**
     * @var CalendarEventSearchRowBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var IssueSearchRowBasic $issueJoin
     */
    protected $issueJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var OpportunitySearchRowBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var OriginatingLeadSearchRowBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var PartnerSearchRowBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var SolutionSearchRowBasic $solutionJoin
     */
    protected $solutionJoin = null;

    /**
     * @var TaskSearchRowBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var VendorSearchRowBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param NoteSearchRowBasic $basic
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getAuthorJoin()
    {
      return $this->authorJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $authorJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setAuthorJoin($authorJoin)
    {
      $this->authorJoin = $authorJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getCampaignJoin()
    {
      return $this->campaignJoin;
    }

    /**
     * @param CampaignSearchRowBasic $campaignJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setCampaignJoin($campaignJoin)
    {
      $this->campaignJoin = $campaignJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactJoin()
    {
      return $this->contactJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getEntityJoin()
    {
      return $this->entityJoin;
    }

    /**
     * @param EntitySearchRowBasic $entityJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setEntityJoin($entityJoin)
    {
      $this->entityJoin = $entityJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
      return $this;
    }

    /**
     * @return IssueSearchRowBasic
     */
    public function getIssueJoin()
    {
      return $this->issueJoin;
    }

    /**
     * @param IssueSearchRowBasic $issueJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setIssueJoin($issueJoin)
    {
      $this->issueJoin = $issueJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
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
     * @return \Nzolt\NetSuite\NoteSearchRow
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return SolutionSearchRowBasic
     */
    public function getSolutionJoin()
    {
      return $this->solutionJoin;
    }

    /**
     * @param SolutionSearchRowBasic $solutionJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setSolutionJoin($solutionJoin)
    {
      $this->solutionJoin = $solutionJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
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
     * @return \Nzolt\NetSuite\NoteSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
