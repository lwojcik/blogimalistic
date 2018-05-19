<div id="sidebar">
<div id="searchbox"><form method="get" action="<?php bloginfo('url'); ?>">
<div><input type="text" value="search" name="s" id="s" onfocus="if(this.value=='search')value=''" onblur="if(this.value=='')value='search';" /></div>
</form></div>
<ul>
<li><ul id="rss">
<li><a href="<?php bloginfo('rss2_url'); ?>">Entries</a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>
</ul>
</li>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<li><h2>Pages</h2><ul>
 <li><a href="<?php bloginfo('url'); ?>/">Main</a></li>
<?php wp_list_pages('title_li='); ?></ul></li>
<li><h2>Archives</h2><ul><?php wp_get_archives('title_li=<h2>' . __('Archives') . '</h2>' ); ?></ul></li>
<?php wp_list_categories('title_li=<h2>' . __('Categories') . '</h2>' ); ?>
<?php get_links_list('id'); ?>
<?php endif; ?>
</ul>
</div>

