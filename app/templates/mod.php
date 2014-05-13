<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - <%= currentYear %>, EllisLab, Inc.
 * @license     http://expressionengine.com/user_guide/license.html
 * @link        http://expressionengine.com
 * @since       Version 2.0
 * @filesource
 */

/**
 * <%= addonName %> Module Front End File
 *
 * @package    ExpressionEngine
 * @subpackage Addons
 * @category   Module
 * @author     <%= authorName %>
 * @link       <%= authorUrl %>
 */
class <%= _.capitalize(addonSlug) %>
{
  public $return_data;

  /**
   * Constructor
   */
  public function __construct()
  {

  }
}
/* End of file mod.<%= addonSlug %>.php */
/* Location: /system/expressionengine/third_party/<%= addonSlug %>/mod.<%= addonSlug %>.php */