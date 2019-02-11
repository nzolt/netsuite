<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeHrEducation
 */
class EmployeeHrEducation {

    /**
     * @access public
     * @var RecordRef
     */
    public $education;

    /**
     * @access public
     * @var string
     */
    protected $degree;

    /**
     * @access public
     * @var dateTime
     */
    protected $degreeDate;

    static $paramtypesmap = array(
    	"education" => "RecordRef",
    	"degree" => "string",
    	"degreeDate" => "dateTime",
    );

    /**
     * Set degree
     *
     * @param string $degree
     * @return EmployeeHrEducation
     */
    public function setDegree($degree) {
        $this->degree = $degree;
        return $this;
    }

    /**
     * Get degree
     *
     * @return string
     */
    public function getDegree() {
        return $this->degree;
    }


    /**
     * Set degreeDate
     *
     * @param \DateTime $degreeDate
     * @return EmployeeHrEducation
     */
    public function setDegreeDate(\DateTime $degreeDate) {
        $this->degreeDate = $degreeDate->format('c');
        return $this;
    }

    /**
     * Get degreeDate
     *
     * @return \DateTime
     */
    public function getDegreeDate() {
        return new \DateTime($this->degreeDate);
    }

}