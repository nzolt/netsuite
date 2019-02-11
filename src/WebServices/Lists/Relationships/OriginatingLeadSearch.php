<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic;

/**
 * OriginatingLeadSearch
 */
class OriginatingLeadSearch extends SearchRecord {

    /**
     * @access public
     * @var OriginatingLeadSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "OriginatingLeadSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param OriginatingLeadSearchBasic $basic
     * @return OriginatingLeadSearch
     */
    public function setBasic(OriginatingLeadSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return OriginatingLeadSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }

}