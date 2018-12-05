<?php

namespace Nzolt\NetSuite;

class CustomRecordSearch extends SearchRecord
{

    /**
     * @var CustomRecordSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var FileSearchBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var MessageSearchBasic $messagesJoin
     */
    protected $messagesJoin = null;

    /**
     * @var EmployeeSearchBasic $ownerJoin
     */
    protected $ownerJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var NoteSearchBasic $userNotesJoin
     */
    protected $userNotesJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomRecordSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CustomRecordSearchBasic $basic
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin()
    {
      return $this->fileJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
      return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesJoin()
    {
      return $this->messagesJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setMessagesJoin($messagesJoin)
    {
      $this->messagesJoin = $messagesJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getOwnerJoin()
    {
      return $this->ownerJoin;
    }

    /**
     * @param EmployeeSearchBasic $ownerJoin
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setOwnerJoin($ownerJoin)
    {
      $this->ownerJoin = $ownerJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin()
    {
      return $this->userNotesJoin;
    }

    /**
     * @param NoteSearchBasic $userNotesJoin
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setUserNotesJoin($userNotesJoin)
    {
      $this->userNotesJoin = $userNotesJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\CustomRecordSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
