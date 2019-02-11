<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * EmployeeSearch
 */
class EmployeeSearch extends SearchRecord {

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $campaignResponseJoin;

    /**
     * @access public
     * @var DepartmentSearchBasic
     */
    protected $departmentJoin;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $locationJoin;

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
     * @var ResourceAllocationSearchBasic
     */
    protected $resourceAllocationJoin;

    /**
     * @access public
     * @var SubsidiarySearchBasic
     */
    protected $subsidiaryJoin;

    /**
     * @access public
     * @var TimeBillSearchBasic
     */
    protected $timeJoin;

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
    	"basic" => "EmployeeSearchBasic",
    	"campaignResponseJoin" => "CampaignSearchBasic",
    	"departmentJoin" => "DepartmentSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"locationJoin" => "LocationSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"messagesFromJoin" => "MessageSearchBasic",
    	"messagesToJoin" => "MessageSearchBasic",
    	"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
    	"subsidiaryJoin" => "SubsidiarySearchBasic",
    	"timeJoin" => "TimeBillSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param EmployeeSearchBasic $basic
     * @return EmployeeSearch
     */
    public function setBasic(EmployeeSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return EmployeeSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set campaignResponseJoin
     *
     * @param CampaignSearchBasic $campaignResponseJoin
     * @return EmployeeSearch
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
     * Set departmentJoin
     *
     * @param DepartmentSearchBasic $departmentJoin
     * @return EmployeeSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin) {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * Get departmentJoin
     *
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin() {
        return $this->departmentJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return EmployeeSearch
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
     * Set locationJoin
     *
     * @param LocationSearchBasic $locationJoin
     * @return EmployeeSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin) {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * Get locationJoin
     *
     * @return LocationSearchBasic
     */
    public function getLocationJoin() {
        return $this->locationJoin;
    }


    /**
     * Set messagesJoin
     *
     * @param MessageSearchBasic $messagesJoin
     * @return EmployeeSearch
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
     * @return EmployeeSearch
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
     * @return EmployeeSearch
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
     * Set resourceAllocationJoin
     *
     * @param ResourceAllocationSearchBasic $resourceAllocationJoin
     * @return EmployeeSearch
     */
    public function setResourceAllocationJoin(ResourceAllocationSearchBasic $resourceAllocationJoin) {
        $this->resourceAllocationJoin = $resourceAllocationJoin;
        return $this;
    }

    /**
     * Get resourceAllocationJoin
     *
     * @return ResourceAllocationSearchBasic
     */
    public function getResourceAllocationJoin() {
        return $this->resourceAllocationJoin;
    }


    /**
     * Set subsidiaryJoin
     *
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return EmployeeSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin) {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * Get subsidiaryJoin
     *
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin() {
        return $this->subsidiaryJoin;
    }


    /**
     * Set timeJoin
     *
     * @param TimeBillSearchBasic $timeJoin
     * @return EmployeeSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin) {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * Get timeJoin
     *
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin() {
        return $this->timeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return EmployeeSearch
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
     * @return EmployeeSearch
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
     * @return EmployeeSearch
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