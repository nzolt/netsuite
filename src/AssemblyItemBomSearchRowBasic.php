<?php

namespace Nzolt\NetSuite;

class AssemblyItemBomSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $assembly
     */
    protected $assembly = null;

    /**
     * @var SearchColumnSelectField[] $billOfMaterials
     */
    protected $billOfMaterials = null;

    /**
     * @var SearchColumnBooleanField[] $default
     */
    protected $default = null;

    /**
     * @var SearchColumnSelectField[] $locations
     */
    protected $locations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssembly()
    {
      return $this->assembly;
    }

    /**
     * @param SearchColumnSelectField[] $assembly
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchRowBasic
     */
    public function setAssembly(array $assembly = null)
    {
      $this->assembly = $assembly;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillOfMaterials()
    {
      return $this->billOfMaterials;
    }

    /**
     * @param SearchColumnSelectField[] $billOfMaterials
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchRowBasic
     */
    public function setBillOfMaterials(array $billOfMaterials = null)
    {
      $this->billOfMaterials = $billOfMaterials;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDefault()
    {
      return $this->default;
    }

    /**
     * @param SearchColumnBooleanField[] $default
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchRowBasic
     */
    public function setDefault(array $default = null)
    {
      $this->default = $default;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param SearchColumnSelectField[] $locations
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchRowBasic
     */
    public function setLocations(array $locations = null)
    {
      $this->locations = $locations;
      return $this;
    }

}
