<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * VendorSearch
 */
class VendorSearch extends SearchRecord {

    /**
     * @access public
     * @var VendorSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $accountJoin;

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
     * @var AccountSearchBasic
     */
    protected $expAccountJoin;

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
    	"basic" => "VendorSearchBasic",
    	"accountJoin" => "AccountSearchBasic",
    	"campaignResponseJoin" => "CampaignSearchBasic",
    	"contactJoin" => "ContactSearchBasic",
    	"contactPrimaryJoin" => "ContactSearchBasic",
    	"expAccountJoin" => "AccountSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"messagesFromJoin" => "MessageSearchBasic",
    	"messagesToJoin" => "MessageSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param VendorSearchBasic $basic
     * @return VendorSearch
     */
    public function setBasic(VendorSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return VendorSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set accountJoin
     *
     * @param AccountSearchBasic $accountJoin
     * @return VendorSearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin) {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * Get accountJoin
     *
     * @return AccountSearchBasic
     */
    public function getAccountJoin() {
        return $this->accountJoin;
    }


    /**
     * Set campaignResponseJoin
     *
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return VendorSearch
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
     * @return VendorSearch
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
     * @return VendorSearch
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
     * Set expAccountJoin
     *
     * @param AccountSearchBasic $expAccountJoin
     * @return VendorSearch
     */
    public function setExpAccountJoin(AccountSearchBasic $expAccountJoin) {
        $this->expAccountJoin = $expAccountJoin;
        return $this;
    }

    /**
     * Get expAccountJoin
     *
     * @return AccountSearchBasic
     */
    public function getExpAccountJoin() {
        return $this->expAccountJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return VendorSearch
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
     * @return VendorSearch
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
     * @return VendorSearch
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
     * @return VendorSearch
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
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return VendorSearch
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
     * @return VendorSearch
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
     * @return VendorSearch
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