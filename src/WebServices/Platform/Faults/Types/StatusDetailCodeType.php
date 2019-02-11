<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Faults\Types;

/**
 * StatusDetailCodeType
 */
class StatusDetailCodeType {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const ABORT_SEARCH_EXCEEDED_MAX_TIME = "ABORT_SEARCH_EXCEEDED_MAX_TIME";

    /**
     * @var string
     */
    const ABORT_UPLOAD_VIRUS_DETECTED = "ABORT_UPLOAD_VIRUS_DETECTED";

    /**
     * @var string
     */
    const ACCESS_DENIED = "ACCESS_DENIED";

    /**
     * @var string
     */
    const ACCTNG_PRD_REQD = "ACCTNG_PRD_REQD";

    /**
     * @var string
     */
    const ACCT_DISABLED = "ACCT_DISABLED";

    /**
     * @var string
     */
    const ACCT_MERGE_DUP = "ACCT_MERGE_DUP";

    /**
     * @var string
     */
    const ACCT_NAME_REQD = "ACCT_NAME_REQD";

    /**
     * @var string
     */
    const ACCT_NEEDS_CAMPAIGN_PROVISION = "ACCT_NEEDS_CAMPAIGN_PROVISION";

    /**
     * @var string
     */
    const ACCT_NOT_CREATED = "ACCT_NOT_CREATED";

    /**
     * @var string
     */
    const ACCT_NUMS_REQD_OR_DONT_MATCH = "ACCT_NUMS_REQD_OR_DONT_MATCH";

    /**
     * @var string
     */
    const ACCT_NUM_REQD = "ACCT_NUM_REQD";

    /**
     * @var string
     */
    const ACCT_PERIOD_SETUP_REQD = "ACCT_PERIOD_SETUP_REQD";

    /**
     * @var string
     */
    const ACCT_PRDS_BEING_ADDED = "ACCT_PRDS_BEING_ADDED";

    /**
     * @var string
     */
    const ACCT_REQD = "ACCT_REQD";

    /**
     * @var string
     */
    const ACCT_TEMP_DISABLED = "ACCT_TEMP_DISABLED";

    /**
     * @var string
     */
    const ACCT_TEMP_UNAVAILABLE = "ACCT_TEMP_UNAVAILABLE";

    /**
     * @var string
     */
    const ACH_NOT_AVAILBL = "ACH_NOT_AVAILBL";

    /**
     * @var string
     */
    const ACH_SETUP_REQD = "ACH_SETUP_REQD";

    /**
     * @var string
     */
    const ACTIVE_AP_ACCT_REQD = "ACTIVE_AP_ACCT_REQD";

    /**
     * @var string
     */
    const ACTIVE_ROLE_REQD = "ACTIVE_ROLE_REQD";

    /**
     * @var string
     */
    const ACTIVE_TRANS_EXIST = "ACTIVE_TRANS_EXIST";

    /**
     * @var string
     */
    const ADDITIONAL_AUTHENTICATION_REQUIRED_2FA = "ADDITIONAL_AUTHENTICATION_REQUIRED_2FA";

    /**
     * @var string
     */
    const ADDITIONAL_AUTHENTICATION_REQUIRED_SQ = "ADDITIONAL_AUTHENTICATION_REQUIRED_SQ";

    /**
     * @var string
     */
    const ADDRESS_LINE_1_REQD = "ADDRESS_LINE_1_REQD";

    /**
     * @var string
     */
    const ADMIN_ACCESS_REQ = "ADMIN_ACCESS_REQ";

    /**
     * @var string
     */
    const ADMIN_ACCESS_REQD = "ADMIN_ACCESS_REQD";

    /**
     * @var string
     */
    const ADMIN_ONLY_ACCESS = "ADMIN_ONLY_ACCESS";

    /**
     * @var string
     */
    const ADMIN_USER_REQD = "ADMIN_USER_REQD";

    /**
     * @var string
     */
    const ADMISSIBILITY_PACKG_TYP_REQD = "ADMISSIBILITY_PACKG_TYP_REQD";

    /**
     * @var string
     */
    const ALL_DATA_DELETE_REQD = "ALL_DATA_DELETE_REQD";

    /**
     * @var string
     */
    const ALL_MTRX_SUBITMES_OPTNS_REQD = "ALL_MTRX_SUBITMES_OPTNS_REQD";

    /**
     * @var string
     */
    const ALREADY_IN_INVT = "ALREADY_IN_INVT";

    /**
     * @var string
     */
    const AMORTZN_INVALID_DATE_RANGE = "AMORTZN_INVALID_DATE_RANGE";

    /**
     * @var string
     */
    const AMORTZN_TMPLT_DATA_MISSING = "AMORTZN_TMPLT_DATA_MISSING";

    /**
     * @var string
     */
    const AMT_DISALLWD = "AMT_DISALLWD";

    /**
     * @var string
     */
    const AMT_EXCEEDS_APPROVAL_LIMIT = "AMT_EXCEEDS_APPROVAL_LIMIT";

    /**
     * @var string
     */
    const ANSWER_REQD = "ANSWER_REQD";

    /**
     * @var string
     */
    const APPROVAL_PERMS_REQD = "APPROVAL_PERMS_REQD";

    /**
     * @var string
     */
    const AREA_CODE_REQD = "AREA_CODE_REQD";

    /**
     * @var string
     */
    const ASSIGNEE_REQD = "ASSIGNEE_REQD";

    /**
     * @var string
     */
    const ATTACHMNT_CONTAINS_VIRUS = "ATTACHMNT_CONTAINS_VIRUS";

    /**
     * @var string
     */
    const ATTACH_SIZE_EXCEEDED = "ATTACH_SIZE_EXCEEDED";

    /**
     * @var string
     */
    const AT_LEAST_ONE_FILE_REQD = "AT_LEAST_ONE_FILE_REQD";

    /**
     * @var string
     */
    const AT_LEAST_ONE_PACKAGE_REQD = "AT_LEAST_ONE_PACKAGE_REQD";

    /**
     * @var string
     */
    const AT_LEAST_ONE_RETURN_FLD_REQD = "AT_LEAST_ONE_RETURN_FLD_REQD";

    /**
     * @var string
     */
    const AT_LEAST_ONE_SUB_REQD = "AT_LEAST_ONE_SUB_REQD";

    /**
     * @var string
     */
    const AUDIT_W2_1099 = "AUDIT_W2_1099";

    /**
     * @var string
     */
    const AUTO_NUM_UPDATE_DISALLWD = "AUTO_NUM_UPDATE_DISALLWD";

    /**
     * @var string
     */
    const AVS_ERROR = "AVS_ERROR";

    /**
     * @var string
     */
    const BALANCE_EXCEEDS_CREDIT_LIMIT = "BALANCE_EXCEEDS_CREDIT_LIMIT";

    /**
     * @var string
     */
    const BANK_ACCT_REQD = "BANK_ACCT_REQD";

    /**
     * @var string
     */
    const BASE_CRNCY_REQD = "BASE_CRNCY_REQD";

    /**
     * @var string
     */
    const BILLABLES_DISALLWD = "BILLABLES_DISALLWD";

    /**
     * @var string
     */
    const BILLING_ISSUES = "BILLING_ISSUES";

    /**
     * @var string
     */
    const BILLING_SCHDUL_INVALID_RECURR = "BILLING_SCHDUL_INVALID_RECURR";

    /**
     * @var string
     */
    const BILLPAY_APPROVAL_UNAVAILBL = "BILLPAY_APPROVAL_UNAVAILBL";

    /**
     * @var string
     */
    const BILLPAY_REGSTRTN_REQD = "BILLPAY_REGSTRTN_REQD";

    /**
     * @var string
     */
    const BILLPAY_SRVC_UNAVAILBL = "BILLPAY_SRVC_UNAVAILBL";

    /**
     * @var string
     */
    const BILL_PAY_STATUS_UNAVAILABLE = "BILL_PAY_STATUS_UNAVAILABLE";

    /**
     * @var string
     */
    const BILL_PMTS_MADE_FROM_ACCT_ONLY = "BILL_PMTS_MADE_FROM_ACCT_ONLY";

    /**
     * @var string
     */
    const BIN_DSNT_CONTAIN_ENOUGH_ITEM = "BIN_DSNT_CONTAIN_ENOUGH_ITEM";

    /**
     * @var string
     */
    const BIN_ITEM_UNAVAILBL = "BIN_ITEM_UNAVAILBL";

    /**
     * @var string
     */
    const BIN_SETUP_REQD = "BIN_SETUP_REQD";

    /**
     * @var string
     */
    const BIN_UNDEFND = "BIN_UNDEFND";

    /**
     * @var string
     */
    const BUNDLE_IS_DEPRECATED = "BUNDLE_IS_DEPRECATED";

    /**
     * @var string
     */
    const CALENDAR_PREFS_REQD = "CALENDAR_PREFS_REQD";

    /**
     * @var string
     */
    const CAMPAGIN_ALREADY_EXECUTED = "CAMPAGIN_ALREADY_EXECUTED";

    /**
     * @var string
     */
    const CAMPAIGN_IN_USE = "CAMPAIGN_IN_USE";

    /**
     * @var string
     */
    const CAMPAIGN_SET_UP_REQD = "CAMPAIGN_SET_UP_REQD";

    /**
     * @var string
     */
    const CANNOT_RESET_PASSWORD = "CANNOT_RESET_PASSWORD";

    /**
     * @var string
     */
    const CANT_APPLY_PMT = "CANT_APPLY_PMT";

    /**
     * @var string
     */
    const CANT_AUTO_CREATE_ADJSTMNT = "CANT_AUTO_CREATE_ADJSTMNT";

    /**
     * @var string
     */
    const CANT_CALC_FEDEX_RATES = "CANT_CALC_FEDEX_RATES";

    /**
     * @var string
     */
    const CANT_CANCEL_APPRVD_RETRN_AUTH = "CANT_CANCEL_APPRVD_RETRN_AUTH";

    /**
     * @var string
     */
    const CANT_CANCEL_BILL_PMT = "CANT_CANCEL_BILL_PMT";

    /**
     * @var string
     */
    const CANT_CHANGE_COMMSSN = "CANT_CHANGE_COMMSSN";

    /**
     * @var string
     */
    const CANT_CHANGE_CONTACT_RESTRICTN = "CANT_CHANGE_CONTACT_RESTRICTN";

    /**
     * @var string
     */
    const CANT_CHANGE_CRMRECORDTYPELINKS = "CANT_CHANGE_CRMRECORDTYPELINKS";

    /**
     * @var string
     */
    const CANT_CHANGE_EVENT_PRIMARY_TYP = "CANT_CHANGE_EVENT_PRIMARY_TYP";

    /**
     * @var string
     */
    const CANT_CHANGE_IP_ADDRESS = "CANT_CHANGE_IP_ADDRESS";

    /**
     * @var string
     */
    const CANT_CHANGE_LEAD_SOURCE_CAT = "CANT_CHANGE_LEAD_SOURCE_CAT";

    /**
     * @var string
     */
    const CANT_CHANGE_PSWD = "CANT_CHANGE_PSWD";

    /**
     * @var string
     */
    const CANT_CHANGE_REV_REC_TMPLT = "CANT_CHANGE_REV_REC_TMPLT";

    /**
     * @var string
     */
    const CANT_CHANGE_SUB = "CANT_CHANGE_SUB";

    /**
     * @var string
     */
    const CANT_CHANGE_TASK_LINK = "CANT_CHANGE_TASK_LINK";

    /**
     * @var string
     */
    const CANT_CHANGE_UNITS_TYP = "CANT_CHANGE_UNITS_TYP";

    /**
     * @var string
     */
    const CANT_CHANGE_VSOE_ALLOCTN = "CANT_CHANGE_VSOE_ALLOCTN";

    /**
     * @var string
     */
    const CANT_CHG_POSTED_BILL_VRNC = "CANT_CHG_POSTED_BILL_VRNC";

    /**
     * @var string
     */
    const CANT_COMPLETE_FULFILL = "CANT_COMPLETE_FULFILL";

    /**
     * @var string
     */
    const CANT_CONNECT_TO_STORE = "CANT_CONNECT_TO_STORE";

    /**
     * @var string
     */
    const CANT_CONVERT_CLASS_DEPT = "CANT_CONVERT_CLASS_DEPT";

    /**
     * @var string
     */
    const CANT_CONVERT_CLASS_LOC = "CANT_CONVERT_CLASS_LOC";

    /**
     * @var string
     */
    const CANT_CONVERT_INVT_ITEM = "CANT_CONVERT_INVT_ITEM";

    /**
     * @var string
     */
    const CANT_CREATE_FILES = "CANT_CREATE_FILES";

    /**
     * @var string
     */
    const CANT_CREATE_NON_UNIQUE_RCRD = "CANT_CREATE_NON_UNIQUE_RCRD";

    /**
     * @var string
     */
    const CANT_CREATE_PO = "CANT_CREATE_PO";

    /**
     * @var string
     */
    const CANT_CREATE_SHIP_LABEL = "CANT_CREATE_SHIP_LABEL";

    /**
     * @var string
     */
    const CANT_CREATE_WORK_ORD = "CANT_CREATE_WORK_ORD";

    /**
     * @var string
     */
    const CANT_CREAT_SHIP_LABEL = "CANT_CREAT_SHIP_LABEL";

    /**
     * @var string
     */
    const CANT_DELETE_ACCT = "CANT_DELETE_ACCT";

    /**
     * @var string
     */
    const CANT_DELETE_ACCT_PRD = "CANT_DELETE_ACCT_PRD";

    /**
     * @var string
     */
    const CANT_DELETE_ALLOCTN = "CANT_DELETE_ALLOCTN";

    /**
     * @var string
     */
    const CANT_DELETE_BIN = "CANT_DELETE_BIN";

    /**
     * @var string
     */
    const CANT_DELETE_CATEGORY = "CANT_DELETE_CATEGORY";

    /**
     * @var string
     */
    const CANT_DELETE_CC_PROCESSOR = "CANT_DELETE_CC_PROCESSOR";

    /**
     * @var string
     */
    const CANT_DELETE_CELL = "CANT_DELETE_CELL";

    /**
     * @var string
     */
    const CANT_DELETE_CHILD_RCRDS_EXIST = "CANT_DELETE_CHILD_RCRDS_EXIST";

    /**
     * @var string
     */
    const CANT_DELETE_CHILD_RCRD_FOUND = "CANT_DELETE_CHILD_RCRD_FOUND";

    /**
     * @var string
     */
    const CANT_DELETE_CLASS = "CANT_DELETE_CLASS";

    /**
     * @var string
     */
    const CANT_DELETE_COLOR_THEME = "CANT_DELETE_COLOR_THEME";

    /**
     * @var string
     */
    const CANT_DELETE_COMMSSN_SCHDUL = "CANT_DELETE_COMMSSN_SCHDUL";

    /**
     * @var string
     */
    const CANT_DELETE_COMPANY = "CANT_DELETE_COMPANY";

    /**
     * @var string
     */
    const CANT_DELETE_COMPANY_TYP = "CANT_DELETE_COMPANY_TYP";

    /**
     * @var string
     */
    const CANT_DELETE_CONTACT_HAS_CHILD = "CANT_DELETE_CONTACT_HAS_CHILD";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_FIELD = "CANT_DELETE_CSTM_FIELD";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_FORM = "CANT_DELETE_CSTM_FORM";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_ITEM_FIELD = "CANT_DELETE_CSTM_ITEM_FIELD";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_LAYOUT = "CANT_DELETE_CSTM_LAYOUT";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_LIST = "CANT_DELETE_CSTM_LIST";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_RCRD = "CANT_DELETE_CSTM_RCRD";

    /**
     * @var string
     */
    const CANT_DELETE_CSTM_RCRD_ENTRY = "CANT_DELETE_CSTM_RCRD_ENTRY";

    /**
     * @var string
     */
    const CANT_DELETE_CUST = "CANT_DELETE_CUST";

    /**
     * @var string
     */
    const CANT_DELETE_CUSTOMER = "CANT_DELETE_CUSTOMER";

    /**
     * @var string
     */
    const CANT_DELETE_DEFAULT_FLDR = "CANT_DELETE_DEFAULT_FLDR";

    /**
     * @var string
     */
    const CANT_DELETE_DEFAULT_PRIORITY = "CANT_DELETE_DEFAULT_PRIORITY";

    /**
     * @var string
     */
    const CANT_DELETE_DEFAULT_SALES_REP = "CANT_DELETE_DEFAULT_SALES_REP";

    /**
     * @var string
     */
    const CANT_DELETE_DEFAULT_STATUS = "CANT_DELETE_DEFAULT_STATUS";

    /**
     * @var string
     */
    const CANT_DELETE_DEFAULT_VALUE = "CANT_DELETE_DEFAULT_VALUE";

    /**
     * @var string
     */
    const CANT_DELETE_DEFAULT_WEBSITE = "CANT_DELETE_DEFAULT_WEBSITE";

    /**
     * @var string
     */
    const CANT_DELETE_EMPL = "CANT_DELETE_EMPL";

    /**
     * @var string
     */
    const CANT_DELETE_ENTITY = "CANT_DELETE_ENTITY";

    /**
     * @var string
     */
    const CANT_DELETE_FIN_STATMNT_LAYOUT = "CANT_DELETE_FIN_STATMNT_LAYOUT";

    /**
     * @var string
     */
    const CANT_DELETE_FLDR = "CANT_DELETE_FLDR";

    /**
     * @var string
     */
    const CANT_DELETE_HAS_CHILD_ITEM = "CANT_DELETE_HAS_CHILD_ITEM";

    /**
     * @var string
     */
    const CANT_DELETE_INFO_ITEM = "CANT_DELETE_INFO_ITEM";

    /**
     * @var string
     */
    const CANT_DELETE_ITEM = "CANT_DELETE_ITEM";

    /**
     * @var string
     */
    const CANT_DELETE_ITEM_LAYOUT = "CANT_DELETE_ITEM_LAYOUT";

    /**
     * @var string
     */
    const CANT_DELETE_ITEM_TMPLT = "CANT_DELETE_ITEM_TMPLT";

    /**
     * @var string
     */
    const CANT_DELETE_JOB_RESOURCE_ROLE = "CANT_DELETE_JOB_RESOURCE_ROLE";

    /**
     * @var string
     */
    const CANT_DELETE_LEGACY_CATEGORY = "CANT_DELETE_LEGACY_CATEGORY";

    /**
     * @var string
     */
    const CANT_DELETE_LINE = "CANT_DELETE_LINE";

    /**
     * @var string
     */
    const CANT_DELETE_MEDIA_ITEM = "CANT_DELETE_MEDIA_ITEM";

    /**
     * @var string
     */
    const CANT_DELETE_MEMRZD_TRANS = "CANT_DELETE_MEMRZD_TRANS";

    /**
     * @var string
     */
    const CANT_DELETE_OR_CHANGE_ACCT = "CANT_DELETE_OR_CHANGE_ACCT";

    /**
     * @var string
     */
    const CANT_DELETE_PLAN_ASSGNMNT = "CANT_DELETE_PLAN_ASSGNMNT";

    /**
     * @var string
     */
    const CANT_DELETE_PRESNTN_CAT = "CANT_DELETE_PRESNTN_CAT";

    /**
     * @var string
     */
    const CANT_DELETE_RCRD = "CANT_DELETE_RCRD";

    /**
     * @var string
     */
    const CANT_DELETE_RCRDS = "CANT_DELETE_RCRDS";

    /**
     * @var string
     */
    const CANT_DELETE_SITE_TAG = "CANT_DELETE_SITE_TAG";

    /**
     * @var string
     */
    const CANT_DELETE_SITE_THEME = "CANT_DELETE_SITE_THEME";

    /**
     * @var string
     */
    const CANT_DELETE_SOLUTN = "CANT_DELETE_SOLUTN";

    /**
     * @var string
     */
    const CANT_DELETE_STATUS_TYPE = "CANT_DELETE_STATUS_TYPE";

    /**
     * @var string
     */
    const CANT_DELETE_SUBTAB = "CANT_DELETE_SUBTAB";

    /**
     * @var string
     */
    const CANT_DELETE_SYSTEM_NOTE = "CANT_DELETE_SYSTEM_NOTE";

    /**
     * @var string
     */
    const CANT_DELETE_TAX_VENDOR = "CANT_DELETE_TAX_VENDOR";

    /**
     * @var string
     */
    const CANT_DELETE_TMPLT_RCRD = "CANT_DELETE_TMPLT_RCRD";

    /**
     * @var string
     */
    const CANT_DELETE_TRANS = "CANT_DELETE_TRANS";

    /**
     * @var string
     */
    const CANT_DELETE_TRAN_LINE = "CANT_DELETE_TRAN_LINE";

    /**
     * @var string
     */
    const CANT_DELETE_TRAN_LINES = "CANT_DELETE_TRAN_LINES";

    /**
     * @var string
     */
    const CANT_DELETE_UPDATE_ACCT = "CANT_DELETE_UPDATE_ACCT";

    /**
     * @var string
     */
    const CANT_DELETE_VENDOR = "CANT_DELETE_VENDOR";

