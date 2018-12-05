<?php

namespace Nzolt\NetSuite;

class AssemblyItemBomSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $assembly
     */
    protected $assembly = null;

    /**
     * @var SearchMultiSelectField $billOfMaterials
     */
    protected $billOfMaterials = null;

    /**
     * @var SearchBooleanField $default
     */
    protected $default = null;

    /**
     * @var SearchMultiSelectField $locations
     */
    protected $locations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssembly()
    {
      return $this->assembly;
    }

    /**
     * @param SearchMultiSelectField $assembly
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchBasic
     */
    public function setAssembly($assembly)
    {
      $this->assembly = $assembly;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillOfMaterials()
    {
      return $this->billOfMaterials;
    }

    /**
     * @param SearchMultiSelectField $billOfMaterials
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchBasic
     */
    public function setBillOfMaterials($billOfMaterials)
    {
      $this->billOfMaterials = $billOfMaterials;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDefault()
    {
      return $this->default;
    }

    /**
     * @param SearchBooleanField $default
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchBasic
     */
    public function setDefault($default)
    {
      $this->default = $default;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocations()
    {
      return $this->locations;
    }

    /**
     * @param SearchMultiSelectField $locations
     * @return \Nzolt\NetSuite\AssemblyItemBomSearchBasic
     */
    public function setLocations($locations)
    {
      $this->locations = $locations;
      return $this;
    }

}
