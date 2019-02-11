<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\FolderSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * FolderSearchRow
 */
class FolderSearchRow extends SearchRow {

    /**
     * @access public
     * @var FolderSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var FileSearchRowBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "FolderSearchRowBasic",
    	"fileJoin" => "FileSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param FolderSearchRowBasic $basic
     * @return FolderSearchRow
     */
    public function setBasic(FolderSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return FolderSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchRowBasic $fileJoin
     * @return FolderSearchRow
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
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return FolderSearchRow
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

}