    /**
     * @var string
     */
    const CANT_DEL_DEFAULT_CALENDAR = "CANT_DEL_DEFAULT_CALENDAR";

    /**
     * @var string
     */
    const CANT_DEL_DEFAULT_SHIP_METHOD = "CANT_DEL_DEFAULT_SHIP_METHOD";

    /**
     * @var string
     */
    const CANT_DEL_REALIZED_GAINLOSS = "CANT_DEL_REALIZED_GAINLOSS";

    /**
     * @var string
     */
    const CANT_DEL_TRANS_RVRSL = "CANT_DEL_TRANS_RVRSL";

    /**
     * @var string
     */
    const CANT_DIVIDE_BY_ZERO = "CANT_DIVIDE_BY_ZERO";

    /**
     * @var string
     */
    const CANT_DOWNLOAD_EXPIRED_FILE = "CANT_DOWNLOAD_EXPIRED_FILE";

    /**
     * @var string
     */
    const CANT_EDIT_CUST_LIST = "CANT_EDIT_CUST_LIST";

    /**
     * @var string
     */
    const CANT_EDIT_CUST_PMT = "CANT_EDIT_CUST_PMT";

    /**
     * @var string
     */
    const CANT_EDIT_DPLYMNT_IN_PROGRESS = "CANT_EDIT_DPLYMNT_IN_PROGRESS";

    /**
     * @var string
     */
    const CANT_EDIT_FOLDER = "CANT_EDIT_FOLDER";

    /**
     * @var string
     */
    const CANT_EDIT_OLD_CASE = "CANT_EDIT_OLD_CASE";

    /**
     * @var string
     */
    const CANT_EDIT_STANDARD_OBJ = "CANT_EDIT_STANDARD_OBJ";

    /**
     * @var string
     */
    const CANT_EDIT_TAGATA = "CANT_EDIT_TAGATA";

    /**
     * @var string
     */
    const CANT_EDIT_TRAN = "CANT_EDIT_TRAN";

    /**
     * @var string
     */
    const CANT_ESTABLISH_LINK = "CANT_ESTABLISH_LINK";

    /**
     * @var string
     */
    const CANT_FIND_BUG = "CANT_FIND_BUG";

    /**
     * @var string
     */
    const CANT_FIND_MAIL_MERGE_ID = "CANT_FIND_MAIL_MERGE_ID";

    /**
     * @var string
     */
    const CANT_FIND_RCRD = "CANT_FIND_RCRD";

    /**
     * @var string
     */
    const CANT_FIND_SAVED_IMPORT = "CANT_FIND_SAVED_IMPORT";

    /**
     * @var string
     */
    const CANT_FIND_SOURCE_AMORTZN_ACCT = "CANT_FIND_SOURCE_AMORTZN_ACCT";

    /**
     * @var string
     */
    const CANT_FIND_UPS_REG_FOR_LOC = "CANT_FIND_UPS_REG_FOR_LOC";

    /**
     * @var string
     */
    const CANT_FULFILL_ITEM = "CANT_FULFILL_ITEM";

    /**
     * @var string
     */
    const CANT_INACTIVATE_COMMSSN_PLAN = "CANT_INACTIVATE_COMMSSN_PLAN";

    /**
     * @var string
     */
    const CANT_INACTIVE_DEFAULT_SYNC_CAT = "CANT_INACTIVE_DEFAULT_SYNC_CAT";

    /**
     * @var string
     */
    const CANT_INACTIVE_DEFAULT_TMPLT = "CANT_INACTIVE_DEFAULT_TMPLT";

    /**
     * @var string
     */
    const CANT_LOAD_SAVED_SEARCH_PARAM = "CANT_LOAD_SAVED_SEARCH_PARAM";

    /**
     * @var string
     */
    const CANT_LOGIN_WITH_OAUTH = "CANT_LOGIN_WITH_OAUTH";

    /**
     * @var string
     */
    const CANT_LOOKUP_FLD = "CANT_LOOKUP_FLD";

    /**
     * @var string
     */
    const CANT_MAKE_CONTACT_PRIVATE = "CANT_MAKE_CONTACT_PRIVATE";

    /**
     * @var string
     */
    const CANT_MARK_SHIPPED = "CANT_MARK_SHIPPED";

    /**
     * @var string
     */
    const CANT_MERGE_EMPLS = "CANT_MERGE_EMPLS";

    /**
     * @var string
     */
    const CANT_MODIFY_APPRVD_TIME = "CANT_MODIFY_APPRVD_TIME";

    /**
     * @var string
     */
    const CANT_MODIFY_FULFILL_STATUS = "CANT_MODIFY_FULFILL_STATUS";

    /**
     * @var string
     */
    const CANT_MODIFY_ISSUE_STATUS = "CANT_MODIFY_ISSUE_STATUS";

    /**
     * @var string
     */
    const CANT_MODIFY_LOCKED_FLD = "CANT_MODIFY_LOCKED_FLD";

    /**
     * @var string
     */
    const CANT_MODIFY_PARENT = "CANT_MODIFY_PARENT";

    /**
     * @var string
     */
    const CANT_MODIFY_REV_REC = "CANT_MODIFY_REV_REC";

    /**
     * @var string
     */
    const CANT_MODIFY_SUB = "CANT_MODIFY_SUB";

    /**
     * @var string
     */
    const CANT_MODIFY_TAGATA = "CANT_MODIFY_TAGATA";

    /**
     * @var string
     */
    const CANT_MODIFY_TEGATA = "CANT_MODIFY_TEGATA";

    /**
     * @var string
     */
    const CANT_MODIFY_VOID_TRANS = "CANT_MODIFY_VOID_TRANS";

    /**
     * @var string
     */
    const CANT_MOVE_REALIZED_GAINLOSS = "CANT_MOVE_REALIZED_GAINLOSS";

    /**
     * @var string
     */
    const CANT_PAY_TAGATA = "CANT_PAY_TAGATA";

    /**
     * @var string
     */
    const CANT_PRINT_EMPTY = "CANT_PRINT_EMPTY";

    /**
     * @var string
     */
    const CANT_PROCESS_IMG = "CANT_PROCESS_IMG";

    /**
     * @var string
     */
    const CANT_RCEIV_BEFORE_FULFILL = "CANT_RCEIV_BEFORE_FULFILL";

    /**
     * @var string
     */
    const CANT_RCEIV_ITEM = "CANT_RCEIV_ITEM";

    /**
     * @var string
     */
    const CANT_RECEIVE_TAGATA = "CANT_RECEIVE_TAGATA";

    /**
     * @var string
     */
    const CANT_REJECT_ORDER = "CANT_REJECT_ORDER";

    /**
     * @var string
     */
    const CANT_REMOVE_ACH_PAY_METHOD = "CANT_REMOVE_ACH_PAY_METHOD";

    /**
     * @var string
     */
    const CANT_REMOVE_APPROVAL = "CANT_REMOVE_APPROVAL";

    /**
     * @var string
     */
    const CANT_REMOVE_DOMAIN = "CANT_REMOVE_DOMAIN";

    /**
     * @var string
     */
    const CANT_REMOVE_NEXUS = "CANT_REMOVE_NEXUS";

    /**
     * @var string
     */
    const CANT_REMOVE_SCHDUL = "CANT_REMOVE_SCHDUL";

    /**
     * @var string
     */
    const CANT_REMOVE_SUB = "CANT_REMOVE_SUB";

    /**
     * @var string
     */
    const CANT_REMOV_ALL_FULFILMNT_LINKS = "CANT_REMOV_ALL_FULFILMNT_LINKS";

    /**
     * @var string
     */
    const CANT_REMOV_ITEM_SUB = "CANT_REMOV_ITEM_SUB";

    /**
     * @var string
     */
    const CANT_RESUBMIT_FAILED_DPLYMNT = "CANT_RESUBMIT_FAILED_DPLYMNT";

    /**
     * @var string
     */
    const CANT_RETURN_FLD = "CANT_RETURN_FLD";

    /**
     * @var string
     */
    const CANT_RETURN_USED_GIFT_CERT = "CANT_RETURN_USED_GIFT_CERT";

    /**
     * @var string
     */
    const CANT_REVERSE_AUTH = "CANT_REVERSE_AUTH";

    /**
     * @var string
     */
    const CANT_REV_REC_BODY_AND_LINE = "CANT_REV_REC_BODY_AND_LINE";

    /**
     * @var string
     */
    const CANT_SCHDUL_RECUR_EVENT = "CANT_SCHDUL_RECUR_EVENT";

    /**
     * @var string
     */
    const CANT_SEND_EMAIL = "CANT_SEND_EMAIL";

    /**
     * @var string
     */
    const CANT_SET_CLOSE_DATE = "CANT_SET_CLOSE_DATE";

    /**
     * @var string
     */
    const CANT_SET_INTERNALID = "CANT_SET_INTERNALID";

    /**
     * @var string
     */
    const CANT_SET_STATUS = "CANT_SET_STATUS";

    /**
     * @var string
     */
    const CANT_SWITCH_ROLES_FROM_LOGIN = "CANT_SWITCH_ROLES_FROM_LOGIN";

    /**
     * @var string
     */
    const CANT_SWITCH_SHIP_METHOD = "CANT_SWITCH_SHIP_METHOD";

    /**
     * @var string
     */
    const CANT_UPDATE_ACCTNG_PRDS = "CANT_UPDATE_ACCTNG_PRDS";

    /**
     * @var string
     */
    const CANT_UPDATE_AMT = "CANT_UPDATE_AMT";

    /**
     * @var string
     */
    const CANT_UPDATE_DYNAMIC_GROUP = "CANT_UPDATE_DYNAMIC_GROUP";

    /**
     * @var string
     */
    const CANT_UPDATE_FLDR = "CANT_UPDATE_FLDR";

    /**
     * @var string
     */
    const CANT_UPDATE_LINKED_TRANS_LINES = "CANT_UPDATE_LINKED_TRANS_LINES";

    /**
     * @var string
     */
    const CANT_UPDATE_PRODUCT_FEED = "CANT_UPDATE_PRODUCT_FEED";

    /**
     * @var string
     */
    const CANT_UPDATE_RECRD_HAS_CHANGED = "CANT_UPDATE_RECRD_HAS_CHANGED";

    /**
     * @var string
     */
    const CANT_UPDATE_RECUR_EVENT = "CANT_UPDATE_RECUR_EVENT";

    /**
     * @var string
     */
    const CANT_UPDATE_ROOT_CATEGORY = "CANT_UPDATE_ROOT_CATEGORY";

    /**
     * @var string
     */
    const CANT_UPDATE_STATUS_TYPE = "CANT_UPDATE_STATUS_TYPE";

    /**
     * @var string
     */
    const CANT_VERIFY_CARD = "CANT_VERIFY_CARD";

    /**
     * @var string
     */
    const CANT_VOID_TRANS = "CANT_VOID_TRANS";

    /**
     * @var string
     */
    const CARD_EXPIRED = "CARD_EXPIRED";

    /**
     * @var string
     */
    const CARD_ID_REQD = "CARD_ID_REQD";

    /**
     * @var string
     */
    const CASE_ALREADY_ASSIGNED = "CASE_ALREADY_ASSIGNED";

    /**
     * @var string
     */
    const CASE_DSNT_EXIST = "CASE_DSNT_EXIST";

    /**
     * @var string
     */
    const CASE_NOT_GROUP_MEMBER = "CASE_NOT_GROUP_MEMBER";

    /**
     * @var string
     */
    const CASH_SALE_EDIT_DISALLWD = "CASH_SALE_EDIT_DISALLWD";

    /**
     * @var string
     */
    const CC_ACCT_REQD = "CC_ACCT_REQD";

    /**
     * @var string
     */
    const CC_ALREADY_SAVED = "CC_ALREADY_SAVED";

    /**
     * @var string
     */
    const CC_EMAIL_ADDRESS_REQD = "CC_EMAIL_ADDRESS_REQD";

    /**
     * @var string
     */
    const CC_NUM_REQD = "CC_NUM_REQD";

    /**
     * @var string
     */
    const CC_PROCESSOR_ERROR = "CC_PROCESSOR_ERROR";

    /**
     * @var string
     */
    const CC_PROCESSOR_NOT_FOUND = "CC_PROCESSOR_NOT_FOUND";

    /**
     * @var string
     */
    const CC_SECURITY_CODE_REQD = "CC_SECURITY_CODE_REQD";

    /**
     * @var string
     */
    const CERT_AUTH_EXPD = "CERT_AUTH_EXPD";

    /**
     * @var string
     */
    const CERT_EXPD = "CERT_EXPD";

    /**
     * @var string
     */
    const CERT_UNAVAILABLE = "CERT_UNAVAILABLE";

    /**
     * @var string
     */
    const CHANGE_PMT_DATE_AND_REAPPROVE = "CHANGE_PMT_DATE_AND_REAPPROVE";

    /**
     * @var string
     */
    const CHAR_ERROR = "CHAR_ERROR";

    /**
     * @var string
     */
    const CHECKOUT_EMAIL_REQD = "CHECKOUT_EMAIL_REQD";

    /**
     * @var string
     */
    const CITY_REQD = "CITY_REQD";

    /**
     * @var string
     */
    const CLASS_ALREADY_EXISTS = "CLASS_ALREADY_EXISTS";

    /**
     * @var string
     */
    const CLASS_OR_DEPT_OR_CUST_REQD = "CLASS_OR_DEPT_OR_CUST_REQD";

    /**
     * @var string
     */
    const CLEAR_AUTOCALC = "CLEAR_AUTOCALC";

    /**
     * @var string
     */
    const CLOSED_TRAN_PRD = "CLOSED_TRAN_PRD";

    /**
     * @var string
     */
    const CLOSE_PREVIOUSE_PERIOD = "CLOSE_PREVIOUSE_PERIOD";

    /**
     * @var string
     */
    const COGS_ERROR = "COGS_ERROR";

    /**
     * @var string
     */
    const COMMSSN_ALREADY_CALCLTD = "COMMSSN_ALREADY_CALCLTD";

    /**
     * @var string
     */
    const COMMSSN_FEATURE_DISABLED = "COMMSSN_FEATURE_DISABLED";

    /**
     * @var string
     */
    const COMMSSN_PAYROLL_ITEM_REQD = "COMMSSN_PAYROLL_ITEM_REQD";

    /**
     * @var string
     */
    const COMPANION_PROP_REQD = "COMPANION_PROP_REQD";

    /**
     * @var string
     */
    const COMPANY_DISABLED = "COMPANY_DISABLED";

    /**
     * @var string
     */
    const COMPANY_FLD_REQD = "COMPANY_FLD_REQD";

    /**
     * @var string
     */
    const COMP_DELETED_OR_MERGED = "COMP_DELETED_OR_MERGED";

    /**
     * @var string
     */
    const CONCUR_BILLPAY_JOB_DISALLWD = "CONCUR_BILLPAY_JOB_DISALLWD";

    /**
     * @var string
     */
    const CONCUR_BULK_JOB_DISALLWD = "CONCUR_BULK_JOB_DISALLWD";

    /**
     * @var string
     */
    const CONCUR_MASS_UPDATE_DISALLWD = "CONCUR_MASS_UPDATE_DISALLWD";

    /**
     * @var string
     */
    const CONCUR_SEARCH_DISALLWD = "CONCUR_SEARCH_DISALLWD";

    /**
     * @var string
     */
    const CONSLD_PRNT_AND_CHILD_DISALLWD = "CONSLD_PRNT_AND_CHILD_DISALLWD";

    /**
     * @var string
     */
    const CONTACT_ALREADY_EXISTS = "CONTACT_ALREADY_EXISTS";

    /**
     * @var string
     */
    const CONTACT_NOT_GROUP_MEMBR = "CONTACT_NOT_GROUP_MEMBR";

    /**
     * @var string
     */
    const COOKIES_DISABLED = "COOKIES_DISABLED";

    /**
     * @var string
     */
    const COUNTRY_STATE_MISMATCH = "COUNTRY_STATE_MISMATCH";

    /**
     * @var string
     */
    const CREATEDFROM_REQD = "CREATEDFROM_REQD";

    /**
     * @var string
     */
    const CREDITS_DISALLWD = "CREDITS_DISALLWD";

    /**
     * @var string
     */
    const CRNCY_MISMATCH_BASE_CRNCY = "CRNCY_MISMATCH_BASE_CRNCY";

    /**
     * @var string
     */
    const CRNCY_NOT_UPDATED = "CRNCY_NOT_UPDATED";

    /**
     * @var string
     */
    const CRNCY_RCRD_DELETED = "CRNCY_RCRD_DELETED";

    /**
     * @var string
     */
    const CRNCY_REQD = "CRNCY_REQD";

    /**
     * @var string
     */
    const CSC_SETUP_REQD = "CSC_SETUP_REQD";

    /**
     * @var string
     */
    const CSTM_FIELD_KEY_REQD = "CSTM_FIELD_KEY_REQD";

    /**
     * @var string
     */
    const CSTM_FIELD_VALUE_REQD = "CSTM_FIELD_VALUE_REQD";

    /**
     * @var string
     */
    const CSV_DELIMITER_ERROR = "CSV_DELIMITER_ERROR";

    /**
     * @var string
     */
    const CUST_ARLEADY_HAS_ACCT = "CUST_ARLEADY_HAS_ACCT";

    /**
     * @var string
     */
    const CUST_CNTR_USER_ACCESS_ONLY = "CUST_CNTR_USER_ACCESS_ONLY";

    /**
     * @var string
     */
    const CUST_LEAD_NOT_GROUP_MEMBR = "CUST_LEAD_NOT_GROUP_MEMBR";

    /**
     * @var string
     */
    const CYBERSOURCE_ERROR = "CYBERSOURCE_ERROR";

    /**
     * @var string
     */
    const CYCLE_IN_PROJECT_PLAN = "CYCLE_IN_PROJECT_PLAN";

    /**
     * @var string
     */
    const DASHBOARD_LOCKED = "DASHBOARD_LOCKED";

    /**
     * @var string
     */
    const DATA_MUST_BE_UNIQUE = "DATA_MUST_BE_UNIQUE";

    /**
     * @var string
     */
    const DATA_REQD = "DATA_REQD";

    /**
     * @var string
     */
    const DATE_EXPECTED = "DATE_EXPECTED";

    /**
     * @var string
     */
    const DATE_PARAM_REQD = "DATE_PARAM_REQD";

    /**
     * @var string
     */
    const DATE_PRD_MISMATCH = "DATE_PRD_MISMATCH";

    /**
     * @var string
     */
    const DEFAULT_CUR_REQD = "DEFAULT_CUR_REQD";

    /**
     * @var string
     */
    const DEFAULT_EXPENSE_ACCT_REQD = "DEFAULT_EXPENSE_ACCT_REQD";

    /**
     * @var string
     */
    const DEFAULT_ISSUE_OWNER_REQD = "DEFAULT_ISSUE_OWNER_REQD";

    /**
     * @var string
     */
    const DEFAULT_LIAB_ACCT_REQD = "DEFAULT_LIAB_ACCT_REQD";

    /**
     * @var string
     */
    const DEFAULT_ROLE_REQD = "DEFAULT_ROLE_REQD";

    /**
     * @var string
     */
    const DEFAULT_TYPE_DELETE_DISALLWD = "DEFAULT_TYPE_DELETE_DISALLWD";

    /**
     * @var string
     */
    const DEFERRAL_ACCT_REQD = "DEFERRAL_ACCT_REQD";

    /**
     * @var string
     */
    const DEFERRED_REV_REC_ACCT_REQD = "DEFERRED_REV_REC_ACCT_REQD";

    /**
     * @var string
     */
    const DEPT_IN_USE = "DEPT_IN_USE";

    /**
     * @var string
     */
    const DFRNT_SWAP_PRICE_LEVELS_REQD = "DFRNT_SWAP_PRICE_LEVELS_REQD";

    /**
     * @var string
     */
    const DISALLWD_IP_ADDRESS = "DISALLWD_IP_ADDRESS";

    /**
     * @var string
     */
    const DISCOUNT_ACCT_SETUP_REQD = "DISCOUNT_ACCT_SETUP_REQD";

    /**
     * @var string
     */
    const DISCOUNT_DISALLWD = "DISCOUNT_DISALLWD";

    /**
     * @var string
     */
    const DISCOUNT_DISALLWD_VSOE = "DISCOUNT_DISALLWD_VSOE";

    /**
     * @var string
     */
    const DISCOUNT_EXCEED_TOTAL = "DISCOUNT_EXCEED_TOTAL";

    /**
     * @var string
     */
    const DISTRIB_REQD_ONE_DAY_BFORE = "DISTRIB_REQD_ONE_DAY_BFORE";

    /**
     * @var string
     */
    const DOMAIN_IN_USE = "DOMAIN_IN_USE";

    /**
     * @var string
     */
    const DOMAIN_WEBSITE_REQD = "DOMAIN_WEBSITE_REQD";

    /**
     * @var string
     */
    const DROP_SHIP_ERROR = "DROP_SHIP_ERROR";

