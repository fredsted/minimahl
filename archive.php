<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', "minimahl"), single_cat_title('', false)); ?></h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;', "minimahl"), single_tag_title('', false) ); ?></h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="pagetitle"><?php printf(_c('Archive for %s|Daily archive page', "minimahl"), get_the_time(__('F jS, Y', "minimahl"))); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="pagetitle"><?php printf(_c('Archive for %s|Monthly archive page', "minimahl"), get_the_time(__('F, Y', "minimahl"))); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle"><?php printf(_c('Archive for %s|Yearly archive page', "minimahl"), get_the_time(__('Y', "minimahl"))); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle"><?php _e('Author Archive', "minimahl"); ?></h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle"><?php _e('Blog Archives', "minimahl"); ?></h1>
 	  <?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', "minimahl")); ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', "minimahl")); ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', "minimahl"), the_title_attribute('echo=0')); ?>">
						<span class="littledate">
							<?php the_time(__('M j', "minimahl")) ?>
						</span>
						
						<span class="littlecom">
							<?php comments_number("0","1","%"); ?>
							<img src="/wp-content/themes/minimahl/comments.png" style="margin-top:4px;" border="0" />
						</span>
				
				<?php the_title(); ?>
			</a></h2>

				<div class="entry">
					<?php the_content(__('Read the rest of this entry &raquo;', "minimahl")); ?>
				</div>

				<p class="postmetadata">
<?php the_tags(__('Tags:', "minimahl") . ' ', ', ', '<br />'); ?> 
 
Posted on  <?php the_time(__('F jS, Y', "minimahl")) ?> 
| 
<?php edit_post_link(__('Edit', "minimahl"), '', ' | '); ?>  

<?php comments_popup_link(__('No Comments &#187;', "minimahl"), __('1 Comment &#187;', "minimahl"), __('% Comments &#187;', "minimahl"), '', __('Comments Closed', "minimahl") ); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries'), "minimahl"); ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', "minimahl")); ?></div>
		</div>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found', "minimahl"); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
