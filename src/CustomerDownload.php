<?php

namespace Nzolt\NetSuite;

class CustomerDownload
{

    /**
     * @var RecordRef $file
     */
    protected $file = null;

    /**
     * @var string $licenseCode
     */
    protected $licenseCode = null;

    /**
     * @var int $remainingDownloads
     */
    protected $remainingDownloads = null;

    /**
     * @var \DateTime $expiration
     */
    protected $expiration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getFile()
    {
      return $this->file;
    }

    /**
     * @param RecordRef $file
     * @return \Nzolt\NetSuite\CustomerDownload
     */
    public function setFile($file)
    {
      $this->file = $file;
      return $this;
    }

    /**
     * @return string
     */
    public function getLicenseCode()
    {
      return $this->licenseCode;
    }

    /**
     * @param string $licenseCode
     * @return \Nzolt\NetSuite\CustomerDownload
     */
    public function setLicenseCode($licenseCode)
    {
      $this->licenseCode = $licenseCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getRemainingDownloads()
    {
      return $this->remainingDownloads;
    }

    /**
     * @param int $remainingDownloads
     * @return \Nzolt\NetSuite\CustomerDownload
     */
    public function setRemainingDownloads($remainingDownloads)
    {
      $this->remainingDownloads = $remainingDownloads;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
      if ($this->expiration == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expiration);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expiration
     * @return \Nzolt\NetSuite\CustomerDownload
     */
    public function setExpiration(\DateTime $expiration = null)
    {
      if ($expiration == null) {
       $this->expiration = null;
      } else {
        $this->expiration = $expiration->format(\DateTime::ATOM);
      }
      return $this;
    }

}