    /**
     * @var string
     */
    const DROP_SHIP_OR_SPECIAL_ORD_ALLWD = "DROP_SHIP_OR_SPECIAL_ORD_ALLWD";

    /**
     * @var string
     */
    const DUE_DATE_BFORE_START_DATE = "DUE_DATE_BFORE_START_DATE";

    /**
     * @var string
     */
    const DUE_DATE_REQD = "DUE_DATE_REQD";

    /**
     * @var string
     */
    const DUPLICATE_INVENTORY_NUM = "DUPLICATE_INVENTORY_NUM";

    /**
     * @var string
     */
    const DUPLICATE_KEYS = "DUPLICATE_KEYS";

    /**
     * @var string
     */
    const DUPLICATE_NAME_FOR_PRD = "DUPLICATE_NAME_FOR_PRD";

    /**
     * @var string
     */
    const DUPLICATE_NAME_FOR_ROLE = "DUPLICATE_NAME_FOR_ROLE";

    /**
     * @var string
     */
    const DUP_ACCT_NAME = "DUP_ACCT_NAME";

    /**
     * @var string
     */
    const DUP_ACCT_NOT_ALLWD = "DUP_ACCT_NOT_ALLWD";

    /**
     * @var string
     */
    const DUP_ACCT_NUM = "DUP_ACCT_NUM";

    /**
     * @var string
     */
    const DUP_ACCT_ON_TRANS = "DUP_ACCT_ON_TRANS";

    /**
     * @var string
     */
    const DUP_BIN = "DUP_BIN";

    /**
     * @var string
     */
    const DUP_BUNDLE_IN_ACCT = "DUP_BUNDLE_IN_ACCT";

    /**
     * @var string
     */
    const DUP_CATEGORY = "DUP_CATEGORY";

    /**
     * @var string
     */
    const DUP_CATEGORY_NAME = "DUP_CATEGORY_NAME";

    /**
     * @var string
     */
    const DUP_COLOR_THEME = "DUP_COLOR_THEME";

    /**
     * @var string
     */
    const DUP_CSTM_FIELD = "DUP_CSTM_FIELD";

    /**
     * @var string
     */
    const DUP_CSTM_LAYOUT = "DUP_CSTM_LAYOUT";

    /**
     * @var string
     */
    const DUP_CSTM_LIST = "DUP_CSTM_LIST";

    /**
     * @var string
     */
    const DUP_CSTM_RCRD = "DUP_CSTM_RCRD";

    /**
     * @var string
     */
    const DUP_CSTM_RCRD_ENTRY = "DUP_CSTM_RCRD_ENTRY";

    /**
     * @var string
     */
    const DUP_CSTM_TAB = "DUP_CSTM_TAB";

    /**
     * @var string
     */
    const DUP_EMPL_EMAIL = "DUP_EMPL_EMAIL";

    /**
     * @var string
     */
    const DUP_EMPL_ENTITY_NAME = "DUP_EMPL_ENTITY_NAME";

    /**
     * @var string
     */
    const DUP_EMPL_TMPLT = "DUP_EMPL_TMPLT";

    /**
     * @var string
     */
    const DUP_ENTITY = "DUP_ENTITY";

    /**
     * @var string
     */
    const DUP_ENTITY_EMAIL = "DUP_ENTITY_EMAIL";

    /**
     * @var string
     */
    const DUP_ENTITY_NAME = "DUP_ENTITY_NAME";

    /**
     * @var string
     */
    const DUP_FEDEX_ACCT_NUM = "DUP_FEDEX_ACCT_NUM";

    /**
     * @var string
     */
    const DUP_FINANCL_STATMNT_LAYOUT = "DUP_FINANCL_STATMNT_LAYOUT";

    /**
     * @var string
     */
    const DUP_INFO_ITEM = "DUP_INFO_ITEM";

    /**
     * @var string
     */
    const DUP_ISSUE_NAME_OR_NUM = "DUP_ISSUE_NAME_OR_NUM";

    /**
     * @var string
     */
    const DUP_ITEM = "DUP_ITEM";

    /**
     * @var string
     */
    const DUP_ITEM_LAYOUT = "DUP_ITEM_LAYOUT";

    /**
     * @var string
     */
    const DUP_ITEM_NAME = "DUP_ITEM_NAME";

    /**
     * @var string
     */
    const DUP_ITEM_OPTION = "DUP_ITEM_OPTION";

    /**
     * @var string
     */
    const DUP_ITEM_TMPLT = "DUP_ITEM_TMPLT";

    /**
     * @var string
     */
    const DUP_MATRIX_OPTN_ABBRV = "DUP_MATRIX_OPTN_ABBRV";

    /**
     * @var string
     */
    const DUP_MEMRZD_TRANS = "DUP_MEMRZD_TRANS";

    /**
     * @var string
     */
    const DUP_NAME = "DUP_NAME";

    /**
     * @var string
     */
    const DUP_PAYROLL_ITEM = "DUP_PAYROLL_ITEM";

    /**
     * @var string
     */
    const DUP_PRESNTN_CAT = "DUP_PRESNTN_CAT";

    /**
     * @var string
     */
    const DUP_RCRD = "DUP_RCRD";

    /**
     * @var string
     */
    const DUP_RCRD_LINK = "DUP_RCRD_LINK";

    /**
     * @var string
     */
    const DUP_SALES_TAX_ITEM = "DUP_SALES_TAX_ITEM";

    /**
     * @var string
     */
    const DUP_SHIPPING_ITEM = "DUP_SHIPPING_ITEM";

    /**
     * @var string
     */
    const DUP_SHORT_NAME = "DUP_SHORT_NAME";

    /**
     * @var string
     */
    const DUP_SITE_THEME = "DUP_SITE_THEME";

    /**
     * @var string
     */
    const DUP_SOURCE_ACCT = "DUP_SOURCE_ACCT";

    /**
     * @var string
     */
    const DUP_TAX_CODE = "DUP_TAX_CODE";

    /**
     * @var string
     */
    const DUP_TRACKING_NUM = "DUP_TRACKING_NUM";

    /**
     * @var string
     */
    const DUP_TRANS = "DUP_TRANS";

    /**
     * @var string
     */
    const DUP_UPS_ACCT_NUM = "DUP_UPS_ACCT_NUM";

    /**
     * @var string
     */
    const DUP_VENDOR_EMAIL = "DUP_VENDOR_EMAIL";

    /**
     * @var string
     */
    const DUP_VENDOR_NAME = "DUP_VENDOR_NAME";

    /**
     * @var string
     */
    const EARNING_ITEM_REQD = "EARNING_ITEM_REQD";

    /**
     * @var string
     */
    const EBAY_FEE_ERROR = "EBAY_FEE_ERROR";

    /**
     * @var string
     */
    const EBAY_TMPLT_ERROR = "EBAY_TMPLT_ERROR";

    /**
     * @var string
     */
    const EDITION_DSNT_SUPRT_WORLDPAY = "EDITION_DSNT_SUPRT_WORLDPAY";

    /**
     * @var string
     */
    const EIN_OR_TIN_REQD = "EIN_OR_TIN_REQD";

    /**
     * @var string
     */
    const EMAIL_ADDRS_REQD = "EMAIL_ADDRS_REQD";

    /**
     * @var string
     */
    const EMAIL_ADDRS_REQD_TO_NOTIFY = "EMAIL_ADDRS_REQD_TO_NOTIFY";

    /**
     * @var string
     */
    const EMAIL_REQD = "EMAIL_REQD";

    /**
     * @var string
     */
    const EMAIL_REQD_ACCT_PROVISION = "EMAIL_REQD_ACCT_PROVISION";

    /**
     * @var string
     */
    const EMAIL_REQ_HANDLER_ERROR = "EMAIL_REQ_HANDLER_ERROR";

    /**
     * @var string
     */
    const EMPL_IN_USE = "EMPL_IN_USE";

    /**
     * @var string
     */
    const ERROR_DELETE_CARD_DATA = "ERROR_DELETE_CARD_DATA";

    /**
     * @var string
     */
    const ERROR_IN_TERRITORY_ASSGNMNT = "ERROR_IN_TERRITORY_ASSGNMNT";

    /**
     * @var string
     */
    const ERROR_PRCSSNG_TRANS = "ERROR_PRCSSNG_TRANS";

    /**
     * @var string
     */
    const ERROR_REFUND_TRANS = "ERROR_REFUND_TRANS";

    /**
     * @var string
     */
    const ERROR_REVERSE_AUTH = "ERROR_REVERSE_AUTH";

    /**
     * @var string
     */
    const ERROR_SENDING_TRAN_EMAIL = "ERROR_SENDING_TRAN_EMAIL";

    /**
     * @var string
     */
    const ERROR_VOID_TRANS = "ERROR_VOID_TRANS";

    /**
     * @var string
     */
    const EVENT_ID_NOT_FOUND = "EVENT_ID_NOT_FOUND";

    /**
     * @var string
     */
    const EXCEEDED_MAX_ALLWD_LOC = "EXCEEDED_MAX_ALLWD_LOC";

    /**
     * @var string
     */
    const EXCEEDED_MAX_CONCUR_RQST = "EXCEEDED_MAX_CONCUR_RQST";

    /**
     * @var string
     */
    const EXCEEDED_MAX_EMAILS = "EXCEEDED_MAX_EMAILS";

    /**
     * @var string
     */
    const EXCEEDED_MAX_FEATURED_ITEMS = "EXCEEDED_MAX_FEATURED_ITEMS";

    /**
     * @var string
     */
    const EXCEEDED_MAX_FIELD_LENGTH = "EXCEEDED_MAX_FIELD_LENGTH";

    /**
     * @var string
     */
    const EXCEEDED_MAX_MATRIX_OPTNS = "EXCEEDED_MAX_MATRIX_OPTNS";

    /**
     * @var string
     */
    const EXCEEDED_MAX_PDF_ELEMENTS = "EXCEEDED_MAX_PDF_ELEMENTS";

    /**
     * @var string
     */
    const EXCEEDED_MAX_PDF_EXPORT_COL = "EXCEEDED_MAX_PDF_EXPORT_COL";

    /**
     * @var string
     */
    const EXCEEDED_MAX_PIN_RETRIES = "EXCEEDED_MAX_PIN_RETRIES";

    /**
     * @var string
     */
    const EXCEEDED_MAX_RCRD = "EXCEEDED_MAX_RCRD";

    /**
     * @var string
     */
    const EXCEEDED_MAX_REPORT_COL = "EXCEEDED_MAX_REPORT_COL";

    /**
     * @var string
     */
    const EXCEEDED_MAX_REPORT_ROWS = "EXCEEDED_MAX_REPORT_ROWS";

    /**
     * @var string
     */
    const EXCEEDED_MAX_REPORT_SIZE = "EXCEEDED_MAX_REPORT_SIZE";

    /**
     * @var string
     */
    const EXCEEDED_MAX_SESSIONS = "EXCEEDED_MAX_SESSIONS";

    /**
     * @var string
     */
    const EXCEEDED_MAX_SHIP_PACKAGE = "EXCEEDED_MAX_SHIP_PACKAGE";

    /**
     * @var string
     */
    const EXCEEDED_MAX_TIME = "EXCEEDED_MAX_TIME";

    /**
     * @var string
     */
    const EXCEEDED_MAX_TRANS_LINES = "EXCEEDED_MAX_TRANS_LINES";

    /**
     * @var string
     */
    const EXCEEDED_MAX_USERS_ALLWD = "EXCEEDED_MAX_USERS_ALLWD";

    /**
     * @var string
     */
    const EXCEEDED_PER_TRANS_MAX = "EXCEEDED_PER_TRANS_MAX";

    /**
     * @var string
     */
    const EXCEEDED_RQST_SIZE_LIMIT = "EXCEEDED_RQST_SIZE_LIMIT";

    /**
     * @var string
     */
    const EXCEEDS_ALLWD_LICENSES = "EXCEEDS_ALLWD_LICENSES";

    /**
     * @var string
     */
    const EXPENSE_ENTRY_DISALLWD = "EXPENSE_ENTRY_DISALLWD";

    /**
     * @var string
     */
    const EXPIRED_SEARCH_CRITERIA = "EXPIRED_SEARCH_CRITERIA";

    /**
     * @var string
     */
    const EXTERNALID_NOT_SUPPORTED = "EXTERNALID_NOT_SUPPORTED";

    /**
     * @var string
     */
    const EXTERNALID_REQD = "EXTERNALID_REQD";

    /**
     * @var string
     */
    const EXT_CAT_LINK_SETUP_REQD = "EXT_CAT_LINK_SETUP_REQD";

    /**
     * @var string
     */
    const FAILED_FEDEX_LABEL_VOID = "FAILED_FEDEX_LABEL_VOID";

    /**
     * @var string
     */
    const FAILED_FORM_VALIDATION = "FAILED_FORM_VALIDATION";

    /**
     * @var string
     */
    const FAILED_UPS_LABEL_VOID = "FAILED_UPS_LABEL_VOID";

    /**
     * @var string
     */
    const FAX_NUM_REQD = "FAX_NUM_REQD";

    /**
     * @var string
     */
    const FAX_SETUP_REQD = "FAX_SETUP_REQD";

    /**
     * @var string
     */
    const FEATURE_DISABLED = "FEATURE_DISABLED";

    /**
     * @var string
     */
    const FEATURE_UNAVAILABLE = "FEATURE_UNAVAILABLE";

    /**
     * @var string
     */
    const FEDEX_ACCT_REQD = "FEDEX_ACCT_REQD";

    /**
     * @var string
     */
    const FEDEX_CANT_INTEGRATE_FULFILL = "FEDEX_CANT_INTEGRATE_FULFILL";

    /**
     * @var string
     */
    const FEDEX_DROPOFF_TYP_REQD = "FEDEX_DROPOFF_TYP_REQD";

    /**
     * @var string
     */
    const FEDEX_INVALID_ACCT_NUM = "FEDEX_INVALID_ACCT_NUM";

    /**
     * @var string
     */
    const FEDEX_ITEM_CONTENTS_REQD = "FEDEX_ITEM_CONTENTS_REQD";

    /**
     * @var string
     */
    const FEDEX_METER_NOT_RETRIEVED = "FEDEX_METER_NOT_RETRIEVED";

    /**
     * @var string
     */
    const FEDEX_METER_REQD = "FEDEX_METER_REQD";

    /**
     * @var string
     */
    const FEDEX_ONE_PACKG_ALLWD = "FEDEX_ONE_PACKG_ALLWD";

    /**
     * @var string
     */
    const FEDEX_ORIGIN_COUNTRY_US_REQD = "FEDEX_ORIGIN_COUNTRY_US_REQD";

    /**
     * @var string
     */
    const FEDEX_RATING_SRVC_UNAVAILBL = "FEDEX_RATING_SRVC_UNAVAILBL";

    /**
     * @var string
     */
    const FEDEX_REG_NOT_FOUND = "FEDEX_REG_NOT_FOUND";

    /**
     * @var string
     */
    const FEDEX_SHIP_SRVC_REQD = "FEDEX_SHIP_SRVC_REQD";

    /**
     * @var string
     */
    const FEDEX_SHIP_SRVC_UNAVAILBL = "FEDEX_SHIP_SRVC_UNAVAILBL";

    /**
     * @var string
     */
    const FEDEX_UNSUPRTD_ORIGIN_COUNTRY = "FEDEX_UNSUPRTD_ORIGIN_COUNTRY";

    /**
     * @var string
     */
    const FEDEX_USD_EXCHANGE_RATE_REQD = "FEDEX_USD_EXCHANGE_RATE_REQD";

    /**
     * @var string
     */
    const FEDEX_USER_ERROR = "FEDEX_USER_ERROR";

    /**
     * @var string
     */
    const FEDEX_VOID_ERROR = "FEDEX_VOID_ERROR";

    /**
     * @var string
     */
    const FED_ID_REQD = "FED_ID_REQD";

    /**
     * @var string
     */
    const FED_WITHHOLDING_REQD = "FED_WITHHOLDING_REQD";

    /**
     * @var string
     */
    const FIELD_CALL_DATE_REQD = "FIELD_CALL_DATE_REQD";

    /**
     * @var string
     */
    const FIELD_DEFN_REQD = "FIELD_DEFN_REQD";

    /**
     * @var string
     */
    const FIELD_NOT_SETTABLE_ON_ADD = "FIELD_NOT_SETTABLE_ON_ADD";

    /**
     * @var string
     */
    const FIELD_PARAM_REQD = "FIELD_PARAM_REQD";

    /**
     * @var string
     */
    const FIELD_REQD = "FIELD_REQD";

    /**
     * @var string
     */
    const FILE_ALREADY_EXISTS = "FILE_ALREADY_EXISTS";

    /**
     * @var string
     */
    const FILE_DISALLWD_IN_ROOT_FLDR = "FILE_DISALLWD_IN_ROOT_FLDR";

    /**
     * @var string
     */
    const FILE_MISSING = "FILE_MISSING";

    /**
     * @var string
     */
    const FILE_NOT_DOWNLOADABLE = "FILE_NOT_DOWNLOADABLE";

    /**
     * @var string
     */
    const FILE_NOT_FOUND = "FILE_NOT_FOUND";

    /**
     * @var string
     */
    const FILE_REQD = "FILE_REQD";

    /**
     * @var string
     */
    const FILE_UPLOAD_IN_PROGRESS = "FILE_UPLOAD_IN_PROGRESS";

    /**
     * @var string
     */
    const FILTER_BY_AMT_REQD = "FILTER_BY_AMT_REQD";

    /**
     * @var string
     */
    const FINANCE_CHARGE_SETUP_REQD = "FINANCE_CHARGE_SETUP_REQD";

    /**
     * @var string
     */
    const FINANCE_CHARGE_SET_PREFS = "FINANCE_CHARGE_SET_PREFS";

    /**
     * @var string
     */
    const FIRST_LAST_NAMES_REQD = "FIRST_LAST_NAMES_REQD";

    /**
     * @var string
     */
    const FIRST_QTY_BUCKET_MUST_BE_ZERO = "FIRST_QTY_BUCKET_MUST_BE_ZERO";

    /**
     * @var string
     */
    const FLD_VALUE_REQD = "FLD_VALUE_REQD";

    /**
     * @var string
     */
    const FLD_VALUE_TOO_LARGE = "FLD_VALUE_TOO_LARGE";

    /**
     * @var string
     */
    const FOLDER_ALREADY_EXISTS = "FOLDER_ALREADY_EXISTS";

    /**
     * @var string
     */
    const FORMULA_ERROR = "FORMULA_ERROR";

    /**
     * @var string
     */
    const FORM_RESUBMISSION_REQD = "FORM_RESUBMISSION_REQD";

    /**
     * @var string
     */
    const FORM_SETUP_REQD = "FORM_SETUP_REQD";

    /**
     * @var string
     */
    const FORM_UNAVAILBL_ONLINE = "FORM_UNAVAILBL_ONLINE";

    /**
     * @var string
     */
    const FRIENDLY_NAME_REQD = "FRIENDLY_NAME_REQD";

    /**
     * @var string
     */
    const FULFILL_REQD_FIELDS_MISSING = "FULFILL_REQD_FIELDS_MISSING";

    /**
     * @var string
     */
    const FULFILL_REQD_PARAMS_MISSING = "FULFILL_REQD_PARAMS_MISSING";

    /**
     * @var string
     */
    const FULL_DISTRIB_REQD = "FULL_DISTRIB_REQD";

    /**
     * @var string
     */
    const FULL_USERS_REQD_TO_INTEGRATE = "FULL_USERS_REQD_TO_INTEGRATE";

    /**
     * @var string
     */
    const FX_MALFORMED_RESPONSE = "FX_MALFORMED_RESPONSE";

    /**
     * @var string
     */
    const FX_RATE_REQD_FEDEX_RATE = "FX_RATE_REQD_FEDEX_RATE";

    /**
     * @var string
     */
    const FX_TRANS_DISALLWD = "FX_TRANS_DISALLWD";

    /**
     * @var string
     */
    const GETALL_RCRD_TYPE_REQD = "GETALL_RCRD_TYPE_REQD";

    /**
     * @var string
     */
    const GIFT_CERT_AMT_EXCEED_AVAILBL = "GIFT_CERT_AMT_EXCEED_AVAILBL";

    /**
     * @var string
     */
    const GIFT_CERT_AUTH_ALREADY_EXISTS = "GIFT_CERT_AUTH_ALREADY_EXISTS";

    /**
     * @var string
     */
    const GIFT_CERT_CAN_BE_USED_ONCE = "GIFT_CERT_CAN_BE_USED_ONCE";

    /**
     * @var string
     */
    const GIFT_CERT_CODE_REQD = "GIFT_CERT_CODE_REQD";

    /**
     * @var string
     */
    const GIFT_CERT_INVALID_NUM = "GIFT_CERT_INVALID_NUM";

    /**
     * @var string
     */
    const GIFT_CERT_IN_USE = "GIFT_CERT_IN_USE";

    /**
     * @var string
     */
    const GROUP_DSNT_EXIST = "GROUP_DSNT_EXIST";

    /**
     * @var string
     */
    const GROUP_REQD = "GROUP_REQD";

