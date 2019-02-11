<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core\Types;

/**
 * SearchDate
 */
class SearchDate {

    static $paramtypesmap = array(
    );

    /**
     * @var string
     */
    const fiscalHalfBeforeLast = "fiscalHalfBeforeLast";

    /**
     * @var string
     */
    const fiscalHalfBeforeLastToDate = "fiscalHalfBeforeLastToDate";

    /**
     * @var string
     */
    const fiscalQuarterBeforeLast = "fiscalQuarterBeforeLast";

    /**
     * @var string
     */
    const fiscalQuarterBeforeLastToDate = "fiscalQuarterBeforeLastToDate";

    /**
     * @var string
     */
    const fiscalYearBeforeLast = "fiscalYearBeforeLast";

    /**
     * @var string
     */
    const fiscalYearBeforeLastToDate = "fiscalYearBeforeLastToDate";

    /**
     * @var string
     */
    const fiveDaysAgo = "fiveDaysAgo";

    /**
     * @var string
     */
    const fiveDaysFromNow = "fiveDaysFromNow";

    /**
     * @var string
     */
    const fourDaysAgo = "fourDaysAgo";

    /**
     * @var string
     */
    const fourDaysFromNow = "fourDaysFromNow";

    /**
     * @var string
     */
    const fourWeeksStartingThisWeek = "fourWeeksStartingThisWeek";

    /**
     * @var string
     */
    const lastBusinessWeek = "lastBusinessWeek";

    /**
     * @var string
     */
    const lastFiscalHalf = "lastFiscalHalf";

    /**
     * @var string
     */
    const lastFiscalHalfOneFiscalYearAgo = "lastFiscalHalfOneFiscalYearAgo";

    /**
     * @var string
     */
    const lastFiscalHalfToDate = "lastFiscalHalfToDate";

    /**
     * @var string
     */
    const lastFiscalQuarter = "lastFiscalQuarter";

    /**
     * @var string
     */
    const lastFiscalQuarterOneFiscalYearAgo = "lastFiscalQuarterOneFiscalYearAgo";

    /**
     * @var string
     */
    const lastFiscalQuarterToDate = "lastFiscalQuarterToDate";

    /**
     * @var string
     */
    const lastFiscalQuarterTwoFiscalYearsAgo = "lastFiscalQuarterTwoFiscalYearsAgo";

    /**
     * @var string
     */
    const lastFiscalYear = "lastFiscalYear";

    /**
     * @var string
     */
    const lastFiscalYearToDate = "lastFiscalYearToDate";

    /**
     * @var string
     */
    const lastMonth = "lastMonth";

    /**
     * @var string
     */
    const lastMonthOneFiscalQuarterAgo = "lastMonthOneFiscalQuarterAgo";

    /**
     * @var string
     */
    const lastMonthOneFiscalYearAgo = "lastMonthOneFiscalYearAgo";

    /**
     * @var string
     */
    const lastMonthToDate = "lastMonthToDate";

    /**
     * @var string
     */
    const lastMonthTwoFiscalQuartersAgo = "lastMonthTwoFiscalQuartersAgo";

    /**
     * @var string
     */
    const lastMonthTwoFiscalYearsAgo = "lastMonthTwoFiscalYearsAgo";

    /**
     * @var string
     */
    const lastRollingHalf = "lastRollingHalf";

    /**
     * @var string
     */
    const lastRollingQuarter = "lastRollingQuarter";

    /**
     * @var string
     */
    const lastRollingYear = "lastRollingYear";

    /**
     * @var string
     */
    const lastWeek = "lastWeek";

    /**
     * @var string
     */
    const lastWeekToDate = "lastWeekToDate";

    /**
     * @var string
     */
    const monthAfterNext = "monthAfterNext";

    /**
     * @var string
     */
    const monthAfterNextToDate = "monthAfterNextToDate";

    /**
     * @var string
     */
    const monthBeforeLast = "monthBeforeLast";

    /**
     * @var string
     */
    const monthBeforeLastToDate = "monthBeforeLastToDate";

    /**
     * @var string
     */
    const nextBusinessWeek = "nextBusinessWeek";

    /**
     * @var string
     */
    const nextFiscalHalf = "nextFiscalHalf";

    /**
     * @var string
     */
    const nextFiscalQuarter = "nextFiscalQuarter";

    /**
     * @var string
     */
    const nextFiscalYear = "nextFiscalYear";

    /**
     * @var string
     */
    const nextFourWeeks = "nextFourWeeks";

