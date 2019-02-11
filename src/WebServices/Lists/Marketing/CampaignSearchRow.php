<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\PromotionCodeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic;

/**
 * CampaignSearchRow
 */
class CampaignSearchRow extends SearchRow {

    /**
     * @access public
     * @var CampaignSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $campaignRecipientJoin;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var MessageSearchRowBasic
     */
    protected $messagesJoin;

    /**
     * @access public
     * @var OriginatingLeadSearchRowBasic
     */
    protected $originatingLeadJoin;

    /**
     * @access public
     * @var PromotionCodeSearchRowBasic
     */
    protected $promotionCodeJoin;

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
    	"basic" => "CampaignSearchRowBasic",
    	"campaignRecipientJoin" => "EntitySearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"messagesJoin" => "MessageSearchRowBasic",
    	"originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
    	"promotionCodeJoin" => "PromotionCodeSearchRowBasic",
    	"transactionJoin" => "TransactionSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"userNotesJoin" => "NoteSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param CampaignSearchRowBasic $basic
     * @return CampaignSearchRow
     */
    public function setBasic(CampaignSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return CampaignSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set campaignRecipientJoin
     *
     * @param EntitySearchRowBasic $campaignRecipientJoin
     * @return CampaignSearchRow
     */
    public function setCampaignRecipientJoin(EntitySearchRowBasic $campaignRecipientJoin) {
        $this->campaignRecipientJoin = $campaignRecipientJoin;
        return $this;
    }

    /**
     * Get campaignRecipientJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getCampaignRecipientJoin() {
        return $this->campaignRecipientJoin;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return CampaignSearchRow
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
     * Set messagesJoin
     *
     * @param MessageSearchRowBasic $messagesJoin
     * @return CampaignSearchRow
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
     * Set originatingLeadJoin
     *
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return CampaignSearchRow
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
     * Set promotionCodeJoin
     *
     * @param PromotionCodeSearchRowBasic $promotionCodeJoin
     * @return CampaignSearchRow
     */
    public function setPromotionCodeJoin(PromotionCodeSearchRowBasic $promotionCodeJoin) {
        $this->promotionCodeJoin = $promotionCodeJoin;
        return $this;
    }

    /**
     * Get promotionCodeJoin
     *
     * @return PromotionCodeSearchRowBasic
     */
    public function getPromotionCodeJoin() {
        return $this->promotionCodeJoin;
    }


    /**
     * Set transactionJoin
     *
     * @param TransactionSearchRowBasic $transactionJoin
     * @return CampaignSearchRow
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
     * @return CampaignSearchRow
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
     * @return CampaignSearchRow
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