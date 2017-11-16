<?php
/**
 * Part of the Joomla Framework Form Package
 *
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Form;

FormHelper::loadFieldClass('text');

/**
 * Form Field class for the Joomla Framework.
 * Supports a text field telephone numbers.
 *
 * @link        http://www.w3.org/TR/html-markup/input.tel.html
 * @see         JFormRuleTel for telephone number validation
 * @see         JHtmlTel for rendering of telephone numbers
 * @since       1.0
 * @deprecated  The joomla/form package is deprecated
 */
class Field_Tel extends Field_Text
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $type = 'Tel';
}
