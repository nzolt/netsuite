<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

use Nzolt\NetSuite\WebServices\Platform\Core\Passport;

/**
 * LoginRequest
 */
class LoginRequest {

    /**
     * @access public
     * @var Passport
     */
    protected $passport;

    static $paramtypesmap = array(
    	"passport" => "Passport",
    );

    /**
     * Set passport
     *
     * @param Passport $passport
     * @return LoginRequest
     */
    public function setPassport(Passport $passport) {
        $this->passport = $passport;
        return $this;
    }

    /**
     * Get passport
     *
     * @return Passport
     */
    public function getPassport() {
        return $this->passport;
    }

}