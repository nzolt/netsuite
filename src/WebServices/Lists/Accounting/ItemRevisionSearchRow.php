<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * ItemRevisionSearchRow
 */
class ItemRevisionSearchRow extends SearchRow {

    /**
     * @access public
     * @var ItemRevisionSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var ItemSearchRowBasic
     */
    protected $itemJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "ItemRevisionSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param ItemRevisionSearchRowBasic $basic
     * @return ItemRevisionSearchRow
     */
    public function setBasic(ItemRevisionSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return ItemRevisionSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return ItemRevisionSearchRow
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
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return ItemRevisionSearchRow
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