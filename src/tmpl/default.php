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
?>
<ul class="latest-calendar-news<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
	<li itemscope itemtype="https://schema.org/Article">
    
    <time datetime="<?php echo JHtml::_('date', $item->created, 'c'); ?>" itemprop="dateCreated">
      <span class="date-year"><?php echo JHtml::_('date', $item->created, 'Y'); ?></span>
      <span class="date-day"><?php echo JHtml::_('date', $item->created, 'd'); ?></span>
      <span class="date-month"><?php echo JHtml::_('date', $item->created, 'F'); ?></span>
    </time>

		<h2 itemprop="name">
      <a href="<?php echo $item->link; ?>" itemprop="url">
  			<?php echo $item->title; ?>
  		</a>
    </h2>
	</li>
<?php endforeach; ?>
</ul>
