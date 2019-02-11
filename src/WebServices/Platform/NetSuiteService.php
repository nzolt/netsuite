<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform;

use Nzolt\NetSuite\WebServices\LoginRequest;
use Nzolt\NetSuite\WebServices\SsoLoginRequest;
use Nzolt\NetSuite\WebServices\MapSsoRequest;
use Nzolt\NetSuite\WebServices\ChangePasswordRequest;
use Nzolt\NetSuite\WebServices\ChangeEmailRequest;
use Nzolt\NetSuite\WebServices\LogoutRequest;
use Nzolt\NetSuite\WebServices\AddRequest;
use Nzolt\NetSuite\WebServices\DeleteRequest;
use Nzolt\NetSuite\WebServices\SearchRequest;
use Nzolt\NetSuite\WebServices\SearchMoreRequest;
use Nzolt\NetSuite\WebServices\SearchMoreWithIdRequest;
use Nzolt\NetSuite\WebServices\SearchNextRequest;
use Nzolt\NetSuite\WebServices\UpdateRequest;
use Nzolt\NetSuite\WebServices\UpsertRequest;
use Nzolt\NetSuite\WebServices\AddListRequest;
use Nzolt\NetSuite\WebServices\DeleteListRequest;
use Nzolt\NetSuite\WebServices\UpdateListRequest;
use Nzolt\NetSuite\WebServices\UpsertListRequest;
use Nzolt\NetSuite\WebServices\GetRequest;
use Nzolt\NetSuite\WebServices\GetListRequest;
use Nzolt\NetSuite\WebServices\GetAllRequest;
use Nzolt\NetSuite\WebServices\GetSavedSearchRequest;
use Nzolt\NetSuite\WebServices\GetCustomizationIdRequest;
use Nzolt\NetSuite\WebServices\InitializeRequest;
use Nzolt\NetSuite\WebServices\InitializeListRequest;
use Nzolt\NetSuite\WebServices\getSelectValueRequest;
use Nzolt\NetSuite\WebServices\GetItemAvailabilityRequest;
use Nzolt\NetSuite\WebServices\GetBudgetExchangeRateRequest;
use Nzolt\NetSuite\WebServices\GetConsolidatedExchangeRateRequest;
use Nzolt\NetSuite\WebServices\GetCurrencyRateRequest;
use Nzolt\NetSuite\WebServices\GetDataCenterUrlsRequest;
use Nzolt\NetSuite\WebServices\GetPostingTransactionSummaryRequest;
use Nzolt\NetSuite\WebServices\GetServerTimeRequest;
use Nzolt\NetSuite\WebServices\AttachRequest;
use Nzolt\NetSuite\WebServices\DetachRequest;
use Nzolt\NetSuite\WebServices\UpdateInviteeStatusRequest;
use Nzolt\NetSuite\WebServices\UpdateInviteeStatusListRequest;
use Nzolt\NetSuite\WebServices\AsyncAddListRequest;
use Nzolt\NetSuite\WebServices\AsyncUpdateListRequest;
use Nzolt\NetSuite\WebServices\AsyncUpsertListRequest;
use Nzolt\NetSuite\WebServices\AsyncDeleteListRequest;
use Nzolt\NetSuite\WebServices\AsyncGetListRequest;
use Nzolt\NetSuite\WebServices\AsyncInitializeListRequest;
use Nzolt\NetSuite\WebServices\AsyncSearchRequest;
use Nzolt\NetSuite\WebServices\GetAsyncResultRequest;
use Nzolt\NetSuite\WebServices\CheckAsyncStatusRequest;
use Nzolt\NetSuite\WebServices\GetDeletedRequest;

/**
 * NetSuiteService
 * @author NetSuite, Inc
 */
class NetSuiteService extends NSPHPClient {

    public $generated_from_endpoint = "2015_1";

