<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\GetSelectValueFieldDescription;

/**
 * getSelectValueRequest
 */
class getSelectValueRequest {

    /**
     * @access public
     * @var GetSelectValueFieldDescription
     */
    protected $fieldDescription;

    /**
     * @access public
     * @var integer
     */
    protected $pageIndex;

    static $paramtypesmap = array(
    	"fieldDescription" => "GetSelectValueFieldDescription",
    	"pageIndex" => "integer",
    );

    /**
     * Set fieldDescription
     *
     * @param GetSelectValueFieldDescription $fieldDescription
     * @return getSelectValueRequest
     */
    public function setFieldDescription(GetSelectValueFieldDescription $fieldDescription) {
        $this->fieldDescription = $fieldDescription;
        return $this;
    }

    /**
     * Get fieldDescription
     *
     * @return GetSelectValueFieldDescription
     */
    public function getFieldDescription() {
        return $this->fieldDescription;
    }


    /**
     * Set pageIndex
     *
     * @param integer $pageIndex
     * @return getSelectValueRequest
     */
    public function setPageIndex($pageIndex) {
        $this->pageIndex = $pageIndex;
        return $this;
    }

    /**
     * Get pageIndex
     *
     * @return integer
     */
    public function getPageIndex() {
        return $this->pageIndex;
    }

}