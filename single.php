<?php get_header(); ?>
<div id="posts">
<div id="entry-body">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time(' F jS, Y') ?>, <?php the_time() ?> <!-- by <?php the_author() ?> --> @ <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ''); ?></small>
<?php the_content('Read more &raquo;'); ?>
<small><?php the_tags('Tags: ', ', ', '<br />'); ?></small>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
<p><?php comments_rss_link('Feed for this entry'); ?> | <a href="<?php trackback_url(); ?>" rel="trackback">Trackback <abbr title="Uniform Resource Identifier">URI</abbr></a></p>
<?php comments_template(); ?>
<?php endwhile; else: ?>
<h2>Nothing found</h2>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
