<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category_calendar
 *
 * @author     Sebastian Brümmer <sebastian@produktivbuero.de>
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters. All rights reserved.
 * @license    GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

// Include the latest functions only once
JLoader::register('ModArticlesLatestCalendarHelper', __DIR__ . '/helper.php');

$list            = ModArticlesLatestCalendarHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

// START INSERT: Sebastian Brümmer - 2018-10-22 - load custom css
$doc = JFactory::getDocument(); 
$doc->addStyleSheet('media/mod_articles_category_calendar/css/calendar.css');
// END INSERT: Sebastian Brümmer - 2018-10-22 - load custom css

require JModuleHelper::getLayoutPath('mod_articles_category_calendar', $params->get('layout', 'default'));
