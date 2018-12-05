<?php

namespace Nzolt\NetSuite;

class CustomerDownloadList
{

    /**
     * @var CustomerDownload[] $download
     */
    protected $download = null;

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
     * @return CustomerDownload[]
     */
    public function getDownload()
    {
      return $this->download;
    }

    /**
     * @param CustomerDownload[] $download
     * @return \Nzolt\NetSuite\CustomerDownloadList
     */
    public function setDownload(array $download = null)
    {
      $this->download = $download;
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
     * @return \Nzolt\NetSuite\CustomerDownloadList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