    /**
     * @var string
     */
    const GROUP_TYPE_REQD = "GROUP_TYPE_REQD";

    /**
     * @var string
     */
    const GRTR_QTY_PRICE_LEVEL_REQD = "GRTR_QTY_PRICE_LEVEL_REQD";

    /**
     * @var string
     */
    const IGNORE = "IGNORE";

    /**
     * @var string
     */
    const ILLEGAL_ID = "ILLEGAL_ID";

    /**
     * @var string
     */
    const ILLEGAL_PERIOD_STRUCTURE = "ILLEGAL_PERIOD_STRUCTURE";

    /**
     * @var string
     */
    const INACTIVE_CC_PROFILE = "INACTIVE_CC_PROFILE";

    /**
     * @var string
     */
    const INACTIVE_RCRD_FOR_ROLE = "INACTIVE_RCRD_FOR_ROLE";

    /**
     * @var string
     */
    const INAVLID_FILE_TYP = "INAVLID_FILE_TYP";

    /**
     * @var string
     */
    const INAVLID_ITEM_TYP = "INAVLID_ITEM_TYP";

    /**
     * @var string
     */
    const INAVLID_PRICING_MTRX = "INAVLID_PRICING_MTRX";

    /**
     * @var string
     */
    const INCOMPATIBLE_ACCT_CHANGE = "INCOMPATIBLE_ACCT_CHANGE";

    /**
     * @var string
     */
    const INCOMPLETE_BILLING_ADDR = "INCOMPLETE_BILLING_ADDR";

    /**
     * @var string
     */
    const INCOMPLETE_FILE_UPLOAD = "INCOMPLETE_FILE_UPLOAD";

    /**
     * @var string
     */
    const INCRCT_ORD_INFO = "INCRCT_ORD_INFO";

    /**
     * @var string
     */
    const INFINITE_LOOP_DETECTED = "INFINITE_LOOP_DETECTED";

    /**
     * @var string
     */
    const INITIALIZE_ARG_REQD = "INITIALIZE_ARG_REQD";

    /**
     * @var string
     */
    const INITIALIZE_AUXREF_REQD = "INITIALIZE_AUXREF_REQD";

    /**
     * @var string
     */
    const INSTALL_SCRIPT_ERROR = "INSTALL_SCRIPT_ERROR";

    /**
     * @var string
     */
    const INSUFCNT_NUM_PRDS_FOR_REV_REC = "INSUFCNT_NUM_PRDS_FOR_REV_REC";

    /**
     * @var string
     */
    const INSUFCNT_OPEN_PRDS_FOR_REV_REC = "INSUFCNT_OPEN_PRDS_FOR_REV_REC";

    /**
     * @var string
     */
    const INSUFFICIENT_CHARS_IN_SEARCH = "INSUFFICIENT_CHARS_IN_SEARCH";

    /**
     * @var string
     */
    const INSUFFICIENT_FLD_PERMISSION = "INSUFFICIENT_FLD_PERMISSION";

    /**
     * @var string
     */
    const INSUFFICIENT_FUND = "INSUFFICIENT_FUND";

    /**
     * @var string
     */
    const INSUFFICIENT_PERMISSION = "INSUFFICIENT_PERMISSION";

    /**
     * @var string
     */
    const INTEGER_REQD_FOR_QTY = "INTEGER_REQD_FOR_QTY";

    /**
     * @var string
     */
    const INTL_FEDEX_ONE_PACKG_ALLWD = "INTL_FEDEX_ONE_PACKG_ALLWD";

    /**
     * @var string
     */
    const INTL_SHIP_EXCEED_MAX_ITEM = "INTL_SHIP_EXCEED_MAX_ITEM";

    /**
     * @var string
     */
    const INVALID_ABN = "INVALID_ABN";

    /**
     * @var string
     */
    const INVALID_ACCT = "INVALID_ACCT";

    /**
     * @var string
     */
    const INVALID_ACCT_NUM_CSTM_FIELD = "INVALID_ACCT_NUM_CSTM_FIELD";

    /**
     * @var string
     */
    const INVALID_ACCT_PRD = "INVALID_ACCT_PRD";

    /**
     * @var string
     */
    const INVALID_ACCT_TYP = "INVALID_ACCT_TYP";

    /**
     * @var string
     */
    const INVALID_ACTION = "INVALID_ACTION";

    /**
     * @var string
     */
    const INVALID_ADDRESS_OR_SHIPPER_NO = "INVALID_ADDRESS_OR_SHIPPER_NO";

    /**
     * @var string
     */
    const INVALID_ADJUSTMENT_ACCT = "INVALID_ADJUSTMENT_ACCT";

    /**
     * @var string
     */
    const INVALID_AES_FTSR_EXEMPTN_NUM = "INVALID_AES_FTSR_EXEMPTN_NUM";

    /**
     * @var string
     */
    const INVALID_ALLOCTN_METHOD = "INVALID_ALLOCTN_METHOD";

    /**
     * @var string
     */
    const INVALID_AMORTZN_ACCT = "INVALID_AMORTZN_ACCT";

    /**
     * @var string
     */
    const INVALID_AMT = "INVALID_AMT";

    /**
     * @var string
     */
    const INVALID_APP_ID = "INVALID_APP_ID";

    /**
     * @var string
     */
    const INVALID_ASSIGN_STATUS_COMBO = "INVALID_ASSIGN_STATUS_COMBO";

    /**
     * @var string
     */
    const INVALID_AUTH_CODE = "INVALID_AUTH_CODE";

    /**
     * @var string
     */
    const INVALID_AUTOAPPLY_VALUE = "INVALID_AUTOAPPLY_VALUE";

    /**
     * @var string
     */
    const INVALID_AVS_ADDR = "INVALID_AVS_ADDR";

    /**
     * @var string
     */
    const INVALID_AVS_ZIP = "INVALID_AVS_ZIP";

    /**
     * @var string
     */
    const INVALID_BALANCE_RANGE = "INVALID_BALANCE_RANGE";

    /**
     * @var string
     */
    const INVALID_BILLING_SCHDUL = "INVALID_BILLING_SCHDUL";

    /**
     * @var string
     */
    const INVALID_BILLING_SCHDUL_DATE = "INVALID_BILLING_SCHDUL_DATE";

    /**
     * @var string
     */
    const INVALID_BILLING_SCHDUL_ENTRY = "INVALID_BILLING_SCHDUL_ENTRY";

    /**
     * @var string
     */
    const INVALID_BIN_NUM = "INVALID_BIN_NUM";

    /**
     * @var string
     */
    const INVALID_BOM_QTY = "INVALID_BOM_QTY";

    /**
     * @var string
     */
    const INVALID_BOOLEAN_VALUE = "INVALID_BOOLEAN_VALUE";

    /**
     * @var string
     */
    const INVALID_BUG_NUM = "INVALID_BUG_NUM";

    /**
     * @var string
     */
    const INVALID_CAMPAIGN_CHANNEL = "INVALID_CAMPAIGN_CHANNEL";

    /**
     * @var string
     */
    const INVALID_CAMPAIGN_GROUP_SIZE = "INVALID_CAMPAIGN_GROUP_SIZE";

    /**
     * @var string
     */
    const INVALID_CAMPAIGN_STATUS = "INVALID_CAMPAIGN_STATUS";

    /**
     * @var string
     */
    const INVALID_CARD = "INVALID_CARD";

    /**
     * @var string
     */
    const INVALID_CARD_ID = "INVALID_CARD_ID";

    /**
     * @var string
     */
    const INVALID_CARD_NUM = "INVALID_CARD_NUM";

    /**
     * @var string
     */
    const INVALID_CARD_TYP = "INVALID_CARD_TYP";

    /**
     * @var string
     */
    const INVALID_CASE_FORM = "INVALID_CASE_FORM";

    /**
     * @var string
     */
    const INVALID_CATGRY_TAX_AGENCY_REQ = "INVALID_CATGRY_TAX_AGENCY_REQ";

    /**
     * @var string
     */
    const INVALID_CC_EMAIL_ADDRESS = "INVALID_CC_EMAIL_ADDRESS";

    /**
     * @var string
     */
    const INVALID_CC_NUM = "INVALID_CC_NUM";

    /**
     * @var string
     */
    const INVALID_CERT = "INVALID_CERT";

    /**
     * @var string
     */
    const INVALID_CERT_AUTH = "INVALID_CERT_AUTH";

    /**
     * @var string
     */
    const INVALID_CHANGE_LIST = "INVALID_CHANGE_LIST";

    /**
     * @var string
     */
    const INVALID_CHARS_IN_EMAIL = "INVALID_CHARS_IN_EMAIL";

    /**
     * @var string
     */
    const INVALID_CHARS_IN_NAME = "INVALID_CHARS_IN_NAME";

    /**
     * @var string
     */
    const INVALID_CHARS_IN_PARAM_FIELD = "INVALID_CHARS_IN_PARAM_FIELD";

    /**
     * @var string
     */
    const INVALID_CHARS_IN_URL = "INVALID_CHARS_IN_URL";

    /**
     * @var string
     */
    const INVALID_CHECKOUT_EMAIL = "INVALID_CHECKOUT_EMAIL";

    /**
     * @var string
     */
    const INVALID_CITY = "INVALID_CITY";

    /**
     * @var string
     */
    const INVALID_COLUMN_NAME = "INVALID_COLUMN_NAME";

    /**
     * @var string
     */
    const INVALID_COLUMN_VALUE = "INVALID_COLUMN_VALUE";

    /**
     * @var string
     */
    const INVALID_CONTENT_TYPE = "INVALID_CONTENT_TYPE";

    /**
     * @var string
     */
    const INVALID_COSTING_METHOD = "INVALID_COSTING_METHOD";

    /**
     * @var string
     */
    const INVALID_CRNCY_EXCH_RATE = "INVALID_CRNCY_EXCH_RATE";

    /**
     * @var string
     */
    const INVALID_CRYPT_KEY = "INVALID_CRYPT_KEY";

    /**
     * @var string
     */
    const INVALID_CSTM_FIELD_DATA_TYP = "INVALID_CSTM_FIELD_DATA_TYP";

    /**
     * @var string
     */
    const INVALID_CSTM_FIELD_RCRD_TYP = "INVALID_CSTM_FIELD_RCRD_TYP";

    /**
     * @var string
     */
    const INVALID_CSTM_FIELD_REF = "INVALID_CSTM_FIELD_REF";

    /**
     * @var string
     */
    const INVALID_CSTM_FORM = "INVALID_CSTM_FORM";

    /**
     * @var string
     */
    const INVALID_CSTM_RCRD_KEY = "INVALID_CSTM_RCRD_KEY";

    /**
     * @var string
     */
    const INVALID_CSTM_RCRD_QUERY = "INVALID_CSTM_RCRD_QUERY";

    /**
     * @var string
     */
    const INVALID_CSTM_RCRD_TYPE_KEY = "INVALID_CSTM_RCRD_TYPE_KEY";

    /**
     * @var string
     */
    const INVALID_CSTM_RCRD_TYP_KEY = "INVALID_CSTM_RCRD_TYP_KEY";

    /**
     * @var string
     */
    const INVALID_CUR = "INVALID_CUR";

    /**
     * @var string
     */
    const INVALID_CURRENCY_CODE = "INVALID_CURRENCY_CODE";

    /**
     * @var string
     */
    const INVALID_CURRENCY_TYP = "INVALID_CURRENCY_TYP";

    /**
     * @var string
     */
    const INVALID_CURR_CODE = "INVALID_CURR_CODE";

    /**
     * @var string
     */
    const INVALID_CUSTOMER_RCRD = "INVALID_CUSTOMER_RCRD";

    /**
     * @var string
     */
    const INVALID_DATA = "INVALID_DATA";

    /**
     * @var string
     */
    const INVALID_DATA_FORMAT = "INVALID_DATA_FORMAT";

    /**
     * @var string
     */
    const INVALID_DATE = "INVALID_DATE";

    /**
     * @var string
     */
    const INVALID_DATE_FORMAT = "INVALID_DATE_FORMAT";

    /**
     * @var string
     */
    const INVALID_DATE_RANGE = "INVALID_DATE_RANGE";

    /**
     * @var string
     */
    const INVALID_DATE_TIME = "INVALID_DATE_TIME";

    /**
     * @var string
     */
    const INVALID_DEAL_RANGE = "INVALID_DEAL_RANGE";

    /**
     * @var string
     */
    const INVALID_DELETE_REF = "INVALID_DELETE_REF";

    /**
     * @var string
     */
    const INVALID_DESTINATION_FLDR = "INVALID_DESTINATION_FLDR";

    /**
     * @var string
     */
    const INVALID_DESTNTN_COUNTRY = "INVALID_DESTNTN_COUNTRY";

    /**
     * @var string
     */
    const INVALID_DESTNTN_POST_CODE = "INVALID_DESTNTN_POST_CODE";

    /**
     * @var string
     */
    const INVALID_DESTNTN_STATE = "INVALID_DESTNTN_STATE";

    /**
     * @var string
     */
    const INVALID_DETACH_RECORD_TYP = "INVALID_DETACH_RECORD_TYP";

    /**
     * @var string
     */
    const INVALID_DISCOUNT_MARKUP = "INVALID_DISCOUNT_MARKUP";

    /**
     * @var string
     */
    const INVALID_DOMAIN_KEY = "INVALID_DOMAIN_KEY";

    /**
     * @var string
     */
    const INVALID_DOMAIN_NAME = "INVALID_DOMAIN_NAME";

    /**
     * @var string
     */
    const INVALID_DUP_ISSUE_REF = "INVALID_DUP_ISSUE_REF";

    /**
     * @var string
     */
    const INVALID_EMAIL = "INVALID_EMAIL";

    /**
     * @var string
     */
    const INVALID_EMAIL_ADDR = "INVALID_EMAIL_ADDR";

    /**
     * @var string
     */
    const INVALID_END_DATE = "INVALID_END_DATE";

    /**
     * @var string
     */
    const INVALID_END_TIME = "INVALID_END_TIME";

    /**
     * @var string
     */
    const INVALID_ENTITY_INTERNALID = "INVALID_ENTITY_INTERNALID";

    /**
     * @var string
     */
    const INVALID_ENTITY_STATUS = "INVALID_ENTITY_STATUS";

    /**
     * @var string
     */
    const INVALID_EVENT_TIME = "INVALID_EVENT_TIME";

    /**
     * @var string
     */
    const INVALID_EXPNS_ACCT_SUB = "INVALID_EXPNS_ACCT_SUB";

    /**
     * @var string
     */
    const INVALID_EXPRESSION = "INVALID_EXPRESSION";

    /**
     * @var string
     */
    const INVALID_EXP_DATE = "INVALID_EXP_DATE";

    /**
     * @var string
     */
    const INVALID_FAX_NUM = "INVALID_FAX_NUM";

    /**
     * @var string
     */
    const INVALID_FAX_PHONE_FORMAT = "INVALID_FAX_PHONE_FORMAT";

    /**
     * @var string
     */
    const INVALID_FIELD_FOR_RCRD_TYP = "INVALID_FIELD_FOR_RCRD_TYP";

    /**
     * @var string
     */
    const INVALID_FIELD_NAME_FOR_NULL = "INVALID_FIELD_NAME_FOR_NULL";

    /**
     * @var string
     */
    const INVALID_FILE = "INVALID_FILE";

    /**
     * @var string
     */
    const INVALID_FILE_ENCODING = "INVALID_FILE_ENCODING";

    /**
     * @var string
     */
    const INVALID_FILE_TYP = "INVALID_FILE_TYP";

    /**
     * @var string
     */
    const INVALID_FLD = "INVALID_FLD";

    /**
     * @var string
     */
    const INVALID_FLDR_SIZE = "INVALID_FLDR_SIZE";

    /**
     * @var string
     */
    const INVALID_FLD_RANGE = "INVALID_FLD_RANGE";

    /**
     * @var string
     */
    const INVALID_FLD_TYP = "INVALID_FLD_TYP";

    /**
     * @var string
     */
    const INVALID_FLD_VALUE = "INVALID_FLD_VALUE";

    /**
     * @var string
     */
    const INVALID_FORMAT_IN_PARAM_FIELD = "INVALID_FORMAT_IN_PARAM_FIELD";

    /**
     * @var string
     */
    const INVALID_FORMULA = "INVALID_FORMULA";

    /**
     * @var string
     */
    const INVALID_FORMULA_FIELD = "INVALID_FORMULA_FIELD";

    /**
     * @var string
     */
    const INVALID_FROM_DATE = "INVALID_FROM_DATE";

    /**
     * @var string
     */
    const INVALID_FROM_TIME = "INVALID_FROM_TIME";

    /**
     * @var string
     */
    const INVALID_FULFILMNT_ITEM = "INVALID_FULFILMNT_ITEM";

    /**
     * @var string
     */
    const INVALID_FX_BASE_CURRENCY = "INVALID_FX_BASE_CURRENCY";

    /**
     * @var string
     */
    const INVALID_FX_RATE = "INVALID_FX_RATE";

    /**
     * @var string
     */
    const INVALID_GET_REF = "INVALID_GET_REF";

    /**
     * @var string
     */
    const INVALID_GIFT_CERT = "INVALID_GIFT_CERT";

    /**
     * @var string
     */
    const INVALID_GIFT_CERT_AMT = "INVALID_GIFT_CERT_AMT";

    /**
     * @var string
     */
    const INVALID_GIFT_CERT_CODE = "INVALID_GIFT_CERT_CODE";

    /**
     * @var string
     */
    const INVALID_GROUP_TYP = "INVALID_GROUP_TYP";

    /**
     * @var string
     */
    const INVALID_GROUP_TYPE = "INVALID_GROUP_TYPE";

    /**
     * @var string
     */
    const INVALID_GRP = "INVALID_GRP";

    /**
     * @var string
     */
    const INVALID_GST_PST_AGENCIES = "INVALID_GST_PST_AGENCIES";

    /**
     * @var string
     */
    const INVALID_ID = "INVALID_ID";

    /**
     * @var string
     */
    const INVALID_INITIALIZE_ARG = "INVALID_INITIALIZE_ARG";

    /**
     * @var string
     */
    const INVALID_INITIALIZE_AUXREF = "INVALID_INITIALIZE_AUXREF";

    /**
     * @var string
     */
    const INVALID_INITIALIZE_REF = "INVALID_INITIALIZE_REF";

    /**
     * @var string
     */
    const INVALID_INSURED_VALUE = "INVALID_INSURED_VALUE";

    /**
     * @var string
     */
    const INVALID_INTERNALID = "INVALID_INTERNALID";

    /**
     * @var string
     */
    const INVALID_INVENTORY_NUM = "INVALID_INVENTORY_NUM";

    /**
     * @var string
     */
    const INVALID_INV_DATE = "INVALID_INV_DATE";

    /**
     * @var string
     */
    const INVALID_IP_ADDRESS_RULE = "INVALID_IP_ADDRESS_RULE";

    /**
     * @var string
     */
    const INVALID_ISSUE_BUILD_VERSION = "INVALID_ISSUE_BUILD_VERSION";

    /**
     * @var string
     */
    const INVALID_ISSUE_PRIORITY = "INVALID_ISSUE_PRIORITY";

    /**
     * @var string
     */
    const INVALID_ISSUE_PRODUCT = "INVALID_ISSUE_PRODUCT";

    /**
     * @var string
     */
    const INVALID_ISSUE_STATUS = "INVALID_ISSUE_STATUS";

    /**
     * @var string
     */
    const INVALID_ITEM_OPTION = "INVALID_ITEM_OPTION";

    /**
     * @var string
     */
    const INVALID_ITEM_OPTIONS = "INVALID_ITEM_OPTIONS";

    /**
     * @var string
     */
    const INVALID_ITEM_SUBTYP = "INVALID_ITEM_SUBTYP";

    /**
     * @var string
     */
    const INVALID_ITEM_TYP = "INVALID_ITEM_TYP";

    /**
     * @var string
     */
    const INVALID_ITEM_WEIGHT = "INVALID_ITEM_WEIGHT";

    /**
     * @var string
     */
    const INVALID_JOB_ID = "INVALID_JOB_ID";

    /**
     * @var string
     */
    const INVALID_KEY_OR_REF = "INVALID_KEY_OR_REF";

    /**
     * @var string
     */
    const INVALID_KEY_PASSWORD_REQD = "INVALID_KEY_PASSWORD_REQD";

    /**
     * @var string
     */
    const INVALID_LINE_ID = "INVALID_LINE_ID";

    /**
     * @var string
     */
    const INVALID_LINK_SUM = "INVALID_LINK_SUM";

    /**
     * @var string
     */
    const INVALID_LIST_ID = "INVALID_LIST_ID";

    /**
     * @var string
     */
    const INVALID_LIST_KEY = "INVALID_LIST_KEY";

    /**
     * @var string
     */
    const INVALID_LOC = "INVALID_LOC";

    /**
     * @var string
     */
    const INVALID_LOC_SUB_RESTRICTN = "INVALID_LOC_SUB_RESTRICTN";