    /**
     * Class map for wsdl=>php
     * @var array
     */
    protected $classmap = array(
        'RecordType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\RecordType',
        'SearchRecordType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchRecordType',
        'GetAllRecordType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\GetAllRecordType',
        'GetCustomizationType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\GetCustomizationType',
        'InitializeType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\InitializeType',
        'InitializeRefType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\InitializeRefType',
        'InitializeAuxRefType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\InitializeAuxRefType',
        'DeletedRecordType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\DeletedRecordType',
        'AsyncStatusType' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\AsyncStatusType',
        'SearchStringFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchStringFieldOperator',
        'SearchLongFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchLongFieldOperator',
        'SearchTextNumberFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchTextNumberFieldOperator',
        'SearchDoubleFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchDoubleFieldOperator',
        'SearchDateFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchDateFieldOperator',
        'SearchEnumMultiSelectFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchEnumMultiSelectFieldOperator',
        'SearchMultiSelectFieldOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchMultiSelectFieldOperator',
        'SearchDate' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\SearchDate',
        'DurationUnit' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\DurationUnit',
        'CalendarEventAttendeeResponse' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\CalendarEventAttendeeResponse',
        'GetSelectValueFilterOperator' => 'Nzolt\NetSuite\WebServices\Platform\Core\Types\GetSelectValueFilterOperator',
        'StatusDetailType' => 'Nzolt\NetSuite\WebServices\Platform\Faults\Types\StatusDetailType',
        'StatusDetailCodeType' => 'Nzolt\NetSuite\WebServices\Platform\Faults\Types\StatusDetailCodeType',
        'FaultCodeType' => 'Nzolt\NetSuite\WebServices\Platform\Faults\Types\FaultCodeType',
        'Passport' => 'Nzolt\NetSuite\WebServices\Platform\Core\Passport',
        'SsoPassport' => 'Nzolt\NetSuite\WebServices\Platform\Core\SsoPassport',
        'SsoCredentials' => 'Nzolt\NetSuite\WebServices\Platform\Core\SsoCredentials',
        'ChangePassword' => 'Nzolt\NetSuite\WebServices\Platform\Core\ChangePassword',
        'ChangeEmail' => 'Nzolt\NetSuite\WebServices\Platform\Core\ChangeEmail',
        'StatusDetail' => 'Nzolt\NetSuite\WebServices\Platform\Core\StatusDetail',
        'Status' => 'Nzolt\NetSuite\WebServices\Platform\Core\Status',
        'WsRole' => 'Nzolt\NetSuite\WebServices\Platform\Core\WsRole',
        'WsRoleList' => 'Nzolt\NetSuite\WebServices\Platform\Core\WsRoleList',
        'Record' => 'Nzolt\NetSuite\WebServices\Platform\Core\Record',
        'NullField' => 'Nzolt\NetSuite\WebServices\Platform\Core\NullField',
        'SearchRecord' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord',
        'SearchRecordBasic' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic',
        'SearchRow' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchRow',
        'SearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchRowBasic',
        'SearchResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchResult',
        'AsyncStatusResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\AsyncStatusResult',
        'GetAllResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetAllResult',
        'GetSavedSearchResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSavedSearchResult',
        'GetCustomizationIdResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetCustomizationIdResult',
        'GetSelectValueResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSelectValueResult',
        'RecordList' => 'Nzolt\NetSuite\WebServices\Platform\Core\RecordList',
        'SearchRowList' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchRowList',
        'RecordRefList' => 'Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList',
        'BaseRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\BaseRef',
        'BaseRefList' => 'Nzolt\NetSuite\WebServices\Platform\Core\BaseRefList',
        'RecordRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\RecordRef',
        'Duration' => 'Nzolt\NetSuite\WebServices\Platform\Core\Duration',
        'CustomRecordRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomRecordRef',
        'CustomTransactionRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomTransactionRef',
        'CustomizationRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomizationRef',
        'CustomizationRefList' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomizationRefList',
        'InitializeRecord' => 'Nzolt\NetSuite\WebServices\Platform\Core\InitializeRecord',
        'InitializeRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\InitializeRef',
        'InitializeRefList' => 'Nzolt\NetSuite\WebServices\Platform\Core\InitializeRefList',
        'InitializeAuxRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\InitializeAuxRef',
        'UpdateInviteeStatusReference' => 'Nzolt\NetSuite\WebServices\Platform\Core\UpdateInviteeStatusReference',
        'GetAllRecord' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetAllRecord',
        'GetSavedSearchRecord' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSavedSearchRecord',
        'CustomizationType' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomizationType',
        'ListOrRecordRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\ListOrRecordRef',
        'CustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldRef',
        'LongCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\LongCustomFieldRef',
        'DoubleCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\DoubleCustomFieldRef',
        'BooleanCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\BooleanCustomFieldRef',
        'StringCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\StringCustomFieldRef',
        'DateCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\DateCustomFieldRef',
        'SelectCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\SelectCustomFieldRef',
        'MultiSelectCustomFieldRef' => 'Nzolt\NetSuite\WebServices\Platform\Core\MultiSelectCustomFieldRef',
        'CustomFieldList' => 'Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList',
        'SearchBooleanField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanField',
        'SearchStringField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchStringField',
        'SearchLongField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchLongField',
        'SearchTextNumberField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchTextNumberField',
        'SearchDoubleField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleField',
        'SearchDateField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchDateField',
        'SearchEnumMultiSelectField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectField',
        'SearchMultiSelectField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField',
        'SearchCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomField',
        'SearchBooleanCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchBooleanCustomField',
        'SearchStringCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchStringCustomField',
        'SearchLongCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchLongCustomField',
        'SearchDoubleCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchDoubleCustomField',
        'SearchDateCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchDateCustomField',
        'SearchEnumMultiSelectCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchEnumMultiSelectCustomField',
        'SearchMultiSelectCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectCustomField',
        'SearchCustomFieldList' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchCustomFieldList',
        'SearchColumnField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnField',
        'SearchColumnBooleanField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnBooleanField',
        'SearchColumnStringField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnStringField',
        'SearchColumnLongField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnLongField',
        'SearchColumnTextNumberField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnTextNumberField',
        'SearchColumnDoubleField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnDoubleField',
        'SearchColumnDateField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnDateField',
        'SearchColumnEnumSelectField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnEnumSelectField',
        'SearchColumnSelectField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnSelectField',
        'SearchColumnCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomField',
        'SearchColumnBooleanCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnBooleanCustomField',
        'SearchColumnStringCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnStringCustomField',
        'SearchColumnLongCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnLongCustomField',
        'SearchColumnDoubleCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnDoubleCustomField',
        'SearchColumnDateCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnDateCustomField',
        'SearchColumnEnumMultiSelectCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnEnumMultiSelectCustomField',
        'SearchColumnSelectCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnSelectCustomField',
        'SearchColumnMultiSelectCustomField' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnMultiSelectCustomField',
        'SearchColumnCustomFieldList' => 'Nzolt\NetSuite\WebServices\Platform\Core\SearchColumnCustomFieldList',
        'ItemAvailabilityFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\ItemAvailabilityFilter',
        'ItemAvailability' => 'Nzolt\NetSuite\WebServices\Platform\Core\ItemAvailability',
        'ItemAvailabilityList' => 'Nzolt\NetSuite\WebServices\Platform\Core\ItemAvailabilityList',
        'GetItemAvailabilityResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetItemAvailabilityResult',
        'BudgetExchangeRateFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\BudgetExchangeRateFilter',
        'BudgetExchangeRate' => 'Nzolt\NetSuite\WebServices\Platform\Core\BudgetExchangeRate',
        'BudgetExchangeRateList' => 'Nzolt\NetSuite\WebServices\Platform\Core\BudgetExchangeRateList',
        'GetBudgetExchangeRateResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetBudgetExchangeRateResult',
        'ConsolidatedExchangeRateFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\ConsolidatedExchangeRateFilter',
        'ConsolidatedExchangeRate' => 'Nzolt\NetSuite\WebServices\Platform\Core\ConsolidatedExchangeRate',
        'ConsolidatedExchangeRateList' => 'Nzolt\NetSuite\WebServices\Platform\Core\ConsolidatedExchangeRateList',
        'GetConsolidatedExchangeRateResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetConsolidatedExchangeRateResult',
        'CurrencyRateFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\CurrencyRateFilter',
        'CurrencyRate' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CurrencyRate',
        'CurrencyRateList' => 'Nzolt\NetSuite\WebServices\Platform\Core\CurrencyRateList',
        'GetCurrencyRateResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetCurrencyRateResult',
        'DataCenterUrls' => 'Nzolt\NetSuite\WebServices\Platform\Core\DataCenterUrls',
        'GetDataCenterUrlsResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetDataCenterUrlsResult',
        'PostingTransactionSummaryField' => 'Nzolt\NetSuite\WebServices\Platform\Core\PostingTransactionSummaryField',
        'PostingTransactionSummaryFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\PostingTransactionSummaryFilter',
        'PostingTransactionSummary' => 'Nzolt\NetSuite\WebServices\Platform\Core\PostingTransactionSummary',
        'PostingTransactionSummaryList' => 'Nzolt\NetSuite\WebServices\Platform\Core\PostingTransactionSummaryList',
        'GetPostingTransactionSummaryResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetPostingTransactionSummaryResult',
        'GetSelectValueFieldDescription' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSelectValueFieldDescription',
        'GetSelectValueFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSelectValueFilter',
        'GetSelectFilterByFieldValueList' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSelectFilterByFieldValueList',
        'GetSelectFilterByFieldValue' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetSelectFilterByFieldValue',
        'GetServerTimeResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetServerTimeResult',
        'DeletedRecord' => 'Nzolt\NetSuite\WebServices\Platform\Core\DeletedRecord',
        'DeletedRecordList' => 'Nzolt\NetSuite\WebServices\Platform\Core\DeletedRecordList',
        'GetDeletedResult' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetDeletedResult',
        'GetDeletedFilter' => 'Nzolt\NetSuite\WebServices\Platform\Core\GetDeletedFilter',
        'AttachReference' => 'Nzolt\NetSuite\WebServices\Platform\Core\AttachReference',
        'DetachReference' => 'Nzolt\NetSuite\WebServices\Platform\Core\DetachReference',
        'AttachContactReference' => 'Nzolt\NetSuite\WebServices\Platform\Core\AttachContactReference',
        'AttachBasicReference' => 'Nzolt\NetSuite\WebServices\Platform\Core\AttachBasicReference',
        'DetachBasicReference' => 'Nzolt\NetSuite\WebServices\Platform\Core\DetachBasicReference',
        'SoapFault' => 'NSSoapFault',
        'InsufficientPermissionFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\InsufficientPermissionFault',
        'InvalidAccountFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\InvalidAccountFault',
        'InvalidCredentialsFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\InvalidCredentialsFault',
        'InvalidSessionFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\InvalidSessionFault',
        'ExceededRequestLimitFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\ExceededRequestLimitFault',
        'ExceededUsageLimitFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\ExceededUsageLimitFault',
        'ExceededRecordCountFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\ExceededRecordCountFault',
        'InvalidVersionFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\InvalidVersionFault',
        'ExceededRequestSizeFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\ExceededRequestSizeFault',
        'AsyncFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\AsyncFault',
        'UnexpectedErrorFault' => 'Nzolt\NetSuite\WebServices\Platform\Faults\UnexpectedErrorFault',
        'ApplicationInfo' => 'Nzolt\NetSuite\WebServices\Platform\Messages\ApplicationInfo',
        'PartnerInfo' => 'Nzolt\NetSuite\WebServices\Platform\Messages\PartnerInfo',
        'DocumentInfo' => 'Nzolt\NetSuite\WebServices\Platform\Messages\DocumentInfo',
        'Preferences' => 'Nzolt\NetSuite\WebServices\Platform\Messages\Preferences',
        'SearchPreferences' => 'Nzolt\NetSuite\WebServices\Platform\Messages\SearchPreferences',
        'SessionResponse' => 'Nzolt\NetSuite\WebServices\Platform\Messages\SessionResponse',
        'WriteResponse' => 'Nzolt\NetSuite\WebServices\Platform\Messages\WriteResponse',
        'ReadResponse' => 'Nzolt\NetSuite\WebServices\Platform\Messages\ReadResponse',
        'WriteResponseList' => 'Nzolt\NetSuite\WebServices\Platform\Messages\WriteResponseList',
        'ReadResponseList' => 'Nzolt\NetSuite\WebServices\Platform\Messages\ReadResponseList',
        'LoginResponse' => 'Nzolt\NetSuite\WebServices\LoginResponse',
        'SsoLoginResponse' => 'Nzolt\NetSuite\WebServices\SsoLoginResponse',
        'MapSsoResponse' => 'Nzolt\NetSuite\WebServices\MapSsoResponse',
        'ChangePasswordResponse' => 'Nzolt\NetSuite\WebServices\ChangePasswordResponse',
        'ChangeEmailResponse' => 'Nzolt\NetSuite\WebServices\ChangeEmailResponse',
        'LogoutResponse' => 'Nzolt\NetSuite\WebServices\LogoutResponse',
        'AddResponse' => 'Nzolt\NetSuite\WebServices\AddResponse',
        'AddListResponse' => 'Nzolt\NetSuite\WebServices\AddListResponse',
        'UpdateResponse' => 'Nzolt\NetSuite\WebServices\UpdateResponse',
        'UpdateListResponse' => 'Nzolt\NetSuite\WebServices\UpdateListResponse',
        'UpsertResponse' => 'Nzolt\NetSuite\WebServices\UpsertResponse',
        'UpsertListResponse' => 'Nzolt\NetSuite\WebServices\UpsertListResponse',
        'DeleteResponse' => 'Nzolt\NetSuite\WebServices\DeleteResponse',
        'DeleteListResponse' => 'Nzolt\NetSuite\WebServices\DeleteListResponse',
        'SearchResponse' => 'Nzolt\NetSuite\WebServices\SearchResponse',
        'SearchMoreResponse' => 'Nzolt\NetSuite\WebServices\SearchMoreResponse',
        'SearchMoreWithIdResponse' => 'Nzolt\NetSuite\WebServices\SearchMoreWithIdResponse',
        'SearchNextResponse' => 'Nzolt\NetSuite\WebServices\SearchNextResponse',
        'GetResponse' => 'Nzolt\NetSuite\WebServices\GetResponse',
        'GetListResponse' => 'Nzolt\NetSuite\WebServices\GetListResponse',
        'GetAllResponse' => 'Nzolt\NetSuite\WebServices\GetAllResponse',
        'GetSavedSearchResponse' => 'Nzolt\NetSuite\WebServices\GetSavedSearchResponse',
        'GetCustomizationIdResponse' => 'Nzolt\NetSuite\WebServices\GetCustomizationIdResponse',
        'InitializeResponse' => 'Nzolt\NetSuite\WebServices\InitializeResponse',
        'InitializeListResponse' => 'Nzolt\NetSuite\WebServices\InitializeListResponse',
        'getSelectValueResponse' => 'Nzolt\NetSuite\WebServices\getSelectValueResponse',
        'GetItemAvailabilityResponse' => 'Nzolt\NetSuite\WebServices\GetItemAvailabilityResponse',
        'GetBudgetExchangeRateResponse' => 'Nzolt\NetSuite\WebServices\GetBudgetExchangeRateResponse',
        'GetConsolidatedExchangeRateResponse' => 'Nzolt\NetSuite\WebServices\GetConsolidatedExchangeRateResponse',
        'GetCurrencyRateResponse' => 'Nzolt\NetSuite\WebServices\GetCurrencyRateResponse',
        'GetDataCenterUrlsResponse' => 'Nzolt\NetSuite\WebServices\GetDataCenterUrlsResponse',
        'GetPostingTransactionSummaryResponse' => 'Nzolt\NetSuite\WebServices\GetPostingTransactionSummaryResponse',
        'GetServerTimeResponse' => 'Nzolt\NetSuite\WebServices\GetServerTimeResponse',
        'AttachResponse' => 'Nzolt\NetSuite\WebServices\AttachResponse',
        'DetachResponse' => 'Nzolt\NetSuite\WebServices\DetachResponse',
        'UpdateInviteeStatusResponse' => 'Nzolt\NetSuite\WebServices\UpdateInviteeStatusResponse',
        'UpdateInviteeStatusListResponse' => 'Nzolt\NetSuite\WebServices\UpdateInviteeStatusListResponse',
        'AsyncStatusResponse' => 'Nzolt\NetSuite\WebServices\AsyncStatusResponse',
        'GetAsyncResultResponse' => 'Nzolt\NetSuite\WebServices\GetAsyncResultResponse',
        'AsyncResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncResult',
        'AsyncAddListResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncAddListResult',
        'AsyncUpdateListResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncUpdateListResult',
        'AsyncUpsertListResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncUpsertListResult',
        'AsyncDeleteListResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncDeleteListResult',
        'AsyncGetListResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncGetListResult',
        'AsyncSearchResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncSearchResult',
        'AsyncInitializeListResult' => 'Nzolt\NetSuite\WebServices\Platform\Messages\AsyncInitializeListResult',
        'GetDeletedResponse' => 'Nzolt\NetSuite\WebServices\GetDeletedResponse',
        'LoginRequest' => 'Nzolt\NetSuite\WebServices\LoginRequest',
        'SsoLoginRequest' => 'Nzolt\NetSuite\WebServices\SsoLoginRequest',
        'MapSsoRequest' => 'Nzolt\NetSuite\WebServices\MapSsoRequest',
        'ChangePasswordRequest' => 'Nzolt\NetSuite\WebServices\ChangePasswordRequest',
        'ChangeEmailRequest' => 'Nzolt\NetSuite\WebServices\ChangeEmailRequest',
        'LogoutRequest' => 'Nzolt\NetSuite\WebServices\LogoutRequest',
        'AddRequest' => 'Nzolt\NetSuite\WebServices\AddRequest',
        'DeleteRequest' => 'Nzolt\NetSuite\WebServices\DeleteRequest',
        'SearchRequest' => 'Nzolt\NetSuite\WebServices\SearchRequest',
        'SearchMoreRequest' => 'Nzolt\NetSuite\WebServices\SearchMoreRequest',
        'SearchMoreWithIdRequest' => 'Nzolt\NetSuite\WebServices\SearchMoreWithIdRequest',
        'SearchNextRequest' => 'Nzolt\NetSuite\WebServices\SearchNextRequest',
        'UpdateRequest' => 'Nzolt\NetSuite\WebServices\UpdateRequest',
        'UpsertRequest' => 'Nzolt\NetSuite\WebServices\UpsertRequest',
        'AddListRequest' => 'Nzolt\NetSuite\WebServices\AddListRequest',
        'DeleteListRequest' => 'Nzolt\NetSuite\WebServices\DeleteListRequest',
        'UpdateListRequest' => 'Nzolt\NetSuite\WebServices\UpdateListRequest',
        'UpsertListRequest' => 'Nzolt\NetSuite\WebServices\UpsertListRequest',
        'GetRequest' => 'Nzolt\NetSuite\WebServices\GetRequest',
        'GetListRequest' => 'Nzolt\NetSuite\WebServices\GetListRequest',
        'GetAllRequest' => 'Nzolt\NetSuite\WebServices\GetAllRequest',
        'GetSavedSearchRequest' => 'Nzolt\NetSuite\WebServices\GetSavedSearchRequest',
        'GetCustomizationIdRequest' => 'Nzolt\NetSuite\WebServices\GetCustomizationIdRequest',
        'InitializeRequest' => 'Nzolt\NetSuite\WebServices\InitializeRequest',
        'InitializeListRequest' => 'Nzolt\NetSuite\WebServices\InitializeListRequest',
        'getSelectValueRequest' => 'Nzolt\NetSuite\WebServices\getSelectValueRequest',
        'GetItemAvailabilityRequest' => 'Nzolt\NetSuite\WebServices\GetItemAvailabilityRequest',
        'GetBudgetExchangeRateRequest' => 'Nzolt\NetSuite\WebServices\GetBudgetExchangeRateRequest',
        'GetConsolidatedExchangeRateRequest' => 'Nzolt\NetSuite\WebServices\GetConsolidatedExchangeRateRequest',
        'GetCurrencyRateRequest' => 'Nzolt\NetSuite\WebServices\GetCurrencyRateRequest',
        'GetDataCenterUrlsRequest' => 'Nzolt\NetSuite\WebServices\GetDataCenterUrlsRequest',
        'GetPostingTransactionSummaryRequest' => 'Nzolt\NetSuite\WebServices\GetPostingTransactionSummaryRequest',
        'GetServerTimeRequest' => 'Nzolt\NetSuite\WebServices\GetServerTimeRequest',
        'AttachRequest' => 'Nzolt\NetSuite\WebServices\AttachRequest',
        'DetachRequest' => 'Nzolt\NetSuite\WebServices\DetachRequest',
        'AsyncAddListRequest' => 'Nzolt\NetSuite\WebServices\AsyncAddListRequest',
        'UpdateInviteeStatusRequest' => 'Nzolt\NetSuite\WebServices\UpdateInviteeStatusRequest',
        'UpdateInviteeStatusListRequest' => 'Nzolt\NetSuite\WebServices\UpdateInviteeStatusListRequest',
        'AsyncUpdateListRequest' => 'Nzolt\NetSuite\WebServices\AsyncUpdateListRequest',
        'AsyncUpsertListRequest' => 'Nzolt\NetSuite\WebServices\AsyncUpsertListRequest',
        'AsyncDeleteListRequest' => 'Nzolt\NetSuite\WebServices\AsyncDeleteListRequest',
        'AsyncGetListRequest' => 'Nzolt\NetSuite\WebServices\AsyncGetListRequest',
        'AsyncInitializeListRequest' => 'Nzolt\NetSuite\WebServices\AsyncInitializeListRequest',
        'AsyncSearchRequest' => 'Nzolt\NetSuite\WebServices\AsyncSearchRequest',
        'CheckAsyncStatusRequest' => 'Nzolt\NetSuite\WebServices\CheckAsyncStatusRequest',
        'GetAsyncResultRequest' => 'Nzolt\NetSuite\WebServices\GetAsyncResultRequest',
        'GetDeletedRequest' => 'Nzolt\NetSuite\WebServices\GetDeletedRequest',
        'Country' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\Country',
        'Language' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\Language',
        'AvsMatchCode' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\AvsMatchCode',
        'CscMatchCode' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\CscMatchCode',
        'VsoeSopGroup' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup',
        'VsoeDeferral' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral',
        'VsoePermitDiscount' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount',
        'RevenueStatus' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueStatus',
        'RevenueCommitStatus' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\RevenueCommitStatus',
        'PostingPeriodDate' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\PostingPeriodDate',
        'PermissionLevel' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\PermissionLevel',
        'Source' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\Source',
        'GlobalSubscriptionStatus' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\GlobalSubscriptionStatus',
        'ItemCostEstimateType' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType',
        'PresentationItemType' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\PresentationItemType',
        'LandedCostSource' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\LandedCostSource',
        'LandedCostMethod' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\LandedCostMethod',
        'SitemapPriority' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\SitemapPriority',
        'TimeItemTimeType' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\TimeItemTimeType',
        'PermissionCode' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\PermissionCode',
        'IntercoStatus' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\IntercoStatus',
        'CurrencySymbolPlacement' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\CurrencySymbolPlacement',
        'RecurrenceFrequency' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceFrequency',
        'RecurrenceDow' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceDow',
        'RecurrenceDowim' => 'Nzolt\NetSuite\WebServices\Platform\Common\Types\RecurrenceDowim',
        'Address' => 'Nzolt\NetSuite\WebServices\Platform\Common\Address',
        'PresentationItem' => 'Nzolt\NetSuite\WebServices\Platform\Common\PresentationItem',
        'Partners' => 'Nzolt\NetSuite\WebServices\Platform\Common\Partners',
        'LandedCost' => 'Nzolt\NetSuite\WebServices\Platform\Common\LandedCost',
        'LandedCostDataList' => 'Nzolt\NetSuite\WebServices\Platform\Common\LandedCostDataList',
        'LandedCostData' => 'Nzolt\NetSuite\WebServices\Platform\Common\LandedCostData',
        'LandedCostSummary' => 'Nzolt\NetSuite\WebServices\Platform\Common\LandedCostSummary',
        'CustomerSalesTeam' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerSalesTeam',
        'TimeItem' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeItem',
        'InventoryDetail' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail',
        'RecurrenceDowMaskList' => 'Nzolt\NetSuite\WebServices\Platform\Common\RecurrenceDowMaskList',
        'InventoryAssignmentList' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryAssignmentList',
        'InventoryAssignment' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryAssignment',
        'InventoryDetailSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetailSearchBasic',
        'InventoryDetailSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetailSearchRowBasic',
        'EntitySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic',
        'EntitySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic',
        'ContactSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchBasic',
        'ContactSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ContactSearchRowBasic',
        'CustomerSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchBasic',
        'CustomerSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerSearchRowBasic',
        'CalendarEventSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchBasic',
        'CalendarEventSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CalendarEventSearchRowBasic',
        'TaskSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchBasic',
        'TaskSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TaskSearchRowBasic',
        'OpportunitySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchBasic',
        'OpportunitySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\OpportunitySearchRowBasic',
        'EmployeeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic',
        'EmployeeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic',
        'PhoneCallSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchBasic',
        'PhoneCallSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PhoneCallSearchRowBasic',
        'SupportCaseSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchBasic',
        'SupportCaseSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SupportCaseSearchRowBasic',
        'MessageSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchBasic',
        'MessageSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\MessageSearchRowBasic',
        'NoteSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchBasic',
        'NoteSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\NoteSearchRowBasic',
        'CustomRecordSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomRecordSearchBasic',
        'CustomRecordSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomRecordSearchRowBasic',
        'AccountSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic',
        'AccountSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchRowBasic',
        'RevRecScheduleSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchBasic',
        'RevRecScheduleSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\RevRecScheduleSearchRowBasic',
        'RevRecTemplateSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\RevRecTemplateSearchBasic',
        'RevRecTemplateSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\RevRecTemplateSearchRowBasic',
        'BinSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\BinSearchBasic',
        'BinSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\BinSearchRowBasic',
        'DepartmentSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchBasic',
        'DepartmentSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\DepartmentSearchRowBasic',
        'LocationSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic',
        'LocationSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic',
        'ClassificationSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchBasic',
        'ClassificationSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ClassificationSearchRowBasic',
        'TransactionSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchBasic',
        'TransactionSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TransactionSearchRowBasic',
        'ItemSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchBasic',
        'ItemSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemSearchRowBasic',
        'PartnerSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchBasic',
        'PartnerSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PartnerSearchRowBasic',
        'VendorSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchBasic',
        'VendorSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\VendorSearchRowBasic',
        'SiteCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SiteCategorySearchBasic',
        'SiteCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SiteCategorySearchRowBasic',
        'TimeBillSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchBasic',
        'TimeBillSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeBillSearchRowBasic',
        'SolutionSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchBasic',
        'SolutionSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SolutionSearchRowBasic',
        'TopicSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TopicSearchBasic',
        'TopicSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TopicSearchRowBasic',
        'SubsidiarySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchBasic',
        'SubsidiarySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchRowBasic',
        'GiftCertificateSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\GiftCertificateSearchBasic',
        'GiftCertificateSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\GiftCertificateSearchRowBasic',
        'FolderSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\FolderSearchBasic',
        'FolderSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\FolderSearchRowBasic',
        'FileSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\FileSearchBasic',
        'FileSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\FileSearchRowBasic',
        'JobSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\JobSearchBasic',
        'JobSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\JobSearchRowBasic',
        'IssueSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\IssueSearchBasic',
        'IssueSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\IssueSearchRowBasic',
        'GroupMemberSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\GroupMemberSearchBasic',
        'CampaignSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchBasic',
        'CampaignSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CampaignSearchRowBasic',
        'EntityGroupSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\EntityGroupSearchBasic',
        'EntityGroupSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\EntityGroupSearchRowBasic',
        'PromotionCodeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PromotionCodeSearchBasic',
        'PromotionCodeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PromotionCodeSearchRowBasic',
        'BudgetSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\BudgetSearchBasic',
        'BudgetSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\BudgetSearchRowBasic',
        'ProjectTaskSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchBasic',
        'ProjectTaskSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskSearchRowBasic',
        'ProjectTaskAssignmentSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskAssignmentSearchBasic',
        'ProjectTaskAssignmentSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ProjectTaskAssignmentSearchRowBasic',
        'AccountingPeriodSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AccountingPeriodSearchBasic',
        'AccountingPeriodSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AccountingPeriodSearchRowBasic',
        'ContactCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ContactCategorySearchBasic',
        'ContactCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ContactCategorySearchRowBasic',
        'ContactRoleSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ContactRoleSearchBasic',
        'ContactRoleSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ContactRoleSearchRowBasic',
        'CustomerCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerCategorySearchBasic',
        'CustomerCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerCategorySearchRowBasic',
        'CustomerStatusSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerStatusSearchBasic',
        'CustomerStatusSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerStatusSearchRowBasic',
        'ExpenseCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ExpenseCategorySearchBasic',
        'ExpenseCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ExpenseCategorySearchRowBasic',
        'JobStatusSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\JobStatusSearchBasic',
        'JobStatusSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\JobStatusSearchRowBasic',
        'JobTypeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\JobTypeSearchBasic',
        'JobTypeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\JobTypeSearchRowBasic',
        'NoteTypeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\NoteTypeSearchBasic',
        'NoteTypeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\NoteTypeSearchRowBasic',
        'PartnerCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PartnerCategorySearchBasic',
        'PartnerCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PartnerCategorySearchRowBasic',
        'PaymentMethodSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PaymentMethodSearchBasic',
        'PaymentMethodSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PaymentMethodSearchRowBasic',
        'PriceLevelSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PriceLevelSearchBasic',
        'PriceLevelSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PriceLevelSearchRowBasic',
        'SalesRoleSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SalesRoleSearchBasic',
        'SalesRoleSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\SalesRoleSearchRowBasic',
        'TermSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TermSearchBasic',
        'TermSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TermSearchRowBasic',
        'VendorCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\VendorCategorySearchBasic',
        'VendorCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\VendorCategorySearchRowBasic',
        'WinLossReasonSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\WinLossReasonSearchBasic',
        'WinLossReasonSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\WinLossReasonSearchRowBasic',
        'OriginatingLeadSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchBasic',
        'OriginatingLeadSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\OriginatingLeadSearchRowBasic',
        'UnitsTypeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\UnitsTypeSearchBasic',
        'UnitsTypeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\UnitsTypeSearchRowBasic',
        'CustomListSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomListSearchBasic',
        'CustomListSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomListSearchRowBasic',
        'PricingGroupSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PricingGroupSearchBasic',
        'PricingGroupSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PricingGroupSearchRowBasic',
        'InventoryNumberSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchBasic',
        'InventoryNumberSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberSearchRowBasic',
        'InventoryNumberBinSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberBinSearchBasic',
        'InventoryNumberBinSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\InventoryNumberBinSearchRowBasic',
        'ItemBinNumberSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemBinNumberSearchBasic',
        'ItemBinNumberSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemBinNumberSearchRowBasic',
        'PricingSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PricingSearchBasic',
        'PricingSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PricingSearchRowBasic',
        'AppDefinitionSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AppDefinitionSearchBasic',
        'AppDefinitionSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AppDefinitionSearchRowBasic',
        'AppPackageSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AppPackageSearchBasic',
        'AppPackageSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AppPackageSearchRowBasic',
        'NexusSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\NexusSearchBasic',
        'NexusSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\NexusSearchRowBasic',
        'OtherNameCategorySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\OtherNameCategorySearchBasic',
        'OtherNameCategorySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\OtherNameCategorySearchRowBasic',
        'CustomerMessageSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerMessageSearchBasic',
        'CustomerMessageSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomerMessageSearchRowBasic',
        'ItemDemandPlanSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemDemandPlanSearchBasic',
        'ItemDemandPlanSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemDemandPlanSearchRowBasic',
        'ItemSupplyPlanSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemSupplyPlanSearchBasic',
        'ItemSupplyPlanSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemSupplyPlanSearchRowBasic',
        'CurrencyRateSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CurrencyRateSearchBasic',
        'CurrencyRateSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CurrencyRateSearchRowBasic',
        'ItemRevisionSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchBasic',
        'ItemRevisionSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemRevisionSearchRowBasic',
        'CouponCodeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CouponCodeSearchBasic',
        'CouponCodeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CouponCodeSearchRowBasic',
        'PayrollItemSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PayrollItemSearchBasic',
        'PayrollItemSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\PayrollItemSearchRowBasic',
        'ManufacturingCostTemplateSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingCostTemplateSearchBasic',
        'ManufacturingCostTemplateSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingCostTemplateSearchRowBasic',
        'ManufacturingRoutingSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingRoutingSearchBasic',
        'ManufacturingRoutingSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingRoutingSearchRowBasic',
        'ManufacturingOperationTaskSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingOperationTaskSearchBasic',
        'ManufacturingOperationTaskSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ManufacturingOperationTaskSearchRowBasic',
        'ResourceAllocationSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchBasic',
        'ResourceAllocationSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ResourceAllocationSearchRowBasic',
        'CustomSearchJoin' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomSearchJoin',
        'CustomSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\CustomSearchRowBasic',
        'ChargeSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ChargeSearchBasic',
        'ChargeSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ChargeSearchRowBasic',
        'BillingScheduleSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchBasic',
        'BillingScheduleSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\BillingScheduleSearchRowBasic',
        'GlobalAccountMappingSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\GlobalAccountMappingSearchBasic',
        'GlobalAccountMappingSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\GlobalAccountMappingSearchRowBasic',
        'ItemAccountMappingSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemAccountMappingSearchBasic',
        'ItemAccountMappingSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\ItemAccountMappingSearchRowBasic',
        'TimeEntrySearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeEntrySearchBasic',
        'TimeEntrySearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeEntrySearchRowBasic',
        'TimeSheetSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeSheetSearchBasic',
        'TimeSheetSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\TimeSheetSearchRowBasic',
        'AccountingTransactionSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AccountingTransactionSearchBasic',
        'AccountingTransactionSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AccountingTransactionSearchRowBasic',
        'AddressSearchBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchBasic',
        'AddressSearchRowBasic' => 'Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchRowBasic',
        'CalendarEventAccessLevel' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventAccessLevel',
        'CalendarEventAttendeeAttendance' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventAttendeeAttendance',
        'CalendarEventReminderMinutes' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventReminderMinutes',
        'CalendarEventReminderType' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventReminderType',
        'CalendarEventStatus' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\CalendarEventStatus',
        'TaskPriority' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskPriority',
        'TaskReminderMinutes' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskReminderMinutes',
        'TaskReminderType' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskReminderType',
        'TaskStatus' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\TaskStatus',
        'PhoneCallPriority' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallPriority',
        'PhoneCallReminderMinutes' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallReminderMinutes',
        'PhoneCallReminderType' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallReminderType',
        'PhoneCallStatus' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\PhoneCallStatus',
        'ProjectTaskPriority' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskPriority',
        'ProjectTaskStatus' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskStatus',
        'ProjectTaskConstraintType' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskConstraintType',
        'ProjectTaskPredecessorPredecessorType' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ProjectTaskPredecessorPredecessorType',
        'ResourceAllocationAllocationUnit' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ResourceAllocationAllocationUnit',
        'ResourceAllocationApprovalStatus' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ResourceAllocationApprovalStatus',
        'CalendarEvent' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEvent',
        'ExclusionDateList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ExclusionDateList',
        'CalendarEventAttendee' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventAttendee',
        'CalendarEventAttendeeList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventAttendeeList',
        'CalendarEventResource' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventResource',
        'CalendarEventResourceList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventResourceList',
        'CalendarEventSearch' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventSearch',
        'CalendarEventSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventSearchAdvanced',
        'CalendarEventSearchRow' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventSearchRow',
        'Task' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\Task',
        'TaskContact' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\TaskContact',
        'TaskContactList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\TaskContactList',
        'TaskSearch' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\TaskSearch',
        'TaskSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\TaskSearchAdvanced',
        'TaskSearchRow' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\TaskSearchRow',
        'PhoneCall' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCall',
        'PhoneCallContact' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCallContact',
        'PhoneCallContactList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCallContactList',
        'PhoneCallSearch' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCallSearch',
        'PhoneCallSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCallSearchAdvanced',
        'PhoneCallSearchRow' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCallSearchRow',
        'ProjectTask' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTask',
        'ProjectTaskPredecessor' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskPredecessor',
        'ProjectTaskPredecessorList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskPredecessorList',
        'ProjectTaskAssignee' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskAssignee',
        'ProjectTaskAssigneeList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskAssigneeList',
        'ProjectTaskSearch' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskSearch',
        'ProjectTaskSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskSearchAdvanced',
        'ProjectTaskSearchRow' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskSearchRow',
        'PhoneCallTimeItemList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\PhoneCallTimeItemList',
        'CalendarEventTimeItemList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\CalendarEventTimeItemList',
        'TaskTimeItemList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\TaskTimeItemList',
        'ProjectTaskTimeItemList' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ProjectTaskTimeItemList',
        'ResourceAllocation' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ResourceAllocation',
        'ResourceAllocationSearch' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ResourceAllocationSearch',
        'ResourceAllocationSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ResourceAllocationSearchAdvanced',
        'ResourceAllocationSearchRow' => 'Nzolt\NetSuite\WebServices\Activities\Scheduling\ResourceAllocationSearchRow',
        'NoteDirection' => 'Nzolt\NetSuite\WebServices\General\Communication\Types\NoteDirection',
        'MessageMessageType' => 'Nzolt\NetSuite\WebServices\General\Communication\Types\MessageMessageType',
        'File' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\File',
        'FileSiteCategory' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FileSiteCategory',
        'FileSiteCategoryList' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FileSiteCategoryList',
        'FileSearch' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FileSearch',
        'FileSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FileSearchAdvanced',
        'FileSearchRow' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FileSearchRow',
        'Folder' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\Folder',
        'FolderSearch' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FolderSearch',
        'FolderSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FolderSearchAdvanced',
        'FolderSearchRow' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\FolderSearchRow',
        'Note' => 'Nzolt\NetSuite\WebServices\General\Communication\Note',
        'NoteSearch' => 'Nzolt\NetSuite\WebServices\General\Communication\NoteSearch',
        'NoteSearchAdvanced' => 'Nzolt\NetSuite\WebServices\General\Communication\NoteSearchAdvanced',
        'NoteSearchRow' => 'Nzolt\NetSuite\WebServices\General\Communication\NoteSearchRow',
        'Message' => 'Nzolt\NetSuite\WebServices\General\Communication\Message',
        'MessageMediaItemList' => 'Nzolt\NetSuite\WebServices\General\Communication\MessageMediaItemList',
        'MessageSearch' => 'Nzolt\NetSuite\WebServices\General\Communication\MessageSearch',
        'MessageSearchAdvanced' => 'Nzolt\NetSuite\WebServices\General\Communication\MessageSearchAdvanced',
        'MessageSearchRow' => 'Nzolt\NetSuite\WebServices\General\Communication\MessageSearchRow',
        'EntityType' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EntityType',
        'CustomerStatusStage' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerStatusStage',
        'ContactType' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\ContactType',
        'CustomerStage' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerStage',
        'CustomerCreditHoldOverride' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerCreditHoldOverride',
        'CustomerMonthlyClosing' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerMonthlyClosing',
        'EmailPreference' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EmailPreference',
        'EntityGroupType' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\EntityGroupType',
        'TaxFractionUnit' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\TaxFractionUnit',
        'TaxRounding' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\TaxRounding',
        'JobBillingType' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\JobBillingType',
        'PartnerOtherRelationships' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\PartnerOtherRelationships',
        'CustomerOtherRelationships' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerOtherRelationships',
        'VendorOtherRelationships' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\VendorOtherRelationships',
        'CustomerNegativeNumberFormat' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerNegativeNumberFormat',
        'CustomerNumberFormat' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Types\CustomerNumberFormat',
        'Subscriptions' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Subscriptions',
        'SubscriptionsList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\SubscriptionsList',
        'Contact' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Contact',
        'CategoryList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CategoryList',
        'ContactAddressbook' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactAddressbook',
        'ContactAddressbookList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactAddressbookList',
        'ContactSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactSearch',
        'ContactSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactSearchAdvanced',
        'ContactSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactSearchRow',
        'Customer' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Customer',
        'CustomerDownload' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerDownload',
        'CustomerDownloadList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerDownloadList',
        'ContactAccessRoles' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactAccessRoles',
        'ContactAccessRolesList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\ContactAccessRolesList',
        'CustomerSalesTeamList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerSalesTeamList',
        'CustomerAddressbook' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerAddressbook',
        'CustomerAddressbookList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerAddressbookList',
        'CustomerCreditCards' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerCreditCards',
        'CustomerCreditCardsList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerCreditCardsList',
        'CustomerGroupPricing' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerGroupPricing',
        'CustomerGroupPricingList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerGroupPricingList',
        'CustomerItemPricing' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerItemPricing',
        'CustomerItemPricingList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerItemPricingList',
        'CustomerPartnersList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerPartnersList',
        'CustomerSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerSearch',
        'CustomerSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerSearchAdvanced',
        'CustomerSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerSearchRow',
        'CustomerStatus' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerStatus',
        'Partner' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Partner',
        'PartnerPromoCode' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerPromoCode',
        'PartnerPromoCodeList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerPromoCodeList',
        'PartnerAddressbook' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerAddressbook',
        'PartnerAddressbookList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerAddressbookList',
        'PartnerSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerSearch',
        'PartnerSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerSearchAdvanced',
        'PartnerSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\PartnerSearchRow',
        'Vendor' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Vendor',
        'VendorPricingSchedule' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorPricingSchedule',
        'VendorPricingScheduleList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorPricingScheduleList',
        'VendorAddressbook' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorAddressbook',
        'VendorAddressbookList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorAddressbookList',
        'VendorRoles' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorRoles',
        'VendorRolesList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorRolesList',
        'VendorSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorSearch',
        'VendorSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorSearchAdvanced',
        'VendorSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorSearchRow',
        'EntityGroup' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\EntityGroup',
        'EntityGroupSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\EntityGroupSearch',
        'EntityGroupSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\EntityGroupSearchAdvanced',
        'EntityGroupSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\EntityGroupSearchRow',
        'Job' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\Job',
        'JobAddressbook' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobAddressbook',
        'JobAddressbookList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobAddressbookList',
        'JobResources' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobResources',
        'JobResourcesList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobResourcesList',
        'JobMilestones' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobMilestones',
        'JobMilestonesList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobMilestonesList',
        'JobCreditCards' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobCreditCards',
        'JobCreditCardsList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobCreditCardsList',
        'JobSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobSearch',
        'JobSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobSearchAdvanced',
        'JobSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobSearchRow',
        'JobType' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobType',
        'JobStatus' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobStatus',
        'CustomerStatusSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerStatusSearch',
        'CustomerStatusSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerStatusSearchAdvanced',
        'CustomerStatusSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerStatusSearchRow',
        'JobStatusSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobStatusSearch',
        'JobStatusSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobStatusSearchAdvanced',
        'JobStatusSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobStatusSearchRow',
        'JobTypeSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobTypeSearch',
        'JobTypeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobTypeSearchAdvanced',
        'JobTypeSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobTypeSearchRow',
        'OriginatingLeadSearch' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\OriginatingLeadSearch',
        'OriginatingLeadSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\OriginatingLeadSearchRow',
        'CustomerCurrency' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerCurrency',
        'CustomerCurrencyList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\CustomerCurrencyList',
        'VendorCurrency' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorCurrency',
        'VendorCurrencyList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\VendorCurrencyList',
        'JobPlStatement' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobPlStatement',
        'JobPlStatementList' => 'Nzolt\NetSuite\WebServices\Lists\Relationships\JobPlStatementList',
        'SupportCaseStatusStage' => 'Nzolt\NetSuite\WebServices\Lists\Support\Types\SupportCaseStatusStage',
        'SupportCaseStage' => 'Nzolt\NetSuite\WebServices\Lists\Support\Types\SupportCaseStage',
        'SolutionStatus' => 'Nzolt\NetSuite\WebServices\Lists\Support\Types\SolutionStatus',
        'IssueEventStatus' => 'Nzolt\NetSuite\WebServices\Lists\Support\Types\IssueEventStatus',
        'IssueTrackCode' => 'Nzolt\NetSuite\WebServices\Lists\Support\Types\IssueTrackCode',
        'IssueRelationship' => 'Nzolt\NetSuite\WebServices\Lists\Support\Types\IssueRelationship',
        'SupportCase' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCase',
        'EmailEmployeesList' => 'Nzolt\NetSuite\WebServices\Lists\Support\EmailEmployeesList',
        'SupportCaseEscalateTo' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseEscalateTo',
        'SupportCaseEscalateToList' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseEscalateToList',
        'SupportCaseSolutions' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseSolutions',
        'SupportCaseSolutionsList' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseSolutionsList',
        'SupportCaseTimeItemList' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseTimeItemList',
        'SupportCaseSearch' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseSearch',
        'SupportCaseSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseSearchAdvanced',
        'SupportCaseSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseSearchRow',
        'SupportCaseStatus' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseStatus',
        'SupportCaseType' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseType',
        'SupportCaseOrigin' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseOrigin',
        'SupportCaseIssue' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCaseIssue',
        'SupportCasePriority' => 'Nzolt\NetSuite\WebServices\Lists\Support\SupportCasePriority',
        'Solution' => 'Nzolt\NetSuite\WebServices\Lists\Support\Solution',
        'SolutionTopics' => 'Nzolt\NetSuite\WebServices\Lists\Support\SolutionTopics',
        'SolutionTopicsList' => 'Nzolt\NetSuite\WebServices\Lists\Support\SolutionTopicsList',
        'Solutions' => 'Nzolt\NetSuite\WebServices\Lists\Support\Solutions',
        'SolutionsList' => 'Nzolt\NetSuite\WebServices\Lists\Support\SolutionsList',
        'SolutionSearch' => 'Nzolt\NetSuite\WebServices\Lists\Support\SolutionSearch',
        'SolutionSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Support\SolutionSearchAdvanced',
        'SolutionSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Support\SolutionSearchRow',
        'Topic' => 'Nzolt\NetSuite\WebServices\Lists\Support\Topic',
        'TopicSolution' => 'Nzolt\NetSuite\WebServices\Lists\Support\TopicSolution',
        'TopicSolutionList' => 'Nzolt\NetSuite\WebServices\Lists\Support\TopicSolutionList',
        'TopicSearch' => 'Nzolt\NetSuite\WebServices\Lists\Support\TopicSearch',
        'TopicSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Support\TopicSearchAdvanced',
        'TopicSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Support\TopicSearchRow',
        'Issue' => 'Nzolt\NetSuite\WebServices\Lists\Support\Issue',
        'IssueVersion' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueVersion',
        'IssueVersionList' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueVersionList',
        'IssueSearch' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueSearch',
        'IssueSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueSearchAdvanced',
        'IssueSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueSearchRow',
        'IssueRelatedIssues' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueRelatedIssues',
        'IssueRelatedIssuesList' => 'Nzolt\NetSuite\WebServices\Lists\Support\IssueRelatedIssuesList',
        'CurrencyLocale' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CurrencyLocale',
        'AccountType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AccountType',
        'ItemCostingMethod' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCostingMethod',
        'ItemProductFeed' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemProductFeed',
        'ItemType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemType',
        'ItemWeightUnit' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemWeightUnit',
        'ItemPreferenceCriterion' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemPreferenceCriterion',
        'ItemOverallQuantityPricingType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverallQuantityPricingType',
        'ScheduleBCode' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ScheduleBCode',
        'ItemSubType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemSubType',
        'CurrencyCurrencyPrecision' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CurrencyCurrencyPrecision',
        'CurrencyFxRateUpdateTimezone' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CurrencyFxRateUpdateTimezone',
        'SalesTaxItemAvailable' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\SalesTaxItemAvailable',
        'ItemEbayAuctionDuration' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemEbayAuctionDuration',
        'ItemOutOfStockBehavior' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOutOfStockBehavior',
        'ItemEbayRelistingOption' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemEbayRelistingOption',
        'ConsolidatedRate' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ConsolidatedRate',
        'CashFlowRateType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CashFlowRateType',
        'GeneralRateType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\GeneralRateType',
        'ItemMatrixType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemMatrixType',
        'ItemDemandSource' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemDemandSource',
        'ItemSupplyLotSizingMethod' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemSupplyLotSizingMethod',
        'ItemSupplyType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemSupplyType',
        'ItemSupplyReplenishmentMethod' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemSupplyReplenishmentMethod',
        'RevRecScheduleRecogIntervalSrc' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleRecogIntervalSrc',
        'RevRecScheduleRecurrenceType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleRecurrenceType',
        'RevRecScheduleAmortizationType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleAmortizationType',
        'RevRecScheduleAmortizationStatus' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\RevRecScheduleAmortizationStatus',
        'CostCategoryItemCostType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\CostCategoryItemCostType',
        'ItemAtpMethod' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemAtpMethod',
        'AssemblyItemEffectiveBomControl' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AssemblyItemEffectiveBomControl',
        'ItemInvtClassification' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemInvtClassification',
        'PeriodicLotSizeType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\PeriodicLotSizeType',
        'HazmatPackingGroup' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\HazmatPackingGroup',
        'ItemCarrier' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCarrier',
        'TaxAcctType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\TaxAcctType',
        'ItemOverheadType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemOverheadType',
        'ItemCostAccountingStatus' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemCostAccountingStatus',
        'BillingScheduleRecurrenceRecurrenceUnits' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleRecurrenceRecurrenceUnits',
        'BillingScheduleType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleType',
        'BillingScheduleFrequency' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleFrequency',
        'ItemAccountMappingItemAccount' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\ItemAccountMappingItemAccount',
        'AccountingBookStatus' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\AccountingBookStatus',
        'BillingScheduleRepeatEvery' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleRepeatEvery',
        'BillingScheduleMonthDow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleMonthDow',
        'BillingScheduleYearMonth' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearMonth',
        'BillingScheduleYearDow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearDow',
        'BillingScheduleYearDowim' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearDowim',
        'BillingScheduleYearDowimMonth' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearDowimMonth',
        'BillingScheduleMonthDowim' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleMonthDowim',
        'BillingScheduleRecurrenceMode' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleRecurrenceMode',
        'InventoryItemFraudRisk' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Types\InventoryItemFraudRisk',
        'ClassTranslation' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ClassTranslation',
        'ClassTranslationList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ClassTranslationList',
        'ContactCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactCategory',
        'CustomerCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerCategory',
        'SalesRole' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SalesRole',
        'PriceLevel' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PriceLevel',
        'WinLossReason' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\WinLossReason',
        'Term' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Term',
        'NoteType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NoteType',
        'PaymentMethod' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentMethod',
        'LeadSource' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LeadSource',
        'Price' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Price',
        'PriceList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PriceList',
        'Pricing' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Pricing',
        'PricingMatrix' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PricingMatrix',
        'Rate' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Rate',
        'RateList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RateList',
        'BillingRates' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingRates',
        'BillingRatesMatrix' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingRatesMatrix',
        'Translation' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Translation',
        'TranslationList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TranslationList',
        'ItemOptionsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemOptionsList',
        'ItemVendor' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemVendor',
        'ItemVendorList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemVendorList',
        'SiteCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SiteCategory',
        'SiteCategoryList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SiteCategoryList',
        'ProductFeedList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ProductFeedList',
        'ItemMember' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemMember',
        'ItemMemberList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemMemberList',
        'InventoryItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryItem',
        'MatrixOptionList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\MatrixOptionList',
        'InventoryItemBinNumber' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryItemBinNumber',
        'InventoryItemBinNumberList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryItemBinNumberList',
        'InventoryItemLocations' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryItemLocations',
        'InventoryItemLocationsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryItemLocationsList',
        'PresentationItemList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PresentationItemList',
        'DescriptionItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\DescriptionItem',
        'DiscountItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\DiscountItem',
        'DownloadItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\DownloadItem',
        'MarkupItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\MarkupItem',
        'PaymentItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentItem',
        'SubtotalItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubtotalItem',
        'NonInventoryPurchaseItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NonInventoryPurchaseItem',
        'NonInventorySaleItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NonInventorySaleItem',
        'NonInventoryResaleItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NonInventoryResaleItem',
        'OtherChargeResaleItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherChargeResaleItem',
        'OtherChargePurchaseItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherChargePurchaseItem',
        'ServiceResaleItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ServiceResaleItem',
        'ServicePurchaseItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ServicePurchaseItem',
        'ServiceSaleItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ServiceSaleItem',
        'OtherChargeSaleItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherChargeSaleItem',
        'Currency' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Currency',
        'ExpenseCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ExpenseCategory',
        'Account' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Account',
        'AccountTranslationList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountTranslationList',
        'AccountSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountSearch',
        'AccountSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountSearchAdvanced',
        'AccountSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountSearchRow',
        'Department' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Department',
        'DepartmentSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\DepartmentSearch',
        'DepartmentSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\DepartmentSearchAdvanced',
        'DepartmentSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\DepartmentSearchRow',
        'Classification' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Classification',
        'ClassificationSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ClassificationSearch',
        'ClassificationSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ClassificationSearchAdvanced',
        'ClassificationSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ClassificationSearchRow',
        'Location' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Location',
        'LocationSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LocationSearch',
        'LocationSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LocationSearchAdvanced',
        'LocationSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LocationSearchRow',
        'UnitsType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\UnitsType',
        'UnitsTypeUom' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\UnitsTypeUom',
        'UnitsTypeUomList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\UnitsTypeUomList',
        'ItemSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemSearch',
        'ItemSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemSearchAdvanced',
        'ItemSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemSearchRow',
        'ContactRole' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactRole',
        'Bin' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Bin',
        'BinSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BinSearch',
        'BinSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BinSearchAdvanced',
        'BinSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BinSearchRow',
        'SalesTaxItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SalesTaxItem',
        'TaxGroup' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxGroup',
        'TaxGroupTaxItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxGroupTaxItem',
        'TaxGroupTaxItemList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxGroupTaxItemList',
        'TaxType' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxType',
        'TaxTypeNexusesTax' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxTypeNexusesTax',
        'TaxTypeNexusesTaxList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxTypeNexusesTaxList',
        'SerializedInventoryItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SerializedInventoryItem',
        'SerializedInventoryItemLocations' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SerializedInventoryItemLocations',
        'SerializedInventoryItemLocationsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SerializedInventoryItemLocationsList',
        'SerializedInventoryItemNumbers' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SerializedInventoryItemNumbers',
        'SerializedInventoryItemNumbersList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SerializedInventoryItemNumbersList',
        'LotNumberedInventoryItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LotNumberedInventoryItem',
        'LotNumberedInventoryItemLocations' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LotNumberedInventoryItemLocations',
        'LotNumberedInventoryItemLocationsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LotNumberedInventoryItemLocationsList',
        'LotNumberedInventoryItemNumbers' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LotNumberedInventoryItemNumbers',
        'LotNumberedInventoryItemNumbersList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LotNumberedInventoryItemNumbersList',
        'GiftCertificateItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificateItem',
        'GiftCertificateItemAuthCodes' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificateItemAuthCodes',
        'GiftCertificateItemAuthCodesList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificateItemAuthCodesList',
        'Subsidiary' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Subsidiary',
        'SubsidiaryNexus' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiaryNexus',
        'SubsidiaryNexusList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiaryNexusList',
        'SubsidiarySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiarySearch',
        'SubsidiarySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiarySearchAdvanced',
        'SubsidiarySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiarySearchRow',
        'GiftCertificate' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificate',
        'GiftCertificateSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificateSearch',
        'GiftCertificateSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificateSearchAdvanced',
        'GiftCertificateSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GiftCertificateSearchRow',
        'PartnerCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PartnerCategory',
        'VendorCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\VendorCategory',
        'KitItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\KitItem',
        'AssemblyItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AssemblyItem',
        'SerializedAssemblyItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SerializedAssemblyItem',
        'LotNumberedAssemblyItem' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\LotNumberedAssemblyItem',
        'ServiceItemTaskTemplates' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ServiceItemTaskTemplates',
        'ServiceItemTaskTemplatesList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ServiceItemTaskTemplatesList',
        'State' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\State',
        'AccountingPeriod' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountingPeriod',
        'BudgetCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BudgetCategory',
        'AccountingPeriodSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountingPeriodSearch',
        'AccountingPeriodSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountingPeriodSearchAdvanced',
        'AccountingPeriodSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountingPeriodSearchRow',
        'ContactCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactCategorySearch',
        'ContactCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactCategorySearchAdvanced',
        'ContactCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactCategorySearchRow',
        'ContactRoleSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactRoleSearch',
        'ContactRoleSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactRoleSearchAdvanced',
        'ContactRoleSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ContactRoleSearchRow',
        'CustomerCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerCategorySearch',
        'CustomerCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerCategorySearchAdvanced',
        'CustomerCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerCategorySearchRow',
        'ExpenseCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ExpenseCategorySearch',
        'ExpenseCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ExpenseCategorySearchAdvanced',
        'ExpenseCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ExpenseCategorySearchRow',
        'NoteTypeSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NoteTypeSearch',
        'NoteTypeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NoteTypeSearchAdvanced',
        'NoteTypeSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NoteTypeSearchRow',
        'PartnerCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PartnerCategorySearch',
        'PartnerCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PartnerCategorySearchAdvanced',
        'PartnerCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PartnerCategorySearchRow',
        'PaymentMethodSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentMethodSearch',
        'PaymentMethodSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentMethodSearchAdvanced',
        'PaymentMethodSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentMethodSearchRow',
        'PriceLevelSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PriceLevelSearch',
        'PriceLevelSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PriceLevelSearchAdvanced',
        'PriceLevelSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PriceLevelSearchRow',
        'SalesRoleSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SalesRoleSearch',
        'SalesRoleSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SalesRoleSearchAdvanced',
        'SalesRoleSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SalesRoleSearchRow',
        'TermSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TermSearch',
        'TermSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TermSearchAdvanced',
        'TermSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TermSearchRow',
        'VendorCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\VendorCategorySearch',
        'VendorCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\VendorCategorySearchAdvanced',
        'VendorCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\VendorCategorySearchRow',
        'WinLossReasonSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\WinLossReasonSearch',
        'WinLossReasonSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\WinLossReasonSearchAdvanced',
        'WinLossReasonSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\WinLossReasonSearchRow',
        'UnitsTypeSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\UnitsTypeSearch',
        'UnitsTypeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\UnitsTypeSearchAdvanced',
        'UnitsTypeSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\UnitsTypeSearchRow',
        'PricingGroup' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PricingGroup',
        'PricingGroupSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PricingGroupSearch',
        'PricingGroupSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PricingGroupSearchAdvanced',
        'PricingGroupSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PricingGroupSearchRow',
        'InventoryNumber' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryNumber',
        'InventoryNumberLocations' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryNumberLocations',
        'InventoryNumberLocationsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryNumberLocationsList',
        'InventoryNumberSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryNumberSearch',
        'InventoryNumberSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryNumberSearchAdvanced',
        'InventoryNumberSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\InventoryNumberSearchRow',
        'RevRecSchedule' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecSchedule',
        'RevRecScheduleRecurrence' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecScheduleRecurrence',
        'RevRecScheduleRecurrenceList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecScheduleRecurrenceList',
        'RevRecTemplate' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecTemplate',
        'RevRecTemplateRecurrence' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecTemplateRecurrence',
        'RevRecTemplateRecurrenceList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecTemplateRecurrenceList',
        'RevRecScheduleSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecScheduleSearch',
        'RevRecScheduleSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecScheduleSearchAdvanced',
        'RevRecScheduleSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecScheduleSearchRow',
        'RevRecTemplateSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecTemplateSearch',
        'RevRecTemplateSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecTemplateSearchAdvanced',
        'RevRecTemplateSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\RevRecTemplateSearchRow',
        'CostCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CostCategory',
        'Nexus' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\Nexus',
        'NexusSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NexusSearch',
        'NexusSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NexusSearchAdvanced',
        'NexusSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\NexusSearchRow',
        'CustomerMessage' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerMessage',
        'OtherNameCategory' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherNameCategory',
        'OtherNameCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherNameCategorySearch',
        'OtherNameCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherNameCategorySearchAdvanced',
        'OtherNameCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\OtherNameCategorySearchRow',
        'CustomerMessageSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerMessageSearch',
        'CustomerMessageSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerMessageSearchAdvanced',
        'CustomerMessageSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CustomerMessageSearchRow',
        'ItemGroup' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemGroup',
        'CurrencyRateSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CurrencyRateSearch',
        'CurrencyRateSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CurrencyRateSearchAdvanced',
        'CurrencyRateSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\CurrencyRateSearchRow',
        'ItemRevision' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemRevision',
        'ItemRevisionSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemRevisionSearch',
        'ItemRevisionSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemRevisionSearchAdvanced',
        'ItemRevisionSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemRevisionSearchRow',
        'AccountingPeriodFiscalCalendars' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountingPeriodFiscalCalendars',
        'AccountingPeriodFiscalCalendarsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\AccountingPeriodFiscalCalendarsList',
        'TaxAcct' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\TaxAcct',
        'ExpenseCategoryRates' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ExpenseCategoryRates',
        'ExpenseCategoryRatesList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ExpenseCategoryRatesList',
        'BillingSchedule' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingSchedule',
        'BillingScheduleMilestone' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleMilestone',
        'BillingScheduleMilestoneList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleMilestoneList',
        'BillingScheduleRecurrence' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleRecurrence',
        'BillingScheduleRecurrenceList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleRecurrenceList',
        'BillingScheduleSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleSearch',
        'BillingScheduleSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleSearchAdvanced',
        'BillingScheduleSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\BillingScheduleSearchRow',
        'GlobalAccountMapping' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GlobalAccountMapping',
        'GlobalAccountMappingSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GlobalAccountMappingSearch',
        'GlobalAccountMappingSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GlobalAccountMappingSearchAdvanced',
        'GlobalAccountMappingSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\GlobalAccountMappingSearchRow',
        'ItemAccountMapping' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemAccountMapping',
        'ItemAccountMappingSearch' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemAccountMappingSearch',
        'ItemAccountMappingSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemAccountMappingSearchAdvanced',
        'ItemAccountMappingSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemAccountMappingSearchRow',
        'ItemAccountingBookDetail' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemAccountingBookDetail',
        'ItemAccountingBookDetailList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\ItemAccountingBookDetailList',
        'SubsidiaryAccountingBookDetail' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiaryAccountingBookDetail',
        'SubsidiaryAccountingBookDetailList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\SubsidiaryAccountingBookDetailList',
        'PaymentMethodVisuals' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentMethodVisuals',
        'PaymentMethodVisualsList' => 'Nzolt\NetSuite\WebServices\Lists\Accounting\PaymentMethodVisualsList',
        'SalesOrderItemCommitInventory' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\SalesOrderItemCommitInventory',
        'SalesOrderItemCreatePo' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\SalesOrderItemCreatePo',
        'SalesOrderOrderStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\SalesOrderOrderStatus',
        'ItemFulfillmentExportTypeUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentExportTypeUps',
        'ItemFulfillmentLicenseExceptionUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentLicenseExceptionUps',
        'ItemFulfillmentMethodOfTransportUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentMethodOfTransportUps',
        'ItemFulfillmentThirdPartyTypeUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentThirdPartyTypeUps',
        'ItemFulfillmentPackageUpsCodMethodUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUpsCodMethodUps',
        'ItemFulfillmentPackageUpsDeliveryConfUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUpsDeliveryConfUps',
        'ItemFulfillmentPackageUpsPackagingUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUpsPackagingUps',
        'ItemFulfillmentPackageUspsDeliveryConfUsps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUspsDeliveryConfUsps',
        'ItemFulfillmentPackageUspsPackagingUsps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageUspsPackagingUsps',
        'ItemFulfillmentB13AFilingOptionFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentB13AFilingOptionFedEx',
        'ItemFulfillmentHomeDeliveryTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentHomeDeliveryTypeFedEx',
        'ItemFulfillmentThirdPartyTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentThirdPartyTypeFedEx',
        'ItemFulfillmentPackageFedExAdmPackageTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExAdmPackageTypeFedEx',
        'ItemFulfillmentPackageFedExCodMethodFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExCodMethodFedEx',
        'ItemFulfillmentPackageFedExDeliveryConfFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExDeliveryConfFedEx',
        'ItemFulfillmentPackageFedExPackagingFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExPackagingFedEx',
        'ItemFulfillmentPackageFedExSignatureOptionsFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExSignatureOptionsFedEx',
        'ItemFulfillmentTermsOfSaleFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentTermsOfSaleFedEx',
        'ItemFulfillmentShipStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentShipStatus',
        'OpportunityStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\OpportunityStatus',
        'TransactionType' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionType',
        'TransactionStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionStatus',
        'TransactionPaymentEventResult' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionPaymentEventResult',
        'TransactionPaymentEventType' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionPaymentEventType',
        'TransactionPaymentEventHoldReason' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionPaymentEventHoldReason',
        'ItemFulfillmentPackageFedExCodFreightTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExCodFreightTypeFedEx',
        'TransactionLinkType' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionLinkType',
        'ForecastType' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ForecastType',
        'TransactionLineType' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionLineType',
        'TransactionApprovalStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionApprovalStatus',
        'ItemFulfillmentPackageFedExPriorityAlertTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentPackageFedExPriorityAlertTypeFedEx',
        'ItemFulfillmentHazmatTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentHazmatTypeFedEx',
        'ItemFulfillmentAncillaryEndorsementFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentAncillaryEndorsementFedEx',
        'ItemFulfillmentAccessibilityTypeFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\ItemFulfillmentAccessibilityTypeFedEx',
        'TransactionChargeType' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\TransactionChargeType',
        'AccountingTransactionRevCommitStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\AccountingTransactionRevCommitStatus',
        'AccountingTransactionRevenueStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Types\AccountingTransactionRevenueStatus',
        'Opportunity' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Opportunity',
        'OpportunitySalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunitySalesTeam',
        'OpportunitySalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunitySalesTeamList',
        'OpportunityItem' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunityItem',
        'OpportunityItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunityItemList',
        'OpportunityCompetitors' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunityCompetitors',
        'OpportunityCompetitorsList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunityCompetitorsList',
        'OpportunitySearch' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunitySearch',
        'OpportunitySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunitySearchAdvanced',
        'OpportunitySearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunitySearchRow',
        'OpportunityPartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\OpportunityPartnersList',
        'SalesOrder' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrder',
        'SalesOrderSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrderSalesTeam',
        'SalesOrderSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrderSalesTeamList',
        'SalesOrderItem' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrderItem',
        'SalesOrderItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrderItemList',
        'SalesOrderPartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrderPartnersList',
        'SalesOrderShipGroupList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\SalesOrderShipGroupList',
        'TransactionSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\TransactionSearch',
        'TransactionSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\TransactionSearchAdvanced',
        'TransactionSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\TransactionSearchRow',
        'ItemFulfillment' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillment',
        'ItemFulfillmentItem' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentItem',
        'ItemFulfillmentItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentItemList',
        'ItemFulfillmentPackage' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackage',
        'ItemFulfillmentPackageList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageList',
        'ItemFulfillmentPackageUps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageUps',
        'ItemFulfillmentPackageUpsList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageUpsList',
        'ItemFulfillmentPackageUsps' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageUsps',
        'ItemFulfillmentPackageUspsList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageUspsList',
        'ItemFulfillmentPackageFedEx' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageFedEx',
        'ItemFulfillmentPackageFedExList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentPackageFedExList',
        'ItemFulfillmentShipGroupList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\ItemFulfillmentShipGroupList',
        'Invoice' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Invoice',
        'InvoiceSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceSalesTeam',
        'InvoiceSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceSalesTeamList',
        'InvoiceItem' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceItem',
        'InvoiceItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceItemList',
        'InvoiceItemCost' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceItemCost',
        'InvoiceItemCostList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceItemCostList',
        'InvoiceExpCost' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceExpCost',
        'InvoiceExpCostList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceExpCostList',
        'InvoiceTime' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceTime',
        'InvoiceTimeList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceTimeList',
        'InvoicePartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoicePartnersList',
        'InvoiceShipGroupList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\InvoiceShipGroupList',
        'CashSale' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSale',
        'CashSaleSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleSalesTeam',
        'CashSaleSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleSalesTeamList',
        'CashSaleItem' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleItem',
        'CashSaleItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleItemList',
        'CashSaleItemCost' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleItemCost',
        'CashSaleItemCostList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleItemCostList',
        'CashSaleExpCost' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleExpCost',
        'CashSaleExpCostList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleExpCostList',
        'CashSaleTime' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleTime',
        'CashSaleTimeList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleTimeList',
        'CashSalePartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSalePartnersList',
        'CashSaleShipGroupList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\CashSaleShipGroupList',
        'Estimate' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\Estimate',
        'EstimateItem' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\EstimateItem',
        'EstimateItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\EstimateItemList',
        'EstimateSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\EstimateSalesTeam',
        'EstimateSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\EstimateSalesTeamList',
        'EstimatePartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\EstimatePartnersList',
        'EstimateShipGroupList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\EstimateShipGroupList',
        'GiftCertRedemption' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\GiftCertRedemption',
        'GiftCertRedemptionList' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\GiftCertRedemptionList',
        'TransactionShipGroup' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\TransactionShipGroup',
        'AccountingTransactionSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\AccountingTransactionSearch',
        'AccountingTransactionSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\AccountingTransactionSearchAdvanced',
        'AccountingTransactionSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Sales\AccountingTransactionSearchRow',
        'PurchaseOrderOrderStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\PurchaseOrderOrderStatus',
        'TransactionBillVarianceStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\TransactionBillVarianceStatus',
        'VendorReturnAuthorizationOrderStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\Types\VendorReturnAuthorizationOrderStatus',
        'PurchLandedCostList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchLandedCostList',
        'VendorBill' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorBill',
        'VendorBillExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorBillExpense',
        'VendorBillExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorBillExpenseList',
        'VendorBillItem' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorBillItem',
        'VendorBillItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorBillItemList',
        'PurchaseOrder' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseOrder',
        'PurchaseOrderExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseOrderExpense',
        'PurchaseOrderExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseOrderExpenseList',
        'PurchaseOrderItem' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseOrderItem',
        'PurchaseOrderItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseOrderItemList',
        'ItemReceipt' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\ItemReceipt',
        'ItemReceiptItem' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\ItemReceiptItem',
        'ItemReceiptItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\ItemReceiptItemList',
        'ItemReceiptExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\ItemReceiptExpense',
        'ItemReceiptExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\ItemReceiptExpenseList',
        'VendorPayment' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorPayment',
        'VendorPaymentApply' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorPaymentApply',
        'VendorPaymentApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorPaymentApplyList',
        'VendorPaymentCredit' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorPaymentCredit',
        'VendorPaymentCreditList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorPaymentCreditList',
        'VendorCredit' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCredit',
        'VendorCreditExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCreditExpense',
        'VendorCreditExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCreditExpenseList',
        'VendorCreditItem' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCreditItem',
        'VendorCreditItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCreditItemList',
        'VendorCreditApply' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCreditApply',
        'VendorCreditApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorCreditApplyList',
        'VendorReturnAuthorization' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorReturnAuthorization',
        'VendorReturnAuthorizationExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorReturnAuthorizationExpense',
        'VendorReturnAuthorizationExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorReturnAuthorizationExpenseList',
        'VendorReturnAuthorizationItem' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorReturnAuthorizationItem',
        'VendorReturnAuthorizationItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\VendorReturnAuthorizationItemList',
        'PurchaseRequisition' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisition',
        'PurchaseRequisitionExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisitionExpense',
        'PurchaseRequisitionExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisitionExpenseList',
        'PurchaseRequisitionItem' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisitionItem',
        'PurchaseRequisitionItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisitionItemList',
        'PurchaseRequisitionAccountingBookDetail' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisitionAccountingBookDetail',
        'PurchaseRequisitionAccountingBookDetailList' => 'Nzolt\NetSuite\WebServices\Transactions\Purchases\PurchaseRequisitionAccountingBookDetailList',
        'ReturnAuthorizationOrderStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\Types\ReturnAuthorizationOrderStatus',
        'ChargeStage' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\Types\ChargeStage',
        'ChargeUse' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\Types\ChargeUse',
        'CashRefund' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CashRefund',
        'CashRefundItem' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CashRefundItem',
        'CashRefundItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CashRefundItemList',
        'CashRefundSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CashRefundSalesTeam',
        'CashRefundSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CashRefundSalesTeamList',
        'CashRefundPartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CashRefundPartnersList',
        'CustomerPayment' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPayment',
        'CustomerPaymentApply' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPaymentApply',
        'CustomerPaymentApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPaymentApplyList',
        'CustomerPaymentCredit' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPaymentCredit',
        'CustomerPaymentCreditList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPaymentCreditList',
        'CustomerPaymentDeposit' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPaymentDeposit',
        'CustomerPaymentDepositList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerPaymentDepositList',
        'ReturnAuthorization' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ReturnAuthorization',
        'ReturnAuthorizationItem' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ReturnAuthorizationItem',
        'ReturnAuthorizationItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ReturnAuthorizationItemList',
        'ReturnAuthorizationSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ReturnAuthorizationSalesTeam',
        'ReturnAuthorizationSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ReturnAuthorizationSalesTeamList',
        'ReturnAuthorizationPartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ReturnAuthorizationPartnersList',
        'CreditMemo' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemo',
        'CreditMemoSalesTeam' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoSalesTeam',
        'CreditMemoSalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoSalesTeamList',
        'CreditMemoItem' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoItem',
        'CreditMemoItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoItemList',
        'CreditMemoApply' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoApply',
        'CreditMemoApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoApplyList',
        'CreditMemoPartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CreditMemoPartnersList',
        'CustomerRefund' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerRefund',
        'CustomerRefundApply' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerRefundApply',
        'CustomerRefundApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerRefundApplyList',
        'CustomerRefundDeposit' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerRefundDeposit',
        'CustomerRefundDepositList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerRefundDepositList',
        'CustomerDeposit' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerDeposit',
        'CustomerDepositApply' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerDepositApply',
        'CustomerDepositApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\CustomerDepositApplyList',
        'DepositApplication' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\DepositApplication',
        'DepositApplicationApply' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\DepositApplicationApply',
        'DepositApplicationApplyList' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\DepositApplicationApplyList',
        'Charge' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\Charge',
        'ChargeSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ChargeSearch',
        'ChargeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ChargeSearchAdvanced',
        'ChargeSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Customers\ChargeSearchRow',
        'BudgetBudgetType' => 'Nzolt\NetSuite\WebServices\Transactions\Financial\Types\BudgetBudgetType',
        'Budget' => 'Nzolt\NetSuite\WebServices\Transactions\Financial\Budget',
        'BudgetSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Financial\BudgetSearch',
        'BudgetSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Financial\BudgetSearchAdvanced',
        'BudgetSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Financial\BudgetSearchRow',
        'CheckLandedCostList' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\CheckLandedCostList',
        'Check' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\Check',
        'CheckExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\CheckExpense',
        'CheckExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\CheckExpenseList',
        'CheckItem' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\CheckItem',
        'CheckItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\CheckItemList',
        'Deposit' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\Deposit',
        'DepositPayment' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\DepositPayment',
        'DepositPaymentList' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\DepositPaymentList',
        'DepositCashBack' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\DepositCashBack',
        'DepositCashBackList' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\DepositCashBackList',
        'DepositOther' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\DepositOther',
        'DepositOtherList' => 'Nzolt\NetSuite\WebServices\Transactions\Bank\DepositOtherList',
        'TransferOrderItemCommitInventory' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\TransferOrderItemCommitInventory',
        'TransferOrderOrderStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\TransferOrderOrderStatus',
        'WorkOrderItemItemCreatePo' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderItemItemCreatePo',
        'WorkOrderItemItemCommitInventory' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderItemItemCommitInventory',
        'WorkOrderOrderStatus' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderOrderStatus',
        'WorkOrderSchedulingMethod' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderSchedulingMethod',
        'InventoryAdjustment' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryAdjustment',
        'InventoryAdjustmentInventory' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryAdjustmentInventory',
        'InventoryAdjustmentInventoryList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryAdjustmentInventoryList',
        'AssemblyBuild' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\AssemblyBuild',
        'AssemblyUnbuild' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\AssemblyUnbuild',
        'AssemblyComponent' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\AssemblyComponent',
        'AssemblyComponentList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\AssemblyComponentList',
        'TransferOrder' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\TransferOrder',
        'TransferOrderItem' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\TransferOrderItem',
        'TransferOrderItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\TransferOrderItemList',
        'InterCompanyTransferOrder' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InterCompanyTransferOrder',
        'InterCompanyTransferOrderItem' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InterCompanyTransferOrderItem',
        'InterCompanyTransferOrderItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InterCompanyTransferOrderItemList',
        'WorkOrder' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrder',
        'WorkOrderItem' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderItem',
        'WorkOrderItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderItemList',
        'SalesTeamList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\SalesTeamList',
        'PartnersList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\PartnersList',
        'InventoryTransfer' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryTransfer',
        'InventoryTransferInventory' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryTransferInventory',
        'InventoryTransferInventoryList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryTransferInventoryList',
        'BinTransfer' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\BinTransfer',
        'BinTransferInventory' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\BinTransferInventory',
        'BinTransferInventoryList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\BinTransferInventoryList',
        'BinWorksheet' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\BinWorksheet',
        'BinWorksheetItem' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\BinWorksheetItem',
        'BinWorksheetItemList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\BinWorksheetItemList',
        'WorkOrderIssue' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderIssue',
        'WorkOrderIssueComponent' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderIssueComponent',
        'WorkOrderIssueComponentList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderIssueComponentList',
        'WorkOrderCompletion' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderCompletion',
        'WorkOrderCompletionComponent' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderCompletionComponent',
        'WorkOrderCompletionComponentList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderCompletionComponentList',
        'WorkOrderClose' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderClose',
        'WorkOrderCompletionOperation' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderCompletionOperation',
        'WorkOrderCompletionOperationList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\WorkOrderCompletionOperationList',
        'InventoryCostRevaluation' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryCostRevaluation',
        'InventoryCostRevaluationCostComponent' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryCostRevaluationCostComponent',
        'InventoryCostRevaluationCostComponentList' => 'Nzolt\NetSuite\WebServices\Transactions\Inventory\InventoryCostRevaluationCostComponentList',
        'JournalEntry' => 'Nzolt\NetSuite\WebServices\Transactions\General\JournalEntry',
        'JournalEntryLine' => 'Nzolt\NetSuite\WebServices\Transactions\General\JournalEntryLine',
        'JournalEntryLineList' => 'Nzolt\NetSuite\WebServices\Transactions\General\JournalEntryLineList',
        'InterCompanyJournalEntry' => 'Nzolt\NetSuite\WebServices\Transactions\General\InterCompanyJournalEntry',
        'InterCompanyJournalEntryLine' => 'Nzolt\NetSuite\WebServices\Transactions\General\InterCompanyJournalEntryLine',
        'InterCompanyJournalEntryLineList' => 'Nzolt\NetSuite\WebServices\Transactions\General\InterCompanyJournalEntryLineList',
        'StatisticalJournalEntry' => 'Nzolt\NetSuite\WebServices\Transactions\General\StatisticalJournalEntry',
        'StatisticalJournalEntryLine' => 'Nzolt\NetSuite\WebServices\Transactions\General\StatisticalJournalEntryLine',
        'StatisticalJournalEntryLineList' => 'Nzolt\NetSuite\WebServices\Transactions\General\StatisticalJournalEntryLineList',
        'CustomizationFieldType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationFieldType',
        'CustomizationDynamicDefault' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDynamicDefault',
        'CustomizationDisplayType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationDisplayType',
        'CustomizationFilterCompareType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationFilterCompareType',
        'CustomRecordTypePermissionsPermittedLevel' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomRecordTypePermissionsPermittedLevel',
        'CustomRecordTypePermissionsRestriction' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomRecordTypePermissionsRestriction',
        'ItemCustomFieldItemSubType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\ItemCustomFieldItemSubType',
        'CustomizationAccessLevel' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationAccessLevel',
        'CustomizationSearchLevel' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationSearchLevel',
        'CustomRecordTypeAccessType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomRecordTypeAccessType',
        'CustomRecord' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecord',
        'CustomRecordSearch' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordSearch',
        'CustomRecordSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordSearchAdvanced',
        'CustomRecordSearchRow' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordSearchRow',
        'CustomList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomList',
        'CustomListCustomValue' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListCustomValue',
        'CustomListCustomValueList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListCustomValueList',
        'CustomListTranslations' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListTranslations',
        'CustomListTranslationsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListTranslationsList',
        'CustomRecordType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordType',
        'CustomRecordTypeFieldList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeFieldList',
        'CustomRecordTypeTabs' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeTabs',
        'CustomRecordTypeTabsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeTabsList',
        'CustomRecordTypeForms' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeForms',
        'CustomRecordTypeFormsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeFormsList',
        'CustomRecordTypeOnlineForms' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeOnlineForms',
        'CustomRecordTypeOnlineFormsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeOnlineFormsList',
        'CustomRecordTypePermissions' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypePermissions',
        'CustomRecordTypePermissionsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypePermissionsList',
        'CustomRecordTypeLinks' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeLinks',
        'CustomRecordTypeLinksList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeLinksList',
        'CustomRecordTypeManagers' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeManagers',
        'CustomRecordTypeManagersList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeManagersList',
        'CustomRecordTypeChildren' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeChildren',
        'CustomRecordTypeChildrenList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeChildrenList',
        'CustomRecordTypeParents' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeParents',
        'CustomRecordTypeParentsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeParentsList',
        'CustomRecordTypeTranslations' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeTranslations',
        'CustomRecordTypeTranslationsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeTranslationsList',
        'CustomRecordTypeSublists' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeSublists',
        'CustomRecordTypeSublistsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTypeSublistsList',
        'CustomFieldType' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldType',
        'EntityCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\EntityCustomField',
        'EntityCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\EntityCustomFieldFilter',
        'EntityCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\EntityCustomFieldFilterList',
        'FldFilterSelList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\FldFilterSelList',
        'CrmCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CrmCustomField',
        'CrmCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CrmCustomFieldFilter',
        'CrmCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CrmCustomFieldFilterList',
        'OtherCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\OtherCustomField',
        'OtherCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\OtherCustomFieldFilter',
        'OtherCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\OtherCustomFieldFilterList',
        'ItemCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemCustomField',
        'ItemCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemCustomFieldFilter',
        'ItemCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemCustomFieldFilterList',
        'TransactionBodyCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\TransactionBodyCustomField',
        'TransactionBodyCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\TransactionBodyCustomFieldFilter',
        'TransactionBodyCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\TransactionBodyCustomFieldFilterList',
        'TransactionColumnCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\TransactionColumnCustomField',
        'TransactionColumnCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\TransactionColumnCustomFieldFilter',
        'TransactionColumnCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\TransactionColumnCustomFieldFilterList',
        'ItemOptionCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemOptionCustomField',
        'ItemsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemsList',
        'ItemOptionCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemOptionCustomFieldFilter',
        'ItemOptionCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemOptionCustomFieldFilterList',
        'CustomRecordCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordCustomField',
        'CustomRecordCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordCustomFieldFilter',
        'CustomRecordCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordCustomFieldFilterList',
        'CustomFieldRoleAccess' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldRoleAccess',
        'CustomFieldRoleAccessList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldRoleAccessList',
        'CustomFieldDepartmentAccess' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldDepartmentAccess',
        'CustomFieldDepartmentAccessList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldDepartmentAccessList',
        'CustomFieldSubAccess' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldSubAccess',
        'CustomFieldSubAccessList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldSubAccessList',
        'LanguageValue' => 'Nzolt\NetSuite\WebServices\Setup\Customization\LanguageValue',
        'LanguageValueList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\LanguageValueList',
        'CustomFieldTranslations' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldTranslations',
        'CustomFieldTranslationsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomFieldTranslationsList',
        'ItemNumberCustomField' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemNumberCustomField',
        'ItemNumberCustomFieldFilter' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemNumberCustomFieldFilter',
        'ItemNumberCustomFieldFilterList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\ItemNumberCustomFieldFilterList',
        'CustomListSearch' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListSearch',
        'CustomListSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListSearchAdvanced',
        'CustomListSearchRow' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomListSearchRow',
        'AppDefinition' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppDefinition',
        'AppDefinitionPackages' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppDefinitionPackages',
        'AppDefinitionPackagesList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppDefinitionPackagesList',
        'AppDefinitionSearch' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppDefinitionSearch',
        'AppDefinitionSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppDefinitionSearchAdvanced',
        'AppDefinitionSearchRow' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppDefinitionSearchRow',
        'AppPackage' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppPackage',
        'AppPackageSearch' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppPackageSearch',
        'AppPackageSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppPackageSearchAdvanced',
        'AppPackageSearchRow' => 'Nzolt\NetSuite\WebServices\Setup\Customization\AppPackageSearchRow',
        'CustomRecordTranslations' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTranslations',
        'CustomRecordTranslationsList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomRecordTranslationsList',
        'CustomTransaction' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomTransaction',
        'CustomTransactionLine' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomTransactionLine',
        'CustomTransactionLineList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomTransactionLineList',
        'CustomTransactionAccountingBookDetail' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomTransactionAccountingBookDetail',
        'CustomTransactionAccountingBookDetailList' => 'Nzolt\NetSuite\WebServices\Setup\Customization\CustomTransactionAccountingBookDetailList',
        'EmployeePayFrequency' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeePayFrequency',
        'EmployeeUseTimeData' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeUseTimeData',
        'EmployeeCommissionPaymentPreference' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeCommissionPaymentPreference',
        'Gender' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\Gender',
        'EmployeeAccruedTimeAccrualMethod' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeAccruedTimeAccrualMethod',
        'EmployeeDirectDepositAccountStatus' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\EmployeeDirectDepositAccountStatus',
        'PayrollItemItemTypeNoHierarchy' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Types\PayrollItemItemTypeNoHierarchy',
        'Employee' => 'Nzolt\NetSuite\WebServices\Lists\Employees\Employee',
        'EmployeeSubscriptions' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeSubscriptions',
        'EmployeeSubscriptionsList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeSubscriptionsList',
        'EmployeeAddressbook' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeAddressbook',
        'EmployeeAddressbookList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeAddressbookList',
        'EmployeeRoles' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeRoles',
        'EmployeeRolesList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeRolesList',
        'EmployeeSearch' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeSearch',
        'EmployeeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeSearchAdvanced',
        'EmployeeSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeSearchRow',
        'EmployeeEmergencyContact' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeEmergencyContact',
        'EmployeeEmergencyContactList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeEmergencyContactList',
        'EmployeeHrEducation' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeHrEducation',
        'EmployeeHrEducationList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeHrEducationList',
        'EmployeeAccruedTime' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeAccruedTime',
        'EmployeeAccruedTimeList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeAccruedTimeList',
        'EmployeeDeduction' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeDeduction',
        'EmployeeDeductionList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeDeductionList',
        'EmployeeCompanyContribution' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeCompanyContribution',
        'EmployeeCompanyContributionList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeCompanyContributionList',
        'EmployeeEarning' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeEarning',
        'EmployeeEarningList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeEarningList',
        'EmployeeDirectDeposit' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeDirectDeposit',
        'EmployeeDirectDepositList' => 'Nzolt\NetSuite\WebServices\Lists\Employees\EmployeeDirectDepositList',
        'PayrollItem' => 'Nzolt\NetSuite\WebServices\Lists\Employees\PayrollItem',
        'PayrollItemSearch' => 'Nzolt\NetSuite\WebServices\Lists\Employees\PayrollItemSearch',
        'PayrollItemSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Employees\PayrollItemSearchAdvanced',
        'PayrollItemSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Employees\PayrollItemSearchRow',
        'MediaType' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\MediaType',
        'FileAttachFrom' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\FileAttachFrom',
        'FileEncoding' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\FileEncoding',
        'TextFileEncoding' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\TextFileEncoding',
        'FolderFolderType' => 'Nzolt\NetSuite\WebServices\Documents\Filecabinet\Types\FolderFolderType',
        'SiteCategoryTranslation' => 'Nzolt\NetSuite\WebServices\Lists\Website\SiteCategoryTranslation',
        'SiteCategoryTranslationList' => 'Nzolt\NetSuite\WebServices\Lists\Website\SiteCategoryTranslationList',
        'SiteCategoryPresentationItemList' => 'Nzolt\NetSuite\WebServices\Lists\Website\SiteCategoryPresentationItemList',
        'SiteCategorySearch' => 'Nzolt\NetSuite\WebServices\Lists\Website\SiteCategorySearch',
        'SiteCategorySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Website\SiteCategorySearchAdvanced',
        'SiteCategorySearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Website\SiteCategorySearchRow',
        'TimeBillTimeType' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\Types\TimeBillTimeType',
        'TimeBill' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeBill',
        'TimeBillSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeBillSearch',
        'TimeBillSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeBillSearchAdvanced',
        'TimeBillSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeBillSearchRow',
        'ExpenseReport' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\ExpenseReport',
        'ExpenseReportExpense' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\ExpenseReportExpense',
        'ExpenseReportExpenseList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\ExpenseReportExpenseList',
        'PaycheckJournal' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournal',
        'PaycheckJournalCompanyTax' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalCompanyTax',
        'PaycheckJournalCompanyTaxList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalCompanyTaxList',
        'PaycheckJournalDeduction' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalDeduction',
        'PaycheckJournalDeductionList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalDeductionList',
        'PaycheckJournalCompanyContribution' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalCompanyContribution',
        'PaycheckJournalCompanyContributionList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalCompanyContributionList',
        'PaycheckJournalEarning' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalEarning',
        'PaycheckJournalEarningList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalEarningList',
        'PaycheckJournalEmployeeTax' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalEmployeeTax',
        'PaycheckJournalEmployeeTaxList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\PaycheckJournalEmployeeTaxList',
        'TimeEntry' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeEntry',
        'TimeSheet' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeSheet',
        'TimeSheetTimeGrid' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeSheetTimeGrid',
        'TimeSheetTimeGridList' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeSheetTimeGridList',
        'TimeEntrySearch' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeEntrySearch',
        'TimeEntrySearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeEntrySearchAdvanced',
        'TimeEntrySearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeEntrySearchRow',
        'TimeSheetSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeSheetSearch',
        'TimeSheetSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeSheetSearchAdvanced',
        'TimeSheetSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Employees\TimeSheetSearchRow',
        'CampaignCampaignDirectMailStatus' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignCampaignDirectMailStatus',
        'CampaignCampaignEmailStatus' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignCampaignEmailStatus',
        'CampaignCampaignEventStatus' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignCampaignEventStatus',
        'CampaignChannelEventType' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignChannelEventType',
        'CampaignResponseResponse' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignResponseResponse',
        'CampaignCampaignEventType' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignCampaignEventType',
        'CampaignResponse' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignResponse',
        'CampaignStatus' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignStatus',
        'PromotionCodeApplyDiscountTo' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\PromotionCodeApplyDiscountTo',
        'CampaignResponseCategory' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\CampaignResponseCategory',
        'PromotionCodeUseType' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Types\PromotionCodeUseType',
        'Campaign' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\Campaign',
        'CampaignEmail' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignEmail',
        'CampaignEmailList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignEmailList',
        'CampaignDirectMail' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignDirectMail',
        'CampaignDirectMailList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignDirectMailList',
        'CampaignEvent' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignEvent',
        'CampaignEventList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignEventList',
        'CampaignEventResponse' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignEventResponse',
        'CampaignEventResponseList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignEventResponseList',
        'CampaignSearch' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignSearch',
        'CampaignSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignSearchAdvanced',
        'CampaignSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignSearchRow',
        'CampaignCategory' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignCategory',
        'CampaignAudience' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignAudience',
        'CampaignFamily' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignFamily',
        'CampaignSearchEngine' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignSearchEngine',
        'CampaignChannel' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignChannel',
        'CampaignOffer' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignOffer',
        'CampaignResponseResponses' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignResponseResponses',
        'CampaignResponseResponsesList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignResponseResponsesList',
        'CampaignVertical' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignVertical',
        'CampaignSubscription' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CampaignSubscription',
        'PromotionCode' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCode',
        'PromotionCodePartners' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodePartners',
        'PromotionCodePartnersList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodePartnersList',
        'PromotionCodeItems' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeItems',
        'PromotionCodeItemsList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeItemsList',
        'PromotionCodeSearch' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeSearch',
        'PromotionCodeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeSearchAdvanced',
        'PromotionCodeSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeSearchRow',
        'PromotionCodeCurrency' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeCurrency',
        'PromotionCodeCurrencyList' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\PromotionCodeCurrencyList',
        'CouponCode' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CouponCode',
        'CouponCodeSearch' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CouponCodeSearch',
        'CouponCodeSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CouponCodeSearchAdvanced',
        'CouponCodeSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Marketing\CouponCodeSearchRow',
        'DemandPlanCalendarType' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\DemandPlanCalendarType',
        'DemandPlanMonth' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\DemandPlanMonth',
        'DayOfTheWeek' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\DayOfTheWeek',
        'ItemDemandPlanProjectionMethod' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\ItemDemandPlanProjectionMethod',
        'ItemSupplyPlanOrderType' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\Types\ItemSupplyPlanOrderType',
        'ItemDemandPlan' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemDemandPlan',
        'DemandPlan' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\DemandPlan',
        'DemandPlanMatrix' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\DemandPlanMatrix',
        'PeriodDemandPlanList' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\PeriodDemandPlanList',
        'PeriodDemandPlan' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\PeriodDemandPlan',
        'ItemDemandPlanSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemDemandPlanSearch',
        'ItemDemandPlanSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemDemandPlanSearchAdvanced',
        'ItemDemandPlanSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemDemandPlanSearchRow',
        'ItemSupplyPlan' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemSupplyPlan',
        'ItemSupplyPlanOrder' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemSupplyPlanOrder',
        'ItemSupplyPlanOrderList' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemSupplyPlanOrderList',
        'ItemSupplyPlanSearch' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemSupplyPlanSearch',
        'ItemSupplyPlanSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemSupplyPlanSearchAdvanced',
        'ItemSupplyPlanSearchRow' => 'Nzolt\NetSuite\WebServices\Transactions\Demandplanning\ItemSupplyPlanSearchRow',
        'ManufacturingOperationTaskStatus' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingOperationTaskStatus',
        'ManufacturingOperationTaskPredecessorPredecessorType' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingOperationTaskPredecessorPredecessorType',
        'ManufacturingLagType' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\Types\ManufacturingLagType',
        'ManufacturingCostTemplate' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingCostTemplate',
        'ManufacturingCostDetail' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingCostDetail',
        'ManufacturingCostDetailList' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingCostDetailList',
        'ManufacturingCostTemplateSearch' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingCostTemplateSearch',
        'ManufacturingCostTemplateSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingCostTemplateSearchAdvanced',
        'ManufacturingCostTemplateSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingCostTemplateSearchRow',
        'ManufacturingRouting' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRouting',
        'ManufacturingRoutingRoutingStep' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingRoutingStep',
        'ManufacturingRoutingRoutingStepList' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingRoutingStepList',
        'ManufacturingRoutingSearch' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingSearch',
        'ManufacturingRoutingSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingSearchAdvanced',
        'ManufacturingRoutingSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingSearchRow',
        'ManufacturingOperationTask' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingOperationTask',
        'ManufacturingOperationTaskSearch' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingOperationTaskSearch',
        'ManufacturingOperationTaskSearchAdvanced' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingOperationTaskSearchAdvanced',
        'ManufacturingOperationTaskSearchRow' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingOperationTaskSearchRow',
        'ManufacturingOperationTaskPredecessor' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingOperationTaskPredecessor',
        'ManufacturingOperationTaskPredecessorList' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingOperationTaskPredecessorList',
        'ManufacturingRoutingRoutingComponent' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingRoutingComponent',
        'ManufacturingRoutingRoutingComponentList' => 'Nzolt\NetSuite\WebServices\Lists\Supplychain\ManufacturingRoutingRoutingComponentList',
    );

