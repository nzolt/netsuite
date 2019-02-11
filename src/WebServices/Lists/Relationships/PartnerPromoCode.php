<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * PartnerPromoCode
 */
class PartnerPromoCode {

    /**
     * @access public
     * @var RecordRef
     */
    public $promoCode;

    /**
     * @access public
     * @var string
     */
    protected $discount;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    static $paramtypesmap = array(
    	"promoCode" => "RecordRef",
    	"discount" => "string",
    	"endDate" => "dateTime",
    );

    /**
     * Set discount
     *
     * @param string $discount
     * @return PartnerPromoCode
     */
    public function setDiscount($discount) {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount() {
        return $this->discount;
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return PartnerPromoCode
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }

}