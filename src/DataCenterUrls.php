<?php

namespace Nzolt\NetSuite;

class DataCenterUrls
{

    /**
     * @var string $restDomain
     */
    protected $restDomain = null;

    /**
     * @var string $webservicesDomain
     */
    protected $webservicesDomain = null;

    /**
     * @var string $systemDomain
     */
    protected $systemDomain = null;

    /**
     * @param string $restDomain
     * @param string $webservicesDomain
     * @param string $systemDomain
     */
    public function __construct($restDomain, $webservicesDomain, $systemDomain)
    {
      $this->restDomain = $restDomain;
      $this->webservicesDomain = $webservicesDomain;
      $this->systemDomain = $systemDomain;
    }

    /**
     * @return string
     */
    public function getRestDomain()
    {
      return $this->restDomain;
    }

    /**
     * @param string $restDomain
     * @return \Nzolt\NetSuite\DataCenterUrls
     */
    public function setRestDomain($restDomain)
    {
      $this->restDomain = $restDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebservicesDomain()
    {
      return $this->webservicesDomain;
    }

    /**
     * @param string $webservicesDomain
     * @return \Nzolt\NetSuite\DataCenterUrls
     */
    public function setWebservicesDomain($webservicesDomain)
    {
      $this->webservicesDomain = $webservicesDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemDomain()
    {
      return $this->systemDomain;
    }

    /**
     * @param string $systemDomain
     * @return \Nzolt\NetSuite\DataCenterUrls
     */
    public function setSystemDomain($systemDomain)
    {
      $this->systemDomain = $systemDomain;
      return $this;
    }

}