    /**
     * @var string
     */
    const INVALID_LOGIN = "INVALID_LOGIN";

    /**
     * @var string
     */
    const INVALID_LOGIN_ATTEMPT = "INVALID_LOGIN_ATTEMPT";

    /**
     * @var string
     */
    const INVALID_LOGIN_CREDENTIALS = "INVALID_LOGIN_CREDENTIALS";

    /**
     * @var string
     */
    const INVALID_LOGIN_IP = "INVALID_LOGIN_IP";

    /**
     * @var string
     */
    const INVALID_LOT_NUM_FORMAT = "INVALID_LOT_NUM_FORMAT";

    /**
     * @var string
     */
    const INVALID_MARKUP_DISCOUNT = "INVALID_MARKUP_DISCOUNT";

    /**
     * @var string
     */
    const INVALID_MCC = "INVALID_MCC";

    /**
     * @var string
     */
    const INVALID_MEMBER_HIERARCHY = "INVALID_MEMBER_HIERARCHY";

    /**
     * @var string
     */
    const INVALID_MEMRZD_TRANS = "INVALID_MEMRZD_TRANS";

    /**
     * @var string
     */
    const INVALID_MERCHANT_KEY = "INVALID_MERCHANT_KEY";

    /**
     * @var string
     */
    const INVALID_MERCHANT_NAME = "INVALID_MERCHANT_NAME";

    /**
     * @var string
     */
    const INVALID_NAME = "INVALID_NAME";

    /**
     * @var string
     */
    const INVALID_NEXUS = "INVALID_NEXUS";

    /**
     * @var string
     */
    const INVALID_NUM = "INVALID_NUM";

    /**
     * @var string
     */
    const INVALID_NUMBER = "INVALID_NUMBER";

    /**
     * @var string
     */
    const INVALID_OBJ = "INVALID_OBJ";

    /**
     * @var string
     */
    const INVALID_ONLINE_FORM = "INVALID_ONLINE_FORM";

    /**
     * @var string
     */
    const INVALID_ONLINE_FORM_URL = "INVALID_ONLINE_FORM_URL";

    /**
     * @var string
     */
    const INVALID_OPENID_DOMAIN = "INVALID_OPENID_DOMAIN";

    /**
     * @var string
     */
    const INVALID_OPERATION = "INVALID_OPERATION";

    /**
     * @var string
     */
    const INVALID_ORD_STATUS = "INVALID_ORD_STATUS";

    /**
     * @var string
     */
    const INVALID_ORIGIN_COUNTRY = "INVALID_ORIGIN_COUNTRY";

    /**
     * @var string
     */
    const INVALID_ORIGIN_POSTCODE = "INVALID_ORIGIN_POSTCODE";

    /**
     * @var string
     */
    const INVALID_ORIGIN_STATE = "INVALID_ORIGIN_STATE";

    /**
     * @var string
     */
    const INVALID_PAGER_NUM = "INVALID_PAGER_NUM";

    /**
     * @var string
     */
    const INVALID_PAGE_INDEX = "INVALID_PAGE_INDEX";

    /**
     * @var string
     */
    const INVALID_PAGE_PARAM = "INVALID_PAGE_PARAM";

    /**
     * @var string
     */
    const INVALID_PARAM = "INVALID_PARAM";

    /**
     * @var string
     */
    const INVALID_PARENT = "INVALID_PARENT";

    /**
     * @var string
     */
    const INVALID_PARTNER_CODE = "INVALID_PARTNER_CODE";

    /**
     * @var string
     */
    const INVALID_PARTNER_ID = "INVALID_PARTNER_ID";

    /**
     * @var string
     */
    const INVALID_PASSWORD = "INVALID_PASSWORD";

    /**
     * @var string
     */
    const INVALID_PAYCHECK_DATE = "INVALID_PAYCHECK_DATE";

    /**
     * @var string
     */
    const INVALID_PERIOD = "INVALID_PERIOD";

    /**
     * @var string
     */
    const INVALID_PHONE = "INVALID_PHONE";

    /**
     * @var string
     */
    const INVALID_PHONE_FAX_PAGER_NUM = "INVALID_PHONE_FAX_PAGER_NUM";

    /**
     * @var string
     */
    const INVALID_PHONE_NUM = "INVALID_PHONE_NUM";

    /**
     * @var string
     */
    const INVALID_PHONE_NUMBER = "INVALID_PHONE_NUMBER";

    /**
     * @var string
     */
    const INVALID_PICKUP_POSTAL_CODE = "INVALID_PICKUP_POSTAL_CODE";

    /**
     * @var string
     */
    const INVALID_PIN = "INVALID_PIN";

    /**
     * @var string
     */
    const INVALID_PIN_DEBIT_TRANS_TYP = "INVALID_PIN_DEBIT_TRANS_TYP";

    /**
     * @var string
     */
    const INVALID_PORTLET_TYP = "INVALID_PORTLET_TYP";

    /**
     * @var string
     */
    const INVALID_POST = "INVALID_POST";

    /**
     * @var string
     */
    const INVALID_PRESENTATION_TYP = "INVALID_PRESENTATION_TYP";

    /**
     * @var string
     */
    const INVALID_PROBABILITY_RANGE = "INVALID_PROBABILITY_RANGE";

    /**
     * @var string
     */
    const INVALID_PROFILE_ID = "INVALID_PROFILE_ID";

    /**
     * @var string
     */
    const INVALID_PROJ_BILLING_TYP = "INVALID_PROJ_BILLING_TYP";

    /**
     * @var string
     */
    const INVALID_PST_TAX_VALUE = "INVALID_PST_TAX_VALUE";

    /**
     * @var string
     */
    const INVALID_PSWD = "INVALID_PSWD";

    /**
     * @var string
     */
    const INVALID_PSWD_HINT = "INVALID_PSWD_HINT";

    /**
     * @var string
     */
    const INVALID_PSWD_ILLEGAL_CHAR = "INVALID_PSWD_ILLEGAL_CHAR";

    /**
     * @var string
     */
    const INVALID_PURCHASE_TAX_CODE = "INVALID_PURCHASE_TAX_CODE";

    /**
     * @var string
     */
    const INVALID_QTY = "INVALID_QTY";

    /**
     * @var string
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";

    /**
     * @var string
     */
    const INVALID_QUESTION = "INVALID_QUESTION";

    /**
     * @var string
     */
    const INVALID_RCRD = "INVALID_RCRD";

    /**
     * @var string
     */
    const INVALID_RCRD_CONVERSION = "INVALID_RCRD_CONVERSION";

    /**
     * @var string
     */
    const INVALID_RCRD_HEADER_ = "INVALID_RCRD_HEADER_";

    /**
     * @var string
     */
    const INVALID_RCRD_ID = "INVALID_RCRD_ID";

    /**
     * @var string
     */
    const INVALID_RCRD_INITIALIZE = "INVALID_RCRD_INITIALIZE";

    /**
     * @var string
     */
    const INVALID_RCRD_OBJ = "INVALID_RCRD_OBJ";

    /**
     * @var string
     */
    const INVALID_RCRD_REF = "INVALID_RCRD_REF";

    /**
     * @var string
     */
    const INVALID_RCRD_TRANSFRM = "INVALID_RCRD_TRANSFRM";

    /**
     * @var string
     */
    const INVALID_RCRD_TYPE = "INVALID_RCRD_TYPE";

    /**
     * @var string
     */
    const INVALID_RECIPIENT = "INVALID_RECIPIENT";

    /**
     * @var string
     */
    const INVALID_RECR_REF = "INVALID_RECR_REF";

    /**
     * @var string
     */
    const INVALID_RECUR_DATE_RANGE = "INVALID_RECUR_DATE_RANGE";

    /**
     * @var string
     */
    const INVALID_RECUR_DESC_REQD = "INVALID_RECUR_DESC_REQD";

    /**
     * @var string
     */
    const INVALID_RECUR_DOW = "INVALID_RECUR_DOW";

    /**
     * @var string
     */
    const INVALID_RECUR_DOWIM = "INVALID_RECUR_DOWIM";

    /**
     * @var string
     */
    const INVALID_RECUR_DOWMASK = "INVALID_RECUR_DOWMASK";

    /**
     * @var string
     */
    const INVALID_RECUR_FREQUENCY = "INVALID_RECUR_FREQUENCY";

    /**
     * @var string
     */
    const INVALID_RECUR_PATTERN = "INVALID_RECUR_PATTERN";

    /**
     * @var string
     */
    const INVALID_RECUR_PERIOD = "INVALID_RECUR_PERIOD";

    /**
     * @var string
     */
    const INVALID_RECUR_TIME_ZONE_REQD = "INVALID_RECUR_TIME_ZONE_REQD";

    /**
     * @var string
     */
    const INVALID_REFFERER_EMAIL = "INVALID_REFFERER_EMAIL";

    /**
     * @var string
     */
    const INVALID_REFUND_AMT = "INVALID_REFUND_AMT";

    /**
     * @var string
     */
    const INVALID_REF_CANT_INITIALIZE = "INVALID_REF_CANT_INITIALIZE";

    /**
     * @var string
     */
    const INVALID_REF_KEY = "INVALID_REF_KEY";

    /**
     * @var string
     */
    const INVALID_REPORT = "INVALID_REPORT";

    /**
     * @var string
     */
    const INVALID_REPORT_ID = "INVALID_REPORT_ID";

    /**
     * @var string
     */
    const INVALID_REPORT_ROW = "INVALID_REPORT_ROW";

    /**
     * @var string
     */
    const INVALID_REQUEST = "INVALID_REQUEST";

    /**
     * @var string
     */
    const INVALID_RESOURCE_TIME = "INVALID_RESOURCE_TIME";

    /**
     * @var string
     */
    const INVALID_RESULT_SUMMARY_FUNC = "INVALID_RESULT_SUMMARY_FUNC";

    /**
     * @var string
     */
    const INVALID_RETURN_DATA_OBJECT = "INVALID_RETURN_DATA_OBJECT";

    /**
     * @var string
     */
    const INVALID_REV_REC_DATE_RANGE = "INVALID_REV_REC_DATE_RANGE";

    /**
     * @var string
     */
    const INVALID_ROLE = "INVALID_ROLE";

    /**
     * @var string
     */
    const INVALID_ROLE_FOR_EVENT = "INVALID_ROLE_FOR_EVENT";

    /**
     * @var string
     */
    const INVALID_RQST_CONTACTS_EXIST = "INVALID_RQST_CONTACTS_EXIST";

    /**
     * @var string
     */
    const INVALID_RQST_PARENT_REQD = "INVALID_RQST_PARENT_REQD";

    /**
     * @var string
     */
    const INVALID_RQST_SBCUST_JOBS_EXIST = "INVALID_RQST_SBCUST_JOBS_EXIST";

    /**
     * @var string
     */
    const INVALID_SAVEDSEARCH = "INVALID_SAVEDSEARCH";

    /**
     * @var string
     */
    const INVALID_SAVED_SRCH = "INVALID_SAVED_SRCH";

    /**
     * @var string
     */
    const INVALID_SCHDUL_AMT = "INVALID_SCHDUL_AMT";

    /**
     * @var string
     */
    const INVALID_SCHDUL_FORMAT = "INVALID_SCHDUL_FORMAT";

    /**
     * @var string
     */
    const INVALID_SCRIPT_ID = "INVALID_SCRIPT_ID";

    /**
     * @var string
     */
    const INVALID_SEARCH = "INVALID_SEARCH";

    /**
     * @var string
     */
    const INVALID_SEARCH_CRITERIA = "INVALID_SEARCH_CRITERIA";

    /**
     * @var string
     */
    const INVALID_SEARCH_FIELD_KEY = "INVALID_SEARCH_FIELD_KEY";

    /**
     * @var string
     */
    const INVALID_SEARCH_FIELD_NAME = "INVALID_SEARCH_FIELD_NAME";

    /**
     * @var string
     */
    const INVALID_SEARCH_FIELD_OBJ = "INVALID_SEARCH_FIELD_OBJ";

    /**
     * @var string
     */
    const INVALID_SEARCH_JOIN_ID = "INVALID_SEARCH_JOIN_ID";

    /**
     * @var string
     */
    const INVALID_SEARCH_MORE = "INVALID_SEARCH_MORE";

    /**
     * @var string
     */
    const INVALID_SEARCH_OPERATOR = "INVALID_SEARCH_OPERATOR";

    /**
     * @var string
     */
    const INVALID_SEARCH_PAGE_INDEX = "INVALID_SEARCH_PAGE_INDEX";

    /**
     * @var string
     */
    const INVALID_SEARCH_PAGE_SIZE = "INVALID_SEARCH_PAGE_SIZE";

    /**
     * @var string
     */
    const INVALID_SEARCH_PREF = "INVALID_SEARCH_PREF";

    /**
     * @var string
     */
    const INVALID_SEARCH_SELECT_OBJ = "INVALID_SEARCH_SELECT_OBJ";

    /**
     * @var string
     */
    const INVALID_SEARCH_VALUE = "INVALID_SEARCH_VALUE";

    /**
     * @var string
     */
    const INVALID_SECONDARY_EMAIL = "INVALID_SECONDARY_EMAIL";

    /**
     * @var string
     */
    const INVALID_SECPAY_CREDENTIALS = "INVALID_SECPAY_CREDENTIALS";

    /**
     * @var string
     */
    const INVALID_SERIAL_NUM = "INVALID_SERIAL_NUM";

    /**
     * @var string
     */
    const INVALID_SERIAL_OR_LOT_NUMBER = "INVALID_SERIAL_OR_LOT_NUMBER";

    /**
     * @var string
     */
    const INVALID_SERVICE_CODE = "INVALID_SERVICE_CODE";

    /**
     * @var string
     */
    const INVALID_SESSION = "INVALID_SESSION";

    /**
     * @var string
     */
    const INVALID_SHIPPER_STATE = "INVALID_SHIPPER_STATE";

    /**
     * @var string
     */
    const INVALID_SHIP_DATE = "INVALID_SHIP_DATE";

    /**
     * @var string
     */
    const INVALID_SHIP_FROM_STATE = "INVALID_SHIP_FROM_STATE";

    /**
     * @var string
     */
    const INVALID_SHIP_GRP = "INVALID_SHIP_GRP";

    /**
     * @var string
     */
    const INVALID_SHIP_SRVC = "INVALID_SHIP_SRVC";

    /**
     * @var string
     */
    const INVALID_SHIP_TO_SATE = "INVALID_SHIP_TO_SATE";

    /**
     * @var string
     */
    const INVALID_SITE_CSTM_FILE = "INVALID_SITE_CSTM_FILE";

    /**
     * @var string
     */
    const INVALID_SOAP_HEADER = "INVALID_SOAP_HEADER";

    /**
     * @var string
     */
    const INVALID_SRCH = "INVALID_SRCH";

    /**
     * @var string
     */
    const INVALID_SRCH_CRITERIA = "INVALID_SRCH_CRITERIA";

    /**
     * @var string
     */
    const INVALID_SRCH_CSTM_FLD = "INVALID_SRCH_CSTM_FLD";

    /**
     * @var string
     */
    const INVALID_SRCH_FUNCTN = "INVALID_SRCH_FUNCTN";

    /**
     * @var string
     */
    const INVALID_SRCH_SORT = "INVALID_SRCH_SORT";

    /**
     * @var string
     */
    const INVALID_SRCH_SUMMARY_TYP = "INVALID_SRCH_SUMMARY_TYP";

    /**
     * @var string
     */
    const INVALID_SRCH_TYP = "INVALID_SRCH_TYP";

    /**
     * @var string
     */
    const INVALID_SRVC_ITEM_SUB = "INVALID_SRVC_ITEM_SUB";

    /**
     * @var string
     */
    const INVALID_SSO = "INVALID_SSO";

    /**
     * @var string
     */
    const INVALID_SSS_DEBUG_SESSION = "INVALID_SSS_DEBUG_SESSION";

    /**
     * @var string
     */
    const INVALID_STATE = "INVALID_STATE";

    /**
     * @var string
     */
    const INVALID_STATUS = "INVALID_STATUS";

    /**
     * @var string
     */
    const INVALID_SUB = "INVALID_SUB";

    /**
     * @var string
     */
    const INVALID_SUBLIST_DESC = "INVALID_SUBLIST_DESC";

    /**
     * @var string
     */
    const INVALID_SUBSCRIPTION_STATUS = "INVALID_SUBSCRIPTION_STATUS";

    /**
     * @var string
     */
    const INVALID_SUMMARY_SRCH = "INVALID_SUMMARY_SRCH";

    /**
     * @var string
     */
    const INVALID_SUPERVISOR = "INVALID_SUPERVISOR";

    /**
     * @var string
     */
    const INVALID_TASK_ID = "INVALID_TASK_ID";

    /**
     * @var string
     */
    const INVALID_TAX_AMT = "INVALID_TAX_AMT";

    /**
     * @var string
     */
    const INVALID_TAX_CODE = "INVALID_TAX_CODE";

    /**
     * @var string
     */
    const INVALID_TAX_CODES = "INVALID_TAX_CODES";

    /**
     * @var string
     */
    const INVALID_TAX_CODE_FOR_SUB = "INVALID_TAX_CODE_FOR_SUB";

    /**
     * @var string
     */
    const INVALID_TAX_PMT = "INVALID_TAX_PMT";

    /**
     * @var string
     */
    const INVALID_TAX_VALUE = "INVALID_TAX_VALUE";

    /**
     * @var string
     */
    const INVALID_TIME_FORMAT = "INVALID_TIME_FORMAT";

    /**
     * @var string
     */
    const INVALID_TO_DATE = "INVALID_TO_DATE";

    /**
     * @var string
     */
    const INVALID_TRACKING_NUM = "INVALID_TRACKING_NUM";

    /**
     * @var string
     */
    const INVALID_TRANS = "INVALID_TRANS";

    /**
     * @var string
     */
    const INVALID_TRANSACTION_DATE = "INVALID_TRANSACTION_DATE";

    /**
     * @var string
     */
    const INVALID_TRANSACTIO_DATE = "INVALID_TRANSACTIO_DATE";

    /**
     * @var string
     */
    const INVALID_TRANS_AMT = "INVALID_TRANS_AMT";

    /**
     * @var string
     */
    const INVALID_TRANS_COMPNT = "INVALID_TRANS_COMPNT";

    /**
     * @var string
     */
    const INVALID_TRANS_ID = "INVALID_TRANS_ID";

    /**
     * @var string
     */
    const INVALID_TRANS_SUB_ACCT = "INVALID_TRANS_SUB_ACCT";

    /**
     * @var string
     */
    const INVALID_TRANS_SUB_CLASS = "INVALID_TRANS_SUB_CLASS";

    /**
     * @var string
     */
    const INVALID_TRANS_SUB_DEPT = "INVALID_TRANS_SUB_DEPT";

    /**
     * @var string
     */
    const INVALID_TRANS_SUB_ENTITY = "INVALID_TRANS_SUB_ENTITY";

    /**
     * @var string
     */
    const INVALID_TRANS_SUB_ITEM = "INVALID_TRANS_SUB_ITEM";

    /**
     * @var string
     */
    const INVALID_TRANS_SUB_LOC = "INVALID_TRANS_SUB_LOC";

    /**
     * @var string
     */
    const INVALID_TRANS_TYP = "INVALID_TRANS_TYP";

    /**
     * @var string
     */
    const INVALID_TRAN_ITEM_LINE = "INVALID_TRAN_ITEM_LINE";

    /**
     * @var string
     */
    const INVALID_TRIAL_TYP = "INVALID_TRIAL_TYP";

    /**
     * @var string
     */
    const INVALID_TYP = "INVALID_TYP";

    /**
     * @var string
     */
    const INVALID_UNIT_TYP = "INVALID_UNIT_TYP";

    /**
     * @var string
     */
    const INVALID_UNSUPRTD_RCRD_TYP = "INVALID_UNSUPRTD_RCRD_TYP";

    /**
     * @var string
     */
    const INVALID_UPS_ACCT = "INVALID_UPS_ACCT";

    /**
     * @var string
     */
    const INVALID_UPS_PACKG_WEIGHT = "INVALID_UPS_PACKG_WEIGHT";

    /**
     * @var string
     */
    const INVALID_UPS_VALUES = "INVALID_UPS_VALUES";

    /**
     * @var string
     */
    const INVALID_URL = "INVALID_URL";

    /**
     * @var string
     */
    const INVALID_URL_PARAM = "INVALID_URL_PARAM";

    /**
     * @var string
     */
    const INVALID_VALUE = "INVALID_VALUE";

    /**
     * @var string
     */
    const INVALID_VAT_AMOUNT = "INVALID_VAT_AMOUNT";

    /**
     * @var string
     */
    const INVALID_VAT_REGSTRTN_NUM = "INVALID_VAT_REGSTRTN_NUM";

    /**
     * @var string
     */
    const INVALID_VSOE_ALLOCTN = "INVALID_VSOE_ALLOCTN";

    /**
     * @var string
     */
    const INVALID_WEBSITE_SECTION = "INVALID_WEBSITE_SECTION";

    /**
     * @var string
     */
    const INVALID_WO = "INVALID_WO";

