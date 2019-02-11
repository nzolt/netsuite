<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * EmployeeSearchRow
 */
class EmployeeSearchRow extends SearchRow {

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $campaignResponseJoin;

    /**
     * @access public
     * @var DepartmentSearchRowBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $locationJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesFromJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesToJoin;

    /**
     * @access public
     * @var ResourceAllocationSearchRowBasic
     */
    protected $resourceAllocationJoin;

    /**
     * @access public
     * @var SubsidiarySearchRowBasic
     */
    protected $subsidiaryJoin;

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
    	"basic" => "EmployeeSearchRowBasic",
    	"campaignResponseJoin" => "CampaignSearchRowBasic",
    	"departmentJoin" => "DepartmentSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"locationJoin" => "LocationSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"messagesFromJoin" => "MessageSearchRowBasic",
    	"messagesToJoin" => "MessageSearchRowBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
    	"subsidiaryJoin" => "SubsidiarySearchRowBasic",
    	"timeJoin" => "TimeBillSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param EmployeeSearchRowBasic $basic
     * @return EmployeeSearchRow
     */
    public function setBasic(EmployeeSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return EmployeeSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set campaignResponseJoin
     *
     * @param CampaignSearchRowBasic $campaignResponseJoin
     * @return EmployeeSearchRow
     */
    public function setCampaignResponseJoin(CampaignSearchRowBasic $campaignResponseJoin) {
        $this->campaignResponseJoin = $campaignResponseJoin;
        return $this;
    }

    /**
     * Get campaignResponseJoin
     *
     * @return CampaignSearchRowBasic
     */
    public function getCampaignResponseJoin() {
        return $this->campaignResponseJoin;
    }


    /**
     * Set departmentJoin
     *
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return EmployeeSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return EmployeeSearchRow
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
     * Set locationJoin
     *
     * @param LocationSearchRowBasic $locationJoin
     * @return EmployeeSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return EmployeeSearchRow
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
     * Set messagesFromJoin
     *
     * @param MessageSearchRowBasic $messagesFromJoin
     * @return EmployeeSearchRow
     */
    public function setMessagesFromJoin(MessageSearchRowBasic $messagesFromJoin) {
        $this->messagesFromJoin = $messagesFromJoin;
        return $this;
    }

    /**
     * Get messagesFromJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesFromJoin() {
        return $this->messagesFromJoin;
    }


    /**
     * Set messagesToJoin
     *
     * @param MessageSearchRowBasic $messagesToJoin
     * @return EmployeeSearchRow
     */
    public function setMessagesToJoin(MessageSearchRowBasic $messagesToJoin) {
        $this->messagesToJoin = $messagesToJoin;
        return $this;
    }

    /**
     * Get messagesToJoin
     *
     * @return MessageSearchRowBasic
     */
    public function getMessagesToJoin() {
        return $this->messagesToJoin;
    }


    /**
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchRowBasic $resourceAllocationJoin
     * @return EmployeeSearchRow
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchRowBasic $resourceAllocationJoin) {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * Get resourceAllocationJoin
     *
     * @return ResourceAllocationSearchRowBasic
     */
    public function getResourceAllocationJoin() {
        return $this->resourceAllocationJoin;
    }


    /**
     * Set subsidiaryJoin
     *
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return EmployeeSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin) {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * Get subsidiaryJoin
     *
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin() {
        return $this->subsidiaryJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchRowBasic $timeJoin
     * @return EmployeeSearchRow
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
     * @return EmployeeSearchRow
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
     * @return EmployeeSearchRow
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
     * @return EmployeeSearchRow
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