    /**
     * @var string
     */
    const nextMonth = "nextMonth";

    /**
     * @var string
     */
    const nextOneHalf = "nextOneHalf";

    /**
     * @var string
     */
    const nextOneMonth = "nextOneMonth";

    /**
     * @var string
     */
    const nextOneQuarter = "nextOneQuarter";

    /**
     * @var string
     */
    const nextOneWeek = "nextOneWeek";

    /**
     * @var string
     */
    const nextOneYear = "nextOneYear";

    /**
     * @var string
     */
    const nextWeek = "nextWeek";

    /**
     * @var string
     */
    const ninetyDaysAgo = "ninetyDaysAgo";

    /**
     * @var string
     */
    const ninetyDaysFromNow = "ninetyDaysFromNow";

    /**
     * @var string
     */
    const oneYearBeforeLast = "oneYearBeforeLast";

    /**
     * @var string
     */
    const previousFiscalQuartersLastFiscalYear = "previousFiscalQuartersLastFiscalYear";

    /**
     * @var string
     */
    const previousFiscalQuartersThisFiscalYear = "previousFiscalQuartersThisFiscalYear";

    /**
     * @var string
     */
    const previousMonthsLastFiscalHalf = "previousMonthsLastFiscalHalf";

    /**
     * @var string
     */
    const previousMonthsLastFiscalQuarter = "previousMonthsLastFiscalQuarter";

    /**
     * @var string
     */
    const previousMonthsLastFiscalYear = "previousMonthsLastFiscalYear";

    /**
     * @var string
     */
    const previousMonthsSameFiscalHalfLastFiscalYear = "previousMonthsSameFiscalHalfLastFiscalYear";

    /**
     * @var string
     */
    const previousMonthsSameFiscalQuarterLastFiscalYear = "previousMonthsSameFiscalQuarterLastFiscalYear";

    /**
     * @var string
     */
    const previousMonthsThisFiscalHalf = "previousMonthsThisFiscalHalf";

    /**
     * @var string
     */
    const previousMonthsThisFiscalQuarter = "previousMonthsThisFiscalQuarter";

    /**
     * @var string
     */
    const previousMonthsThisFiscalYear = "previousMonthsThisFiscalYear";

    /**
     * @var string
     */
    const previousOneDay = "previousOneDay";

    /**
     * @var string
     */
    const previousOneHalf = "previousOneHalf";

    /**
     * @var string
     */
    const previousOneMonth = "previousOneMonth";

    /**
     * @var string
     */
    const previousOneQuarter = "previousOneQuarter";

    /**
     * @var string
     */
    const previousOneWeek = "previousOneWeek";

    /**
     * @var string
     */
    const previousOneYear = "previousOneYear";

    /**
     * @var string
     */
    const previousRollingHalf = "previousRollingHalf";

    /**
     * @var string
     */
    const previousRollingQuarter = "previousRollingQuarter";

    /**
     * @var string
     */
    const previousRollingYear = "previousRollingYear";

    /**
     * @var string
     */
    const sameDayFiscalQuarterBeforeLast = "sameDayFiscalQuarterBeforeLast";

    /**
     * @var string
     */
    const sameDayFiscalYearBeforeLast = "sameDayFiscalYearBeforeLast";

    /**
     * @var string
     */
    const sameDayLastFiscalQuarter = "sameDayLastFiscalQuarter";

    /**
     * @var string
     */
    const sameDayLastFiscalYear = "sameDayLastFiscalYear";

    /**
     * @var string
     */
    const sameDayLastMonth = "sameDayLastMonth";

    /**
     * @var string
     */
    const sameDayLastWeek = "sameDayLastWeek";

    /**
     * @var string
     */
    const sameDayMonthBeforeLast = "sameDayMonthBeforeLast";

    /**
     * @var string
     */
    const sameDayWeekBeforeLast = "sameDayWeekBeforeLast";

    /**
     * @var string
     */
    const sameFiscalHalfLastFiscalYear = "sameFiscalHalfLastFiscalYear";

    /**
     * @var string
     */
    const sameFiscalHalfLastFiscalYearToDate = "sameFiscalHalfLastFiscalYearToDate";

    /**
     * @var string
     */
    const sameFiscalQuarterFiscalYearBeforeLast = "sameFiscalQuarterFiscalYearBeforeLast";

    /**
     * @var string
     */
    const sameFiscalQuarterLastFiscalYear = "sameFiscalQuarterLastFiscalYear";