    /**
     * @var string
     */
    const INVALID_WORLDPAY_ID = "INVALID_WORLDPAY_ID";

    /**
     * @var string
     */
    const INVALID_WO_ITEM = "INVALID_WO_ITEM";

    /**
     * @var string
     */
    const INVALID_WS_VERSION = "INVALID_WS_VERSION";

    /**
     * @var string
     */
    const INVALID_YEAR = "INVALID_YEAR";

    /**
     * @var string
     */
    const INVALID_YEAR_FORMAT = "INVALID_YEAR_FORMAT";

    /**
     * @var string
     */
    const INVALID_ZIP_CODE = "INVALID_ZIP_CODE";

    /**
     * @var string
     */
    const INVALID_ZIP_FILE = "INVALID_ZIP_FILE";

    /**
     * @var string
     */
    const INVALID_ZIP_POST_CODE = "INVALID_ZIP_POST_CODE";

    /**
     * @var string
     */
    const INVENTORY_NUM_DISALLWD = "INVENTORY_NUM_DISALLWD";

    /**
     * @var string
     */
    const INVLAID_BOOLEAN_VALUE = "INVLAID_BOOLEAN_VALUE";

    /**
     * @var string
     */
    const IP_REQUEST = "IP_REQUEST";

    /**
     * @var string
     */
    const ISSUE_ASSIGNEE_DISALLWD = "ISSUE_ASSIGNEE_DISALLWD";

    /**
     * @var string
     */
    const ISSUE_PRODUCT_VERSION_MISMATCH = "ISSUE_PRODUCT_VERSION_MISMATCH";

    /**
     * @var string
     */
    const ISSUE_VERSION_BUILD_MISMATCH = "ISSUE_VERSION_BUILD_MISMATCH";

    /**
     * @var string
     */
    const ITEM_ACCT_REQD = "ITEM_ACCT_REQD";

    /**
     * @var string
     */
    const ITEM_COUNT_MISMATCH = "ITEM_COUNT_MISMATCH";

    /**
     * @var string
     */
    const ITEM_IS_UNAVAILABLE = "ITEM_IS_UNAVAILABLE";

    /**
     * @var string
     */
    const ITEM_NAME_MUST_BE_UNIQUE = "ITEM_NAME_MUST_BE_UNIQUE";

    /**
     * @var string
     */
    const ITEM_NOT_UNIQUE = "ITEM_NOT_UNIQUE";

    /**
     * @var string
     */
    const ITEM_PARAM_REQD_IN_URL = "ITEM_PARAM_REQD_IN_URL";

    /**
     * @var string
     */
    const ITEM_QTY_AMT_MISMATCH = "ITEM_QTY_AMT_MISMATCH";

    /**
     * @var string
     */
    const ITEM_TYP_REQS_UNIT = "ITEM_TYP_REQS_UNIT";

    /**
     * @var string
     */
    const JE_AMOUNTS_MUST_BALANCE = "JE_AMOUNTS_MUST_BALANCE";

    /**
     * @var string
     */
    const JE_LINE_MISSING_REQD_DATA = "JE_LINE_MISSING_REQD_DATA";

    /**
     * @var string
     */
    const JE_MAX_ONE_LINE = "JE_MAX_ONE_LINE";

    /**
     * @var string
     */
    const JE_REV_REC_IN_PROGRESS = "JE_REV_REC_IN_PROGRESS";

    /**
     * @var string
     */
    const JE_UNEXPECTED_ERROR = "JE_UNEXPECTED_ERROR";

    /**
     * @var string
     */
    const JOB_NOT_COMPLETE = "JOB_NOT_COMPLETE";

    /**
     * @var string
     */
    const JS_EXCEPTION = "JS_EXCEPTION";

    /**
     * @var string
     */
    const KEY_REQD = "KEY_REQD";

    /**
     * @var string
     */
    const KPI_SETUP_REQD = "KPI_SETUP_REQD";

    /**
     * @var string
     */
    const LABEL_REQD = "LABEL_REQD";

    /**
     * @var string
     */
    const LANGUAGE_SETUP_REQD = "LANGUAGE_SETUP_REQD";

    /**
     * @var string
     */
    const LINKED_ACCT_DONT_MATCH = "LINKED_ACCT_DONT_MATCH";

    /**
     * @var string
     */
    const LINKED_ENTITIES_DONT_MATCH = "LINKED_ENTITIES_DONT_MATCH";

    /**
     * @var string
     */
    const LINKED_ITEMS_DONT_MATCH = "LINKED_ITEMS_DONT_MATCH";

    /**
     * @var string
     */
    const LINK_LINES_TO_ONE_ORD = "LINK_LINES_TO_ONE_ORD";

    /**
     * @var string
     */
    const LIST_ID_REQD = "LIST_ID_REQD";

    /**
     * @var string
     */
    const LIST_KEY_REQD = "LIST_KEY_REQD";

    /**
     * @var string
     */
    const LOCATIONS_IN_USE = "LOCATIONS_IN_USE";

    /**
     * @var string
     */
    const LOCATIONS_SETUP_REQD = "LOCATIONS_SETUP_REQD";

    /**
     * @var string
     */
    const LOCATION_REQD = "LOCATION_REQD";

    /**
     * @var string
     */
    const LOCKED_DASHBOARD = "LOCKED_DASHBOARD";

    /**
     * @var string
     */
    const LOGIN_DISABLED = "LOGIN_DISABLED";

    /**
     * @var string
     */
    const LOGIN_DISABLED_PARTNER_CTR = "LOGIN_DISABLED_PARTNER_CTR";

    /**
     * @var string
     */
    const LOGIN_EMAIL_REQD = "LOGIN_EMAIL_REQD";

    /**
     * @var string
     */
    const LOGIN_NAME_AND_PSWD_REQD = "LOGIN_NAME_AND_PSWD_REQD";

    /**
     * @var string
     */
    const LOGIN_REQD = "LOGIN_REQD";

    /**
     * @var string
     */
    const LOST_UPSELL_CRITERIA = "LOST_UPSELL_CRITERIA";

    /**
     * @var string
     */
    const MACHN_LIST_KEY_NAMES_REQD = "MACHN_LIST_KEY_NAMES_REQD";

    /**
     * @var string
     */
    const MANDATORY_PRD_TYPE_REQD = "MANDATORY_PRD_TYPE_REQD";

    /**
     * @var string
     */
    const MASS_UPDATE_CRITERIA_LOST = "MASS_UPDATE_CRITERIA_LOST";

    /**
     * @var string
     */
    const MATCHING_CUR_SUB_REQD = "MATCHING_CUR_SUB_REQD";

    /**
     * @var string
     */
    const MATCHING_SERIAL_NUM_REQD = "MATCHING_SERIAL_NUM_REQD";

    /**
     * @var string
     */
    const MATRIX_INFO_TEMP_LOST = "MATRIX_INFO_TEMP_LOST";

    /**
     * @var string
     */
    const MATRIX_SUBITEM_NAME_TOO_LONG = "MATRIX_SUBITEM_NAME_TOO_LONG";

    /**
     * @var string
     */
    const MAX_16_LINES_ALLWD_PER_BILLPAY = "MAX_16_LINES_ALLWD_PER_BILLPAY";

    /**
     * @var string
     */
    const MAX_200_LINES_ALLWD_ON_TRANS = "MAX_200_LINES_ALLWD_ON_TRANS";

    /**
     * @var string
     */
    const MAX_BARCODE_PRINT_EXCEEDED = "MAX_BARCODE_PRINT_EXCEEDED";

    /**
     * @var string
     */
    const MAX_BULK_MERGE_RCRDS_EXCEEDED = "MAX_BULK_MERGE_RCRDS_EXCEEDED";

    /**
     * @var string
     */
    const MAX_EMAILS_EXCEEDED = "MAX_EMAILS_EXCEEDED";

    /**
     * @var string
     */
    const MAX_RCRDS_EXCEEDED = "MAX_RCRDS_EXCEEDED";

    /**
     * @var string
     */
    const MAX_VALUES_EXCEEDED = "MAX_VALUES_EXCEEDED";

    /**
     * @var string
     */
    const MEDIA_FILE_INVALID_JSCRIPT = "MEDIA_FILE_INVALID_JSCRIPT";

    /**
     * @var string
     */
    const MEDIA_NOT_FOUND = "MEDIA_NOT_FOUND";

    /**
     * @var string
     */
    const MEDIA_NOT_INITIALIZED = "MEDIA_NOT_INITIALIZED";

    /**
     * @var string
     */
    const MEMORIZED_TRANS_ERROR = "MEMORIZED_TRANS_ERROR";

    /**
     * @var string
     */
    const MERGE_OPERATION_DISALLWD = "MERGE_OPERATION_DISALLWD";

    /**
     * @var string
     */
    const MERGE_RCRD_REQD = "MERGE_RCRD_REQD";

    /**
     * @var string
     */
    const METAVANTE_ERROR = "METAVANTE_ERROR";

    /**
     * @var string
     */
    const METAVANTE_SECRET_ANSWER_REQD = "METAVANTE_SECRET_ANSWER_REQD";

    /**
     * @var string
     */
    const METAVANTE_SECRET_QESTION_REQD = "METAVANTE_SECRET_QESTION_REQD";

    /**
     * @var string
     */
    const METAVANTE_SETUP_REQD = "METAVANTE_SETUP_REQD";

    /**
     * @var string
     */
    const METAVANTE_TEMP_UNAVAILBL = "METAVANTE_TEMP_UNAVAILBL";

    /**
     * @var string
     */
    const MISMATCHED_CURRENCY = "MISMATCHED_CURRENCY";

    /**
     * @var string
     */
    const MISMATCHED_QTY_PRICING = "MISMATCHED_QTY_PRICING";

    /**
     * @var string
     */
    const MISMATCHED_SEARCH_PARENTHESIS = "MISMATCHED_SEARCH_PARENTHESIS";

    /**
     * @var string
     */
    const MISMATCH_EVENT_ISSUE_STATUS = "MISMATCH_EVENT_ISSUE_STATUS";

    /**
     * @var string
     */
    const MISMATCH_ISSUE_PRODUCT_VERSION = "MISMATCH_ISSUE_PRODUCT_VERSION";

    /**
     * @var string
     */
    const MISMATCH_SALES_CONTRIBUTION = "MISMATCH_SALES_CONTRIBUTION";

    /**
     * @var string
     */
    const MISSING_ACCT_PRD = "MISSING_ACCT_PRD";

    /**
     * @var string
     */
    const MISSING_CRNCY_EXCH_RATE = "MISSING_CRNCY_EXCH_RATE";

    /**
     * @var string
     */
    const MISSING_ENUM = "MISSING_ENUM";

    /**
     * @var string
     */
    const MISSING_REQD_FLD = "MISSING_REQD_FLD";

    /**
     * @var string
     */
    const MISSNG_ACCT_PRD = "MISSNG_ACCT_PRD";

    /**
     * @var string
     */
    const MISSNG_REV_REC_RCRD = "MISSNG_REV_REC_RCRD";

    /**
     * @var string
     */
    const MISSNG_SO_REV_REC_PARAMS = "MISSNG_SO_REV_REC_PARAMS";

    /**
     * @var string
     */
    const MISSNG_SO_START_END_DATES = "MISSNG_SO_START_END_DATES";

    /**
     * @var string
     */
    const MLI_REQD = "MLI_REQD";

    /**
     * @var string
     */
    const MLTPLE_TAX_LINES_DISALLWD = "MLTPLE_TAX_LINES_DISALLWD";

    /**
     * @var string
     */
    const MSNG_FIELD_OWRTE_MUST_BE_TRUE = "MSNG_FIELD_OWRTE_MUST_BE_TRUE";

    /**
     * @var string
     */
    const MST_UPDATE_ITEMS_THEN_RATES = "MST_UPDATE_ITEMS_THEN_RATES";

    /**
     * @var string
     */
    const MULTISELECT_TYPE_REQD = "MULTISELECT_TYPE_REQD";

    /**
     * @var string
     */
    const MULTI_ACCT_CANT_CHANGE_PSWD = "MULTI_ACCT_CANT_CHANGE_PSWD";

    /**
     * @var string
     */
    const MULTI_LOC_INVT_ERROR = "MULTI_LOC_INVT_ERROR";

    /**
     * @var string
     */
    const MULTI_PRIMARY_PARTNER_DISALLWD = "MULTI_PRIMARY_PARTNER_DISALLWD";

    /**
     * @var string
     */
    const MULTI_SHIP_ROUTES_REQD = "MULTI_SHIP_ROUTES_REQD";

    /**
     * @var string
     */
    const MUST_DEFINE_BASE_UNIT = "MUST_DEFINE_BASE_UNIT";

    /**
     * @var string
     */
    const MUST_RESUBMIT_RCRD = "MUST_RESUBMIT_RCRD";

    /**
     * @var string
     */
    const NAME_ALREADY_IN_USE = "NAME_ALREADY_IN_USE";

    /**
     * @var string
     */
    const NAME_REQD = "NAME_REQD";

    /**
     * @var string
     */
    const NAME_TYPE_FLDR_FIELDS_REQD = "NAME_TYPE_FLDR_FIELDS_REQD";

    /**
     * @var string
     */
    const NARROW_KEYWORD_SEARCH = "NARROW_KEYWORD_SEARCH";

    /**
     * @var string
     */
    const NEED_BILL_VARIANCE_ACCT = "NEED_BILL_VARIANCE_ACCT";

    /**
     * @var string
     */
    const NEGATIVE_PAYMENT_DISALLWD = "NEGATIVE_PAYMENT_DISALLWD";

    /**
     * @var string
     */
    const NEGATIVE_TAX_RATE_DISALLWD = "NEGATIVE_TAX_RATE_DISALLWD";

    /**
     * @var string
     */
    const NEW_CONNECTION_DISALLWD = "NEW_CONNECTION_DISALLWD";

    /**
     * @var string
     */
    const NEXUS_REQD = "NEXUS_REQD";

    /**
     * @var string
     */
    const NONMATCHING_EMAILS = "NONMATCHING_EMAILS";

    /**
     * @var string
     */
    const NONUNIQUE_INDEX_VALUE = "NONUNIQUE_INDEX_VALUE";

    /**
     * @var string
     */
    const NONZERO_AMT_REQD = "NONZERO_AMT_REQD";

    /**
     * @var string
     */
    const NONZERO_QTY_REQD = "NONZERO_QTY_REQD";

    /**
     * @var string
     */
    const NONZERO_WEIGHT_REQD = "NONZERO_WEIGHT_REQD";

    /**
     * @var string
     */
    const NON_ADMIN_CANNOT_INITIATE_LINK = "NON_ADMIN_CANNOT_INITIATE_LINK";

    /**
     * @var string
     */
    const NOT_AN_INVITEE = "NOT_AN_INVITEE";

    /**
     * @var string
     */
    const NOT_IN_INVT = "NOT_IN_INVT";

    /**
     * @var string
     */
    const NO_DATA_FOUND = "NO_DATA_FOUND";

    /**
     * @var string
     */
    const NO_EXPENSES_FOR_PRD = "NO_EXPENSES_FOR_PRD";

    /**
     * @var string
     */
    const NO_ITEMS_TO_PRINT = "NO_ITEMS_TO_PRINT";

    /**
     * @var string
     */
    const NO_MASS_UPDATES_RUNNING = "NO_MASS_UPDATES_RUNNING";

    /**
     * @var string
     */
    const NO_MTRX_ITEMS_TO_UPDATE = "NO_MTRX_ITEMS_TO_UPDATE";

    /**
     * @var string
     */
    const NO_ORD_SHPMNT = "NO_ORD_SHPMNT";

    /**
     * @var string
     */
    const NO_RCRDS_MATCH = "NO_RCRDS_MATCH";

    /**
     * @var string
     */
    const NO_RCRD_FOR_USER = "NO_RCRD_FOR_USER";

    /**
     * @var string
     */
    const NO_SCHDUL_APPLIED = "NO_SCHDUL_APPLIED";

    /**
     * @var string
     */
    const NO_UPSERT = "NO_UPSERT";

    /**
     * @var string
     */
    const NULL_CHECK_NUMBER = "NULL_CHECK_NUMBER";

    /**
     * @var string
     */
    const NUMERIC_CHECK_NUM_REQD = "NUMERIC_CHECK_NUM_REQD";

    /**
     * @var string
     */
    const NUMERIC_REF_NUM_REQD = "NUMERIC_REF_NUM_REQD";

    /**
     * @var string
     */
    const NUM_ITEMS_GRTR_THAN_QTY = "NUM_ITEMS_GRTR_THAN_QTY";

    /**
     * @var string
     */
    const NUM_ITEMS_NOT_EQUAL_TO_QTY = "NUM_ITEMS_NOT_EQUAL_TO_QTY";

    /**
     * @var string
     */
    const NUM_REQD_FOR_FIRST_LABEL = "NUM_REQD_FOR_FIRST_LABEL";

    /**
     * @var string
     */
    const OI_FEATURE_REQD = "OI_FEATURE_REQD";

    /**
     * @var string
     */
    const OI_PERMISSION_REQD = "OI_PERMISSION_REQD";

    /**
     * @var string
     */
    const ONE_ADMIN_REQD_PER_ACCT = "ONE_ADMIN_REQD_PER_ACCT";

    /**
     * @var string
     */
    const ONE_DIRECT_DEPOSIT_ACT_ALLWD = "ONE_DIRECT_DEPOSIT_ACT_ALLWD";

    /**
     * @var string
     */
    const ONE_EMPL_REQD = "ONE_EMPL_REQD";

    /**
     * @var string
     */
    const ONE_PAY_ITEM_PER_EMPL = "ONE_PAY_ITEM_PER_EMPL";

    /**
     * @var string
     */
    const ONE_POSITIVE_VALUE_REQD = "ONE_POSITIVE_VALUE_REQD";

    /**
     * @var string
     */
    const ONE_RCRD_REQD_FOR_MASS_UPDATE = "ONE_RCRD_REQD_FOR_MASS_UPDATE";

    /**
     * @var string
     */
    const ONE_ROLE_REQD = "ONE_ROLE_REQD";

    /**
     * @var string
     */
    const ONLINE_BANK_FILE_REQD = "ONLINE_BANK_FILE_REQD";

    /**
     * @var string
     */
    const ONLINE_BILL_PAY_DUP = "ONLINE_BILL_PAY_DUP";

    /**
     * @var string
     */
    const ONLINE_BILL_PAY_SETUP_REQD = "ONLINE_BILL_PAY_SETUP_REQD";

    /**
     * @var string
     */
    const ONLINE_FORM_DSNT_EXIST = "ONLINE_FORM_DSNT_EXIST";

    /**
     * @var string
     */
    const ONLINE_FORM_EMPTY = "ONLINE_FORM_EMPTY";

    /**
     * @var string
     */
    const ONLINE_FORM_ID_REQD = "ONLINE_FORM_ID_REQD";

    /**
     * @var string
     */
    const ONLINE_FORM_USER_ACCESS_ONLY = "ONLINE_FORM_USER_ACCESS_ONLY";

    /**
     * @var string
     */
    const ONLINE_ORD_FEATURE_DISABLED = "ONLINE_ORD_FEATURE_DISABLED";

    /**
     * @var string
     */
    const ONLY_ONE_CONTRIB_ITEM_REQD = "ONLY_ONE_CONTRIB_ITEM_REQD";

    /**
     * @var string
     */
    const ONLY_ONE_DEDCT_ITEM_REQD = "ONLY_ONE_DEDCT_ITEM_REQD";

    /**
     * @var string
     */
    const ONLY_ONE_DISTRIB_ALLWD = "ONLY_ONE_DISTRIB_ALLWD";

    /**
     * @var string
     */
    const ONLY_ONE_EARNING_ITEM_REQD = "ONLY_ONE_EARNING_ITEM_REQD";

    /**
     * @var string
     */
    const ONLY_ONE_LOT_NUM_ALLWD = "ONLY_ONE_LOT_NUM_ALLWD";

    /**
     * @var string
     */
    const ONLY_ONE_PREF_BIN_ALLWD = "ONLY_ONE_PREF_BIN_ALLWD";

    /**
     * @var string
     */
    const ONLY_ONE_UNIT_AS_BASE_UNIT = "ONLY_ONE_UNIT_AS_BASE_UNIT";

    /**
     * @var string
     */
    const ONLY_ONE_UPLOAD_ALLWD = "ONLY_ONE_UPLOAD_ALLWD";

    /**
     * @var string
     */
    const ONLY_ONE_WITHLD_ITEM_REQD = "ONLY_ONE_WITHLD_ITEM_REQD";

    /**
     * @var string
     */
    const OPENID_DOMAIN_IN_USE = "OPENID_DOMAIN_IN_USE";

    /**
     * @var string
     */
    const OPENID_NOT_ENABLED = "OPENID_NOT_ENABLED";

    /**
     * @var string
     */
    const OPRTN_UNAVAILBL_TO_GATEWAY = "OPRTN_UNAVAILBL_TO_GATEWAY";

