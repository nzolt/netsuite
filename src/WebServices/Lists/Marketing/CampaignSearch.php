<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PromotionCodeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic;

/**
 * CampaignSearch
 */
class CampaignSearch extends SearchRecord {

    /**
     * @access public
     * @var CampaignSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $campaignRecipientJoin;

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
     * @var OriginatingLeadSearchBasic
     */
    protected $originatingLeadJoin;

    /**
     * @access public
     * @var PromotionCodeSearchBasic
     */
    protected $promotionCodeJoin;

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
    	"basic" => "CampaignSearchBasic",
    	"campaignRecipientJoin" => "EntitySearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"messagesJoin" => "MessageSearchBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchBasic",
    	"promotionCodeJoin" => "PromotionCodeSearchBasic",
    	"transactionJoin" => "TransactionSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"userNotesJoin" => "NoteSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param CampaignSearchBasic $basic
     * @return CampaignSearch
     */
    public function setBasic(CampaignSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CampaignSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set campaignRecipientJoin
     *
     * @param EntitySearchBasic $campaignRecipientJoin
     * @return CampaignSearch
     */
    public function setCampaignRecipientJoin(EntitySearchBasic $campaignRecipientJoin) {
        $this->campaignRecipientJoin = $campaignRecipientJoin;
        return $this;
    }

    /**
     * Get campaignRecipientJoin
     *
     * @return EntitySearchBasic
     */
    public function getCampaignRecipientJoin() {
        return $this->campaignRecipientJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return CampaignSearch
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
     * @return CampaignSearch
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
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return CampaignSearch
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
     * Set promotionCodeJoin
     *
     * @param PromotionCodeSearchBasic $promotionCodeJoin
     * @return CampaignSearch
     */
    public function setPromotionCodeJoin(PromotionCodeSearchBasic $promotionCodeJoin) {
        $this->promotionCodeJoin = $promotionCodeJoin;
        return $this;
    }

    /**
     * Get promotionCodeJoin
     *
     * @return PromotionCodeSearchBasic
     */
    public function getPromotionCodeJoin() {
        return $this->promotionCodeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchBasic $transactionJoin
     * @return CampaignSearch
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
     * @return CampaignSearch
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
     * @return CampaignSearch
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