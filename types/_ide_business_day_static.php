<?php

namespace Carbon
{
    class Carbon
    {
        /**
         * @see \Cmixin\BusinessDay::addBusinessDays
         *
         * Add a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::addBusinessDay
         *
         * Add one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::diffInBusinessDays
         *
         * Returns the difference between 2 dates in business days.
         *
         * @param \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface $other other date
         *
         * @return int
         */
        public static function diffInBusinessDays($other = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:144
        }

        /**
         * @see \Cmixin\BusinessDay::getBusinessDaysInMonth
         *
         * Get the number of business days in the current month.
         *
         * @return int
         */
        public static function getBusinessDaysInMonth($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:168
        }

        /**
         * @see \Cmixin\BusinessDay::getMonthBusinessDays
         *
         * Get list of date objects for each business day in the current month.
         *
         * @return array
         */
        public static function getMonthBusinessDays($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::setBusinessDayChecker
         *
         * Checks the date to see if it is a business day (neither a weekend day nor a holiday).
         *
         * @param callable|null $checkCallback
         *
         * @return $this|null
         */
        public static function setBusinessDayChecker(?callable $checkCallback = null)
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:36
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::isBusinessDay
         *
         * Checks the date to see if it is a business day (extra workday or neither a weekend day nor a holiday).
         *
         * @return bool
         */
        public static function isBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:59
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::nextBusinessDay
         *
         * Sets the date to the next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function nextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrNextBusinessDay
         *
         * Sets the date to the current or next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrNextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::previousBusinessDay
         *
         * Sets the date to the previous business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function previousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrPreviousBusinessDay
         *
         * Sets the date to the current or previous business day.
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrPreviousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setObservedHolidaysZone
         *
         * Set the selected zone for observed holidays. So next observe methods will be saved and considered in this
         * given custom zone.
         *
         * @param string $zone
         *
         * @return $this|null
         */
        public static function setObservedHolidaysZone($zone, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:40
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObservedHolidaysZone
         *
         * Get the selected zone for observed holidays.
         *
         * @return string|null
         */
        public static function getObservedHolidaysZone()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:61
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setHolidayObserveStatus
         *
         * Set a holiday as observed/unobserved in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         * @param bool   $observed  observed state
         *
         * @return $this|null
         */
        public static function setHolidayObserveStatus($holidayId, $observed, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:84
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObserveHolidayMethod
         *
         * Set a holiday as observed/unobserved in the selected zone (can take array of holidays).
         *
         * @param string|array $holidayId ID key of the holiday
         * @param bool         $observed  observed state
         *
         * @return $this|null
         */
        public static function getObserveHolidayMethod($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHoliday
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function observeHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHoliday
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function unobserveHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHolidays
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function observeHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHolidays
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function unobserveHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function observeAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function unobserveAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::checkObservedHoliday
         *
         * Check if a given holiday ID is observed in the selected zone.
         *
         * @param string|false|null $holidayId
         *
         * @return bool
         */
        public static function checkObservedHoliday($holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:254
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::isObservedHoliday
         *
         * Checks the date to see if it is a holiday observed in the selected zone.
         *
         * @param string $holidayId holiday ID to check (current date used instead if omitted)
         *
         * @return bool
         */
        public static function isObservedHoliday($holidayId = null, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:286
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setHolidayGetter
         *
         * Set the strategy to get the holiday ID from a date object.
         *
         * @param callable|null $holidayGetter
         *
         * @return $this|null
         */
        public static function setHolidayGetter(callable $holidayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setExtraWorkdayGetter
         *
         * Set the strategy to get the extra workday ID from a date object.
         *
         * @param callable|null $workdayGetter
         *
         * @return $this|null
         */
        public static function setExtraWorkdayGetter(callable $workdayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:82
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getDBDayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getDBDayId(string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:103
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getHolidayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:138
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isHoliday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isHoliday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:166
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getExtraWorkdayId
         *
         * Get the identifier of the current special workday or false if it's not a special workday.
         *
         * @return string|false
         */
        public static function getExtraWorkdayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isExtraWorkday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isExtraWorkday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:216
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayNamesDictionary
         *
         * Get the holidays in the given language.
         *
         * @param string $locale language
         *
         * @return array
         */
        public static function getHolidayNamesDictionary($locale)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayName
         *
         * Get the name of the current holiday (using the locale given in parameter or the current date locale)
         * or false if it's not a holiday.
         *
         * @param string $locale language ("en" by default)
         *
         * @return string|false
         */
        public static function getHolidayName($date = null, $locale = null)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:280
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidays
         *
         * Get the holidays dates for a given year (current year if no parameter given).
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return array
         */
        public static function getYearHolidays($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:26
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidaysNextFunction
         *
         * Get a next() callback to call to iterate over holidays of a year.
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return callable
         */
        public static function getYearHolidaysNextFunction($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::standardizeHolidaysRegion
         *
         * Return a standardized region name.
         *
         * @param string $region
         *
         * @return string
         */
        public static function standardizeHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:45
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysAvailableRegions
         *
         * Get the current holidays region.
         *
         * @return array
         */
        public static function getHolidaysAvailableRegions()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:66
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidaysRegion
         *
         * Set the holidays region (see src/Cmixin/Holidays for examples).
         *
         * @param string $region
         */
        public static function setHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:94
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysRegion
         *
         * Get the current holidays region.
         *
         * @return null|string
         */
        public static function getHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:143
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getBDDaysList
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getBDDaysList(string $list, $region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:164
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getHolidays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:197
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setHolidays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:217
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getExtraWorkdays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getExtraWorkdays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setExtraWorkdays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setExtraWorkdays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:261
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::resetHolidays
         *
         * Reset the holidays list.
         */
        public static function resetHolidays()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:281
        }

        public static function initializeHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:309
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushToBDList
         *
         * Push a day into a given list list of a region.
         *
         * @param string          $list   List ID
         * @param string          $region region where the holiday is observed
         * @param string|\Closure $day    date or closure that get the year as parameter and returns the date
         * @param string          $dayId  optional day ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushToBDList(string $list, $region, $day, $dayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:333
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushHoliday
         *
         * Push a holiday to the holidays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushHoliday($region, $holiday, $holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:363
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushWorkday
         *
         * Push a workday to the workdays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional workday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushWorkday($region, $workday, $workdayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:388
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidayName
         *
         * Set/change the name of holiday by ID for a given language (or a list of languages).
         *
         * @param string       $holidayKey holiday ID (identifier key)
         * @param string|array $language   language 2-chars code (or an array with languages codes as keys and new names for each language as value).
         * @param string       $name       new name (ignored if $language is an array)
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function setHolidayName($holidayKey = null, $language = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:413
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHoliday
         *
         * Add a holiday to the holidays list of a region and optionally init its ID, name and observed state.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         * @param string          $name      optional name
         * @param bool            $observed  optional observed state
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addHoliday($region, $holiday, $holidayId = null, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:452
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addExtraWorkday
         *
         * Add a workday to the workdays list of a region and optionally init its ID and name.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional holiday ID
         * @param string          $name      optional name
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addExtraWorkday($region, $workday, $workdayId = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:494
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::unpackHoliday
         *
         * Unpack a holiday array definition.
         *
         * @param array  &$holiday
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function unpackHoliday($holiday, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:522
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::checkHoliday
         *
         * Check a holiday definition and unpack it if it's an array.
         *
         * @param array  &$holiday
         * @param string $holidayId
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function checkHoliday($holiday, $holidayId, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:562
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHolidays
         *
         * Add a holiday to the holidays list of a region and optionally init their IDs, names and observed states (if provided as array-definitions).
         *
         * @param string        $region
         * @param iterable|null $holidays
         * @param iterable|null $workingDays
         */
        public static function addHolidays(string $region, ?iterable $holidays = null, ?iterable $workingDays = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:595
        }

        public static function enable()
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:16
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::isDateTimeInstance
         *
         * Return true if the given value is a DateTime or DateTimeInterface.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function isDateTimeInstance($value)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:49
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::swapDateTimeParam
         *
         * Store a first variable as Carbon instance into the second variable if the first one is a date.
         *
         * @param mixed $target       Target variable that will be replaced by the first one if it's a date
         * @param mixed $date         Variable to check if it's a date (DateTime or DateTimeInterface)
         * @param mixed $defaultValue Value to store in the first variable if it's a date
         *
         * @return array the new pair of variables
         */
        public static function swapDateTimeParam($target, $date, $defaultValue)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:70
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayDataById
         *
         * Get stored data set for the a given holiday ID.
         *
         * @return array|null
         */
        public static function getHolidayDataById(string $id)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:27
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayDataById
         *
         * Set stored data set for the a given holiday ID.
         *
         * @return $this|null
         */
        public static function setHolidayDataById(string $id, array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:46
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayData
         *
         * Get stored data set for the current holiday or null if it's not a holiday.
         *
         * @return array|null
         */
        public static function getHolidayData()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:67
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayData
         *
         * Set stored data set for the current holiday, does nothing if it's not a holiday.
         *
         * @return $this|null
         */
        public static function setHolidayData(array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:92
        }
    }
}

namespace Carbon
{
    class CarbonImmutable
    {
        /**
         * @see \Cmixin\BusinessDay::addBusinessDays
         *
         * Add a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::addBusinessDay
         *
         * Add one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::diffInBusinessDays
         *
         * Returns the difference between 2 dates in business days.
         *
         * @param \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface $other other date
         *
         * @return int
         */
        public static function diffInBusinessDays($other = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:144
        }

        /**
         * @see \Cmixin\BusinessDay::getBusinessDaysInMonth
         *
         * Get the number of business days in the current month.
         *
         * @return int
         */
        public static function getBusinessDaysInMonth($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:168
        }

        /**
         * @see \Cmixin\BusinessDay::getMonthBusinessDays
         *
         * Get list of date objects for each business day in the current month.
         *
         * @return array
         */
        public static function getMonthBusinessDays($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::setBusinessDayChecker
         *
         * Checks the date to see if it is a business day (neither a weekend day nor a holiday).
         *
         * @param callable|null $checkCallback
         *
         * @return $this|null
         */
        public static function setBusinessDayChecker(?callable $checkCallback = null)
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:36
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::isBusinessDay
         *
         * Checks the date to see if it is a business day (extra workday or neither a weekend day nor a holiday).
         *
         * @return bool
         */
        public static function isBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:59
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::nextBusinessDay
         *
         * Sets the date to the next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function nextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrNextBusinessDay
         *
         * Sets the date to the current or next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrNextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::previousBusinessDay
         *
         * Sets the date to the previous business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function previousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrPreviousBusinessDay
         *
         * Sets the date to the current or previous business day.
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrPreviousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setObservedHolidaysZone
         *
         * Set the selected zone for observed holidays. So next observe methods will be saved and considered in this
         * given custom zone.
         *
         * @param string $zone
         *
         * @return $this|null
         */
        public static function setObservedHolidaysZone($zone, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:40
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObservedHolidaysZone
         *
         * Get the selected zone for observed holidays.
         *
         * @return string|null
         */
        public static function getObservedHolidaysZone()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:61
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setHolidayObserveStatus
         *
         * Set a holiday as observed/unobserved in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         * @param bool   $observed  observed state
         *
         * @return $this|null
         */
        public static function setHolidayObserveStatus($holidayId, $observed, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:84
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObserveHolidayMethod
         *
         * Set a holiday as observed/unobserved in the selected zone (can take array of holidays).
         *
         * @param string|array $holidayId ID key of the holiday
         * @param bool         $observed  observed state
         *
         * @return $this|null
         */
        public static function getObserveHolidayMethod($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHoliday
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function observeHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHoliday
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function unobserveHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHolidays
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function observeHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHolidays
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function unobserveHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function observeAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function unobserveAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::checkObservedHoliday
         *
         * Check if a given holiday ID is observed in the selected zone.
         *
         * @param string|false|null $holidayId
         *
         * @return bool
         */
        public static function checkObservedHoliday($holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:254
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::isObservedHoliday
         *
         * Checks the date to see if it is a holiday observed in the selected zone.
         *
         * @param string $holidayId holiday ID to check (current date used instead if omitted)
         *
         * @return bool
         */
        public static function isObservedHoliday($holidayId = null, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:286
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setHolidayGetter
         *
         * Set the strategy to get the holiday ID from a date object.
         *
         * @param callable|null $holidayGetter
         *
         * @return $this|null
         */
        public static function setHolidayGetter(callable $holidayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setExtraWorkdayGetter
         *
         * Set the strategy to get the extra workday ID from a date object.
         *
         * @param callable|null $workdayGetter
         *
         * @return $this|null
         */
        public static function setExtraWorkdayGetter(callable $workdayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:82
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getDBDayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getDBDayId(string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:103
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getHolidayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:138
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isHoliday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isHoliday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:166
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getExtraWorkdayId
         *
         * Get the identifier of the current special workday or false if it's not a special workday.
         *
         * @return string|false
         */
        public static function getExtraWorkdayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isExtraWorkday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isExtraWorkday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:216
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayNamesDictionary
         *
         * Get the holidays in the given language.
         *
         * @param string $locale language
         *
         * @return array
         */
        public static function getHolidayNamesDictionary($locale)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayName
         *
         * Get the name of the current holiday (using the locale given in parameter or the current date locale)
         * or false if it's not a holiday.
         *
         * @param string $locale language ("en" by default)
         *
         * @return string|false
         */
        public static function getHolidayName($date = null, $locale = null)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:280
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidays
         *
         * Get the holidays dates for a given year (current year if no parameter given).
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return array
         */
        public static function getYearHolidays($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:26
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidaysNextFunction
         *
         * Get a next() callback to call to iterate over holidays of a year.
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return callable
         */
        public static function getYearHolidaysNextFunction($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::standardizeHolidaysRegion
         *
         * Return a standardized region name.
         *
         * @param string $region
         *
         * @return string
         */
        public static function standardizeHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:45
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysAvailableRegions
         *
         * Get the current holidays region.
         *
         * @return array
         */
        public static function getHolidaysAvailableRegions()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:66
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidaysRegion
         *
         * Set the holidays region (see src/Cmixin/Holidays for examples).
         *
         * @param string $region
         */
        public static function setHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:94
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysRegion
         *
         * Get the current holidays region.
         *
         * @return null|string
         */
        public static function getHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:143
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getBDDaysList
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getBDDaysList(string $list, $region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:164
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getHolidays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:197
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setHolidays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:217
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getExtraWorkdays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getExtraWorkdays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setExtraWorkdays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setExtraWorkdays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:261
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::resetHolidays
         *
         * Reset the holidays list.
         */
        public static function resetHolidays()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:281
        }

        public static function initializeHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:309
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushToBDList
         *
         * Push a day into a given list list of a region.
         *
         * @param string          $list   List ID
         * @param string          $region region where the holiday is observed
         * @param string|\Closure $day    date or closure that get the year as parameter and returns the date
         * @param string          $dayId  optional day ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushToBDList(string $list, $region, $day, $dayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:333
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushHoliday
         *
         * Push a holiday to the holidays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushHoliday($region, $holiday, $holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:363
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushWorkday
         *
         * Push a workday to the workdays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional workday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushWorkday($region, $workday, $workdayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:388
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidayName
         *
         * Set/change the name of holiday by ID for a given language (or a list of languages).
         *
         * @param string       $holidayKey holiday ID (identifier key)
         * @param string|array $language   language 2-chars code (or an array with languages codes as keys and new names for each language as value).
         * @param string       $name       new name (ignored if $language is an array)
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function setHolidayName($holidayKey = null, $language = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:413
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHoliday
         *
         * Add a holiday to the holidays list of a region and optionally init its ID, name and observed state.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         * @param string          $name      optional name
         * @param bool            $observed  optional observed state
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addHoliday($region, $holiday, $holidayId = null, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:452
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addExtraWorkday
         *
         * Add a workday to the workdays list of a region and optionally init its ID and name.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional holiday ID
         * @param string          $name      optional name
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addExtraWorkday($region, $workday, $workdayId = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:494
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::unpackHoliday
         *
         * Unpack a holiday array definition.
         *
         * @param array  &$holiday
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function unpackHoliday($holiday, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:522
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::checkHoliday
         *
         * Check a holiday definition and unpack it if it's an array.
         *
         * @param array  &$holiday
         * @param string $holidayId
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function checkHoliday($holiday, $holidayId, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:562
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHolidays
         *
         * Add a holiday to the holidays list of a region and optionally init their IDs, names and observed states (if provided as array-definitions).
         *
         * @param string        $region
         * @param iterable|null $holidays
         * @param iterable|null $workingDays
         */
        public static function addHolidays(string $region, ?iterable $holidays = null, ?iterable $workingDays = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:595
        }

        public static function enable()
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:16
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::isDateTimeInstance
         *
         * Return true if the given value is a DateTime or DateTimeInterface.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function isDateTimeInstance($value)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:49
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::swapDateTimeParam
         *
         * Store a first variable as Carbon instance into the second variable if the first one is a date.
         *
         * @param mixed $target       Target variable that will be replaced by the first one if it's a date
         * @param mixed $date         Variable to check if it's a date (DateTime or DateTimeInterface)
         * @param mixed $defaultValue Value to store in the first variable if it's a date
         *
         * @return array the new pair of variables
         */
        public static function swapDateTimeParam($target, $date, $defaultValue)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:70
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayDataById
         *
         * Get stored data set for the a given holiday ID.
         *
         * @return array|null
         */
        public static function getHolidayDataById(string $id)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:27
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayDataById
         *
         * Set stored data set for the a given holiday ID.
         *
         * @return $this|null
         */
        public static function setHolidayDataById(string $id, array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:46
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayData
         *
         * Get stored data set for the current holiday or null if it's not a holiday.
         *
         * @return array|null
         */
        public static function getHolidayData()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:67
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayData
         *
         * Set stored data set for the current holiday, does nothing if it's not a holiday.
         *
         * @return $this|null
         */
        public static function setHolidayData(array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:92
        }
    }
}

namespace Illuminate\Support
{
    class Carbon
    {
        /**
         * @see \Cmixin\BusinessDay::addBusinessDays
         *
         * Add a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::addBusinessDay
         *
         * Add one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::diffInBusinessDays
         *
         * Returns the difference between 2 dates in business days.
         *
         * @param \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface $other other date
         *
         * @return int
         */
        public static function diffInBusinessDays($other = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:144
        }

        /**
         * @see \Cmixin\BusinessDay::getBusinessDaysInMonth
         *
         * Get the number of business days in the current month.
         *
         * @return int
         */
        public static function getBusinessDaysInMonth($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:168
        }

        /**
         * @see \Cmixin\BusinessDay::getMonthBusinessDays
         *
         * Get list of date objects for each business day in the current month.
         *
         * @return array
         */
        public static function getMonthBusinessDays($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::setBusinessDayChecker
         *
         * Checks the date to see if it is a business day (neither a weekend day nor a holiday).
         *
         * @param callable|null $checkCallback
         *
         * @return $this|null
         */
        public static function setBusinessDayChecker(?callable $checkCallback = null)
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:36
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::isBusinessDay
         *
         * Checks the date to see if it is a business day (extra workday or neither a weekend day nor a holiday).
         *
         * @return bool
         */
        public static function isBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:59
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::nextBusinessDay
         *
         * Sets the date to the next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function nextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrNextBusinessDay
         *
         * Sets the date to the current or next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrNextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::previousBusinessDay
         *
         * Sets the date to the previous business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function previousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrPreviousBusinessDay
         *
         * Sets the date to the current or previous business day.
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrPreviousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setObservedHolidaysZone
         *
         * Set the selected zone for observed holidays. So next observe methods will be saved and considered in this
         * given custom zone.
         *
         * @param string $zone
         *
         * @return $this|null
         */
        public static function setObservedHolidaysZone($zone, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:40
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObservedHolidaysZone
         *
         * Get the selected zone for observed holidays.
         *
         * @return string|null
         */
        public static function getObservedHolidaysZone()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:61
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setHolidayObserveStatus
         *
         * Set a holiday as observed/unobserved in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         * @param bool   $observed  observed state
         *
         * @return $this|null
         */
        public static function setHolidayObserveStatus($holidayId, $observed, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:84
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObserveHolidayMethod
         *
         * Set a holiday as observed/unobserved in the selected zone (can take array of holidays).
         *
         * @param string|array $holidayId ID key of the holiday
         * @param bool         $observed  observed state
         *
         * @return $this|null
         */
        public static function getObserveHolidayMethod($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHoliday
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function observeHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHoliday
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function unobserveHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHolidays
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function observeHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHolidays
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function unobserveHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function observeAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function unobserveAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::checkObservedHoliday
         *
         * Check if a given holiday ID is observed in the selected zone.
         *
         * @param string|false|null $holidayId
         *
         * @return bool
         */
        public static function checkObservedHoliday($holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:254
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::isObservedHoliday
         *
         * Checks the date to see if it is a holiday observed in the selected zone.
         *
         * @param string $holidayId holiday ID to check (current date used instead if omitted)
         *
         * @return bool
         */
        public static function isObservedHoliday($holidayId = null, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:286
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setHolidayGetter
         *
         * Set the strategy to get the holiday ID from a date object.
         *
         * @param callable|null $holidayGetter
         *
         * @return $this|null
         */
        public static function setHolidayGetter(callable $holidayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setExtraWorkdayGetter
         *
         * Set the strategy to get the extra workday ID from a date object.
         *
         * @param callable|null $workdayGetter
         *
         * @return $this|null
         */
        public static function setExtraWorkdayGetter(callable $workdayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:82
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getDBDayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getDBDayId(string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:103
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getHolidayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:138
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isHoliday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isHoliday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:166
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getExtraWorkdayId
         *
         * Get the identifier of the current special workday or false if it's not a special workday.
         *
         * @return string|false
         */
        public static function getExtraWorkdayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isExtraWorkday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isExtraWorkday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:216
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayNamesDictionary
         *
         * Get the holidays in the given language.
         *
         * @param string $locale language
         *
         * @return array
         */
        public static function getHolidayNamesDictionary($locale)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayName
         *
         * Get the name of the current holiday (using the locale given in parameter or the current date locale)
         * or false if it's not a holiday.
         *
         * @param string $locale language ("en" by default)
         *
         * @return string|false
         */
        public static function getHolidayName($date = null, $locale = null)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:280
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidays
         *
         * Get the holidays dates for a given year (current year if no parameter given).
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return array
         */
        public static function getYearHolidays($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:26
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidaysNextFunction
         *
         * Get a next() callback to call to iterate over holidays of a year.
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return callable
         */
        public static function getYearHolidaysNextFunction($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::standardizeHolidaysRegion
         *
         * Return a standardized region name.
         *
         * @param string $region
         *
         * @return string
         */
        public static function standardizeHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:45
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysAvailableRegions
         *
         * Get the current holidays region.
         *
         * @return array
         */
        public static function getHolidaysAvailableRegions()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:66
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidaysRegion
         *
         * Set the holidays region (see src/Cmixin/Holidays for examples).
         *
         * @param string $region
         */
        public static function setHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:94
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysRegion
         *
         * Get the current holidays region.
         *
         * @return null|string
         */
        public static function getHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:143
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getBDDaysList
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getBDDaysList(string $list, $region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:164
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getHolidays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:197
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setHolidays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:217
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getExtraWorkdays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getExtraWorkdays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setExtraWorkdays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setExtraWorkdays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:261
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::resetHolidays
         *
         * Reset the holidays list.
         */
        public static function resetHolidays()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:281
        }

        public static function initializeHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:309
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushToBDList
         *
         * Push a day into a given list list of a region.
         *
         * @param string          $list   List ID
         * @param string          $region region where the holiday is observed
         * @param string|\Closure $day    date or closure that get the year as parameter and returns the date
         * @param string          $dayId  optional day ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushToBDList(string $list, $region, $day, $dayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:333
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushHoliday
         *
         * Push a holiday to the holidays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushHoliday($region, $holiday, $holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:363
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushWorkday
         *
         * Push a workday to the workdays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional workday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushWorkday($region, $workday, $workdayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:388
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidayName
         *
         * Set/change the name of holiday by ID for a given language (or a list of languages).
         *
         * @param string       $holidayKey holiday ID (identifier key)
         * @param string|array $language   language 2-chars code (or an array with languages codes as keys and new names for each language as value).
         * @param string       $name       new name (ignored if $language is an array)
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function setHolidayName($holidayKey = null, $language = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:413
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHoliday
         *
         * Add a holiday to the holidays list of a region and optionally init its ID, name and observed state.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         * @param string          $name      optional name
         * @param bool            $observed  optional observed state
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addHoliday($region, $holiday, $holidayId = null, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:452
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addExtraWorkday
         *
         * Add a workday to the workdays list of a region and optionally init its ID and name.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional holiday ID
         * @param string          $name      optional name
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addExtraWorkday($region, $workday, $workdayId = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:494
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::unpackHoliday
         *
         * Unpack a holiday array definition.
         *
         * @param array  &$holiday
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function unpackHoliday($holiday, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:522
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::checkHoliday
         *
         * Check a holiday definition and unpack it if it's an array.
         *
         * @param array  &$holiday
         * @param string $holidayId
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function checkHoliday($holiday, $holidayId, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:562
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHolidays
         *
         * Add a holiday to the holidays list of a region and optionally init their IDs, names and observed states (if provided as array-definitions).
         *
         * @param string        $region
         * @param iterable|null $holidays
         * @param iterable|null $workingDays
         */
        public static function addHolidays(string $region, ?iterable $holidays = null, ?iterable $workingDays = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:595
        }

        public static function enable()
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:16
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::isDateTimeInstance
         *
         * Return true if the given value is a DateTime or DateTimeInterface.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function isDateTimeInstance($value)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:49
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::swapDateTimeParam
         *
         * Store a first variable as Carbon instance into the second variable if the first one is a date.
         *
         * @param mixed $target       Target variable that will be replaced by the first one if it's a date
         * @param mixed $date         Variable to check if it's a date (DateTime or DateTimeInterface)
         * @param mixed $defaultValue Value to store in the first variable if it's a date
         *
         * @return array the new pair of variables
         */
        public static function swapDateTimeParam($target, $date, $defaultValue)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:70
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayDataById
         *
         * Get stored data set for the a given holiday ID.
         *
         * @return array|null
         */
        public static function getHolidayDataById(string $id)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:27
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayDataById
         *
         * Set stored data set for the a given holiday ID.
         *
         * @return $this|null
         */
        public static function setHolidayDataById(string $id, array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:46
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayData
         *
         * Get stored data set for the current holiday or null if it's not a holiday.
         *
         * @return array|null
         */
        public static function getHolidayData()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:67
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayData
         *
         * Set stored data set for the current holiday, does nothing if it's not a holiday.
         *
         * @return $this|null
         */
        public static function setHolidayData(array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:92
        }
    }
}

namespace Illuminate\Support\Facades
{
    class Date
    {
        /**
         * @see \Cmixin\BusinessDay::addBusinessDays
         *
         * Add a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::addBusinessDay
         *
         * Add one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function addBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDays
         *
         * Subtract a given number of business days to the current date.
         *
         * @param int $days
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDays($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::subtractBusinessDay
         *
         * Subtract one business day to the current date.
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface
         */
        public static function subtractBusinessDay($days = 1, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:25
        }

        /**
         * @see \Cmixin\BusinessDay::diffInBusinessDays
         *
         * Returns the difference between 2 dates in business days.
         *
         * @param \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface $other other date
         *
         * @return int
         */
        public static function diffInBusinessDays($other = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:144
        }

        /**
         * @see \Cmixin\BusinessDay::getBusinessDaysInMonth
         *
         * Get the number of business days in the current month.
         *
         * @return int
         */
        public static function getBusinessDaysInMonth($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:168
        }

        /**
         * @see \Cmixin\BusinessDay::getMonthBusinessDays
         *
         * Get list of date objects for each business day in the current month.
         *
         * @return array
         */
        public static function getMonthBusinessDays($date = null)
        {
            // Content, see src/Cmixin/BusinessDay.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::setBusinessDayChecker
         *
         * Checks the date to see if it is a business day (neither a weekend day nor a holiday).
         *
         * @param callable|null $checkCallback
         *
         * @return $this|null
         */
        public static function setBusinessDayChecker(?callable $checkCallback = null)
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:36
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::isBusinessDay
         *
         * Checks the date to see if it is a business day (extra workday or neither a weekend day nor a holiday).
         *
         * @return bool
         */
        public static function isBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:59
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::nextBusinessDay
         *
         * Sets the date to the next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function nextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrNextBusinessDay
         *
         * Sets the date to the current or next business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrNextBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::previousBusinessDay
         *
         * Sets the date to the previous business day (neither a weekend day nor a holiday).
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function previousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:86
        }

        /**
         * @see \Cmixin\BusinessDay\BusinessCalendar::currentOrPreviousBusinessDay
         *
         * Sets the date to the current or previous business day.
         *
         * @return \Carbon\CarbonInterface|\Carbon\Carbon|\Carbon\CarbonImmutable
         */
        public static function currentOrPreviousBusinessDay()
        {
            // Content, see src/Cmixin/BusinessDay/BusinessCalendar.php:112
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setObservedHolidaysZone
         *
         * Set the selected zone for observed holidays. So next observe methods will be saved and considered in this
         * given custom zone.
         *
         * @param string $zone
         *
         * @return $this|null
         */
        public static function setObservedHolidaysZone($zone, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:40
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObservedHolidaysZone
         *
         * Get the selected zone for observed holidays.
         *
         * @return string|null
         */
        public static function getObservedHolidaysZone()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:61
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::setHolidayObserveStatus
         *
         * Set a holiday as observed/unobserved in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         * @param bool   $observed  observed state
         *
         * @return $this|null
         */
        public static function setHolidayObserveStatus($holidayId, $observed, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:84
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::getObserveHolidayMethod
         *
         * Set a holiday as observed/unobserved in the selected zone (can take array of holidays).
         *
         * @param string|array $holidayId ID key of the holiday
         * @param bool         $observed  observed state
         *
         * @return $this|null
         */
        public static function getObserveHolidayMethod($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHoliday
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function observeHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHoliday
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param string $holidayId ID key of the holiday
         *
         * @return $this|null
         */
        public static function unobserveHoliday($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeHolidays
         *
         * Set a holiday as observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function observeHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveHolidays
         *
         * Set a holiday as not observed in the selected zone.
         *
         * @param array $holidayIds ID keys of the holidays
         *
         * @return $this|null
         */
        public static function unobserveHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::observeAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function observeAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::unobserveAllHolidays
         *
         * Set all holidays as observed in the selected zone.
         *
         * @return $this|null
         */
        public static function unobserveAllHolidays($holidayId = null, $observed = null, $self = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:119
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::checkObservedHoliday
         *
         * Check if a given holiday ID is observed in the selected zone.
         *
         * @param string|false|null $holidayId
         *
         * @return bool
         */
        public static function checkObservedHoliday($holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:254
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayObserver::isObservedHoliday
         *
         * Checks the date to see if it is a holiday observed in the selected zone.
         *
         * @param string $holidayId holiday ID to check (current date used instead if omitted)
         *
         * @return bool
         */
        public static function isObservedHoliday($holidayId = null, $date = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayObserver.php:286
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setHolidayGetter
         *
         * Set the strategy to get the holiday ID from a date object.
         *
         * @param callable|null $holidayGetter
         *
         * @return $this|null
         */
        public static function setHolidayGetter(callable $holidayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::setExtraWorkdayGetter
         *
         * Set the strategy to get the extra workday ID from a date object.
         *
         * @param callable|null $workdayGetter
         *
         * @return $this|null
         */
        public static function setExtraWorkdayGetter(callable $workdayGetter)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:82
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getDBDayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getDBDayId(string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:103
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayId
         *
         * Get the identifier of the current holiday or false if it's not a holiday.
         *
         * @return string|false
         */
        public static function getHolidayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:138
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isHoliday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isHoliday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:166
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getExtraWorkdayId
         *
         * Get the identifier of the current special workday or false if it's not a special workday.
         *
         * @return string|false
         */
        public static function getExtraWorkdayId()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:188
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::isExtraWorkday
         *
         * Checks the date to see if it is a holiday.
         *
         * @return bool
         */
        public static function isExtraWorkday()
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:216
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayNamesDictionary
         *
         * Get the holidays in the given language.
         *
         * @param string $locale language
         *
         * @return array
         */
        public static function getHolidayNamesDictionary($locale)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\Holiday::getHolidayName
         *
         * Get the name of the current holiday (using the locale given in parameter or the current date locale)
         * or false if it's not a holiday.
         *
         * @param string $locale language ("en" by default)
         *
         * @return string|false
         */
        public static function getHolidayName($date = null, $locale = null)
        {
            // Content, see src/Cmixin/BusinessDay/Holiday.php:280
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidays
         *
         * Get the holidays dates for a given year (current year if no parameter given).
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return array
         */
        public static function getYearHolidays($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:26
        }

        /**
         * @see \Cmixin\BusinessDay\YearCrawler::getYearHolidaysNextFunction
         *
         * Get a next() callback to call to iterate over holidays of a year.
         *
         * @param int    $year    input year, year of the current instance or context used if omitted, current year used if omitted and called statically
         * @param string $type    can be 'string' (to return dates as string) or a class name to returns instances of this class
         * @param string $getDays macro method to retrieve the days list
         *
         * @return callable
         */
        public static function getYearHolidaysNextFunction($year = null, $type = null, string $getDays = 'getHolidays')
        {
            // Content, see src/Cmixin/BusinessDay/YearCrawler.php:57
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::standardizeHolidaysRegion
         *
         * Return a standardized region name.
         *
         * @param string $region
         *
         * @return string
         */
        public static function standardizeHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:45
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysAvailableRegions
         *
         * Get the current holidays region.
         *
         * @return array
         */
        public static function getHolidaysAvailableRegions()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:66
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidaysRegion
         *
         * Set the holidays region (see src/Cmixin/Holidays for examples).
         *
         * @param string $region
         */
        public static function setHolidaysRegion($region)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:94
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidaysRegion
         *
         * Get the current holidays region.
         *
         * @return null|string
         */
        public static function getHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:143
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getBDDaysList
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getBDDaysList(string $list, $region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:164
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getHolidays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getHolidays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:197
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setHolidays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:217
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::getExtraWorkdays
         *
         * Get the holidays for the current region selected.
         *
         * @param string $region
         *
         * @return array
         */
        public static function getExtraWorkdays($region = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:241
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setExtraWorkdays
         *
         * Set the holidays list.
         *
         * @param string $region
         * @param array  $holidays
         */
        public static function setExtraWorkdays($region, $holidays)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:261
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::resetHolidays
         *
         * Reset the holidays list.
         */
        public static function resetHolidays()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:281
        }

        public static function initializeHolidaysRegion()
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:309
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushToBDList
         *
         * Push a day into a given list list of a region.
         *
         * @param string          $list   List ID
         * @param string          $region region where the holiday is observed
         * @param string|\Closure $day    date or closure that get the year as parameter and returns the date
         * @param string          $dayId  optional day ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushToBDList(string $list, $region, $day, $dayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:333
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushHoliday
         *
         * Push a holiday to the holidays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushHoliday($region, $holiday, $holidayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:363
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::pushWorkday
         *
         * Push a workday to the workdays list of a region.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional workday ID
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function pushWorkday($region, $workday, $workdayId = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:388
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::setHolidayName
         *
         * Set/change the name of holiday by ID for a given language (or a list of languages).
         *
         * @param string       $holidayKey holiday ID (identifier key)
         * @param string|array $language   language 2-chars code (or an array with languages codes as keys and new names for each language as value).
         * @param string       $name       new name (ignored if $language is an array)
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function setHolidayName($holidayKey = null, $language = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:413
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHoliday
         *
         * Add a holiday to the holidays list of a region and optionally init its ID, name and observed state.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $holiday   date or closure that get the year as parameter and returns the date
         * @param string          $holidayId optional holiday ID
         * @param string          $name      optional name
         * @param bool            $observed  optional observed state
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addHoliday($region, $holiday, $holidayId = null, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:452
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addExtraWorkday
         *
         * Add a workday to the workdays list of a region and optionally init its ID and name.
         *
         * @param string          $region    region where the holiday is observed.
         * @param string|\Closure $workday   date or closure that get the year as parameter and returns the date
         * @param string          $workdayId optional holiday ID
         * @param string          $name      optional name
         *
         * @return \Carbon\Carbon|\Carbon\CarbonImmutable|\Carbon\CarbonInterface|null
         */
        public static function addExtraWorkday($region, $workday, $workdayId = null, $name = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:494
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::unpackHoliday
         *
         * Unpack a holiday array definition.
         *
         * @param array  &$holiday
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function unpackHoliday($holiday, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:522
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::checkHoliday
         *
         * Check a holiday definition and unpack it if it's an array.
         *
         * @param array  &$holiday
         * @param string $holidayId
         * @param string &$name
         * @param bool   &$observed
         *
         * @return array
         */
        public static function checkHoliday($holiday, $holidayId, $name = null, $observed = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:562
        }

        /**
         * @see \Cmixin\BusinessDay\HolidaysList::addHolidays
         *
         * Add a holiday to the holidays list of a region and optionally init their IDs, names and observed states (if provided as array-definitions).
         *
         * @param string        $region
         * @param iterable|null $holidays
         * @param iterable|null $workingDays
         */
        public static function addHolidays(string $region, ?iterable $holidays = null, ?iterable $workingDays = null)
        {
            // Content, see src/Cmixin/BusinessDay/HolidaysList.php:595
        }

        public static function enable()
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:16
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::isDateTimeInstance
         *
         * Return true if the given value is a DateTime or DateTimeInterface.
         *
         * @param mixed $value
         *
         * @return bool
         */
        public static function isDateTimeInstance($value)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:49
        }

        /**
         * @see \Cmixin\BusinessDay\MixinBase::swapDateTimeParam
         *
         * Store a first variable as Carbon instance into the second variable if the first one is a date.
         *
         * @param mixed $target       Target variable that will be replaced by the first one if it's a date
         * @param mixed $date         Variable to check if it's a date (DateTime or DateTimeInterface)
         * @param mixed $defaultValue Value to store in the first variable if it's a date
         *
         * @return array the new pair of variables
         */
        public static function swapDateTimeParam($target, $date, $defaultValue)
        {
            // Content, see src/Cmixin/BusinessDay/MixinBase.php:70
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayDataById
         *
         * Get stored data set for the a given holiday ID.
         *
         * @return array|null
         */
        public static function getHolidayDataById(string $id)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:27
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayDataById
         *
         * Set stored data set for the a given holiday ID.
         *
         * @return $this|null
         */
        public static function setHolidayDataById(string $id, array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:46
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::getHolidayData
         *
         * Get stored data set for the current holiday or null if it's not a holiday.
         *
         * @return array|null
         */
        public static function getHolidayData()
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:67
        }

        /**
         * @see \Cmixin\BusinessDay\HolidayData::setHolidayData
         *
         * Set stored data set for the current holiday, does nothing if it's not a holiday.
         *
         * @return $this|null
         */
        public static function setHolidayData(array $data)
        {
            // Content, see src/Cmixin/BusinessDay/HolidayData.php:92
        }
    }
}