     /*
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl=null, $options=array()) {
    	parent::__construct($wsdl, $options);
    }


    /**
     * Service Call: login
     * Parameter options:
     * (LoginRequest) parameters
     * @return LoginResponse
     * @throws Exception invalid function signature message
     */
    public function login(LoginRequest $arg) {
    	return $this->makeSoapCall("login", $arg);
    }



    /**
     * Service Call: ssoLogin
     * Parameter options:
     * (SsoLoginRequest) parameters
     * @return SsoLoginResponse
     * @throws Exception invalid function signature message
     */
    public function ssoLogin(SsoLoginRequest $arg) {
    	return $this->makeSoapCall("ssoLogin", $arg);
    }



    /**
     * Service Call: mapSso
     * Parameter options:
     * (MapSsoRequest) parameters
     * @return MapSsoResponse
     * @throws Exception invalid function signature message
     */
    public function mapSso(MapSsoRequest $arg) {
    	return $this->makeSoapCall("mapSso", $arg);
    }



    /**
     * Service Call: changePassword
     * Parameter options:
     * (ChangePasswordRequest) parameters
     * @return ChangePasswordResponse
     * @throws Exception invalid function signature message
     */
    public function changePassword(ChangePasswordRequest $arg) {
    	return $this->makeSoapCall("changePassword", $arg);
    }



