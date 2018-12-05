<?php

namespace Nzolt\NetSuite;

class IssueVersion
{

    /**
     * @var boolean $primary
     */
    protected $primary = null;

    /**
     * @var RecordRef $version
     */
    protected $version = null;

    /**
     * @var RecordRef $build
     */
    protected $build = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getPrimary()
    {
      return $this->primary;
    }

    /**
     * @param boolean $primary
     * @return \Nzolt\NetSuite\IssueVersion
     */
    public function setPrimary($primary)
    {
      $this->primary = $primary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param RecordRef $version
     * @return \Nzolt\NetSuite\IssueVersion
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuild()
    {
      return $this->build;
    }

    /**
     * @param RecordRef $build
     * @return \Nzolt\NetSuite\IssueVersion
     */
    public function setBuild($build)
    {
      $this->build = $build;
      return $this;
    }

}
