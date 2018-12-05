<?php

namespace Nzolt\NetSuite;

class NetSuiteService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Passport' => 'Nzolt\\NetSuite\\Passport',
      'SsoPassport' => 'Nzolt\\NetSuite\\SsoPassport',
      'SsoCredentials' => 'Nzolt\\NetSuite\\SsoCredentials',
      'TokenPassportSignature' => 'Nzolt\\NetSuite\\TokenPassportSignature',
      'TokenPassport' => 'Nzolt\\NetSuite\\TokenPassport',
      'ChangePassword' => 'Nzolt\\NetSuite\\ChangePassword',
      'ChangeEmail' => 'Nzolt\\NetSuite\\ChangeEmail',
      'StatusDetail' => 'Nzolt\\NetSuite\\StatusDetail',
      'Status' => 'Nzolt\\NetSuite\\Status',
      'WsRole' => 'Nzolt\\NetSuite\\WsRole',
      'WsRoleList' => 'Nzolt\\NetSuite\\WsRoleList',
      'Record' => 'Nzolt\\NetSuite\\Record',
      'NullField' => 'Nzolt\\NetSuite\\NullField',
      'SearchRecord' => 'Nzolt\\NetSuite\\SearchRecord',
      'SearchRecordBasic' => 'Nzolt\\NetSuite\\SearchRecordBasic',
      'SearchRow' => 'Nzolt\\NetSuite\\SearchRow',
      'SearchRowBasic' => 'Nzolt\\NetSuite\\SearchRowBasic',
      'SearchResult' => 'Nzolt\\NetSuite\\SearchResult',
      'AsyncStatusResult' => 'Nzolt\\NetSuite\\AsyncStatusResult',
      'GetAllResult' => 'Nzolt\\NetSuite\\GetAllResult',
      'GetSavedSearchResult' => 'Nzolt\\NetSuite\\GetSavedSearchResult',
      'GetCustomizationIdResult' => 'Nzolt\\NetSuite\\GetCustomizationIdResult',
      'GetSelectValueResult' => 'Nzolt\\NetSuite\\GetSelectValueResult',
      'RecordList' => 'Nzolt\\NetSuite\\RecordList',
      'SearchRowList' => 'Nzolt\\NetSuite\\SearchRowList',
      'RecordRefList' => 'Nzolt\\NetSuite\\RecordRefList',
      'BaseRef' => 'Nzolt\\NetSuite\\BaseRef',
      'BaseRefList' => 'Nzolt\\NetSuite\\BaseRefList',
      'RecordRef' => 'Nzolt\\NetSuite\\RecordRef',
      'Duration' => 'Nzolt\\NetSuite\\Duration',
      'CustomRecordRef' => 'Nzolt\\NetSuite\\CustomRecordRef',
      'CustomTransactionRef' => 'Nzolt\\NetSuite\\CustomTransactionRef',
      'CustomizationRef' => 'Nzolt\\NetSuite\\CustomizationRef',
      'CustomizationRefList' => 'Nzolt\\NetSuite\\CustomizationRefList',
      'InitializeRecord' => 'Nzolt\\NetSuite\\InitializeRecord',
      'InitializeRef' => 'Nzolt\\NetSuite\\InitializeRef',
      'InitializeRefList' => 'Nzolt\\NetSuite\\InitializeRefList',
      'InitializeAuxRef' => 'Nzolt\\NetSuite\\InitializeAuxRef',
      'UpdateInviteeStatusReference' => 'Nzolt\\NetSuite\\UpdateInviteeStatusReference',
      'GetAllRecord' => 'Nzolt\\NetSuite\\GetAllRecord',
      'GetSavedSearchRecord' => 'Nzolt\\NetSuite\\GetSavedSearchRecord',
      'CustomizationType' => 'Nzolt\\NetSuite\\CustomizationType',
      'ListOrRecordRef' => 'Nzolt\\NetSuite\\ListOrRecordRef',
      'CustomFieldRef' => 'Nzolt\\NetSuite\\CustomFieldRef',
      'LongCustomFieldRef' => 'Nzolt\\NetSuite\\LongCustomFieldRef',
      'DoubleCustomFieldRef' => 'Nzolt\\NetSuite\\DoubleCustomFieldRef',
      'BooleanCustomFieldRef' => 'Nzolt\\NetSuite\\BooleanCustomFieldRef',
      'StringCustomFieldRef' => 'Nzolt\\NetSuite\\StringCustomFieldRef',
      'DateCustomFieldRef' => 'Nzolt\\NetSuite\\DateCustomFieldRef',
      'SelectCustomFieldRef' => 'Nzolt\\NetSuite\\SelectCustomFieldRef',
      'MultiSelectCustomFieldRef' => 'Nzolt\\NetSuite\\MultiSelectCustomFieldRef',
      'CustomFieldList' => 'Nzolt\\NetSuite\\CustomFieldList',
      'DimensionRef' => 'Nzolt\\NetSuite\\DimensionRef',
      'StringDimensionRef' => 'Nzolt\\NetSuite\\StringDimensionRef',
      'SelectDimensionRef' => 'Nzolt\\NetSuite\\SelectDimensionRef',
      'DimensionList' => 'Nzolt\\NetSuite\\DimensionList',
      'SearchBooleanField' => 'Nzolt\\NetSuite\\SearchBooleanField',
      'SearchStringField' => 'Nzolt\\NetSuite\\SearchStringField',
      'SearchLongField' => 'Nzolt\\NetSuite\\SearchLongField',
      'SearchTextNumberField' => 'Nzolt\\NetSuite\\SearchTextNumberField',
      'SearchDoubleField' => 'Nzolt\\NetSuite\\SearchDoubleField',
      'SearchDateField' => 'Nzolt\\NetSuite\\SearchDateField',
      'SearchEnumMultiSelectField' => 'Nzolt\\NetSuite\\SearchEnumMultiSelectField',
      'SearchMultiSelectField' => 'Nzolt\\NetSuite\\SearchMultiSelectField',
      'SearchCustomField' => 'Nzolt\\NetSuite\\SearchCustomField',
      'SearchBooleanCustomField' => 'Nzolt\\NetSuite\\SearchBooleanCustomField',
      'SearchStringCustomField' => 'Nzolt\\NetSuite\\SearchStringCustomField',
      'SearchLongCustomField' => 'Nzolt\\NetSuite\\SearchLongCustomField',
      'SearchDoubleCustomField' => 'Nzolt\\NetSuite\\SearchDoubleCustomField',
      'SearchDateCustomField' => 'Nzolt\\NetSuite\\SearchDateCustomField',
      'SearchEnumMultiSelectCustomField' => 'Nzolt\\NetSuite\\SearchEnumMultiSelectCustomField',
      'SearchMultiSelectCustomField' => 'Nzolt\\NetSuite\\SearchMultiSelectCustomField',
      'SearchCustomFieldList' => 'Nzolt\\NetSuite\\SearchCustomFieldList',
      'SearchColumnField' => 'Nzolt\\NetSuite\\SearchColumnField',
      'SearchColumnBooleanField' => 'Nzolt\\NetSuite\\SearchColumnBooleanField',
      'SearchColumnStringField' => 'Nzolt\\NetSuite\\SearchColumnStringField',
      'SearchColumnLongField' => 'Nzolt\\NetSuite\\SearchColumnLongField',
      'SearchColumnTextNumberField' => 'Nzolt\\NetSuite\\SearchColumnTextNumberField',
      'SearchColumnDoubleField' => 'Nzolt\\NetSuite\\SearchColumnDoubleField',
      'SearchColumnDateField' => 'Nzolt\\NetSuite\\SearchColumnDateField',
      'SearchColumnEnumSelectField' => 'Nzolt\\NetSuite\\SearchColumnEnumSelectField',
      'SearchColumnSelectField' => 'Nzolt\\NetSuite\\SearchColumnSelectField',
      'SearchColumnCustomField' => 'Nzolt\\NetSuite\\SearchColumnCustomField',
      'SearchColumnBooleanCustomField' => 'Nzolt\\NetSuite\\SearchColumnBooleanCustomField',
      'SearchColumnStringCustomField' => 'Nzolt\\NetSuite\\SearchColumnStringCustomField',
      'SearchColumnLongCustomField' => 'Nzolt\\NetSuite\\SearchColumnLongCustomField',
      'SearchColumnDoubleCustomField' => 'Nzolt\\NetSuite\\SearchColumnDoubleCustomField',
      'SearchColumnDateCustomField' => 'Nzolt\\NetSuite\\SearchColumnDateCustomField',
      'SearchColumnEnumMultiSelectCustomField' => 'Nzolt\\NetSuite\\SearchColumnEnumMultiSelectCustomField',
      'SearchColumnSelectCustomField' => 'Nzolt\\NetSuite\\SearchColumnSelectCustomField',
      'SearchColumnMultiSelectCustomField' => 'Nzolt\\NetSuite\\SearchColumnMultiSelectCustomField',
      'SearchColumnCustomFieldList' => 'Nzolt\\NetSuite\\SearchColumnCustomFieldList',
      'ItemAvailabilityFilter' => 'Nzolt\\NetSuite\\ItemAvailabilityFilter',
      'ItemAvailability' => 'Nzolt\\NetSuite\\ItemAvailability',
      'ItemAvailabilityList' => 'Nzolt\\NetSuite\\ItemAvailabilityList',
      'GetItemAvailabilityResult' => 'Nzolt\\NetSuite\\GetItemAvailabilityResult',
      'BudgetExchangeRateFilter' => 'Nzolt\\NetSuite\\BudgetExchangeRateFilter',
      'BudgetExchangeRate' => 'Nzolt\\NetSuite\\BudgetExchangeRate',
      'BudgetExchangeRateList' => 'Nzolt\\NetSuite\\BudgetExchangeRateList',
      'GetBudgetExchangeRateResult' => 'Nzolt\\NetSuite\\GetBudgetExchangeRateResult',
      'CurrencyRateFilter' => 'Nzolt\\NetSuite\\CurrencyRateFilter',
      'CurrencyRate' => 'Nzolt\\NetSuite\\CurrencyRate',
      'CurrencyRateList' => 'Nzolt\\NetSuite\\CurrencyRateList',
      'GetCurrencyRateResult' => 'Nzolt\\NetSuite\\GetCurrencyRateResult',
      'DataCenterUrls' => 'Nzolt\\NetSuite\\DataCenterUrls',
      'GetDataCenterUrlsResult' => 'Nzolt\\NetSuite\\GetDataCenterUrlsResult',
      'PostingTransactionSummaryField' => 'Nzolt\\NetSuite\\PostingTransactionSummaryField',
      'PostingTransactionSummaryFilter' => 'Nzolt\\NetSuite\\PostingTransactionSummaryFilter',
      'PostingTransactionSummary' => 'Nzolt\\NetSuite\\PostingTransactionSummary',
      'PostingTransactionSummaryList' => 'Nzolt\\NetSuite\\PostingTransactionSummaryList',
      'GetPostingTransactionSummaryResult' => 'Nzolt\\NetSuite\\GetPostingTransactionSummaryResult',
      'GetSelectValueFieldDescription' => 'Nzolt\\NetSuite\\GetSelectValueFieldDescription',
      'GetSelectValueFilter' => 'Nzolt\\NetSuite\\GetSelectValueFilter',
      'GetSelectFilterByFieldValueList' => 'Nzolt\\NetSuite\\GetSelectFilterByFieldValueList',
      'GetSelectFilterByFieldValue' => 'Nzolt\\NetSuite\\GetSelectFilterByFieldValue',
      'GetServerTimeResult' => 'Nzolt\\NetSuite\\GetServerTimeResult',
      'DeletedRecord' => 'Nzolt\\NetSuite\\DeletedRecord',
      'DeletedRecordList' => 'Nzolt\\NetSuite\\DeletedRecordList',
      'GetDeletedResult' => 'Nzolt\\NetSuite\\GetDeletedResult',
      'GetDeletedFilter' => 'Nzolt\\NetSuite\\GetDeletedFilter',
      'AttachReference' => 'Nzolt\\NetSuite\\AttachReference',
      'DetachReference' => 'Nzolt\\NetSuite\\DetachReference',
      'AttachContactReference' => 'Nzolt\\NetSuite\\AttachContactReference',
      'AttachBasicReference' => 'Nzolt\\NetSuite\\AttachBasicReference',
      'DetachBasicReference' => 'Nzolt\\NetSuite\\DetachBasicReference',
      'DeletionReason' => 'Nzolt\\NetSuite\\DeletionReason',
      'SoapFault' => 'Nzolt\\NetSuite\\SoapFault',
      'InsufficientPermissionFault' => 'Nzolt\\NetSuite\\InsufficientPermissionFault',
      'InvalidAccountFault' => 'Nzolt\\NetSuite\\InvalidAccountFault',
      'InvalidCredentialsFault' => 'Nzolt\\NetSuite\\InvalidCredentialsFault',
      'InvalidSessionFault' => 'Nzolt\\NetSuite\\InvalidSessionFault',
      'ExceededConcurrentRequestLimitFault' => 'Nzolt\\NetSuite\\ExceededConcurrentRequestLimitFault',
      'ExceededRequestLimitFault' => 'Nzolt\\NetSuite\\ExceededRequestLimitFault',
      'ExceededUsageLimitFault' => 'Nzolt\\NetSuite\\ExceededUsageLimitFault',
      'ExceededRecordCountFault' => 'Nzolt\\NetSuite\\ExceededRecordCountFault',
      'InvalidVersionFault' => 'Nzolt\\NetSuite\\InvalidVersionFault',
      'ExceededRequestSizeFault' => 'Nzolt\\NetSuite\\ExceededRequestSizeFault',
      'AsyncFault' => 'Nzolt\\NetSuite\\AsyncFault',
      'UnexpectedErrorFault' => 'Nzolt\\NetSuite\\UnexpectedErrorFault',
      'ApplicationInfo' => 'Nzolt\\NetSuite\\ApplicationInfo',
      'PartnerInfo' => 'Nzolt\\NetSuite\\PartnerInfo',
      'DocumentInfo' => 'Nzolt\\NetSuite\\DocumentInfo',
      'Preferences' => 'Nzolt\\NetSuite\\Preferences',
      'SearchPreferences' => 'Nzolt\\NetSuite\\SearchPreferences',
      'SessionResponse' => 'Nzolt\\NetSuite\\SessionResponse',
      'WriteResponse' => 'Nzolt\\NetSuite\\WriteResponse',
      'ReadResponse' => 'Nzolt\\NetSuite\\ReadResponse',
      'WriteResponseList' => 'Nzolt\\NetSuite\\WriteResponseList',
      'ReadResponseList' => 'Nzolt\\NetSuite\\ReadResponseList',
      'LoginResponse' => 'Nzolt\\NetSuite\\LoginResponse',
      'SsoLoginResponse' => 'Nzolt\\NetSuite\\SsoLoginResponse',
      'MapSsoResponse' => 'Nzolt\\NetSuite\\MapSsoResponse',
      'ChangePasswordResponse' => 'Nzolt\\NetSuite\\ChangePasswordResponse',
      'ChangeEmailResponse' => 'Nzolt\\NetSuite\\ChangeEmailResponse',
      'LogoutResponse' => 'Nzolt\\NetSuite\\LogoutResponse',
      'AddResponse' => 'Nzolt\\NetSuite\\AddResponse',
      'AddListResponse' => 'Nzolt\\NetSuite\\AddListResponse',
      'UpdateResponse' => 'Nzolt\\NetSuite\\UpdateResponse',
      'UpdateListResponse' => 'Nzolt\\NetSuite\\UpdateListResponse',
      'UpsertResponse' => 'Nzolt\\NetSuite\\UpsertResponse',
      'UpsertListResponse' => 'Nzolt\\NetSuite\\UpsertListResponse',
      'DeleteResponse' => 'Nzolt\\NetSuite\\DeleteResponse',
      'DeleteListResponse' => 'Nzolt\\NetSuite\\DeleteListResponse',
      'SearchResponse' => 'Nzolt\\NetSuite\\SearchResponse',
      'SearchMoreResponse' => 'Nzolt\\NetSuite\\SearchMoreResponse',
      'SearchMoreWithIdResponse' => 'Nzolt\\NetSuite\\SearchMoreWithIdResponse',
      'SearchNextResponse' => 'Nzolt\\NetSuite\\SearchNextResponse',
      'GetResponse' => 'Nzolt\\NetSuite\\GetResponse',
      'GetListResponse' => 'Nzolt\\NetSuite\\GetListResponse',
      'GetAllResponse' => 'Nzolt\\NetSuite\\GetAllResponse',
      'GetSavedSearchResponse' => 'Nzolt\\NetSuite\\GetSavedSearchResponse',
      'GetCustomizationIdResponse' => 'Nzolt\\NetSuite\\GetCustomizationIdResponse',
      'InitializeResponse' => 'Nzolt\\NetSuite\\InitializeResponse',
      'InitializeListResponse' => 'Nzolt\\NetSuite\\InitializeListResponse',
      'getSelectValueResponse' => 'Nzolt\\NetSuite\\getSelectValueResponse',
      'GetItemAvailabilityResponse' => 'Nzolt\\NetSuite\\GetItemAvailabilityResponse',
      'GetBudgetExchangeRateResponse' => 'Nzolt\\NetSuite\\GetBudgetExchangeRateResponse',
      'GetCurrencyRateResponse' => 'Nzolt\\NetSuite\\GetCurrencyRateResponse',
      'GetDataCenterUrlsResponse' => 'Nzolt\\NetSuite\\GetDataCenterUrlsResponse',
      'GetPostingTransactionSummaryResponse' => 'Nzolt\\NetSuite\\GetPostingTransactionSummaryResponse',
      'GetServerTimeResponse' => 'Nzolt\\NetSuite\\GetServerTimeResponse',
      'AttachResponse' => 'Nzolt\\NetSuite\\AttachResponse',
      'DetachResponse' => 'Nzolt\\NetSuite\\DetachResponse',
      'UpdateInviteeStatusResponse' => 'Nzolt\\NetSuite\\UpdateInviteeStatusResponse',
      'UpdateInviteeStatusListResponse' => 'Nzolt\\NetSuite\\UpdateInviteeStatusListResponse',
      'AsyncStatusResponse' => 'Nzolt\\NetSuite\\AsyncStatusResponse',
      'GetAsyncResultResponse' => 'Nzolt\\NetSuite\\GetAsyncResultResponse',
      'AsyncResult' => 'Nzolt\\NetSuite\\AsyncResult',
      'AsyncAddListResult' => 'Nzolt\\NetSuite\\AsyncAddListResult',
      'AsyncUpdateListResult' => 'Nzolt\\NetSuite\\AsyncUpdateListResult',
      'AsyncUpsertListResult' => 'Nzolt\\NetSuite\\AsyncUpsertListResult',
      'AsyncDeleteListResult' => 'Nzolt\\NetSuite\\AsyncDeleteListResult',
      'AsyncGetListResult' => 'Nzolt\\NetSuite\\AsyncGetListResult',
      'AsyncSearchResult' => 'Nzolt\\NetSuite\\AsyncSearchResult',
      'AsyncInitializeListResult' => 'Nzolt\\NetSuite\\AsyncInitializeListResult',
      'GetDeletedResponse' => 'Nzolt\\NetSuite\\GetDeletedResponse',
      'LoginRequest' => 'Nzolt\\NetSuite\\LoginRequest',
      'SsoLoginRequest' => 'Nzolt\\NetSuite\\SsoLoginRequest',
      'MapSsoRequest' => 'Nzolt\\NetSuite\\MapSsoRequest',
      'ChangePasswordRequest' => 'Nzolt\\NetSuite\\ChangePasswordRequest',
      'ChangeEmailRequest' => 'Nzolt\\NetSuite\\ChangeEmailRequest',
      'LogoutRequest' => 'Nzolt\\NetSuite\\LogoutRequest',
      'AddRequest' => 'Nzolt\\NetSuite\\AddRequest',
      'DeleteRequest' => 'Nzolt\\NetSuite\\DeleteRequest',
      'SearchRequest' => 'Nzolt\\NetSuite\\SearchRequest',
      'SearchMoreRequest' => 'Nzolt\\NetSuite\\SearchMoreRequest',
      'SearchMoreWithIdRequest' => 'Nzolt\\NetSuite\\SearchMoreWithIdRequest',
      'SearchNextRequest' => 'Nzolt\\NetSuite\\SearchNextRequest',
      'UpdateRequest' => 'Nzolt\\NetSuite\\UpdateRequest',
      'UpsertRequest' => 'Nzolt\\NetSuite\\UpsertRequest',
      'AddListRequest' => 'Nzolt\\NetSuite\\AddListRequest',
      'DeleteListRequest' => 'Nzolt\\NetSuite\\DeleteListRequest',
      'UpdateListRequest' => 'Nzolt\\NetSuite\\UpdateListRequest',
      'UpsertListRequest' => 'Nzolt\\NetSuite\\UpsertListRequest',
      'GetRequest' => 'Nzolt\\NetSuite\\GetRequest',
      'GetListRequest' => 'Nzolt\\NetSuite\\GetListRequest',
      'GetAllRequest' => 'Nzolt\\NetSuite\\GetAllRequest',
      'GetSavedSearchRequest' => 'Nzolt\\NetSuite\\GetSavedSearchRequest',
      'GetCustomizationIdRequest' => 'Nzolt\\NetSuite\\GetCustomizationIdRequest',
      'InitializeRequest' => 'Nzolt\\NetSuite\\InitializeRequest',
      'InitializeListRequest' => 'Nzolt\\NetSuite\\InitializeListRequest',
      'getSelectValueRequest' => 'Nzolt\\NetSuite\\getSelectValueRequest',
      'GetItemAvailabilityRequest' => 'Nzolt\\NetSuite\\GetItemAvailabilityRequest',
      'GetBudgetExchangeRateRequest' => 'Nzolt\\NetSuite\\GetBudgetExchangeRateRequest',
      'GetCurrencyRateRequest' => 'Nzolt\\NetSuite\\GetCurrencyRateRequest',
      'GetDataCenterUrlsRequest' => 'Nzolt\\NetSuite\\GetDataCenterUrlsRequest',
      'GetPostingTransactionSummaryRequest' => 'Nzolt\\NetSuite\\GetPostingTransactionSummaryRequest',
      'GetServerTimeRequest' => 'Nzolt\\NetSuite\\GetServerTimeRequest',
      'AttachRequest' => 'Nzolt\\NetSuite\\AttachRequest',
      'DetachRequest' => 'Nzolt\\NetSuite\\DetachRequest',
      'AsyncAddListRequest' => 'Nzolt\\NetSuite\\AsyncAddListRequest',
      'UpdateInviteeStatusRequest' => 'Nzolt\\NetSuite\\UpdateInviteeStatusRequest',
      'UpdateInviteeStatusListRequest' => 'Nzolt\\NetSuite\\UpdateInviteeStatusListRequest',
      'AsyncUpdateListRequest' => 'Nzolt\\NetSuite\\AsyncUpdateListRequest',
      'AsyncUpsertListRequest' => 'Nzolt\\NetSuite\\AsyncUpsertListRequest',
      'AsyncDeleteListRequest' => 'Nzolt\\NetSuite\\AsyncDeleteListRequest',
      'AsyncGetListRequest' => 'Nzolt\\NetSuite\\AsyncGetListRequest',
      'AsyncInitializeListRequest' => 'Nzolt\\NetSuite\\AsyncInitializeListRequest',
      'AsyncSearchRequest' => 'Nzolt\\NetSuite\\AsyncSearchRequest',
      'CheckAsyncStatusRequest' => 'Nzolt\\NetSuite\\CheckAsyncStatusRequest',
      'GetAsyncResultRequest' => 'Nzolt\\NetSuite\\GetAsyncResultRequest',
      'GetDeletedRequest' => 'Nzolt\\NetSuite\\GetDeletedRequest',
      'Address' => 'Nzolt\\NetSuite\\Address',
      'PresentationItem' => 'Nzolt\\NetSuite\\PresentationItem',
      'Partners' => 'Nzolt\\NetSuite\\Partners',
      'LandedCost' => 'Nzolt\\NetSuite\\LandedCost',
      'LandedCostDataList' => 'Nzolt\\NetSuite\\LandedCostDataList',
      'LandedCostData' => 'Nzolt\\NetSuite\\LandedCostData',
      'LandedCostSummary' => 'Nzolt\\NetSuite\\LandedCostSummary',
      'CustomerSalesTeam' => 'Nzolt\\NetSuite\\CustomerSalesTeam',
      'TimeItem' => 'Nzolt\\NetSuite\\TimeItem',
      'InventoryDetail' => 'Nzolt\\NetSuite\\InventoryDetail',
      'RecurrenceDowMaskList' => 'Nzolt\\NetSuite\\RecurrenceDowMaskList',
      'AccountingBookDetail' => 'Nzolt\\NetSuite\\AccountingBookDetail',
      'AccountingBookDetailList' => 'Nzolt\\NetSuite\\AccountingBookDetailList',
      'InventoryAssignmentList' => 'Nzolt\\NetSuite\\InventoryAssignmentList',
      'InventoryAssignment' => 'Nzolt\\NetSuite\\InventoryAssignment',
      'InventoryDetailSearchBasic' => 'Nzolt\\NetSuite\\InventoryDetailSearchBasic',
      'InventoryDetailSearchRowBasic' => 'Nzolt\\NetSuite\\InventoryDetailSearchRowBasic',
      'EntitySearchBasic' => 'Nzolt\\NetSuite\\EntitySearchBasic',
      'EntitySearchRowBasic' => 'Nzolt\\NetSuite\\EntitySearchRowBasic',
      'ContactSearchBasic' => 'Nzolt\\NetSuite\\ContactSearchBasic',
      'ContactSearchRowBasic' => 'Nzolt\\NetSuite\\ContactSearchRowBasic',
      'CustomerSearchBasic' => 'Nzolt\\NetSuite\\CustomerSearchBasic',
      'CustomerSearchRowBasic' => 'Nzolt\\NetSuite\\CustomerSearchRowBasic',
      'CalendarEventSearchBasic' => 'Nzolt\\NetSuite\\CalendarEventSearchBasic',
      'CalendarEventSearchRowBasic' => 'Nzolt\\NetSuite\\CalendarEventSearchRowBasic',
      'TaskSearchBasic' => 'Nzolt\\NetSuite\\TaskSearchBasic',
      'TaskSearchRowBasic' => 'Nzolt\\NetSuite\\TaskSearchRowBasic',
      'OpportunitySearchBasic' => 'Nzolt\\NetSuite\\OpportunitySearchBasic',
      'OpportunitySearchRowBasic' => 'Nzolt\\NetSuite\\OpportunitySearchRowBasic',
      'EmployeeSearchBasic' => 'Nzolt\\NetSuite\\EmployeeSearchBasic',
      'EmployeeSearchRowBasic' => 'Nzolt\\NetSuite\\EmployeeSearchRowBasic',
      'PhoneCallSearchBasic' => 'Nzolt\\NetSuite\\PhoneCallSearchBasic',
      'PhoneCallSearchRowBasic' => 'Nzolt\\NetSuite\\PhoneCallSearchRowBasic',
      'SupportCaseSearchBasic' => 'Nzolt\\NetSuite\\SupportCaseSearchBasic',
      'SupportCaseSearchRowBasic' => 'Nzolt\\NetSuite\\SupportCaseSearchRowBasic',
      'MessageSearchBasic' => 'Nzolt\\NetSuite\\MessageSearchBasic',
      'MessageSearchRowBasic' => 'Nzolt\\NetSuite\\MessageSearchRowBasic',
      'NoteSearchBasic' => 'Nzolt\\NetSuite\\NoteSearchBasic',
      'NoteSearchRowBasic' => 'Nzolt\\NetSuite\\NoteSearchRowBasic',
      'CustomRecordSearchBasic' => 'Nzolt\\NetSuite\\CustomRecordSearchBasic',
      'CustomRecordSearchRowBasic' => 'Nzolt\\NetSuite\\CustomRecordSearchRowBasic',
      'AccountSearchBasic' => 'Nzolt\\NetSuite\\AccountSearchBasic',
      'AccountSearchRowBasic' => 'Nzolt\\NetSuite\\AccountSearchRowBasic',
      'RevRecScheduleSearchBasic' => 'Nzolt\\NetSuite\\RevRecScheduleSearchBasic',
      'RevRecScheduleSearchRowBasic' => 'Nzolt\\NetSuite\\RevRecScheduleSearchRowBasic',
      'RevRecTemplateSearchBasic' => 'Nzolt\\NetSuite\\RevRecTemplateSearchBasic',
      'RevRecTemplateSearchRowBasic' => 'Nzolt\\NetSuite\\RevRecTemplateSearchRowBasic',
      'BinSearchBasic' => 'Nzolt\\NetSuite\\BinSearchBasic',
      'BinSearchRowBasic' => 'Nzolt\\NetSuite\\BinSearchRowBasic',
      'DepartmentSearchBasic' => 'Nzolt\\NetSuite\\DepartmentSearchBasic',
      'DepartmentSearchRowBasic' => 'Nzolt\\NetSuite\\DepartmentSearchRowBasic',
      'LocationSearchBasic' => 'Nzolt\\NetSuite\\LocationSearchBasic',
      'LocationSearchRowBasic' => 'Nzolt\\NetSuite\\LocationSearchRowBasic',
      'ClassificationSearchBasic' => 'Nzolt\\NetSuite\\ClassificationSearchBasic',
      'ClassificationSearchRowBasic' => 'Nzolt\\NetSuite\\ClassificationSearchRowBasic',
      'TransactionSearchBasic' => 'Nzolt\\NetSuite\\TransactionSearchBasic',
      'TransactionSearchRowBasic' => 'Nzolt\\NetSuite\\TransactionSearchRowBasic',
      'ItemSearchBasic' => 'Nzolt\\NetSuite\\ItemSearchBasic',
      'ItemSearchRowBasic' => 'Nzolt\\NetSuite\\ItemSearchRowBasic',
      'PartnerSearchBasic' => 'Nzolt\\NetSuite\\PartnerSearchBasic',
      'PartnerSearchRowBasic' => 'Nzolt\\NetSuite\\PartnerSearchRowBasic',
      'VendorSearchBasic' => 'Nzolt\\NetSuite\\VendorSearchBasic',
      'VendorSearchRowBasic' => 'Nzolt\\NetSuite\\VendorSearchRowBasic',
      'SiteCategorySearchBasic' => 'Nzolt\\NetSuite\\SiteCategorySearchBasic',
      'SiteCategorySearchRowBasic' => 'Nzolt\\NetSuite\\SiteCategorySearchRowBasic',
      'TimeBillSearchBasic' => 'Nzolt\\NetSuite\\TimeBillSearchBasic',
      'TimeBillSearchRowBasic' => 'Nzolt\\NetSuite\\TimeBillSearchRowBasic',
      'SolutionSearchBasic' => 'Nzolt\\NetSuite\\SolutionSearchBasic',
      'SolutionSearchRowBasic' => 'Nzolt\\NetSuite\\SolutionSearchRowBasic',
      'TopicSearchBasic' => 'Nzolt\\NetSuite\\TopicSearchBasic',
      'TopicSearchRowBasic' => 'Nzolt\\NetSuite\\TopicSearchRowBasic',
      'SubsidiarySearchBasic' => 'Nzolt\\NetSuite\\SubsidiarySearchBasic',
      'SubsidiarySearchRowBasic' => 'Nzolt\\NetSuite\\SubsidiarySearchRowBasic',
      'GiftCertificateSearchBasic' => 'Nzolt\\NetSuite\\GiftCertificateSearchBasic',
      'GiftCertificateSearchRowBasic' => 'Nzolt\\NetSuite\\GiftCertificateSearchRowBasic',
      'FolderSearchBasic' => 'Nzolt\\NetSuite\\FolderSearchBasic',
      'FolderSearchRowBasic' => 'Nzolt\\NetSuite\\FolderSearchRowBasic',
      'FileSearchBasic' => 'Nzolt\\NetSuite\\FileSearchBasic',
      'FileSearchRowBasic' => 'Nzolt\\NetSuite\\FileSearchRowBasic',
      'JobSearchBasic' => 'Nzolt\\NetSuite\\JobSearchBasic',
      'JobSearchRowBasic' => 'Nzolt\\NetSuite\\JobSearchRowBasic',
      'IssueSearchBasic' => 'Nzolt\\NetSuite\\IssueSearchBasic',
      'IssueSearchRowBasic' => 'Nzolt\\NetSuite\\IssueSearchRowBasic',
      'GroupMemberSearchBasic' => 'Nzolt\\NetSuite\\GroupMemberSearchBasic',
      'CampaignSearchBasic' => 'Nzolt\\NetSuite\\CampaignSearchBasic',
      'CampaignSearchRowBasic' => 'Nzolt\\NetSuite\\CampaignSearchRowBasic',
      'EntityGroupSearchBasic' => 'Nzolt\\NetSuite\\EntityGroupSearchBasic',
      'EntityGroupSearchRowBasic' => 'Nzolt\\NetSuite\\EntityGroupSearchRowBasic',
      'PromotionCodeSearchBasic' => 'Nzolt\\NetSuite\\PromotionCodeSearchBasic',
      'PromotionCodeSearchRowBasic' => 'Nzolt\\NetSuite\\PromotionCodeSearchRowBasic',
      'BudgetSearchBasic' => 'Nzolt\\NetSuite\\BudgetSearchBasic',
      'BudgetSearchRowBasic' => 'Nzolt\\NetSuite\\BudgetSearchRowBasic',
      'ProjectTaskSearchBasic' => 'Nzolt\\NetSuite\\ProjectTaskSearchBasic',
      'ProjectTaskSearchRowBasic' => 'Nzolt\\NetSuite\\ProjectTaskSearchRowBasic',
      'ProjectTaskAssignmentSearchBasic' => 'Nzolt\\NetSuite\\ProjectTaskAssignmentSearchBasic',
      'ProjectTaskAssignmentSearchRowBasic' => 'Nzolt\\NetSuite\\ProjectTaskAssignmentSearchRowBasic',
      'AccountingPeriodSearchBasic' => 'Nzolt\\NetSuite\\AccountingPeriodSearchBasic',
      'AccountingPeriodSearchRowBasic' => 'Nzolt\\NetSuite\\AccountingPeriodSearchRowBasic',
      'ContactCategorySearchBasic' => 'Nzolt\\NetSuite\\ContactCategorySearchBasic',
      'ContactCategorySearchRowBasic' => 'Nzolt\\NetSuite\\ContactCategorySearchRowBasic',
      'ContactRoleSearchBasic' => 'Nzolt\\NetSuite\\ContactRoleSearchBasic',
      'ContactRoleSearchRowBasic' => 'Nzolt\\NetSuite\\ContactRoleSearchRowBasic',
      'CustomerCategorySearchBasic' => 'Nzolt\\NetSuite\\CustomerCategorySearchBasic',
      'CustomerCategorySearchRowBasic' => 'Nzolt\\NetSuite\\CustomerCategorySearchRowBasic',
      'CustomerStatusSearchBasic' => 'Nzolt\\NetSuite\\CustomerStatusSearchBasic',
      'CustomerStatusSearchRowBasic' => 'Nzolt\\NetSuite\\CustomerStatusSearchRowBasic',
      'ExpenseCategorySearchBasic' => 'Nzolt\\NetSuite\\ExpenseCategorySearchBasic',
      'ExpenseCategorySearchRowBasic' => 'Nzolt\\NetSuite\\ExpenseCategorySearchRowBasic',
      'JobStatusSearchBasic' => 'Nzolt\\NetSuite\\JobStatusSearchBasic',
      'JobStatusSearchRowBasic' => 'Nzolt\\NetSuite\\JobStatusSearchRowBasic',
      'JobTypeSearchBasic' => 'Nzolt\\NetSuite\\JobTypeSearchBasic',
      'JobTypeSearchRowBasic' => 'Nzolt\\NetSuite\\JobTypeSearchRowBasic',
      'NoteTypeSearchBasic' => 'Nzolt\\NetSuite\\NoteTypeSearchBasic',
      'NoteTypeSearchRowBasic' => 'Nzolt\\NetSuite\\NoteTypeSearchRowBasic',
      'PartnerCategorySearchBasic' => 'Nzolt\\NetSuite\\PartnerCategorySearchBasic',
      'PartnerCategorySearchRowBasic' => 'Nzolt\\NetSuite\\PartnerCategorySearchRowBasic',
      'PaymentMethodSearchBasic' => 'Nzolt\\NetSuite\\PaymentMethodSearchBasic',
      'PaymentMethodSearchRowBasic' => 'Nzolt\\NetSuite\\PaymentMethodSearchRowBasic',
      'PriceLevelSearchBasic' => 'Nzolt\\NetSuite\\PriceLevelSearchBasic',
      'PriceLevelSearchRowBasic' => 'Nzolt\\NetSuite\\PriceLevelSearchRowBasic',
      'SalesRoleSearchBasic' => 'Nzolt\\NetSuite\\SalesRoleSearchBasic',
      'SalesRoleSearchRowBasic' => 'Nzolt\\NetSuite\\SalesRoleSearchRowBasic',
      'TermSearchBasic' => 'Nzolt\\NetSuite\\TermSearchBasic',
      'TermSearchRowBasic' => 'Nzolt\\NetSuite\\TermSearchRowBasic',
      'VendorCategorySearchBasic' => 'Nzolt\\NetSuite\\VendorCategorySearchBasic',
      'VendorCategorySearchRowBasic' => 'Nzolt\\NetSuite\\VendorCategorySearchRowBasic',
      'WinLossReasonSearchBasic' => 'Nzolt\\NetSuite\\WinLossReasonSearchBasic',
      'WinLossReasonSearchRowBasic' => 'Nzolt\\NetSuite\\WinLossReasonSearchRowBasic',
      'OriginatingLeadSearchBasic' => 'Nzolt\\NetSuite\\OriginatingLeadSearchBasic',
      'OriginatingLeadSearchRowBasic' => 'Nzolt\\NetSuite\\OriginatingLeadSearchRowBasic',
      'UnitsTypeSearchBasic' => 'Nzolt\\NetSuite\\UnitsTypeSearchBasic',
      'UnitsTypeSearchRowBasic' => 'Nzolt\\NetSuite\\UnitsTypeSearchRowBasic',
      'CustomListSearchBasic' => 'Nzolt\\NetSuite\\CustomListSearchBasic',
      'CustomListSearchRowBasic' => 'Nzolt\\NetSuite\\CustomListSearchRowBasic',
      'PricingGroupSearchBasic' => 'Nzolt\\NetSuite\\PricingGroupSearchBasic',
      'PricingGroupSearchRowBasic' => 'Nzolt\\NetSuite\\PricingGroupSearchRowBasic',
      'InventoryNumberSearchBasic' => 'Nzolt\\NetSuite\\InventoryNumberSearchBasic',
      'InventoryNumberSearchRowBasic' => 'Nzolt\\NetSuite\\InventoryNumberSearchRowBasic',
      'InventoryNumberBinSearchBasic' => 'Nzolt\\NetSuite\\InventoryNumberBinSearchBasic',
      'InventoryNumberBinSearchRowBasic' => 'Nzolt\\NetSuite\\InventoryNumberBinSearchRowBasic',
      'ItemBinNumberSearchBasic' => 'Nzolt\\NetSuite\\ItemBinNumberSearchBasic',
      'ItemBinNumberSearchRowBasic' => 'Nzolt\\NetSuite\\ItemBinNumberSearchRowBasic',
      'PricingSearchBasic' => 'Nzolt\\NetSuite\\PricingSearchBasic',
      'PricingSearchRowBasic' => 'Nzolt\\NetSuite\\PricingSearchRowBasic',
      'NexusSearchBasic' => 'Nzolt\\NetSuite\\NexusSearchBasic',
      'NexusSearchRowBasic' => 'Nzolt\\NetSuite\\NexusSearchRowBasic',
      'OtherNameCategorySearchBasic' => 'Nzolt\\NetSuite\\OtherNameCategorySearchBasic',
      'OtherNameCategorySearchRowBasic' => 'Nzolt\\NetSuite\\OtherNameCategorySearchRowBasic',
      'CustomerMessageSearchBasic' => 'Nzolt\\NetSuite\\CustomerMessageSearchBasic',
      'CustomerMessageSearchRowBasic' => 'Nzolt\\NetSuite\\CustomerMessageSearchRowBasic',
      'ItemDemandPlanSearchBasic' => 'Nzolt\\NetSuite\\ItemDemandPlanSearchBasic',
      'ItemDemandPlanSearchRowBasic' => 'Nzolt\\NetSuite\\ItemDemandPlanSearchRowBasic',
      'ItemSupplyPlanSearchBasic' => 'Nzolt\\NetSuite\\ItemSupplyPlanSearchBasic',
      'ItemSupplyPlanSearchRowBasic' => 'Nzolt\\NetSuite\\ItemSupplyPlanSearchRowBasic',
      'CurrencyRateSearchBasic' => 'Nzolt\\NetSuite\\CurrencyRateSearchBasic',
      'CurrencyRateSearchRowBasic' => 'Nzolt\\NetSuite\\CurrencyRateSearchRowBasic',
      'ItemRevisionSearchBasic' => 'Nzolt\\NetSuite\\ItemRevisionSearchBasic',
      'ItemRevisionSearchRowBasic' => 'Nzolt\\NetSuite\\ItemRevisionSearchRowBasic',
      'CouponCodeSearchBasic' => 'Nzolt\\NetSuite\\CouponCodeSearchBasic',
      'CouponCodeSearchRowBasic' => 'Nzolt\\NetSuite\\CouponCodeSearchRowBasic',
      'PayrollItemSearchBasic' => 'Nzolt\\NetSuite\\PayrollItemSearchBasic',
      'PayrollItemSearchRowBasic' => 'Nzolt\\NetSuite\\PayrollItemSearchRowBasic',
      'ManufacturingCostTemplateSearchBasic' => 'Nzolt\\NetSuite\\ManufacturingCostTemplateSearchBasic',
      'ManufacturingCostTemplateSearchRowBasic' => 'Nzolt\\NetSuite\\ManufacturingCostTemplateSearchRowBasic',
      'ManufacturingRoutingSearchBasic' => 'Nzolt\\NetSuite\\ManufacturingRoutingSearchBasic',
      'ManufacturingRoutingSearchRowBasic' => 'Nzolt\\NetSuite\\ManufacturingRoutingSearchRowBasic',
      'ManufacturingOperationTaskSearchBasic' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskSearchBasic',
      'ManufacturingOperationTaskSearchRowBasic' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskSearchRowBasic',
      'ResourceAllocationSearchBasic' => 'Nzolt\\NetSuite\\ResourceAllocationSearchBasic',
      'ResourceAllocationSearchRowBasic' => 'Nzolt\\NetSuite\\ResourceAllocationSearchRowBasic',
      'CustomSearchJoin' => 'Nzolt\\NetSuite\\CustomSearchJoin',
      'CustomSearchRowBasic' => 'Nzolt\\NetSuite\\CustomSearchRowBasic',
      'ChargeSearchBasic' => 'Nzolt\\NetSuite\\ChargeSearchBasic',
      'ChargeSearchRowBasic' => 'Nzolt\\NetSuite\\ChargeSearchRowBasic',
      'BillingScheduleSearchBasic' => 'Nzolt\\NetSuite\\BillingScheduleSearchBasic',
      'BillingScheduleSearchRowBasic' => 'Nzolt\\NetSuite\\BillingScheduleSearchRowBasic',
      'GlobalAccountMappingSearchBasic' => 'Nzolt\\NetSuite\\GlobalAccountMappingSearchBasic',
      'GlobalAccountMappingSearchRowBasic' => 'Nzolt\\NetSuite\\GlobalAccountMappingSearchRowBasic',
      'ItemAccountMappingSearchBasic' => 'Nzolt\\NetSuite\\ItemAccountMappingSearchBasic',
      'ItemAccountMappingSearchRowBasic' => 'Nzolt\\NetSuite\\ItemAccountMappingSearchRowBasic',
      'TimeEntrySearchBasic' => 'Nzolt\\NetSuite\\TimeEntrySearchBasic',
      'TimeEntrySearchRowBasic' => 'Nzolt\\NetSuite\\TimeEntrySearchRowBasic',
      'TimeSheetSearchBasic' => 'Nzolt\\NetSuite\\TimeSheetSearchBasic',
      'TimeSheetSearchRowBasic' => 'Nzolt\\NetSuite\\TimeSheetSearchRowBasic',
      'AccountingTransactionSearchBasic' => 'Nzolt\\NetSuite\\AccountingTransactionSearchBasic',
      'AccountingTransactionSearchRowBasic' => 'Nzolt\\NetSuite\\AccountingTransactionSearchRowBasic',
      'AddressSearchBasic' => 'Nzolt\\NetSuite\\AddressSearchBasic',
      'AddressSearchRowBasic' => 'Nzolt\\NetSuite\\AddressSearchRowBasic',
      'BillingAccountSearchBasic' => 'Nzolt\\NetSuite\\BillingAccountSearchBasic',
      'BillingAccountSearchRowBasic' => 'Nzolt\\NetSuite\\BillingAccountSearchRowBasic',
      'FairValuePriceSearchBasic' => 'Nzolt\\NetSuite\\FairValuePriceSearchBasic',
      'FairValuePriceSearchRowBasic' => 'Nzolt\\NetSuite\\FairValuePriceSearchRowBasic',
      'UsageSearchBasic' => 'Nzolt\\NetSuite\\UsageSearchBasic',
      'UsageSearchRowBasic' => 'Nzolt\\NetSuite\\UsageSearchRowBasic',
      'CostCategorySearchBasic' => 'Nzolt\\NetSuite\\CostCategorySearchBasic',
      'CostCategorySearchRowBasic' => 'Nzolt\\NetSuite\\CostCategorySearchRowBasic',
      'ConsolidatedExchangeRateSearchBasic' => 'Nzolt\\NetSuite\\ConsolidatedExchangeRateSearchBasic',
      'ConsolidatedExchangeRateSearchRowBasic' => 'Nzolt\\NetSuite\\ConsolidatedExchangeRateSearchRowBasic',
      'TaxDetails' => 'Nzolt\\NetSuite\\TaxDetails',
      'TaxDetailsList' => 'Nzolt\\NetSuite\\TaxDetailsList',
      'TaxDetailSearchBasic' => 'Nzolt\\NetSuite\\TaxDetailSearchBasic',
      'TaxDetailSearchRowBasic' => 'Nzolt\\NetSuite\\TaxDetailSearchRowBasic',
      'TaxGroupSearchBasic' => 'Nzolt\\NetSuite\\TaxGroupSearchBasic',
      'TaxGroupSearchRowBasic' => 'Nzolt\\NetSuite\\TaxGroupSearchRowBasic',
      'SalesTaxItemSearchBasic' => 'Nzolt\\NetSuite\\SalesTaxItemSearchBasic',
      'SalesTaxItemSearchRowBasic' => 'Nzolt\\NetSuite\\SalesTaxItemSearchRowBasic',
      'TaxTypeSearchBasic' => 'Nzolt\\NetSuite\\TaxTypeSearchBasic',
      'TaxTypeSearchRowBasic' => 'Nzolt\\NetSuite\\TaxTypeSearchRowBasic',
      'PaycheckSearchBasic' => 'Nzolt\\NetSuite\\PaycheckSearchBasic',
      'PaycheckSearchRowBasic' => 'Nzolt\\NetSuite\\PaycheckSearchRowBasic',
      'HcmJobSearchBasic' => 'Nzolt\\NetSuite\\HcmJobSearchBasic',
      'HcmJobSearchRowBasic' => 'Nzolt\\NetSuite\\HcmJobSearchRowBasic',
      'InboundShipmentSearchBasic' => 'Nzolt\\NetSuite\\InboundShipmentSearchBasic',
      'InboundShipmentSearchRowBasic' => 'Nzolt\\NetSuite\\InboundShipmentSearchRowBasic',
      'AssemblyItemBomSearchBasic' => 'Nzolt\\NetSuite\\AssemblyItemBomSearchBasic',
      'AssemblyItemBomSearchRowBasic' => 'Nzolt\\NetSuite\\AssemblyItemBomSearchRowBasic',
      'MseSubsidiarySearchBasic' => 'Nzolt\\NetSuite\\MseSubsidiarySearchBasic',
      'MseSubsidiarySearchRowBasic' => 'Nzolt\\NetSuite\\MseSubsidiarySearchRowBasic',
      'CalendarEvent' => 'Nzolt\\NetSuite\\CalendarEvent',
      'ExclusionDateList' => 'Nzolt\\NetSuite\\ExclusionDateList',
      'CalendarEventAttendee' => 'Nzolt\\NetSuite\\CalendarEventAttendee',
      'CalendarEventAttendeeList' => 'Nzolt\\NetSuite\\CalendarEventAttendeeList',
      'CalendarEventResource' => 'Nzolt\\NetSuite\\CalendarEventResource',
      'CalendarEventResourceList' => 'Nzolt\\NetSuite\\CalendarEventResourceList',
      'CalendarEventSearch' => 'Nzolt\\NetSuite\\CalendarEventSearch',
      'CalendarEventSearchAdvanced' => 'Nzolt\\NetSuite\\CalendarEventSearchAdvanced',
      'CalendarEventSearchRow' => 'Nzolt\\NetSuite\\CalendarEventSearchRow',
      'Task' => 'Nzolt\\NetSuite\\Task',
      'TaskContact' => 'Nzolt\\NetSuite\\TaskContact',
      'TaskContactList' => 'Nzolt\\NetSuite\\TaskContactList',
      'TaskSearch' => 'Nzolt\\NetSuite\\TaskSearch',
      'TaskSearchAdvanced' => 'Nzolt\\NetSuite\\TaskSearchAdvanced',
      'TaskSearchRow' => 'Nzolt\\NetSuite\\TaskSearchRow',
      'PhoneCall' => 'Nzolt\\NetSuite\\PhoneCall',
      'PhoneCallContact' => 'Nzolt\\NetSuite\\PhoneCallContact',
      'PhoneCallContactList' => 'Nzolt\\NetSuite\\PhoneCallContactList',
      'PhoneCallSearch' => 'Nzolt\\NetSuite\\PhoneCallSearch',
      'PhoneCallSearchAdvanced' => 'Nzolt\\NetSuite\\PhoneCallSearchAdvanced',
      'PhoneCallSearchRow' => 'Nzolt\\NetSuite\\PhoneCallSearchRow',
      'ProjectTask' => 'Nzolt\\NetSuite\\ProjectTask',
      'ProjectTaskPredecessor' => 'Nzolt\\NetSuite\\ProjectTaskPredecessor',
      'ProjectTaskPredecessorList' => 'Nzolt\\NetSuite\\ProjectTaskPredecessorList',
      'ProjectTaskAssignee' => 'Nzolt\\NetSuite\\ProjectTaskAssignee',
      'ProjectTaskAssigneeList' => 'Nzolt\\NetSuite\\ProjectTaskAssigneeList',
      'ProjectTaskSearch' => 'Nzolt\\NetSuite\\ProjectTaskSearch',
      'ProjectTaskSearchAdvanced' => 'Nzolt\\NetSuite\\ProjectTaskSearchAdvanced',
      'ProjectTaskSearchRow' => 'Nzolt\\NetSuite\\ProjectTaskSearchRow',
      'PhoneCallTimeItemList' => 'Nzolt\\NetSuite\\PhoneCallTimeItemList',
      'CalendarEventTimeItemList' => 'Nzolt\\NetSuite\\CalendarEventTimeItemList',
      'TaskTimeItemList' => 'Nzolt\\NetSuite\\TaskTimeItemList',
      'ProjectTaskTimeItemList' => 'Nzolt\\NetSuite\\ProjectTaskTimeItemList',
      'ResourceAllocation' => 'Nzolt\\NetSuite\\ResourceAllocation',
      'ResourceAllocationSearch' => 'Nzolt\\NetSuite\\ResourceAllocationSearch',
      'ResourceAllocationSearchAdvanced' => 'Nzolt\\NetSuite\\ResourceAllocationSearchAdvanced',
      'ResourceAllocationSearchRow' => 'Nzolt\\NetSuite\\ResourceAllocationSearchRow',
      'File' => 'Nzolt\\NetSuite\\File',
      'FileSiteCategory' => 'Nzolt\\NetSuite\\FileSiteCategory',
      'FileSiteCategoryList' => 'Nzolt\\NetSuite\\FileSiteCategoryList',
      'FileSearch' => 'Nzolt\\NetSuite\\FileSearch',
      'FileSearchAdvanced' => 'Nzolt\\NetSuite\\FileSearchAdvanced',
      'FileSearchRow' => 'Nzolt\\NetSuite\\FileSearchRow',
      'Folder' => 'Nzolt\\NetSuite\\Folder',
      'FolderSearch' => 'Nzolt\\NetSuite\\FolderSearch',
      'FolderSearchAdvanced' => 'Nzolt\\NetSuite\\FolderSearchAdvanced',
      'FolderSearchRow' => 'Nzolt\\NetSuite\\FolderSearchRow',
      'Note' => 'Nzolt\\NetSuite\\Note',
      'NoteSearch' => 'Nzolt\\NetSuite\\NoteSearch',
      'NoteSearchAdvanced' => 'Nzolt\\NetSuite\\NoteSearchAdvanced',
      'NoteSearchRow' => 'Nzolt\\NetSuite\\NoteSearchRow',
      'Message' => 'Nzolt\\NetSuite\\Message',
      'MessageMediaItemList' => 'Nzolt\\NetSuite\\MessageMediaItemList',
      'MessageSearch' => 'Nzolt\\NetSuite\\MessageSearch',
      'MessageSearchAdvanced' => 'Nzolt\\NetSuite\\MessageSearchAdvanced',
      'MessageSearchRow' => 'Nzolt\\NetSuite\\MessageSearchRow',
      'Subscriptions' => 'Nzolt\\NetSuite\\Subscriptions',
      'SubscriptionsList' => 'Nzolt\\NetSuite\\SubscriptionsList',
      'Contact' => 'Nzolt\\NetSuite\\Contact',
      'CategoryList' => 'Nzolt\\NetSuite\\CategoryList',
      'ContactAddressbook' => 'Nzolt\\NetSuite\\ContactAddressbook',
      'ContactAddressbookList' => 'Nzolt\\NetSuite\\ContactAddressbookList',
      'ContactSearch' => 'Nzolt\\NetSuite\\ContactSearch',
      'ContactSearchAdvanced' => 'Nzolt\\NetSuite\\ContactSearchAdvanced',
      'ContactSearchRow' => 'Nzolt\\NetSuite\\ContactSearchRow',
      'Customer' => 'Nzolt\\NetSuite\\Customer',
      'CustomerDownload' => 'Nzolt\\NetSuite\\CustomerDownload',
      'CustomerDownloadList' => 'Nzolt\\NetSuite\\CustomerDownloadList',
      'ContactAccessRoles' => 'Nzolt\\NetSuite\\ContactAccessRoles',
      'ContactAccessRolesList' => 'Nzolt\\NetSuite\\ContactAccessRolesList',
      'CustomerSalesTeamList' => 'Nzolt\\NetSuite\\CustomerSalesTeamList',
      'CustomerAddressbook' => 'Nzolt\\NetSuite\\CustomerAddressbook',
      'CustomerAddressbookList' => 'Nzolt\\NetSuite\\CustomerAddressbookList',
      'CustomerCreditCards' => 'Nzolt\\NetSuite\\CustomerCreditCards',
      'CustomerCreditCardsList' => 'Nzolt\\NetSuite\\CustomerCreditCardsList',
      'CustomerGroupPricing' => 'Nzolt\\NetSuite\\CustomerGroupPricing',
      'CustomerGroupPricingList' => 'Nzolt\\NetSuite\\CustomerGroupPricingList',
      'CustomerItemPricing' => 'Nzolt\\NetSuite\\CustomerItemPricing',
      'CustomerItemPricingList' => 'Nzolt\\NetSuite\\CustomerItemPricingList',
      'CustomerPartnersList' => 'Nzolt\\NetSuite\\CustomerPartnersList',
      'CustomerSearch' => 'Nzolt\\NetSuite\\CustomerSearch',
      'CustomerSearchAdvanced' => 'Nzolt\\NetSuite\\CustomerSearchAdvanced',
      'CustomerSearchRow' => 'Nzolt\\NetSuite\\CustomerSearchRow',
      'CustomerStatus' => 'Nzolt\\NetSuite\\CustomerStatus',
      'Partner' => 'Nzolt\\NetSuite\\Partner',
      'PartnerPromoCode' => 'Nzolt\\NetSuite\\PartnerPromoCode',
      'PartnerPromoCodeList' => 'Nzolt\\NetSuite\\PartnerPromoCodeList',
      'PartnerAddressbook' => 'Nzolt\\NetSuite\\PartnerAddressbook',
      'PartnerAddressbookList' => 'Nzolt\\NetSuite\\PartnerAddressbookList',
      'PartnerSearch' => 'Nzolt\\NetSuite\\PartnerSearch',
      'PartnerSearchAdvanced' => 'Nzolt\\NetSuite\\PartnerSearchAdvanced',
      'PartnerSearchRow' => 'Nzolt\\NetSuite\\PartnerSearchRow',
      'Vendor' => 'Nzolt\\NetSuite\\Vendor',
      'VendorPricingSchedule' => 'Nzolt\\NetSuite\\VendorPricingSchedule',
      'VendorPricingScheduleList' => 'Nzolt\\NetSuite\\VendorPricingScheduleList',
      'VendorAddressbook' => 'Nzolt\\NetSuite\\VendorAddressbook',
      'VendorAddressbookList' => 'Nzolt\\NetSuite\\VendorAddressbookList',
      'VendorRoles' => 'Nzolt\\NetSuite\\VendorRoles',
      'VendorRolesList' => 'Nzolt\\NetSuite\\VendorRolesList',
      'VendorSearch' => 'Nzolt\\NetSuite\\VendorSearch',
      'VendorSearchAdvanced' => 'Nzolt\\NetSuite\\VendorSearchAdvanced',
      'VendorSearchRow' => 'Nzolt\\NetSuite\\VendorSearchRow',
      'EntityGroup' => 'Nzolt\\NetSuite\\EntityGroup',
      'EntityGroupSearch' => 'Nzolt\\NetSuite\\EntityGroupSearch',
      'EntityGroupSearchAdvanced' => 'Nzolt\\NetSuite\\EntityGroupSearchAdvanced',
      'EntityGroupSearchRow' => 'Nzolt\\NetSuite\\EntityGroupSearchRow',
      'Job' => 'Nzolt\\NetSuite\\Job',
      'JobAddressbook' => 'Nzolt\\NetSuite\\JobAddressbook',
      'JobAddressbookList' => 'Nzolt\\NetSuite\\JobAddressbookList',
      'JobResources' => 'Nzolt\\NetSuite\\JobResources',
      'JobResourcesList' => 'Nzolt\\NetSuite\\JobResourcesList',
      'JobMilestones' => 'Nzolt\\NetSuite\\JobMilestones',
      'JobMilestonesList' => 'Nzolt\\NetSuite\\JobMilestonesList',
      'JobCreditCards' => 'Nzolt\\NetSuite\\JobCreditCards',
      'JobCreditCardsList' => 'Nzolt\\NetSuite\\JobCreditCardsList',
      'JobSearch' => 'Nzolt\\NetSuite\\JobSearch',
      'JobSearchAdvanced' => 'Nzolt\\NetSuite\\JobSearchAdvanced',
      'JobSearchRow' => 'Nzolt\\NetSuite\\JobSearchRow',
      'JobType' => 'Nzolt\\NetSuite\\JobType',
      'JobStatus' => 'Nzolt\\NetSuite\\JobStatus',
      'CustomerStatusSearch' => 'Nzolt\\NetSuite\\CustomerStatusSearch',
      'CustomerStatusSearchAdvanced' => 'Nzolt\\NetSuite\\CustomerStatusSearchAdvanced',
      'CustomerStatusSearchRow' => 'Nzolt\\NetSuite\\CustomerStatusSearchRow',
      'JobStatusSearch' => 'Nzolt\\NetSuite\\JobStatusSearch',
      'JobStatusSearchAdvanced' => 'Nzolt\\NetSuite\\JobStatusSearchAdvanced',
      'JobStatusSearchRow' => 'Nzolt\\NetSuite\\JobStatusSearchRow',
      'JobTypeSearch' => 'Nzolt\\NetSuite\\JobTypeSearch',
      'JobTypeSearchAdvanced' => 'Nzolt\\NetSuite\\JobTypeSearchAdvanced',
      'JobTypeSearchRow' => 'Nzolt\\NetSuite\\JobTypeSearchRow',
      'OriginatingLeadSearch' => 'Nzolt\\NetSuite\\OriginatingLeadSearch',
      'OriginatingLeadSearchRow' => 'Nzolt\\NetSuite\\OriginatingLeadSearchRow',
      'CustomerCurrency' => 'Nzolt\\NetSuite\\CustomerCurrency',
      'CustomerCurrencyList' => 'Nzolt\\NetSuite\\CustomerCurrencyList',
      'VendorCurrency' => 'Nzolt\\NetSuite\\VendorCurrency',
      'VendorCurrencyList' => 'Nzolt\\NetSuite\\VendorCurrencyList',
      'JobPlStatement' => 'Nzolt\\NetSuite\\JobPlStatement',
      'JobPlStatementList' => 'Nzolt\\NetSuite\\JobPlStatementList',
      'BillingAccount' => 'Nzolt\\NetSuite\\BillingAccount',
      'BillingAccountSearch' => 'Nzolt\\NetSuite\\BillingAccountSearch',
      'BillingAccountSearchAdvanced' => 'Nzolt\\NetSuite\\BillingAccountSearchAdvanced',
      'BillingAccountSearchRow' => 'Nzolt\\NetSuite\\BillingAccountSearchRow',
      'JobPercentCompleteOverride' => 'Nzolt\\NetSuite\\JobPercentCompleteOverride',
      'JobPercentCompleteOverrideList' => 'Nzolt\\NetSuite\\JobPercentCompleteOverrideList',
      'SupportCase' => 'Nzolt\\NetSuite\\SupportCase',
      'EmailEmployeesList' => 'Nzolt\\NetSuite\\EmailEmployeesList',
      'SupportCaseEscalateTo' => 'Nzolt\\NetSuite\\SupportCaseEscalateTo',
      'SupportCaseEscalateToList' => 'Nzolt\\NetSuite\\SupportCaseEscalateToList',
      'SupportCaseSolutions' => 'Nzolt\\NetSuite\\SupportCaseSolutions',
      'SupportCaseSolutionsList' => 'Nzolt\\NetSuite\\SupportCaseSolutionsList',
      'SupportCaseTimeItemList' => 'Nzolt\\NetSuite\\SupportCaseTimeItemList',
      'SupportCaseSearch' => 'Nzolt\\NetSuite\\SupportCaseSearch',
      'SupportCaseSearchAdvanced' => 'Nzolt\\NetSuite\\SupportCaseSearchAdvanced',
      'SupportCaseSearchRow' => 'Nzolt\\NetSuite\\SupportCaseSearchRow',
      'SupportCaseStatus' => 'Nzolt\\NetSuite\\SupportCaseStatus',
      'SupportCaseType' => 'Nzolt\\NetSuite\\SupportCaseType',
      'SupportCaseOrigin' => 'Nzolt\\NetSuite\\SupportCaseOrigin',
      'SupportCaseIssue' => 'Nzolt\\NetSuite\\SupportCaseIssue',
      'SupportCasePriority' => 'Nzolt\\NetSuite\\SupportCasePriority',
      'Solution' => 'Nzolt\\NetSuite\\Solution',
      'SolutionTopics' => 'Nzolt\\NetSuite\\SolutionTopics',
      'SolutionTopicsList' => 'Nzolt\\NetSuite\\SolutionTopicsList',
      'Solutions' => 'Nzolt\\NetSuite\\Solutions',
      'SolutionsList' => 'Nzolt\\NetSuite\\SolutionsList',
      'SolutionSearch' => 'Nzolt\\NetSuite\\SolutionSearch',
      'SolutionSearchAdvanced' => 'Nzolt\\NetSuite\\SolutionSearchAdvanced',
      'SolutionSearchRow' => 'Nzolt\\NetSuite\\SolutionSearchRow',
      'Topic' => 'Nzolt\\NetSuite\\Topic',
      'TopicSolution' => 'Nzolt\\NetSuite\\TopicSolution',
      'TopicSolutionList' => 'Nzolt\\NetSuite\\TopicSolutionList',
      'TopicSearch' => 'Nzolt\\NetSuite\\TopicSearch',
      'TopicSearchAdvanced' => 'Nzolt\\NetSuite\\TopicSearchAdvanced',
      'TopicSearchRow' => 'Nzolt\\NetSuite\\TopicSearchRow',
      'Issue' => 'Nzolt\\NetSuite\\Issue',
      'IssueVersion' => 'Nzolt\\NetSuite\\IssueVersion',
      'IssueVersionList' => 'Nzolt\\NetSuite\\IssueVersionList',
      'IssueSearch' => 'Nzolt\\NetSuite\\IssueSearch',
      'IssueSearchAdvanced' => 'Nzolt\\NetSuite\\IssueSearchAdvanced',
      'IssueSearchRow' => 'Nzolt\\NetSuite\\IssueSearchRow',
      'IssueRelatedIssues' => 'Nzolt\\NetSuite\\IssueRelatedIssues',
      'IssueRelatedIssuesList' => 'Nzolt\\NetSuite\\IssueRelatedIssuesList',
      'ClassTranslation' => 'Nzolt\\NetSuite\\ClassTranslation',
      'ClassTranslationList' => 'Nzolt\\NetSuite\\ClassTranslationList',
      'ContactCategory' => 'Nzolt\\NetSuite\\ContactCategory',
      'CustomerCategory' => 'Nzolt\\NetSuite\\CustomerCategory',
      'SalesRole' => 'Nzolt\\NetSuite\\SalesRole',
      'PriceLevel' => 'Nzolt\\NetSuite\\PriceLevel',
      'WinLossReason' => 'Nzolt\\NetSuite\\WinLossReason',
      'Term' => 'Nzolt\\NetSuite\\Term',
      'NoteType' => 'Nzolt\\NetSuite\\NoteType',
      'PaymentMethod' => 'Nzolt\\NetSuite\\PaymentMethod',
      'LeadSource' => 'Nzolt\\NetSuite\\LeadSource',
      'Price' => 'Nzolt\\NetSuite\\Price',
      'PriceList' => 'Nzolt\\NetSuite\\PriceList',
      'Pricing' => 'Nzolt\\NetSuite\\Pricing',
      'PricingMatrix' => 'Nzolt\\NetSuite\\PricingMatrix',
      'Rate' => 'Nzolt\\NetSuite\\Rate',
      'RateList' => 'Nzolt\\NetSuite\\RateList',
      'BillingRates' => 'Nzolt\\NetSuite\\BillingRates',
      'BillingRatesMatrix' => 'Nzolt\\NetSuite\\BillingRatesMatrix',
      'Translation' => 'Nzolt\\NetSuite\\Translation',
      'TranslationList' => 'Nzolt\\NetSuite\\TranslationList',
      'ItemOptionsList' => 'Nzolt\\NetSuite\\ItemOptionsList',
      'ItemVendor' => 'Nzolt\\NetSuite\\ItemVendor',
      'ItemVendorList' => 'Nzolt\\NetSuite\\ItemVendorList',
      'SiteCategory' => 'Nzolt\\NetSuite\\SiteCategory',
      'SiteCategoryList' => 'Nzolt\\NetSuite\\SiteCategoryList',
      'ProductFeedList' => 'Nzolt\\NetSuite\\ProductFeedList',
      'ItemMember' => 'Nzolt\\NetSuite\\ItemMember',
      'ItemMemberList' => 'Nzolt\\NetSuite\\ItemMemberList',
      'InventoryItem' => 'Nzolt\\NetSuite\\InventoryItem',
      'MatrixOptionList' => 'Nzolt\\NetSuite\\MatrixOptionList',
      'InventoryItemBinNumber' => 'Nzolt\\NetSuite\\InventoryItemBinNumber',
      'InventoryItemBinNumberList' => 'Nzolt\\NetSuite\\InventoryItemBinNumberList',
      'InventoryItemLocations' => 'Nzolt\\NetSuite\\InventoryItemLocations',
      'InventoryItemLocationsList' => 'Nzolt\\NetSuite\\InventoryItemLocationsList',
      'PresentationItemList' => 'Nzolt\\NetSuite\\PresentationItemList',
      'DescriptionItem' => 'Nzolt\\NetSuite\\DescriptionItem',
      'DiscountItem' => 'Nzolt\\NetSuite\\DiscountItem',
      'DownloadItem' => 'Nzolt\\NetSuite\\DownloadItem',
      'MarkupItem' => 'Nzolt\\NetSuite\\MarkupItem',
      'PaymentItem' => 'Nzolt\\NetSuite\\PaymentItem',
      'SubtotalItem' => 'Nzolt\\NetSuite\\SubtotalItem',
      'NonInventoryPurchaseItem' => 'Nzolt\\NetSuite\\NonInventoryPurchaseItem',
      'NonInventorySaleItem' => 'Nzolt\\NetSuite\\NonInventorySaleItem',
      'NonInventoryResaleItem' => 'Nzolt\\NetSuite\\NonInventoryResaleItem',
      'OtherChargeResaleItem' => 'Nzolt\\NetSuite\\OtherChargeResaleItem',
      'OtherChargePurchaseItem' => 'Nzolt\\NetSuite\\OtherChargePurchaseItem',
      'ServiceResaleItem' => 'Nzolt\\NetSuite\\ServiceResaleItem',
      'ServicePurchaseItem' => 'Nzolt\\NetSuite\\ServicePurchaseItem',
      'ServiceSaleItem' => 'Nzolt\\NetSuite\\ServiceSaleItem',
      'OtherChargeSaleItem' => 'Nzolt\\NetSuite\\OtherChargeSaleItem',
      'Currency' => 'Nzolt\\NetSuite\\Currency',
      'ExpenseCategory' => 'Nzolt\\NetSuite\\ExpenseCategory',
      'Account' => 'Nzolt\\NetSuite\\Account',
      'AccountSearch' => 'Nzolt\\NetSuite\\AccountSearch',
      'AccountSearchAdvanced' => 'Nzolt\\NetSuite\\AccountSearchAdvanced',
      'AccountSearchRow' => 'Nzolt\\NetSuite\\AccountSearchRow',
      'Department' => 'Nzolt\\NetSuite\\Department',
      'DepartmentSearch' => 'Nzolt\\NetSuite\\DepartmentSearch',
      'DepartmentSearchAdvanced' => 'Nzolt\\NetSuite\\DepartmentSearchAdvanced',
      'DepartmentSearchRow' => 'Nzolt\\NetSuite\\DepartmentSearchRow',
      'Classification' => 'Nzolt\\NetSuite\\Classification',
      'ClassificationSearch' => 'Nzolt\\NetSuite\\ClassificationSearch',
      'ClassificationSearchAdvanced' => 'Nzolt\\NetSuite\\ClassificationSearchAdvanced',
      'ClassificationSearchRow' => 'Nzolt\\NetSuite\\ClassificationSearchRow',
      'Location' => 'Nzolt\\NetSuite\\Location',
      'LocationSearch' => 'Nzolt\\NetSuite\\LocationSearch',
      'LocationSearchAdvanced' => 'Nzolt\\NetSuite\\LocationSearchAdvanced',
      'LocationSearchRow' => 'Nzolt\\NetSuite\\LocationSearchRow',
      'UnitsType' => 'Nzolt\\NetSuite\\UnitsType',
      'UnitsTypeUom' => 'Nzolt\\NetSuite\\UnitsTypeUom',
      'UnitsTypeUomList' => 'Nzolt\\NetSuite\\UnitsTypeUomList',
      'ItemSearch' => 'Nzolt\\NetSuite\\ItemSearch',
      'ItemSearchAdvanced' => 'Nzolt\\NetSuite\\ItemSearchAdvanced',
      'ItemSearchRow' => 'Nzolt\\NetSuite\\ItemSearchRow',
      'ContactRole' => 'Nzolt\\NetSuite\\ContactRole',
      'Bin' => 'Nzolt\\NetSuite\\Bin',
      'BinSearch' => 'Nzolt\\NetSuite\\BinSearch',
      'BinSearchAdvanced' => 'Nzolt\\NetSuite\\BinSearchAdvanced',
      'BinSearchRow' => 'Nzolt\\NetSuite\\BinSearchRow',
      'SalesTaxItem' => 'Nzolt\\NetSuite\\SalesTaxItem',
      'TaxGroup' => 'Nzolt\\NetSuite\\TaxGroup',
      'TaxGroupTaxItem' => 'Nzolt\\NetSuite\\TaxGroupTaxItem',
      'TaxGroupTaxItemList' => 'Nzolt\\NetSuite\\TaxGroupTaxItemList',
      'TaxType' => 'Nzolt\\NetSuite\\TaxType',
      'TaxTypeNexusesTax' => 'Nzolt\\NetSuite\\TaxTypeNexusesTax',
      'TaxTypeNexusesTaxList' => 'Nzolt\\NetSuite\\TaxTypeNexusesTaxList',
      'SerializedInventoryItem' => 'Nzolt\\NetSuite\\SerializedInventoryItem',
      'SerializedInventoryItemLocations' => 'Nzolt\\NetSuite\\SerializedInventoryItemLocations',
      'SerializedInventoryItemLocationsList' => 'Nzolt\\NetSuite\\SerializedInventoryItemLocationsList',
      'SerializedInventoryItemNumbers' => 'Nzolt\\NetSuite\\SerializedInventoryItemNumbers',
      'SerializedInventoryItemNumbersList' => 'Nzolt\\NetSuite\\SerializedInventoryItemNumbersList',
      'LotNumberedInventoryItem' => 'Nzolt\\NetSuite\\LotNumberedInventoryItem',
      'LotNumberedInventoryItemLocations' => 'Nzolt\\NetSuite\\LotNumberedInventoryItemLocations',
      'LotNumberedInventoryItemLocationsList' => 'Nzolt\\NetSuite\\LotNumberedInventoryItemLocationsList',
      'LotNumberedInventoryItemNumbers' => 'Nzolt\\NetSuite\\LotNumberedInventoryItemNumbers',
      'LotNumberedInventoryItemNumbersList' => 'Nzolt\\NetSuite\\LotNumberedInventoryItemNumbersList',
      'GiftCertificateItem' => 'Nzolt\\NetSuite\\GiftCertificateItem',
      'GiftCertificateItemAuthCodes' => 'Nzolt\\NetSuite\\GiftCertificateItemAuthCodes',
      'GiftCertificateItemAuthCodesList' => 'Nzolt\\NetSuite\\GiftCertificateItemAuthCodesList',
      'Subsidiary' => 'Nzolt\\NetSuite\\Subsidiary',
      'SubsidiaryNexus' => 'Nzolt\\NetSuite\\SubsidiaryNexus',
      'SubsidiaryNexusList' => 'Nzolt\\NetSuite\\SubsidiaryNexusList',
      'SubsidiarySearch' => 'Nzolt\\NetSuite\\SubsidiarySearch',
      'SubsidiarySearchAdvanced' => 'Nzolt\\NetSuite\\SubsidiarySearchAdvanced',
      'SubsidiarySearchRow' => 'Nzolt\\NetSuite\\SubsidiarySearchRow',
      'GiftCertificate' => 'Nzolt\\NetSuite\\GiftCertificate',
      'GiftCertificateSearch' => 'Nzolt\\NetSuite\\GiftCertificateSearch',
      'GiftCertificateSearchAdvanced' => 'Nzolt\\NetSuite\\GiftCertificateSearchAdvanced',
      'GiftCertificateSearchRow' => 'Nzolt\\NetSuite\\GiftCertificateSearchRow',
      'PartnerCategory' => 'Nzolt\\NetSuite\\PartnerCategory',
      'VendorCategory' => 'Nzolt\\NetSuite\\VendorCategory',
      'KitItem' => 'Nzolt\\NetSuite\\KitItem',
      'AssemblyItem' => 'Nzolt\\NetSuite\\AssemblyItem',
      'SerializedAssemblyItem' => 'Nzolt\\NetSuite\\SerializedAssemblyItem',
      'LotNumberedAssemblyItem' => 'Nzolt\\NetSuite\\LotNumberedAssemblyItem',
      'ServiceItemTaskTemplates' => 'Nzolt\\NetSuite\\ServiceItemTaskTemplates',
      'ServiceItemTaskTemplatesList' => 'Nzolt\\NetSuite\\ServiceItemTaskTemplatesList',
      'State' => 'Nzolt\\NetSuite\\State',
      'AccountingPeriod' => 'Nzolt\\NetSuite\\AccountingPeriod',
      'BudgetCategory' => 'Nzolt\\NetSuite\\BudgetCategory',
      'AccountingPeriodSearch' => 'Nzolt\\NetSuite\\AccountingPeriodSearch',
      'AccountingPeriodSearchAdvanced' => 'Nzolt\\NetSuite\\AccountingPeriodSearchAdvanced',
      'AccountingPeriodSearchRow' => 'Nzolt\\NetSuite\\AccountingPeriodSearchRow',
      'ContactCategorySearch' => 'Nzolt\\NetSuite\\ContactCategorySearch',
      'ContactCategorySearchAdvanced' => 'Nzolt\\NetSuite\\ContactCategorySearchAdvanced',
      'ContactCategorySearchRow' => 'Nzolt\\NetSuite\\ContactCategorySearchRow',
      'ContactRoleSearch' => 'Nzolt\\NetSuite\\ContactRoleSearch',
      'ContactRoleSearchAdvanced' => 'Nzolt\\NetSuite\\ContactRoleSearchAdvanced',
      'ContactRoleSearchRow' => 'Nzolt\\NetSuite\\ContactRoleSearchRow',
      'CustomerCategorySearch' => 'Nzolt\\NetSuite\\CustomerCategorySearch',
      'CustomerCategorySearchAdvanced' => 'Nzolt\\NetSuite\\CustomerCategorySearchAdvanced',
      'CustomerCategorySearchRow' => 'Nzolt\\NetSuite\\CustomerCategorySearchRow',
      'ExpenseCategorySearch' => 'Nzolt\\NetSuite\\ExpenseCategorySearch',
      'ExpenseCategorySearchAdvanced' => 'Nzolt\\NetSuite\\ExpenseCategorySearchAdvanced',
      'ExpenseCategorySearchRow' => 'Nzolt\\NetSuite\\ExpenseCategorySearchRow',
      'NoteTypeSearch' => 'Nzolt\\NetSuite\\NoteTypeSearch',
      'NoteTypeSearchAdvanced' => 'Nzolt\\NetSuite\\NoteTypeSearchAdvanced',
      'NoteTypeSearchRow' => 'Nzolt\\NetSuite\\NoteTypeSearchRow',
      'PartnerCategorySearch' => 'Nzolt\\NetSuite\\PartnerCategorySearch',
      'PartnerCategorySearchAdvanced' => 'Nzolt\\NetSuite\\PartnerCategorySearchAdvanced',
      'PartnerCategorySearchRow' => 'Nzolt\\NetSuite\\PartnerCategorySearchRow',
      'PaymentMethodSearch' => 'Nzolt\\NetSuite\\PaymentMethodSearch',
      'PaymentMethodSearchAdvanced' => 'Nzolt\\NetSuite\\PaymentMethodSearchAdvanced',
      'PaymentMethodSearchRow' => 'Nzolt\\NetSuite\\PaymentMethodSearchRow',
      'PriceLevelSearch' => 'Nzolt\\NetSuite\\PriceLevelSearch',
      'PriceLevelSearchAdvanced' => 'Nzolt\\NetSuite\\PriceLevelSearchAdvanced',
      'PriceLevelSearchRow' => 'Nzolt\\NetSuite\\PriceLevelSearchRow',
      'SalesRoleSearch' => 'Nzolt\\NetSuite\\SalesRoleSearch',
      'SalesRoleSearchAdvanced' => 'Nzolt\\NetSuite\\SalesRoleSearchAdvanced',
      'SalesRoleSearchRow' => 'Nzolt\\NetSuite\\SalesRoleSearchRow',
      'TermSearch' => 'Nzolt\\NetSuite\\TermSearch',
      'TermSearchAdvanced' => 'Nzolt\\NetSuite\\TermSearchAdvanced',
      'TermSearchRow' => 'Nzolt\\NetSuite\\TermSearchRow',
      'VendorCategorySearch' => 'Nzolt\\NetSuite\\VendorCategorySearch',
      'VendorCategorySearchAdvanced' => 'Nzolt\\NetSuite\\VendorCategorySearchAdvanced',
      'VendorCategorySearchRow' => 'Nzolt\\NetSuite\\VendorCategorySearchRow',
      'WinLossReasonSearch' => 'Nzolt\\NetSuite\\WinLossReasonSearch',
      'WinLossReasonSearchAdvanced' => 'Nzolt\\NetSuite\\WinLossReasonSearchAdvanced',
      'WinLossReasonSearchRow' => 'Nzolt\\NetSuite\\WinLossReasonSearchRow',
      'UnitsTypeSearch' => 'Nzolt\\NetSuite\\UnitsTypeSearch',
      'UnitsTypeSearchAdvanced' => 'Nzolt\\NetSuite\\UnitsTypeSearchAdvanced',
      'UnitsTypeSearchRow' => 'Nzolt\\NetSuite\\UnitsTypeSearchRow',
      'PricingGroup' => 'Nzolt\\NetSuite\\PricingGroup',
      'PricingGroupSearch' => 'Nzolt\\NetSuite\\PricingGroupSearch',
      'PricingGroupSearchAdvanced' => 'Nzolt\\NetSuite\\PricingGroupSearchAdvanced',
      'PricingGroupSearchRow' => 'Nzolt\\NetSuite\\PricingGroupSearchRow',
      'InventoryNumber' => 'Nzolt\\NetSuite\\InventoryNumber',
      'InventoryNumberLocations' => 'Nzolt\\NetSuite\\InventoryNumberLocations',
      'InventoryNumberLocationsList' => 'Nzolt\\NetSuite\\InventoryNumberLocationsList',
      'InventoryNumberSearch' => 'Nzolt\\NetSuite\\InventoryNumberSearch',
      'InventoryNumberSearchAdvanced' => 'Nzolt\\NetSuite\\InventoryNumberSearchAdvanced',
      'InventoryNumberSearchRow' => 'Nzolt\\NetSuite\\InventoryNumberSearchRow',
      'RevRecSchedule' => 'Nzolt\\NetSuite\\RevRecSchedule',
      'RevRecScheduleRecurrence' => 'Nzolt\\NetSuite\\RevRecScheduleRecurrence',
      'RevRecScheduleRecurrenceList' => 'Nzolt\\NetSuite\\RevRecScheduleRecurrenceList',
      'RevRecTemplate' => 'Nzolt\\NetSuite\\RevRecTemplate',
      'RevRecTemplateRecurrence' => 'Nzolt\\NetSuite\\RevRecTemplateRecurrence',
      'RevRecTemplateRecurrenceList' => 'Nzolt\\NetSuite\\RevRecTemplateRecurrenceList',
      'RevRecScheduleSearch' => 'Nzolt\\NetSuite\\RevRecScheduleSearch',
      'RevRecScheduleSearchAdvanced' => 'Nzolt\\NetSuite\\RevRecScheduleSearchAdvanced',
      'RevRecScheduleSearchRow' => 'Nzolt\\NetSuite\\RevRecScheduleSearchRow',
      'RevRecTemplateSearch' => 'Nzolt\\NetSuite\\RevRecTemplateSearch',
      'RevRecTemplateSearchAdvanced' => 'Nzolt\\NetSuite\\RevRecTemplateSearchAdvanced',
      'RevRecTemplateSearchRow' => 'Nzolt\\NetSuite\\RevRecTemplateSearchRow',
      'CostCategory' => 'Nzolt\\NetSuite\\CostCategory',
      'Nexus' => 'Nzolt\\NetSuite\\Nexus',
      'NexusSearch' => 'Nzolt\\NetSuite\\NexusSearch',
      'NexusSearchAdvanced' => 'Nzolt\\NetSuite\\NexusSearchAdvanced',
      'NexusSearchRow' => 'Nzolt\\NetSuite\\NexusSearchRow',
      'CustomerMessage' => 'Nzolt\\NetSuite\\CustomerMessage',
      'OtherNameCategory' => 'Nzolt\\NetSuite\\OtherNameCategory',
      'OtherNameCategorySearch' => 'Nzolt\\NetSuite\\OtherNameCategorySearch',
      'OtherNameCategorySearchAdvanced' => 'Nzolt\\NetSuite\\OtherNameCategorySearchAdvanced',
      'OtherNameCategorySearchRow' => 'Nzolt\\NetSuite\\OtherNameCategorySearchRow',
      'CustomerMessageSearch' => 'Nzolt\\NetSuite\\CustomerMessageSearch',
      'CustomerMessageSearchAdvanced' => 'Nzolt\\NetSuite\\CustomerMessageSearchAdvanced',
      'CustomerMessageSearchRow' => 'Nzolt\\NetSuite\\CustomerMessageSearchRow',
      'ItemGroup' => 'Nzolt\\NetSuite\\ItemGroup',
      'CurrencyRateSearch' => 'Nzolt\\NetSuite\\CurrencyRateSearch',
      'CurrencyRateSearchAdvanced' => 'Nzolt\\NetSuite\\CurrencyRateSearchAdvanced',
      'CurrencyRateSearchRow' => 'Nzolt\\NetSuite\\CurrencyRateSearchRow',
      'ItemRevision' => 'Nzolt\\NetSuite\\ItemRevision',
      'ItemRevisionSearch' => 'Nzolt\\NetSuite\\ItemRevisionSearch',
      'ItemRevisionSearchAdvanced' => 'Nzolt\\NetSuite\\ItemRevisionSearchAdvanced',
      'ItemRevisionSearchRow' => 'Nzolt\\NetSuite\\ItemRevisionSearchRow',
      'AccountingPeriodFiscalCalendars' => 'Nzolt\\NetSuite\\AccountingPeriodFiscalCalendars',
      'AccountingPeriodFiscalCalendarsList' => 'Nzolt\\NetSuite\\AccountingPeriodFiscalCalendarsList',
      'TaxAcct' => 'Nzolt\\NetSuite\\TaxAcct',
      'ExpenseCategoryRates' => 'Nzolt\\NetSuite\\ExpenseCategoryRates',
      'ExpenseCategoryRatesList' => 'Nzolt\\NetSuite\\ExpenseCategoryRatesList',
      'BillingSchedule' => 'Nzolt\\NetSuite\\BillingSchedule',
      'BillingScheduleMilestone' => 'Nzolt\\NetSuite\\BillingScheduleMilestone',
      'BillingScheduleMilestoneList' => 'Nzolt\\NetSuite\\BillingScheduleMilestoneList',
      'BillingScheduleRecurrence' => 'Nzolt\\NetSuite\\BillingScheduleRecurrence',
      'BillingScheduleRecurrenceList' => 'Nzolt\\NetSuite\\BillingScheduleRecurrenceList',
      'BillingScheduleSearch' => 'Nzolt\\NetSuite\\BillingScheduleSearch',
      'BillingScheduleSearchAdvanced' => 'Nzolt\\NetSuite\\BillingScheduleSearchAdvanced',
      'BillingScheduleSearchRow' => 'Nzolt\\NetSuite\\BillingScheduleSearchRow',
      'GlobalAccountMapping' => 'Nzolt\\NetSuite\\GlobalAccountMapping',
      'GlobalAccountMappingSearch' => 'Nzolt\\NetSuite\\GlobalAccountMappingSearch',
      'GlobalAccountMappingSearchAdvanced' => 'Nzolt\\NetSuite\\GlobalAccountMappingSearchAdvanced',
      'GlobalAccountMappingSearchRow' => 'Nzolt\\NetSuite\\GlobalAccountMappingSearchRow',
      'ItemAccountMapping' => 'Nzolt\\NetSuite\\ItemAccountMapping',
      'ItemAccountMappingSearch' => 'Nzolt\\NetSuite\\ItemAccountMappingSearch',
      'ItemAccountMappingSearchAdvanced' => 'Nzolt\\NetSuite\\ItemAccountMappingSearchAdvanced',
      'ItemAccountMappingSearchRow' => 'Nzolt\\NetSuite\\ItemAccountMappingSearchRow',
      'ItemAccountingBookDetail' => 'Nzolt\\NetSuite\\ItemAccountingBookDetail',
      'ItemAccountingBookDetailList' => 'Nzolt\\NetSuite\\ItemAccountingBookDetailList',
      'SubsidiaryAccountingBookDetail' => 'Nzolt\\NetSuite\\SubsidiaryAccountingBookDetail',
      'SubsidiaryAccountingBookDetailList' => 'Nzolt\\NetSuite\\SubsidiaryAccountingBookDetailList',
      'PaymentMethodVisuals' => 'Nzolt\\NetSuite\\PaymentMethodVisuals',
      'PaymentMethodVisualsList' => 'Nzolt\\NetSuite\\PaymentMethodVisualsList',
      'FairValuePrice' => 'Nzolt\\NetSuite\\FairValuePrice',
      'FairValuePriceSearch' => 'Nzolt\\NetSuite\\FairValuePriceSearch',
      'FairValuePriceSearchAdvanced' => 'Nzolt\\NetSuite\\FairValuePriceSearchAdvanced',
      'FairValuePriceSearchRow' => 'Nzolt\\NetSuite\\FairValuePriceSearchRow',
      'LocationRegions' => 'Nzolt\\NetSuite\\LocationRegions',
      'LocationRegionsList' => 'Nzolt\\NetSuite\\LocationRegionsList',
      'TaxTypeNexusAccounts' => 'Nzolt\\NetSuite\\TaxTypeNexusAccounts',
      'TaxTypeNexusAccountsList' => 'Nzolt\\NetSuite\\TaxTypeNexusAccountsList',
      'SubsidiaryTaxRegistration' => 'Nzolt\\NetSuite\\SubsidiaryTaxRegistration',
      'SubsidiaryTaxRegistrationList' => 'Nzolt\\NetSuite\\SubsidiaryTaxRegistrationList',
      'CostCategorySearch' => 'Nzolt\\NetSuite\\CostCategorySearch',
      'CostCategorySearchAdvanced' => 'Nzolt\\NetSuite\\CostCategorySearchAdvanced',
      'CostCategorySearchRow' => 'Nzolt\\NetSuite\\CostCategorySearchRow',
      'AccountLocalizations' => 'Nzolt\\NetSuite\\AccountLocalizations',
      'AccountLocalizationsList' => 'Nzolt\\NetSuite\\AccountLocalizationsList',
      'ConsolidatedExchangeRate' => 'Nzolt\\NetSuite\\ConsolidatedExchangeRate',
      'ConsolidatedExchangeRateSearch' => 'Nzolt\\NetSuite\\ConsolidatedExchangeRateSearch',
      'ConsolidatedExchangeRateSearchAdvanced' => 'Nzolt\\NetSuite\\ConsolidatedExchangeRateSearchAdvanced',
      'ConsolidatedExchangeRateSearchRow' => 'Nzolt\\NetSuite\\ConsolidatedExchangeRateSearchRow',
      'TaxGroupSearch' => 'Nzolt\\NetSuite\\TaxGroupSearch',
      'TaxGroupSearchAdvanced' => 'Nzolt\\NetSuite\\TaxGroupSearchAdvanced',
      'TaxGroupSearchRow' => 'Nzolt\\NetSuite\\TaxGroupSearchRow',
      'SalesTaxItemSearch' => 'Nzolt\\NetSuite\\SalesTaxItemSearch',
      'SalesTaxItemSearchAdvanced' => 'Nzolt\\NetSuite\\SalesTaxItemSearchAdvanced',
      'SalesTaxItemSearchRow' => 'Nzolt\\NetSuite\\SalesTaxItemSearchRow',
      'TaxTypeSearch' => 'Nzolt\\NetSuite\\TaxTypeSearch',
      'TaxTypeSearchAdvanced' => 'Nzolt\\NetSuite\\TaxTypeSearchAdvanced',
      'TaxTypeSearchRow' => 'Nzolt\\NetSuite\\TaxTypeSearchRow',
      'LocationBusinessHours' => 'Nzolt\\NetSuite\\LocationBusinessHours',
      'LocationBusinessHoursList' => 'Nzolt\\NetSuite\\LocationBusinessHoursList',
      'AssemblyItemBillOfMaterials' => 'Nzolt\\NetSuite\\AssemblyItemBillOfMaterials',
      'AssemblyItemBillOfMaterialsList' => 'Nzolt\\NetSuite\\AssemblyItemBillOfMaterialsList',
      'SerializedAssemblyItemBillOfMaterials' => 'Nzolt\\NetSuite\\SerializedAssemblyItemBillOfMaterials',
      'SerializedAssemblyItemBillOfMaterialsList' => 'Nzolt\\NetSuite\\SerializedAssemblyItemBillOfMaterialsList',
      'LotNumberedAssemblyItemBillOfMaterials' => 'Nzolt\\NetSuite\\LotNumberedAssemblyItemBillOfMaterials',
      'LotNumberedAssemblyItemBillOfMaterialsList' => 'Nzolt\\NetSuite\\LotNumberedAssemblyItemBillOfMaterialsList',
      'Opportunity' => 'Nzolt\\NetSuite\\Opportunity',
      'OpportunitySalesTeam' => 'Nzolt\\NetSuite\\OpportunitySalesTeam',
      'OpportunitySalesTeamList' => 'Nzolt\\NetSuite\\OpportunitySalesTeamList',
      'OpportunityItem' => 'Nzolt\\NetSuite\\OpportunityItem',
      'OpportunityItemList' => 'Nzolt\\NetSuite\\OpportunityItemList',
      'OpportunityCompetitors' => 'Nzolt\\NetSuite\\OpportunityCompetitors',
      'OpportunityCompetitorsList' => 'Nzolt\\NetSuite\\OpportunityCompetitorsList',
      'OpportunitySearch' => 'Nzolt\\NetSuite\\OpportunitySearch',
      'OpportunitySearchAdvanced' => 'Nzolt\\NetSuite\\OpportunitySearchAdvanced',
      'OpportunitySearchRow' => 'Nzolt\\NetSuite\\OpportunitySearchRow',
      'OpportunityPartnersList' => 'Nzolt\\NetSuite\\OpportunityPartnersList',
      'SalesOrder' => 'Nzolt\\NetSuite\\SalesOrder',
      'SalesOrderSalesTeam' => 'Nzolt\\NetSuite\\SalesOrderSalesTeam',
      'SalesOrderSalesTeamList' => 'Nzolt\\NetSuite\\SalesOrderSalesTeamList',
      'SalesOrderItem' => 'Nzolt\\NetSuite\\SalesOrderItem',
      'SalesOrderItemList' => 'Nzolt\\NetSuite\\SalesOrderItemList',
      'SalesOrderPartnersList' => 'Nzolt\\NetSuite\\SalesOrderPartnersList',
      'SalesOrderShipGroupList' => 'Nzolt\\NetSuite\\SalesOrderShipGroupList',
      'TransactionSearch' => 'Nzolt\\NetSuite\\TransactionSearch',
      'TransactionSearchAdvanced' => 'Nzolt\\NetSuite\\TransactionSearchAdvanced',
      'TransactionSearchRow' => 'Nzolt\\NetSuite\\TransactionSearchRow',
      'ItemFulfillment' => 'Nzolt\\NetSuite\\ItemFulfillment',
      'ItemFulfillmentItem' => 'Nzolt\\NetSuite\\ItemFulfillmentItem',
      'ItemFulfillmentItemList' => 'Nzolt\\NetSuite\\ItemFulfillmentItemList',
      'ItemFulfillmentPackage' => 'Nzolt\\NetSuite\\ItemFulfillmentPackage',
      'ItemFulfillmentPackageList' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageList',
      'ItemFulfillmentPackageUps' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageUps',
      'ItemFulfillmentPackageUpsList' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageUpsList',
      'ItemFulfillmentPackageUsps' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageUsps',
      'ItemFulfillmentPackageUspsList' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageUspsList',
      'ItemFulfillmentPackageFedEx' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageFedEx',
      'ItemFulfillmentPackageFedExList' => 'Nzolt\\NetSuite\\ItemFulfillmentPackageFedExList',
      'Invoice' => 'Nzolt\\NetSuite\\Invoice',
      'InvoiceSalesTeam' => 'Nzolt\\NetSuite\\InvoiceSalesTeam',
      'InvoiceSalesTeamList' => 'Nzolt\\NetSuite\\InvoiceSalesTeamList',
      'InvoiceItem' => 'Nzolt\\NetSuite\\InvoiceItem',
      'InvoiceItemList' => 'Nzolt\\NetSuite\\InvoiceItemList',
      'InvoiceItemCost' => 'Nzolt\\NetSuite\\InvoiceItemCost',
      'InvoiceItemCostList' => 'Nzolt\\NetSuite\\InvoiceItemCostList',
      'InvoiceExpCost' => 'Nzolt\\NetSuite\\InvoiceExpCost',
      'InvoiceExpCostList' => 'Nzolt\\NetSuite\\InvoiceExpCostList',
      'InvoiceTime' => 'Nzolt\\NetSuite\\InvoiceTime',
      'InvoiceTimeList' => 'Nzolt\\NetSuite\\InvoiceTimeList',
      'InvoicePartnersList' => 'Nzolt\\NetSuite\\InvoicePartnersList',
      'InvoiceShipGroupList' => 'Nzolt\\NetSuite\\InvoiceShipGroupList',
      'CashSale' => 'Nzolt\\NetSuite\\CashSale',
      'CashSaleSalesTeam' => 'Nzolt\\NetSuite\\CashSaleSalesTeam',
      'CashSaleSalesTeamList' => 'Nzolt\\NetSuite\\CashSaleSalesTeamList',
      'CashSaleItem' => 'Nzolt\\NetSuite\\CashSaleItem',
      'CashSaleItemList' => 'Nzolt\\NetSuite\\CashSaleItemList',
      'CashSaleItemCost' => 'Nzolt\\NetSuite\\CashSaleItemCost',
      'CashSaleItemCostList' => 'Nzolt\\NetSuite\\CashSaleItemCostList',
      'CashSaleExpCost' => 'Nzolt\\NetSuite\\CashSaleExpCost',
      'CashSaleExpCostList' => 'Nzolt\\NetSuite\\CashSaleExpCostList',
      'CashSaleTime' => 'Nzolt\\NetSuite\\CashSaleTime',
      'CashSaleTimeList' => 'Nzolt\\NetSuite\\CashSaleTimeList',
      'CashSalePartnersList' => 'Nzolt\\NetSuite\\CashSalePartnersList',
      'CashSaleShipGroupList' => 'Nzolt\\NetSuite\\CashSaleShipGroupList',
      'Estimate' => 'Nzolt\\NetSuite\\Estimate',
      'EstimateItem' => 'Nzolt\\NetSuite\\EstimateItem',
      'EstimateItemList' => 'Nzolt\\NetSuite\\EstimateItemList',
      'EstimateSalesTeam' => 'Nzolt\\NetSuite\\EstimateSalesTeam',
      'EstimateSalesTeamList' => 'Nzolt\\NetSuite\\EstimateSalesTeamList',
      'EstimatePartnersList' => 'Nzolt\\NetSuite\\EstimatePartnersList',
      'EstimateShipGroupList' => 'Nzolt\\NetSuite\\EstimateShipGroupList',
      'GiftCertRedemption' => 'Nzolt\\NetSuite\\GiftCertRedemption',
      'GiftCertRedemptionList' => 'Nzolt\\NetSuite\\GiftCertRedemptionList',
      'TransactionShipGroup' => 'Nzolt\\NetSuite\\TransactionShipGroup',
      'AccountingTransactionSearch' => 'Nzolt\\NetSuite\\AccountingTransactionSearch',
      'AccountingTransactionSearchAdvanced' => 'Nzolt\\NetSuite\\AccountingTransactionSearchAdvanced',
      'AccountingTransactionSearchRow' => 'Nzolt\\NetSuite\\AccountingTransactionSearchRow',
      'Promotions' => 'Nzolt\\NetSuite\\Promotions',
      'PromotionsList' => 'Nzolt\\NetSuite\\PromotionsList',
      'Usage' => 'Nzolt\\NetSuite\\Usage',
      'UsageSearch' => 'Nzolt\\NetSuite\\UsageSearch',
      'UsageSearchAdvanced' => 'Nzolt\\NetSuite\\UsageSearchAdvanced',
      'UsageSearchRow' => 'Nzolt\\NetSuite\\UsageSearchRow',
      'PurchLandedCostList' => 'Nzolt\\NetSuite\\PurchLandedCostList',
      'VendorBill' => 'Nzolt\\NetSuite\\VendorBill',
      'VendorBillExpense' => 'Nzolt\\NetSuite\\VendorBillExpense',
      'VendorBillExpenseList' => 'Nzolt\\NetSuite\\VendorBillExpenseList',
      'VendorBillItem' => 'Nzolt\\NetSuite\\VendorBillItem',
      'VendorBillItemList' => 'Nzolt\\NetSuite\\VendorBillItemList',
      'PurchaseOrder' => 'Nzolt\\NetSuite\\PurchaseOrder',
      'PurchaseOrderExpense' => 'Nzolt\\NetSuite\\PurchaseOrderExpense',
      'PurchaseOrderExpenseList' => 'Nzolt\\NetSuite\\PurchaseOrderExpenseList',
      'PurchaseOrderItem' => 'Nzolt\\NetSuite\\PurchaseOrderItem',
      'PurchaseOrderItemList' => 'Nzolt\\NetSuite\\PurchaseOrderItemList',
      'ItemReceipt' => 'Nzolt\\NetSuite\\ItemReceipt',
      'ItemReceiptItem' => 'Nzolt\\NetSuite\\ItemReceiptItem',
      'ItemReceiptItemList' => 'Nzolt\\NetSuite\\ItemReceiptItemList',
      'ItemReceiptExpense' => 'Nzolt\\NetSuite\\ItemReceiptExpense',
      'ItemReceiptExpenseList' => 'Nzolt\\NetSuite\\ItemReceiptExpenseList',
      'VendorPayment' => 'Nzolt\\NetSuite\\VendorPayment',
      'VendorPaymentApply' => 'Nzolt\\NetSuite\\VendorPaymentApply',
      'VendorPaymentApplyList' => 'Nzolt\\NetSuite\\VendorPaymentApplyList',
      'VendorPaymentCredit' => 'Nzolt\\NetSuite\\VendorPaymentCredit',
      'VendorPaymentCreditList' => 'Nzolt\\NetSuite\\VendorPaymentCreditList',
      'VendorCredit' => 'Nzolt\\NetSuite\\VendorCredit',
      'VendorCreditExpense' => 'Nzolt\\NetSuite\\VendorCreditExpense',
      'VendorCreditExpenseList' => 'Nzolt\\NetSuite\\VendorCreditExpenseList',
      'VendorCreditItem' => 'Nzolt\\NetSuite\\VendorCreditItem',
      'VendorCreditItemList' => 'Nzolt\\NetSuite\\VendorCreditItemList',
      'VendorCreditApply' => 'Nzolt\\NetSuite\\VendorCreditApply',
      'VendorCreditApplyList' => 'Nzolt\\NetSuite\\VendorCreditApplyList',
      'VendorReturnAuthorization' => 'Nzolt\\NetSuite\\VendorReturnAuthorization',
      'VendorReturnAuthorizationExpense' => 'Nzolt\\NetSuite\\VendorReturnAuthorizationExpense',
      'VendorReturnAuthorizationExpenseList' => 'Nzolt\\NetSuite\\VendorReturnAuthorizationExpenseList',
      'VendorReturnAuthorizationItem' => 'Nzolt\\NetSuite\\VendorReturnAuthorizationItem',
      'VendorReturnAuthorizationItemList' => 'Nzolt\\NetSuite\\VendorReturnAuthorizationItemList',
      'PurchaseRequisition' => 'Nzolt\\NetSuite\\PurchaseRequisition',
      'PurchaseRequisitionExpense' => 'Nzolt\\NetSuite\\PurchaseRequisitionExpense',
      'PurchaseRequisitionExpenseList' => 'Nzolt\\NetSuite\\PurchaseRequisitionExpenseList',
      'PurchaseRequisitionItem' => 'Nzolt\\NetSuite\\PurchaseRequisitionItem',
      'PurchaseRequisitionItemList' => 'Nzolt\\NetSuite\\PurchaseRequisitionItemList',
      'InboundShipment' => 'Nzolt\\NetSuite\\InboundShipment',
      'InboundShipmentItems' => 'Nzolt\\NetSuite\\InboundShipmentItems',
      'InboundShipmentItemsList' => 'Nzolt\\NetSuite\\InboundShipmentItemsList',
      'InboundShipmentSearch' => 'Nzolt\\NetSuite\\InboundShipmentSearch',
      'InboundShipmentSearchAdvanced' => 'Nzolt\\NetSuite\\InboundShipmentSearchAdvanced',
      'InboundShipmentSearchRow' => 'Nzolt\\NetSuite\\InboundShipmentSearchRow',
      'CashRefund' => 'Nzolt\\NetSuite\\CashRefund',
      'CashRefundItem' => 'Nzolt\\NetSuite\\CashRefundItem',
      'CashRefundItemList' => 'Nzolt\\NetSuite\\CashRefundItemList',
      'CashRefundSalesTeam' => 'Nzolt\\NetSuite\\CashRefundSalesTeam',
      'CashRefundSalesTeamList' => 'Nzolt\\NetSuite\\CashRefundSalesTeamList',
      'CashRefundPartnersList' => 'Nzolt\\NetSuite\\CashRefundPartnersList',
      'CustomerPayment' => 'Nzolt\\NetSuite\\CustomerPayment',
      'CustomerPaymentApply' => 'Nzolt\\NetSuite\\CustomerPaymentApply',
      'CustomerPaymentApplyList' => 'Nzolt\\NetSuite\\CustomerPaymentApplyList',
      'CustomerPaymentCredit' => 'Nzolt\\NetSuite\\CustomerPaymentCredit',
      'CustomerPaymentCreditList' => 'Nzolt\\NetSuite\\CustomerPaymentCreditList',
      'CustomerPaymentDeposit' => 'Nzolt\\NetSuite\\CustomerPaymentDeposit',
      'CustomerPaymentDepositList' => 'Nzolt\\NetSuite\\CustomerPaymentDepositList',
      'ReturnAuthorization' => 'Nzolt\\NetSuite\\ReturnAuthorization',
      'ReturnAuthorizationItem' => 'Nzolt\\NetSuite\\ReturnAuthorizationItem',
      'ReturnAuthorizationItemList' => 'Nzolt\\NetSuite\\ReturnAuthorizationItemList',
      'ReturnAuthorizationSalesTeam' => 'Nzolt\\NetSuite\\ReturnAuthorizationSalesTeam',
      'ReturnAuthorizationSalesTeamList' => 'Nzolt\\NetSuite\\ReturnAuthorizationSalesTeamList',
      'ReturnAuthorizationPartnersList' => 'Nzolt\\NetSuite\\ReturnAuthorizationPartnersList',
      'CreditMemo' => 'Nzolt\\NetSuite\\CreditMemo',
      'CreditMemoSalesTeam' => 'Nzolt\\NetSuite\\CreditMemoSalesTeam',
      'CreditMemoSalesTeamList' => 'Nzolt\\NetSuite\\CreditMemoSalesTeamList',
      'CreditMemoItem' => 'Nzolt\\NetSuite\\CreditMemoItem',
      'CreditMemoItemList' => 'Nzolt\\NetSuite\\CreditMemoItemList',
      'CreditMemoApply' => 'Nzolt\\NetSuite\\CreditMemoApply',
      'CreditMemoApplyList' => 'Nzolt\\NetSuite\\CreditMemoApplyList',
      'CreditMemoPartnersList' => 'Nzolt\\NetSuite\\CreditMemoPartnersList',
      'CustomerRefund' => 'Nzolt\\NetSuite\\CustomerRefund',
      'CustomerRefundApply' => 'Nzolt\\NetSuite\\CustomerRefundApply',
      'CustomerRefundApplyList' => 'Nzolt\\NetSuite\\CustomerRefundApplyList',
      'CustomerRefundDeposit' => 'Nzolt\\NetSuite\\CustomerRefundDeposit',
      'CustomerRefundDepositList' => 'Nzolt\\NetSuite\\CustomerRefundDepositList',
      'CustomerDeposit' => 'Nzolt\\NetSuite\\CustomerDeposit',
      'CustomerDepositApply' => 'Nzolt\\NetSuite\\CustomerDepositApply',
      'CustomerDepositApplyList' => 'Nzolt\\NetSuite\\CustomerDepositApplyList',
      'DepositApplication' => 'Nzolt\\NetSuite\\DepositApplication',
      'DepositApplicationApply' => 'Nzolt\\NetSuite\\DepositApplicationApply',
      'DepositApplicationApplyList' => 'Nzolt\\NetSuite\\DepositApplicationApplyList',
      'Charge' => 'Nzolt\\NetSuite\\Charge',
      'ChargeSearch' => 'Nzolt\\NetSuite\\ChargeSearch',
      'ChargeSearchAdvanced' => 'Nzolt\\NetSuite\\ChargeSearchAdvanced',
      'ChargeSearchRow' => 'Nzolt\\NetSuite\\ChargeSearchRow',
      'Budget' => 'Nzolt\\NetSuite\\Budget',
      'BudgetSearch' => 'Nzolt\\NetSuite\\BudgetSearch',
      'BudgetSearchAdvanced' => 'Nzolt\\NetSuite\\BudgetSearchAdvanced',
      'BudgetSearchRow' => 'Nzolt\\NetSuite\\BudgetSearchRow',
      'CheckLandedCostList' => 'Nzolt\\NetSuite\\CheckLandedCostList',
      'Check' => 'Nzolt\\NetSuite\\Check',
      'CheckExpense' => 'Nzolt\\NetSuite\\CheckExpense',
      'CheckExpenseList' => 'Nzolt\\NetSuite\\CheckExpenseList',
      'CheckItem' => 'Nzolt\\NetSuite\\CheckItem',
      'CheckItemList' => 'Nzolt\\NetSuite\\CheckItemList',
      'Deposit' => 'Nzolt\\NetSuite\\Deposit',
      'DepositPayment' => 'Nzolt\\NetSuite\\DepositPayment',
      'DepositPaymentList' => 'Nzolt\\NetSuite\\DepositPaymentList',
      'DepositCashBack' => 'Nzolt\\NetSuite\\DepositCashBack',
      'DepositCashBackList' => 'Nzolt\\NetSuite\\DepositCashBackList',
      'DepositOther' => 'Nzolt\\NetSuite\\DepositOther',
      'DepositOtherList' => 'Nzolt\\NetSuite\\DepositOtherList',
      'InventoryAdjustment' => 'Nzolt\\NetSuite\\InventoryAdjustment',
      'InventoryAdjustmentInventory' => 'Nzolt\\NetSuite\\InventoryAdjustmentInventory',
      'InventoryAdjustmentInventoryList' => 'Nzolt\\NetSuite\\InventoryAdjustmentInventoryList',
      'AssemblyBuild' => 'Nzolt\\NetSuite\\AssemblyBuild',
      'AssemblyUnbuild' => 'Nzolt\\NetSuite\\AssemblyUnbuild',
      'AssemblyComponent' => 'Nzolt\\NetSuite\\AssemblyComponent',
      'AssemblyComponentList' => 'Nzolt\\NetSuite\\AssemblyComponentList',
      'TransferOrder' => 'Nzolt\\NetSuite\\TransferOrder',
      'TransferOrderItem' => 'Nzolt\\NetSuite\\TransferOrderItem',
      'TransferOrderItemList' => 'Nzolt\\NetSuite\\TransferOrderItemList',
      'InterCompanyTransferOrder' => 'Nzolt\\NetSuite\\InterCompanyTransferOrder',
      'InterCompanyTransferOrderItem' => 'Nzolt\\NetSuite\\InterCompanyTransferOrderItem',
      'InterCompanyTransferOrderItemList' => 'Nzolt\\NetSuite\\InterCompanyTransferOrderItemList',
      'WorkOrder' => 'Nzolt\\NetSuite\\WorkOrder',
      'WorkOrderItem' => 'Nzolt\\NetSuite\\WorkOrderItem',
      'WorkOrderItemList' => 'Nzolt\\NetSuite\\WorkOrderItemList',
      'SalesTeamList' => 'Nzolt\\NetSuite\\SalesTeamList',
      'PartnersList' => 'Nzolt\\NetSuite\\PartnersList',
      'InventoryTransfer' => 'Nzolt\\NetSuite\\InventoryTransfer',
      'InventoryTransferInventory' => 'Nzolt\\NetSuite\\InventoryTransferInventory',
      'InventoryTransferInventoryList' => 'Nzolt\\NetSuite\\InventoryTransferInventoryList',
      'BinTransfer' => 'Nzolt\\NetSuite\\BinTransfer',
      'BinTransferInventory' => 'Nzolt\\NetSuite\\BinTransferInventory',
      'BinTransferInventoryList' => 'Nzolt\\NetSuite\\BinTransferInventoryList',
      'BinWorksheet' => 'Nzolt\\NetSuite\\BinWorksheet',
      'BinWorksheetItem' => 'Nzolt\\NetSuite\\BinWorksheetItem',
      'BinWorksheetItemList' => 'Nzolt\\NetSuite\\BinWorksheetItemList',
      'WorkOrderIssue' => 'Nzolt\\NetSuite\\WorkOrderIssue',
      'WorkOrderIssueComponent' => 'Nzolt\\NetSuite\\WorkOrderIssueComponent',
      'WorkOrderIssueComponentList' => 'Nzolt\\NetSuite\\WorkOrderIssueComponentList',
      'WorkOrderCompletion' => 'Nzolt\\NetSuite\\WorkOrderCompletion',
      'WorkOrderCompletionComponent' => 'Nzolt\\NetSuite\\WorkOrderCompletionComponent',
      'WorkOrderCompletionComponentList' => 'Nzolt\\NetSuite\\WorkOrderCompletionComponentList',
      'WorkOrderClose' => 'Nzolt\\NetSuite\\WorkOrderClose',
      'WorkOrderCompletionOperation' => 'Nzolt\\NetSuite\\WorkOrderCompletionOperation',
      'WorkOrderCompletionOperationList' => 'Nzolt\\NetSuite\\WorkOrderCompletionOperationList',
      'InventoryCostRevaluation' => 'Nzolt\\NetSuite\\InventoryCostRevaluation',
      'InventoryCostRevaluationCostComponent' => 'Nzolt\\NetSuite\\InventoryCostRevaluationCostComponent',
      'InventoryCostRevaluationCostComponentList' => 'Nzolt\\NetSuite\\InventoryCostRevaluationCostComponentList',
      'JournalEntry' => 'Nzolt\\NetSuite\\JournalEntry',
      'JournalEntryLine' => 'Nzolt\\NetSuite\\JournalEntryLine',
      'JournalEntryLineList' => 'Nzolt\\NetSuite\\JournalEntryLineList',
      'InterCompanyJournalEntry' => 'Nzolt\\NetSuite\\InterCompanyJournalEntry',
      'InterCompanyJournalEntryLine' => 'Nzolt\\NetSuite\\InterCompanyJournalEntryLine',
      'InterCompanyJournalEntryLineList' => 'Nzolt\\NetSuite\\InterCompanyJournalEntryLineList',
      'StatisticalJournalEntry' => 'Nzolt\\NetSuite\\StatisticalJournalEntry',
      'StatisticalJournalEntryLine' => 'Nzolt\\NetSuite\\StatisticalJournalEntryLine',
      'StatisticalJournalEntryLineList' => 'Nzolt\\NetSuite\\StatisticalJournalEntryLineList',
      'InterCompanyJournalEntryAccountingBookDetail' => 'Nzolt\\NetSuite\\InterCompanyJournalEntryAccountingBookDetail',
      'InterCompanyJournalEntryAccountingBookDetailList' => 'Nzolt\\NetSuite\\InterCompanyJournalEntryAccountingBookDetailList',
      'AdvInterCompanyJournalEntry' => 'Nzolt\\NetSuite\\AdvInterCompanyJournalEntry',
      'AdvInterCompanyJournalEntryLine' => 'Nzolt\\NetSuite\\AdvInterCompanyJournalEntryLine',
      'AdvInterCompanyJournalEntryLineList' => 'Nzolt\\NetSuite\\AdvInterCompanyJournalEntryLineList',
      'AdvInterCompanyJournalEntryAccountingBookDetail' => 'Nzolt\\NetSuite\\AdvInterCompanyJournalEntryAccountingBookDetail',
      'AdvInterCompanyJournalEntryAccountingBookDetailList' => 'Nzolt\\NetSuite\\AdvInterCompanyJournalEntryAccountingBookDetailList',
      'CustomRecord' => 'Nzolt\\NetSuite\\CustomRecord',
      'CustomRecordSearch' => 'Nzolt\\NetSuite\\CustomRecordSearch',
      'CustomRecordSearchAdvanced' => 'Nzolt\\NetSuite\\CustomRecordSearchAdvanced',
      'CustomRecordSearchRow' => 'Nzolt\\NetSuite\\CustomRecordSearchRow',
      'CustomList' => 'Nzolt\\NetSuite\\CustomList',
      'CustomListCustomValue' => 'Nzolt\\NetSuite\\CustomListCustomValue',
      'CustomListCustomValueList' => 'Nzolt\\NetSuite\\CustomListCustomValueList',
      'CustomListTranslations' => 'Nzolt\\NetSuite\\CustomListTranslations',
      'CustomListTranslationsList' => 'Nzolt\\NetSuite\\CustomListTranslationsList',
      'CustomRecordType' => 'Nzolt\\NetSuite\\CustomRecordType',
      'CustomRecordTypeFieldList' => 'Nzolt\\NetSuite\\CustomRecordTypeFieldList',
      'CustomRecordTypeTabs' => 'Nzolt\\NetSuite\\CustomRecordTypeTabs',
      'CustomRecordTypeTabsList' => 'Nzolt\\NetSuite\\CustomRecordTypeTabsList',
      'CustomRecordTypeForms' => 'Nzolt\\NetSuite\\CustomRecordTypeForms',
      'CustomRecordTypeFormsList' => 'Nzolt\\NetSuite\\CustomRecordTypeFormsList',
      'CustomRecordTypeOnlineForms' => 'Nzolt\\NetSuite\\CustomRecordTypeOnlineForms',
      'CustomRecordTypeOnlineFormsList' => 'Nzolt\\NetSuite\\CustomRecordTypeOnlineFormsList',
      'CustomRecordTypePermissions' => 'Nzolt\\NetSuite\\CustomRecordTypePermissions',
      'CustomRecordTypePermissionsList' => 'Nzolt\\NetSuite\\CustomRecordTypePermissionsList',
      'CustomRecordTypeLinks' => 'Nzolt\\NetSuite\\CustomRecordTypeLinks',
      'CustomRecordTypeLinksList' => 'Nzolt\\NetSuite\\CustomRecordTypeLinksList',
      'CustomRecordTypeManagers' => 'Nzolt\\NetSuite\\CustomRecordTypeManagers',
      'CustomRecordTypeManagersList' => 'Nzolt\\NetSuite\\CustomRecordTypeManagersList',
      'CustomRecordTypeChildren' => 'Nzolt\\NetSuite\\CustomRecordTypeChildren',
      'CustomRecordTypeChildrenList' => 'Nzolt\\NetSuite\\CustomRecordTypeChildrenList',
      'CustomRecordTypeParents' => 'Nzolt\\NetSuite\\CustomRecordTypeParents',
      'CustomRecordTypeParentsList' => 'Nzolt\\NetSuite\\CustomRecordTypeParentsList',
      'CustomRecordTypeTranslations' => 'Nzolt\\NetSuite\\CustomRecordTypeTranslations',
      'CustomRecordTypeTranslationsList' => 'Nzolt\\NetSuite\\CustomRecordTypeTranslationsList',
      'CustomRecordTypeSublists' => 'Nzolt\\NetSuite\\CustomRecordTypeSublists',
      'CustomRecordTypeSublistsList' => 'Nzolt\\NetSuite\\CustomRecordTypeSublistsList',
      'CustomFieldType' => 'Nzolt\\NetSuite\\CustomFieldType',
      'EntityCustomField' => 'Nzolt\\NetSuite\\EntityCustomField',
      'EntityCustomFieldFilter' => 'Nzolt\\NetSuite\\EntityCustomFieldFilter',
      'EntityCustomFieldFilterList' => 'Nzolt\\NetSuite\\EntityCustomFieldFilterList',
      'FldFilterSelList' => 'Nzolt\\NetSuite\\FldFilterSelList',
      'CrmCustomField' => 'Nzolt\\NetSuite\\CrmCustomField',
      'CrmCustomFieldFilter' => 'Nzolt\\NetSuite\\CrmCustomFieldFilter',
      'CrmCustomFieldFilterList' => 'Nzolt\\NetSuite\\CrmCustomFieldFilterList',
      'OtherCustomField' => 'Nzolt\\NetSuite\\OtherCustomField',
      'OtherCustomFieldFilter' => 'Nzolt\\NetSuite\\OtherCustomFieldFilter',
      'OtherCustomFieldFilterList' => 'Nzolt\\NetSuite\\OtherCustomFieldFilterList',
      'ItemCustomField' => 'Nzolt\\NetSuite\\ItemCustomField',
      'ItemCustomFieldFilter' => 'Nzolt\\NetSuite\\ItemCustomFieldFilter',
      'ItemCustomFieldFilterList' => 'Nzolt\\NetSuite\\ItemCustomFieldFilterList',
      'TransactionBodyCustomField' => 'Nzolt\\NetSuite\\TransactionBodyCustomField',
      'TransactionBodyCustomFieldFilter' => 'Nzolt\\NetSuite\\TransactionBodyCustomFieldFilter',
      'TransactionBodyCustomFieldFilterList' => 'Nzolt\\NetSuite\\TransactionBodyCustomFieldFilterList',
      'TransactionColumnCustomField' => 'Nzolt\\NetSuite\\TransactionColumnCustomField',
      'TransactionColumnCustomFieldFilter' => 'Nzolt\\NetSuite\\TransactionColumnCustomFieldFilter',
      'TransactionColumnCustomFieldFilterList' => 'Nzolt\\NetSuite\\TransactionColumnCustomFieldFilterList',
      'ItemOptionCustomField' => 'Nzolt\\NetSuite\\ItemOptionCustomField',
      'ItemsList' => 'Nzolt\\NetSuite\\ItemsList',
      'ItemOptionCustomFieldFilter' => 'Nzolt\\NetSuite\\ItemOptionCustomFieldFilter',
      'ItemOptionCustomFieldFilterList' => 'Nzolt\\NetSuite\\ItemOptionCustomFieldFilterList',
      'CustomRecordCustomField' => 'Nzolt\\NetSuite\\CustomRecordCustomField',
      'CustomRecordCustomFieldFilter' => 'Nzolt\\NetSuite\\CustomRecordCustomFieldFilter',
      'CustomRecordCustomFieldFilterList' => 'Nzolt\\NetSuite\\CustomRecordCustomFieldFilterList',
      'CustomFieldRoleAccess' => 'Nzolt\\NetSuite\\CustomFieldRoleAccess',
      'CustomFieldRoleAccessList' => 'Nzolt\\NetSuite\\CustomFieldRoleAccessList',
      'CustomFieldDepartmentAccess' => 'Nzolt\\NetSuite\\CustomFieldDepartmentAccess',
      'CustomFieldDepartmentAccessList' => 'Nzolt\\NetSuite\\CustomFieldDepartmentAccessList',
      'CustomFieldSubAccess' => 'Nzolt\\NetSuite\\CustomFieldSubAccess',
      'CustomFieldSubAccessList' => 'Nzolt\\NetSuite\\CustomFieldSubAccessList',
      'LanguageValue' => 'Nzolt\\NetSuite\\LanguageValue',
      'LanguageValueList' => 'Nzolt\\NetSuite\\LanguageValueList',
      'CustomFieldTranslations' => 'Nzolt\\NetSuite\\CustomFieldTranslations',
      'CustomFieldTranslationsList' => 'Nzolt\\NetSuite\\CustomFieldTranslationsList',
      'ItemNumberCustomField' => 'Nzolt\\NetSuite\\ItemNumberCustomField',
      'ItemNumberCustomFieldFilter' => 'Nzolt\\NetSuite\\ItemNumberCustomFieldFilter',
      'ItemNumberCustomFieldFilterList' => 'Nzolt\\NetSuite\\ItemNumberCustomFieldFilterList',
      'CustomListSearch' => 'Nzolt\\NetSuite\\CustomListSearch',
      'CustomListSearchAdvanced' => 'Nzolt\\NetSuite\\CustomListSearchAdvanced',
      'CustomListSearchRow' => 'Nzolt\\NetSuite\\CustomListSearchRow',
      'CustomRecordTranslations' => 'Nzolt\\NetSuite\\CustomRecordTranslations',
      'CustomRecordTranslationsList' => 'Nzolt\\NetSuite\\CustomRecordTranslationsList',
      'CustomTransaction' => 'Nzolt\\NetSuite\\CustomTransaction',
      'CustomTransactionLine' => 'Nzolt\\NetSuite\\CustomTransactionLine',
      'CustomTransactionLineList' => 'Nzolt\\NetSuite\\CustomTransactionLineList',
      'Employee' => 'Nzolt\\NetSuite\\Employee',
      'EmployeeSubscriptions' => 'Nzolt\\NetSuite\\EmployeeSubscriptions',
      'EmployeeSubscriptionsList' => 'Nzolt\\NetSuite\\EmployeeSubscriptionsList',
      'EmployeeAddressbook' => 'Nzolt\\NetSuite\\EmployeeAddressbook',
      'EmployeeAddressbookList' => 'Nzolt\\NetSuite\\EmployeeAddressbookList',
      'EmployeeRoles' => 'Nzolt\\NetSuite\\EmployeeRoles',
      'EmployeeRolesList' => 'Nzolt\\NetSuite\\EmployeeRolesList',
      'EmployeeSearch' => 'Nzolt\\NetSuite\\EmployeeSearch',
      'EmployeeSearchAdvanced' => 'Nzolt\\NetSuite\\EmployeeSearchAdvanced',
      'EmployeeSearchRow' => 'Nzolt\\NetSuite\\EmployeeSearchRow',
      'EmployeeEmergencyContact' => 'Nzolt\\NetSuite\\EmployeeEmergencyContact',
      'EmployeeEmergencyContactList' => 'Nzolt\\NetSuite\\EmployeeEmergencyContactList',
      'EmployeeHrEducation' => 'Nzolt\\NetSuite\\EmployeeHrEducation',
      'EmployeeHrEducationList' => 'Nzolt\\NetSuite\\EmployeeHrEducationList',
      'EmployeeAccruedTime' => 'Nzolt\\NetSuite\\EmployeeAccruedTime',
      'EmployeeAccruedTimeList' => 'Nzolt\\NetSuite\\EmployeeAccruedTimeList',
      'EmployeeDeduction' => 'Nzolt\\NetSuite\\EmployeeDeduction',
      'EmployeeDeductionList' => 'Nzolt\\NetSuite\\EmployeeDeductionList',
      'EmployeeCompanyContribution' => 'Nzolt\\NetSuite\\EmployeeCompanyContribution',
      'EmployeeCompanyContributionList' => 'Nzolt\\NetSuite\\EmployeeCompanyContributionList',
      'EmployeeEarning' => 'Nzolt\\NetSuite\\EmployeeEarning',
      'EmployeeEarningList' => 'Nzolt\\NetSuite\\EmployeeEarningList',
      'EmployeeDirectDeposit' => 'Nzolt\\NetSuite\\EmployeeDirectDeposit',
      'EmployeeDirectDepositList' => 'Nzolt\\NetSuite\\EmployeeDirectDepositList',
      'PayrollItem' => 'Nzolt\\NetSuite\\PayrollItem',
      'PayrollItemSearch' => 'Nzolt\\NetSuite\\PayrollItemSearch',
      'PayrollItemSearchAdvanced' => 'Nzolt\\NetSuite\\PayrollItemSearchAdvanced',
      'PayrollItemSearchRow' => 'Nzolt\\NetSuite\\PayrollItemSearchRow',
      'EmployeeRates' => 'Nzolt\\NetSuite\\EmployeeRates',
      'EmployeeRatesList' => 'Nzolt\\NetSuite\\EmployeeRatesList',
      'HcmJob' => 'Nzolt\\NetSuite\\HcmJob',
      'HcmJobSearch' => 'Nzolt\\NetSuite\\HcmJobSearch',
      'HcmJobSearchAdvanced' => 'Nzolt\\NetSuite\\HcmJobSearchAdvanced',
      'HcmJobSearchRow' => 'Nzolt\\NetSuite\\HcmJobSearchRow',
      'EmployeeHcmPosition' => 'Nzolt\\NetSuite\\EmployeeHcmPosition',
      'EmployeeHcmPositionList' => 'Nzolt\\NetSuite\\EmployeeHcmPositionList',
      'SiteCategoryTranslation' => 'Nzolt\\NetSuite\\SiteCategoryTranslation',
      'SiteCategoryTranslationList' => 'Nzolt\\NetSuite\\SiteCategoryTranslationList',
      'SiteCategoryPresentationItemList' => 'Nzolt\\NetSuite\\SiteCategoryPresentationItemList',
      'SiteCategorySearch' => 'Nzolt\\NetSuite\\SiteCategorySearch',
      'SiteCategorySearchAdvanced' => 'Nzolt\\NetSuite\\SiteCategorySearchAdvanced',
      'SiteCategorySearchRow' => 'Nzolt\\NetSuite\\SiteCategorySearchRow',
      'TimeBill' => 'Nzolt\\NetSuite\\TimeBill',
      'TimeBillSearch' => 'Nzolt\\NetSuite\\TimeBillSearch',
      'TimeBillSearchAdvanced' => 'Nzolt\\NetSuite\\TimeBillSearchAdvanced',
      'TimeBillSearchRow' => 'Nzolt\\NetSuite\\TimeBillSearchRow',
      'ExpenseReport' => 'Nzolt\\NetSuite\\ExpenseReport',
      'ExpenseReportExpense' => 'Nzolt\\NetSuite\\ExpenseReportExpense',
      'ExpenseReportExpenseList' => 'Nzolt\\NetSuite\\ExpenseReportExpenseList',
      'PaycheckJournal' => 'Nzolt\\NetSuite\\PaycheckJournal',
      'PaycheckJournalCompanyTax' => 'Nzolt\\NetSuite\\PaycheckJournalCompanyTax',
      'PaycheckJournalCompanyTaxList' => 'Nzolt\\NetSuite\\PaycheckJournalCompanyTaxList',
      'PaycheckJournalDeduction' => 'Nzolt\\NetSuite\\PaycheckJournalDeduction',
      'PaycheckJournalDeductionList' => 'Nzolt\\NetSuite\\PaycheckJournalDeductionList',
      'PaycheckJournalCompanyContribution' => 'Nzolt\\NetSuite\\PaycheckJournalCompanyContribution',
      'PaycheckJournalCompanyContributionList' => 'Nzolt\\NetSuite\\PaycheckJournalCompanyContributionList',
      'PaycheckJournalEarning' => 'Nzolt\\NetSuite\\PaycheckJournalEarning',
      'PaycheckJournalEarningList' => 'Nzolt\\NetSuite\\PaycheckJournalEarningList',
      'PaycheckJournalEmployeeTax' => 'Nzolt\\NetSuite\\PaycheckJournalEmployeeTax',
      'PaycheckJournalEmployeeTaxList' => 'Nzolt\\NetSuite\\PaycheckJournalEmployeeTaxList',
      'TimeEntry' => 'Nzolt\\NetSuite\\TimeEntry',
      'TimeSheet' => 'Nzolt\\NetSuite\\TimeSheet',
      'TimeSheetTimeGrid' => 'Nzolt\\NetSuite\\TimeSheetTimeGrid',
      'TimeSheetTimeGridList' => 'Nzolt\\NetSuite\\TimeSheetTimeGridList',
      'TimeEntrySearch' => 'Nzolt\\NetSuite\\TimeEntrySearch',
      'TimeEntrySearchAdvanced' => 'Nzolt\\NetSuite\\TimeEntrySearchAdvanced',
      'TimeEntrySearchRow' => 'Nzolt\\NetSuite\\TimeEntrySearchRow',
      'TimeSheetSearch' => 'Nzolt\\NetSuite\\TimeSheetSearch',
      'TimeSheetSearchAdvanced' => 'Nzolt\\NetSuite\\TimeSheetSearchAdvanced',
      'TimeSheetSearchRow' => 'Nzolt\\NetSuite\\TimeSheetSearchRow',
      'Paycheck' => 'Nzolt\\NetSuite\\Paycheck',
      'PaycheckPayTime' => 'Nzolt\\NetSuite\\PaycheckPayTime',
      'PaycheckPayTimeList' => 'Nzolt\\NetSuite\\PaycheckPayTimeList',
      'PaycheckPayExp' => 'Nzolt\\NetSuite\\PaycheckPayExp',
      'PaycheckPayExpList' => 'Nzolt\\NetSuite\\PaycheckPayExpList',
      'PaycheckPayDisburse' => 'Nzolt\\NetSuite\\PaycheckPayDisburse',
      'PaycheckPayDisburseList' => 'Nzolt\\NetSuite\\PaycheckPayDisburseList',
      'PaycheckPaySummary' => 'Nzolt\\NetSuite\\PaycheckPaySummary',
      'PaycheckPaySummaryList' => 'Nzolt\\NetSuite\\PaycheckPaySummaryList',
      'PaycheckPayDeduct' => 'Nzolt\\NetSuite\\PaycheckPayDeduct',
      'PaycheckPayDeductList' => 'Nzolt\\NetSuite\\PaycheckPayDeductList',
      'PaycheckPayPto' => 'Nzolt\\NetSuite\\PaycheckPayPto',
      'PaycheckPayPtoList' => 'Nzolt\\NetSuite\\PaycheckPayPtoList',
      'PaycheckPayTax' => 'Nzolt\\NetSuite\\PaycheckPayTax',
      'PaycheckPayTaxList' => 'Nzolt\\NetSuite\\PaycheckPayTaxList',
      'PaycheckPayEarn' => 'Nzolt\\NetSuite\\PaycheckPayEarn',
      'PaycheckPayEarnList' => 'Nzolt\\NetSuite\\PaycheckPayEarnList',
      'PaycheckPayContrib' => 'Nzolt\\NetSuite\\PaycheckPayContrib',
      'PaycheckPayContribList' => 'Nzolt\\NetSuite\\PaycheckPayContribList',
      'PaycheckSearch' => 'Nzolt\\NetSuite\\PaycheckSearch',
      'PaycheckSearchAdvanced' => 'Nzolt\\NetSuite\\PaycheckSearchAdvanced',
      'PaycheckSearchRow' => 'Nzolt\\NetSuite\\PaycheckSearchRow',
      'CampaignResponse' => 'Nzolt\\NetSuite\\CampaignResponse',
      'Campaign' => 'Nzolt\\NetSuite\\Campaign',
      'CampaignEmail' => 'Nzolt\\NetSuite\\CampaignEmail',
      'CampaignEmailList' => 'Nzolt\\NetSuite\\CampaignEmailList',
      'CampaignDirectMail' => 'Nzolt\\NetSuite\\CampaignDirectMail',
      'CampaignDirectMailList' => 'Nzolt\\NetSuite\\CampaignDirectMailList',
      'CampaignEvent' => 'Nzolt\\NetSuite\\CampaignEvent',
      'CampaignEventList' => 'Nzolt\\NetSuite\\CampaignEventList',
      'CampaignEventResponse' => 'Nzolt\\NetSuite\\CampaignEventResponse',
      'CampaignEventResponseList' => 'Nzolt\\NetSuite\\CampaignEventResponseList',
      'CampaignSearch' => 'Nzolt\\NetSuite\\CampaignSearch',
      'CampaignSearchAdvanced' => 'Nzolt\\NetSuite\\CampaignSearchAdvanced',
      'CampaignSearchRow' => 'Nzolt\\NetSuite\\CampaignSearchRow',
      'CampaignCategory' => 'Nzolt\\NetSuite\\CampaignCategory',
      'CampaignAudience' => 'Nzolt\\NetSuite\\CampaignAudience',
      'CampaignFamily' => 'Nzolt\\NetSuite\\CampaignFamily',
      'CampaignSearchEngine' => 'Nzolt\\NetSuite\\CampaignSearchEngine',
      'CampaignChannel' => 'Nzolt\\NetSuite\\CampaignChannel',
      'CampaignOffer' => 'Nzolt\\NetSuite\\CampaignOffer',
      'CampaignResponseResponses' => 'Nzolt\\NetSuite\\CampaignResponseResponses',
      'CampaignResponseResponsesList' => 'Nzolt\\NetSuite\\CampaignResponseResponsesList',
      'CampaignVertical' => 'Nzolt\\NetSuite\\CampaignVertical',
      'CampaignSubscription' => 'Nzolt\\NetSuite\\CampaignSubscription',
      'PromotionCode' => 'Nzolt\\NetSuite\\PromotionCode',
      'PromotionCodePartners' => 'Nzolt\\NetSuite\\PromotionCodePartners',
      'PromotionCodePartnersList' => 'Nzolt\\NetSuite\\PromotionCodePartnersList',
      'PromotionCodeItems' => 'Nzolt\\NetSuite\\PromotionCodeItems',
      'PromotionCodeItemsList' => 'Nzolt\\NetSuite\\PromotionCodeItemsList',
      'PromotionCodeSearch' => 'Nzolt\\NetSuite\\PromotionCodeSearch',
      'PromotionCodeSearchAdvanced' => 'Nzolt\\NetSuite\\PromotionCodeSearchAdvanced',
      'PromotionCodeSearchRow' => 'Nzolt\\NetSuite\\PromotionCodeSearchRow',
      'PromotionCodeCurrency' => 'Nzolt\\NetSuite\\PromotionCodeCurrency',
      'PromotionCodeCurrencyList' => 'Nzolt\\NetSuite\\PromotionCodeCurrencyList',
      'CouponCode' => 'Nzolt\\NetSuite\\CouponCode',
      'CouponCodeSearch' => 'Nzolt\\NetSuite\\CouponCodeSearch',
      'CouponCodeSearchAdvanced' => 'Nzolt\\NetSuite\\CouponCodeSearchAdvanced',
      'CouponCodeSearchRow' => 'Nzolt\\NetSuite\\CouponCodeSearchRow',
      'ItemDemandPlan' => 'Nzolt\\NetSuite\\ItemDemandPlan',
      'DemandPlan' => 'Nzolt\\NetSuite\\DemandPlan',
      'DemandPlanMatrix' => 'Nzolt\\NetSuite\\DemandPlanMatrix',
      'PeriodDemandPlanList' => 'Nzolt\\NetSuite\\PeriodDemandPlanList',
      'PeriodDemandPlan' => 'Nzolt\\NetSuite\\PeriodDemandPlan',
      'ItemDemandPlanSearch' => 'Nzolt\\NetSuite\\ItemDemandPlanSearch',
      'ItemDemandPlanSearchAdvanced' => 'Nzolt\\NetSuite\\ItemDemandPlanSearchAdvanced',
      'ItemDemandPlanSearchRow' => 'Nzolt\\NetSuite\\ItemDemandPlanSearchRow',
      'ItemSupplyPlan' => 'Nzolt\\NetSuite\\ItemSupplyPlan',
      'ItemSupplyPlanOrder' => 'Nzolt\\NetSuite\\ItemSupplyPlanOrder',
      'ItemSupplyPlanOrderList' => 'Nzolt\\NetSuite\\ItemSupplyPlanOrderList',
      'ItemSupplyPlanSearch' => 'Nzolt\\NetSuite\\ItemSupplyPlanSearch',
      'ItemSupplyPlanSearchAdvanced' => 'Nzolt\\NetSuite\\ItemSupplyPlanSearchAdvanced',
      'ItemSupplyPlanSearchRow' => 'Nzolt\\NetSuite\\ItemSupplyPlanSearchRow',
      'ManufacturingCostTemplate' => 'Nzolt\\NetSuite\\ManufacturingCostTemplate',
      'ManufacturingCostDetail' => 'Nzolt\\NetSuite\\ManufacturingCostDetail',
      'ManufacturingCostDetailList' => 'Nzolt\\NetSuite\\ManufacturingCostDetailList',
      'ManufacturingCostTemplateSearch' => 'Nzolt\\NetSuite\\ManufacturingCostTemplateSearch',
      'ManufacturingCostTemplateSearchAdvanced' => 'Nzolt\\NetSuite\\ManufacturingCostTemplateSearchAdvanced',
      'ManufacturingCostTemplateSearchRow' => 'Nzolt\\NetSuite\\ManufacturingCostTemplateSearchRow',
      'ManufacturingRouting' => 'Nzolt\\NetSuite\\ManufacturingRouting',
      'ManufacturingRoutingRoutingStep' => 'Nzolt\\NetSuite\\ManufacturingRoutingRoutingStep',
      'ManufacturingRoutingRoutingStepList' => 'Nzolt\\NetSuite\\ManufacturingRoutingRoutingStepList',
      'ManufacturingRoutingSearch' => 'Nzolt\\NetSuite\\ManufacturingRoutingSearch',
      'ManufacturingRoutingSearchAdvanced' => 'Nzolt\\NetSuite\\ManufacturingRoutingSearchAdvanced',
      'ManufacturingRoutingSearchRow' => 'Nzolt\\NetSuite\\ManufacturingRoutingSearchRow',
      'ManufacturingOperationTask' => 'Nzolt\\NetSuite\\ManufacturingOperationTask',
      'ManufacturingOperationTaskSearch' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskSearch',
      'ManufacturingOperationTaskSearchAdvanced' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskSearchAdvanced',
      'ManufacturingOperationTaskSearchRow' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskSearchRow',
      'ManufacturingOperationTaskPredecessor' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskPredecessor',
      'ManufacturingOperationTaskPredecessorList' => 'Nzolt\\NetSuite\\ManufacturingOperationTaskPredecessorList',
      'ManufacturingRoutingRoutingComponent' => 'Nzolt\\NetSuite\\ManufacturingRoutingRoutingComponent',
      'ManufacturingRoutingRoutingComponentList' => 'Nzolt\\NetSuite\\ManufacturingRoutingRoutingComponentList',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://webservices.netsuite.com/wsdl/v2017_2_0/netsuite.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param LoginRequest $parameters
     * @return LoginResponse
     */
    public function login(LoginRequest $parameters)
    {
      return $this->__soapCall('login', array($parameters));
    }

    /**
     * @param SsoLoginRequest $parameters
     * @return SsoLoginResponse
     */
    public function ssoLogin(SsoLoginRequest $parameters)
    {
      return $this->__soapCall('ssoLogin', array($parameters));
    }

    /**
     * @param MapSsoRequest $parameters
     * @return MapSsoResponse
     */
    public function mapSso(MapSsoRequest $parameters)
    {
      return $this->__soapCall('mapSso', array($parameters));
    }

    /**
     * @param ChangePasswordRequest $parameters
     * @return ChangePasswordResponse
     */
    public function changePassword(ChangePasswordRequest $parameters)
    {
      return $this->__soapCall('changePassword', array($parameters));
    }

    /**
     * @param ChangeEmailRequest $parameters
     * @return ChangeEmailResponse
     */
    public function changeEmail(ChangeEmailRequest $parameters)
    {
      return $this->__soapCall('changeEmail', array($parameters));
    }

    /**
     * @param LogoutRequest $parameters
     * @return LogoutResponse
     */
    public function logout(LogoutRequest $parameters)
    {
      return $this->__soapCall('logout', array($parameters));
    }

    /**
     * @param AddRequest $parameters
     * @return AddResponse
     */
    public function add(AddRequest $parameters)
    {
      return $this->__soapCall('add', array($parameters));
    }

    /**
     * @param DeleteRequest $parameters
     * @return DeleteResponse
     */
    public function delete(DeleteRequest $parameters)
    {
      return $this->__soapCall('delete', array($parameters));
    }

    /**
     * @param SearchRequest $parameters
     * @return SearchResponse
     */
    public function search(SearchRequest $parameters)
    {
      return $this->__soapCall('search', array($parameters));
    }

    /**
     * @param SearchMoreRequest $parameters
     * @return SearchMoreResponse
     */
    public function searchMore(SearchMoreRequest $parameters)
    {
      return $this->__soapCall('searchMore', array($parameters));
    }

    /**
     * @param SearchMoreWithIdRequest $parameters
     * @return SearchMoreWithIdResponse
     */
    public function searchMoreWithId(SearchMoreWithIdRequest $parameters)
    {
      return $this->__soapCall('searchMoreWithId', array($parameters));
    }

    /**
     * @param SearchNextRequest $parameters
     * @return SearchNextResponse
     */
    public function searchNext(SearchNextRequest $parameters)
    {
      return $this->__soapCall('searchNext', array($parameters));
    }

    /**
     * @param UpdateRequest $parameters
     * @return UpdateResponse
     */
    public function update(UpdateRequest $parameters)
    {
      return $this->__soapCall('update', array($parameters));
    }

    /**
     * @param UpsertRequest $parameters
     * @return UpsertResponse
     */
    public function upsert(UpsertRequest $parameters)
    {
      return $this->__soapCall('upsert', array($parameters));
    }

    /**
     * @param AddListRequest $parameters
     * @return AddListResponse
     */
    public function addList(AddListRequest $parameters)
    {
      return $this->__soapCall('addList', array($parameters));
    }

    /**
     * @param DeleteListRequest $parameters
     * @return DeleteListResponse
     */
    public function deleteList(DeleteListRequest $parameters)
    {
      return $this->__soapCall('deleteList', array($parameters));
    }

    /**
     * @param UpdateListRequest $parameters
     * @return UpdateListResponse
     */
    public function updateList(UpdateListRequest $parameters)
    {
      return $this->__soapCall('updateList', array($parameters));
    }

    /**
     * @param UpsertListRequest $parameters
     * @return UpsertListResponse
     */
    public function upsertList(UpsertListRequest $parameters)
    {
      return $this->__soapCall('upsertList', array($parameters));
    }

    /**
     * @param GetRequest $parameters
     * @return GetResponse
     */
    public function get(GetRequest $parameters)
    {
      return $this->__soapCall('get', array($parameters));
    }

    /**
     * @param GetListRequest $parameters
     * @return GetListResponse
     */
    public function getList(GetListRequest $parameters)
    {
      return $this->__soapCall('getList', array($parameters));
    }

    /**
     * @param GetAllRequest $parameters
     * @return GetAllResponse
     */
    public function getAll(GetAllRequest $parameters)
    {
      return $this->__soapCall('getAll', array($parameters));
    }

    /**
     * @param GetSavedSearchRequest $parameters
     * @return GetSavedSearchResponse
     */
    public function getSavedSearch(GetSavedSearchRequest $parameters)
    {
      return $this->__soapCall('getSavedSearch', array($parameters));
    }

    /**
     * @param GetCustomizationIdRequest $parameters
     * @return GetCustomizationIdResponse
     */
    public function getCustomizationId(GetCustomizationIdRequest $parameters)
    {
      return $this->__soapCall('getCustomizationId', array($parameters));
    }

    /**
     * @param InitializeRequest $parameters
     * @return InitializeResponse
     */
    public function initialize(InitializeRequest $parameters)
    {
      return $this->__soapCall('initialize', array($parameters));
    }

    /**
     * @param InitializeListRequest $parameters
     * @return InitializeListResponse
     */
    public function initializeList(InitializeListRequest $parameters)
    {
      return $this->__soapCall('initializeList', array($parameters));
    }

    /**
     * @param getSelectValueRequest $parameters
     * @return getSelectValueResponse
     */
    public function getSelectValue(getSelectValueRequest $parameters)
    {
      return $this->__soapCall('getSelectValue', array($parameters));
    }

    /**
     * @param GetItemAvailabilityRequest $parameters
     * @return GetItemAvailabilityResponse
     */
    public function getItemAvailability(GetItemAvailabilityRequest $parameters)
    {
      return $this->__soapCall('getItemAvailability', array($parameters));
    }

    /**
     * @param GetBudgetExchangeRateRequest $parameters
     * @return GetBudgetExchangeRateResponse
     */
    public function getBudgetExchangeRate(GetBudgetExchangeRateRequest $parameters)
    {
      return $this->__soapCall('getBudgetExchangeRate', array($parameters));
    }

    /**
     * @param GetCurrencyRateRequest $parameters
     * @return GetCurrencyRateResponse
     */
    public function getCurrencyRate(GetCurrencyRateRequest $parameters)
    {
      return $this->__soapCall('getCurrencyRate', array($parameters));
    }

    /**
     * @param GetDataCenterUrlsRequest $parameters
     * @return GetDataCenterUrlsResponse
     */
    public function getDataCenterUrls(GetDataCenterUrlsRequest $parameters)
    {
      return $this->__soapCall('getDataCenterUrls', array($parameters));
    }

    /**
     * @param GetPostingTransactionSummaryRequest $parameters
     * @return GetPostingTransactionSummaryResponse
     */
    public function getPostingTransactionSummary(GetPostingTransactionSummaryRequest $parameters)
    {
      return $this->__soapCall('getPostingTransactionSummary', array($parameters));
    }

    /**
     * @param GetServerTimeRequest $parameters
     * @return GetServerTimeResponse
     */
    public function getServerTime(GetServerTimeRequest $parameters)
    {
      return $this->__soapCall('getServerTime', array($parameters));
    }

    /**
     * @param AttachRequest $parameters
     * @return AttachResponse
     */
    public function attach(AttachRequest $parameters)
    {
      return $this->__soapCall('attach', array($parameters));
    }

    /**
     * @param DetachRequest $parameters
     * @return DetachResponse
     */
    public function detach(DetachRequest $parameters)
    {
      return $this->__soapCall('detach', array($parameters));
    }

    /**
     * @param UpdateInviteeStatusRequest $parameters
     * @return UpdateInviteeStatusResponse
     */
    public function updateInviteeStatus(UpdateInviteeStatusRequest $parameters)
    {
      return $this->__soapCall('updateInviteeStatus', array($parameters));
    }

    /**
     * @param UpdateInviteeStatusListRequest $parameters
     * @return UpdateInviteeStatusListResponse
     */
    public function updateInviteeStatusList(UpdateInviteeStatusListRequest $parameters)
    {
      return $this->__soapCall('updateInviteeStatusList', array($parameters));
    }

    /**
     * @param AsyncAddListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncAddList(AsyncAddListRequest $parameters)
    {
      return $this->__soapCall('asyncAddList', array($parameters));
    }

    /**
     * @param AsyncUpdateListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncUpdateList(AsyncUpdateListRequest $parameters)
    {
      return $this->__soapCall('asyncUpdateList', array($parameters));
    }

    /**
     * @param AsyncUpsertListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncUpsertList(AsyncUpsertListRequest $parameters)
    {
      return $this->__soapCall('asyncUpsertList', array($parameters));
    }

    /**
     * @param AsyncDeleteListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncDeleteList(AsyncDeleteListRequest $parameters)
    {
      return $this->__soapCall('asyncDeleteList', array($parameters));
    }

    /**
     * @param AsyncGetListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncGetList(AsyncGetListRequest $parameters)
    {
      return $this->__soapCall('asyncGetList', array($parameters));
    }

    /**
     * @param AsyncInitializeListRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncInitializeList(AsyncInitializeListRequest $parameters)
    {
      return $this->__soapCall('asyncInitializeList', array($parameters));
    }

    /**
     * @param AsyncSearchRequest $parameters
     * @return AsyncStatusResponse
     */
    public function asyncSearch(AsyncSearchRequest $parameters)
    {
      return $this->__soapCall('asyncSearch', array($parameters));
    }

    /**
     * @param GetAsyncResultRequest $parameters
     * @return GetAsyncResultResponse
     */
    public function getAsyncResult(GetAsyncResultRequest $parameters)
    {
      return $this->__soapCall('getAsyncResult', array($parameters));
    }

    /**
     * @param CheckAsyncStatusRequest $parameters
     * @return AsyncStatusResponse
     */
    public function checkAsyncStatus(CheckAsyncStatusRequest $parameters)
    {
      return $this->__soapCall('checkAsyncStatus', array($parameters));
    }

    /**
     * @param GetDeletedRequest $parameters
     * @return GetDeletedResponse
     */
    public function getDeleted(GetDeletedRequest $parameters)
    {
      return $this->__soapCall('getDeleted', array($parameters));
    }

}
