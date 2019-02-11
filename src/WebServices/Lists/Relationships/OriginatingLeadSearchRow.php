<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic;

/**
 * OriginatingLeadSearchRow
 */
class OriginatingLeadSearchRow extends SearchRow {

    /**
     * @access public
     * @var OriginatingLeadSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "OriginatingLeadSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param OriginatingLeadSearchRowBasic $basic
     * @return OriginatingLeadSearchRow
     */
    public function setBasic(OriginatingLeadSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return OriginatingLeadSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}