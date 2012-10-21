<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Database
 * @copyright   Copyright 2005 - 2010 Open Source Matters. All rights re-served.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');
$controller = JController::getInstance('test');

$input = JFactory::getApplication()->input;
$controller->execute($input->get('task'));


/* echo "Hello World and all the rest!"; */

?>
