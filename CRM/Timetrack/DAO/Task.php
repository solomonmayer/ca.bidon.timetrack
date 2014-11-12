<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Timetrack/Task.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Timetrack_DAO_Task extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'ktask';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   * Task Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Case to which this task is associated.
   *
   * @var int unsigned
   */
  public $case_id;
  /**
   * Activity to which this task is associated.
   *
   * @var int unsigned
   */
  public $activity_id;
  /**
   * Task lead.
   *
   * @var int unsigned
   */
  public $lead;
  /**
   * Start (planned or actual) of the task.
   *
   * @var int unsigned
   */
  public $begin;
  /**
   * End (planned or actual) of the task.
   *
   * @var int unsigned
   */
  public $end;
  /**
   * Estimate (in hours) of the task.
   *
   * @var int unsigned
   */
  public $estimate;
  /**
   * Task status.
   *
   * @var int unsigned
   */
  public $state;
  /**
   * Task title, short description.
   *
   * @var string
   */
  public $title;
  /**
   * class constructor
   *
   * @access public
   * @return ktask
   */
  function __construct()
  {
    $this->__table = 'ktask';
    parent::__construct();
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'timetrack_task_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Timetrack Task ID') ,
          'required' => true,
        ) ,
        'case_id' => array(
          'name' => 'case_id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'activity_id' => array(
          'name' => 'activity_id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'lead' => array(
          'name' => 'lead',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Lead') ,
          'required' => true,
        ) ,
        'begin' => array(
          'name' => 'begin',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Begin') ,
          'required' => true,
        ) ,
        'end' => array(
          'name' => 'end',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('End') ,
          'required' => false,
        ) ,
        'estimate' => array(
          'name' => 'estimate',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Estimate') ,
          'required' => false,
        ) ,
        'state' => array(
          'name' => 'state',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('State') ,
          'required' => false,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'timetrack_task_id',
        'case_id' => 'case_id',
        'activity_id' => 'activity_id',
        'lead' => 'lead',
        'begin' => 'begin',
        'end' => 'end',
        'estimate' => 'estimate',
        'state' => 'state',
        'title' => 'title',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import[''] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export[''] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}