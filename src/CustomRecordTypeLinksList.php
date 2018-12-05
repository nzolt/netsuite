<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeLinksList
{

    /**
     * @var CustomRecordTypeLinks[] $links
     */
    protected $links = null;

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
     * @return CustomRecordTypeLinks[]
     */
    public function getLinks()
    {
      return $this->links;
    }

    /**
     * @param CustomRecordTypeLinks[] $links
     * @return \Nzolt\NetSuite\CustomRecordTypeLinksList
     */
    public function setLinks(array $links = null)
    {
      $this->links = $links;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeLinksList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