    /**
     * Service Call: changeEmail
     * Parameter options:
     * (ChangeEmailRequest) parameters
     * @return ChangeEmailResponse
     * @throws Exception invalid function signature message
     */
    public function changeEmail(ChangeEmailRequest $arg) {
    	return $this->makeSoapCall("changeEmail", $arg);
    }



    /**
     * Service Call: logout
     * Parameter options:
     * (LogoutRequest) parameters
     * @return LogoutResponse
     * @throws Exception invalid function signature message
     */
    public function logout(LogoutRequest $arg) {
    	return $this->makeSoapCall("logout", $arg);
    }



    /**
     * Service Call: add
     * Parameter options:
     * (AddRequest) parameters
     * @return AddResponse
     * @throws Exception invalid function signature message
     */
    public function add(AddRequest $arg) {
    	return $this->makeSoapCall("add", $arg);
    }



    /**
     * Service Call: delete
     * Parameter options:
     * (DeleteRequest) parameters
     * @return DeleteResponse
     * @throws Exception invalid function signature message
     */
    public function delete(DeleteRequest $arg) {
    	return $this->makeSoapCall("delete", $arg);
    }



    /**
     * Service Call: search
     * Parameter options:
     * (SearchRequest) parameters
     * @return SearchResponse
     * @throws Exception invalid function signature message
     */
    public function search(SearchRequest $arg) {
    	return $this->makeSoapCall("search", $arg);
    }



