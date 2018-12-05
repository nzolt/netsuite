<?php

namespace Nzolt\NetSuite;

class TaxTypeNexusesTaxList
{

    /**
     * @var TaxTypeNexusesTax[] $nexusesTax
     */
    protected $nexusesTax = null;

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
     * @return TaxTypeNexusesTax[]
     */
    public function getNexusesTax()
    {
      return $this->nexusesTax;
    }

    /**
     * @param TaxTypeNexusesTax[] $nexusesTax
     * @return \Nzolt\NetSuite\TaxTypeNexusesTaxList
     */
    public function setNexusesTax(array $nexusesTax = null)
    {
      $this->nexusesTax = $nexusesTax;
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
     * @return \Nzolt\NetSuite\TaxTypeNexusesTaxList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
