<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\General\Communication;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;

/**
 * MessageSearch
 */
class MessageSearch extends SearchRecord {

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $attachmentsJoin;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $authorJoin;

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
     * @var EntitySearchBasic
     */
    protected $recipientJoin;

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

    static $paramtypesmap = array(
    	"basic" => "MessageSearchBasic",
    	"attachmentsJoin" => "FileSearchBasic",
    	"authorJoin" => "EntitySearchBasic",
    	"campaignJoin" => "CampaignSearchBasic",
    	"caseJoin" => "SupportCaseSearchBasic",
    	"contactJoin" => "ContactSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"employeeJoin" => "EmployeeSearchBasic",
    	"entityJoin" => "EntitySearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"partnerJoin" => "PartnerSearchBasic",
    	"recipientJoin" => "EntitySearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"vendorJoin" => "VendorSearchBasic",
    );

    /**
     * Set basic
     *
     * @param MessageSearchBasic $basic
     * @return MessageSearch
     */
    public function setBasic(MessageSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return MessageSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set attachmentsJoin
     *
     * @param FileSearchBasic $attachmentsJoin
     * @return MessageSearch
     */
    public function setAttachmentsJoin(FileSearchBasic $attachmentsJoin) {
        $this->attachmentsJoin = $attachmentsJoin;
        return $this;
    }

    /**
     * Get attachmentsJoin
     *
     * @return FileSearchBasic
     */
    public function getAttachmentsJoin() {
        return $this->attachmentsJoin;
    }


    /**
     * Set authorJoin
     *
     * @param EntitySearchBasic $authorJoin
     * @return MessageSearch
     */
    public function setAuthorJoin(EntitySearchBasic $authorJoin) {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * Get authorJoin
     *
     * @return EntitySearchBasic
     */
    public function getAuthorJoin() {
        return $this->authorJoin;
    }


    /**
     * Set campaignJoin
     *
     * @param CampaignSearchBasic $campaignJoin
     * @return MessageSearch
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
     * @return MessageSearch
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
     * @return MessageSearch
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
     * @return MessageSearch
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
     * @return MessageSearch
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
     * @return MessageSearch
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
     * Set opportunityJoin
     *
     * @param OpportunitySearchBasic $opportunityJoin
     * @return MessageSearch
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
     * @return MessageSearch
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
     * @return MessageSearch
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
     * Set recipientJoin
     *
     * @param EntitySearchBasic $recipientJoin
     * @return MessageSearch
     */
    public function setRecipientJoin(EntitySearchBasic $recipientJoin) {
        $this->recipientJoin = $recipientJoin;
        return $this;
    }

    /**
     * Get recipientJoin
     *
     * @return EntitySearchBasic
     */
    public function getRecipientJoin() {
        return $this->recipientJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return MessageSearch
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
     * @return MessageSearch
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
     * @return MessageSearch
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