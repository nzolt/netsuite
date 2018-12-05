<?php

namespace Nzolt\NetSuite;

class File extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var FileAttachFrom $attachFrom
     */
    protected $attachFrom = null;

    /**
     * @var string $mediaTypeName
     */
    protected $mediaTypeName = null;

    /**
     * @var MediaType $fileType
     */
    protected $fileType = null;

    /**
     * @var base64Binary $content
     */
    protected $content = null;

    /**
     * @var RecordRef $folder
     */
    protected $folder = null;

    /**
     * @var float $fileSize
     */
    protected $fileSize = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $urlComponent
     */
    protected $urlComponent = null;

    /**
     * @var RecordRef $mediaFile
     */
    protected $mediaFile = null;

    /**
     * @var TextFileEncoding $textFileEncoding
     */
    protected $textFileEncoding = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var FileEncoding $encoding
     */
    protected $encoding = null;

    /**
     * @var string $altTagCaption
     */
    protected $altTagCaption = null;

    /**
     * @var boolean $isOnline
     */
    protected $isOnline = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $class
     */
    protected $class = null;

    /**
     * @var boolean $bundleable
     */
    protected $bundleable = null;

    /**
     * @var string $department
     */
    protected $department = null;

    /**
     * @var boolean $hideInBundle
     */
    protected $hideInBundle = null;

    /**
     * @var boolean $isPrivate
     */
    protected $isPrivate = null;

    /**
     * @var RecordRef $owner
     */
    protected $owner = null;

    /**
     * @var string $caption
     */
    protected $caption = null;

    /**
     * @var RecordRef $storeDisplayThumbnail
     */
    protected $storeDisplayThumbnail = null;

    /**
     * @var string $siteDescription
     */
    protected $siteDescription = null;

    /**
     * @var string $featuredDescription
     */
    protected $featuredDescription = null;

    /**
     * @var \DateTime $lastModifiedDate
     */
    protected $lastModifiedDate = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var FileSiteCategoryList $siteCategoryList
     */
    protected $siteCategoryList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\File
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return FileAttachFrom
     */
    public function getAttachFrom()
    {
      return $this->attachFrom;
    }

    /**
     * @param FileAttachFrom $attachFrom
     * @return \Nzolt\NetSuite\File
     */
    public function setAttachFrom($attachFrom)
    {
      $this->attachFrom = $attachFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaTypeName()
    {
      return $this->mediaTypeName;
    }

    /**
     * @param string $mediaTypeName
     * @return \Nzolt\NetSuite\File
     */
    public function setMediaTypeName($mediaTypeName)
    {
      $this->mediaTypeName = $mediaTypeName;
      return $this;
    }

    /**
     * @return MediaType
     */
    public function getFileType()
    {
      return $this->fileType;
    }

    /**
     * @param MediaType $fileType
     * @return \Nzolt\NetSuite\File
     */
    public function setFileType($fileType)
    {
      $this->fileType = $fileType;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param base64Binary $content
     * @return \Nzolt\NetSuite\File
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFolder()
    {
      return $this->folder;
    }

    /**
     * @param RecordRef $folder
     * @return \Nzolt\NetSuite\File
     */
    public function setFolder($folder)
    {
      $this->folder = $folder;
      return $this;
    }

    /**
     * @return float
     */
    public function getFileSize()
    {
      return $this->fileSize;
    }

    /**
     * @param float $fileSize
     * @return \Nzolt\NetSuite\File
     */
    public function setFileSize($fileSize)
    {
      $this->fileSize = $fileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Nzolt\NetSuite\File
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent()
    {
      return $this->urlComponent;
    }

    /**
     * @param string $urlComponent
     * @return \Nzolt\NetSuite\File
     */
    public function setUrlComponent($urlComponent)
    {
      $this->urlComponent = $urlComponent;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMediaFile()
    {
      return $this->mediaFile;
    }

    /**
     * @param RecordRef $mediaFile
     * @return \Nzolt\NetSuite\File
     */
    public function setMediaFile($mediaFile)
    {
      $this->mediaFile = $mediaFile;
      return $this;
    }

    /**
     * @return TextFileEncoding
     */
    public function getTextFileEncoding()
    {
      return $this->textFileEncoding;
    }

    /**
     * @param TextFileEncoding $textFileEncoding
     * @return \Nzolt\NetSuite\File
     */
    public function setTextFileEncoding($textFileEncoding)
    {
      $this->textFileEncoding = $textFileEncoding;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\File
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return FileEncoding
     */
    public function getEncoding()
    {
      return $this->encoding;
    }

    /**
     * @param FileEncoding $encoding
     * @return \Nzolt\NetSuite\File
     */
    public function setEncoding($encoding)
    {
      $this->encoding = $encoding;
      return $this;
    }

    /**
     * @return string
     */
    public function getAltTagCaption()
    {
      return $this->altTagCaption;
    }

    /**
     * @param string $altTagCaption
     * @return \Nzolt\NetSuite\File
     */
    public function setAltTagCaption($altTagCaption)
    {
      $this->altTagCaption = $altTagCaption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOnline()
    {
      return $this->isOnline;
    }

    /**
     * @param boolean $isOnline
     * @return \Nzolt\NetSuite\File
     */
    public function setIsOnline($isOnline)
    {
      $this->isOnline = $isOnline;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\File
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param string $class
     * @return \Nzolt\NetSuite\File
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBundleable()
    {
      return $this->bundleable;
    }

    /**
     * @param boolean $bundleable
     * @return \Nzolt\NetSuite\File
     */
    public function setBundleable($bundleable)
    {
      $this->bundleable = $bundleable;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param string $department
     * @return \Nzolt\NetSuite\File
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideInBundle()
    {
      return $this->hideInBundle;
    }

    /**
     * @param boolean $hideInBundle
     * @return \Nzolt\NetSuite\File
     */
    public function setHideInBundle($hideInBundle)
    {
      $this->hideInBundle = $hideInBundle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
      return $this->isPrivate;
    }

    /**
     * @param boolean $isPrivate
     * @return \Nzolt\NetSuite\File
     */
    public function setIsPrivate($isPrivate)
    {
      $this->isPrivate = $isPrivate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param RecordRef $owner
     * @return \Nzolt\NetSuite\File
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
      return $this->caption;
    }

    /**
     * @param string $caption
     * @return \Nzolt\NetSuite\File
     */
    public function setCaption($caption)
    {
      $this->caption = $caption;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail()
    {
      return $this->storeDisplayThumbnail;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return \Nzolt\NetSuite\File
     */
    public function setStoreDisplayThumbnail($storeDisplayThumbnail)
    {
      $this->storeDisplayThumbnail = $storeDisplayThumbnail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiteDescription()
    {
      return $this->siteDescription;
    }

    /**
     * @param string $siteDescription
     * @return \Nzolt\NetSuite\File
     */
    public function setSiteDescription($siteDescription)
    {
      $this->siteDescription = $siteDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedDescription()
    {
      return $this->featuredDescription;
    }

    /**
     * @param string $featuredDescription
     * @return \Nzolt\NetSuite\File
     */
    public function setFeaturedDescription($featuredDescription)
    {
      $this->featuredDescription = $featuredDescription;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->lastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastModifiedDate
     * @return \Nzolt\NetSuite\File
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate = null)
    {
      if ($lastModifiedDate == null) {
       $this->lastModifiedDate = null;
      } else {
        $this->lastModifiedDate = $lastModifiedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Nzolt\NetSuite\File
     */
    public function setCreatedDate(\DateTime $createdDate = null)
    {
      if ($createdDate == null) {
       $this->createdDate = null;
      } else {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return FileSiteCategoryList
     */
    public function getSiteCategoryList()
    {
      return $this->siteCategoryList;
    }

    /**
     * @param FileSiteCategoryList $siteCategoryList
     * @return \Nzolt\NetSuite\File
     */
    public function setSiteCategoryList($siteCategoryList)
    {
      $this->siteCategoryList = $siteCategoryList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\File
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\File
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
