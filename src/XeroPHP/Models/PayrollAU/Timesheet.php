<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Timesheet\TimesheetLine;

class Timesheet extends Remote\Object {

    /**
     * The Xero identifier for an employee
     *
     * @property string EmployeeID
     */

    /**
     * Period start date (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * Period end date (YYYY-MM-DD)
     *
     * @property \DateTime EndDate
     */

    /**
     * See TimesheetLines
     *
     * @property TimesheetLine[] TimesheetLines
     */

    /**
     * See Timesheet Status Codes
     *
     * @property string Status
     */

    /**
     * Timesheet total hours
     *
     * @property string[] Hours
     */

    /**
     * The Xero identifier for a Payroll Timesheet
     *
     * @property string TimesheetID
     */


    const STATUS_DRAFT     = 'DRAFT';
    const STATUS_PROCESSED = 'PROCESSED';
    const STATUS_APPROVED  = 'APPROVED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Timesheets';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Timesheet';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'TimesheetID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_GET
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties() {
        return array(
            'EmployeeID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'StartDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'EndDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'TimesheetLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Timesheet\\TimesheetLine', true, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Hours' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'TimesheetID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getEmployeeID() {
        return isset($this->_data['EmployeeID']) ? $this->_data['EmployeeID'] : null;
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return isset($this->_data['StartDate']) ? $this->_data['StartDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return Timesheet
     */
    public function setStartDate(\DateTime $value) {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return isset($this->_data['EndDate']) ? $this->_data['EndDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return Timesheet
     */
    public function setEndDate(\DateTime $value) {
        $this->propertyUpdated('EndDate', $value);
        $this->_data['EndDate'] = $value;
        return $this;
    }

    /**
     * @return TimesheetLine[]
     */
    public function getTimesheetLines() {
        return isset($this->_data['TimesheetLines']) ? $this->_data['TimesheetLines'] : null;
    }

    /**
     * @param TimesheetLine $value
     * @return Timesheet
     */
    public function addTimesheetLine(TimesheetLine $value) {
        $this->propertyUpdated('TimesheetLines', $value);
        $this->_data['TimesheetLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return isset($this->_data['Status']) ? $this->_data['Status'] : null;
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getHours() {
        return isset($this->_data['Hours']) ? $this->_data['Hours'] : null;
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function addHour($value) {
        $this->propertyUpdated('Hours', $value);
        $this->_data['Hours'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimesheetID() {
        return isset($this->_data['TimesheetID']) ? $this->_data['TimesheetID'] : null;
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setTimesheetID($value) {
        $this->propertyUpdated('TimesheetID', $value);
        $this->_data['TimesheetID'] = $value;
        return $this;
    }


}