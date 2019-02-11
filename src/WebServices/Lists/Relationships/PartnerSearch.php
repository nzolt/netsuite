<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * PartnerSearch
 */
class PartnerSearch extends SearchRecord {

    /**
     * @access public
     * @var PartnerSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $campaignResponseJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactJoin;

    /**
     * @access public
     * @var ContactSearchBasic
     */
    protected $contactPrimaryJoin;

    /**
     * @access public
     * @var CustomerSearchBasic
     */
    protected $customerJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesFromJoin;

    /**
     * @access public
     * @var MessageSearchBasic
     */
    protected $messagesToJoin;

    /**
     * @access public
     * @var OpportunitySearchBasic
     */
    protected $opportunityJoin;

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
     * @var NoteSearchBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "PartnerSearchBasic",
    	"campaignResponseJoin" => "CampaignSearchBasic",
    	"contactJoin" => "ContactSearchBasic",
    	"contactPrimaryJoin" => "ContactSearchBasic",
    	"customerJoin" => "CustomerSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"messagesFromJoin" => "MessageSearchBasic",
    	"messagesToJoin" => "MessageSearchBasic",
    	"opportunityJoin" => "OpportunitySearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param PartnerSearchBasic $basic
     * @return PartnerSearch
     */
    public function setBasic(PartnerSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PartnerSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set campaignResponseJoin
     *
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return PartnerSearch
     */
    public function setCampaignResponseJoin(CampaignSearchBasic $campaignResponseJoin) {
        $this->campaignResponseJoin = $campaignResponseJoin;
        return $this;
    }

    /**
     * Get campaignResponseJoin
     *
     * @return CampaignSearchBasic
     */
    public function getCampaignResponseJoin() {
        return $this->campaignResponseJoin;
    }


    /**
     * Set contactJoin
     *
     * @param ContactSearchBasic $contactJoin
     * @return PartnerSearch
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
     * Set contactPrimaryJoin
     *
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return PartnerSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin) {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * Get contactPrimaryJoin
     *
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin() {
        return $this->contactPrimaryJoin;
    }


    /**
     * Set customerJoin
     *
     * @param CustomerSearchBasic $customerJoin
     * @return PartnerSearch
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
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return PartnerSearch
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
     * Set messagesJoin
     *
     * @param MessageSearchBasic $messagesJoin
     * @return PartnerSearch
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
     * Set messagesFromJoin
     *
     * @param MessageSearchBasic $messagesFromJoin
     * @return PartnerSearch
     */
    public function setMessagesFromJoin(MessageSearchBasic $messagesFromJoin) {
        $this->messagesFromJoin = $messagesFromJoin;
        return $this;
    }

    /**
     * Get messagesFromJoin
     *
     * @return MessageSearchBasic
     */
    public function getMessagesFromJoin() {
        return $this->messagesFromJoin;
    }


    /**
     * Set messagesToJoin
     *
     * @param MessageSearchBasic $messagesToJoin
     * @return PartnerSearch
     */
    public function setMessagesToJoin(MessageSearchBasic $messagesToJoin) {
        $this->messagesToJoin = $messagesToJoin;
        return $this;
    }

    /**
     * Get messagesToJoin
     *
     * @return MessageSearchBasic
     */
    public function getMessagesToJoin() {
        return $this->messagesToJoin;
    }


    /**
     * Set opportunityJoin
     *
     * @param OpportunitySearchBasic $opportunityJoin
     * @return PartnerSearch
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
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return PartnerSearch
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
     * @return PartnerSearch
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
     * Set userNotesJoin
     *
     * @param NoteSearchBasic $userNotesJoin
     * @return PartnerSearch
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