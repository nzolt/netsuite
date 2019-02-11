<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * RevRecTemplateRecurrence
 */
class RevRecTemplateRecurrence {

    /**
     * @access public
     * @var RecordRef
     */
    public $incomeaccount;

    /**
     * @access public
     * @var integer
     */
    protected $periodOffset;

    /**
     * @access public
     * @var string
     */
    protected $recamount;

    static $paramtypesmap = array(
    	"incomeaccount" => "RecordRef",
    	"periodOffset" => "integer",
    	"recamount" => "string",
    );

    /**
     * Set periodOffset
     *
     * @param integer $periodOffset
     * @return RevRecTemplateRecurrence
     */
    public function setPeriodOffset($periodOffset) {
        $this->periodOffset = $periodOffset;
        return $this;
    }

    /**
     * Get periodOffset
     *
     * @return integer
     */
    public function getPeriodOffset() {
        return $this->periodOffset;
    }


    /**
     * Set recamount
     *
     * @param string $recamount
     * @return RevRecTemplateRecurrence
     */
    public function setRecamount($recamount) {
        $this->recamount = $recamount;
        return $this;
    }

    /**
     * Get recamount
     *
     * @return string
     */
    public function getRecamount() {
        return $this->recamount;
    }

}