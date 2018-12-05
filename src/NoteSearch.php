<?php

namespace Nzolt\NetSuite;

class NoteSearch extends SearchRecord
{

    /**
     * @var NoteSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var EmployeeSearchBasic $authorJoin
     */
    protected $authorJoin = null;

    /**
     * @var PhoneCallSearchBasic $callJoin
     */
    protected $callJoin = null;

    /**
     * @var CampaignSearchBasic $campaignJoin
     */
    protected $campaignJoin = null;

    /**
     * @var SupportCaseSearchBasic $caseJoin
     */
    protected $caseJoin = null;

    /**
     * @var ContactSearchBasic $contactJoin
     */
    protected $contactJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var EmployeeSearchBasic $employeeJoin
     */
    protected $employeeJoin = null;

    /**
     * @var EntitySearchBasic $entityJoin
     */
    protected $entityJoin = null;

    /**
     * @var CalendarEventSearchBasic $eventJoin
     */
    protected $eventJoin = null;

    /**
     * @var IssueSearchBasic $issueJoin
     */
    protected $issueJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var OpportunitySearchBasic $opportunityJoin
     */
    protected $opportunityJoin = null;

    /**
     * @var OriginatingLeadSearchBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var PartnerSearchBasic $partnerJoin
     */
    protected $partnerJoin = null;

    /**
     * @var SolutionSearchBasic $solutionJoin
     */
    protected $solutionJoin = null;

    /**
     * @var TaskSearchBasic $taskJoin
     */
    protected $taskJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var VendorSearchBasic $vendorJoin
     */
    protected $vendorJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NoteSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param NoteSearchBasic $basic
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getAuthorJoin()
    {
      return $this->authorJoin;
    }

    /**
     * @param EmployeeSearchBasic $authorJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setAuthorJoin($authorJoin)
    {
      $this->authorJoin = $authorJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setCallJoin($callJoin)
    {
      $this->callJoin = $callJoin;
      return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getCampaignJoin()
    {
      return $this->campaignJoin;
    }

    /**
     * @param CampaignSearchBasic $campaignJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setCampaignJoin($campaignJoin)
    {
      $this->campaignJoin = $campaignJoin;
      return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin()
    {
      return $this->caseJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setCaseJoin($caseJoin)
    {
      $this->caseJoin = $caseJoin;
      return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactJoin()
    {
      return $this->contactJoin;
    }

    /**
     * @param ContactSearchBasic $contactJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setContactJoin($contactJoin)
    {
      $this->contactJoin = $contactJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin()
    {
      return $this->employeeJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setEmployeeJoin($employeeJoin)
    {
      $this->employeeJoin = $employeeJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getEntityJoin()
    {
      return $this->entityJoin;
    }

    /**
     * @param EntitySearchBasic $entityJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setEntityJoin($entityJoin)
    {
      $this->entityJoin = $entityJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setEventJoin($eventJoin)
    {
      $this->eventJoin = $eventJoin;
      return $this;
    }

    /**
     * @return IssueSearchBasic
     */
    public function getIssueJoin()
    {
      return $this->issueJoin;
    }

    /**
     * @param IssueSearchBasic $issueJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setIssueJoin($issueJoin)
    {
      $this->issueJoin = $issueJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return OpportunitySearchBasic
     */
    public function getOpportunityJoin()
    {
      return $this->opportunityJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setOpportunityJoin($opportunityJoin)
    {
      $this->opportunityJoin = $opportunityJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return SolutionSearchBasic
     */
    public function getSolutionJoin()
    {
      return $this->solutionJoin;
    }

    /**
     * @param SolutionSearchBasic $solutionJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setSolutionJoin($solutionJoin)
    {
      $this->solutionJoin = $solutionJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setTaskJoin($taskJoin)
    {
      $this->taskJoin = $taskJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin()
    {
      return $this->vendorJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
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
     * @return \Nzolt\NetSuite\NoteSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
