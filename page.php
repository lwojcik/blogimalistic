<?php get_header(); ?>
<div id="posts">
<div id="entry-body">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content('Read more &raquo;'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<?php endwhile; endif; ?>
</div>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>