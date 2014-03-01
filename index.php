<?php get_header(); ?>

	<div id="content" class="narrowcolumn index">

	<?php if (have_posts()) : ?>

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
				
				<!--<p class="postmetadata" style="display:inline;">
 
<?php comments_popup_link(__('0', "minimahl"), __('1', "minimahl"), __('%', "minimahl"), '', __('Comments Closed', "minimahl") ); ?>

				</p>-->

				<div class="entry entry<?php the_ID(); ?>">
					<?php the_content(__('Read the rest of this entry &raquo;', "minimahl")); ?>
				</div>
			</div>
<hr>
		<?php endwhile; ?>

		<div class="indexnavnavigation" style="margin: 55px 0 45px 0;">
			<div class="alignleft" style="margin-right: 10px;"><?php next_posts_link(__('&laquo; Older Entries', "minimahl")) ?></div> 
			<div ><?php previous_posts_link(__('Newer Entries &raquo;', "minimahl")) ?></div>
		</div>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found', "minimahl"); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', "minimahl"); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
