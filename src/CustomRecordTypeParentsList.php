<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeParentsList
{

    /**
     * @var CustomRecordTypeParents[] $parents
     */
    protected $parents = null;

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
     * @return CustomRecordTypeParents[]
     */
    public function getParents()
    {
      return $this->parents;
    }

    /**
     * @param CustomRecordTypeParents[] $parents
     * @return \Nzolt\NetSuite\CustomRecordTypeParentsList
     */
    public function setParents(array $parents = null)
    {
      $this->parents = $parents;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeParentsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
