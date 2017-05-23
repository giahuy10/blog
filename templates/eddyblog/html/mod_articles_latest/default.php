<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : 

?>
	<div itemscope itemtype="https://schema.org/Article" class="row ed-article">
		<div class="col-xs-12 col-sm-4 ed-intro-image ">
			<?php echo JLayoutHelper::render('joomla.content.intro_image', $item); ?>
		</div>
		<div class="col-xs-12 col-sm-8 ed-article-title">
			<a href="<?php echo $item->link; ?>" itemprop="url">
				<span itemprop="name">
					<?php echo $item->title; ?>
				</span>
			</a><br/>
			<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $item->created?>
		</div>
		
	</div>
<?php endforeach; ?>
</div>
