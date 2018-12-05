<?php

namespace Nzolt\NetSuite;

class UnitsTypeUomList
{

    /**
     * @var UnitsTypeUom[] $uom
     */
    protected $uom = null;

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
     * @return UnitsTypeUom[]
     */
    public function getUom()
    {
      return $this->uom;
    }

    /**
     * @param UnitsTypeUom[] $uom
     * @return \Nzolt\NetSuite\UnitsTypeUomList
     */
    public function setUom(array $uom = null)
    {
      $this->uom = $uom;
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
     * @return \Nzolt\NetSuite\UnitsTypeUomList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