    /**
     * Service Call: searchMore
     * Parameter options:
     * (SearchMoreRequest) parameters
     * @return SearchMoreResponse
     * @throws Exception invalid function signature message
     */
    public function searchMore(SearchMoreRequest $arg) {
    	return $this->makeSoapCall("searchMore", $arg);
    }



    /**
     * Service Call: searchMoreWithId
     * Parameter options:
     * (SearchMoreWithIdRequest) parameters
     * @return SearchMoreWithIdResponse
     * @throws Exception invalid function signature message
     */
    public function searchMoreWithId(SearchMoreWithIdRequest $arg) {
    	return $this->makeSoapCall("searchMoreWithId", $arg);
    }



    /**
     * Service Call: searchNext
     * Parameter options:
     * (SearchNextRequest) parameters
     * @return SearchNextResponse
     * @throws Exception invalid function signature message
     */
    public function searchNext(SearchNextRequest $arg) {
    	return $this->makeSoapCall("searchNext", $arg);
    }



    /**
     * Service Call: update
     * Parameter options:
     * (UpdateRequest) parameters
     * @return UpdateResponse
     * @throws Exception invalid function signature message
     */
    public function update(UpdateRequest $arg) {
    	return $this->makeSoapCall("update", $arg);
    }



    /**
     * Service Call: upsert
     * Parameter options:
     * (UpsertRequest) parameters
     * @return UpsertResponse
     * @throws Exception invalid function signature message
     */
    public function upsert(UpsertRequest $arg) {
    	return $this->makeSoapCall("upsert", $arg);
    }



