<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskPredecessorList
{

    /**
     * @var ManufacturingOperationTaskPredecessor[] $manufacturingOperationTaskPredecessor
     */
    protected $manufacturingOperationTaskPredecessor = null;

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
     * @return ManufacturingOperationTaskPredecessor[]
     */
    public function getManufacturingOperationTaskPredecessor()
    {
      return $this->manufacturingOperationTaskPredecessor;
    }

    /**
     * @param ManufacturingOperationTaskPredecessor[] $manufacturingOperationTaskPredecessor
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessorList
     */
    public function setManufacturingOperationTaskPredecessor(array $manufacturingOperationTaskPredecessor = null)
    {
      $this->manufacturingOperationTaskPredecessor = $manufacturingOperationTaskPredecessor;
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
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskPredecessorList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
