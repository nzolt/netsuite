<?php

namespace Nzolt\NetSuite;

class SubsidiaryNexusList
{

    /**
     * @var SubsidiaryNexus[] $nexus
     */
    protected $nexus = null;

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
     * @return SubsidiaryNexus[]
     */
    public function getNexus()
    {
      return $this->nexus;
    }

    /**
     * @param SubsidiaryNexus[] $nexus
     * @return \Nzolt\NetSuite\SubsidiaryNexusList
     */
    public function setNexus(array $nexus = null)
    {
      $this->nexus = $nexus;
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
     * @return \Nzolt\NetSuite\SubsidiaryNexusList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