    /**
     * Service Call: addList
     * Parameter options:
     * (AddListRequest) parameters
     * @return AddListResponse
     * @throws Exception invalid function signature message
     */
    public function addList(AddListRequest $arg) {
    	return $this->makeSoapCall("addList", $arg);
    }



    /**
     * Service Call: deleteList
     * Parameter options:
     * (DeleteListRequest) parameters
     * @return DeleteListResponse
     * @throws Exception invalid function signature message
     */
    public function deleteList(DeleteListRequest $arg) {
    	return $this->makeSoapCall("deleteList", $arg);
    }



    /**
     * Service Call: updateList
     * Parameter options:
     * (UpdateListRequest) parameters
     * @return UpdateListResponse
     * @throws Exception invalid function signature message
     */
    public function updateList(UpdateListRequest $arg) {
    	return $this->makeSoapCall("updateList", $arg);
    }



    /**
     * Service Call: upsertList
     * Parameter options:
     * (UpsertListRequest) parameters
     * @return UpsertListResponse
     * @throws Exception invalid function signature message
     */
    public function upsertList(UpsertListRequest $arg) {
    	return $this->makeSoapCall("upsertList", $arg);
    }



    /**
     * Service Call: get
     * Parameter options:
     * (GetRequest) parameters
     * @return GetResponse
     * @throws Exception invalid function signature message
     */
    public function get(GetRequest $arg) {
    	return $this->makeSoapCall("get", $arg);
    }