    /**
     * @var string
     */
    const sameFiscalQuarterLastFiscalYearToDate = "sameFiscalQuarterLastFiscalYearToDate";

    /**
     * @var string
     */
    const sameMonthFiscalQuarterBeforeLast = "sameMonthFiscalQuarterBeforeLast";

    /**
     * @var string
     */
    const sameMonthFiscalYearBeforeLast = "sameMonthFiscalYearBeforeLast";

    /**
     * @var string
     */
    const sameMonthLastFiscalQuarter = "sameMonthLastFiscalQuarter";

    /**
     * @var string
     */
    const sameMonthLastFiscalQuarterToDate = "sameMonthLastFiscalQuarterToDate";

    /**
     * @var string
     */
    const sameMonthLastFiscalYear = "sameMonthLastFiscalYear";

    /**
     * @var string
     */
    const sameMonthLastFiscalYearToDate = "sameMonthLastFiscalYearToDate";

    /**
     * @var string
     */
    const sameWeekFiscalYearBeforeLast = "sameWeekFiscalYearBeforeLast";

    /**
     * @var string
     */
    const sameWeekLastFiscalYear = "sameWeekLastFiscalYear";

    /**
     * @var string
     */
    const sixtyDaysAgo = "sixtyDaysAgo";

    /**
     * @var string
     */
    const sixtyDaysFromNow = "sixtyDaysFromNow";

    /**
     * @var string
     */
    const startOfFiscalHalfBeforeLast = "startOfFiscalHalfBeforeLast";

    /**
     * @var string
     */
    const startOfFiscalQuarterBeforeLast = "startOfFiscalQuarterBeforeLast";

    /**
     * @var string
     */
    const startOfFiscalYearBeforeLast = "startOfFiscalYearBeforeLast";

    /**
     * @var string
     */
    const startOfLastBusinessWeek = "startOfLastBusinessWeek";

    /**
     * @var string
     */
    const startOfLastFiscalHalf = "startOfLastFiscalHalf";

    /**
     * @var string
     */
    const startOfLastFiscalHalfOneFiscalYearAgo = "startOfLastFiscalHalfOneFiscalYearAgo";

    /**
     * @var string
     */
    const startOfLastFiscalQuarter = "startOfLastFiscalQuarter";

    /**
     * @var string
     */
    const startOfLastFiscalQuarterOneFiscalYearAgo = "startOfLastFiscalQuarterOneFiscalYearAgo";

    /**
     * @var string
     */
    const startOfLastFiscalYear = "startOfLastFiscalYear";

    /**
     * @var string
     */
    const startOfLastMonth = "startOfLastMonth";

    /**
     * @var string
     */
    const startOfLastMonthOneFiscalQuarterAgo = "startOfLastMonthOneFiscalQuarterAgo";

    /**
     * @var string
     */
    const startOfLastMonthOneFiscalYearAgo = "startOfLastMonthOneFiscalYearAgo";

    /**
     * @var string
     */
    const startOfLastRollingHalf = "startOfLastRollingHalf";

    /**
     * @var string
     */
    const startOfLastRollingQuarter = "startOfLastRollingQuarter";

    /**
     * @var string
     */
    const startOfLastRollingYear = "startOfLastRollingYear";

    /**
     * @var string
     */
    const startOfLastWeek = "startOfLastWeek";

    /**
     * @var string
     */
    const startOfMonthBeforeLast = "startOfMonthBeforeLast";

    /**
     * @var string
     */
    const startOfNextBusinessWeek = "startOfNextBusinessWeek";

    /**
     * @var string
     */
    const startOfNextFiscalHalf = "startOfNextFiscalHalf";

    /**
     * @var string
     */
    const startOfNextFiscalQuarter = "startOfNextFiscalQuarter";

    /**
     * @var string
     */
    const startOfNextFiscalYear = "startOfNextFiscalYear";

    /**
     * @var string
     */
    const startOfNextMonth = "startOfNextMonth";

    /**
     * @var string
     */
    const startOfNextWeek = "startOfNextWeek";

    /**
     * @var string
     */
    const startOfPreviousRollingHalf = "startOfPreviousRollingHalf";

    /**
     * @var string
     */
    const startOfPreviousRollingQuarter = "startOfPreviousRollingQuarter";

    /**
     * @var string
     */
    const startOfPreviousRollingYear = "startOfPreviousRollingYear";

    /**
     * @var string
     */
    const startOfSameFiscalHalfLastFiscalYear = "startOfSameFiscalHalfLastFiscalYear";

