<?php get_header(); ?>
<div id="posts">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php //the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?>, <?php the_time() ?> <!-- by <?php the_author() ?> --> @ <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?></small>
<?php the_content('Read more &raquo;'); ?>
<p><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?> | <small><?php //the_tags(__('Tags: '), ', ', ''); ?></small></p>
<?php endwhile; ?>
<div id="navigation">
<div id="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div id="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>
<?php else : ?>
<h2>Nothing found</h2>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
