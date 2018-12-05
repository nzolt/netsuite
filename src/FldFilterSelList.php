<?php

namespace Nzolt\NetSuite;

class FldFilterSelList
{

    /**
     * @var RecordRef[] $fldFilterSel
     */
    protected $fldFilterSel = null;

    /**
     * @param RecordRef[] $fldFilterSel
     */
    public function __construct(array $fldFilterSel)
    {
      $this->fldFilterSel = $fldFilterSel;
    }

    /**
     * @return RecordRef[]
     */
    public function getFldFilterSel()
    {
      return $this->fldFilterSel;
    }

    /**
     * @param RecordRef[] $fldFilterSel
     * @return \Nzolt\NetSuite\FldFilterSelList
     */
    public function setFldFilterSel(array $fldFilterSel)
    {
      $this->fldFilterSel = $fldFilterSel;
      return $this;
    }

}
