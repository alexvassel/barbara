<?php
                $post_type = 'banner';
                //Number of posts to display
                $post_count = 1;
                $args = array( 'post_type' => $post_type,
                                'posts_per_page' => $post_count);
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
<div class="home_calltoaction home-margin clearfix home-padding">
	<div class="kt-home-call-to-action panel-row-style-wide-feature">
		<div class="call-container clearfix">
			<div class="kt-cta">
				<div class="col-md-10 kad-call-title-case">
					<h1 class="kad-call-title"><?php the_title();?></h1>
				</div>
				<div class="col-md-2 kad-call-button-case">
					<a href="<?php echo get_field('link');?>" class="kad-btn-primary kad-btn lg-kad-btn"><?php echo get_field('text');?></a>   	
				</div>
			</div>
		</div><!--container-->
	</div><!--call class-->
</div>
<?php
                endwhile;
            ?>
