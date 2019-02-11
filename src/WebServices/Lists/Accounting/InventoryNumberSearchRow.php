<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * InventoryNumberSearchRow
 */
class InventoryNumberSearchRow extends SearchRow {

    /**
     * @access public
     * @var InventoryNumberSearchRowBasic
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

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "InventoryNumberSearchRowBasic",
    	"itemJoin" => "ItemSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param InventoryNumberSearchRowBasic $basic
     * @return InventoryNumberSearchRow
     */
    public function setBasic(InventoryNumberSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return InventoryNumberSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set itemJoin
     *
     * @param ItemSearchRowBasic $itemJoin
     * @return InventoryNumberSearchRow
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
     * @return InventoryNumberSearchRow
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