    /**
     * Service Call: getList
     * Parameter options:
     * (GetListRequest) parameters
     * @return GetListResponse
     * @throws Exception invalid function signature message
     */
    public function getList(GetListRequest $arg) {
    	return $this->makeSoapCall("getList", $arg);
    }



    /**
     * Service Call: getAll
     * Parameter options:
     * (GetAllRequest) parameters
     * @return GetAllResponse
     * @throws Exception invalid function signature message
     */
    public function getAll(GetAllRequest $arg) {
    	return $this->makeSoapCall("getAll", $arg);
    }



    /**
     * Service Call: getSavedSearch
     * Parameter options:
     * (GetSavedSearchRequest) parameters
     * @return GetSavedSearchResponse
     * @throws Exception invalid function signature message
     */
    public function getSavedSearch(GetSavedSearchRequest $arg) {
    	return $this->makeSoapCall("getSavedSearch", $arg);
    }



    /**
     * Service Call: getCustomizationId
     * Parameter options:
     * (GetCustomizationIdRequest) parameters
     * @return GetCustomizationIdResponse
     * @throws Exception invalid function signature message
     */
    public function getCustomizationId(GetCustomizationIdRequest $arg) {
    	return $this->makeSoapCall("getCustomizationId", $arg);
    }



    /**
     * Service Call: initialize
     * Parameter options:
     * (InitializeRequest) parameters
     * @return InitializeResponse
     * @throws Exception invalid function signature message
     */
    public function initialize(InitializeRequest $arg) {
    	return $this->makeSoapCall("initialize", $arg);
    }



