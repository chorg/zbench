<?php get_header(); ?>
<div id="content">
	<?php the_post(); ?>
	<div <?php post_class('post-single'); ?> id="post-<?php the_ID(); ?>"><!-- post div -->
		<h2 class="title"><?php the_title(); ?></h2>
		<div class="post-info-top">
			<span class="post-info-date">
				<?php _e('Posted by', 'zbench'); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( __( 'View all posts by %s', 'zbench' ), get_the_author() ) ?>" rel="author"><?php the_author(); ?></a>
				<?php _e('on', 'zbench'); ?>
				<?php the_time(get_option( 'date_format' )); ?>
				<?php edit_post_link(__('Edit','zbench'), '[', ']'); ?>
			</span>
<!-- JiaThis Button BEGIN -->
<div class="jiathis_style" style="float:left;">
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_xiaoyou"></a>
	<a class="jiathis_button_cqq"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">更多</a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=undefined" charset="utf-8"></script>
<!-- JiaThis Button END -->
			<?php if (comments_open()) : ?>
			<span class="addcomment"><a href="#respond"  rel="nofollow" title="<?php _e('Leave a comment ?', 'zbench'); ?>"><?php _e('Leave a comment', 'zbench'); ?></a><?php comments_number(' (0)', ' (1)', ' (%)'); ?></span>
			<span class="gotocomments"><a href="#comments"  rel="nofollow" title="<?php _e('Go to comments ?', 'zbench'); ?>"><?php _e('Go to comments', 'zbench'); ?></a></span>
			<?php endif; ?>
		</div>
		<div class="clear"></div>
		<div class="entry">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page_link"><strong>' . __( 'Pages:', 'zbench' ) . '</strong>' , 'after' => '</div>' ) ); ?>
		</div><!-- END entry -->
		<div class="add-info">
			<?php if(function_exists('st_related_posts')) { st_related_posts('title=<h3>'._e('Related Posts','zbench').'</h3>'); } ?>
		</div>
		<div class="post-info-bottom">
			<span class="post-info-category"><?php the_category(', '); ?></span><span class="post-info-tags"><?php the_tags('', ', ', ''); ?></span>
		</div>
		<div id="nav-below">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ); ?></div>
		</div><!-- #nav-below -->					
	</div><!-- END post -->
	<center><a href="http://900100.400gb.com" target="_blank" title=""><img src="http://www.cnhacker.org/img/600.jpg" /></a></center>	
	<?php comments_template( '', true ); ?>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>