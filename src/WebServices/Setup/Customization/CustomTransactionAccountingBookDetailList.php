<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomTransactionAccountingBookDetailList
 */
class CustomTransactionAccountingBookDetailList {

    /**
     * @access public
     * @var CustomTransactionAccountingBookDetail[]
     */
    public $customTransactionAccountingBookDetail;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"customTransactionAccountingBookDetail" => "CustomTransactionAccountingBookDetail[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return CustomTransactionAccountingBookDetailList
     */
    public function setReplaceAll($replaceAll) {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * Get replaceAll
     *
     * @return boolean
     */
    public function getReplaceAll() {
        return $this->replaceAll;
    }

}