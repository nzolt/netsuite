<?php

namespace Nzolt\NetSuite;

class State extends Record
{

    /**
     * @var Country $country
     */
    protected $country = null;

    /**
     * @var string $fullName
     */
    protected $fullName = null;

    /**
     * @var string $shortname
     */
    protected $shortname = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param Country $country
     * @return \Nzolt\NetSuite\State
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
      return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return \Nzolt\NetSuite\State
     */
    public function setFullName($fullName)
    {
      $this->fullName = $fullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortname()
    {
      return $this->shortname;
    }

    /**
     * @param string $shortname
     * @return \Nzolt\NetSuite\State
     */
    public function setShortname($shortname)
    {
      $this->shortname = $shortname;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\State
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
