<?php

namespace Nzolt\NetSuite;

class MessageSearch extends SearchRecord
{

    /**
     * @var MessageSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var FileSearchBasic $attachmentsJoin
     */
    protected $attachmentsJoin = null;

    /**
     * @var EntitySearchBasic $authorJoin
     */
    protected $authorJoin = null;

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
     * @var EntitySearchBasic $recipientJoin
     */
    protected $recipientJoin = null;

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

    
    public function __construct()
    {
    
    }

    /**
     * @return MessageSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param MessageSearchBasic $basic
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getAttachmentsJoin()
    {
      return $this->attachmentsJoin;
    }

    /**
     * @param FileSearchBasic $attachmentsJoin
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setAttachmentsJoin($attachmentsJoin)
    {
      $this->attachmentsJoin = $attachmentsJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getAuthorJoin()
    {
      return $this->authorJoin;
    }

    /**
     * @param EntitySearchBasic $authorJoin
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setAuthorJoin($authorJoin)
    {
      $this->authorJoin = $authorJoin;
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setEntityJoin($entityJoin)
    {
      $this->entityJoin = $entityJoin;
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setPartnerJoin($partnerJoin)
    {
      $this->partnerJoin = $partnerJoin;
      return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getRecipientJoin()
    {
      return $this->recipientJoin;
    }

    /**
     * @param EntitySearchBasic $recipientJoin
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setRecipientJoin($recipientJoin)
    {
      $this->recipientJoin = $recipientJoin;
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
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
     * @return \Nzolt\NetSuite\MessageSearch
     */
    public function setVendorJoin($vendorJoin)
    {
      $this->vendorJoin = $vendorJoin;
      return $this;
    }

}