    /**
     * Service Call: initializeList
     * Parameter options:
     * (InitializeListRequest) parameters
     * @return InitializeListResponse
     * @throws Exception invalid function signature message
     */
    public function initializeList(InitializeListRequest $arg) {
    	return $this->makeSoapCall("initializeList", $arg);
    }



    /**
     * Service Call: getSelectValue
     * Parameter options:
     * (getSelectValueRequest) parameters
     * @return getSelectValueResponse
     * @throws Exception invalid function signature message
     */
    public function getSelectValue(getSelectValueRequest $arg) {
    	return $this->makeSoapCall("getSelectValue", $arg);
    }



    /**
     * Service Call: getItemAvailability
     * Parameter options:
     * (GetItemAvailabilityRequest) parameters
     * @return GetItemAvailabilityResponse
     * @throws Exception invalid function signature message
     */
    public function getItemAvailability(GetItemAvailabilityRequest $arg) {
    	return $this->makeSoapCall("getItemAvailability", $arg);
    }



    /**
     * Service Call: getBudgetExchangeRate
     * Parameter options:
     * (GetBudgetExchangeRateRequest) parameters
     * @return GetBudgetExchangeRateResponse
     * @throws Exception invalid function signature message
     */
    public function getBudgetExchangeRate(GetBudgetExchangeRateRequest $arg) {
    	return $this->makeSoapCall("getBudgetExchangeRate", $arg);
    }



    /**
     * Service Call: getConsolidatedExchangeRate
     * Parameter options:
     * (GetConsolidatedExchangeRateRequest) parameters
     * @return GetConsolidatedExchangeRateResponse
     * @throws Exception invalid function signature message
     */
    public function getConsolidatedExchangeRate(GetConsolidatedExchangeRateRequest $arg) {
    	return $this->makeSoapCall("getConsolidatedExchangeRate", $arg);
    }



    /**
     * Service Call: getCurrencyRate
     * Parameter options:
     * (GetCurrencyRateRequest) parameters
     * @return GetCurrencyRateResponse
     * @throws Exception invalid function signature message
     */
    public function getCurrencyRate(GetCurrencyRateRequest $arg) {
    	return $this->makeSoapCall("getCurrencyRate", $arg);
    }



    /**
     * Service Call: getDataCenterUrls
     * Parameter options:
     * (GetDataCenterUrlsRequest) parameters
     * @return GetDataCenterUrlsResponse
     * @throws Exception invalid function signature message
     */
    public function getDataCenterUrls(GetDataCenterUrlsRequest $arg) {
    	return $this->makeSoapCall("getDataCenterUrls", $arg);
    }



    /**
     * Service Call: getPostingTransactionSummary
     * Parameter options:
     * (GetPostingTransactionSummaryRequest) parameters
     * @return GetPostingTransactionSummaryResponse
     * @throws Exception invalid function signature message
     */
    public function getPostingTransactionSummary(GetPostingTransactionSummaryRequest $arg) {
    	return $this->makeSoapCall("getPostingTransactionSummary", $arg);
    }



    /**
     * Service Call: getServerTime
     * Parameter options:
     * (GetServerTimeRequest) parameters
     * @return GetServerTimeResponse
     * @throws Exception invalid function signature message
     */
    public function getServerTime(GetServerTimeRequest $arg) {
    	return $this->makeSoapCall("getServerTime", $arg);
    }



    /**
     * Service Call: attach
     * Parameter options:
     * (AttachRequest) parameters
     * @return AttachResponse
     * @throws Exception invalid function signature message
     */
    public function attach(AttachRequest $arg) {
    	return $this->makeSoapCall("attach", $arg);
    }



    /**
     * Service Call: detach
     * Parameter options:
     * (DetachRequest) parameters
     * @return DetachResponse
     * @throws Exception invalid function signature message
     */
    public function detach(DetachRequest $arg) {
    	return $this->makeSoapCall("detach", $arg);
    }



    /**
     * Service Call: updateInviteeStatus
     * Parameter options:
     * (UpdateInviteeStatusRequest) parameters
     * @return UpdateInviteeStatusResponse
     * @throws Exception invalid function signature message
     */
    public function updateInviteeStatus(UpdateInviteeStatusRequest $arg) {
    	return $this->makeSoapCall("updateInviteeStatus", $arg);
    }



    /**
     * Service Call: updateInviteeStatusList
     * Parameter options:
     * (UpdateInviteeStatusListRequest) parameters
     * @return UpdateInviteeStatusListResponse
     * @throws Exception invalid function signature message
     */
    public function updateInviteeStatusList(UpdateInviteeStatusListRequest $arg) {
    	return $this->makeSoapCall("updateInviteeStatusList", $arg);
    }



    /**
     * Service Call: asyncAddList
     * Parameter options:
     * (AsyncAddListRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncAddList(AsyncAddListRequest $arg) {
    	return $this->makeSoapCall("asyncAddList", $arg);
    }



    /**
     * Service Call: asyncUpdateList
     * Parameter options:
     * (AsyncUpdateListRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncUpdateList(AsyncUpdateListRequest $arg) {
    	return $this->makeSoapCall("asyncUpdateList", $arg);
    }



    /**
     * Service Call: asyncUpsertList
     * Parameter options:
     * (AsyncUpsertListRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncUpsertList(AsyncUpsertListRequest $arg) {
    	return $this->makeSoapCall("asyncUpsertList", $arg);
    }



    /**
     * Service Call: asyncDeleteList
     * Parameter options:
     * (AsyncDeleteListRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncDeleteList(AsyncDeleteListRequest $arg) {
    	return $this->makeSoapCall("asyncDeleteList", $arg);
    }



    /**
     * Service Call: asyncGetList
     * Parameter options:
     * (AsyncGetListRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncGetList(AsyncGetListRequest $arg) {
    	return $this->makeSoapCall("asyncGetList", $arg);
    }



    /**
     * Service Call: asyncInitializeList
     * Parameter options:
     * (AsyncInitializeListRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncInitializeList(AsyncInitializeListRequest $arg) {
    	return $this->makeSoapCall("asyncInitializeList", $arg);
    }



    /**
     * Service Call: asyncSearch
     * Parameter options:
     * (AsyncSearchRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function asyncSearch(AsyncSearchRequest $arg) {
    	return $this->makeSoapCall("asyncSearch", $arg);
    }



    /**
     * Service Call: getAsyncResult
     * Parameter options:
     * (GetAsyncResultRequest) parameters
     * @return GetAsyncResultResponse
     * @throws Exception invalid function signature message
     */
    public function getAsyncResult(GetAsyncResultRequest $arg) {
    	return $this->makeSoapCall("getAsyncResult", $arg);
    }



    /**
     * Service Call: checkAsyncStatus
     * Parameter options:
     * (CheckAsyncStatusRequest) parameters
     * @return AsyncStatusResponse
     * @throws Exception invalid function signature message
     */
    public function checkAsyncStatus(CheckAsyncStatusRequest $arg) {
    	return $this->makeSoapCall("checkAsyncStatus", $arg);
    }



    /**
     * Service Call: getDeleted
     * Parameter options:
     * (GetDeletedRequest) parameters
     * @return GetDeletedResponse
     * @throws Exception invalid function signature message
     */
    public function getDeleted(GetDeletedRequest $arg) {
    	return $this->makeSoapCall("getDeleted", $arg);
    }


}