<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomizationRef;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;

/**
 * CustomSearchJoin
 */
class CustomSearchJoin {

    /**
     * @access public
     * @var CustomizationRef
     */
    protected $customizationRef;

    /**
     * @access public
     * @var SearchRecordBasic
     */
    protected $searchRecordBasic;

    static $paramtypesmap = array(
    	"customizationRef" => "CustomizationRef",
    	"searchRecordBasic" => "SearchRecordBasic",
    );

    /**
     * Set customizationRef
     *
     * @param CustomizationRef $customizationRef
     * @return CustomSearchJoin
     */
    public function setCustomizationRef(CustomizationRef $customizationRef) {
        $this->customizationRef = $customizationRef;
        return $this;
    }

    /**
     * Get customizationRef
     *
     * @return CustomizationRef
     */
    public function getCustomizationRef() {
        return $this->customizationRef;
    }


    /**
     * Set searchRecordBasic
     *
     * @param SearchRecordBasic $searchRecordBasic
     * @return CustomSearchJoin
     */
    public function setSearchRecordBasic(SearchRecordBasic $searchRecordBasic) {
        $this->searchRecordBasic = $searchRecordBasic;
        return $this;
    }

    /**
     * Get searchRecordBasic
     *
     * @return SearchRecordBasic
     */
    public function getSearchRecordBasic() {
        return $this->searchRecordBasic;
    }

}