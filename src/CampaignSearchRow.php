<?php

namespace Nzolt\NetSuite;

class CampaignSearchRow extends SearchRow
{

    /**
     * @var CampaignSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var EntitySearchRowBasic $campaignRecipientJoin
     */
    protected $campaignRecipientJoin = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var MessageSearchRowBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var OriginatingLeadSearchRowBasic $originatingLeadJoin
     */
    protected $originatingLeadJoin = null;

    /**
     * @var PromotionCodeSearchRowBasic $promotionCodeJoin
     */
    protected $promotionCodeJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchRowBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CampaignSearchRowBasic $basic
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getCampaignRecipientJoin()
    {
      return $this->campaignRecipientJoin;
    }

    /**
     * @param EntitySearchRowBasic $campaignRecipientJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setCampaignRecipientJoin($campaignRecipientJoin)
    {
      $this->campaignRecipientJoin = $campaignRecipientJoin;
      return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin()
    {
      return $this->messagesJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin()
    {
      return $this->originatingLeadJoin;
    }

    /**
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setOriginatingLeadJoin($originatingLeadJoin)
    {
      $this->originatingLeadJoin = $originatingLeadJoin;
      return $this;
    }

    /**
     * @return PromotionCodeSearchRowBasic
     */
    public function getPromotionCodeJoin()
    {
      return $this->promotionCodeJoin;
    }

    /**
     * @param PromotionCodeSearchRowBasic $promotionCodeJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setPromotionCodeJoin($promotionCodeJoin)
    {
      $this->promotionCodeJoin = $promotionCodeJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchRowBasic $userNotesJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\CampaignSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
