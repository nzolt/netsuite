<?php

namespace Nzolt\NetSuite;

class ClassTranslationList
{

    /**
     * @var ClassTranslation[] $classTranslation
     */
    protected $classTranslation = null;

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
     * @return ClassTranslation[]
     */
    public function getClassTranslation()
    {
      return $this->classTranslation;
    }

    /**
     * @param ClassTranslation[] $classTranslation
     * @return \Nzolt\NetSuite\ClassTranslationList
     */
    public function setClassTranslation(array $classTranslation = null)
    {
      $this->classTranslation = $classTranslation;
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
     * @return \Nzolt\NetSuite\ClassTranslationList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
