<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\IssueSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * SupportCaseSearchRow
 */
class SupportCaseSearchRow extends SearchRow {

    /**
     * @access public
     * @var SupportCaseSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $companyJoin;

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
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var IssueSearchRowBasic
     */
    protected $issueJoin;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var TimeBillSearchRowBasic
     */
    protected $timeJoin;

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
     * @var NoteSearchRowBasic
     */
    protected $userNotesJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "SupportCaseSearchRowBasic",
    	"companyJoin" => "EntitySearchRowBasic",
    	"contactJoin" => "ContactSearchRowBasic",
    	"customerJoin" => "CustomerSearchRowBasic",
    	"employeeJoin" => "EmployeeSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"issueJoin" => "IssueSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"timeJoin" => "TimeBillSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param SupportCaseSearchRowBasic $basic
     * @return SupportCaseSearchRow
     */
    public function setBasic(SupportCaseSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SupportCaseSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set companyJoin
     *
     * @param EntitySearchRowBasic $companyJoin
     * @return SupportCaseSearchRow
     */
    public function setCompanyJoin(EntitySearchRowBasic $companyJoin) {
        $this->companyJoin = $companyJoin;
        return $this;
    }

    /**
     * Get companyJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getCompanyJoin() {
        return $this->companyJoin;
    }


    /**
     * Set contactJoin
     *
     * @param ContactSearchRowBasic $contactJoin
     * @return SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
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
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return SupportCaseSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin) {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * Get fileJoin
     *
     * @return FileSearchRowBasic
     */
    public function getFileJoin() {
        return $this->fileJoin;
    }


    /**
     * Set issueJoin
     *
     * @param IssueSearchRowBasic $issueJoin
     * @return SupportCaseSearchRow
     */
    public function setIssueJoin(IssueSearchRowBasic $issueJoin) {
        $this->issueJoin = $issueJoin;
        return $this;
    }

    /**
     * Get issueJoin
     *
     * @return IssueSearchRowBasic
     */
    public function getIssueJoin() {
        return $this->issueJoin;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return SupportCaseSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin) {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * Get itemJoin
     *
     * @return ItemSearchRowBasic
     */
    public function getItemJoin() {
        return $this->itemJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return SupportCaseSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin) {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * Get messagesJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin() {
        return $this->messagesJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchRowBasic $timeJoin
     * @return SupportCaseSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return SupportCaseSearchRow
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
     * @return SupportCaseSearchRow
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
     * Set userNotesJoin
     *
     * @param NoteSearchRowBasic $userNotesJoin
     * @return SupportCaseSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin) {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * Get userNotesJoin
     *
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin() {
        return $this->userNotesJoin;
    }

}