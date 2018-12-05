<?php

namespace Nzolt\NetSuite;

class EmployeeHrEducation
{

    /**
     * @var RecordRef $education
     */
    protected $education = null;

    /**
     * @var string $degree
     */
    protected $degree = null;

    /**
     * @var \DateTime $degreeDate
     */
    protected $degreeDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getEducation()
    {
      return $this->education;
    }

    /**
     * @param RecordRef $education
     * @return \Nzolt\NetSuite\EmployeeHrEducation
     */
    public function setEducation($education)
    {
      $this->education = $education;
      return $this;
    }

    /**
     * @return string
     */
    public function getDegree()
    {
      return $this->degree;
    }

    /**
     * @param string $degree
     * @return \Nzolt\NetSuite\EmployeeHrEducation
     */
    public function setDegree($degree)
    {
      $this->degree = $degree;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDegreeDate()
    {
      if ($this->degreeDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->degreeDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $degreeDate
     * @return \Nzolt\NetSuite\EmployeeHrEducation
     */
    public function setDegreeDate(\DateTime $degreeDate = null)
    {
      if ($degreeDate == null) {
       $this->degreeDate = null;
      } else {
        $this->degreeDate = $degreeDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
