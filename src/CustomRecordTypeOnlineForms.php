<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeOnlineForms
{

    /**
     * @var string $onlineFormName
     */
    protected $onlineFormName = null;

    /**
     * @var string $isOnline
     */
    protected $isOnline = null;

    /**
     * @var string $templateName
     */
    protected $templateName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOnlineFormName()
    {
      return $this->onlineFormName;
    }

    /**
     * @param string $onlineFormName
     * @return \Nzolt\NetSuite\CustomRecordTypeOnlineForms
     */
    public function setOnlineFormName($onlineFormName)
    {
      $this->onlineFormName = $onlineFormName;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param string $isOnline
     * @return \Nzolt\NetSuite\CustomRecordTypeOnlineForms
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
      return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return \Nzolt\NetSuite\CustomRecordTypeOnlineForms
     */
    public function setTemplateName($templateName)
    {
      $this->templateName = $templateName;
      return $this;
    }

}
