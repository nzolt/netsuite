<?php

namespace Nzolt\NetSuite;

class FolderSearchRow extends SearchRow
{

    /**
     * @var FolderSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var FileSearchRowBasic $fileJoin
     */
    protected $fileJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FolderSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param FolderSearchRowBasic $basic
     * @return \Nzolt\NetSuite\FolderSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
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
     * @return \Nzolt\NetSuite\FolderSearchRow
     */
    public function setFileJoin($fileJoin)
    {
      $this->fileJoin = $fileJoin;
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
     * @return \Nzolt\NetSuite\FolderSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