    /**
     * @var string
     */
    const startOfSameFiscalQuarterLastFiscalYear = "startOfSameFiscalQuarterLastFiscalYear";

    /**
     * @var string
     */
    const startOfSameMonthLastFiscalQuarter = "startOfSameMonthLastFiscalQuarter";

    /**
     * @var string
     */
    const startOfSameMonthLastFiscalYear = "startOfSameMonthLastFiscalYear";

    /**
     * @var string
     */
    const startOfThisBusinessWeek = "startOfThisBusinessWeek";

    /**
     * @var string
     */
    const startOfThisFiscalHalf = "startOfThisFiscalHalf";

    /**
     * @var string
     */
    const startOfThisFiscalQuarter = "startOfThisFiscalQuarter";

    /**
     * @var string
     */
    const startOfThisFiscalYear = "startOfThisFiscalYear";

    /**
     * @var string
     */
    const startOfThisMonth = "startOfThisMonth";

    /**
     * @var string
     */
    const startOfThisWeek = "startOfThisWeek";

    /**
     * @var string
     */
    const startOfThisYear = "startOfThisYear";

    /**
     * @var string
     */
    const startOfWeekBeforeLast = "startOfWeekBeforeLast";

    /**
     * @var string
     */
    const tenDaysAgo = "tenDaysAgo";

    /**
     * @var string
     */
    const tenDaysFromNow = "tenDaysFromNow";

    /**
     * @var string
     */
    const thirtyDaysAgo = "thirtyDaysAgo";

    /**
     * @var string
     */
    const thirtyDaysFromNow = "thirtyDaysFromNow";

    /**
     * @var string
     */
    const thisBusinessWeek = "thisBusinessWeek";

    /**
     * @var string
     */
    const thisFiscalHalf = "thisFiscalHalf";

    /**
     * @var string
     */
    const thisFiscalHalfToDate = "thisFiscalHalfToDate";

    /**
     * @var string
     */
    const thisFiscalQuarter = "thisFiscalQuarter";

    /**
     * @var string
     */
    const thisFiscalQuarterToDate = "thisFiscalQuarterToDate";

    /**
     * @var string
     */
    const thisFiscalYear = "thisFiscalYear";

    /**
     * @var string
     */
    const thisFiscalYearToDate = "thisFiscalYearToDate";

    /**
     * @var string
     */
    const thisMonth = "thisMonth";

    /**
     * @var string
     */
    const thisMonthToDate = "thisMonthToDate";

    /**
     * @var string
     */
    const thisRollingHalf = "thisRollingHalf";

    /**
     * @var string
     */
    const thisRollingQuarter = "thisRollingQuarter";

    /**
     * @var string
     */
    const thisRollingYear = "thisRollingYear";

    /**
     * @var string
     */
    const thisWeek = "thisWeek";

    /**
     * @var string
     */
    const thisWeekToDate = "thisWeekToDate";

    /**
     * @var string
     */
    const thisYear = "thisYear";

    /**
     * @var string
     */
    const threeDaysAgo = "threeDaysAgo";

    /**
     * @var string
     */
    const threeDaysFromNow = "threeDaysFromNow";

    /**
     * @var string
     */
    const threeFiscalQuartersAgo = "threeFiscalQuartersAgo";

    /**
     * @var string
     */
    const threeFiscalQuartersAgoToDate = "threeFiscalQuartersAgoToDate";

    /**
     * @var string
     */
    const threeFiscalYearsAgo = "threeFiscalYearsAgo";

    /**
     * @var string
     */
    const threeFiscalYearsAgoToDate = "threeFiscalYearsAgoToDate";

    /**
     * @var string
     */
    const threeMonthsAgo = "threeMonthsAgo";

    /**
     * @var string
     */
    const threeMonthsAgoToDate = "threeMonthsAgoToDate";

    /**
     * @var string
     */
    const today = "today";

    /**
     * @var string
     */
    const tomorrow = "tomorrow";

    /**
     * @var string
     */
    const twoDaysAgo = "twoDaysAgo";

    /**
     * @var string
     */
    const twoDaysFromNow = "twoDaysFromNow";

    /**
     * @var string
     */
    const weekAfterNext = "weekAfterNext";

    /**
     * @var string
     */
    const weekAfterNextToDate = "weekAfterNextToDate";

    /**
     * @var string
     */
    const weekBeforeLast = "weekBeforeLast";

    /**
     * @var string
     */
    const weekBeforeLastToDate = "weekBeforeLastToDate";

    /**
     * @var string
     */
    const yesterday = "yesterday";
}