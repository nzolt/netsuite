<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeLinks
{

    /**
     * @var RecordRef $linkCenter
     */
    protected $linkCenter = null;

    /**
     * @var RecordRef $linkSection
     */
    protected $linkSection = null;

    /**
     * @var string $linkLabel
     */
    protected $linkLabel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getLinkCenter()
    {
      return $this->linkCenter;
    }

    /**
     * @param RecordRef $linkCenter
     * @return \Nzolt\NetSuite\CustomRecordTypeLinks
     */
    public function setLinkCenter($linkCenter)
    {
      $this->linkCenter = $linkCenter;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLinkSection()
    {
      return $this->linkSection;
    }

    /**
     * @param RecordRef $linkSection
     * @return \Nzolt\NetSuite\CustomRecordTypeLinks
     */
    public function setLinkSection($linkSection)
    {
      $this->linkSection = $linkSection;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkLabel()
    {
      return $this->linkLabel;
    }

    /**
     * @param string $linkLabel
     * @return \Nzolt\NetSuite\CustomRecordTypeLinks
     */
    public function setLinkLabel($linkLabel)
    {
      $this->linkLabel = $linkLabel;
      return $this;
    }

}
