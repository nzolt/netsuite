<?php

namespace Nzolt\NetSuite;

class MatrixOptionList
{

    /**
     * @var SelectCustomFieldRef[] $matrixOption
     */
    protected $matrixOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SelectCustomFieldRef[]
     */
    public function getMatrixOption()
    {
      return $this->matrixOption;
    }

    /**
     * @param SelectCustomFieldRef[] $matrixOption
     * @return \Nzolt\NetSuite\MatrixOptionList
     */
    public function setMatrixOption(array $matrixOption = null)
    {
      $this->matrixOption = $matrixOption;
      return $this;
    }

}