    /**
     * @var string
     */
    const ORDER_DSNT_EXIST = "ORDER_DSNT_EXIST";

    /**
     * @var string
     */
    const ORD_ALREADY_APPRVD = "ORD_ALREADY_APPRVD";

    /**
     * @var string
     */
    const OTHER_PMT_AUTH_IN_PROGRESS = "OTHER_PMT_AUTH_IN_PROGRESS";

    /**
     * @var string
     */
    const OVERAGE_DISALLWD = "OVERAGE_DISALLWD";

    /**
     * @var string
     */
    const OVERLAPPING_PRDS_DISALLWD = "OVERLAPPING_PRDS_DISALLWD";

    /**
     * @var string
     */
    const OVER_FULFILL_DISALLWD = "OVER_FULFILL_DISALLWD";

    /**
     * @var string
     */
    const OVER_FULFILL_RECEIV_DISALLWD = "OVER_FULFILL_RECEIV_DISALLWD";

    /**
     * @var string
     */
    const OWNER_REQD = "OWNER_REQD";

    /**
     * @var string
     */
    const PACKAGE_WEIGHT_REQD = "PACKAGE_WEIGHT_REQD";

    /**
     * @var string
     */
    const PACKG_LEVEL_REF_DISALLWD = "PACKG_LEVEL_REF_DISALLWD";

    /**
     * @var string
     */
    const PACKG_VALUE_TOO_LARGE = "PACKG_VALUE_TOO_LARGE";

    /**
     * @var string
     */
    const PARENT_CANT_ITSELF_BE_MEMBER = "PARENT_CANT_ITSELF_BE_MEMBER";

    /**
     * @var string
     */
    const PARENT_MUST_BE_MATRIX_ITEM = "PARENT_MUST_BE_MATRIX_ITEM";

    /**
     * @var string
     */
    const PARENT_REQD = "PARENT_REQD";

    /**
     * @var string
     */
    const PARSING_ERROR = "PARSING_ERROR";

    /**
     * @var string
     */
    const PARTIAL_FULFILL_RCEIV_DISALLWD = "PARTIAL_FULFILL_RCEIV_DISALLWD";

    /**
     * @var string
     */
    const PARTNER_ACCESS_DENIED = "PARTNER_ACCESS_DENIED";

    /**
     * @var string
     */
    const PARTNER_ACCT_NOT_LINKED = "PARTNER_ACCT_NOT_LINKED";

    /**
     * @var string
     */
    const PARTNER_CODE_ALREADY_USED = "PARTNER_CODE_ALREADY_USED";

    /**
     * @var string
     */
    const PAYCHECK_ALREADY_PAID = "PAYCHECK_ALREADY_PAID";

    /**
     * @var string
     */
    const PAYCHECK_IN_USE = "PAYCHECK_IN_USE";

    /**
     * @var string
     */
    const PAYEE_REQD_FOR_PMT = "PAYEE_REQD_FOR_PMT";

    /**
     * @var string
     */
    const PAYPAL_FUND_SOURCE_REQD = "PAYPAL_FUND_SOURCE_REQD";

    /**
     * @var string
     */
    const PAYPAL_INVALID_PMT_METHOD = "PAYPAL_INVALID_PMT_METHOD";

    /**
     * @var string
     */
    const PAYPAL_PMT_NOTIFICATION = "PAYPAL_PMT_NOTIFICATION";

    /**
     * @var string
     */
    const PAYPAL_SETUP_REQD = "PAYPAL_SETUP_REQD";

    /**
     * @var string
     */
    const PAYROLL_COMMITTED = "PAYROLL_COMMITTED";

    /**
     * @var string
     */
    const PAYROLL_EXPENSE_ACCT_REQD = "PAYROLL_EXPENSE_ACCT_REQD";

    /**
     * @var string
     */
    const PAYROLL_FEATURE_DISABLED = "PAYROLL_FEATURE_DISABLED";

    /**
     * @var string
     */
    const PAYROLL_FEATURE_UNAVAILABLE = "PAYROLL_FEATURE_UNAVAILABLE";

    /**
     * @var string
     */
    const PAYROLL_FUND_ACCT_REQD = "PAYROLL_FUND_ACCT_REQD";

    /**
     * @var string
     */
    const PAYROLL_IN_PROCESS = "PAYROLL_IN_PROCESS";

    /**
     * @var string
     */
    const PAYROLL_ITEM_DELETE_DISALLWD = "PAYROLL_ITEM_DELETE_DISALLWD";

    /**
     * @var string
     */
    const PAYROLL_LIABILITY_ACCT_REQD = "PAYROLL_LIABILITY_ACCT_REQD";

    /**
     * @var string
     */
    const PAYROLL_MAINTENANCE = "PAYROLL_MAINTENANCE";

    /**
     * @var string
     */
    const PAYROLL_SETUP_REQD = "PAYROLL_SETUP_REQD";

    /**
     * @var string
     */
    const PAYROLL_UPDATE_REQD = "PAYROLL_UPDATE_REQD";

    /**
     * @var string
     */
    const PAY_HOLD_ON_SO = "PAY_HOLD_ON_SO";

    /**
     * @var string
     */
    const PERMISSION_VIOLATION = "PERMISSION_VIOLATION";

    /**
     * @var string
     */
    const PHONE_NUM_REQD = "PHONE_NUM_REQD";

    /**
     * @var string
     */
    const PIN_DEBIT_TRANS_DISALLWD = "PIN_DEBIT_TRANS_DISALLWD";

    /**
     * @var string
     */
    const PLAN_IN_USE = "PLAN_IN_USE";

    /**
     * @var string
     */
    const PLAN_OVERLAP_DISALLWD = "PLAN_OVERLAP_DISALLWD";

    /**
     * @var string
     */
    const PMT_ALREADY_APPRVD = "PMT_ALREADY_APPRVD";

    /**
     * @var string
     */
    const PMT_ALREADY_EXISTS = "PMT_ALREADY_EXISTS";

    /**
     * @var string
     */
    const PMT_ALREADY_SBMTD = "PMT_ALREADY_SBMTD";

    /**
     * @var string
     */
    const PMT_EDIT_DISALLWD = "PMT_EDIT_DISALLWD";

    /**
     * @var string
     */
    const POSITIVE_BIN_QTY_REQD = "POSITIVE_BIN_QTY_REQD";

    /**
     * @var string
     */
    const POSITIVE_QTY_REQD = "POSITIVE_QTY_REQD";

    /**
     * @var string
     */
    const POSITIVE_UNITCOST_REQD = "POSITIVE_UNITCOST_REQD";

    /**
     * @var string
     */
    const POSTING_DISCOUNT_DISALLWD = "POSTING_DISCOUNT_DISALLWD";

    /**
     * @var string
     */
    const POSTING_PRD_SETUP_REQD = "POSTING_PRD_SETUP_REQD";

    /**
     * @var string
     */
    const PRDS_DISALLWD_NAMES_NOT_UNIQUE = "PRDS_DISALLWD_NAMES_NOT_UNIQUE";

    /**
     * @var string
     */
    const PRD_SETUP_REQD = "PRD_SETUP_REQD";

    /**
     * @var string
     */
    const PREFERRED_TAX_AGENCY_REQD = "PREFERRED_TAX_AGENCY_REQD";

    /**
     * @var string
     */
    const PREF_VENDOR_COST_REQD = "PREF_VENDOR_COST_REQD";

    /**
     * @var string
     */
    const PREF_VENDOR_REQD = "PREF_VENDOR_REQD";

    /**
     * @var string
     */
    const PRIVATE_RCRD_ACCESS_DISALLWD = "PRIVATE_RCRD_ACCESS_DISALLWD";

    /**
     * @var string
     */
    const PRIVATE_STATUS_CHNG_DISALLWD = "PRIVATE_STATUS_CHNG_DISALLWD";

    /**
     * @var string
     */
    const PRODUCT_MODULE_MISMATCH = "PRODUCT_MODULE_MISMATCH";

    /**
     * @var string
     */
    const PSWD_EXPIRED = "PSWD_EXPIRED";

    /**
     * @var string
     */
    const PSWD_REQD = "PSWD_REQD";

    /**
     * @var string
     */
    const PWSDS_DONT_MATCH = "PWSDS_DONT_MATCH";

    /**
     * @var string
     */
    const QTY_EXCEEDED_QTY_BUCKETS = "QTY_EXCEEDED_QTY_BUCKETS";

    /**
     * @var string
     */
    const QTY_REQD = "QTY_REQD";

    /**
     * @var string
     */
    const RATE_REQUEST_SHPMNT_REQD = "RATE_REQUEST_SHPMNT_REQD";

    /**
     * @var string
     */
    const RATE_SRVC_UNAVAILBL = "RATE_SRVC_UNAVAILBL";

    /**
     * @var string
     */
    const RCRD_DELETED_SINCE_RETRIEVED = "RCRD_DELETED_SINCE_RETRIEVED";

    /**
     * @var string
     */
    const RCRD_DSNT_EXIST = "RCRD_DSNT_EXIST";

    /**
     * @var string
     */
    const RCRD_EDITED_SINCE_RETRIEVED = "RCRD_EDITED_SINCE_RETRIEVED";

    /**
     * @var string
     */
    const RCRD_HAS_BEEN_CHANGED = "RCRD_HAS_BEEN_CHANGED";

    /**
     * @var string
     */
    const RCRD_ID_NOT_INT = "RCRD_ID_NOT_INT";

    /**
     * @var string
     */
    const RCRD_LOCKED_BY_WF = "RCRD_LOCKED_BY_WF";

    /**
     * @var string
     */
    const RCRD_NOT_FOUND = "RCRD_NOT_FOUND";

    /**
     * @var string
     */
    const RCRD_PREVSLY_DELETED = "RCRD_PREVSLY_DELETED";

    /**
     * @var string
     */
    const RCRD_REF_RCRD_TYP_MISMATCH = "RCRD_REF_RCRD_TYP_MISMATCH";

    /**
     * @var string
     */
    const RCRD_SUB_MISMATCH_WITH_CLASS = "RCRD_SUB_MISMATCH_WITH_CLASS";

    /**
     * @var string
     */
    const RCRD_TYPE_REQD = "RCRD_TYPE_REQD";

    /**
     * @var string
     */
    const RCRD_UNEDITABLE = "RCRD_UNEDITABLE";

    /**
     * @var string
     */
    const REACHED_LIST_END = "REACHED_LIST_END";

    /**
     * @var string
     */
    const REACHED_LIST_START = "REACHED_LIST_START";

    /**
     * @var string
     */
    const RECALCING_PLAN_SCHDUL = "RECALCING_PLAN_SCHDUL";

    /**
     * @var string
     */
    const RECURSV_REF_DISALLWD = "RECURSV_REF_DISALLWD";

    /**
     * @var string
     */
    const RECUR_EVENT_DISALLWD = "RECUR_EVENT_DISALLWD";

    /**
     * @var string
     */
    const REC_TYP_REQD = "REC_TYP_REQD";

    /**
     * @var string
     */
    const REPORT_EXPIRED = "REPORT_EXPIRED";

    /**
     * @var string
     */
    const REQD_FORM_TAG_MISSING = "REQD_FORM_TAG_MISSING";

    /**
     * @var string
     */
    const REQD_LOC_FIELDS_MISSING = "REQD_LOC_FIELDS_MISSING";

    /**
     * @var string
     */
    const REQD_SUB_FIELDS_MISSING = "REQD_SUB_FIELDS_MISSING";

    /**
     * @var string
     */
    const REQUEST_PARAM_REQD = "REQUEST_PARAM_REQD";

    /**
     * @var string
     */
    const REVERSAL_DATE_WARNING = "REVERSAL_DATE_WARNING";

    /**
     * @var string
     */
    const REV_REC_DATE_REQD = "REV_REC_DATE_REQD";

    /**
     * @var string
     */
    const REV_REC_TMPLT_DATA_MISSING = "REV_REC_TMPLT_DATA_MISSING";

    /**
     * @var string
     */
    const REV_REC_UPDATE_DISALLWD = "REV_REC_UPDATE_DISALLWD";

    /**
     * @var string
     */
    const ROLE_REQD = "ROLE_REQD";

    /**
     * @var string
     */
    const ROLE_REQUIRED = "ROLE_REQUIRED";

    /**
     * @var string
     */
    const ROUNDING_DIFF_TOO_BIG = "ROUNDING_DIFF_TOO_BIG";

    /**
     * @var string
     */
    const ROUNDING_ERROR = "ROUNDING_ERROR";

    /**
     * @var string
     */
    const ROUTING_NUM_REQD = "ROUTING_NUM_REQD";

    /**
     * @var string
     */
    const SALES_DISCOUNT_ACCT_REQD = "SALES_DISCOUNT_ACCT_REQD";

    /**
     * @var string
     */
    const SAME_ACCT_TYP_REQD_FOR_PARENT = "SAME_ACCT_TYP_REQD_FOR_PARENT";

    /**
     * @var string
     */
    const SAVED_SRCH_EMAIL_ERROR = "SAVED_SRCH_EMAIL_ERROR";

    /**
     * @var string
     */
    const SCHDUL_EDIT_DISALLWD = "SCHDUL_EDIT_DISALLWD";

    /**
     * @var string
     */
    const SCHEDULED_REPORT_ERROR = "SCHEDULED_REPORT_ERROR";

    /**
     * @var string
     */
    const SEARCH_DATE_FILTER_REQD = "SEARCH_DATE_FILTER_REQD";

    /**
     * @var string
     */
    const SEARCH_ERROR = "SEARCH_ERROR";

    /**
     * @var string
     */
    const SEARCH_INTEGER_REQD = "SEARCH_INTEGER_REQD";

    /**
     * @var string
     */
    const SEARCH_TIMED_OUT = "SEARCH_TIMED_OUT";

    /**
     * @var string
     */
    const SECURE_TRANS_REQD_ON_CHECKOUT = "SECURE_TRANS_REQD_ON_CHECKOUT";

    /**
     * @var string
     */
    const SERIAL_NUM_MATCH_MULTI_ITEMS = "SERIAL_NUM_MATCH_MULTI_ITEMS";

    /**
     * @var string
     */
    const SESSION_TERMD_2ND_LOGIN_DECTD = "SESSION_TERMD_2ND_LOGIN_DECTD";

    /**
     * @var string
     */
    const SESSION_TIMED_OUT = "SESSION_TIMED_OUT";

    /**
     * @var string
     */
    const SETUP_METER_REQD = "SETUP_METER_REQD";

    /**
     * @var string
     */
    const SET_SHIPPING_PICKUP_TYP = "SET_SHIPPING_PICKUP_TYP";

    /**
     * @var string
     */
    const SHIPFROM_ADDRESS_NOT_SET = "SHIPFROM_ADDRESS_NOT_SET";

    /**
     * @var string
     */
    const SHIPMNT_INSURANCE_NOT_AVAILABLE = "SHIPMNT_INSURANCE_NOT_AVAILABLE";

    /**
     * @var string
     */
    const SHIP_ADDR_REQD = "SHIP_ADDR_REQD";

    /**
     * @var string
     */
    const SHIP_MANIFEST_ALREADY_PRCSSD = "SHIP_MANIFEST_ALREADY_PRCSSD";

    /**
     * @var string
     */
    const SHIP_MANIFEST_ERROR = "SHIP_MANIFEST_ERROR";

    /**
     * @var string
     */
    const SHIP_SETUP_REQD = "SHIP_SETUP_REQD";

    /**
     * @var string
     */
    const SHIP_TALBE_UNBALNCD = "SHIP_TALBE_UNBALNCD";

    /**
     * @var string
     */
    const SHIP_USER_ERROR = "SHIP_USER_ERROR";

    /**
     * @var string
     */
    const SINGLE_VALUE_REQD = "SINGLE_VALUE_REQD";

    /**
     * @var string
     */
    const SITEMAP_GEN_ERROR = "SITEMAP_GEN_ERROR";

    /**
     * @var string
     */
    const SITE_DOMAIN_NAME_REQD = "SITE_DOMAIN_NAME_REQD";

    /**
     * @var string
     */
    const SITE_TAG_ALREADY_EXISTS = "SITE_TAG_ALREADY_EXISTS";

    /**
     * @var string
     */
    const SO_HAS_CHILD_TRANS = "SO_HAS_CHILD_TRANS";

    /**
     * @var string
     */
    const SO_LINE_HAS_PO = "SO_LINE_HAS_PO";

    /**
     * @var string
     */
    const SRVC_UNAVAILBL_FOR_LOC = "SRVC_UNAVAILBL_FOR_LOC";

    /**
     * @var string
     */
    const SSS_AUTHOR_MUST_BE_EMPLOYEE = "SSS_AUTHOR_MUST_BE_EMPLOYEE";

    /**
     * @var string
     */
    const SSS_CONNECTION_TIME_OUT = "SSS_CONNECTION_TIME_OUT";

    /**
     * @var string
     */
    const SSS_DEBUG_DISALLWD = "SSS_DEBUG_DISALLWD";

    /**
     * @var string
     */
    const SSS_DRIP_EMAIL_RAN_OUT_OF_COUPON_CODES = "SSS_DRIP_EMAIL_RAN_OUT_OF_COUPON_CODES";

    /**
     * @var string
     */
    const SSS_DUP_DRIP_EMAIL = "SSS_DUP_DRIP_EMAIL";

    /**
     * @var string
     */
    const SSS_FILE_SIZE_EXCEEDED = "SSS_FILE_SIZE_EXCEEDED";

    /**
     * @var string
     */
    const SSS_INSTRUCTION_COUNT_EXCEEDED = "SSS_INSTRUCTION_COUNT_EXCEEDED";

    /**
     * @var string
     */
    const SSS_INVALID_ATTACH_RECORD_TYPE = "SSS_INVALID_ATTACH_RECORD_TYPE";

    /**
     * @var string
     */
    const SSS_INVALID_BCC_EMAIL = "SSS_INVALID_BCC_EMAIL";

    /**
     * @var string
     */
    const SSS_INVALID_CC_EMAIL = "SSS_INVALID_CC_EMAIL";

    /**
     * @var string
     */
    const SSS_INVALID_CMPGN_EVENT_ID = "SSS_INVALID_CMPGN_EVENT_ID";

    /**
     * @var string
     */
    const SSS_INVALID_EMAIL_TEMPLATE = "SSS_INVALID_EMAIL_TEMPLATE";

    /**
     * @var string
     */
    const SSS_INVALID_FORM_ELEMENT_NAME = "SSS_INVALID_FORM_ELEMENT_NAME";

    /**
     * @var string
     */
    const SSS_INVALID_GSO_FLTR_OPRTOR = "SSS_INVALID_GSO_FLTR_OPRTOR";

    /**
     * @var string
     */
    const SSS_INVALID_HEADER = "SSS_INVALID_HEADER";

    /**
     * @var string
     */
    const SSS_INVALID_HOST_CERT = "SSS_INVALID_HOST_CERT";

    /**
     * @var string
     */
    const SSS_INVALID_LIST_COLUMN_NAME = "SSS_INVALID_LIST_COLUMN_NAME";

    /**
     * @var string
     */
    const SSS_INVALID_LOCK_WAIT_TIME = "SSS_INVALID_LOCK_WAIT_TIME";

    /**
     * @var string
     */
    const SSS_INVALID_LOG_TYPE = "SSS_INVALID_LOG_TYPE";

    /**
     * @var string
     */
    const SSS_INVALID_PORTLET_INTERVAL = "SSS_INVALID_PORTLET_INTERVAL";

    /**
     * @var string
     */
    const SSS_INVALID_SCRIPTLET_ID = "SSS_INVALID_SCRIPTLET_ID";

    /**
     * @var string
     */
    const SSS_INVALID_SRCH_COL = "SSS_INVALID_SRCH_COL";

    /**
     * @var string
     */
    const SSS_INVALID_SRCH_COLUMN_JOIN = "SSS_INVALID_SRCH_COLUMN_JOIN";

    /**
     * @var string
     */
    const SSS_INVALID_SRCH_COLUMN_SUM = "SSS_INVALID_SRCH_COLUMN_SUM";

    /**
     * @var string
     */
    const SSS_INVALID_SRCH_FILTER = "SSS_INVALID_SRCH_FILTER";

    /**
     * @var string
     */
    const SSS_INVALID_SRCH_FILTER_JOIN = "SSS_INVALID_SRCH_FILTER_JOIN";

    /**
     * @var string
     */
    const SSS_INVALID_SRCH_OPERATOR = "SSS_INVALID_SRCH_OPERATOR";

    /**
     * @var string
     */
    const SSS_INVALID_SUBLIST_OPERATION = "SSS_INVALID_SUBLIST_OPERATION";

    /**
     * @var string
     */
    const SSS_INVALID_SUBMIT_OPTION = "SSS_INVALID_SUBMIT_OPTION";

    /**
     * @var string
     */
    const SSS_INVALID_TYPE_ARG = "SSS_INVALID_TYPE_ARG";

    /**
     * @var string
     */
    const SSS_INVALID_UI_OBJECT_TYPE = "SSS_INVALID_UI_OBJECT_TYPE";

