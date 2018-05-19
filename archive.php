<?php get_header(); ?>
<div id="posts">
<?php is_tag(); ?>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; ?>
<?php if (is_category()) { ?>
<h2 style="text-align:center">Archive: <?php single_cat_title(); ?></h2>
<?php } elseif( is_tag() ) { ?>
<h2 style="text-align:center">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
<?php  } elseif (is_day()) { ?>
<h2 style="text-align:center">Archive: <?php the_time('F jS, Y'); ?></h2>
<?php } elseif (is_month()) { ?>
<h2 style="text-align:center">Archive: <?php the_time('F, Y'); ?></h2>
<?php } elseif (is_year()) { ?>
<h2 style="text-align:center">Archive: <?php the_time('Y'); ?></h2>
<?php } elseif (is_author()) { ?>
<h2 style="text-align:center">Author Archive</h2>
<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 style="text-align:center">Blog Archives</h2>
<?php } ?>
<div id="entry-body">
<?php while (have_posts()) : the_post(); ?>
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?>, <?php the_time() ?> <!-- by <?php the_author() ?> --> @ <?php the_category(', ') ?></small>
<?php the_content('Read more &raquo;'); ?>
<p><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?> | <small><?php the_tags(__('Tags: '), ', ', ''); ?></small></p>
<?php endwhile; ?>
</div>
<div id="navigation">
<div id="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div id="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div></div>
<?php else : ?>
<h2>Nothing found</h2>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
