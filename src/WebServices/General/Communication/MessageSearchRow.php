<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\General\Communication;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic;

/**
 * MessageSearchRow
 */
class MessageSearchRow extends SearchRow {

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $attachmentsJoin;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $authorJoin;

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
     * @var EntitySearchRowBasic
     */
    protected $recipientJoin;

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

    static $paramtypesmap = array(
    	"basic" => "MessageSearchRowBasic",
    	"attachmentsJoin" => "FileSearchRowBasic",
    	"authorJoin" => "EntitySearchRowBasic",
    	"campaignJoin" => "CampaignSearchRowBasic",
    	"caseJoin" => "SupportCaseSearchRowBasic",
    	"contactJoin" => "ContactSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"entityJoin" => "EntitySearchRowBasic",
    	"opportunityJoin" => "OpportunitySearchRowBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
    	"partnerJoin" => "PartnerSearchRowBasic",
    	"recipientJoin" => "EntitySearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"vendorJoin" => "VendorSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param MessageSearchRowBasic $basic
     * @return MessageSearchRow
     */
    public function setBasic(MessageSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return MessageSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set attachmentsJoin
     *
     * @param FileSearchRowBasic $attachmentsJoin
     * @return MessageSearchRow
     */
    public function setAttachmentsJoin(FileSearchRowBasic $attachmentsJoin) {
        $this->attachmentsJoin = $attachmentsJoin;
        return $this;
    }

    /**
     * Get attachmentsJoin
     *
     * @return FileSearchRowBasic
     */
    public function getAttachmentsJoin() {
        return $this->attachmentsJoin;
    }


    /**
     * Set authorJoin
     *
     * @param EntitySearchRowBasic $authorJoin
     * @return MessageSearchRow
     */
    public function setAuthorJoin(EntitySearchRowBasic $authorJoin) {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * Get authorJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getAuthorJoin() {
        return $this->authorJoin;
    }


    /**
     * Set campaignJoin
     *
     * @param CampaignSearchRowBasic $campaignJoin
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * Set opportunityJoin
     *
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * Set recipientJoin
     *
     * @param EntitySearchRowBasic $recipientJoin
     * @return MessageSearchRow
     */
    public function setRecipientJoin(EntitySearchRowBasic $recipientJoin) {
        $this->recipientJoin = $recipientJoin;
        return $this;
    }

    /**
     * Get recipientJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getRecipientJoin() {
        return $this->recipientJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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
     * @return MessageSearchRow
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