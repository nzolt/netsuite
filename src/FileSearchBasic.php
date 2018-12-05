<?php

namespace Nzolt\NetSuite;

class FileSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchBooleanField $availableWithoutLogin
     */
    protected $availableWithoutLogin = null;

    /**
     * @var SearchDateField $created
     */
    protected $created = null;

    /**
     * @var SearchDateField $dateViewed
     */
    protected $dateViewed = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchLongField $documentSize
     */
    protected $documentSize = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchEnumMultiSelectField $fileType
     */
    protected $fileType = null;

    /**
     * @var SearchMultiSelectField $folder
     */
    protected $folder = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isAvailable
     */
    protected $isAvailable = null;

    /**
     * @var SearchBooleanField $isLink
     */
    protected $isLink = null;

    /**
     * @var SearchDateField $modified
     */
    protected $modified = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchMultiSelectField $owner
     */
    protected $owner = null;

    /**
     * @var SearchStringField $url
     */
    protected $url = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableWithoutLogin()
    {
      return $this->availableWithoutLogin;
    }

    /**
     * @param SearchBooleanField $availableWithoutLogin
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setAvailableWithoutLogin($availableWithoutLogin)
    {
      $this->availableWithoutLogin = $availableWithoutLogin;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param SearchDateField $created
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setCreated($created)
    {
      $this->created = $created;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateViewed()
    {
      return $this->dateViewed;
    }

    /**
     * @param SearchDateField $dateViewed
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setDateViewed($dateViewed)
    {
      $this->dateViewed = $dateViewed;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDocumentSize()
    {
      return $this->documentSize;
    }

    /**
     * @param SearchLongField $documentSize
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setDocumentSize($documentSize)
    {
      $this->documentSize = $documentSize;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFileType()
    {
      return $this->fileType;
    }

    /**
     * @param SearchEnumMultiSelectField $fileType
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setFileType($fileType)
    {
      $this->fileType = $fileType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFolder()
    {
      return $this->folder;
    }

    /**
     * @param SearchMultiSelectField $folder
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setFolder($folder)
    {
      $this->folder = $folder;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAvailable()
    {
      return $this->isAvailable;
    }

    /**
     * @param SearchBooleanField $isAvailable
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setIsAvailable($isAvailable)
    {
      $this->isAvailable = $isAvailable;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsLink()
    {
      return $this->isLink;
    }

    /**
     * @param SearchBooleanField $isLink
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setIsLink($isLink)
    {
      $this->isLink = $isLink;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getModified()
    {
      return $this->modified;
    }

    /**
     * @param SearchDateField $modified
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setModified($modified)
    {
      $this->modified = $modified;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param SearchStringField $url
     * @return \Nzolt\NetSuite\FileSearchBasic
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
