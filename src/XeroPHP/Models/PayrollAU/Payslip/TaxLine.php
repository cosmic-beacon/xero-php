<?php

namespace XeroPHP\Models\PayrollAU\Payslip;

use XeroPHP\Remote;


class TaxLine extends Remote\Object {

    /**
     * Name of the tax type
     *
     * @property string TaxTypeName
     */

    /**
     * Description of the tax line
     *
     * @property string Description
     */

    /**
     * The tax line amount
     *
     * @property float Amount
     */

    /**
     * The tax line liability account code. For posted pay run you should be able to see liability account
     * code
     *
     * @property string LiabilityAccount
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'TaxLine';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'TaxLine';
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
            'TaxTypeName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Amount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'LiabilityAccount' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getTaxTypeName() {
        return isset($this->_data['TaxTypeName']) ? $this->_data['TaxTypeName'] : null;
    }

    /**
     * @param string $value
     * @return TaxLine
     */
    public function setTaxTypeName($value) {
        $this->propertyUpdated('TaxTypeName', $value);
        $this->_data['TaxTypeName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return isset($this->_data['Description']) ? $this->_data['Description'] : null;
    }

    /**
     * @param string $value
     * @return TaxLine
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount() {
        return isset($this->_data['Amount']) ? $this->_data['Amount'] : null;
    }

    /**
     * @param float $value
     * @return TaxLine
     */
    public function setAmount($value) {
        $this->propertyUpdated('Amount', $value);
        $this->_data['Amount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiabilityAccount() {
        return isset($this->_data['LiabilityAccount']) ? $this->_data['LiabilityAccount'] : null;
    }

    /**
     * @param string $value
     * @return TaxLine
     */
    public function setLiabilityAccount($value) {
        $this->propertyUpdated('LiabilityAccount', $value);
        $this->_data['LiabilityAccount'] = $value;
        return $this;
    }


}