    /**
     * @var string
     */
    const SSS_INVALID_URL = "SSS_INVALID_URL";

    /**
     * @var string
     */
    const SSS_INVALID_URL_CATEGORY = "SSS_INVALID_URL_CATEGORY";

    /**
     * @var string
     */
    const SSS_INVALID_WF_RCRD_TYPE = "SSS_INVALID_WF_RCRD_TYPE";

    /**
     * @var string
     */
    const SSS_MEMORY_USAGE_EXCEEDED = "SSS_MEMORY_USAGE_EXCEEDED";

    /**
     * @var string
     */
    const SSS_METHOD_NOT_IMPLEMENTED = "SSS_METHOD_NOT_IMPLEMENTED";

    /**
     * @var string
     */
    const SSS_MISSING_REQD_ARGUMENT = "SSS_MISSING_REQD_ARGUMENT";

    /**
     * @var string
     */
    const SSS_QUEUE_LIMIT_EXCEEDED = "SSS_QUEUE_LIMIT_EXCEEDED";

    /**
     * @var string
     */
    const SSS_RECORD_TYPE_MISMATCH = "SSS_RECORD_TYPE_MISMATCH";

    /**
     * @var string
     */
    const SSS_REQUEST_TIME_EXCEEDED = "SSS_REQUEST_TIME_EXCEEDED";

    /**
     * @var string
     */
    const SSS_SSO_CONFIG_REQD = "SSS_SSO_CONFIG_REQD";

    /**
     * @var string
     */
    const SSS_STACK_FRAME_DEPTH_EXCEEDED = "SSS_STACK_FRAME_DEPTH_EXCEEDED";

    /**
     * @var string
     */
    const SSS_TIME_LIMIT_EXCEEDED = "SSS_TIME_LIMIT_EXCEEDED";

    /**
     * @var string
     */
    const SSS_TRANSACTION_REQD = "SSS_TRANSACTION_REQD";

    /**
     * @var string
     */
    const SSS_TRANS_IN_PROGRESS = "SSS_TRANS_IN_PROGRESS";

    /**
     * @var string
     */
    const SSS_UNKNOWN_HOST = "SSS_UNKNOWN_HOST";

    /**
     * @var string
     */
    const SSS_USAGE_LIMIT_EXCEEDED = "SSS_USAGE_LIMIT_EXCEEDED";

    /**
     * @var string
     */
    const START_DATE_AFTER_END_DATE = "START_DATE_AFTER_END_DATE";

    /**
     * @var string
     */
    const START_DATE_REQD = "START_DATE_REQD";

    /**
     * @var string
     */
    const STATE_ALREADY_EXISTS = "STATE_ALREADY_EXISTS";

    /**
     * @var string
     */
    const STATE_REQD = "STATE_REQD";

    /**
     * @var string
     */
    const STATUS_ASSIGNEE_REQD = "STATUS_ASSIGNEE_REQD";

    /**
     * @var string
     */
    const STORAGE_LIMIT_EXCEEDED = "STORAGE_LIMIT_EXCEEDED";

    /**
     * @var string
     */
    const STORE_ALIAS_UNAVAILABLE = "STORE_ALIAS_UNAVAILABLE";

    /**
     * @var string
     */
    const STORE_DOMAIN_UNAVAILABLE = "STORE_DOMAIN_UNAVAILABLE";

    /**
     * @var string
     */
    const SUBITEM_REQD = "SUBITEM_REQD";

    /**
     * @var string
     */
    const SUBSIDIARY_MISMATCH = "SUBSIDIARY_MISMATCH";

    /**
     * @var string
     */
    const SUB_MISMATCH = "SUB_MISMATCH";

    /**
     * @var string
     */
    const SUB_RESTRICT_VIEW_REQD = "SUB_RESTRICT_VIEW_REQD";

    /**
     * @var string
     */
    const SUB_TAX_AGENCY_REQD = "SUB_TAX_AGENCY_REQD";

    /**
     * @var string
     */
    const SUCCESS_TRANS = "SUCCESS_TRANS";

    /**
     * @var string
     */
    const SUPRT_CNTR_LOGIN_ERROR = "SUPRT_CNTR_LOGIN_ERROR";

    /**
     * @var string
     */
    const TAGATA_ALREADY_ENDORSED = "TAGATA_ALREADY_ENDORSED";

    /**
     * @var string
     */
    const TAG_ALREADY_EXISTS = "TAG_ALREADY_EXISTS";

    /**
     * @var string
     */
    const TAG_SUBSTITUTN_ERROR = "TAG_SUBSTITUTN_ERROR";

    /**
     * @var string
     */
    const TAX_ACCT_SETUP_REQD = "TAX_ACCT_SETUP_REQD";

    /**
     * @var string
     */
    const TAX_CODES_SETUP_PROBLEM = "TAX_CODES_SETUP_PROBLEM";

    /**
     * @var string
     */
    const TAX_CODES_SETUP_REQD = "TAX_CODES_SETUP_REQD";

    /**
     * @var string
     */
    const TAX_CODE_REQD = "TAX_CODE_REQD";

    /**
     * @var string
     */
    const TAX_GROUP_SETUP_REQD = "TAX_GROUP_SETUP_REQD";

    /**
     * @var string
     */
    const TAX_PRD_REQD = "TAX_PRD_REQD";

    /**
     * @var string
     */
    const TAX_SETUP_REQD = "TAX_SETUP_REQD";

    /**
     * @var string
     */
    const TEMPLATE_NOT_FOUND = "TEMPLATE_NOT_FOUND";

    /**
     * @var string
     */
    const THIRD_PARTY_BILLING_ACCT_REQD = "THIRD_PARTY_BILLING_ACCT_REQD";

    /**
     * @var string
     */
    const TICKET_NOT_LOCATED = "TICKET_NOT_LOCATED";

    /**
     * @var string
     */
    const TIMEOUT_THE_RECORD_DOESNT_EXIST_ANYMORE = "TIMEOUT_THE_RECORD_DOESNT_EXIST_ANYMORE";

    /**
     * @var string
     */
    const TIME_ENTRY_DISALLWD = "TIME_ENTRY_DISALLWD";

    /**
     * @var string
     */
    const TOPIC_REQD = "TOPIC_REQD";

    /**
     * @var string
     */
    const TRANSACTION_DELETED = "TRANSACTION_DELETED";

    /**
     * @var string
     */
    const TRANSORD_SHIP_REC_MISMATCH = "TRANSORD_SHIP_REC_MISMATCH";

    /**
     * @var string
     */
    const TRANS_ALREADY_REFUNDED = "TRANS_ALREADY_REFUNDED";

    /**
     * @var string
     */
    const TRANS_ALREADY_SETTLED = "TRANS_ALREADY_SETTLED";

    /**
     * @var string
     */
    const TRANS_ALREADY_VOIDED = "TRANS_ALREADY_VOIDED";

    /**
     * @var string
     */
    const TRANS_AMTS_UNBALNCD = "TRANS_AMTS_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_APPLIED_AMTS_UNBALNCD = "TRANS_APPLIED_AMTS_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_CLASS_UNBALNCD = "TRANS_CLASS_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_DEPT_UNBALNCD = "TRANS_DEPT_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_DOES_NOT_EXIST = "TRANS_DOES_NOT_EXIST";

    /**
     * @var string
     */
    const TRANS_DSNT_EXIST = "TRANS_DSNT_EXIST";

    /**
     * @var string
     */
    const TRANS_EDIT_DISALLWD = "TRANS_EDIT_DISALLWD";

    /**
     * @var string
     */
    const TRANS_FORGN_CRNCY_MISMATCH = "TRANS_FORGN_CRNCY_MISMATCH";

    /**
     * @var string
     */
    const TRANS_FORGN_CUR_UNBALNCD = "TRANS_FORGN_CUR_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_IN_USE = "TRANS_IN_USE";

    /**
     * @var string
     */
    const TRANS_LINES_UNBALNCD = "TRANS_LINES_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_LINE_AND_PMT_UNBALNCD = "TRANS_LINE_AND_PMT_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_LOC_UNBALNCD = "TRANS_LOC_UNBALNCD";

    /**
     * @var string
     */
    const TRANS_NOT_CLEANED = "TRANS_NOT_CLEANED";

    /**
     * @var string
     */
    const TRANS_NOT_COMPLETED = "TRANS_NOT_COMPLETED";

    /**
     * @var string
     */
    const TRANS_PRCSSNG_ERROR = "TRANS_PRCSSNG_ERROR";

    /**
     * @var string
     */
    const TRANS_UNBALNCD = "TRANS_UNBALNCD";

    /**
     * @var string
     */
    const TRAN_DATE_REQD = "TRAN_DATE_REQD";

    /**
     * @var string
     */
    const TRAN_LINE_FX_AMT_REQD = "TRAN_LINE_FX_AMT_REQD";

    /**
     * @var string
     */
    const TRAN_LINK_FX_AMT_REQD = "TRAN_LINK_FX_AMT_REQD";

    /**
     * @var string
     */
    const TRAN_PERIOD_CLOSED = "TRAN_PERIOD_CLOSED";

    /**
     * @var string
     */
    const TRAN_PRD_CLOSED = "TRAN_PRD_CLOSED";

    /**
     * @var string
     */
    const TWO_FA_AUTH_REQD = "TWO_FA_AUTH_REQD";

    /**
     * @var string
     */
    const TWO_FA_REQD = "TWO_FA_REQD";

    /**
     * @var string
     */
    const UNABLE_TO_PRINT_CHECKS = "UNABLE_TO_PRINT_CHECKS";

    /**
     * @var string
     */
    const UNABLE_TO_PRINT_DEPOSITS = "UNABLE_TO_PRINT_DEPOSITS";

    /**
     * @var string
     */
    const UNAUTH_CAMPAIGN_RSPNS_RQST = "UNAUTH_CAMPAIGN_RSPNS_RQST";

    /**
     * @var string
     */
    const UNAUTH_UNSUBSCRIBE_RQST = "UNAUTH_UNSUBSCRIBE_RQST";

    /**
     * @var string
     */
    const UNDEFINED_ACCTNG_PRD = "UNDEFINED_ACCTNG_PRD";

    /**
     * @var string
     */
    const UNDEFINED_CSTM_FIELD = "UNDEFINED_CSTM_FIELD";

    /**
     * @var string
     */
    const UNDEFINED_TAX_PRD = "UNDEFINED_TAX_PRD";

    /**
     * @var string
     */
    const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";

    /**
     * @var string
     */
    const UNIQUE_CONTACT_NAME_REQD = "UNIQUE_CONTACT_NAME_REQD";

    /**
     * @var string
     */
    const UNIQUE_CUST_EMAIL_REQD = "UNIQUE_CUST_EMAIL_REQD";

    /**
     * @var string
     */
    const UNIQUE_CUST_ID_REQD = "UNIQUE_CUST_ID_REQD";

    /**
     * @var string
     */
    const UNIQUE_ENTITY_NAME_REQD = "UNIQUE_ENTITY_NAME_REQD";

    /**
     * @var string
     */
    const UNIQUE_GROUPID_REQD = "UNIQUE_GROUPID_REQD";

    /**
     * @var string
     */
    const UNIQUE_PARTNER_CODE_REQD = "UNIQUE_PARTNER_CODE_REQD";

    /**
     * @var string
     */
    const UNIQUE_QTY_REQD = "UNIQUE_QTY_REQD";

    /**
     * @var string
     */
    const UNIQUE_RCRD_ID_REQD = "UNIQUE_RCRD_ID_REQD";

    /**
     * @var string
     */
    const UNIQUE_SOLUTION_CODE_REQD = "UNIQUE_SOLUTION_CODE_REQD";

    /**
     * @var string
     */
    const UNITS_TYP_IN_USE = "UNITS_TYP_IN_USE";

    /**
     * @var string
     */
    const UNKNOWN_CARRIER = "UNKNOWN_CARRIER";

    /**
     * @var string
     */
    const UNKNOWN_RCRD_TYPE = "UNKNOWN_RCRD_TYPE";

    /**
     * @var string
     */
    const UNKNOWN_SCRIPT_TYP = "UNKNOWN_SCRIPT_TYP";

    /**
     * @var string
     */
    const UNKNWN_ALLOCTN_SCHDUL_FREQ_TYP = "UNKNWN_ALLOCTN_SCHDUL_FREQ_TYP";

    /**
     * @var string
     */
    const UNKNWN_EMAIL_AUTHOR = "UNKNWN_EMAIL_AUTHOR";

    /**
     * @var string
     */
    const UNKNWN_EXCHANGE_RATE = "UNKNWN_EXCHANGE_RATE";

    /**
     * @var string
     */
    const UNRECOGNIZED_METHOD = "UNRECOGNIZED_METHOD";

    /**
     * @var string
     */
    const UNSUBSCRIBE_REQD = "UNSUBSCRIBE_REQD";

    /**
     * @var string
     */
    const UNSUPRTD_DOC_TYP = "UNSUPRTD_DOC_TYP";

    /**
     * @var string
     */
    const UPDATE_DISALLWD = "UPDATE_DISALLWD";

    /**
     * @var string
     */
    const UPDATE_PRICE_AMT_REQD = "UPDATE_PRICE_AMT_REQD";

    /**
     * @var string
     */
    const UPGRADE_WS_VERSION = "UPGRADE_WS_VERSION";

    /**
     * @var string
     */
    const UPS_CANT_INTEGRATE_FULFILL = "UPS_CANT_INTEGRATE_FULFILL";

    /**
     * @var string
     */
    const UPS_CONFIG_ERROR = "UPS_CONFIG_ERROR";

    /**
     * @var string
     */
    const UPS_LICENSE_AGREEMNT_REQD = "UPS_LICENSE_AGREEMNT_REQD";

    /**
     * @var string
     */
    const UPS_ONLINE_RATE_UNAVAILBL = "UPS_ONLINE_RATE_UNAVAILBL";

    /**
     * @var string
     */
    const UPS_ONLINE_SHIP_UNAVAILBL = "UPS_ONLINE_SHIP_UNAVAILBL";

    /**
     * @var string
     */
    const UPS_REG_NUM_IN_USE = "UPS_REG_NUM_IN_USE";

    /**
     * @var string
     */
    const UPS_SETUP_REQD = "UPS_SETUP_REQD";

    /**
     * @var string
     */
    const UPS_USER_ERROR = "UPS_USER_ERROR";

    /**
     * @var string
     */
    const UPS_VOID_ERROR = "UPS_VOID_ERROR";

    /**
     * @var string
     */
    const UPS_XML_ERROR = "UPS_XML_ERROR";

    /**
     * @var string
     */
    const URL_ID_PARAM_REQD = "URL_ID_PARAM_REQD";

    /**
     * @var string
     */
    const URL_REQD = "URL_REQD";

    /**
     * @var string
     */
    const USER_CONTEXT_REQD = "USER_CONTEXT_REQD";

    /**
     * @var string
     */
    const USER_DISABLED = "USER_DISABLED";

    /**
     * @var string
     */
    const USER_ERROR = "USER_ERROR";

    /**
     * @var string
     */
    const USPS_ACCT_NUM_ALREADY_EXISTS = "USPS_ACCT_NUM_ALREADY_EXISTS";

    /**
     * @var string
     */
    const USPS_INVALID_INSURED_VALUE = "USPS_INVALID_INSURED_VALUE";

    /**
     * @var string
     */
    const USPS_INVALID_PACKAGING = "USPS_INVALID_PACKAGING";

    /**
     * @var string
     */
    const USPS_INVALID_PSWD = "USPS_INVALID_PSWD";

    /**
     * @var string
     */
    const USPS_LABEL_VOIDED = "USPS_LABEL_VOIDED";

    /**
     * @var string
     */
    const USPS_MAX_ITEM_EXCEEDED = "USPS_MAX_ITEM_EXCEEDED";

    /**
     * @var string
     */
    const USPS_ONE_PACKAGE_ALLWD = "USPS_ONE_PACKAGE_ALLWD";

    /**
     * @var string
     */
    const USPS_PASS_PHRASE_NOT_UPDATED = "USPS_PASS_PHRASE_NOT_UPDATED";

    /**
     * @var string
     */
    const USPS_REFUND_FAILED = "USPS_REFUND_FAILED";

    /**
     * @var string
     */
    const USPS_RETRY = "USPS_RETRY";

    /**
     * @var string
     */
    const USPS_VALIDATE_ADDR = "USPS_VALIDATE_ADDR";

    /**
     * @var string
     */
    const USPS_VERIFY_TRACKING_NUM = "USPS_VERIFY_TRACKING_NUM";

    /**
     * @var string
     */
    const USPS_VOID_ERROR = "USPS_VOID_ERROR";

    /**
     * @var string
     */
    const VALID_EMAIL_REQD = "VALID_EMAIL_REQD";

    /**
     * @var string
     */
    const VALID_EMAIL_REQD_FOR_LOGIN = "VALID_EMAIL_REQD_FOR_LOGIN";

    /**
     * @var string
     */
    const VALID_FIRST_NAME_REQD = "VALID_FIRST_NAME_REQD";

    /**
     * @var string
     */
    const VALID_LAST_NAME_REQD = "VALID_LAST_NAME_REQD";

    /**
     * @var string
     */
    const VALID_LINE_ITEM_REQD = "VALID_LINE_ITEM_REQD";

    /**
     * @var string
     */
    const VALID_PHONE_NUM_REQD = "VALID_PHONE_NUM_REQD";

    /**
     * @var string
     */
    const VALID_PRD_REQD = "VALID_PRD_REQD";

    /**
     * @var string
     */
    const VALID_URL_REQD = "VALID_URL_REQD";

    /**
     * @var string
     */
    const VALID_VERSION_REQD_IN_URL = "VALID_VERSION_REQD_IN_URL";

    /**
     * @var string
     */
    const VALID_WORK_PHONE_REQD = "VALID_WORK_PHONE_REQD";

    /**
     * @var string
     */
    const VALID_ZIPCODE_REQD = "VALID_ZIPCODE_REQD";

    /**
     * @var string
     */
    const VENDOR_TYPE_REQD = "VENDOR_TYPE_REQD";

    /**
     * @var string
     */
    const VERIFY_DESTNTN_ZIP_CODE = "VERIFY_DESTNTN_ZIP_CODE";

    /**
     * @var string
     */
    const VERIFY_PAYROLL_FUND_ACCT = "VERIFY_PAYROLL_FUND_ACCT";

    /**
     * @var string
     */
    const VERIFY_ZIP_CODE_SETUP = "VERIFY_ZIP_CODE_SETUP";

    /**
     * @var string
     */
    const VISA_ERROR = "VISA_ERROR";

    /**
     * @var string
     */
    const VOIDING_REVERSAL_DISALLWD = "VOIDING_REVERSAL_DISALLWD";

    /**
     * @var string
     */
    const VOID_FAILED = "VOID_FAILED";

    /**
     * @var string
     */
    const VSOE_CANT_ADD_ITEM_GROUP = "VSOE_CANT_ADD_ITEM_GROUP";

    /**
     * @var string
     */
    const VSOE_REV_REC_TMPLT_REQD = "VSOE_REV_REC_TMPLT_REQD";

    /**
     * @var string
     */
    const VSOE_TOTAL_ALLOCATION_ERROR = "VSOE_TOTAL_ALLOCATION_ERROR";

    /**
     * @var string
     */
    const VSOE_TRAN_VSOE_BUNDLE_ERROR = "VSOE_TRAN_VSOE_BUNDLE_ERROR";

    /**
     * @var string
     */
    const WARNING = "WARNING";

    /**
     * @var string
     */
    const WF_EXEC_USAGE_LIMIT_EXCEEDED = "WF_EXEC_USAGE_LIMIT_EXCEEDED";

    /**
     * @var string
     */
    const WORK_DAYS_REQD = "WORK_DAYS_REQD";

    /**
     * @var string
     */
    const WORLDPAY_ERROR = "WORLDPAY_ERROR";

    /**
     * @var string
     */
    const WRITE_OFF_ACCT_REQD = "WRITE_OFF_ACCT_REQD";

    /**
     * @var string
     */
    const WS_CONCUR_SESSION_DISALLWD = "WS_CONCUR_SESSION_DISALLWD";

    /**
     * @var string
     */
    const WS_EXCEEDED_CONCUR_USERS_ALLWD = "WS_EXCEEDED_CONCUR_USERS_ALLWD";

    /**
     * @var string
     */
    const WS_EXCEEDED_MAX_CONCUR_RQST = "WS_EXCEEDED_MAX_CONCUR_RQST";

    /**
     * @var string
     */
    const WS_FEATURE_REQD = "WS_FEATURE_REQD";

    /**
     * @var string
     */
    const WS_INVALID_SEARCH_OPERATN = "WS_INVALID_SEARCH_OPERATN";

    /**
     * @var string
     */
    const WS_LOG_IN_REQD = "WS_LOG_IN_REQD";

    /**
     * @var string
     */
    const WS_PERMISSION_REQD = "WS_PERMISSION_REQD";

    /**
     * @var string
     */
    const ZIP_FILE_CONTAINS_VIRUS = "ZIP_FILE_CONTAINS_VIRUS";
}