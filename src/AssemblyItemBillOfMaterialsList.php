<?php

namespace Nzolt\NetSuite;

class AssemblyItemBillOfMaterialsList
{

    /**
     * @var AssemblyItemBillOfMaterials[] $assemblyItemBillOfMaterials
     */
    protected $assemblyItemBillOfMaterials = null;

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
     * @return AssemblyItemBillOfMaterials[]
     */
    public function getAssemblyItemBillOfMaterials()
    {
      return $this->assemblyItemBillOfMaterials;
    }

    /**
     * @param AssemblyItemBillOfMaterials[] $assemblyItemBillOfMaterials
     * @return \Nzolt\NetSuite\AssemblyItemBillOfMaterialsList
     */
    public function setAssemblyItemBillOfMaterials(array $assemblyItemBillOfMaterials = null)
    {
      $this->assemblyItemBillOfMaterials = $assemblyItemBillOfMaterials;
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
     * @return \Nzolt\NetSuite\AssemblyItemBillOfMaterialsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
