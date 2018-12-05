<?php

namespace Nzolt\NetSuite;

class LotNumberedAssemblyItemBillOfMaterialsList
{

    /**
     * @var LotNumberedAssemblyItemBillOfMaterials[] $lotNumberedAssemblyItemBillOfMaterials
     */
    protected $lotNumberedAssemblyItemBillOfMaterials = null;

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
     * @return LotNumberedAssemblyItemBillOfMaterials[]
     */
    public function getLotNumberedAssemblyItemBillOfMaterials()
    {
      return $this->lotNumberedAssemblyItemBillOfMaterials;
    }

    /**
     * @param LotNumberedAssemblyItemBillOfMaterials[] $lotNumberedAssemblyItemBillOfMaterials
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterialsList
     */
    public function setLotNumberedAssemblyItemBillOfMaterials(array $lotNumberedAssemblyItemBillOfMaterials = null)
    {
      $this->lotNumberedAssemblyItemBillOfMaterials = $lotNumberedAssemblyItemBillOfMaterials;
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
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterialsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
