<?php

namespace Nzolt\NetSuite;

class SalesOrderPartnersList
{

    /**
     * @var Partners[] $partners
     */
    protected $partners = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return Partners[]
     */
    public function getPartners()
    {
      return $this->partners;
    }

    /**
     * @param Partners[] $partners
     * @return \Nzolt\NetSuite\SalesOrderPartnersList
     */
    public function setPartners(array $partners = null)
    {
      $this->partners = $partners;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\SalesOrderPartnersList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
