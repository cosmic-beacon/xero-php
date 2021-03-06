<?php

namespace XeroPHP\Models\PayrollUS\Paystub;

use XeroPHP\Remote;


class TimesheetEarningsLine extends Remote\Object {

    /**
     * Xero identifier for payroll earnings type.
     *
     * @property string EarningsTypeID
     */

    /**
     * Rate per unit for earnings type
     *
     * @property float RatePerUnit
     */

    /**
     * Earnings rate number of units.
     *
     * @property float[] NumberOfUnits
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'TimesheetEarningsLine';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'TimesheetEarningsLine';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return '';
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
            'EarningsTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'RatePerUnit' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'NumberOfUnits' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false)
        );
    }


    /**
     * @return string
     */
    public function getEarningsTypeID() {
        return isset($this->_data['EarningsTypeID']) ? $this->_data['EarningsTypeID'] : null;
    }

    /**
     * @param string $value
     * @return TimesheetEarningsLine
     */
    public function setEarningsTypeID($value) {
        $this->propertyUpdated('EarningsTypeID', $value);
        $this->_data['EarningsTypeID'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getRatePerUnit() {
        return isset($this->_data['RatePerUnit']) ? $this->_data['RatePerUnit'] : null;
    }

    /**
     * @param float $value
     * @return TimesheetEarningsLine
     */
    public function setRatePerUnit($value) {
        $this->propertyUpdated('RatePerUnit', $value);
        $this->_data['RatePerUnit'] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getNumberOfUnits() {
        return isset($this->_data['NumberOfUnits']) ? $this->_data['NumberOfUnits'] : null;
    }

    /**
     * @param float $value
     * @return TimesheetEarningsLine
     */
    public function addNumberOfUnit($value) {
        $this->propertyUpdated('NumberOfUnits', $value);
        $this->_data['NumberOfUnits'][] = $value;
        return $this;
    }


}