<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class ContactGroup extends Remote\Object {

    /**
     * The Name of the contact group. Required when creating a new contact group
     *
     * @property string Name
     */

    /**
     * The Status of a contact group. To delete a contact group update the status to DELETED. Only contact
     * groups with a status of ACTIVE are returned on GETs.
     *
     * @property string Status
     */

    /**
     * The Xero identifier for an contact group – specified as a string following the endpoint name.
e.g.
     * /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @property string ContactGroupID
     */

    /**
     * The ContactID and Name of Contacts in a contact group. Returned on GETs when the ContactGroupID is
     * supplied in the URL.
     *
     * @property Contact[] Contacts
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ContactGroups';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'ContactGroup';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'ContactGroupID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_DELETE
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
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ContactGroupID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Contacts' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Contact', true, true)
        );
    }


    /**
     * @return string
     */
    public function getName() {
        return isset($this->_data['Name']) ? $this->_data['Name'] : null;
    }

    /**
     * @param string $value
     * @return ContactGroup
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
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
     * @return ContactGroup
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactGroupID() {
        return isset($this->_data['ContactGroupID']) ? $this->_data['ContactGroupID'] : null;
    }

    /**
     * @param string $value
     * @return ContactGroup
     */
    public function setContactGroupID($value) {
        $this->propertyUpdated('ContactGroupID', $value);
        $this->_data['ContactGroupID'] = $value;
        return $this;
    }

    /**
     * @return Contact[]
     */
    public function getContacts() {
        return isset($this->_data['Contacts']) ? $this->_data['Contacts'] : null;
    }

    /**
     * @param Contact $value
     * @return ContactGroup
     */
    public function addContact(Contact $value) {
        $this->propertyUpdated('Contacts', $value);
        $this->_data['Contacts'][] = $value;
        return $this;
    }


}