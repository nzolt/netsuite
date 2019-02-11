<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\FolderSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * FolderSearch
 */
class FolderSearch extends SearchRecord {

    /**
     * @access public
     * @var FolderSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var FileSearchBasic
     */
    protected $fileJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "FolderSearchBasic",
    	"fileJoin" => "FileSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param FolderSearchBasic $basic
     * @return FolderSearch
     */
    public function setBasic(FolderSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return FolderSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set fileJoin
     *
     * @param FileSearchBasic $fileJoin
     * @return FolderSearch
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
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return FolderSearch
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

}