<?php

namespace Nzolt\NetSuite;

class SerializedAssemblyItemBillOfMaterialsList
{

    /**
     * @var SerializedAssemblyItemBillOfMaterials[] $serializedAssemblyItemBillOfMaterials
     */
    protected $serializedAssemblyItemBillOfMaterials = null;

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
     * @return SerializedAssemblyItemBillOfMaterials[]
     */
    public function getSerializedAssemblyItemBillOfMaterials()
    {
      return $this->serializedAssemblyItemBillOfMaterials;
    }

    /**
     * @param SerializedAssemblyItemBillOfMaterials[] $serializedAssemblyItemBillOfMaterials
     * @return \Nzolt\NetSuite\SerializedAssemblyItemBillOfMaterialsList
     */
    public function setSerializedAssemblyItemBillOfMaterials(array $serializedAssemblyItemBillOfMaterials = null)
    {
      $this->serializedAssemblyItemBillOfMaterials = $serializedAssemblyItemBillOfMaterials;
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
     * @return \Nzolt\NetSuite\SerializedAssemblyItemBillOfMaterialsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
