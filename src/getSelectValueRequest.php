<?php

namespace Nzolt\NetSuite;

class getSelectValueRequest
{

    /**
     * @var GetSelectValueFieldDescription $fieldDescription
     */
    protected $fieldDescription = null;

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @param GetSelectValueFieldDescription $fieldDescription
     * @param int $pageIndex
     */
    public function __construct($fieldDescription, $pageIndex)
    {
      $this->fieldDescription = $fieldDescription;
      $this->pageIndex = $pageIndex;
    }

    /**
     * @return GetSelectValueFieldDescription
     */
    public function getFieldDescription()
    {
      return $this->fieldDescription;
    }

    /**
     * @param GetSelectValueFieldDescription $fieldDescription
     * @return \Nzolt\NetSuite\getSelectValueRequest
     */
    public function setFieldDescription($fieldDescription)
    {
      $this->fieldDescription = $fieldDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
      return $this->pageIndex;
    }

    /**
     * @param int $pageIndex
     * @return \Nzolt\NetSuite\getSelectValueRequest
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

}
