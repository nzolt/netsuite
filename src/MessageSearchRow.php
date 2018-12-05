<?php

namespace Nzolt\NetSuite;

class MessageSearchRow extends SearchRow
{

    /**
     * @var MessageSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var FileSearchRowBasic $attachmentsJoin
     */
    protected $attachmentsJoin = null;

    /**
     * @var EntitySearchRowBasic $authorJoin
     */
    protected $authorJoin = null;

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
     * @var EntitySearchRowBasic $recipientJoin
     */
    protected $recipientJoin = null;

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

    
    public function __construct()
    {
    
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param MessageSearchRowBasic $basic
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getAttachmentsJoin()
    {
      return $this->attachmentsJoin;
    }

    /**
     * @param FileSearchRowBasic $attachmentsJoin
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setAttachmentsJoin($attachmentsJoin)
    {
      $this->attachmentsJoin = $attachmentsJoin;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getAuthorJoin()
    {
      return $this->authorJoin;
    }

    /**
     * @param EntitySearchRowBasic $authorJoin
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setAuthorJoin($authorJoin)
    {
      $this->authorJoin = $authorJoin;
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setEntityJoin($entityJoin)
    {
      $this->entityJoin = $entityJoin;
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getRecipientJoin()
    {
      return $this->recipientJoin;
    }

    /**
     * @param EntitySearchRowBasic $recipientJoin
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setRecipientJoin($recipientJoin)
    {
      $this->recipientJoin = $recipientJoin;
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
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
     * @return \Nzolt\NetSuite\MessageSearchRow
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

}
